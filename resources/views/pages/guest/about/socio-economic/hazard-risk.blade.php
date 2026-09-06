{{-- 5. HAZARD SUSCEPTIBILITY, RISK MITIGATION & DISASTER RESILIENCY FRAMEWORK --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    
    {{-- Top Section Header & Inter-Agency Command Hub --}}
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-slate-100">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-rose-100 text-rose-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div>
                <span class="text-[10px] font-black uppercase tracking-wider text-rose-600 bg-rose-50 px-2.5 py-0.5 rounded-full border border-rose-200/60 text-center justify-center inline-block">
                    Disaster Risk Reduction & Management
                </span>
                <h2 class="text-2xl font-bold text-slate-900 mt-1">Hazard Susceptibility & Environmental Risk Resiliency</h2>
                <p class="text-sm text-slate-500 mt-0.5">Comprehensive vulnerability mapping, engineered mitigation, and life-saving pre-emptive evacuation frameworks.</p>
            </div>
        </div>

        {{-- Institutional Command Hub & Agency Recognition --}}
        <div class="flex flex-wrap items-center gap-3 p-3.5 bg-slate-50 rounded-2xl border border-slate-200/80">
            <div class="flex items-center gap-2.5 pr-3 border-r border-slate-200 shrink-0">
                <img src="{{ asset('img/about/socio-economic/edmero.jpg') }}" alt="EDMERO Camarines Sur" class="w-10 h-10 rounded-xl object-contain shadow-2xs border border-slate-200 bg-white" onError="this.style.display='none'">
                <img src="{{ asset('img/transparency/citizens-charter/camsur_logo_sml.png') }}" alt="Province of Camarines Sur" class="w-9 h-9 object-contain shrink-0" onError="this.src='{{ asset('img/about/socio-economic/brand.png') }}'">
                <div>
                    <span class="text-[9px] font-black text-slate-400 uppercase tracking-widest block">Command Hub</span>
                    <span class="text-xs font-black text-slate-900">EDMERO CamSur</span>
                </div>
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

    {{-- Twin Interactive Preview Cards: Triggering In-Depth Modals --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        {{-- Card 1: Hazard Susceptibility & Lowland Flood Defense (Rose/Red Theme) --}}
        <div @click="selectedHazard = 'flood_volcano'"
             class="group rounded-3xl overflow-hidden border border-rose-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-rose-400">
            
            {{-- Top Pill Bar (Cleanly Outside Image & Wrap-Safe) --}}
            <div class="p-4 sm:p-4.5 pb-3 flex flex-wrap items-center justify-between gap-2 border-b border-rose-100 bg-gradient-to-r from-rose-50/70 to-red-50/40">
                <span class="inline-flex items-center justify-center text-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-rose-600 text-white shadow-xs shrink-0 leading-tight">
                    <span>⚠️</span> Lowland Flood & Volcanic Buffer
                </span>
                <span class="px-2.5 py-1 rounded-full text-xs font-black bg-rose-100/90 text-rose-900 border border-rose-300/60 shadow-2xs shrink-0 text-center justify-center leading-tight">
                    42% Inundation Area
                </span>
            </div>

            {{-- 100% Clean Cinematic Graphic Showcase (No Pills Inside Photo) --}}
            <div class="relative h-48 sm:h-56 w-full overflow-hidden bg-slate-900">
                <img src="{{ asset('img/about/socio-economic/disaster-mitigation.jpg') }}" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" 
                     alt="CamSur Flood Mitigation & Disaster Defense" 
                     onError="this.src='{{ asset('img/about/socio-economic/hazard_shield.jpg') }}'">
            </div>

            {{-- Content Body & Action Button --}}
            <div class="p-5 sm:p-7 text-left flex-1 flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h3 class="font-bold text-slate-900 text-lg flex items-center justify-between gap-2 group-hover:text-rose-700 transition-colors">
                        <span>Flood Control & Volcanic Hazard Prevention</span>
                        <span class="text-xs text-rose-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Bicol River Basin dredging, automated telemetry sensors, and PHIVOLCS 6-km buffer enforcement across Mt. Isarog and Mt. Iriga to eliminate disaster risks.
                    </p>
                </div>

                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="w-full py-3 px-4 rounded-xl bg-rose-600 hover:bg-rose-700 text-white text-xs font-black shadow-xs hover:shadow-md transition-all flex items-center justify-between border border-rose-700/20">
                        <span class="flex items-center gap-1.5">
                            <span>🛡️</span>
                            <span>View Flood & Volcanic Safety Protocol</span>
                        </span>
                        <span class="font-black text-sm">→</span>
                    </div>

                    <div class="flex items-center justify-between text-[11px] font-bold text-slate-500 pt-1">
                        <span class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                            Audit: PDRRMO Vulnerability Matrix
                        </span>
                        <span class="text-rose-700">24/7 Early Warning Telemetry</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Pacific Typhoon Corridor & Coastal Storm Surge Resilience (Amber/Teal Theme) --}}
        <div @click="selectedHazard = 'typhoon_coastal'"
             class="group rounded-3xl overflow-hidden border border-amber-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer ring-offset-2 hover:ring-2 hover:ring-amber-400">
            
            {{-- Top Pill Bar (Cleanly Outside Image & Wrap-Safe) --}}
            <div class="p-4 sm:p-4.5 pb-3 flex flex-wrap items-center justify-between gap-2 border-b border-amber-100 bg-gradient-to-r from-amber-50/70 to-orange-50/40">
                <span class="inline-flex items-center justify-center text-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-amber-600 text-white shadow-xs shrink-0 leading-tight">
                    <span>🛡️</span> Typhoon Defense & Evacuation Hubs
                </span>
                <span class="px-2.5 py-1 rounded-full text-xs font-black bg-amber-100/90 text-amber-950 border border-amber-300/60 shadow-2xs shrink-0 text-center justify-center leading-tight">
                    28,500 Family Capacity
                </span>
            </div>

            {{-- 100% Clean Cinematic Graphic Showcase (No Pills Inside Photo) --}}
            <div class="relative h-48 sm:h-56 w-full overflow-hidden bg-slate-900">
                <img src="{{ asset('img/about/socio-economic/coastal-resilience.jpg') }}" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" 
                     alt="CamSur Coastal Evacuation & Resiliency Centers" 
                     onError="this.src='{{ asset('img/about/socio-economic/cool_season.jpg') }}'">
            </div>

            {{-- Content Body & Action Button --}}
            <div class="p-5 sm:p-7 text-left flex-1 flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h3 class="font-bold text-slate-900 text-lg flex items-center justify-between gap-2 group-hover:text-amber-700 transition-colors">
                        <span>Pacific Cyclone Defense & Surge Buffers</span>
                        <span class="text-xs text-amber-600 font-black opacity-0 group-hover:opacity-100 transition-opacity">&rarr;</span>
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mandatory pre-emptive evacuation into 70 division shelters and 100-meter coastal mangrove greenbelts across 19 coastal LGUs on 3 major gulfs.
                    </p>
                </div>

                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="w-full py-3 px-4 rounded-xl bg-amber-600 hover:bg-amber-700 text-white text-xs font-black shadow-xs hover:shadow-md transition-all flex items-center justify-between border border-amber-700/20">
                        <span class="flex items-center gap-1.5">
                            <span>🌀</span>
                            <span>View Cyclone & Storm Surge Protocol</span>
                        </span>
                        <span class="font-black text-sm">→</span>
                    </div>

                    <div class="flex items-center justify-between text-[11px] font-bold text-slate-500 pt-1">
                        <span class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Network: 37 City/Municipal DRRMOs
                        </span>
                        <span class="text-amber-800 font-bold">EDMERO Hotline Ready</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Visual Learner's 3-Step Public Disaster Action & Safety Matrix --}}
    <div class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 rounded-2xl sm:rounded-3xl p-6 sm:p-8 text-white space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-slate-700/80 pb-4">
            <div>
                <span class="text-[10px] font-black uppercase tracking-widest text-amber-400">Citizen Preparedness Guide</span>
                <h3 class="text-lg sm:text-xl font-bold text-white mt-0.5">Community Action Protocol to Eliminate Hazard Harm</h3>
            </div>
            <span class="text-xs font-bold text-slate-300 bg-white/10 px-3 py-1.5 rounded-xl border border-white/10 shrink-0">
                🚨 Camarines Sur Emergency Response Standard
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
            {{-- Step 1 --}}
            <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/10 space-y-2 relative overflow-hidden">
                <div class="w-8 h-8 rounded-xl bg-amber-400 text-slate-950 font-black text-sm flex items-center justify-center shadow-sm">
                    1
                </div>
                <h4 class="font-bold text-amber-300 text-sm">48h Early Alert & Kit Prep</h4>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Monitor official EDMERO & PAGASA bulletins. Secure roofs, pack 72-hour emergency go-bags (water, food, medicine, documents), and charge essential battery banks.
                </p>
            </div>

            {{-- Step 2 --}}
            <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/10 space-y-2 relative overflow-hidden">
                <div class="w-8 h-8 rounded-xl bg-rose-500 text-white font-black text-sm flex items-center justify-center shadow-sm">
                    2
                </div>
                <h4 class="font-bold text-rose-300 text-sm">24h Pre-Emptive Evacuation</h4>
                <p class="text-xs text-slate-300 leading-relaxed">
                    When LGU MDRRMC signals pre-emptive evacuation, relocate immediately to designated elevated division centers before river swell and high-tide storm surges peak.
                </p>
            </div>

            {{-- Step 3 --}}
            <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/10 space-y-2 relative overflow-hidden">
                <div class="w-8 h-8 rounded-xl bg-teal-400 text-slate-950 font-black text-sm flex items-center justify-center shadow-sm">
                    3
                </div>
                <h4 class="font-bold text-teal-300 text-sm">Safe Post-Hazard Re-entry</h4>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Remain at evacuation centers until EDMERO and Barangay DRRM give official all-clear clearance. Avoid downed powerlines, lahar paths, and flooded riverbanks.
                </p>
            </div>
        </div>
    </div>

</section>
