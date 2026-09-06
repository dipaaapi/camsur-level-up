{{-- 8. COMPLETE 37 LGUS MASTER DIRECTORY (COMPACT & MODERN DIRECTORY VIEW) --}}
<section class="space-y-6 bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200"
     x-data="{ 
        viewMode: 'grid',
        selectedDistrictTab: 'all'
     }">
    
    {{-- Header & Controls --}}
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-blue-100 text-blue-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Provincial Territorial & LGU Directory</h2>
                <p class="text-sm text-slate-500 mt-0.5">2 Component Cities & 35 Municipalities (37 LGUs). Click any card to inspect territorial data & map.</p>
            </div>
        </div>

        {{-- Search & Layout Switcher --}}
        <div class="flex flex-wrap sm:flex-nowrap items-center gap-3 w-full lg:w-auto">
            {{-- Search Bar --}}
            <div class="relative flex-1 sm:w-64">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" x-model="searchQuery" placeholder="Search municipality or city..."
                    class="w-full pl-10 pr-4 py-2 text-xs rounded-xl border border-slate-200 bg-slate-50 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
            </div>

            {{-- Grid / Table View Toggle --}}
            <div class="flex items-center bg-slate-100 p-1 rounded-xl border border-slate-200">
                <button type="button" @click="viewMode = 'grid'" 
                    class="px-2.5 py-1.5 rounded-lg text-xs font-bold transition flex items-center gap-1.5 cursor-pointer"
                    :class="viewMode === 'grid' ? 'bg-white text-blue-700 shadow-xs' : 'text-slate-600 hover:text-slate-900'">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Grid</span>
                </button>
                <button type="button" @click="viewMode = 'table'" 
                    class="px-2.5 py-1.5 rounded-lg text-xs font-bold transition flex items-center gap-1.5 cursor-pointer"
                    :class="viewMode === 'table' ? 'bg-white text-blue-700 shadow-xs' : 'text-slate-600 hover:text-slate-900'">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    <span>Table</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Filter District Navigation Pills --}}
    <div class="flex items-center gap-2 overflow-x-auto pb-2 no-scrollbar">
        <button type="button" @click="filterDistrict = 'all'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === 'all' ? 'bg-blue-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            All LGUs (37)
        </button>
        <button type="button" @click="filterDistrict = '1st District'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === '1st District' ? 'bg-rose-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            1st District
        </button>
        <button type="button" @click="filterDistrict = '2nd District'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === '2nd District' ? 'bg-amber-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            2nd District
        </button>
        <button type="button" @click="filterDistrict = '3rd District'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === '3rd District' ? 'bg-indigo-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            3rd District
        </button>
        <button type="button" @click="filterDistrict = '4th District'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === '4th District' ? 'bg-emerald-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            4th District (Partido)
        </button>
        <button type="button" @click="filterDistrict = '5th District'"
            class="px-4 py-2 rounded-xl text-xs font-black uppercase tracking-wider whitespace-nowrap transition cursor-pointer"
            :class="filterDistrict === '5th District' ? 'bg-blue-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'">
            5th District
        </button>
    </div>

    {{-- VIEW 1: Modern Responsive Cards Grid (Compact & Sleek) --}}
    <div x-show="viewMode === 'grid'" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3.5">
        <template x-for="lgu in lgus.filter(i => (filterDistrict === 'all' || i.district === filterDistrict) && i.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="lgu.id">
            <div @click="selectedLgu = lgu"
                class="group cursor-pointer bg-white hover:bg-blue-50/50 p-3.5 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-blue-300 transition-all duration-200 flex items-center justify-between gap-3">

                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-11 h-11 rounded-xl bg-slate-50 p-1.5 flex items-center justify-center border border-slate-100 group-hover:scale-105 transition-transform shrink-0 shadow-xs">
                        <img :src="lgu.seal" :alt="lgu.name" class="w-full h-full object-contain" onError="this.src='/images/camsur-logo.png'">
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-bold text-slate-900 text-sm group-hover:text-blue-700 transition truncate" x-text="lgu.name"></h3>
                        <span class="text-[11px] text-slate-500 font-medium block truncate" x-text="lgu.district"></span>
                    </div>
                </div>
                
                <div class="text-slate-300 group-hover:text-blue-600 group-hover:translate-x-0.5 transition-all shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </div>
        </template>
    </div>

    {{-- VIEW 2: Data Matrix / Table View (Streamlined density) --}}
    <div x-show="viewMode === 'table'" class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="w-full text-left text-xs text-slate-600">
            <thead class="bg-slate-50 text-slate-700 uppercase font-black tracking-wider text-[10px] border-b border-slate-200">
                <tr>
                    <th class="py-3.5 px-4">LGU Name</th>
                    <th class="py-3.5 px-4">District</th>
                    <th class="py-3.5 px-4">Classification</th>
                    <th class="py-3.5 px-4">Land Area</th>
                    <th class="py-3.5 px-4">Population</th>
                    <th class="py-3.5 px-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <template x-for="lgu in lgus.filter(i => (filterDistrict === 'all' || i.district === filterDistrict) && i.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="lgu.id">
                    <tr @click="selectedLgu = lgu" class="hover:bg-blue-50/40 cursor-pointer transition">
                        <td class="py-3 px-4 flex items-center gap-2.5 font-bold text-slate-900">
                            <img :src="lgu.seal" :alt="lgu.name" class="w-6 h-6 object-contain shrink-0" onError="this.src='/images/camsur-logo.png'">
                            <span x-text="lgu.name"></span>
                        </td>
                        <td class="py-3 px-4" x-text="lgu.district"></td>
                        <td class="py-3 px-4 font-semibold text-blue-700" x-text="lgu.class"></td>
                        <td class="py-3 px-4" x-text="lgu.area"></td>
                        <td class="py-3 px-4 font-medium text-slate-800" x-text="lgu.pop"></td>
                        <td class="py-3 px-4 text-center">
                            <button type="button" class="px-2.5 py-1 text-[11px] font-bold bg-blue-50 text-blue-700 border border-blue-200 rounded-lg hover:bg-blue-100 transition cursor-pointer">
                                View
                            </button>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>

    {{-- Empty Search Fallback --}}
    <div x-show="lgus.filter(i => (filterDistrict === 'all' || i.district === filterDistrict) && i.name.toLowerCase().includes(searchQuery.toLowerCase())).length === 0"
         class="py-10 text-center text-slate-400 text-xs">
        No local government units found matching your search term.
    </div>
</section>
