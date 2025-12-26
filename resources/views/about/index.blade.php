@extends('layouts.app')
@section('title', 'About')

@section('content')

<!-- ================= STYLE START ================= -->
<style>
    .team-scroll-container::-webkit-scrollbar {
        display: none;
    }

    .team-scroll-container {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .member-img {
        transition: all 0.5s ease;
        filter: grayscale(0.2) brightness(0.95);
    }

    .card:hover .member-img {
        filter: grayscale(0) brightness(1);
        transform: scale(1.08);
    }
</style>
<!-- ================= STYLE END ================= -->


<!-- ================= SECTION HERO START ================= -->
<section
    class="hero-section py-5 d-block"
    style="
        height:560px;
        border:1px solid rgba(0,0,0,0.05);
        background-image: radial-gradient(
            circle at 0% 0%,
            rgba(206, 255, 109, 1) 0%,
            rgba(255, 255, 255, 1) 30%,
            rgba(255, 255, 255, 1) 82%,
            rgba(206, 255, 109, 1) 100%
        );
        border-radius:14px;
    ">
    <div class="container py-0">

        <!-- HERO HEADER START -->
        <div
            class="row align-items-end"
            style="margin-top:-20px; margin-bottom:40px;">
            <div class="col-md-7 ps-md-4">
                <span
                    class="badge rounded-pill px-3 py-2 mb-3"
                    style="
                        background:#fff;
                        border:1px solid #e0e0e0;
                        color:#000;
                        font-size:10px;
                        letter-spacing:1.2px;
                        font-weight:700;
                        text-transform:uppercase;
                    ">
                    EXPERTISE
                </span>

                <h1
                    class="fw-bold mt-2 mb-0"
                    style="font-size:2.8rem; letter-spacing:-1.8px; line-height:1.<h1 class='fw-bold mb-4' style='font-size:3rem;line-height:1.2;'>">
                    Kekuatan Kolektif untuk <br>
                    Kesejahteraan Mental Anda
                </h1>
            </div>

            <div class="col-md-5 pe-md-4">
                <p
                    style="
                        font-size:15px;
                        color:#555;
                        line-height:1.6;
                        margin-bottom:5px;
                    ">
                    Sejiwa menghadirkan ruang aman digital yang menggabungkan empati manusia dengan presisi teknologi untuk mendukung perjalanan kesehatan mental Anda secara utuh.
                </p>
            </div>
        </div>
        <!-- HERO HEADER END -->


        <!-- TEAM SCROLL START -->
        <div
            class="team-scroll-container"
            style="
                display:flex;
                gap:20px;
                overflow-x:auto;
                padding-bottom:30px;
                scroll-snap-type:x mandatory;
                -webkit-overflow-scrolling:touch;
            ">

            <!-- TEAM CARD 1 START -->
            <div style="flex:0 0 220px; scroll-snap-align:start;">
                <div class="card border-0 position-relative" style="border-radius:16px; overflow:hidden;">
                    <div
                        style="
                            position:relative;
                            border-radius:16px;
                            overflow:hidden;
                            border:2px solid #fff;
                            background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 100%);
                            padding-bottom:133.33%;
                        ">
                        <img
                            src="{{ asset('img/nisa.png') }}"
                            class="position-absolute w-100 h-100 member-img"
                            style="object-fit:cover;">
                    </div>

                    <div
                        class="position-absolute bottom-0 start-0"
                        style="
                            width:100%;
                            height:30%;
                            border:2px solid #fff;
                            border-top:none;
                            border-radius:0 0 16px 16px;
                            backdrop-filter:blur(10px);
                            background:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.92));
                            padding:12px;
                        ">
                        <div style="line-height:1.3">
                            <div class="fw-semibold text-white" style="font-size:16px;">Anissa Suci</div>
                            <div class="text-white" style="font-size:11px; opacity:.7;">231110162</div>
                            <div class="text-white" style="font-size:11px; color:#ceff6d !important; font-weight:600;">
                                Frontend Developer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM CARD 1 END -->


            <!-- TEAM CARD 2 START -->
            <div style="flex:0 0 220px; scroll-snap-align:start;">
                <div class="card border-0 position-relative" style="border-radius:16px; overflow:hidden;">
                    <div
                        style="
                            position:relative;
                            border-radius:16px;
                            overflow:hidden;
                            border:2px solid #fff;
                            background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 100%);
                            padding-bottom:133.33%;
                        ">
                        <img
                            src="{{ asset('img/wisnu.png') }}"
                            class="position-absolute w-100 h-100 member-img"
                            style="object-fit:cover;">
                    </div>

                    <div
                        class="position-absolute bottom-0 start-0"
                        style="
                            width:100%;
                            height:30%;
                            border-radius:0 0 16px 16px;
                            backdrop-filter:blur(10px);
                            background:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.92));
                            padding:12px;
                        ">
                        <div style="line-height:1.3">
                            <div class="fw-semibold text-white" style="font-size:16px;">Wisnu Eka</div>
                            <div class="text-white" style="font-size:11px; opacity:.7;">231110113</div>
                            <div class="text-white" style="font-size:11px; color:#ceff6d !important; font-weight:600;">
                                UI/UX & Frontend
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM CARD 2 END -->


            <!-- TEAM CARD 3 START -->
            <div style="flex:0 0 220px; scroll-snap-align:start;">
                <div class="card border-0 position-relative" style="border-radius:16px; overflow:hidden;">
                    <div
                        style="
                            position:relative;
                            border-radius:16px;
                            overflow:hidden;
                            border:2px solid #fff;
                            background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 100%);
                            padding-bottom:133.33%;
                        ">
                        <img
                            src="{{ asset('img/mario.png') }}"
                            class="position-absolute w-100 h-100 member-img"
                            style="object-fit:cover;">
                    </div>

                    <div
                        class="position-absolute bottom-0 start-0"
                        style="
                            width:100%;
                            height:30%;
                            backdrop-filter:blur(10px);
                            background:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.92));
                            padding:12px;
                        ">
                        <div style="line-height:1.3">
                            <div class="fw-semibold text-white" style="font-size:16px;">Mario Bhona</div>
                            <div class="text-white" style="font-size:11px; opacity:.7;">231110031</div>
                            <div class="text-white" style="font-size:11px; color:#ceff6d !important; font-weight:600;">
                                Backend Developer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM CARD 3 END -->


            <!-- TEAM CARD 4 START -->
            <div style="flex:0 0 220px; scroll-snap-align:start;">
                <div class="card border-0 position-relative" style="border-radius:16px; overflow:hidden;">
                    <div
                        style="
                            position:relative;
                            border-radius:16px;
                            overflow:hidden;
                            border:2px solid #fff;
                            background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 100%);
                            padding-bottom:133.33%;
                        ">
                        <img
                            src="{{ asset('img/ipan.png') }}"
                            class="position-absolute w-100 h-100 member-img"
                            style="object-fit:cover;">
                    </div>

                    <div
                        class="position-absolute bottom-0 start-0"
                        style="
                            width:100%;
                            height:30%;
                            backdrop-filter:blur(10px);
                            background:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.92));
                            padding:12px;
                        ">
                        <div style="line-height:1.3">
                            <div class="fw-semibold text-white" style="font-size:16px;">Irfan Awaludin</div>
                            <div class="text-white" style="font-size:11px; opacity:.7;">231110093</div>
                            <div class="text-white" style="font-size:11px; color:#ceff6d !important; font-weight:600;">
                                Analis & Dokumentasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM CARD 4 END -->


            <!-- TEAM CARD 5 START -->
            <div style="flex:0 0 220px; scroll-snap-align:start;">
                <div class="card border-0 position-relative" style="border-radius:16px; overflow:hidden;">
                    <div
                        style="
                            position:relative;
                            border-radius:16px;
                            overflow:hidden;
                            border:2px solid #fff;
                            background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 100%);
                            padding-bottom:133.33%;
                        ">
                        <img
                            src="{{ asset('img/dwiki.png') }}"
                            class="position-absolute w-100 h-100 member-img"
                            style="object-fit:cover;">
                    </div>

                    <div
                        class="position-absolute bottom-0 start-0"
                        style="
                            width:100%;
                            height:30%;
                            backdrop-filter:blur(10px);
                            background:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.92));
                            padding:12px;
                        ">
                        <div style="line-height:1.3">
                            <div class="fw-semibold text-white" style="font-size:16px;">Dwiki Jireh</div>
                            <div class="text-white" style="font-size:11px; opacity:.7;">231110043</div>
                            <div class="text-white" style="font-size:11px; color:#ceff6d !important; font-weight:600;">
                                Perancangan Sistem
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM CARD 5 END -->

        </div>
        <!-- TEAM SCROLL END -->

    </div>
