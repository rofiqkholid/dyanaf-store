<!-- Navigation -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-3 border-b border-gray-600" style="background-color: #2b3a4b">
    <div class="container mx-auto px-4 md:px-6 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 text-base md:text-xl font-bold text-white navbar-brand">
            <img src="{{ asset('image/dyanaf-logo.jpg') }}" alt="Dyanaf Store Logo" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover">
            <span>Dyanaf Store</span>
        </a>

        <div class="md:hidden flex items-center gap-5">
            <a href="{{ route('list-jasa') }}" class="text-white hover:text-gray-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </a>
            <a href="{{ route('chat') }}" class="text-white hover:text-gray-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </a>
            <button class="flex flex-col gap-1 p-2 z-[1001]" id="mobileMenuBtn">
                <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
                <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
                <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
            </button>
        </div>

        <ul class="hidden md:flex items-center gap-2" id="navbarMenu">
            <li><a href="/#home" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Beranda<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="/#services" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Layanan<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="/#portfolio" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Portfolio<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="/#pricing" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Harga<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="/#contact" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Kontak<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
        </ul>

        <div class="hidden md:flex items-center gap-5">
            <a href="{{ route('list-jasa') }}" class="text-white hover:text-gray-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </a>
            <a href="{{ route('chat') }}" class="text-white hover:text-gray-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </a>

            @auth
            <!-- User Dropdown -->
            <div class="relative" id="userDropdown">
                <button onclick="toggleUserDropdown()" class="flex items-center gap-2 text-white hover:text-gray-300 transition-all">
                    <img src="{{ auth()->user()->avatar ?? asset('image/dyanaf-logo.jpg') }}" alt="Avatar" class="w-8 h-8 rounded-full object-cover border border-white/20">
                    <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="userDropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class="text-white hover:text-gray-300 transition-all text-sm font-medium">
                Login
            </a>
            @endauth
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed top-0 left-0 right-0 inset-0 bg-white z-40 flex flex-col items-center justify-center gap-4 transform translate-x-full transition-transform duration-300 md:hidden">
    @auth
    <div class="flex items-center gap-3 mb-4">
        <img src="{{ auth()->user()->avatar ?? asset('image/dyanaf-logo.jpg') }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
        <div>
            <p class="font-medium text-gray-800">{{ auth()->user()->name }}</p>
            <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
        </div>
    </div>
    @endauth
    <a href="/#home" class="text-lg font-medium text-gray-800 py-2">Beranda</a>
    <a href="/#services" class="text-lg font-medium text-gray-800 py-2">Layanan</a>
    <a href="/#portfolio" class="text-lg font-medium text-gray-800 py-2">Portfolio</a>
    <a href="/#pricing" class="text-lg font-medium text-gray-800 py-2">Harga</a>
    <a href="/#contact" class="text-lg font-medium text-gray-800 py-2">Kontak</a>
    @auth
    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="px-6 py-3 text-sm font-semibold text-red-600 border border-red-600 rounded-xl hover:bg-red-50">
            Logout
        </button>
    </form>
    @else
    <a href="{{ route('login') }}" class="mt-4 px-6 py-3 text-sm font-semibold text-white gradient-primary rounded-xl">Login</a>
    @endauth
</div>

<script>
    function toggleUserDropdown() {
        const menu = document.getElementById('userDropdownMenu');
        menu.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const dropdown = document.getElementById('userDropdown');
        const menu = document.getElementById('userDropdownMenu');
        if (dropdown && menu && !dropdown.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });
</script>