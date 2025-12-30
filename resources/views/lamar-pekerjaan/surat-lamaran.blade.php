@extends('layouts.app')

@section('title', 'Surat Lamaran Profesional - Dyanaf Store')

@section('content')
<section class="relative pt-32 pb-20 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-white/90 text-sm mb-6">
                <i class="fas fa-briefcase"></i>
                <span>Kebutuhan Lamar Pekerjaan</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Surat Lamaran Profesional</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Surat lamaran kerja yang persuasif dan profesional, disesuaikan dengan posisi yang Anda lamar untuk meningkatkan daya tarik kandidat.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>30 Menit</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 20.000</span>
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
                Surat lamaran adalah first impression Anda kepada perusahaan. Kami membantu Anda membuat surat lamaran yang menarik, profesional, dan persuasif yang menunjukkan antusiasme dan kualifikasi Anda untuk posisi yang dilamar.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Cocok untuk semua jenis posisi, mulai dari fresh graduate hingga professional experienced.
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
                        <i class="fas fa-language"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Bahasa Profesional</h3>
                        <p class="text-gray-600 text-sm">Menggunakan bahasa formal yang sopan dan persuasif</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Customized Content</h3>
                        <p class="text-gray-600 text-sm">Disesuaikan dengan posisi dan perusahaan yang dituju</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Format Standar</h3>
                        <p class="text-gray-600 text-sm">Mengikuti format surat lamaran yang benar dan profesional</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Super Cepat</h3>
                        <p class="text-gray-600 text-sm">Selesai dalam 30 menit, perfect untuk apply dadakan</p>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Kirim Data Diri</h3>
                        <p class="text-gray-600">Berikan data diri, posisi yang dilamar, dan info perusahaan.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Penulisan Surat</h3>
                        <p class="text-gray-600">Kami tulis surat lamaran yang persuasif dan disesuaikan dengan posisi.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Review & Finalisasi</h3>
                        <p class="text-gray-600">Quality check untuk memastikan tidak ada typo dan format sudah benar.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Kirim File</h3>
                        <p class="text-gray-600">Surat lamaran dikirim dalam format Word dan PDF, siap dilampirkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 md:p-12 text-center border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Butuh Surat Lamaran Cepat?</h2>
            <p class="text-gray-600 mb-8">Dapatkan surat lamaran profesional dalam 30 menit!</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:dyanaf.joki@gmail.com" class="inline-flex items-center justify-center gap-2 px-8 py-4 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all">
                    <i class="fas fa-envelope"></i>
                    Pesan Sekarang
                </a>
                <a href="{{ route('list-jasa') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-800 text-gray-800 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all">
                    Lihat Layanan Lain
                </a>
            </div>
        </div>
    </div>
</section>
@endsection