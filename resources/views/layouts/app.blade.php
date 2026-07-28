<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Meta Tags -->
    <title>Cue Corner | Distributor Resmi Peralatan Biliar Premium Indonesia</title>
    <meta name="title" content="Cue Corner | Official Premium Billiard Equipment Distributor Indonesia">
    <meta name="description" content="Cue Corner adalah distributor resmi stik biliar, shaft karbon, dan aksesori biliar di Indonesia. Didukung oleh media partner Triple Sixty.">
    <meta name="keywords" content="Cue Corner, Billiard Equipment Indonesia, Premium Billiard Cues, Carbon Shafts, Billiard Distributor Indonesia, ZenQ Indonesia, 360 Media, Billiard Accessories">
    <meta name="author" content="Cue Corner">

    <!-- Favicon & Browser Tab Icons (Light & Dark Theme Adaptive) -->
    <link rel="icon" href="{{ asset('Asset/Logo/Tab browser/LOGO CUE  BLACK.png') }}" media="(prefers-color-scheme: light)" type="image/png">
    <link rel="icon" href="{{ asset('Asset/Logo/Tab browser/LOGO CUE WHITE.png') }}" media="(prefers-color-scheme: dark)" type="image/png">
    <link rel="shortcut icon" href="{{ asset('Asset/Logo/Tab browser/LOGO CUE WHITE.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('Asset/Logo/Tab browser/LOGO CUE WHITE.png') }}">

    <!-- Google Fonts: Inter (Body) & Outfit (Headings) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GSAP & Plugins CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    
    <!-- Lenis Smooth Scroll CDN -->
    <script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>

    <!-- Chart.js CDN for Interactive Analytics Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Vite Asset Imports -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary text-text-light antialiased font-sans overflow-x-hidden selection:bg-accent-gold selection:text-primary">

    <!-- Ambient Top Glow Background -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[350px] bg-accent-gold/10 rounded-full blur-[140px] pointer-events-none z-0"></div>

    <!-- Luxury Navigation Bar (Sleek Dark Black Navbar) -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-black/90 backdrop-blur-xl border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo Image -->
                <a href="#hero" class="flex items-center group py-1">
                    <img src="{{ asset('Asset/Logo/Logo cue corner white.png') }}" alt="Cue Corner Logo" class="h-12 sm:h-14 w-auto object-contain scale-[1.35] origin-left transition-transform duration-300 group-hover:scale-[1.42]">
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="#about" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('About Us') }}</a>
                    <a href="#leadership" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('Leadership') }}</a>
                    <a href="#portfolio" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('Brands') }}</a>
                    <a href="#media" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('Media Powerhouse') }}</a>
                    <a href="#sales-network" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('Sales Network') }}</a>
                    <a href="#ambassadors" class="text-sm font-medium text-zinc-300 hover:text-accent-glow transition-colors duration-200">{{ __('Ambassadors') }}</a>
                </nav>

                <!-- CTA Button & Language Switcher -->
                <div class="hidden lg:flex items-center gap-4">
                    {{-- B2B Partnership CTA (On Hold) --}}
                    {{-- 
                    <a href="#b2b-partnership" class="relative inline-flex items-center justify-center px-6 py-2.5 text-xs font-semibold uppercase tracking-wider text-black bg-gradient-to-r from-accent-glow via-accent-gold to-accent-soft rounded-full shadow-lg hover:shadow-accent-glow/40 hover:scale-105 transition-all duration-300">
                        <span>{{ __('B2B Partnership') }}</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                    --}}

                    <!-- Language Switcher Toggle -->
                    <div class="inline-flex items-center p-1 rounded-full bg-zinc-900 border border-white/10 text-xs font-semibold">
                        <a href="{{ route('lang.switch', 'id') }}" class="px-2.5 py-1 rounded-full transition-colors {{ app()->getLocale() == 'id' ? 'bg-accent-gold text-black font-bold' : 'text-zinc-400 hover:text-white' }}">ID</a>
                        <a href="{{ route('lang.switch', 'en') }}" class="px-2.5 py-1 rounded-full transition-colors {{ app()->getLocale() == 'en' ? 'bg-accent-gold text-black font-bold' : 'text-zinc-400 hover:text-white' }}">EN</a>
                    </div>
                </div>

                <!-- Mobile Menu Button & Quick Lang Switch -->
                <div class="flex items-center gap-3 lg:hidden">
                    <div class="inline-flex items-center p-0.5 rounded-full bg-zinc-900 border border-white/10 text-[11px] font-semibold">
                        <a href="{{ route('lang.switch', 'id') }}" class="px-2 py-0.5 rounded-full transition-colors {{ app()->getLocale() == 'id' ? 'bg-accent-gold text-black font-bold' : 'text-zinc-400' }}">ID</a>
                        <a href="{{ route('lang.switch', 'en') }}" class="px-2 py-0.5 rounded-full transition-colors {{ app()->getLocale() == 'en' ? 'bg-accent-gold text-black font-bold' : 'text-zinc-400' }}">EN</a>
                    </div>

                    <button id="mobile-menu-btn" type="button" class="text-accent-gold hover:text-accent-glow focus:outline-none p-2" aria-label="Toggle Navigation">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-black/95 border-b border-white/10 backdrop-blur-xl px-4 pt-4 pb-6 transition-all duration-300">
            <div class="flex flex-col space-y-4">
                <a href="#about" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('About Us') }}</a>
                <a href="#leadership" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('Leadership') }}</a>
                <a href="#portfolio" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('Brands') }}</a>
                <a href="#media" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('Media Powerhouse') }}</a>
                <a href="#sales-network" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('Sales Network') }}</a>
                <a href="#ambassadors" class="mobile-nav-link text-base font-medium text-zinc-200 hover:text-accent-glow">{{ __('Ambassadors') }}</a>
                {{-- 
                <a href="#b2b-partnership" class="mobile-nav-link text-center px-6 py-3 text-sm font-semibold uppercase tracking-wider text-black bg-gradient-to-r from-accent-glow to-accent-gold rounded-full shadow-md">
                    {{ __('B2B Partnership') }}
                </a>
                --}}
            </div>
        </div>
    </header>

    <!-- Main Content Injection -->
    <main class="relative z-10 pt-20">
        @yield('content')
    </main>

    <!-- Mobile Drawer Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const links = document.querySelectorAll('.mobile-nav-link');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });

                links.forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                    });
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
