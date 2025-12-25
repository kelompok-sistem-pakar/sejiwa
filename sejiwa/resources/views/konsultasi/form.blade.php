@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<div class="min-h-screen bg-gray-50 flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-lime-50 p-8 flex flex-col">
        <!-- Logo -->
        <div class="mb-12">
            <div class="flex items-center justify-center space-x-2 mb-2">
                <img src="{{ asset('images/logo.png') }}" alt="Sejiwa Logo" class="h-10 w-10">
            </div>
            <h1 class="text-2xl font-bold text-gray-800 text-center">Sejiwa</h1>
        </div>
        
        <!-- Steps -->
        <div class="flex-1">
            <h2 class="text-xl font-bold text-gray-800 mb-8">Konsultasi</h2>
            
            <div class="space-y-6">
                <!-- Step 1 - Active -->
                <div class="flex items-start space-x-4">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-lime-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="w-0.5 h-16 bg-lime-400 mt-2"></div>
                    </div>
                    <div class="flex-1 pt-3">
                        <p class="font-semibold text-gray-900">Data Diri Pasien</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex items-start space-x-4">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <div class="w-0.5 h-16 bg-gray-300 mt-2"></div>
                    </div>
                    <div class="flex-1 pt-3">
                        <p class="font-medium text-gray-500">Pertanyaan Gejala</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex items-start space-x-4">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <div class="w-0.5 h-16 bg-gray-300 mt-2"></div>
                    </div>
                    <div class="flex-1 pt-3">
                        <p class="font-medium text-gray-500">Konfirmasi & Proses</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="flex items-start space-x-4">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">4</span>
                        </div>
                    </div>
                    <div class="flex-1 pt-3">
                        <p class="font-medium text-gray-500">Hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Data Diri Pasien</h1>
            
            <form action="{{ route('konsultasi.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Nama Depan & Belakang -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <input type="text" name="nama_depan" placeholder="Nama Depan" class="w-full px-4 py-3 border-2 border-lime-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                    </div>
                    <div>
                        <input type="text" name="nama_belakang" placeholder="Nama Belakang" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                    </div>
                </div>
                
                <!-- Alamat -->
                <div>
                    <input type="text" name="alamat" placeholder="Alamat" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>
                
                <!-- Jenis Kelamin & Tanggal Lahir -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <div class="flex gap-4">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked class="hidden peer">
                                <span class="px-6 py-3 border-2 border-gray-300 rounded-lg peer-checked:bg-lime-400 peer-checked:border-lime-400 peer-checked:text-gray-900 text-gray-600 font-medium transition-colors">
                                    Laki Laki
                                </span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="hidden peer">
                                <span class="px-6 py-3 border-2 border-gray-300 rounded-lg peer-checked:bg-lime-400 peer-checked:border-lime-400 peer-checked:text-gray-900 text-gray-600 font-medium transition-colors">
                                    Perempuan
                                </span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="relative">
                            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                            <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- E-mail -->
                <div>
                    <input type="email" name="email" placeholder="E-mail" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>
                
                <!-- No Telepon -->
                <div>
                    <input type="tel" name="no_telepon" placeholder="No Telepon" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>
                
                <!-- Submit Button -->
                <div class="flex justify-end pt-6">
                    <button type="submit" class="px-8 py-3 bg-lime-400 hover:bg-lime-500 text-gray-900 font-semibold rounded-lg transition-colors">
                        Lanjut
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<!-- Footer -->
<footer class="bg-lime-200 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <!-- Left Menu -->
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 text-base">Home</a>
                <a href="{{ route('konsultasi.index') }}" class="text-gray-600 hover:text-gray-900 text-base">Konsultasi</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 text-base">Tentang</a>
            </div>
            
            <!-- Center Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Sejiwa Logo" class="h-8 w-8">
                <span class="text-2xl font-semibold text-gray-800">Sejiwa</span>
            </div>
            
            <!-- Right Copyright -->
            <div class="text-sm text-gray-600">
                Copyright © 2025 Tekslane. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<p class="text-xs text-gray-400 text-center py-2">Konsul Step 2</p>
@endsection
