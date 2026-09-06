{{-- Interactive Destination Directory Portal (Live API + Search + Filters) --}}
<section id="destinations-portal" class="space-y-8 scroll-mt-24 pt-6">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <div class="flex items-center gap-2">
                <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Tourism Directory</span>
                <span id="apiStatusBadge" class="inline-flex items-center gap-1 rounded-full bg-emerald-100 px-2 py-0.5 text-[10px] font-bold text-emerald-700 dark:bg-emerald-950/60 dark:text-emerald-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Live API Connected
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white uppercase tracking-tight mt-1">
                Explore Destinations
            </h2>
            <p class="text-sm text-slate-600 dark:text-slate-300 mt-1 font-normal">
                Live data powered by the Official Tourism Portal of Camarines Sur.
            </p>
        </div>
    </div>

    {{-- Executive Filter & Search Control Bar --}}
    <div class="w-full rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-7 shadow-sm dark:border-slate-800 dark:bg-slate-800/95">
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-5">
            
            {{-- Category Dropdown Selector (Clean native arrow, single icon, zero double symbol) --}}
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <label for="categorySelect" class="text-xs font-black uppercase tracking-wider text-slate-800 dark:text-slate-100 whitespace-nowrap flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <span>Filter by Category:</span>
                </label>
                <div class="relative min-w-[260px]">
                    <select id="categorySelect" 
                            class="w-full rounded-2xl border border-slate-300 bg-white py-3 pl-4 pr-10 text-xs font-bold uppercase tracking-wider text-slate-900 shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-900 dark:text-white cursor-pointer">
                        <option value="all">All Categories</option>
                    </select>
                </div>
            </div>

            {{-- Search Input with Centered Icon and Clear button --}}
            <div class="relative flex-1 lg:max-w-md">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" id="destSearch" placeholder="Search by attraction name or municipality..."
                       class="w-full rounded-2xl border border-slate-300 bg-white py-3 pl-10 pr-10 text-xs font-medium text-slate-900 shadow-sm transition placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-400">
                <button id="destSearchClear" type="button" class="hidden absolute inset-y-0 right-0 my-auto mr-3 h-5 w-5 rounded-full bg-slate-200 text-slate-600 hover:bg-slate-300 dark:bg-slate-700 dark:text-slate-200 items-center justify-center text-xs font-bold">
                    &times;
                </button>
            </div>

        </div>

        {{-- Popular Quick Filter Tags --}}
        <div class="mt-4 pt-4 border-t border-slate-200 dark:border-slate-700 flex flex-wrap items-center gap-2">
            <span class="text-[11px] font-black uppercase tracking-wider text-slate-800 dark:text-slate-200 mr-1">Popular:</span>
            <div id="quickTagsWrap" class="flex flex-wrap items-center gap-2">
                {{-- Injected dynamically --}}
            </div>
        </div>
    </div>

    {{-- Destination Grid with Live API Data --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="destGrid">
        {{-- Skeletons while loading --}}
        @for($i = 0; $i < 6; $i++)
            <div class="dest-card-skel h-80 rounded-3xl bg-slate-200/70 dark:bg-slate-800/60 animate-pulse p-6 flex flex-col justify-end space-y-3">
                <div class="h-4 w-24 bg-slate-300/80 dark:bg-slate-700/80 rounded"></div>
                <div class="h-6 w-3/4 bg-slate-300/80 dark:bg-slate-700/80 rounded"></div>
                <div class="h-4 w-full bg-slate-300/80 dark:bg-slate-700/80 rounded"></div>
            </div>
        @endfor
    </div>

    {{-- Load More Pagination Button --}}
    <div id="loadMoreWrap" class="text-center pt-4 hidden">
        <button id="loadMoreBtn" class="inline-flex items-center gap-2 rounded-2xl border border-slate-300 bg-white px-8 py-3 text-xs font-black uppercase tracking-wider text-slate-800 shadow-sm transition hover:bg-slate-100 hover:border-slate-400 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700 cursor-pointer">
            Load More Destinations
        </button>
    </div>
</section>
