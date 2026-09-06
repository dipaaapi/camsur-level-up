{{-- 👔 THE PROVINCIAL GOVERNOR PANEL --}}
<div id="governor-panel" class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8 scroll-mt-24 relative">
    {{-- Ambient Gradient Decorative Background (Clipped inside inner container to preserve sticky positioning) --}}
    <div class="absolute inset-0 rounded-3xl overflow-hidden pointer-events-none -z-0">
        <div class="absolute -top-24 -right-24 w-80 h-80 bg-gradient-to-br from-amber-100/60 to-rose-100/40 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-80 h-80 bg-gradient-to-tr from-blue-100/50 to-indigo-100/30 rounded-full blur-3xl"></div>
    </div>

    {{-- Header Bar --}}
    <div class="relative z-10 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-gradient-to-br from-rose-500 to-amber-500 text-white rounded-2xl shrink-0 shadow-sm">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <h2 class="text-2xl font-bold text-slate-900">The Provincial Governor</h2>
                    <span class="text-xs font-bold uppercase tracking-wider bg-rose-100 text-rose-800 border border-rose-200 px-3 py-0.5 rounded-full shrink-0">Executive Leadership</span>
                </div>
                <p class="text-sm text-slate-700 mt-0.5 font-medium">Strategic leadership, transformative governance, and development agenda for Camarines Sur</p>
            </div>
        </div>
        <div class="flex items-center gap-2 self-start sm:self-auto shrink-0">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-50 text-amber-900 border border-amber-300 shadow-2xs whitespace-nowrap">
                <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-pulse"></span>
                Term: 2025–Present
            </span>
        </div>
    </div>

    {{-- Main Governor Grid (Sticky Auto-Following 5 cols Left bounded inside Panel, Scrollable 7 cols Right) --}}
    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        {{-- Left Column (5 cols): Full-Height Track with Sticky Auto-Following Inner Card bounded within Governor Panel --}}
        <div class="lg:col-span-5 relative">
            <div class="space-y-4 lg:sticky lg:top-24">
                {{-- Governor Official Portrait Card with High-Contrast Nameplate --}}
                <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200 group bg-slate-900">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/about/profile/Gov.jpg') }}" alt="Hon. Luis Raymund “LRay” Villafuerte Jr." class="w-full h-auto object-cover object-top transition duration-500 group-hover:scale-[1.02]">
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-slate-950/80 backdrop-blur-md text-amber-400 border border-amber-400/40 shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                Incumbent
                            </span>
                        </div>
                    </div>
                    <div class="p-3.5 bg-gradient-to-t from-slate-950 via-slate-900 to-slate-900/95 text-white border-t border-slate-800">
                        <div class="flex items-center justify-between gap-2">
                            <div>
                                <span class="text-[10px] font-black uppercase tracking-wider bg-amber-400 text-slate-950 px-2 py-0.5 rounded shadow-xs">Provincial Leader</span>
                                <h4 class="text-sm font-black text-white mt-1 leading-tight">Hon. Luis Raymund “LRay” Villafuerte Jr.</h4>
                            </div>
                            <span class="text-xs font-bold text-amber-300 shrink-0 whitespace-nowrap">5th-Term Governor</span>
                        </div>
                    </div>
                </div>

                {{-- Quick Credentials & Public Service Milestones Matrix --}}
                <div class="grid grid-cols-2 gap-2.5 text-xs">
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white hover:shadow-sm hover:border-amber-400 transition duration-200">
                        <span class="text-[11px] font-black uppercase tracking-wider text-amber-800 block">Governance</span>
                        <strong class="text-slate-900 font-bold block mt-0.5 text-xs">2004–2013 &amp; 2025+</strong>
                        <span class="text-[11px] text-slate-700 font-medium">Provincial Governor</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white hover:shadow-sm hover:border-blue-400 transition duration-200">
                        <span class="text-[11px] font-black uppercase tracking-wider text-blue-800 block">Congress</span>
                        <strong class="text-slate-900 font-bold block mt-0.5 text-xs">2016–2025</strong>
                        <span class="text-[11px] text-slate-700 font-medium">2nd Dist. &amp; Deputy Speaker</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white hover:shadow-sm hover:border-emerald-400 transition duration-200">
                        <span class="text-[11px] font-black uppercase tracking-wider text-emerald-800 block">Alma Mater</span>
                        <strong class="text-slate-900 font-bold block mt-0.5 text-xs">Univ. of the Philippines</strong>
                        <span class="text-[11px] text-slate-700 font-medium">UP Diliman Alumnus</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white hover:shadow-sm hover:border-rose-400 transition duration-200">
                        <span class="text-[11px] font-black uppercase tracking-wider text-rose-800 block">Legacy</span>
                        <strong class="text-slate-900 font-bold block mt-0.5 text-xs">World-Class Tourism</strong>
                        <span class="text-[11px] text-slate-700 font-medium">CWC &amp; Caramoan Architect</span>
                    </div>
                </div>

                {{-- Inspiring Leadership Quote Banner --}}
                <div class="p-4 bg-gradient-to-br from-amber-500/10 via-amber-100/40 to-rose-500/10 rounded-2xl border border-amber-300/90 text-slate-900 text-xs sm:text-[13px] relative shadow-2xs">
                    <span class="text-amber-600 text-2xl font-serif font-black absolute top-2 left-2.5">“</span>
                    <p class="pl-4 text-slate-900 leading-relaxed font-semibold">
                        True public service is measured by transformative action—empowering every Camarinense with modern livelihood, education, and boundless opportunities.
                    </p>
                </div>

                {{-- Executive Office Badge --}}
                <div class="p-2.5 rounded-xl bg-slate-100 border border-slate-200 text-slate-700 text-[11px] font-semibold flex items-center justify-between">
                    <span class="flex items-center gap-1.5">
                        <span>🏛️</span> Office of the Provincial Governor
                    </span>
                    <span class="text-slate-500 text-[10px]">Pili Capitol</span>
                </div>
            </div>
        </div>

        {{-- Right Column (7 cols): High-Contrast, Highly Scannable Profile & Leadership Chapters --}}
        <div class="lg:col-span-7 space-y-5">
            
            {{-- Profile Header & Title --}}
            <div>
                <div class="flex items-center gap-2">
                    <span class="text-[11px] font-black uppercase tracking-widest text-amber-800 bg-amber-100 px-3 py-0.5 rounded-full border border-amber-300 shadow-2xs">Provincial Executive Profile</span>
                </div>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900 mt-1.5 tracking-tight">Hon. Luis Raymund “LRay” Villafuerte Jr.</h3>
                <p class="text-sm font-bold text-slate-700">Governor, Province of Camarines Sur</p>
            </div>

            {{-- Highlight Vision Banner --}}
            <div class="p-4 sm:p-5 bg-gradient-to-r from-blue-50 via-indigo-50/70 to-purple-50/60 rounded-2xl border-l-4 border-blue-600 shadow-sm">
                <p class="text-sm sm:text-[15px] text-slate-900 font-medium leading-relaxed">
                    With an unwavering dedication to the people of Camarines Sur, Governor Luis Raymund “LRay” Villafuerte Jr. returns to the provincial helm to accelerate the <strong class="text-slate-950 font-black">"Level Up CamSur"</strong> agenda—uniting modern infrastructure, agricultural technology, and youth empowerment.
                </p>
            </div>

            {{-- 3 Leadership Chapters / Micro-Cards --}}
            <div class="space-y-3.5">
                
                {{-- Card 1: Academic & Pioneering Foundations --}}
                <div class="p-4 sm:p-5 bg-gradient-to-br from-white to-slate-50/90 rounded-2xl border border-slate-200/90 shadow-2xs hover:border-amber-400 hover:shadow-md transition duration-300 space-y-2 group">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 font-bold text-slate-900 group-hover:text-amber-700 transition">
                            <span class="text-lg">🎓</span>
                            <h4 class="text-sm sm:text-base font-bold text-slate-900">Academic Foundation &amp; Groundbreaking Vision</h4>
                        </div>
                        <span class="text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300 px-2.5 py-0.5 rounded-md whitespace-nowrap shrink-0">Leadership Roots</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-800 leading-relaxed font-normal">
                        An alumnus of the prestigious <strong class="text-slate-950 font-bold">University of the Philippines (UP)</strong>, Governor LRay honed strategic acumen and progressive management skills that laid the blueprint for game-changing, innovative public-private partnerships across the province.
                    </p>
                </div>

                {{-- Card 2: Transformative Track Record --}}
                <div class="p-4 sm:p-5 bg-gradient-to-br from-white to-slate-50/90 rounded-2xl border border-slate-200/90 shadow-2xs hover:border-blue-400 hover:shadow-md transition duration-300 space-y-2 group">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 font-bold text-slate-900 group-hover:text-blue-700 transition">
                            <span class="text-lg">🏆</span>
                            <h4 class="text-sm sm:text-base font-bold text-slate-900">Historic Transformative Record (2004–2013 &amp; 2016–2025)</h4>
                        </div>
                        <span class="text-[10px] font-bold bg-blue-100 text-blue-900 border border-blue-300 px-2.5 py-0.5 rounded-md whitespace-nowrap shrink-0">Proven Results</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-800 leading-relaxed font-normal">
                        In his first three terms as Governor, he catapulted Camarines Sur to the <strong class="text-slate-950 font-bold">#1 tourist destination in the Philippines</strong>, establishing the iconic CamSur Watersports Complex (CWC) and global Caramoan branding. In Congress (2016–2025) and as <strong class="text-slate-950 font-bold">Deputy Speaker of the 18th Congress</strong>, he authored vital economic stimulus and infrastructure legislation.
                    </p>
                </div>

                {{-- Card 3: 2025 Level Up Mandate --}}
                <div class="p-4 sm:p-5 bg-gradient-to-br from-white to-slate-50/90 rounded-2xl border border-slate-200/90 shadow-2xs hover:border-emerald-400 hover:shadow-md transition duration-300 space-y-2 group">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 font-bold text-slate-900 group-hover:text-emerald-700 transition">
                            <span class="text-lg">🚀</span>
                            <h4 class="text-sm sm:text-base font-bold text-slate-900">2025 Mandate &amp; Strategic Roadmap</h4>
                        </div>
                        <span class="text-[10px] font-bold bg-emerald-100 text-emerald-900 border border-emerald-300 px-2.5 py-0.5 rounded-md whitespace-nowrap shrink-0">Future Forward</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-800 leading-relaxed font-normal">
                        Backed by a commanding popular mandate in 2025, Governor LRay spearheads next-generation governance: digital innovation hubs, cold-storage agricultural chains, universal youth scholarships, and modern healthcare facilities across all 37 municipalities and cities.
                    </p>
                </div>

            </div>

            {{-- 4 Governance Strategic Priorities --}}
            <div class="pt-2">
                <div class="flex items-center gap-1.5 mb-2.5">
                    <span class="text-[11px] font-black uppercase tracking-wider text-slate-700">Key Governance Priorities</span>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 text-center">
                    <div class="p-3 rounded-xl bg-amber-50 border border-amber-300 text-amber-950 font-bold hover:bg-amber-100 transition shadow-2xs">
                        <span class="block text-lg mb-1">🏄</span>
                        <span class="text-xs leading-tight block font-bold text-amber-950">Tourism &amp; Sports</span>
                    </div>
                    <div class="p-3 rounded-xl bg-emerald-50 border border-emerald-300 text-emerald-950 font-bold hover:bg-emerald-100 transition shadow-2xs">
                        <span class="block text-lg mb-1">🌾</span>
                        <span class="text-xs leading-tight block font-bold text-emerald-950">Smart Agriculture</span>
                    </div>
                    <div class="p-3 rounded-xl bg-blue-50 border border-blue-300 text-blue-950 font-bold hover:bg-blue-100 transition shadow-2xs">
                        <span class="block text-lg mb-1">💻</span>
                        <span class="text-xs leading-tight block font-bold text-blue-950">Tech &amp; IT-BPO</span>
                    </div>
                    <div class="p-3 rounded-xl bg-rose-50 border border-rose-300 text-rose-950 font-bold hover:bg-rose-100 transition shadow-2xs">
                        <span class="block text-lg mb-1">🏥</span>
                        <span class="text-xs leading-tight block font-bold text-rose-950">Universal Health</span>
                    </div>
                </div>
            </div>

            {{-- CTA Group --}}
            <div class="pt-3 flex flex-wrap items-center gap-3">
                <a href="{{ url('/about/socio-economic') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 active:bg-blue-800 px-6 py-3.5 rounded-xl shadow-md shadow-blue-600/30 hover:scale-[1.02] active:scale-[0.98] transition duration-200">
                    <span class="text-white font-bold">Explore Priority Programs &amp; Initiatives</span>
                    <svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ url('/about/province-history') }}" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-slate-800 bg-slate-100 hover:bg-slate-200 border border-slate-300 px-5 py-3.5 rounded-xl transition">
                    <span>Historical Milestones</span>
                    <svg class="w-4 h-4 text-slate-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

        </div>

    </div>
</div>
