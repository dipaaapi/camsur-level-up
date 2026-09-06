<section id="sources" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="scroll-mt-28 rounded-3xl border border-slate-200 bg-white p-8 sm:p-10 shadow-sm transition-all duration-700 dark:border-slate-700 dark:bg-slate-800">
    <div class="max-w-4xl">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
            </div>
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400">Institutional Documentation</span>
                <h2 class="text-2xl font-black text-slate-900 dark:text-white">References &amp; Archival Sources</h2>
            </div>
        </div>
        
        <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">
            Historical facts, territorial acts, and heritage narratives are indexed against official provincial, national, church, and academic archives.
        </p>

        <div class="mt-6 grid grid-cols-1 gap-3.5 sm:grid-cols-2">
            @php
                $references = [
                    ['title' => 'Camarines Sur Brief History', 'desc' => 'Official Province History Records & Documentary Reel', 'url' => 'https://camsur.com/about/province-brief-history'],
                    ['title' => 'Official Provincial Profile', 'desc' => 'Provincial Government of Camarines Sur Portal', 'url' => 'https://www.camarinessur.gov.ph/about/profile'],
                    ['title' => 'Diocese & Archdiocese of Cáceres', 'desc' => 'Ecclesiastical Annals & Our Lady of Peñafrancia Archival Records', 'url' => 'https://www.archdioceseofcaceres.org/pe%C3%B1afrancia-history'],
                    ['title' => 'Philippine Legislative Act No. 2711', 'desc' => 'Administrative Code of 1917 — Boundary Demarcations', 'url' => 'https://www.officialgazette.gov.ph/'],
                    ['title' => 'Republic Act No. 1336', 'desc' => 'Statute Designating Pili as Provincial Capital (1955)', 'url' => 'https://www.officialgazette.gov.ph/'],
                    ['title' => 'City of Naga Historical Background', 'desc' => 'Records on Ciudad de Nueva Cáceres & Narra Settlements', 'url' => 'https://www2.naga.gov.ph/historical-backgound/'],
                ];
            @endphp

            @foreach ($references as $ref)
                <a href="{{ $ref['url'] }}" target="_blank" rel="noopener noreferrer"
                    class="group flex flex-col justify-between rounded-2xl border border-slate-200 bg-slate-50/70 p-4 transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-400 hover:bg-white hover:shadow-md dark:border-slate-700 dark:bg-slate-900/50 dark:hover:border-blue-500 dark:hover:bg-slate-900">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-sm text-slate-900 group-hover:text-blue-600 dark:text-white dark:group-hover:text-blue-400">
                                {{ $ref['title'] }}
                            </span>
                            <svg class="h-4 w-4 text-slate-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-blue-600 dark:group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </div>
                        <p class="mt-1.5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                            {{ $ref['desc'] }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>