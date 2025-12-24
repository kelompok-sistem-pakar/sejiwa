@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Step 1: Data Diri Pasien</h2>
<form action="{{ route('konsultasi.step1.submit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nama_mahasiswa" class="form-label">Nama</label>
        <input type="text" name="nama_mahasiswa" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="number" name="umur" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" required>
            <option value="">--Pilih--</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Lanjut ke Step 2</button>
</form>
@endsection