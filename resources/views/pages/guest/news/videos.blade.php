<x-guest-layout>
    {{-- 🚀 Dedicated Hero Header Banner for Videos & Reels --}}
    <x-hero-banner
        badge-text="Official Public Communications & Media Streams"
        title="Videos & Video Reels"
        description="Official high-definition documentary broadcasts, event highlights, promotional features, and vertical video reels from the Provincial Capitol of Camarines Sur."
    />

    {{-- 🧭 Sub-Navigation / Media Tabs --}}
    <div class="sticky top-[56px] sm:top-[64px] z-30 bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between overflow-x-auto no-scrollbar py-3 gap-3">
                
                {{-- Media Tabs --}}
                <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                    <a href="{{ route('guest.videos.index', ['tab' => 'all', 'q' => request('q')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $mediaTab === 'all' ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>🎬</span>
                        <span>All Media ({{ count($videos) + count($reels) }})</span>
                    </a>

                    <a href="{{ route('guest.videos.index', ['tab' => 'videos', 'q' => request('q')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $mediaTab === 'videos' ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>🎥</span>
                        <span>Widescreen Videos ({{ count($videos) }})</span>
                    </a>

                    <a href="{{ route('guest.videos.index', ['tab' => 'reels', 'q' => request('q')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $mediaTab === 'reels' ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>📱</span>
                        <span>Short Reels ({{ count($reels) }})</span>
                    </a>
                </div>

                {{-- Fast Search Form --}}
                <form action="{{ route('guest.videos.index') }}" method="GET" class="relative hidden sm:block w-72">
                    <input type="hidden" name="tab" value="{{ $mediaTab }}">
                    <input type="text"
                           name="q"
                           value="{{ $q }}"
                           placeholder="Search videos & reels..."
                           class="w-full pl-9 pr-4 py-1.5 text-xs rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-100 border-none focus:ring-2 focus:ring-[#104695]">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>

            </div>
        </div>
    </div>

    <main class="min-h-screen bg-slate-50 dark:bg-slate-950 py-10 sm:py-14 transition-colors duration-300"
          x-data="{
              selectedVideo: {{ !empty($videos) ? json_encode($videos[0]) : (!empty($reels) ? json_encode($reels[0]) : '{}') }},
              modalActive: false,
              openModal(vid) {
                  this.selectedVideo = vid;
                  this.modalActive = true;
              },
              closeModal() {
                  this.modalActive = false;
              }
          }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            {{-- 🎥 1. Featured Spotlight Player --}}
            @if(!empty($videos))
                <section class="relative py-10 px-6 sm:px-10 bg-gradient-to-br from-[#0c234a] via-[#114696] to-[#0a1b38] text-white rounded-[32px] sm:rounded-[40px] shadow-2xl border border-blue-800/80 overflow-hidden">
                    <div class="relative z-10 space-y-8">
                        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-white/15 pb-6">
                            <div>
                                <span class="inline-flex items-center gap-2 text-amber-300 font-extrabold uppercase tracking-[3px] text-xs mb-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-ping"></span>
                                    Spotlight Broadcast Player
                                </span>
                                <h2 class="text-2xl sm:text-4xl font-black uppercase text-white tracking-tight" x-text="selectedVideo.title">
                                    {{ $videos[0]['title'] }}
                                </h2>
                            </div>
                            <span class="text-xs text-blue-200">Interactive Streaming Player</span>
                        </div>

                        {{-- Main Player & Meta --}}
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white/10 dark:bg-black/40 backdrop-blur-xl p-4 sm:p-8 rounded-3xl border border-white/15">
                            <div class="lg:col-span-8">
                                <div class="relative aspect-video rounded-2xl overflow-hidden bg-black shadow-2xl border border-white/10">
                                    <iframe :src="selectedVideo.embed_url" 
                                            class="w-full h-full border-0" 
                                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            </div>

                            <div class="lg:col-span-4 flex flex-col justify-between space-y-4">
                                <div>
                                    <span class="inline-block bg-red-600 text-white text-[10px] font-black uppercase px-3 py-1 rounded-full shadow mb-3"
                                          x-text="selectedVideo.badge">
                                    </span>
                                    <span class="block text-xs font-bold text-amber-300 uppercase tracking-wider mb-1" x-text="selectedVideo.category"></span>
                                    <h3 class="text-xl sm:text-2xl font-black uppercase text-white leading-tight mb-3" x-text="selectedVideo.title"></h3>
                                    <div class="flex items-center gap-3 text-xs text-blue-100/80 mb-4">
                                        <span x-text="selectedVideo.views + ' views'"></span>
                                        <span>&bull;</span>
                                        <span x-text="selectedVideo.duration"></span>
                                        <span>&bull;</span>
                                        <span x-text="selectedVideo.channel"></span>
                                    </div>
                                </div>

                                <button type="button"
                                        @click="openModal(selectedVideo)"
                                        class="inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider px-6 py-3 rounded-xl transition shadow-lg">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Watch in Theater Mode</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            {{-- 🎥 2. Widescreen 16:9 Cinema Videos Section --}}
            @if($mediaTab === 'all' || $mediaTab === 'videos')
                <section class="space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-4">
                        <div>
                            <h3 class="text-xl font-extrabold uppercase text-slate-900 dark:text-white flex items-center gap-2">
                                <span>🎥</span>
                                <span>Widescreen Videos & Documentaries</span>
                            </h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Full-length features, events coverage, and provincial updates</p>
                        </div>
                        <span class="text-xs font-bold text-[#104695] dark:text-blue-400">{{ count($videos) }} Videos</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($videos as $video)
                            <article class="bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 dark:border-slate-800 transition-all duration-300 flex flex-col justify-between group">
                                <div class="relative aspect-video overflow-hidden bg-black cursor-pointer" @click="selectedVideo = {{ json_encode($video) }}">
                                    <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition-colors">
                                        <div class="w-12 h-12 rounded-full bg-amber-400 text-slate-950 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                            <svg class="w-5 h-5 ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="absolute bottom-2 right-2 bg-black/80 text-[10px] font-bold px-2 py-0.5 rounded-md text-white font-mono">
                                        {{ $video['duration'] }}
                                    </span>
                                    <span class="absolute top-2 left-2 bg-[#104695]/90 text-white text-[9px] font-black uppercase px-2.5 py-1 rounded-md backdrop-blur-sm">
                                        {{ $video['badge'] }}
                                    </span>
                                </div>

                                <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                                    <div>
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-500 dark:text-amber-400">{{ $video['category'] }}</span>
                                        <h4 class="text-sm font-black text-slate-900 dark:text-white uppercase leading-snug line-clamp-2 mt-1 group-hover:text-[#104695] transition-colors">
                                            {{ $video['title'] }}
                                        </h4>
                                    </div>
                                    <div class="pt-3 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-[11px] text-slate-400">
                                        <span>{{ $video['channel'] }}</span>
                                        <span>{{ $video['views'] }} views</span>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full py-12 text-center text-slate-400 bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800">
                                No widescreen videos found matching your query.
                            </div>
                        @endforelse
                    </div>
                </section>
            @endif

            {{-- 📱 3. Short-Form Video Reels (9:16 Vertical Display) --}}
            @if($mediaTab === 'all' || $mediaTab === 'reels')
                <section class="space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-4">
                        <div>
                            <h3 class="text-xl font-extrabold uppercase text-slate-900 dark:text-white flex items-center gap-2">
                                <span>📱</span>
                                <span>Short-Form Video Reels</span>
                            </h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Quick bite-sized mobile updates, culinary shorts, and viral travel snippets</p>
                        </div>
                        <span class="text-xs font-bold text-amber-500">{{ count($reels) }} Reels</span>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        @forelse($reels as $reel)
                            <article class="bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 dark:border-slate-800 transition-all duration-300 flex flex-col justify-between group">
                                <div class="relative aspect-[9/16] overflow-hidden bg-black cursor-pointer" @click="selectedVideo = {{ json_encode($reel) }}; openModal(selectedVideo)">
                                    <img src="{{ $reel['thumbnail'] }}" alt="{{ $reel['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-black/20 flex flex-col justify-between p-3.5">
                                        <div class="flex justify-between items-center">
                                            <span class="bg-red-600 text-white text-[9px] font-black uppercase px-2 py-0.5 rounded shadow">
                                                Reel
                                            </span>
                                            <span class="bg-black/60 text-white text-[9px] font-bold px-1.5 py-0.5 rounded font-mono">
                                                {{ $reel['duration'] }}
                                            </span>
                                        </div>

                                        <div>
                                            <div class="w-10 h-10 rounded-full bg-amber-400 text-slate-950 flex items-center justify-center shadow-lg mx-auto my-auto group-hover:scale-110 transition-transform">
                                                <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <h5 class="text-xs font-bold text-white line-clamp-2 leading-snug mt-3">
                                                {{ $reel['title'] }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3.5 bg-slate-50 dark:bg-slate-900/80 flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                    <span>❤️ {{ $reel['likes'] }}</span>
                                    <span>👁️ {{ $reel['views'] }}</span>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full py-12 text-center text-slate-400 bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800">
                                No video reels found matching your query.
                            </div>
                        @endforelse
                    </div>
                </section>
            @endif

        </div>

        {{-- 🎭 Fullscreen Theater Modal --}}
        <div x-show="modalActive" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @keydown.escape.window="closeModal()"
             class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md"
             x-cloak>
            
            <div @click.away="closeModal()" 
                 class="relative w-full max-w-5xl bg-slate-900 rounded-3xl overflow-hidden border border-white/20 shadow-2xl">
                
                <div class="flex items-center justify-between p-4 border-b border-slate-800 bg-slate-950 text-white">
                    <h4 class="text-sm sm:text-base font-black uppercase truncate" x-text="selectedVideo.title"></h4>
                    <button type="button" @click="closeModal()" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition text-lg">
                        &times;
                    </button>
                </div>

                <div class="relative aspect-video bg-black">
                    <template x-if="modalActive">
                        <iframe :src="selectedVideo.embed_url" 
                                class="w-full h-full border-0" 
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </template>
                </div>
            </div>
        </div>

    </main>
</x-guest-layout>
