<section id="revolution" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="scroll-mt-28 pt-4 space-y-10 transition-all duration-700">

    <div class="max-w-3xl">
        <span class="text-xs font-bold uppercase tracking-widest text-rose-600 dark:text-rose-400">Resistance &amp; Historical Pillars</span>
        <h2 class="mt-2 text-3xl font-black text-slate-900 dark:text-white">CamSur's Pillars: Revolution, Faith, and Heroism</h2>
        <p class="my-3 pb-5 text-sm leading-7 text-slate-600 dark:text-slate-300 sm:text-base">
            From the heroic sacrifice of the Quince Martires to the armed uprising of Angeles and Plazo and the milestone consecration of Bishop Jorge Barlin, the leaders of Camarines Sur stood as pillars of the nation.
        </p>
    </div>

    {{-- FEATURED HERO SECTION: Bishop Jorge Barlin --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-10 shadow-sm dark:border-slate-700 dark:bg-slate-800">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7 space-y-4">
                <div class="inline-flex items-center gap-2 rounded-full bg-blue-100 px-3 py-1 text-xs font-bold uppercase tracking-wider text-blue-800 dark:bg-blue-900/50 dark:text-blue-300">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>Ecclesiastical Pioneer</span>
                </div>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">Bishop Jorge Barlin</h3>
                <p class="text-base font-bold text-blue-600 dark:text-blue-400">First Filipino Catholic Bishop in the Philippines (1906)</p>
                <div class="space-y-3 text-sm leading-7 text-slate-600 dark:text-slate-300">
                    <p>In 1906, Bishop Jorge Barlin received Episcopal consecration as the very first native Filipino Catholic Bishop in the Philippines.</p>
                    <p>Bishop Barlin was born and raised in Baao, Camarines Sur. His contribution to the Philippine Catholic Church was monumental, marking the first time in over 300 years of Spanish reign that a Filipino attained the office of bishop.</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400 italic">His steadfast loyalty to the church and refusal to surrender church properties during turbulent political times preserved ecclesiastical heritage in Ambos Camarines.</p>
                </div>
            </div>

            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                <div class="flex flex-col justify-between rounded-2xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-700 dark:bg-slate-900/50 text-center shadow-sm">
                    <div class="flex h-56 items-center justify-center overflow-hidden rounded-xl bg-white p-2 dark:bg-slate-800">
                        <img 
                            src="{{ asset('img/about/province-history/Bishop Jorge Barlin.png') }}" 
                            alt="Bishop Jorge Barlin portrait" 
                            class="max-h-full max-w-full object-contain"
                            loading="lazy"
                        />
                    </div>
                    <div class="mt-3">
                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Bishop Jorge Barlin</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Archival Portrait &amp; Signature</p>
                    </div>
                </div>
                <div class="flex flex-col justify-between rounded-2xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-700 dark:bg-slate-900/50 text-center shadow-sm">
                    <div class="flex h-56 items-center justify-center overflow-hidden rounded-xl bg-white p-2 dark:bg-slate-800">
                        <img 
                            src="{{ asset('img/about/province-history/Barlin Park.png') }}" 
                            alt="Barlin Park Baao" 
                            class="max-h-full max-w-full object-contain rounded-lg"
                            loading="lazy"
                        />
                    </div>
                    <div class="mt-3">
                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Barlin National Park</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Memorial Shrine in Baao</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TWO COLUMN PILLARS: Elias Angeles & Felix Plazo AND The 15 Bicol Martyrs --}}
    <div class="mt-10 sm:mt-12 grid grid-cols-1 items-stretch gap-8 lg:grid-cols-2">
        
        {{-- Elias Angeles & Felix Plazo Card --}}
        <article class="flex flex-col justify-between rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-rose-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-rose-750">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-rose-100 px-3 py-1 text-xs font-bold uppercase tracking-wider text-rose-800 dark:bg-rose-900/50 dark:text-rose-300">
                        <span class="h-1.5 w-1.5 rounded-full bg-rose-600"></span>
                        <span>September 17–18, 1898</span>
                    </span>
                    <span class="text-[11px] font-semibold text-slate-400 dark:text-slate-500">Armed Uprising</span>
                </div>

                <h3 class="mt-4 text-2xl font-black text-slate-900 dark:text-white sm:text-3xl">Elias Angeles &amp; Felix Plazo</h3>
                <p class="mt-1 text-xs font-bold text-rose-600 dark:text-rose-400">Liberation of Ambos Camarines from Spanish Rule</p>

                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">
                    Sina Elias Angeles at Felix Plazo ay mga pinunong rebolusyonaryo na nanguna sa makasaysayang pag-aalsa ng Guardia Civil sa Nueva Caceres. Sa kanilang matapang na pamumuno, nagkaisa ang mga mandirigmang Bicolano upang lupigin ang mga puwersang Espanyol. Nagtapos ang labanan sa pagsuko ni Gobernador Vicente Zaidin, na ganap na nagpalaya sa Camarines nang walang dayuhang tulong.
                </p>
            </div>

            <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200/80 bg-gradient-to-b from-slate-50 via-slate-100/50 to-slate-100 p-4 dark:border-slate-700 dark:from-slate-900/60 dark:to-slate-900/90">
                <div class="flex h-64 sm:h-72 items-center justify-center overflow-hidden">
                    <img 
                        src="{{ asset('img/about/province-history/Elias Angeles Felix Plazo.png') }}" 
                        alt="Elias Angeles and Felix Plazo monument" 
                        class="h-full w-auto max-w-full object-contain drop-shadow-lg transition-transform duration-300 hover:scale-105"
                        loading="lazy"
                    />
                </div>
                <div class="mt-3 flex items-center justify-between border-t border-slate-200/80 pt-3 dark:border-slate-700">
                    <div>
                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Monumento Nina Angeles at Plazo</p>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Naga City Heritage District</p>
                    </div>
                    <span class="rounded-lg bg-white px-2.5 py-1 text-[11px] font-bold text-slate-700 shadow-sm dark:bg-slate-800 dark:text-slate-300">
                        1898
                    </span>
                </div>
            </div>
        </article>

        {{-- The 15 Bicol Martyrs (Quince Martires) Card --}}
        <article class="flex flex-col justify-between rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-amber-750">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-100 px-3 py-1 text-xs font-bold uppercase tracking-wider text-amber-800 dark:bg-amber-900/50 dark:text-amber-300">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-600"></span>
                        <span>January 4, 1897</span>
                    </span>
                    <span class="text-[11px] font-semibold text-slate-400 dark:text-slate-500">National Sacrifice</span>
                </div>

                <h3 class="mt-4 text-2xl font-black text-slate-900 dark:text-white sm:text-3xl">The 15 Bicol Martyrs (Quince Martires)</h3>
                <p class="mt-1 text-xs font-bold text-amber-600 dark:text-amber-400">Ilustrados, Civic Leaders &amp; Priests of Camarines</p>

                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">
                    Ang <em>Quince Martires</em> ay binubuo ng 15 dakilang Bicolano — mga pari, propesyonal, negosyante, at manggagawa mula sa Camarines na lumaban para sa kalayaan. Noong Enero 4, 1897, limang araw matapos bitayin si Dr. Jose Rizal, labing-isa sa kanila ang binaril sa Bagumbayan (Luneta), habang ang apat ay ipinatapon sa penal colony sa Fernando Po, Kanlurang Africa.
                </p>
            </div>

            <div class="mt-6 space-y-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    {{-- Monument Photo Card --}}
                    <div class="flex flex-col justify-between rounded-2xl border border-slate-200/80 bg-slate-50 p-3 dark:border-slate-700 dark:bg-slate-900/60 shadow-sm">
                        <div class="flex h-44 sm:h-48 items-center justify-center overflow-hidden rounded-xl bg-white p-2 shadow-inner dark:bg-slate-800">
                            <img 
                                src="{{ asset('img/about/province-history/15 Bicol Martyrs.png') }}" 
                                alt="The Quince Martires Monument" 
                                class="max-h-full max-w-full object-contain"
                                loading="lazy"
                            />
                        </div>
                        <div class="mt-2.5 text-center">
                            <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Plaza Quince Martires</p>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Memorial Shrine sa Naga City</p>
                        </div>
                    </div>

                    {{-- Exiled Photo Card --}}
                    <div class="flex flex-col justify-between rounded-2xl border border-slate-200/80 bg-slate-50 p-3 dark:border-slate-700 dark:bg-slate-900/60 shadow-sm">
                        <div class="flex h-44 sm:h-48 items-center justify-center overflow-hidden rounded-xl bg-white p-2 shadow-inner dark:bg-slate-800">
                            <img 
                                src="{{ asset('img/about/province-history/Exiled.png') }}" 
                                alt="Exiled Martyrs Fernando Po" 
                                class="max-h-full max-w-full object-contain"
                                loading="lazy"
                            />
                        </div>
                        <div class="mt-2.5 text-center">
                            <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Ipinatapon sa Africa</p>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Isla ng Fernando Po (Equatorial Guinea)</p>
                        </div>
                    </div>
                </div>

                {{-- Commemorative Note Box --}}
                <div class="flex items-start gap-3 rounded-2xl border border-amber-200/80 bg-gradient-to-r from-amber-50 to-orange-50/60 p-3.5 text-xs text-amber-950 dark:border-amber-900/50 dark:bg-gradient-to-r dark:from-amber-950/40 dark:to-orange-950/20 dark:text-amber-200">
                    <div class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-amber-500 text-white">
                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    </div>
                    <p class="leading-relaxed">
                        <strong class="font-bold">Araw ng Paggunita:</strong> Ipinagdiriwang tuwing <span class="font-bold underline decoration-amber-500 decoration-2">Enero 4</span> bilang opisyal na Provincial Special Non-Working Holiday sa Camarines Sur bilang pagpupugay sa kanilang sakripisyo.
                    </p>
                </div>
            </div>
        </article>
    </div>
</section>