</section>
<!-- ================= SECTION HERO END ================= -->


<!-- ================= SECTION METODE & CONFIDENCE START ================= -->
<section style="padding-top:40px;">
    <div class="container">

        <!-- ROW METODE ATAS START -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div
                    style="
                        border-radius:12px;
                        border:1px solid #B9F04F;
                        padding:20px;
                        background:radial-gradient(circle at 0% 0%, rgba(206, 255, 109, 1) 0%, rgba(255, 255, 255, 1) 30%, rgba(255, 255, 255, 1) 100%);
                        box-sizing:border-box;
                    ">
                    <h3>Metode</h3>
                    <p style="color:#2f2f2f; text-align:justify;">
                        Metode Certainty Factor (CF) digunakan untuk mengukur tingkat kepastian
                        kemungkinan gangguan kesehatan mental berdasarkan gejala yang dilaporkan.
                        Teknik ini membantu dalam pengambilan keputusan diagnosis dengan menghitung
                        nilai kepercayaan antara 0 hingga 1, memungkinkan analisis yang sistematis dan akurat.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div
                    style="
                        border-radius:12px;
                        border:1px solid #B9F04F;
                        padding:20px;
                        background:#fff;
                        box-sizing:border-box;
                    ">
                    <h3>Metode</h3>
                    <p style="color:#2f2f2f; text-align:justify;">
                        Metode Certainty Factor (CF) digunakan untuk mengukur tingkat kepastian
                        kemungkinan gangguan kesehatan mental berdasarkan gejala yang dilaporkan.
                        Teknik ini membantu dalam pengambilan keputusan diagnosis dengan menghitung
                        nilai kepercayaan antara 0 hingga 1, memungkinkan analisis yang sistematis dan akurat.
                    </p>
                </div>
            </div>
        </div>
        <!-- ROW METODE ATAS END -->


        <!-- ROW CONFIDENCE START -->
        <div class="row">
            <div class="col-12">
                <div
                    style="
                        border-radius:14px;
                        border:1px solid #B9F04F;
                        padding:20px;
                        background:radial-gradient(circle at 0% -150%, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 80%, rgba(206, 255, 109, 1) 100%);
                    ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>User Confidence</h2>
                            </div>

                            <div class="col-md-8">
                                <div class="row g-3">

                                    <!-- CONFIDENCE CARD 1 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Sangat Yakin</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, rgba(255,83,83,0.96) 0%, #ffeaeaff 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        80% – 100%<br>
                                                        Menunjukkan gejala yang dialami sangat kuat dan sesuai dengan kriteria klinis pakar.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CONFIDENCE CARD 2 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Yakin</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, #ff8453 0%, #FFF1E8 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        60% – 79%<br>
                                                        Menunjukkan kecenderungan gejala yang kuat dan memerlukan perhatian lebih lanjut.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CONFIDENCE CARD 3 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Cukup Yakin</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, #ffc953 0%, #FFF6DD 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        40% – 59%<br>
                                                        Menunjukkan tingkat kepastian sedang, di mana gejala mulai dirasakan namun belum dominan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CONFIDENCE CARD 4 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Kurang Yakin</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, #ffff53 0%, #FFFFEA 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        30% – 39%<br>
                                                        Gejala dirasakan samar atau dalam intensitas yang masih rendah.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CONFIDENCE CARD 5 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Tidak Tahu</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, #b5ff53 0%, #F3FFE6 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        1% – 29%<br>
                                                        Tingkat kepastian sangat rendah karena gejala sulit diidentifikasi.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CONFIDENCE CARD 6 -->
                                    <div class="col-md-4">
                                        <div class="card" style="border-radius:16px;border:1px solid #ddd;background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                                            <h5 class="card-title p-3">Tidak</h5>
                                            <div class="card" style="height:160px;margin:-8px 4px 4px;border-radius:14px;border:1px solid #fff;background:linear-gradient(135deg, #53ff62 0%, #E9FFEC 100%);">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        0%<br>
                                                        Gejala sama sekali tidak dirasakan dan tidak berpengaruh pada hasil akhir.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CONFIDENCE END -->

    </div>
</section>
<!-- ================= SECTION METODE & CONFIDENCE END ================= -->


<!-- ================= SECTION SPACER START ================= -->
<section class="py-5"></section>
<!-- ================= SECTION SPACER END ================= -->

@endsection