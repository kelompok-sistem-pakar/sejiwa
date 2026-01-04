@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
<style>
    header,
    nav,
    .navbar {
        display: none !important;
    }

    body {
        font-family: 'Bricolage Grotesque', system-ui, -apple-system, 'Segoe UI', sans-serif;
        height: 100%;
        overflow: hidden;
    }

    html {
        height: 100%;
    }
</style>

<div class="d-flex m-0 p-0 vh-100">
    <aside class="m-0 p-3 d-flex flex-column" style="width:250px; background:#B9F04F; border-radius:8px; margin:12px; height:100%;">
        <div class="d-flex align-items-center justify-content-center mb-4 rounded p-2" style="height:60px; background:rgba(255,255,255,0.05);">
            <img src="{{ asset('img/logo.png') }}" alt="Sejiwa Logo" class="img-fluid" style="max-width:150px; max-height:100px;">
        </div>

        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ url('/admin/konsultasi') }}" class="nav-link px-3 py-2" style="border-radius:6px; color:#2f2f2f; background:{{ request()->is('admin/konsultasi*') ? '#dcff96ff' : 'transparent' }};">
                    Konsultasi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/gejala') }}" class="nav-link px-3 py-2" style="border-radius:6px; color:#2f2f2f; background:{{ request()->is('admin/gejala*') ? '#dcff96ff' : 'transparent' }};">
                    Gejala
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/penyakit') }}" class="nav-link px-3 py-2" style="border-radius:6px; color:#2f2f2f; background:{{ request()->is('admin/penyakit*') ? '#dcff96ff' : 'transparent' }};">
                    Penyakit
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/mahasiswa') }}" class="nav-link px-3 py-2" style="border-radius:6px; color:#2f2f2f; background:{{ request()->is('admin/mahasiswa*') ? '#dcff96ff' : 'transparent' }};">
                    Mahasiswa
                </a>
            </li>
            <li class="nav-item mt-4">
                <a href="{{ url('/') }}" class="nav-link px-3 py-2 text-danger">
                    Log out
                </a>
            </li>
        </ul>
    </aside>

    <main class="flex-fill m-0 p-4 overflow-auto" style="background:#f9ffedff; border-radius:0 8px 8px 8px; margin:12px;">
        @yield('admin_content')
    </main>
</div>
@endsection