@extends('layouts.app')

@section('title', 'Daftar Harga Layanan - Dyanaf Store')

@section('content')
<section class="relative pt-20 pb-8 md:pt-32 md:pb-16 gradient-hero overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-3 md:px-6 text-center relative z-10">
        <h1 class="text-2xl md:text-4xl font-bold text-white mb-2 md:mb-3">Pilih Layanan Sesuai Kebutuhan</h1>
        <p class="text-sm md:text-base text-white/80 max-w-lg mx-auto">Layanan profesional dengan harga terjangkau dan pengerjaan cepat</p>
    </div>
</section>

<section class="py-8 md:py-16 bg-gray-50">
    <div class="container mx-auto px-3 md:px-6">
        <div class="space-y-8 md:space-y-16">

            @foreach($categories as $category)
            <div>
                <div class="flex items-center gap-2 mb-4 md:mb-8">
                    <div class="w-8 h-8 md:w-12 md:h-12 flex items-center justify-center rounded-xl text-gray-800 text-base md:text-xl">
                        <i class="{{ $category->icon }}"></i>
                    </div>
                    <div>
                        <h3 class="text-sm md:text-xl font-bold text-gray-800">{{ $category->name }}</h3>
                        <p class="text-xs md:text-sm text-gray-500">{{ $category->description }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6">
                    @foreach($category->services as $service)
                    <div class="group relative bg-white border border-gray-300 hover:border-gray-400 transition-all duration-300 hover:-translate-y-1 overflow-hidden" style="border-radius: 2px;">
                        @if($service->thumbnail)
                        <div class="w-full h-24 sm:h-32 overflow-hidden">
                            <img src="{{ asset($service->thumbnail) }}" alt="{{ $service->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        @else
                        <div class="w-full h-24 sm:h-32 bg-gradient-to-br from-gray-100 to-gray-50 flex items-center justify-center">
                            <i class="{{ $service->icon }} text-2xl sm:text-4xl text-gray-400"></i>
                        </div>
                        @endif

                        <div class="p-3 sm:p-6">
                            <h4 class="font-medium text-gray-800 text-xs sm:text-sm leading-tight">{{ $service->name }}</h4>

                            <div class="mb-2 sm:mb-4">
                                <div class="flex items-center gap-1">
                                    <div>
                                        @if($service->price_display)
                                        <span class="text-sm sm:text-base font-extrabold text-[#2b3a4b]">{{ $service->price_display }} IDR</span>
                                        @else
                                        <span class="text-sm sm:text-base font-bold text-[#2b3a4b]">{{ number_format($service->price, 0, ',', '.') }} IDR</span>
                                        @endif
                                    </div>
                                    <i class="fas fa-tag text-[8px] sm:text-xs text-gray-400"></i>
                                </div>
                            </div>
                            <a href="{{ route($service->route_name) }}" class="flex items-center justify-center gap-1 w-full py-2 sm:py-3 gradient-primary text-white rounded-lg sm:rounded-xl font-semibold text-[10px] sm:text-sm hover:shadow-lg hover:scale-[1.02] transition-all cursor-pointer">
                                <i class="fas fa-shopping-cart text-[10px] sm:text-sm"></i> Order
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-8 md:mt-20 relative overflow-hidden">
            <div class="absolute inset-0 gradient-primary opacity-5" style="border-radius: 2px;"></div>
            <div class="relative text-center p-6 md:p-10 bg-white border border-gray-100" style="border-radius: 2px;">
                <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-3 md:mb-5 flex items-center justify-center gradient-primary" style="border-radius: 2px;">
                    <i class="fas fa-question-circle text-2xl md:text-3xl text-white"></i>
                </div>
                <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Punya Kebutuhan Lain?</h3>
                <p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6 max-w-md mx-auto">Tidak menemukan layanan yang Anda cari? Hubungi kami untuk konsultasi gratis dan solusi custom sesuai kebutuhan Anda</p>
                <a href="https://wa.me/6285881721193" target="_blank" class="inline-flex items-center gap-2 md:gap-3 px-6 py-3 md:px-8 md:py-4 gradient-primary text-white font-bold text-sm md:text-base rounded-xl hover:shadow-xl hover:scale-105 transition-all">
                    <i class="fab fa-whatsapp text-xl md:text-2xl"></i>
                    Konsultasi Gratis Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection