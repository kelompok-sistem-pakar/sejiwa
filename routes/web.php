<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController; // Frontend / User
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminKonsultasiController;

// ---------------------
// Halaman Frontend MVP
// ---------------------
Route::get('/', function () {
    return view('home.index'); // Home Page
});

Route::get('/about', function () {
    return view('about.index'); // About Page
});

// ---------------------
// Konsultasi Frontend / User
// ---------------------
Route::prefix('konsultasi')->group(function () {
    // Step 1
    Route::get('/step1', [KonsultasiController::class, 'step1'])->name('konsultasi.step1');
    Route::post('/step1', [KonsultasiController::class, 'step1Submit'])->name('konsultasi.step1.submit');

    // Step 2
    Route::get('/step2', [KonsultasiController::class, 'step2'])->name('konsultasi.step2');
    Route::post('/step2', [KonsultasiController::class, 'step2Submit'])->name('konsultasi.step2.submit');

    // Step 3
    Route::get('/step3', [KonsultasiController::class, 'step3'])->name('konsultasi.step3');
    Route::post('/step3', [KonsultasiController::class, 'step3Submit'])->name('konsultasi.step3.submit');

    // Step 4
    Route::get('/step4', [KonsultasiController::class, 'step4'])->name('konsultasi.step4');
});

// ---------------------
// Halaman Admin
// ---------------------
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard.index'); // Dashboard Admin
    });

    // CRUD Gejala
    Route::resource('gejala', GejalaController::class)->names([
        'index' => 'admin.gejala.index',
        'create' => 'admin.gejala.create',
        'store' => 'admin.gejala.store',
        'edit' => 'admin.gejala.edit',
        'update' => 'admin.gejala.update',
        'destroy' => 'admin.gejala.destroy',
    ]);

    // CRUD Penyakit
    Route::resource('penyakit', PenyakitController::class)->names([
        'index' => 'admin.penyakit.index',
        'create' => 'admin.penyakit.create',
        'store' => 'admin.penyakit.store',
        'edit' => 'admin.penyakit.edit',
        'update' => 'admin.penyakit.update',
        'destroy' => 'admin.penyakit.destroy',
    ]);

    // CRUD Mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class)->names([
        'index' => 'admin.mahasiswa.index',
        'create' => 'admin.mahasiswa.create',
        'store' => 'admin.mahasiswa.store',
        'edit' => 'admin.mahasiswa.edit',
        'update' => 'admin.mahasiswa.update',
        'destroy' => 'admin.mahasiswa.destroy',
    ]);

    // CRUD User
    Route::resource('user', AdminUserController::class)->names([
        'index' => 'admin.user.index',
        'create' => 'admin.user.create',
        'store' => 'admin.user.store',
        'edit' => 'admin.user.edit',
        'update' => 'admin.user.update',
        'destroy' => 'admin.user.destroy',
    ]);

    // Data Konsultasi
    Route::get('konsultasi', [AdminKonsultasiController::class, 'index'])->name('admin.konsultasi.index');
    Route::get('konsultasi/{id}/edit', [AdminKonsultasiController::class, 'edit'])->name('admin.konsultasi.edit');
    Route::put('konsultasi/{id}', [AdminKonsultasiController::class, 'update'])->name('admin.konsultasi.update');
    Route::delete('konsultasi/{id}', [AdminKonsultasiController::class, 'destroy'])->name('admin.konsultasi.destroy');
});
