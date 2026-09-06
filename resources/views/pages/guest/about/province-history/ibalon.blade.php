<section id="ibalon" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="scroll-mt-28 space-y-8 transition-all duration-700">

    <div class="max-w-3xl">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Before Colonial Contact</span>
        <h2 class="mt-2 text-3xl font-black text-slate-900 dark:text-white">Tierra de Ibalon and the First Communities</h2>
        <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300 sm:text-base">Long before European colonization, the river valleys, plains, coasts, and highlands of present-day Camarines Sur were home to indigenous communities with established agricultural, trading, and cultural traditions.</p>
    </div>

    <div class="grid grid-cols-1 items-stretch gap-6 lg:grid-cols-2">
        {{-- IMAGE: Mount Isarog landscape of Ibalon --}}
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-2.5 shadow-sm dark:border-slate-700 dark:bg-slate-800 flex items-center justify-center">
            <img
                src="{{ asset('img/about/province-history/beggining bg.png') }}"
                alt="Mount Isarog, an ancestral landscape of the indigenous communities of Ibalon"
                class="h-full min-h-[18rem] max-h-[460px] w-full rounded-2xl object-cover"
                loading="lazy"
            />
        </div>

        <div class="space-y-6">
            <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-emerald-700">
                <h3 class="text-xl font-black text-slate-900 dark:text-white">Ancient Ibalon</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">Oral traditions identify the ancestral domain of many early communities as <strong class="text-slate-900 dark:text-white">Tierra de Ibalon</strong>. Agta communities such as the Isarog Agta and Iraya Agta lived across the uplands, forests, riverbanks, and coasts, participating in Asian maritime trade with China, Arabia, and India.</p>
            </article>

            <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-emerald-700">
                <h3 class="text-xl font-black text-slate-900 dark:text-white">The Bicol River and Kabikolan</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">The term <strong class="text-slate-900 dark:text-white">Kabikolan</strong> comes from <em>biko</em> — bent or twisted — describing the winding Bicol River. Lake Buhi is the natural habitat of the <strong class="text-slate-900 dark:text-white">sinarapan</strong>, the world's smallest commercially harvested fish.</p>
            </article>
        </div>
    </div>

    {{-- INFOGRAPHIC: animated horizontal bar chart — mountain elevations --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-700 dark:bg-slate-800"
        x-data="{ go: false }" x-intersect.once="go = true">
        <h3 class="font-black text-slate-900 dark:text-white">Major Volcanic Formations (Elevation)</h3>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Two inactive stratovolcanoes dominate the province's landscape.</p>

        <div class="mt-6 space-y-5">
            {{-- Mt Isarog: 1976 / 2000 = 98.8% --}}
            <div>
                <div class="mb-1 flex justify-between text-sm font-bold text-slate-700 dark:text-slate-200">
                    <span>Mount Isarog</span><span>1,976 m</span>
                </div>
                <div class="h-4 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-700">
                    <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 transition-[width] duration-[1500ms] ease-out"
                        :style="go ? 'width: 98.8%' : 'width: 0%'"></div>
                </div>
            </div>
            {{-- Mt Iriga: 1196 / 2000 = 59.8% --}}
            <div>
                <div class="mb-1 flex justify-between text-sm font-bold text-slate-700 dark:text-slate-200">
                    <span>Mount Iriga (Asog)</span><span>1,196 m</span>
                </div>
                <div class="h-4 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-700">
                    <div class="h-full rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 transition-[width] duration-[1500ms] ease-out delay-200"
                        :style="go ? 'width: 59.8%' : 'width: 0%'"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Ecological table --}}
    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-slate-800">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-900/60">
            <div>
                <h3 class="font-black text-slate-900 dark:text-white">Physical and Ecological Foundations</h3>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Geographic features that shaped settlement and livelihood.</p>
            </div>
            <span class="inline-flex items-center gap-1 text-xs text-slate-400 lg:hidden">
                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                <span>Scroll table horizontally</span>
            </span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[850px] table-fixed text-left text-sm">
                <thead class="bg-slate-100 text-xs uppercase tracking-wider text-slate-700 dark:bg-slate-950 dark:text-slate-300">
                    <tr>
                        <th class="w-[20%] px-6 py-4 font-bold">Physical Parameter</th>
                        <th class="w-[30%] px-6 py-4 font-bold">Attribute</th>
                        <th class="w-[50%] px-6 py-4 font-bold">Historical Significance</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    @php
                        $rows = [
                            ['Total Land Area','526,682 hectares','Largest geographical and agrarian footprint in the Bicol Region.'],
                            ['Dominant Topography','Central Bicol Plain surrounded by mountain ranges','Supports agricultural production while remaining vulnerable to flooding.'],
                            ['Volcanic Formations','Mount Isarog and Mount Iriga','Source of rich volcanic soils, forest ecosystems, and upland resources.'],
                            ['Hydrological Features','Bicol River, Naga River, and Lake Buhi','Supported transportation, trade, agriculture, fisheries, and settlement.'],
                            ['Plains Soil Series','Pili, San Miguel, Guigua, and Balongay','Supports irrigated and rain-fed rice cultivation.'],
                            ['Highland Soil Series','Tigaon, Bacolod, Faraon, and Luisana','Supports forestry, upland agriculture, and industrial tree crops.'],
                        ];
                    @endphp
                    @foreach ($rows as $row)
                        <tr class="{{ $loop->even ? 'bg-slate-50/80 dark:bg-slate-900/40' : 'bg-white dark:bg-slate-800' }} transition-colors hover:bg-blue-50 dark:hover:bg-slate-700">
                            <td class="px-6 py-4 font-bold text-slate-900 dark:text-white">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-slate-700 dark:text-slate-200">{{ $row[1] }}</td>
                            <td class="px-6 py-4 text-slate-700 dark:text-slate-200">{{ $row[2] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>