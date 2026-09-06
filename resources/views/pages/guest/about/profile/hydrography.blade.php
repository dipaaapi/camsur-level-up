{{-- 💧 HYDROGRAPHY --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
        <div class="p-3.5 bg-blue-100 text-blue-700 rounded-2xl shrink-0 shadow-xs">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a8 8 0 11-14.856 0c.928-1.856 2.433-3.666 4.142-5.428.536-.554 1.107-1.127 1.714-1.714.607.587 1.178 1.16 1.714 1.714 1.709 1.762 3.214 3.572 4.142 5.428z"></path></svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Hydrography &amp; Water Systems</h2>
            <p class="text-sm text-slate-500 mt-0.5">Major river basins, freshwater lakes, and drainage ecosystems across the province</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
            {{-- Water System 0 --}}
            <div onclick="setHydro(0)" id="hydro-card-0" class="hydro-card cursor-pointer bg-gradient-to-br from-white to-blue-50/90 rounded-2xl p-5 border-2 border-blue-400 shadow-md hover:shadow-lg hover:-translate-y-1 transition duration-300 space-y-2 ring-2 ring-blue-400/20 group">
                <div class="flex items-center justify-between pb-2 border-b border-blue-100">
                    <h3 class="font-bold text-blue-950 text-sm flex items-center gap-2 group-hover:text-blue-700 transition">
                        <span>🌊</span> The Bicol River Basin
                    </h3>
                    <span class="text-[10px] font-bold bg-blue-100 text-blue-800 px-2 py-0.5 rounded-md uppercase tracking-wider">Primary Drainage</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed pt-1">The primary drainage basin of the province, flowing from Lake Bato and Mount Mayon into San Miguel Bay, sustaining extensive irrigated rice plains across the central corridor.</p>
            </div>

            {{-- Water System Lakes (1, 2, 3) --}}
            <div class="bg-gradient-to-br from-white to-cyan-50/80 rounded-2xl p-5 border border-cyan-100 shadow-sm space-y-3">
                <div class="flex items-center justify-between pb-2 border-b border-cyan-100">
                    <h3 class="font-bold text-cyan-950 text-sm flex items-center gap-2">
                        <span>🐟</span> Major Inland Lakes &amp; Biodiversity
                    </h3>
                    <span class="text-[10px] font-bold bg-cyan-100 text-cyan-800 px-2 py-0.5 rounded-md uppercase tracking-wider">Freshwater Ecosystems</span>
                </div>
                <div class="space-y-2.5 text-xs">
                    <div onclick="setHydro(1)" id="hydro-card-1" class="hydro-card cursor-pointer p-3 bg-white/90 rounded-xl border-2 border-transparent hover:border-cyan-300 shadow-2xs hover:shadow-md transition duration-200 flex items-start gap-2">
                        <span class="text-base shrink-0">🐟</span>
                        <div>
                            <strong class="text-slate-900">Lake Buhi:</strong>
                            <span class="text-slate-600"> Natural habitat of the <em>Sinarapan</em> (<em>Mistichthys luzonensis</em>), recognized as the world's smallest commercially harvested fish.</span>
                        </div>
                    </div>
                    <div onclick="setHydro(2)" id="hydro-card-2" class="hydro-card cursor-pointer p-3 bg-white/90 rounded-xl border-2 border-transparent hover:border-cyan-300 shadow-2xs hover:shadow-md transition duration-200 flex items-start gap-2">
                        <span class="text-base shrink-0">🛶</span>
                        <div>
                            <strong class="text-slate-900">Lake Bato:</strong>
                            <span class="text-slate-600"> Primary inland freshwater fishery and aquaculture hub in southwestern Camarines Sur.</span>
                        </div>
                    </div>
                    <div onclick="setHydro(3)" id="hydro-card-3" class="hydro-card cursor-pointer p-3 bg-white/90 rounded-xl border-2 border-transparent hover:border-cyan-300 shadow-2xs hover:shadow-md transition duration-200 flex items-start gap-2">
                        <span class="text-base shrink-0">🌿</span>
                        <div>
                            <strong class="text-slate-900">Lake Baao:</strong>
                            <span class="text-slate-600"> Vital shallow freshwater wetland basin essential for ecological balance and natural flood regulation.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Vibrant Interactive Hydrography Showcase --}}
        <div class="lg:col-span-5 relative rounded-3xl overflow-hidden shadow-xl border border-slate-200 bg-slate-950 h-96 group select-none" id="hydro-showcase-container">
            <div class="absolute inset-0">
                {{-- Slide 0: Bicol River --}}
                <div class="hydro-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100" id="hydro-slide-0">
                    <img src="{{ asset('img/about/profile/11.png') }}" alt="Bicol River Basin" class="w-full h-full object-cover brightness-[1.04] saturate-[1.25] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 1: Lake Buhi --}}
                <div class="hydro-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-1">
                    <img src="{{ asset('img/about/profile/22.png') }}" alt="Lake Buhi Sanctuary" class="w-full h-full object-cover brightness-[1.04] saturate-[1.25] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 2: Lake Bato --}}
                <div class="hydro-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-2">
                    <img src="{{ asset('img/about/profile/33.png') }}" alt="Lake Bato Drainage" class="w-full h-full object-cover brightness-[1.04] saturate-[1.25] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Slide 3: Baao Wetland --}}
                <div class="hydro-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-3">
                    <img src="{{ asset('img/about/profile/44.png') }}" alt="Baao Wetland Basin" class="w-full h-full object-cover brightness-[1.04] saturate-[1.25] contrast-[1.06] transform group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>

            {{-- Sleek Navigation Arrows --}}
            <button onclick="moveHydro(-1)" aria-label="Previous Hydro Slide" class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-black/40 hover:bg-black/80 text-white backdrop-blur-md border border-white/20 shadow-lg hover:scale-110 active:scale-95 transition z-20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button onclick="moveHydro(1)" aria-label="Next Hydro Slide" class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-black/40 hover:bg-black/80 text-white backdrop-blur-md border border-white/20 shadow-lg hover:scale-110 active:scale-95 transition z-20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
            </button>

            {{-- Indicator Dots --}}
            <div class="absolute bottom-4 inset-x-0 flex justify-center gap-1.5 z-20 pointer-events-auto">
                <button onclick="setHydro(0)" id="hydro-dot-0" aria-label="Slide 1" class="hydro-dot w-6 h-1.5 rounded-full bg-white shadow-sm transition-all duration-300"></button>
                <button onclick="setHydro(1)" id="hydro-dot-1" aria-label="Slide 2" class="hydro-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
                <button onclick="setHydro(2)" id="hydro-dot-2" aria-label="Slide 3" class="hydro-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
                <button onclick="setHydro(3)" id="hydro-dot-3" aria-label="Slide 4" class="hydro-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300"></button>
            </div>
        </div>
    </div>
</section>
