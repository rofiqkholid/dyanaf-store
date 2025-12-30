@extends('layouts.app')

@section('title', 'Web Dinamis - Dyanaf Store')

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
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Website Dinamis</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Website full-featured dengan database, admin panel, dan fitur interaktif. Cocok untuk e-commerce, sistem informasi, atau web app.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>7 Hari</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 1.200.000</span>
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
                Website dinamis menggunakan database untuk menyimpan data dan memiliki fitur interaktif seperti login, CRUD (Create, Read, Update, Delete), dan dashboard admin. Cocok untuk bisnis yang memerlukan sistem manajemen konten atau e-commerce.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Teknologi: Laravel/CodeIgniter (PHP), MySQL, TailwindCSS/Bootstrap. Harga belum termasuk hosting.
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
                        <i class="fas fa-database"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Database Integration</h3>
                        <p class="text-gray-600 text-sm">MySQL database untuk menyimpan semua data</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Admin Panel</h3>
                        <p class="text-gray-600 text-sm">Dashboard untuk manage konten dan data</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Authentication System</h3>
                        <p class="text-gray-600 text-sm">Login, register, dan role management</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">CRUD Operations</h3>
                        <p class="text-gray-600 text-sm">Create, Read, Update, Delete data dengan mudah</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Responsive</h3>
                        <p class="text-gray-600 text-sm">Tampil sempurna di semua device</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-code"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Clean Code</h3>
                        <p class="text-gray-600 text-sm">Source code yang rapi dan ter-dokumentasi</p>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Requirement Gathering</h3>
                        <p class="text-gray-600">Diskusi detail fitur yang dibutuhkan, user flow, dan database structure.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Design & Database</h3>
                        <p class="text-gray-600">Buat design UI/UX dan database schema sesuai requirement.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Development</h3>
                        <p class="text-gray-600">Coding backend, frontend, dan integrasi database.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Testing & Delivery</h3>
                        <p class="text-gray-600">Testing semua fitur, bug fixing, dan deployment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 md:p-12 text-center border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Butuh Website dengan Fitur Lengkap?</h2>
            <p class="text-gray-600 mb-8">Konsultasikan kebutuhan website Anda dengan kami</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:dyanaf.joki@gmail.com" class="inline-flex items-center justify-center gap-2 px-8 py-4 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all">
                    <i class="fas fa-envelope"></i>
                    Konsultasi Gratis
                </a>
                <a href="{{ route('list-jasa') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-800 text-gray-800 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all">
                    Lihat Layanan Lain
                </a>
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
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">Web Dinamis</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 1.200.000</p>
                    </div>
                </div>
                
                <!-- Order Button (Compact on Mobile) -->
                <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Web%20Dinamis%20(Rp%201.200.000)" target="_blank" class="flex items-center justify-center gap-2 px-4 py-2.5 md:px-8 md:py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg text-sm md:text-base">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Order & Bayar</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Add padding to bottom of page for floating bar -->
<div class="h-20"></div>
@endsection