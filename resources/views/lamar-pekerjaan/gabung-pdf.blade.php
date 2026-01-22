@extends('layouts.app')

@section('title', 'Gabung PDF - Dyanaf Store')

@section('content')
<section class="relative pt-20 pb-12 md:pt-32 md:pb-20 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-3 md:px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-white/90 text-xs md:text-sm mb-6">
                <i class="fas fa-briefcase"></i>
                <span>Kebutuhan Lamar Pekerjaan</span>
            </div>
            <h1 class="text-2xl md:text-5xl font-bold text-white mb-6">Jasa Gabung PDF</h1>
            <p class="text-sm md:text-lg text-white/80 mb-8 max-w-2xl mx-auto">Menggabungkan beberapa file PDF menjadi satu dokumen. Cocok untuk melampirkan berkas lamaran kerja atau dokumen lainnya.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>30 Menit</span>
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
                <strong>Jasa Gabung PDF</strong> adalah layanan untuk menggabungkan beberapa file PDF menjadi satu dokumen. Sering kali saat melamar kerja atau mengurus dokumen, kita perlu menggabungkan beberapa PDF (CV, surat lamaran, ijazah, sertifikat) menjadi satu file.
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Dengan menggunakan jasa gabung PDF dari Dyanaf Store, Anda akan mendapatkan hasil yang rapi dan teratur. Kami memastikan urutan dokumen sesuai dengan keinginan Anda dan ukuran file tetap optimal untuk keperluan upload.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Simple, cepat, dan murah - hanya Rp 10.000!
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
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">PDF Tergabung Rapi</h3>
                        <p class="text-gray-600 text-sm">Semua file dijadikan satu dengan urutan yang benar</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-sort-numeric-down"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Urutan Sesuai Request</h3>
                        <p class="text-gray-600 text-sm">Urutan file bisa disesuaikan dengan kebutuhan</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-compress"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">File Size Optimal</h3>
                        <p class="text-gray-600 text-sm">File hasil tidak terlalu besar, mudah diupload</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Cepat & Murah</h3>
                        <p class="text-gray-600 text-sm">30 menit selesai, hanya Rp 10.000</p>
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
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Kirim File PDF</h3>
                        <p class="text-gray-600">Kirimkan semua file PDF yang perlu digabung via email.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Tentukan Urutan</h3>
                        <p class="text-gray-600">Informasikan urutan file (misal: CV - Surat Lamaran - Ijazah - Sertifikat).</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Proses Merge</h3>
                        <p class="text-gray-600">Kami gabungkan semua file menjadi satu PDF dengan rapi.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full gradient-primary flex items-center justify-center text-white text-lg md:text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Kirim Hasil</h3>
                        <p class="text-gray-600">PDF tergabung dikirim kembali, siap digunakan!</p>
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
                        <i class="fas fa-file-pdf"></i>
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