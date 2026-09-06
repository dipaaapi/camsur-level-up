{{-- Endemic Species & Natural Treasures of Camarines Sur (Found ONLY in CamSur) --}}
<section class="space-y-6">
    <div class="rounded-3xl border border-emerald-900/40 bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-950/60 p-6 sm:p-8 text-white shadow-xl relative overflow-hidden">
        <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-emerald-800/40 pb-5">
            <div>
                <div class="flex items-center gap-2">
                    <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-300 border border-emerald-500/30">
                        Biodiversity & Heritage
                    </span>
                    <span class="text-xs font-semibold text-emerald-400/90">Exclusive to Camarines Sur</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-black text-white uppercase tracking-tight mt-2">
                    Endemic Species & Living Treasures
                </h2>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 max-w-3xl leading-relaxed">
                    Matatagpuan <strong>dito lamang sa Camarines Sur</strong> at wala saan mang sulok ng daigdig. Mula sa pinakamaliit na isdang kinakain sa Lake Buhi hanggang sa mga pambihirang nilalang ng Mount Isarog National Park.
                </p>
            </div>
        </div>

        {{-- Endemic Species Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

            {{-- 1. Sinarapan (Mistichthys luzonensis) --}}
            <div class="group rounded-2xl border border-slate-700/80 bg-slate-800/80 overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1.5 hover:border-emerald-500/50 flex flex-col justify-between">
                <div>
                    <div class="relative h-48 w-full overflow-hidden bg-slate-950">
                        <img src="{{ asset('img/services/tourism/endemics/sinarapan_fish.jpg') }}" alt="Sinarapan (Mistichthys luzonensis)" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 right-3 rounded-full bg-emerald-950/90 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-300 border border-emerald-500/40">
                            Lake Buhi & Lake Bato
                        </span>
                        <span class="absolute bottom-3 left-3 rounded-md bg-black/70 backdrop-blur-sm px-2.5 py-1 text-[10px] font-bold text-amber-300 border border-amber-500/30">
                            World's Smallest Commercial Fish
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="text-[11px] font-mono italic text-emerald-400">Mistichthys luzonensis (Tabios)</div>
                        <h3 class="text-lg font-black text-white mt-1 group-hover:text-emerald-300 transition-colors">Sinarapan</h3>
                        <p class="mt-2 text-xs text-slate-300 leading-relaxed">
                            May sukat na 10 hanggang 14 milimetro lamang, ang Sinarapan ang kinikilalang pinakamaliit na isdang kinakain sa buong mundo. Likas at eksklusibo lamang itong nabubuhay sa tubig-tabang ng Lawa ng Buhi at Lawa ng Bato sa Camarines Sur.
                        </p>
                    </div>
                </div>
                <div class="px-5 pb-5 pt-0">
                    <div class="pt-3 border-t border-slate-700/70 text-[11px] font-medium text-emerald-400 flex items-center justify-between">
                        <span class="font-bold">Habitat: Lake Buhi & Lake Bato</span>
                        <span class="text-[10px] uppercase font-black px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800/60">Protected Fauna</span>
                    </div>
                </div>
            </div>

            {{-- 2. Mount Isarog Forest Frog (Platymantis isarog) --}}
            <div class="group rounded-2xl border border-slate-700/80 bg-slate-800/80 overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1.5 hover:border-emerald-500/50 flex flex-col justify-between">
                <div>
                    <div class="relative h-48 w-full overflow-hidden bg-slate-950">
                        <img src="{{ asset('img/services/tourism/endemics/isarog_forest_frog.jpg') }}" alt="Mount Isarog Forest Frog" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 right-3 rounded-full bg-emerald-950/90 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-300 border border-emerald-500/40">
                            Mt. Isarog National Park
                        </span>
                        <span class="absolute bottom-3 left-3 rounded-md bg-black/70 backdrop-blur-sm px-2.5 py-1 text-[10px] font-bold text-emerald-300 border border-emerald-500/30">
                            Endemic Amphibian
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="text-[11px] font-mono italic text-emerald-400">Platymantis isarog</div>
                        <h3 class="text-lg font-black text-white mt-1 group-hover:text-emerald-300 transition-colors">Mount Isarog Forest Frog</h3>
                        <p class="mt-2 text-xs text-slate-300 leading-relaxed">
                            Isang pambihirang palaka sa kagubatan na natuklasan at naninirahan lamang sa mga lumot at malinis na batis ng Bundok Isarog. Nagsisilbi itong pangunahing bio-indicator ng kalinisan ng watershed ng Camarines Sur.
                        </p>
                    </div>
                </div>
                <div class="px-5 pb-5 pt-0">
                    <div class="pt-3 border-t border-slate-700/70 text-[11px] font-medium text-emerald-400 flex items-center justify-between">
                        <span class="font-bold">Habitat: Primary Rain Forests</span>
                        <span class="text-[10px] uppercase font-black px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800/60">Isarog Endemic</span>
                    </div>
                </div>
            </div>

            {{-- 3. Mount Isarog Shrew-Rat (Rhynchomys isarogensis) --}}
            <div class="group rounded-2xl border border-slate-700/80 bg-slate-800/80 overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1.5 hover:border-emerald-500/50 flex flex-col justify-between">
                <div>
                    <div class="relative h-48 w-full overflow-hidden bg-slate-950">
                        <img src="{{ asset('img/services/tourism/endemics/isarog_shrew_rat.jpg') }}" alt="Mount Isarog Shrew-Rat" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 right-3 rounded-full bg-emerald-950/90 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-300 border border-emerald-500/40">
                            Cloud Forest Zone
                        </span>
                        <span class="absolute bottom-3 left-3 rounded-md bg-black/70 backdrop-blur-sm px-2.5 py-1 text-[10px] font-bold text-amber-300 border border-amber-500/30">
                            Rare Montane Mammal
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="text-[11px] font-mono italic text-emerald-400">Rhynchomys isarogensis</div>
                        <h3 class="text-lg font-black text-white mt-1 group-hover:text-emerald-300 transition-colors">Mount Isarog Shrew-Rat</h3>
                        <p class="mt-2 text-xs text-slate-300 leading-relaxed">
                            Natatanging mammal na may mahabang matulis na nguso at malambot na balahibo. Matatagpuan lamang sa mataas na mossy cloud forests ng Mt. Isarog sa Camarines Sur at kumakain ng mga bulate sa ilalim ng lupa.
                        </p>
                    </div>
                </div>
                <div class="px-5 pb-5 pt-0">
                    <div class="pt-3 border-t border-slate-700/70 text-[11px] font-medium text-emerald-400 flex items-center justify-between">
                        <span class="font-bold">Habitat: High Elevation Mt. Isarog</span>
                        <span class="text-[10px] uppercase font-black px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800/60">Strictly CamSur</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
