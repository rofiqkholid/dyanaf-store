@extends('layouts.app')

@section('title', 'Makalah Tanpa Materi - Dyanaf Store')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-white/90 text-sm mb-6">
                <i class="fas fa-book"></i>
                <span>Tugas Akademik</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Jasa Pembuatan Makalah<br />(Tanpa Materi)</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">Pembuatan makalah profesional tanpa referensi materi. Cocok untuk topik umum atau tema yang Anda tentukan.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>2 Jam – 1 Hari</span>
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

<!-- Description Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Tentang Layanan Ini</h2>
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 leading-relaxed mb-4">
                    Layanan pembuatan makalah tanpa materi adalah solusi sempurna ketika Anda membutuhkan makalah untuk topik umum yang tidak memerlukan referensi khusus. Kami akan membuat makalah yang terstruktur dengan baik, menggunakan sumber-sumber kredibel yang relevan dengan topik yang Anda tentukan.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Makalah yang kami buat mengikuti standar akademik dengan format yang rapi, sistematis, dan mudah dipahami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Yang Anda Dapatkan</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Format Lengkap & Rapi</h3>
                        <p class="text-gray-600 text-sm">Cover, kata pengantar, daftar isi, BAB I-III, penutup, dan daftar pustaka</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white">
                            <i class="fas fa-spell-check"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Bebas Plagiarisme</h3>
                        <p class="text-gray-600 text-sm">Konten original dan unik, diketik manual bukan copy-paste</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white">
                            <i class="fas fa-book-open"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Referensi Kredibel</h3>
                        <p class="text-gray-600 text-sm">Menggunakan sumber terpercaya dari jurnal, buku, dan publikasi ilmiah</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white">
                            <i class="fas fa-file-word"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">File Word & PDF</h3>
                        <p class="text-gray-600 text-sm">Mendapatkan file dalam format .docx dan .pdf</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Cara Kerja</h2>
            <div class="space-y-8">
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold">
                            1
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Hubungi Kami</h3>
                        <p class="text-gray-600">Sampaikan topik makalah, jumlah halaman yang dibutuhkan, dan deadline Anda melalui email atau form kontak.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold">
                            2
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Konfirmasi & Pembayaran</h3>
                        <p class="text-gray-600">Kami akan konfirmasi detail pesanan dan waktu pengerjaan. Setelah deal, lakukan pembayaran.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold">
                            3
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengerjaan</h3>
                        <p class="text-gray-600">Tim kami mulai mengerjakan makalah dengan riset mendalam dan penulisan yang sistematis.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold">
                            4
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengiriman & Revisi</h3>
                        <p class="text-gray-600">Makalah dikirim sesuai deadline. Revisi gratis jika ada yang perlu disesuaikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 md:p-12 text-center border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Siap Memesan?</h2>
            <p class="text-gray-600 mb-8">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan makalah berkualitas</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:dyanaf.joki@gmail.com" class="inline-flex items-center justify-center gap-2 px-8 py-4 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all">
                    <i class="fas fa-envelope"></i>
                    Kirim Email
                </a>
                <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-800 text-gray-800 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all">
                    Lihat Kontak Lain
                </a>
            </div>
        </div>
    </div>
</section>
@endsection