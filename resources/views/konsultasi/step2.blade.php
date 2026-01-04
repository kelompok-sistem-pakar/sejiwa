@extends('konsultasi.layout')

@section('konsultasi_content')

<style>
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
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

    /* Scroll-limited container for gejala list (limit to one viewport) */
    .gejala-scroll {
        max-height: calc(100vh - 180px);
        overflow-y: auto;
        padding-right: 8px;
        /* avoid content hiding under scrollbar */
    }
</style>

@php
$jawaban = collect(session('jawaban_gejala', []))->keyBy('gejala_id');
@endphp

<div class="container pt-2 pb-3" style="max-width:640px;">

    <div class="mb-3">
        <h2 class="fw-semibold mb-1">Step 2: Pilih Gejala</h2>
        <small class="text-muted">Geser sesuai tingkat keyakinan</small>
    </div>

    <form action="{{ route('konsultasi.step2.submit') }}" method="POST">
        @csrf

        <div class="gejala-scroll">
            @foreach ($gejala as $g)
            @php
            $cf = isset($jawaban[$g->id]) ? $jawaban[$g->id]['cf_user'] * 100 : 0;
            @endphp

            <div class="mb-3 p-3 border rounded">
                <label class="fw-medium mb-2">{{ $g->nama_gejala }}</label>

                <input type="hidden" name="gejala_id[]" value="{{ $g->id }}">

                <div class="d-flex align-items-center gap-3">
                    <input
                        type="range"
                        name="cf_user[]"
                        min="0"
                        max="100"
                        value="{{ $cf }}"
                        class="form-range flex-grow-1"
                        oninput="this.parentElement.querySelector('output').value=this.value">

                    <div class="fw-semibold" style="width:45px;">
                        <output>{{ $cf }}</output>%
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn fw-semibold px-4" style="background:#B9F04F;">
                Selanjutnya
            </button>
        </div>
    </form>
</div>

@endsection