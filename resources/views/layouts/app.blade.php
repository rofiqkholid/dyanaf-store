<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Jasa pembuatan website murah mulai dari Rp 599.000. Layanan joki tugas, desain grafis, CV profesional, dan surat lamaran kerja. Pengerjaan cepat 2-5 hari dengan gratis domain dan SSL.">
    <meta name="keywords" content="jasa pembuatan website, website murah, joki tugas, desain grafis, surat lamaran kerja, CV profesional, jasa pembuatan CV, portfolio website, website bisnis">
    <meta name="author" content="Dyanaf Store">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="SJHvN40U5t0I3LsPvdeLtXQ5d4EYuz5wx3zjND-0O8w">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Dyanaf Store - Jasa Pembuatan Website Murah Mulai dari Rp 599.000')">
    <meta property="og:description" content="Jasa pembuatan website murah mulai dari Rp 599.000. Layanan joki tugas, desain grafis, CV profesional, dan surat lamaran kerja.">
    <meta property="og:image" content="{{ asset('image/dyanaf-logo-circle.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Dyanaf Store - Jasa Pembuatan Website Murah Mulai dari Rp 599.000')">
    <meta property="twitter:description" content="Jasa pembuatan website murah mulai dari Rp 599.000. Layanan joki tugas, desain grafis, CV profesional, dan surat lamaran kerja.">
    <meta property="twitter:image" content="{{ asset('image/dyanaf-logo-circle.png') }}">

    <title>@yield('title', 'Jasa Pembuatan Website Murah Mulai dari Rp 599.000')</title>

    <!-- Schema.org JSON-LD Structured Data for Rich Snippets -->
    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Dyanaf Store",
            "alternateName": "Dyanaf",
            "description": "Jasa pembuatan website profesional dan murah untuk bisnis, sekolah dan organisasi. Dalam 2-5 hari website sudah bisa diakses, gratis email domain dan SSL.",
            "url": "https://www.dyanaf.com",
            "logo": "https://www.dyanaf.com/image/dyanaf-logo-circle.png",
            "image": "https://www.dyanaf.com/image/dyanaf-logo-circle.png",
            "telephone": "+6285881721193",
            "email": "support@dyanaf.com",
            "priceRange": "Rp 25.000 - Rp 1.500.000",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "ID",
                "addressLocality": "Indonesia"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "5030",
                "reviewCount": "5030"
            },
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "IDR",
                "lowPrice": "25000",
                "highPrice": "1500000",
                "offerCount": "10"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Layanan Digital Dyanaf Store",
                "itemListElement": [{
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "CV Kreatif",
                            "description": "Desain CV kreatif dan profesional untuk pencari kerja"
                        },
                        "price": "25000",
                        "priceCurrency": "IDR"
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "CV + Surat Lamaran",
                            "description": "Paket lengkap CV ATS-Friendly dan Surat Lamaran Kerja"
                        },
                        "price": "70000",
                        "priceCurrency": "IDR"
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Website Bisnis",
                            "description": "Website profesional untuk bisnis dengan domain dan hosting"
                        },
                        "price": "1500000",
                        "priceCurrency": "IDR"
                    }
                ]
            },
            "sameAs": [
                "https://www.linkedin.com/in/rofiq-kholid",
                "https://www.instagram.com/dhenrofiq"
            ]
        }
    </script>
    @endverbatim

    <!-- Organization Schema -->
    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Dyanaf Store",
            "alternateName": "Dyanaf",
            "url": "https://www.dyanaf.com",
            "logo": "https://www.dyanaf.com/image/dyanaf-logo-circle.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+6285881721193",
                "contactType": "customer service",
                "areaServed": "ID",
                "availableLanguage": "Indonesian"
            }
        }
    </script>
    @endverbatim

    <!-- WebSite Schema for Site Name in Search Results -->
    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Dyanaf Store",
            "alternateName": "Dyanaf",
            "url": "https://www.dyanaf.com"
        }
    </script>
    @endverbatim

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

            // Show loader before page unloads (for refreshes and navigation)
            window.addEventListener('beforeunload', function() {
                showLoader();
            });
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

    @include('partials.toast')
    @include('partials.payment-modal')
    @include('partials.payment-modal-cv')
    @include('partials.custom-payment-ui')
    @include('partials.qris-payment-prototype')
    @include('partials.va-payment-modal')
    @include('partials.gopay-payment-modal')


    @stack('scripts')
</body>

</html>