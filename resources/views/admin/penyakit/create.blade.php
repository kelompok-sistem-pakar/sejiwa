@extends('admin.layouts.app')

@section('admin_content')
@section('title', 'Tambah Penyakit')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Tambah Penyakit</h2>

<form action="{{ route('admin.penyakit.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
        <input type="text" name="kode_penyakit" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection