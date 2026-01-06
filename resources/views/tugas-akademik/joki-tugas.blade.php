@extends('layouts.app')

@section('title', 'Joki Tugas Harian - Dyanaf Store')

@section('content')
<section class="relative pt-20 pb-12 md:pt-32 md:pb-20 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-3 md:px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-white/90 text-xs md:text-sm mb-6">
                <i class="fas fa-book"></i>
                <span>Tugas Akademik</span>
            </div>
            <h1 class="text-2xl md:text-5xl font-bold text-white mb-6">Joki Tugas Harian</h1>
            <p class="text-sm md:text-lg text-white/80 mb-8 max-w-2xl mx-auto">Bantuan mengerjakan tugas harian kuliah atau sekolah dengan cepat dan akurat. Cocok untuk tugas-tugas kecil yang menumpuk.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>3 Jam</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
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
                Tugas harian yang menumpuk? Deadline besok pagi? Kami siap bantu! Layanan joki tugas harian cocok untuk mengerjakan tugas-tugas kecil seperti essay pendek, soal pilihan ganda, analisis singkat, review jurnal, dan tugas sejenis.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Pengerjaan cepat dalam 3 jam, perfect untuk deadline yang mepet!
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
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Super Cepat</h3>
                        <p class="text-gray-600 text-sm">Selesai dalam 3 jam, perfect untuk deadline mendadak</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Jawaban Akurat</h3>
                        <p class="text-gray-600 text-sm">Dikerjakan dengan teliti dan sesuai instruksi</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Harga Terjangkau</h3>
                        <p class="text-gray-600 text-sm">Rp 50.000/tugas, hemat untuk tugas-tugas kecil</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Format Sesuai Request</h3>
                        <p class="text-gray-600 text-sm">Word, PDF, atau format lain sesuai kebutuhan Anda</p>
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
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">1</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Kirim Tugas</h3>
                        <p class="text-gray-600">Kirimkan soal atau instruksi tugas yang perlu dikerjakan.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Konfirmasi Cepat</h3>
                        <p class="text-gray-600">Kami review dan konfirmasi bisa dikerjakan. Lalu Anda bayar.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Pengerjaan</h3>
                        <p class="text-gray-600">Tugas dikerjakan dengan cepat dan teliti dalam 3 jam.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Kirim Hasil</h3>
                        <p class="text-gray-600">Tugas dikirim dan siap dikumpulkan. Cepat dan mudah!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Floating Bottom Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t-2 border-gray-200 shadow-2xl z-50">
    <div class="container mx-auto px-4 py-5 md:px-6 md:py-4">
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
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">{{ $service->name }}</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                    </div>
                </div>

                <!-- Service Info (Mobile - Left of Button) -->
                <div class="md:hidden flex-1">
                        <div class="text-xs text-gray-600 font-medium text-right">{{ $service->name }}</div>
                        <div class="text-sm font-bold text-gray-900 text-right">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
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