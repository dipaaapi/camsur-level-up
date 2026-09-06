{{-- 3. 🌦️ CLIMATE DYNAMICS, HAZARD SUSCEPTIBILITY & DISASTER RESILIENCY FRAMEWORK --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-10">
    
    {{-- Section Header & Inter-Agency Command Hub --}}
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-slate-100">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-sky-100 text-sky-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
            </div>
            <div>
                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-sky-700 bg-sky-50 px-2.5 py-0.5 rounded-full border border-sky-200/70 text-center justify-center inline-block">
                        Integrated Environment &amp; Safety
                    </span>
                    <span class="text-[10px] font-black uppercase tracking-wider text-rose-700 bg-rose-50 px-2.5 py-0.5 rounded-full border border-rose-200/70 text-center justify-center inline-block">
                        DRRM Framework
                    </span>
                </div>
                <h2 class="text-2xl font-bold text-slate-900 mt-1">Climate Profile, Hazard Susceptibility &amp; Resiliency</h2>
                <p class="text-sm text-slate-500 mt-0.5">Agro-meteorological regimes, seasonal cycles, hazard vulnerability zones, and provincial disaster management.</p>
            </div>
        </div>

        {{-- Institutional Command Hub & Agency Recognition --}}
        <div class="flex flex-wrap items-center gap-3 p-3 bg-slate-50 rounded-2xl border border-slate-200/80 shrink-0">
            <div class="flex items-center gap-2.5 pr-3 border-r border-slate-200 shrink-0">
                <img src="{{ asset('img/about/socio-economic/edmero.jpg') }}" alt="EDMERO Camarines Sur" class="w-9 h-9 rounded-xl object-contain shadow-2xs border border-slate-200 bg-white" onError="this.style.display='none'">
                <img src="{{ asset('img/transparency/citizens-charter/camsur_logo_sml.png') }}" alt="Province of Camarines Sur" class="w-8 h-8 object-contain shrink-0" onError="this.src='{{ asset('img/about/socio-economic/brand.png') }}'">
            </div>
            {{-- Olympic Rings Formation (2 Top, 1 Bottom Centered) with Distinct Spacing & Clickable Links --}}
            <div class="flex flex-col items-center justify-center shrink-0 pl-1">
                {{-- Top Row: 2 Rings (PHIVOLCS & PAGASA) with clean spacing --}}
                <div class="flex items-center gap-2.5">
                    {{-- DOST-PHIVOLCS --}}
                    <a href="https://www.phivolcs.dost.gov.ph/" target="_blank" rel="noopener noreferrer"
                       title="DOST-PHIVOLCS: Philippine Institute of Volcanology and Seismology"
                       class="relative group/agency flex items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 group-hover/agency:border-rose-500 group-hover/agency:ring-2 group-hover/agency:ring-rose-200 p-1 shadow-xs flex items-center justify-center transition-all duration-200 group-hover/agency:scale-110 cursor-pointer">
                            <img src="{{ asset('img/about/socio-economic/phivolcs.svg') }}" alt="DOST-PHIVOLCS" class="w-full h-full object-contain">
                        </div>
                        {{-- Tooltip --}}
                        <div class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 opacity-0 pointer-events-none group-hover/agency:opacity-100 transition-all duration-200 z-50 whitespace-nowrap drop-shadow-lg">
                            <div class="bg-slate-900/95 backdrop-blur-xs text-white text-center py-1.5 px-3 rounded-xl border border-slate-700/60 shadow-xl flex flex-col items-center">
                                <span class="text-[11px] font-black text-rose-400 tracking-wide">DOST-PHIVOLCS ↗</span>
                                <span class="text-[9px] text-slate-300 font-medium">Philippine Institute of Volcanology and Seismology</span>
                            </div>
                            <div class="w-2 h-2 bg-slate-900/95 rotate-45 mx-auto -mt-1 border-r border-b border-slate-700/60"></div>
                        </div>
                    </a>

                    {{-- DOST-PAGASA --}}
                    <a href="https://bagong.pagasa.dost.gov.ph/" target="_blank" rel="noopener noreferrer"
                       title="DOST-PAGASA: Philippine Atmospheric, Geophysical and Astronomical Services Administration"
                       class="relative group/agency flex items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 group-hover/agency:border-sky-500 group-hover/agency:ring-2 group-hover/agency:ring-sky-200 p-1 shadow-xs flex items-center justify-center transition-all duration-200 group-hover/agency:scale-110 cursor-pointer">
                            <img src="{{ asset('img/about/socio-economic/pagasa.png') }}" alt="DOST-PAGASA" class="w-full h-full object-contain">
                        </div>
                        {{-- Tooltip --}}
                        <div class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 opacity-0 pointer-events-none group-hover/agency:opacity-100 transition-all duration-200 z-50 whitespace-nowrap drop-shadow-lg">
                            <div class="bg-slate-900/95 backdrop-blur-xs text-white text-center py-1.5 px-3 rounded-xl border border-slate-700/60 shadow-xl flex flex-col items-center">
                                <span class="text-[11px] font-black text-sky-400 tracking-wide">DOST-PAGASA ↗</span>
                                <span class="text-[9px] text-slate-300 font-medium">Philippine Atmospheric, Geophysical and Astronomical Services Administration</span>
                            </div>
                            <div class="w-2 h-2 bg-slate-900/95 rotate-45 mx-auto -mt-1 border-r border-b border-slate-700/60"></div>
                        </div>
                    </a>
                </div>

                {{-- Bottom Row: 1 Ring Centered (MGB) with neat spacing --}}
                <div class="mt-1.5">
                    {{-- DENR-MGB --}}
                    <a href="https://mgb.gov.ph/" target="_blank" rel="noopener noreferrer"
                       title="DENR-MGB: Mines and Geosciences Bureau"
                       class="relative group/agency flex items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 group-hover/agency:border-emerald-500 group-hover/agency:ring-2 group-hover/agency:ring-emerald-200 p-1 shadow-xs flex items-center justify-center transition-all duration-200 group-hover/agency:scale-110 cursor-pointer">
                            <img src="{{ asset('img/about/socio-economic/mgb.svg') }}" alt="DENR-MGB" class="w-full h-full object-contain">
                        </div>
                        {{-- Tooltip --}}
                        <div class="absolute top-full mt-2 left-1/2 -translate-x-1/2 opacity-0 pointer-events-none group-hover/agency:opacity-100 transition-all duration-200 z-50 whitespace-nowrap drop-shadow-lg">
                            <div class="w-2 h-2 bg-slate-900/95 rotate-45 mx-auto -mb-1 border-l border-t border-slate-700/60"></div>
                            <div class="bg-slate-900/95 backdrop-blur-xs text-white text-center py-1.5 px-3 rounded-xl border border-slate-700/60 shadow-xl flex flex-col items-center">
                                <span class="text-[11px] font-black text-emerald-400 tracking-wide">DENR-MGB ↗</span>
                                <span class="text-[9px] text-slate-300 font-medium">Mines and Geosciences Bureau</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- PART A: DUAL CLIMATE CORRIDORS & 3 SEASONAL CYCLES --}}
    <div class="space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
                <h3 class="text-base font-bold text-slate-900">1. Agro-Meteorological Regimes &amp; Seasonal Cycles</h3>
            </div>
            <span class="text-xs text-slate-500 font-medium">Dual corridor: <strong>Type II</strong> (Eastern Coast) &amp; <strong>Type IV</strong> (Western Valley)</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            {{-- Dry / Hot Season Card --}}
            <div @click="selectedSeason = 'dry'"
                 class="group rounded-3xl overflow-hidden border border-amber-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-amber-400">
                <div class="p-3.5 pb-2.5 flex items-center justify-between gap-2 border-b border-amber-100/70 bg-gradient-to-r from-amber-50/60 to-orange-50/30">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-500 text-slate-950 shadow-xs shrink-0 leading-tight">
                        <span>☀️</span> March – May
                    </span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] font-black bg-amber-100/80 text-amber-900 border border-amber-300/60 shadow-2xs shrink-0 whitespace-nowrap">
                        28°C – 34°C
                    </span>
                </div>
                <div class="relative h-40 sm:h-44 w-full overflow-hidden bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/dry_hot_season.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Hot & Dry Season" onError="this.style.display='none'">
                </div>
                <div class="p-4 sm:p-5 text-left flex-1 flex flex-col justify-between space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm flex items-center justify-between gap-2 group-hover:text-amber-700 transition-colors">
                            <span>Dry / Hot Season</span>
                            <span class="text-xs text-amber-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                        </h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed line-clamp-2">
                            Peak sun-drying for palay grains, vibrant tourism, and watersports at CWC and Caramoan.
                        </p>
                    </div>
                    <div class="pt-2 border-t border-amber-100 flex items-center justify-between text-[11px] font-bold text-amber-700">
                        <span>Inspect Public Safety &amp; Heat Data</span>
                        <span>&rarr;</span>
                    </div>
                </div>
            </div>

            {{-- Wet / Rainy Season Card --}}
            <div @click="selectedSeason = 'wet'"
                 class="group rounded-3xl overflow-hidden border border-blue-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-blue-400">
                <div class="p-3.5 pb-2.5 flex items-center justify-between gap-2 border-b border-blue-100/70 bg-gradient-to-r from-blue-50/60 to-indigo-50/30">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-blue-600 text-white shadow-xs shrink-0 leading-tight">
                        <span>🌧️</span> June – November
                    </span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] font-black bg-blue-100/80 text-blue-900 border border-blue-300/60 shadow-2xs shrink-0 whitespace-nowrap">
                        24°C – 31°C
                    </span>
                </div>
                <div class="relative h-40 sm:h-44 w-full overflow-hidden bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/wet_season.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Wet & Rainy Season" onError="this.style.display='none'">
                </div>
                <div class="p-4 sm:p-5 text-left flex-1 flex flex-col justify-between space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm flex items-center justify-between gap-2 group-hover:text-blue-700 transition-colors">
                            <span>Wet / Rainy Season</span>
                            <span class="text-xs text-blue-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                        </h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed line-clamp-2">
                            Maximum agricultural planting, continuous Bicol River recharge, and active typhoon monitoring.
                        </p>
                    </div>
                    <div class="pt-2 border-t border-blue-100 flex items-center justify-between text-[11px] font-bold text-blue-700">
                        <span>Inspect Inundation &amp; Drainage</span>
                        <span>&rarr;</span>
                    </div>
                </div>
            </div>

            {{-- Cool / Northeast Monsoon Season Card --}}
            <div @click="selectedSeason = 'cool'"
                 class="group rounded-3xl overflow-hidden border border-teal-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-teal-400">
                <div class="p-3.5 pb-2.5 flex items-center justify-between gap-2 border-b border-teal-100/70 bg-gradient-to-r from-teal-50/60 to-emerald-50/30">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-teal-600 text-white shadow-xs shrink-0 leading-tight">
                        <span>🍃</span> December – February
                    </span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] font-black bg-teal-100/80 text-teal-900 border border-teal-300/60 shadow-2xs shrink-0 whitespace-nowrap">
                        21°C – 28°C
                    </span>
                </div>
                <div class="relative h-40 sm:h-44 w-full overflow-hidden bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/cool_season.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Cool Amihan Season" onError="this.style.display='none'">
                </div>
                <div class="p-4 sm:p-5 text-left flex-1 flex flex-col justify-between space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm flex items-center justify-between gap-2 group-hover:text-teal-700 transition-colors">
                            <span>Cool Amihan Season</span>
                            <span class="text-xs text-teal-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                        </h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed line-clamp-2">
                            Crisp montane temperatures around Mt. Isarog/Iriga, ideal upland vegetable harvests and ecotourism.
                        </p>
                    </div>
                    <div class="pt-2 border-t border-teal-100 flex items-center justify-between text-[11px] font-bold text-teal-700">
                        <span>Inspect Coastal Wave &amp; Wind Data</span>
                        <span>&rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PART B: HAZARD SUSCEPTIBILITY & INSTITUTIONAL DISASTER DEFENSE --}}
    <div class="space-y-4 pt-4 border-t border-slate-100">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                <h3 class="text-base font-bold text-slate-900">2. Environmental Risk Susceptibility &amp; Pre-Emptive Evacuation</h3>
            </div>
            <span class="text-xs text-slate-500 font-medium">Click any card to inspect full technical vulnerability breakdown</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Card 1: Lowland Flood & Volcanic Buffer --}}
            <div @click="selectedHazard = 'flood_volcano'"
                 class="group rounded-3xl overflow-hidden border border-rose-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-rose-400">
                <div class="p-3.5 pb-2.5 flex flex-wrap items-center justify-between gap-2 border-b border-rose-100 bg-gradient-to-r from-rose-50/70 to-red-50/40">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-600 text-white shadow-xs shrink-0 leading-tight">
                        <span>⚠️</span> Lowland Flood &amp; Volcanic Buffer
                    </span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] font-black bg-rose-100/90 text-rose-900 border border-rose-300/60 shadow-2xs shrink-0">
                        42% Inundation Area
                    </span>
                </div>
                <div class="relative h-44 sm:h-48 w-full overflow-hidden bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/disaster-mitigation.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="CamSur Flood Mitigation & Disaster Defense" onError="this.style.display='none'">
                </div>
                <div class="p-5 text-left flex-1 flex flex-col justify-between space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base group-hover:text-rose-700 transition-colors">
                            Lowland Basin Inundation &amp; Volcanic Hazard Zone
                        </h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            Bicol River catchment draining into San Miguel Bay; monitored volcanic buffer around Mt. Isarog and Mt. Iriga with engineered dikes and automated pumping stations.
                        </p>
                    </div>
                    <div class="pt-2.5 border-t border-rose-100 flex items-center justify-between text-xs font-bold text-rose-700">
                        <span>Inspect Flood Risk &amp; Evacuation Protocol</span>
                        <span>&rarr;</span>
                    </div>
                </div>
            </div>

            {{-- Card 2: Mountainous Slope, Landslide & Typhoon Warning --}}
            <div @click="selectedHazard = 'landslide_cyclone'"
                 class="group rounded-3xl overflow-hidden border border-amber-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-amber-400">
                <div class="p-3.5 pb-2.5 flex flex-wrap items-center justify-between gap-2 border-b border-amber-100 bg-gradient-to-r from-amber-50/70 to-orange-50/40">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-500 text-slate-950 shadow-xs shrink-0 leading-tight">
                        <span>🌀</span> Mountain Slope &amp; Typhoon Early Warning
                    </span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] font-black bg-amber-100/90 text-amber-900 border border-amber-300/60 shadow-2xs shrink-0">
                        58% Upland Terrain
                    </span>
                </div>
                <div class="relative h-44 sm:h-48 w-full overflow-hidden bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/coastal-resilience.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="CamSur Slope Protection and Early Warning Systems" onError="this.style.display='none'">
                </div>
                <div class="p-5 text-left flex-1 flex flex-col justify-between space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base group-hover:text-amber-700 transition-colors">
                            Upland Slopes, Landslide &amp; Typhoon Early Warning
                        </h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            Steep mountainous corridors of Caramoan Peninsula and Mt. Isarog foothills protected with bio-engineered vetiver root systems and 24/7 Doppler telemetry.
                        </p>
                    </div>
                    <div class="pt-2.5 border-t border-amber-100 flex items-center justify-between text-xs font-bold text-amber-800">
                        <span>Inspect Slope Protection &amp; Early Warning</span>
                        <span>&rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PART C: 🏛️ INTER-AGENCY KNOWLEDGE & CAMARINES SUR DRRM RESILIENCE HUB (DOST-PAGASA • DOST-PHIVOLCS • DENR-MGB) --}}
    <div x-data="{
            activeAgencyTab: 'pagasa',
            activeSignal: 1,
            checkedItems: {
                water: true,
                food: true,
                flashlight: true,
                radio: false,
                meds: true,
                whistle: false,
                docs: true,
                powerbank: false,
                hygiene: true
            },
            get checkedCount() {
                return Object.values(this.checkedItems).filter(Boolean).length;
            }
         }"
         class="space-y-6 pt-6 border-t border-slate-100">
        
        {{-- Header of Part C --}}
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-gradient-to-r from-slate-900 via-sky-950 to-slate-900 p-5 sm:p-6 rounded-3xl text-white shadow-md border border-slate-800">
            <div class="flex items-center gap-3.5">
                <div class="w-12 h-12 rounded-2xl bg-sky-500/20 text-sky-300 border border-sky-400/30 flex items-center justify-center text-2xl shadow-inner shrink-0">
                    🛡️
                </div>
                <div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-[9px] font-black uppercase tracking-wider text-sky-300 bg-sky-500/20 px-2 py-0.5 rounded-full border border-sky-400/30">
                            Province-Wide DRRM Framework
                        </span>
                        <span class="text-[9px] font-black uppercase tracking-wider text-amber-300 bg-amber-500/20 px-2 py-0.5 rounded-full border border-amber-400/30">
                            Proteksyon ng Bawat Pamilyang CamSur
                        </span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-black text-white mt-1">
                        Camarines Sur Disaster Preparedness &amp; Early Warning Intelligence Hub
                    </h3>
                    <p class="text-xs text-slate-300 mt-0.5">
                        Pangkalahatang gabay sa kaligtasan, alerto sa bagyo, lindol, baha, at guho para sa 35 munisipyo at 2 lungsod ng Camarines Sur mula sa DOST-PAGASA, DOST-PHIVOLCS, at DENR-MGB.
                    </p>
                </div>
            </div>

            {{-- Agency Selector Tabs --}}
            <div class="flex items-center gap-1.5 p-1 bg-slate-800/90 rounded-2xl border border-slate-700 shrink-0 self-start sm:self-center">
                <button type="button" @click="activeAgencyTab = 'pagasa'"
                        :class="activeAgencyTab === 'pagasa' ? 'bg-sky-500 text-white shadow-xs font-bold' : 'text-slate-400 hover:text-white font-medium'"
                        class="px-3 py-1.5 rounded-xl text-xs flex items-center gap-1.5 transition-all cursor-pointer">
                    <img src="{{ asset('img/about/socio-economic/pagasa.png') }}" class="w-4 h-4 object-contain rounded-full bg-white p-0.5" alt="PAGASA">
                    <span>PAGASA</span>
                </button>
                <button type="button" @click="activeAgencyTab = 'phivolcs'"
                        :class="activeAgencyTab === 'phivolcs' ? 'bg-rose-600 text-white shadow-xs font-bold' : 'text-slate-400 hover:text-white font-medium'"
                        class="px-3 py-1.5 rounded-xl text-xs flex items-center gap-1.5 transition-all cursor-pointer">
                    <img src="{{ asset('img/about/socio-economic/phivolcs.svg') }}" class="w-4 h-4 object-contain rounded-full bg-white p-0.5" alt="PHIVOLCS">
                    <span>PHIVOLCS</span>
                </button>
                <button type="button" @click="activeAgencyTab = 'mgb'"
                        :class="activeAgencyTab === 'mgb' ? 'bg-emerald-600 text-white shadow-xs font-bold' : 'text-slate-400 hover:text-white font-medium'"
                        class="px-3 py-1.5 rounded-xl text-xs flex items-center gap-1.5 transition-all cursor-pointer">
                    <img src="{{ asset('img/about/socio-economic/mgb.svg') }}" class="w-4 h-4 object-contain rounded-full bg-white p-0.5" alt="MGB">
                    <span>MGB</span>
                </button>
            </div>
        </div>

        {{-- TAB 1: DOST-PAGASA (Weather, Storm Signals & Rainfall Warning) --}}
        <div x-show="activeAgencyTab === 'pagasa'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                {{-- Left: Tropical Cyclone Wind Signal (TCWS) Interactive Explorer --}}
                <div class="lg:col-span-7 bg-white rounded-3xl p-5 sm:p-6 border border-sky-200/80 shadow-xs space-y-4">
                    <div class="flex flex-wrap items-center justify-between gap-2 border-b border-sky-100 pb-3">
                        <div class="flex items-center gap-2.5">
                            <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-sm">🌀</span>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Tropical Cyclone Wind Signals (TCWS #1 – #5) sa CamSur</h4>
                                <p class="text-[11px] text-slate-500">Piliin ang Signal level upang malaman ang lakas ng hangin, banta sa komunidad, at opisyal na suspensyon.</p>
                            </div>
                        </div>
                        <a href="https://bagong.pagasa.dost.gov.ph/" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold text-sky-600 hover:underline flex items-center gap-1">
                            Live PAGASA Bulletins ↗
                        </a>
                    </div>

                    {{-- Signal Selector Pills --}}
                    <div class="grid grid-cols-5 gap-1.5 sm:gap-2">
                        <button type="button" @click="activeSignal = 1"
                                :class="activeSignal === 1 ? 'bg-sky-600 text-white shadow-md border-sky-600 scale-105' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="p-2 sm:p-2.5 rounded-2xl border text-center transition-all cursor-pointer flex flex-col items-center">
                            <span class="text-[10px] uppercase font-bold opacity-80">Signal</span>
                            <span class="text-base sm:text-lg font-black mt-0.5">#1</span>
                        </button>
                        <button type="button" @click="activeSignal = 2"
                                :class="activeSignal === 2 ? 'bg-amber-500 text-slate-950 shadow-md border-amber-500 scale-105' : 'bg-slate-50 text-slate-700 hover:bg-amber-50 border-slate-200'"
                                class="p-2 sm:p-2.5 rounded-2xl border text-center transition-all cursor-pointer flex flex-col items-center">
                            <span class="text-[10px] uppercase font-bold opacity-80">Signal</span>
                            <span class="text-base sm:text-lg font-black mt-0.5">#2</span>
                        </button>
                        <button type="button" @click="activeSignal = 3"
                                :class="activeSignal === 3 ? 'bg-orange-600 text-white shadow-md border-orange-600 scale-105' : 'bg-slate-50 text-slate-700 hover:bg-orange-50 border-slate-200'"
                                class="p-2 sm:p-2.5 rounded-2xl border text-center transition-all cursor-pointer flex flex-col items-center">
                            <span class="text-[10px] uppercase font-bold opacity-80">Signal</span>
                            <span class="text-base sm:text-lg font-black mt-0.5">#3</span>
                        </button>
                        <button type="button" @click="activeSignal = 4"
                                :class="activeSignal === 4 ? 'bg-rose-600 text-white shadow-md border-rose-600 scale-105' : 'bg-slate-50 text-slate-700 hover:bg-rose-50 border-slate-200'"
                                class="p-2 sm:p-2.5 rounded-2xl border text-center transition-all cursor-pointer flex flex-col items-center">
                            <span class="text-[10px] uppercase font-bold opacity-80">Signal</span>
                            <span class="text-base sm:text-lg font-black mt-0.5">#4</span>
                        </button>
                        <button type="button" @click="activeSignal = 5"
                                :class="activeSignal === 5 ? 'bg-purple-700 text-white shadow-md border-purple-700 scale-105' : 'bg-slate-50 text-slate-700 hover:bg-purple-50 border-slate-200'"
                                class="p-2 sm:p-2.5 rounded-2xl border text-center transition-all cursor-pointer flex flex-col items-center">
                            <span class="text-[10px] uppercase font-bold opacity-80">Signal</span>
                            <span class="text-base sm:text-lg font-black mt-0.5">#5</span>
                        </button>
                    </div>

                    {{-- Dynamic Signal Breakdown --}}
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-3">
                        {{-- Signal 1 --}}
                        <div x-show="activeSignal === 1" class="space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-sky-100 text-sky-900 border border-sky-300/80 shadow-2xs shrink-0 self-start sm:self-auto">
                                    Hangin: 39 – 61 km/h (Lead Time: 36 Oras)
                                </span>
                                <span class="text-[10px] font-black text-slate-700 bg-white px-2.5 py-0.5 rounded-lg border border-slate-200 shadow-2xs self-start sm:self-auto">
                                    DepEd &amp; EDMERO: Kinder – Grade 12 Suspended
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                <strong>Banta sa Lalawigan:</strong> Banayad hanggang katamtamang hanging may paulit-ulit na pag-ulan sa silangang baybayin ng Caramoan at Lagonoy Gulf. Posibleng kaunting pinsala sa mga pananim na palay at mga magagaang istruktura.
                            </p>
                            <div class="p-2.5 bg-white rounded-xl border border-sky-200 text-[11px] text-sky-950">
                                <strong>💡 Gabay sa mga Pamilya at Komunidad:</strong> I-charge ang mga ilawan at cellphone; linisin ang mga drainage sa paligid ng bahay; i-secure ang mga bangkang pangisda sa mga baybayin ng Ragay Gulf at San Miguel Bay.
                            </div>
                        </div>

                        {{-- Signal 2 --}}
                        <div x-show="activeSignal === 2" class="space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-100 text-amber-950 border border-amber-300/80 shadow-2xs shrink-0 self-start sm:self-auto">
                                    Hangin: 62 – 88 km/h (Lead Time: 24 Oras)
                                </span>
                                <span class="text-[10px] font-black text-rose-700 bg-rose-50 px-2.5 py-0.5 rounded-lg border border-rose-200 shadow-2xs self-start sm:self-auto">
                                    Lahat ng Antas (Pati Kolehiyo &amp; Work) Suspended
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                <strong>Banta sa Lalawigan:</strong> Malalakas na bugso ng hangin na maaaring magpabali ng mga sanga ng punongkahoy at magtanggal ng marurupok na bubong. Posibleng blackout sa mga distribution lines ng CASURECO I, II, III, at IV.
                            </p>
                            <div class="p-2.5 bg-white rounded-xl border border-amber-200 text-[11px] text-amber-950">
                                <strong>💡 Gabay sa mga Pamilya at Komunidad:</strong> Talian o pabigatan ang mga bubong; mag-imbak ng inuming tubig at pagkaing hindi madaling mapanis; bawal nang pumalaot ang anumang sasakyang pandagat.
                            </div>
                        </div>

                        {{-- Signal 3 --}}
                        <div x-show="activeSignal === 3" class="space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-orange-100 text-orange-950 border border-orange-300/80 shadow-2xs shrink-0 self-start sm:self-auto">
                                    Hangin: 89 – 117 km/h (Lead Time: 18 Oras)
                                </span>
                                <span class="text-[10px] font-black text-rose-800 bg-rose-50 px-2.5 py-0.5 rounded-lg border border-rose-200 shadow-2xs self-start sm:self-auto">
                                    Mataas na Peligro: Lumipat sa Matitibay na Gusali
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                <strong>Banta sa Lalawigan:</strong> Mapaminsalang hangin at baha. Malawakang pagkaputol ng linya ng kuryente at komunikasyon. Posibleng mabilis na pagtaas ng tubig sa Bicol River catchment (mga bayan ng Milaor, Minalabac, Nabua, Bato, at Baao).
                            </p>
                            <div class="p-2.5 bg-white rounded-xl border border-orange-200 text-[11px] text-orange-950">
                                <strong>💡 Gabay sa mga Pamilya at Komunidad:</strong> Magsagawa ng pre-emptive evacuation sa pinakamalapit na District Evacuation Center; lumayo sa mga pampang ng ilog at paanan ng bundok bago sumapit ang gabi.
                            </div>
                        </div>

                        {{-- Signal 4 --}}
                        <div x-show="activeSignal === 4" class="space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-100 text-rose-950 border border-rose-300/80 shadow-2xs shrink-0 self-start sm:self-auto">
                                    Hangin: 118 – 184 km/h (Lead Time: 12 Oras)
                                </span>
                                <span class="text-[10px] font-black text-rose-800 bg-rose-50 px-2.5 py-0.5 rounded-lg border border-rose-200 shadow-2xs self-start sm:self-auto">
                                    Typhoon Level: Matinding Pagkasira
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                <strong>Banta sa Lalawigan:</strong> Napakalakas na bagyo na may dalang storm surge na hanggang 2–3 metro sa mga baybayin ng San Miguel Bay, Ragay Gulf, at Lagonoy Gulf. Malubhang pinsala sa agrikultura at mga istruktura.
                            </p>
                            <div class="p-2.5 bg-white rounded-xl border border-rose-200 text-[11px] text-rose-950">
                                <strong>💡 Gabay sa mga Pamilya at Komunidad:</strong> Mahigpit na ipinagbabawal ang paglabas; pumirmi sa pinakamatatag na bahagi ng evacuation center o concrete reinforced room; lumayo sa lahat ng bintanang salamin.
                            </div>
                        </div>

                        {{-- Signal 5 --}}
                        <div x-show="activeSignal === 5" class="space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-purple-100 text-purple-950 border border-purple-300/80 shadow-2xs shrink-0 self-start sm:self-auto">
                                    Hangin: &gt; 185 km/h (Super Typhoon)
                                </span>
                                <span class="text-[10px] font-black text-purple-900 bg-purple-50 px-2.5 py-0.5 rounded-lg border border-purple-200 shadow-2xs self-start sm:self-auto">
                                    Catastrophic Threat: 100% Mandatory Evacuation
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                <strong>Banta sa Lalawigan:</strong> Malawakang delubyo at pagkasira ng mga tahanan at tulay sa buong Camarines Sur. Storm surge na hihigit sa 3 metro sa mga coastal LGUs (Siruma, Tinambac, Garchitorena, Caramoan, Pasacao, Balatan).
                            </p>
                            <div class="p-2.5 bg-white rounded-xl border border-purple-200 text-[11px] text-purple-950">
                                <strong>💡 Gabay sa mga Pamilya at Komunidad:</strong> 100% ipatupad ang forced/mandatory evacuation bago tumama ang mata ng bagyo; sundin ang emergency directives ng EDMERO CamSur at PDRRMC.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Color-Coded Rainfall Warning System --}}
                <div class="lg:col-span-5 bg-white rounded-3xl p-5 sm:p-6 border border-sky-200/80 shadow-xs space-y-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2.5 border-b border-sky-100 pb-3">
                            <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-black text-sm">🌧️</span>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Color-Coded Rainfall Warning sa CamSur</h4>
                                <p class="text-[11px] text-slate-500">Mga antas ng babala sa lakas ng buhos ng ulan at pagbaha.</p>
                            </div>
                        </div>

                        <div class="space-y-2.5 mt-3">
                            {{-- Yellow --}}
                            <div class="p-3 bg-amber-50/90 rounded-2xl border border-amber-200/80 flex items-start gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-amber-400 mt-0.5 shrink-0 shadow-xs ring-2 ring-amber-200"></span>
                                <div>
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="text-xs font-black text-amber-950">🟡 YELLOW WARNING (7.5–15 mm/hr)</span>
                                        <span class="text-[9px] font-extrabold uppercase px-1.5 py-0.5 rounded-md bg-amber-200/80 text-amber-900">Magmatyag</span>
                                    </div>
                                    <p class="text-[11px] text-slate-600 mt-0.5">Malakas na buhos ng ulan; posibleng pagbaha sa mabababang lugar sa Bicol River Basin.</p>
                                </div>
                            </div>

                            {{-- Orange --}}
                            <div class="p-3 bg-orange-50/90 rounded-2xl border border-orange-200/80 flex items-start gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-orange-500 mt-0.5 shrink-0 shadow-xs ring-2 ring-orange-200"></span>
                                <div>
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="text-xs font-black text-orange-950">🟠 ORANGE WARNING (15–30 mm/hr)</span>
                                        <span class="text-[9px] font-extrabold uppercase px-1.5 py-0.5 rounded-md bg-orange-200/80 text-orange-900">Maghanda</span>
                                    </div>
                                    <p class="text-[11px] text-slate-600 mt-0.5">Matinding ulan; nagbabanta ang baha at pagguho sa mga bulubunduking kalsada.</p>
                                </div>
                            </div>

                            {{-- Red --}}
                            <div class="p-3 bg-rose-50/90 rounded-2xl border border-rose-200/80 flex items-start gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-rose-600 mt-0.5 shrink-0 shadow-xs ring-2 ring-rose-200"></span>
                                <div>
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="text-xs font-black text-rose-950">🔴 RED WARNING (&gt;30 mm/hr)</span>
                                        <span class="text-[9px] font-extrabold uppercase px-1.5 py-0.5 rounded-md bg-rose-200/80 text-rose-900">Lumikas Na</span>
                                    </div>
                                    <p class="text-[11px] text-slate-600 mt-0.5">Torrensiyal na ulan at malawakang delubyo; agarang lumikas sa evacuation center.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-sky-700">
                        <span>CamSur Doppler Radar Coverage: Daet &amp; Virac Stations</span>
                        <span>🛰️ 24/7 Active</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB 2: DOST-PHIVOLCS (Earthquake Drill & Volcano Alert Levels) --}}
        <div x-show="activeAgencyTab === 'phivolcs'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                {{-- Left: Duck, Cover, and Hold On Guide for Homes, Schools & Offices --}}
                <div class="lg:col-span-7 bg-white rounded-3xl p-5 sm:p-6 border border-rose-200/80 shadow-xs space-y-4">
                    <div class="flex flex-wrap items-center justify-between gap-2 border-b border-rose-100 pb-3">
                        <div class="flex items-center gap-2.5">
                            <span class="w-8 h-8 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-black text-sm">🛑</span>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Lindol Protocol: "Duck, Cover, &amp; Hold On"</h4>
                                <p class="text-[11px] text-slate-500">Mga hakbang na dapat sundin sa tahanan, paaralan, pagawaan, at tanggapan kapag may lindol.</p>
                            </div>
                        </div>
                        <a href="https://www.phivolcs.dost.gov.ph/" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold text-rose-600 hover:underline flex items-center gap-1">
                            Live PHIVOLCS Feeds ↗
                        </a>
                    </div>

                    {{-- 3 Step Interactive Visual Cards --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="p-3.5 bg-rose-50/80 rounded-2xl border border-rose-100 text-center space-y-1.5">
                            <div class="w-10 h-10 rounded-full bg-rose-500 text-white font-black text-sm flex items-center justify-center mx-auto shadow-xs">
                                1
                            </div>
                            <span class="text-xs font-black text-slate-900 block">DUMAPA (Drop)</span>
                            <p class="text-[10px] text-slate-600 leading-tight">
                                Agad lumuhod at dumapa bago ka mabuwal sa lakas ng pag-uga ng lupa.
                            </p>
                        </div>

                        <div class="p-3.5 bg-amber-50/80 rounded-2xl border border-amber-100 text-center space-y-1.5">
                            <div class="w-10 h-10 rounded-full bg-amber-500 text-slate-950 font-black text-sm flex items-center justify-center mx-auto shadow-xs">
                                2
                            </div>
                            <span class="text-xs font-black text-slate-900 block">PUMASILONG (Cover)</span>
                            <p class="text-[10px] text-slate-600 leading-tight">
                                Sumukob sa ilalim ng matibay na lamesa at takpan ang ulo at leeg laban sa mga bumabagsak na debris.
                            </p>
                        </div>

                        <div class="p-3.5 bg-sky-50/80 rounded-2xl border border-sky-100 text-center space-y-1.5">
                            <div class="w-10 h-10 rounded-full bg-sky-600 text-white font-black text-sm flex items-center justify-center mx-auto shadow-xs">
                                3
                            </div>
                            <span class="text-xs font-black text-slate-900 block">KUMAPIT (Hold On)</span>
                            <p class="text-[10px] text-slate-600 leading-tight">
                                Kumapit nang mahigpit sa paa ng lamesa hanggang sa huminto ang pagyanig at ligtas nang lumabas.
                            </p>
                        </div>
                    </div>

                    <div class="p-3.5 bg-slate-900 text-white rounded-2xl text-xs flex items-center gap-3">
                        <span class="text-xl">🌊</span>
                        <div>
                            <span class="font-bold text-amber-300 block">Tsunami Protocol sa 14 na Coastal LGUs ng Camarines Sur</span>
                            <p class="text-[11px] text-slate-300">
                                Kapag naramdaman ang malakas na pagyanig sa baybayin ng San Miguel Bay, Ragay Gulf, o Lagonoy Gulf at biglang umurong ang dagat, <strong>HUWAG mag-usyoso — agad tumakbo sa mataas na lugar na hindi bababa sa 10–15 metro ang taas!</strong>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right: Volcano Alert Levels (Mt. Isarog & Mt. Iriga) --}}
                <div class="lg:col-span-5 bg-white rounded-3xl p-5 sm:p-6 border border-rose-200/80 shadow-xs space-y-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2.5 border-b border-rose-100 pb-3">
                            <span class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-black text-sm">🌋</span>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Volcano Alert Levels (Mt. Isarog &amp; Mt. Iriga)</h4>
                                <p class="text-[11px] text-slate-500">6-km Permanent Danger Zone (PDZ) buffer protocol.</p>
                            </div>
                        </div>

                        <div class="space-y-2 mt-3 text-xs">
                            <div class="p-2.5 bg-emerald-50 rounded-xl border border-emerald-200 flex items-center justify-between">
                                <span class="font-bold text-emerald-900">Alert Level 0: Normal / Quiet</span>
                                <span class="text-[10px] text-emerald-700 font-semibold">Payapa; normal na aktibidad</span>
                            </div>
                            <div class="p-2.5 bg-amber-50 rounded-xl border border-amber-200 flex items-center justify-between">
                                <span class="font-bold text-amber-900">Alert Level 1: Low-Level Unrest</span>
                                <span class="text-[10px] text-amber-700 font-semibold">Bawal pumasok sa 6-km PDZ</span>
                            </div>
                            <div class="p-2.5 bg-orange-50 rounded-xl border border-orange-200 flex items-center justify-between">
                                <span class="font-bold text-orange-900">Alert Level 2–3: Magmatic Unrest</span>
                                <span class="text-[10px] text-orange-700 font-semibold">Pre-emptive evacuation ng barangay</span>
                            </div>
                            <div class="p-2.5 bg-rose-50 rounded-xl border border-rose-200 flex items-center justify-between">
                                <span class="font-bold text-rose-900">Alert Level 4–5: Hazardous Eruption</span>
                                <span class="text-[10px] text-rose-700 font-semibold">Agarang evacuation sa safe zones</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 flex items-center justify-between">
                        <span>Seismic Monitoring Hubs: Pili, Naga, &amp; Buhi Stations</span>
                        <span class="font-bold text-rose-600">24/7 Telemetry</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB 3: DENR-MGB (Geohazard Slope Indicators & Family 72h Go-Bag Checklist) --}}
        <div x-show="activeAgencyTab === 'mgb'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                {{-- Left: Geohazard Slope Warning Signs --}}
                <div class="lg:col-span-6 bg-white rounded-3xl p-5 sm:p-6 border border-emerald-200/80 shadow-xs space-y-4">
                    <div class="flex flex-wrap items-center justify-between gap-2 border-b border-emerald-100 pb-3">
                        <div class="flex items-center gap-2.5">
                            <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-black text-sm">⛰️</span>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">MGB Rain-Induced Landslide Warning Signs</h4>
                                <p class="text-[11px] text-slate-500">Mga senyales ng pagguho sa bulubundukin ng Caramoan, Mt. Isarog, at Lupi-Del Gallego.</p>
                            </div>
                        </div>
                        <a href="https://mgb.gov.ph/" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold text-emerald-600 hover:underline flex items-center gap-1">
                            Geohazard Portal ↗
                        </a>
                    </div>

                    <div class="space-y-2.5 text-xs text-slate-700">
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200 flex items-start gap-2.5">
                            <span class="text-base shrink-0">⚠️</span>
                            <div>
                                <strong class="text-slate-900 block text-xs">Bitak sa lupa, kalsada, o pundasyon ng gusali</strong>
                                <span class="text-[11px] text-slate-500">Palatandaan ng unti-unting paggalaw at paglambot ng slope sa gilid ng bundok o highway.</span>
                            </div>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200 flex items-start gap-2.5">
                            <span class="text-base shrink-0">🌲</span>
                            <div>
                                <strong class="text-slate-900 block text-xs">Pagtikwas o pagtagilid ng mga puno at poste ng kuryente</strong>
                                <span class="text-[11px] text-slate-500">Malinaw na senyales ng soil creep at napipintong pagbagsak ng lupa sa kabundukan.</span>
                            </div>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200 flex items-start gap-2.5">
                            <span class="text-base shrink-0">💧</span>
                            <div>
                                <strong class="text-slate-900 block text-xs">Biglang paglabo o pagkulay-putik ng bukal at ilog</strong>
                                <span class="text-[11px] text-slate-500">Senyales na barado o gumuho ang upstream drainage channels sa kabundukan.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Interactive Family 72-Hour "Go-Bag" Survival Checklist --}}
                <div class="lg:col-span-6 bg-white rounded-3xl p-5 sm:p-6 border border-emerald-200/80 shadow-xs space-y-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between gap-2 border-b border-emerald-100 pb-3">
                            <div class="flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-black text-sm">🎒</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">72-Hour Family Emergency "Go-Bag" Checklist</h4>
                                    <p class="text-[11px] text-slate-500">I-check ang bawat kagamitan para sa kahandaan ng bawat tahanang CamSur.</p>
                                </div>
                            </div>
                            <div class="px-2.5 py-1 rounded-xl bg-emerald-100 text-emerald-900 text-xs font-black shrink-0">
                                <span x-text="checkedCount"></span>/9 Handa
                            </div>
                        </div>

                        {{-- Interactive Checklist Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-3 text-xs">
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.water" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">💧 1 Galon Tubig / tao / araw</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.food" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">🥫 Canned Goods &amp; Ready-to-eat Food</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.flashlight" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">🔦 Flashlight &amp; Karagdagang Baterya</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.radio" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">📻 Portable AM/FM Transistor Radio</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.meds" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">🩹 First Aid Kit &amp; Maintenance Medicines</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.whistle" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">📢 Pito (Whistle for Rescue Signaling)</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.docs" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">📄 IDs, Land Titles &amp; Waterproof Docs</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition">
                                <input type="checkbox" x-model="checkedItems.powerbank" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">🔋 Heavy-Duty Powerbank &amp; Cables</span>
                            </label>
                            <label class="p-2.5 bg-slate-50 rounded-xl border border-slate-200 flex items-center gap-2.5 cursor-pointer hover:bg-emerald-50 transition sm:col-span-2">
                                <input type="checkbox" x-model="checkedItems.hygiene" class="rounded text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                                <span class="font-medium text-slate-800">🧼 Family Hygiene Kit (Alcohol, Sabon, Toothbrush, &amp; Sanitary Supplies)</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-emerald-800 font-bold">
                        <span>DENR-MGB Geohazard Assessment Standard</span>
                        <span>🎒 Family Survival Checklist</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hotlines & Quick Emergency Response Card --}}
        <div class="p-4 sm:p-5 bg-gradient-to-r from-rose-50 via-amber-50 to-sky-50 rounded-3xl border border-slate-200 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-rose-500 to-red-600 text-white flex items-center justify-center shadow-md shrink-0 border border-rose-400/40">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm font-black text-slate-900">Camarines Sur 24/7 Emergency Response Hotlines</h4>
                    <p class="text-[11px] text-slate-600">Para sa agarang paglikas, tulong medikal, o disaster rescue, tumawag sa EDMERO Emergency Operations Center.</p>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-2 shrink-0">
                <a href="tel:911" class="px-3.5 py-1.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-black text-xs shadow-xs transition cursor-pointer flex items-center gap-1.5">
                    <span>🚨</span> National Hotline: 911
                </a>
                <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-300 text-slate-800 font-black text-xs shadow-2xs">
                    EDMERO CamSur: (054) 477-3333
                </span>
            </div>
        </div>
    </div>
</section>
