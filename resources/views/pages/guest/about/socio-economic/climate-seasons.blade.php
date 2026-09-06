{{-- 4. CLIMATE CLASSIFICATION & SEASONAL CYCLES --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-6">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-sky-100 text-sky-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Climate Classification & Seasonal Cycles</h2>
                <p class="text-sm text-slate-500 mt-0.5">Agro-meteorological regimes, precipitation patterns, and weather profiles</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <div class="p-3 bg-sky-50/80 rounded-2xl border border-sky-100 max-w-lg">
                <p class="text-xs text-slate-600 leading-relaxed font-medium">
                    Dual climate corridor: <strong class="text-sky-950">Type II</strong> (eastern coast, heavy rainfall Nov–Jan) & <strong class="text-sky-950">Type IV</strong> (western valley, evenly distributed precipitation).
                </p>
            </div>
        </div>
    </div>
    
    {{-- Season Cards: Clean Pills Outside Image & Solid Themed Interactive Action Buttons --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-2">
        
        <!-- Hot / Dry Season Card -->
        <div @click="selectedSeason = 'dry'"
             class="group rounded-3xl overflow-hidden border border-amber-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-amber-400">
            
            {{-- Top Pill Bar (Outside Image) --}}
            <div class="p-4 sm:p-4.5 pb-3 flex items-center justify-between gap-2 border-b border-amber-100/70 bg-gradient-to-r from-amber-50/60 to-orange-50/30">
                <span class="inline-flex items-center justify-center text-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-amber-500 text-slate-950 shadow-xs shrink-0 leading-tight">
                    <span>☀️</span> March – May
                </span>
                <span class="px-2.5 py-1 rounded-full text-xs font-black bg-amber-100/80 text-amber-900 border border-amber-300/60 shadow-2xs shrink-0 text-center justify-center leading-tight whitespace-nowrap">
                    28°C – 34°C
                </span>
            </div>

            {{-- Completely Unobstructed 3D Graphic Showcase --}}
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-slate-900">
                <img src="{{ asset('img/about/socio-economic/dry_hot_season.jpg') }}" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" 
                     alt="Hot & Dry Season" 
                     onError="this.style.display='none'">
            </div>

            {{-- Content Body --}}
            <div class="p-5 sm:p-6 text-left flex-1 flex flex-col justify-between space-y-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-lg flex items-center justify-between gap-2 group-hover:text-amber-700 transition-colors">
                        <span>Dry / Hot Season</span>
                        <span class="text-xs text-amber-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                    </h3>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                        Favorable period for grain sun-drying, tourism, water sports at CWC, and coastal travel along Caramoan Peninsula.
                    </p>
                </div>
                
                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="text-[11px] font-bold text-amber-800 flex items-center gap-1.5">
                        <span>⚡ Peak solar radiation & harvest window</span>
                    </div>
                    <div class="w-full py-2.5 px-3.5 rounded-xl bg-amber-500 text-slate-950 font-bold text-xs flex items-center justify-between shadow-xs group-hover:bg-amber-400 group-hover:shadow-sm transition-all">
                        <span class="flex items-center gap-1.5 font-black">
                            <span>⚠️</span>
                            <span>View Hazard & Safety Guide</span>
                        </span>
                        <span class="font-black text-sm">→</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wet / Monsoon Season Card -->
        <div @click="selectedSeason = 'wet'"
             class="group rounded-3xl overflow-hidden border border-blue-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-blue-400">
            
            {{-- Top Pill Bar (Outside Image) --}}
            <div class="p-4 sm:p-4.5 pb-3 flex items-center justify-between gap-2 border-b border-blue-100/70 bg-gradient-to-r from-blue-50/60 to-indigo-50/30">
                <span class="inline-flex items-center justify-center text-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-blue-600 text-white shadow-xs shrink-0 leading-tight">
                    <span>🌧️</span> June – October
                </span>
                <span class="px-2.5 py-1 rounded-full text-xs font-black bg-blue-100/80 text-blue-900 border border-blue-300/60 shadow-2xs shrink-0 text-center justify-center leading-tight whitespace-nowrap">
                    26°C – 31°C
                </span>
            </div>

            {{-- Completely Unobstructed 3D Graphic Showcase --}}
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-slate-900">
                <img src="{{ asset('img/about/socio-economic/wet_season.jpg') }}" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" 
                     alt="Wet & Monsoon Season" 
                     onError="this.style.display='none'">
            </div>

            {{-- Content Body --}}
            <div class="p-5 sm:p-6 text-left flex-1 flex flex-col justify-between space-y-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-lg flex items-center justify-between gap-2 group-hover:text-blue-700 transition-colors">
                        <span>Wet / Monsoon Season</span>
                        <span class="text-xs text-blue-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                    </h3>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                        Southwest monsoon (Habagat) brings abundant rainfall, filling major irrigation networks and the Bicol River Basin.
                    </p>
                </div>
                
                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="text-[11px] font-bold text-blue-800 flex items-center gap-1.5">
                        <span>💧 Main lowland palay cropping season</span>
                    </div>
                    <div class="w-full py-2.5 px-3.5 rounded-xl bg-blue-600 text-white font-bold text-xs flex items-center justify-between shadow-xs group-hover:bg-blue-500 group-hover:shadow-sm transition-all">
                        <span class="flex items-center gap-1.5 font-black">
                            <span>⚠️</span>
                            <span>View Flood & Typhoon Guide</span>
                        </span>
                        <span class="font-black text-sm">→</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cool / Amihan Season Card -->
        <div @click="selectedSeason = 'cool'"
             class="group rounded-3xl overflow-hidden border border-teal-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-teal-400">
            
            {{-- Top Pill Bar (Outside Image) --}}
            <div class="p-4 sm:p-4.5 pb-3 flex items-center justify-between gap-2 border-b border-teal-100/70 bg-gradient-to-r from-teal-50/60 to-emerald-50/30">
                <span class="inline-flex items-center justify-center text-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-teal-600 text-white shadow-xs shrink-0 leading-tight">
                    <span>🍃</span> Nov – February
                </span>
                <span class="px-2.5 py-1 rounded-full text-xs font-black bg-teal-100/80 text-teal-900 border border-teal-300/60 shadow-2xs shrink-0 text-center justify-center leading-tight whitespace-nowrap">
                    22°C – 28°C
                </span>
            </div>

            {{-- Completely Unobstructed 3D Graphic Showcase --}}
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-slate-900">
                <img src="{{ asset('img/about/socio-economic/cool_season.jpg') }}" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" 
                     alt="Cool & Amihan Season" 
                     onError="this.style.display='none'">
            </div>

            {{-- Content Body --}}
            <div class="p-5 sm:p-6 text-left flex-1 flex flex-col justify-between space-y-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-lg flex items-center justify-between gap-2 group-hover:text-teal-700 transition-colors">
                        <span>Cool / Amihan Season</span>
                        <span class="text-xs text-teal-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                    </h3>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                        Northeast monsoon (Amihan) brings pleasant, cooler breezes and occasional easterly rainfall, ideal for highland agriculture.
                    </p>
                </div>
                
                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="text-[11px] font-bold text-teal-800 flex items-center gap-1.5">
                        <span>🏔️ High-value crops in Mt. Isarog slopes</span>
                    </div>
                    <div class="w-full py-2.5 px-3.5 rounded-xl bg-teal-600 text-white font-bold text-xs flex items-center justify-between shadow-xs group-hover:bg-teal-500 group-hover:shadow-sm transition-all">
                        <span class="flex items-center gap-1.5 font-black">
                            <span>⚠️</span>
                            <span>View Marine & Surge Guide</span>
                        </span>
                        <span class="font-black text-sm">→</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
