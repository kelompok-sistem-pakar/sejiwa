

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative bg-gray-50 min-h-screen flex items-center overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight">
                    Memulai Dari Gejala<br>
                    Menuju Solusi
                </h1>
                
                <p class="text-lg text-gray-600 max-w-xl leading-relaxed">
                    Membantu mengidentifikasi kemungkinan gangguan kesehatan mental melalui analisis gejala secara sistematis dan terstruktur.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="<?php echo e(route('konsultasi.index')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-lime-400 hover:bg-lime-500 text-gray-900 font-semibold rounded-xl transition-colors shadow-lg text-lg">
                        Konsult Sekarang Yuk
                    </a>
                    <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-xl border-2 border-gray-300 transition-colors text-lg">
                        Explore Gejala
                    </a>
                </div>
                
                <!-- Dibalik Sistem Kami -->
                <div class="pt-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Dibalik Sistem Kami</h3>
                    <div class="flex items-center gap-3">
                        <div class="w-20 h-20 bg-lime-300 rounded-2xl flex items-center justify-center overflow-hidden shadow-md">
                            <img src="<?php echo e(asset('images/konsul1.png')); ?>" alt="Expert 1" class="w-full h-full object-cover">
                        </div>
                        <div class="w-20 h-20 bg-lime-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-md">
                            <img src="<?php echo e(asset('images/konsul2.png')); ?>" alt="Expert 2" class="w-full h-full object-cover">
                        </div>
                        <div class="w-20 h-20 bg-gray-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-md">
                            <img src="<?php echo e(asset('images/konsul3.png')); ?>" alt="Expert 3" class="w-full h-full object-cover">
                        </div>
                        <div class="w-20 h-20 bg-gray-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-md">
                            <img src="<?php echo e(asset('images/konsul4.png')); ?>" alt="Expert 4" class="w-full h-full object-cover">
                        </div>
                        <button class="w-20 h-20 bg-lime-100 rounded-2xl flex items-center justify-center hover:bg-lime-200 transition-colors shadow-md">
                            <span class="text-sm font-semibold text-gray-700">See all</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Image with Floating Card -->
            <div class="relative">
                <!-- Social Media Icons -->
                <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 hidden xl:flex flex-col gap-4 z-20">
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow">
                        <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow">
                        <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow">
                        <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Main Image Container -->
                <div class="relative bg-lime-300 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="<?php echo e(asset('images/konsul1.png')); ?>" alt="Psucologist" class="w-full h-auto object-cover">
                    
                    <!-- Floating Psychologist Card -->
                    <div class="absolute bottom-8 right-8 bg-white rounded-2xl shadow-xl p-4 max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <img src="<?php echo e(asset('images/konsul2.png')); ?>" alt="Psychologist" class="w-12 h-12 rounded-full object-cover">
                            <div class="flex-1">
                                <p class="text-sm font-bold text-gray-900">Psucologist</p>
                                <div class="flex items-center gap-1 mt-1">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-green-300 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cara Konsultasi Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Cara Konsultasi</h2>
            <p class="text-base text-gray-600 max-w-2xl mx-auto">
                Proses analisis kami langsung eksklusif sistematis untuk memberikan hasil yang akurat melalui analisis gratis lengkap mendetail
            </p>
        </div>
        
        <div class="relative">
            <!-- Background Connecting Line -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <img src="<?php echo e(asset('images/gariskonsul.png')); ?>" alt="Connecting Line" class="w-full h-auto opacity-100 max-w-4xl">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 relative z-10">
                <!-- Card 01 -->
                <div class="relative">
                    <img src="<?php echo e(asset('images/konsul1.png')); ?>" alt="Mengisi Data Diri Pasien" class="w-full h-auto transform transition-all duration-300 hover:scale-105 hover:rotate-1 rotate-[-2deg]">
                </div>
                
                <!-- Card 02 -->
                <div class="relative md:mt-16">
                    <img src="<?php echo e(asset('images/konsul2.png')); ?>" alt="Menjawab Pertanyaan Gejala" class="w-full h-auto transform transition-all duration-300 hover:scale-105 hover:rotate-[-1deg] rotate-[2deg]">
                </div>
                
                <!-- Card 03 -->
                <div class="relative">
                    <img src="<?php echo e(asset('images/konsul3.png')); ?>" alt="Konfirmasi & Proses" class="w-full h-auto transform transition-all duration-300 hover:scale-105 hover:rotate-1 rotate-[-1deg]">
                </div>
                
                <!-- Card 04 -->
                <div class="relative md:mt-16">
                    <img src="<?php echo e(asset('images/konsul4.png')); ?>" alt="Hasil" class="w-full h-auto transform transition-all duration-300 hover:scale-105 hover:rotate-[-1deg] rotate-[1deg]">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Kenapa Percaya Kami Section -->
<section class="py-20 bg-lime-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-lime-200 rounded-3xl p-12 md:p-16">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-800 text-center mb-16">Kenapa Percaya Kami?</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Left Side - Expert Photo -->
                <div class="flex justify-center lg:justify-start">
                    <div class="relative">
                        <div class="border-4 border-white-400 rounded-2xl overflow-hidden bg-lime-100 p-6 max-w-md">
                            <img src="<?php echo e(asset('images/konsul1.png')); ?>" alt="Expert" class="w-full h-auto mb-6">
                            <div class="bg-lime-100 pt-4">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Anisa Suci, S.Psi., Psikolo...</h3>
                                <p class="text-sm text-gray-600 leading-relaxed">Lulusan Universitas Gadjah Mada Yoguakarta dengan pengalaman klinis lebih dari 15 tahun.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Description -->
                <div class="space-y-6 flex flex-col justify-center">
                    <p class="text-gray-700 text-base leading-relaxed">
                        Kami memahami bahwa mencari jawaban atas masalah Anda membutuhkan kepercayaan yang besar. Oleh karena itu, kami tidak membiarkan mesin bekerja sendirian.
                    </p>
                    <p class="text-gray-700 text-base leading-relaxed">
                        Di balik kecerdasan buatan kami, terdapat sentuhan manusiawi dan pakar yang telah mendedikasikan karimnya untuk membantu orang lain. Seluruh saran dan langkah penanganan yang ditampilkan sistem ini adalah hasil kurasi mendalam dari pengalaman nyata di lapangan, menjamin Anda mendapatkan pendampingan yang aman, relevan, dan penuh empati.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-lime-200 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <!-- Left Menu -->
            <div class="flex items-center space-x-8">
                <a href="<?php echo e(route('home')); ?>" class="text-gray-600 hover:text-gray-900 text-base">Home</a>
                <a href="<?php echo e(route('konsultasi.index')); ?>" class="text-gray-600 hover:text-gray-900 text-base">Konsultasi</a>
                <a href="<?php echo e(route('about')); ?>" class="text-gray-600 hover:text-gray-900 text-base">Tentang</a>
            </div>
            
            <!-- Center Logo -->
            <div class="flex items-center space-x-2">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa Logo" class="h-8 w-8">
                <span class="text-2xl font-semibold text-gray-800">Sejiwa</span>
            </div>
            
            <!-- Right Copyright -->
            <div class="text-sm text-gray-600">
                Copyright © 2025 Tekslane. All rights reserved.
            </div>
        </div>
    </div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/home/index.blade.php ENDPATH**/ ?>