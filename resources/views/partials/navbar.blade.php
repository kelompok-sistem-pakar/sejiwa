<!-- ==================== NAVBAR START ==================== -->
<nav
    class="navbar navbar-expand-lg navbar-light sticky-top bg-white"
    style="height:60px;border-bottom:1px solid #f0f0f0;backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);"
>
    <div class="container">

        <!-- ==================== BRAND / LOGO START ==================== -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Sejiwa Logo" height="45">
        </a>
        <!-- ==================== BRAND / LOGO END ==================== -->

        <!-- ==================== NAV MENU START ==================== -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">

                <!-- HOME -->
                <li class="nav-item">
                    <a
                        class="nav-link px-3 {{ request()->is('/') ? 'active fw-bold' : '' }}"
                        href="{{ url('/') }}"
                    >
                        Home
                    </a>
                </li>

                <!-- KONSULTASI -->
                <li class="nav-item">
                    <a
                        class="nav-link px-3 {{ request()->is('konsultasi*') ? 'active fw-bold' : '' }}"
                        href="{{ route('konsultasi.step1') }}"
                    >
                        Konsultasi
                    </a>
                </li>

                <!-- TENTANG -->
                <li class="nav-item">
                    <a
                        class="nav-link px-3 {{ request()->is('about') ? 'active fw-bold' : '' }}"
                        href="{{ url('/about') }}"
                    >
                        Tentang
                    </a>
                </li>

            </ul>
        </div>
        <!-- ==================== NAV MENU END ==================== -->

        <!-- ==================== ACTION BUTTON START ==================== -->
        <div class="d-flex">
            <a
                href="{{ route('admin.konsultasi.index') }}"
                class="btn btn-outline-dark px-4 py-1"
                style="border-radius:4px;"
            >
                Login
            </a>
        </div>
        <!-- ==================== ACTION BUTTON END ==================== -->

    </div>
</nav>
<!-- ==================== NAVBAR END ==================== -->


<!-- ==================== NAVBAR STYLE START ==================== -->
<style>
    .navbar-nav .nav-link {
        color: #888 !important;
        transition: 0.3s;
        position: relative;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #B9F04F !important;
    }

    .navbar-toggler {
        border: none;
    }
</style>
<!-- ==================== NAVBAR STYLE END ==================== -->
