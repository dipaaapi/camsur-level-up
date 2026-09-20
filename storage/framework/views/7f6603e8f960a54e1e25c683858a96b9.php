<?php
    try {
        // Fetch up to 8 latest Press Releases and up to 8 latest News from CMS/Database
        $dbPress = \App\Models\PressRelease::where(function($q) {
                $q->where('category', 'like', '%Press Release%')
                  ->orWhere('category', 'like', '%Advisory%')
                  ->orWhere('category', 'like', '%Bulletin%')
                  ->orWhere('title', 'like', '%Executive%')
                  ->orWhere('title', 'like', '%Notice%')
                  ->orWhere('title', 'like', '%Statement%')
                  ->orWhere('title', 'like', '%Advisory%');
            })
            ->latest('published_at')
            ->take(8)
            ->get();

        $dbNews = \App\Models\PressRelease::whereNotIn('id', $dbPress->pluck('id'))
            ->latest('published_at')
            ->take(8)
            ->get();

        $dbReleases = $dbPress->merge($dbNews)->sortByDesc('published_at');
    } catch (\Throwable $e) {
        $dbReleases = collect();
    }

    $allStories = [];

    if ($dbReleases->isNotEmpty()) {
        foreach ($dbReleases as $item) {
            $catLower = strtolower($item->category ?? '');
            $titleLower = strtolower($item->title ?? '');
            $authorLower = strtolower($item->author ?? '');
            
            $isPress = str_contains($catLower, 'press release') 
                    || str_contains($catLower, 'bulletin')
                    || str_contains($catLower, 'advisory')
                    || str_contains($titleLower, 'statement')
                    || str_contains($titleLower, 'advisory')
                    || str_contains($titleLower, 'notice')
                    || str_contains($titleLower, 'order')
                    || str_contains($titleLower, 'executive')
                    || str_contains($authorLower, 'office of the provincial governor');
            
            $type = $isPress ? 'press_release' : 'news';
            $pub = $item->published_at ? \Carbon\Carbon::parse($item->published_at) : now();

            $allStories[] = [
                'id' => $item->id,
                'type' => $type,
                'type_badge' => $isPress ? 'Press Release' : 'News Article',
                'type_icon' => $isPress ? '📢' : '📰',
                'title' => $item->title,
                'slug' => $item->slug,
                'excerpt' => $item->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($item->content), 140),
                'category' => $item->category ?? ($isPress ? 'Official Press Release' : 'Provincial News'),
                'author' => $item->author ?? ($isPress ? 'Office of the Provincial Governor' : 'Provincial Information Office'),
                'location' => 'Capitol Complex, Cadlan, Pili, Camarines Sur',
                'image' => $item->image ?: asset('img/home/stories/capitol.jpg'),
                'day' => $pub->format('d'),
                'month' => strtoupper($pub->format('M')),
                'year' => $pub->format('Y'),
                'date_full' => $pub->format('F d, Y'),
                'sdgs' => is_array($item->sdgs) ? $item->sdgs : (json_decode($item->sdgs, true) ?? ['SDG 16: Strong Institutions']),
                'url' => route('guest.news.show', $item->slug ?? 'news'),
                'expiry' => $isPress ? 'Official Permanent Record' : 'Published Article'
            ];
        }
    }

    // Curated standard items aligned with CMS schema & CamSur local assets
    if (empty($allStories)) {
        $allStories = [
            [
                'id' => 1,
                'type' => 'press_release',
                'type_badge' => 'Press Release',
                'type_icon' => '📢',
                'title' => 'Capitol Issues Executive Directives Establishing Modernized Digital Public Service & Citizen Transparency Portal',
                'slug' => 'capitol-issues-executive-directives-modernized-digital-service-portal',
                'excerpt' => 'The Provincial Government of Camarines Sur officially issues executive directives establishing integrated online public processing, real-time status tracking, and automated citizen clearance systems.',
                'category' => 'Official Press Release',
                'author' => 'Office of the Provincial Governor',
                'location' => 'Capitol Complex, Cadlan, Pili, Camarines Sur',
                'image' => asset('img/home/stories/capitol.jpg'),
                'day' => '18',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 18, 2026',
                'sdgs' => ['SDG 9: Innovation', 'SDG 16: Strong Institutions'],
                'url' => route('guest.news.index', ['tab' => 'press-releases']),
                'expiry' => 'Official Permanent Record'
            ],
            [
                'id' => 2,
                'type' => 'press_release',
                'type_badge' => 'Press Release',
                'type_icon' => '📢',
                'title' => 'Public Advisory: PDRRMO Activates All-Hazards Disaster Preparedness Protocol for Monsoon Weather',
                'slug' => 'pdrrmo-activates-disaster-preparedness-protocol',
                'excerpt' => 'Provincial Disaster Risk Reduction and Management Council issues emergency readiness guidelines across all 35 municipalities and Iriga City.',
                'category' => 'Official Advisory',
                'author' => 'PDRRMO Camsur',
                'location' => 'Emergency Operations Center, Pili',
                'image' => asset('img/home/stories/isarog.jpg'),
                'day' => '17',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 17, 2026',
                'sdgs' => ['SDG 11: Sustainable Cities', 'SDG 13: Climate Action'],
                'url' => route('guest.news.index', ['tab' => 'press-releases']),
                'expiry' => 'Official Permanent Record'
            ],
            [
                'id' => 3,
                'type' => 'news',
                'type_badge' => 'News Article',
                'type_icon' => '📰',
                'title' => 'Provincial Mobile Medical Fleet Delivers Free Diagnostic Care to Coastal Barangays',
                'slug' => 'provincial-mobile-medical-fleet-free-diagnostic-care',
                'excerpt' => 'Over 1,200 residents in remote coastal communities received specialized medical check-ups, dental extraction, and essential maintenance medications under the Level Up Health Caravan.',
                'category' => 'Health & Welfare',
                'author' => 'Provincial Health Office',
                'location' => 'Coastal Municipalities, Camarines Sur',
                'image' => asset('img/home/stories/isarog.jpg'),
                'day' => '15',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 15, 2026',
                'sdgs' => ['SDG 3: Good Health', 'SDG 10: Reduced Inequalities'],
                'url' => route('guest.news.index', ['tab' => 'news']),
                'expiry' => 'Published Article'
            ],
            [
                'id' => 4,
                'type' => 'news',
                'type_badge' => 'News Article',
                'type_icon' => '📰',
                'title' => 'Rice Farmers Across District 3 Receive High-Yield Hybrid Seeds and Solar Dryer Subsidies',
                'slug' => 'rice-farmers-receive-hybrid-seeds-solar-dryers',
                'excerpt' => 'The Provincial Agriculture Office distributed 4,000 bags of certified seeds alongside climate-smart post-harvest facilities to boost farmer income and municipal yield.',
                'category' => 'Agriculture',
                'author' => 'Provincial Agriculture Office',
                'location' => 'District 3 Agri Hubs, CamSur',
                'image' => asset('img/home/stories/cuisine.jpg'),
                'day' => '08',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 08, 2026',
                'sdgs' => ['SDG 1: No Poverty', 'SDG 2: Zero Hunger'],
                'url' => route('guest.news.index', ['tab' => 'news']),
                'expiry' => 'Published Article'
            ],
            [
                'id' => 5,
                'type' => 'news',
                'type_badge' => 'News Article',
                'type_icon' => '📰',
                'title' => 'CamSur Watersports Complex & Tourism Circuits Host Regional Sports Summit',
                'slug' => 'camsur-watersports-complex-tourism-circuits-summit',
                'excerpt' => 'Hundreds of local and international visitors converged at CWC as the province showcases world-class eco-tourism facilities and cultural attractions.',
                'category' => 'Tourism',
                'author' => 'Camsur Tourism Board',
                'location' => 'CWC, Cadlan, Pili, Camarines Sur',
                'image' => asset('img/home/stories/cwc.jpg'),
                'day' => '05',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 05, 2026',
                'sdgs' => ['SDG 8: Decent Work', 'SDG 11: Sustainable Communities'],
                'url' => route('guest.news.index', ['tab' => 'news']),
                'expiry' => 'Published Article'
            ],
            [
                'id' => 6,
                'type' => 'news',
                'type_badge' => 'News Article',
                'type_icon' => '📰',
                'title' => 'CamSur Tertiary Scholarship Program Expands Review Stipends for Board Examinees',
                'slug' => 'camsur-scholarship-expands-board-exam-grants',
                'excerpt' => 'Graduating students from state universities and community colleges can now apply for comprehensive review subsidies and board examination logistical support.',
                'category' => 'Education',
                'author' => 'Youth & Scholarship Office',
                'location' => 'Provincial Capitol, Pili',
                'image' => asset('img/services/scholarship/kafuerte-scholarship-banner.png'),
                'day' => '01',
                'month' => 'SEP',
                'year' => '2026',
                'date_full' => 'September 01, 2026',
                'sdgs' => ['SDG 4: Quality Education', 'SDG 8: Decent Work'],
                'url' => route('guest.news.index', ['tab' => 'news']),
                'expiry' => 'Published Article'
            ]
        ];
    }

    $pressCount = count(array_filter($allStories, fn($s) => $s['type'] === 'press_release'));
    $newsCount = count(array_filter($allStories, fn($s) => $s['type'] === 'news'));
    $totalCount = count($allStories);

    // Smart default active tab: if both exist, 'all'; if only news, 'news'; if only press, 'press_release'
    $defaultTab = ($pressCount > 0 && $newsCount > 0) ? 'all' : ($pressCount > 0 ? 'press_release' : 'news');
    $hasMultipleTypes = ($pressCount > 0 && $newsCount > 0);
