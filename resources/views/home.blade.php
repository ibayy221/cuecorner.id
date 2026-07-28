@extends('layouts.app')

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
                    <span class="text-[10px] sm:text-[11px] font-semibold uppercase tracking-[0.2em] text-accent-gold">{{ __('Official Distributor • Est. 2024') }}</span>
                </div>

                <!-- Hero Headline -->
                <h1 class="gsap-hero-anim font-serif text-2xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-[1.18] mb-3 sm:mb-4 drop-shadow-md">
                    {{ __('Elevating Indonesia\'s') }} <br />
                    <span class="text-gold-gradient font-extrabold italic">{{ __('Billiard Experience') }}</span>
                </h1>

                <!-- Subheadline -->
                <p class="gsap-hero-anim text-xs sm:text-sm text-zinc-300 font-normal leading-relaxed mb-5 sm:mb-6 max-w-xl">
                    {{ __('Official distributor of premium billiard equipment, carbon shafts, and luxury accessories in Indonesia, supported by Triple Sixty media.') }}
                </p>

                <!-- Trust Badges Bar -->
                <div class="gsap-hero-anim border-t border-white/10 pt-4 grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3">
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('100%') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Official Warranty') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('Official') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Distributor in ID') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('10M+') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Media Reach') }}</span>
                    </div>
                    <div>
                        <span class="font-serif text-base sm:text-xl font-bold text-accent-gold block">{{ __('Nationwide') }}</span>
                        <span class="text-[9px] sm:text-[10px] text-zinc-400 uppercase tracking-wider">{{ __('Reseller Network') }}</span>
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
                        <span class="text-[11px] sm:text-xs text-text-muted uppercase tracking-wider">{{ __('Jakarta, Indonesia') }}</span>
                    </div>
                </div>
                <p class="text-xs sm:text-sm text-text-light/90 leading-relaxed mb-3 sm:mb-4">
                    {{ __('Founded with a passion for cue sports precision, Cue Corner evolved from a retail operation in 2024 into an official wholesale distributor for global billiard brands in Indonesia.') }}
                </p>
                <p class="text-xs sm:text-sm text-text-muted leading-relaxed">
                    {{ __('We connect global manufacturers with the Indonesian billiard community, offering authentic manufacturer warranties and active marketing support.') }}
                </p>
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
                            "{{ __('To deliver complete B2B support—combining authentic inventory, priority stock delivery, official warranties, and media promotion.') }}"
                        </p>
                        <ul class="space-y-2.5 sm:space-y-3 pt-1 sm:pt-2">
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Provide competitive wholesale margins for authorized resellers.') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-text-muted">
                                <i class="fa-solid fa-check text-accent-gold mt-1 text-xs"></i>
                                <span>{{ __('Drive continuous brand awareness through our ZenQ & Triple Sixty media channels.') }}</span>
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
     SECTION 3: MANAGEMENT TEAM (Leadership)
     ========================================== -->
