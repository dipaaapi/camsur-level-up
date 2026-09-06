{{-- ========================================== --}}
{{-- 6. STATUTORY & LEGAL FRAMEWORK             --}}
{{-- ========================================== --}}
<section x-data="{ activeAccordion: 1 }" class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
    <div>
        <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Statutory Foundations</span>
        <h2 class="text-2xl font-black text-slate-900 dark:text-white">Legal Framework &amp; Supporting Rules</h2>
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
                <p>Provides legal authorization for designated special economic zones, driving foreign investments and local employment.</p>
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
