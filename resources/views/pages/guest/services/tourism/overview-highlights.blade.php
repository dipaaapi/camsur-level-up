{{-- Highlights Overview Banner with Key Metrics --}}
<div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-900 p-6 sm:p-10 shadow-2xl text-white">
    {{-- Ambient lights --}}
    <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-16 -left-16 h-64 w-64 rounded-full bg-emerald-500/10 blur-3xl"></div>

    <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div class="max-w-2xl space-y-4">
            <div class="flex items-center gap-4">
                <img src="{{ asset('img/services/tourism/logo/visit-camsur-white.png') }}" alt="Visit CamSur" class="h-10 sm:h-12 w-auto object-contain drop-shadow-md">
                <div class="inline-flex items-center gap-2 rounded-full border border-amber-400/30 bg-amber-950/40 px-3.5 py-1 text-xs font-black uppercase tracking-wider text-amber-300 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-amber-400 opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-amber-400"></span>
                    </span>
                    <span>Tourism &amp; Travel Guide • Province of Camarines Sur</span>
                </div>
            </div>
            <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-white leading-tight">
                Discover a Realm of <span class="bg-gradient-to-r from-blue-400 via-teal-300 to-emerald-400 bg-clip-text text-transparent">Adventure and Leisure</span>
            </h2>
            <p class="text-sm sm:text-base leading-relaxed text-slate-300 font-normal">
                Camarines Sur is home to Asia's premier watersports complex, internationally acclaimed biodiversity reserves, championship golf, and deep-rooted cultural heritage.
            </p>
        </div>

        <div class="flex-shrink-0 flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
            <a href="https://www.visitcamsur.com" target="_blank" rel="noopener"
               class="inline-flex items-center justify-center gap-2.5 rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-500/20 transition-all duration-300 hover:scale-[1.02] hover:shadow-amber-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                VisitCamSur.com
            </a>
            <a href="#destinations-portal" id="exploreDestinationsBtn"
               class="inline-flex items-center justify-center gap-2.5 rounded-2xl border border-slate-700 bg-slate-800/80 px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-slate-200 transition-all duration-300 hover:bg-slate-700 hover:text-white">
                Explore Destinations
            </a>
        </div>
    </div>

    {{-- 4 Stat Chips --}}
    <div class="relative z-10 mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4 pt-6 border-t border-slate-800">
        <div class="rounded-2xl border border-slate-800 bg-slate-850/70 p-4 backdrop-blur">
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Cable Wake Park</p>
            <p class="mt-1 text-xl sm:text-2xl font-black text-blue-400">#1 in Asia</p>
            <p class="text-xs text-slate-400">CWC 6-Point Cable System</p>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-850/70 p-4 backdrop-blur">
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Top Island Paradise</p>
            <p class="mt-1 text-xl sm:text-2xl font-black text-emerald-400">Caramoan</p>
            <p class="text-xs text-slate-400">Pristine white sands & lagoons</p>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-850/70 p-4 backdrop-blur">
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Biodiversity Peak</p>
            <p class="mt-1 text-xl sm:text-2xl font-black text-amber-400">1,966m</p>
            <p class="text-xs text-slate-400">Mt. Isarog Natural Park</p>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-850/70 p-4 backdrop-blur">
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Sports & Recreation</p>
            <p class="mt-1 text-xl sm:text-2xl font-black text-indigo-400">All-Season</p>
            <p class="text-xs text-slate-400">Golf, Pickleball & Eco-Trails</p>
        </div>
    </div>
</div>
