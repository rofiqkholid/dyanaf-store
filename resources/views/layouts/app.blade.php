<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Dyanaf Store - Jasa Pembuatan Website, CV Profesional, dan Surat Lamaran Pekerjaan Berkualitas">

    <title>@yield('title', 'Dyanaf Store')</title>

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

    @stack('styles')
</head>

<body class="font-sans antialiased text-gray-700 page-loading">
    <!-- Loading Spinner -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-container">
            <div class="loader-spinner">
                <div class="ring ring-1"></div>
                <div class="ring ring-2"></div>
                <div class="ring ring-3"></div>
                <div class="center-dot"></div>
            </div>
        </div>
    </div>

    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Page Loading Handler
        (function() {
            const pageLoader = document.getElementById('pageLoader');
            const body = document.body;

            // Hide loader when page is fully loaded
            function hideLoader() {
                body.classList.remove('page-loading');
                setTimeout(() => {
                    pageLoader.classList.add('hidden');
                }, 100);
            }

            // Show loader
            function showLoader() {
                pageLoader.classList.remove('hidden');
                body.classList.add('page-loading');
            }

            // Hide loader on page load
            if (document.readyState === 'complete') {
                hideLoader();
            } else {
                window.addEventListener('load', hideLoader);
            }

            // Handle internal link navigation
            document.addEventListener('click', function(e) {
                const link = e.target.closest('a');

                // Check if it's an internal link (not external, not anchor, not mailto, etc.)
                if (link &&
                    link.href &&
                    link.href.startsWith(window.location.origin) &&
                    !link.href.includes('#') &&
                    !link.hasAttribute('target') &&
                    !link.href.startsWith('mailto:') &&
                    !link.href.startsWith('tel:')) {

                    // Only show loader if navigating to a different page
                    if (link.href !== window.location.href) {
                        showLoader();
                    }
                }
            });

            // Handle browser back/forward buttons
            window.addEventListener('pageshow', function(event) {
                if (event.persisted) {
                    hideLoader();
                }
            });

            // Fallback: hide loader if it's still showing after 3 seconds
            setTimeout(() => {
                if (!pageLoader.classList.contains('hidden')) {
                    hideLoader();
                }
            }, 3000);
        })();

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full');
            mobileMenu.classList.toggle('translate-x-0');
        });

        // Close mobile menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                mobileMenu.classList.remove('translate-x-0');
            });
        });



        // Smooth scroll for anchor links and hash removal
        document.querySelectorAll('a[href^="#"], a[href*="/#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const hash = href.includes('/#') ? href.split('/#')[1] : href.substring(1);

                // If hash exists
                if (hash) {
                    const target = document.querySelector('#' + hash);

                    // If target exists on current page
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Remove hash from URL after scroll
                        setTimeout(() => {
                            history.replaceState(null, null, window.location.pathname);
                        }, 100);
                    }
                    // If target doesn't exist and this is a cross-page link (/#), let it navigate
                }
            });
        });

        // Remove hash from URL on page load if present
        if (window.location.hash) {
            const targetId = window.location.hash.substring(1);
            const target = document.querySelector('#' + targetId);

            if (target) {
                setTimeout(() => {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    history.replaceState(null, null, window.location.pathname);
                }, 500);
            } else {
                history.replaceState(null, null, window.location.pathname);
            }
        }
    </script>

    <!-- Midtrans Snap -->
    @if(config('midtrans.is_production'))
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    @else
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    @endif

    <script>
        function triggerPayment(serviceName, price) {
            // Change button text to "Loading..."
            const btn = document.getElementById('pay-button');
            const originalText = btn ? btn.innerHTML : '';
            if (btn) btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';

            fetch('{{ route("payment.checkout") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        service_name: serviceName,
                        price: price
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (btn) btn.innerHTML = originalText;

                    if (data.snap_token) {
                        window.snap.pay(data.snap_token, {
                            onSuccess: function(result) {
                                alert("Pembayaran Berhasil!");
                                window.location.reload();
                            },
                            onPending: function(result) {
                                alert("Menunggu Pembayaran!");
                                window.location.reload();
                            },
                            onError: function(result) {
                                alert("Pembayaran Gagal!");
                                window.location.reload();
                            },
                            onClose: function() {
                                alert('Anda menutup popup pembayaran tanpa menyelesaikan pembayaran');
                            }
                        });
                    } else {
                        alert('Gagal membuat transaksi: ' + (data.error || 'Unknown error'));
                    }
                })
                .catch(error => {
                    if (btn) btn.innerHTML = originalText;
                    console.error(error);
                    alert('Terjadi kesalahan sistem');
                });
        }
    </script>

    @stack('scripts')
</body>

</html>