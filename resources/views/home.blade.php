@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.css" />
<style>
    /* Custom Gold Theme for Plyr Media Player Library */
    .plyr {
        --plyr-color-main: #d4af37;
        --plyr-video-control-color: #ffffff;
        --plyr-video-control-color-hover: #d4af37;
        --plyr-control-radius: 12px;
        --plyr-range-track-height: 5px;
        --plyr-font-family: inherit;
        width: 100% !important;
        height: 100% !important;
        max-height: 100% !important;
    }
    .plyr--video {
        height: 100% !important;
        max-height: 100% !important;
    }
    .plyr__video-wrapper {
        height: 100% !important;
        padding-bottom: 0 !important;
        background: #000000 !important;
    }
    .plyr video {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }
    .plyr__poster {
        background-size: cover !important;
        background-position: center !important;
    }
    .plyr--full-ui input[type=range] {
        color: #d4af37 !important;
    }
    .plyr__control--overlaid {
        background: rgba(212, 175, 55, 0.9) !important;
        color: #000000 !important;
        box-shadow: 0 0 30px rgba(212, 175, 55, 0.7) !important;
    }
    .plyr__control--overlaid:hover {
        background: #f5d77f !important;
        transform: scale(1.1);
    }
</style>
@endpush

@section('content')

<!-- ==========================================
     SECTION 1: HERO SECTION (First Impression)
     ========================================== -->
<section id="hero" class="relative min-h-[calc(100vh-4rem)] sm:min-h-[calc(100vh-5rem)] flex flex-col justify-end lg:flex-row lg:items-center overflow-x-hidden pt-4 pb-4 sm:pb-6 lg:py-12 px-4 sm:px-6 lg:px-12 bg-black">
    <!-- Hero Background Image - Focus CUE CORNER Illuminated Wall Sign & Ceiling Light Box at Top on Mobile -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <img src="{{ asset('Asset/Image/background/Background cuecorner.png') }}" alt="Cue Corner Lounge" class="w-full h-full object-cover object-[30%_25%] sm:object-[25%_center] opacity-95 sm:opacity-90">
        <!-- Subtle Gradient Overlays for High Contrast & Visual Depth -->
        <div class="absolute inset-0 bg-gradient-to-b sm:bg-gradient-to-l from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30"></div>
    </div>

    <!-- Subtle Ambient Glow Behind Card -->
    <div class="hero-parallax-bg absolute inset-0 pointer-events-none z-0">
        <div class="absolute bottom-10 right-10 w-72 sm:w-96 h-72 sm:h-96 bg-accent-gold/15 rounded-full blur-[90px] sm:blur-[120px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
            
            <!-- Left Side: Completely Clear Window on Desktop -->
            <div class="hidden lg:block lg:col-span-6 xl:col-span-6 pointer-events-none"></div>

            <!-- Right Side: Sleek Black Glass Card (Anchored to Bottom Corner on Mobile) -->
            <div class="mt-auto lg:mt-0 lg:col-span-6 xl:col-span-6 text-left bg-black/85 backdrop-blur-2xl p-4 sm:p-8 rounded-2xl sm:rounded-3xl border border-white/15 shadow-2xl shadow-black">
                
                <!-- Heritage Badge -->
                <div class="gsap-hero-anim inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900/90 border border-white/10 mb-3 sm:mb-4">
                    <span class="w-2 h-2 rounded-full bg-accent-glow animate-ping"></span>
                    <span class="text-[10px] sm:text-[11px] font-semibold uppercase tracking-[0.2em] text-accent-gold">{{ __('Billiard Equipment Distributor • Est. 2024') }}</span>
                </div>

                <!-- Hero Headline -->
                <h1 class="gsap-hero-anim font-serif text-2xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-[1.18] mb-3 sm:mb-4 drop-shadow-md">
                    {{ __('Elevating Indonesia\'s') }} <br />
                    <span class="text-gold-gradient font-extrabold italic">{{ __('Billiard Experience') }}</span>
                </h1>

                <!-- Subheadline -->
                <p class="gsap-hero-anim text-xs sm:text-sm text-zinc-300 font-normal leading-relaxed mb-5 sm:mb-6 max-w-xl">
                    {{ __('Official distributor of premium billiard equipment, carbon shafts, and luxury accessories in Indonesia, and We collaborate with numerous media outlets') }}
                </p>

                <!-- Trust Badges Bar -->
                <div class="gsap-hero-anim border-t border-white/10 pt-4 grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3">
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('100%') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Genuine Original Brand ') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('Nation wide distribution') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('All Region') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('10M+') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Media Reach  Organic no ads') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('World Wide') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Shipping') }}</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- ==========================================
     SECTION 2: ABOUT US & HISTORY
     ========================================== -->
<section id="about" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-primary">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Our Heritage & Vision') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('From Retail Excellence to') }} <span class="text-gold-gradient">{{ __('National Distribution') }}</span>
            </h3>
            <div class="w-20 sm:w-24 h-1 bg-gradient-to-r from-transparent via-accent-gold to-transparent mx-auto mt-4 sm:mt-6"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-12 items-center mb-12 sm:mb-20">
            <!-- Journey Story Card -->
            <div class="lg:col-span-6 card-luxury p-6 sm:p-10 rounded-2xl relative overflow-hidden gsap-reveal">
                <div class="absolute -right-10 -bottom-10 w-32 sm:w-40 h-32 sm:h-40 bg-accent-gold/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="flex items-center gap-4 mb-4 sm:mb-6">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-accent-gold/20 border border-accent-gold/40 flex items-center justify-center text-accent-glow text-lg sm:text-xl">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div>
                        <h4 class="font-serif text-lg sm:text-xl font-bold text-accent-gold">{{ __('Established in 2024') }}</h4>
                        <span class="text-[11px] sm:text-xs text-text-muted uppercase tracking-wider">{{ __('Jakarta/tangerang, Indonesia') }}</span>
                    </div>
                </div>
                <p id="about-story-text" class="text-xs sm:text-sm text-text-light/90 leading-relaxed mb-1 sm:mb-4 line-clamp-2 sm:line-clamp-none transition-all duration-300">
                    {{ __('Founded with a passion for cue sports precision, Cue Corner evolved from a retail operation in 2024 into an official wholesale distributor for global billiard brands in Indonesia.') }} {{ __('We connect global manufacturers with the Indonesian billiard community, offering authentic manufacturer warranties and active marketing support.') }}
                </p>
                <button onclick="toggleMobileText('about-story-text', this)" class="inline-flex sm:hidden items-center gap-1 text-[11px] font-bold text-accent-gold hover:text-accent-glow mb-4">
                    <span>{{ __('Baca Selengkapnya') }}</span>
                    <i class="fa-solid fa-chevron-down text-[10px] ml-1"></i>
                </button>
            </div>

            <!-- Vision & Mission Tabs Container -->
            <div class="lg:col-span-6 gsap-reveal">
                <div class="card-luxury p-6 sm:p-8 rounded-2xl">
                    <!-- Tab Buttons -->
                    <div class="flex border-b border-border-accent/50 mb-5 sm:mb-6 gap-3 sm:gap-4">
                        <button id="tab-btn-vision" onclick="switchAboutTab('vision')" class="pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-accent-glow border-b-2 border-accent-glow transition-all">
                            <i class="fa-solid fa-eye mr-1.5"></i> {{ __('Our Vision') }}
                        </button>
                        <button id="tab-btn-mission" onclick="switchAboutTab('mission')" class="pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-text-muted hover:text-text-light border-b-2 border-transparent transition-all">
                            <i class="fa-solid fa-bullseye mr-1.5"></i> {{ __('Our Mission') }}
                        </button>
                    </div>

                    <!-- Vision Content -->
                    <div id="tab-content-vision" class="space-y-3 sm:space-y-4">
                        <p class="text-text-light text-base sm:text-lg font-serif italic leading-relaxed">
                            "{{ __('To be a trusted distributor for billiard equipment in Indonesia, providing authentic high-quality gear for players and arena operators.') }}"
                        </p>
                        <ul class="space-y-2.5 sm:space-y-3 pt-1 sm:pt-2">
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Establishing 100% direct official manufacturer partnerships.') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Cultivating professional tournament standards across Indonesia.') }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Mission Content -->
                    <div id="tab-content-mission" class="hidden space-y-3 sm:space-y-4">
                        <p class="text-text-light text-base sm:text-lg font-serif italic leading-relaxed">
                            "{{ __('To deliver complete B2B support—combining authentic inventory, priority stock delivery, and media promotion.') }}"
                        </p>
                        <ul class="space-y-2.5 sm:space-y-3 pt-1 sm:pt-2">
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Provide competitive wholesale margins for authorized resellers.') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Drive continuous brand awareness through our Zen cues and We work with multiple media.') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values Section -->
        <div class="mt-12 sm:mt-16">
            <h4 class="text-center font-serif text-xl sm:text-2xl font-bold text-text-light mb-6 sm:mb-10 gsap-reveal">{{ __('Our Core Values') }}</h4>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5 sm:gap-6">
                
                <div class="card-luxury p-4 sm:p-6 rounded-xl text-center gsap-value-card">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-accent-gold/10 border border-accent-gold/30 flex items-center justify-center text-accent-gold mx-auto mb-3 sm:mb-4 text-lg sm:text-xl">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5 class="font-serif font-bold text-sm sm:text-base text-accent-glow mb-1.5">{{ __('Integrity') }}</h5>
                    <p class="text-[11px] sm:text-xs text-text-muted leading-relaxed">{{ __('Guaranteed 100% authentic equipment with official origin validation.') }}</p>
                </div>

                <div class="card-luxury p-4 sm:p-6 rounded-xl text-center gsap-value-card">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-accent-gold/10 border border-accent-gold/30 flex items-center justify-center text-accent-gold mx-auto mb-3 sm:mb-4 text-lg sm:text-xl">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h5 class="font-serif font-bold text-sm sm:text-base text-accent-glow mb-1.5">{{ __('Quality') }}</h5>
                    <p class="text-[11px] sm:text-xs text-text-muted leading-relaxed">{{ __('Rigorous quality control and premium carbon/wood shaft selection.') }}</p>
                </div>

                <div class="card-luxury p-4 sm:p-6 rounded-xl text-center gsap-value-card">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-accent-gold/10 border border-accent-gold/30 flex items-center justify-center text-accent-gold mx-auto mb-3 sm:mb-4 text-lg sm:text-xl">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h5 class="font-serif font-bold text-sm sm:text-base text-accent-glow mb-1.5">{{ __('Professionalism') }}</h5>
                    <p class="text-[11px] sm:text-xs text-text-muted leading-relaxed">{{ __('Dedicated executive B2B support and priority partner logistics.') }}</p>
                </div>

                <div class="card-luxury p-4 sm:p-6 rounded-xl text-center gsap-value-card">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-accent-gold/10 border border-accent-gold/30 flex items-center justify-center text-accent-gold mx-auto mb-3 sm:mb-4 text-lg sm:text-xl">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h5 class="font-serif font-bold text-sm sm:text-base text-accent-glow mb-1.5">{{ __('Innovation') }}</h5>
                    <p class="text-[11px] sm:text-xs text-text-muted leading-relaxed">{{ __('Pioneering digital media integration & digital community activation.') }}</p>
                </div>

                <div class="card-luxury p-4 sm:p-6 rounded-xl text-center gsap-value-card col-span-2 sm:col-span-1">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-accent-gold/10 border border-accent-gold/30 flex items-center justify-center text-accent-gold mx-auto mb-3 sm:mb-4 text-lg sm:text-xl">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h5 class="font-serif font-bold text-sm sm:text-base text-accent-glow mb-1.5">{{ __('Satisfaction') }}</h5>
                    <p class="text-[11px] sm:text-xs text-text-muted leading-relaxed">{{ __('Complete warranty protection and responsive customer care.') }}</p>
                </div>

            </div>
        </div>

    </div>
</section>





<!-- ==========================================
     SECTION 4: BRAND PORTFOLIO & CATEGORIES
     ========================================== -->
