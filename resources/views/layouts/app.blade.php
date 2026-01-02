<!DOCTYPE html>
<html lang="en">

<!-- ==================== HEAD START ==================== -->
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sejiwa')</title>

    <!-- ==================== BOOTSTRAP CSS START ==================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ==================== BOOTSTRAP CSS END ==================== -->

    <!-- ==================== GOOGLE FONT START ==================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <!-- ==================== GOOGLE FONT END ==================== -->

    <!-- ==================== GLOBAL FONT STYLE START ==================== -->
    <style>
        body {
            font-family: 'Bricolage Grotesque', system-ui, -apple-system, 'Segoe UI', sans-serif;
        }
    </style>
    <!-- ==================== GLOBAL FONT STYLE END ==================== -->
</head>
<!-- ==================== HEAD END ==================== -->

<body>

    <!-- ==================== NAVBAR START ==================== -->
    @include('partials.navbar')
    <!-- ==================== NAVBAR END ==================== -->

    <!-- ==================== MAIN CONTENT START ==================== -->
    <div class="container mt-4">
        @yield('content')
    </div>
    <!-- ==================== MAIN CONTENT END ==================== -->

    <!-- ==================== BOOTSTRAP JS START ==================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ==================== BOOTSTRAP JS END ==================== -->

</body>
</html>
