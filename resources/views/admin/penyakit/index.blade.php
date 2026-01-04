@extends('admin.layouts.app')

@section('title', 'CRUD Penyakit')

@section('admin_content')

<!-- ==================== WRAPPER HALAMAN START ==================== -->
<div class="h-100 d-flex flex-column">

    <!-- ==================== HEADER HALAMAN START ==================== -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="mb-0 fw-semibold" style="color:#2f2f2f">
                Daftar Penyakit
            </h4>
            <small class="text-muted">
                Kelola data penyakit untuk proses diagnosis
            </small>
        </div>

        <a
            href="{{ route('admin.penyakit.create') }}"
            class="btn btn-sm fw-semibold"
            style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;"
            onmouseover="this.style.border='1px solid #6fae2e'"
            onmouseout="this.style.border='1px solid transparent'">
            + Tambah Penyakit
        </a>
    </div>
    <!-- ==================== HEADER HALAMAN END ==================== -->

    <!-- ==================== TABLE WRAPPER START ==================== -->
    <div class="flex-grow-1"
        style="overflow-y:auto;background:#ffffff;border-radius:12px;border:1px solid #e9ecef;box-shadow:0 6px 16px rgba(0,0,0,.04);">

        <!-- ==================== TABLE START ==================== -->
        <table class="table table-sm align-middle mb-0"
            style="border-collapse:separate;border-spacing:0">

            <!-- ==================== TABLE HEADER START ==================== -->
            <thead class="sticky-top"
                style="background:#f8f9fa;z-index:2;border-bottom:1px solid #dee2e6;">
                <tr class="text-center justify-center align-baseline"
                    style="font-size:13px;color:#6c757d">
                    <th width="20%" class="py-3">Kode Penyakit</th>
                    <th class="py-3 text-start">Nama Penyakit</th>
                    <th class="py-3 text-start">Rekomendasi</th>
                    <th width="20%" class="py-3">Aksi</th>
                </tr>
            </thead>
            <!-- ==================== TABLE HEADER END ==================== -->

            <!-- ==================== TABLE BODY START ==================== -->
            <tbody style="font-size:14px;color:#2f2f2f">

                @forelse ($penyakit as $item)
                <tr
                    style="transition:.2s"
                    onmouseover="this.style.background='#f9fbe7'"
                    onmouseout="this.style.background='transparent'">

                    <td class="text-center fw-semibold">
                        {{ $item->kode_penyakit }}
                    </td>

                    <td>
                        {{ $item->nama_penyakit }}
                    </td>

                    <td>
                        <div class="overflow-auto" style="max-height: 100px; scrollbar-width: none; -ms-overflow-style: none;">
                            {{ $item->rekomendasi }}
                        </div>
                    </td>

                    <td class="text-center">

                        <!-- ==================== BUTTON EDIT START ==================== -->
                        <a
                            href="{{ route('admin.penyakit.edit', $item->id) }}"
                            class="btn btn-sm me-1"
                            style="background:#fff3cd;color:#664d03;border-radius:6px;border:1px solid #ffe69c;">
                            Edit
                        </a>
                        <!-- ==================== BUTTON EDIT END ==================== -->

                        <!-- ==================== FORM DELETE START ==================== -->
                        <form
                            action="{{ route('admin.penyakit.destroy', $item->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-sm"
                                style="background:#f8d7da;color:#842029;border-radius:6px;border:1px solid #f5c2c7;">
                                Hapus
                            </button>
                        </form>
                        <!-- ==================== FORM DELETE END ==================== -->

                    </td>
                </tr>

                @empty
                <!-- ==================== EMPTY STATE START ==================== -->
                <tr>
                    <td
                        colspan="3"
                        class="text-center py-5"
                        style="color:#adb5bd">
                        <div class="fw-semibold mb-1">
                            Data penyakit belum tersedia
                        </div>
                        <small>
                            Silakan tambahkan data penyakit
                        </small>
                    </td>
                </tr>
                <!-- ==================== EMPTY STATE END ==================== -->
                @endforelse

            </tbody>
            <!-- ==================== TABLE BODY END ==================== -->

        </table>
        <!-- ==================== TABLE END ==================== -->

    </div>
    <!-- ==================== TABLE WRAPPER END ==================== -->

</div>
<!-- ==================== WRAPPER HALAMAN END ==================== -->

@endsection