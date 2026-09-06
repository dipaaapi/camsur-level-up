{{-- 6. Say No to Fixers! Card (Consistent Top-Left Header with Other Cards) --}}
<div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-200/90 transition hover:shadow-md mb-2">
    
    {{-- Consistent Top-Left Header matching other cards --}}
    <div class="flex items-center gap-3.5 mb-4">
        <span class="p-3 rounded-xl bg-red-100 text-red-700 shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
        </span>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-slate-900">Say No to Fixers!</h2>
            <p class="text-[11px] uppercase font-bold text-red-600 tracking-wider">Anti-Red Tape Campaign & Crime Prevention</p>
        </div>
    </div>
    
    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
        The Provincial Government of Camarines Sur strictly enforces Republic Act No. 11032. Official services are transacted only through designated windows and authorized personnel.
    </p>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
        
        {{-- Left Column: Poster Carousel with Uniform Dimensions & Unified Bottom Controls --}}
        <div class="lg:col-span-5 flex flex-col items-center justify-between h-full bg-slate-50/80 p-4 sm:p-5 rounded-2xl border border-slate-200/80">
            
            {{-- Fixed Uniform Poster Frame (Consistent 3:4 Aspect Ratio, No Hover Scale Clipping) --}}
            <div
                @mouseenter="stopAutoSlide()"
                @mouseleave="startAutoSlide()"
                class="relative w-full max-w-[280px] sm:max-w-[300px] aspect-[3/4] rounded-xl border border-slate-200 shadow-sm bg-white p-2 flex items-center justify-center overflow-hidden">
                
                <img
                    :src="posters[currentPosterIndex].src"
                    :alt="posters[currentPosterIndex].alt"
                    @click="openPoster(posters[currentPosterIndex].src)"
                    class="w-full h-full object-contain cursor-pointer mx-auto select-none rounded-lg"
                    title="Click to view fullscreen">
            </div>

            {{-- Unified Single-Line Controls: [ Prev ] [ Dots ] [ Next ] --}}
            <div class="mt-4 w-full flex flex-col items-center gap-3">
                <div class="px-3 py-1.5 bg-white rounded-full flex items-center justify-center gap-3 border border-slate-200 shadow-sm">
                    {{-- Previous Button --}}
                    <button
                        type="button"
                        @click="prevPoster()"
                        aria-label="Previous Slide"
                        class="w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-900 hover:text-white text-slate-700 flex items-center justify-center transition shadow-xs cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    {{-- Dots --}}
                    <div class="flex items-center gap-1.5 px-1">
                        <template x-for="(p, idx) in posters" :key="idx">
                            <button
                                type="button"
                                @click="currentPosterIndex = idx"
                                :class="currentPosterIndex === idx ? 'bg-red-600 w-6' : 'bg-slate-200 hover:bg-slate-300 w-2.5'"
                                class="h-2.5 rounded-full transition-all duration-300 cursor-pointer focus:outline-none"
                                :aria-label="'Go to Slide ' + (idx + 1)"></button>
                        </template>
                    </div>

                    {{-- Next Button --}}
                    <button
                        type="button"
                        @click="nextPoster()"
                        aria-label="Next Slide"
                        class="w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-900 hover:text-white text-slate-700 flex items-center justify-center transition shadow-xs cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>

                {{-- External Link to Official ARTA Video Campaign on Facebook --}}
                <a
                    href="https://www.facebook.com/artagovph/videos/402299552562322"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-full max-w-[280px] sm:max-w-[300px] flex items-center justify-center px-4 py-2.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-blue-950 font-bold text-xs shadow-sm transition group">
                    <svg class="w-4 h-4 mr-2 text-blue-900 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    <span>Watch ARTA Video on Facebook</span>
                    <svg class="w-3.5 h-3.5 ml-1.5 text-blue-900/80 group-hover:translate-x-0.5 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>
        </div>

        {{-- Right Column: High-Urgency Warning Box + How to Spot a Fixer + Key Citizen Reminders (Balanced Height) --}}
        <div class="lg:col-span-7 flex flex-col justify-between space-y-4">
            
            {{-- High-Impact Urgent Warning Box --}}
            <div class="p-5 bg-red-500/10 border-2 border-red-600 rounded-2xl text-red-950 shadow-sm relative overflow-hidden">
                <div class="flex items-start gap-3.5">
                    <div class="p-2 bg-red-600 text-white rounded-xl flex-shrink-0 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <h3 class="text-sm sm:text-base font-black text-red-700 uppercase tracking-tight">
                                Engaging a Fixer is a Serious Crime!
                            </h3>
                            <span class="px-2 py-0.5 bg-red-600 text-white text-[10px] font-bold rounded uppercase">
                                R.A. 11032
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-red-900 font-medium leading-relaxed">
                            Under Republic Act No. 11032, both the fixer and the client face heavy criminal & administrative penalties: <strong class="font-bold underline">imprisonment of up to 6 years</strong>, fines of up to <strong class="font-bold underline">₱2,000,000.00</strong>, and permanent dismissal from government service.
                        </p>
                    </div>
                </div>
            </div>

            {{-- How to Spot a Fixer Section --}}
            <div class="p-4 sm:p-5 bg-slate-50 rounded-2xl border border-slate-200/80">
                <h3 class="text-xs sm:text-sm font-bold text-slate-900 flex items-center gap-2 mb-3">
                    <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span>How to Spot a Fixer:</span>
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs text-slate-700">
                    <div class="flex items-start gap-2 bg-white p-2.5 rounded-xl border border-slate-200/60 shadow-xs">
                        <span class="w-4 h-4 rounded-full bg-red-100 text-red-600 font-bold flex items-center justify-center flex-shrink-0 text-[10px] mt-0.5">✕</span>
                        <span>Approaches you outside official service windows or queuing lines.</span>
                    </div>
                    <div class="flex items-start gap-2 bg-white p-2.5 rounded-xl border border-slate-200/60 shadow-xs">
                        <span class="w-4 h-4 rounded-full bg-red-100 text-red-600 font-bold flex items-center justify-center flex-shrink-0 text-[10px] mt-0.5">✕</span>
                        <span>Demands informal "facilitation fees" for expedited releases.</span>
                    </div>
                    <div class="flex items-start gap-2 bg-white p-2.5 rounded-xl border border-slate-200/60 shadow-xs">
                        <span class="w-4 h-4 rounded-full bg-red-100 text-red-600 font-bold flex items-center justify-center flex-shrink-0 text-[10px] mt-0.5">✕</span>
                        <span>Claims exclusive "insider connections" with provincial signatories.</span>
                    </div>
                    <div class="flex items-start gap-2 bg-white p-2.5 rounded-xl border border-slate-200/60 shadow-xs">
                        <span class="w-4 h-4 rounded-full bg-red-100 text-red-600 font-bold flex items-center justify-center flex-shrink-0 text-[10px] mt-0.5">✕</span>
                        <span>Offers to bypass mandatory documents or inspection steps.</span>
                    </div>
                </div>
            </div>

            {{-- Official Frontline Reminder Footer Banner (Eliminates Blank Space & Balances Height) --}}
            <div class="p-3.5 rounded-xl bg-blue-950 text-white flex items-center justify-between gap-3 shadow-xs">
                <div class="flex items-center gap-2.5">
                    <span class="p-1.5 rounded-lg bg-amber-400 text-blue-950 flex-shrink-0 font-bold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </span>
                    <div>
                        <h4 class="text-xs font-bold text-white">Transact Only at Official Capitol Windows</h4>
                        <p class="text-[11px] text-blue-200">Always ask for an Official Receipt (OR) for every government fee paid.</p>
                    </div>
                </div>
                <span class="hidden sm:inline-block text-[10px] uppercase font-bold tracking-wider px-2.5 py-1 rounded-md bg-white/10 text-amber-300 flex-shrink-0">
                    Official Notice
                </span>
            </div>

        </div>
    </div>
</div>
