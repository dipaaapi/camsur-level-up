@php
    $milestones = [
        ['year' => '1575–1579', 'title' => 'Foundation Decree by Gov. Gen. Francisco Sande', 'text' => 'Gov. Gen. Francisco Sande issued the official foundation decree on May 27, 1579 urging Spanish colonists to reside in Camarines.', 'dot' => 'bg-blue-500'],
        ['year' => '1595', 'title' => 'See of Caceres Erected', 'text' => 'Nueva Caceres became an episcopal seat under a papal bull of Pope Clement VIII, making it an ecclesiastical center.', 'dot' => 'bg-blue-500'],
        ['year' => '1829', 'title' => 'First Division of Camarines', 'text' => 'Partido de Camarines was divided into Camarines Sur and Camarines Norte.', 'dot' => 'bg-purple-500'],
        ['year' => '1854', 'title' => 'Creation of Ambos Camarines', 'text' => 'The two provinces were united to form the joint province of Ambos Camarines.', 'dot' => 'bg-purple-500'],
        ['year' => '1857–1893', 'title' => 'Successive Fusions & Separations', 'text' => 'Ambos Camarines underwent several annexations, repartitions, and fusions due to economic and administrative factors.', 'dot' => 'bg-purple-500'],
        ['year' => '1917', 'title' => 'Act No. 2711 — Final Boundary Separation', 'text' => 'Philippine Legislative Act No. 2711 of March 10, 1917 established current boundaries, designating Nueva Caceres (Naga) as capital.', 'dot' => 'bg-rose-500'],
        ['year' => '1955', 'title' => 'R.A. 1336 — Capital Transferred to Pili', 'text' => 'Republic Act No. 1336 approved June 6, 1955 declared Pili as the official provincial capital of Camarines Sur.', 'dot' => 'bg-teal-500'],
    ];
@endphp

<section id="timeline" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'opacity-100' : 'opacity-0'"
    class="scroll-mt-28 space-y-8 transition-opacity duration-700">

    <div class="max-w-3xl">
        <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Chronology &amp; Archives</span>
        <h2 class="mt-2 text-3xl font-black text-slate-900 dark:text-white">Birth of New Government &amp; Territorial Evolution</h2>
        <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300 sm:text-base">
            Research in local, national, and Spanish archives initiated by former Governor Luis R. Villafuerte revealed the official foundation date of Camarines Sur as <strong class="text-slate-900 dark:text-white">May 27, 1579</strong>.
        </p>
    </div>

    {{-- HORIZONTAL TIMELINE (scroll left→right). Cards alternate above/below the center line. --}}
    <div class="scrollbar-hide overflow-x-auto pb-4">
        <div class="relative min-w-max px-6 py-4">

            {{-- The animated connecting line: grows left→right on reveal --}}
            <div class="absolute left-6 right-6 top-1/2 h-1 -translate-y-1/2 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700">
                <div class="h-full w-full origin-left bg-gradient-to-r from-blue-600 via-purple-500 to-teal-500 transition-transform duration-[1400ms] ease-out"
                    :class="shown ? 'scale-x-100' : 'scale-x-0'"></div>
            </div>

            <div class="relative flex gap-6">
                @foreach ($milestones as $i => $m)
                    <div class="flex w-72 shrink-0 flex-col">
                        {{-- TOP slot (even index) --}}
                        <div class="flex h-52 items-end justify-center pb-6">
                            @if ($loop->even)
                                <div class="w-full overflow-hidden rounded-2xl">
                                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all ease-out hover:-translate-y-1 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800"
                                        x-intersect.once="$el.classList.remove('translate-y-8','opacity-0')"
                                        class="translate-y-8 opacity-0"
                                        style="transition-duration: 600ms; transition-delay: {{ $i * 120 }}ms;">
                                        <span class="inline-block rounded-lg bg-blue-100 px-3 py-1 text-xs font-black text-blue-700 dark:bg-blue-900/50 dark:text-blue-300">{{ $m['year'] }}</span>
                                        <h3 class="mt-3 font-black text-slate-900 dark:text-white">{{ $m['title'] }}</h3>
                                        <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $m['text'] }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{-- DOT on the center line --}}
                        <div class="flex items-center justify-center">
                            <span class="z-10 h-5 w-5 rounded-full {{ $m['dot'] }} border-4 border-slate-50 shadow-lg transition-transform duration-500 dark:border-slate-900"
                                :class="shown ? 'scale-100' : 'scale-0'"
                                style="transition-delay: {{ $i * 120 }}ms;"></span>
                        </div>

                        {{-- BOTTOM slot (odd index) --}}
                        <div class="flex h-52 items-start justify-center pt-6">
                            @if ($loop->odd)
                                <div class="w-full overflow-hidden rounded-2xl">
                                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all ease-out hover:-translate-y-1 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800"
                                        x-intersect.once="$el.classList.remove('-translate-y-8','opacity-0')"
                                        class="-translate-y-8 opacity-0"
                                        style="transition-duration: 600ms; transition-delay: {{ $i * 120 }}ms;">
                                        <span class="inline-block rounded-lg bg-purple-100 px-3 py-1 text-xs font-black text-purple-700 dark:bg-purple-900/50 dark:text-purple-300">{{ $m['year'] }}</span>
                                        <h3 class="mt-3 font-black text-slate-900 dark:text-white">{{ $m['title'] }}</h3>
                                        <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $m['text'] }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <p class="text-center text-xs text-slate-400 dark:text-slate-500">← Scroll horizontally to explore the full timeline →</p>

    {{-- HISTORICAL DOCUMENTATION & ARCHIVES --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-700 dark:bg-slate-800">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 pb-5 dark:border-slate-700">
            <div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Historical Documentation &amp; Archival Records</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Primary records and official historical retrospective on the founding of Camarines Sur</p>
            </div>
            
            {{-- Button Link to Facebook Documentary Video Reel --}}
            <a href="https://www.facebook.com/reel/787159630956468/" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-xs sm:text-sm font-bold text-white shadow-sm shadow-blue-500/20 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-md">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span>Panoorin ang Video sa Facebook</span>
                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>

        {{-- Visual Archives Cards --}}
        <div class="pt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col justify-between rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-900/50 shadow-sm">
                    <div class="flex h-56 items-center justify-center overflow-hidden rounded-xl bg-white p-3 shadow-inner dark:bg-slate-800">
                        <img 
                            src="{{ asset('img/about/province-history/handwritten.png') }}" 
                            alt="Handwritten Records 1579" 
                            class="max-h-full max-w-full object-contain"
                            loading="lazy"
                        />
                    </div>
                    <div class="mt-4 border-l-2 border-amber-500 pl-3">
                        <h4 class="font-bold text-sm text-slate-800 dark:text-white">Spanish Foundation Decree (1579)</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Original handwritten archival manuscript from Spanish archives decreeing the establishment of Camarines.</p>
                    </div>
                </div>

                <div class="flex flex-col justify-between rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-900/50 shadow-sm">
                    <div class="flex h-56 items-center justify-center overflow-hidden rounded-xl bg-white p-3 shadow-inner dark:bg-slate-800">
                        <img 
                            src="{{ asset('img/about/province-history/Ambos Camarines.png') }}" 
                            alt="Ambos Camarines Seal" 
                            class="max-h-full max-w-full object-contain"
                            loading="lazy"
                        />
                    </div>
                    <div class="mt-4 border-l-2 border-blue-500 pl-3">
                        <h4 class="font-bold text-sm text-slate-800 dark:text-white">Official Seal of Ambos Camarines</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Historical insignia representing the unified province before final boundary partitioning under Act No. 2711.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>