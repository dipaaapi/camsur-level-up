<section id="overview" x-data="{ shown: false }" x-intersect.once="shown = true" class="scroll-mt-28 space-y-8">

    {{-- TOP HERO SUMMARY BANNER --}}
    <div class="relative overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 p-6 sm:p-8 md:p-10 shadow-xl text-white">
        
        {{-- Subtle ambient glow --}}
        <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-64 w-64 rounded-full bg-indigo-500/10 blur-3xl"></div>

        <div class="relative z-10 max-w-3xl space-y-3">
            <div class="inline-flex items-center gap-2 rounded-full border border-blue-400/30 bg-blue-950/60 px-3.5 py-1 text-xs font-bold uppercase tracking-wider text-blue-300 backdrop-blur-sm">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-blue-500"></span>
                </span>
                <span>Provincial Overview &amp; Origins</span>
            </div>

            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                From Ancient Ibalon to a Modern <span class="text-blue-400">Eco-Tech Heartland</span>
            </h1>

            <p class="text-sm sm:text-base leading-relaxed text-slate-200">
                Tuklasin ang mayamang pinagmulan ng Camarines Sur — mula sa sinaunang pamayanan sa baybayin ng Ibalon hanggang sa pagiging pinakamalaking sentro ng agrikultura, kultura, at inobasyon sa Kabikolan.
            </p>
        </div>

        {{-- 4 Highlight Metrics --}}
        <div class="relative z-10 mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 shadow-sm backdrop-blur">
                <p class="text-xs font-bold text-slate-300">Kabuuang Lawak</p>
                <p class="mt-1 text-lg sm:text-2xl font-black text-blue-400">526,682 ha</p>
                <p class="text-[11px] text-slate-300">Pinakamalaki sa Rehiyon V</p>
            </div>
            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 shadow-sm backdrop-blur">
                <p class="text-xs font-bold text-slate-300">Opisyal na Pundasyon</p>
                <p class="mt-1 text-lg sm:text-2xl font-black text-indigo-300">Mayo 27, 1579</p>
                <p class="text-[11px] text-slate-300">Mahigit 440 taong kasaysayan</p>
            </div>
            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 shadow-sm backdrop-blur">
                <p class="text-xs font-bold text-slate-300">Bahagi sa Bicol Land</p>
                <p class="mt-1 text-lg sm:text-2xl font-black text-emerald-400">29.87%</p>
                <p class="text-[11px] text-slate-300">Kapatagan at bulubundukin</p>
            </div>
            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 shadow-sm backdrop-blur">
                <p class="text-xs font-bold text-slate-300">Kabesera &amp; mga Lungsod</p>
                <p class="mt-1 text-lg sm:text-2xl font-black text-amber-300">Pili, Naga, Iriga</p>
                <p class="text-[11px] text-slate-300">Sentro ng komersyo at pamahalaan</p>
            </div>
        </div>
    </div>

    {{-- MAIN SECTION: Map & Geography + Sticky Province at a Glance --}}
    <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12">
        
        {{-- Left 7 Columns: Map Card + Origin Story --}}
        <div class="space-y-6 lg:col-span-7">
            {{-- Map Card --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 dark:border-slate-700">
                    <div class="flex items-center gap-2.5">
                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-slate-900 dark:text-white">Heograpiya at Teritoryo ng Lalawigan</h2>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Historical archival map at strategic boundaries</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600 dark:bg-slate-700 dark:text-slate-300">
                        Archival Map
                    </span>
                </div>

                {{-- Map image frame --}}
                <div class="mt-4 flex h-[360px] sm:h-[400px] items-center justify-center overflow-hidden rounded-2xl border border-slate-100 bg-slate-50/70 p-3 dark:border-slate-700/60 dark:bg-slate-900/50">
                    <img
                        src="{{ asset('img/about/province-history/Map.png') }}"
                        alt="Historical Map of Camarines Sur and surrounding gulfs"
                        class="h-full w-auto max-w-full object-contain transition-transform duration-500 hover:scale-105"
                        loading="lazy"
                    />
                </div>

                {{-- Boundary grid --}}
                <div class="mt-4 grid grid-cols-2 gap-2 sm:grid-cols-4">
                    <div class="rounded-xl border border-slate-200/70 bg-slate-50/60 p-2.5 text-center dark:border-slate-700 dark:bg-slate-900/40">
                        <span class="text-[10px] font-black uppercase text-blue-600 dark:text-blue-400">Hilaga (North)</span>
                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200 mt-0.5">San Miguel Bay &amp; Pacific</p>
                    </div>
                    <div class="rounded-xl border border-slate-200/70 bg-slate-50/60 p-2.5 text-center dark:border-slate-700 dark:bg-slate-900/40">
                        <span class="text-[10px] font-black uppercase text-emerald-600 dark:text-emerald-400">Timog (South)</span>
                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200 mt-0.5">Lalawigan ng Albay</p>
                    </div>
                    <div class="rounded-xl border border-slate-200/70 bg-slate-50/60 p-2.5 text-center dark:border-slate-700 dark:bg-slate-900/40">
                        <span class="text-[10px] font-black uppercase text-indigo-600 dark:text-indigo-400">Silangan (East)</span>
                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200 mt-0.5">Lagonoy Gulf</p>
                    </div>
                    <div class="rounded-xl border border-slate-200/70 bg-slate-50/60 p-2.5 text-center dark:border-slate-700 dark:bg-slate-900/40">
                        <span class="text-[10px] font-black uppercase text-amber-600 dark:text-amber-400">Kanluran (West)</span>
                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200 mt-0.5">Ragay Gulf &amp; Quezon</p>
                    </div>
                </div>
            </div>

            {{-- STORY CARD: Bakit tinawag na "Camarines"? --}}
            <div class="rounded-3xl border border-blue-200/80 bg-gradient-to-br from-blue-50/80 via-white to-indigo-50/50 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:shadow-md dark:border-blue-900/60 dark:from-slate-800 dark:via-slate-800 dark:to-slate-900">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-start">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-500/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex items-center gap-2">
                            <span class="rounded-md bg-blue-600/10 px-2 py-0.5 text-[11px] font-bold text-blue-700 dark:bg-blue-400/10 dark:text-blue-300">Etymology &amp; Pinagmulan</span>
                            <h2 class="text-base sm:text-lg font-black text-slate-900 dark:text-white">Bakit tinawag na "Camarines"?</h2>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                            Noong sinaunang panahon, ang mga pamayanan sa Kabikolan ay nagtatayo ng matataas na imbakan ng inaning palay na yari sa kawayan at nipa, na lokal na tinatawag na <em>kamalig</em>. Nang dumating ang mga eksplorador na Espanyol, tinawag nila ang mga imbakan o kamalig na ito bilang <strong class="text-blue-950 dark:text-white">"camarines"</strong> (ang salitang Kastila para sa bodega o kamalig). Dito nagmula ang katawagang <strong class="text-blue-950 dark:text-white">"Los Camarines"</strong>, na kinalaunan ay nahati sa dalawang lalawigan kabilang ang Camarines Sur.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right 5 Columns: Sticky Province at a Glance --}}
        <aside class="h-fit overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl dark:border-slate-700 dark:bg-slate-800 lg:sticky lg:top-24 lg:col-span-5">
            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 p-6 text-white">
                <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-white/10 blur-2xl"></div>
                <div class="relative">
                    <div class="inline-flex items-center gap-1.5 rounded-full bg-white/20 px-3 py-1 text-xs font-bold backdrop-blur">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>Fast Facts</span>
                    </div>
                    <h2 class="mt-2 text-2xl font-black">Province at a Glance</h2>
                    <p class="mt-0.5 text-xs text-blue-100">Pangunahing impormasyon at opisyal na rekord</p>
                </div>
            </div>

            <dl class="divide-y divide-slate-100 p-5 text-sm dark:divide-slate-700/60">
                @foreach ([
                    ['Kabuuang Lawak','526,682 hectares', 'Pinakamalaki sa Bicol'],
                    ['Rehiyon','Bicol Region (Region V)', 'Southeastern Luzon'],
                    ['Kabesera','Pili (RA 1336)', 'Mula 1955'],
                    ['Lungsod','Naga at Iriga', 'Komersyo at Edukasyon'],
                    ['Bundok Isarog','1,976 metro', 'Pangunahing bulkan'],
                    ['Bundok Iriga (Asog)','1,196 metro', 'Lawa ng Buhi catchment'],
                    ['Araw ng Pagkatatag','Mayo 27, 1579', 'Foundation Anniversary'],
                ] as $fact)
                    <div class="flex items-center justify-between py-3 first:pt-1 last:pb-1">
                        <div>
                            <dt class="font-medium text-slate-700 dark:text-slate-300">{{ $fact[0] }}</dt>
                            <p class="text-[11px] text-slate-400 dark:text-slate-500">{{ $fact[2] }}</p>
                        </div>
                        <dd class="text-right font-bold text-slate-900 dark:text-white">{{ $fact[1] }}</dd>
                    </div>
                @endforeach
            </dl>

            <div class="border-t border-slate-100 bg-slate-50/80 px-5 py-3.5 text-center dark:border-slate-700 dark:bg-slate-900/50">
                <p class="text-xs text-slate-500 dark:text-slate-400">
                    Source: <em>Official Provincial Profile &amp; National Historical Commission</em>
                </p>
            </div>
        </aside>
    </div>

    {{-- BOTTOM INFOGRAPHIC STAT ROW --}}
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        
        {{-- Animated Donut --}}
        <div class="flex items-center gap-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-slate-800"
            x-data="{ pct: 0 }"
            x-intersect.once="
                const start = performance.now(); const dur = 1600;
                const step = (t) => { const p = Math.min(1,(t-start)/dur); pct = 29.87*(1-Math.pow(1-p,3)); if(p<1) requestAnimationFrame(step); };
                requestAnimationFrame(step);
            ">
            <div class="relative h-24 w-24 shrink-0">
                <svg viewBox="0 0 36 36" class="h-24 w-24 -rotate-90">
                    <circle cx="18" cy="18" r="15.915" fill="none" class="stroke-slate-200 dark:stroke-slate-700" stroke-width="3.5"/>
                    <circle cx="18" cy="18" r="15.915" fill="none" class="stroke-blue-600" stroke-width="3.5" stroke-linecap="round"
                        :stroke-dasharray="`${pct} ${100 - pct}`"></circle>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-lg font-black text-blue-600 dark:text-blue-400"><span x-text="pct.toFixed(1)"></span>%</span>
                </div>
            </div>
            <div>
                <h3 class="font-black text-slate-900 dark:text-white">Pinakamalaki sa Bicol</h3>
                <p class="mt-0.5 text-xs text-slate-500 dark:text-slate-400">Sumasakop sa halos 30% ng buong lupaing nasasakupan ng Rehiyon V.</p>
            </div>
        </div>

        {{-- Stat Card 1 --}}
        <div x-data="animatedHistoryStat(526682, 0, true)" x-intersect.once="animate()"
            class="flex flex-col justify-center rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-300 hover:shadow-lg dark:border-slate-700 dark:bg-slate-800 dark:hover:border-blue-700">
            <p class="text-3xl sm:text-4xl font-black text-blue-600 dark:text-blue-400" x-text="display()"></p>
            <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Hektarya ng Lupa (Total Land Area)</p>
        </div>

        {{-- Stat Card 2 --}}
        <div x-data="animatedHistoryStat(1579, 0, false)" x-intersect.once="animate()"
            class="flex flex-col justify-center rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-300 hover:shadow-lg dark:border-slate-700 dark:bg-slate-800 dark:hover:border-blue-700">
            <p class="text-3xl sm:text-4xl font-black text-indigo-600 dark:text-indigo-400" x-text="display()"></p>
            <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Taon ng Opisyal na Pundasyon</p>
        </div>
    </div>
</section>
