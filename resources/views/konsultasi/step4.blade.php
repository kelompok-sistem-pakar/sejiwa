@extends('konsultasi.layout')

@section('konsultasi_content')

<div class="container pt-2 pb-3" style="max-width:680px;">

    <div class="mb-3">
        <h2 class="fw-semibold mb-1">Step 4: Hasil Konsultasi</h2>
        <small class="text-muted">Hasil analisis sistem pakar</small>
    </div>

    <div class="p-3 mb-3 border rounded bg-light">
        <h5 class="fw-semibold">Diagnosis</h5>
        <div class="fw-bold">{{ $hasil['penyakit'] }}</div>
        <div>
            Keyakinan:
            <strong>{{ round($hasil['cf_total'] * 100, 2) }}%</strong>
        </div>
        <div class="fst-italic mt-2">{{ $hasil['rekomendasi'] }}</div>
    </div>

    <div class="mb-3">
        <h6 class="fw-semibold">Gejala Dipilih</h6>
        @foreach ($gejala_selected as $g)
        @php
        $cf = collect(session('jawaban_gejala'))
        ->firstWhere('gejala_id', $g->id)['cf_user'] * 100;
        @endphp

        <div class="d-flex justify-content-between p-2 mb-2 border rounded">
            <span>{{ $g->nama_gejala }}</span>
            <strong>{{ $cf }}%</strong>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('konsultasi.step3') }}"
            class="btn px-4 fw-semibold"
            style="background:#e9ecef;">
            Kembali
        </a>

        <form action="{{ route('konsultasi.finish') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="btn px-4 py-2 fw-semibold"
                style="background:#B9F04F;">
                Selesai
            </button>
        </form>
    </div>

</div>

@endsection