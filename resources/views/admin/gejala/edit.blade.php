@extends('admin.layouts.app')

@section('admin_content')
@section('title', 'Edit Gejala')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Edit Gejala</h2>

<form action="{{ route('admin.gejala.update', $gejala->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="kode_gejala" class="form-label">Kode Gejala</label>
        <input type="text" name="kode_gejala" class="form-control" value="{{ $gejala->kode_gejala }}" required>
    </div>
    <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input type="text" name="nama_gejala" class="form-control" value="{{ $gejala->nama_gejala }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection