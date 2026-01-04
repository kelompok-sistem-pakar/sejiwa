<!-- ==================== SIDEBAR ADMIN START ==================== -->
<aside class="p-3 bg-light rounded d-flex flex-column" style="width:250px;">

    <!-- ===== LOGO APLIKASI ===== -->
    <div class="d-flex align-items-center justify-content-center mb-4">
        <img src="{{ asset('img/logo.png') }}" alt="Sejiwa Logo" class="img-fluid" style="max-height:60px;">
    </div>

    <!-- ===== MENU NAVIGASI ADMIN (Bootstrap) ===== -->
    <div class="list-group">
        <a href="{{ url('/admin/konsultasi') }}"
            class="list-group-item list-group-item-action {{ request()->is('admin/konsultasi*') ? 'active' : '' }}">
            Konsultasi
        </a>

        <a href="{{ url('/admin/gejala') }}"
            class="list-group-item list-group-item-action {{ request()->is('admin/gejala*') ? 'active' : '' }}">
            Gejala
        </a>

        <a href="{{ url('/admin/penyakit') }}"
            class="list-group-item list-group-item-action {{ request()->is('admin/penyakit*') ? 'active' : '' }}">
            Penyakit
        </a>

        <a href="{{ url('/admin/mahasiswa') }}"
            class="list-group-item list-group-item-action {{ request()->is('admin/mahasiswa*') ? 'active' : '' }}">
            Mahasiswa
        </a>

        <a href="{{ url('/') }}" class="list-group-item list-group-item-action text-danger mt-3">
            Log out
        </a>
    </div>

</aside>
<!-- ==================== SIDEBAR ADMIN END ==================== -->