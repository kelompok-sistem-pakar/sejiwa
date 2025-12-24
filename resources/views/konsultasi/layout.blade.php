@extends('layouts.app')

@section('content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->

<div class="row">
    <!-- Sidebar tracker -->
    <div class="col-md-3 bg-light vh-100 p-3">
        <h4>Konsultasi</h4>
        <ul class="list-group">
            <li class="list-group-item {{ request()->is('konsultasi/step1') ? 'active' : '' }}">Step 1: Data Diri</li>
            <li class="list-group-item {{ request()->is('konsultasi/step2') ? 'active' : '' }}">Step 2: Pilih Gejala</li>
            <li class="list-group-item {{ request()->is('konsultasi/step3') ? 'active' : '' }}">Step 3: Review</li>
            <li class="list-group-item {{ request()->is('konsultasi/step4') ? 'active' : '' }}">Step 4: Hasil</li>
        </ul>
    </div>

    <!-- Content konsultasi -->
    <div class="col-md-9 p-4">
        @yield('konsultasi_content')
    </div>
</div>
@endsection