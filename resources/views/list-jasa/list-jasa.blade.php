@extends('layouts.app')

@section('title', 'Daftar Harga Layanan - Dyanaf Store')

@section('content')
<!-- Hero Header -->
<section class="relative pt-32 pb-16 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">Pilih Layanan Sesuai Kebutuhan</h1>
        <p class="text-base text-white/80 max-w-lg mx-auto">Layanan profesional dengan harga terjangkau dan pengerjaan cepat</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="space-y-14">

            <!-- Category 1: Tugas Akademik -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 flex items-center justify-center gradient-primary rounded-lg text-white text-lg">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700">Tugas Akademik</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Card -->
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Makalah</h4>
                                <p class="text-[11px] text-gray-400">(Tanpa Materi)</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">2 Jam – 1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 100.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Makalah%20(Tanpa%20Materi)" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Makalah</h4>
                                <p class="text-[11px] text-gray-400">(Ada Materi)</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">1 – 6 Jam</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 70.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Makalah%20(Ada%20Materi)" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Jurnal</h4>
                                <p class="text-[11px] text-gray-400">Ilmiah/Akademik</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 130.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Jurnal" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Joki Tugas</h4>
                                <p class="text-[11px] text-gray-400">Tugas Harian</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">3 Jam</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 50.000<span class="text-xs font-normal text-gray-400">/tugas</span></span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Joki%20Tugas%20Harian" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category 2: Kebutuhan Lamar Pekerjaan -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 flex items-center justify-center gradient-primary rounded-lg text-white text-lg">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700">Kebutuhan Lamar Pekerjaan</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">CV Kreatif</h4>
                                <p class="text-[11px] text-gray-400">Desain Modern</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">2 Jam</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 25.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20CV%20Kreatif" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">CV ATS</h4>
                                <p class="text-[11px] text-gray-400">Lolos Sistem ATS</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">3 Jam</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 60.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20CV%20ATS" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Surat Lamaran</h4>
                                <p class="text-[11px] text-gray-400">Profesional</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">30 Menit</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 20.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Surat%20Lamaran" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Gabung PDF</h4>
                                <p class="text-[11px] text-gray-400">Merge Dokumen</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">30 Menit</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 10.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Gabung%20PDF" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category 3: Kebutuhan Bisnis -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 flex items-center justify-center gradient-primary rounded-lg text-white text-lg">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700">Kebutuhan Perusahaan & Bisnis</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Web Statis</h4>
                                <p class="text-[11px] text-gray-400">Landing Page</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">5 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 600.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Web%20Statis" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Web Dinamis</h4>
                                <p class="text-[11px] text-gray-400">Excl. Hosting</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">7 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 1.200.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Web%20Dinamis" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Desain Grafis</h4>
                                <p class="text-[11px] text-gray-400">Logo, Banner, dll</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 100.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Jasa%20Desain" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-keyboard"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Data Entry</h4>
                                <p class="text-[11px] text-gray-400">Input Data</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 150.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Data%20Entry" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Jasa Ketik Word</h4>
                                <p class="text-[11px] text-gray-400">Proposal, Surat</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">6 Jam</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 100.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Jasa%20Ketik" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                    <div class="group bg-white p-4 rounded-xl border border-gray-300 hover:border-gray-400 transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-100 rounded-lg group-hover:bg-gray-800 group-hover:text-white transition-all text-gray-600 text-lg">
                                <i class="fas fa-file-excel"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-gray-700 text-sm md:text-lg leading-tight">Jasa Excel</h4>
                                <p class="text-[11px] text-gray-400">Rumus, Tabel, dll</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500"><i class="far fa-clock mr-1"></i> Estimasi</span>
                                <span class="font-medium text-gray-600">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Harga</span>
                                <span class="text-lg font-bold text-gray-700">Rp 130.000</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20Jasa%20Excel" target="_blank" class="flex items-center justify-center gap-1.5 w-full py-2 gradient-primary text-white rounded-lg font-medium text-xs hover:opacity-90 transition-opacity">
                            <i class="fab fa-whatsapp"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="mt-14 text-center p-8 bg-white rounded-2xl border border-gray-300">
            <p class="text-gray-600 mb-4">Punya kebutuhan lain yang tidak terdaftar?</p>
            <a href="https://wa.me/6285881721193" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-opacity">
                <i class="fab fa-whatsapp text-lg"></i>
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>
@endsection