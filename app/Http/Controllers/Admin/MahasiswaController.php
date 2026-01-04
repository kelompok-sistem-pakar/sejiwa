<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Tampilkan daftar mahasiswa
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Tampilkan form tambah mahasiswa
     */
    public function create()
    {
        return view('admin.mahasiswa-create');
    }

    /**
     * Simpan data mahasiswa
     */
    public function store(Request $request)
    {
        // Validasi dulu
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim|max:20',
            'nama_mahasiswa' => 'required|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Simpan ke database
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/admin/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit mahasiswa
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa-edit', compact('mahasiswa'));
    }

    /**
     * Update data mahasiswa
     */
    public function update(Request $request, $id)
    {
        // Validasi dulu
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,' . $id . '|max:20',
            'nama_mahasiswa' => 'required|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Update
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/admin/mahasiswa')->with('success', 'Mahasiswa berhasil diupdate.');
    }

    /**
     * Hapus data mahasiswa
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect('/admin/mahasiswa')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
