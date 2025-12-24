<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white" style="height: 60px; border-bottom: 1px solid #f0f0f0; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Sejiwa Logo" height="45">
        </a>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('/') ? 'active fw-bold' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('konsultasi*') ? 'active fw-bold' : '' }}" href="{{ route('konsultasi.step1') }}">Konsultasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('about') ? 'active fw-bold' : '' }}" href="{{ url('/about') }}">Tentang</a>
                </li>
            </ul>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.konsultasi.index') }}" class="btn btn-outline-dark px-4 py-1" style="border-radius: 4px;">
                Login
            </a>
        </div>
    </div>
</nav>

<style>
    /* Styling Teks Navigasi */
    .navbar-nav .nav-link {
        color: #888 !important; /* Warna abu-abu saat tidak aktif */
        transition: 0.3s;
        position: relative;
    }

    /* Warna saat Hover atau Aktif */
    .navbar-nav .nav-link:hover, 
    .navbar-nav .nav-link.active {
        color: #B9F04F !important; /* Warna lebih gelap/hitam */
    }

    /* Hilangkan border-button default jika ada */
    .navbar-toggler {
        border: none;
    }
</style>