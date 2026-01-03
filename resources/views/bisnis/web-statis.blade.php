@extends('layouts.app')

@section('title', 'Web Statis - Dyanaf Store')

@section('content')
<section class="relative pt-32 pb-20 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-white/90 text-sm mb-6">
                <i class="fas fa-building"></i>
                <span>Kebutuhan Bisnis</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Website Statis / Landing Page</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Website profesional untuk company profile, portfolio, atau landing page produk. Desain modern, responsive, dan SEO friendly.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>5 Hari</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 600.000</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Tentang Layanan Ini</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Website statis cocok untuk company profile, portfolio, landing page produk, atau website informasi yang tidak memerlukan fitur kompleks seperti database atau login. Website ini fast loading, SEO friendly, dan mudah di-maintain.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Perfect untuk UMKM, freelancer, atau bisnis yang butuh online presence profesional dengan budget terjangkau.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Yang Anda Dapatkan</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Responsive Design</h3>
                        <p class="text-gray-600 text-sm">Tampil sempurna di desktop, tablet, dan mobile</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-search"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">SEO Optimized</h3>
                        <p class="text-gray-600 text-sm">Meta tags, structured data, dan optimasi untuk search engine</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Fast Loading</h3>
                        <p class="text-gray-600 text-sm">Performance optimized untuk loading cepat</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Custom Design</h3>
                        <p class="text-gray-600 text-sm">Desain sesuai branding dan preferensi Anda</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-code"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Source Code</h3>
                        <p class="text-gray-600 text-sm">Full source code untuk Anda sendiri</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Support 30 Hari</h3>
                        <p class="text-gray-600 text-sm">Free support dan minor updates selama 30 hari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Cara Kerja</h2>
            <div class="space-y-8">
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">1</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Konsultasi & Brief</h3>
                        <p class="text-gray-600">Diskusi kebutuhan, target audience, branding, dan referensi desain yang Anda suka.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Design & Development</h3>
                        <p class="text-gray-600">Kami design mockup dan develop website sesuai requirement.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Review & Revisi</h3>
                        <p class="text-gray-600">Preview website dan request revisi jika ada yang perlu disesuaikan.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Delivery & Launch</h3>
                        <p class="text-gray-600">Website selesai, siap di-deploy ke hosting Anda atau kami bantu setup.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Floating Bottom Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t-2 border-gray-200 shadow-2xl z-50">
    <div class="container mx-auto px-4 py-3 md:px-6 md:py-4">
        <div class="flex items-center justify-between gap-3 md:gap-6">
            <!-- Left: Simple Back Link -->
            <a href="{{ route('list-jasa') }}" class="flex items-center gap-2 text-gray-700 hover:text-gray-900 transition-all font-medium text-sm md:text-base">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali <span class="hidden sm:inline">ke List Harga</span></span>
            </a>

            <!-- Right: Service Info + Order Button -->
            <div class="flex items-center gap-3 md:gap-6">
                <!-- Service Info (Desktop Only) -->
                <div class="hidden md:flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-gray-700 flex-shrink-0">
                        <i class="fas fa-code"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">Web Statis</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 600.000</p>
                    </div>
                </div>

                <!-- Wrapper for Mobile Price & Button -->
                <div class="flex flex-col items-end md:block">
                    <!-- Name & Price for Mobile (Above Button) -->
                    <div class="md:hidden text-right mb-1">
                        <div class="text-xs text-gray-600 font-medium">Web Statis</div>
                        <div class="text-sm font-bold text-gray-900">Rp 600.000</div>
                    </div>

                    <!-- Order Button -->
                    <button data-service-name="{{ $service->name }}" data-service-price="{{ $service->price }}" id="pay-button" class="flex items-center justify-center gap-2 px-4 py-2.5 md:px-8 md:py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg text-sm md:text-base cursor-pointer">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Order & Bayar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add padding to bottom of page for floating bar -->
<div class="h-24 md:h-20"></div>
@endsection