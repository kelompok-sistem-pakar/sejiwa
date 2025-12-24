@extends('admin.layouts.app')

@section('admin_content')
@section('title', 'Tambah Gejala')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Tambah Gejala</h2>

<form action="{{ route('admin.gejala.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode_gejala" class="form-label">Kode Gejala</label>
        <input type="text" name="kode_gejala" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input type="text" name="nama_gejala" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection