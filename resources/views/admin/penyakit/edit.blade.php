@extends('admin.layouts.app')

@section('title', 'Edit Penyakit')

@section('admin_content')

<!-- ==================== WRAPPER HALAMAN START ==================== -->
<div class="d-flex justify-content-center">

    <div class="col-lg-6">

        <!-- ==================== HEADER HALAMAN START ==================== -->
        <div class="mb-3">
            <h4 class="fw-semibold mb-0" style="color:#2f2f2f">
                Edit Penyakit
            </h4>
            <small class="text-muted">
                Perbarui data penyakit yang sudah ada
            </small>
        </div>
        <!-- ==================== HEADER HALAMAN END ==================== -->

        <!-- ==================== CARD FORM START ==================== -->
        <div class="card border-0"
             style="border-radius:14px;box-shadow:0 10px 24px rgba(0,0,0,.06);">

            <!-- ==================== CARD BODY START ==================== -->
            <div class="card-body p-4">

                <!-- ==================== FORM EDIT PENYAKIT START ==================== -->
                <form action="{{ route('admin.penyakit.update', $penyakit->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <!-- ==================== INPUT KODE PENYAKIT START ==================== -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Kode Penyakit
                        </label>
                        <input
                            type="text"
                            name="kode_penyakit"
                            class="form-control"
                            value="{{ $penyakit->kode_penyakit }}"
                            required
                            style="border-radius:8px"
                        >
                    </div>
                    <!-- ==================== INPUT KODE PENYAKIT END ==================== -->

                    <!-- ==================== INPUT NAMA PENYAKIT START ==================== -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Nama Penyakit
                        </label>
                        <input
                            type="text"
                            name="nama_penyakit"
                            class="form-control"
                            value="{{ $penyakit->nama_penyakit }}"
                            required
                            style="border-radius:8px"
                        >
                    </div>
                    <!-- ==================== INPUT NAMA PENYAKIT END ==================== -->

                    <!-- ==================== BUTTON AKSI START ==================== -->
                    <div class="d-flex justify-content-end gap-2">

                        <a
                            href="{{ route('admin.penyakit.index') }}"
                            class="btn btn-sm fw-semibold"
                            style="background:#f1f3f5;color:#495057;border-radius:6px;"
                        >
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="btn btn-sm fw-semibold"
                            style="background:#B9F04F;color:#1f1f1f;border-radius:6px;"
                        >
                            Update
                        </button>

                    </div>
                    <!-- ==================== BUTTON AKSI END ==================== -->

                </form>
                <!-- ==================== FORM EDIT PENYAKIT END ==================== -->

            </div>
            <!-- ==================== CARD BODY END ==================== -->

        </div>
        <!-- ==================== CARD FORM END ==================== -->

    </div>

</div>
<!-- ==================== WRAPPER HALAMAN END ==================== -->

@endsection
