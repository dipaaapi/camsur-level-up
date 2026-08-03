<section x-data="{
            activeSlide: 0,
            slides: [
                {
                    title: 'Welcome to Camarines Sur',
                    subtitle: 'Official Web Portal of the Provincial Government of Camarines Sur',
                    badge: 'Province of Camarines Sur',
                    image: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80',
                    link: '{{ route('profile') }}',
                    buttonText: 'Explore Camsur'
                },
                {
                    title: 'Eco-Adventure Capital',
                    subtitle: 'Experience world-class wakeboarding, island hopping, and natural wonders',
                    badge: 'Tourism & Culture',
                    image: 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1920&q=80',
                    link: '{{ route('tourism') }}',
                    buttonText: 'Discover Destinations'
                },
                {
                    title: 'Transparent Governance',
                    subtitle: 'Access public services, procurement notices, and citizen services online',
                    badge: 'Public Service',
                    image: 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80',
                    link: '{{ route('seal') }}',
                    buttonText: 'View Transparency Seal'
                }
            ],
            timer: null,
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            },
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
            },
            startAutoplay() {
                this.timer = setInterval(() => {
                    this.next();
                }, 3000);
            },
            stopAutoplay() {
                clearInterval(this.timer);
            }
         }"
         x-init="startAutoplay()"
         @mouseenter="stopAutoplay()"
         @mouseleave="startAutoplay()"
         class="relative w-full h-[85vh] sm:h-[90vh] min-h-[500px] bg-slate-950 overflow-hidden group">

    {{-- 🖼️ Carousel Slides Container --}}
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index"
             x-transition:enter="transition ease-out duration-1000 transform"
             x-transition:enter-start="opacity-0 scale-105"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-700 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="absolute inset-0 w-full h-full">

            {{-- Background Image --}}
            <img :src="slide.image"
                 :alt="slide.title"
                 class="w-full h-full object-cover object-center filter brightness-75">

            {{-- Dark Gradients Overlay for Text Readability --}}
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-slate-950/60"></div>

            {{-- Slide Content Overlay --}}
            <div class="absolute inset-0 flex items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
                <div class="max-w-4xl mx-auto space-y-4">
                    {{-- Badge --}}
                    <div>
                        <span x-text="slide.badge"
                              class="bg-amber-400 text-blue-950 text-xs sm:text-sm font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg inline-block">
                        </span>
                    </div>

                    {{-- Title --}}
                    <h1 x-text="slide.title"
                        class="text-3xl sm:text-5xl md:text-6xl font-black uppercase tracking-tight text-white drop-shadow-md leading-tight">
                    </h1>

                    {{-- Subtitle --}}
                    <p x-text="slide.subtitle"
                       class="text-slate-200 text-base sm:text-xl max-w-2xl mx-auto font-medium drop-shadow">
                    </p>

                    {{-- CTA Button --}}
                    <div class="pt-4">
                        <a :href="slide.link"
                           x-text="slide.buttonText"
                           class="inline-block bg-blue-900 hover:bg-blue-800 text-white font-bold text-sm sm:text-base px-8 py-3 rounded-lg shadow-xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-400/30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    {{-- ⬅️ Left Previous Button --}}
    <button @click="prev()"
            aria-label="Previous Slide"
            class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-20 p-3 rounded-full bg-black/40 hover:bg-amber-400 text-white hover:text-blue-950 backdrop-blur-md border border-white/20 transition-all duration-300 shadow-xl opacity-80 group-hover:opacity-100 focus:outline-none">
        <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    {{-- ➡️ Right Next Button --}}
    <button @click="next()"
            aria-label="Next Slide"
            class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 z-20 p-3 rounded-full bg-black/40 hover:bg-amber-400 text-white hover:text-blue-950 backdrop-blur-md border border-white/20 transition-all duration-300 shadow-xl opacity-80 group-hover:opacity-100 focus:outline-none">
        <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

</section>
