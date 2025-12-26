@extends('admin.layouts.app')

@section('title', 'Data Konsultasi')

@section('admin_content')

<!-- ==================== WRAPPER HALAMAN START ==================== -->
<div class="h-100 d-flex flex-column">

    <!-- ==================== HEADER HALAMAN START ==================== -->
    <div class="d-flex justify-content-between align-items-center mb-3">

        <!-- ===== JUDUL & DESKRIPSI ===== -->
        <div>
            <h4 class="mb-0 fw-semibold" style="color:#2f2f2f">
                Data Konsultasi
            </h4>
            <small class="text-muted">
                Riwayat hasil konsultasi mahasiswa
            </small>
        </div>

    </div>
    <!-- ==================== HEADER HALAMAN END ==================== -->

    <!-- ==================== WRAPPER TABEL (AREA SCROLL) START ==================== -->
    <div class="flex-grow-1"
         style="
            overflow-y:auto;
            background:#ffffff;
            border-radius:12px;
            border:1px solid #e9ecef;
            box-shadow:0 6px 16px rgba(0,0,0,.04);
         ">

        <!-- ==================== TABEL DATA KONSULTASI START ==================== -->
        <table class="table table-sm align-middle mb-0"
               style="border-collapse:separate;border-spacing:0">

            <!-- ==================== HEADER TABEL START ==================== -->
            <thead class="sticky-top"
                   style="
                        background:#f8f9fa;
                        z-index:2;
                        border-bottom:1px solid #dee2e6;
                   ">
                <tr class="text-center"
                    style="font-size:13px;color:#6c757d">
                    <th class="py-3 text-start">Nama</th>
                    <th class="py-3">JK</th>
                    <th class="py-3">Usia</th>
                    <th class="py-3">Tanggal</th>
                    <th class="py-3 text-start">Diagnosis</th>
                    <th class="py-3">CF</th>
                    <th class="py-3">Aksi</th>
                </tr>
            </thead>
            <!-- ==================== HEADER TABEL END ==================== -->

            <!-- ==================== BODY TABEL START ==================== -->
            <tbody style="font-size:14px;color:#2f2f2f">

                @forelse($konsultasi as $k)

                <!-- ==================== ROW DATA KONSULTASI START ==================== -->
                <tr style="transition:.2s"
                    onmouseover="this.style.background='#f9fbe7'"
                    onmouseout="this.style.background='transparent'">

                    <!-- ===== NAMA MAHASISWA ===== -->
                    <td class="fw-medium">
                        {{ $k->mahasiswa->nama_mahasiswa }}
                    </td>

                    <!-- ===== JENIS KELAMIN ===== -->
                    <td class="text-center">
                        {{ $k->mahasiswa->jenis_kelamin }}
                    </td>

                    <!-- ===== USIA ===== -->
                    <td class="text-center">
                        {{ $k->mahasiswa->umur }}
                    </td>

                    <!-- ===== TANGGAL KONSULTASI ===== -->
                    <td class="text-center">
                        {{ $k->created_at->format('d-m-Y') }}
                    </td>

                    <!-- ===== HASIL DIAGNOSIS ===== -->
                    <td>
                        {{ $k->diagnosis }}
                    </td>

                    <!-- ===== NILAI CERTAINTY FACTOR (CF) ===== -->
                    <td class="text-center fw-semibold">
                        {{ round($k->cf_total * 100, 2) }}%
                    </td>

                    <!-- ===== AKSI ===== -->
                    <td class="text-center">

                        <!-- ===== FORM HAPUS DATA KONSULTASI ===== -->
                        <form action="{{ route('admin.konsultasi.destroy', $k->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Hapus data konsultasi ini?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm"
                                    style="
                                        background:#f8d7da;
                                        color:#842029;
                                        border-radius:6px;
                                        border:1px solid #f5c2c7;
                                    ">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
                <!-- ==================== ROW DATA KONSULTASI END ==================== -->

                @empty

                <!-- ==================== EMPTY STATE START ==================== -->
                <tr>
                    <td colspan="7"
                        class="text-center py-5"
                        style="color:#adb5bd">
                        <div class="fw-semibold mb-1">
                            Data konsultasi belum tersedia
                        </div>
                        <small>
                            Belum ada mahasiswa melakukan konsultasi
                        </small>
                    </td>
                </tr>
                <!-- ==================== EMPTY STATE END ==================== -->

                @endforelse

            </tbody>
            <!-- ==================== BODY TABEL END ==================== -->

        </table>
        <!-- ==================== TABEL DATA KONSULTASI END ==================== -->

    </div>
    <!-- ==================== WRAPPER TABEL END ==================== -->

</div>
<!-- ==================== WRAPPER HALAMAN END ==================== -->

@endsection
