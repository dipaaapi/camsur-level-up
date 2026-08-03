@php
    // 1. Featured Item
    $featured = \App\Models\PressRelease::where('is_featured', true)->first() 
                ?? \App\Models\PressRelease::latest('published_at')->first();

    // 2. Fetch Top 10 Latest Non-Featured Releases (Failsafe Query)
    $query = \App\Models\PressRelease::where('is_featured', false);
    
    if ($featured) {
        $query->where('id', '!=', $featured->id);
    }

    $recentReleases = $query->latest('published_at')->take(10)->get();

    // Map to JSON-friendly format for Alpine.js
    $pressReleases = $recentReleases->map(function ($item) {
        return [
            'id' => $item->id,
            'month' => strtoupper($item->published_at->format('M')),
            'day' => $item->published_at->format('d'),
            'year' => $item->published_at->format('Y'),
            'category' => $item->category,
            'author' => $item->author,
            'title' => $item->title,
            'excerpt' => $item->excerpt,
            'sdgs' => $item->sdgs ?? [],
            'image' => $item->image,
            'link' => route('press-releases.index')
        ];
    });
@endphp

<section style="background: linear-gradient(135deg, #0b224d 0%, #114696 50%, #0d2b5c 100%);" 
         class="relative py-16 text-white overflow-hidden border-b border-blue-900/60"
         x-data="{
            searchQuery: '',
            selectedCategory: 'all',
            selectedAuthor: 'all',
            sortBy: 'latest',
            timer: null,
            releases: {{ json_encode($pressReleases) }},

            get filteredReleases() {
                let list = [...this.releases].filter(item => {
                    let matchesSearch = item.title.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                          item.excerpt.toLowerCase().includes(this.searchQuery.toLowerCase());
                    let matchesCategory = this.selectedCategory === 'all' || item.category === this.selectedCategory;
                    let matchesAuthor = this.selectedAuthor === 'all' || item.author === this.selectedAuthor;
                    return matchesSearch && matchesCategory && matchesAuthor;
                });

                if (this.sortBy === 'az') {
                    list.sort((a, b) => a.title.localeCompare(b.title));
                } else if (this.sortBy === 'za') {
                    list.sort((a, b) => b.title.localeCompare(a.title));
                } else if (this.sortBy === 'oldest') {
                    list.sort((a, b) => a.id - b.id);
                } else {
                    list.sort((a, b) => b.id - a.id);
                }

                return list;
            },

            get uniqueAuthors() {
                return [...new Set(this.releases.map(r => r.author))];
            },

            get uniqueCategories() {
                return [...new Set(this.releases.map(r => r.category))];
            },

            get isFiltered() {
                return this.searchQuery !== '' || this.selectedCategory !== 'all' || this.selectedAuthor !== 'all' || this.sortBy !== 'latest';
            },

            resetFilters() {
                this.searchQuery = '';
                this.selectedCategory = 'all';
                this.selectedAuthor = 'all';
                this.sortBy = 'latest';
            },

            rotateNext() {
                if (this.filteredReleases.length > 0) {
                    let first = this.releases.shift();
                    this.releases.push(first);
                }
            },

            rotatePrev() {
                if (this.filteredReleases.length > 0) {
                    let last = this.releases.pop();
                    this.releases.unshift(last);
                }
            },

            startAutoLoop() {
                this.timer = setInterval(() => {
                    this.rotateNext();
                }, 3000);
            },

            stopAutoLoop() {
                if (this.timer) clearInterval(this.timer);
            }
         }"
         x-init="startAutoLoop()"
         @mouseenter="stopAutoLoop()"
         @mouseleave="startAutoLoop()">

    {{-- Ambient Background Glow --}}
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">

        {{-- 📌 Section Header + Description --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-6 pb-4 border-b border-white/15">
            <div class="max-w-3xl">
                <div class="flex items-center gap-2 mb-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-amber-300">
                        Official Provincial Communication
                    </span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight text-white drop-shadow-sm">
                    Press Release
                </h2>
                <p class="mt-2 text-xs sm:text-sm text-blue-100/80 leading-relaxed font-normal">
                    Official announcements, advisories, policy updates, and executive statements from the Provincial Government of Camarines Sur mapped directly with the UN Sustainable Development Goals (SDGs).
                </p>
            </div>

            <div class="flex-shrink-0">
                <a href="{{ route('press-releases.index') }}" 
                   class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-amber-300 hover:text-white bg-white/10 hover:bg-amber-400 hover:text-blue-950 px-5 py-2.5 rounded-xl border border-white/20 transition-all shadow-md group">
                    <span>Explore All Press Releases</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        {{-- 🔍 FILTRATION & SEARCH BAR WITH RESET 'X' BUTTON --}}
        <div class="bg-blue-950/60 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-white/15 shadow-xl mb-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-3 items-center">
            
            {{-- Search Bar --}}
            <div class="lg:col-span-3 relative">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search press releases..." 
                       class="w-full bg-slate-900/80 text-white placeholder-slate-400 text-xs rounded-xl px-3.5 py-2 border border-white/20 focus:border-amber-400 focus:outline-none pl-9">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>

            {{-- Category Filter --}}
            <div class="lg:col-span-3">
                <select x-model="selectedCategory" class="w-full bg-slate-900/80 text-white text-xs rounded-xl px-3 py-2 border border-white/20 focus:border-amber-400 focus:outline-none">
                    <option value="all">All Categories</option>
                    <template x-for="cat in uniqueCategories" :key="cat">
                        <option :value="cat" x-text="cat"></option>
                    </template>
                </select>
            </div>

            {{-- Author Filter --}}
            <div class="lg:col-span-3">
                <select x-model="selectedAuthor" class="w-full bg-slate-900/80 text-white text-xs rounded-xl px-3 py-2 border border-white/20 focus:border-amber-400 focus:outline-none">
                    <option value="all">All Authors / Offices</option>
                    <template x-for="auth in uniqueAuthors" :key="auth">
                        <option :value="auth" x-text="auth"></option>
                    </template>
                </select>
            </div>

            {{-- Sorting & Reset Button --}}
            <div class="lg:col-span-3 flex items-center gap-2">
                <select x-model="sortBy" class="w-full bg-slate-900/80 text-white text-xs rounded-xl px-3 py-2 border border-white/20 focus:border-amber-400 focus:outline-none">
                    <option value="latest">Sort: Newest</option>
                    <option value="oldest">Sort: Oldest</option>
                    <option value="az">Sort: Title (A-Z)</option>
                    <option value="za">Sort: Title (Z-A)</option>
                </select>

                <template x-if="isFiltered">
                    <button @click="resetFilters()" 
                            type="button" 
                            title="Reset All Filters"
                            class="p-2 bg-amber-400/20 hover:bg-amber-400 text-amber-300 hover:text-blue-950 rounded-xl border border-amber-400/40 transition flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </template>
            </div>

        </div>

        {{-- 🏛️ Main Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            {{-- 🌟 LEFT COLUMN: Featured Hero Card --}}
            <div class="lg:col-span-6 flex flex-col h-full">
                @if($featured)
                <div class="bg-blue-950/40 backdrop-blur-md rounded-2xl overflow-hidden border border-white/15 shadow-2xl flex flex-col justify-between h-full group">
                    <div>
                        <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                            <img src="{{ $featured->image }}" 
                                 alt="{{ $featured->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b224d] via-[#0b224d]/40 to-transparent"></div>

                            <div class="absolute top-4 left-4 flex flex-wrap gap-2 z-10">
                                <span class="bg-amber-400 text-blue-950 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-lg flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 bg-blue-950 rounded-full animate-ping"></span>
                                    Featured Statement
                                </span>
                                <span class="bg-blue-900/80 text-blue-100 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-white/10 backdrop-blur-md">
                                    {{ $featured->category }}
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4 text-slate-200 text-xs font-bold flex items-center gap-2 bg-black/40 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ $featured->published_at->format('F d, Y') }}</span>
                            </div>
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="flex items-center gap-1.5 text-xs font-bold text-amber-300 uppercase tracking-wider">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Author: {{ $featured->author }}</span>
                            </div>

                            <h3 class="text-xl sm:text-2xl font-black text-white group-hover:text-amber-300 transition-colors leading-snug">
                                {{ $featured->title }}
                            </h3>
                            <p class="text-blue-100/80 text-xs sm:text-sm leading-relaxed line-clamp-2 font-normal">
                                {{ $featured->excerpt }}
                            </p>

                            @if(!empty($featured->sdgs))
                            <div class="pt-2 flex flex-wrap items-center gap-1.5">
                                <span class="text-[10px] font-black uppercase text-slate-300 tracking-wider mr-1">SDG Target:</span>
                                @foreach($featured->sdgs as $sdg)
                                    <span class="bg-amber-400/20 text-amber-300 border border-amber-400/30 text-[9px] font-bold px-2 py-0.5 rounded">{{ $sdg }}</span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2">
                        <a href="{{ route('press-releases.index') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-amber-400 hover:text-white uppercase tracking-wider transition-colors">
                            <span>Read Official Statement</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endif
            </div>

            {{-- 📋 RIGHT COLUMN: Top 10 Non-Featured Recent Items --}}
            <div class="lg:col-span-6 flex flex-col justify-between h-full">

                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-black uppercase tracking-widest text-amber-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                        Recent Official Releases
                    </span>

                    <div class="flex items-center gap-2">
                        <button @click="rotatePrev()" 
                                type="button" 
                                title="Previous Item"
                                class="p-1.5 rounded-lg bg-white/10 hover:bg-amber-400 hover:text-blue-950 text-white transition border border-white/15">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"></path>
                            </svg>
                        </button>
                        <button @click="rotateNext()" 
                                type="button" 
                                title="Next Item"
                                class="p-1.5 rounded-lg bg-white/10 hover:bg-amber-400 hover:text-blue-950 text-white transition border border-white/15">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Strict 4-Card Window Display --}}
                <div class="space-y-2.5 flex-grow">
                    <template x-if="filteredReleases.length === 0">
                        <div class="p-8 text-center bg-blue-950/30 rounded-2xl border border-white/10 text-slate-300">
                            <p class="text-sm font-bold">No press releases match your search or filter criteria.</p>
                            <button @click="resetFilters()" class="mt-2 text-xs text-amber-300 hover:underline">Reset Filters</button>
                        </div>
                    </template>

                    <template x-for="(item, idx) in filteredReleases.slice(0, 4)" :key="item.id">
                        <a :href="item.link" 
                           class="group bg-blue-950/40 hover:bg-blue-900/80 backdrop-blur-md p-3 rounded-xl border border-white/10 hover:border-amber-400/60 transition-all duration-300 flex items-center gap-3 shadow-md block h-[106px]">
                            
                            {{-- Date Box --}}
                            <div class="w-14 h-18 bg-gradient-to-b from-amber-400 to-amber-500 text-blue-950 rounded-lg flex flex-col items-center justify-center flex-shrink-0 shadow border border-amber-300">
                                <span x-text="item.month" class="text-[9px] font-black uppercase leading-none text-blue-950/80"></span>
                                <span x-text="item.day" class="text-lg font-black leading-none my-0.5 tracking-tight text-blue-950"></span>
                                <span x-text="item.year" class="text-[8px] font-extrabold leading-none text-blue-950/70"></span>
                            </div>

                            {{-- Thumbnail --}}
                            <div class="w-16 h-18 rounded-lg overflow-hidden flex-shrink-0 relative border border-white/10">
                                <img :src="item.image" :alt="item.title" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>

                            {{-- Details --}}
                            <div class="flex-grow min-w-0 py-0.5">
                                <div class="flex items-center justify-between mb-0.5">
                                    <span x-text="item.category" class="text-[9px] font-black uppercase tracking-wider text-amber-300"></span>
                                    <span x-text="item.author" class="text-[9px] text-slate-300 font-semibold truncate max-w-[130px]"></span>
                                </div>

                                <h4 x-text="item.title" class="text-xs font-bold text-white group-hover:text-amber-300 transition-colors line-clamp-1 leading-tight"></h4>
                                <p x-text="item.excerpt" class="text-[10px] text-blue-100/70 line-clamp-1 mt-0.5 font-normal"></p>

                                <div class="mt-1 flex flex-wrap gap-1">
                                    <template x-for="sdg in item.sdgs" :key="sdg">
                                        <span x-text="sdg" class="bg-amber-400/10 text-amber-300 border border-amber-400/20 text-[8px] font-extrabold px-1.5 py-0.2 rounded"></span>
                                    </template>
                                </div>
                            </div>

                        </a>
                    </template>
                </div>

            </div>

        </div>

    </div>
</section>