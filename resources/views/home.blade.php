@extends('layouts.app')

@section('title', 'Dyanaf Store')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-start lg:items-center pt-40 lg:pt-20 pb-10 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 gradient-hero -z-20"></div>

    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left">
                <span class="inline-block px-4 py-2 bg-white/15 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-medium mb-6">
                    <i class="fas fa-rocket mr-2"></i> Solusi Digital Terpercaya
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                    Wujudkan Kebutuhan Digital Anda Bersama Kami
                </h1>

                <p class="text-lg text-white/85 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                    Layanan profesional pembuatan website, CV berkualitas, dan surat lamaran pekerjaan yang akan membantu Anda tampil lebih menonjol di era digital.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                    <a href="{{ route('list-jasa') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-white border border-white rounded-xl hover:bg-white hover:text-gray-800 transition-all">
                        <span>List Harga</span>
                        <i class="fas fa-hand-point-right"></i>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white border-1 border-white rounded-xl hover:bg-white hover:text-gray-800 transition-all">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Stats -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-8">
                    <div class="text-center">
                        <span class="block text-3xl font-extrabold text-white">500+</span>
                        <span class="text-sm text-white/70">Proyek Selesai</span>
                    </div>
                    <div class="hidden sm:block w-px h-10 bg-white/20"></div>
                    <div class="text-center">
                        <span class="block text-3xl font-extrabold text-white">98%</span>
                        <span class="text-sm text-white/70">Klien Puas</span>
                    </div>
                    <div class="hidden sm:block w-px h-10 bg-white/20"></div>
                    <div class="text-center">
                        <span class="block text-3xl font-extrabold text-white">24/7</span>
                        <span class="text-sm text-white/70">Support</span>
                    </div>
                </div>
            </div>

            <!-- Hero Image/Illustration -->
            <div class="hidden lg:flex justify-center items-center relative">
                <div class="relative w-full max-w-md aspect-square">
                    <!-- Decorative Rings -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 border border-white/10 rounded-full"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-56 h-56 border border-dashed border-white/15 rounded-full"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 border border-white/10 rounded-full"></div>
                    <!-- Orbital Line -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 border border-white/10 rounded-full" style="transform: translate(-50%, -50%) rotate(45deg);"></div>

                    <!-- Floating Shapes -->
                    <div class="absolute top-8 right-12 text-5xl text-white/20 animate-float">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="absolute bottom-20 left-8 text-4xl text-white/20 animate-float animate-float-delay-1">
                        <i class="fas fa-moon"></i>
                    </div>
                    <div class="absolute bottom-12 right-20 text-3xl text-white/20 animate-float animate-float-delay-2">
                        <i class="fas fa-star"></i>
                    </div>

                    <!-- Floating Cloud Cards -->
                    <div class="absolute top-12 left-4 animate-float-card">
                        <div class="relative">
                            <div class="absolute -left-3 -top-2 w-5 h-5 bg-white rounded-full"></div>
                            <div class="px-6 py-4 bg-white rounded-full shadow-lg flex items-center gap-3">
                                <i class="fas fa-globe text-xl text-gray-700"></i>
                                <span class="font-semibold text-gray-800">Website</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-1/2 -right-4 -translate-y-1/2 animate-float-card animate-float-delay-1">
                        <div class="relative">
                            <div class="absolute -left-3 -top-2 w-5 h-5 bg-white rounded-full"></div>
                            <div class="px-6 py-4 bg-white rounded-full shadow-lg flex items-center gap-3">
                                <i class="fas fa-file-alt text-xl text-gray-700"></i>
                                <span class="font-semibold text-gray-800">CV Pro</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-16 left-16 animate-float-card animate-float-delay-2">
                        <div class="relative">
                            <div class="absolute -left-3 -top-2 w-5 h-5 bg-white rounded-full"></div>
                            <div class="px-6 py-4 bg-white rounded-full shadow-lg flex items-center gap-3">
                                <i class="fas fa-envelope text-xl text-gray-700"></i>
                                <span class="font-semibold text-gray-800">Surat Lamaran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave -->
    <div class="absolute bottom-0 left-0 right-0 -z-10 translate-y-[2px]">
        <svg viewBox="0 0 1440 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto block">
            <path d="M0,20 L40,22 C80,24 160,28 240,26 C320,24 400,16 480,14 C560,12 640,16 720,22 C800,28 880,36 960,36 C1040,36 1120,28 1200,22 C1280,16 1360,12 1400,10 L1440,8 V54 H0 Z" fill="white" />
        </svg>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Solusi Lengkap untuk Kebutuhan Digital Anda</h2>
            <p class="text-lg text-gray-500">Kami menyediakan berbagai layanan digital berkualitas tinggi dengan harga terjangkau</p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Service 1 -->
            <div class="group relative p-8 bg-white border border-gray-200 rounded-3xl hover:-translate-y-2 hover: hover:border-transparent transition-all duration-300">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 text-gray-700 rounded-2xl mb-5 group-hover:bg-gray-1000 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Pembuatan Website</h3>
                <p class="text-gray-500 text-sm mb-5 leading-relaxed">Website profesional dan responsif untuk bisnis, portfolio, toko online, dan lainnya.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Desain Modern & Responsif
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        SEO Friendly
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Support & Maintenance
                    </li>
                </ul>
                <a href="#pricing" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-700 hover:gap-2 transition-all">
                    Lihat Paket <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>

            <!-- Service 2 (Featured) -->
            <div class="group relative p-8 gradient-primary rounded-3xl hover:-translate-y-2 hover: transition-all duration-300">
                <span class="absolute top-4 right-4 px-3 py-1 bg-white text-gray-900 text-xs font-bold rounded-full">Populer</span>
                <div class="w-14 h-14 flex items-center justify-center bg-white/20 text-white rounded-2xl mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <path d="M14 2v6h6" />
                        <path d="M16 13H8" />
                        <path d="M16 17H8" />
                        <path d="M10 9H8" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">CV Profesional</h3>
                <p class="text-white/80 text-sm mb-5 leading-relaxed">CV dengan desain modern dan ATS-friendly yang akan membantu Anda menonjol.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-white/90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Desain ATS-Friendly
                    </li>
                    <li class="flex items-center gap-2 text-sm text-white/90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Layout Profesional
                    </li>
                    <li class="flex items-center gap-2 text-sm text-white/90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Revisi Gratis
                    </li>
                </ul>
                <a href="#pricing" class="inline-flex items-center gap-1 text-sm font-semibold text-white hover:gap-2 transition-all">
                    Lihat Paket <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="group relative p-8 bg-white border border-gray-200 rounded-3xl hover:-translate-y-2 hover: hover:border-transparent transition-all duration-300">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 text-gray-700 rounded-2xl mb-5 group-hover:bg-gray-1000 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Surat Lamaran Kerja</h3>
                <p class="text-gray-500 text-sm mb-5 leading-relaxed">Surat lamaran yang persuasif dan profesional, disesuaikan dengan posisi Anda.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Bahasa Profesional
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Customized Content
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Format Standar
                    </li>
                </ul>
                <a href="#pricing" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-700 hover:gap-2 transition-all">
                    Lihat Paket <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="group relative p-8 bg-white border border-gray-200 rounded-3xl hover:-translate-y-2 hover: hover:border-transparent transition-all duration-300">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 text-gray-700 rounded-2xl mb-5 group-hover:bg-gray-1000 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m16 12-4-4-4 4" />
                        <path d="M12 16V8" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Desain Grafis</h3>
                <p class="text-gray-500 text-sm mb-5 leading-relaxed">Logo, banner, poster, dan berbagai kebutuhan desain grafis untuk branding.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Logo & Branding
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Social Media Assets
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Print Design
                    </li>
                </ul>
                <a href="#pricing" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-700 hover:gap-2 transition-all">
                    Lihat Paket <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section id="why-us" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Kualitas Terjamin -->
            <div class="text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full mx-auto mb-4">
                    <i class="fas fa-check-circle text-2xl text-gray-700"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">Kualitas Terjamin</h4>
                <p class="text-gray-500 text-sm">Hasil kerja profesional dengan standar tinggi dan revisi hingga puas.</p>
            </div>

            <!-- Pengerjaan Cepat -->
            <div class="text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full mx-auto mb-4">
                    <i class="fas fa-clock text-2xl text-gray-700"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">Pengerjaan Cepat</h4>
                <p class="text-gray-500 text-sm">Proses pengerjaan yang efisien dengan timeline yang jelas dan tepat waktu.</p>
            </div>

            <!-- Harga Terjangkau -->
            <div class="text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full mx-auto mb-4">
                    <i class="fas fa-dollar-sign text-2xl text-gray-700"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">Harga Terjangkau</h4>
                <p class="text-gray-500 text-sm">Biaya yang kompetitif tanpa mengorbankan kualitas hasil pekerjaan.</p>
            </div>

            <!-- Support 24/7 -->
            <div class="text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full mx-auto mb-4">
                    <i class="fas fa-headset text-2xl text-gray-700"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">Support 24/7</h4>
                <p class="text-gray-500 text-sm">Tim support yang responsif siap membantu Anda kapan saja.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Pilih Paket yang Sesuai dengan Kebutuhan Anda</h2>
            <p class="text-lg text-gray-500">Harga transparan tanpa biaya tersembunyi</p>
        </div>

        <!-- Pricing Grid -->
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Pricing 1 -->
            <div class="relative p-10 bg-white border border-gray-200 rounded-3xl hover:-translate-y-2 hover: transition-all duration-300">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">CV Basic</h3>
                    <p class="text-sm text-gray-500">Untuk pencari kerja pemula</p>
                </div>
                <div class="text-center mb-8 pb-8 border-b border-gray-200">
                    <span class="text-xl font-semibold text-gray-600">Rp</span>
                    <span class="text-5xl font-extrabold text-gray-900 ml-1">50.000</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        1 Desain CV
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Format PDF & Word
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        1x Revisi
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Pengerjaan 1-2 Hari
                    </li>
                </ul>
                <a href="#contact" class="block w-full py-4 text-center text-sm font-semibold text-gray-700 border-2 border-gray-800 rounded-xl hover:bg-gray-1000 hover:text-white transition-all">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Pricing 2 (Featured) -->
            <div class="relative p-10 bg-gray-900 rounded-3xl scale-105 hover:-translate-y-2 hover: transition-all duration-300">
                <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-5 py-1.5 gradient-primary text-white text-xs font-semibold rounded-full">Best Value</span>
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-white mb-2">CV + Surat Lamaran</h3>
                    <p class="text-sm text-gray-400">Paket lengkap untuk melamar kerja</p>
                </div>
                <div class="text-center mb-8 pb-8 border-b border-gray-700">
                    <span class="text-xl font-semibold text-gray-400">Rp</span>
                    <span class="text-5xl font-extrabold text-white ml-1">85.000</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-5 h-5 text-gray-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        1 Desain CV Premium
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-5 h-5 text-gray-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        1 Surat Lamaran
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-5 h-5 text-gray-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Format PDF & Word
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-5 h-5 text-gray-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        3x Revisi
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-300">
                        <svg class="w-5 h-5 text-gray-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Pengerjaan 2-3 Hari
                    </li>
                </ul>
                <a href="#contact" class="block w-full py-4 text-center text-sm font-semibold text-white rounded-xl border border-gray-200 shadow-amber-500/40 hover: hover:shadow-amber-500/50 transition-all">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Pricing 3 -->
            <div class="relative p-10 bg-white border border-gray-200 rounded-3xl hover:-translate-y-2 hover: transition-all duration-300">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Website Bisnis</h3>
                    <p class="text-sm text-gray-500">Website profesional untuk bisnis</p>
                </div>
                <div class="text-center mb-8 pb-8 border-b border-gray-200">
                    <span class="text-xl font-semibold text-gray-600">Rp</span>
                    <span class="text-5xl font-extrabold text-gray-900 ml-1">1.5jt</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        5 Halaman Website
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Desain Responsif
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        SEO Basic
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Free Domain 1 Tahun
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 12 2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        Support 30 Hari
                    </li>
                </ul>
                <a href="#contact" class="block w-full py-4 text-center text-sm font-semibold text-gray-700 border-2 border-gray-800 rounded-xl hover:bg-gray-1000 hover:text-white transition-all">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Apa Kata Klien Kami?</h2>
            <p class="text-lg text-gray-500">Kepuasan klien adalah prioritas utama kami</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 bg-white rounded-3xl border border-gray-200 hover:-translate-y-1 hover: transition-all duration-300">
                <div class="mb-4 text-yellow-400"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="text-gray-700 leading-relaxed italic mb-6">"CV yang dibuat sangat profesional dan langsung diterima oleh HRD! Terima kasih Dyanaf Store!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 flex items-center justify-center gradient-primary text-white font-bold rounded-full">A</div>
                    <div>
                        <h5 class="font-semibold text-gray-900">Andi Prasetyo</h5>
                        <span class="text-sm text-gray-500">Fresh Graduate</span>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-white rounded-3xl border border-gray-200 hover:-translate-y-1 hover: transition-all duration-300">
                <div class="mb-4 text-yellow-400"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="text-gray-700 leading-relaxed italic mb-6">"Website toko online saya jadi sangat bagus dan penjualan meningkat drastis. Highly recommended!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 flex items-center justify-center gradient-primary text-white font-bold rounded-full">S</div>
                    <div>
                        <h5 class="font-semibold text-gray-900">Siti Nurhaliza</h5>
                        <span class="text-sm text-gray-500">Pemilik Toko Online</span>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-white rounded-3xl border border-gray-200 hover:-translate-y-1 hover: transition-all duration-300">
                <div class="mb-4 text-yellow-400"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="text-gray-700 leading-relaxed italic mb-6">"Pelayanan cepat dan responsif. Hasil kerja sangat memuaskan dengan harga yang terjangkau."</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 flex items-center justify-center gradient-primary text-white font-bold rounded-full">B</div>
                    <div>
                        <h5 class="font-semibold text-gray-900">Budi Santoso</h5>
                        <span class="text-sm text-gray-500">Pengusaha</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Author Section -->
<section id="portfolio" class="py-10 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-3xl font-extrabold text-gray-900 mb-2">Siapa di Balik Dyanaf Store?</h2>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-16 py-12 px-8 md:px-20 bg-gray-50 rounded-3xl">
                <!-- Profile Picture -->
                <div class="w-32 h-32 flex-shrink-0 bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-5xl text-gray-400"></i>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Rofiq Kholid, NDE</h3>
                    <p class="text-gray-600 font-medium mb-4">Back-end Developer | Software Engineer</p>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        Berpengalaman dalam pengembangan aplikasi web dan software. Dengan dedikasi tinggi untuk memberikan hasil berkualitas dan profesional, saya siap membantu mewujudkan kebutuhan digital Anda.
                    </p>

                    <!-- Social Media Icons -->
                    <div class="flex gap-3 justify-center md:justify-start">
                        <a href="https://www.linkedin.com/in/rofiq-kholid" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg text-gray-600 hover:bg-gray-300 hover:text-gray-800 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/rofiqkholid" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg text-gray-600 hover:bg-gray-300 hover:text-gray-800 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="mailto:dyanaf.joki@gmail.com" class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg text-gray-600 hover:bg-gray-300 hover:text-gray-800 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="relative py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Siap Memulai Proyek Anda?</h2>
        <p class="text-lg text-gray-500 mb-8 max-w-xl mx-auto">Hubungi kami sekarang dan konsultasikan kebutuhan digital Anda secara gratis!</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285881721193" target="_blank" class="inline-flex items-center justify-center gap-2 px-8 py-4 gradient-primary text-white font-semibold rounded-xl hover:-translate-y-1 hover:shadow-lg transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                </svg>
                Chat WhatsApp
            </a>
            <a href="mailto:dyanaf.joki@gmail.com" target="_blank" class="inline-flex items-center justify-center gap-2 px-8 py-4 gradient-primary text-white font-semibold rounded-xl hover:-translate-y-1 hover:shadow-lg transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="16" x="2" y="4" rx="2" />
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                </svg>
                Kirim Email
            </a>
        </div>
    </div>
</section>
@endsection