@extends('layouts.app')

@section('content')

<!-- PERHATIKAN -->
<!-- TODO NISA/WISNU: Tolong styling bagian ini -->
<head>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">

    <!-- FONT DEFAULT -->
    <style>
        body {
            font-family: 'Bricolage Grotesque', system-ui, -apple-system, 'Segoe UI', sans-serif;
        }
    </style>
</head>

<div class="d-flex" style="min-height:100vh">
    <!-- Sidebar Admin -->
    <aside class="bg-dark text-white p-3" style="width:250px">
        <h4 class="mb-4">Admin Sejiwa</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ url('/admin/konsultasi') }}" class="nav-link text-white {{ request()->is('admin/konsultasi*') ? 'active' : '' }}">Konsultasi</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ url('/admin/gejala') }}" class="nav-link text-white {{ request()->is('admin/gejala*') ? 'active' : '' }}">Gejala</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ url('/admin/penyakit') }}" class="nav-link text-white {{ request()->is('admin/penyakit*') ? 'active' : '' }}">Penyakit</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ url('/admin/user') }}" class="nav-link text-white {{ request()->is('admin/user*') ? 'active' : '' }}">User</a>
            </li>
            <li class="nav-item mt-4">
                <a href="{{ url('/logout') }}" class="nav-link text-danger">Logout</a>
            </li>
        </ul>
    </aside>

    <!-- Content Admin -->
    <main class="flex-fill p-4 bg-light">
        @yield('admin_content')
    </main>

</div>
@endsection