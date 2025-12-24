<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = Mahasiswa::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:mahasiswas',
            'password' => 'required|min:6',
        ]);

        Mahasiswa::create([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('admin.user')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = Mahasiswa::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Mahasiswa::findOrFail($id);
        $request->validate([
            'username' => 'required|unique:mahasiswas,username,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->username = $request->username;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('admin.user')->with('success', 'User berhasil diperbarui');
    }

    public function destroy($id)
    {
        $user = Mahasiswa::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user')->with('success', 'User berhasil dihapus');
    }
}
