@php
    // Curated official videos and reels from CamSur official channels
    $videos = [
        [
            'id' => 1,
            'title' => 'CamSur: The Wakeboarding & Adventure Capital of the Philippines',
            'category' => 'Tourism & Adventure',
            'duration' => '3:45',
            'date' => 'August 2026',
            'thumbnail' => asset('img/home/stories/cwc.jpg'),
            'badge' => 'Trending Spotlight',
            'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
            'fb_reel_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
            'views' => '45.2K',
            'channel' => 'Visit CamSur Official'
        ],
        [
            'id' => 2,
            'title' => 'Caramoan Islands: Pristine White Sand & Marine Sanctuaries',
            'category' => 'Eco-Tourism',
            'duration' => '2:18',
            'date' => 'July 2026',
            'thumbnail' => asset('img/services/tourism/background/caramoan_gota.jpg'),
            'badge' => 'Must Watch',
            'embed_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
            'fb_reel_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
            'views' => '38.6K',
            'channel' => 'Visit CamSur Official'
        ],
        [
            'id' => 3,
            'title' => 'Kaogma Festival: The World-Class Celebration of Camarines Sur',
            'category' => 'Culture & Arts',
            'duration' => '4:12',
            'date' => 'May 2026',
            'thumbnail' => asset('img/home/stories/kaogma.jpg'),
            'badge' => 'Festival Highlights',
            'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0',
            'fb_reel_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0',
            'views' => '92.1K',
            'channel' => 'Province of Camarines Sur'
        ],
        [
            'id' => 4,
            'title' => 'Digital Public Service & New Capitol Infrastructure Milestones',
            'category' => 'Governance',
            'duration' => '3:05',
            'date' => 'June 2026',
            'thumbnail' => asset('img/home/stories/capitol.jpg'),
            'badge' => 'Capitol Progress',
            'embed_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
            'fb_reel_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
            'views' => '21.4K',
            'channel' => 'Provincial Information Office'
        ],
        [
            'id' => 5,
            'title' => 'Mount Isarog Natural Park: Trails, Waterfalls & Eco-Adventure',
            'category' => 'Nature & Adventure',
            'duration' => '2:40',
            'date' => 'July 2026',
            'thumbnail' => asset('img/home/stories/isarog.jpg'),
            'badge' => 'Eco-Heritage',
            'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
            'fb_reel_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
            'views' => '29.8K',
            'channel' => 'Visit CamSur Official'
        ]
    ];

    $featuredVideo = $videos[0];
@endphp

