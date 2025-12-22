@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1>Selamat Datang di Sejiwa</h1>
    <p>Platform Konsultasi Penyakit Mental untuk Mahasiswa</p>
    <a href="{{ url('/konsultasi') }}" class="btn btn-primary">Mulai Konsultasi</a>
</div>
@endsection