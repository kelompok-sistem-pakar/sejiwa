@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong buat bagian home yaa -->

<div class="text-center">
    <h1>Selamat Datang di Sejiwa</h1>
    <p>Platform Konsultasi Penyakit Mental untuk Mahasiswa</p>
    <a href="{{ route('konsultasi.step1') }}" class="btn btn-primary h-100">Mulai Konsultasi</a>
</div>
@endsection