<section id="video-section-container" 
         style="background: linear-gradient(135deg, #071938 0%, #0d3470 50%, #081a3a 100%);"
         class="video-section relative py-16 text-white overflow-hidden border-b border-blue-900/60"
         x-data="{
             videos: {{ json_encode($videos) }},
             activeVideo: {{ json_encode($featuredVideo) }},
             modalOpen: false,
             selectVideo(vid) {
                 this.activeVideo = vid;
             },
             openModalWith(vid) {
                 this.activeVideo = vid;
                 this.modalOpen = true;
             },
             closeModal() {
                 this.modalOpen = false;
             }
         }">

    {{-- Ambient Lighting Blobs --}}
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
            <div>
                <span class="inline-flex items-center gap-2 text-amber-300 font-black uppercase tracking-[3px] text-xs mb-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-ping"></span>
                    Cinematic Stream & Official Reels
                </span>
                <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tight text-white leading-none">
                    Videos & Reels
                </h2>
                <p class="mt-3 text-slate-200 text-sm max-w-xl leading-relaxed">
                    Watch official broadcasts, tourist destination trailers, cultural celebrations, and video highlights across Camarines Sur.
                </p>
            </div>

            <div>
                <a href="{{ route('guest.news.index') }}#videos-section"
                   style="background-color: rgba(255, 255, 255, 0.12);"
                   class="inline-flex items-center gap-2 hover:bg-white text-white hover:text-slate-900 font-extrabold text-xs uppercase tracking-wider px-5 py-3 rounded-xl backdrop-blur-md border border-white/20 transition-all shadow-md group">
                    <span>View All Media Reels</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        {{-- 🎬 1. Featured Cinematic Video Hero (Glassmorphism Frame) --}}
        <div style="background-color: rgba(10, 25, 55, 0.85); border-color: rgba(255, 255, 255, 0.15);" 
             class="backdrop-blur-xl rounded-[28px] sm:rounded-[36px] p-5 sm:p-8 border shadow-2xl mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                {{-- Responsive Video Player Embed --}}
                <div class="lg:col-span-7">
                    <div class="relative aspect-video rounded-2xl overflow-hidden bg-black shadow-2xl group border border-white/15">
                        <iframe :src="activeVideo.fb_reel_url || activeVideo.embed_url" 
                                class="w-full h-full border-0" 
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>

                {{-- Video Metadata & Action Controls --}}
                <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                    <div>
                        {{-- Live Badge --}}
                        <div class="inline-flex items-center gap-2 bg-red-600 text-white text-xs font-black uppercase px-3.5 py-1.5 rounded-full shadow-lg mb-4">
                            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                            <span x-text="activeVideo.badge">Featured</span>
                        </div>

                        <span class="block text-xs font-black text-amber-300 uppercase tracking-widest mb-1.5" x-text="activeVideo.category"></span>
                        
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-black uppercase text-white leading-snug mb-4" x-text="activeVideo.title">
                        </h3>

                        <div class="flex flex-wrap items-center gap-3 text-xs text-slate-200 mb-6 font-semibold">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                                <span x-text="activeVideo.views"></span> views
                            </span>
                            <span>&bull;</span>
                            <span x-text="activeVideo.duration"></span>
                            <span>&bull;</span>
                            <span x-text="activeVideo.channel"></span>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-white/15 flex items-center gap-4">
                        <button type="button" 
                                @click="openModalWith(activeVideo)"
                                class="inline-flex items-center gap-2.5 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider px-6 py-3.5 rounded-xl transition-all shadow-lg hover:scale-105 active:scale-95">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            </svg>
                            <span>Open Theater Mode</span>
                        </button>
                    </div>

                </div>

            </div>
        </div>

        {{-- 🎞️ 2. Sub-Videos & Reels Carousel Bar --}}
        <div>
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-sm font-black uppercase tracking-wider text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                    <span>More Videos & Official Broadcasts</span>
                </h3>
                <span class="text-xs text-amber-300 font-bold">Click any reel to play</span>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                <template x-for="item in videos" :key="item.id">
                    <div @click="selectVideo(item)"
                         :class="activeVideo.id === item.id ? 'ring-4 ring-amber-400 scale-[1.02]' : 'hover:scale-[1.02]'"
                         style="background-color: rgba(15, 30, 60, 0.9); border-color: rgba(255, 255, 255, 0.15);"
                         class="rounded-2xl overflow-hidden cursor-pointer backdrop-blur-md border transition-all duration-300 group flex flex-col justify-between shadow-xl">
                        
                        {{-- Thumbnail Container with Play Glow --}}
                        <div class="relative aspect-video overflow-hidden">
                            <img :src="item.thumbnail" 
                                 :alt="item.title"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-slate-950/40 group-hover:bg-slate-950/20 transition-colors flex items-center justify-center">
                                <div class="w-10 h-10 rounded-full bg-amber-400 text-slate-950 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="absolute bottom-2 right-2 bg-black/85 text-white text-[10px] font-bold px-2 py-0.5 rounded" x-text="item.duration"></span>
                        </div>

                        {{-- Card Meta --}}
                        <div class="p-3.5 flex flex-col justify-between flex-1">
                            <span class="text-[10px] font-black text-amber-300 uppercase tracking-wider mb-1" x-text="item.category"></span>
                            <h4 class="text-xs font-bold text-white line-clamp-2 leading-snug group-hover:text-amber-300 transition-colors" x-text="item.title"></h4>
                            <div class="flex items-center justify-between text-[10px] text-slate-300 pt-2 mt-2 border-t border-white/10 font-medium">
                                <span x-text="item.date"></span>
                                <span class="font-bold text-amber-200" x-text="item.views"></span>
                            </div>
                        </div>

                    </div>
                </template>
            </div>
        </div>

    </div>

    {{-- 📺 3. Theater Mode Video Modal --}}
    <div x-show="modalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="closeModal()"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-slate-950/90 backdrop-blur-md"
         x-cloak>
        
        <div @click.away="closeModal()" 
             class="relative w-full max-w-4xl bg-slate-900 rounded-3xl overflow-hidden border border-white/20 shadow-2xl">
            
            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-4 sm:p-5 border-b border-slate-800 bg-slate-950 text-white">
                <div class="max-w-xl">
                    <span class="text-[10px] font-bold text-amber-400 uppercase tracking-wider block" x-text="activeVideo.category"></span>
                    <h4 class="text-sm sm:text-base font-black uppercase text-white truncate" x-text="activeVideo.title"></h4>
                </div>
                <button type="button" 
                        @click="closeModal()" 
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition">
                    &times;
                </button>
            </div>

            {{-- Big Player Container --}}
            <div class="relative aspect-video bg-black">
                <template x-if="modalOpen">
                    <iframe :src="activeVideo.fb_reel_url || activeVideo.embed_url" 
                            class="w-full h-full border-0" 
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </template>
            </div>
        </div>
    </div>

</section>

