@extends('layouts.app')

@section('title', 'Jasa Ketik Word - Dyanaf Store')

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
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Jasa Ketik Word</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Mengetik dokumen dari scan, foto, atau tulisan tangan ke Microsoft Word. Cocok untuk proposal, surat, laporan, dan dokumen lainnya.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>6 Jam</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 100.000</span>
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
                Punya dokumen berupa scan, foto, atau tulisan tangan yang perlu diketik ulang ke Word? Kami bantu! Cocok untuk mengetik proposal, surat, laporan, skripsi, atau dokumen lainnya dengan rapi dan sesuai format yang Anda inginkan.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Hasil ketikan rapi, sesuai format, dan siap untuk dicetak atau dikirim.
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
                        <i class="fas fa-file-word"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">File Word Rapi</h3>
                        <p class="text-gray-600 text-sm">Dokumen diketik dengan format yang rapi dan profesional</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Akurat & Teliti</h3>
                        <p class="text-gray-600 text-sm">Minimalisir typo dan kesalahan ketik</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Format Sesuai Request</h3>
                        <p class="text-gray-600 text-sm">Margin, font, spasi bisa disesuaikan dengan kebutuhan</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Word & PDF</h3>
                        <p class="text-gray-600 text-sm">Mendapatkan file dalam format .docx dan .pdf</p>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Kirim Dokumen</h3>
                        <p class="text-gray-600">Kirimkan foto/scan dokumen yang perlu diketik via email.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Format & Estimasi</h3>
                        <p class="text-gray-600">Tentukan format yang diinginkan. Kami berikan estimasi waktu dan harga.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengetikan</h3>
                        <p class="text-gray-600">Dokumen diketik dengan teliti sesuai format yang diminta.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Review & Kirim</h3>
                        <p class="text-gray-600">Dokumen di-proofread dan dikirim dalam format Word dan PDF.</p>
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
                        <i class="fas fa-file-word"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">Jasa Ketik Word</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 100.000</p>
                    </div>
                </div>
                
                <!-- Wrapper for Mobile Price & Button -->
                <div class="flex flex-col items-end md:block">
                    <!-- Name & Price for Mobile (Above Button) -->
                    <div class="md:hidden text-right mb-1">
                        <div class="text-xs text-gray-600 font-medium">Jasa Ketik Word</div>
                        <div class="text-sm font-bold text-gray-900">Rp 100.000</div>
                    </div>
                    
                    <!-- Order Button -->
                    <button onclick="triggerPayment('Jasa Ketik Word', 100000)" id="pay-button" class="flex items-center justify-center gap-2 px-4 py-2.5 md:px-8 md:py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg text-sm md:text-base">
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