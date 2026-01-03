<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Login - Dyanaf Store">

    <title>Login - Dyanaf Store</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('image/dyanaf-logo-circle.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">

    <!-- Background Effects - Hidden on mobile for better performance -->
    <div class="hidden md:block fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-slate-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-slate-500/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Main Container -->
    <div class="relative min-h-screen flex items-center justify-center p-4 md:p-8">

        <!-- Login Card -->
        <div class="w-full max-w-4xl">

            <!-- Mobile Layout -->
            <div class="md:hidden bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl overflow-hidden">

                <!-- Mobile Header -->
                <div class="p-6 text-center border-b border-white/10">
                    <img src="{{ asset('image/dyanaf-logo.jpg') }}" alt="Dyanaf Store"
                        class="w-16 h-16 rounded-full border-2 border-white/20 shadow-lg mx-auto mb-4">
                    <h1 class="text-xl font-bold text-white mb-1">Dyanaf Store</h1>
                    <p class="text-white/50 text-xs">Live Chat Support</p>
                </div>

                <!-- Mobile Content -->
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-white mb-1 text-center">Selamat Datang! 👋</h2>
                    <p class="text-white/50 text-xs text-center mb-6">Login untuk menggunakan fitur chat</p>

                    <!-- Error Alert -->
                    @if(session('error'))
                    <div class="mb-4 p-3 rounded-lg bg-white/5 border border-white/10 text-white/80 text-xs flex items-center gap-2">
                        <i class="fas fa-exclamation-circle text-white/60"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                    @endif

                    <!-- Google Login Button -->
                    <a href="{{ route('auth.google') }}"
                        class="w-full flex items-center justify-center gap-3 px-5 py-3.5 bg-white hover:bg-gray-100 rounded-xl font-semibold text-gray-700 text-sm transition-all duration-200 active:scale-[0.98]">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                        <span>Login dengan Google</span>
                    </a>

                    <!-- Info -->
                    <div class="mt-5 p-3 rounded-lg bg-white/5 border border-white/10 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shield-alt text-white/50 text-xs"></i>
                        </div>
                        <p class="text-white/50 text-xs leading-relaxed">
                            Chat otomatis dihapus setelah 3 jam untuk privasi Anda
                        </p>
                    </div>
                </div>

                <!-- Mobile Footer -->
                <div class="p-4 border-t border-white/10">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center gap-2 text-white/40 hover:text-white/60 text-xs transition-colors">
                        <i class="fas fa-arrow-left"></i>
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="hidden md:block bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl overflow-hidden">
                <div class="flex flex-row">

                    <!-- Left Side - Branding -->
                    <div class="w-1/2 p-12 border-r border-white/10 flex flex-col justify-center items-center text-center">

                        <!-- Logo -->
                        <div class="mb-6">
                            <img src="{{ asset('image/dyanaf-logo.jpg') }}" alt="Dyanaf Store"
                                class="w-28 h-28 rounded-full border-4 border-white/20 shadow-xl mx-auto">
                        </div>

                        <!-- Title -->
                        <h1 class="text-3xl font-bold text-white mb-3">
                            Dyanaf Store
                        </h1>
                        <p class="text-white/60 text-base mb-6 max-w-xs">
                            Jasa Pembuatan Website, CV Profesional, dan Dokumen Berkualitas
                        </p>

                        <!-- Features -->
                        <div class="space-y-3 text-left w-full max-w-xs">
                            <div class="flex items-center gap-3 text-white/70 text-sm">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-white/80 text-xs"></i>
                                </div>
                                <span>Konsultasi langsung dengan admin</span>
                            </div>
                            <div class="flex items-center gap-3 text-white/70 text-sm">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-white/80 text-xs"></i>
                                </div>
                                <span>Respons cepat dalam jam kerja</span>
                            </div>
                            <div class="flex items-center gap-3 text-white/70 text-sm">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-white/80 text-xs"></i>
                                </div>
                                <span>Privasi terjamin</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Login Form -->
                    <div class="w-1/2 p-12 flex flex-col justify-center">

                        <!-- Welcome Text -->
                        <div class="text-left mb-8">
                            <h2 class="text-2xl font-bold text-white mb-2">
                                Selamat Datang! 👋
                            </h2>
                            <p class="text-white/50 text-sm">
                                Login untuk menggunakan fitur Live Chat
                            </p>
                        </div>

                        <!-- Error Alert -->
                        @if(session('error'))
                        <div class="mb-6 p-4 rounded-xl bg-white/5 border border-white/10 text-white/80 text-sm flex items-center gap-3">
                            <i class="fas fa-exclamation-circle text-white/60"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                        @endif

                        <!-- Google Login Button -->
                        <a href="{{ route('auth.google') }}"
                            class="w-full flex items-center justify-center gap-3 px-6 py-4 bg-white hover:bg-gray-100 rounded-xl font-semibold text-gray-700 transition-all duration-300 hover:shadow-xl hover:shadow-white/5 hover:-translate-y-0.5 group">
                            <svg class="w-6 h-6" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                            </svg>
                            <span>Login dengan Google</span>
                            <i class="fas fa-arrow-right text-gray-400 group-hover:translate-x-1 transition-transform"></i>
                        </a>

                        <!-- Divider -->
                        <div class="flex items-center gap-4 my-8">
                            <div class="flex-1 h-px bg-white/10"></div>
                            <span class="text-white/30 text-xs uppercase tracking-wider">Info</span>
                            <div class="flex-1 h-px bg-white/10"></div>
                        </div>

                        <!-- Info Box -->
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-clock text-white/60 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-white/80 text-sm font-medium mb-1">Privasi Terjamin</p>
                                    <p class="text-white/50 text-xs">
                                        Chat akan otomatis dihapus setelah 3 jam untuk menjaga keamanan data Anda.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Back to Home -->
                        <a href="{{ route('home') }}"
                            class="mt-6 text-center text-white/40 hover:text-white/70 text-sm transition-colors flex items-center justify-center gap-2">
                            <i class="fas fa-arrow-left text-xs"></i>
                            <span>Kembali ke Beranda</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Text - Desktop only -->
    <div class="hidden md:block fixed bottom-4 left-0 right-0 text-center">
        <p class="text-white/20 text-xs">
            &copy; {{ date('Y') }} Dyanaf Store. All rights reserved.
        </p>
    </div>
</body>

</html>