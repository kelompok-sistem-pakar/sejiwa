

<?php $__env->startSection('content'); ?>
<div class="flex min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Sidebar -->
    <aside class="w-80 bg-white shadow-xl p-10">
        <div class="mb-12">
            <div class="flex justify-center mb-16">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa" class="h-20 w-auto">
            </div>
            
            <div class="space-y-6">
                <!-- Step 1 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gradient-to-br from-lime-400 to-lime-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="w-1 h-16 bg-lime-400 my-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-gray-900 text-lg">Data Diri Pasien</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gradient-to-br from-lime-400 to-lime-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="w-1 h-16 bg-lime-400 my-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-gray-900 text-lg">Pertanyaan Gejala</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gradient-to-br from-lime-400 to-lime-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="w-1 h-16 bg-lime-400 my-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-gray-900 text-lg">Konfirmasi & Proses</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gradient-to-br from-lime-400 to-lime-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-lime-600 text-lg">Hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-1 p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl font-bold text-gray-800 mb-10">Hasil Diagnosis</h1>
            
            <!-- Data Diri Pasien -->
            <div class="bg-gradient-to-br from-lime-50 to-white border-2 border-lime-300 rounded-2xl p-8 mb-8 shadow-lg">
                <h2 class="text-2xl font-bold text-lime-600 mb-6">Data Diri Pasien</h2>
                
                <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">Nama</p>
                        <p class="col-span-2 font-semibold text-gray-800">: Wisnu Eka</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">Usia</p>
                        <p class="col-span-2 font-semibold text-gray-800">: 21 Tahun</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">Jenis Kelamin</p>
                        <p class="col-span-2 font-semibold text-gray-800">: Laki-Laki</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">Alamat</p>
                        <p class="col-span-2 font-semibold text-gray-800">: Yoguakarta</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">e-mail</p>
                        <p class="col-span-2 font-semibold text-gray-800">: e-mail@gmail.com</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <p class="text-gray-600">No Telepon</p>
                        <p class="col-span-2 font-semibold text-gray-800">: 082232392983</p>
                    </div>
                </div>
            </div>
            
            <!-- Hasil Diagnosis -->
            <div class="bg-gradient-to-br from-lime-50 to-white border-2 border-lime-300 rounded-2xl p-8 mb-8 shadow-lg">
                <h2 class="text-2xl font-bold text-lime-600 mb-8">Hasil Diagnosis</h2>
                
                <div class="space-y-6">
                    <!-- Penyakit 1 -->
                    <div>
                        <div class="grid grid-cols-3 gap-4 mb-2">
                            <p class="text-gray-600">Penyakit 1</p>
                            <p class="col-span-2 font-semibold text-gray-800">: Gila</p>
                        </div>
                        <div class="grid grid-cols-3 gap-4 items-center">
                            <p class="text-gray-600">Persentase</p>
                            <div class="col-span-2 flex items-center space-x-3">
                                <span class="font-semibold text-gray-800">:</span>
                                <div class="flex-1 flex items-center space-x-3">
                                    <div class="flex-1 bg-gray-200 rounded-full h-6 overflow-hidden">
                                        <div class="bg-lime-400 h-full flex items-center justify-center" style="width: 100%">
                                            <span class="text-sm font-bold text-gray-800">100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Penyakit 2 -->
                    <div>
                        <div class="grid grid-cols-3 gap-4 mb-2">
                            <p class="text-gray-600">Penyakit 2</p>
                            <p class="col-span-2 font-semibold text-gray-800">: Depresi</p>
                        </div>
                        <div class="grid grid-cols-3 gap-4 items-center">
                            <p class="text-gray-600">Persentase</p>
                            <div class="col-span-2 flex items-center space-x-3">
                                <span class="font-semibold text-gray-800">:</span>
                                <div class="flex-1 flex items-center space-x-3">
                                    <div class="flex-1 bg-gray-200 rounded-full h-6 overflow-hidden">
                                        <div class="bg-lime-400 h-full flex items-center justify-center" style="width: 83%">
                                            <span class="text-sm font-bold text-gray-800">83%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex justify-end">
                <a href="<?php echo e(route('home')); ?>" class="bg-lime-400 hover:bg-lime-500 text-white font-semibold px-8 py-3 rounded-lg transition duration-200 inline-block">
                    Selesai
                </a>
            </div>
        </div>
    </main>
</div>

<!-- Footer -->
<footer class="bg-lime-400 py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <p class="text-sm text-gray-700">Konsul Step 3</p>
            <div class="flex items-center space-x-3">
                <p class="text-sm text-gray-700">Home</p>
                <p class="text-sm text-gray-700">Konsultasi</p>
                <p class="text-sm text-gray-700">Tentang</p>
                <div class="flex items-center space-x-2 ml-6">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa" class="h-6">
                    <span class="font-bold text-gray-800">Sejiwa</span>
                </div>
            </div>
            <p class="text-sm text-gray-700">Copyright @ 2025 Teledame. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/konsultasi/hasil.blade.php ENDPATH**/ ?>