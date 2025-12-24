@extends('layouts.app')
@section('title', 'About')

@section('content')
<section class="hero py-5 d-block" style="height:670px;border-radius:16px;border:5px solid #fff;box-shadow:inset 0 0 14px rgba(0,0,0,.07);background:linear-gradient(180deg,#d9ff8f 0%,#e7f2cc 100%);">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-5 ">
                <h1>Team</h1>
                <p>Membantu mengidentifikasi kemungkinan gangguan kesehatan mental melalui analisis gejala secara sistematis dan terstruktur.</p>
                <small>Small text here</small>
            </div>
            <div class="col-md-7">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="card border-0 overflow-hidden position-relative" style="border-radius:25px;">
                            <div style="position:relative;border-radius:24px;overflow:hidden;border:5px solid #fff;box-shadow:inset 0 0 10px rgba(0,0,0,.15);background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 99.99%);padding-bottom:133.33%;">
                                <img src="{{ asset('img/nisa.png') }}" class="card-img-top position-absolute w-100 h-100" alt="Nisa" style="object-fit:cover;top:0;left:0;">
                            </div>
                            <div class="position-absolute bottom-0 start-0" style="width:100%;height:40%;border-radius:0 0 24px 24px;border:5px solid #fff;border-top:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.95) 100%);-webkit-mask-image:linear-gradient(to bottom,transparent 0%,black 15%);mask-image:linear-gradient(to bottom,transparent 0%,black 15%);display:flex;align-items:flex-end;padding:15px;">
                                <h5 class="card-title text-white mb-0" style="text-shadow:1px 1px 4px rgba(0,0,0,.5);">Nisa</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-0 overflow-hidden position-relative" style="border-radius:25px;">
                            <div style="position:relative;border-radius:24px;overflow:hidden;border:5px solid #fff;box-shadow:inset 0 0 10px rgba(0,0,0,.15);background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 99.99%);padding-bottom:133.33%;">
                                <img src="{{ asset('img/wisnu.png') }}" class="card-img-top position-absolute w-100 h-100" alt="wisnu" style="object-fit:cover;top:0;left:0;">
                            </div>
                            <div class="position-absolute bottom-0 start-0" style="width:100%;height:40%;border-radius:0 0 24px 24px;border:5px solid #fff;border-top:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.95) 100%);-webkit-mask-image:linear-gradient(to bottom,transparent 0%,black 15%);mask-image:linear-gradient(to bottom,transparent 0%,black 15%);display:flex;align-items:flex-end;padding:15px;">
                                <h5 class="card-title text-white mb-0" style="text-shadow:1px 1px 4px rgba(0,0,0,.5);">Wisnu</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-0 overflow-hidden position-relative" style="border-radius:25px;">
                            <div style="position:relative;border-radius:24px;overflow:hidden;border:5px solid #fff;box-shadow:inset 0 0 10px rgba(0,0,0,.15);background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 99.99%);padding-bottom:133.33%;">
                                <img src="{{ asset('img/mario.png') }}" class="card-img-top position-absolute w-100 h-100" alt="mario" style="object-fit:cover;top:0;left:0;">
                            </div>
                            <div class="position-absolute bottom-0 start-0" style="width:100%;height:40%;border-radius:0 0 24px 24px;border:5px solid #fff;border-top:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.95) 100%);-webkit-mask-image:linear-gradient(to bottom,transparent 0%,black 15%);mask-image:linear-gradient(to bottom,transparent 0%,black 15%);display:flex;align-items:flex-end;padding:15px;">
                                <h5 class="card-title text-white mb-0" style="text-shadow:1px 1px 4px rgba(0,0,0,.5);">mario</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 justify-content-center mt-3">
                    <div class="col-4">
                        <div class="card border-0 overflow-hidden position-relative" style="border-radius:25px;">
                            <div style="position:relative;border-radius:24px;overflow:hidden;border:5px solid #fff;box-shadow:inset 0 0 10px rgba(0,0,0,.15);background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 99.99%);padding-bottom:133.33%;">
                                <img src="{{ asset('img/ipan.png') }}" class="card-img-top position-absolute w-100 h-100" alt="Ipan" style="object-fit:cover;top:0;left:0;">
                            </div>
                            <div class="position-absolute bottom-0 start-0" style="width:100%;height:40%;border-radius:0 0 24px 24px;border:5px solid #fff;border-top:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.95) 100%);-webkit-mask-image:linear-gradient(to bottom,transparent 0%,black 15%);mask-image:linear-gradient(to bottom,transparent 0%,black 15%);display:flex;align-items:flex-end;padding:15px;">
                                <h5 class="card-title text-white mb-0" style="text-shadow:1px 1px 4px rgba(0,0,0,.5);">Ipan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-0 overflow-hidden position-relative" style="border-radius:25px;">
                            <div style="position:relative;border-radius:24px;overflow:hidden;border:5px solid #fff;box-shadow:inset 0 0 10px rgba(0,0,0,.15);background:linear-gradient(137deg,#e7f2cc 0%,#ceff6dff 99.99%);padding-bottom:133.33%;">
                                <img src="{{ asset('img/dwiki.png') }}" class="card-img-top position-absolute w-100 h-100" alt="dwiki" style="object-fit:cover;top:0;left:0;">
                            </div>
                            <div class="position-absolute bottom-0 start-0" style="width:100%;height:40%;border-radius:0 0 24px 24px;border:5px solid #fff;border-top:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.95) 100%);-webkit-mask-image:linear-gradient(to bottom,transparent 0%,black 15%);mask-image:linear-gradient(to bottom,transparent 0%,black 15%);display:flex;align-items:flex-end;padding:15px;">
                                <h5 class="card-title text-white mb-0" style="text-shadow:1px 1px 4px rgba(0,0,0,.5);">Dwiki</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h2>section penjelasan</h2>

<!-- TODO: Isi data anggota (foto, nama, NIM, role) -->

<!-- TODO: Tambahkan deskripsi singkat Team -->
<!-- TODO: Sesuaikan teks deskripsi dengan tujuan tim Sejiwa -->

<!-- TODO: Tambahkan section Penjelasan berupa grid(2 atas 1 bawah)-->

<!-- TODO: grid 1  Metode -->
<!-- TODO: Isi penjelasan metode Certainty Factor sesuai desain -->
<!-- TODO: grid 2  ? -->
<!-- TODO: Isi penjelasan metode Certainty Factor sesuai desain -->

<!-- TODO: Isis grid 3 User Confidence -->
<!-- TODO: Tampilkan tingkat keyakinan user sesuai kategori menggunakan grid juga dan di bungkus kard -->

<!-- TODO: Tambahkan footer -->
<!-- TODO: Sesuaikan isi footer dengan desain -->

@endsection