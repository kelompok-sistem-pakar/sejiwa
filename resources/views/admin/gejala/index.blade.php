@extends('admin.layouts.app')

@section('title', 'CRUD Gejala')

@section('admin_content')

<!-- ==================== WRAPPER HALAMAN START ==================== -->
<div class="h-100 d-flex flex-column">

    <!-- ==================== HEADER HALAMAN START ==================== -->
    <div class="d-flex justify-content-between align-items-center mb-3">

        <!-- ==================== JUDUL & DESKRIPSI START ==================== -->
        <div>
            <h4 class="mb-0 fw-semibold" style="color:#2f2f2f;">
                Daftar Gejala
            </h4>
            <small class="text-muted">
                Kelola data gejala untuk proses konsultasi
            </small>
        </div>
        <!-- ==================== JUDUL & DESKRIPSI END ==================== -->

        <!-- ==================== TOMBOL TAMBAH GEJALA START ==================== -->
        <a
            href="{{ route('admin.gejala.create') }}"
            class="btn btn-sm fw-semibold"
            style="
                background:#B9F04F;
                color:#1f1f1f;
                border-radius:6px;
                border:1px solid transparent;
            "
            onmouseover="this.style.border='1px solid #6fae2e'"
            onmouseout="this.style.border='1px solid transparent'"
        >
            + Tambah Gejala
        </a>
        <!-- ==================== TOMBOL TAMBAH GEJALA END ==================== -->

    </div>
    <!-- ==================== HEADER HALAMAN END ==================== -->

    <!-- ==================== WRAPPER TABEL (SCROLL AREA) START ==================== -->
    <div
        class="flex-grow-1"
        style="
            overflow-y:auto;
            background:#ffffff;
            border-radius:12px;
            border:1px solid #e9ecef;
            box-shadow:0 6px 16px rgba(0,0,0,.04);
        "
    >

        <!-- ==================== TABEL GEJALA START ==================== -->
        <table
            class="table table-sm align-middle mb-0"
            style="border-collapse:separate;border-spacing:0;"
        >

            <!-- ==================== HEADER TABEL START ==================== -->
            <thead
                class="sticky-top"
                style="
                    background:#f8f9fa;
                    z-index:2;
                    border-bottom:1px solid #dee2e6;
                "
            >
                <tr
                    class="text-center"
                    style="font-size:13px;color:#6c757d;"
                >
                    <th width="20%" class="py-3">Kode</th>
                    <th class="py-3 text-start">Nama Gejala</th>
                    <th width="25%" class="py-3">Aksi</th>
                </tr>
            </thead>
            <!-- ==================== HEADER TABEL END ==================== -->

            <!-- ==================== BODY TABEL START ==================== -->
            <tbody style="font-size:14px;color:#2f2f2f;">

                @forelse ($gejalas as $gejala)

                <!-- ==================== ROW DATA GEJALA START ==================== -->
                <tr
                    style="transition:.2s;"
                    onmouseover="this.style.background='#f9fbe7'"
                    onmouseout="this.style.background='transparent'"
                >

                    <!-- ==================== KOLOM KODE GEJALA START ==================== -->
                    <td class="text-center fw-semibold">
                        {{ $gejala->kode_gejala }}
                    </td>
                    <!-- ==================== KOLOM KODE GEJALA END ==================== -->

                    <!-- ==================== KOLOM NAMA GEJALA START ==================== -->
                    <td>
                        {{ $gejala->nama_gejala }}
                    </td>
                    <!-- ==================== KOLOM NAMA GEJALA END ==================== -->

                    <!-- ==================== KOLOM AKSI START ==================== -->
                    <td class="text-center">

                        <!-- ==================== TOMBOL EDIT START ==================== -->
                        <a
                            href="{{ route('admin.gejala.edit', $gejala->id) }}"
                            class="btn btn-sm me-1"
                            style="
                                background:#fff3cd;
                                color:#664d03;
                                border-radius:6px;
                                border:1px solid #ffe69c;
                            "
                        >
                            Edit
                        </a>
                        <!-- ==================== TOMBOL EDIT END ==================== -->

                        <!-- ==================== FORM HAPUS START ==================== -->
                        <form
                            action="{{ route('admin.gejala.destroy', $gejala->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus gejala ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-sm"
                                style="
                                    background:#f8d7da;
                                    color:#842029;
                                    border-radius:6px;
                                    border:1px solid #f5c2c7;
                                "
                            >
                                Hapus
                            </button>
                        </form>
                        <!-- ==================== FORM HAPUS END ==================== -->

                    </td>
                    <!-- ==================== KOLOM AKSI END ==================== -->

                </tr>
                <!-- ==================== ROW DATA GEJALA END ==================== -->

                @empty

                <!-- ==================== EMPTY STATE START ==================== -->
                <tr>
                    <td
                        colspan="3"
                        class="text-center py-5"
                        style="color:#adb5bd;"
                    >
                        <div class="fw-semibold mb-1">
                            Data gejala belum tersedia
                        </div>
                        <small>
                            Silakan tambahkan gejala baru
                        </small>
                    </td>
                </tr>
                <!-- ==================== EMPTY STATE END ==================== -->

                @endforelse

            </tbody>
            <!-- ==================== BODY TABEL END ==================== -->

        </table>
        <!-- ==================== TABEL GEJALA END ==================== -->

    </div>
    <!-- ==================== WRAPPER TABEL END ==================== -->

</div>
<!-- ==================== WRAPPER HALAMAN END ==================== -->

@endsection
