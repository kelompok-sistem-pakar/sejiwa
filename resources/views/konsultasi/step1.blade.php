@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- ==================== FORM STEP 1 START ==================== -->
<div class="container pt-0" style="max-width:560px;">

    <!-- ==================== HEADER START ==================== -->
    <div class="mb-4">
        <h2 class="fw-semibold" style="color:#2f2f2f;">
            Data Diri Pasien
        </h2>
        <small style="color:#6c757d;">
            Silakan lengkapi data diri dengan benar
        </small>
    </div>
    <!-- ==================== HEADER END ==================== -->

    <!-- ==================== FORM START ==================== -->
    <form action="{{ route('konsultasi.step1.submit') }}" method="POST">
        @csrf

        <!-- NIM -->
        <div class="mb-3">
            <label class="form-label fw-medium">NIM</label>
            <input type="text" name="nim" class="form-control" style="border-radius:6px;border:1px solid #ced4da;" required>
        </div>

        <!-- NAMA -->
        <div class="mb-3">
            <label class="form-label fw-medium">Nama</label>
            <input type="text" name="nama_mahasiswa" class="form-control" style="border-radius:6px;border:1px solid #ced4da;" required>
        </div>

        <!-- UMUR -->
        <div class="mb-3">
            <label class="form-label fw-medium">Umur</label>
            <input type="number" name="umur" class="form-control" style="border-radius:6px;border:1px solid #ced4da;" required>
        </div>

        <!-- JENIS KELAMIN -->
        <div class="mb-4">
            <label class="form-label fw-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" style="border-radius:6px;border:1px solid #ced4da;" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="d-flex justify-content-end">
            <button
                type="submit"
                class="btn px-4 py-2 fw-semibold"
                style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;transition:all .2s ease;"
                onmouseover="this.style.border='1px solid #8cc63f'"
                onmouseout="this.style.border='1px solid transparent'">
                Selanjutnya
            </button>
        </div>

    </form>
    <!-- ==================== FORM END ==================== -->

</div>
<!-- ==================== FORM STEP 1 END ==================== -->

@endsection
