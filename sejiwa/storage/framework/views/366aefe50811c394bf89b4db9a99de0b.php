

<?php $__env->startSection('content'); ?>
<!-- Team Section -->
<section class="bg-lime-300 py-16 px-8">
    <div class="container mx-auto">
        <h2 class="text-5xl font-bold text-gray-800 mb-8">Team</h2>
        
        <div class="max-w-md mb-8">
            <p class="text-gray-700 mb-4">Membantu mengidentifikasi kemungkinan gangguan kesehatan mental melalui analisis gejala secara sistematis dan terstruktur.</p>
            <p class="text-gray-700">Tolong tambahkan kata karanga</p>
        </div>
        
        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl">
            <!-- Member 1 -->
            <div class="bg-gray-100 rounded-2xl overflow-hidden">
                <div class="aspect-square bg-gray-300"></div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-800">Anissa Suci Anjeli P...</h3>
                    <p class="text-sm text-gray-600">23TI0063</p>
                    <p class="text-sm text-gray-600">Frontend Dev</p>
                </div>
            </div>
            
            <!-- Member 2 -->
            <div class="bg-gray-100 rounded-2xl overflow-hidden">
                <div class="aspect-square bg-gray-300"></div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-800">Wisnu Eka Cahyana</h3>
                    <p class="text-sm text-gray-600">23TI0063</p>
                    <p class="text-sm text-gray-600">Membimbing UiUx</p>
                </div>
            </div>
            
            <!-- Member 3 -->
            <div class="bg-gray-100 rounded-2xl overflow-hidden">
                <div class="aspect-square bg-gray-300"></div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-800">Mario Bhona Parta</h3>
                    <p class="text-sm text-gray-600">23TI0063</p>
                    <p class="text-sm text-gray-600">Backend</p>
                </div>
            </div>
            
            <!-- Member 4 -->
            <div class="bg-gray-100 rounded-2xl overflow-hidden">
                <div class="aspect-square bg-gray-300"></div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-800">Irfan Awaluddin</h3>
                    <p class="text-sm text-gray-600">23TI0063</p>
                    <p class="text-sm text-gray-600">Dokumentasi</p>
                </div>
            </div>
            
            <!-- Member 5 -->
            <div class="bg-gray-100 rounded-2xl overflow-hidden">
                <div class="aspect-square bg-gray-300"></div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-800">Davidzo Ivan Memb...</h3>
                    <p class="text-sm text-gray-600">23TI0063</p>
                    <p class="text-sm text-gray-600">Preaden</p>
                </div>
            </div>
            
            <!-- Empty slot -->
            <div class="bg-cyan-400 rounded-2xl overflow-hidden"></div>
        </div>
    </div>
</section>

<!-- Metode Section -->
<section class="bg-white py-16 px-8">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Metode -->
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Metode</h2>
                <p class="text-gray-700 leading-relaxed">
                    Sistem Pakar Sejiwa menggunakan metode Certainty Factor (CF) untuk mengukur tingkat keyakinan dari setiap kemungkinan gangguan kesehatan mental yang teridentifikasi. Berbeda dengan tes sederhana, metode ini menggabungkan bobot pengetahuan dari pakar (Anisa Suci Putri) dengan nilai keyakinan yang Anda berikan atas menjawab setiap pertanyaan.
                </p>
            </div>
            
            <!-- Empty card -->
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-8"></div>
        </div>
        
        <!-- User Confidence Section -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-8">User Confidence</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sangat Yakin -->
                <div class="bg-red-200 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Sangat Yakin</h3>
                    <p class="text-sm text-gray-700">Rentang 80% - 100%</p>
                    <p class="text-sm text-gray-700 mt-2">Menunjukkan gejala yang sangat jelas dan kuat dari kondisi dengan ciri-ciri yang khas.</p>
                </div>
                
                <!-- Yakin -->
                <div class="bg-orange-200 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Yakin</h3>
                    <p class="text-sm text-gray-700">Rentang 50% - 79%</p>
                    <p class="text-sm text-gray-700 mt-2">Menunjukkan kecenderungan gejala yang jelas dan memerlukan perhatian...</p>
                </div>
                
                <!-- Cukup Yakin -->
                <div class="bg-yellow-100 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Cukup Yakin</h3>
                    <p class="text-sm text-gray-700">Rentang 20% - 39%</p>
                    <p class="text-sm text-gray-700 mt-2">Menunjukkan tingkat kepastian rendah di mana gejala dirasakan samar atau tumpang ti...</p>
                </div>
                
                <!-- Kurang Yakin -->
                <div class="bg-yellow-200 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Kurang Yakin</h3>
                    <p class="text-sm text-gray-700">Rentang 30% - 39%</p>
                    <p class="text-sm text-gray-700 mt-2">Gejala dirasakan samar atau dalam intensitas yang masih rendah.</p>
                </div>
                
                <!-- Tidak Tahu -->
                <div class="bg-green-200 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Tidak Tahu</h3>
                    <p class="text-sm text-gray-700">Rentang 1% - 29%</p>
                    <p class="text-sm text-gray-700 mt-2">Tingkat kepastian sangat rendah karena gejala sulit diidentifikasi.</p>
                </div>
                
                <!-- Tidak -->
                <div class="bg-green-300 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-800 mb-2">Tidak</h3>
                    <p class="text-sm text-gray-700">Rentang 0% Gejala</p>
                    <p class="text-sm text-gray-700 mt-2">sama sekali tidak dirasakan dan tidak ada pengaruhannya pada hasil akhir.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-lime-400 py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <p class="text-sm text-gray-700">Home</p>
            <p class="text-sm text-gray-700">Konsultasi</p>
            <p class="text-sm text-gray-700">Tentang</p>
            <div class="flex items-center space-x-2">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa" class="h-6">
                <span class="font-bold text-gray-800">Sejiwa</span>
            </div>
            <p class="text-sm text-gray-700">Copyright @ 2025 Teledame. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/about/about.blade.php ENDPATH**/ ?>