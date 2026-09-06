{{-- Citations, Official Baseline References & Community Suggestion Panel --}}
<section class="space-y-6 pt-6 border-t border-slate-200">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        {{-- Card 1: Official Citations & Reference Directory (7 cols) --}}
        <div class="lg:col-span-7 rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-indigo-700">Institutional Baseline Directory</span>
                        <h3 class="text-base sm:text-lg font-black text-slate-900">Citations &amp; Official Baseline References</h3>
                    </div>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                    All geographical datasets, territorial measurements, soil profiles, and topographic parameters presented in this profile are compiled in strict adherence with authenticated national statistical surveys and regional planning baselines:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/80 p-3.5 space-y-1">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500">Demographic &amp; Territorial Baseline</span>
                        <p class="text-xs font-bold text-slate-900">Philippine Statistics Authority (PSA)</p>
                        <p class="text-[11px] text-slate-500">2020 Census of Population &amp; Housing and Philippine Standard Geographic Code (PSGC)</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/80 p-3.5 space-y-1">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500">Geodetic &amp; Topographic Surveys</span>
                        <p class="text-xs font-bold text-slate-900">DENR – NAMRIA</p>
                        <p class="text-[11px] text-slate-500">National Mapping &amp; Resource Information Authority hypsometric data &amp; spatial maps</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/80 p-3.5 space-y-1">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500">Soil &amp; Hydrographic Studies</span>
                        <p class="text-xs font-bold text-slate-900">DA – Bureau of Soils &amp; Water Mgt. (BSWM)</p>
                        <p class="text-[11px] text-slate-500">Camarines Sur Soil Classification Survey &amp; Bicol River Basin Master Plan</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/80 p-3.5 space-y-1">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500">Physical Framework &amp; Master Planning</span>
                        <p class="text-xs font-bold text-slate-900">Provincial Planning &amp; Dev. Office (PPDO)</p>
                        <p class="text-[11px] text-slate-500">Provincial Development and Physical Framework Plan (PDPFP 2025–2030)</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Interactive Community Suggestion & Messaging Card (5 cols) --}}
        <div class="lg:col-span-5 rounded-3xl border border-amber-300 bg-gradient-to-br from-amber-500 to-amber-600 p-6 sm:p-8 shadow-xl text-slate-950 flex flex-col justify-between transition-all duration-300 hover:shadow-2xl">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="rounded-full bg-slate-950 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-amber-300">
                        Citizen Research &amp; Public Inquiries
                    </span>
                    <span class="text-2xl">💡</span>
                </div>
                <div>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-950 leading-tight">
                        Suggest a Profile Update or Data Inquiry
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-900/90 font-medium leading-relaxed">
                        Have updated demographic data, cadastral boundary notes, local soil research, or an inquiry regarding Camarines Sur's geographic profile? Send your feedback directly to the provincial planning and research team.
                    </p>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-950/20 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                <button type="button" id="openProfileSuggestionBtn"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-slate-950 px-6 py-3.5 text-xs font-black uppercase tracking-wider text-amber-300 shadow-lg transition-all duration-200 hover:bg-slate-900 hover:scale-[1.02] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Submit Profile Suggestion
                </button>
                <span class="text-[11px] font-bold text-slate-900/80 text-center sm:text-right">Reviewed within 24–48 hours</span>
            </div>
        </div>

    </div>
</section>
