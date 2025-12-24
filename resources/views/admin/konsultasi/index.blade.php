@extends('admin.layouts.app')

@section('title', 'Data Konsultasi')

@section('admin_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Data Konsultasi</h2>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Tanggal</th>
            <th>Diagnosis</th>
            <th>CF Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($konsultasi as $k)
        <tr>
            <td>{{ $k->mahasiswa->nama_mahasiswa }}</td>
            <td>{{ $k->mahasiswa->jenis_kelamin }}</td>
            <td>{{ $k->mahasiswa->umur }}</td>
            <td>{{ $k->created_at->format('d-m-Y') }}</td>
            <td>{{ $k->diagnosis }}</td>
            <td>{{ $k->cf_total }}</td>
            <td>
                <form action="{{ route('admin.konsultasi.destroy', $k->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data konsultasi ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection