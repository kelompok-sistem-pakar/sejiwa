@extends('admin.layouts.app')

@section('title', 'Edit Gejala')

@section('admin_content')

<!-- ==================== CONTAINER ADMIN START ==================== -->
<div class="container-fluid">

    <!-- ==================== CARD FORM START ==================== -->
    <div class="card border-0 shadow-sm" style="max-width:520px;border-radius:12px;">

        <!-- ==================== CARD BODY START ==================== -->
        <div class="card-body p-4">

            <!-- ==================== JUDUL FORM START ==================== -->
            <h4 class="fw-semibold mb-4" style="color:#2f2f2f;">
                Edit Gejala
            </h4>
            <!-- ==================== JUDUL FORM END ==================== -->

            <!-- ==================== FORM EDIT GEJALA START ==================== -->
            <form action="{{ route('admin.gejala.update', $gejala->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- ==================== INPUT KODE GEJALA START ==================== -->
                <div class="mb-3">
                    <label class="form-label fw-medium">
                        Kode Gejala
                    </label>
                    <input
                        type="text"
                        name="kode_gejala"
                        class="form-control"
                        value="{{ $gejala->kode_gejala }}"
                        required
                        style="border-radius:8px;"
                    >
                </div>
                <!-- ==================== INPUT KODE GEJALA END ==================== -->

                <!-- ==================== INPUT NAMA GEJALA START ==================== -->
                <div class="mb-4">
                    <label class="form-label fw-medium">
                        Nama Gejala
                    </label>
                    <input
                        type="text"
                        name="nama_gejala"
                        class="form-control"
                        value="{{ $gejala->nama_gejala }}"
                        required
                        style="border-radius:8px;"
                    >
                </div>
                <!-- ==================== INPUT NAMA GEJALA END ==================== -->

                <!-- ==================== BUTTON AKSI START ==================== -->
                <div class="d-flex gap-2">
                    <a
                        href="{{ route('admin.gejala.index') }}"
                        class="btn btn-light px-4"
                        style="border-radius:8px;"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn px-4 fw-semibold"
                        style="background:#B9F04F;color:#1f1f1f;border-radius:8px;border:none;"
                    >
                        Update
                    </button>
                </div>
                <!-- ==================== BUTTON AKSI END ==================== -->

            </form>
            <!-- ==================== FORM EDIT GEJALA END ==================== -->

        </div>
        <!-- ==================== CARD BODY END ==================== -->

    </div>
    <!-- ==================== CARD FORM END ==================== -->

</div>
<!-- ==================== CONTAINER ADMIN END ==================== -->

@endsection
