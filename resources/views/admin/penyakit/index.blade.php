@extends('admin.layouts.app')

@section('title', 'CRUD Penyakit')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

@section('admin_content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Daftar Penyakit</h4>

    <a href="{{ route('admin.penyakit.create') }}" class="btn btn-sm btn-primary">
        + Tambah Penyakit
    </a>
</div>

<div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
    <table class="table table-bordered table-sm mt-3">
        <thead class="table-light">
            <tr>
                <th style="width: 20%">Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penyakit as $item)
            <tr>
                <td>{{ $item->kode_penyakit }}</td>
                <td>{{ $item->nama_penyakit }}</td>
                <td class="text-center">
                    <!-- Edit -->
                    <a href="{{ route('admin.penyakit.edit', $item->id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('admin.penyakit.destroy', $item->id) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                    Data penyakit belum tersedia
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection