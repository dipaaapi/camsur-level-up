<section id="penafrancia" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="group relative scroll-mt-28 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-950 p-8 text-white shadow-2xl transition-all duration-700 sm:p-12">

    <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-amber-400/10 blur-3xl transition-colors duration-700 group-hover:bg-amber-400/20"></div>
    <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-blue-400/10 blur-3xl transition-colors duration-700 group-hover:bg-blue-400/20"></div>

    <div class="relative z-10 grid grid-cols-1 gap-10 lg:grid-cols-3">
        <div class="lg:col-span-2">
            <span class="text-xs font-bold uppercase tracking-widest text-amber-300">Sacred Geography & Cultural Identity</span>
            <h2 class="mt-2 text-3xl font-black">The Peñafrancia Devotion</h2>
            <div class="mt-6 space-y-5 text-sm leading-7 text-slate-300 sm:text-base">
                <p>The cultural identity of Camarines Sur is closely tied to the devotion to <strong class="text-white">Nuestra Señora de Peñafrancia</strong>, affectionately called <strong class="text-white">Ina</strong> by Bicolanos.</p>
                <p>Brought to Bicol around 1710 by Fr. Miguel Robles de Covarrubias, the devotion became a force for social integration. Under Bishop Francisco Gainza in 1864, the annual Traslación procession was formally organized.</p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ([
                    ['1710','The devotion took root in Nueva Caceres.'],
                    ['1864','Bishop Gainza structured the Traslación procession.'],
                    ['1985','Elevated to Basilica Minore — the only one in Bicol.'],
                ] as $item)
                    <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                        <p class="text-sm font-bold text-amber-300">{{ $item[0] }}</p>
                        <p class="mt-2 text-sm leading-6 text-slate-300">{{ $item[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- IMAGE: The image of Our Lady of Peñafrancia --}}
        <div class="flex items-center justify-center overflow-hidden rounded-3xl border border-white/15 bg-white/5 p-2 backdrop-blur-sm shadow-2xl">
            <img
                src="{{ asset('img/about/province-history/penafrancia.jpg') }}"
                alt="The Peñafrancia devotion and fluvial procession in Naga City"
                class="h-full min-h-[18rem] max-h-[460px] w-full rounded-2xl object-cover"
                loading="lazy"
            />
        </div>
    </div>
</section>