<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Konsultasi;
use App\Models\DetailKonsultasi;

class KonsultasiController extends Controller
{
    /* =======================
     * STEP 1 - IDENTITAS
     * ======================= */
    public function step1()
    {
        return view('konsultasi.step1', [
            'step' => 1,
            'pasien' => session('pasien')
        ]);
    }

    public function step1Submit(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|in:L,P',
            'nim' => 'required|string|max:20',
        ]);

        session(['pasien' => $request->only([
            'nim',
            'nama_mahasiswa',
            'umur',
            'jenis_kelamin'
        ])]);

        return redirect()->route('konsultasi.step2');
    }

    /* =======================
     * STEP 2 - GEJALA
     * ======================= */
    public function step2()
    {
        return view('konsultasi.step2', [
            'step' => 2,
            'gejala' => Gejala::all(),
            'jawaban' => session('jawaban_gejala', [])
        ]);
    }

    public function step2Submit(Request $request)
    {
        $request->validate([
            'gejala_id' => 'required|array',
            'cf_user' => 'required|array',
        ]);

        $jawaban = [];
        foreach ($request->gejala_id as $index => $id) {
            $jawaban[] = [
                'gejala_id' => $id,
                'cf_user' => $request->cf_user[$index] / 100
            ];
        }

        session(['jawaban_gejala' => $jawaban]);

        return redirect()->route('konsultasi.step3');
    }

    /* =======================
     * STEP 3 - REVIEW
     * ======================= */
    public function step3()
    {
        $jawaban = session('jawaban_gejala', []);
        $gejala = Gejala::whereIn('id', array_column($jawaban, 'gejala_id'))->get();

        return view('konsultasi.step3', [
            'step' => 3,
            'pasien' => session('pasien'),
            'gejala_selected' => $gejala,
            'jawaban_gejala' => $jawaban
        ]);
    }

    public function step3Submit()
    {
        return redirect()->route('konsultasi.step4');
    }

    /* =======================
     * STEP 4 - PREVIEW HASIL
     * ======================= */
    public function step4()
    {
        $jawaban = session('jawaban_gejala', []);
        $penyakit_all = Penyakit::with('gejala')->get();

        $hasil_cf = [];

        foreach ($penyakit_all as $penyakit) {
            $cf_combined = 0;

            foreach ($penyakit->gejala as $g) {
                foreach ($jawaban as $j) {
                    if ($g->id == $j['gejala_id']) {
                        $cf = $j['cf_user'] * ($g->pivot->cf_pakar ?? 0);

                        $cf_combined = ($cf_combined == 0)
                            ? $cf
                            : $cf_combined + $cf * (1 - $cf_combined);
                    }
                }
            }

            $hasil_cf[] = [
                'penyakit' => $penyakit,
                'cf_total' => $cf_combined
            ];
        }

        usort($hasil_cf, fn($a, $b) => $b['cf_total'] <=> $a['cf_total']);
        $tertinggi = $hasil_cf[0] ?? null;

        session(['hasil_preview' => $tertinggi]);

        return view('konsultasi.step4', [
            'step' => 4,
            'hasil' => [
                'penyakit' => $tertinggi['penyakit']->nama_penyakit ?? 'Tidak Terdiagnosis',
                'cf_total' => $tertinggi['cf_total'] ?? 0,
                'rekomendasi' => $tertinggi['penyakit']->rekomendasi ?? '-'
            ],
            'gejala_selected' => Gejala::whereIn(
                'id',
                array_column($jawaban, 'gejala_id')
            )->get()
        ]);
    }

    /* =======================
     * FINAL SUBMIT - SIMPAN DB
     * ======================= */
    public function submitFinal()
    {
        $pasien = session('pasien');
        $jawaban = session('jawaban_gejala');
        $hasil = session('hasil_preview');

        $mahasiswa = Mahasiswa::firstOrCreate(
            ['nim' => $pasien['nim']],
            $pasien
        );

        $konsultasi = Konsultasi::create([
            'mahasiswa_id' => $mahasiswa->id,
            'tanggal' => now(),
            'diagnosis' => $hasil['penyakit']->nama_penyakit ?? 'Tidak Terdiagnosis',
            'cf_total' => $hasil['cf_total'] ?? 0,
        ]);

        foreach ($jawaban as $j) {
            DetailKonsultasi::create([
                'konsultasi_id' => $konsultasi->id,
                'gejala_id' => $j['gejala_id'],
                'cf_user' => $j['cf_user']
            ]);
        }

        session()->forget([
            'pasien',
            'jawaban_gejala',
            'hasil_preview'
        ]);

        return redirect()->route('konsultasi.step1');
    }

    public function finish()
    {
        // HAPUS SESSION AGAR KONSULTASI BARU BERSIH
        session()->forget([
            'pasien',
            'jawaban_gejala'
        ]);

        return redirect()->route('konsultasi.step1')
            ->with('success', 'Konsultasi berhasil disimpan');
    }
}
