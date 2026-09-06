{{-- 9. STRATEGIC INFRASTRUCTURE, CONNECTIVITY, TOURISM & HEALTHCARE MATRIX --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
        <div class="p-3.5 bg-teal-100 text-teal-700 rounded-2xl shrink-0 shadow-xs">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Strategic Infrastructure, Connectivity & Public Services Matrix</h2>
            <p class="text-sm text-slate-500 mt-0.5">Comprehensive profile across multimodal logistics, commerce, ecotourism, and regional healthcare</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Sector 1: Transportation & Multimodal Logistics --}}
        <div class="rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-xs group hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="h-40 w-full overflow-hidden relative bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/sector_transportation.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Transportation" onError="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-3 left-4">
                        <span class="text-[10px] font-black uppercase tracking-wider text-blue-300 block">Multimodal Logistics</span>
                        <h3 class="text-base font-black text-white drop-shadow-xs">🌐 Transportation & Regional Gateways</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="text-xs text-slate-600 space-y-3">
                        <li class="flex items-start gap-2.5">
                            <span class="text-blue-600 font-bold shrink-0">•</span>
                            <span><strong>Paved Highway Arterials:</strong> 1,240+ km of national and provincial paved road networks anchored by the AH26 Maharlika Highway corridor.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-blue-600 font-bold shrink-0">•</span>
                            <span><strong>Air & Sea Gateways:</strong> Commercial flights at Naga Airport (Pili) alongside Pasacao Regional Port and Caramoan Eco-Tourism ports.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-blue-600 font-bold shrink-0">•</span>
                            <span><strong>Railway Network:</strong> PNR South Long Haul modern rail infrastructure connecting Bicol to Metro Manila.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-slate-50 border-t border-slate-100 text-[11px] font-bold text-blue-700">
                <span>Central Bicol logistics crossroads</span>
            </div>
        </div>

        {{-- Sector 2: Trade, Commerce & Financial Infrastructure --}}
        <div class="rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-xs group hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="h-40 w-full overflow-hidden relative bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/sector_trade.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Trade" onError="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-3 left-4">
                        <span class="text-[10px] font-black uppercase tracking-wider text-amber-300 block">Commerce & Finance</span>
                        <h3 class="text-base font-black text-white drop-shadow-xs">🏦 Trade, MSMEs & Digital Business Hubs</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="text-xs text-slate-600 space-y-3">
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-600 font-bold shrink-0">•</span>
                            <span><strong>Enterprise Ecosystem:</strong> Over 28,000 registered MSMEs in retail, wholesale, food processing, and agro-commercial logistics.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-600 font-bold shrink-0">•</span>
                            <span><strong>Banking & Financial Hub:</strong> 140+ universal and commercial banks providing accessible credit with streamlined Ease of Doing Business (EODB).</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-600 font-bold shrink-0">•</span>
                            <span><strong>IT-BPM & Innovation Growth:</strong> Expanding business process outsourcing and tech incubation centers in Metro Naga and Pili.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-slate-50 border-t border-slate-100 text-[11px] font-bold text-amber-800">
                <span>Leading commercial capital of Region V</span>
            </div>
        </div>

        {{-- Sector 3: Ecotourism, Heritage & Global Destinations --}}
        <div class="rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-xs group hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="h-40 w-full overflow-hidden relative bg-slate-900">
                    <img src="{{ asset('img/services/tourism/sector_tourism.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Tourism" onError="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-3 left-4">
                        <span class="text-[10px] font-black uppercase tracking-wider text-cyan-300 block">World-Class Tourism</span>
                        <h3 class="text-base font-black text-white drop-shadow-xs">🏖️ Eco-Adventure & Cultural Heritage</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="text-xs text-slate-600 space-y-3">
                        <li class="flex items-start gap-2.5">
                            <span class="text-cyan-600 font-bold shrink-0">•</span>
                            <span><strong>Eco-Adventure Hubs:</strong> Globally renowned Caramoan Islands, Camsur Watersports Complex (CWC), and Mt. Isarog National Park.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-cyan-600 font-bold shrink-0">•</span>
                            <span><strong>Religious & Heritage Pilgrimage:</strong> National Shrine of Our Lady of Peñafrancia, drawing millions during Asia's largest Marian festivities.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-cyan-600 font-bold shrink-0">•</span>
                            <span><strong>Economic Impact:</strong> 1.8M+ annual tourist visits stimulating grassroots hospitality, transportation, and artisanal crafts.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-slate-50 border-t border-slate-100 text-[11px] font-bold text-cyan-700">
                <span>Premier Bicol tourism capital</span>
            </div>
        </div>

        {{-- Sector 4: Healthcare & Emergency Medical Facilities --}}
        <div class="rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-xs group hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="h-40 w-full overflow-hidden relative bg-slate-900">
                    <img src="{{ asset('img/about/socio-economic/sector_health.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Healthcare" onError="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-3 left-4">
                        <span class="text-[10px] font-black uppercase tracking-wider text-rose-300 block">Public Healthcare</span>
                        <h3 class="text-base font-black text-white drop-shadow-xs">🏥 Medical Network & Tertiary Care</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="text-xs text-slate-600 space-y-3">
                        <li class="flex items-start gap-2.5">
                            <span class="text-rose-600 font-bold shrink-0">•</span>
                            <span><strong>Tertiary Referral Hospital:</strong> Bicol Medical Center (BMC) in Naga City and the modern Camarines Sur Provincial Hospital (CSPH) in Pili.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-rose-600 font-bold shrink-0">•</span>
                            <span><strong>District & Primary System:</strong> 12 District Medicare Hospitals, 37 Municipal Rural Health Units, and 1,063 Barangay Health Stations.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-rose-600 font-bold shrink-0">•</span>
                            <span><strong>Diagnostic & Emergency Readiness:</strong> 2,400+ hospital bed capacity with 24/7 emergency trauma care and mobile health clinics.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-slate-50 border-t border-slate-100 text-[11px] font-bold text-rose-700">
                <span>Comprehensive regional health safety net</span>
            </div>
        </div>
    </div>
</section>
