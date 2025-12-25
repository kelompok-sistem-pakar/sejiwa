

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
                        <div class="w-1 h-16 bg-gray-200 my-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-lime-600 text-lg">Konfirmasi & Proses</p>
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
            <h1 class="text-5xl font-bold text-gray-800 mb-10">Konfirmasi & Proses</h1>
            
            <!-- Data Diri Pasien -->
            <div class="bg-gradient-to-br from-lime-50 to-white border-2 border-lime-300 rounded-2xl p-8 mb-8 shadow-lg">
                <div class="flex justify-between items-start mb-6">
                    <h2 class="text-2xl font-bold text-lime-600">Data Diri Pasien</h2>
                    <button class="bg-gradient-to-r from-lime-400 to-lime-500 hover:from-lime-500 hover:to-lime-600 text-white px-6 py-3 rounded-xl flex items-center space-x-2 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <span>Edit</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <p class="text-gray-600">Nama</p>
                        <p class="font-semibold text-gray-800">: Wisnu Eka</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Umur</p>
                        <p class="font-semibold text-gray-800">: 21</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Jenis Kelamin</p>
                        <p class="font-semibold text-gray-800">: Laki-Laki</p>
                    </div>
                </div>
            </div>
            
            <!-- Ringkasan Jawaban -->
            <div class="bg-lime-50 border-2 border-lime-400 rounded-lg p-6 mb-8">
                <div class="flex justify-between items-start mb-4">
                    <h2 class="text-xl font-semibold text-lime-600">Ringkasan Jawaban</h2>
                    <button class="bg-lime-400 hover:bg-lime-500 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition duration-200">
                        <span>Edit Jawaban</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="space-y-3">
                    <div class="grid grid-cols-2 gap-4">
                        <p class="text-gray-700">Merasa sedih berkepanjangan</p>
                        <p class="font-semibold text-yellow-600">: Yakin</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <p class="text-gray-700">Kehilangan minat aktivitas</p>
                        <p class="font-semibold text-yellow-400">: Cukup Yakin</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <p class="text-gray-700">Gangguan tidur</p>
                        <p class="font-semibold text-red-600">: Sangat Yakin</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <p class="text-gray-700">Merasa cemas berlebihan</p>
                        <p class="font-semibold text-yellow-600">: Yakin</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <p class="text-gray-700">Menarik diri dari sosial</p>
                        <p class="font-semibold text-yellow-300">: Kurang Yakin</p>
                    </div>
                </div>
            </div>
            
            <!-- Info Text -->
            <p class="text-gray-600 mb-8">Data dan Jawaban ini akan digunakan sebagai dasar perhitungan sistem pakar.</p>
            
            <!-- Submit Button -->
            <form action="<?php echo e(route('konsultasi.konfirmasi.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="flex justify-end">
                    <button type="submit" class="bg-lime-400 hover:bg-lime-500 text-white font-semibold px-8 py-3 rounded-lg transition duration-200">
                        Proses Konsultasi
                    </button>
                </div>
            </form>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/konsultasi/konfirmasi.blade.php ENDPATH**/ ?>