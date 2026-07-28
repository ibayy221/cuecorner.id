/**
 * Cue Corner GSAP Animation & Interactive Controller
 */

export function initAnimations() {
    // Ensure GSAP and ScrollTrigger are available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger CDN not loaded yet.');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // ========================================================
    // 1. Lenis Smooth Scroll Setup (if available)
    // ========================================================
    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smoothWheel: true,
            touchMultiplier: 2,
        });

        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);
    }

    // ========================================================
    // 2. Hero Section Animations & Floating Parallax
    // ========================================================
    const heroElements = document.querySelectorAll('.gsap-hero-anim');
    if (heroElements.length > 0) {
        gsap.from(heroElements, {
            y: 40,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: 'power3.out',
            delay: 0.2
        });
    }

    // Hero Floating Background Parallax
    const heroBg = document.querySelector('.hero-parallax-bg');
    if (heroBg) {
        gsap.to(heroBg, {
            y: 120,
            ease: 'none',
            scrollTrigger: {
                trigger: '#hero',
                start: 'top top',
                end: 'bottom top',
                scrub: 0.5
            }
        });
    }

    // ========================================================
    // 3. Staggered Section Reveals (.gsap-reveal)
    // ========================================================
    const revealElements = document.querySelectorAll('.gsap-reveal');
    revealElements.forEach((el) => {
        gsap.fromTo(el,
            { y: 30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 92%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // Staggered Core Values Cards
    const valueCards = document.querySelectorAll('.gsap-value-card');
    if (valueCards.length > 0) {
        gsap.fromTo(valueCards,
            { y: 30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.12,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: valueCards[0].parentElement,
                    start: 'top 90%'
                }
            }
        );
    }

    // Refresh ScrollTrigger positions after layout rendering
    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 400);

    // ========================================================
    // 4. Media Powerhouse GSAP Numerical Counter Rollup
    // ========================================================
    const counters = document.querySelectorAll('.gsap-counter');
    counters.forEach((counter) => {
        const targetVal = parseFloat(counter.getAttribute('data-target') || '0');
        const suffix = counter.getAttribute('data-suffix') || '';

        const obj = { val: 0 };

        gsap.to(obj, {
            val: targetVal,
            duration: 2.5,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: counter,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            onUpdate: () => {
                counter.innerText = Math.floor(obj.val) + suffix;
            }
        });
    });

    // ========================================================
    // 5. Infinite Brand Partners Marquee Scroll
    // ========================================================

    const partnerMarquee = document.getElementById('partners-marquee');
    if (partnerMarquee) {
        gsap.to(partnerMarquee, {
            xPercent: -50,
            repeat: -1,
            duration: 28,
            ease: 'none'
        });
    }
}

// ========================================================
// 6. Interactive Vision & Mission Tab Switcher
// ========================================================
window.switchAboutTab = function(tab) {
    const btnVision = document.getElementById('tab-btn-vision');
    const btnMission = document.getElementById('tab-btn-mission');
    const contentVision = document.getElementById('tab-content-vision');
    const contentMission = document.getElementById('tab-content-mission');

    if (!btnVision || !btnMission || !contentVision || !contentMission) return;

    if (tab === 'vision') {
        contentVision.classList.remove('hidden');
        contentMission.classList.add('hidden');

        btnVision.className = 'pb-3 text-sm font-bold uppercase tracking-wider text-accent-glow border-b-2 border-accent-glow transition-all';
        btnMission.className = 'pb-3 text-sm font-bold uppercase tracking-wider text-text-muted hover:text-text-light border-b-2 border-transparent transition-all';
    } else {
        contentMission.classList.remove('hidden');
        contentVision.classList.add('hidden');

        btnMission.className = 'pb-3 text-sm font-bold uppercase tracking-wider text-accent-glow border-b-2 border-accent-glow transition-all';
        btnVision.className = 'pb-3 text-sm font-bold uppercase tracking-wider text-text-muted hover:text-text-light border-b-2 border-transparent transition-all';
    }
};

// ========================================================
// 7. B2B Lead Form Interactive Submission Simulation
// ========================================================
window.handleB2BSubmit = function(e) {
    e.preventDefault();
    const btn = document.getElementById('b2b-submit-btn');
    const successMsg = document.getElementById('b2b-success-msg');

    if (btn) {
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Submitting...';

        setTimeout(() => {
            btn.classList.add('hidden');
            if (successMsg) {
                successMsg.classList.remove('hidden');
                gsap.from(successMsg, { y: 15, opacity: 0, duration: 0.6, ease: 'power2.out' });
            }
        }, 1200);
    }
};

// ========================================================
// 8. Brand Ambassador Card Image Carousel Switcher
// ========================================================
window.setBaSlide = function(cardIndex, slideIndex) {
    const slide0 = document.querySelector(`.ba-slide-${cardIndex}-0`);
    const slide1 = document.querySelector(`.ba-slide-${cardIndex}-1`);
    const dot0 = document.getElementById(`dot-${cardIndex}-0`);
    const dot1 = document.getElementById(`dot-${cardIndex}-1`);

    if (!slide0 || !slide1) return;

    if (slideIndex === 0) {
        slide0.classList.remove('opacity-0', 'z-0');
        slide0.classList.add('opacity-100', 'z-10');
        slide1.classList.remove('opacity-100', 'z-10');
        slide1.classList.add('opacity-0', 'z-0');

        if (dot0) {
            dot0.classList.remove('bg-white/40', 'w-2');
            dot0.classList.add('bg-accent-gold', 'w-5');
        }
        if (dot1) {
            dot1.classList.remove('bg-accent-gold', 'w-5');
            dot1.classList.add('bg-white/40', 'w-2');
        }
    } else {
        slide1.classList.remove('opacity-0', 'z-0');
        slide1.classList.add('opacity-100', 'z-10');
        slide0.classList.remove('opacity-100', 'z-10');
        slide0.classList.add('opacity-0', 'z-0');

        if (dot1) {
            dot1.classList.remove('bg-white/40', 'w-2');
            dot1.classList.add('bg-accent-gold', 'w-5');
        }
        if (dot0) {
            dot0.classList.remove('bg-accent-gold', 'w-5');
            dot0.classList.add('bg-white/40', 'w-2');
        }
    }
};

window.toggleBaSlide = function(cardIndex) {
    const slide0 = document.querySelector(`.ba-slide-${cardIndex}-0`);
    if (!slide0) return;
    const isSlide0Active = slide0.classList.contains('opacity-100');
    setBaSlide(cardIndex, isSlide0Active ? 1 : 0);
};

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    initAnimations();
});
