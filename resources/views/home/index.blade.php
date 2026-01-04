@extends('layouts.app')

@section('title', 'Home')

@section('content')

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">

    <style>
        /* FONT DEFAULT */
        body {
            font-family: 'Bricolage Grotesque', system-ui, -apple-system, 'Segoe UI', sans-serif;
        }

        /* CUSTOM COLORS (Bootstrap doesn't have this specific Lime Green) */
        .bg-lime-gradient {
            background: linear-gradient(135deg, #e9ffb7, #d4ff6a);
        }

        .btn-lime {
            background-color: #b6f547;
            color: #fff;
            border: 1px solid transparent;
        }

        .btn-lime:hover {
            border-color: #6fae2e;
        }

        .text-lime {
            color: #b6f547;
        }

        /* Custom Specific Gradients for Cards */
        .bg-card-1 {
            background: linear-gradient(128deg, #ffca92 20%, #ffffff 100%);
        }

        .bg-card-2 {
            background: linear-gradient(218deg, #ff9d9a 20%, #ffffff 100%);
        }

        .bg-card-3 {
            background: linear-gradient(141deg, #a2edf1 20%, #ffffff 100%);
        }

        .bg-card-4 {
            background: linear-gradient(139deg, #bbefca 0%, #ffffff 100%);
        }

        /* Helpers for Rotation & Specific Heights */
        .h-520px {
            height: 520px;
        }

        .h-650px {
            height: 650px;
        }

        .card-pin {
            width: 60px;
            height: 60px;
            object-fit: contain;
            top: -2px;
        }

        .card-inner-box {
            height: 220px;
        }
    </style>
</head>

<section class="hero py-0">
    <div class="container">
        <div class="row align-items-start pt-5">

            {{-- LEFT CONTENT --}}
            <div class="col-md-6 pt-md-5 mt-4">
                <h1 class="fw-bold mb-4 display-4 lh-sm">
                    Memulai Dari Gejala <br>
                    Menuju Solusi
                </h1>

                <p class="text-muted mb-4 fs-5" style="max-width:480px;">
                    Membantu mengidentifikasi kemungkinan gangguan kesehatan mental
                    melalui analisis gejala secara sistematis dan terstruktur.
                </p>

                <div class="d-flex gap-3">

                    <a id="btnKonsult"
                        href="{{ url('/konsultasi/step1') }}"
                        class="btn btn-lime px-4 py-2 rounded-1 transition-all">
                        Konsult Sekarang Yuk
                    </a>

                    <a href="#gejala"
                        class="btn px-4 py-2 rounded-1 border transition-all text-dark"
                        style="border-color: #ccc;"
                        onmouseover="
                           this.style.setProperty('background', '#b6f547', 'important');
                           this.style.setProperty('color', '#ffffff', 'important');
                           this.style.setProperty('border-color', '#b6f547', 'important');
                           
                           const btnA = document.getElementById('btnKonsult');
                           btnA.style.setProperty('background', 'transparent', 'important');
                           btnA.style.setProperty('color', '#000000', 'important'); 
                           btnA.style.setProperty('border', '1px solid #ccc', 'important');
                       "
                        onmouseout="
                           this.style.setProperty('background', 'transparent', 'important');
                           this.style.setProperty('color', '#000000', 'important');
                           this.style.setProperty('border-color', '#ccc', 'important');

                           const btnA = document.getElementById('btnKonsult');
                           btnA.style.setProperty('background', '#b6f547', 'important');
                           btnA.style.setProperty('color', '#ffffff', 'important');
                           btnA.style.setProperty('border', '1px solid transparent', 'important');
                       ">
                        Explore Gejala
                    </a>

                </div>
            </div>

            {{-- RIGHT VISUAL --}}
            <div class="col-md-6 position-relative">

                {{-- Green Background Container --}}
                <div class="bg-lime-gradient p-5 h-520px position-relative rounded-5">

                    {{-- Inner Layer --}}
                    <div class="position-absolute top-0 start-0 end-0 bottom-0 m-4 rounded-4"
                        style="background:rgba(255,255,255,0.35);"></div>

                    {{-- Hero Image --}}
                    <img src="{{ asset('img/hero.png') }}"
                        alt="Psychologist"
                        class="position-relative z-2 h-100 object-fit-contain d-block mx-auto"
                        style="bottom:0px;">

                    {{-- Floating Card --}}
                    <div class="position-absolute bg-white rounded-4 p-3 d-flex align-items-center gap-2 z-3 shadow"
                        style="right:30px; bottom:60px;">

                        <img src="{{ asset('img/avatar-small.jpg') }}"
                            class="rounded-3 object-fit-cover"
                            style="width:40px; height:40px;">

                        <div>
                            <div class="fw-semibold lh-1">Psychologist</div>
                            <div class="text-warning small" style="font-size: 0.75rem;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Social Icons --}}
                <div class="position-absolute start-0 top-50 translate-middle-y ms-n4">
                    <a href="#" class="d-block mb-3 fs-4 text-dark"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="d-block mb-3 fs-4 text-dark"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="d-block fs-4 text-dark"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 display-5">Cara Konsultasi</h2>
        <p class="text-muted mb-5 mx-auto" style="max-width:600px;">
            Proses analisis kami dirancang secara sistematis untuk memberikan hasil yang akurat melalui empat tahapan sederhana
        </p>

        <div class="position-relative h-650px">

            <svg width="100%" height="100%" class="position-absolute top-0 start-0 z-1">
                <path d="M 330 550 C 470 420 630 680 800 550" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
                <path d="M 300 100 C 550 400 450 1 700 100" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
                <path d="M 300 450 C 350 100 650 600 800 250" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
            </svg>

            <div class="position-absolute z-2" style="top:-10px; left:100px; transform:rotate(-6deg);">
                <div class="position-relative pt-3" style="width:260px;">
                    <div class="bg-white border rounded-4 p-2 shadow">
                        <img src="{{ asset('img/pin_oranye.png') }}" class="position-absolute start-50 translate-middle-x card-pin">
                        <div class="mt-4 bg-card-1 rounded-3 p-4 text-start card-inner-box">
                            <div class="fw-bold fs-3 mb-1">01</div>
                            <div class="fw-semibold mb-2">Mengisi Data Diri Pasien</div>
                            <p class="small mb-0">Masukkan informasi dasar Anda secara jujur untuk membantu sistem memahami profil pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute z-2" style="top:20px; right:180px; transform:rotate(6deg);">
                <div class="position-relative pt-3" style="width:260px;">
                    <div class="bg-white border rounded-4 p-2 shadow">
                        <img src="{{ asset('img/pin_red.png') }}" class="position-absolute start-50 translate-middle-x card-pin">
                        <div class="mt-4 bg-card-2 rounded-3 p-4 text-start card-inner-box">
                            <div class="fw-bold fs-3 mb-1">02</div>
                            <div class="fw-semibold mb-2">Menjawab Pertanyaan</div>
                            <p class="small mb-0">Pilih gejala yang Anda rasakan dan tentukan tingkat keyakinan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute z-2" style="bottom:30px; left:180px; transform:rotate(5deg);">
                <div class="position-relative pt-3" style="width:260px;">
                    <div class="bg-white border rounded-4 p-2 shadow">
                        <img src="{{ asset('img/pin_blue.png') }}" class="position-absolute start-50 translate-middle-x card-pin">
                        <div class="mt-4 bg-card-3 rounded-3 p-4 text-start card-inner-box">
                            <div class="fw-bold fs-3 mb-1">03</div>
                            <div class="fw-semibold mb-2">Konfirmasi & Proses</div>
                            <p class="small mb-0">Tinjau kembali jawaban sebelum sistem melakukan perhitungan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute z-2" style="bottom:0px; right:100px; transform:rotate(-6deg);">
                <div class="position-relative pt-3" style="width:260px;">
                    <div class="bg-white border rounded-4 p-2 shadow">
                        <img src="{{ asset('img/pin_green.png') }}" class="position-absolute start-50 translate-middle-x card-pin">
                        <div class="mt-4 bg-card-4 rounded-3 p-4 text-start card-inner-box">
                            <div class="fw-bold fs-3 mb-1">04</div>
                            <div class="fw-semibold mb-2">Hasil</div>
                            <p class="small mb-0">Dapatkan hasil tingkat kepastian diagnosis beserta penjelasannya.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection