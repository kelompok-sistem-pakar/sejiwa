<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Sejiwa Logo" class="h-8 w-8">
                <span class="text-xl font-semibold text-gray-800">Sejiwa</span>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 font-medium {{ request()->routeIs('home') ? 'text-green-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('konsultasi.index') }}" class="text-gray-700 hover:text-green-600 font-medium {{ request()->routeIs('konsultasi.*') ? 'text-green-600' : '' }}">
                    Konsultasi
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-green-600 font-medium {{ request()->routeIs('about') ? 'text-green-600' : '' }}">
                    Tentang
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-gray-700 hover:text-green-600 focus:outline-none" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-md {{ request()->routeIs('home') ? 'bg-green-50 text-green-600' : '' }}">
                Home
            </a>
            <a href="{{ route('konsultasi.index') }}" class="block px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-md {{ request()->routeIs('konsultasi.*') ? 'bg-green-50 text-green-600' : '' }}">
                Konsultasi
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-md {{ request()->routeIs('about') ? 'bg-green-50 text-green-600' : '' }}">
                Tentang
            </a>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
@endpush
