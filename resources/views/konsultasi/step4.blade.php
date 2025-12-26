@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- ==================== STEP 4 CONTAINER START ==================== -->
<div class="container pt-2 pb-3" style="max-width:680px;">

    <!-- ==================== TITLE START ==================== -->
    <div class="mb-3">
        <h2 class="fw-semibold mb-1" style="color:#2f2f2f;">
            Step 4: Hasil Konsultasi
        </h2>
        <small style="color:#6c757d;">
            Berikut hasil analisis berdasarkan gejala yang kamu pilih
        </small>
    </div>
    <!-- ==================== TITLE END ==================== -->

    <!-- ==================== HASIL UTAMA START ==================== -->
    <div class="mb-3 p-3" style="border:1px solid #e9ecef;border-radius:10px;background:#f9fbf5;">

        <h5 class="fw-semibold mb-2" style="color:#2f2f2f;">
            Penyakit Terdiagnosis
        </h5>

        <div class="fw-bold mb-2" style="font-size:1.1rem;color:#1f1f1f;">
            {{ $hasil['penyakit'] }}
        </div>

        <div class="mb-2">
            <span class="fw-medium">Tingkat Keyakinan:</span>
            <span class="fw-semibold" style="color:#7fbf2f;">
                {{ round($hasil['cf_total'] * 100, 2) }}%
            </span>
        </div>

        <div>
            <span class="fw-medium">Solusi:</span>
            <div style="color:#2f2f2f;">
                {{ $hasil['solusi'] }}
            </div>
        </div>

    </div>
    <!-- ==================== HASIL UTAMA END ==================== -->

    <!-- ==================== GEJALA LIST START ==================== -->
    <div class="mb-3">
        <h6 class="fw-semibold mb-2" style="color:#2f2f2f;">
            Gejala yang Dipilih
        </h6>

        @foreach ($gejala_selected as $g)
            @php
                $cf_user = collect(session('jawaban_gejala'))->firstWhere('gejala_id', $g->id)['cf_user'] ?? 0;
            @endphp

            <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="border:1px solid #e9ecef;border-radius:6px;">
                <span>{{ $g->nama_gejala }}</span>
                <span class="fw-semibold" style="color:#2f2f2f;">
                    {{ round($cf_user * 100, 2) }}%
                </span>
            </div>
        @endforeach
    </div>
    <!-- ==================== GEJALA LIST END ==================== -->

    <!-- ==================== ACTION BUTTON START ==================== -->
    <div class="d-flex justify-content-end mt-3">
        <a
            href="{{ url('/konsultasi/step1') }}"
            class="btn px-4 py-2 fw-semibold"
            style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;"
            onmouseover="this.style.border='1px solid #6fae2e'"
            onmouseout="this.style.border='1px solid transparent'">
            Selesai
        </a>
    </div>
    <!-- ==================== ACTION BUTTON END ==================== -->

</div>
<!-- ==================== STEP 4 CONTAINER END ==================== -->

@endsection
