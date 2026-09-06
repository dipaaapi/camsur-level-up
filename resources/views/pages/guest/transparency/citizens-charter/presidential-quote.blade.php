{{-- Presidential Quotes Carousel Section --}}
<div x-data="{
    activeQuote: 0,
    quoteTimer: null,
    quotes: [
        {
            text: 'We continue to harmonize efforts of all investment promotion agencies, government agencies, and local government units to effect greater synergies. We also continue to help the ease of doing business in the country by enhancing our digital infrastructure in order to streamline the application processes of business permits, licenses and other documentary requirements.',
            author: 'President Ferdinand \'Bongbong\' R. Marcos, Jr.',
            role: 'President of the Republic of the Philippines',
            event: 'Ease of Doing Business & Digitalization Directive',
            image: '{{ asset('img/transparency/citizens-charter/president-marcos.jpg') }}'
        },
        {
            text: 'Hindi ako pangulo ng aking pamilya. Hindi ako pangulo ng aking kaibigan. Ako ay pangulo ng Pilipinas. At ang tungkulin ko ay sa inyo, ang aking mga kapwa Pilipino.',
            author: 'Pangulong Ferdinand \'Bongbong\' R. Marcos, Jr.',
            role: 'Pangulo ng Republika ng Pilipinas',
            event: 'State of the Nation Address (SONA 2026)',
            image: '{{ asset('img/transparency/citizens-charter/president-marcos.jpg') }}'
        }
    ],
    init() {
        this.startQuoteTimer();
    },
    startQuoteTimer() {
        this.quoteTimer = setInterval(() => {
            this.nextQuote();
        }, 8000);
    },
    stopQuoteTimer() {
        if (this.quoteTimer) clearInterval(this.quoteTimer);
    },
    nextQuote() {
        this.activeQuote = (this.activeQuote + 1) % this.quotes.length;
    },
    prevQuote() {
        this.activeQuote = (this.activeQuote - 1 + this.quotes.length) % this.quotes.length;
    }
}"
@mouseenter="stopQuoteTimer()"
@mouseleave="startQuoteTimer()"
class="relative overflow-hidden rounded-2xl border border-slate-700/80 shadow-md transition hover:shadow-lg mb-2 p-6 sm:p-8"
style="background: linear-gradient(135deg, #0a1128 0%, #001f54 50%, #034078 100%) !important; color: #ffffff !important;">

    <div class="relative z-10">
        {{-- Section Top Header / Badges & Navigation --}}
        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-4 border-b border-white/15">
            <div class="flex items-center gap-3.5">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full p-1 bg-white/15 shadow-md flex items-center justify-center flex-shrink-0 border border-white/20">
                    <img src="{{ asset('img/transparency/citizens-charter/op-seal.png') }}" alt="Seal of the Office of the President of the Philippines" class="w-full h-full object-contain">
                </div>
                <div>
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full border shadow-sm mb-1"
                         style="background-color: rgba(255, 255, 255, 0.12) !important; border-color: rgba(255, 255, 255, 0.25) !important;">
                        <svg class="w-3 h-3 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <span class="text-amber-300 font-bold text-[10px] uppercase tracking-wider" style="color: #fcd34d !important;">Official Presidential Statements</span>
                    </div>
                    <h2 class="text-xs sm:text-sm font-bold text-white tracking-wide uppercase">Office of the President of the Philippines</h2>
                </div>
            </div>

            {{-- Carousel Navigation Controls --}}
            <div class="flex items-center gap-2">
                <button
                    type="button"
                    @click="prevQuote()"
                    aria-label="Previous quote"
                    class="p-2.5 rounded-xl transition cursor-pointer hover:bg-white/20 active:scale-95 shadow-sm"
                    style="background-color: rgba(255, 255, 255, 0.15) !important; color: #ffffff !important;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button
                    type="button"
                    @click="nextQuote()"
                    aria-label="Next quote"
                    class="p-2.5 rounded-xl transition cursor-pointer hover:bg-white/20 active:scale-95 shadow-sm"
                    style="background-color: rgba(255, 255, 255, 0.15) !important; color: #ffffff !important;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        {{-- Dynamic Quote Content with Prominently Sized Real Portrait --}}
        <div class="min-h-[170px] sm:min-h-[140px] flex flex-col justify-center">
            <template x-for="(item, index) in quotes" :key="index">
                <div x-show="activeQuote === index"
                     x-transition:enter="transition ease-out duration-300 transform"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150 transform absolute"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 -translate-y-2">
                    
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-6 sm:gap-8">
                        {{-- Prominently Sized Portrait Frame --}}
                        <div class="flex-shrink-0 flex flex-col items-center">
                            <div class="w-32 h-40 sm:w-36 sm:h-48 md:w-40 md:h-52 rounded-2xl p-1.5 bg-gradient-to-tr from-amber-400 via-amber-200 to-amber-500 shadow-2xl ring-2 ring-white/30 overflow-hidden flex items-center justify-center bg-slate-900">
                                <img :src="item.image"
                                     :alt="item.author"
                                     class="w-full h-full object-cover object-top rounded-xl bg-slate-800 shadow-inner">
                            </div>
                        </div>

                        {{-- Quote Body --}}
                        <div class="flex-1 text-center md:text-left flex flex-col justify-between self-stretch py-1">
                            <blockquote class="italic text-base sm:text-lg lg:text-xl leading-relaxed font-serif relative" style="color: #f8fafc !important;">
                                "<span x-text="item.text"></span>"
                            </blockquote>

                            <div class="mt-6 pt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2" style="border-top: 1px solid rgba(255, 255, 255, 0.18) !important;">
                                <div>
                                    <span class="font-bold text-sm sm:text-base text-amber-300" style="color: #fcd34d !important;" x-text="'— ' + item.author"></span>
                                    <span class="block sm:inline text-xs font-medium text-slate-300 sm:ml-2" x-text="'(' + item.role + ')'"></span>
                                </div>
                                <span class="text-xs font-bold text-amber-200/90 px-3 py-1 rounded-full bg-white/10 self-center sm:self-auto" x-text="item.event"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        {{-- Dot Indicators --}}
        <div class="flex items-center justify-center gap-2 mt-6">
            <template x-for="(item, index) in quotes" :key="index">
                <button
                    type="button"
                    @click="activeQuote = index"
                    :class="activeQuote === index ? 'w-8 bg-amber-400' : 'w-3 bg-white/40 hover:bg-white/60'"
                    class="h-2.5 rounded-full transition-all duration-300 cursor-pointer focus:outline-none shadow-sm"
                    :aria-label="'Go to Quote ' + (index + 1)"></button>
            </template>
        </div>
    </div>
</div>
