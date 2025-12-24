@extends('admin.layouts.app')

@section('title', 'CRUD Gejala')

@section('admin_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Daftar Gejala</h4>

        <a href="{{ route('admin.gejala.create') }}" class="btn btn-sm btn-primary">
            + Tambah Gejala
        </a>
    </div>

    {{-- WRAPPER BIAR TABLE BISA SCROLL --}}
    <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
        <table class="table table-bordered table-sm align-middle">
            <thead class="table-light sticky-top">
                <tr class="text-center">
                    <th width="20%">Kode</th>
                    <th>Nama Gejala</th>
                    <th width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gejalas as $gejala)
                <tr>
                    <td class="text-center">{{ $gejala->kode_gejala }}</td>
                    <td>{{ $gejala->nama_gejala }}</td>
                    <td class="text-center">

                        <a href="{{ route('admin.gejala.edit', $gejala->id) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.gejala.destroy', $gejala->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus gejala ini?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">
                        Data gejala belum tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection