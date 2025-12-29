<!-- Navigation -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-5">
    <div class="container mx-auto px-6 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2.5 text-xl font-bold text-white navbar-brand">
            <img src="{{ asset('image/dyanaf-logo.jpg') }}" alt="Dyanaf Store Logo" class="w-10 h-10 rounded-xl object-cover">
            <span>Dyanaf Store</span>
        </a>

        <button class="md:hidden flex flex-col gap-1.5 p-2.5 z-[1001]" id="mobileMenuBtn">
            <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
        </button>

        <ul class="hidden md:flex items-center gap-2" id="navbarMenu">
            <li><a href="#home" class="nav-link px-4 py-2.5 text-sm font-medium text-white/90 rounded-lg hover:text-white hover:bg-white/10 transition-all">Beranda</a></li>
            <li><a href="#services" class="nav-link px-4 py-2.5 text-sm font-medium text-white/90 rounded-lg hover:text-white hover:bg-white/10 transition-all">Layanan</a></li>
            <li><a href="#portfolio" class="nav-link px-4 py-2.5 text-sm font-medium text-white/90 rounded-lg hover:text-white hover:bg-white/10 transition-all">Portfolio</a></li>
            <li><a href="#pricing" class="nav-link px-4 py-2.5 text-sm font-medium text-white/90 rounded-lg hover:text-white hover:bg-white/10 transition-all">Harga</a></li>
            <li><a href="#contact" class="nav-link px-4 py-2.5 text-sm font-medium text-white/90 rounded-lg hover:text-white hover:bg-white/10 transition-all">Kontak</a></li>
        </ul>

        <div class="hidden md:flex items-center gap-3">
            <a href="#contact" class="px-5 py-2.5 text-sm font-semibold bg-white text-gray-800 border border-gray-300 rounded-xl hover:-translate-y-0.5 hover:bg-gray-100 transition-all">
                Pesan Sekarang
            </a>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed inset-0 bg-white z-40 flex flex-col items-center justify-center gap-4 transform translate-x-full transition-transform duration-300 md:hidden">
    <a href="#home" class="text-lg font-medium text-gray-800 py-2">Beranda</a>
    <a href="#services" class="text-lg font-medium text-gray-800 py-2">Layanan</a>
    <a href="#portfolio" class="text-lg font-medium text-gray-800 py-2">Portfolio</a>
    <a href="#pricing" class="text-lg font-medium text-gray-800 py-2">Harga</a>
    <a href="#contact" class="text-lg font-medium text-gray-800 py-2">Kontak</a>
    <a href="#contact" class="mt-4 px-6 py-3 text-sm font-semibold text-white gradient-primary rounded-xl">Pesan Sekarang</a>
</div>