@php
    $sdgs = \App\Models\Sdg::orderBy('number')->get();
@endphp

<section class="py-12 sm:py-16 bg-slate-900 text-white relative overflow-hidden border-b border-slate-800"
         x-data="{
            selectedSdg: {{ json_encode($sdgs->first()) }},
            sdgsList: {{ json_encode($sdgs) }},
            showModal: false,
            zoomScale: 1,
            selectSdg(sdg) {
                this.selectedSdg = sdg;
            },
            openModal() {
                this.zoomScale = 1;
                this.showModal = true;
            },
            zoomIn() {
                if (this.zoomScale < 2.5) this.zoomScale += 0.25;
            },
            zoomOut() {
                if (this.zoomScale > 0.75) this.zoomScale -= 0.25;
            },
            resetZoom() {
                this.zoomScale = 1;
            }
         }">

    {{-- Ambient Background Glow --}}
    <div class="absolute -top-32 -right-32 w-80 h-80 sm:w-96 sm:h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- 📌 Section Header + Official UN Branding --}}
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-8 sm:mb-10 pb-6 border-b border-slate-800">
            
            <div class="max-w-3xl">
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-amber-300">
                        United Nations 2030 Global Agenda
                    </span>
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black uppercase tracking-tight text-white flex items-center gap-3">
                    Sustainable Development Goals
                </h2>

                <p class="mt-3 text-slate-300 text-xs sm:text-sm leading-relaxed">
                    Bilang kabahagi ang Pilipinas sa United Nations, ang **Pamahalaang Panlalawigan ng Camarines Sur** ay nakatuon sa pagpapatupad ng **17 Sustainable Development Goals**. Ang ating mga pampublikong proyekto, ordinansa, at pondo ay idinisenyo upang mag-ambag sa pagtatapos ng kahirapan, pangangalaga sa kalikasan, at paghahatid ng inklusibong kaunlaran.
                </p>
            </div>

            {{-- Official Logos --}}
            <div class="flex items-center justify-center sm:justify-start gap-4 flex-shrink-0 bg-slate-800/60 p-3 rounded-2xl border border-slate-700/80">
                <img src="{{ asset('img/sdg/icon.png') }}" 
                     alt="Official UN SDG Logo" 
                     class="h-10 sm:h-14 w-auto object-contain">
                     
                <div class="h-8 sm:h-10 w-px bg-slate-700"></div>

                <img src="{{ asset('img/sdg/banner.png') }}" 
                     alt="Official UN SDG Landscape Banner" 
                     class="h-8 sm:h-12 w-auto object-contain">
            </div>

        </div>

        {{-- 🏛️ Main Interactive Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">

            {{-- 🌟 LEFT SIDE: Active Goal Detail Card --}}
            <div class="lg:col-span-5 bg-slate-800/90 backdrop-blur-md rounded-2xl p-5 sm:p-7 border border-slate-700 shadow-2xl flex flex-col justify-between relative overflow-hidden transition-all duration-300">
                
                {{-- Dynamic Color Top Bar --}}
                <div class="absolute top-0 left-0 right-0 h-2.5 transition-colors duration-500"
                     :style="'background-color: ' + selectedSdg.color_hex"></div>

                <div class="space-y-4">
                    {{-- Active Goal Header --}}
                    <div class="flex items-center justify-between gap-3 pt-2">
                        <span class="text-xs font-black uppercase tracking-widest text-slate-400">
                            Active UN Target
                        </span>
                        
                        {{-- Official Landscape Style Icon --}}
                        <div class="h-10 sm:h-12 w-auto overflow-hidden rounded-lg shadow-md border border-white/10 flex-shrink-0">
                            <img :src="'{{ asset('img/sdg/icons/colored/landscape') }}/' + selectedSdg.number + '.png'" 
                                 :alt="selectedSdg.name"
                                 class="h-full w-auto object-contain">
                        </div>
                    </div>

                    {{-- Goal Title --}}
                    <h3 class="text-xl sm:text-2xl font-black uppercase tracking-tight text-white leading-snug"
                        x-text="selectedSdg.name">
                    </h3>

                    {{-- 🌐 UN Global Objective (`un_meaning`) --}}
                    <div class="p-3.5 sm:p-4 bg-slate-900/90 rounded-xl border border-slate-700/80 space-y-1">
                        <span class="text-[11px] font-black uppercase text-amber-400 tracking-wider flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            UN Global Objective:
                        </span>
                        <p class="text-xs sm:text-sm text-slate-200 leading-relaxed italic"
                           x-text="selectedSdg.un_meaning">
                        </p>
                    </div>

                    {{-- 🏛️ Provincial Commitment (`camsur_commitment`) --}}
                    <div class="p-3.5 sm:p-4 bg-blue-950/70 rounded-xl border border-blue-900/80 space-y-1">
                        <span class="text-[11px] font-black uppercase text-blue-300 tracking-wider flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4"></path></svg>
                            Provincial Commitment (CamSur):
                        </span>
                        <p class="text-xs sm:text-sm text-blue-100 leading-relaxed font-semibold"
                           x-text="selectedSdg.camsur_commitment">
                        </p>
                    </div>

                    {{-- 🏷️ Key Targets Badges (`key_targets`) --}}
                    <template x-if="selectedSdg.key_targets && selectedSdg.key_targets.length > 0">
                        <div class="pt-1">
                            <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider block mb-1.5">
                                Priority Focus Targets:
                            </span>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="target in selectedSdg.key_targets" :key="target">
                                    <span class="bg-amber-400/10 text-amber-300 border border-amber-400/30 text-[10px] font-bold px-2 py-0.5 rounded-md" 
                                          x-text="target"></span>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- Action Bar: Open Zoomable Modal --}}
                <div class="pt-5 mt-5 border-t border-slate-700/80 space-y-3">
                    <button @click="openModal()" 
                            type="button"
                            class="w-full py-3 px-4 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs sm:text-sm uppercase tracking-wider rounded-xl shadow-lg transition duration-200 flex items-center justify-center gap-2 active:scale-98">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                        </svg>
                        <span>View High-Res Infographic & Details</span>
                    </button>

                    <div class="flex items-center justify-between text-xs">
                        <span class="text-slate-400 font-medium">Explore Related Bulletins</span>
                        <a href="{{ route('press-releases.index') }}" 
                           class="font-bold text-amber-300 hover:text-white uppercase tracking-wider transition flex items-center gap-1">
                            <span>View All</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            {{-- 🎛️ RIGHT SIDE: 17 Responsive Tile Selectors --}}
            <div class="lg:col-span-7 flex flex-col justify-between space-y-4">
                
                <div class="flex items-center justify-between">
                    <span class="text-xs font-black uppercase tracking-widest text-slate-400">
                        Select UN Goal (1 to 17)
                    </span>
                    <span class="text-[10px] text-amber-300 font-bold bg-amber-400/10 px-2.5 py-1 rounded border border-amber-400/20">
                        Interactive Selectors
                    </span>
                </div>

                {{-- 17 Responsive Tile Grid --}}
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-2.5 sm:gap-3">
                    <template x-for="sdg in sdgsList" :key="sdg.id">
                        <button @click="selectSdg(sdg)"
                                type="button"
                                :class="selectedSdg.id === sdg.id ? 'ring-4 ring-amber-400 scale-105 z-10 shadow-2xl' : 'opacity-85 hover:opacity-100 hover:scale-102'"
                                class="rounded-xl overflow-hidden shadow-md transition-all duration-300 group focus:outline-none bg-slate-800 border border-slate-700">
                            
                            <img :src="'{{ asset('img/sdg/icons/colored') }}/' + sdg.number + '.png'" 
                                 :alt="sdg.name"
                                 class="w-full h-auto object-cover">
                        </button>
                    </template>
                </div>

                <p class="text-[11px] text-slate-400 italic">
                    💡 Pindutin ang alinman sa 17 opisyal na Sustainable Development Goals upang alamin ang mga programa ng lalawigan na tumutugon dito.
                </p>

            </div>

        </div>

    </div>

    {{-- 🖼️ FULLY RESPONSIVE HIGH-RES INFOGRAPHIC MODAL (SENIOR ACCESSIBLE) --}}
    <div x-show="showModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/90 backdrop-blur-lg flex items-center justify-center p-2 sm:p-4 lg:p-6"
         style="display: none;"
         @keydown.escape.window="showModal = false">

        <div class="bg-slate-900 border border-slate-700 rounded-2xl sm:rounded-3xl shadow-2xl max-w-5xl w-full overflow-hidden relative text-white flex flex-col max-h-[95vh] my-auto">

            {{-- Modal Header --}}
            <div class="p-3.5 sm:p-5 border-b border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 bg-slate-900"
                 :style="'border-top: 6px solid ' + selectedSdg.color_hex">
                
                <div class="flex items-center gap-3">
                    <div class="h-10 sm:h-12 w-auto overflow-hidden rounded-lg flex-shrink-0">
                        <img :src="'{{ asset('img/sdg/icons/colored/landscape') }}/' + selectedSdg.number + '.png'" 
                             :alt="selectedSdg.name"
                             class="h-full w-auto object-contain">
                    </div>
                    <div>
                        <span class="text-[10px] sm:text-xs font-black uppercase text-amber-400 tracking-wider block" x-text="selectedSdg.code"></span>
                        <h4 class="text-sm sm:text-lg font-black uppercase tracking-tight text-white" x-text="selectedSdg.name"></h4>
                    </div>
                </div>

                {{-- ZOOM CONTROLS --}}
                <div class="flex items-center gap-1.5 sm:gap-2 bg-slate-800/90 p-1.5 rounded-xl border border-slate-700 w-full sm:w-auto justify-between sm:justify-start">
                    <div class="flex items-center gap-1">
                        <button @click="zoomOut()" 
                                type="button"
                                title="Zoom Out (-)"
                                class="px-2.5 py-1 bg-slate-700 hover:bg-slate-600 rounded-lg text-xs font-bold text-white transition">
                            🔍-
                        </button>
                        
                        <span class="text-xs font-mono font-bold text-amber-300 px-1.5" x-text="Math.round(zoomScale * 100) + '%'"></span>

                        <button @click="zoomIn()" 
                                type="button"
                                title="Zoom In (+)"
                                class="px-2.5 py-1 bg-slate-700 hover:bg-slate-600 rounded-lg text-xs font-bold text-white transition">
                            🔍+
                        </button>

                        <button @click="resetZoom()" 
                                type="button"
                                title="Reset Zoom"
                                class="px-2 py-1 bg-slate-700 hover:bg-slate-600 rounded-lg text-[11px] font-bold text-slate-300 transition">
                            Reset
                        </button>
                    </div>

                    <a :href="'{{ asset('img/sdg/infographics/infographic_') }}' + selectedSdg.number + '.png'" 
                       target="_blank" 
                       title="Open High-Res File"
                       class="px-2.5 py-1 bg-amber-400 hover:bg-amber-300 text-slate-950 font-extrabold rounded-lg text-xs transition">
                        Full File ↗
                    </a>

                    <button @click="showModal = false" 
                            type="button"
                            class="p-1.5 bg-slate-700 hover:bg-amber-400 hover:text-slate-950 text-white rounded-lg transition">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

            </div>

            {{-- Modal Content (Seeder Data + Zoomable Image Showcase) --}}
            <div class="flex-grow overflow-y-auto p-4 sm:p-6 space-y-5 bg-slate-950">

                {{-- Full Seeder Info Section --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                    {{-- UN Meaning --}}
                    <div class="p-3.5 bg-slate-900 rounded-xl border border-slate-800">
                        <span class="text-[10px] font-black uppercase text-amber-400 tracking-wider block mb-1">
                            🌐 UN Global Objective (`un_meaning`):
                        </span>
                        <p class="text-xs sm:text-sm text-slate-200 leading-relaxed italic" x-text="selectedSdg.un_meaning"></p>
                    </div>

                    {{-- CamSur Local Commitment --}}
                    <div class="p-3.5 bg-blue-950/80 rounded-xl border border-blue-900/60">
                        <span class="text-[10px] font-black uppercase text-blue-300 tracking-wider block mb-1">
                            🏛️ Provincial Commitment (`camsur_commitment`):
                        </span>
                        <p class="text-xs sm:text-sm text-blue-100 leading-relaxed font-semibold" x-text="selectedSdg.camsur_commitment"></p>
                    </div>
                </div>

                {{-- Zoomable Responsive Image Container --}}
                <div class="border border-slate-800 rounded-xl bg-slate-900/50 p-2 sm:p-4 text-center overflow-auto min-h-[280px] flex items-center justify-center">
                    <div class="transition-transform duration-300 ease-out max-w-full inline-block"
                         :style="'transform: scale(' + zoomScale + '); transform-origin: center top;'">
                        
                        <img :src="'{{ asset('img/sdg/infographics/infographic_') }}' + selectedSdg.number + '.png'" 
                             :alt="selectedSdg.name + ' Infographic'" 
                             class="max-w-full h-auto object-contain rounded-lg shadow-xl mx-auto"
                             x-on:error="$event.target.src='{{ asset('img/sdg/infographics/infographic_1.png') }}'">
                    </div>
                </div>

            </div>

            {{-- Modal Footer --}}
            <div class="p-3.5 sm:p-4 border-t border-slate-800 bg-slate-900 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
                <span class="text-slate-400 text-[11px] text-center sm:text-left">
                    💡 <strong class="text-amber-300">Accessibility Note:</strong> Gamitin ang Zoom buttons sa itaas kung kailangang palakihin ang teksto ng infographic.
                </span>

                <button @click="showModal = false" 
                        type="button" 
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-bold uppercase tracking-wider rounded-xl transition w-full sm:w-auto">
                    Close Viewer
                </button>
            </div>

        </div>

    </div>

</section>