<x-guest-layout>
    {{-- ========================================== --}}
    {{-- 1. FULL-WIDTH HERO BANNER                  --}}
    {{-- ========================================== --}}
    <x-hero-banner
        badge-text="PROVINCIAL GOVERNANCE MANDATE"
        title="MISSION AND VISION"
        description="Guiding how the Provincial Government of Camarines Sur serves its people, manages resources, formulates development policies, and builds a globally competitive and resilient province."
    />

    <div class="min-h-screen bg-slate-50 dark:bg-slate-900 py-12 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            {{-- ========================================== --}}
            {{-- 2. MISSION & VISION CORE CARDS             --}}
            {{-- ========================================== --}}
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- OUR MISSION CARD --}}
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 flex flex-col justify-between space-y-6 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/20 transition duration-500"></div>

                    <div class="space-y-5 relative z-10">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs font-bold uppercase tracking-wider">
                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            State of Responsibility — Our Mission
                        </div>

                        {{-- Verbatim Quote --}}
                        <blockquote class="p-4 bg-blue-50/60 dark:bg-blue-950/30 rounded-2xl border-l-4 border-blue-600 dark:border-blue-400 text-slate-800 dark:text-slate-200 italic font-serif text-sm leading-relaxed">
                            “Highly committed to accountable public service, shall formulate policies, programs, optimize generation and management of resources, deliver basic services equitably through a participatory development process, and promote industry and investment opportunities, tourism development, and environment-friendly technology.”
                        </blockquote>

                        {{-- What This Means Breakdown --}}
                        <div class="space-y-3 pt-2">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                💡 What This Means for Bicolano/Bicolana
                            </h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                The Mission is the <strong>daily promise</strong> of the Provincial Government to every citizen. Every decision, infrastructure project, and social program is guided by <strong>accountability, equity, and active public participation</strong>—ensuring resources and public funds are managed responsibly for both present and future generations.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700/60 text-xs text-slate-500 dark:text-slate-400">
                        <strong>Core Focus:</strong> Responsive Policies • Equitable Service • Resource Optimization • Green Tech Integration
                    </div>
                </div>

                {{-- OUR VISION CARD --}}
                <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 flex flex-col justify-between space-y-6 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-amber-500/10 rounded-full blur-2xl group-hover:bg-amber-500/20 transition duration-500"></div>

                    <div class="space-y-5 relative z-10">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-100 dark:bg-amber-900/50 text-amber-800 dark:text-amber-300 text-xs font-bold uppercase tracking-wider">
                            <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            Strategic Goal — Our Vision
                        </div>

                        {{-- Verbatim Quote --}}
                        <blockquote class="p-4 bg-amber-50/60 dark:bg-amber-950/30 rounded-2xl border-l-4 border-amber-500 text-slate-800 dark:text-slate-200 italic font-serif text-sm leading-relaxed">
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

                    <div class="p-4 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700/60 text-xs text-slate-500 dark:text-slate-400">
                        <strong>Destination Goal:</strong> Transforming Camarines Sur into a premier socio-economic model in the Philippines.
                    </div>
                </div>

            </section>

            {{-- ========================================== --}}
            {{-- 3. OUR FOUNDATION (MANDATE)                --}}
            {{-- ========================================== --}}
            <section class="bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-950 rounded-3xl p-8 sm:p-10 text-white shadow-xl space-y-6 relative overflow-hidden">
                <div class="space-y-2 relative z-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-300">Institutional Foundation</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-white">Our Mandate & Governance Scale</h2>
                    <p class="text-sm text-slate-300 max-w-4xl leading-relaxed">
                        The Provincial Government exists to promote the general welfare of its people across <strong>35 municipalities and 2 cities</strong>—serving as the most populous province in the Bicol Region with nearly <strong>two million residents</strong>. The foundation rests on inclusive planning, LGU supervision, and bold regional development.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs sm:text-sm pt-2 relative z-10">
                    <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10 space-y-1">
                        <strong class="text-indigo-200 block text-sm">🏛️ Strategic Leadership</strong>
                        <p class="text-slate-300">Formulating forward-looking master plans like the Provincial Development and Physical Framework Plan (PDPFP).</p>
                    </div>

                    <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10 space-y-1">
                        <strong class="text-indigo-200 block text-sm">🤝 Multi-LGU Governance</strong>
                        <p class="text-slate-300">Unifying 37 LGUs for regional harmony, disaster mitigation, and infrastructure connectivity.</p>
                    </div>

                    <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10 space-y-1">
                        <strong class="text-indigo-200 block text-sm">⚖️ Inclusive Welfare</strong>
                        <p class="text-slate-300">Delivering equitable health, education, and livelihood access to all grassroot communities.</p>
                    </div>
                </div>
            </section>

            {{-- ========================================== --}}
            {{-- 4. OUR COMMITMENT (5 DETAILED RESPONSIBILITIES) --}}
            {{-- ========================================== --}}
            <section class="space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Action in Motion</span>
                    <h2 class="text-2xl font-black text-slate-900 dark:text-white">Our 5 Core Commitments</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">How the Provincial Government actively translates its Mission into real-world projects and public benefits.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- 1. Supervisory Oversight --}}
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm space-y-3 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="w-10 h-10 rounded-2xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400 font-black">1</div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base">Supervisory Oversight</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Coordinating all 35 municipalities and 2 cities to ensure alignment with national laws and provincial goals through key governing councils:
                            </p>
                        </div>
                        <ul class="text-[11px] text-slate-500 dark:text-slate-400 space-y-1 bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl border border-slate-100 dark:border-slate-700">
                            <li>• Provincial Project Monitoring Committee (PPMC)</li>
                            <li>• Provincial Peace and Order Council (PPOC)</li>
                            <li>• Sectoral Committee for Naga Airport</li>
                            <li>• Bicol River Basin Management Committee</li>
                        </ul>
                    </div>

                    {{-- 2. Strategic Resource Management --}}
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm space-y-3 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="w-10 h-10 rounded-2xl bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center text-amber-600 dark:text-amber-400 font-black">2</div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base">Strategic Resource Management</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Optimizing financial, natural, and institutional assets through strategic planning frameworks:
                            </p>
                        </div>
                        <div class="bg-amber-50/50 dark:bg-amber-950/20 p-3 rounded-xl border border-amber-200/50 dark:border-amber-800/50 text-[11px] text-slate-600 dark:text-slate-300 space-y-1">
                            <p class="font-bold text-amber-900 dark:text-amber-300">PDPFP Milestone:</p>
                            <p>The Provincial Planning and Development Office (PPDO) formulated the Provincial Development and Physical Framework Plan (PDPFP), fully endorsed by the RLUC to the Sangguniang Panlalawigan for implementation.</p>
                        </div>
                    </div>

                    {{-- 3. Infrastructure Development --}}
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm space-y-3 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="w-10 h-10 rounded-2xl bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center text-emerald-600 dark:text-emerald-400 font-black">3</div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base">Infrastructure Development</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Championing transformative flagship projects under the <strong>Smart Province</strong> direction, anchored by <strong>CamSur Uptown</strong>:
                            </p>
                        </div>
                        <div class="bg-emerald-50/50 dark:bg-emerald-950/20 p-3 rounded-xl border border-emerald-200/50 dark:border-emerald-800/50 text-[11px] text-slate-600 dark:text-slate-300 space-y-1">
                            <p class="font-bold text-emerald-900 dark:text-emerald-300">CamSur Uptown Hub:</p>
                            <p>Houses the new Iconic Capitol Building, digital campus, tertiary hospital, green parks, hotels, lifestyle malls, and logistics facilities.</p>
                        </div>
                    </div>

                    {{-- 4. Social Equity and Health --}}
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm space-y-3 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="w-10 h-10 rounded-2xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-purple-600 dark:text-purple-400 font-black">4</div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base">Social Equity and Health</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Direct healthcare delivery via free medical/dental missions, senior maintenance medicine supply, multi-purpose halls, and hospital upgrades:
                            </p>
                        </div>
                        <div class="bg-purple-50/50 dark:bg-purple-950/20 p-3 rounded-xl border border-purple-200/50 dark:border-purple-800/50 text-[11px] text-slate-600 dark:text-slate-300">
                            <span class="font-bold text-purple-900 dark:text-purple-300">🏆 Excellence Awardee:</span>
                            Recognized at the <strong>13th Salud Bikolnon Awards</strong> by the Department of Health (DOH) for outstanding provincial health management.
                        </div>
                    </div>

                    {{-- 5. Environmental Stewardship --}}
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm space-y-3 md:col-span-2 lg:col-span-1 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="w-10 h-10 rounded-2xl bg-teal-100 dark:bg-teal-900/50 flex items-center justify-center text-teal-600 dark:text-teal-400 font-black">5</div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base">Environmental Stewardship</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Preserving natural heritage, eco-tourism trails, and reforestation initiatives across Mount Isarog and Lake Bato:
                            </p>
                        </div>
                        <div class="bg-teal-50/50 dark:bg-teal-950/20 p-3 rounded-xl border border-teal-200/50 dark:border-teal-800/50 text-[11px] text-slate-600 dark:text-slate-300">
                            <span class="font-bold text-teal-900 dark:text-teal-300">🌱 Reforestation Campaign:</span>
                            Planted 12,000 native tree seedlings at Bicol Natural Park to revert degraded agricultural lands into resilient forest cover.
                        </div>
                    </div>

                </div>
            </section>

            {{-- ========================================== --}}
            {{-- 5. OUR OPERATIONS (8 CORE FUNCTIONS)       --}}
            {{-- ========================================== --}}
            <section class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Operational Pillars</span>
                    <h2 class="text-2xl font-black text-slate-900 dark:text-white">Our 8 Core Functions</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Executing day-to-day operations to achieve provincial growth, digital literacy, and economic competitiveness.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

                    {{-- 1. Legislative Function --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">📜</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Legislative Policy</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            The <strong>Sangguniang Panlalawigan</strong> enacts ordinances for investment promotion, public safety, tourism, and environmental protection.
                        </p>
                    </div>

                    {{-- 2. Economic & Investment --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">🏢</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Economic & PEZA Zones</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            PEZA approval of the <strong>CamSur Uptown Special Economic Zone</strong> attracting IT-BPM locators, BPO enterprises, and commercial investments.
                        </p>
                    </div>

                    {{-- 3. Agri-Industrial Innovation --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">🌾</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Agri-Industrial Support</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            Integrated Rice Recovery & Agro-Industrial Development covering <strong>3,000 hectares across 8 municipalities</strong> in partnership with DA Bicol.
                        </p>
                    </div>

                    {{-- 4. Tech-Voc Education --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">🎓</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Tech-Voc & Skills</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            Free TESDA programs through <strong>GMVCC</strong> & <strong>SEAICT</strong>, upskilling workers for the Veragon Manufacturing Hub & Mega Cold Storage.
                        </p>
                    </div>

                    {{-- 5. Digital Literacy --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">💻</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Digital Literacy & ICT</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            Spearheaded by <strong>ICARMO</strong>, hosting student web defense and coding expos to build a digital-centric local tech workforce.
                        </p>
                    </div>

                    {{-- 6. Disaster Risk Reduction --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">🛡️</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">DRRM & Resiliency</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            PDRRMC standardizing disaster response instructor training and operating high-capacity evacuation centers across the province.
                        </p>
                    </div>

                    {{-- 7. Tourism Development --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">🏄‍♂️</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Tourism Promotion</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            Developing premier destinations including <strong>CamSur Watersports Complex (CWC)</strong> and <strong>Gota Beach Resort in Caramoan</strong>.
                        </p>
                    </div>

                    {{-- 8. Employment & PESO --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-2">
                        <div class="text-xl">💼</div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Employment & Livelihood</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            Award-winning <strong>CamSur PESO</strong> recognized by DOLE Region V during YEPA 2025 for closing employment gaps.
                        </p>
                    </div>

                </div>
            </section>

            {{-- ========================================== --}}
            {{-- 6. CORE VALUES (THE DRIVING SPIRIT)        --}}
            {{-- ========================================== --}}
            <section class="space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Institutional Principles</span>
                    <h2 class="text-2xl font-black text-slate-900 dark:text-white">The Driving Spirit — Core Values</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Five core values demonstrated in every public service, policy, and infrastructure project.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                    {{-- Accountability --}}
                    <div class="p-5 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 space-y-3 shadow-sm flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300 inline-block">ACCOUNTABILITY</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-tight">Transparency and fiscal responsibility in every public project.</p>
                        </div>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 pt-2 border-t border-slate-100 dark:border-slate-700">
                            <strong>Lived via:</strong> Transparency Seal, Citizen's Charter, BAC disclosures.
                        </p>
                    </div>

                    {{-- Participation --}}
                    <div class="p-5 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 space-y-3 shadow-sm flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 inline-block">PARTICIPATION</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-tight">Empowering citizens, civil groups, and business sectors in planning.</p>
                        </div>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 pt-2 border-t border-slate-100 dark:border-slate-700">
                            <strong>Lived via:</strong> Consultative PDPFP and SDG local planning sessions.
                        </p>
                    </div>

                    {{-- Innovation --}}
                    <div class="p-5 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 space-y-3 shadow-sm flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-purple-100 text-purple-700 dark:bg-purple-900/50 dark:text-purple-300 inline-block">INNOVATION</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-tight">Adopting globally competitive tech and modern smart tools.</p>
                        </div>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 pt-2 border-t border-slate-100 dark:border-slate-700">
                            <strong>Lived via:</strong> Smart Province, CamSur Uptown, TESDA digital learning.
                        </p>
                    </div>

                    {{-- Resilience --}}
                    <div class="p-5 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 space-y-3 shadow-sm flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300 inline-block">RESILIENCE</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-tight">Preparedness against climatic, economic, and health disruptions.</p>
                        </div>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 pt-2 border-t border-slate-100 dark:border-slate-700">
                            <strong>Lived via:</strong> PDRRMC training, evacuation hubs, El Verde programs.
                        </p>
                    </div>

                    {{-- Competitiveness --}}
                    <div class="p-5 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 space-y-3 shadow-sm flex flex-col justify-between sm:col-span-2 lg:col-span-1">
                        <div class="space-y-2">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-teal-100 text-teal-700 dark:bg-teal-900/50 dark:text-teal-300 inline-block">COMPETITIVENESS</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-tight">Elevating workforce skills and investment readiness on national scale.</p>
                        </div>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 pt-2 border-t border-slate-100 dark:border-slate-700">
                            <strong>Lived via:</strong> PEZA Special Economic Zone, DOLE/PESO excellence awards.
                        </p>
                    </div>
                </div>
            </section>

            {{-- ========================================== --}}
            {{-- 7. LEGAL FRAMEWORK (ACCORDION)             --}}
            {{-- ========================================== --}}
            <section x-data="{ activeAccordion: 1 }" class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Statutory Foundations</span>
                    <h2 class="text-2xl font-black text-slate-900 dark:text-white">Legal Framework & Supporting Rules</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Constitutional provisions, national laws, and judicial rulings authorizing provincial authority.</p>
                </div>

                <div class="space-y-3">

                    {{-- 1. RA 7160 --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 1 ? null : 1)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>Republic Act No. 7160 — Local Government Code of 1991</span>
                            <span x-text="activeAccordion === 1 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 1" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p><strong>Principal Statutory Foundation:</strong> Establishes basic provincial governance and local autonomy.</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li><strong>Section 16 (General Welfare Clause):</strong> Authorizes actions promoting public health, safety, ecological balance, and economic prosperity.</li>
                                <li><strong>Section 17 (Basic Services):</strong> Mandates devolved health, agricultural, infrastructure, and social welfare duties.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- 2. 1987 Constitution --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 2 ? null : 2)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>1987 Philippine Constitution — Article X (Local Government)</span>
                            <span x-text="activeAccordion === 2 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 2" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p>Establishes the fundamental principle of local autonomy, guaranteeing LGUs equitable shares in national taxes and regional planning power.</p>
                        </div>
                    </div>

                    {{-- 3. RA 10121 --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 3 ? null : 3)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>Republic Act No. 10121 — Philippine DRRM Act of 2010</span>
                            <span x-text="activeAccordion === 3 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 3" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p>Mandates proactive disaster risk reduction, emergency response councils, local DRRM offices, hazard mitigation, and climate resilience frameworks.</p>
                        </div>
                    </div>

                    {{-- 4. RA 11032 --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 4 ? null : 4)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>Republic Act No. 11032 — Ease of Doing Business Act</span>
                            <span x-text="activeAccordion === 4 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 4" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p>Reinforces service efficiency, strict processing timelines, Citizen's Charter enforcement, and zero-red-tape administrative accountability.</p>
                        </div>
                    </div>

                    {{-- 5. RA 7916 --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 5 ? null : 5)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>Republic Act No. 7916 — Special Economic Zone Act of 1995</span>
                            <span x-text="activeAccordion === 5 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 5" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p>Provides legal authorization for the PEZA-approved CamSur Uptown Special Economic Zone, driving foreign investments and local jobs.</p>
                        </div>
                    </div>

                    {{-- 6. Mandanas-Garcia Ruling --}}
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button @click="activeAccordion = (activeAccordion === 6 ? null : 6)" class="w-full p-4 text-left flex items-center justify-between bg-slate-50 dark:bg-slate-900/60 font-bold text-slate-900 dark:text-white text-sm">
                            <span>Mandanas-Garcia Supreme Court Ruling</span>
                            <span x-text="activeAccordion === 6 ? '−' : '+'" class="text-lg font-black text-indigo-600"></span>
                        </button>
                        <div x-show="activeAccordion === 6" x-collapse class="p-4 text-xs text-slate-600 dark:text-slate-300 space-y-2 border-t border-slate-200 dark:border-slate-700">
                            <p>Broadens the local government share in all national tax collections, enhancing provincial fiscal capacity for devolved health, infrastructure, and social programs.</p>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</x-guest-layout>
