@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Step 2: Pilih Gejala</h2>
<form action="{{ route('konsultasi.step2.submit') }}" method="POST">
    @csrf
    @foreach($gejala as $g)
    <div class="mb-4">
        <label class="form-label">{{ $g->nama_gejala }}</label>
        <input type="hidden" name="gejala_id[]" value="{{ $g->id }}">
        <div class="d-flex align-items-center">
            <input type="range" name="cf_user[]" class="form-range me-3" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
            <output>0</output>%
        </div>
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary mt-3">Lanjut ke Step 3</button>
</form>
@endsection