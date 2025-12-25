<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sejiwa</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-xl p-8">
            <div class="flex justify-center mb-10">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Sejiwa" class="h-16 w-auto">
            </div>
            
            <nav class="space-y-2">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="block py-3 px-4 bg-lime-400 text-gray-900 rounded-xl font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">Konsultasi</a>
                <a href="<?php echo e(route('admin.gejala')); ?>" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 rounded-xl font-medium transition-all duration-200">Gejala</a>
                <a href="<?php echo e(route('admin.penyakit')); ?>" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 rounded-xl font-medium transition-all duration-200">Penyakit</a>
                <a href="<?php echo e(route('admin.mahasiswa')); ?>" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 rounded-xl font-medium transition-all duration-200">User</a>
                <a href="<?php echo e(route('home')); ?>" class="block py-3 px-4 text-red-600 hover:bg-red-50 rounded-xl font-medium transition-all duration-200 mt-8">Log out</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Data Konsultasi</h1>
                <p class="text-gray-600 mt-1">Kelola data pasien konsultasi</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-lime-400 to-lime-500">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">No</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Nama Pasien</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Jenis Kelamin</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Usia</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Alamat</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Email</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">1</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Wisnu</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Laki Laki</td>
                                <td class="px-6 py-4 text-sm text-gray-800">21</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Yoguakarta</td>
                                <td class="px-6 py-4 text-sm text-gray-800">email@gmail.com</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xs font-semibold hover:bg-blue-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">Edit</button>
                                        <button class="bg-red-500 text-white px-4 py-2 rounded-lg text-xs font-semibold hover:bg-red-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\difar\sejiwa\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>