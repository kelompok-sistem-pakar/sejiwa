@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- ==================== RANGE SLIDER STYLE START ==================== -->
<style>
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        background: #B9F04F;
        border-radius: 50%;
        cursor: pointer;
        border: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
        height: 6px;
        background: #dfe8c8;
        border-radius: 6px;
    }

    input[type=range]::-moz-range-thumb {
        width: 16px;
        height: 16px;
        background: #B9F04F;
        border-radius: 50%;
        cursor: pointer;
        border: none;
    }

    input[type=range]::-moz-range-track {
        height: 6px;
        background: #dfe8c8;
        border-radius: 6px;
    }
</style>
<!-- ==================== RANGE SLIDER STYLE END ==================== -->

<!-- ==================== STEP 2 CONTAINER START ==================== -->
<div class="container pt-2 pb-3" style="max-width:640px;">

    <!-- ==================== TITLE START ==================== -->
    <div class="mb-3">
        <h2 class="fw-semibold mb-1" style="color:#2f2f2f;">
            Step 2: Pilih Gejala
        </h2>
        <small style="color:#6c757d;">
            Geser sesuai tingkat keyakinan yang kamu rasakan
        </small>
    </div>
    <!-- ==================== TITLE END ==================== -->

    <!-- ==================== FORM START ==================== -->
    <form action="{{ route('konsultasi.step2.submit') }}" method="POST">
        @csrf

        <!-- ==================== GEJALA LIST START ==================== -->
        @foreach ($gejala as $g)
            <div class="mb-3 p-3" style="border:1px solid #e9ecef;border-radius:8px;">

                <label class="form-label fw-medium mb-2" style="color:#212529;">
                    {{ $g->nama_gejala }}
                </label>

                <input type="hidden" name="gejala_id[]" value="{{ $g->id }}">

                <div class="d-flex align-items-center gap-3">
                    <input
                        type="range"
                        name="cf_user[]"
                        class="form-range flex-grow-1"
                        min="0"
                        max="100"
                        value="0"
                        oninput="this.parentElement.querySelector('output').value=this.value">

                    <div class="fw-semibold" style="width:42px;color:#2f2f2f;">
                        <output>0</output>%
                    </div>
                </div>

            </div>
        @endforeach
        <!-- ==================== GEJALA LIST END ==================== -->

        <!-- ==================== BUTTON START ==================== -->
        <div class="d-flex justify-content-end mt-3">
            <button
                type="submit"
                class="btn px-4 py-2 fw-semibold"
                style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;"
                onmouseover="this.style.border='1px solid #8cc63f'"
                onmouseout="this.style.border='1px solid transparent'">
                Selanjutnya
            </button>
        </div>
        <!-- ==================== BUTTON END ==================== -->

    </form>
    <!-- ==================== FORM END ==================== -->

</div>
<!-- ==================== STEP 2 CONTAINER END ==================== -->

@endsection
