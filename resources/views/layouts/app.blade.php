<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sejiwa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
        <!-- TODO: Tambahkan alert / flash message jika perlu -->
        <!-- TODO: Pastikan margin dan padding sesuai desain UI/UX -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- TODO: Tambahkan script khusus halaman jika perlu -->
</body>

</html>