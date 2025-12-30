@extends('layouts.app')

@section('title', 'CV ATS Friendly - Dyanaf Store')

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
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">CV ATS-Friendly</h1>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">CV yang optimize untuk lolos sistem ATS (Applicant Tracking System) perusahaan besar. Meningkatkan peluang CV Anda dibaca HRD.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-white/90">
                <div class="flex items-center gap-2">
                    <i class="far fa-clock"></i>
                    <span>3 Jam</span>
                </div>
                <div class="w-px h-6 bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="text-2xl font-bold">Rp 60.000</span>
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
                Banyak perusahaan besar menggunakan sistem ATS untuk menyaring ribuan CV yang masuk. CV ATS-Friendly dirancang khusus agar mudah dibaca oleh sistem ini, sehingga CV Anda lebih besar kemungkinannya lolos ke tahap interview.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Cocok untuk: Melamar di perusahaan multinasional, BUMN, startup besar, dan perusahaan yang menggunakan sistem rekrutmen online.
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
                        <i class="fas fa-robot"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">ATS Optimized</h3>
                        <p class="text-gray-600 text-sm">Format yang mudah dibaca oleh Applicant Tracking System</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Keyword Optimization</h3>
                        <p class="text-gray-600 text-sm">Menggunakan keyword yang relevan dengan posisi yang dilamar</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-list"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Struktur Standar</h3>
                        <p class="text-gray-600 text-sm">Layout clean tanpa tabel, kolom, atau grafik yang bikin ATS bingung</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Mudah Disesuaikan</h3>
                        <p class="text-gray-600 text-sm">File Word yang bisa diedit untuk lamar posisi berbeda</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Highlight Achievements</h3>
                        <p class="text-gray-600 text-sm">Pencapaian ditulis dengan format yang impactful</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Format Word & PDF</h3>
                        <p class="text-gray-600 text-sm">Dalam format .docx dan .pdf</p>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Kirim Data & Job Desc</h3>
                        <p class="text-gray-600">Kirimkan data diri lengkap dan job description posisi yang ingin Anda lamar.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Keyword Research</h3>
                        <p class="text-gray-600">Kami analisis job desc untuk menentukan keyword yang harus ada di CV Anda.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Penyusunan CV</h3>
                        <p class="text-gray-600">CV disusun with ATS-friendly format dan keyword optimization.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-14 h-14 rounded-full gradient-primary flex items-center justify-center text-white text-xl font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Testing & Delivery</h3>
                        <p class="text-gray-600">CV di-test dengan ATS checker online sebelum dikirim ke Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 md:p-12 text-center border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tingkatkan Peluang Lolos ATS</h2>
            <p class="text-gray-600 mb-8">Dapatkan CV yang ATS-friendly dan optimized untuk posisi impian Anda</p>
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

<!-- Floating Bottom Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t-2 border-gray-200 shadow-2xl z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between gap-6">
            <!-- Left: Simple Back Link -->
            <a href="{{ route('list-jasa') }}" class="flex items-center gap-2 text-gray-700 hover:text-gray-900 transition-all font-medium">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke List Harga</span>
            </a>
            
            <!-- Right: Service Info + Order Button -->
            <div class="flex items-center gap-6">
                <!-- Service Info -->
                <div class="hidden md:flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">CV ATS</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 60.000</p>
                    </div>
                </div>
                
                <!-- Order Button -->
                <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20CV%20ATS%20(Rp%2060.000)" target="_blank" class="flex items-center justify-center gap-2 px-8 py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Order & Bayar</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Add padding to bottom of page for floating bar -->
<div class="h-20"></div>

<!-- Floating Bottom Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t-2 border-gray-200 shadow-2xl z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between gap-6">
            <!-- Left: Simple Back Link -->
            <a href="{{ route('list-jasa') }}" class="flex items-center gap-2 text-gray-700 hover:text-gray-900 transition-all font-medium">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke List Harga</span>
            </a>
            
            <!-- Right: Service Info + Order Button -->
            <div class="flex items-center gap-6">
                <!-- Service Info -->
                <div class="hidden md:flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-gray-700 flex-shrink-0">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base leading-tight">CV ATS</h3>
                        <p class="text-lg font-extrabold text-gray-900 mt-0.5">Rp 60.000</p>
                    </div>
                </div>
                
                <!-- Order Button -->
                <a href="https://wa.me/6285881721193?text=Halo%20kak,%20saya%20mau%20order%20CV%20ATS%20(Rp%2060.000)" target="_blank" class="flex items-center justify-center gap-2 px-8 py-3 gradient-primary text-white font-semibold rounded-xl hover:opacity-90 transition-all shadow-lg">
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