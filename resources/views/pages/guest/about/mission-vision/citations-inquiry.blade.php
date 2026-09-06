{{-- ========================================================================= --}}
{{-- 7. CITATIONS, OFFICIAL BASELINE REFERENCES & COMMUNITY INQUIRY COMPONENT  --}}
{{-- ========================================================================= --}}
<section class="space-y-6 pt-6 border-t border-slate-200 dark:border-slate-800">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        {{-- Card 1: Official Citations & Reference Directory (7 cols) --}}
        <div class="lg:col-span-7 rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 p-6 sm:p-8 shadow-sm flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-indigo-100 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-indigo-700 dark:text-indigo-300">Institutional Baseline Directory</span>
                        <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white">Citations &amp; Official Baseline References</h3>
                    </div>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-normal">
                    The Mission, Vision, and governance commitments of the Provincial Government of Camarines Sur are documented in authenticated statutory laws, executive plans, and national agency releases:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50/80 dark:bg-slate-900/60 p-3.5 space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Provincial Mandate &amp; Autonomy</span>
                            <span class="text-[9px] font-bold bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300 px-2 py-0.5 rounded-full">Statutory Law</span>
                        </div>
                        <p class="text-xs font-bold text-slate-900 dark:text-white">Local Government Code of 1991</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Republic Act No. 7160 (Sections 16 &amp; 17) &amp; 1987 Philippine Constitution, Article X.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50/80 dark:bg-slate-900/60 p-3.5 space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Master Planning &amp; Physical Framework</span>
                            <span class="text-[9px] font-bold bg-amber-100 dark:bg-amber-900/50 text-amber-800 dark:text-amber-300 px-2 py-0.5 rounded-full">Executive Master Plan</span>
                        </div>
                        <p class="text-xs font-bold text-slate-900 dark:text-white">PDPFP (2025–2030)</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Provincial Development &amp; Physical Framework Plan, PPDO Camarines Sur &amp; RLUC Region V.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50/80 dark:bg-slate-900/60 p-3.5 space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Economic Zones &amp; Investment</span>
                            <span class="text-[9px] font-bold bg-emerald-100 dark:bg-emerald-900/50 text-emerald-800 dark:text-emerald-300 px-2 py-0.5 rounded-full">National Authority</span>
                        </div>
                        <p class="text-xs font-bold text-slate-900 dark:text-white">PEZA &amp; Republic Act No. 7916</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Special Economic Zone Act of 1995 &amp; Philippine Economic Zone Authority Board Resolutions.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50/80 dark:bg-slate-900/60 p-3.5 space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Health, Labor &amp; Resiliency</span>
                            <span class="text-[9px] font-bold bg-purple-100 dark:bg-purple-900/50 text-purple-800 dark:text-purple-300 px-2 py-0.5 rounded-full">Recognitions</span>
                        </div>
                        <p class="text-xs font-bold text-slate-900 dark:text-white">DOH, DOLE Region V &amp; OCD</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">13th Salud Bikolnon Awards, DOLE YEPA 2025 PESO citation, and RA 10121 DRRM frameworks.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Reusable Community Suggestion & Messaging Component (5 cols) --}}
        <div class="lg:col-span-5">
            <x-public-inquiry-modal
                context="Mission and Vision"
                title="Suggest a Governance Inquiry or Policy Feedback"
                description="Have feedback on provincial development initiatives, questions regarding the mission and vision statements, or official research citations to recommend? Send your inquiry directly to the planning and research administration."
                :categories="[
                    'mission_mandate' => 'Mission & Public Accountability',
                    'vision_strategic' => 'Vision & Socio-Economic Goals',
                    'agro_industrial' => 'Agro-Industrial Development',
                    'tourism_development' => 'Eco-Tourism & Hospitality',
                    'rational_resources' => 'Natural Resources & Environment',
                    'statutory_citations' => 'Statutory Law & Legal Citations',
                    'general_inquiry' => 'General Citizen Inquiry'
                ]"
                id="missionInquiryModal"
                buttonId="openMissionInquiryBtn"
            />
        </div>

    </div>
</section>
