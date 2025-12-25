

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
                        <div class="w-1 h-16 bg-gray-200 my-2 rounded-full"></div>
                    </div>
                    <div class="flex-1 pt-4">
                        <p class="font-bold text-lime-600 text-lg">Pertanyaan Gejala</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex items-start space-x-5">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-gray-600 font-bold text-lg">3</span>
                        </div>
                        <div class="w-1 h-16 bg-gray-200 my-2 rounded-full"></div>
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
            <h1 class="text-5xl font-bold text-gray-800 mb-10">Pertanyaan Gejala</h1>
            
            <form action="<?php echo e(route('konsultasi.gejala.store')); ?>" method="POST" class="bg-white rounded-2xl shadow-lg p-8 space-y-8">
                <?php echo csrf_field(); ?>
                
                <!-- Pertanyaan 1 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[1]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-1">
                        <span id="value-1" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </input>
                </div>

                <!-- Pertanyaan 2 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[2]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-2">
                        <span id="value-2" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </div>
                </div>

                <!-- Pertanyaan 3 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[3]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-3">
                        <span id="value-3" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </div>
                </div>

                <!-- Pertanyaan 4 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[4]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-4">
                        <span id="value-4" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </div>
                </div>

                <!-- Pertanyaan 5 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[5]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-5">
                        <span id="value-5" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </div>
                </div>

                <!-- Pertanyaan 6 -->
                <div class="space-y-4">
                    <p class="text-gray-700 text-lg font-medium">Seberapa yakin Anda merasa cemas, gelisah, atau khawatir berlebihan tanpa alasan yang jelas?</p>
                    <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-xl">
                        <input type="range" name="gejala[6]" min="0" max="100" value="0" class="flex-1 h-7 bg-gray-200 rounded-full appearance-none cursor-pointer gejala-slider shadow-inner" data-target="slider-6">
                        <span id="value-6" class="text-lime-600 font-bold min-w-[60px] text-right text-xl">0%</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-6">
                    <button type="submit" class="bg-gradient-to-r from-lime-400 to-lime-500 hover:from-lime-500 hover:to-lime-600 text-white font-bold px-10 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Lanjut
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
            <p class="text-sm text-gray-700">Konsul Step 2</p>
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

<style>
    .gejala-slider::-webkit-slider-thumb {
        appearance: none;
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, #a3e635, #84cc16);
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    
    .gejala-slider::-moz-range-thumb {
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, #a3e635, #84cc16);
        border-radius: 50%;
        cursor: pointer;
        border: none;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    
    .gejala-slider::-webkit-slider-runnable-track {
        background: linear-gradient(to right, #a3e635 0%, #a3e635 var(--value), #e5e7eb var(--value), #e5e7eb 100%);
        height: 28px;
        border-radius: 9999px;
    }
    
    .gejala-slider::-moz-range-track {
        background: #e5e7eb;
        height: 28px;
        border-radius: 9999px;
    }
    
    .gejala-slider::-moz-range-progress {
        background: #a3e635;
        height: 28px;
        border-radius: 9999px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliders = document.querySelectorAll('.gejala-slider');
        
        sliders.forEach(slider => {
            const targetId = slider.dataset.target;
            const valueDisplay = document.getElementById('value-' + targetId.split('-')[1]);
            
            // Set initial value
            updateSlider(slider, valueDisplay);
            
            // Update on input
            slider.addEventListener('input', function() {
                updateSlider(slider, valueDisplay);
            });
        });
        
        function updateSlider(slider, display) {
            const value = slider.value;
            display.textContent = value + '%';
            slider.style.setProperty('--value', value + '%');
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\difar\sejiwa\resources\views/konsultasi/gejala.blade.php ENDPATH**/ ?>