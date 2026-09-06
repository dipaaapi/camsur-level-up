<x-guest-layout>
    <div x-data="{
        pdfModalOpen: false,
        posterModalOpen: false,
        activePoster: '',
        posters: [
            { src: '{{ asset('img/transparency/citizens-charter/poster-fixer2.png') }}', alt: 'Bawal ang Fixer Poster' },
            { src: '{{ asset('img/transparency/citizens-charter/poster-fixer.png') }}', alt: 'Ang Red Tape ay Salot Poster' },
            { src: '{{ asset('img/transparency/citizens-charter/fixer-fil.png') }}', alt: 'Ang Fixer ay Mandurugas Poster' },
            { src: '{{ asset('img/transparency/citizens-charter/bawal-red-tape.jpg') }}', alt: 'Bawal ang Red Tape Poster' }
        ],
        currentPosterIndex: 0,
        timer: null,
        init() {
            this.startAutoSlide();
            this.$watch('pdfModalOpen', value => {
                document.body.style.overflow = value ? 'hidden' : '';
            });
            this.$watch('posterModalOpen', value => {
                document.body.style.overflow = value ? 'hidden' : '';
            });
        },
        startAutoSlide() {
            this.timer = setInterval(() => {
                this.nextPoster();
            }, 5000);
        },
        stopAutoSlide() {
            if (this.timer) clearInterval(this.timer);
        },
        nextPoster() {
            this.currentPosterIndex = (this.currentPosterIndex + 1) % this.posters.length;
        },
        prevPoster() {
            this.currentPosterIndex = (this.currentPosterIndex - 1 + this.posters.length) % this.posters.length;
        },
        openPoster(src) {
            this.activePoster = src;
            this.posterModalOpen = true;
        }
    }">
        {{-- 1. Hero / Page Header --}}
        @include('pages.guest.transparency.citizens-charter.hero')

        {{-- Main Content Section --}}
        <main class="py-12 sm:py-16 bg-slate-100/80 min-h-screen">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-8 sm:gap-10">
                
                {{-- 1. Highest Leadership Vision & National Directive --}}
                @include('pages.guest.transparency.citizens-charter.presidential-quote')

                {{-- 2. Statutory Legal Basis (R.A. 11032) --}}
                @include('pages.guest.transparency.citizens-charter.ra-11032')

                {{-- 3. National Regulatory Body Compliance (ARTA) --}}
                @include('pages.guest.transparency.citizens-charter.arta-compliance')

                {{-- 4. Citizen Education & Public Overview --}}
                @include('pages.guest.transparency.citizens-charter.what-is-charter')

                {{-- 5. Primary Actionable Frontline Document (Handbook & PDF Viewer) --}}
                @include('pages.guest.transparency.citizens-charter.handbook')

                {{-- 6. LGU Institutional Service Pledge --}}
                @include('pages.guest.transparency.citizens-charter.service-pledge')

                {{-- 7. Public Advisory & Anti-Fixer Warning --}}
                @include('pages.guest.transparency.citizens-charter.say-no-to-fixers')

                {{-- 8. Direct Public Assistance & Anti-Red Tape Reporting Channels --}}
                @include('pages.guest.transparency.citizens-charter.reporting-channels')

            </div>
        </main>

        {{-- Modals (PDF Viewer & Fullscreen Poster) --}}
        @include('pages.guest.transparency.citizens-charter.modals')
    </div>
</x-guest-layout>
