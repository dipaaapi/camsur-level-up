<section id="colonial" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="scroll-mt-28 space-y-8 transition-all duration-700">

    <div class="max-w-3xl">
        <span class="text-xs font-bold uppercase tracking-widest text-blue-600 dark:text-blue-400">Spanish Contact and Provincial Formation</span>
        <h2 class="mt-2 text-3xl font-black text-slate-900 dark:text-white">Colonial Governance and Boundary Reconfigurations</h2>
    </div>

    <div class="grid grid-cols-1 items-stretch gap-6 lg:grid-cols-2">
        <article class="flex flex-col justify-between rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-blue-700">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>16th Century Chronicles</span>
                </div>
                <h3 class="mt-3 text-xl font-black text-slate-900 dark:text-white sm:text-2xl">Spanish Exploration and Nueva Cáceres</h3>
                <div class="mt-4 space-y-4 text-sm leading-7 text-slate-600 dark:text-slate-300">
                    <p>The first recorded European exploration occurred in <strong class="text-slate-900 dark:text-white">1569</strong>, led by Captain Luis Enriquez de Guzman and friar Fr. Alfonso Gimenez.</p>
                    <p>In 1571, the Spanish Conquistador Juan de Salcedo, grandson of Miguel Lopez de Legazpi, came to the Bicol Region from the North. Two years later, in 1573, Juan de Salcedo led his troops in penetrating and exploring the peninsula as far as Santiago de Libon in search of spices, gold, and precious stones, encountering the native settlement of <strong class="text-slate-900 dark:text-white">Naga</strong>, named after its abundant narra trees.</p>
                    <p>Between 1574–1575, Captain Pedro de Chaves founded Ciudad de Caceres, later Ciudad de Nueva Caceres — namesake of a province in Spain belonging to the original five royal cities of the colony.</p>
                </div>
            </div>
            <div class="mt-6 rounded-2xl border border-blue-100 bg-blue-50/60 p-4 text-xs text-blue-900 dark:border-blue-900/50 dark:bg-blue-950/40 dark:text-blue-200">
                <span class="font-black uppercase tracking-wider">Historical Milestone:</span> Nueva Cáceres served as the politico-military and ecclesiastical capital of the entire Bicol region for centuries.
            </div>
        </article>

        {{-- Visual Card: Capt. Luis Enriquez De Guzman --}}
        <div class="flex flex-col justify-between rounded-3xl border border-slate-200 bg-gradient-to-b from-slate-50 to-slate-100/70 p-6 sm:p-7 shadow-sm dark:border-slate-700 dark:bg-gradient-to-b dark:from-slate-800/80 dark:to-slate-900/90 text-center">
            <div class="flex flex-1 items-center justify-center py-2">
                <img
                    src="{{ asset('img/about/province-history/Capt. Luis Enriquez De Guzman.png') }}"
                    alt="Capt. Luis Enriquez De Guzman"
                    class="h-auto max-h-80 sm:max-h-96 w-auto max-w-full object-contain drop-shadow-xl rounded-2xl transition-transform duration-300 hover:scale-105"
                    loading="lazy"
                />
            </div>
            <div class="mt-5 border-l-3 border-amber-500 bg-white/70 p-3.5 text-left rounded-xl backdrop-blur-sm dark:bg-slate-800/80 dark:border-amber-400">
                <p class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">First Spanish Expedition (1569)</p>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Capt. Luis Enriquez De Guzman &amp; Fr. Alfonso Gimenez</p>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Early expeditions charted islands and river pathways from Panay up into the mainland of southern Luzon.</p>
            </div>
        </div>
    </div>

    {{-- Territory Partition & Reconfigurations --}}
    <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-950 p-8 text-white shadow-xl sm:p-10">
        <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-indigo-400/10 blur-3xl transition-colors duration-700 group-hover:bg-indigo-400/20"></div>
        <div class="relative z-10 max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-widest text-indigo-300">Early Spanish Administration</span>
            <h3 class="mt-2 text-2xl font-black">Partido de Ibalon and Partido de Camarines</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">The Spanish administration divided the area into two major territorial units to manage settlement, trade, taxation, and security.</p>
        </div>
        <div class="relative z-10 mt-7 grid grid-cols-1 gap-5 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/10 p-6 backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                <h4 class="font-bold text-indigo-200">Partido de Ibalon</h4>
                <p class="mt-3 text-sm leading-7 text-slate-300">The southern territories — comprised of the area south of Camalig (Albay), Sorsogon, Masbate, Catanduanes, and present-day coastal Partido.</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/10 p-6 backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                <h4 class="font-bold text-indigo-200">Partido de Camarines</h4>
                <p class="mt-3 text-sm leading-7 text-slate-300">The upper northern portion — comprised of Camalig (Albay) and all the towns that later formed modern Camarines Sur and Camarines Norte.</p>
            </div>
        </div>
    </div>
</section>