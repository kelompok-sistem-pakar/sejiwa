@extends('layouts.app')

@section('title', 'Home')

@section('content')
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

<section class="hero py-0 padding-top:-40px;">
    <div class="container">
        <div class="row align-items-top">

            {{-- LEFT CONTENT --}}
            <div class="col-md-6 top-40" style="padding-top:40px;">
                <h1 class="fw-bold mb-4" style="font-size:3rem;line-height:1.2;">
                    Memulai Dari Gejala <br>
                    Menuju Solusi
                </h1>

                <p class="text-muted mb-4" style="max-width:480px;">
                    Membantu mengidentifikasi kemungkinan gangguan kesehatan mental
                    melalui analisis gejala secara sistematis dan terstruktur.
                </p>

                <div class="d-flex gap-3">

                    <!-- Konsult -->
                    <a id="btnKonsult"
                    href="{{ url('/konsultasi/step1') }}"
                    class="btn px-4 py-2 text-white"
                    style="border-radius:4px;background:#b6f547;border:1px solid transparent;"
                    onmouseover="this.style.border='1px solid #6fae2e'"
                    onmouseout="this.style.border='1px solid #fff'">
                        Konsult Sekarang Yuk
                    </a>

                    <a href="#gejala"
   class="btn px-4 py-2"
   style="border-radius:4px; background:transparent; border:1px solid #ccc; color:#000; transition: all 0.3s ease;"
   onmouseover="
       /* Efek Tombol B (Diri Sendiri) */
       this.style.setProperty('background', '#b6f547', 'important');
       this.style.setProperty('color', '#ffffff', 'important');
       this.style.setProperty('border-color', '#b6f547', 'important');

       /* Efek Tombol A (Konsult) - Paksa Teks Jadi Hitam */
       const btnA = document.getElementById('btnKonsult');
       btnA.style.setProperty('background', 'transparent', 'important');
       btnA.style.setProperty('color', '#000000', 'important'); 
       btnA.style.setProperty('border', '1px solid #ccc', 'important');
   "
   onmouseout="
       /* Kembalikan Tombol B */
       this.style.setProperty('background', 'transparent', 'important');
       this.style.setProperty('color', '#000000', 'important');
       this.style.setProperty('border-color', '#ccc', 'important');

       /* Kembalikan Tombol A ke Hijau */
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

                {{-- Green Background --}}
                <div style="
                    position:relative;
                    border-radius:32px;
                    background:linear-gradient(135deg,#e9ffb7,#d4ff6a);
                    padding:40px;
                    height:520px;
                ">

                    {{-- Inner Layer --}}
                    <div style="
                        position:absolute;
                        inset:20px;
                        border-radius:24px;
                        background:rgba(255,255,255,0.35);
                        pading:0px;
                    "></div>

                    {{-- Hero Image --}}
                    <img src="{{ asset('img/hero.png') }}"
                        alt="Psychologist"
                        style="
                            position:relative;
                            z-index:2;
                            height:100%;
                            object-fit:contain;
                            bottom:0px;
                         ">

                    {{-- Floating Card --}}
                    <div style="
                        position:absolute;
                        right:30px;
                        bottom:60px;
                        background:#fff;
                        border-radius:16px;
                        padding:12px 16px;
                        display:flex;
                        align-items:center;
                        gap:10px;
                        z-index:3;
                        box-shadow:0 8px 20px rgba(0,0,0,.1);
                    ">
                        <img src="{{ asset('img/avatar-small.jpg') }}"
                            style="width:40px;height:40px;border-radius:12px;object-fit:cover;">
                        <div>
                            <div class="fw-semibold">Psychologist</div>
                            <div class="text-warning small">
                                ★ ★ ★ ★ ★
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Social Icons --}}
                <div style="
                    position:absolute;
                    left:-20px;
                    top:50%;
                    transform:translateY(-50%);
                ">
                    <a href="#" class="d-block mb-3 fs-4 text-dark">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="d-block mb-3 fs-4 text-dark">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="d-block fs-4 text-dark">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="font-size:2.3rem;">Cara Konsultasi</h2>
        <p class="text-muted mb-5" style="max-width:600px;margin:auto;">
            Proses analisis kami dirancang secara sistematis untuk memberikan hasil yang akurat melalui empat tahapan sederhana
        </p>

        <div class="position-relative" style="height:650px;">
            <svg width="100%" height="100%" style="position:absolute;inset:0;z-index:1;">
                <path d="M 330 550 C 470 420 630 680 800 550" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
                <path d="M 300 100 C 550 400 450 1 700 100" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
                <path d="M 300 450 C 350 100 650 600 800 250" stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none" />
            </svg>

            <!-- CARD 01 -->
            <div style="position:absolute;top:-10px;left:100px;transform:rotate(-6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">

                    <!-- Outer -->
                    <div style="background:#fff;border:1px solid #e0e0e0;border-radius:18px;padding:8px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">
                        <!-- Pin -->
                        <img src="{{ asset('img/pin_oranye.png') }}" style="position:absolute;left:50%;transform:translateX(-50%);width:60px;height:60px;object-fit:contain;top:-2px; ">

                        <!-- Inner -->
                        <div style="margin:40px 0 0 0;background: linear-gradient(128deg, #ffca92 20%, #ffffffff 100%);border-radius:14px;padding:20px;text-align:left;Height:220px;">
                            <div class="fw-bold fs-3 mb-1">01</div>
                            <div class="fw-semibold mb-2">Mengisi Data Diri Pasien</div>
                            <p class="small mb-0">
                                Masukkan informasi dasar Anda secara jujur untuk membantu sistem memahami profil pengguna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 02 -->
            <div style="position:absolute;top:20px;right:180px;transform:rotate(6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <!-- Outer -->
                    <div style="background:#fff;border:1px solid #e0e0e0;border-radius:18px;padding:8px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">
                        <!-- Pin -->
                        <img src="{{ asset('img/pin_red.png') }}" style="position:absolute;left:50%;transform:translateX(-50%);width:60px;height:60px;object-fit:contain;top:-2px;">
                        <!-- Inner -->
                        <div style="margin:40px 0 0 0;background:linear-gradient(218deg,#ff9d9a 20%,#fff 100%);border-radius:14px;padding:20px;text-align:left;Height:220px;">
                            <div class="fw-bold fs-3 mb-1">02</div>
                            <div class="fw-semibold mb-2">Menjawab Pertanyaan </div>
                            <p class="small mb-0">
                                Pilih gejala yang Anda rasakan dan tentukan tingkat keyakinan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 03 -->
            <div style="position:absolute;bottom:30px;left:180px;transform:rotate(5deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <!-- Outer -->
                    <div style="background:#fff;border:1px solid #e0e0e0;border-radius:18px;padding:8px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">
                        <!-- Pin -->
                        <img src="{{ asset('img/pin_blue.png') }}" style="position:absolute;left:50%;transform:translateX(-50%);width:60px;height:60px;object-fit:contain;top:-2px;">
                        <!-- Inner -->
                        <div style="margin:40px 0 0 0;background:linear-gradient(141deg,#a2edf1 20%,#fff 100%);border-radius:14px;padding:20px;text-align:left;height:220px;">
                            <div class="fw-bold fs-3 mb-1">03</div>
                            <div class="fw-semibold mb-2">Konfirmasi & Proses</div>
                            <p class="small mb-0">
                                Tinjau kembali jawaban sebelum sistem melakukan perhitungan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 04 -->
            <div style="position:absolute;bottom:0px;right:100px;transform:rotate(-6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <!-- Outer -->
                    <div style="background:#fff;border:1px solid #e0e0e0;border-radius:18px;padding:8px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">
                        <!-- Pin -->
                        <img src="{{ asset('img/pin_green.png') }}" style="position:absolute;left:50%;transform:translateX(-50%);width:60px;height:60px;object-fit:contain;top:-2px;">
                        <!-- Inner -->
                        <div style="margin:40px 0 0 0;background:linear-gradient(139deg,#bbefca 0%,#fff 100%);border-radius:14px;padding:20px;text-align:left;height:220px;">
                            <div class="fw-bold fs-3 mb-1">04</div>
                            <div class="fw-semibold mb-2">Hasil</div>
                            <p class="small mb-0">
                                Dapatkan hasil tingkat kepastian diagnosis beserta penjelasannya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection