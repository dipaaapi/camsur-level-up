{{-- ========================================== --}}
{{-- 1. MISSION & VISION CORE CARDS             --}}
{{-- ========================================== --}}
<section class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    {{-- OUR MISSION CARD --}}
    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 flex flex-col justify-between space-y-6 relative overflow-hidden group">
        <div class="absolute -right-6 -top-6 w-36 h-36 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/20 transition duration-500"></div>
        <img src="{{ asset('img/camsur-logo-outline.png') }}" alt="CamSur Seal" class="absolute -right-12 -bottom-12 w-56 h-56 opacity-5 dark:opacity-10 pointer-events-none select-none">

        <div class="space-y-5 relative z-10">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs font-bold uppercase tracking-wider">
                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                State of Responsibility — Our Mission
            </div>

            {{-- Verbatim Quote (Protected & Exact) --}}
            <blockquote class="p-5 bg-blue-50/70 dark:bg-blue-950/30 rounded-2xl border-l-4 border-blue-600 dark:border-blue-400 text-slate-800 dark:text-slate-200 italic font-serif text-base sm:text-lg leading-relaxed shadow-sm">
                “Highly committed to accountable public service, shall formulate policies, programs, optimize generation and management of resources, deliver basic services equitably through a participatory development process, and promote industry and investment opportunities, tourism development, and environment-friendly technology.”
            </blockquote>

            {{-- What This Means Breakdown --}}
            <div class="space-y-3 pt-2">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                    Institutional Commitment to the People
                </h3>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                    The Mission is the <strong>daily promise</strong> of the Provincial Government to every citizen. Every decision, infrastructure project, and social program is guided by <strong>accountability, equity, and active public participation</strong>—ensuring resources and public funds are managed responsibly for both present and future generations.
                </p>
            </div>
        </div>

        <div class="p-4 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700/60 text-xs text-slate-500 dark:text-slate-400 relative z-10">
            <strong>Core Focus:</strong> Responsive Policies • Equitable Service • Resource Optimization • Green Tech Integration
        </div>
    </div>

    {{-- OUR VISION CARD --}}
    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 flex flex-col justify-between space-y-6 relative overflow-hidden group">
        <div class="absolute -right-6 -top-6 w-36 h-36 bg-amber-500/10 rounded-full blur-2xl group-hover:bg-amber-500/20 transition duration-500"></div>
        <img src="{{ asset('img/camsur-logo-outline.png') }}" alt="CamSur Seal" class="absolute -right-12 -bottom-12 w-56 h-56 opacity-5 dark:opacity-10 pointer-events-none select-none">

        <div class="space-y-5 relative z-10">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 dark:bg-amber-900/50 text-amber-800 dark:text-amber-300 text-xs font-bold uppercase tracking-wider">
                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                Strategic Goal — Our Vision
            </div>

            {{-- Verbatim Quote (Protected & Exact) --}}
            <blockquote class="p-5 bg-amber-50/70 dark:bg-amber-950/30 rounded-2xl border-l-4 border-amber-500 text-slate-800 dark:text-slate-200 italic font-serif text-base sm:text-lg leading-relaxed shadow-sm">
                “A progressive province with empowered people of distinct drive for sustained socio-economic growth thru agro-industrialization, enhanced tourism development, rational utilization of the province's naturally-endowed resources towards national and global competitiveness.”
            </blockquote>

            {{-- Strategic Pillars Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-1">
                <div class="p-3 bg-slate-50 dark:bg-slate-900/60 rounded-xl border border-slate-100 dark:border-slate-700/60">
                    <h4 class="font-bold text-slate-900 dark:text-white text-xs">🌾 Agro-Industrialization</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Modernizing agriculture & processing value chains.</p>
                </div>
                <div class="p-3 bg-slate-50 dark:bg-slate-900/60 rounded-xl border border-slate-100 dark:border-slate-700/60">
                    <h4 class="font-bold text-slate-900 dark:text-white text-xs">🏖️ World-Class Tourism</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Eco-tourism and sports adventure hubs.</p>
                </div>
                <div class="p-3 bg-slate-50 dark:bg-slate-900/60 rounded-xl border border-slate-100 dark:border-slate-700/60">
                    <h4 class="font-bold text-slate-900 dark:text-white text-xs">🌿 Rational Resource Use</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Sustainable environmental conservation.</p>
                </div>
                <div class="p-3 bg-slate-50 dark:bg-slate-900/60 rounded-xl border border-slate-100 dark:border-slate-700/60">
                    <h4 class="font-bold text-slate-900 dark:text-white text-xs">🌐 Global Competitiveness</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Empowered workforce and smart investments.</p>
                </div>
            </div>
        </div>

        <div class="p-4 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700/60 text-xs text-slate-500 dark:text-slate-400 relative z-10">
            <strong>Destination Goal:</strong> Transforming Camarines Sur into a premier socio-economic model in the Philippines.
        </div>
    </div>

</section>
