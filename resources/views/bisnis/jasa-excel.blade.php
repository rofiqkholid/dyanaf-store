@extends('layouts.app')

@section('title', 'Jasa Excel - Dyanaf Store')

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
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Jasa Excel</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Pembuatan spreadsheet, rumus, tabel, grafik, dan automation Excel untuk kebutuhan bisnis atau akademik Anda.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>1 Hari</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 130.000</span>
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
                Kami membantu Anda membuat file Excel yang kompleks dengan rumus, pivot table, grafik, conditional formatting, dan berbagai fitur Excel lainnya. Cocok untuk laporan keuangan, analisis data, inventory, atau kebutuhan Excel lainnya.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Harga disesuaikan dengan kompleksitas rumus dan fitur yang dibutuhkan.
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
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Rumus Kompleks</h3>
                        <p class="text-gray-600 text-sm">VLOOKUP, IF, SUMIF, dan rumus lainnya sesuai kebutuhan</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Pivot Table & Grafik</h3>
                        <p class="text-gray-600 text-sm">Visualisasi data yang mudah dipahami</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-magic"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Conditional Formatting</h3>
                        <p class="text-gray-600 text-sm">Highlight data penting secara otomatis</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Automation/Macro</h3>
                        <p class="text-gray-600 text-sm">Otomatisasi task berulang dengan VBA (optional)</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-table"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Template Reusable</h3>
                        <p class="text-gray-600 text-sm">File bisa digunakan berulang kali untuk data berbeda</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Dokumentasi</h3>
                        <p class="text-gray-600 text-sm">Penjelasan cara menggunakan file Excel</p>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Brief Kebutuhan</h3>
                        <p class="text-gray-600">Jelaskan apa yang ingin dibuat, fungsi yang dibutuhkan, dan contoh jika ada.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Design Structure</h3>
                        <p class="text-gray-600">Kami design struktur tabel dan rumus yang diperlukan.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Build Excel</h3>
                        <p class="text-gray-600">Kami buat file Excel dengan rumus, formatting, dan fitur sesuai kebutuhan.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Testing & Delivery</h3>
                        <p class="text-gray-600">File di-test dengan sample data dan dikirim dengan panduan penggunaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 md:p-12 text-center border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Butuh Bantuan Excel?</h2>
            <p class="text-gray-600 mb-8">Konsultasikan kebutuhan Excel Anda dengan kami</p>
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
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">Jasa Excel</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 130.000</p>
                    </div>
                </div>
                
                <!-- Wrapper for Mobile Price & Button -->
                <div class="flex flex-col items-end md:block">
                    <!-- Name & Price for Mobile (Above Button) -->
                    <div class="md:hidden text-right mb-1">
                        <div class="text-xs text-gray-600 font-medium">Jasa Excel</div>
                        <div class="text-sm font-bold text-gray-900">Rp 130.000</div>
                    </div>
                    
                    <!-- Order Button -->
                    <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Jasa%20Excel%20(Rp%20130.000)" target="_blank" class="flex items-center justify-center gap-2 px-4 py-2.5 md:px-8 md:py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg text-sm md:text-base">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Order & Bayar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add padding to bottom of page for floating bar -->
<div class="h-24 md:h-20"></div>
@endsection