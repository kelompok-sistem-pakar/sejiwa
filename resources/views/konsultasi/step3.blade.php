@extends('konsultasi.layout')

@section('konsultasi_content')

<div class="container pt-2 pb-3" style="max-width:640px;">

    <div class="mb-3">
        <h2 class="fw-semibold mb-1">Step 3: Review Gejala</h2>
        <small class="text-muted">Periksa kembali sebelum lanjut</small>
    </div>

    @php
    // Ambil jawaban dari session
    $jawaban = session('jawaban_gejala', []);
    // Hanya gejala yang CF_user > 0
    $gejala_filtered = collect($jawaban)->filter(fn($item) => $item['cf_user'] > 0)->pluck('cf_user', 'gejala_id');
    // Ambil data gejala dari DB sesuai ID yang sudah diisi
    $gejala_selected = \App\Models\Gejala::whereIn('id', $gejala_filtered->keys())->get();
    @endphp

    @if ($gejala_selected->count() > 0)
    <div class="mb-3">
        @foreach ($gejala_selected as $g)
        @php
        $cf = round(($gejala_filtered[$g->id] ?? 0) * 100, 0);
        @endphp
        <div class="d-flex justify-content-between p-3 mb-2 border rounded">
            <span>{{ $g->nama_gejala }}</span>
            <strong>{{ $cf }}%</strong>
        </div>
        @endforeach
    </div>

    <form action="{{ route('konsultasi.step3.submit') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-between">
            <a href="{{ route('konsultasi.step2') }}"
                class="btn px-4 fw-semibold"
                style="background:#e9ecef;">
                Kembali
            </a>

            <button class="btn px-4 fw-semibold" style="background:#B9F04F;">
                Hasil
            </button>
        </div>
    </form>

    @else
    <p class="text-muted">Belum ada gejala yang diisi.</p>
    @endif

</div>

@endsection