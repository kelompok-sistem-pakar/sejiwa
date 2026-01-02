@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- ==================== STEP 3 CONTAINER START ==================== -->
<div class="container pt-2 pb-3" style="max-width:640px;">

    <!-- ==================== TITLE START ==================== -->
    <div class="mb-3">
        <h2 class="fw-semibold mb-1" style="color:#2f2f2f;">
            Step 3: Review Gejala
        </h2>
        <small style="color:#6c757d;">
            Periksa kembali gejala dan tingkat keyakinanmu
        </small>
    </div>
    <!-- ==================== TITLE END ==================== -->

    <!-- ==================== CONDITIONAL GEJALA START ==================== -->
    @if (count($gejala_selected) > 0)

        <!-- ==================== GEJALA REVIEW LIST START ==================== -->
        <div class="mb-3">
            @foreach ($gejala_selected as $g)
                @php
                    $jawaban = session('jawaban_gejala', []);
                    $cf = 0;
                    foreach ($jawaban as $item) {
                        if ($item['gejala_id'] == $g->id) {
                            $cf = $item['cf_user'] * 100;
                        }
                    }
                @endphp

                <div class="d-flex justify-content-between align-items-center mb-2 p-3" style="border:1px solid #e9ecef;border-radius:8px;">
                    <div class="fw-medium" style="color:#212529;">
                        {{ $g->nama_gejala }}
                    </div>
                    <div class="fw-semibold" style="color:#2f2f2f;">
                        {{ $cf }}%
                    </div>
                </div>
            @endforeach
        </div>
        <!-- ==================== GEJALA REVIEW LIST END ==================== -->

        <!-- ==================== SUBMIT FORM START ==================== -->
        <form action="{{ route('konsultasi.step3.submit') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-end mt-3">
                <button
                    type="submit"
                    class="btn px-4 py-2 fw-semibold"
                    style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;"
                    onmouseover="this.style.border='1px solid #8cc63f'"
                    onmouseout="this.style.border='1px solid transparent'">
                    Hasil
                </button>
            </div>
        </form>
        <!-- ==================== SUBMIT FORM END ==================== -->

    @else

        <!-- ==================== EMPTY STATE START ==================== -->
        <div class="p-3" style="border:1px dashed #ced4da;border-radius:8px;">
            <p class="mb-1" style="color:#6c757d;">
                Belum ada gejala yang dipilih.
            </p>
            <a
                href="{{ route('konsultasi.step2') }}"
                class="fw-semibold"
                style="color:#7fbf2f;text-decoration:none;">
                Kembali ke Step 2
            </a>
        </div>
        <!-- ==================== EMPTY STATE END ==================== -->

    @endif
    <!-- ==================== CONDITIONAL GEJALA END ==================== -->

</div>
<!-- ==================== STEP 3 CONTAINER END ==================== -->

@endsection
