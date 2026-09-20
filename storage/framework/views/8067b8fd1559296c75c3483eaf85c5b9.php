<?php
    $sdgs = \App\Models\Sdg::orderBy('number')->get();
?>

<section class="py-12 sm:py-16 bg-slate-900 text-white relative overflow-hidden border-b border-slate-800"
         x-data="{
            selectedSdg: <?php echo e(json_encode($sdgs->first())); ?>,
            sdgsList: <?php echo e(json_encode($sdgs)); ?>,
            showModal: false,
            zoomScale: 1,
            activeModalTab: 'achievement',
            selectSdg(sdg) {
                this.selectedSdg = sdg;
            },
            openModal(defaultTab = 'achievement') {
                this.zoomScale = 1;
                this.activeModalTab = defaultTab;
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

    
    <div class="absolute -top-32 -right-32 w-80 h-80 sm:w-96 sm:h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        
        <div class="mb-8 sm:mb-10 pb-6 border-b border-slate-800 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="max-w-4xl">
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
                    As part of the Philippines' commitment to the United Nations, the <strong class="text-white font-bold">Provincial Government of Camarines Sur</strong> actively implements the <strong class="text-white font-bold">17 Sustainable Development Goals</strong>. Our public projects, ordinances, and investments are geared towards ending poverty, protecting the environment, and fostering inclusive, sustainable progress.
                </p>
            </div>

            
            <div class="flex items-center gap-4 flex-shrink-0 bg-slate-800/80 p-3 rounded-2xl border border-slate-700 shadow-lg self-start md:self-center">
                <img src="<?php echo e(asset('img/home/sdg/banner.png')); ?>" 
                     alt="Official UN Sustainable Development Goals Logo" 
                     class="h-10 sm:h-12 w-auto object-contain">
            </div>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">

            
            <div class="lg:col-span-5 bg-slate-800/90 backdrop-blur-md rounded-2xl p-5 sm:p-7 border border-slate-700 shadow-2xl flex flex-col justify-between relative overflow-hidden transition-all duration-300">
                
                
                <div class="absolute top-0 left-0 right-0 h-2.5 transition-colors duration-500"
                     :style="'background-color: ' + selectedSdg.color_hex"></div>

                <div class="space-y-4">
                    
                    <div class="pt-2 flex items-center gap-3.5">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl overflow-hidden shadow-lg border border-white/10 flex-shrink-0 bg-slate-900">
                            <img :src="'<?php echo e(asset('img/sdg/icons/colored')); ?>/' + selectedSdg.number + '.png'" 
                                 :alt="selectedSdg.name"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-black uppercase text-amber-400 tracking-wider block"
                                  x-text="selectedSdg.code"></span>
                            <h3 class="text-base sm:text-xl font-black uppercase tracking-tight text-white leading-snug"
                                x-text="selectedSdg.name"></h3>
                        </div>
                    </div>

                    
                    <div class="p-3.5 sm:p-4 bg-slate-900/90 rounded-xl border border-slate-700/80 space-y-1">
                        <span class="text-[11px] font-black uppercase text-amber-400 tracking-wider flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            UN Global Objective:
                        </span>
                        <p class="text-xs sm:text-sm text-slate-200 leading-relaxed italic"
                           x-text="selectedSdg.un_meaning">
                        </p>
                    </div>

                    
                    <div class="p-3.5 sm:p-4 bg-blue-950/70 rounded-xl border border-blue-900/80 space-y-1">
                        <span class="text-[11px] font-black uppercase text-blue-300 tracking-wider flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4"></path></svg>
                            Provincial Commitment (CamSur):
                        </span>
                        <p class="text-xs sm:text-sm text-blue-100 leading-relaxed font-semibold"
                           x-text="selectedSdg.camsur_commitment">
                        </p>
                    </div>

                    
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

                
                <div class="pt-5 mt-5 border-t border-slate-700/80 space-y-3">
                    <button @click="openModal('achievement')" 
                            type="button"
                            class="w-full py-3 px-4 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs sm:text-sm uppercase tracking-wider rounded-xl shadow-lg transition duration-200 flex items-center justify-center gap-2 active:scale-98">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>View SDG Achievement & Infographics</span>
                    </button>

                    <div class="flex items-center justify-between text-xs">
                        <span class="text-slate-400 font-medium">Explore Related Bulletins</span>
                        <a href="<?php echo e(route('press-releases.index')); ?>" 
                           class="font-bold text-amber-300 hover:text-white uppercase tracking-wider transition flex items-center gap-1">
                            <span>View All</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            
            <div class="lg:col-span-7 flex flex-col justify-between space-y-4">
                
                <div class="flex items-center justify-between">
                    <span class="text-xs font-black uppercase tracking-widest text-slate-400">
                        Select UN Goal (1 to 17)
                    </span>
                    <span class="text-[10px] text-amber-300 font-bold bg-amber-400/10 px-2.5 py-1 rounded border border-amber-400/20">
                        Interactive Selectors
                    </span>
                </div>

                
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-2.5 sm:gap-3">
                    <template x-for="sdg in sdgsList" :key="sdg.id">
                        <button @click="selectSdg(sdg)"
                                type="button"
                                :class="selectedSdg.id === sdg.id ? 'ring-4 ring-amber-400 scale-105 z-10 shadow-2xl' : 'opacity-85 hover:opacity-100 hover:scale-102'"
                                class="rounded-xl overflow-hidden shadow-md transition-all duration-300 group focus:outline-none bg-slate-800 border border-slate-700">
                            
                            <img :src="'<?php echo e(asset('img/sdg/icons/colored')); ?>/' + sdg.number + '.png'" 
                                 :alt="sdg.name"
                                 class="w-full h-auto object-cover">
                        </button>
                    </template>
                </div>

                <p class="text-[11px] text-slate-400 italic">
                    💡 Click any of the 17 official Sustainable Development Goals to learn about the province's aligned programs and achievements.
                </p>

            </div>

        </div>

    </div>

    
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

        <div class="bg-slate-900 border border-slate-700 rounded-2xl sm:rounded-3xl shadow-2xl max-w-5xl w-full relative text-white flex flex-col max-h-[92vh] my-auto">

            
            <div class="p-3.5 sm:p-5 border-b border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 bg-slate-900 shrink-0"
                 :style="'border-top: 6px solid ' + selectedSdg.color_hex">
                
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 overflow-hidden rounded-xl shadow-md border border-white/10 flex-shrink-0 bg-slate-800">
                        <img :src="'<?php echo e(asset('img/sdg/icons/colored')); ?>/' + selectedSdg.number + '.png'" 
                             :alt="selectedSdg.name"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="text-[10px] sm:text-xs font-black uppercase text-amber-400 tracking-wider block" x-text="selectedSdg.code"></span>
                        <h4 class="text-sm sm:text-lg font-black uppercase tracking-tight text-white" x-text="selectedSdg.name"></h4>
                    </div>
                </div>

                
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

                    <a :href="activeModalTab === 'achievement' ? ('<?php echo e(asset('img/sdg/achievements')); ?>/' + selectedSdg.number + '.jpg') : ('<?php echo e(asset('img/sdg/infographics/infographic_')); ?>' + selectedSdg.number + '.png')" 
                       target="_blank" 
                       title="Open High-Res File"
                       class="px-2.5 py-1 bg-amber-400 hover:bg-amber-300 text-slate-950 font-extrabold rounded-lg text-xs transition">
                        Full File ↗
                    </a>
                </div>

            </div>

            
            <div class="px-4 sm:px-6 pt-3 pb-0 bg-slate-900 border-b border-slate-800 flex items-center justify-between flex-wrap gap-2 shrink-0">
                <div class="flex items-center gap-2">
                    
                    <button type="button"
                            @click="activeModalTab = 'achievement'; resetZoom();"
                            :class="activeModalTab === 'achievement' ? 'bg-amber-400 text-slate-950 shadow-md font-black border-amber-400' : 'text-slate-400 hover:text-white border-transparent hover:bg-white/5 font-semibold'"
                            class="px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition-all border flex items-center gap-2">
                        <span>🏆</span>
                        <span>Achievement Image</span>
                        <span class="text-[9px] px-1.5 py-0.2 rounded font-mono font-bold"
                              :class="activeModalTab === 'achievement' ? 'bg-slate-950/20 text-slate-950' : 'bg-slate-800 text-amber-300'">
                            camsur.com banner
                        </span>
                    </button>

                    
                    <button type="button"
                            @click="activeModalTab = 'infographic'; resetZoom();"
                            :class="activeModalTab === 'infographic' ? 'bg-blue-600 text-white shadow-md font-black border-blue-500' : 'text-slate-400 hover:text-white border-transparent hover:bg-white/5 font-semibold'"
                            class="px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition-all border flex items-center gap-2">
                        <span>📊</span>
                        <span>Infographics</span>
                    </button>
                </div>

                <div class="text-[11px] text-slate-400 hidden sm:block">
                    Displaying: <span class="font-bold text-amber-300" x-text="activeModalTab === 'achievement' ? 'Provincial Achievement Banner' : 'UN SDG Infographic Sheet'"></span>
                </div>
            </div>

            
            <div class="overflow-y-auto overflow-x-hidden p-4 sm:p-6 space-y-5 bg-slate-950 flex-1">

                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                    
                    <div class="p-3.5 bg-slate-900 rounded-xl border border-slate-800">
                        <span class="text-[10px] font-black uppercase text-amber-400 tracking-wider block mb-1">
                            🌐 UN Global Objective:
                        </span>
                        <p class="text-xs sm:text-sm text-slate-200 leading-relaxed italic" x-text="selectedSdg.un_meaning"></p>
                    </div>

                    
                    <div class="p-3.5 bg-blue-950/80 rounded-xl border border-blue-900/60">
                        <span class="text-[10px] font-black uppercase text-blue-300 tracking-wider block mb-1">
                            🏛️ Provincial Commitment (CamSur):
                        </span>
                        <p class="text-xs sm:text-sm text-blue-100 leading-relaxed font-semibold" x-text="selectedSdg.camsur_commitment"></p>
                    </div>
                </div>

                
                <div x-show="activeModalTab === 'achievement'" class="border border-slate-800 rounded-xl bg-slate-900/50 p-2 sm:p-4 text-center overflow-x-auto min-h-[300px] flex items-center justify-center">
                    <div class="transition-transform duration-300 ease-out max-w-full inline-block"
                         :style="'transform: scale(' + zoomScale + '); transform-origin: center top;'">
                        
                        <img :src="'<?php echo e(asset('img/sdg/achievements')); ?>/' + selectedSdg.number + '.jpg'" 
                             :alt="selectedSdg.name + ' Provincial Achievement Banner'" 
                             class="max-w-full h-auto object-contain rounded-lg shadow-2xl mx-auto"
                             x-on:error="$event.target.src='https://camsur.com/img/sdg2/latest-banner/' + selectedSdg.number + '.jpg'">
                    </div>
                </div>

                
                <div x-show="activeModalTab === 'infographic'" x-cloak class="border border-slate-800 rounded-xl bg-slate-900/50 p-2 sm:p-4 text-center overflow-x-auto min-h-[300px] flex items-center justify-center">
                    <div class="transition-transform duration-300 ease-out max-w-full inline-block"
                         :style="'transform: scale(' + zoomScale + '); transform-origin: center top;'">
                        
                        <img :src="'<?php echo e(asset('img/sdg/infographics/infographic_')); ?>' + selectedSdg.number + '.png'" 
                             :alt="selectedSdg.name + ' Infographic'" 
                             class="max-w-full h-auto object-contain rounded-lg shadow-xl mx-auto"
                             x-on:error="$event.target.src='<?php echo e(asset('img/home/sdg/infographics/infographic_1.png')); ?>'">
                    </div>
                </div>

            </div>

            
            <div class="p-3.5 sm:p-4 border-t border-slate-800 bg-slate-900 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs shrink-0">
                <span class="text-slate-400 text-[11px] text-center sm:text-left">
                    💡 <strong class="text-amber-300">Tip:</strong> Mag-switch sa pagitan ng <strong class="text-white">Achievement Image</strong> at <strong class="text-white">Infographics</strong> gamit ang tabs sa itaas.
                </span>

                <button @click="showModal = false" 
                        type="button" 
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-bold uppercase tracking-wider rounded-xl transition w-full sm:w-auto">
                    Close Viewer
                </button>
            </div>

        </div>

    </div>

</section><?php /**PATH /var/www/resources/views/components/home/sdg.blade.php ENDPATH**/ ?>