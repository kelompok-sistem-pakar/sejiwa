<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User - Sejiwa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-48 bg-lime-200 p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Konsultasi</h2>
            <nav class="space-y-2">
                <a href="{{ route('admin.gejala') }}" class="block py-2 px-4 text-gray-700 hover:bg-lime-300 rounded">Gejala</a>
                <a href="{{ route('admin.penyakit') }}" class="block py-2 px-4 text-gray-700 hover:bg-lime-300 rounded">Penyakit</a>
                <a href="{{ route('admin.user') }}" class="block py-2 px-4 bg-white text-gray-800 rounded font-semibold">User</a>
                <a href="{{ route('home') }}" class="block py-2 px-4 text-gray-700 hover:bg-lime-300 rounded">Log out</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow-sm">
                <!-- Header -->
                <div class="bg-lime-400 px-6 py-4 rounded-t-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/logo.png') }}" alt="Sejiwa" class="h-8">
                            <span class="text-2xl font-bold text-gray-800">Sejiwa</span>
                        </div>
                        <button class="bg-white text-gray-800 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100">
                            Login
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="p-6">
                    <div class="bg-lime-100 rounded-lg overflow-hidden">
                        <table class="w-full">
                            <thead class="bg-lime-400">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-800">No</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-800">Username</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-800">Password</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-800">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-lime-50">
                                <tr class="border-b border-lime-200">
                                    <td class="px-4 py-3 text-sm">1</td>
                                    <td class="px-4 py-3 text-sm">Wisnu</td>
                                    <td class="px-4 py-3 text-sm">Laki Laki</td>
                                    <td class="px-4 py-3">
                                        <div class="flex space-x-2">
                                            <button class="bg-lime-400 text-gray-800 px-3 py-1 rounded text-xs font-semibold hover:bg-lime-500">Edit</button>
                                            <button class="bg-red-400 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-red-500">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Invitation Button -->
                    <div class="mt-6 flex justify-end">
                        <button class="bg-yellow-400 text-gray-800 px-6 py-2 rounded-lg text-sm font-semibold hover:bg-yellow-500">
                            InvitationUser
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
