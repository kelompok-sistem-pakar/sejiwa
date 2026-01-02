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
    // Step 1: Form data diri
    public function step1()
    {
        $step = 1;
        return view('konsultasi.step1', compact('step'));
    }

    public function step1Submit(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|in:L,P',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
        ]);

        session(['pasien' => $request->all()]);
        return redirect()->route('konsultasi.step2');
    }

    // Step 2: Pilih gejala
    public function step2()
    {
        $step = 2;
        $gejala = Gejala::all();
        return view('konsultasi.step2', compact('gejala', 'step'));
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
                'cf_user' => $request->cf_user[$index] / 100 // convert 0-100 menjadi 0-1
            ];
        }

        session(['jawaban_gejala' => $jawaban]);
        return redirect()->route('konsultasi.step3');
    }

    // Step 3: Review gejala
    public function step3()
    {
        $step = 3;
        $jawaban_gejala = session('jawaban_gejala', []);
        $gejala_ids = array_column($jawaban_gejala, 'gejala_id');
        $gejala_selected = Gejala::whereIn('id', $gejala_ids)->get();

        return view('konsultasi.step3', [
            'pasien' => session('pasien'),
            'gejala_selected' => $gejala_selected,
            'jawaban_gejala' => $jawaban_gejala,
            'step' => $step
        ]);
    }

    public function step3Submit()
    {
        return redirect()->route('konsultasi.step4');
    }

    // Step 4: Simpan hasil konsultasi dan hitung CF
    public function step4()
    {
        $step = 4;
        $pasien = session('pasien');
        $jawaban_gejala = session('jawaban_gejala', []);

        // 1. Simpan Mahasiswa
        $mahasiswa = Mahasiswa::create([
            'nim' => $pasien['nim'],
            'nama_mahasiswa' => $pasien['nama_mahasiswa'],
            'umur' => $pasien['umur'],
            'jenis_kelamin' => $pasien['jenis_kelamin'],
        ]);

        // 2. Hitung CF untuk setiap penyakit
        $penyakit_all = Penyakit::with('gejala')->get();
        $hasil_cf = [];

        foreach ($penyakit_all as $penyakit) {
            $cf_combined = 0;
            foreach ($penyakit->gejala as $g) {
                foreach ($jawaban_gejala as $j) {
                    if ($g->id == $j['gejala_id']) {
                        $cf_user = $j['cf_user'];
                        $cf_pakar = $g->pivot->cf_pakar ?? 0; // default 0 jika null
                        $cf = $cf_user * $cf_pakar;

                        // Rumus CF kombinasi
                        if ($cf_combined == 0) {
                            $cf_combined = $cf;
                        } else {
                            $cf_combined = $cf_combined + $cf * (1 - $cf_combined);
                        }
                    }
                }
            }
            $hasil_cf[] = [
                'penyakit' => $penyakit,
                'cf_total' => $cf_combined
            ];
        }

        // 3. Pilih penyakit dengan CF tertinggi
        usort($hasil_cf, fn($a, $b) => $b['cf_total'] <=> $a['cf_total']);
        $tertinggi = $hasil_cf[0] ?? null;

        // 4. Simpan Konsultasi
        $konsultasi = Konsultasi::create([
            'mahasiswa_id' => $mahasiswa->id,
            'tanggal' => now(),
            'diagnosis' => $tertinggi['penyakit']->nama_penyakit ?? 'Tidak Terdiagnosis',
            'cf_total' => $tertinggi['cf_total'] ?? 0,
        ]);

        // 5. Simpan Detail Konsultasi
        foreach ($jawaban_gejala as $item) {
            DetailKonsultasi::create([
                'konsultasi_id' => $konsultasi->id,
                'gejala_id' => $item['gejala_id'],
                'cf_user' => $item['cf_user']
            ]);
        }

        // 6. Ambil gejala yang dipilih untuk tampil di step4
        $gejala_ids = array_column($jawaban_gejala, 'gejala_id');
        $gejala_selected = Gejala::whereIn('id', $gejala_ids)->get();

        // 7. Set variabel hasil untuk view
        $hasil = [
            'penyakit' => $tertinggi['penyakit']->nama_penyakit ?? 'Tidak Terdiagnosis',
            'cf_total' => $tertinggi['cf_total'] ?? 0,
            'rekomendasi' => $tertinggi['penyakit']->rekomendasi ?? '-'
        ];

        return view('konsultasi.step4', compact(
            'pasien',
            'gejala_selected',
            'hasil',
            'step'
        ));
    }
}
