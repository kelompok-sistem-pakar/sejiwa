@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Step 4: Hasil Konsultasi</h2>

<div class="card mb-3">
    <div class="card-body">
        <h4>Penyakit Terdiagnosis: {{ $hasil['penyakit'] }}</h4>
        <p>CF: {{ round($hasil['cf_total'] * 100, 2) }}%</p>
        <p>Solusi: {{ $hasil['solusi'] }}</p>
    </div>
</div>

<h5>Gejala yang dipilih:</h5>
<ul class="list-group">
    @foreach($gejala_selected as $g)
    @php
    $cf_user = collect(session('jawaban_gejala'))->firstWhere('gejala_id', $g->id)['cf_user'] ?? 0;
    @endphp
    <li class="list-group-item">
        {{ $g->nama_gejala }} - CF User: {{ round($cf_user * 100, 2) }}%
    </li>
    @endforeach
</ul>
@endsection