{{-- 🌿 Official Welcome to Camarines Sur Section (Matched with camsur.com) --}}
<div class="welcome-section py-12 relative"
     x-data="{
         activeCam: 'video-embed-1',
         camLabel: 'CAM 01',
         camTitle: 'Adventure Reel',
         dropdownOpen: false,
         channels: [
             { id: 'video-embed-1', cam: 'CAM 01', label: 'CAM 01 - Reel 1', title: 'Adventure Reel', src: 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0' },
             { id: 'video-embed-2', cam: 'CAM 02', label: 'CAM 02 - Visit CamSur', title: 'Visit CamSur', src: 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0' },
             { id: 'video-embed-3', cam: 'CAM 03', label: 'CAM 03 - Reel 2', title: 'Eco-Tourism Reel', src: 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0' }
         ],
         switchCam(ch) {
             this.activeCam = ch.id;
             this.camLabel = ch.cam;
             this.camTitle = ch.title;
             this.dropdownOpen = false;
         }
     }">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            {{-- Left Column: Welcome Content --}}
            <div class="lg:col-span-7 flex flex-col gap-4">
                <div class="mb-1 text-center lg:text-left overflow-visible p-2">
                    <img src="{{ asset('/img/home/Welcome CamSur.png') }}"
                         alt="Welcome Camarines Sur"
                         class="h-auto max-h-[105px] object-contain w-auto inline-block drop-shadow-md hover:scale-[1.03] transition-transform duration-300 origin-center lg:origin-left"
                         onerror="this.onerror=null; this.src='https://camsur.com/img/home/Welcome%20CamSur.png';">
                </div>

                <div class="space-y-4 text-justify">
                    {{-- Welcome Lead Box --}}
                    <div class="bg-white border-l-4 border-[#0056b3] rounded-r-xl p-4 sm:p-5 shadow-sm text-slate-800 text-sm sm:text-base leading-relaxed">
                        Ride the waves and chase endless adrenaline in the Philippines' <strong>Wakeboarding Capital</strong>. Be captivated by the province's natural beauty, local customs, and rich traditions. Camarines Sur is home to the majestic Peñafrancia Festival. Our people, the Bicolanos, are known for their warm hospitality and vibrant culture.
                    </div>

                    <p class="text-sm sm:text-base leading-relaxed text-slate-600 m-0">
                        At the heart of the Bicol region, Camarines Sur offers the perfect blend of faith, adventure, and breathtaking landscapes. Explore the world-famous <strong>CWC (Camarines Sur Watersports Complex)</strong> in Pili, or discover the pristine, powdery white sand beaches of the <strong>Caramoan Islands</strong>.
                    </p>

                    <p class="text-sm sm:text-base leading-relaxed text-slate-600 m-0">
                        Come explore! Hike the lush trails of Mount Isarog, relax by the serene waters of Lake Bato, and immerse yourself in our rich cultural heritage. From adrenaline-pumping thrills to tranquil escapes, Camarines Sur awaits your journey!
                    </p>
                </div>
            </div>

            {{-- Right Column: Video Showcase Card (Cinema Camera Frame from camsur.com) --}}
            <div class="lg:col-span-5">
                <div class="relative bg-[#090e17] rounded-2xl border-2 border-slate-800 shadow-2xl overflow-hidden">
                    
                    {{-- Video Camera Viewfinder Top Bar --}}
                    <div class="flex items-center justify-between px-4 py-2.5 bg-gradient-to-b from-gray-900 to-[#0b1120] border-b border-white/10 select-none">
                        <div class="inline-flex items-center gap-2 font-mono text-xs font-black tracking-wider text-rose-500 uppercase">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500 shadow-[0_0_10px_#ef4444] animate-pulse"></span>
                            <span>REC</span>
                            <span class="text-slate-500 text-[10px]">[4K 60FPS]</span>
                        </div>

                        <div class="flex items-center gap-2 font-mono text-xs text-slate-400 font-bold">
                            {{-- CAM Selector Dropdown --}}
                            <div class="relative">
                                <button type="button" 
                                        @click="dropdownOpen = !dropdownOpen"
                                        @click.outside="dropdownOpen = false"
                                        class="inline-flex items-center gap-1.5 bg-sky-400/15 hover:bg-sky-400/25 text-sky-400 border border-sky-400/40 hover:border-sky-400 px-2.5 py-1 rounded text-xs font-mono font-extrabold tracking-wider transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <span x-text="camLabel">CAM 01</span>
                                    <svg class="w-3 h-3 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div x-show="dropdownOpen"
                                     x-transition
                                     x-cloak
                                     class="absolute right-0 top-full mt-1.5 bg-[#0b1320] border border-sky-400/40 rounded-lg shadow-2xl min-w-[200px] py-1.5 z-50">
                                    <template x-for="ch in channels" :key="ch.id">
                                        <button type="button" 
                                                @click="switchCam(ch)"
                                                :class="activeCam === ch.id ? 'bg-sky-400/20 text-sky-400' : 'text-slate-400 hover:bg-sky-400/10 hover:text-sky-300'"
                                                class="w-full px-3 py-2 text-left text-xs font-semibold flex items-center gap-2 transition">
                                            <svg class="w-3.5 h-3.5 text-sky-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span x-text="ch.label"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <span class="hidden sm:inline-flex items-center gap-1 bg-white/5 border border-white/10 px-2 py-0.5 rounded text-[11px] text-amber-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> AUTO FOCUS
                            </span>
                        </div>
                    </div>

                    {{-- Video Viewport Container --}}
                    <div class="relative bg-black h-[315px] sm:h-[315px] w-full overflow-hidden">
                        {{-- Viewfinder Reticle Corners --}}
                        <div class="absolute top-2 left-2 w-4 h-4 border-t-2 border-l-2 border-white/40 pointer-events-none z-10"></div>
                        <div class="absolute top-2 right-2 w-4 h-4 border-t-2 border-r-2 border-white/40 pointer-events-none z-10"></div>
                        <div class="absolute bottom-2 left-2 w-4 h-4 border-b-2 border-l-2 border-white/40 pointer-events-none z-10"></div>
                        <div class="absolute bottom-2 right-2 w-4 h-4 border-b-2 border-r-2 border-white/40 pointer-events-none z-10"></div>

                        {{-- Responsive Video 1: Adventure Reel (Facebook Reel 1532076858025327) --}}
                        <div x-show="activeCam === 'video-embed-1'" class="w-full h-full">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0" 
                                    class="w-full h-full border-0" 
                                    scrolling="no" 
                                    frameborder="0" 
                                    allowfullscreen="true" 
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>

                        {{-- Responsive Video 2: Visit CamSur (Facebook Video 1692915404860146) --}}
                        <div x-show="activeCam === 'video-embed-2'" class="w-full h-full" x-cloak>
                            <iframe src="https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0" 
                                    class="w-full h-full border-0" 
                                    scrolling="no" 
                                    frameborder="0" 
                                    allowfullscreen="true" 
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>

                        {{-- Responsive Video 3: Eco-Tourism Reel (Facebook Reel 1101867399040724) --}}
                        <div x-show="activeCam === 'video-embed-3'" class="w-full h-full" x-cloak>
                            <iframe src="https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0" 
                                    class="w-full h-full border-0" 
                                    scrolling="no" 
                                    frameborder="0" 
                                    allowfullscreen="true" 
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>

                    {{-- Video Footer Bar --}}
                    <div class="px-4 py-2 bg-gradient-to-b from-[#0b1120] to-[#070c16] border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                        <div class="flex items-center gap-2 font-mono text-[11px] font-semibold text-slate-300">
                            <svg class="w-3.5 h-3.5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                            </svg>
                            <span x-text="'LIVE FEED / ' + camTitle.toUpperCase()">LIVE FEED / CAMSUR TOURISM</span>
                        </div>

                        <a href="https://www.facebook.com/VisitCamsur" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-2 px-2.5 py-1 bg-white/5 hover:bg-sky-400/20 text-white hover:text-sky-300 border border-white/10 hover:border-sky-400/40 rounded text-xs font-semibold transition no-underline"
                           title="Visit CamSur Official Facebook Page">
                            <img src="https://camsur.com/img/icons/tourism/logo/visit-camsur-default.png" 
                                 alt="Visit CamSur" 
                                 class="h-4 w-auto object-contain brightness-0 invert"
                                 onerror="this.style.display='none'">
                            <span>Visit CamSur</span>
                            <svg class="w-3 h-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
