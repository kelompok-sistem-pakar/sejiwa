<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController; // Frontend / User
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\AdminKonsultasiController;
use App\Http\Controllers\Admin\AuthController;

// ---------------------
// Halaman Frontend MVP
// ---------------------
Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.index');
});

// ---------------------
// Konsultasi Frontend / User
// ---------------------
Route::prefix('konsultasi')->group(function () {
    Route::get('/step1', [KonsultasiController::class, 'step1'])->name('konsultasi.step1');
    Route::post('/step1', [KonsultasiController::class, 'step1Submit'])->name('konsultasi.step1.submit');

    Route::get('/step2', [KonsultasiController::class, 'step2'])->name('konsultasi.step2');
    Route::post('/step2', [KonsultasiController::class, 'step2Submit'])->name('konsultasi.step2.submit');

    Route::get('/step3', [KonsultasiController::class, 'step3'])->name('konsultasi.step3');
    Route::post('/step3', [KonsultasiController::class, 'step3Submit'])->name('konsultasi.step3.submit');

    Route::get('/step4', [KonsultasiController::class, 'step4'])->name('konsultasi.step4');

    Route::post('/finish', [KonsultasiController::class, 'submitFinal'])->name('konsultasi.finish');
    Route::get('/selesai', [KonsultasiController::class, 'finish'])->name('konsultasi.selesai');
});

// ---------------------
// Halaman Admin
// ---------------------
Route::prefix('admin')->group(function () {

    // Login admin hardcode
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Semua route admin
    Route::middleware([])->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            if (!session('is_admin')) {
                return redirect()->route('admin.login');
            }
            return view('admin.konsultasi.index');
        })->name('admin.konsultasi');

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

        // Data Konsultasi
        Route::get('konsultasi', [AdminKonsultasiController::class, 'index'])->name('admin.konsultasi.index');
        Route::get('konsultasi/{id}/edit', [AdminKonsultasiController::class, 'edit'])->name('admin.konsultasi.edit');
        Route::put('konsultasi/{id}', [AdminKonsultasiController::class, 'update'])->name('admin.konsultasi.update');
        Route::delete('konsultasi/{id}', [AdminKonsultasiController::class, 'destroy'])->name('admin.konsultasi.destroy');
    });
});
