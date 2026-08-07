<?php
    // Safe fetching of active counts for each job type
    $govtCount = $govtActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('government')->count() 
        : 0);

    $localCount = $localActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('private_local')->count() 
        : 0);

    $overseasCount = $overseasActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('overseas')->count() 
        : 0);

    $spesCount = $spesActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('spes')->count() 
        : 0);

    $totalActiveCount = $govtCount + $localCount + $overseasCount + $spesCount;
?>

<section class="py-16 bg-slate-950 text-white relative overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-6 border-b border-slate-800">
            <div>
                <span class="text-xs font-black text-amber-400 uppercase tracking-widest px-3 py-1 bg-amber-400/10 rounded-full border border-amber-400/20">
                    Employment & Placement Hub
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mt-3">
                    Explore Career Opportunities
                </h2>
            </div>
            <div class="mt-2 md:mt-0 text-left md:text-right">
                <p class="text-slate-400 text-sm max-w-md">
                    Discover active job openings across public sector plantilla, local private enterprises, overseas opportunities, and student internships in Camarines Sur.
                </p>
                @if($totalActiveCount > 0)
                    <span class="inline-block mt-2 text-xs font-bold text-emerald-400 bg-emerald-950/80 px-2.5 py-0.5 rounded-full border border-emerald-800/50">
                        🟢 {{ $totalActiveCount }} Total Openings Available
                    </span>
                @else
                    <span class="inline-block mt-2 text-xs font-bold text-slate-400 bg-slate-900 px-2.5 py-0.5 rounded-full border border-slate-800">
                        ⚪ No posted jobs available today
                    </span>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="bg-slate-900/80 border border-slate-800 hover:border-emerald-500/50 rounded-3xl p-7 backdrop-blur-xl transition-all duration-300 flex flex-col justify-between group shadow-xl hover:shadow-emerald-900/20 h-full">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shrink-0">
                            <span class="text-2xl">🏛️</span>
                        </div>

                        @if($govtCount > 0)
                            <span class="text-xs font-semibold text-emerald-300 bg-emerald-950/80 px-3 py-1 rounded-full border border-emerald-800/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                {{ $govtCount }} Active Vacancies
                            </span>
                        @else
                            <span class="text-xs font-semibold text-slate-400 bg-slate-800/80 px-3 py-1 rounded-full border border-slate-700/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                No posted jobs right now
                            </span>
                        @endif
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-emerald-400 transition-colors">
                        Careers With Us
                    </h3>
                    <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                        Join the public service workforce of Camarines Sur. Find permanent plantilla, civil service roles, and provincial administrative openings.
                    </p>

                    <div class="flex flex-wrap gap-2 mt-6">
                        <span class="text-xs text-emerald-200 bg-emerald-950/50 px-2.5 py-1 rounded-lg border border-emerald-800/40">🏛️ Civil Service</span>
                        <span class="text-xs text-emerald-200 bg-emerald-950/50 px-2.5 py-1 rounded-lg border border-emerald-800/40">📜 Permanent Plantilla</span>
                        <span class="text-xs text-emerald-200 bg-emerald-950/50 px-2.5 py-1 rounded-lg border border-emerald-800/40">📝 Job Order / COS</span>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-800/80">
                    <a href="{{ Route::has('careers.government') ? route('careers.government') : '#' }}"
                       class="w-full inline-flex items-center justify-between bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3.5 px-5 rounded-xl transition-all duration-200 text-sm shadow-lg shadow-emerald-600/20 group/btn">
                        <span>Browse Government Jobs</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="bg-slate-900/80 border border-slate-800 hover:border-blue-500/50 rounded-3xl p-7 backdrop-blur-xl transition-all duration-300 flex flex-col justify-between group shadow-xl hover:shadow-blue-900/20 h-full">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shrink-0">
                            <span class="text-2xl">🏢</span>
                        </div>

                        @if($localCount > 0)
                            <span class="text-xs font-semibold text-blue-300 bg-blue-950/80 px-3 py-1 rounded-full border border-blue-800/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                                {{ $localCount }} Local Openings
                            </span>
                        @else
                            <span class="text-xs font-semibold text-slate-400 bg-slate-800/80 px-3 py-1 rounded-full border border-slate-700/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                No posted jobs right now
                            </span>
                        @endif
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-blue-400 transition-colors">
                        Private Local Jobs
                    </h3>
                    <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                        Connect with accredited private companies, IT-BPO establishments, and local commercial businesses operating in Camarines Sur.
                    </p>

                    <div class="flex flex-wrap gap-2 mt-6">
                        <span class="text-xs text-blue-200 bg-blue-950/50 px-2.5 py-1 rounded-lg border border-blue-800/40">🏢 Local Private Firms</span>
                        <span class="text-xs text-blue-200 bg-blue-950/50 px-2.5 py-1 rounded-lg border border-blue-800/40">💻 BPO & IT Hubs</span>
                        <span class="text-xs text-blue-200 bg-blue-950/50 px-2.5 py-1 rounded-lg border border-blue-800/40">🏬 Retail & Services</span>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-800/80">
                    <a href="{{ Route::has('careers.local') ? route('careers.local') : '#' }}"
                       class="w-full inline-flex items-center justify-between bg-blue-600 hover:bg-blue-500 text-white font-bold py-3.5 px-5 rounded-xl transition-all duration-200 text-sm shadow-lg shadow-blue-600/20 group/btn">
                        <span>Browse Local Opportunities</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="bg-slate-900/80 border border-slate-800 hover:border-sky-500/50 rounded-3xl p-7 backdrop-blur-xl transition-all duration-300 flex flex-col justify-between group shadow-xl hover:shadow-sky-900/20 h-full">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-sky-500/10 border border-sky-500/20 text-sky-400 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shrink-0">
                            <span class="text-2xl">🌏</span>
                        </div>

                        @if($overseasCount > 0)
                            <span class="text-xs font-semibold text-sky-300 bg-sky-950/80 px-3 py-1 rounded-full border border-sky-800/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span>
                                {{ $overseasCount }} Overseas Vacancies
                            </span>
                        @else
                            <span class="text-xs font-semibold text-slate-400 bg-slate-800/80 px-3 py-1 rounded-full border border-slate-700/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                No posted jobs right now
                            </span>
                        @endif
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-sky-400 transition-colors">
                        Overseas Careers
                    </h3>
                    <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                        Explore international opportunities managed through DMW/POEA-certified manpower agencies and verified overseas employers.
                    </p>

                    <div class="flex flex-wrap gap-2 mt-6">
                        <span class="text-xs text-sky-200 bg-sky-950/50 px-2.5 py-1 rounded-lg border border-sky-800/40">🌏 DMW / POEA Accredited</span>
                        <span class="text-xs text-sky-200 bg-sky-950/50 px-2.5 py-1 rounded-lg border border-sky-800/40">🏥 Healthcare & Skilled</span>
                        <span class="text-xs text-sky-200 bg-sky-950/50 px-2.5 py-1 rounded-lg border border-sky-800/40">🛡️ Anti-Illegal Recruitment</span>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-800/80">
                    <a href="{{ Route::has('careers.overseas') ? route('careers.overseas') : '#' }}"
                       class="w-full inline-flex items-center justify-between bg-sky-600 hover:bg-sky-500 text-white font-bold py-3.5 px-5 rounded-xl transition-all duration-200 text-sm shadow-lg shadow-sky-600/20 group/btn">
                        <span>Open Overseas Portal</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="bg-slate-900/80 border border-slate-800 hover:border-purple-500/50 rounded-3xl p-7 backdrop-blur-xl transition-all duration-300 flex flex-col justify-between group shadow-xl hover:shadow-purple-900/20 h-full">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-purple-500/10 border border-purple-500/20 text-purple-400 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shrink-0">
                            <span class="text-2xl">🎓</span>
                        </div>

                        @if($spesCount > 0)
                            <span class="text-xs font-semibold text-purple-300 bg-purple-950/80 px-3 py-1 rounded-full border border-purple-800/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
                                {{ $spesCount }} Active Programs
                            </span>
                        @else
                            <span class="text-xs font-semibold text-slate-400 bg-slate-800/80 px-3 py-1 rounded-full border border-slate-700/50 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                No posted jobs right now
                            </span>
                        @endif
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-purple-400 transition-colors">
                        SPES & Internships
                    </h3>
                    <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                        Bridge employment and temporary placements for High School, Senior High, College students, and Out-of-School Youth (OSY).
                    </p>

                    <div class="flex flex-wrap gap-2 mt-6">
                        <span class="text-xs text-purple-200 bg-purple-950/50 px-2.5 py-1 rounded-lg border border-purple-800/40">🎓 Student SPES Grant</span>
                        <span class="text-xs text-purple-200 bg-purple-950/50 px-2.5 py-1 rounded-lg border border-purple-800/40">🏫 College & SHS OJT</span>
                        <span class="text-xs text-purple-200 bg-purple-950/50 px-2.5 py-1 rounded-lg border border-purple-800/40">🤝 DOLE Partnered</span>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-800/80">
                    <a href="{{ Route::has('careers.spes') ? route('careers.spes') : '#' }}"
                       class="w-full inline-flex items-center justify-between bg-purple-600 hover:bg-purple-500 text-white font-bold py-3.5 px-5 rounded-xl transition-all duration-200 text-sm shadow-lg shadow-purple-600/20 group/btn">
                        <span>Explore Student Jobs</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>