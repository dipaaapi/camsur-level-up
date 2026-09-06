{{-- Citations, References & Community Tourism Suggestion Section (Lowest Part of Page) --}}
<section class="space-y-6 pt-6 border-t border-slate-200 dark:border-slate-800">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        {{-- Card 1: Official Citations & Reference Directory (7 cols) --}}
        <div class="lg:col-span-7 rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-850 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-blue-100 text-blue-600 dark:bg-blue-950 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-blue-600 dark:text-blue-400">Institutional Sources</span>
                        <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white">Citations & Official References</h3>
                    </div>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-normal">
                    Content and travel guidelines published on this portal are compiled with official coordination and authoritative data from regional tourism authorities:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700/60 bg-slate-50 dark:bg-slate-800/60 p-3">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Primary Authority</span>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-0.5">Provincial Government of Camarines Sur</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Tourism & Cultural Affairs Division</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700/60 bg-slate-50 dark:bg-slate-800/60 p-3">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Digital Partner</span>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-0.5">VisitCamSur.com</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Official Camarines Sur Tourism Portal</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700/60 bg-slate-50 dark:bg-slate-800/60 p-3">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">National Oversight</span>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-0.5">Department of Tourism (DOT Region V)</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Bicol Regional Tourism Office</p>
                    </div>
                    <div class="rounded-2xl border border-slate-100 dark:border-slate-700/60 bg-slate-50 dark:bg-slate-800/60 p-3">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Municipal Partners</span>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-0.5">Local Municipal Tourism Offices</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">35 Municipalities & 2 Cities (Naga & Iriga)</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Interactive Community Suggestion & Messaging Card (5 cols) --}}
        <div class="lg:col-span-5 rounded-3xl border border-amber-300 bg-gradient-to-br from-amber-500 to-amber-600 p-6 sm:p-8 shadow-xl text-slate-950 flex flex-col justify-between transition-all duration-300 hover:shadow-2xl">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="rounded-full bg-slate-950 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-amber-300">
                        Visitor Feedback & Submissions
                    </span>
                    <span class="text-2xl">💡</span>
                </div>
                <div>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-950 leading-tight">
                        Suggest a Destination or Travel Update
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-900/90 font-medium leading-relaxed">
                        Know an unlisted hidden gem, newly opened eco-resort, or updated transport route in Camarines Sur? Send your recommendations directly to the tourism editorial team.
                    </p>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-950/20 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                <button type="button" id="openSuggestionModalBtn"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-slate-950 px-6 py-3.5 text-xs font-black uppercase tracking-wider text-amber-300 shadow-lg transition-all duration-200 hover:bg-slate-900 hover:scale-[1.02] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Submit Tourism Suggestion
                </button>
                <span class="text-[11px] font-bold text-slate-900/80 text-center sm:text-right">Review within 24–48 hours</span>
            </div>
        </div>

    </div>
</section>
