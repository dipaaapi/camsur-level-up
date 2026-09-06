{{-- 🌱 SOIL PROFILE & LAND CLASSIFICATION --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
        <div class="p-3.5 bg-amber-100 text-amber-700 rounded-2xl shrink-0 shadow-xs">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V9m0 0c0-3.5 3-6 6-6-1 3.5-3 6-6 6zm0 0c0-3.5-3-6-6-6 1 3.5 3 6 6 6zM5 21h14"></path></svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Soil Profile &amp; Land Classification</h2>
            <p class="text-sm text-slate-500 mt-0.5">Soil taxonomy, land use allocation, and vegetative land cover distribution</p>
        </div>
    </div>

    {{-- Land Use Classification --}}
    <div class="space-y-4">
        <h3 class="text-md font-bold text-slate-600 tracking-wider">Land Use Classification</h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="p-5 bg-gradient-to-br from-white to-emerald-50 rounded-2xl border border-emerald-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 text-center space-y-1">
                <div class="text-3xl font-black text-emerald-700">54.2%</div>
                <div class="text-xs font-bold text-emerald-900 uppercase tracking-wide">Agricultural Land</div>
                <div class="text-[11px] text-slate-500">~298,000 ha</div>
            </div>
            <div class="p-5 bg-gradient-to-br from-white to-teal-50 rounded-2xl border border-teal-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 text-center space-y-1">
                <div class="text-3xl font-black text-teal-700">29.8%</div>
                <div class="text-xs font-bold text-teal-900 uppercase tracking-wide">Forest Land</div>
                <div class="text-[11px] text-slate-500">~164,000 ha — Protected Reserves</div>
            </div>
            <div class="p-5 bg-gradient-to-br from-white to-indigo-50 rounded-2xl border border-indigo-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 text-center space-y-1">
                <div class="text-3xl font-black text-indigo-700">9.1%</div>
                <div class="text-xs font-bold text-indigo-900 uppercase tracking-wide">Built-up / Urban</div>
                <div class="text-[11px] text-slate-500">~50,000 ha — Commercial Centers</div>
            </div>
            <div class="p-5 bg-gradient-to-br from-white to-blue-50 rounded-2xl border border-blue-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 text-center space-y-1">
                <div class="text-3xl font-black text-blue-700">6.9%</div>
                <div class="text-xs font-bold text-blue-900 uppercase tracking-wide">Inland Water &amp; Wetlands</div>
                <div class="text-[11px] text-slate-500">~38,000 ha — Lakes &amp; Rivers</div>
            </div>
        </div>
    </div>

    {{-- Soil Classification Groups --}}
    <div class="pt-6 space-y-4">
        <h3 class="text-sm font-bold text-slate-600 uppercase tracking-wider">Soil Classification Groups</h3>
        <p class="text-md text-justify text-slate-600 leading-relaxed">Soil textures across Camarines Sur range from clay loam to gravelly structures. The alluvial plains are composed of fertile silt deposits along the riverbanks, providing rich agrarian potential. The soils are categorized into three major classifications:</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-white to-amber-50 rounded-2xl p-5 border border-amber-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col justify-between space-y-3">
                <div>
                    <div class="flex items-center justify-between pb-2 border-b border-amber-100">
                        <p class="font-bold text-amber-800 text-sm">Group A: Alluvial Plains Soil</p>
                        <span class="text-[10px] font-bold bg-amber-100 text-amber-800 px-2 py-0.5 rounded-md">Fertile Silt</span>
                    </div>
                    <div class="py-3 flex justify-center">
                        <img src="{{ asset('img/about/profile/A.png') }}" alt="Group A Soil" class="max-h-36 object-contain" onerror="this.style.display='none'">
                    </div>
                    <p class="text-xs italic font-bold text-amber-900 mb-1">Pili, San Miguel, Guigua, or Balongay series</p>
                    <p class="text-xs text-justify text-slate-600 leading-relaxed">Characterized by <b>high organic fertility</b>; prime lands for commercial <b>Rice</b>, <b>Sugarcane</b>, and diversified <b>vegetable</b> production in the central plains.</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white to-emerald-50 rounded-2xl p-5 border border-emerald-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col justify-between space-y-3">
                <div>
                    <div class="flex items-center justify-between pb-2 border-b border-emerald-100">
                        <p class="font-bold text-emerald-800 text-sm">Group B: Volcanic Foot-slope Soil</p>
                        <span class="text-[10px] font-bold bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-md">Volcanic Loam</span>
                    </div>
                    <div class="py-3 flex justify-center">
                        <img src="{{ asset('img/about/profile/B.png') }}" alt="Group B Soil" class="max-h-36 object-contain" onerror="this.style.display='none'">
                    </div>
                    <p class="text-xs italic font-bold text-emerald-900 mb-1">Tigaon, Bacolod, Faraon and Luisana series</p>
                    <p class="text-xs text-justify text-slate-600 leading-relaxed">Located along the slopes of <b>Mount Isarog and Iriga</b>; highly suitable for <b>Coconut</b>, <b>Corn</b>, <b>Abaca</b>, and high-value fruit orchards.</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white to-rose-50 rounded-2xl p-5 border border-rose-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col justify-between space-y-3">
                <div>
                    <div class="flex items-center justify-between pb-2 border-b border-rose-100">
                        <p class="font-bold text-rose-800 text-sm">Group C: Upland Karst &amp; Hilly Soil</p>
                        <span class="text-[10px] font-bold bg-rose-100 text-rose-800 px-2 py-0.5 rounded-md">Karst &amp; Upland</span>
                    </div>
                    <div class="py-3 flex justify-center">
                        <img src="{{ asset('img/about/profile/C.png') }}" alt="Group C Soil" class="max-h-36 object-contain" onerror="this.style.display='none'">
                    </div>
                    <p class="text-xs italic font-bold text-rose-900 mb-1">Hydrosol or undifferentiated mountain soil</p>
                    <p class="text-xs text-justify text-slate-600 leading-relaxed">Prevalent across the <b>Caramoan and Ragay corridors</b>; reserved for <b>forest reserves</b>, <b>ecotourism zones</b>, and protected watersheds.</p>
                </div>
            </div>
        </div>
    </div>
</section>
