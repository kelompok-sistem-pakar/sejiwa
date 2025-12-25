

<?php $__env->startSection('title', 'Konsultasi'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex">
    <!-- Sidebar -->
    <aside class="w-80 bg-white shadow-xl p-10 flex flex-col">
        <!-- Logo -->
        <div class="mb-12">
            <div class="flex justify-center mb-8">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa Logo" class="h-20 w-auto">
            </div>
        </div>
        
        <!-- Steps -->
        <div class="flex-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-10">Konsultasi</h2>
            
            <div class="space-y-6">
                <!-- Step 1 - Active -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gradient-to-br from-lime-400 to-lime-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="w-1 h-16 bg-lime-400 mt-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-gray-900 text-lg">Data Diri Pasien</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-gray-600 font-bold text-lg">2</span>
                        </div>
                        <div class="w-1 h-16 bg-gray-200 mt-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-semibold text-gray-500 text-lg">Pertanyaan Gejala</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-gray-600 font-bold text-lg">3</span>
                        </div>
                        <div class="w-1 h-16 bg-gray-200 mt-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-semibold text-gray-500 text-lg">Konfirmasi & Proses</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-gray-600 font-bold text-lg">4</span>
                        </div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-semibold text-gray-500 text-lg">Hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-1 p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl font-bold text-gray-800 mb-10">Data Diri Pasien</h1>
            
            <form action="<?php echo e(route('konsultasi.store')); ?>" method="POST" class="bg-white rounded-2xl shadow-lg p-8 space-y-6">
                <?php echo csrf_field(); ?>
                
                <!-- Nama Depan & Belakang -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <input type="text" name="nama_depan" placeholder="Nama Depan" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                    </div>
                    <div>
                        <input type="text" name="nama_belakang" placeholder="Nama Belakang" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                    </div>
                </div>
                
                <!-- Alamat -->
                <div>
                    <input type="text" name="alamat" placeholder="Alamat" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                </div>
                
                <!-- Jenis Kelamin & Tanggal Lahir -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <div class="flex gap-4">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked class="hidden peer">
                                <span class="px-6 py-4 border-2 border-gray-200 rounded-xl peer-checked:bg-gradient-to-br peer-checked:from-lime-400 peer-checked:to-lime-500 peer-checked:border-lime-400 peer-checked:text-white peer-checked:shadow-md text-gray-600 font-semibold transition-all transform peer-checked:scale-105">
                                    Laki Laki
                                </span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="hidden peer">
                                <span class="px-6 py-4 border-2 border-gray-200 rounded-xl peer-checked:bg-gradient-to-br peer-checked:from-lime-400 peer-checked:to-lime-500 peer-checked:border-lime-400 peer-checked:text-white peer-checked:shadow-md text-gray-600 font-semibold transition-all transform peer-checked:scale-105">
                                    Perempuan
                                </span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="relative">
                            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                            <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- E-mail -->
                <div>
                    <input type="email" name="email" placeholder="E-mail" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                </div>
                
                <!-- No Telepon -->
                <div>
                    <input type="tel" name="no_telepon" placeholder="No Telepon" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-lime-400 focus:ring-4 focus:ring-lime-100 transition-all">
                </div>
                
                <!-- Submit Button -->
                <div class="flex justify-end pt-6">
                    <button type="submit" class="px-10 py-4 bg-gradient-to-r from-lime-400 to-lime-500 hover:from-lime-500 hover:to-lime-600 text-white font-bold rounded-xl transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/konsultasi/index.blade.php ENDPATH**/ ?>