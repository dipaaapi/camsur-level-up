<script>
    function provinceHistoryNavigation() {
        return {
            active: 'overview',
            sections: [
                { id: 'overview',    label: 'Overview' },
                { id: 'ibalon',      label: 'Ancient Ibalon' },
                { id: 'colonial',    label: 'Colonial Era' },
                { id: 'timeline',    label: 'Timeline' },
                { id: 'penafrancia', label: 'Peñafrancia' },
                { id: 'revolution',  label: 'Revolution & War' },
                { id: 'modern',      label: 'Modern CamSur' },
                { id: 'synthesis',   label: 'Synthesis' },
                { id: 'sources',     label: 'Sources' },
            ],
            init() {
                const observer = new IntersectionObserver((entries) => {
                    const visible = entries.filter(e => e.isIntersecting)
                        .sort((a, b) => b.intersectionRatio - a.intersectionRatio);
                    if (visible.length) this.active = visible[0].target.id;
                }, { rootMargin: '-25% 0px -60% 0px', threshold: [0, 0.1, 0.25, 0.5] });
                this.sections.forEach(s => {
                    const el = document.getElementById(s.id);
                    if (el) observer.observe(el);
                });
            },
        };
    }

    function animatedHistoryStat(target, decimals = 0, useGrouping = false) {
        return {
            current: 0, target, decimals, useGrouping, done: false,
            animate() {
                if (this.done) return;
                this.done = true;
                const start = performance.now(), dur = 1500;
                const step = (t) => {
                    const p = Math.min(1, (t - start) / dur);
                    this.current = this.target * (1 - Math.pow(1 - p, 3));
                    if (p < 1) requestAnimationFrame(step); else this.current = this.target;
                };
                requestAnimationFrame(step);
            },
            display() {
                const v = Number(this.current).toFixed(this.decimals);
                return this.useGrouping
                    ? Number(v).toLocaleString(undefined, { minimumFractionDigits: this.decimals, maximumFractionDigits: this.decimals })
                    : v;
            },
        };
    }

    function imageLightboxModal() {
        return {
            isOpen: false,
            isLoading: true,
            imageSrc: '',
            altText: '',
            init() {
                window.addEventListener('open-image-modal', (e) => {
                    this.isLoading = true;
                    this.imageSrc = e.detail.src;
                    this.altText = e.detail.alt || 'Historical Archival Media';
                    this.isOpen = true;
                    document.body.classList.add('overflow-hidden');
                });
            },
            close() {
                this.isOpen = false;
                this.isLoading = false;
                document.body.classList.remove('overflow-hidden');
            }
        };
    }

    // Attach click-to-preview lightbox & skeleton loader shimmer to all historical images automatically
    document.addEventListener('DOMContentLoaded', () => {
        const mainContent = document.getElementById('main-content');
        if (!mainContent) return;

        mainContent.querySelectorAll('img').forEach((img) => {
            // Add zoom-in indicator & title
            img.style.cursor = 'zoom-in';
            img.setAttribute('title', img.alt ? `${img.alt} (Click to expand full view)` : 'Click to expand full view');

            // Skeleton loader for page images
            const parent = img.parentElement;
            if (parent && !parent.classList.contains('skeleton-parent')) {
                parent.classList.add('skeleton-parent', 'relative');
                
                // Only attach shimmer if image is really still downloading
                if (!img.complete) {
                    const skeleton = document.createElement('div');
                    skeleton.className = 'skeleton-shimmer absolute inset-0 rounded-2xl pointer-events-none z-10';
                    parent.appendChild(skeleton);

                    img.addEventListener('load', () => {
                        skeleton.remove();
                    }, { once: true });

                    img.addEventListener('error', () => {
                        skeleton.remove();
                    }, { once: true });
                }
            }

            // Click event to open lightbox modal
            img.addEventListener('click', (e) => {
                e.stopPropagation();
                window.dispatchEvent(new CustomEvent('open-image-modal', {
                    detail: {
                        src: img.currentSrc || img.src,
                        alt: img.alt || 'Historical Archival Media'
                    }
                }));
            });
        });
    });
</script>

<style>
    html { scroll-behavior: smooth; }
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    [x-cloak] { display: none !important; }

    /* Skeleton shimmer animation like modern social media - softened and low-contrast opacity */
    .skeleton-shimmer {
        background: linear-gradient(
            90deg,
            rgba(203, 213, 225, 0.25) 0%,
            rgba(226, 232, 240, 0.45) 50%,
            rgba(203, 213, 225, 0.25) 100%
        );
        background-size: 200% 100%;
        animation: skeleton-wave 1.6s ease-in-out infinite;
    }

    .dark .skeleton-shimmer {
        background: linear-gradient(
            90deg,
            rgba(30, 41, 59, 0.35) 0%,
            rgba(51, 65, 85, 0.55) 50%,
            rgba(30, 41, 59, 0.35) 100%
        );
        background-size: 200% 100%;
        animation: skeleton-wave 1.6s ease-in-out infinite;
    }

    @keyframes skeleton-wave {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    @media (prefers-reduced-motion: reduce) {
        html { scroll-behavior: auto; }
        *, *::before, *::after {
            animation-duration: .01ms !important;
            transition-duration: .01ms !important;
        }
    }
    @media print {
        nav, button, .fixed, [role="dialog"] { display: none !important; }
        section, article { break-inside: avoid; page-break-inside: avoid; }
        body, main { background: #fff !important; color: #000 !important; }
    }
</style>