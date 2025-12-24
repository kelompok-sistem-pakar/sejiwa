@extends('admin.layouts.app')

@section('admin_content')
@section('title', 'Edit Penyakit')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Edit Penyakit</h2>

<form action="{{ route('admin.penyakit.update', $penyakit->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
        <input type="text" name="kode_penyakit" class="form-control" value="{{ $penyakit->kode_penyakit }}" required>
    </div>
    <div class="mb-3">
        <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control" value="{{ $penyakit->nama_penyakit }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection