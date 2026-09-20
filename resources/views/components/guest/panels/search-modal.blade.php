<div x-data="{
        isOpen: false,
        query: '',
        selectedIndex: 0,
        items: [
            { title: 'Educational Assistance (Scholarship)', category: 'Scholarship', url: '{{ route('services.educational-assistance') }}', icon: 'academic-cap' },
            { title: 'Frequently Asked Questions (FAQ)', category: 'Help Desk', url: '{{ route('faq') }}', icon: 'question-mark' },
            { title: 'Citizen\'s Charter', category: 'Transparency', url: '{{ route('citizens-charter') }}', icon: 'document' },
            { title: 'Bids & Awards Committee (BAC)', category: 'Procurement', url: '{{ route('bac') }}', icon: 'badge' },
            { title: 'Transparency Seal', category: 'Governance', url: '{{ route('seal') }}', icon: 'shield' },
            { title: 'Visit CamSur - Tourism & Eco-Adventure', category: 'Tourism', url: '{{ route('tourism') }}', icon: 'globe' },
            { title: 'Provincial Socio-Economic Profile', category: 'About', url: '{{ route('socio-economic') }}', icon: 'chart' },
            { title: 'Government Careers & Plantilla', category: 'Careers', url: '{{ route('careers.government') }}', icon: 'briefcase' },
            { title: 'Private Local Job Directory (PESO)', category: 'Careers', url: '{{ route('careers.local') }}', icon: 'briefcase' },
            { title: 'Overseas & OFW Opportunities', category: 'Careers', url: '{{ route('careers.overseas') }}', icon: 'briefcase' },
            { title: 'SPES & Student Internships', category: 'Careers', url: '{{ route('careers.spes') }}', icon: 'briefcase' },
            { title: 'History of Camarines Sur', category: 'About', url: '{{ route('province-history') }}', icon: 'book' },
            { title: 'Mission & Vision', category: 'About', url: '{{ route('mission-vision') }}', icon: 'lightbulb' },
            { title: 'Past Governors of Camarines Sur', category: 'About', url: '{{ route('past-governors') }}', icon: 'user-group' },
            { title: 'Press Releases & Advisories', category: 'News', url: '{{ route('press-releases.index') }}', icon: 'newspaper' },
            { title: 'Latest Capitol News', category: 'News', url: '{{ route('guest.news.index') }}', icon: 'newspaper' }
        ],
        restrictedKeywords: ['admin', 'login', 'register', 'dashboard', 'cms', 'auth', 'signin', 'signup', 'password'],
        get isRestricted() {
            if (!this.query.trim()) return false;
            const q = this.query.toLowerCase();
            return this.restrictedKeywords.some(k => q.includes(k));
        },
        get filteredItems() {
            if (this.isRestricted) return [];
            if (!this.query.trim()) return this.items.slice(0, 7);
            return this.items.filter(item => 
                item.title.toLowerCase().includes(this.query.toLowerCase()) || 
                item.category.toLowerCase().includes(this.query.toLowerCase())
            );
        },
        openModal() {
            this.isOpen = true;
            this.query = '';
            this.selectedIndex = 0;
            this.$nextTick(() => {
                if (this.$refs.searchInput) this.$refs.searchInput.focus();
            });
        },
        closeModal() {
            this.isOpen = false;
        }
    }"
    @keydown.window.prevent.cmd.k="openModal()"
    @keydown.window.prevent.ctrl.k="openModal()"
    @open-search-modal.window="openModal()"
    class="print:hidden">

    {{-- Backdrop & Modal --}}
    <div x-show="isOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="closeModal()"
         class="fixed inset-0 z-50 overflow-y-auto p-4 sm:p-6 md:p-20 bg-slate-900/60 backdrop-blur-sm"
         style="display: none;">

        <div @click.away="closeModal()"
             x-show="isOpen"
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95 -translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 -translate-y-4"
             class="mx-auto max-w-2xl transform divide-y divide-gray-100 overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5 transition-all">

            {{-- Search Bar Input --}}
            <div class="relative flex items-center px-4 py-3.5 border-b border-gray-100">
                <svg class="h-5 w-5 text-gray-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input x-ref="searchInput"
                       type="text"
                       x-model="query"
                       placeholder="Search services, scholarships, tourism, forms... (e.g. 'Scholarship')"
                       class="h-9 w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 border-0 focus:outline-none focus:ring-0">
                
                <span class="text-[10px] uppercase font-bold text-gray-400 bg-gray-100 px-2 py-0.5 rounded border border-gray-200">
                    ESC to close
                </span>
            </div>

            {{-- Quick Filter Chips --}}
            <div class="px-4 py-2 bg-slate-50 flex items-center gap-2 overflow-x-auto text-xs text-gray-500 border-b border-gray-100">
                <span class="font-bold text-slate-700 text-[11px] shrink-0">Quick jump:</span>
                <button type="button" @click="query = 'Scholarship'" class="px-2 py-0.5 rounded bg-blue-50 text-blue-800 hover:bg-blue-100 font-medium shrink-0">Scholarship</button>
                <button type="button" @click="query = 'FAQ'" class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 hover:bg-emerald-100 font-medium shrink-0">Help Desk / FAQ</button>
                <button type="button" @click="query = 'Tourism'" class="px-2 py-0.5 rounded bg-amber-50 text-amber-800 hover:bg-amber-100 font-medium shrink-0">Caramoan / Tourism</button>
                <button type="button" @click="query = 'Transparency'" class="px-2 py-0.5 rounded bg-purple-50 text-purple-800 hover:bg-purple-100 font-medium shrink-0">Transparency / BAC</button>
            </div>

            {{-- Results List --}}
            <ul class="max-h-80 scroll-py-2 divide-y divide-gray-50 overflow-y-auto p-2 text-sm text-gray-800">
                <template x-for="(item, index) in filteredItems" :key="item.url">
                    <li>
                        <a :href="item.url"
                           class="flex items-center justify-between rounded-xl px-3 py-2.5 hover:bg-blue-50 hover:text-blue-950 transition group">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-slate-100 group-hover:bg-blue-100 flex items-center justify-center text-slate-600 group-hover:text-blue-700 transition shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <p class="font-bold text-gray-900 group-hover:text-blue-900" x-text="item.title"></p>
                                    <span class="text-[10px] font-semibold text-gray-400 group-hover:text-blue-600 uppercase tracking-wide" x-text="item.category"></span>
                                </div>
                            </div>
                            <span class="text-xs font-semibold text-gray-400 group-hover:text-blue-800 flex items-center gap-1">
                                Open &rarr;
                            </span>
                        </a>
                    </li>
                </template>

                <li x-show="filteredItems.length === 0" class="py-8 text-center text-gray-500">
                    <p class="text-sm">No exact results found for "<span x-text="query" class="font-bold"></span>".</p>
                    <a :href="'{{ route('search') }}?q=' + encodeURIComponent(query)" class="mt-2 inline-block text-xs font-bold text-blue-700 hover:underline">
                        Search full database for "<span x-text="query"></span>" &rarr;
                    </a>
                </li>
            </ul>

            {{-- Footer info --}}
            <div class="bg-gray-50 px-4 py-2.5 flex items-center justify-between text-xs text-gray-500">
                <span>Tip: Press <kbd class="px-1.5 py-0.5 bg-white border border-gray-300 rounded text-[10px] font-mono">Ctrl</kbd> + <kbd class="px-1.5 py-0.5 bg-white border border-gray-300 rounded text-[10px] font-mono">K</kbd> anywhere to open search</span>
                <a :href="'{{ route('search') }}?q=' + encodeURIComponent(query)" class="font-bold text-blue-800 hover:underline">
                    View Full Search Page &rarr;
                </a>
            </div>

        </div>
    </div>
</div>
