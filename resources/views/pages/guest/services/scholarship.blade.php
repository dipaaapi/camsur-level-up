<x-guest-layout>
    <x-slot name="title">KaFuerte Scholarship Program | Provincial Government of Camarines Sur</x-slot>

    {{-- 🏛️ Unified Official Provincial Hero Banner (Always Placed First) --}}
    <x-hero-banner
        badge-text="PROVINCIAL EDUCATIONAL ASSISTANCE & SCHOLARSHIP INITIATIVE"
        title="KAFUERTE SCHOLARSHIP PROGRAM"
        description="A priority educational program spearheaded by Gov. Lray Villafuerte in partnership with Serbisyong KaFuerte and Bicol Saro Party-List. Providing financial aid and equal academic opportunities to thousands of deserving students across all five congressional districts of Camarines Sur."
    />

    {{-- Main Container with Clean Theme matching all Official Pages --}}
    <div class="min-h-screen bg-slate-50 py-10 transition-colors duration-300 dark:bg-slate-900 sm:py-14 lg:py-18">
        <div class="mx-auto max-w-7xl space-y-10 sm:space-y-14 lg:space-y-16 px-4 sm:px-6 lg:px-8">

            {{-- 🖼️ DEDICATED CARD PARA SA SCHOLARSHIP BANNER IMAGE (Full uncropped image display) --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 sm:p-4 shadow-lg transition-all duration-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800">
                <div class="overflow-hidden rounded-2xl bg-slate-900/5 dark:bg-slate-950/40">
                    <img src="{{ asset('img/services/scholarship/kafuerte-scholarship-banner.png') }}"
                         alt="KaFuerte Scholarship Program - Gov. Lray Villafuerte, Serbisyong KaFuerte, Bicol Saro Party-List"
                         class="w-full h-auto block object-contain object-center rounded-2xl transition-transform duration-500 hover:scale-[1.005]">
                </div>
            </div>

            {{-- 📜 DEDICATED PROGRAM OVERVIEW & QUICK ACTIONS CARD --}}
            <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 lg:p-10 shadow-md dark:border-slate-700 dark:bg-slate-800">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-2.5">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black bg-amber-400 text-slate-950 uppercase tracking-wider shadow-sm">
                                Active Priority Program
                            </span>
                            <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">
                                5 Congressional Districts Coverage &bull; Academic Year 2024–2025
                            </span>
                        </div>
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 dark:text-white leading-tight">
                            Provincial Educational Assistance &amp; Subsidies
                        </h2>
                        <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 max-w-4xl leading-relaxed">
                            Serving qualified high school, collegiate, and vocational students across Camarines Sur to ensure that no aspiring youth is left behind in pursuing higher education. Spearheaded under Serbisyong KaFuerte and Bicol Saro Party-List.
                        </p>
                    </div>
                    <div class="flex flex-wrap sm:flex-nowrap gap-3 shrink-0 w-full lg:w-auto">
                        <a href="#requirements" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#122251] hover:bg-[#0d1a3e] text-white font-bold px-6 py-3.5 rounded-2xl shadow transition text-xs uppercase tracking-wider">
                            <span>Requirements Checklist</span> &darr;
                        </a>
                        <a href="#district-pages" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black px-6 py-3.5 rounded-2xl shadow transition text-xs uppercase tracking-wider">
                            <span>District Facebook Pages</span> &darr;
                        </a>
                    </div>
                </div>
            </div>

            {{-- 4 Metric Highlight Cards --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-6 lg:gap-8">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md dark:border-slate-700 dark:bg-slate-800">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Jurisdiction</p>
                        <p class="mt-2 text-2xl sm:text-3xl font-black text-[#122251] dark:text-amber-400">5 Districts</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">Covering 35 municipalities &amp; 2 cities</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md dark:border-slate-700 dark:bg-slate-800">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Beneficiaries</p>
                        <p class="mt-2 text-2xl sm:text-3xl font-black text-amber-600 dark:text-amber-300">Thousands</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">Scholars assisted per semester</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md dark:border-slate-700 dark:bg-slate-800">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Academic Levels</p>
                        <p class="mt-2 text-2xl sm:text-3xl font-black text-emerald-600 dark:text-emerald-400">College &amp; SHS</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">State Universities, Colleges &amp; TVET</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md dark:border-slate-700 dark:bg-slate-800">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Assistance Mode</p>
                        <p class="mt-2 text-2xl sm:text-3xl font-black text-[#122251] dark:text-blue-300">Direct Subsidy</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">Direct cash &amp; cheque payroll distribution</p>
                    </div>
                </div>
            </div>

            {{-- 📋 Eligibility Section --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 lg:p-10 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                <div class="border-b border-slate-100 pb-5 dark:border-slate-700 mb-8">
                    <span class="inline-block text-xs font-black uppercase tracking-wider text-[#122251] dark:text-amber-400">
                        Qualifications &amp; Criteria
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-1">
                        Who Can Apply for the Scholarship?
                    </h3>
                    <p class="text-sm text-slate-600 dark:text-slate-300 mt-1.5">
                        Applicants must satisfy the following core qualification standards prior to submitting application documents:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <div class="w-10 h-10 rounded-xl bg-[#122251] text-white flex items-center justify-center font-black text-base mb-4 shadow-sm">1</div>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base">Bona Fide CamSur Resident</h4>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Must be a registered voter or legitimate permanent resident of any municipality or city within the Province of Camarines Sur.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <div class="w-10 h-10 rounded-xl bg-amber-400 text-slate-950 flex items-center justify-center font-black text-base mb-4 shadow-sm">2</div>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base">Currently Enrolled</h4>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Must be actively enrolled in an accredited higher educational institution, state university, college, or senior high school for the ongoing academic term.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-black text-base mb-4 shadow-sm">3</div>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base">Demonstrated Financial Need</h4>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Priority is extended to students from low-income or indigent households, children of farmers, fisherfolk, single parents, or displaced workers.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 📑 Documentary Requirements Section --}}
            <div id="requirements" class="space-y-8">
                <div class="border-b border-slate-200 pb-4 dark:border-slate-700">
                    <span class="text-xs font-black uppercase tracking-wider text-amber-600 dark:text-amber-400">Documentary Checklist</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">Required Documents</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-300 mt-1">
                        Please prepare complete original copies and photocopies for verification by the Provincial Scholarship Office:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    {{-- New Applicants Card --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                        <div class="flex items-center gap-3 pb-4 border-b border-slate-100 dark:border-slate-700 mb-6">
                            <span class="w-10 h-10 rounded-xl bg-[#122251] text-white flex items-center justify-center font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            </span>
                            <div>
                                <h4 class="font-black text-lg text-slate-900 dark:text-white">New Applicants (First-Time Application)</h4>
                                <p class="text-xs text-slate-500 dark:text-slate-400">For students applying to the scholarship program for the first time</p>
                            </div>
                        </div>

                        <ul class="space-y-4 text-xs sm:text-sm text-slate-700 dark:text-slate-300">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Certificate of Enrollment (COE) / Registration Form:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Officially validated and signed by the School Registrar or College Dean.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Certified True Copy of Grades / Transcript:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Grades from the previous academic semester or certified Form 138/137 for fresh graduates.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Barangay Certificate of Indigency &amp; Residency:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Proof of residence within Camarines Sur and family socio-economic status.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Valid School ID &amp; Parent/Guardian Government ID:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Accompanied by two (2) recent 2x2 colored ID photographs of the applicant.</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Continuing Scholars Card --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                        <div class="flex items-center gap-3 pb-4 border-b border-slate-100 dark:border-slate-700 mb-6">
                            <span class="w-10 h-10 rounded-xl bg-amber-400 text-slate-950 flex items-center justify-center font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            </span>
                            <div>
                                <h4 class="font-black text-lg text-slate-900 dark:text-white">Continuing Scholars (Renewal)</h4>
                                <p class="text-xs text-slate-500 dark:text-slate-400">For existing scholars updating their term records for continuing grant</p>
                            </div>
                        </div>

                        <ul class="space-y-4 text-xs sm:text-sm text-slate-700 dark:text-slate-300">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Current Semester Certificate of Enrollment (COE):</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Proof of continuous active matriculation for the ongoing school term.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Official Grade Slip / True Copy of Grades:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Verification that all enrolled subjects from the previous semester were successfully passed.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Validated Scholar ID / Payroll Control Number:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Reference control number assigned during previous distribution cycles.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300 flex items-center justify-center shrink-0 mt-0.5 font-black text-xs">&check;</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white">Photocopy of Valid School ID:</strong>
                                    <span class="block text-slate-600 dark:text-slate-400 text-xs mt-0.5">Validated for the active school term.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- 🧭 Step-by-Step Application & Payout Flow --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 lg:p-10 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                <div class="border-b border-slate-100 pb-5 dark:border-slate-700 mb-8">
                    <span class="text-xs font-black uppercase tracking-wider text-[#122251] dark:text-amber-400">Step-by-Step Guide</span>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-1">
                        4-Step Application &amp; Distribution Process
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-black bg-[#122251] text-white px-3 py-1 rounded-md shadow-sm">STEP 01</span>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base mt-4">Monitor Official Schedules</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Stay updated with intake announcements posted on the official Province of Camarines Sur Facebook page and your district coordinators.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-black bg-[#122251] text-white px-3 py-1 rounded-md shadow-sm">STEP 02</span>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base mt-4">Submit Documents</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Bring complete documentary requirements to the Provincial Scholarship Office in Pili or designated district satellite submission venues.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-black bg-[#122251] text-white px-3 py-1 rounded-md shadow-sm">STEP 03</span>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base mt-4">Verification &amp; Evaluation</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            The Scholarship Committee verifies academic records, enrollment legitimacy, and residency credentials.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-black bg-amber-400 text-slate-950 px-3 py-1 rounded-md shadow-sm">STEP 04</span>
                        <h4 class="font-bold text-slate-900 dark:text-white text-base mt-4">Financial Grant Payout</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                            Receive your educational financial assistance during designated distribution payouts at the Fuerte Sports Complex or in your municipality.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 🏛️ Active Partnered Facebook District Pages Section --}}
            <div id="district-pages" class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 lg:p-10 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                <div class="border-b border-slate-100 pb-5 dark:border-slate-700 mb-8">
                    <span class="inline-block text-xs font-black uppercase tracking-wider text-blue-600 dark:text-amber-400">
                        Local District Coordination &amp; Updates
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-1">
                        Active Partnered Facebook District Pages
                    </h3>
                    <p class="text-sm text-slate-600 dark:text-slate-300 mt-1.5">
                        Follow and directly message your respective district coordinators for specific municipality schedules, payroll dates, and inquiries:
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    {{-- District 1 --}}
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 flex flex-col justify-between hover:border-blue-400 transition shadow-sm hover:shadow dark:border-slate-700 dark:bg-slate-900/60">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-9 h-9 rounded-xl bg-[#122251] text-amber-300 font-black text-xs flex items-center justify-center shadow-sm">
                                    D1
                                </span>
                                <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-900/50 dark:text-emerald-300 px-2 py-0.5 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                </span>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base">First District</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                                Del Gallego, Ragay, Lupi, Sipocot, Cabusao
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700">
                            <a href="https://www.facebook.com/profile.php?id=61582290100474"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#122251] hover:bg-blue-900 text-white font-bold text-xs py-2.5 px-3 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current text-white" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <span>Visit 1st District Page</span>
                            </a>
                        </div>
                    </div>

                    {{-- District 2 --}}
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 flex flex-col justify-between hover:border-blue-400 transition shadow-sm hover:shadow dark:border-slate-700 dark:bg-slate-900/60">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-9 h-9 rounded-xl bg-[#122251] text-amber-300 font-black text-xs flex items-center justify-center shadow-sm">
                                    D2
                                </span>
                                <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-900/50 dark:text-emerald-300 px-2 py-0.5 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                </span>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base">Second District</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                                Libmanan, Minalabac, Pamplona, Pasacao, San Fernando, Milaor
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700">
                            <a href="https://www.facebook.com/profile.php?id=61582594490373"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#122251] hover:bg-blue-900 text-white font-bold text-xs py-2.5 px-3 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current text-white" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <span>Visit 2nd District Page</span>
                            </a>
                        </div>
                    </div>

                    {{-- District 3 --}}
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 flex flex-col justify-between hover:border-blue-400 transition shadow-sm hover:shadow dark:border-slate-700 dark:bg-slate-900/60">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-9 h-9 rounded-xl bg-[#122251] text-amber-300 font-black text-xs flex items-center justify-center shadow-sm">
                                    D3
                                </span>
                                <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-900/50 dark:text-emerald-300 px-2 py-0.5 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                </span>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base">Third District</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                                Calabanga, Bombon, Magarao, Canaman, Camaligan, Ocampo, Pili
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700">
                            <a href="https://www.facebook.com/profile.php?id=61582849520018"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#122251] hover:bg-blue-900 text-white font-bold text-xs py-2.5 px-3 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current text-white" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <span>Visit 3rd District Page</span>
                            </a>
                        </div>
                    </div>

                    {{-- District 4 --}}
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 flex flex-col justify-between hover:border-blue-400 transition shadow-sm hover:shadow dark:border-slate-700 dark:bg-slate-900/60">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-9 h-9 rounded-xl bg-[#122251] text-amber-300 font-black text-xs flex items-center justify-center shadow-sm">
                                    D4
                                </span>
                                <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-900/50 dark:text-emerald-300 px-2 py-0.5 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                </span>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base">Fourth District</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">
                                Partido Area: Goa, San Jose, Lagonoy, Sagñay, Tigaon, Tinambac, Siruma, Caramoan, Presentacion, Garchitorena
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700">
                            <a href="https://www.facebook.com/profile.php?id=61582630671691"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#122251] hover:bg-blue-900 text-white font-bold text-xs py-2.5 px-3 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current text-white" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <span>Visit 4th District Page</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 🏢 Provincial Scholarship Office Contacts --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 lg:p-10 shadow-sm dark:border-slate-700 dark:bg-slate-800">
                <div class="border-b border-slate-100 pb-5 dark:border-slate-700 mb-8">
                    <span class="text-xs font-black uppercase tracking-wider text-[#122251] dark:text-amber-400">Office &amp; Location</span>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-1">
                        Provincial Scholarship Office
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-8 text-left">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400 block">Official Headquarters</span>
                        <p class="font-bold text-slate-900 dark:text-white mt-2 text-sm">Provincial Capitol Complex</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">Cadlan, Pili, Camarines Sur, 4418, Philippines</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400 block">Official Social Media</span>
                        <p class="font-bold text-slate-900 dark:text-white mt-2 text-sm">Province of Camarines Sur</p>
                        <a href="https://www.facebook.com/ProvinceofCamSur/" target="_blank" rel="noopener noreferrer" class="text-xs text-[#122251] dark:text-amber-400 font-bold hover:underline mt-1.5 inline-block">
                            facebook.com/ProvinceofCamSur &rarr;
                        </a>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-900/50">
                        <span class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400 block">Public Service Hours</span>
                        <p class="font-bold text-slate-900 dark:text-white mt-2 text-sm">Monday to Friday</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5">8:00 AM – 5:00 PM (Except Philippine Public Holidays)</p>
                    </div>
                </div>

                <div class="mt-8 pt-5 border-t border-slate-100 dark:border-slate-700 flex flex-wrap items-center justify-between gap-4">
                    <p class="text-xs text-slate-500 dark:text-slate-400">
                        Have further questions regarding scholarships or provincial public services?
                    </p>
                    <a href="{{ route('faq') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#122251] dark:text-amber-400 hover:underline">
                        <span>Visit the Interactive Help Center &amp; FAQs</span> &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
