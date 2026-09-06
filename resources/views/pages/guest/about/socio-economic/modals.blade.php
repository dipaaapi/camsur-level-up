{{-- ========================================== --}}
{{-- 1. INTERACTIVE LGU DETAIL MODAL WITH MAP --}}
{{-- ========================================== --}}
<template x-teleport="body">
    <div x-show="selectedLgu"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
        style="display: none;">

        <div @click.outside="selectedLgu = null" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-2xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-blue-200/80 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Themed Top Header Bar (Blue Theme) --}}
            <div class="p-6 sm:p-7 bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 text-white relative shrink-0 border-b border-blue-800/60">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-white/10 p-2 border border-blue-400/30 flex items-center justify-center shadow-xs backdrop-blur-sm shrink-0">
                        <img :src="selectedLgu?.seal" :alt="selectedLgu?.name" class="w-full h-full object-contain" onError="this.src='/images/camsur-logo.png'">
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-300 bg-blue-500/20 px-2 py-0.5 rounded-full border border-blue-400/30" x-text="selectedLgu?.district"></span>
                            <span class="text-[10px] text-slate-400 font-bold" x-text="selectedLgu?.class"></span>
                        </div>
                        <h3 class="text-2xl font-black text-white mt-0.5" x-text="selectedLgu?.name"></h3>
                    </div>
                </div>
            </div>

            {{-- Modal Body --}}
            <div class="p-6 sm:p-7 overflow-y-auto space-y-6 text-slate-700 text-xs sm:text-sm leading-relaxed">
                {{-- Key Statistics Summary (Blue Themed) --}}
                <div class="grid grid-cols-3 gap-3 text-center">
                    <div class="p-3.5 bg-blue-50/70 rounded-2xl border border-blue-100">
                        <span class="text-[10px] uppercase font-black tracking-wider text-blue-700 block">Land Area</span>
                        <p class="font-black text-slate-900 text-base mt-1" x-text="selectedLgu?.area"></p>
                    </div>
                    <div class="p-3.5 bg-indigo-50/70 rounded-2xl border border-indigo-100">
                        <span class="text-[10px] uppercase font-black tracking-wider text-indigo-700 block">Population</span>
                        <p class="font-black text-slate-900 text-base mt-1" x-text="selectedLgu?.pop"></p>
                    </div>
                    <div class="p-3.5 bg-rose-50/70 rounded-2xl border border-rose-100">
                        <span class="text-[10px] uppercase font-black tracking-wider text-rose-700 block">Evac Centers</span>
                        <p class="font-black text-rose-700 text-base mt-1" x-text="(selectedLgu?.evacCenters || 0) + ' Facilities'"></p>
                    </div>
                </div>

                {{-- Embedded Interactive Google Map --}}
                <div class="space-y-2">
                    <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider flex items-center gap-2">
                        <span class="text-blue-600">🗺️</span>
                        <span>Official Spatial & Boundary Map</span>
                    </h4>
                    <div class="w-full h-64 rounded-2xl overflow-hidden border border-slate-200 shadow-inner bg-slate-100">
                        <iframe :src="selectedLgu?.mapUrl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                {{-- Unified Footer with Side-Aligned Button --}}
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3">
                    <span class="text-[11px] text-slate-400 font-medium">Camarines Sur LGU Spatial Directory</span>
                    <button type="button" @click="selectedLgu = null"
                            class="px-6 py-2.5 rounded-2xl bg-blue-700 hover:bg-blue-800 text-white font-bold text-xs transition cursor-pointer shrink-0 shadow-xs">
                        Close LGU Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ========================================== --}}
{{-- 2. SOCIO-ECONOMIC SUGGESTION & INQUIRY MODAL --}}
{{-- ========================================== --}}
<div id="socioSuggestionModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
    <div class="relative w-full max-w-lg overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white p-6 sm:p-8">
        <div class="flex items-center gap-3 mb-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-400 text-slate-950 text-2xl font-black shadow-md">
                📊
            </div>
            <div>
                <span class="text-[10px] font-black uppercase tracking-wider text-amber-400">Research & Data Integrity</span>
                <h3 class="text-xl font-black text-white leading-tight">Submit Socio-Economic Suggestion</h3>
            </div>
        </div>

        <p class="text-xs text-slate-300 leading-relaxed mb-6 font-normal">
            Help maintain rigorous accuracy for Camarines Sur's socio-economic baseline. Share updated municipal statistics, economic research, disaster mitigation notes, or public inquiries.
        </p>

        <form id="socioSuggestionForm" class="space-y-4">
            <div>
                <label for="socioSugName" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Your Name / Institution (Optional)</label>
                <input type="text" id="socioSugName" placeholder="e.g. Juan Perez / Regional Economic Analyst"
                       class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="socioSugCategory" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Topic / Category *</label>
                    <select id="socioSugCategory" required
                            class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 cursor-pointer">
                        <option value="macroeconomics_gdp">Macroeconomic GDP & Trade</option>
                        <option value="demographics_population">Demographics & Census Data</option>
                        <option value="agriculture_crops">Agriculture, Fisheries & Vetiver</option>
                        <option value="evacuation_drrm">Evacuation Centers & Hazard Audit</option>
                        <option value="sectoral_matrix">Sectoral Infrastructure / Education</option>
                        <option value="lgu_data_correction">LGU Directory / Municipal Data</option>
                        <option value="general_inquiry">General Socio-Economic Inquiry</option>
                    </select>
                </div>
                <div>
                    <label for="socioSugLocation" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Municipality / Focus Area *</label>
                    <input type="text" id="socioSugLocation" required placeholder="e.g. Pili, Naga City, Del Gallego, Ragay"
                           class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
                </div>
            </div>

            <div>
                <label for="socioSugMessage" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Details, Citations or Inquiry *</label>
                <textarea id="socioSugMessage" required rows="4" placeholder="Provide context, references, agency publication links, or specific socio-economic details..."
                          class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 leading-relaxed"></textarea>
            </div>

            <div id="socioSuggestionSuccessMsg" class="hidden rounded-2xl bg-emerald-950/60 border border-emerald-500/40 p-3 text-center text-xs text-emerald-300 font-bold">
                ✓ Thank you! Your suggestion has been successfully submitted to the provincial planning and research team.
            </div>

            <div class="pt-2 flex items-center justify-end gap-3">
                <button type="button" id="cancelSocioSuggestionBtn" class="rounded-2xl border border-slate-700 bg-slate-800 px-5 py-3 text-xs font-bold uppercase tracking-wider text-slate-300 hover:bg-slate-700 transition cursor-pointer">
                    Cancel
                </button>
                <button type="submit" id="submitSocioSuggestionBtn" class="rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-500/20 hover:scale-[1.02] transition cursor-pointer">
                    Submit Suggestion
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ========================================================================= --}}
{{-- 3. SEASONAL HAZARD RISK, PUBLIC SAFETY & PROS/CONS INTERACTIVE MODAL      --}}
{{-- ========================================================================= --}}
<template x-teleport="body">
    <div x-show="selectedSeason !== null"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed inset-0 z-[100] flex items-center justify-center p-3 sm:p-4 md:p-6 bg-slate-950/85 backdrop-blur-md"
         style="display: none;">
        
        <div @click.outside="selectedSeason = null" 
             class="bg-white rounded-3xl max-w-3xl w-full shadow-2xl border border-slate-200 relative max-h-[92vh] flex flex-col overflow-hidden">
            
            {{-- Modal Top Nav & Quick Season Switcher --}}
            <div class="p-4 sm:p-6 pb-3 border-b border-slate-100 flex items-center justify-between gap-3 bg-slate-50/80 shrink-0">
                <div class="flex items-center gap-2 overflow-x-auto py-1">
                    <button type="button" @click="selectedSeason = 'dry'" 
                            class="px-3.5 py-1.5 rounded-full text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer shrink-0"
                            :class="selectedSeason === 'dry' ? 'bg-amber-500 text-slate-950 shadow-sm ring-2 ring-amber-300' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'">
                        <span>☀️</span> Dry Season
                    </button>
                    <button type="button" @click="selectedSeason = 'wet'" 
                            class="px-3.5 py-1.5 rounded-full text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer shrink-0"
                            :class="selectedSeason === 'wet' ? 'bg-blue-600 text-white shadow-sm ring-2 ring-blue-300' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'">
                        <span>🌧️</span> Wet Season
                    </button>
                    <button type="button" @click="selectedSeason = 'cool'" 
                            class="px-3.5 py-1.5 rounded-full text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer shrink-0"
                            :class="selectedSeason === 'cool' ? 'bg-teal-600 text-white shadow-sm ring-2 ring-teal-300' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'">
                        <span>🍃</span> Cool Season
                    </button>
                </div>
            </div>

            {{-- Scrollable Content Body --}}
            <div class="p-6 sm:p-8 md:p-10 overflow-y-auto space-y-8 flex-1 text-slate-700 text-xs sm:text-sm">
                
                {{-- ☀️ 1. DRY / HOT SEASON DETAILS --}}
                <div x-show="selectedSeason === 'dry'" class="space-y-8">
                    {{-- High-Contrast Header Banner --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-slate-900 border border-amber-500/40 text-white shadow-xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 relative overflow-hidden">
                        <div class="space-y-2 relative z-10">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-[11px] font-black uppercase tracking-wider border border-amber-400/30">
                                <span>☀️</span> March – May • High Heat Index Corridor
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-black text-white">Dry / Hot Season (Summer Period)</h3>
                            <p class="text-xs sm:text-sm font-normal text-slate-300 max-w-xl leading-relaxed">
                                Extreme solar radiation with ambient temperatures of 28°C–34°C and dangerous heat indices reaching 42°C–45°C. Heightened agricultural drought, grassfire, and heat-induced health risks.
                            </p>
                        </div>
                        <div class="px-5 py-3.5 rounded-2xl bg-slate-950/90 border border-amber-500/30 text-amber-400 text-center shrink-0 shadow-inner relative z-10">
                            <span class="text-[10px] uppercase font-black tracking-wider block text-slate-400">Peak Ambient</span>
                            <span class="text-xl sm:text-2xl font-black text-amber-300">28°C – 34°C</span>
                        </div>
                    </div>

                    {{-- Pros & Cons Grid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-emerald-50/90 border-2 border-emerald-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-emerald-950 text-base flex items-center gap-2.5 pb-2 border-b border-emerald-200/60">
                                <span class="text-lg">✨</span>
                                <span>Pros & Economic Opportunities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-emerald-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Crop Harvesting & Solar Drying:</strong> Optimum window for rice (palay) and corn sun-drying without post-harvest moisture mold.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Peak Tourism Season:</strong> Crystal-clear ocean waters for island exploration in Caramoan and wakeboarding at CWC Pili.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Infrastructure Acceleration:</strong> Unhindered civil road concreting, river dredging, and construction works.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-amber-50/90 border-2 border-amber-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-amber-950 text-base flex items-center gap-2.5 pb-2 border-b border-amber-200/60">
                                <span class="text-lg">⚠️</span>
                                <span>Cons & Inherent Vulnerabilities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-amber-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-amber-200 text-amber-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Dangerous Heat Stress:</strong> High probability of severe heat cramps, dehydration, exhaustion, and fatal heat stroke.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-amber-200 text-amber-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Agricultural Water Depletion:</strong> Canals dry up in upland farming communities outside the main Bicol River basin.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-amber-200 text-amber-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Grass & Residential Fires:</strong> Dry vegetation accelerates rapid conflagrations in both rural and residential areas.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Worst-Case Hazards to Human Lives --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-red-50 border-2 border-red-300 space-y-4 shadow-sm">
                        <div class="flex items-center gap-3 text-red-700 pb-2 border-b border-red-200">
                            <span class="text-2xl">🚨</span>
                            <h4 class="text-sm sm:text-base font-black uppercase tracking-wider text-red-950">Critical Life-Threatening Hazards & Worst-Case Effects</h4>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm text-red-950">
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Fatal Heat Stroke & Organ Failure</strong>
                                <p class="text-slate-700 leading-relaxed">Core body temperature exceeding 40°C causing sudden unconsciousness, delirium, brain swelling, and cardiac arrest among outdoor farmers, construction workers, and the elderly.</p>
                            </div>
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Fast-Moving Wildfires & Conflagrations</strong>
                                <p class="text-slate-700 leading-relaxed">Trapping families in rural dry corridors or dense settlements due to electrical overload, unmanaged open burning, and dry combustible brush.</p>
                            </div>
                        </div>
                    </div>

                    {{-- What to Do vs What to Avoid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-blue-50/90 border-2 border-blue-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-blue-950 text-base flex items-center gap-2.5 pb-2 border-b border-blue-200/60">
                                <span class="text-lg">✅</span>
                                <span>What TO DO (Life-Saving Protocols)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-blue-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Hydrate rigorously: drink at least 2.5 to 3 liters of clean drinking water daily, even before feeling thirsty.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Wear lightweight, loose-fitting, light-colored cotton garments and broad-brimmed hats when stepping outdoors.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Schedule heavy agricultural labor and construction before 10:00 AM or after 4:00 PM to avoid peak UV danger.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Maintain a 10-meter cleared firebreak perimeter around residences by clearing dry leaves and brush.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-rose-50/90 border-2 border-rose-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-rose-950 text-base flex items-center gap-2.5 pb-2 border-b border-rose-200/60">
                                <span class="text-lg">🚫</span>
                                <span>What to AVOID (Critical Pitfalls)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-rose-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span><strong>NEVER</strong> leave children, infants, senior citizens, or pets inside parked vehicles—cabin heat can exceed a lethal 55°C within 10 minutes.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Avoid open burning (slash-and-burn clearing, leaves, or trash) which rapidly ignites runaway wildfires.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Avoid dehydrating beverages such as excessive alcohol or sugary sodas during prolonged heat exposure.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Do not ignore symptoms of dizziness, hot dry skin, confusion, nausea, or rapid pulse in hot weather.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Preparedness & Emergency Kit --}}
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                        <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">🎒 Dry Season Health & Fire Emergency Checklist</span>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs font-bold text-slate-800">
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">💧 Oral Rehydration Salts (ORS)</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🧯 ABC Fire Extinguisher</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🕶️ UV Sun Shield & Cooling Towel</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🔋 Battery Fan & Powerbank</div>
                        </div>
                    </div>
                </div>

                {{-- 🌧️ 2. WET / MONSOON SEASON DETAILS --}}
                <div x-show="selectedSeason === 'wet'" class="space-y-8">
                    {{-- High-Contrast Header Banner --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-slate-900 border border-blue-500/40 text-white shadow-xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 relative overflow-hidden">
                        <div class="space-y-2 relative z-10">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 text-[11px] font-black uppercase tracking-wider border border-blue-400/30">
                                <span>🌧️</span> June – October • Habagat & Typhoon Corridor
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-black text-white">Wet / Monsoon Season (Habagat Monsoon)</h3>
                            <p class="text-xs sm:text-sm font-normal text-slate-300 max-w-xl leading-relaxed">
                                Torrential monsoon precipitation, Bicol River Basin swelling, storm surges along Ragay Gulf and San Miguel Bay, and tropical cyclone threats requiring rigorous pre-emptive evacuations.
                            </p>
                        </div>
                        <div class="px-5 py-3.5 rounded-2xl bg-slate-950/90 border border-blue-500/30 text-blue-400 text-center shrink-0 shadow-inner relative z-10">
                            <span class="text-[10px] uppercase font-black tracking-wider block text-slate-400">Peak Ambient</span>
                            <span class="text-xl sm:text-2xl font-black text-blue-300">26°C – 31°C</span>
                        </div>
                    </div>

                    {{-- Pros & Cons Grid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-emerald-50/90 border-2 border-emerald-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-emerald-950 text-base flex items-center gap-2.5 pb-2 border-b border-emerald-200/60">
                                <span class="text-lg">✨</span>
                                <span>Pros & Agricultural Opportunities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-emerald-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Main Rice Cropping Cycle:</strong> Full natural irrigation recharge for 110,000+ hectares of lowland palay fields.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Aquaculture & Inland Fisheries:</strong> Replenishes water volumes in Lake Buhi, Lake Bato, and major river corridors.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Groundwater Recharge:</strong> Restores community spring watersheds and provincial aquifers.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-blue-50/90 border-2 border-blue-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-blue-950 text-base flex items-center gap-2.5 pb-2 border-b border-blue-200/60">
                                <span class="text-lg">⚠️</span>
                                <span>Cons & Inherent Vulnerabilities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-blue-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-blue-200 text-blue-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Deep Riverine Inundation:</strong> Extended flooding across 14 low-lying municipalities along the Bicol River basin.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-blue-200 text-blue-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Destructive Tropical Cyclones:</strong> Violent wind damage and storm surges disrupting transport and electrical networks.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-blue-200 text-blue-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Waterborne Health Outbreaks:</strong> Spikes in Leptospirosis, Dengue fever, and gastroenteritis.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Worst-Case Hazards to Human Lives --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-red-50 border-2 border-red-300 space-y-4 shadow-sm">
                        <div class="flex items-center gap-3 text-red-700 pb-2 border-b border-red-200">
                            <span class="text-2xl">🚨</span>
                            <h4 class="text-sm sm:text-base font-black uppercase tracking-wider text-red-950">Critical Life-Threatening Hazards & Worst-Case Effects</h4>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs sm:text-sm text-red-950">
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Flash Flood Drowning</strong>
                                <p class="text-slate-700 leading-relaxed">Trapping families in single-story homes when upstream mountain runoff abruptly swells rivers during the night.</p>
                            </div>
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Electrocution from Downed Wires</strong>
                                <p class="text-slate-700 leading-relaxed">Stepping into charged floodwaters due to submerged live electrical cables or unisolated residential circuit breakers.</p>
                            </div>
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Fatal Leptospirosis Infection</strong>
                                <p class="text-slate-700 leading-relaxed">Bacteria from rodent urine entering minor foot wounds while wading, causing acute renal failure and pulmonary hemorrhage within 7 days.</p>
                            </div>
                        </div>
                    </div>

                    {{-- What to Do vs What to Avoid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-blue-50/90 border-2 border-blue-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-blue-950 text-base flex items-center gap-2.5 pb-2 border-b border-blue-200/60">
                                <span class="text-lg">✅</span>
                                <span>What TO DO (Life-Saving Protocols)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-blue-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Execute pre-emptive evacuation immediately when PDRRMC/MDRRMO issues alerts—never wait for floodwaters to enter your home.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Switch OFF the main electrical breaker and LPG gas tanks before vacating your premises.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Wear waterproof rubber boots if wading is unavoidable, and seek medical prophylaxis (Doxycycline) within 24 hours.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-blue-600 font-black text-base leading-none">•</span>
                                    <span>Reinforce roofs, tie down lightweight structures, and trim hazardous overhanging tree branches before storm landfall.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-rose-50/90 border-2 border-rose-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-rose-950 text-base flex items-center gap-2.5 pb-2 border-b border-rose-200/60">
                                <span class="text-lg">🚫</span>
                                <span>What to AVOID (Critical Pitfalls)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-rose-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span><strong>NEVER</strong> attempt to drive or walk through moving floodwaters (6 inches can knock an adult; 12 inches can sweep a car).</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Do not let children play, swim, or wade in floodwaters or storm drainage canals.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Avoid crossing swollen spillways, flooded bridges with strong currents, or mountain corridors during red rainfall warnings.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Do not ignore forced evacuation orders—nighttime emergency rescues endanger both your family and disaster first responders.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Preparedness & Emergency Kit --}}
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                        <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">🎒 72-Hour Monsoon Survival Go-Bag Checklist</span>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs font-bold text-slate-800">
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🔦 Waterproof Flashlight & Batteries</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🥫 3-Day Ready-to-Eat Food & Water</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🩹 First-Aid Kit & Doxycycline</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">📄 Sealed Waterproof Documents & Whistle</div>
                        </div>
                    </div>
                </div>

                {{-- 🍃 3. COOL / AMIHAN SEASON DETAILS --}}
                <div x-show="selectedSeason === 'cool'" class="space-y-8">
                    {{-- High-Contrast Header Banner --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-slate-900 border border-teal-500/40 text-white shadow-xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 relative overflow-hidden">
                        <div class="space-y-2 relative z-10">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-teal-500/20 text-teal-300 text-[11px] font-black uppercase tracking-wider border border-teal-400/30">
                                <span>🍃</span> November – February • Northeast Monsoon & Shear Line
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-black text-white">Cool / Amihan Season (Northeast Monsoon)</h3>
                            <p class="text-xs sm:text-sm font-normal text-slate-300 max-w-xl leading-relaxed">
                                Refreshing northeasterly breezes with ambient temperatures of 22°C–28°C, persistent shear-line drizzles along eastern coasts, massive ocean swells, and mountain slope saturation.
                            </p>
                        </div>
                        <div class="px-5 py-3.5 rounded-2xl bg-slate-950/90 border border-teal-500/30 text-teal-400 text-center shrink-0 shadow-inner relative z-10">
                            <span class="text-[10px] uppercase font-black tracking-wider block text-slate-400">Peak Ambient</span>
                            <span class="text-xl sm:text-2xl font-black text-teal-300">22°C – 28°C</span>
                        </div>
                    </div>

                    {{-- Pros & Cons Grid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-emerald-50/90 border-2 border-emerald-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-emerald-950 text-base flex items-center gap-2.5 pb-2 border-b border-emerald-200/60">
                                <span class="text-lg">✨</span>
                                <span>Pros & Highland Opportunities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-emerald-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Highland Crop Boom:</strong> Optimum climate for high-value vegetables, strawberries, and Arabica coffee in Mt. Isarog slopes.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Comfortable Living Climate:</strong> Substantially lower household air-conditioning consumption and refreshing outdoor weather.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✓</span>
                                    <span><strong>Peak Agritourism:</strong> Thriving eco-farm visits, Marian pilgrimage travel, and trekking activities across highland municipalities.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-teal-50/90 border-2 border-teal-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-teal-950 text-base flex items-center gap-2.5 pb-2 border-b border-teal-200/60">
                                <span class="text-lg">⚠️</span>
                                <span>Cons & Inherent Vulnerabilities</span>
                            </h4>
                            <ul class="space-y-3.5 text-xs sm:text-sm text-teal-950 leading-relaxed">
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-teal-200 text-teal-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Rough Sea Swells & Gale Warnings:</strong> Inter-island boat voyages in Partido and Caramoan suspended for weeks.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-teal-200 text-teal-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Slope Saturation & Landslides:</strong> Persistent light drizzle causes unexpected mountain slope failures.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-teal-200 text-teal-900 flex items-center justify-center shrink-0 text-xs font-black mt-0.5">✗</span>
                                    <span><strong>Seasonal Respiratory Illnesses:</strong> Surges in pneumonia, asthma attacks, and seasonal viral flu among children and seniors.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Worst-Case Hazards to Human Lives --}}
                    <div class="p-6 sm:p-8 rounded-3xl bg-red-50 border-2 border-red-300 space-y-4 shadow-sm">
                        <div class="flex items-center gap-3 text-red-700 pb-2 border-b border-red-200">
                            <span class="text-2xl">🚨</span>
                            <h4 class="text-sm sm:text-base font-black uppercase tracking-wider text-red-950">Critical Life-Threatening Hazards & Worst-Case Effects</h4>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm text-red-950">
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Maritime Capsizing in High Seas</strong>
                                <p class="text-slate-700 leading-relaxed">Small fishing bancas or passenger ferries capsizing in 3 to 5-meter turbulent waves along the Pacific seaboard, leading to offshore drowning.</p>
                            </div>
                            <div class="p-4 sm:p-5 bg-white rounded-2xl border border-red-200 shadow-xs space-y-1.5">
                                <strong class="text-red-900 block font-black text-sm">Sudden Slope Collapse & Rockslides</strong>
                                <p class="text-slate-700 leading-relaxed">Saturated cut slopes burying motorists and homes along the Andaya Highway, Tiwi-Sagnay boundary, and Caramoan coastal road.</p>
                            </div>
                        </div>
                    </div>

                    {{-- What to Do vs What to Avoid with Generous Padding --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 sm:p-7 rounded-3xl bg-teal-50/90 border-2 border-teal-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-teal-950 text-base flex items-center gap-2.5 pb-2 border-b border-teal-200/60">
                                <span class="text-lg">✅</span>
                                <span>What TO DO (Life-Saving Protocols)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-teal-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-teal-600 font-black text-base leading-none">•</span>
                                    <span>Strictly respect Philippine Coast Guard (PCG) sea voyage suspensions and Gale Warnings before heading to sea.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-teal-600 font-black text-base leading-none">•</span>
                                    <span>Inspect hillside retaining walls and mountain slopes for fresh tension cracks or sudden muddy water seepage.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-teal-600 font-black text-base leading-none">•</span>
                                    <span>Keep infants, toddlers, and senior citizens warmly clothed and updated on annual influenza and pneumococcal vaccines.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-teal-600 font-black text-base leading-none">•</span>
                                    <span>Carry vehicle recovery gear, emergency flares, and tow ropes when driving across mountain highways during shear-line fog.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="p-6 sm:p-7 rounded-3xl bg-rose-50/90 border-2 border-rose-200/90 space-y-4 shadow-xs">
                            <h4 class="font-black text-rose-950 text-base flex items-center gap-2.5 pb-2 border-b border-rose-200/60">
                                <span class="text-lg">🚫</span>
                                <span>What to AVOID (Critical Pitfalls)</span>
                            </h4>
                            <ul class="space-y-3 text-xs sm:text-sm text-rose-950 leading-relaxed">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span><strong>NEVER</strong> attempt to navigate open seas on small motorized bancas during Gale Warnings—coastal rip currents are deadly.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Do not build temporary dwellings or sleep near steep, unreinforced mountain slopes or unstable rock walls.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-600 font-black text-base leading-none">✕</span>
                                    <span>Avoid ignoring persistent respiratory distress or chest pain in vulnerable family members.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Preparedness & Emergency Kit --}}
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                        <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">🎒 Cool & Marine Season Emergency Checklist</span>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs font-bold text-slate-800">
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🦺 Certified Marine Life Vests</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">🧥 Thermal Blankets & Rain Gear</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">💊 Flu & Bronchodilator Medicine</div>
                            <div class="p-3.5 bg-white rounded-2xl border border-slate-200 text-center shadow-2xs">📡 Emergency Radio & Weather Monitor</div>
                        </div>
                    </div>
                </div>

                {{-- Emergency Hotlines Footer Box --}}
                <div class="p-5 sm:p-6 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4 border border-slate-800 shadow-xl">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-red-600 flex items-center justify-center font-black text-white text-xl shrink-0 shadow-md">
                            ☎️
                        </div>
                        <div>
                            <div class="text-sm font-black text-white">Camarines Sur Provincial Disaster Risk Reduction & Management (PDRRMC)</div>
                            <div class="text-xs text-slate-300 mt-0.5">24/7 Operations Hotline: <strong class="text-amber-400 font-bold">911</strong> • (054) 477-0368 • Philippine Red Cross: <strong class="text-amber-400 font-bold">143</strong></div>
                        </div>
                    </div>
                    <button type="button" @click="selectedSeason = null" 
                            class="px-6 py-3 rounded-2xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-black text-xs uppercase tracking-wider transition cursor-pointer shrink-0 border border-slate-700">
                        Close Guide
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ========================================== --}}
{{-- 4. WATER RESOURCES & IRRIGATION MODAL      --}}
{{-- ========================================== --}}
<template x-teleport="body">
    <div x-show="selectedUtility === 'water'"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
         style="display: none;">

        <div @click.outside="selectedUtility = null"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-slate-200 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Sticky Top Header Bar --}}
            <div class="p-6 sm:p-8 bg-slate-900 text-white relative shrink-0 border-b border-slate-800">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black bg-cyan-500/20 text-cyan-300 border border-cyan-400/30">
                        <span>💧</span> Official Provincial Infrastructure Baseline
                    </span>
                    <span class="text-xs font-bold text-slate-400">NIA Region V & MNWD Verified</span>
                </div>

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-white leading-tight">
                    Water Resources, Irrigation Systems & Potable Water Grid
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 font-normal">
                    Comprehensive operational breakdown of Bicol River Basin networks, solar-powered agricultural pumps, and municipal water supply systems.
                </p>
            </div>

            {{-- Scrollable Modal Content --}}
            <div class="p-6 sm:p-8 md:p-10 overflow-y-auto space-y-8 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (50%) & 2x2 Key Metrics on Right (50%) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left: 100% Clean Image Container --}}
                    <div class="lg:col-span-6 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-sky-100 bg-slate-900 min-h-[220px]">
                        <img src="{{ asset('img/about/socio-economic/water-irrigation.jpg') }}" 
                             alt="Camarines Sur River Basin Irrigation & Clean Water Supply Infrastructure" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right: 2x2 Key Metrics Scoreboard --}}
                    <div class="lg:col-span-6 grid grid-cols-2 gap-3.5">
                        <div class="p-4 rounded-2xl bg-sky-50 border border-sky-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-sky-700 block">Irrigation Reach</span>
                            <div class="text-xl sm:text-2xl font-black text-sky-950 mt-1">45,000+ Ha</div>
                            <span class="text-[10px] text-sky-600 font-medium">Bicol River Basin</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-700 block">Solar Pump Units</span>
                            <div class="text-xl sm:text-2xl font-black text-blue-950 mt-1">100+ SPIS</div>
                            <span class="text-[10px] text-blue-600 font-medium">Zero-Emission Pumps</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-emerald-700 block">Potable Waterworks</span>
                            <div class="text-xl sm:text-2xl font-black text-emerald-950 mt-1">35 Utilities</div>
                            <span class="text-[10px] text-emerald-600 font-medium">Level III LGU Systems</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-indigo-50 border border-indigo-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-indigo-700 block">Metro Naga Water</span>
                            <div class="text-xl sm:text-2xl font-black text-indigo-950 mt-1">Mt. Isarog</div>
                            <span class="text-[10px] text-indigo-600 font-medium">Pristine Spring Catchment</span>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 1: Irrigation & Agricultural Water Supply --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-sky-100 text-sky-800 text-base font-black">🌾</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">National Irrigation Administration (NIA-5) Agricultural Network</h4>
                            <p class="text-xs text-slate-500">Gravity canal systems, communal irrigation associations, and solar pumps</p>
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed">
                        Camarines Sur operates as the prime agricultural grain powerhouse of the Bicol Region. Through the <strong>National Irrigation Administration (NIA Region V)</strong> and the <strong>Bicol River Basin Irrigation System (BRBIS)</strong>, gravity-fed canal networks provide sustainable irrigation across more than <strong>45,000 hectares</strong> of productive agricultural lowlands.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-2">
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 space-y-1">
                            <span class="font-bold text-slate-900 text-xs block">National Irrigation Systems (NIS)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">Large-scale gravity systems serving Libmanan, Cabusao, Sipocot, Pili, and the Rinconada valley.</p>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 space-y-1">
                            <span class="font-bold text-slate-900 text-xs block">Communal Irrigation (CIS)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">Over 180 Irrigators Associations (IAs) managing localized diversion dams and spring canals.</p>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 space-y-1">
                            <span class="font-bold text-slate-900 text-xs block">Solar-Powered Irrigation (SPIS)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">Over 100 modern solar pump arrays providing year-round water security without fuel expenditure.</p>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 2: Potable Drinking Water Grids --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-blue-100 text-blue-800 text-base font-black">🚰</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Potable Drinking Water Distribution & Municipal Water Districts</h4>
                            <p class="text-xs text-slate-500">Metro Naga Water District (MNWD) and 35 Level III Municipal Utilities</p>
                        </div>
                    </div>

                    <div class="space-y-3 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-2">
                            <span class="font-black text-blue-700 uppercase tracking-wider text-[10px] block">Metro Naga Water District (MNWD)</span>
                            <p class="leading-relaxed">
                                Sourced primarily from protected natural mountain springs within the <strong>Mount Isarog Natural Park (MINP)</strong> watershed (such as the Anayan, Rumangrap, and Matagangtang springs) alongside deep-well aquifer pumping stations. Provides 24/7 piped, potable water to Naga City, Milaor, Gainza, Camaligan, and Canaman.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-2">
                            <span class="font-black text-emerald-700 uppercase tracking-wider text-[10px] block">35 Municipal Level III Waterworks Systems</span>
                            <p class="leading-relaxed">
                                Operated by Local Government Units (LGUs) and municipal water boards across Iriga City, Pili, Libmanan, Goa, Tigaon, Nabua, Baao, Buhi, Calabanga, and all coastal municipalities under the supervision of the <strong>Local Water Utilities Administration (LWUA)</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 3: Watershed Protection & Drought Resilience --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                    <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">🌿 Watershed Conservation & Disaster Hardening</span>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Integrated watershed management programs under the <strong>DENR River Basin Control Office (RBCO)</strong> and Provincial Environment & Natural Resources Office (ENRO) ensure reforestation along the Bicol River Basin slopes, preventing siltation, maintaining aquifer recharge rates, and safeguarding potable reserves during El Niño drought conditions.
                    </p>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Data Reference:</strong> National Irrigation Administration (NIA Region V), Local Water Utilities Administration (LWUA), and MNWD Master Plan.
                    </div>
                    <button type="button" @click="selectedUtility = null"
                            class="px-6 py-2.5 rounded-2xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ========================================== --}}
{{-- 5. POWER GRID & ELECTRIFICATION MODAL      --}}
{{-- ========================================== --}}
<template x-teleport="body">
    <div x-show="selectedUtility === 'energy'"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
         style="display: none;">

        <div @click.outside="selectedUtility = null"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-slate-200 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Sticky Top Header Bar --}}
            <div class="p-6 sm:p-8 bg-slate-900 text-white relative shrink-0 border-b border-slate-800">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black bg-amber-500/20 text-amber-300 border border-amber-400/30">
                        <span>⚡</span> Official Power Grid & Utility Baseline
                    </span>
                    <span class="text-xs font-bold text-slate-400">NEA, DOE & CASURECO Verified</span>
                </div>

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-white leading-tight">
                    Power Electrification, Transmission Grid & Renewable Energy
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 font-normal">
                    Comprehensive technical distribution profile of the 4 CASURECO Electric Cooperatives, NGCP transmission network, and solar generation.
                </p>
            </div>

            {{-- Scrollable Modal Content --}}
            <div class="p-6 sm:p-8 md:p-10 overflow-y-auto space-y-8 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (50%) & 2x2 Key Metrics on Right (50%) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left: 100% Clean Image Container --}}
                    <div class="lg:col-span-6 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-amber-100 bg-slate-900 min-h-[220px]">
                        <img src="{{ asset('img/about/socio-economic/energy-grid.jpg') }}" 
                             alt="Camarines Sur Solar Farms and Electric Transmission Grid Infrastructure" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right: 2x2 Key Metrics Scoreboard --}}
                    <div class="lg:col-span-6 grid grid-cols-2 gap-3.5">
                        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-amber-700 block">Cooperatives</span>
                            <div class="text-xl sm:text-2xl font-black text-amber-950 mt-1">4 CASURECO</div>
                            <span class="text-[10px] text-amber-600 font-medium">I, II, III, IV Coops</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-orange-50 border border-orange-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-orange-700 block">Energized Units</span>
                            <div class="text-xl sm:text-2xl font-black text-orange-950 mt-1">1,063 Brgys</div>
                            <span class="text-[10px] text-orange-600 font-medium">Near-Universal Reach</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-emerald-700 block">LGU Coverage</span>
                            <div class="text-xl sm:text-2xl font-black text-emerald-950 mt-1">37 of 37 LGUs</div>
                            <span class="text-[10px] text-emerald-600 font-medium">2 Cities, 35 Towns</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-700 block">Transmission Grid</span>
                            <div class="text-xl sm:text-2xl font-black text-blue-950 mt-1">69kV / 230kV</div>
                            <span class="text-[10px] text-blue-600 font-medium">NGCP Interconnected</span>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 1: The 4 CASURECO Electric Cooperatives --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-amber-100 text-amber-800 text-base font-black">🔌</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">The 4 Camarines Sur Electric Cooperatives (CASURECO)</h4>
                            <p class="text-xs text-slate-500">Franchise coverage and municipal service territories</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 text-xs">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <div class="flex justify-between items-center">
                                <span class="font-black text-amber-700 uppercase tracking-wider text-[10px]">CASURECO I</span>
                                <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded-md">HQ: Libmanan</span>
                            </div>
                            <h5 class="font-bold text-slate-900 text-sm">1st District & Southern Coastal Strip</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Serves Libmanan, Sipocot, Cabusao, Del Gallego, Lupi, Ragay, Pasacao, Pamplona, Gainza, and San Fernando.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <div class="flex justify-between items-center">
                                <span class="font-black text-indigo-700 uppercase tracking-wider text-[10px]">CASURECO II</span>
                                <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded-md">HQ: Naga City</span>
                            </div>
                            <h5 class="font-bold text-slate-900 text-sm">Metro Naga & Central Plain Corridor</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Serves Naga City, Pili (Capital), Canaman, Magarao, Bombon, Calabanga, Camaligan, Milaor, and Minalabac.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <div class="flex justify-between items-center">
                                <span class="font-black text-emerald-700 uppercase tracking-wider text-[10px]">CASURECO III</span>
                                <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded-md">HQ: Iriga City</span>
                            </div>
                            <h5 class="font-bold text-slate-900 text-sm">5th District Rinconada Sector</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Serves Iriga City, Nabua, Bato, Buhi, Baao, Balatan, and Bula.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <div class="flex justify-between items-center">
                                <span class="font-black text-rose-700 uppercase tracking-wider text-[10px]">CASURECO IV</span>
                                <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded-md">HQ: Tigaon</span>
                            </div>
                            <h5 class="font-bold text-slate-900 text-sm">4th District Partido Peninsula</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Serves Tigaon, Goa, Lagonoy, San Jose, Sagnay, Caramoan, Presentacion, Garchitorena, and Tinambac.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 2: Transmission Grid & Renewable Energy --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-emerald-100 text-emerald-800 text-base font-black">☀️</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">National Transmission & Renewable Clean Energy Mix</h4>
                            <p class="text-xs text-slate-500">NGCP high-voltage grid and expanding utility solar installations</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Luzon-Visayas Grid Interconnection</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                High-voltage transmission lines (230kV / 69kV) operated by NGCP provide robust interconnection with Tiwi and Bacon-Manito geothermal power baseload plants.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Utility-Scale Solar Farm Growth</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Expanding ground-mounted solar power facilities in Pili, Calabanga, and Libmanan supporting the Department of Energy's (DOE) 35% renewable target by 2030.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Detailed Section 3: Disaster Hardening & Reliability --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                    <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">🛡️ Typhoon Resilience & Grid Modernization</span>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Under the <strong>National Electrification Administration (NEA)</strong> Disaster Vulnerability & Resiliency Program, cooperatives have systematically replaced wooden utility poles with reinforced spun-concrete poles, installed automated sectionalizing reclosers, and implemented rapid-response restoration protocols following tropical cyclones.
                    </p>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Data Reference:</strong> National Electrification Administration (NEA), Department of Energy (DOE), and CASURECO I–IV Annual Operational Baselines.
                    </div>
                    <button type="button" @click="selectedUtility = null"
                            class="px-6 py-2.5 rounded-2xl bg-amber-600 hover:bg-amber-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ======================================================== --}}
{{-- 6. FAMILY VITALITY & GENERATIONAL DEMOGRAPHICS MODAL     --}}
{{-- ======================================================== --}}
<template x-teleport="body">
    <div x-show="selectedDemographic === 'vitality'"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
         style="display: none;">

        <div @click.outside="selectedDemographic = null"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-slate-200 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Sticky Top Header Bar --}}
            <div class="p-6 sm:p-8 bg-slate-900 text-white relative shrink-0 border-b border-slate-800">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">
                        <span>🌱</span> Official Vital Statistics & Family Baseline
                    </span>
                    <span class="text-xs font-bold text-slate-400">PSA RSSO 05 & Provincial Health Office</span>
                </div>

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-white leading-tight">
                    Family Vitality, Generational Growth & Community Well-Being
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 font-normal">
                    Comprehensive baseline of annual registered births, household formation, maternal-child care networks, and youth demographics across 37 LGUs.
                </p>
            </div>

            {{-- Scrollable Modal Content --}}
            <div class="p-6 sm:p-8 md:p-10 overflow-y-auto space-y-8 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (50%) & 2x2 Key Metrics on Right (50%) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left: 100% Clean Image Container --}}
                    <div class="lg:col-span-6 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-slate-900 min-h-[220px]">
                        <img src="{{ asset('img/about/socio-economic/family-vitality.jpg') }}" 
                             alt="Camarines Sur Family Vitality & Welfare" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right: 2x2 Key Metrics Scoreboard --}}
                    <div class="lg:col-span-6 grid grid-cols-2 gap-3.5">
                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-emerald-700 block">Registered Births</span>
                            <div class="text-xl sm:text-2xl font-black text-emerald-950 mt-1">29,077 / yr</div>
                            <span class="text-[10px] text-emerald-600 font-medium">PSA RSSO 05 Release</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-700 block">Households</span>
                            <div class="text-xl sm:text-2xl font-black text-blue-950 mt-1">436,871</div>
                            <span class="text-[10px] text-blue-600 font-medium">4.7 Avg Members</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-indigo-50 border border-indigo-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-indigo-700 block">Youth Cohort</span>
                            <div class="text-xl sm:text-2xl font-black text-indigo-950 mt-1">751,807</div>
                            <span class="text-[10px] text-indigo-600 font-medium">&lt;15 Yrs (36.35%)</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-amber-700 block">LGU Registrars</span>
                            <div class="text-xl sm:text-2xl font-black text-amber-950 mt-1">37 Offices</div>
                            <span class="text-[10px] text-amber-600 font-medium">100% Civil Registration</span>
                        </div>
                    </div>
                </div>

                {{-- Section 1: Generational Vitality & Civil Registry Integration --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-emerald-100 text-emerald-800 text-base font-black">🍼</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Generational Vitality & Timely Civil Registration</h4>
                            <p class="text-xs text-slate-500">Grassroots civil registration and maternal care integration</p>
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed">
                        Official vital statistics compiled by the <strong>Philippine Statistics Authority (PSA RSSO 05 - Bicol)</strong> highlight an annual record of <strong>29,077 registered live births</strong>. This demonstrates strong generational continuity and high family formation across all 2 component cities and 35 municipalities in Camarines Sur.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 pt-2">
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 space-y-1">
                            <span class="font-bold text-slate-900 text-xs block">Maternal & Infant Healthcare Access</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Integration of 37 Municipal Rural Health Units (RHUs) and Barangay Health Stations ensuring high rates of facility-based, professionally assisted deliveries.
                            </p>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 space-y-1">
                            <span class="font-bold text-slate-900 text-xs block">PhilSys & National Civil ID Coverage</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Streamlined birth registration through the PSA PhilSys Birth Registration Assistance Project (PBRAP), securing legal identity for coastal and indigenous children.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Section 2: Household Structure & Social Capital --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-blue-100 text-blue-800 text-base font-black">🏡</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Household Structure & Social Cohesion</h4>
                            <p class="text-xs text-slate-500">Family cohesion, early childhood development, and grassroots stability</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 text-xs">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-blue-700 uppercase tracking-wider text-[10px] block">Family Cohesion</span>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Camarines Sur's 436,871 households reflect strong multigenerational support systems with an average size of 4.7 members per household.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-emerald-700 uppercase tracking-wider text-[10px] block">Early Childhood Centers</span>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Over 1,000 community day care centers and child development facilities operating across all 1,063 barangays.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-amber-700 uppercase tracking-wider text-[10px] block">Youth Potential</span>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                751,807 children and youths under 15 years enrolled in primary and secondary education, creating a robust future talent pipeline.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Data Reference:</strong> Philippine Statistics Authority (PSA RSSO 05 Vital Statistics Special Releases) and DOH Center for Health Development Region V.
                    </div>
                    <button type="button" @click="selectedDemographic = null"
                            class="px-6 py-2.5 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ======================================================== --}}
{{-- 7. HIGHER EDUCATION & TECH TALENT ECOSYSTEM MODAL        --}}
{{-- ======================================================== --}}
<template x-teleport="body">
    <div x-show="selectedDemographic === 'education'"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
         style="display: none;">

        <div @click.outside="selectedDemographic = null"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-slate-200 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Sticky Top Header Bar --}}
            <div class="p-6 sm:p-8 bg-slate-900 text-white relative shrink-0 border-b border-slate-800">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black bg-indigo-500/20 text-indigo-300 border border-indigo-400/30">
                        <span>🎓</span> Academic & Human Capital Baseline
                    </span>
                    <span class="text-xs font-bold text-slate-400">CHED & DepEd Region V Verified</span>
                </div>

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-white leading-tight">
                    Higher Education Ecosystem, SUCs & Tech Talent Corridor
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 font-normal">
                    Comprehensive operational profile of State Universities & Colleges (SUCs), premier private universities, and tech-ready workforce hubs.
                </p>
            </div>

            {{-- Scrollable Modal Content --}}
            <div class="p-6 sm:p-8 md:p-10 overflow-y-auto space-y-8 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (50%) & 2x2 Key Metrics on Right (50%) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left: 100% Clean Image Container --}}
                    <div class="lg:col-span-6 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-indigo-100 bg-slate-900 min-h-[220px]">
                        <img src="{{ asset('img/about/socio-economic/tech-workforce.jpg') }}" 
                             alt="Camarines Sur Youth and Students in Tech Innovation Hub" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right: 2x2 Key Metrics Scoreboard --}}
                    <div class="lg:col-span-6 grid grid-cols-2 gap-3.5">
                        <div class="p-4 rounded-2xl bg-indigo-50 border border-indigo-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-indigo-700 block">Annual Graduates</span>
                            <div class="text-xl sm:text-2xl font-black text-indigo-950 mt-1">45,000+</div>
                            <span class="text-[10px] text-indigo-600 font-medium">Tertiary & TVET</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-emerald-700 block">Workforce Pool</span>
                            <div class="text-xl sm:text-2xl font-black text-emerald-950 mt-1">1.21M</div>
                            <span class="text-[10px] text-emerald-600 font-medium">58.70% of Province</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-700 block">Literacy Rate</span>
                            <div class="text-xl sm:text-2xl font-black text-blue-950 mt-1">98.50%</div>
                            <span class="text-[10px] text-blue-600 font-medium">Basic & Functional</span>
                        </div>

                        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-100 text-center flex flex-col justify-center">
                            <span class="text-[10px] font-black uppercase tracking-wider text-amber-700 block">Higher Ed Campuses</span>
                            <div class="text-xl sm:text-2xl font-black text-amber-950 mt-1">40+</div>
                            <span class="text-[10px] text-amber-600 font-medium">SUCs, HEIs & TVET</span>
                        </div>
                    </div>
                </div>

                {{-- Section 1: State Universities & Colleges (SUCs) --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-indigo-100 text-indigo-800 text-base font-black">🏛️</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">State Universities & Colleges (SUCs) Network</h4>
                            <p class="text-xs text-slate-500">Government tertiary institutions leading research, agriculture, and engineering</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 text-xs">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-emerald-700 uppercase tracking-wider text-[10px] block">CBSUA (Pili, Pasacao, Sipocot, Calabanga)</span>
                            <h5 class="font-bold text-slate-900 text-xs">Central Bicol State University of Agriculture</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Regional center of excellence for agricultural biotechnology, veterinary medicine, environmental science, and food innovation.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-blue-700 uppercase tracking-wider text-[10px] block">CSPC (Nabua & Buhi)</span>
                            <h5 class="font-bold text-slate-900 text-xs">Camarines Sur Polytechnic Colleges</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Premier institution for civil, mechanical, electronics engineering, and computer studies in the Rinconada district.
                            </p>
                        </div>

                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-indigo-700 uppercase tracking-wider text-[10px] block">BISCAST (Naga City)</span>
                            <h5 class="font-bold text-slate-900 text-xs">Bicol State College of Applied Sciences & Technology</h5>
                            <p class="text-slate-500 text-[11px] leading-relaxed">
                                Urban technology leader specializing in industrial technology, robotics, architecture, and applied digital arts.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Section 2: Premier Private Higher Education Institutions --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-blue-100 text-blue-800 text-base font-black">🎓</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Premier Private Universities & Knowledge Hubs</h4>
                            <p class="text-xs text-slate-500">Autonomous and accredited institutions driving professional disciplines</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">University of Nueva Caceres (UNC)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                First university in Southern Luzon, renowned for law, nursing, engineering, business administration, and education.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Ateneo de Naga University (ADNU)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Jesuit university with autonomous status; pioneering digital animation, computer science, and humanities research.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">University of Saint Anthony (USANT)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Major educational bastion in Iriga City providing healthcare, criminology, maritime, and postgraduate programs.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Section 3: IT-BPM, Tech Innovation & TVET Skills --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                    <span class="text-[11px] font-black uppercase tracking-wider text-slate-500 block">💻 IT-BPM Workforce & Technical-Vocational Readiness</span>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        With over 40 TESDA-accredited technical vocational training centers and provincial IT hubs, Camarines Sur continuously supplies certified talent in software development, contact center operations, advanced electromechanics, and precision agro-processing.
                    </p>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Data Reference:</strong> Commission on Higher Education (CHED Region V), Department of Education (DepEd Division of Camarines Sur), and TESDA Region V.
                    </div>
                    <button type="button" @click="selectedDemographic = null"
                            class="px-6 py-2.5 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ========================================================================= --}}
{{-- 7. INTERACTIVE HAZARD SUSCEPTIBILITY & LOWLAND FLOOD DEFENSE MODAL --}}
{{-- ========================================================================= --}}
<template x-teleport="body">
    <div x-show="selectedHazard === 'flood_volcano'"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
        style="display: none;">

        <div @click.outside="selectedHazard = null" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-rose-200/80 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Themed Top Header Bar (Rose/Red Theme) --}}
            <div class="p-6 sm:p-7 bg-gradient-to-r from-slate-900 via-rose-950 to-slate-900 text-white relative shrink-0 border-b border-rose-800/60">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-rose-500/20 text-rose-300 border border-rose-400/30 flex items-center justify-center text-2xl shadow-xs shrink-0">
                        ⚠️
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-black uppercase tracking-wider text-rose-300 bg-rose-500/20 px-2.5 py-0.5 rounded-full border border-rose-400/30">
                                Engineering & Hazard Defense
                            </span>
                            <span class="text-[10px] text-slate-400 font-bold">DOST-PHIVOLCS & EDMERO</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black text-white mt-1">Lowland Flood Control & Volcanic Buffer Management</h3>
                    </div>
                </div>
            </div>

            {{-- Modal Body --}}
            <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (2/3) & 3 Vertically Stacked Scorecards on Right (1/3) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left 2/3: 100% Clean Image Container --}}
                    <div class="lg:col-span-8 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-rose-100 bg-slate-900 min-h-[240px]">
                        <img src="{{ asset('img/about/socio-economic/disaster-mitigation.jpg') }}" 
                             alt="CamSur Engineered Flood Mitigation & Early Warning Infrastructure" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right 1/3: 3 Vertically Stacked Scorecards --}}
                    <div class="lg:col-span-4 flex flex-col justify-between gap-3">
                        <div class="p-3.5 bg-rose-50/80 rounded-2xl border border-rose-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-rose-700 block">Lowland Exposure</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">42% Basin Area</p>
                            <span class="text-[10px] text-slate-500">Bicol River Basin Runoff</span>
                        </div>
                        <div class="p-3.5 bg-purple-50/80 rounded-2xl border border-purple-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-purple-700 block">Volcanic Danger Zone</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">6-km Permanent Buffer</p>
                            <span class="text-[10px] text-slate-500">Mt. Isarog & Mt. Iriga (Asog)</span>
                        </div>
                        <div class="p-3.5 bg-emerald-50/80 rounded-2xl border border-emerald-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-emerald-700 block">Agricultural Defense</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">110,000 Ha Palay</p>
                            <span class="text-[10px] text-slate-500">Protected by Dike Networks</span>
                        </div>
                    </div>
                </div>

                {{-- Section 1: Lowland Flood Mitigation & River Basin Engineering --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-rose-100 text-rose-800 text-base font-black">🌊</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Bicol River Basin Engineering & Dredging Operations</h4>
                            <p class="text-xs text-slate-500">Hydrological control, cut-off channels, and automated telemetry sluice gates</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Continuous River Desiltation & Dredging</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Regular excavation of accumulated silt from the 312-km Bicol River Basin and Lake Bato outlets ensures unimpeded discharge into San Miguel Bay during monsoon deluges.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Automated Water-Level Telemetry Sensors</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Real-time telemetry river gauge stations transmit upstream water elevation data directly to the EDMERO Operations Hub to calculate accurate lead times for municipal early warnings.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Section 2: Volcanic Hazard & Lahar Monitoring Networks --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-purple-100 text-purple-800 text-base font-black">🌋</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">DOST-PHIVOLCS Volcanic Hazard Surveillance & Slope Bio-Engineering</h4>
                            <p class="text-xs text-slate-500">Continuous seismic observation and slope stability protection on active stratovolcanoes</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Mount Isarog (1,976m) & Mount Iriga (1,196m)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                DOST-PHIVOLCS telemetric seismic stations continuously monitor seismic swarms, ground deformation, and hydrothermal steam vents with direct link to provincial disaster responders.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Slope Stabilization & Vetiver Bio-Engineering</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                High-tensile vetiver grass roots and sabo dams constructed along volcanic ravines trap loose pyroclastic materials, eliminating rain-induced debris and lahar avalanches.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Reference Hub:</strong> DOST-PHIVOLCS, DOST-PAGASA, DENR-MGB, and EDMERO Provincial Emergency Operations Center.
                    </div>
                    <button type="button" @click="selectedHazard = null"
                            class="px-6 py-2.5 rounded-2xl bg-rose-600 hover:bg-rose-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ========================================================================= --}}
{{-- 8. INTERACTIVE PACIFIC CYCLONE DEFENSE & COASTAL RESILIENCY MODAL --}}
{{-- ========================================================================= --}}
<template x-teleport="body">
    <div x-show="selectedHazard === 'landslide_cyclone' || selectedHazard === 'typhoon_coastal'"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto"
        style="display: none;">

        <div @click.outside="selectedHazard = null" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-4xl shadow-2xl border border-amber-200/80 overflow-hidden my-auto max-h-[92vh] flex flex-col">

            {{-- Themed Top Header Bar (Amber/Orange Theme) --}}
            <div class="p-6 sm:p-7 bg-gradient-to-r from-slate-900 via-amber-950 to-slate-900 text-white relative shrink-0 border-b border-amber-800/60">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/20 text-amber-300 border border-amber-400/30 flex items-center justify-center text-2xl shadow-xs shrink-0">
                        🛡️
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-black uppercase tracking-wider text-amber-300 bg-amber-500/20 px-2.5 py-0.5 rounded-full border border-amber-400/30">
                                Typhoon Defense & Resiliency
                            </span>
                            <span class="text-[10px] text-slate-400 font-bold">70 Division Centers • 19 Coastal LGUs</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black text-white mt-1">Pacific Cyclone Defense & Coastal Surge Buffers</h3>
                    </div>
                </div>
            </div>

            {{-- Modal Body --}}
            <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-slate-700 text-xs sm:text-sm leading-relaxed">
                
                {{-- Side-by-Side: Image on Left (2/3) & 3 Vertically Stacked Scorecards on Right (1/3) --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
                    {{-- Left 2/3: 100% Clean Image Container --}}
                    <div class="lg:col-span-8 rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-amber-100 bg-slate-900 min-h-[240px]">
                        <img src="{{ asset('img/about/socio-economic/coastal-resilience.jpg') }}" 
                             alt="CamSur Coastal Evacuation Center and Mangrove Wave Buffers" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- Right 1/3: 3 Vertically Stacked Scorecards --}}
                    <div class="lg:col-span-4 flex flex-col justify-between gap-3">
                        <div class="p-3.5 bg-amber-50/80 rounded-2xl border border-amber-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-amber-800 block">Fortified Centers</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">70 Facilities</p>
                            <span class="text-[10px] text-slate-500">Multi-Story Division Shelters</span>
                        </div>
                        <div class="p-3.5 bg-teal-50/80 rounded-2xl border border-teal-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-teal-800 block">Family Capacity</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">28,500 Families</p>
                            <span class="text-[10px] text-slate-500">Pre-Emptive Shelter Network</span>
                        </div>
                        <div class="p-3.5 bg-blue-50/80 rounded-2xl border border-blue-100 text-center flex-1 flex flex-col justify-center">
                            <span class="text-[10px] uppercase font-black tracking-wider text-blue-800 block">Coastal Greenbelts</span>
                            <p class="font-black text-slate-900 text-lg mt-0.5">19 Shoreline LGUs</p>
                            <span class="text-[10px] text-slate-500">100m Mangrove Bio-Shields</span>
                        </div>
                    </div>
                </div>

                {{-- Section 1: Pre-Emptive Evacuation & Zero-Casualty Doctrine --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-amber-100 text-amber-800 text-base font-black">🌀</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Pre-Emptive Evacuation Protocols & Zero-Casualty Goal</h4>
                            <p class="text-xs text-slate-500">Institutional risk assessment and orderly pre-landfall community relocation</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">48h–24h Pre-Disaster Risk Assessment (PDRA)</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Mandatory PDRA meetings trigger pre-emptive community transfers before gale-force winds and torrential rains commence, protecting vulnerable children, mothers, and senior citizens.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Solar Backup & Dedicated Medical Suites</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Each permanent evacuation center features independent off-grid solar microgrids, rainwater harvesting filtration, breastfeeding cubicles, and dedicated medical triage stations.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Section 2: 100-Meter Coastal Mangrove Greenbelts --}}
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2.5 rounded-xl bg-teal-100 text-teal-800 text-base font-black">🌿</span>
                        <div>
                            <h4 class="text-base font-black text-slate-900">100-Meter Coastal Mangrove Wave Energy Absorption</h4>
                            <p class="text-xs text-slate-500">Living shoreline bio-shields across Lagonoy Gulf, San Miguel Bay, and Ragay Gulf</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-slate-600">
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Storm Surge Height Reduction</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Dense mangrove forest root systems diminish incoming ocean storm surge heights by up to 66%, shielding vulnerable fishing barangays from catastrophic seawater inundation.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-2xl border border-slate-200 space-y-1.5">
                            <span class="font-black text-slate-900 text-xs block">Coastal Shoreline Demarcation & No-Build Zones</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                Strict shoreline easement enforcement and coastal resettlement programs relocate families away from direct wave wash zones into fortified upland communities.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer with Official Citations --}}
                <div class="p-5 rounded-3xl bg-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-xs text-slate-300">
                        <strong>Official Reference Hub:</strong> PDRRMO Camarines Sur, Office of Civil Defense (OCD Region V), and 37 Municipal DRRM Councils.
                    </div>
                    <button type="button" @click="selectedHazard = null"
                            class="px-6 py-2.5 rounded-2xl bg-amber-600 hover:bg-amber-500 text-white font-bold text-xs transition cursor-pointer shrink-0">
                        Close Window
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>


