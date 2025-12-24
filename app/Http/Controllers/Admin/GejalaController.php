<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    /**
     * Tampilkan daftar gejala
     */
    public function index()
    {
        $gejalas = Gejala::all();
        return view('admin.gejala.index', compact('gejalas'));
    }

    /**
     * tampilkan form tambah gejala
     */
    public function create()
    {
        return view('admin.gejala.create');
    }

    /**
     * simpan data gejala
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejala,kode_gejala',
            'nama_gejala' => 'required'
        ]);

        Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);

        return redirect('/admin/gejala')->with('succes', 'Gejala berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * tampilkan form edit gejala
     */
    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * update data gejala
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejala,kode_gejala,' . $id,
            'nama_gejala' => 'required'
        ]);

        $gejala = Gejala::findOrFail($id);
        
        $gejala->update([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);
        
        return redirect('/admin/gejala')->with('success', 'gejala berhasil diupdate');
    }

    /**
     * hapus data gejala
     */
    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect('/admin/gejala')->with('success', 'gejala berhasil di hapus');
    }
}
