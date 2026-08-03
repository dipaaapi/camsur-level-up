@php
    $accounts = \App\Models\SocialMediaAccount::orderBy('sort_order')->get();
    
    // Main Official Page ng CamSur para sa Hero Featured Spotlight Banner
    $mainOfficial = $accounts->firstWhere('handle', 'provinceofcamsur') ?? $accounts->first();
@endphp

<section style="background: linear-gradient(135deg, #06142e 0%, #0a214a 50%, #071736 100%);" 
         class="py-16 text-white relative overflow-hidden border-b border-blue-900/60"
         x-data="{
            searchQuery: '',
            selectedCategory: 'provincial',
            accountsList: {{ json_encode($accounts) }},

            get filteredAccounts() {
                return this.accountsList.filter(a => {
                    // 🌟 1. Alisin ang main Province of CamSur sa listahan dahil nasa Hero Banner na
                    if (a.handle === 'provinceofcamsur') {
                        return false;
                    }

                    let matchesSearch = a.office_name.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                          a.handle.toLowerCase().includes(this.searchQuery.toLowerCase());
                    let matchesCategory = a.badge_category.toLowerCase() === this.selectedCategory.toLowerCase();
                    
                    return matchesSearch && matchesCategory;
                });
            },

            getInitials(name) {
                if (!name) return 'CS';
                let words = name.trim().split(/\s+/);
                if (words.length === 1) {
                    return words[0].substring(0, 2).toUpperCase();
                }
                return (words[0][0] + words[1][0]).toUpperCase();
            },

            sharePage(url) {
                if (navigator.share) {
                    navigator.share({
                        title: 'CamSur Social Media Hub',
                        url: url
                    }).catch(() => {});
                } else {
                    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), '_blank');
                }
            }
         }">

    {{-- Ambient Background Glows --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- 📌 Section Header --}}
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-2">
                <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse"></span>
                <span class="text-xs font-black uppercase tracking-widest text-amber-300">
                    Level Up Digital Network
                </span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight text-white drop-shadow-md">
                Social Media Hub
            </h2>
            <p class="mt-2 text-xs sm:text-sm text-blue-100/80 leading-relaxed font-normal max-w-3xl">
                Manatiling konektado at updated sa opisyal na balita, serbisyo publiko, turismo, at kaganapan sa lalawigan. I-follow ang ating mga verified Facebook pages sa isang pindot lang!
            </p>
        </div>

        {{-- 🚀 PROMINENT FEATURED HERO BANNER (PROVINCE OF CAMSUR ONLY) --}}
        @if($mainOfficial)
        <div class="mb-10 bg-gradient-to-r from-blue-900/90 via-blue-950/80 to-slate-900/90 backdrop-blur-xl rounded-3xl p-6 sm:p-8 border-2 border-amber-400/40 shadow-2xl relative overflow-hidden group">
            
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-amber-400/10 rounded-full blur-2xl pointer-events-none"></div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-6 relative z-10">
                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-5">
                    
                    {{-- Logo Circle --}}
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-blue-600 text-white font-black text-xl flex items-center justify-center flex-shrink-0 shadow-xl border-2 border-amber-400 overflow-hidden relative">
                        <img src="https://graph.facebook.com/provinceofcamsur/picture?type=large" 
                             alt="{{ $mainOfficial->office_name }}" 
                             class="w-full h-full object-cover"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=CamSur';">
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
                            <span class="bg-amber-400 text-blue-950 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-blue-950 animate-ping"></span>
                                Primary Official Channel
                            </span>
                            <span class="text-xs text-blue-200 font-bold bg-blue-900/60 px-3 py-1 rounded-full border border-white/10">
                                {{ $mainOfficial->followers_count }}
                            </span>
                        </div>

                        <h3 class="text-xl sm:text-2xl font-black text-white group-hover:text-amber-300 transition-colors">
                            {{ $mainOfficial->office_name }} <span class="text-amber-400">✓</span>
                        </h3>

                        <p class="text-xs sm:text-sm text-blue-100/90 max-w-2xl leading-relaxed">
                            Maging updated sa pinakabagong executive orders, ayuda, infrastructure updates, at serbisyo publiko mula sa Kapitolyo ng Camarines Sur!
                        </p>
                    </div>
                </div>

                {{-- Action Button --}}
                <div class="flex-shrink-0 w-full lg:w-auto">
                    <a href="{{ $mainOfficial->url }}" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="w-full lg:w-auto py-3.5 px-8 bg-amber-400 hover:bg-amber-300 text-blue-950 font-black text-xs sm:text-sm uppercase tracking-wider rounded-2xl shadow-xl hover:shadow-amber-400/20 transition-all duration-300 flex items-center justify-center gap-2.5 border border-amber-300 active:scale-98">
                        <svg class="w-5 h-5 text-blue-950" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span>Follow Province of CamSur Facebook Page</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        @endif

        {{-- 🎛️ CONTROL DECK: SEARCH BAR WITH RESET 'X' + NO 'ALL' TAB --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8 bg-blue-950/60 p-4 rounded-2xl border border-white/10 backdrop-blur-md">
            
            {{-- Search Bar na may Reset 'X' Button --}}
            <div class="relative w-full sm:w-80">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search official page or office..." 
                       class="w-full bg-slate-900/90 text-white placeholder-slate-400 text-xs rounded-xl px-3.5 py-2.5 border border-white/15 focus:border-amber-400 focus:outline-none pl-9 pr-8">
                
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>

                {{-- 🌟 Cancel/Reset Button --}}
                <button x-show="searchQuery.length > 0" 
                        @click="searchQuery = ''" 
                        type="button" 
                        title="Clear Search"
                        class="absolute right-2.5 top-2.5 text-slate-400 hover:text-amber-300 p-0.5 rounded-full hover:bg-white/10 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            {{-- Filter Chips (WALANG 'ALL' TAB, DEFAULT IS 'PROVINCIAL') --}}
            <div class="flex items-center gap-1.5 w-full sm:w-auto overflow-x-auto no-scrollbar">
                <template x-for="cat in ['provincial', 'departments', 'tourism', 'events']" :key="cat">
                    <button @click="selectedCategory = cat"
                            type="button"
                            :class="selectedCategory === cat 
                                ? 'bg-amber-400 text-blue-950 font-black shadow-md' 
                                : 'bg-white/5 text-slate-300 hover:bg-white/10 font-bold'"
                            class="px-5 py-2 rounded-xl text-xs uppercase tracking-wider transition-all duration-200 flex-shrink-0">
                        <span x-text="cat"></span>
                    </button>
                </template>
            </div>

        </div>

        {{-- 🏛️ DIRECTORY GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <template x-if="filteredAccounts.length === 0">
                <div class="col-span-full py-12 text-center bg-blue-950/30 rounded-3xl border border-white/10 text-slate-300">
                    <p class="text-sm font-bold">No social media channels match your search criteria.</p>
                </div>
            </template>

            <template x-for="item in filteredAccounts" :key="item.id">
                <div class="bg-blue-950/40 hover:bg-blue-900/60 backdrop-blur-md rounded-2xl p-5 border border-white/15 hover:border-amber-400/60 shadow-xl transition-all duration-300 flex flex-col justify-between group"
                     x-data="{ imgFailed: false }">
                    
                    {{-- Page Info --}}
                    <div class="flex items-start gap-3.5 mb-6">
                        
                        {{-- Logo o 2-Letter Abbreviated Fallback --}}
                        <div class="w-12 h-12 rounded-xl bg-blue-600/90 text-white font-extrabold text-sm flex items-center justify-center flex-shrink-0 overflow-hidden shadow-lg border border-white/20">
                            
                            <template x-if="item.avatar_url && !imgFailed">
                                <img :src="item.avatar_url" 
                                     :alt="item.office_name" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                     x-on:error="imgFailed = true">
                            </template>

                            <template x-if="!item.avatar_url || imgFailed">
                                <span x-text="getInitials(item.office_name)" class="tracking-wider text-amber-300"></span>
                            </template>
                        </div>

                        {{-- Title & Followers --}}
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center gap-1">
                                <h3 class="text-sm font-extrabold text-white group-hover:text-amber-300 transition-colors truncate" x-text="item.office_name"></h3>
                                <template x-if="item.is_verified">
                                    <span class="text-amber-400 text-xs font-black" title="Verified Channel">✓</span>
                                </template>
                            </div>
                            <p class="text-xs text-blue-200/70 font-semibold mt-0.5" x-text="item.followers_count"></p>
                        </div>

                    </div>

                    {{-- Action Buttons --}}
                    <div class="bg-slate-900/80 rounded-xl p-1.5 border border-white/10 flex items-center justify-between gap-2">
                        
                        {{-- Follow Button --}}
                        <a :href="item.url" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="flex-1 py-2 px-3 bg-blue-600 hover:bg-amber-400 hover:text-blue-950 text-white rounded-lg text-xs font-black uppercase tracking-wider flex items-center justify-center gap-1.5 shadow transition-all duration-200 active:scale-98">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span>Follow Page</span>
                        </a>

                        {{-- Share Button --}}
                        <button @click="sharePage(item.url)"
                                type="button"
                                class="py-2 px-3 bg-white/10 hover:bg-white/20 text-blue-100 rounded-lg text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-1.5 border border-white/10 transition active:scale-98">
                            <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            <span>Share</span>
                        </button>

                    </div>

                </div>
            </template>

        </div>

    </div>
</section>