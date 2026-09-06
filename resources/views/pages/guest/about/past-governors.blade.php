<x-guest-layout>
    @php
        $governors = \DB::table('past_governors')->orderBy('order_no', 'asc')->get();
        $historicalEras = \App\Models\HistoricalEra::all();
    @endphp

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800;900&display=swap');
        .font-outfit { font-family: 'Outfit', sans-serif; }
        
        body { background-color: #0f172a; color: white; }
        
        /* Compact Era Navigation */
        .glass-nav-compact {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .era-pill {
            transition: all 0.3s ease;
        }
        .era-pill.active {
            background: linear-gradient(135deg, #3b82f6, #10b981);
            color: white;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
            border-color: transparent;
        }

        /* High-Density Peek Cards */
        .grid-dense {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .peek-card {
            position: relative;
            aspect-ratio: 3/4;
            overflow: hidden;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .peek-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 15px rgba(245, 158, 11, 0.15);
            border-color: rgba(245, 158, 11, 0.4);
        }

        .peek-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease, filter 0.6s ease;
            filter: grayscale(10%) contrast(110%);
        }

        .peek-card:hover .peek-img {
            transform: scale(1.05);
            filter: grayscale(0%) contrast(105%);
        }

        /* Info that slides up */
        .peek-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(12px);
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .peek-card:hover .peek-info {
            transform: translateY(0);
        }

        /* Always visible name gradient overlay */
        .peek-name-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem 1rem 1rem;
            background: linear-gradient(to top, rgba(15,23,42,1) 0%, transparent 100%);
            transition: opacity 0.3s ease;
        }

        .peek-card:hover .peek-name-overlay {
            opacity: 0; /* hides when info slides up */
        }
        
        /* Modal Glass */
        .modal-glass {
            background: rgba(15,23,42,0.95);
            backdrop-filter: blur(30px);
            border: 1px solid rgba(255,255,255,0.1);
        }
    </style>

    <div x-data="pastGovernorsDense" class="font-outfit min-h-screen bg-slate-900 pb-20 relative overflow-hidden">
        
        {{-- Ambient Background Glow --}}
        <div class="fixed inset-0 pointer-events-none z-0">
            <div class="absolute top-0 left-1/4 w-1/2 h-1/2 bg-blue-600/10 rounded-full blur-[150px] mix-blend-screen"></div>
        </div>

        {{-- STICKY COMPACT NAVIGATION --}}
        <div class="border-amber-500 border-b-2 glass-nav-compact flex justify-center items-center gap-2 mb-8 p-4 z-50">
            <div class="flex flex-wrap items-center justify-center gap-2">
                <select x-model="selectedEra" class="appearance-none w-full bg-slate-800/80 text-slate-200 border border-slate-700 hover:border-amber-500 rounded-full px-5 py-2.5 text-[10px] sm:text-xs font-bold uppercase tracking-wider focus:outline-none focus:ring-2 focus:ring-amber-500 transition-colors shadow-inner cursor-pointer text-center text-ellipsis">
                    <option value="all">ALL ERAS</option>
                    <template x-for="era in eras" :key="era.name">
                        <option :value="era.name" x-text="era.label"></option>
                    </template>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-5 text-amber-500">
                    <i class="fa-solid fa-chevron-down text-sm"></i>
                </div>
            </div>
            <div class="flex items-center gap-2 bg-slate-800/80 px-3 py-1.5 rounded-full border border-slate-700 shrink-0">
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-wider" x-text="sortOrder === 'asc' ? 'Oldest' : 'Latest'"></span>
                <button type="button" @click="sortOrder = (sortOrder === 'desc' ? 'asc' : 'desc')" :class="sortOrder === 'asc' ? 'bg-blue-600 border-blue-500' : 'bg-slate-900 border-slate-600'" class="relative inline-flex items-center h-5 w-10 rounded-full border focus:outline-none shadow-inner transition-colors duration-300 shrink-0">
                    <span :style="sortOrder === 'asc' ? 'transform: translateX(20px)' : 'transform: translateX(4px)'" :class="sortOrder === 'asc' ? 'bg-white' : 'bg-amber-500'" class="inline-block w-4 h-4 rounded-full transition-all duration-300 shadow-md"></span>
                </button>
            </div>

            <button @click="surpriseMe()" class="px-4 py-1.5 bg-blue-600 hover:bg-blue-500 text-white border border-blue-500 rounded-full text-xs font-bold transition-all whitespace-nowrap shadow-[0_0_10px_rgba(37,99,235,0.4)] shrink-0">
                🎲 Surprise Me
            </button>

            <div class="relative w-full sm:w-auto flex-grow max-w-xs shrink-0">
                <input type="text" x-model="searchQuery" placeholder="Search..." class="w-full bg-slate-800 border border-slate-700 text-white text-xs rounded-full px-4 py-1.5 focus:outline-none focus:border-blue-500 transition-all placeholder-slate-500">
            </div>

            <button @click="compareMode = !compareMode" :class="compareMode ? 'bg-amber-500 text-slate-900 shadow-[0_0_15px_rgba(245,158,11,0.4)]' : 'bg-slate-800 text-white border border-slate-700 hover:bg-slate-700'" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all whitespace-nowrap shrink-0">
                <span x-text="compareMode ? 'Exit Compare' : 'Compare ⚖️'"></span>
            </button>
        </div>

        {{-- COMPARE NOTIFICATION PIP --}}
        <div x-show="compareMode && selectedCompare.length > 0" x-transition class="fixed bottom-6 right-6 z-50 bg-slate-900 border border-amber-500/50 p-3 rounded-2xl shadow-2xl flex items-center gap-3">
            <div class="text-[10px]">
                <span class="block text-amber-500 font-black uppercase tracking-wider">Compare</span>
                <span class="text-white"><span x-text="selectedCompare.length"></span> of 2</span>
            </div>
            <button @click="showCompareModal = true" :disabled="selectedCompare.length < 2" :class="selectedCompare.length === 2 ? 'bg-amber-500 hover:bg-amber-400 text-slate-900' : 'bg-slate-700 text-slate-400 cursor-not-allowed'" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase transition-all">View</button>
        </div>

        {{-- ERA INFO CARD --}}
        <div x-show="currentEraInfo" style="display: none;"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-4"
             class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mb-8">
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-amber-500/30 relative overflow-hidden group shadow-2xl">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-amber-400 to-amber-600"></div>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4 border-b border-slate-700/50 pb-4">
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white uppercase tracking-widest leading-tight" x-text="currentEraInfo?.title"></h3>
                        <p class="text-amber-500 font-bold tracking-widest text-sm mt-1" x-text="currentEraInfo?.period"></p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 relative z-10">
                    <div class="space-y-6">
                        <template x-if="currentEraInfo?.context">
                            <div class="bg-slate-800/50 rounded-xl p-5 border border-slate-700/50">
                                <h4 class="text-[10px] font-black uppercase text-amber-500 tracking-widest mb-2 flex items-center gap-2">
                                    <i class="fa-solid fa-book-open"></i> Historical Context
                                </h4>
                                <p class="text-sm text-slate-300 leading-relaxed" x-text="currentEraInfo?.context"></p>
                            </div>
                        </template>
                        <template x-if="currentEraInfo?.notes">
                            <div class="bg-blue-900/10 rounded-xl p-5 border border-blue-500/20">
                                <h4 class="text-[10px] font-black uppercase text-blue-400 tracking-widest mb-2 flex items-center gap-2">
                                    <i class="fa-solid fa-note-sticky"></i> Notes
                                </h4>
                                <p class="text-sm text-slate-400 italic" x-text="currentEraInfo?.notes"></p>
                            </div>
                        </template>
                    </div>
                    
                    <div>
                        <div class="bg-slate-800/30 rounded-xl p-5 h-full border border-slate-700/30">
                            <h4 class="text-[10px] font-black uppercase text-amber-500 tracking-widest mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-list-check"></i> Key Characteristics
                            </h4>
                            <ul class="space-y-3">
                                <template x-for="(value, key) in currentEraInfo?.key_characteristics" :key="key">
                                    <li class="text-sm flex gap-3 items-start">
                                        <div class="mt-1 text-amber-500 text-[10px]"><i class="fa-solid fa-diamond"></i></div>
                                        <div class="leading-relaxed">
                                            <strong class="text-slate-200 block sm:inline" x-text="key + ': '"></strong>
                                            <span class="text-slate-400" x-text="value"></span>
                                        </div>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- HIGH DENSITY GRID --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div x-show="filteredGovernors.length === 0" class="text-center py-12">
                <span class="text-4xl mb-2 block">🔍</span>
                <h3 class="text-xl font-black text-white">No Records Found</h3>
                <p class="text-slate-400 text-sm mt-1">Adjust your search or selected era.</p>
            </div>

            <div class="grid-dense" x-show="filteredGovernors.length > 0">
                <template x-for="gov in filteredGovernors" :key="gov.id">
                    
                    {{-- The Peek Card --}}
                    <div @click="compareMode ? toggleCompare(gov) : viewGov(gov)" class="peek-card group" :class="compareMode && selectedCompare.some(g => g.id === gov.id) ? 'ring-2 ring-amber-500 shadow-[0_0_20px_rgba(245,158,11,0.3)]' : ''">
                        
                        <template x-if="gov.image_path">
                            <img :src="gov.image_path" :alt="gov.name" class="peek-img" />
                        </template>
                        <template x-if="!gov.image_path">
                            <div class="absolute inset-0 bg-slate-800 flex items-center justify-center">
                                <span class="text-5xl opacity-20">🏛️</span>
                            </div>
                        </template>

                        {{-- Selection check --}}
                        <template x-if="compareMode">
                            <div class="absolute top-3 right-3 z-20 bg-slate-900/80 w-6 h-6 rounded-full border flex items-center justify-center transition-all" :class="selectedCompare.some(g => g.id === gov.id) ? 'border-amber-500' : 'border-slate-500'">
                                <div x-show="selectedCompare.some(g => g.id === gov.id)" class="w-2.5 h-2.5 bg-amber-500 rounded-full"></div>
                            </div>
                        </template>

                        {{-- Always Visible Name --}}
                        <div class="peek-name-overlay">
                            <h3 class="text-lg font-black text-white leading-tight" x-text="gov.name"></h3>
                        </div>

                        {{-- Slide-up Info --}}
                        <div class="peek-info">
                            <span class="text-[9px] font-black uppercase tracking-widest text-blue-400 block mb-1" x-text="gov.era"></span>
                            <h3 class="text-base font-black text-white leading-tight mb-0.5" x-text="gov.name"></h3>
                            <p class="text-amber-400 font-bold text-xs"><span x-text="gov.term_start_year"></span> — <span x-text="gov.term_end_year"></span></p>
                        </div>

                    </div>
                </template>
            </div>
        </div>

        {{-- SINGLE GOVERNOR MODAL OVERHAUL (Retained) --}}
        <div x-show="selectedGov" style="display:none;" class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div x-show="selectedGov" x-transition.opacity class="absolute inset-0 bg-slate-950/80 backdrop-blur-xl" @click="selectedGov = null"></div>
            
            <div x-show="selectedGov" 
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-10"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-10"
                 class="relative z-10 w-full max-w-4xl max-h-[90vh] modal-glass rounded-2xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
                
                <button @click="selectedGov = null" class="absolute top-4 right-4 z-20 w-8 h-8 rounded-full bg-slate-800/50 hover:bg-red-500 text-white flex items-center justify-center transition-colors border border-slate-700">✕</button>

                {{-- Left Image --}}
                <div class="md:w-2/5 p-4 relative shrink-0 w-full flex">
                    <template x-if="selectedGov && selectedGov.image_path">
                        <img :src="selectedGov.image_path" class="h-auto object-cover self-center w-full">
                    </template>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent md:bg-gradient-to-r md:from-slate-900/10 md:to-transparent"></div>
                </div>

                {{-- Right Content --}}
                <div class="w-full md:w-3/5 p-6 md:p-8 overflow-y-auto custom-scroll">
                    <div class="space-y-6">
                        {{-- Name and Term --}}
                        <div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-blue-400 bg-blue-500/10 px-2 py-1 rounded border border-blue-500/20 inline-block mb-2" x-text="selectedGov ? selectedGov.era : ''"></span>
                            <h2 class="text-3xl md:text-4xl font-black text-white leading-tight" x-text="selectedGov ? selectedGov.name : ''"></h2>
                            <p class="text-amber-500 font-bold text-lg mt-1 tracking-wider"><span x-text="selectedGov ? selectedGov.term_start_year : ''"></span> — <span x-text="selectedGov ? selectedGov.term_end_year : ''"></span></p>
                        </div>
                        
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-slate-800/40 p-3 rounded-xl border border-slate-700/50">
                                <span class="text-[9px] text-slate-400 font-bold uppercase block mb-1">First Term Age</span>
                                <span class="text-xl font-black text-white" x-text="selectedGov ? selectedGov.age_at_first_term : ''"></span>
                            </div>
                            <div class="bg-slate-800/40 p-3 rounded-xl border border-slate-700/50">
                                <span class="text-[9px] text-slate-400 font-bold uppercase block mb-1">Terms Served</span>
                                <span class="text-xl font-black text-white" x-text="selectedGov ? selectedGov.total_terms_served : ''"></span>
                            </div>
                            <div class="bg-slate-800/40 p-3 rounded-xl border border-slate-700/50">
                                <span class="text-[9px] text-slate-400 font-bold uppercase block mb-1">Times Returned</span>
                                <span class="text-xl font-black text-amber-500" x-text="selectedGov ? selectedGov.times_returned : ''"></span>
                            </div>
                        </div>

                        <template x-if="selectedGov && selectedGov.notes">
                            <div class="bg-amber-500/10 border border-amber-500/30 rounded-xl p-4 text-amber-100 flex gap-3">
                                <span class="text-xl">⭐</span>
                                <div>
                                    <span class="text-[9px] uppercase font-black tracking-widest text-amber-500 block mb-1">Distinction</span>
                                    <p class="text-xs leading-relaxed" x-text="selectedGov.notes"></p>
                                </div>
                            </div>
                        </template>

                        <div>
                            <div class="flex justify-between items-end mb-3 border-b border-slate-700/50 pb-2">
                                <h4 class="text-sm font-black text-white uppercase tracking-wider">Narrative</h4>
                                <div class="flex bg-slate-800/80 p-1 rounded-lg">
                                    <button @click="currentLanguage = 'en'" :class="currentLanguage === 'en' ? 'bg-blue-600 text-white' : 'text-slate-400'" class="px-2 py-0.5 rounded text-[10px] font-bold transition">EN</button>
                                    <button @click="currentLanguage = 'tl'" :class="currentLanguage === 'tl' ? 'bg-blue-600 text-white' : 'text-slate-400'" class="px-2 py-0.5 rounded text-[10px] font-bold transition">TL</button>
                                </div>
                            </div>
                            <p class="text-slate-300 text-xs leading-loose text-justify font-light" x-text="selectedGov ? (currentLanguage === 'en' ? selectedGov.description_en : selectedGov.description_tl) : ''"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SPLIT PANE COMPARISON MODAL (Retained) --}}
        <div x-show="showCompareModal" style="display:none;" class="fixed inset-0 z-[60] bg-slate-950 flex flex-col">
            <div class="h-14 border-b border-slate-800 flex justify-between items-center px-4 md:px-6 shrink-0 bg-slate-900/50 backdrop-blur-md">
                <div class="flex items-center gap-2">
                    <span class="text-xl">⚖️</span>
                    <div>
                        <h3 class="text-white font-black tracking-widest uppercase text-xs">Cross-Check</h3>
                    </div>
                </div>
                <button @click="showCompareModal = false" class="px-3 py-1.5 bg-slate-800 hover:bg-red-500 hover:text-white rounded-lg text-[10px] font-black text-slate-300 transition-colors uppercase">Close</button>
            </div>

            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-800 overflow-hidden">
                <template x-for="(g, i) in selectedCompare" :key="g.id">
                    <div class="h-full overflow-y-auto p-6 relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/5 to-amber-900/5 pointer-events-none"></div>
                        
                        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                            <div class="w-24 h-24 md:w-32 md:h-32 rounded-full overflow-hidden border-2 border-slate-800 shadow-xl relative">
                                <template x-if="g.image_path">
                                    <img :src="g.image_path" class="w-full h-full object-cover">
                                </template>
                                <template x-if="!g.image_path">
                                    <div class="w-full h-full bg-slate-800 flex items-center justify-center text-2xl">🏛️</div>
                                </template>
                            </div>

                            <div>
                                <span class="text-[9px] font-black uppercase tracking-widest text-blue-500 bg-blue-500/10 px-2 py-0.5 rounded-full border border-blue-500/20" x-text="g.era"></span>
                                <h2 class="text-2xl font-black text-white mt-2 mb-1" x-text="g.name"></h2>
                                <p class="text-amber-500 font-bold text-sm"><span x-text="g.term_start_year"></span> — <span x-text="g.term_end_year"></span></p>
                            </div>

                            <div class="w-full max-w-xs space-y-3 text-left mt-4">
                                <div class="bg-slate-800/50 p-3 rounded-lg border border-slate-700/50 flex justify-between items-center">
                                    <span class="text-slate-400 font-bold text-[10px] uppercase">First Term Age</span>
                                    <span class="text-white font-black text-lg" x-text="g.age_at_first_term"></span>
                                </div>
                                <div class="bg-slate-800/50 p-3 rounded-lg border border-slate-700/50 flex justify-between items-center">
                                    <span class="text-slate-400 font-bold text-[10px] uppercase">Total Terms</span>
                                    <span class="text-white font-black text-lg" x-text="g.total_terms_served"></span>
                                </div>
                            </div>
                            
                            <template x-if="g.notes">
                                <div class="w-full max-w-sm bg-slate-800/50 p-4 rounded-lg border border-amber-500/30 text-left">
                                    <span class="text-[9px] text-amber-500 font-black uppercase block mb-1 tracking-widest">Distinction</span>
                                    <p class="text-xs text-slate-300 font-medium leading-relaxed" x-text="g.notes"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('pastGovernorsDense', () => ({
                searchQuery: '',
                selectedEra: 'all',
                selectedGov: null,
                compareMode: false,
                showCompareModal: false,
                selectedCompare: [],
                currentLanguage: 'en',
                sortOrder: 'desc',
                eras: [
                    @php
                        $uniqueEras = [];
                        foreach($governors as $g) {
                            if(!isset($uniqueEras[$g->era])) {
                                $uniqueEras[$g->era] = [
                                    'start' => $g->era_start_year,
                                    'end' => $g->era_end_year
                                ];
                            }
                        }
                    @endphp
                    @foreach($uniqueEras as $eraName => $dates)
                        {
                            name: '{!! addslashes($eraName) !!}',
                            label: '{!! addslashes($eraName) !!} ({{ $dates['start'] ?? '?' }} - {{ $dates['end'] ?? 'Present' }})'
                        },
                    @endforeach
                ],
                eraDetails: [
                    @foreach($historicalEras as $he)
                    {
                        title: '{!! addslashes($he->title) !!}',
                        period: '{!! addslashes($he->period) !!}',
                        context: '{!! addslashes($he->context) !!}',
                        notes: '{!! addslashes($he->notes) !!}',
                        key_characteristics: {!! json_encode($he->key_characteristics ?? []) !!}
                    },
                    @endforeach
                ],
                get currentEraInfo() {
                    if(this.selectedEra === 'all') return null;
                    return this.eraDetails.find(e => e.title === this.selectedEra) || null;
                },
                governors: [
                    @foreach($governors as $gov)
                    {
                        id: {{ $gov->id }},
                        order_no: {{ $gov->order_no }},
                        name: '{!! addslashes($gov->name) !!}',
                        image_path: '{{ $gov->image_path ? asset($gov->image_path) : '' }}',
                        term_start_year: {{ $gov->term_start_year }},
                        term_end_year: '{{ $gov->term_end_year ?? 'Present' }}',
                        party: {!! $gov->party ?? '[]' !!},
                        era: '{!! addslashes($gov->era) !!}',
                        total_terms_served: '{{ $gov->total_terms_served ?? 'Unknown' }}',
                        times_returned: '{{ $gov->times_returned ?? '0' }}',
                        age_at_first_term: '{{ $gov->age_at_first_term ?? 'Unknown' }}',
                        description_en: '{!! addslashes(str_replace(["\r", "\n"], ' ', $gov->description_en)) !!}',
                        description_tl: '{!! addslashes(str_replace(["\r", "\n"], ' ', $gov->description_tl)) !!}',
                        notes: '{!! addslashes($gov->notes) !!}'
                    },
                    @endforeach
                ],

                surpriseMe() {
                    if (this.governors.length > 0) {
                        const randomGov = this.governors[Math.floor(Math.random() * this.governors.length)];
                        this.selectedGov = randomGov;
                        if(this.compareMode) {
                            this.compareMode = false;
                        }
                    }
                },

                setEra(era) {
                    this.selectedEra = era;
                },

                viewGov(gov) {
                    if(!this.compareMode) this.selectedGov = gov;
                },

                toggleCompare(gov) {
                    if (this.selectedCompare.some(g => g.id === gov.id)) {
                        this.selectedCompare = this.selectedCompare.filter(g => g.id !== gov.id);
                    } else {
                        if (this.selectedCompare.length < 2) {
                            this.selectedCompare.push(gov);
                        } else {
                            this.selectedCompare.shift();
                            this.selectedCompare.push(gov);
                        }
                    }
                },

                get filteredGovernors() {
                    let list = this.governors.filter(gov => {
                        const search = this.searchQuery.toLowerCase();
                        const matchesSearch = gov.name.toLowerCase().includes(search) || gov.era.toLowerCase().includes(search);
                        
                        if (this.selectedEra === 'all') return matchesSearch;
                        return matchesSearch && gov.era === this.selectedEra;
                    });

                    return list.sort((a, b) => {
                        return this.sortOrder === 'asc'
                            ? a.order_no - b.order_no
                            : b.order_no - a.order_no;
                    });
                }
            }));
        });
    </script>
    <style>
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-track { background: rgba(15,23,42,0.5); }
        .custom-scroll::-webkit-scrollbar-thumb { background: rgba(59,130,246,0.5); border-radius: 10px; }
        .custom-scroll::-webkit-scrollbar-thumb:hover { background: rgba(59,130,246,0.8); }
    </style>
</x-guest-layout>