?>

<section style="background: linear-gradient(180deg, #091a38 0%, #0c234a 45%, #081730 100%);"
         class="news-media-hub relative py-16 text-white overflow-hidden border-b border-blue-900/60"
         x-data="{
             activeTab: '<?php echo e($defaultTab); ?>',
             sliderIndex: 0,
             allStories: <?php echo e(json_encode($allStories)); ?>,
             timer: null,

             get filteredStories() {
                 if (this.activeTab === 'all') return this.allStories;
                 return this.allStories.filter(s => s.type === this.activeTab);
             },

             get featuredStory() {
                 return this.filteredStories[0] || this.allStories[0];
             },

             get carouselStories() {
                 return this.filteredStories.slice(1);
             },

             get sliderWindow() {
                 if (this.carouselStories.length === 0) return [];
                 let count = Math.min(3, this.carouselStories.length);
                 let res = [];
                 for (let i = 0; i < count; i++) {
                     let idx = (this.sliderIndex + i) % this.carouselStories.length;
                     res.push(this.carouselStories[idx]);
                 }
                 return res;
             },

             next() {
                 if (this.carouselStories.length <= 1) return;
                 this.sliderIndex = (this.sliderIndex + 1) % this.carouselStories.length;
             },
             prev() {
                 if (this.carouselStories.length <= 1) return;
                 this.sliderIndex = (this.sliderIndex - 1 + this.carouselStories.length) % this.carouselStories.length;
             },
             setTab(tab) {
                 this.activeTab = tab;
                 this.sliderIndex = 0;
             },
             startLoop() {
                 this.timer = setInterval(() => { this.next(); }, 5000);
             },
             stopLoop() {
                 if (this.timer) clearInterval(this.timer);
             }
         }"
         x-init="startLoop()"
         @mouseenter="stopLoop()"
         @mouseleave="startLoop()">

    
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-8 pb-6 border-b border-white/10">
            <div class="max-w-3xl">
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-amber-300">
                        Official Public Communications & Press Room
                    </span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white leading-tight">
                    News & Press Releases
                </h2>
                <p class="mt-3 text-blue-100/80 text-xs sm:text-sm leading-relaxed max-w-2xl font-normal">
                    Direct access to official executive communiqués, public safety advisories, and developmental news reporting across Camarines Sur.
                </p>
            </div>

            
            <div class="flex items-center sm:self-end">
                <a href="<?php echo e(route('guest.news.index', $pressCount > 0 ? [] : ['tab' => 'news'])); ?>" 
                   class="group inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider bg-amber-400 text-slate-950 hover:bg-amber-300 px-5 py-2.5 rounded-xl shadow-lg transition-all duration-300 flex-shrink-0">
                    <span><?php echo e($pressCount > 0 ? 'View Press Portal' : 'Browse All News'); ?></span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        
        <?php if($hasMultipleTypes): ?>
        <div class="flex items-center justify-between flex-wrap gap-4 mb-8">
            <div class="flex items-center gap-2 p-1 bg-slate-900/80 border border-white/10 rounded-2xl backdrop-blur-md">
                
                <button type="button"
                        @click="setTab('all')"
                        :class="activeTab === 'all' ? 'bg-amber-400 text-slate-950 shadow-md font-black' : 'text-slate-300 hover:text-white hover:bg-white/5 font-semibold'"
                        class="px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <span>📰</span>
                    <span>All Updates</span>
                    <span class="text-[10px] px-1.5 py-0.5 rounded-full"
                          :class="activeTab === 'all' ? 'bg-slate-950/20 text-slate-950' : 'bg-white/10 text-slate-300'">
                        <?php echo e($totalCount); ?>

                    </span>
                </button>

                
                <?php if($pressCount > 0): ?>
                <button type="button"
                        @click="setTab('press_release')"
                        :class="activeTab === 'press_release' ? 'bg-rose-600 text-white shadow-md font-black' : 'text-slate-300 hover:text-white hover:bg-white/5 font-semibold'"
                        class="px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <span>📢</span>
                    <span>Press Releases</span>
                    <span class="text-[10px] px-1.5 py-0.5 rounded-full"
                          :class="activeTab === 'press_release' ? 'bg-black/30 text-white' : 'bg-white/10 text-slate-300'">
                        <?php echo e($pressCount); ?>

                    </span>
                </button>
                <?php endif; ?>

                
                <?php if($newsCount > 0): ?>
                <button type="button"
                        @click="setTab('news')"
                        :class="activeTab === 'news' ? 'bg-blue-600 text-white shadow-md font-black' : 'text-slate-300 hover:text-white hover:bg-white/5 font-semibold'"
                        class="px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <span>🗞️</span>
                    <span>News Articles</span>
                    <span class="text-[10px] px-1.5 py-0.5 rounded-full"
                          :class="activeTab === 'news' ? 'bg-black/30 text-white' : 'bg-white/10 text-slate-300'">
                        <?php echo e($newsCount); ?>

                    </span>
                </button>
                <?php endif; ?>
            </div>

            
            <div class="text-xs text-slate-300 flex items-center gap-3">
                <?php if($pressCount > 0): ?>
                <span class="inline-flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                    <span class="font-bold text-rose-300">Press Release:</span>
                    <span class="text-slate-400">Official Directives & Statements</span>
                </span>
                <?php endif; ?>
                <?php if($pressCount > 0 && $newsCount > 0): ?>
                <span class="hidden sm:inline text-slate-500">&bull;</span>
                <?php endif; ?>
                <?php if($newsCount > 0): ?>
                <span class="inline-flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-blue-400"></span>
                    <span class="font-bold text-blue-300">News:</span>
                    <span class="text-slate-400">Provincial Reports & Initiatives</span>
                </span>
                <?php endif; ?>
            </div>
        </div>
        <?php else: ?>
        
        <div class="flex items-center justify-between flex-wrap gap-4 mb-8">
            <div class="inline-flex items-center gap-2.5 px-4 py-2 bg-slate-900/80 border border-white/10 rounded-2xl text-xs">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                <span class="text-slate-300 font-bold uppercase tracking-wider">Latest News Articles & Reports</span>
                <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/30 font-extrabold">
                    <?php echo e($totalCount); ?> <?php echo e(Str::plural('Article', $totalCount)); ?>

                </span>
            </div>
        </div>
        <?php endif; ?>

        
        <template x-if="featuredStory">
            <article class="bg-slate-900/90 backdrop-blur-md rounded-3xl overflow-hidden border border-white/15 shadow-2xl hover:border-amber-400/50 transition-all duration-500 mb-12 group">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">
                    
                    
                    <div class="lg:col-span-7 relative h-72 sm:h-96 lg:h-auto min-h-[360px] overflow-hidden">
                        <img :src="featuredStory.image" 
                             :alt="featuredStory.title"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/30 to-transparent"></div>

                        
                        <div class="absolute top-5 left-5 flex items-center gap-3 z-10 flex-wrap">
                            
                            <div class="bg-amber-400 text-slate-950 px-3.5 py-1.5 rounded-2xl flex flex-col items-center shadow-xl border border-amber-300">
                                <span class="text-xl font-black leading-none" x-text="featuredStory.day"></span>
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900" x-text="featuredStory.month"></span>
                            </div>
                            
                            
                            <template x-if="featuredStory.type === 'press_release'">
                                <span class="inline-flex items-center gap-1.5 bg-rose-600 text-white text-xs font-black uppercase px-3.5 py-1.5 rounded-full shadow-lg border border-rose-400/40 backdrop-blur-md tracking-wider">
                                    <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                                    <span>📢 OFFICIAL PRESS RELEASE</span>
                                </span>
                            </template>
                            <template x-if="featuredStory.type === 'news'">
                                <span class="inline-flex items-center gap-1.5 bg-blue-600 text-white text-xs font-black uppercase px-3.5 py-1.5 rounded-full shadow-lg border border-blue-400/40 backdrop-blur-md tracking-wider">
                                    <span class="w-2 h-2 rounded-full bg-cyan-300 animate-pulse"></span>
                                    <span>📰 PROVINCIAL NEWS</span>
                                </span>
                            </template>
                        </div>

                        
                        <div class="absolute bottom-4 left-5 right-5 flex items-center justify-between text-xs text-slate-300 flex-wrap gap-2">
                            <span class="bg-black/70 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 flex items-center gap-1.5">
                                <span class="text-amber-400">📍 Location:</span>
                                <span x-text="featuredStory.location"></span>
                            </span>
                            <span class="bg-black/70 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-slate-400"
                                  x-text="'Validity: ' + featuredStory.expiry">
                            </span>
                        </div>
                    </div>

                    
                    <div class="lg:col-span-5 p-6 sm:p-10 flex flex-col justify-between bg-slate-900/70">
                        <div>
                            
                            <div class="flex items-center gap-2 mb-3.5 flex-wrap">
                                <span class="text-[11px] font-black uppercase tracking-wider px-3 py-1 rounded-full"
                                      :class="featuredStory.type === 'press_release' ? 'bg-rose-500/20 text-rose-300 border border-rose-500/30' : 'bg-blue-500/20 text-blue-300 border border-blue-500/30'"
                                      x-text="featuredStory.category">
                                </span>
                                <span class="text-xs text-slate-500">&bull;</span>
                                <span class="text-xs font-bold text-slate-300">
                                    <template x-if="featuredStory.type === 'press_release'">
                                        <span>🏛️ Authority: </span>
                                    </template>
                                    <template x-if="featuredStory.type === 'news'">
                                        <span>✍️ Writer: </span>
                                    </template>
                                    <span x-text="featuredStory.author"></span>
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-black uppercase tracking-tight text-white leading-snug mb-4 group-hover:text-amber-300 transition-colors">
                                <a :href="featuredStory.url" x-text="featuredStory.title"></a>
                            </h3>

                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-normal"
                               x-text="featuredStory.excerpt">
                            </p>

                            
                            <div class="flex flex-wrap items-center gap-1.5 mb-6">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider mr-1">Aligned SDGs:</span>
                                <template x-for="sdg in featuredStory.sdgs" :key="sdg">
                                    <span class="text-[10px] font-bold text-amber-200 bg-amber-400/15 px-2.5 py-0.5 rounded-md border border-amber-400/25"
                                          x-text="sdg">
                                    </span>
                                </template>
                            </div>
                        </div>

                        
                        <div class="pt-5 border-t border-white/10 flex items-center justify-between">
                            <a :href="featuredStory.url" 
                               class="inline-flex items-center gap-2 text-xs sm:text-sm font-black text-amber-400 hover:text-white uppercase tracking-wider group-hover:gap-3 transition-all">
                                <span x-text="featuredStory.type === 'press_release' ? 'Read Full Official Statement' : 'Read Full News Article'"></span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <span class="text-xs font-bold text-slate-400" x-text="featuredStory.date_full"></span>
                        </div>

                    </div>
                </div>
            </article>
        </template>

        
        <div class="flex items-center justify-between gap-4 mb-6">
            <div>
                <h3 class="text-lg sm:text-xl font-extrabold uppercase tracking-tight text-white flex items-center gap-2">
                    <span x-text="activeTab === 'all' ? 'More Releases & News' : (activeTab === 'press_release' ? 'More Official Press Releases' : 'More Provincial News Articles')"></span>
                </h3>
                <p class="text-xs text-slate-400 mt-0.5">
                    Continuous chronological stream of official communications and developmental dispatches
                </p>
            </div>

            
            <div class="flex items-center gap-2 flex-shrink-0" x-show="carouselStories.length > 0">
                <span class="text-xs text-slate-400 mr-1 hidden sm:inline" x-text="carouselStories.length + ' releases available'"></span>
                <button @click="prev()" 
                        aria-label="Previous story"
                        class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-amber-400 hover:text-slate-950 text-white flex items-center justify-center transition-all border border-white/10 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="next()" 
                        aria-label="Next story"
                        class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-amber-400 hover:text-slate-950 text-white flex items-center justify-center transition-all border border-white/10 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="item in sliderWindow" :key="item.id">
                    <article class="bg-slate-900/80 backdrop-blur-md rounded-2xl overflow-hidden border transition-all duration-300 flex flex-col justify-between group h-full hover:shadow-2xl"
                             :class="item.type === 'press_release' ? 'border-rose-500/30 hover:border-rose-400' : 'border-blue-500/30 hover:border-blue-400'">
                        
                        
                        <div class="relative h-52 sm:h-56 overflow-hidden">
                            <img :src="item.image" 
                                 :alt="item.title"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/40 to-transparent"></div>

                            
                            <div class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-xl bg-slate-950/90 border border-white/15 backdrop-blur-md flex flex-col items-center">
                                <span class="text-base font-black text-amber-400 leading-none" x-text="item.day"></span>
                                <span class="text-[9px] font-extrabold text-slate-300 uppercase" x-text="item.month"></span>
                            </div>

                            
                            <div class="absolute top-3.5 right-3.5">
                                <span class="text-[10px] font-extrabold text-white px-2.5 py-1 rounded-full border shadow-md flex items-center gap-1"
                                      :class="item.type === 'press_release' ? 'bg-rose-600 border-rose-400/40' : 'bg-blue-600 border-blue-400/40'">
                                    <span x-text="item.type_icon"></span>
                                    <span x-text="item.type_badge"></span>
                                </span>
                            </div>

                            
                            <div class="absolute bottom-3 left-3.5">
                                <span class="text-[10px] font-black uppercase tracking-wider text-amber-300 bg-slate-900/90 backdrop-blur-sm px-2.5 py-0.5 rounded-md border border-amber-400/30"
                                      x-text="item.category">
                                </span>
                            </div>

                            
                            <div class="absolute bottom-3 right-3.5 text-[10px] text-slate-300 bg-black/60 px-2 py-0.5 rounded backdrop-blur-sm font-sans flex items-center gap-1">
                                <span>📍</span>
                                <span class="truncate max-w-[110px]" x-text="item.location"></span>
                            </div>
                        </div>

                        
                        <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                            <div>
                                <span class="block text-[11px] font-semibold mb-1"
                                      :class="item.type === 'press_release' ? 'text-rose-300' : 'text-blue-300'"
                                      x-text="(item.type === 'press_release' ? '🏛️ Office: ' : '✍️ Byline: ') + item.author">
                                </span>
                                
                                <h4 class="text-base font-black leading-snug line-clamp-2 uppercase text-white group-hover:text-amber-300 transition-colors"
                                    x-text="item.title">
                                </h4>

                                <p class="text-xs text-slate-300 line-clamp-2 leading-relaxed font-normal mt-2"
                                   x-text="item.excerpt">
                                </p>
                            </div>

                            
                            <div>
                                <template x-if="item.sdgs && item.sdgs.length > 0">
                                    <div class="flex flex-wrap gap-1 mb-3">
                                        <template x-for="sdg in item.sdgs" :key="sdg">
                                            <span class="bg-amber-400/10 text-amber-300 border border-amber-400/20 text-[9px] font-bold px-1.5 py-0.5 rounded" x-text="sdg"></span>
                                        </template>
                                    </div>
                                </template>

                                <div class="pt-3 border-t border-white/10 flex items-center justify-between">
                                    <a :href="item.url" 
                                       class="text-xs font-black uppercase tracking-wider text-amber-400 hover:text-white flex items-center gap-1.5 group-hover:gap-2 transition-all">
                                        <span x-text="item.type === 'press_release' ? 'Read Release' : 'Read Article'"></span>
                                        <span>&rarr;</span>
                                    </a>
                                    <span class="text-[10px] text-slate-400" x-text="item.date_full"></span>
                                </div>
                            </div>
                        </div>

                    </article>
                </template>
            </div>

            
            <div x-show="sliderWindow.length === 0" class="text-center py-12 bg-slate-900/50 rounded-2xl border border-white/10">
                <p class="text-sm text-slate-400">No additional releases found in this category.</p>
            </div>

            
            <div class="flex items-center justify-center gap-1.5 mt-8" x-show="carouselStories.length > 3">
                <template x-for="(item, i) in carouselStories" :key="i">
                    <button @click="sliderIndex = i" 
                            :class="sliderIndex === i ? 'w-8 bg-amber-400' : 'w-2 bg-slate-700 hover:bg-slate-600'"
                            class="h-1.5 rounded-full transition-all duration-300"
                            :aria-label="'Go to item ' + (i + 1)">
                    </button>
                </template>
            </div>
        </div>

    </div>
</section>
<?php /**PATH /var/www/resources/views/components/home/news.blade.php ENDPATH**/ ?>