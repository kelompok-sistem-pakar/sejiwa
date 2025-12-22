<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenyakitController;

// ---------------------
// Halaman Frontend MVP
// ---------------------
Route::get('/', function () {
    return view('home.index'); // Home Page
});

Route::get('/about', function () {
    return view('about.index'); // About Page
});

Route::get('/konsultasi', function () {
    return view('konsultasi.index'); // Form Konsultasi
});

Route::get('/konsultasi/hasil', function () {
    return view('konsultasi.hasil'); // Hasil Konsultasi
});

// ---------------------
// Halaman Admin / Dashboard
// ---------------------
Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard'); // Dashboard Admin
    });

    // CRUD Admin
    Route::get('gejala', function () {
        return view('admin.gejala'); // List Gejala
    });

    Route::get('penyakit', function () {
        return view('admin.penyakit'); // List Penyakit
    });

    Route::get('mahasiswa', function () {
        return view('admin.mahasiswa'); // List Mahasiswa
    });
});
