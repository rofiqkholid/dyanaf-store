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
        <div class="space-y-16">

            <!-- Category 1: Tugas Akademik -->
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl gradient-primary text-white shadow-lg text-xl">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Tugas Akademik</h3>
                        <p class="text-sm text-gray-500">Solusi cepat untuk tugas kuliah dan sekolah</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card Makalah Tanpa Materi -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Makalah</h4>
                                <span class="inline-block px-2 py-0.5 bg-blue-50 text-blue-600 text-[10px] font-medium rounded-full">Tanpa Materi</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">2 Jam - 1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">100<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.makalah-tanpa-materi') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Card Makalah Ada Materi -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Makalah</h4>
                                <span class="inline-block px-2 py-0.5 bg-green-50 text-green-600 text-[10px] font-medium rounded-full">Ada Materi</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">1 - 6 Jam</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">70<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.makalah-ada-materi') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Card Jurnal -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Jurnal</h4>
                                <span class="inline-block px-2 py-0.5 bg-purple-50 text-purple-600 text-[10px] font-medium rounded-full">Ilmiah/Akademik</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">130<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.jurnal') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Card Joki Tugas -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Joki Tugas</h4>
                                <span class="inline-block px-2 py-0.5 bg-orange-50 text-orange-600 text-[10px] font-medium rounded-full">Tugas Harian</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">3 Jam</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">50<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">/tugas</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.joki-tugas') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category 2: Kebutuhan Lamar Pekerjaan -->
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl gradient-primary text-white shadow-lg text-xl">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Kebutuhan Lamar Pekerjaan</h3>
                        <p class="text-sm text-gray-500">Tampil profesional dalam melamar pekerjaan</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- CV Kreatif -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">CV Kreatif</h4>
                                <span class="inline-block px-2 py-0.5 bg-pink-50 text-pink-600 text-[10px] font-medium rounded-full">Desain Modern</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">2 Jam</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">25<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.cv-kreatif') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- CV ATS -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">CV ATS</h4>
                                <span class="inline-block px-2 py-0.5 bg-indigo-50 text-indigo-600 text-[10px] font-medium rounded-full">Lolos Sistem ATS</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">3 Jam</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">60<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.cv-ats') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Surat Lamaran -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Surat Lamaran</h4>
                                <span class="inline-block px-2 py-0.5 bg-teal-50 text-teal-600 text-[10px] font-medium rounded-full">Profesional</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">30 Menit</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">20<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.surat-lamaran') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Gabung PDF -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Gabung PDF</h4>
                                <span class="inline-block px-2 py-0.5 bg-red-50 text-red-600 text-[10px] font-medium rounded-full">Merge Dokumen</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">30 Menit</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">10<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.gabung-pdf') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category 3: Kebutuhan Bisnis -->
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl gradient-primary text-white shadow-lg text-xl">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Kebutuhan Perusahaan & Bisnis</h3>
                        <p class="text-sm text-gray-500">Layanan untuk mengembangkan bisnis Anda</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Web Statis -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Web Statis</h4>
                                <span class="inline-block px-2 py-0.5 bg-cyan-50 text-cyan-600 text-[10px] font-medium rounded-full">Landing Page</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">5 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">600<span class="text-base">K</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.web-statis') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Web Dinamis -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Web Dinamis</h4>
                                <span class="inline-block px-2 py-0.5 bg-purple-50 text-purple-600 text-[10px] font-medium rounded-full">Excl. Hosting</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">7 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">1.2<span class="text-base">JT</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.web-dinamis') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Desain Grafis -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Desain Grafis</h4>
                                <span class="inline-block px-2 py-0.5 bg-yellow-50 text-yellow-600 text-[10px] font-medium rounded-full">Logo, Banner, dll</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">100<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.desain-grafis') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Data Entry -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-keyboard"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Data Entry</h4>
                                <span class="inline-block px-2 py-0.5 bg-lime-50 text-lime-600 text-[10px] font-medium rounded-full">Input Data</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">150<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.data-entry') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Jasa Ketik Word -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Jasa Ketik Word</h4>
                                <span class="inline-block px-2 py-0.5 bg-sky-50 text-sky-600 text-[10px] font-medium rounded-full">Proposal, Surat</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">6 Jam</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">100<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.jasa-ketik-word') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>

                    <!-- Jasa Excel -->
                    <div class="group relative bg-white p-6 rounded-2xl border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl transition-all text-gray-700 text-xl shadow-sm">
                                <i class="fas fa-file-excel"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-gray-800 text-base mb-1 leading-tight">Jasa Excel</h4>
                                <span class="inline-block px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-medium rounded-full">Rumus, Tabel, dll</span>
                            </div>
                        </div>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-gray-500 flex items-center gap-1"><i class="far fa-clock"></i> Estimasi</span>
                                <span class="font-semibold text-gray-700">1 Hari</span>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-medium">Harga Mulai</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800">130<span class="text-base">.000</span></span>
                                    <span class="text-xs text-gray-400 ml-0.5">IDR</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('order.jasa-excel') }}" class="flex items-center justify-center gap-2 w-full py-3 gradient-primary text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:scale-[1.02] transition-all">
                            <i class="fas fa-shopping-cart"></i> Order Sekarang
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="mt-20 relative overflow-hidden">
            <div class="absolute inset-0 gradient-primary opacity-5 rounded-3xl"></div>
            <div class="relative text-center p-10 bg-white rounded-3xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center gradient-primary rounded-2xl shadow-lg">
                    <i class="fas fa-question-circle text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Punya Kebutuhan Lain?</h3>
                <p class="text-gray-600 mb-6 max-w-md mx-auto">Tidak menemukan layanan yang Anda cari? Hubungi kami untuk konsultasi gratis dan solusi custom sesuai kebutuhan Anda</p>
                <a href="https://wa.me/6285881721193" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 gradient-primary text-white font-bold rounded-xl hover:shadow-xl hover:scale-105 transition-all">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Konsultasi Gratis Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection