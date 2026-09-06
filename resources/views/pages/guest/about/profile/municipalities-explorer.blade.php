{{-- 🏛️ INTERACTIVE TOWNS & CITIES DIRECTORY --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-6">
    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-emerald-100 text-emerald-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <h2 class="text-2xl font-bold text-slate-900">Municipalities &amp; Component Cities</h2>
                    <span class="text-xs font-black bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full">37 LGUs</span>
                </div>
                <p class="text-sm text-slate-500 mt-0.5">Explore territorial area breakdowns, districts, and key regional highlights</p>
            </div>
        </div>

        {{-- View Mode Toggle --}}
        <div class="flex items-center bg-slate-100 p-1 rounded-xl shrink-0 self-start sm:self-auto border border-slate-200/60">
            <button id="view-mode-grid" onclick="setViewMode('grid')" class="flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg bg-white text-emerald-700 shadow-xs transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span>Cards</span>
            </button>
            <button id="view-mode-table" onclick="setViewMode('table')" class="flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg text-slate-600 hover:text-slate-900 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                <span>Table</span>
            </button>
        </div>
    </div>

    {{-- Quick Insights Bar --}}
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs">
        <div class="p-3 bg-gradient-to-br from-white to-emerald-50 rounded-xl border border-emerald-100 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-emerald-600 uppercase">Capital Town</span>
                <div class="font-black text-slate-800 text-sm">Pili</div>
            </div>
            <span class="text-xl">👑</span>
        </div>
        <div class="p-3 bg-gradient-to-br from-white to-blue-50 rounded-xl border border-blue-100 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-blue-600 uppercase">Component Cities</span>
                <div class="font-black text-slate-800 text-sm">Naga &amp; Iriga</div>
            </div>
            <span class="text-xl">🏙️</span>
        </div>
        <div class="p-3 bg-gradient-to-br from-white to-amber-50 rounded-xl border border-amber-100 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-amber-600 uppercase">Largest Land Area</span>
                <div class="font-black text-slate-800 text-sm">Ragay (40,022 ha)</div>
            </div>
            <span class="text-xl">📐</span>
        </div>
        <div class="p-3 bg-gradient-to-br from-white to-purple-50 rounded-xl border border-purple-100 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-purple-600 uppercase">Total Province Span</span>
                <div class="font-black text-slate-800 text-sm">549,703 Hectares</div>
            </div>
            <span class="text-xl">🗺️</span>
        </div>
    </div>

    {{-- Filter & Search Controls --}}
    <div class="space-y-3 pt-2">
        {{-- District Filter Chips --}}
        <div class="flex items-center gap-1.5 overflow-x-auto pb-1.5 scrollbar-none text-xs">
            <button onclick="filterDistrict('all')" id="dist-btn-all" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-bold bg-emerald-600 text-white shadow-xs transition">All (37)</button>
            <button onclick="filterDistrict(1)" id="dist-btn-1" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition">1st District (5)</button>
            <button onclick="filterDistrict(2)" id="dist-btn-2" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition">2nd District (7)</button>
            <button onclick="filterDistrict(3)" id="dist-btn-3" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition">3rd District (8)</button>
            <button onclick="filterDistrict(4)" id="dist-btn-4" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition">4th District (10)</button>
            <button onclick="filterDistrict(5)" id="dist-btn-5" class="dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition">5th District (7)</button>
        </div>

        {{-- Search & Sort Bar --}}
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-3">
            <div class="sm:col-span-8 relative">
                <input type="text" id="townSearch" placeholder="Search by name, district, or keyword (e.g., Pili, Naga, Karst, Lake)..." class="w-full pl-10 pr-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-emerald-500 focus:bg-white transition" onkeyup="handleTownSearch()" />
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

            <div class="sm:col-span-4 flex items-center gap-2">
                <select id="townSort" onchange="handleTownSort()" class="w-full px-3 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl text-slate-700 font-semibold focus:outline-none focus:border-emerald-500 focus:bg-white transition">
                    <option value="name-asc">Sort: Name (A – Z)</option>
                    <option value="area-desc">Sort: Largest Area First</option>
                    <option value="area-asc">Sort: Smallest Area First</option>
                    <option value="district-asc">Sort: By District (1 – 5)</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Live Results Counter --}}
    <div class="flex items-center justify-between text-xs text-slate-500 pt-1">
        <span id="townsCount">Showing 37 Municipalities &amp; Cities</span>
        <span class="text-[11px] text-slate-400">Camarines Sur Official Land Cadastre</span>
    </div>

    {{-- VIEW 1: Grid Cards View (Default) --}}
    <div id="townsGridView" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>

    {{-- VIEW 2: Table View (Alternative) --}}
    <div id="townsTableView" class="hidden overflow-x-auto rounded-2xl border border-slate-200">
        <table class="w-full table-auto border-collapse text-left text-xs">
            <thead class="bg-slate-50 border-b border-slate-200 text-slate-600 font-bold uppercase tracking-wider text-[10px]">
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Municipality / City</th>
                    <th class="px-4 py-3">District</th>
                    <th class="px-4 py-3">Land Area</th>
                    <th class="px-4 py-3">Regional Highlight</th>
                </tr>
            </thead>
            <tbody id="townsTableBody" class="divide-y divide-slate-100 text-slate-700"></tbody>
        </table>
    </div>

    {{-- Empty Search State --}}
    <div id="townsEmptyState" class="hidden py-12 text-center space-y-3">
        <div class="text-4xl">🔍</div>
        <div class="text-sm font-bold text-slate-700">No municipalities or cities found</div>
        <p class="text-xs text-slate-500">Try adjusting your search query or reset the district filter.</p>
        <button onclick="resetTownFilters()" class="text-xs font-bold text-emerald-700 bg-emerald-50 px-4 py-2 rounded-xl hover:bg-emerald-100 transition">Reset All Filters</button>
    </div>
</section>
