<!-- ==================== SIDEBAR ADMIN START ==================== -->
<aside class="m-0 p-3 d-flex flex-column"
       style="
            width:250px;
            height:100%;
            background:#B9F04F;
            border-radius:8px;
            margin:12px;
       ">

    <!-- ===== LOGO APLIKASI ===== -->
    <div class="d-flex align-items-center justify-content-top mb-4">
        <div style="
            width:100%;
            height:60px;
            border-radius:10px;
            background:#ffffff05;
            display:flex;
            align-items:center;
            justify-content:center;
            overflow:hidden;
        ">
            <img src="{{ asset('img/logo.png') }}"
                 alt="Sejiwa Logo"
                 style="
                    width:150px;
                    height:100px;
                    object-fit:contain;
                 ">
        </div>
    </div>

    <!-- ===== MENU NAVIGASI ADMIN ===== -->
    <ul class="nav flex-column gap-1">

        <!-- MENU KONSULTASI -->
        <li class="nav-item">
            <a href="{{ url('/admin/konsultasi') }}"
               class="nav-link px-3 py-2 {{ request()->is('admin/konsultasi*') ? 'fw-semibold' : '' }}"
               style="
                    border-radius:6px;
                    color:#2f2f2f;
                    background:{{ request()->is('admin/konsultasi*') ? '#dcff96ff' : 'transparent' }};
               ">
                Konsultasi
            </a>
        </li>

        <!-- MENU GEJALA -->
        <li class="nav-item">
            <a href="{{ url('/admin/gejala') }}"
               class="nav-link px-3 py-2 {{ request()->is('admin/gejala*') ? 'fw-semibold' : '' }}"
               style="
                    border-radius:6px;
                    color:#2f2f2f;
                    background:{{ request()->is('admin/gejala*') ? '#dcff96ff' : 'transparent' }};
               ">
                Gejala
            </a>
        </li>

        <!-- MENU PENYAKIT -->
        <li class="nav-item">
            <a href="{{ url('/admin/penyakit') }}"
               class="nav-link px-3 py-2 {{ request()->is('admin/penyakit*') ? 'fw-semibold' : '' }}"
               style="
                    border-radius:6px;
                    color:#2f2f2f;
                    background:{{ request()->is('admin/penyakit*') ? '#dcff96ff' : 'transparent' }};
               ">
                Penyakit
            </a>
        </li>

        <!-- MENU USER -->
        <li class="nav-item">
            <a href="{{ url('/admin/user') }}"
               class="nav-link px-3 py-2 {{ request()->is('admin/user*') ? 'fw-semibold' : '' }}"
               style="
                    border-radius:6px;
                    color:#2f2f2f;
                    background:{{ request()->is('admin/user*') ? '#dcff96ff' : 'transparent' }};
               ">
                User
            </a>
        </li>

        <!-- MENU LOG OUT -->
        <li class="nav-item mt-4">
            <a href="{{ url('/') }}"
               class="nav-link px-3 py-2"
               style="color:#dc3545">
                Log out
            </a>
        </li>

    </ul>

</aside>
<!-- ==================== SIDEBAR ADMIN END ==================== -->
