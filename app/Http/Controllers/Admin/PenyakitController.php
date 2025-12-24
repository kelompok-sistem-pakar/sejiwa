<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    /**
     * Tampilkan daftar penyakit
     */
    public function index()
    {
        $penyakit = Penyakit::all();
        return view('admin.penyakit.index', compact('penyakit'));
    }

    /**
     * Tampilkan form tambah penyakit
     */
    public function create()
    {
        return view('admin.penyakit.create');
    }

    /**
     * Simpan data penyakit
     */
    public function store(Request $request)
    {
        // Validasi dulu
        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit,kode_penyakit|max:10',
            'nama_penyakit' => 'required|max:255',
        ]);

        // Simpan ke database
        Penyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
        ]);

        return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit penyakit
     */
    public function edit($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Update data penyakit
     */
    public function update(Request $request, $id)
    {
        // Validasi dulu
        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit,kode_penyakit,' . $id . '|max:10',
            'nama_penyakit' => 'required|max:255',
        ]);

        // Update
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->update([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
        ]);

        return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil diupdate.');
    }

    /**
     * Hapus data penyakit
     */
    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();

        return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil dihapus.');
    }
}