<section id="portfolio" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-primary">
    <div class="max-w-7xl mx-auto">
        
        <!-- Header & Authenticity Badge -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-accent-gold/15 border border-accent-gold/40 text-accent-glow text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-3 sm:mb-4">
                <i class="fa-solid fa-certificate text-accent-gold"></i>
                <span>{{ __('100% Guaranteed Authenticity & Genuinely Original') }}</span>
            </div>
            <h2 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Exclusive') }} <span class="text-gold-gradient">{{ __('Brand Portfolio') }}</span>
            </h2>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Cue Corner collaborates with official global billiard manufacturers to supply high-performance equipment in Indonesia.') }}
            </p>
        </div>

            <!-- Flagship Brand 2: Triple Sixty -->
            <div class="card-luxury p-6 sm:p-8 rounded-2xl sm:rounded-3xl relative overflow-hidden border border-accent-gold/40 flex flex-col justify-between group hover:border-accent-gold transition-all duration-300">
                <div class="space-y-3 sm:space-y-4 mb-5 sm:mb-6">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-accent-glow bg-accent-gold/20 border border-accent-gold/50 px-2.5 py-1 rounded-full">{{ __('Exclusive Dealer') }}</span>
                        <a href="https://triple-60.com/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold hover:text-white flex items-center gap-1">
                            <span>triple-60.com</span> <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-text-light">Triple Sixty</h3>
                    <p class="text-text-muted text-xs sm:text-sm leading-relaxed">
                        {{ __('Official digital billiard media partner delivering cue accessories, broadcast coverage, and community media content.') }}
                    </p>
                </div>

                <div class="w-full py-5 sm:py-6 rounded-xl sm:rounded-2xl bg-black border border-white/15 flex flex-col items-center justify-center group-hover:scale-[1.02] transition-transform">
                    <img src="{{ asset('Asset/Image/Logo partner/Triple Sixty.png') }}" alt="Triple Sixty" class="h-12 sm:h-16 w-auto max-w-[160px] sm:max-w-[200px] object-contain">
                </div>
            </div>

        </div>

        @php
            $allBrands = [
                ['name' => 'Mirai', 'logo' => 'Mirai.png', 'url' => 'https://miraicue.com/', 'type' => 'authorized', 'has_web' => true],
                ['name' => 'Triple Sixty', 'logo' => 'Triple Sixty.png', 'url' => 'https://triple-60.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Cuetec', 'logo' => 'Cuetec.png', 'url' => 'https://www.cuetec.com/', 'type' => 'authorized', 'has_web' => true],
                ['name' => 'Mezz Cue', 'logo' => 'Mezz Cue.png', 'url' => 'https://mezzcue.com/', 'type' => 'authorized', 'has_web' => true],
                ['name' => 'Viking Cue', 'logo' => 'Viking Cues.png', 'url' => 'https://www.vikingcue.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Pagulayan', 'logo' => 'Pagulayan.png', 'url' => 'https://pagulayancues.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Tactiq', 'logo' => 'Tactiq.png', 'url' => 'https://tactiqbilliards.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Ghost Brand', 'logo' => 'Ghost brand by fedor gorst.png', 'url' => 'https://fedorgorst.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Navigator Tips', 'logo' => 'Navigator.png', 'url' => 'https://www.navigatortips.com/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Valhalla Cue', 'logo' => 'valhalla.png', 'url' => 'https://www.vikingcue.com/valhalla-cues/', 'type' => 'exclusive', 'has_web' => true],
                ['name' => 'Yi Cue', 'logo' => 'Yi Cue.png', 'url' => 'https://www.instagram.com/yi_cue_international/', 'type' => 'exclusive', 'has_web' => false, 'is_ig' => true],
                ['name' => 'Zen Cue', 'logo' => 'Zen Custom Cue.png', 'url' => 'https://www.instagram.com/cuecorner.id/', 'type' => 'authorized', 'has_web' => false],
                ['name' => 'Kuo Extension', 'logo' => 'Kuo extension.png', 'url' => 'https://www.instagram.com/cuecorner.id/', 'type' => 'exclusive', 'has_web' => false],
                ['name' => 'Cuetima', 'logo' => 'Cuetima.png', 'url' => 'https://www.instagram.com/cuecorner.id/', 'type' => 'exclusive', 'has_web' => false],
                ['name' => '3 Seconds', 'logo' => '3 Seconds.png', 'url' => 'https://www.instagram.com/cuecorner.id/', 'type' => 'authorized', 'has_web' => false],
            ];

            $initialBrands = array_slice($allBrands, 0, 6);
            $hiddenBrands = array_slice($allBrands, 6);
        @endphp

        <!-- Full Official Brand Catalogue -->
        <div class="mb-16 sm:mb-20" id="portfolio-grid-anchor">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6 sm:mb-8 text-center sm:text-left">
                <div>
                    <h3 class="font-serif text-xl sm:text-3xl font-bold text-text-light">{{ __('Official Brand Partners') }}</h3>
                    <p class="text-xs text-text-muted mt-1">{{ __('Official Exclusive & Authorized Global Billiard Brands') }}</p>
                </div>

                <!-- Category Filters -->
                <div class="flex items-center gap-1.5 bg-secondary/80 p-1 sm:p-1.5 rounded-full border border-white/10">
                    <button id="filter-btn-all" onclick="filterBrandCards('all')" class="px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all">{{ __('All') }}</button>
                    <button id="filter-btn-excl" onclick="filterBrandCards('exclusive')" class="px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">Exclusive</button>
                    <button id="filter-btn-auth" onclick="filterBrandCards('authorized')" class="px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">Authorized</button>
                </div>
            </div>

            <!-- Initial Grid (First 6 Web-Prioritized Brands) -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-6 mb-6">
                @foreach($initialBrands as $b)
                    <div class="brand-card-item card-luxury p-4 sm:p-5 rounded-2xl flex flex-col items-center justify-between text-center group hover:border-accent-gold transition-all duration-300 !bg-black border border-white/10 shadow-xl" data-dealer="{{ $b['type'] }}">
                        <span class="text-[8px] sm:text-[9px] uppercase font-bold tracking-wider px-2 py-0.5 rounded-full mb-2 sm:mb-3 {{ $b['type'] === 'exclusive' ? 'bg-accent-gold/20 text-accent-glow border border-accent-gold/50' : 'bg-zinc-900/90 text-accent-soft border border-accent-soft/40' }}">
                            {{ $b['type'] === 'exclusive' ? __('Exclusive Dealer') : __('Authorized Dealer') }}
                        </span>
                        
                        <div class="h-16 sm:h-20 w-full flex items-center justify-center p-1.5 sm:p-2 mb-2 group-hover:scale-105 transition-transform">
                            <img src="{{ asset('Asset/Image/Logo partner/' . $b['logo']) }}" alt="{{ $b['name'] }}" class="max-h-12 sm:max-h-14 w-auto max-w-full object-contain">
                        </div>

                        <div class="w-full pt-2 border-t border-white/10">
                            <h4 class="font-serif text-xs sm:text-sm font-bold text-text-light mb-1 truncate">{{ $b['name'] }}</h4>
                            <a href="{{ $b['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] font-semibold text-accent-gold hover:text-white transition-colors">
                                @if(!empty($b['has_web']))
                                    <span>{{ __('Visit Website') }}</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                @elseif(!empty($b['is_ig']))
                                    <span><i class="fa-brands fa-instagram text-[10px] mr-0.5"></i> Instagram</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                @else
                                    <span>{{ __('Official Partner') }}</span>
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Hidden Grid (Remaining 9 Brands) -->
            <div id="hidden-brands-grid" class="hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-6 mb-6">
                @foreach($hiddenBrands as $b)
                    <div class="brand-card-item card-luxury p-4 sm:p-5 rounded-2xl flex flex-col items-center justify-between text-center group hover:border-accent-gold transition-all duration-300 !bg-black border border-white/10 shadow-xl" data-dealer="{{ $b['type'] }}">
                        <span class="text-[8px] sm:text-[9px] uppercase font-bold tracking-wider px-2 py-0.5 rounded-full mb-2 sm:mb-3 {{ $b['type'] === 'exclusive' ? 'bg-accent-gold/20 text-accent-glow border border-accent-gold/50' : 'bg-zinc-900/90 text-accent-soft border border-accent-soft/40' }}">
                            {{ $b['type'] === 'exclusive' ? __('Exclusive Dealer') : __('Authorized Dealer') }}
                        </span>
                        
                        <div class="h-16 sm:h-20 w-full flex items-center justify-center p-1.5 sm:p-2 mb-2 group-hover:scale-105 transition-transform">
                            <img src="{{ asset('Asset/Image/Logo partner/' . $b['logo']) }}" alt="{{ $b['name'] }}" class="max-h-12 sm:max-h-14 w-auto max-w-full object-contain">
                        </div>

                        <div class="w-full pt-2 border-t border-white/10">
                            <h4 class="font-serif text-xs sm:text-sm font-bold text-text-light mb-1 truncate">{{ $b['name'] }}</h4>
                            <a href="{{ $b['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] font-semibold text-accent-gold hover:text-white transition-colors">
                                @if(!empty($b['has_web']))
                                    <span>{{ __('Visit Website') }}</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                @elseif(!empty($b['is_ig']))
                                    <span><i class="fa-brands fa-instagram text-[10px] mr-0.5"></i> Instagram</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                @else
                                    <span>{{ __('Official Partner') }}</span>
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Toggle Button -->
            <div class="text-center mt-6 sm:mt-8" id="toggle-brands-container">
                <button id="toggle-brands-btn" onclick="toggleBrandsView()" class="px-6 sm:px-8 py-3 rounded-full bg-zinc-900 border border-accent-gold/40 text-accent-gold hover:text-white hover:border-accent-gold text-xs font-bold uppercase tracking-wider transition-all duration-300 shadow-xl inline-flex items-center gap-2">
                    <span id="toggle-brands-text">{{ __('View All Brands') }}</span>
                    <i id="toggle-brands-icon" class="fa-solid fa-chevron-down text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Product Categories Grid -->
        <h3 class="font-serif text-xl sm:text-2xl font-bold text-text-light text-center mb-6 sm:mb-10 gsap-reveal">
            {{ __('Product Categories') }}
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 sm:gap-6">
            
            <!-- Category 1: Playing Cues -->
            <div onclick="openCategoryModal('playing-cues')" class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl cursor-pointer">
                <div class="relative w-full h-48 sm:h-60 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Playing Cue/CN 1.jpeg') }}" alt="Playing Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Playing Cue
                    </span>
                    <span class="absolute top-3 right-3 w-7 h-7 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-gold flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-expand"></i>
                    </span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-base sm:text-lg font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">{{ __('Playing Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed line-clamp-3">
                            {{ __('Stik biliar presisi tinggi dengan sistem joint mikro dan kayu kualitas premium untuk tembakan konsisten.') }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-accent-gold group-hover:text-accent-glow">
                        <span>{{ __('Lihat Galeri (7)') }}</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>

            <!-- Category 2: High-Performance Shafts -->
            <div onclick="openCategoryModal('shafts')" class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl cursor-pointer">
                <div class="relative w-full h-48 sm:h-60 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Shaft/Shaft 1.jpeg') }}" alt="High-Performance Shafts" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Carbon & Wood Shaft
                    </span>
                    <span class="absolute top-3 right-3 w-7 h-7 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-gold flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-expand"></i>
                    </span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-base sm:text-lg font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">{{ __('Pro Shafts') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed line-clamp-3">
                            {{ __('Shaft serat karbon & Canadian Maple low-deflection profesional untuk akurasi bola sempurna.') }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-accent-gold group-hover:text-accent-glow">
                        <span>{{ __('Lihat Galeri (4)') }}</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>

            <!-- Category 3: Break Cues -->
            <div onclick="openCategoryModal('break-cues')" class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl cursor-pointer">
                <div class="relative w-full h-48 sm:h-60 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Break/Break 1.jpeg') }}" alt="Break Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Break Cue
                    </span>
                    <span class="absolute top-3 right-3 w-7 h-7 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-gold flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-expand"></i>
                    </span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-base sm:text-lg font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">{{ __('Break Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed line-clamp-3">
                            {{ __('Stik break berdampak tinggi dengan ferrule berdensitas tinggi untuk transfer energi pembuka yang eksplosif.') }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-accent-gold group-hover:text-accent-glow">
                        <span>{{ __('Lihat Galeri') }}</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>

            <!-- Category 4: Jump Cues -->
            <div onclick="openCategoryModal('jump-cues')" class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl cursor-pointer">
                <div class="relative w-full h-48 sm:h-60 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Jump/Jump.jpeg') }}" alt="Jump Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Jump Cue
                    </span>
                    <span class="absolute top-3 right-3 w-7 h-7 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-gold flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-expand"></i>
                    </span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-base sm:text-lg font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">{{ __('Jump Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed line-clamp-3">
                            {{ __('Stik jump presisi ultra-ringan yang dirancang untuk melompati bola rintangan secara mudah dan akurat.') }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-accent-gold group-hover:text-accent-glow">
                        <span>{{ __('Lihat Galeri (2)') }}</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>

            <!-- Category 5: Billiard Accessories -->
            <div onclick="openCategoryModal('accessories')" class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl cursor-pointer">
                <div class="relative w-full h-48 sm:h-60 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Aksesoris/Chalk.jpeg') }}" alt="Billiard Accessories" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Accessories
                    </span>
                    <span class="absolute top-3 right-3 w-7 h-7 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-gold flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-expand"></i>
                    </span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-base sm:text-lg font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">{{ __('Accessories') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed line-clamp-3">
                            {{ __('Aksesoris biliar lengkap: luxury case, chalk premium, glove, tip, leather grip & weight balancer kit.') }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-accent-gold group-hover:text-accent-glow">
                        <span>{{ __('Lihat Galeri (7)') }}</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ==========================================
     NEW SECTION: INTERNAL VIDEO OVERVIEW
     ========================================== -->
<section id="video-showcase" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-secondary/30 border-t border-border-accent/30">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-gold/20 border border-accent-gold/40 text-accent-glow text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-2">
                <i class="fa-solid fa-film text-xs sm:text-sm"></i>
                <span>Official Video Showcase</span>
            </div>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Video') }} <span class="text-gold-gradient">{{ __('Content Overview') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Tonton video resmi Cue Corner, review stik custom, uji fleksibilitas carbon shaft dan hal seru lainya .') }}
            </p>

        <!-- Video Category Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 mt-6 sm:mt-8 mb-10 sm:mb-12">
            <button onclick="filterVideoCategory('all')" id="video-tab-all" class="px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md">{{ __('Semua Video') }}</button>
            <button onclick="filterVideoCategory('cuecorner')" id="video-tab-cuecorner" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Cue Corner Official') }}</button>
            <button onclick="filterVideoCategory('massipan')" id="video-tab-massipan" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Massipan Review') }}</button>
            <button onclick="filterVideoCategory('bara')" id="video-tab-bara" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Bara Review') }}</button>
        </div>

        <!-- Video Content Grid (Portrait Reel Aspect Ratio - 2x2 Grid with Plyr Library) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-stretch max-w-5xl mx-auto">
            
            <!-- Video 1: Brand Shaft No 1 -->
            <div class="video-card-item card-luxury rounded-2xl border border-white/10 hover:border-accent-gold/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between bg-zinc-950 shadow-2xl relative" style="max-height: 640px; overflow: hidden;" data-category="cuecorner">
                <!-- Top Creator Header Bar -->
                <div class="p-3 bg-zinc-900/95 border-b border-white/10 flex items-center justify-between z-10">
                    <div class="flex items-center gap-2 truncate">
                        <div class="rounded-full border border-accent-gold/50 overflow-hidden bg-black flex-shrink-0" style="width: 26px; height: 26px; min-width: 26px; min-height: 26px; max-width: 26px; max-height: 26px; aspect-ratio: 1 / 1;">
                            <img src="{{ asset('Asset/Image/Profile/ko ssteven.png') }}" class="w-full h-full object-cover">
                        </div>
                        <span class="text-xs font-semibold text-white truncate">Cue Corner Official</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[10px] font-bold uppercase tracking-wider flex-shrink-0">
                        Official
                    </span>
                </div>

                <!-- Vertical Video Container with Explicit Height & Plyr Library -->
                <div class="relative h-[380px] sm:h-[480px] w-full overflow-hidden bg-black flex items-center justify-center" style="height: 480px; max-height: 480px; overflow: hidden;">
                    <video 
                        class="js-plyr-player w-full h-full object-cover" 
                        preload="metadata"
                        playsinline
                        controls
                    >
                        <source src="{{ asset('Asset/Video/brand-shaft-no1.mp4') }}" type="video/mp4">
                        Browsermu tidak mendukung pemutaran video.
                    </video>
                </div>

                <!-- Card Description Body & Action Button -->
                <div class="p-4 flex flex-col justify-between flex-1 border-t border-white/10 bg-zinc-950">
                    <div class="mb-3">
                        <h4 class="font-serif text-base font-bold text-white group-hover:text-accent-gold transition-colors line-clamp-1 mb-1">
                            Rekomendasi Brand Shaft No 1
                        </h4>
                        <p class="text-xs text-zinc-400 leading-relaxed line-clamp-2">
                            Review mendalam material carbon fiber shaft, kelurusan, dan power transfer untuk hasil tembakan lebih tajam & presisi.
                        </p>
                    </div>

                    <!-- Fullscreen Action Button -->
                    <button onclick="openVideoPlayerModal('{{ asset('Asset/Video/brand-shaft-no1.mp4') }}', 'Rekomendasi Brand Shaft No 1')" class="w-full py-2 px-3 rounded-xl bg-zinc-900 hover:bg-accent-gold text-zinc-300 hover:text-black border border-white/10 hover:border-accent-gold text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-expand text-xs"></i>
                        <span>{{ __('Putar Layar Penuh (HD)') }}</span>
                    </button>
                </div>
            </div>

            <!-- Video 2: Joint Cuetec -->
            <div class="video-card-item card-luxury rounded-2xl border border-white/10 hover:border-accent-gold/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between bg-zinc-950 shadow-2xl relative" style="max-height: 640px; overflow: hidden;" data-category="cuecorner">
                <!-- Top Creator Header Bar -->
                <div class="p-3 bg-zinc-900/95 border-b border-white/10 flex items-center justify-between z-10">
                    <div class="flex items-center gap-2 truncate">
                        <div class="rounded-full border border-accent-gold/50 overflow-hidden bg-black flex-shrink-0" style="width: 26px; height: 26px; min-width: 26px; min-height: 26px; max-width: 26px; max-height: 26px; aspect-ratio: 1 / 1;">
                            <img src="{{ asset('Asset/Image/Profile/ko ssteven.png') }}" class="w-full h-full object-cover">
                        </div>
                        <span class="text-xs font-semibold text-white truncate">Cue Corner Official</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[10px] font-bold uppercase tracking-wider flex-shrink-0">
                        Brand Showcase
                    </span>
                </div>

                <!-- Vertical Video Container with Explicit Height & Plyr Library -->
                <div class="relative h-[380px] sm:h-[480px] w-full overflow-hidden bg-black flex items-center justify-center" style="height: 480px; max-height: 480px; overflow: hidden;">
                    <video 
                        class="js-plyr-player w-full h-full object-cover" 
                        preload="metadata"
                        playsinline
                        controls
                    >
                        <source src="{{ asset('Asset/Video/FG57 shaft.mp4') }}" type="video/mp4">
                        Browsermu tidak mendukung pemutaran video.
                    </video>
                </div>

                <!-- Card Description Body & Action Button -->
                <div class="p-4 flex flex-col justify-between flex-1 border-t border-white/10 bg-zinc-950">
                    <div class="mb-3">
                        <h4 class="font-serif text-base font-bold text-white group-hover:text-accent-gold transition-colors line-clamp-1 mb-1">
                            Review Joint Cuetec & Technology
                        </h4>
                        <p class="text-xs text-zinc-400 leading-relaxed line-clamp-2">
                            Uji presisi joint Cuetec, fleksibilitas shaft, dan daya tahan koneksi pin untuk performa tembakan terbaik.
                        </p>
                    </div>

                    <!-- Fullscreen Action Button -->
                    <button onclick="openVideoPlayerModal('{{ asset('Asset/Video/FG57 shaft.mp4') }}', 'Review Joint Cuetec & Technology')" class="w-full py-2 px-3 rounded-xl bg-zinc-900 hover:bg-accent-gold text-zinc-300 hover:text-black border border-white/10 hover:border-accent-gold text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-expand text-xs"></i>
                        <span>{{ __('Putar Layar Penuh (HD)') }}</span>
                    </button>
                </div>
            </div>

            <!-- Video 3: Case Review -->
            <div class="video-card-item card-luxury rounded-2xl border border-white/10 hover:border-accent-gold/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between bg-zinc-950 shadow-2xl relative" style="max-height: 640px; overflow: hidden;" data-category="massipan">
                <!-- Top Creator Header Bar -->
                <div class="p-3 bg-zinc-900/95 border-b border-white/10 flex items-center justify-between z-10">
                    <div class="flex items-center gap-2 truncate">
                        <div class="rounded-full border border-accent-gold/50 overflow-hidden bg-black flex-shrink-0" style="width: 26px; height: 26px; min-width: 26px; min-height: 26px; max-width: 26px; max-height: 26px; aspect-ratio: 1 / 1;">
                            <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Massipan.png') }}" class="w-full h-full object-cover">
                        </div>
                        <span class="text-xs font-semibold text-white truncate">Irvandisk (Massipan)</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[10px] font-bold uppercase tracking-wider flex-shrink-0">
                        Creator Review
                    </span>
                </div>

                <!-- Vertical Video Container with Explicit Height & Plyr Library -->
                <div class="relative h-[380px] sm:h-[480px] w-full overflow-hidden bg-black flex items-center justify-center" style="height: 480px; max-height: 480px; overflow: hidden;">
                    <video 
                        class="js-plyr-player w-full h-full object-cover" 
                        preload="metadata"
                        playsinline
                        controls
                    >
                        <source src="{{ asset('Asset/Video/Case.mp4') }}" type="video/mp4">
                        Browsermu tidak mendukung pemutaran video.
                    </video>
                </div>

                <!-- Card Description Body & Action Button -->
                <div class="p-4 flex flex-col justify-between flex-1 border-t border-white/10 bg-zinc-950">
                    <div class="mb-3">
                        <h4 class="font-serif text-base font-bold text-white group-hover:text-accent-gold transition-colors line-clamp-1 mb-1">
                            Luxury Cue Case & Protection Review
                        </h4>
                        <p class="text-xs text-zinc-400 leading-relaxed line-clamp-2">
                            Review tas stik biliard premium dengan proteksi maksimal, kompartemen aksesoris lengkap & desain luxury.
                        </p>
                    </div>

                    <!-- Fullscreen Action Button -->
                    <button onclick="openVideoPlayerModal('{{ asset('Asset/Video/Case.mp4') }}', 'Luxury Cue Case & Protection Review')" class="w-full py-2 px-3 rounded-xl bg-zinc-900 hover:bg-accent-gold text-zinc-300 hover:text-black border border-white/10 hover:border-accent-gold text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-expand text-xs"></i>
                        <span>{{ __('Putar Layar Penuh (HD)') }}</span>
                    </button>
                </div>
            </div>

            <!-- Video 4: Triple Sixty -->
            <div class="video-card-item card-luxury rounded-2xl border border-white/10 hover:border-accent-gold/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between bg-zinc-950 shadow-2xl relative" style="max-height: 640px; overflow: hidden;" data-category="bara">
                <!-- Top Creator Header Bar -->
                <div class="p-3 bg-zinc-900/95 border-b border-white/10 flex items-center justify-between z-10">
                    <div class="flex items-center gap-2 truncate">
                        <div class="rounded-full border border-accent-gold/50 overflow-hidden bg-black flex-shrink-0" style="width: 26px; height: 26px; min-width: 26px; min-height: 26px; max-width: 26px; max-height: 26px; aspect-ratio: 1 / 1;">
                            <img src="{{ asset('Asset/Image/BA - Triple sixty/Bara - BA.png') }}" class="w-full h-full object-cover">
                        </div>
                        <span class="text-xs font-semibold text-white truncate">B A R A (Ambassador)</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[10px] font-bold uppercase tracking-wider flex-shrink-0">
                        Ambassador Review
                    </span>
                </div>

                <!-- Vertical Video Container with Explicit Height & Plyr Library -->
                <div class="relative h-[380px] sm:h-[480px] w-full overflow-hidden bg-black flex items-center justify-center" style="height: 480px; max-height: 480px; overflow: hidden;">
                    <video 
                        class="js-plyr-player w-full h-full object-cover" 
                        preload="metadata"
                        playsinline
                        controls
                    >
                        <source src="{{ asset('Asset/Video/Triple sixty.mp4') }}" type="video/mp4">
                        Browsermu tidak mendukung pemutaran video.
                    </video>
                </div>

                <!-- Card Description Body & Action Button -->
                <div class="p-4 flex flex-col justify-between flex-1 border-t border-white/10 bg-zinc-950">
                    <div class="mb-3">
                        <h4 class="font-serif text-base font-bold text-white group-hover:text-accent-gold transition-colors line-clamp-1 mb-1">
                            Triple Sixty Cue & Performance Impression
                        </h4>
                        <p class="text-xs text-zinc-400 leading-relaxed line-clamp-2">
                            Impression jujur stik dan shaft Triple Sixty dari Brand Ambassador Cue Corner untuk performa arena pro.
                        </p>
                    </div>

                    <!-- Fullscreen Action Button -->
                    <button onclick="openVideoPlayerModal('{{ asset('Asset/Video/Triple sixty.mp4') }}', 'Triple Sixty Cue & Performance Impression')" class="w-full py-2 px-3 rounded-xl bg-zinc-900 hover:bg-accent-gold text-zinc-300 hover:text-black border border-white/10 hover:border-accent-gold text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-expand text-xs"></i>
                        <span>{{ __('Putar Layar Penuh (HD)') }}</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Fullscreen Video Player Modal -->
<div id="video-player-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-3 sm:p-6 bg-black/95 backdrop-blur-2xl transition-all duration-300 opacity-0 pointer-events-none" role="dialog" aria-modal="true" aria-labelledby="video-modal-title">
    <div onclick="closeVideoPlayerModal()" class="fixed inset-0 bg-black/90 z-0"></div>
    <div class="relative w-full max-w-4xl bg-zinc-950 border border-accent-gold/50 rounded-2xl sm:rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.9)] z-10 overflow-hidden flex flex-col my-auto transform scale-95 transition-transform duration-300">
        <div class="flex items-center justify-between px-5 sm:px-6 py-3.5 sm:py-4 bg-zinc-950/98 backdrop-blur-xl border-b border-white/10 shadow-md">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-accent-gold animate-pulse"></span>
                <h4 id="video-modal-title" class="font-serif text-sm sm:text-lg font-bold text-white truncate max-w-xs sm:max-w-md">Video Content</h4>
            </div>
            <button onclick="closeVideoPlayerModal()" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-zinc-900 border border-white/10 text-zinc-400 hover:text-white hover:border-accent-gold flex items-center justify-center transition-all focus:outline-none" aria-label="Close video modal">
                <i class="fa-solid fa-xmark text-base sm:text-lg"></i>
            </button>
        </div>
        <div class="relative aspect-video bg-black flex items-center justify-center">
            <video id="video-modal-element" class="w-full h-full" controls playsinline poster="">
                <source id="video-modal-source" src="" type="video/mp4">
                Browsermu tidak mendukung pemutaran video.
            </video>
        </div>
    </div>
</div>

<!-- Product Category Featured Images Popup Modal -->
<div id="category-modal" onclick="closeCategoryModal()" class="fixed inset-0 z-50 hidden flex flex-col justify-between items-center p-3 sm:p-4 pt-14 pb-5 sm:py-4 bg-black/90 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300" style="z-index: 99990;" role="dialog" aria-modal="true" aria-labelledby="modal-category-title">
    
    <!-- MAIN MODAL CONTAINER (Using calc for dynamic mobile viewport fit) -->
    <div onclick="event.stopPropagation()" class="relative w-full max-w-5xl h-[calc(100dvh-6.5rem)] max-h-[640px] md:h-[80dvh] bg-[#180d05] rounded-2xl flex flex-col md:flex-row overflow-hidden shadow-2xl border border-[#644a30]/40 transition-transform duration-300 scale-95 my-auto">
        
        <!-- EXPLICIT CLOSE BUTTON (Do not remove) -->
        <button onclick="closeCategoryModal()" type="button" class="absolute top-3 right-3 md:top-5 md:right-5 z-[1000] p-2 sm:p-2.5 bg-[#180d05]/90 hover:bg-[#c7a061] text-[#e5e5e7] hover:text-[#180d05] rounded-full transition-all duration-300 border border-[#644a30]/60 hover:border-[#c7a061] shadow-xl backdrop-blur-md cursor-pointer hover:scale-105" aria-label="Close modal">
            <svg width="20" height="20" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- LEFT COLUMN: IMAGE & THUMBNAILS (45% height on mobile, 50% width on desktop) -->
        <div class="w-full h-[45%] md:w-1/2 md:h-full bg-black flex flex-col relative shrink-0 overflow-hidden">
            <!-- Main Image Container with Ambient Studio Spotlight -->
            <div onclick="openFullscreenImage()" class="w-full flex-1 min-h-0 relative overflow-hidden flex items-center justify-center bg-[#0d0703] cursor-pointer group">
                <!-- Ambient Blurred Background Image -->
                <img id="modal-bg-image" src="" alt="" class="absolute inset-0 w-full h-full object-cover filter blur-2xl opacity-40 scale-125 pointer-events-none transition-all duration-500">
                <div class="absolute inset-0 bg-radial from-transparent via-[#0d0703]/40 to-[#0d0703] pointer-events-none z-10"></div>
                
                <!-- Full Resolution Hint Badge / Button -->
                <button type="button" onclick="openFullscreenImage(event)" class="absolute top-2.5 left-2.5 z-20 px-2.5 py-1 rounded-full bg-black/70 hover:bg-[#c7a061] text-[#c7a061] hover:text-black border border-[#c7a061]/50 text-[9px] sm:text-[10px] font-medium backdrop-blur-md flex items-center gap-1.5 shadow-md transition-all duration-200 cursor-pointer opacity-90 hover:opacity-100 active:scale-95">
                    <i class="fa-solid fa-expand text-[8px] sm:text-[9px]"></i>
                    <span>{{ __('Klik untuk ukuran asli') }}</span>
                </button>

                <!-- Main Image (object-contain ensures full image visibility without cropping) -->
                <img id="modal-main-image" src="" class="relative z-10 w-full h-full object-contain p-2 sm:p-3 transition-transform duration-300 group-hover:scale-[1.02]" alt="Main Cue" title="{{ __('Klik untuk melihat ukuran asli') }}">
            </div>
            <!-- Thumbnails container (positioned as flex child on mobile so it doesn't overlay and cut main image, absolute on desktop) -->
            <div id="modal-thumbnails-container" class="relative md:absolute md:bottom-0 z-20 w-full p-2 sm:p-3 flex gap-2 sm:gap-3 overflow-x-auto bg-[#0a0502]/95 md:bg-gradient-to-t md:from-black md:via-black/90 md:to-transparent border-t border-white/10 md:border-t-0 shrink-0 custom-scrollbar">
                <!-- Dynamic thumbnails rendered here -->
            </div>
        </div>

        <!-- RIGHT COLUMN: TEXT (55% height on mobile, 50% width on desktop) -->
        <div class="w-full h-[55%] md:w-1/2 md:h-full flex flex-col bg-[#180d05] justify-start overflow-hidden">
            <!-- Scrollable Text Area -->
            <div class="flex-1 p-4 sm:p-6 md:p-8 overflow-y-auto overscroll-contain custom-scrollbar flex flex-col justify-start space-y-3 sm:space-y-4">
                <div>
                    <span id="modal-category-badge" class="px-3 py-1 text-[10px] font-bold text-[#180d05] bg-[#c7a061] rounded-full uppercase tracking-wider inline-block mb-1">Playing Cue</span>
                    <h3 id="modal-category-title" class="text-2xl md:text-3xl font-bold text-white mt-1 mb-5">Playing Cues</h3>
                    
                    <h4 class="text-[10px] text-[#917b59] font-bold tracking-widest uppercase mb-2">{{ __('Deskripsi Kategori') }}</h4>
                    <p id="modal-category-desc" class="text-[#e5e5e7] text-sm leading-relaxed mb-6">Stik biliar presisi tinggi dengan sistem joint mikro dan kayu kualitas premium untuk tembakan konsisten.</p>
                    
                    <h4 class="text-[10px] text-[#917b59] font-bold tracking-widest uppercase mb-3">{{ __('Keunggulan Utama') }}</h4>
                    <ul id="modal-category-highlights" class="space-y-3 pb-4">
                        <li class="flex gap-3 text-sm text-[#e5e5e7]"><span class="text-[#c7a061]">✔</span> Handcrafted Exotic Wood & Custom Inlays</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Fullscreen Image Lightbox Modal -->
<div id="image-lightbox-modal" class="fixed inset-0 z-50 hidden flex flex-col justify-between bg-black/98 backdrop-blur-2xl transition-all duration-300 opacity-0 pointer-events-none select-none" style="z-index: 99999;" role="dialog" aria-modal="true">
    <!-- Lightbox Backdrop -->
    <div onclick="closeFullscreenImage()" class="absolute inset-0 bg-black/98 z-0"></div>

    <!-- ALWAYS VISIBLE FLOATING CLOSE BUTTON (X) FOR MOBILE & DESKTOP -->
    <button onclick="closeFullscreenImage()" type="button" class="fixed top-3.5 right-3.5 sm:top-6 sm:right-6 z-50 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-zinc-900/95 hover:bg-accent-gold border-2 border-accent-gold text-accent-gold hover:text-black flex items-center justify-center transition-all shadow-[0_0_20px_rgba(199,160,97,0.5)] backdrop-blur-xl cursor-pointer hover:scale-110 focus:outline-none" style="z-index: 100000;" aria-label="{{ __('Tutup Ukuran Asli') }}">
        <i class="fa-solid fa-xmark text-xl font-bold"></i>
    </button>

    <!-- TOP HEADER CONTROL BAR -->
    <div class="relative z-30 w-full px-4 pt-4 pb-3 sm:pt-6 sm:px-8 flex items-center justify-between bg-gradient-to-b from-black via-black/80 to-transparent shrink-0">
        <!-- Counter Badge -->
        <div id="lightbox-counter-badge" class="px-3.5 py-1.5 rounded-full bg-zinc-900/90 border border-accent-gold/40 text-white text-xs font-semibold backdrop-blur-md shadow-2xl flex items-center gap-2">
            <i class="fa-solid fa-images text-accent-gold text-xs"></i>
            <span id="lightbox-counter-text">1 / 1</span>
        </div>

        <!-- New Tab Button (Placed left of close button) -->
        <div class="pr-14 sm:pr-16">
            <a id="lightbox-newtab-btn" href="#" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 sm:px-4 sm:py-2 rounded-full bg-zinc-900/90 hover:bg-zinc-800 border border-white/20 text-zinc-200 hover:text-accent-gold text-xs font-semibold flex items-center gap-1.5 transition-all shadow-xl backdrop-blur-md" title="{{ __('Buka Gambar di Tab Baru') }}">
                <span class="hidden sm:inline">{{ __('Buka Tab Baru') }}</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
            </a>
        </div>
    </div>

    <!-- MAIN DISPLAYED IMAGE CONTAINER (Clean image view without arrow overlays on mobile) -->
    <div class="relative z-10 flex-1 w-full flex items-center justify-center p-3 sm:p-6 overflow-hidden min-h-0">
        <!-- Left Slide Arrow (HIDDEN ON MOBILE, ONLY VISIBLE ON DESKTOP md:flex OUTSIDE IMAGE) -->
        <button id="lightbox-prev-btn" onclick="prevFullscreenImage(event)" type="button" class="hidden md:flex absolute left-8 z-40 w-13 h-13 rounded-full bg-zinc-900/90 hover:bg-accent-gold border border-accent-gold/50 text-white hover:text-black items-center justify-center transition-all shadow-2xl backdrop-blur-md cursor-pointer hover:scale-110 focus:outline-none" aria-label="{{ __('Gambar Sebelumnya') }}">
            <i class="fa-solid fa-chevron-left text-xl"></i>
        </button>

        <!-- Main Display Image -->
        <img id="lightbox-image" onclick="event.stopPropagation()" src="" alt="Ukuran Asli Gambar" class="max-w-full max-h-full object-contain rounded-lg sm:rounded-xl shadow-[0_0_90px_rgba(0,0,0,1)] border border-white/10 transition-all duration-300 pointer-events-auto">

        <!-- Right Slide Arrow (HIDDEN ON MOBILE, ONLY VISIBLE ON DESKTOP md:flex OUTSIDE IMAGE) -->
        <button id="lightbox-next-btn" onclick="nextFullscreenImage(event)" type="button" class="hidden md:flex absolute right-8 z-40 w-13 h-13 rounded-full bg-zinc-900/90 hover:bg-accent-gold border border-accent-gold/50 text-white hover:text-black items-center justify-center transition-all shadow-2xl backdrop-blur-md cursor-pointer hover:scale-110 focus:outline-none" aria-label="{{ __('Gambar Selanjutnya') }}">
            <i class="fa-solid fa-chevron-right text-xl"></i>
        </button>
    </div>

    <!-- BOTTOM THUMBNAIL STRIP & CLOSE ACTION BAR -->
    <div class="relative z-30 w-full p-3 pb-6 sm:pb-6 flex flex-col items-center justify-center bg-gradient-to-t from-black via-black/95 to-transparent shrink-0 gap-2.5">
        <div id="lightbox-thumbnails-strip" class="flex items-center gap-2 overflow-x-auto max-w-full p-1 custom-scrollbar">
            <!-- Dynamic thumbnails strip rendered here -->
        </div>
        
        <!-- Mobile Bottom Close Action Button -->
        <button onclick="closeFullscreenImage()" type="button" class="px-5 py-2 rounded-full bg-zinc-900/90 hover:bg-accent-gold border border-accent-gold/50 text-accent-gold hover:text-black text-xs font-bold transition-all shadow-xl flex items-center gap-2">
            <i class="fa-solid fa-xmark text-sm"></i>
            <span>{{ __('Tutup Ukuran Asli') }}</span>
        </button>
    </div>
</div>


<!-- ==========================================
     SECTION 5: MEDIA ECOSYSTEM & MARKETING
     ========================================== -->
<section id="media" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-secondary/40 border-y border-border-accent/30">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Our Core Differentiator') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Internal') }} <span class="text-gold-gradient">{{ __('Media Ecosystem') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Cue Corner supports brand promotion through dedicated media channels to connect products directly with the billiard community.') }}
            </p>
        </div>

        <!-- Media Channels Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 mb-12 sm:mb-16">
            
            <!-- Channel 1: Cuecorner Indonesia (Instagram) -->
            <a href="https://www.instagram.com/cuecorner.id/" target="_blank" rel="noopener noreferrer" class="card-luxury p-6 sm:p-8 rounded-2xl relative overflow-hidden gsap-reveal border-l-4 border-l-accent-gold group hover:border-accent-gold transition-all duration-300 block">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3.5 sm:gap-4">
                        <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-gradient-to-tr from-accent-glow via-accent-gold to-accent-soft flex items-center justify-center text-primary text-xl sm:text-2xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light group-hover:text-accent-glow transition-colors">Cuecorner.id</h4>
                            <span class="text-[10px] sm:text-xs text-accent-gold uppercase tracking-wider font-semibold">{{ __('Official Instagram • @cuecorner.id') }}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs sm:text-sm text-text-muted group-hover:text-accent-glow transition-colors"></i>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-4">
                    {{ __('Follow official Cue Corner Indonesia social media for exclusive cue product releases, national tournament coverage, and equipment specification breakdowns.') }}
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-accent-gold group-hover:text-accent-glow">
                    <span>{{ __('Visit Instagram') }}</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </a>

            <!-- Channel 2: Triple Sixty Indonesia (Instagram) -->
            <a href="https://www.instagram.com/triple.sixtyindonesia/" target="_blank" rel="noopener noreferrer" class="card-luxury p-6 sm:p-8 rounded-2xl relative overflow-hidden gsap-reveal border-l-4 border-l-accent-gold group hover:border-accent-gold transition-all duration-300 block">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3.5 sm:gap-4">
                        <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-gradient-to-tr from-accent-glow via-accent-gold to-accent-soft flex items-center justify-center text-primary text-xl sm:text-2xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light group-hover:text-accent-glow transition-colors">Triple Sixty Indonesia</h4>
                            <span class="text-[10px] sm:text-xs text-accent-gold uppercase tracking-wider font-semibold">{{ __('Official Media • @triple.sixtyindonesia') }}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs sm:text-sm text-text-muted group-hover:text-accent-glow transition-colors"></i>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-4">
                    {{ __('Official Triple Sixty Indonesia digital media channel dedicated to cue sports coverage, tournament highlights, brand ambassador features, and billiard community content.') }}
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-accent-gold group-hover:text-accent-glow">
                    <span>{{ __('Visit Triple Sixty Instagram') }}</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </a>

            <!-- Channel 3: Zen Cue Corner (Instagram) -->
            <a href="https://www.instagram.com/zencuecorner/" target="_blank" rel="noopener noreferrer" class="card-luxury p-6 sm:p-8 rounded-2xl relative overflow-hidden gsap-reveal border-l-4 border-l-accent-gold group hover:border-accent-gold transition-all duration-300 block">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3.5 sm:gap-4">
                        <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-gradient-to-tr from-accent-glow via-accent-gold to-accent-soft flex items-center justify-center text-primary text-xl sm:text-2xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light group-hover:text-accent-glow transition-colors">Zen Cue Corner</h4>
                            <span class="text-[10px] sm:text-xs text-accent-gold uppercase tracking-wider font-semibold">{{ __('Official Instagram • @zencuecorner') }}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs sm:text-sm text-text-muted group-hover:text-accent-glow transition-colors"></i>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-4">
                    {{ __('Official Zen Cue Corner media channel dedicated to custom cue craftsmanship, high-reach video showcases, and billiard equipment reviews.') }}
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-accent-gold group-hover:text-accent-glow">
                    <span>{{ __('Visit Zen Cue Corner Instagram') }}</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </a>

        </div>

        <!-- Meta / Instagram Insights Performance Dashboard & Stat Cards -->
        <div class="card-luxury p-5 sm:p-10 rounded-2xl sm:rounded-3xl border border-accent-gold/40 gsap-reveal shadow-2xl !bg-black">
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8 sm:mb-10 pb-5 sm:pb-6 border-b border-white/10 text-center md:text-left">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-gold/20 border border-accent-gold/40 text-accent-glow text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-2">
                        <i class="fa-brands fa-instagram text-xs sm:text-sm"></i>
                        <span>Meta Instagram Verified Insights</span>
                    </div>
                    <h4 class="font-serif text-xl sm:text-3xl font-bold text-text-light">
                        {{ __('1-Year Ecosystem Performance') }}
                    </h4>
                    <p id="ig-insights-subtitle" class="text-[11px] sm:text-xs text-text-muted mt-1">
                        {{ __('Official Meta Insights Performance Data (Period 28 Jul 2025 – 28 Jul 2026)') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3">
                    <!-- Account Selector Toggle Tabs -->
                    <div class="flex items-center gap-1 bg-zinc-900 p-1 rounded-xl border border-white/15 text-[11px] sm:text-xs">
                        <button onclick="switchIgAccount('cuecorner')" id="acct-tab-cuecorner" class="px-3 py-1.5 rounded-lg font-bold bg-accent-gold text-black transition-all">@cuecorner.id</button>
                        <button onclick="switchIgAccount('triplesixty')" id="acct-tab-triplesixty" class="px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all">@triple.sixtyindonesia</button>
                        <button onclick="switchIgAccount('zencue')" id="acct-tab-zencue" class="px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all">@zencuecorner</button>
                    </div>

                    <div class="flex items-center gap-2 bg-zinc-900/90 px-3.5 sm:px-4 py-2 rounded-xl border border-white/10 text-[11px] sm:text-xs text-zinc-300">
                        <i class="fa-solid fa-calendar-check text-accent-gold"></i>
                        <span class="font-semibold">{{ __('Verified Meta Insights') }}</span>
                    </div>
                </div>
            </div>

            <!-- 6 Key Insight Stat Cards Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-5 mb-8 sm:mb-10">
                
                <!-- Card 1: Tayangan / Views -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Impressions / Views') }}</span>
                        <i class="fa-solid fa-eye text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-1" class="font-serif text-2xl sm:text-3xl font-extrabold text-gold-gradient">11,1M</div>
                        <span id="stat-sub-1" class="text-[9px] sm:text-[10px] text-text-muted">(11.095.380 {{ __('impressions') }})</span>
                    </div>
                    <div id="stat-growth-1" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +100% vs prev
                    </div>
                </div>

                <!-- Card 2: Jangkauan -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Reach') }}</span>
                        <i class="fa-solid fa-users text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-2" class="font-serif text-2xl sm:text-3xl font-extrabold text-gold-gradient">195,6K</div>
                        <span id="stat-sub-2" class="text-[9px] sm:text-[10px] text-text-muted">(195.600 {{ __('reached') }})</span>
                    </div>
                    <div id="stat-growth-2" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +336,1%
                    </div>
                </div>

                <!-- Card 3: Interaksi Konten -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Engagement') }}</span>
                        <i class="fa-solid fa-heart text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-3" class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-glow">49,2K</div>
                        <span id="stat-sub-3" class="text-[9px] sm:text-[10px] text-text-muted">(49.200 {{ __('interactions') }})</span>
                    </div>
                    <div id="stat-growth-3" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +100%
                    </div>
                </div>

                <!-- Card 4: Kunjungan Profil / Non-Followers -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Profile / Non-Followers') }}</span>
                        <i class="fa-solid fa-user-check text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-4" class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-soft">81K</div>
                        <span id="stat-sub-4" class="text-[9px] sm:text-[10px] text-text-muted">(81.000 {{ __('visits') }})</span>
                    </div>
                    <div id="stat-growth-4" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +11,5%
                    </div>
                </div>

                <!-- Card 5: Top Content / Followers -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Followers / Top Video') }}</span>
                        <i class="fa-solid fa-user-plus text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-5" class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-glow">4K</div>
                        <span id="stat-sub-5" class="text-[9px] sm:text-[10px] text-text-muted">({{ __('Total followers') }})</span>
                    </div>
                    <div id="stat-growth-5" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +15,7K%
                    </div>
                </div>

                <!-- Card 6: Klik Tautan / Content Formats -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Link Clicks / Content') }}</span>
                        <i class="fa-solid fa-link text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div id="stat-val-6" class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-soft">191</div>
                        <span id="stat-sub-6" class="text-[9px] sm:text-[10px] text-text-muted">(191 {{ __('clicks') }})</span>
                    </div>
                    <div id="stat-growth-6" class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +100%
                    </div>
                </div>

            </div>

            <!-- Interactive Chart.js Performance Visualization Container -->
            <div class="p-4 sm:p-8 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-3 mb-5 text-center sm:text-left">
                    <div>
                        <h5 class="font-serif text-base sm:text-lg font-bold text-text-light flex items-center justify-center sm:justify-start gap-2">
                            <i class="fa-solid fa-chart-line text-accent-gold"></i>
                            <span>{{ __('Instagram Ecosystem Performance Trend Chart') }}</span>
                        </h5>
                        <p class="text-[11px] sm:text-xs text-text-muted mt-0.5">{{ __('1-Year Full Activity Metrics (28 Jul 2025 – 28 Jul 2026)') }}</p>
                    </div>

                    <!-- Chart Toggle Controls -->
                    <div class="flex items-center gap-1 bg-black p-1 rounded-xl border border-white/15 text-[11px] sm:text-xs w-full sm:w-auto justify-center">
                        <button onclick="updateIgChart('tayangan')" id="chart-tab-tayangan" class="px-2.5 sm:px-3 py-1.5 rounded-lg font-bold bg-accent-gold text-black transition-all flex-1 sm:flex-none">{{ __('Impressions') }}</button>
                        <button onclick="updateIgChart('jangkauan')" id="chart-tab-jangkauan" class="px-2.5 sm:px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all flex-1 sm:flex-none">{{ __('Reach') }}</button>
                        <button onclick="updateIgChart('interaksi')" id="chart-tab-interaksi" class="px-2.5 sm:px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all flex-1 sm:flex-none">{{ __('Engagement') }}</button>
                    </div>
                </div>

                <!-- Canvas for Chart.js -->
                <div class="relative w-full h-64 sm:h-80">
                    <canvas id="igInsightsChart"></canvas>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ==========================================
     SECTION 6: MULTI-CHANNEL SALES NETWORK
     ========================================== -->
<section id="sales-network" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-primary">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Distribution Channels') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Multi-Channel') }} <span class="text-gold-gradient">{{ __('Sales Network') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('We combine seamless e-commerce convenience with offline luxury showroom experiences and nationwide dealer distribution.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
            
            <!-- E-Commerce Official Presence Card -->
            <div class="card-luxury p-6 sm:p-8 rounded-2xl gsap-reveal">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <i class="fa-solid fa-cart-shopping text-xl sm:text-2xl text-accent-gold"></i>
                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light">{{ __('Our E-Commerce Platforms') }}</h4>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-6">
                    {{ __('Cue Corner operates official flagship stores on Indonesia\'s top online marketplaces, ensuring 24/7 accessibility and fast dispatch.') }}
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">
                    <!-- Tokopedia Card -->
                    <a href="https://www.tokopedia.com/cue-corner-indonesia" target="_blank" rel="noopener noreferrer" class="p-4 rounded-xl bg-secondary/80 border border-border-accent/60 flex flex-col justify-between group hover:border-accent-gold hover:scale-[1.02] transition-all min-h-[110px]">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-zinc-900/90 border border-white/10 p-2 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <img src="{{ asset('Asset/Logo/Marketplace/Tokopedia.png') }}" alt="Tokopedia" class="w-full h-full object-contain">
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs text-text-muted group-hover:text-accent-glow"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-text-light text-sm leading-tight">Tokopedia</h5>
                            <span class="text-[10px] text-accent-gold uppercase tracking-wider font-semibold block mt-0.5">{{ __('Official Store') }}</span>
                        </div>
                    </a>

                    <!-- Shopee Card -->
                    <a href="https://shopee.co.id/cuecornerindonesia" target="_blank" rel="noopener noreferrer" class="p-4 rounded-xl bg-secondary/80 border border-border-accent/60 flex flex-col justify-between group hover:border-accent-gold hover:scale-[1.02] transition-all min-h-[110px]">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-zinc-900/90 border border-white/10 p-2 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <img src="{{ asset('Asset/Logo/Marketplace/Shopee.png') }}" alt="Shopee" class="w-full h-full object-contain">
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs text-text-muted group-hover:text-accent-glow"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-text-light text-sm leading-tight">Shopee</h5>
                            <span class="text-[10px] text-accent-gold uppercase tracking-wider font-semibold block mt-0.5">{{ __('Shopee Mall / Official') }}</span>
                        </div>
                    </a>

                    <!-- Website Store Card (Coming Soon) -->
                    <div class="p-4 rounded-xl bg-secondary/80 border border-border-accent/60 flex flex-col justify-between group hover:border-accent-gold/40 transition-all min-h-[110px]">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-zinc-900/90 border border-accent-gold/30 text-accent-gold flex items-center justify-center text-lg group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[9px] font-bold uppercase tracking-wider">
                                {{ __('Coming Soon') }}
                            </span>
                        </div>
                        <div>
                            <h5 class="font-bold text-text-light text-sm leading-tight">{{ __('Official Web Store') }}</h5>
                            <span class="text-[10px] text-zinc-400 uppercase tracking-wider font-semibold block mt-0.5">{{ __('Direct Checkout') }}</span>
                        </div>
                    </div>

                    <!-- Mobile App Card (Coming Soon) -->
                    <div class="p-4 rounded-xl bg-secondary/80 border border-border-accent/60 flex flex-col justify-between group hover:border-accent-gold/40 transition-all min-h-[110px]">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-zinc-900/90 border border-accent-gold/30 text-accent-gold flex items-center justify-center text-lg group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-accent-gold/20 text-accent-gold border border-accent-gold/40 text-[9px] font-bold uppercase tracking-wider">
                                {{ __('Coming Soon') }}
                            </span>
                        </div>
                        <div>
                            <h5 class="font-bold text-text-light text-sm leading-tight">{{ __('Cue Corner App') }}</h5>
                            <span class="text-[10px] text-zinc-400 uppercase tracking-wider font-semibold block mt-0.5">{{ __('iOS & Android') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Official Showroom Location Card with Dark Styled Google Maps -->
            <div class="card-luxury p-5 sm:p-8 rounded-2xl gsap-reveal flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 sm:w-10 h-9 sm:h-10 rounded-xl bg-accent-gold/20 border border-accent-gold/40 flex items-center justify-center text-accent-glow text-base sm:text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-serif text-lg sm:text-xl font-bold text-text-light">{{ __('Official Showroom Location') }}</h4>
                                <span class="text-[11px] sm:text-xs text-text-muted">Cue Corner • Tangerang / Jakarta, Indonesia</span>
                            </div>
                        </div>
                        <a href="https://maps.google.com/?q=Cue+Corner" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-zinc-900 border border-white/15 text-xs text-accent-gold hover:text-white hover:border-accent-gold transition-all">
                            <span>Google Maps</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>

                    <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5">
                        {{ __('Visit our official showroom to test billiard cues, carbon shafts, and luxury accessories firsthand with expert assistance.') }}
                    </p>
                </div>

                <!-- Dark Mode Styled Google Maps Embed Container -->
                <div class="relative w-full h-56 sm:h-72 rounded-xl overflow-hidden border border-white/15 shadow-2xl group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63482.383393255644!2d106.6240095216797!3d-6.0428099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0500435e328b%3A0xc09a25af9e6e4281!2sCue%20Corner!5e0!3m2!1sid!2sid!4v1785252373863!5m2!1sid!2sid" 
                        class="w-full h-full border-0 filter invert-[90%] hue-rotate-[180deg] contrast-[1.15] brightness-[0.85] grayscale-[15%] transition-all duration-500 group-hover:brightness-100 group-hover:invert-0 group-hover:hue-rotate-0 group-hover:grayscale-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="strict-origin-when-cross-origin"
                        title="Cue Corner Official Showroom Location">
                    </iframe>

                    <!-- Ambient Map Overlay Pin Badge -->
                    <div class="absolute bottom-3 left-3 bg-black/90 backdrop-blur-md px-3 py-1.5 rounded-lg border border-white/10 text-[10px] sm:text-[11px] text-text-light flex items-center gap-2 pointer-events-none shadow-lg">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span class="font-semibold">{{ __('Open Daily') }}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ==========================================
     SECTION 7: BRAND AMBASSADORS & AFFILIATES
     ========================================== -->
<section id="ambassadors" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-secondary/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Community Champions') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Official Brand') }} <span class="text-gold-gradient">{{ __('Ambassadors') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Represented by Indonesia\'s most respected billiard influencers, athletes, and media personalities.') }}
            </p>
        </div>

        <!-- Ambassador Cards Grid / Carousel -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 max-w-6xl mx-auto">
            
            <!-- Ambassador 1: Bara -->
            <div class="card-luxury p-5 sm:p-6 rounded-2xl flex flex-col items-center text-center group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl">
                <!-- Image Carousel Frame -->
                <div class="relative w-full h-72 sm:h-96 rounded-xl overflow-hidden mb-4 sm:mb-5 bg-zinc-950 border border-white/10">
                    
                    <!-- Slide 1: Foto BA -->
                    <div class="ba-slide-0-0 absolute inset-0 transition-opacity duration-500 opacity-100 z-10">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Bara - BA.png') }}" alt="Bara - Brand Ambassador" class="w-full h-full object-cover object-top">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                    </div>

                    <!-- Slide 2: SS Instagram -->
                    <div class="ba-slide-0-1 absolute inset-0 transition-opacity duration-500 opacity-0 z-0">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Bara - Instagram.png') }}" alt="Bara - Instagram Screenshot" class="w-full h-full object-contain object-center bg-black">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Carousel Controls Overlay -->
                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between z-20">
                        <!-- Dot Indicators / Slide Tabs -->
                        <div class="flex items-center gap-1.5 bg-black/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/15">
                            <button onclick="setBaSlide(0, 0)" id="dot-0-0" class="h-2 w-5 rounded-full bg-accent-gold transition-all" title="Foto BA"></button>
                            <button onclick="setBaSlide(0, 1)" id="dot-0-1" class="h-2 w-2 rounded-full bg-white/40 hover:bg-white transition-all" title="SS Instagram"></button>
                        </div>

                        <!-- Prev / Next Navigation Buttons -->
                        <div class="flex items-center gap-1.5">
                            <button onclick="toggleBaSlide(0)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button onclick="toggleBaSlide(0)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Bara</h4>
                <a href="https://www.instagram.com/frivolousmind/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold uppercase tracking-wider mb-2.5 flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                    <i class="fa-brands fa-instagram text-sm"></i> BA - Instagram
                </a>
                <p class="text-xs text-text-muted leading-relaxed">
                    {{ __('Billiard influencer & high-performance cue reviewer driving digital community engagement across Indonesia.') }}
                </p>
            </div>

            <!-- Ambassador 2: Inggrid -->
            <div class="card-luxury p-5 sm:p-6 rounded-2xl flex flex-col items-center text-center group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl">
                <!-- Image Carousel Frame -->
                <div class="relative w-full h-72 sm:h-96 rounded-xl overflow-hidden mb-4 sm:mb-5 bg-zinc-950 border border-white/10">
                    
                    <!-- Slide 1: Foto BA -->
                    <div class="ba-slide-1-0 absolute inset-0 transition-opacity duration-500 opacity-100 z-10">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Inggrid - BA.png') }}" alt="Inggrid - Brand Ambassador" class="w-full h-full object-cover object-top">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                    </div>

                    <!-- Slide 2: SS Instagram -->
                    <div class="ba-slide-1-1 absolute inset-0 transition-opacity duration-500 opacity-0 z-0">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Inggrid instagram.png') }}" alt="Inggrid - Instagram Screenshot" class="w-full h-full object-contain object-center bg-black">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Carousel Controls Overlay -->
                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between z-20">
                        <!-- Dot Indicators / Slide Tabs -->
                        <div class="flex items-center gap-1.5 bg-black/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/15">
                            <button onclick="setBaSlide(1, 0)" id="dot-1-0" class="h-2 w-5 rounded-full bg-accent-gold transition-all" title="Foto BA"></button>
                            <button onclick="setBaSlide(1, 1)" id="dot-1-1" class="h-2 w-2 rounded-full bg-white/40 hover:bg-white transition-all" title="SS Instagram"></button>
                        </div>

                        <!-- Prev / Next Navigation Buttons -->
                        <div class="flex items-center gap-1.5">
                            <button onclick="toggleBaSlide(1)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button onclick="toggleBaSlide(1)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Inggrid</h4>
                <a href="https://www.instagram.com/itsinggridd/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold uppercase tracking-wider mb-2.5 flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                    <i class="fa-brands fa-instagram text-sm"></i> BA - Instagram
                </a>
                <p class="text-xs text-text-muted leading-relaxed">
                    {{ __('National billiard ambassador & trick shot content creator showcasing precision equipment craftsmanship.') }}
                </p>
            </div>

            <!-- Ambassador 3: Maximus -->
            <div class="card-luxury p-5 sm:p-6 rounded-2xl flex flex-col items-center text-center group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl">
                <!-- Image Carousel Frame -->
                <div class="relative w-full h-72 sm:h-96 rounded-xl overflow-hidden mb-4 sm:mb-5 bg-zinc-950 border border-white/10">
                    
                    <!-- Slide 1: Foto BA -->
                    <div class="ba-slide-2-0 absolute inset-0 transition-opacity duration-500 opacity-100 z-10">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Maximus - BA.png') }}" alt="Maximus - Brand Ambassador" class="w-full h-full object-cover object-top">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                    </div>

                    <!-- Slide 2: SS Instagram -->
                    <div class="ba-slide-2-1 absolute inset-0 transition-opacity duration-500 opacity-0 z-0">
                        <img src="{{ asset('Asset/Image/BA - Triple sixty/Maximus -instagram.png') }}" alt="Maximus - Instagram Screenshot" class="w-full h-full object-contain object-center bg-black">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Carousel Controls Overlay -->
                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between z-20">
                        <!-- Dot Indicators / Slide Tabs -->
                        <div class="flex items-center gap-1.5 bg-black/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/15">
                            <button onclick="setBaSlide(2, 0)" id="dot-2-0" class="h-2 w-5 rounded-full bg-accent-gold transition-all" title="Foto BA"></button>
                            <button onclick="setBaSlide(2, 1)" id="dot-2-1" class="h-2 w-2 rounded-full bg-white/40 hover:bg-white transition-all" title="SS Instagram"></button>
                        </div>

                        <!-- Prev / Next Navigation Buttons -->
                        <div class="flex items-center gap-1.5">
                            <button onclick="toggleBaSlide(2)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button onclick="toggleBaSlide(2)" class="w-8 h-8 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:border-accent-gold hover:text-accent-glow transition-all text-xs" title="Ganti Slide">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Maximus</h4>
                <a href="https://www.instagram.com/guido_maximuss/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold uppercase tracking-wider mb-2.5 flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                    <i class="fa-brands fa-instagram text-sm"></i> BA - Instagram
                </a>
                <p class="text-xs text-text-muted leading-relaxed">
                    {{ __('Tournament athlete & carbon shaft performance specialist advocating elite gear standards.') }}
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ==========================================
     SECTION 8: AFFILIATED INFLUENCERS, ATHLETES & MEDIA
     ========================================== -->
<section id="affiliates" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-primary border-t border-border-accent/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Media & Athlete Network') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Affiliated') }} <span class="text-gold-gradient">{{ __('Influencers, Athletes & Media') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Cue Corner collaborates with national billiard athletes, content creators, and broadcast channels to strengthen the billiard community in Indonesia.') }}
            </p>

            <!-- Network Filter Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-2 mt-6 sm:mt-8">
                <button onclick="filterAffiliates('all')" id="affiliate-tab-all" class="px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md">{{ __('Semua Network') }}</button>
                <button onclick="filterAffiliates('athlete')" id="affiliate-tab-athlete" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Konten Kreator') }}</button>
                <button onclick="filterAffiliates('influencer')" id="affiliate-tab-influencer" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Influencer & Creator') }}</button>
                <button onclick="filterAffiliates('media')" id="affiliate-tab-media" class="px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all">{{ __('Media Terafiliasi') }}</button>
            </div>
        </div>

        <!-- Affiliates Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 max-w-6xl mx-auto">
            
            <!-- Item 1: Greg -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="influencer">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-[10px] uppercase font-bold tracking-wider border border-purple-500/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-clapperboard text-xs"></i>
                            <span>Content Creator</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/gregmainbl/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Greg.png') }}" alt="Greg - Billiard Creator" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Greg</h4>
                    <a href="https://www.instagram.com/gregmainbl/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@gregmainbl</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Billiard content creator & gear reviewer sharing cue performance breakdowns across Instagram & TikTok.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Affiliated Creator</span>
                    <a href="https://www.instagram.com/gregmainbl/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Item 2: Susi -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="influencer">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-[10px] uppercase font-bold tracking-wider border border-purple-500/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-icons text-xs"></i>
                            <span>Billiard Ambassador</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/susiimrln/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Susi.png') }}" alt="Susi - Billiard Ambassador" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Susi</h4>
                    <a href="https://www.instagram.com/susiimrln/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@susiimrln</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Billiard lifestyle creator & ambassador promoting premium billiard accessories and community engagement.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Affiliated Ambassador</span>
                    <a href="https://www.instagram.com/susiimrln/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Item 3: Jason -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="athlete">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-accent-gold/20 text-accent-glow text-[10px] uppercase font-bold tracking-wider border border-accent-gold/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-trophy text-xs"></i>
                            <span>Atlet Pro Billiard</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/jasonkeitaro/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Jason.png') }}" alt="Jason - Billiard Athlete" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Jason</h4>
                    <a href="https://www.instagram.com/jasonkeitaro/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@jasonkeitaro</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Tournament pool athlete & gear specialist competing actively in national circuit championships.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Affiliated Athlete</span>
                    <a href="https://www.instagram.com/jasonkeitaro/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Item 4: Coach Kelvin -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="athlete">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-accent-gold/20 text-accent-glow text-[10px] uppercase font-bold tracking-wider border border-accent-gold/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-graduation-cap text-xs"></i>
                            <span>Head Coach</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/coachkelvin__/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Kelvin.png') }}" alt="Coach Kelvin - Billiard Coach" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Coach Kelvin</h4>
                    <a href="https://www.instagram.com/coachkelvin__/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@coachkelvin__</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Certified billiard head coach & technique instructor developing pro-grade cue sports skills.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Head Coach</span>
                    <a href="https://www.instagram.com/coachkelvin__/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Item 5: KamarBilliard -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="media">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[10px] uppercase font-bold tracking-wider border border-emerald-500/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-tower-broadcast text-xs"></i>
                            <span>Media Partner</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/kamarbilliard/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Kamar biliard.png') }}" alt="KamarBilliard - Media Channel" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">KamarBilliard</h4>
                    <a href="https://www.instagram.com/kamarbilliard/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@kamarbilliard</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Official affiliated billiard media channel & community hub covering tournament news, highlights, and gear releases.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Affiliated Media</span>
                    <a href="https://www.instagram.com/kamarbilliard/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Item 6: Massipan -->
            <div class="affiliate-card-item card-luxury p-5 sm:p-6 rounded-2xl flex flex-col justify-between group hover:border-accent-gold/70 transition-all duration-300 !bg-black border border-white/10 shadow-2xl" data-category="influencer">
                <div>
                    <!-- Card Header Badge -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-[10px] uppercase font-bold tracking-wider border border-purple-500/40 flex items-center gap-1.5">
                            <i class="fa-solid fa-video text-xs"></i>
                            <span>Content Creator</span>
                        </span>
                        <span class="text-[10px] text-zinc-400 font-semibold bg-zinc-900 px-2.5 py-1 rounded-full border border-white/10">Instagram</span>
                    </div>

                    <!-- Image Frame with ZERO Cropping -->
                    <a href="https://www.instagram.com/massipannn/" target="_blank" rel="noopener noreferrer" class="block relative w-full h-80 sm:h-96 rounded-xl overflow-hidden mb-4 bg-zinc-950 border border-white/10 group-hover:border-accent-gold/50 transition-all p-1 flex items-center justify-center">
                        <img src="{{ asset('Asset/Image/Affiliated Influencers, Athletes & Media/Massipan.png') }}" alt="Massipan - Billiard Creator" class="w-full h-full object-contain object-center group-hover:scale-[1.02] transition-transform duration-500">
                    </a>

                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1 group-hover:text-accent-glow transition-colors">Massipan</h4>
                    <a href="https://www.instagram.com/massipannn/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold font-semibold tracking-wider mb-3 inline-flex items-center gap-1.5 hover:text-accent-glow transition-colors">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        <span>@massipannn</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                    </a>

                    <p class="text-xs text-text-muted leading-relaxed text-center">
                        {{ __('Popular billiard creator & reviewer producing entertaining equipment testing and cue sports videos.') }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-[11px] text-zinc-400 font-medium">Affiliated Creator</span>
                    <a href="https://www.instagram.com/massipannn/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-accent-gold hover:text-accent-glow transition-colors">
                        <span>Visit Instagram</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ==========================================
     SECTION 8: LUXURY FOOTER
     ========================================== -->
<footer class="bg-secondary/90 border-t border-border-accent/50 pt-12 sm:pt-16 pb-10 sm:pb-12 px-4 sm:px-6 lg:px-8 relative">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-10 pb-10 sm:pb-12 border-b border-border-accent/30">
            
            <!-- Brand Info Column -->
            <div class="sm:col-span-2 space-y-3 sm:space-y-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('Asset/Logo/Logo cue corner white.png') }}" alt="Cue Corner Official Logo" class="h-16 sm:h-24 w-auto object-contain max-w-[240px] sm:max-w-[280px]">
                </div>
                <p class="text-text-muted text-xs leading-relaxed max-w-sm">
                    {{ __('Official distributor of billiard equipment, carbon shafts, and accessories in Indonesia. Established 2024.') }}
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://www.instagram.com/cuecorner.id/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-primary border border-border-accent/60 flex items-center justify-center text-accent-gold hover:text-accent-glow hover:border-accent-glow transition-all">
                        <i class="fa-brands fa-instagram text-sm"></i>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-9 h-9 rounded-full bg-primary border border-border-accent/60 flex items-center justify-center text-accent-gold hover:text-accent-glow hover:border-accent-glow transition-all">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                    <a href="mailto:b2b@cuecorner.id" class="w-9 h-9 rounded-full bg-primary border border-border-accent/60 flex items-center justify-center text-accent-gold hover:text-accent-glow hover:border-accent-glow transition-all">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div>
                <h4 class="font-serif font-bold text-xs sm:text-sm uppercase tracking-wider text-accent-gold mb-3 sm:mb-4">{{ __('Navigation') }}</h4>
                <ul class="space-y-2 sm:space-y-2.5 text-xs text-text-muted">
                    <li><a href="#hero" class="hover:text-accent-glow transition-colors">{{ __('Home Banner') }}</a></li>
                    <li><a href="#about" class="hover:text-accent-glow transition-colors">{{ __('About & History') }}</a></li>
                    <li><a href="#portfolio" class="hover:text-accent-glow transition-colors">{{ __('Brand Portfolio') }}</a></li>
                    <li><a href="#media" class="hover:text-accent-glow transition-colors">{{ __('Media Powerhouse') }}</a></li>
                </ul>
            </div>

            <!-- Distribution Channels -->
            <div>
                <h4 class="font-serif font-bold text-xs sm:text-sm uppercase tracking-wider text-accent-gold mb-3 sm:mb-4">{{ __('Channels') }}</h4>
                <ul class="space-y-2 sm:space-y-2.5 text-xs text-text-muted">
                    <li><a href="https://www.tokopedia.com/cue-corner-indonesia" target="_blank" rel="noopener noreferrer" class="hover:text-accent-glow transition-colors">{{ __('Tokopedia Store') }} <i class="fa-solid fa-arrow-up-right-from-square text-[10px] ml-1"></i></a></li>
                    <li><a href="https://shopee.co.id/cuecornerindonesia" target="_blank" rel="noopener noreferrer" class="hover:text-accent-glow transition-colors">{{ __('Shopee Official') }} <i class="fa-solid fa-arrow-up-right-from-square text-[10px] ml-1"></i></a></li>
                    <li><a href="#sales-network" class="hover:text-accent-glow transition-colors">{{ __('Flagship Showroom') }}</a></li>
                    <li><a href="#ambassadors" class="hover:text-accent-glow transition-colors">{{ __('Brand Ambassadors') }}</a></li>
                    <li><a href="#affiliates" class="hover:text-accent-glow transition-colors">{{ __('Affiliates & Athletes') }}</a></li>
                </ul>
            </div>

            <!-- Showroom Location -->
            <div>
                <h4 class="font-serif font-bold text-xs sm:text-sm uppercase tracking-wider text-accent-gold mb-3 sm:mb-4">{{ __('Contact HQ') }}</h4>
                <div class="space-y-2 sm:space-y-2.5 text-xs text-text-muted">
                    <p class="flex items-start gap-2">
                        <i class="fa-solid fa-location-dot text-accent-gold mt-0.5 flex-shrink-0"></i>
                        <span>Ruko Mega Kuningan, Blok D No.10, Salembaran, Kec. Kosambi, Kabupaten Tangerang, Banten 15510</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-accent-gold flex-shrink-0"></i>
                        <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-accent-glow">+62 812 3456 7890</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-accent-gold flex-shrink-0"></i>
                        <a href="mailto:b2b@cuecorner.id" class="hover:text-accent-glow">b2b@cuecorner.id</a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-6 sm:pt-8 flex flex-col sm:flex-row items-center justify-between text-[11px] sm:text-xs text-text-muted/70 gap-3 text-center sm:text-left">
            <p>© 2026 Cue Corner. All Rights Reserved. Official Billiard Equipment Distributor in Indonesia.</p>
            <div class="flex items-center gap-4 sm:gap-6">
                <a href="#" class="hover:text-accent-gold transition-colors">{{ __('Privacy Policy') }}</a>
                <a href="#" class="hover:text-accent-gold transition-colors">{{ __('Terms of Distribution') }}</a>
                <a href="#" class="hover:text-accent-gold transition-colors">{{ __('Warranty Terms') }}</a>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
<script>
    window.switchAboutTab = function(tab) {
        const btnVision = document.getElementById('tab-btn-vision');
        const btnMission = document.getElementById('tab-btn-mission');
        const contentVision = document.getElementById('tab-content-vision');
        const contentMission = document.getElementById('tab-content-mission');

        if (!btnVision || !btnMission || !contentVision || !contentMission) return;

        if (tab === 'vision') {
            btnVision.className = 'pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-accent-glow border-b-2 border-accent-glow transition-all';
            btnMission.className = 'pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-text-muted hover:text-text-light border-b-2 border-transparent transition-all';
            contentVision.classList.remove('hidden');
            contentMission.classList.add('hidden');
        } else {
            btnMission.className = 'pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-accent-glow border-b-2 border-accent-glow transition-all';
            btnVision.className = 'pb-2.5 sm:pb-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-text-muted hover:text-text-light border-b-2 border-transparent transition-all';
            contentMission.classList.remove('hidden');
            contentVision.classList.add('hidden');
        }
    };

    window.baCurrentSlides = [0, 0, 0];
    window.setBaSlide = function(baIndex, slideIndex) {
        window.baCurrentSlides[baIndex] = slideIndex;
        const slide0 = document.querySelector(`.ba-slide-${baIndex}-0`);
        const slide1 = document.querySelector(`.ba-slide-${baIndex}-1`);
        const dot0 = document.getElementById(`dot-${baIndex}-0`);
        const dot1 = document.getElementById(`dot-${baIndex}-1`);

        if (slideIndex === 0) {
            if (slide0) { slide0.classList.remove('opacity-0', 'z-0'); slide0.classList.add('opacity-100', 'z-10'); }
            if (slide1) { slide1.classList.remove('opacity-100', 'z-10'); slide1.classList.add('opacity-0', 'z-0'); }
            if (dot0) dot0.className = 'h-2 w-5 rounded-full bg-accent-gold transition-all';
            if (dot1) dot1.className = 'h-2 w-2 rounded-full bg-white/40 hover:bg-white transition-all';
        } else {
            if (slide1) { slide1.classList.remove('opacity-0', 'z-0'); slide1.classList.add('opacity-100', 'z-10'); }
            if (slide0) { slide0.classList.remove('opacity-100', 'z-10'); slide0.classList.add('opacity-0', 'z-0'); }
            if (dot1) dot1.className = 'h-2 w-5 rounded-full bg-accent-gold transition-all';
            if (dot0) dot0.className = 'h-2 w-2 rounded-full bg-white/40 hover:bg-white transition-all';
        }
    };

    window.toggleBaSlide = function(baIndex) {
        const next = window.baCurrentSlides[baIndex] === 0 ? 1 : 0;
        window.setBaSlide(baIndex, next);
    };

    window.toggleBrandsView = function() {
        const hiddenBrands = document.getElementById('hidden-brands-grid');
        const toggleBtnText = document.getElementById('toggle-brands-text');
        const toggleBtnIcon = document.getElementById('toggle-brands-icon');

        if (!hiddenBrands || !toggleBtnText) return;

        if (hiddenBrands.classList.contains('hidden')) {
            hiddenBrands.classList.remove('hidden');
            if (window.gsap) {
                gsap.from(hiddenBrands, { y: 20, opacity: 0, duration: 0.5, ease: 'power2.out' });
            }
            toggleBtnText.innerText = "{{ __('Show Less') }}";
            if (toggleBtnIcon) toggleBtnIcon.className = "fa-solid fa-chevron-up text-xs";
        } else {
            hiddenBrands.classList.add('hidden');
            toggleBtnText.innerText = "{{ __('View All Brands') }}";
            if (toggleBtnIcon) toggleBtnIcon.className = "fa-solid fa-chevron-down text-xs";
            
            const portfolioSection = document.getElementById('portfolio-grid-anchor');
            if (portfolioSection) {
                portfolioSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };

    window.filterBrandCards = function(category) {
        const allCards = document.querySelectorAll('.brand-card-item');
        const hiddenContainer = document.getElementById('hidden-brands-grid');
        const toggleBtnContainer = document.getElementById('toggle-brands-container');

        const btnAll = document.getElementById('filter-btn-all');
        const btnExcl = document.getElementById('filter-btn-excl');
        const btnAuth = document.getElementById('filter-btn-auth');

        if (btnAll) btnAll.className = category === 'all' ? 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all' : 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (btnExcl) btnExcl.className = category === 'exclusive' ? 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all' : 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (btnAuth) btnAuth.className = category === 'authorized' ? 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-bold bg-accent-soft text-black transition-all' : 'px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';

        if (category !== 'all' && hiddenContainer && hiddenContainer.classList.contains('hidden')) {
            hiddenContainer.classList.remove('hidden');
            if (toggleBtnContainer) toggleBtnContainer.classList.add('hidden');
        } else if (category === 'all' && hiddenContainer && !hiddenContainer.classList.contains('hidden')) {
            if (toggleBtnContainer) toggleBtnContainer.classList.remove('hidden');
        }

        allCards.forEach(card => {
            if (category === 'all') {
                card.classList.remove('hidden');
            } else if (category === 'exclusive') {
                if (card.dataset.dealer === 'exclusive') {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            } else if (category === 'authorized') {
                if (card.dataset.dealer === 'authorized') {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            }
        });
    };

    window.initIgInsightsChart = function() {
        const ctx = document.getElementById('igInsightsChart');
        if (!ctx || typeof Chart === 'undefined') return;

        const monthlyLabels = ['28 Jul 25', 'Sep 25', '5 Nov 25', 'Jan 26', '13 Feb 26', 'Apr 26', '24 Mei 26', '28 Jul 26'];

        window.chartDataMap = {
            tayangan: {
                label: 'Impressions (Tayangan)',
                data: [400000, 1850000, 2200000, 1350000, 1100000, 950000, 1650000, 1595380],
                borderColor: '#fdce7e',
                backgroundColor: 'rgba(253, 206, 126, 0.15)',
            },
            jangkauan: {
                label: 'Reach (Jangkauan)',
                data: [7000, 32000, 39000, 24000, 19000, 17000, 31000, 26600],
                borderColor: '#c7a061',
                backgroundColor: 'rgba(199, 160, 97, 0.15)',
            },
            interaksi: {
                label: 'Content Engagement (Interaksi)',
                data: [1800, 7500, 9200, 5800, 4900, 6200, 8100, 5700],
                borderColor: '#cbbe90',
                backgroundColor: 'rgba(203, 190, 144, 0.15)',
            }
        };

        window.igChartInstance = new Chart(ctx, {
            type: 'line',
            data: {
                labels: monthlyLabels,
                datasets: [{
                    label: window.chartDataMap.tayangan.label,
                    data: window.chartDataMap.tayangan.data,
                    borderColor: window.chartDataMap.tayangan.borderColor,
                    backgroundColor: window.chartDataMap.tayangan.backgroundColor,
                    borderWidth: 3,
                    fill: true,
                    tension: 0.35,
                    pointRadius: 4,
                    pointHoverRadius: 7,
                    pointBackgroundColor: window.chartDataMap.tayangan.borderColor
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: true, labels: { color: '#e4e4e7', font: { family: 'Inter', size: 11 } } },
                    tooltip: {
                        backgroundColor: '#09090b',
                        titleColor: '#fdce7e',
                        bodyColor: '#ffffff',
                        borderColor: 'rgba(255,255,255,0.15)',
                        borderWidth: 1,
                        padding: 10
                    }
                },
                scales: {
                    x: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#a1a1aa', font: { family: 'Inter', size: 10 } } },
                    y: { grid: { color: 'rgba(255,255,255,0.08)' }, ticks: { color: '#a1a1aa', font: { family: 'Inter', size: 10 } } }
                }
            }
        });
    };

    window.updateIgChart = function(metric) {
        if (!window.igChartInstance || !window.chartDataMap || !window.chartDataMap[metric]) return;

        const btnTayangan = document.getElementById('chart-tab-tayangan');
        const btnJangkauan = document.getElementById('chart-tab-jangkauan');
        const btnInteraksi = document.getElementById('chart-tab-interaksi');

        if (btnTayangan) btnTayangan.className = metric === 'tayangan' ? 'px-2.5 sm:px-3 py-1.5 rounded-lg font-bold bg-accent-gold text-black transition-all flex-1 sm:flex-none' : 'px-2.5 sm:px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all flex-1 sm:flex-none';
        if (btnJangkauan) btnJangkauan.className = metric === 'jangkauan' ? 'px-2.5 sm:px-3 py-1.5 rounded-lg font-bold bg-accent-gold text-black transition-all flex-1 sm:flex-none' : 'px-2.5 sm:px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all flex-1 sm:flex-none';
        if (btnInteraksi) btnInteraksi.className = metric === 'interaksi' ? 'px-2.5 sm:px-3 py-1.5 rounded-lg font-bold bg-accent-soft text-black transition-all flex-1 sm:flex-none' : 'px-2.5 sm:px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all flex-1 sm:flex-none';

        const selected = window.chartDataMap[metric];
        window.igChartInstance.data.datasets[0].label = selected.label;
        window.igChartInstance.data.datasets[0].data = selected.data;
        window.igChartInstance.data.datasets[0].borderColor = selected.borderColor;
        window.igChartInstance.data.datasets[0].backgroundColor = selected.backgroundColor;
        window.igChartInstance.data.datasets[0].pointBackgroundColor = selected.borderColor;
        window.igChartInstance.update();
    };

    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(window.initIgInsightsChart, 300);
    });

    /* ==========================================
       PRODUCT CATEGORIES POPUP MODAL LOGIC
       ========================================== */
    window.categoryModalData = {
        'playing-cues': {
            title: "Playing Cues",
            badge: 'Playing Cue',
            desc: "Stik biliar presisi tinggi dengan sistem joint mikro dan kayu kualitas premium untuk tembakan konsisten.",
            highlights: [
                "Handcrafted Exotic Wood & Custom Inlays",
                "Micro-Engineered Precision Joint System",
                "Optimal Weight Distribution & Balance",
                "Compatible with Pro Carbon & Wood Shafts"
            ],
            images: [
                "{{ asset('Asset/Image/Kategori/Playing Cue/CN 1.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CN 2.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CN 3.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CN 4.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CP 1.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CP 2.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Playing Cue/CP 3.jpeg') }}"
            ]
        },
        'shafts': {
            title: "High-Performance Shafts",
            badge: 'Carbon',
            desc: "Shaft serat karbon & Canadian Maple low-deflection profesional untuk akurasi bola sempurna.",
            highlights: [
                "Aerospace-Grade Carbon Fiber Structure",
                "Ultra-Low Deflection Technology",
                "Multi-Layered Precision Leather Tip",
                "Silky Smooth Moisture-Resistant Finish"
            ],
            images: [
                "{{ asset('Asset/Image/Kategori/Shaft/Shaft 1.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Shaft/Shaft 2.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Shaft/Shaft 3.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Shaft/Shaft 4.jpeg') }}"
            ]
        },
        'break-cues': {
            title: "Break Cues",
            badge: 'Break Cue',
            desc: "Stik break berdampak tinggi dengan ferrule berdensitas tinggi untuk transfer energi pembuka yang eksplosif.",
            highlights: [
                "High-Density Power Ferrule & Phenolic Tip",
                "Maximum Energy Transfer Stiffness",
                "Ergonomic Non-Slip Grip Section",
                "Heavy-Duty Joint Reinforcement"
            ],
            images: [
                "{{ asset('Asset/Image/Kategori/Break/Break 1.jpeg') }}"
            ]
        },
        'jump-cues': {
            title: "Jump Cues",
            badge: 'Jump Cue',
            desc: "Stik jump presisi ultra-ringan yang dirancang untuk melompati bola rintangan secara mudah dan akurat.",
            highlights: [
                "Ultra-Light Weight Balanced Core",
                "Extra-Hard Phenolic Break/Jump Tip",
                "Quick-Release Extension Joint",
                "High-Angle Jump Accuracy Control"
            ],
            images: [
                "{{ asset('Asset/Image/Kategori/Jump/Jump.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Jump/Jump 2.jpeg') }}"
            ]
        },
        'accessories': {
            title: "Billiard Accessories",
            badge: 'Accessories & Care',
            desc: "Aksesoris biliar lengkap meliputi luxury cue case, chalk premium, sarung tangan biliar, tip pengganti, grip leather, dan kit balancer.",
            highlights: [
                "Luxury Shockproof Cue Cases",
                "High-Friction Master Billiard Chalk",
                "Breathable Pro Billiard Gloves",
                "Custom Leather Grips & Precision Tips",
                "Cue Weight Balancer System"
            ],
            images: [
                "{{ asset('Asset/Image/Kategori/Aksesoris/Case.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Case 2.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Chalk.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Glove.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Grip.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Tip.jpeg') }}",
                "{{ asset('Asset/Image/Kategori/Aksesoris/Balancer.jpeg') }}"
            ]
        }
    };

    let currentModalKey = null;
    let currentModalImgIndex = 0;

    window.openCategoryModal = function(key) {
        const data = window.categoryModalData[key];
        if (!data) return;

        currentModalKey = key;
        currentModalImgIndex = 0;

        const badgeEl = document.getElementById('modal-category-badge');
        const titleEl = document.getElementById('modal-category-title');
        const descEl = document.getElementById('modal-category-desc');

        if (badgeEl) badgeEl.innerText = data.badge;
        if (titleEl) titleEl.innerText = data.title;
        if (descEl) descEl.innerText = data.desc;

        // Set highlights
        const highlightsEl = document.getElementById('modal-category-highlights');
        if (highlightsEl) {
            highlightsEl.innerHTML = data.highlights.map(h => `
                <li class="flex gap-3 text-sm text-[#e5e5e7]"><span class="text-[#c7a061]">✔</span> ${h}</li>
            `).join('');
        }

        // Set WhatsApp link
        const waLink = document.getElementById('modal-wa-link');
        if (waLink) {
            waLink.href = `https://wa.me/628123456789?text=${encodeURIComponent('Halo Cue Corner, saya ingin bertanya mengenai produk kategori: ' + data.title)}`;
        }

        renderModalGallery();

        const modal = document.getElementById('category-modal');
        if (!modal) return;
        const modalCard = modal.querySelector('.relative.w-full');

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            if (modalCard) {
                modalCard.classList.remove('scale-95');
                modalCard.classList.add('scale-100');
            }
        });
    };

    window.closeCategoryModal = function() {
        const modal = document.getElementById('category-modal');
        if (!modal) return;
        const modalCard = modal.querySelector('.relative.w-full');

        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0', 'pointer-events-none');
        if (modalCard) {
            modalCard.classList.remove('scale-100');
            modalCard.classList.add('scale-95');
        }

        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }, 300);
    };

    function renderModalGallery() {
        if (!currentModalKey || !window.categoryModalData[currentModalKey]) return;
        const data = window.categoryModalData[currentModalKey];
        const imgs = data.images;

        if (currentModalImgIndex < 0) currentModalImgIndex = imgs.length - 1;
        if (currentModalImgIndex >= imgs.length) currentModalImgIndex = 0;

        const mainImg = document.getElementById('modal-main-image');
        const bgImg = document.getElementById('modal-bg-image');
        if (mainImg) mainImg.src = imgs[currentModalImgIndex];
        if (bgImg) bgImg.src = imgs[currentModalImgIndex];

        const counter = document.getElementById('modal-image-counter');
        if (counter) counter.innerText = `${currentModalImgIndex + 1} / ${imgs.length}`;

        // Thumbnails
        const thumbsContainer = document.getElementById('modal-thumbnails-container');
        if (thumbsContainer) {
            if (imgs.length <= 1) {
                thumbsContainer.classList.add('hidden');
            } else {
                thumbsContainer.classList.remove('hidden');
                thumbsContainer.innerHTML = imgs.map((imgSrc, idx) => `
                    <div onclick="setCategoryModalImage(${idx})" class="w-12 h-12 sm:w-16 sm:h-16 shrink-0 rounded-lg border-2 ${idx === currentModalImgIndex ? 'border-[#c7a061] opacity-100' : 'border-transparent opacity-60 hover:opacity-100'} overflow-hidden cursor-pointer transition-all">
                        <img src="${imgSrc}" class="w-full h-full object-cover">
                    </div>
                `).join('');
            }
        }

        // Hide/show prev/next buttons if only 1 image
        const prevBtn = document.getElementById('modal-prev-btn');
        const nextBtn = document.getElementById('modal-next-btn');
        if (prevBtn && nextBtn) {
            if (imgs.length <= 1) {
                prevBtn.classList.add('hidden');
                nextBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
                nextBtn.classList.remove('hidden');
            }
        }
    }

    window.setCategoryModalImage = function(idx) {
        currentModalImgIndex = idx;
        renderModalGallery();
    };

    window.prevCategoryModalImage = function() {
        currentModalImgIndex--;
        renderModalGallery();
    };

    window.nextCategoryModalImage = function() {
        currentModalImgIndex++;
        renderModalGallery();
    };

    /* ==========================================
       FULLSCREEN LIGHTBOX LOGIC WITH SLIDER
       ========================================== */
    window.lightboxImages = [];
    window.lightboxIndex = 0;

    window.openFullscreenImage = function(src) {
        let images = [];
        let initialIndex = 0;

        if (currentModalKey && window.categoryModalData && window.categoryModalData[currentModalKey]) {
            images = window.categoryModalData[currentModalKey].images;
            initialIndex = currentModalImgIndex;
        } else {
            const targetSrc = src || (document.getElementById('modal-main-image') ? document.getElementById('modal-main-image').src : '');
            if (targetSrc) {
                images = [targetSrc];
                initialIndex = 0;
            }
        }

        if (!images || images.length === 0) return;

        window.lightboxImages = images;
        window.lightboxIndex = initialIndex;

        updateLightboxView();

        const lightboxModal = document.getElementById('image-lightbox-modal');
        if (!lightboxModal) return;
        lightboxModal.classList.remove('hidden');

        requestAnimationFrame(() => {
            lightboxModal.classList.remove('opacity-0', 'pointer-events-none');
            lightboxModal.classList.add('opacity-100');
        });
    };

    function updateLightboxView() {
        const images = window.lightboxImages || [];
        const idx = window.lightboxIndex || 0;
        if (images.length === 0) return;

        const currentSrc = images[idx];
        const lightboxImg = document.getElementById('lightbox-image');
        const newTabBtn = document.getElementById('lightbox-newtab-btn');
        const counterText = document.getElementById('lightbox-counter-text');
        const prevBtn = document.getElementById('lightbox-prev-btn');
        const nextBtn = document.getElementById('lightbox-next-btn');
        const stripContainer = document.getElementById('lightbox-thumbnails-strip');

        if (lightboxImg) lightboxImg.src = currentSrc;
        if (newTabBtn) newTabBtn.href = currentSrc;
        if (counterText) counterText.innerText = `${idx + 1} / ${images.length}`;

        if (images.length <= 1) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
            if (stripContainer) stripContainer.classList.add('hidden');
        } else {
            if (prevBtn) prevBtn.style.display = '';
            if (nextBtn) nextBtn.style.display = '';
            if (stripContainer) {
                stripContainer.classList.remove('hidden');
                stripContainer.innerHTML = images.map((imgSrc, i) => `
                    <div onclick="setFullscreenImageIndex(${i})" class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg border-2 ${i === idx ? 'border-accent-gold scale-105 opacity-100 shadow-md' : 'border-white/20 opacity-50 hover:opacity-100'} overflow-hidden cursor-pointer transition-all shrink-0">
                        <img src="${imgSrc}" class="w-full h-full object-cover">
                    </div>
                `).join('');
            }
        }
    }

    window.setFullscreenImageIndex = function(idx) {
        if (!window.lightboxImages || idx < 0 || idx >= window.lightboxImages.length) return;
        window.lightboxIndex = idx;
        updateLightboxView();
        if (typeof window.setCategoryModalImage === 'function') {
            window.setCategoryModalImage(idx);
        }
    };

    window.prevFullscreenImage = function(e) {
        if (e && e.stopPropagation) e.stopPropagation();
        if (!window.lightboxImages || window.lightboxImages.length <= 1) return;
        window.lightboxIndex = (window.lightboxIndex - 1 + window.lightboxImages.length) % window.lightboxImages.length;
        updateLightboxView();
        if (typeof window.setCategoryModalImage === 'function') {
            window.setCategoryModalImage(window.lightboxIndex);
        }
    };

    window.nextFullscreenImage = function(e) {
        if (e && e.stopPropagation) e.stopPropagation();
        if (!window.lightboxImages || window.lightboxImages.length <= 1) return;
        window.lightboxIndex = (window.lightboxIndex + 1) % window.lightboxImages.length;
        updateLightboxView();
        if (typeof window.setCategoryModalImage === 'function') {
            window.setCategoryModalImage(window.lightboxIndex);
        }
    };

    window.closeFullscreenImage = function() {
        const lightboxModal = document.getElementById('image-lightbox-modal');
        if (!lightboxModal) return;

        lightboxModal.classList.remove('opacity-100');
        lightboxModal.classList.add('opacity-0', 'pointer-events-none');

        setTimeout(() => {
            lightboxModal.classList.add('hidden');
        }, 300);
    };

    // Keyboard & Touch Swipe Listeners
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('DOMContentLoaded', () => {
        const lightboxModal = document.getElementById('image-lightbox-modal');
        if (lightboxModal) {
            lightboxModal.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            lightboxModal.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const swipeThreshold = 40;
                if (touchEndX < touchStartX - swipeThreshold) {
                    window.nextFullscreenImage();
                } else if (touchEndX > touchStartX + swipeThreshold) {
                    window.prevFullscreenImage();
                }
            }, { passive: true });
        }
    });

    document.addEventListener('keydown', (e) => {
        const lightboxModal = document.getElementById('image-lightbox-modal');
        if (lightboxModal && !lightboxModal.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                window.closeFullscreenImage();
            } else if (e.key === 'ArrowLeft') {
                window.prevFullscreenImage();
            } else if (e.key === 'ArrowRight') {
                window.nextFullscreenImage();
            }
        }
    });

    /* ==========================================
       AFFILIATES NETWORK FILTER LOGIC
       ========================================== */
    window.filterAffiliates = function(category) {
        const cards = document.querySelectorAll('.affiliate-card-item');
        const tabAll = document.getElementById('affiliate-tab-all');
        const tabAthlete = document.getElementById('affiliate-tab-athlete');
        const tabInfluencer = document.getElementById('affiliate-tab-influencer');
        const tabMedia = document.getElementById('affiliate-tab-media');

        if (tabAll) tabAll.className = category === 'all' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabAthlete) tabAthlete.className = category === 'athlete' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabInfluencer) tabInfluencer.className = category === 'influencer' ? 'px-4 py-2 rounded-full text-xs font-bold bg-purple-500 text-white transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabMedia) tabMedia.className = category === 'media' ? 'px-4 py-2 rounded-full text-xs font-bold bg-emerald-500 text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';

        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    };
    /* ==========================================
       META INSIGHTS ACCOUNT SWITCHER LOGIC
       ========================================== */
    window.switchIgAccount = function(account) {
        const tabCc = document.getElementById('acct-tab-cuecorner');
        const tab360 = document.getElementById('acct-tab-triplesixty');
        const tabZen = document.getElementById('acct-tab-zencue');
        const subtitle = document.getElementById('ig-insights-subtitle');

        const activeCls = 'px-3 py-1.5 rounded-lg font-bold bg-accent-gold text-black transition-all';
        const inactiveCls = 'px-3 py-1.5 rounded-lg font-medium text-zinc-400 hover:text-white transition-all';

        if (tabCc) tabCc.className = account === 'cuecorner' ? activeCls : inactiveCls;
        if (tab360) tab360.className = account === 'triplesixty' ? activeCls : inactiveCls;
        if (tabZen) tabZen.className = account === 'zencue' ? activeCls : inactiveCls;

        if (account === 'triplesixty') {
            if (subtitle) subtitle.innerText = 'Official @triple.sixtyindonesia Meta Insights Verified Data (Views 2.2M | Reach 82.5K | Interactions 52.1K)';
            document.getElementById('stat-val-1').innerText = '2,2M';
            document.getElementById('stat-sub-1').innerText = '(2.200.000 total views)';
            document.getElementById('stat-growth-1').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100% vs prev';

            document.getElementById('stat-val-2').innerText = '82,5K';
            document.getElementById('stat-sub-2').innerText = '(82.500 accounts reached)';
            document.getElementById('stat-growth-2').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +635%';

            document.getElementById('stat-val-3').innerText = '52,1K';
            document.getElementById('stat-sub-3').innerText = '(52.100 content interactions)';
            document.getElementById('stat-growth-3').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100%';

            document.getElementById('stat-val-4').innerText = '29,4K';
            document.getElementById('stat-sub-4').innerText = '(29.400 profile visits)';
            document.getElementById('stat-growth-4').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +1.1K%';

            document.getElementById('stat-val-5').innerText = '441,8K';
            document.getElementById('stat-sub-5').innerText = '(Top Reel views)';
            document.getElementById('stat-growth-5').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> Top Video';

            document.getElementById('stat-val-6').innerText = '624';
            document.getElementById('stat-sub-6').innerText = '(500 Stories / 124 Posts)';
            document.getElementById('stat-growth-6').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +162%';
        } else if (account === 'zencue') {
            if (subtitle) subtitle.innerText = 'Official @zencuecorner Meta Insights Verified Data (Views 717.4K | Reach 18.8K | Interactions 4.3K)';
            document.getElementById('stat-val-1').innerText = '717,4K';
            document.getElementById('stat-sub-1').innerText = '(717.400 views)';
            document.getElementById('stat-growth-1').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100% vs prev';

            document.getElementById('stat-val-2').innerText = '18,8K';
            document.getElementById('stat-sub-2').innerText = '(18.800 accounts reached)';
            document.getElementById('stat-growth-2').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +50,2%';

            document.getElementById('stat-val-3').innerText = '4,3K';
            document.getElementById('stat-sub-3').innerText = '(4.300 content interactions)';
            document.getElementById('stat-growth-3').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +108,1K%';

            document.getElementById('stat-val-4').innerText = '18,2K';
            document.getElementById('stat-sub-4').innerText = '(18.211 non-followers)';
            document.getElementById('stat-growth-4').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> Organic Reach';

            document.getElementById('stat-val-5').innerText = '86,6K';
            document.getElementById('stat-sub-5').innerText = '(Zen Cue Custom video)';
            document.getElementById('stat-growth-5').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> Top Views';

            document.getElementById('stat-val-6').innerText = '536';
            document.getElementById('stat-sub-6').innerText = '(500 Stories / 36 Posts)';
            document.getElementById('stat-growth-6').innerHTML = '<i class="fa-solid fa-arrow-down text-[9px]"></i> -1,1%';
        } else {
            if (subtitle) subtitle.innerText = 'Official @cuecorner.id Meta Insights Performance Data (Period 28 Jul 2025 – 28 Jul 2026)';
            document.getElementById('stat-val-1').innerText = '11,1M';
            document.getElementById('stat-sub-1').innerText = '(11.095.380 impressions)';
            document.getElementById('stat-growth-1').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100% vs prev';

            document.getElementById('stat-val-2').innerText = '195,6K';
            document.getElementById('stat-sub-2').innerText = '(195.600 reached)';
            document.getElementById('stat-growth-2').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +336,1%';

            document.getElementById('stat-val-3').innerText = '49,2K';
            document.getElementById('stat-sub-3').innerText = '(49.200 interactions)';
            document.getElementById('stat-growth-3').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100%';

            document.getElementById('stat-val-4').innerText = '81K';
            document.getElementById('stat-sub-4').innerText = '(81.000 visits)';
            document.getElementById('stat-growth-4').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +11,5%';

            document.getElementById('stat-val-5').innerText = '4K';
            document.getElementById('stat-sub-5').innerText = '(Total followers)';
            document.getElementById('stat-growth-5').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +15,7K%';

            document.getElementById('stat-val-6').innerText = '191';
            document.getElementById('stat-sub-6').innerText = '(191 clicks)';
            document.getElementById('stat-growth-6').innerHTML = '<i class="fa-solid fa-arrow-up text-[9px]"></i> +100%';
        }
    };

    /* ==========================================
       VIDEO CATEGORY FILTER LOGIC
       ========================================== */
    window.filterVideoCategory = function(category) {
        const cards = document.querySelectorAll('.video-card-item');
        const tabAll = document.getElementById('video-tab-all');
        const tabCc = document.getElementById('video-tab-cuecorner');
        const tabMassipan = document.getElementById('video-tab-massipan');
        const tabBara = document.getElementById('video-tab-bara');

        if (tabAll) tabAll.className = category === 'all' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabCc) tabCc.className = category === 'cuecorner' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabMassipan) tabMassipan.className = category === 'massipan' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';
        if (tabBara) tabBara.className = category === 'bara' ? 'px-4 py-2 rounded-full text-xs font-bold bg-accent-gold text-black transition-all shadow-md' : 'px-4 py-2 rounded-full text-xs font-medium bg-zinc-900 text-zinc-400 border border-white/10 hover:text-white transition-all';

        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    };

    /* ==========================================
       FULLSCREEN VIDEO PLAYER MODAL LOGIC
       ========================================== */
    window.openVideoPlayerModal = function(videoSrc, title, posterSrc) {
        const modal = document.getElementById('video-player-modal');
        const modalVideo = document.getElementById('video-modal-element');
        const modalSource = document.getElementById('video-modal-source');
        const modalTitle = document.getElementById('video-modal-title');

        if (modal && modalVideo && modalSource) {
            if (modalTitle) modalTitle.innerText = title || 'Video Overview';
            modalSource.src = videoSrc;
            if (posterSrc) modalVideo.poster = posterSrc;
            modalVideo.load();
            
            modal.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
            modal.classList.add('flex', 'opacity-100', 'pointer-events-auto');
            
            const cardVideos = document.querySelectorAll('.video-card-item video');
            cardVideos.forEach(v => v.pause());

            modalVideo.play().catch(() => {});
        }
    };

    window.closeVideoPlayerModal = function() {
        const modal = document.getElementById('video-player-modal');
        const modalVideo = document.getElementById('video-modal-element');

        if (modal) {
            if (modalVideo) {
                modalVideo.pause();
            }
            modal.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => {
                modal.classList.remove('flex', 'opacity-100', 'pointer-events-auto');
                modal.classList.add('hidden');
            }, 300);
        }
    };
</script>

<!-- Plyr Media Player Library CDN Script -->
<script src="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.polyfilled.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Plyr.js Custom Media Player Library on all internal video cards
        const players = Plyr.setup('.js-plyr-player', {
            controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
            tooltips: { controls: true, seek: true },
            hideControls: true,
            resetOnEnd: true
        });

        // Auto-pause other videos when one starts playing
        players.forEach(player => {
            player.on('play', () => {
                players.forEach(p => {
                    if (p !== player) p.pause();
                });
            });
        });

        window.plyrInstanceArray = players;
    });
</script>
@endpush

@endsection
