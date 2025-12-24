<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Http\Request;

class AdminKonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::with('mahasiswa')->get();
        return view('admin.konsultasi.index', compact('konsultasi'));
    }

    public function edit($id)
    {
        $data = Konsultasi::findOrFail($id);
        return view('admin.konsultasi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $k = Konsultasi::findOrFail($id);
        $k->update($request->all());
        return redirect()->route('admin.konsultasi')->with('success', 'Data konsultasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $k = Konsultasi::findOrFail($id);
        $k->delete();
        return redirect()->route('admin.konsultasi.index')->with('success', 'Data konsultasi berhasil dihapus');
    }
}
