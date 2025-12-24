@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center">

            {{-- LEFT CONTENT --}}
            <div class="col-md-6">
                <h1 class="fw-bold mb-4" style="font-size:3rem;line-height:1.2;">
                    Memulai Dari Gejala <br>
                    Menuju Solusi
                </h1>

                <p class="text-muted mb-4" style="max-width:480px;">
                    Membantu mengidentifikasi kemungkinan gangguan kesehatan mental
                    melalui analisis gejala secara sistematis dan terstruktur.
                </p>

                <div class="d-flex gap-3">
                    <a href="{{ url('/konsultasi') }}"
                        class="btn px-4 py-2 text-white"
                        style="border-radius:20px;background:#b6f547;border:none;">
                        Konsult Sekarang Yuk
                    </a>

                    <a href="#gejala"
                        class="btn px-4 py-2"
                        style="border-radius:20px;border:1px solid #ccc;">
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
                    "></div>

                    {{-- Hero Image --}}
                    <img src="{{ asset('img/hero.png') }}"
                        alt="Psychologist"
                        style="
                            position:relative;
                            z-index:2;
                            height:100%;
                            object-fit:contain;
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

            <!-- Garis putus-putus -->
            <svg width="100%" height="100%" style="position:absolute;inset:0;z-index:1;">
                <path d="M 200 150 C 350 250, 550 50, 700 150"
                      stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none"/>
                <path d="M 200 350 C 350 450, 550 250, 700 350"
                      stroke="#b6f547" stroke-width="2" stroke-dasharray="6,6" fill="none"/>
            </svg>

            <!-- CARD 01 -->
            <div style="position:absolute;top:80px;left:80px;transform:rotate(-6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <!-- Pin -->
                    <div style="position:absolute;top:-18px;left:50%;transform:translateX(-50%);
                        width:28px;height:28px;background:#ffa726;border-radius:50%;
                        box-shadow:0 6px 12px rgba(0,0,0,.25);"></div>

                    <!-- Outer -->
                    <div style="background:#fff;border-radius:18px;padding:14px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">

                        <!-- Inner -->
                        <div style="background:#ffe0b2;border-radius:14px;padding:20px;text-align:left;">
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
            <div style="position:absolute;top:120px;right:120px;transform:rotate(6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <div style="position:absolute;top:-18px;left:50%;transform:translateX(-50%);
                        width:28px;height:28px;background:#ef5350;border-radius:50%;
                        box-shadow:0 6px 12px rgba(0,0,0,.25);"></div>

                    <div style="background:#fff;border-radius:18px;padding:14px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">

                        <div style="background:#ffcdd2;border-radius:14px;padding:20px;text-align:left;">
                            <div class="fw-bold fs-3 mb-1">02</div>
                            <div class="fw-semibold mb-2">Menjawab Pertanyaan Gejala</div>
                            <p class="small mb-0">
                                Pilih gejala yang Anda rasakan dan tentukan tingkat keyakinan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 03 -->
            <div style="position:absolute;bottom:160px;left:120px;transform:rotate(5deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <div style="position:absolute;top:-18px;left:50%;transform:translateX(-50%);
                        width:28px;height:28px;background:#42a5f5;border-radius:50%;
                        box-shadow:0 6px 12px rgba(0,0,0,.25);"></div>

                    <div style="background:#fff;border-radius:18px;padding:14px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">

                        <div style="background:#d7f4f8;border-radius:14px;padding:20px;text-align:left;">
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
            <div style="position:absolute;bottom:120px;right:120px;transform:rotate(-6deg);z-index:2;">
                <div style="position:relative;width:260px;padding-top:18px;">
                    <div style="position:absolute;top:-18px;left:50%;transform:translateX(-50%);
                        width:28px;height:28px;background:#66bb6a;border-radius:50%;
                        box-shadow:0 6px 12px rgba(0,0,0,.25);"></div>

                    <div style="background:#fff;border-radius:18px;padding:14px;
                        box-shadow:0 15px 40px rgba(0,0,0,.12);">

                        <div style="background:#d8f5d8;border-radius:14px;padding:20px;text-align:left;">
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


{{-- TODO SECTION --}}
{{-- Dibalik Sistem Kami --}}
{{-- Cara Konsultasi --}}
{{-- Kenapa Percaya Kami --}}
{{-- Footer --}}
@endsection