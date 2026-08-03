<section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- 🖼️ 1. Custom Graphic Welcome Banner Showcase --}}
        <div class="relative w-full mb-10 group">
            <img src="{{ asset('/img/home/Welcome CamSur.png') }}"
                 alt="Welcome to Camarines Sur"
                 class="w-full h-auto max-h-[460px] object-cover object-center group-hover:scale-[1.01] transition duration-500"
                 onerror="this.onerror=null; this.src='https://via.placeholder.com/1200x500?text=Welcome+Camarines+Sur';">
        </div>

        {{-- 🏛️ 2. Clean Welcome Content & Provincial Overview Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            {{-- Left Side: Main Welcome Intro --}}
            <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-slate-200/70 flex flex-col justify-between">
                <div>
                    {{-- Header Badge --}}
                    <div class="inline-flex items-center gap-2 mb-3">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                        <span class="text-xs font-extrabold uppercase tracking-widest text-blue-900">
                            Mabalos asin Marhay na Pag-abot!
                        </span>
                    </div>

                    <p class="text-sm m-0 p-0 sm:text-base leading-relaxed">Welcome to the Official Web Portal of the</p>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-tight mb-4 leading-tight">
                        Provincial Government of Camarines Sur
                    </h2>

                    <div class="space-y-3 text-slate-600 text-sm sm:text-base leading-relaxed">
                        <p class="m-0 p-0 text-justify">
                            Isang taos-pusong pagbati sa opisyal na portal ng <b>Pamahalaang Panlalawigan ng Camarines Sur</b>. Ang platform na ito ay idinisenyo upang magbigay ng mabilis, transparent, at direktang access sa ating pampublikong serbisyo, mga ordinansa, at mga programa para sa bawat Camarinense.
                        </p>
                        <p class="m-0 p-0 text-justify">
                            Mula sa ating makulay na kasaysayan hanggang sa ating pagiging <b>Eco-Adventure Capital of the Philippines</b>, patuloy tayong nagsusumikap sa paghahatid ng makabago at inclusive na pamamahala.
                        </p>
                    </div>
                </div>

                {{-- Action Links --}}
                <div class="pt-6 mt-6 border-t border-slate-100 flex flex-wrap items-center gap-4">
                    <a href="{{ route('profile') }}"
                       class="inline-flex items-center gap-2 bg-blue-950 hover:bg-blue-900 text-white font-bold text-xs uppercase tracking-wider px-5 py-2.5 rounded-lg shadow transition">
                        <span>View Full Provincial Profile</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>

                    <a href="{{ route('mission-vision') }}"
                       class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-amber-600 uppercase tracking-wider transition">
                        <span>Mission & Vision &rarr;</span>
                    </a>
                </div>
            </div>

            {{-- Right Side: Quick Provincial Facts & Numbers --}}
            <div class="lg:col-span-5 bg-gradient-to-br from-blue-950 to-slate-900 text-white p-6 sm:p-8 rounded-2xl shadow-sm border border-blue-900/40 flex flex-col justify-between">
                <div>
                    <span class="text-amber-400 text-xs font-black uppercase tracking-widest block mb-2">
                        At a Glance
                    </span>
                    <h3 class="text-xl font-bold uppercase tracking-wide text-white mb-6">
                        Camarines Sur Key Facts
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/10">
                            <span class="text-xs font-semibold text-slate-300 uppercase">Capital Town</span>
                            <span class="text-sm font-black text-amber-300 uppercase">Pili</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/10">
                            <span class="text-xs font-semibold text-slate-300 uppercase">Land Area</span>
                            <span class="text-sm font-black text-white">5,481.6 km²</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/10">
                            <span class="text-xs font-semibold text-slate-300 uppercase">Municipalities</span>
                            <span class="text-sm font-black text-amber-300">35 Towns</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/10">
                            <span class="text-xs font-semibold text-slate-300 uppercase">Component Cities</span>
                            <span class="text-sm font-black text-white">2 Cities</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/10">
                            <span class="text-xs font-semibold text-slate-300 uppercase">Congressional Districts</span>
                            <span class="text-sm font-black text-amber-300">5 Districts</span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-6 border-t border-white/10 text-center">
                    <span class="text-[11px] text-slate-400 uppercase tracking-widest font-medium block">
                        Heart of the Bicol Region
                    </span>
                </div>
            </div>

        </div>

    </div>
</section>
