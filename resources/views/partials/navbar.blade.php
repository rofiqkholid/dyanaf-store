<!-- Navigation -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-3 border-b border-gray-600" style="background-color: #2b3a4b">
    <div class="container mx-auto px-4 md:px-6 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 text-base md:text-xl font-bold text-white navbar-brand">
            <img src="{{ asset('image/dyanaf-logo.jpg') }}" alt="Dyanaf Store Logo" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover">
            <span>Dyanaf Store</span>
        </a>

        <button class="md:hidden flex flex-col gap-1 p-2 z-[1001]" id="mobileMenuBtn">
            <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-5 h-0.5 bg-white transition-all duration-300"></span>
        </button>

        <ul class="hidden md:flex items-center gap-2" id="navbarMenu">
            <li><a href="#home" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Beranda<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="#services" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Layanan<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="#portfolio" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Portfolio<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="#pricing" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Harga<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
            <li><a href="#contact" class="nav-link relative px-4 py-2.5 text-sm font-medium text-white/90 hover:text-white transition-colors group">Kontak<span class="absolute bottom-0 left-0 right-0 h-0.5 bg-white scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span></a></li>
        </ul>

        <div class="hidden md:flex items-center gap-3">
            <a href="#contact" class="text-white text-xl hover:text-gray-300 transition-all">
                <i class="fas fa-shopping-bag"></i>
            </a>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed top-0 left-0 right-0 inset-0 bg-white z-40 flex flex-col items-center justify-center gap-4 transform translate-x-full transition-transform duration-300 md:hidden">
    <a href="#home" class="text-lg font-medium text-gray-800 py-2">Beranda</a>
    <a href="#services" class="text-lg font-medium text-gray-800 py-2">Layanan</a>
    <a href="#portfolio" class="text-lg font-medium text-gray-800 py-2">Portfolio</a>
    <a href="#pricing" class="text-lg font-medium text-gray-800 py-2">Harga</a>
    <a href="#contact" class="text-lg font-medium text-gray-800 py-2">Kontak</a>
    <a href="#contact" class="mt-4 px-6 py-3 text-sm font-semibold text-white gradient-primary rounded-xl">Pesan Sekarang</a>
</div>