<section id="leadership" class="py-12 sm:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 relative bg-secondary/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 gsap-reveal">
            <h2 class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-accent-soft mb-2 sm:mb-3">{{ __('Executive Leadership') }}</h2>
            <h3 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Driven by') }} <span class="text-gold-gradient">{{ __('Visionary Minds') }}</span>
            </h3>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Our leadership team combines deep industry expertise, strategic purchasing power, and aggressive digital branding.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 max-w-4xl mx-auto">
            
            <!-- Executive 1: Steven (CEO) -->
            <div class="card-luxury p-6 sm:p-8 rounded-2xl relative group gsap-reveal">
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 sm:gap-6">
                    <div class="relative w-28 h-28 sm:w-32 sm:h-32 rounded-2xl overflow-hidden border-2 border-accent-gold/50 shadow-lg group-hover:border-accent-glow transition-all duration-300 flex-shrink-0 bg-black">
                        <img src="{{ asset('Asset/Image/Profile/ko ssteven.png') }}" alt="Steven - CEO Cue Corner" class="w-full h-full object-cover object-top group-hover:scale-108 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    </div>
                    
                    <div class="text-center sm:text-left flex-1">
                        <span class="inline-block px-2.5 py-1 rounded-full bg-accent-gold/20 text-accent-glow text-[10px] sm:text-[11px] font-bold uppercase tracking-wider mb-2 border border-accent-gold/30">
                            {{ __('Chief Executive Officer (CEO)') }}
                        </span>
                        <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1">Steven</h4>
                        <p class="text-[11px] sm:text-xs text-accent-soft mb-3 sm:mb-4">{{ __('Head of Corporate Vision, Brand Positioning & Media Ecosystem') }}</p>
                        
                        <p class="text-xs text-text-muted leading-relaxed mb-4">
                            {{ __('Directs Cue Corner’s overall corporate vision, market strategy, brand positioning, digital marketing channels, sales infrastructure, and strategic ecosystem.') }}
                        </p>

                        <div class="flex items-center justify-center sm:justify-start gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/60 border border-border-accent/50 flex items-center justify-center text-accent-gold text-xs">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="w-8 h-8 rounded-full bg-primary/60 border border-border-accent/50 flex items-center justify-center text-accent-gold text-xs">
                                <i class="fa-solid fa-bullhorn"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Executive 2: Calvin (CFO) -->
            <div class="card-luxury p-6 sm:p-8 rounded-2xl relative group gsap-reveal">
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 sm:gap-6">
                    <div class="relative w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden border-2 border-accent-gold/50 shadow-lg group-hover:border-accent-glow transition-all duration-300 flex-shrink-0 bg-primary/80 flex items-center justify-center">
                        <i class="fa-solid fa-user-tie text-4xl sm:text-5xl text-accent-gold/70 group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent"></div>
                    </div>
                    
                    <div class="text-center sm:text-left flex-1">
                        <span class="inline-block px-2.5 py-1 rounded-full bg-accent-gold/20 text-accent-glow text-[10px] sm:text-[11px] font-bold uppercase tracking-wider mb-2 border border-accent-gold/30">
                            {{ __('Chief Financial Officer (CFO)') }}
                        </span>
                        <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light mb-1">Calvin</h4>
                        <p class="text-[11px] sm:text-xs text-accent-soft mb-3 sm:mb-4">{{ __('Head of Corporate Finance & Strategic Purchasing') }}</p>
                        
                        <p class="text-xs text-text-muted leading-relaxed mb-4">
                            {{ __('Oversees corporate finance, capital allocation, international supply chain procurement, and strategic manufacturer distribution agreements.') }}
                        </p>

                        <div class="flex items-center justify-center sm:justify-start gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/60 border border-border-accent/50 flex items-center justify-center text-accent-gold text-xs">
                                <i class="fa-solid fa-coins"></i>
                            </span>
                            <span class="w-8 h-8 rounded-full bg-primary/60 border border-border-accent/50 flex items-center justify-center text-accent-gold text-xs">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                            </span>
                        </div>
                    </div>
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
                <span>{{ __('100% Guaranteed Authenticity & Official Warranty') }}</span>
            </div>
            <h2 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-text-light">
                {{ __('Exclusive') }} <span class="text-gold-gradient">{{ __('Brand Portfolio') }}</span>
            </h2>
            <p class="text-text-muted mt-3 sm:mt-4 text-xs sm:text-base">
                {{ __('Cue Corner collaborates with official global billiard manufacturers to supply high-performance equipment in Indonesia.') }}
            </p>
        </div>

        <!-- Exclusive Flagship Distribution Showcase Banner (Mirai & Triple Sixty) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 mb-12 sm:mb-16 gsap-reveal">
            
            <!-- Flagship Brand 1: Mirai -->
            <div class="card-luxury p-6 sm:p-8 rounded-2xl sm:rounded-3xl relative overflow-hidden border border-accent-gold/40 flex flex-col justify-between group hover:border-accent-gold transition-all duration-300">
                <div class="space-y-3 sm:space-y-4 mb-5 sm:mb-6">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-accent-soft bg-zinc-900/90 border border-accent-soft/40 px-2.5 py-1 rounded-full">{{ __('Authorized Dealer') }}</span>
                        <a href="https://miraicue.com/" target="_blank" rel="noopener noreferrer" class="text-xs text-accent-gold hover:text-white flex items-center gap-1">
                            <span>miraicue.com</span> <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-text-light">Mirai Billiards</h3>
                    <p class="text-text-muted text-xs sm:text-sm leading-relaxed">
                        {{ __('Engineered for elite accuracy, featuring aerospace-grade carbon fiber shafts, precision wood crafting, and micro-engineered joints preferred by international champions.') }}
                    </p>
                </div>

                <div class="w-full py-5 sm:py-6 rounded-xl sm:rounded-2xl bg-black border border-white/15 flex flex-col items-center justify-center group-hover:scale-[1.02] transition-transform">
                    <img src="{{ asset('Asset/Image/Logo partner/Mirai.png') }}" alt="Mirai" class="h-12 sm:h-16 w-auto max-w-[160px] sm:max-w-[200px] object-contain">
                </div>
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
                ['name' => 'Zen Cue', 'logo' => 'Zen Custom Cue.png', 'url' => 'https://www.instagram.com/cuecorner.id/', 'type' => 'exclusive', 'has_web' => false],
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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            
            <!-- Category 1: Playing Cues (Butt) -->
            <div class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl">
                <div class="relative w-full h-48 sm:h-64 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Butt.jpeg') }}" alt="Playing Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Playing Cue
                    </span>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-lg sm:text-xl font-bold text-text-light mb-1.5 group-hover:text-accent-glow transition-colors">{{ __('Playing Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed">
                            {{ __('High-precision handcrafted playing cues with micro-joint system and premium quality wood for consistent shots.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Category 2: High-Performance Shafts (Shaft) -->
            <div class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl">
                <div class="relative w-full h-48 sm:h-64 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Shaft.jpg') }}" alt="High-Performance Shafts" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Carbon & Wood Shaft
                    </span>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-lg sm:text-xl font-bold text-text-light mb-1.5 group-hover:text-accent-glow transition-colors">{{ __('High-Performance Shafts') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed">
                            {{ __('Pro-grade carbon fiber shafts and low-deflection select Canadian Maple wood for perfect ball accuracy.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Category 3: Break Cues (Break) -->
            <div class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl">
                <div class="relative w-full h-48 sm:h-64 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/Break.jpeg') }}" alt="Break Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Break Cue
                    </span>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-lg sm:text-xl font-bold text-text-light mb-1.5 group-hover:text-accent-glow transition-colors">{{ __('Break Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed">
                            {{ __('High-impact break cues engineered with durable high-density ferrules for explosive opening breaks.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Category 4: Jump Cues (jump) -->
            <div class="card-luxury rounded-2xl overflow-hidden group hover:border-accent-gold/70 transition-all duration-300 flex flex-col justify-between !bg-black border border-white/10 shadow-2xl">
                <div class="relative w-full h-48 sm:h-64 overflow-hidden bg-zinc-950 border-b border-white/10">
                    <img src="{{ asset('Asset/Image/Kategori/jump.jpeg') }}" alt="Jump Cues" class="w-full h-full object-cover object-center group-hover:scale-108 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-85"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-accent-gold/40 text-accent-glow text-[10px] uppercase font-bold tracking-wider">
                        Jump Cue
                    </span>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <h4 class="font-serif text-lg sm:text-xl font-bold text-text-light mb-1.5 group-hover:text-accent-glow transition-colors">{{ __('Jump Cues') }}</h4>
                        <p class="text-xs text-text-muted leading-relaxed">
                            {{ __('Ultra-light precision jump cues designed for effortless cue ball elevation over obstacle balls accurately.') }}
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mb-12 sm:mb-16">
            
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
                    {{ __('Follow the official Cue Corner Indonesia social media for exclusive cue product releases, national tournament coverage, and equipment specification breakdowns.') }}
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-accent-gold group-hover:text-accent-glow">
                    <span>{{ __('Visit Instagram') }}</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </a>

            <!-- Channel 2: Triple Sixty -->
            <a href="https://triple-60.com/" target="_blank" rel="noopener noreferrer" class="card-luxury p-6 sm:p-8 rounded-2xl relative overflow-hidden gsap-reveal border-l-4 border-l-accent-gold group hover:border-accent-gold transition-all duration-300 block">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3.5 sm:gap-4">
                        <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-xl bg-black border border-white/15 p-2 flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-105 transition-transform">
                            <img src="{{ asset('Asset/Image/Logo partner/Triple Sixty.png') }}" alt="Triple Sixty Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light group-hover:text-accent-glow transition-colors">Triple Sixty</h4>
                            <span class="text-[10px] sm:text-xs text-accent-gold uppercase tracking-wider font-semibold">{{ __('Official Media & Broadcast Partner') }}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs sm:text-sm text-text-muted group-hover:text-accent-glow transition-colors"></i>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-4">
                    {{ __('Official digital billiard media partner delivering tournament content, cue reviews, and exclusive Cue Corner brand promotions.') }}
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-accent-gold group-hover:text-accent-glow">
                    <span>{{ __('Visit Triple Sixty Website') }}</span>
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
                        {{ __('1-Year Impressions & Ecosystem Performance') }}
                    </h4>
                    <p class="text-[11px] sm:text-xs text-text-muted mt-1">
                        {{ __('Official @cuecorner.id Meta Insights Performance Data (Period 1 Jan 2026 – 28 Jul 2026)') }}
                    </p>
                </div>

                <div class="flex items-center gap-2 bg-zinc-900/90 px-3.5 sm:px-4 py-2 rounded-xl border border-white/10 text-[11px] sm:text-xs text-zinc-300">
                    <i class="fa-solid fa-calendar-check text-accent-gold"></i>
                    <span class="font-semibold">{{ __('This Year: 1 Jan 2026 – 28 Jul 2026') }}</span>
                </div>
            </div>

            <!-- 6 Key Insight Stat Cards Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-5 mb-8 sm:mb-10">
                
                <!-- Card 1: Tayangan -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Impressions') }}</span>
                        <i class="fa-solid fa-eye text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-gold-gradient">5,1M</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">(5.111.618 {{ __('impressions') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-zinc-400 font-semibold mt-1">
                        <i class="fa-solid fa-arrow-down text-[9px]"></i> 14.5% vs prev
                    </div>
                </div>

                <!-- Card 2: Jangkauan -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Reach') }}</span>
                        <i class="fa-solid fa-users text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-gold-gradient">139,2K</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">({{ __('Total accounts reached') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +33,7%
                    </div>
                </div>

                <!-- Card 3: Interaksi Konten -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Engagement') }}</span>
                        <i class="fa-solid fa-heart text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-glow">37,4K</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">({{ __('Content interactions') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +218%
                    </div>
                </div>

                <!-- Card 4: Kunjungan Profil -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Profile Visits') }}</span>
                        <i class="fa-solid fa-user-check text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-soft">43,6K</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">({{ __('Instagram profile') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-zinc-400 font-semibold mt-1">
                        {{ __('Organic Profile') }}
                    </div>
                </div>

                <!-- Card 5: Pengikut -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Followers') }}</span>
                        <i class="fa-solid fa-user-plus text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-glow">2,3K</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">({{ __('New community') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> +42,4%
                    </div>
                </div>

                <!-- Card 6: Klik Tautan -->
                <div class="p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-zinc-950 border border-white/10 flex flex-col justify-between hover:border-accent-gold/60 transition-all shadow-lg">
                    <span class="text-[10px] sm:text-[11px] text-text-muted font-medium uppercase tracking-wider mb-1.5 flex items-center justify-between">
                        <span>{{ __('Link Clicks') }}</span>
                        <i class="fa-solid fa-link text-accent-gold/80"></i>
                    </span>
                    <div class="my-1.5 sm:my-2">
                        <div class="font-serif text-2xl sm:text-3xl font-extrabold text-accent-soft">191</div>
                        <span class="text-[9px] sm:text-[10px] text-text-muted">({{ __('Conversion link') }})</span>
                    </div>
                    <div class="inline-flex items-center gap-1 text-[10px] sm:text-[11px] text-accent-gold font-semibold mt-1">
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
                        <p class="text-[11px] sm:text-xs text-text-muted mt-0.5">{{ __('Monthly Activity Metrics (January - July 2026)') }}</p>
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
                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-text-light">{{ __('Official E-Commerce Platforms') }}</h4>
                </div>
                <p class="text-text-muted text-xs sm:text-sm leading-relaxed mb-6">
                    {{ __('Cue Corner operates official flagship stores on Indonesia\'s top online marketplaces, ensuring 24/7 accessibility and fast dispatch.') }}
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Tokopedia Card -->
                    <a href="https://www.tokopedia.com/cue-corner-indonesia" target="_blank" rel="noopener noreferrer" class="p-4 sm:p-5 rounded-xl bg-secondary/80 border border-border-accent/60 flex items-center justify-between group hover:border-accent-gold hover:scale-[1.02] transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-zinc-900/90 border border-white/10 p-2 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <img src="{{ asset('Asset/Logo/Marketplace/Tokopedia.png') }}" alt="Tokopedia" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h5 class="font-bold text-text-light text-sm">Tokopedia</h5>
                                <span class="text-[10px] text-accent-gold uppercase tracking-wider font-semibold">{{ __('Official Store') }}</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs text-text-muted group-hover:text-accent-glow"></i>
                    </a>

                    <!-- Shopee Card -->
                    <a href="https://shopee.co.id/cuecornerindonesia" target="_blank" rel="noopener noreferrer" class="p-4 sm:p-5 rounded-xl bg-secondary/80 border border-border-accent/60 flex items-center justify-between group hover:border-accent-gold hover:scale-[1.02] transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-xl bg-zinc-900/90 border border-white/10 p-2 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <img src="{{ asset('Asset/Logo/Marketplace/Shopee.png') }}" alt="Shopee" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h5 class="font-bold text-text-light text-sm">Shopee</h5>
                                <span class="text-[10px] text-accent-gold uppercase tracking-wider font-semibold">{{ __('Shopee Mall / Official') }}</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs text-text-muted group-hover:text-accent-glow"></i>
                    </a>
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
                    <li><a href="#leadership" class="hover:text-accent-glow transition-colors">{{ __('Executive Team') }}</a></li>
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

        const monthlyLabels = ['Jan 1', 'Feb 20', 'Apr 11', 'May 31', 'Jul 20'];

        window.chartDataMap = {
            tayangan: {
                label: 'Impressions',
                data: [35000, 32000, 110000, 48000, 52000],
                borderColor: '#fdce7e',
                backgroundColor: 'rgba(253, 206, 126, 0.15)',
            },
            jangkauan: {
                label: 'Reach',
                data: [2500, 4200, 11500, 5200, 7800],
                borderColor: '#c7a061',
                backgroundColor: 'rgba(199, 160, 97, 0.15)',
            },
            interaksi: {
                label: 'Content Engagement',
                data: [150, 320, 1200, 480, 650],
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
</script>
@endpush

@section('content')
