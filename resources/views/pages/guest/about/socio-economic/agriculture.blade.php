{{-- 6. AGRICULTURAL PROFILE & MODERN FARMING INNOVATIONS --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-emerald-100 text-emerald-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Agriculture &amp; Modern Farming Innovations</h2>
                <p class="text-sm text-slate-500 mt-0.5">Rice granary of Bicol, high-value crops, fisheries, and agro-industrial PPPs</p>
            </div>
        </div>

        <div class="p-3.5 bg-emerald-50/80 rounded-2xl border border-emerald-100 max-w-lg">
            <p class="text-xs text-slate-600 leading-relaxed font-medium">
                Leading agricultural modernization in partnership with <strong>Department of Agriculture (DA) Region 5</strong> and private enterprise partners.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        {{-- Agricultural Data & Sector Breakdown (7 cols) --}}
        <div class="lg:col-span-7 space-y-6 flex flex-col justify-between">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-5 bg-gradient-to-br from-white to-emerald-50/80 rounded-2xl border border-emerald-100 shadow-sm space-y-1">
                    <span class="text-xs font-black text-emerald-700 uppercase tracking-wider block">Rice Production Volume</span>
                    <div class="text-2xl font-black text-slate-900 mt-1">~380,000 MT</div>
                    <p class="text-xs text-slate-600 mt-1">Supported by DA-5's Integrated Rice Recovery Program.</p>
                </div>
                
                <div class="p-5 bg-gradient-to-br from-white to-teal-50/80 rounded-2xl border border-teal-100 shadow-sm space-y-1">
                    <span class="text-xs font-black text-teal-700 uppercase tracking-wider block">Agricultural Support</span>
                    <div class="text-2xl font-black text-slate-900 mt-1">₱122 Million+</div>
                    <p class="text-xs text-slate-600 mt-1">Farm machineries, tractors, and fertilizer subsidies distributed to FCAs.</p>
                </div>
            </div>

            <div class="space-y-3 text-xs sm:text-sm text-slate-600 p-5 bg-slate-50/80 rounded-2xl border border-slate-200">
                <h3 class="font-bold text-slate-900 text-sm sm:text-base">Key Agricultural Pillars &amp; PPP Initiatives</h3>
                <ul class="space-y-2.5 mt-2">
                    <li class="flex items-start gap-2.5">
                        <span class="text-emerald-600 mt-0.5 text-base">🌿</span> 
                        <div class="text-xs leading-relaxed">
                            <strong class="text-slate-900">Vetiver Filipina Project (Del Gallego):</strong> World's largest integrated vetiver plantation (1,000-ha) and zero-fossil-fuel distillery. A PPP generating 800+ jobs in the $35B global flavor &amp; fragrance industry.
                        </div>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-emerald-600 mt-0.5 text-base">🌱</span> 
                        <div class="text-xs leading-relaxed">
                            <strong class="text-slate-900">High-Value Crops &amp; Nano Banana Farming:</strong> Precision agriculture and tissue-cultured disease-resistant plantlets boosting upland farm yield.
                        </div>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-emerald-600 mt-0.5 text-base">🥥</span> 
                        <div class="text-xs leading-relaxed">
                            <strong class="text-slate-900">Coconut &amp; Cacao Agro-Forestry:</strong> 120,000+ hectares dedicated to copra and high-grade cacao intercropping on mountain foothills.
                        </div>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-emerald-600 mt-0.5 text-base">🐟</span> 
                        <div class="text-xs leading-relaxed">
                            <strong class="text-slate-900">Aquaculture &amp; Endemic Fisheries:</strong> Sustainable management of Lake Buhi (Sinarapan), Lake Bato, and Ragay Gulf fisheries with BFAR 5.
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Image Showcase: Vetiver Project (5 cols) --}}
        <div class="lg:col-span-5 rounded-2xl overflow-hidden shadow-md border border-slate-200 relative group flex flex-col justify-end min-h-[340px] bg-slate-900">
            <img src="{{ asset('img/about/socio-economic/vetiver_filipina_project.jpg') }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Vetiver Filipina Project in Del Gallego, Camarines Sur" onError="this.style.display='none'">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-900/50 to-transparent"></div>
            
            <div class="relative z-10 p-6 space-y-2 text-white">
                <span class="px-3 py-1 bg-emerald-500 text-slate-950 text-[10px] font-black uppercase tracking-wider rounded-full shadow-sm inline-block">
                    PPP Milestone
                </span>
                <h3 class="text-white font-black text-xl leading-snug drop-shadow-sm">
                    Vetiver Filipina Agro-Distillery
                </h3>
                <p class="text-slate-300 text-xs leading-relaxed drop-shadow">
                    The world's largest integrated vetiver plantation and zero-fossil-fuel essential oil distillery in Del Gallego, Camarines Sur.
                </p>
            </div>
        </div>
    </div>
</section>
