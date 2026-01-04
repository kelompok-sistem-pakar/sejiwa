@extends('admin.layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('admin_content')

<div class="d-flex flex-column h-100">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="mb-0 fw-semibold text-dark">Daftar Mahasiswa</h4>
            <small class="text-muted">Kelola data mahasiswa yang terdaftar</small>
        </div>
    </div>

    <div class="flex-grow-1 overflow-auto bg-white rounded border shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-hover table-sm align-middle mb-0">
                <thead class="table-light sticky-top">
                    <tr class="text-muted small">
                        <th class="py-3">Nama Mahasiswa</th>
                        <th class="py-3">NIM</th>
                        <th class="py-3">Usia</th>
                        <th class="py-3">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td class="fw-semibold">{{ $mhs->nama_mahasiswa }}</td>
                        <td class="text-muted">{{ $mhs->nim }}</td>
                        <td class="text-muted">{{ $mhs->umur }}</td>
                        <td class="text-muted">{{ $mhs->jenis_kelamin }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-5 text-muted">
                            <div class="fw-semibold mb-1">Data mahasiswa belum tersedia</div>
                            <small>Silakan tambahkan mahasiswa baru</small>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection