@extends('admin.layouts.app')

@section('title', 'Tambah Penyakit')

@section('admin_content')

<!-- ==================== CONTAINER FORM START ==================== -->
<div class="container" style="max-width:600px;">

    <!-- ==================== CARD FORM START ==================== -->
    <div class="card border-0"
         style="
            border-radius:14px;
            box-shadow:0 6px 18px rgba(0,0,0,.06);
         ">

        <!-- ==================== CARD BODY START ==================== -->
        <div class="card-body p-4">

            <!-- ==================== JUDUL FORM START ==================== -->
            <h4 class="fw-semibold mb-1">
                Tambah Penyakit
            </h4>
            <p class="text-muted mb-4" style="font-size:14px;">
                Masukkan data penyakit baru ke dalam sistem
            </p>
            <!-- ==================== JUDUL FORM END ==================== -->

            <!-- ==================== FORM TAMBAH PENYAKIT START ==================== -->
            <form action="{{ route('admin.penyakit.store') }}" method="POST">
                @csrf

                <!-- ==================== INPUT KODE PENYAKIT START ==================== -->
                <div class="mb-3">
                    <label class="form-label fw-medium">
                        Kode Penyakit
                    </label>
                    <input
                        type="text"
                        name="kode_penyakit"
                        class="form-control"
                        placeholder="Contoh: P001"
                        required
                    >
                </div>
                <!-- ==================== INPUT KODE PENYAKIT END ==================== -->

                <!-- ==================== INPUT NAMA PENYAKIT START ==================== -->
                <div class="mb-4">
                    <label class="form-label fw-medium">
                        Nama Penyakit
                    </label>
                    <input
                        type="text"
                        name="nama_penyakit"
                        class="form-control"
                        placeholder="Contoh: Depresi"
                        required
                    >
                </div>
                <!-- ==================== INPUT NAMA PENYAKIT END ==================== -->

                <!-- ==================== BUTTON AKSI START ==================== -->
                <div class="d-flex justify-content-end gap-2">
                    <a
                        href="{{ route('admin.penyakit.index') }}"
                        class="btn btn-light px-4"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn px-4 fw-semibold"
                        style="background:#B9F04F;color:#1f1f1f;border-radius:8px;border:none;"
                    >
                        Simpan
                    </button>
                </div>
                <!-- ==================== BUTTON AKSI END ==================== -->

            </form>
            <!-- ==================== FORM TAMBAH PENYAKIT END ==================== -->

        </div>
        <!-- ==================== CARD BODY END ==================== -->

    </div>
    <!-- ==================== CARD FORM END ==================== -->

</div>
<!-- ==================== CONTAINER FORM END ==================== -->

@endsection
