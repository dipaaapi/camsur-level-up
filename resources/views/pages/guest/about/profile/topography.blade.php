{{-- 🗺️ TOPOGRAPHY --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-6">
    <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
        <div class="p-3.5 bg-indigo-100 text-indigo-700 rounded-2xl shrink-0 shadow-xs">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 20l7-12 5 7 3-4 3 9H3z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 20l4-7 3 4"></path></svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Topography &amp; Elevation Profiles</h2>
            <p class="text-sm text-slate-500 mt-0.5">Four distinct elevation zones spanning coastal plains, fertile valleys, and volcanic highlands</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        {{-- 4 Modern Full-Width Scannable Elevation Zone Cards (Stacked 1-Col: No Wrapping, Zero Overflow) --}}
        <div class="lg:col-span-7 space-y-3 text-xs">
            {{-- Zone 1: Coastal --}}
            <div onclick="setTopo(0)" id="topo-card-0" class="topo-card cursor-pointer p-4 rounded-2xl border-2 border-blue-500 bg-blue-50/70 shadow-md ring-2 ring-blue-400/20 transition-all duration-300 flex items-center justify-between gap-3 group">
                <div class="flex items-center gap-3.5 min-w-0">
                    <div class="w-11 h-11 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 text-xl shadow-2xs group-hover:scale-105 transition">
                        🌊
                    </div>
                    <div class="space-y-0.5 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h4 class="font-bold text-slate-900 text-sm group-hover:text-blue-700 transition">Coastal Plains &amp; Mangroves</h4>
                            <span class="text-[10px] font-black bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full shrink-0">Zone 1 • 0–50m ASL</span>
                        </div>
                        <p class="text-xs text-slate-600 line-clamp-1 leading-normal">
                            Lowland maritime coastlines along Ragay Gulf &amp; San Miguel Bay with lush mangrove wetlands.
                        </p>
                    </div>
                </div>
                <div class="shrink-0 flex items-center gap-1.5 text-xs font-bold text-blue-700 bg-white/90 group-hover:bg-blue-600 group-hover:text-white px-3 py-1.5 rounded-xl border border-blue-200/80 shadow-2xs transition">
                    <span class="hidden sm:inline text-[11px]">Inspect</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            {{-- Zone 2: Basin --}}
            <div onclick="setTopo(1)" id="topo-card-1" class="topo-card cursor-pointer p-4 rounded-2xl border-2 border-slate-200/80 bg-white hover:border-emerald-300 hover:bg-emerald-50/40 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between gap-3 group">
                <div class="flex items-center gap-3.5 min-w-0">
                    <div class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 text-xl shadow-2xs group-hover:scale-105 transition">
                        🌾
                    </div>
                    <div class="space-y-0.5 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h4 class="font-bold text-slate-900 text-sm group-hover:text-emerald-700 transition">Bicol Plain (Central Basin)</h4>
                            <span class="text-[10px] font-black bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full shrink-0">Zone 2 • 50–200m ASL</span>
                        </div>
                        <p class="text-xs text-slate-600 line-clamp-1 leading-normal">
                            Expansive alluvial valley between mountain ranges serving as the region's agricultural granary.
                        </p>
                    </div>
                </div>
                <div class="shrink-0 flex items-center gap-1.5 text-xs font-bold text-emerald-700 bg-white/90 group-hover:bg-emerald-600 group-hover:text-white px-3 py-1.5 rounded-xl border border-emerald-200/80 shadow-2xs transition">
                    <span class="hidden sm:inline text-[11px]">Inspect</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            {{-- Zone 3: Highlands --}}
            <div onclick="setTopo(2)" id="topo-card-2" class="topo-card cursor-pointer p-4 rounded-2xl border-2 border-slate-200/80 bg-white hover:border-amber-300 hover:bg-amber-50/40 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between gap-3 group">
                <div class="flex items-center gap-3.5 min-w-0">
                    <div class="w-11 h-11 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 text-xl shadow-2xs group-hover:scale-105 transition">
                        🏔️
                    </div>
                    <div class="space-y-0.5 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h4 class="font-bold text-slate-900 text-sm group-hover:text-amber-700 transition">Volcanic Highlands &amp; Slopes</h4>
                            <span class="text-[10px] font-black bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full shrink-0">Zone 3 • 200–1,976m ASL</span>
                        </div>
                        <p class="text-xs text-slate-600 line-clamp-1 leading-normal">
                            Home to Mt. Isarog (1,976m), Mt. Iriga (1,196m), and Calinigan watershed ranges.
                        </p>
                    </div>
                </div>
                <div class="shrink-0 flex items-center gap-1.5 text-xs font-bold text-amber-700 bg-white/90 group-hover:bg-amber-600 group-hover:text-white px-3 py-1.5 rounded-xl border border-amber-200/80 shadow-2xs transition">
                    <span class="hidden sm:inline text-[11px]">Inspect</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            {{-- Zone 4: Karst --}}
            <div onclick="setTopo(3)" id="topo-card-3" class="topo-card cursor-pointer p-4 rounded-2xl border-2 border-slate-200/80 bg-white hover:border-sky-300 hover:bg-sky-50/40 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between gap-3 group">
                <div class="flex items-center gap-3.5 min-w-0">
                    <div class="w-11 h-11 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center shrink-0 text-xl shadow-2xs group-hover:scale-105 transition">
                        🏝️
                    </div>
                    <div class="space-y-0.5 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-700 transition">Karst &amp; Rugged Peninsulas</h4>
                            <span class="text-[10px] font-black bg-sky-100 text-sky-800 px-2 py-0.5 rounded-full shrink-0">Zone 4 • Up to 904m ASL</span>
                        </div>
                        <p class="text-xs text-slate-600 line-clamp-1 leading-normal">
                            Rugged limestone cliffs, sea caves, and protected marine parks across Caramoan.
                        </p>
                    </div>
                </div>
                <div class="shrink-0 flex items-center gap-1.5 text-xs font-bold text-sky-700 bg-white/90 group-hover:bg-sky-600 group-hover:text-white px-3 py-1.5 rounded-xl border border-sky-200/80 shadow-2xs transition">
                    <span class="hidden sm:inline text-[11px]">Inspect</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
        </div>

        {{-- Vibrant Interactive Showcase --}}
        <div class="lg:col-span-5 relative rounded-3xl overflow-hidden shadow-xl border border-slate-200 bg-slate-950 h-96 group select-none" id="topo-showcase-container">
            <div class="absolute inset-0">
                {{-- Slide 0: Coastal --}}
                <div class="topo-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100" id="topo-slide-0">
                    <img src="{{ asset('img/about/profile/aa.png') }}" alt="Coastal Elevation" class="w-full h-full object-cover brightness-[1.04] saturate-[1.22] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 1: Basin --}}
                <div class="topo-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="topo-slide-1">
                    <img src="{{ asset('img/about/profile/bb.png') }}" alt="Bicol Plain Basin" class="w-full h-full object-cover brightness-[1.04] saturate-[1.22] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 2: Highlands --}}
                <div class="topo-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="topo-slide-2">
                    <img src="{{ asset('img/about/profile/cc.png') }}" alt="Volcanic Highlands" class="w-full h-full object-cover brightness-[1.04] saturate-[1.22] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 3: Karst --}}
                <div class="topo-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="topo-slide-3">
                    <img src="{{ asset('img/about/profile/dd.png') }}" alt="Karst & Peninsulas" class="w-full h-full object-cover brightness-[1.04] saturate-[1.22] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>

            {{-- Sleek Navigation Arrows --}}
            <button onclick="moveTopo(-1)" aria-label="Previous Topo Slide" class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-black/40 hover:bg-black/80 text-white backdrop-blur-md border border-white/20 shadow-lg hover:scale-110 active:scale-95 transition z-20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button onclick="moveTopo(1)" aria-label="Next Topo Slide" class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-black/40 hover:bg-black/80 text-white backdrop-blur-md border border-white/20 shadow-lg hover:scale-110 active:scale-95 transition z-20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
            </button>

            {{-- Indicator Dots --}}
            <div class="absolute bottom-4 inset-x-0 flex justify-center gap-1.5 z-20 pointer-events-auto">
                <button onclick="setTopo(0)" id="topo-dot-0" aria-label="Slide 1" class="topo-dot w-6 h-1.5 rounded-full bg-white shadow-sm transition-all duration-300"></button>
                <button onclick="setTopo(1)" id="topo-dot-1" aria-label="Slide 2" class="topo-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
                <button onclick="setTopo(2)" id="topo-dot-2" aria-label="Slide 3" class="topo-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
                <button onclick="setTopo(3)" id="topo-dot-3" aria-label="Slide 4" class="topo-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
            </div>
        </div>
    </div>
</section>
