@extends('konsultasi.layout')

@section('konsultasi_content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<h2>Step 3: Review Gejala</h2>

@if(count($gejala_selected) > 0)
<ul class="list-group">
    @foreach($gejala_selected as $g)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $g->nama_gejala }}
        @php
        // Cari CF user dari session jawaban
        $jawaban = session('jawaban_gejala', []);
        $cf = 0;
        foreach($jawaban as $item){
        if($item['gejala_id'] == $g->id){
        $cf = $item['cf_user'] * 100; // ubah ke persen
        }
        }
        @endphp
        <span>{{ $cf }}%</span>
    </li>
    @endforeach
</ul>
<form action="{{ route('konsultasi.step3.submit') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success mt-3">Lihat Hasil Konsultasi</button>
</form>
@else
<p>Belum ada gejala yang dipilih. <a href="{{ route('konsultasi.step2') }}">Kembali ke Step 2</a></p>
@endif
@endsection