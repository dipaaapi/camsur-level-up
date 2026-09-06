{{-- Travel Guide: How to Get to Camarines Sur --}}
<section class="relative overflow-hidden rounded-3xl border border-slate-200/80 bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-6 sm:p-10 shadow-xl text-white dark:border-slate-800">
    {{-- Decorative background glow --}}
    <div class="pointer-events-none absolute -right-16 -top-16 h-72 w-72 rounded-full bg-blue-500/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-16 -bottom-16 h-72 w-72 rounded-full bg-amber-500/10 blur-3xl"></div>

    <div class="relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-slate-800">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full bg-blue-500/10 border border-blue-500/30 px-3.5 py-1 text-xs font-bold uppercase tracking-wider text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Traveler's Guide</span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight text-white mt-3">
                    How to Get to Camarines Sur
                </h2>
                <p class="text-sm sm:text-base text-slate-300 font-normal mt-2 max-w-2xl">
                    Reaching the adventure capital of the Philippines is easy. Choose from direct domestic flights, scenic highway drives, or comfortable passenger buses.
                </p>
            </div>
            <div class="flex-shrink-0">
                <button id="travelGuideToggleBtn" onclick="toggleFullTravelGuide()"
                   class="inline-flex items-center gap-2.5 rounded-2xl bg-amber-400 hover:bg-amber-300 px-6 py-3.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-400/20 transition-all hover:scale-[1.02] active:scale-[0.98] cursor-pointer">
                    <span id="travelGuideBtnText">Full Travel Guide</span>
                    <svg id="travelGuideBtnIcon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Travel Mode Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8">
            {{-- Mode 1: By Air --}}
            <div class="flex flex-col justify-between rounded-2xl border border-slate-800 bg-slate-950/60 p-6 backdrop-blur transition-all duration-300 hover:border-blue-500/50 hover:bg-slate-950/80">
                <div>
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/20 text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-blue-500/10 px-3 py-1 text-[11px] font-bold text-blue-300 border border-blue-500/30">
                            ~45 Minutes
                        </span>
                    </div>
                    <h3 class="mt-4 text-lg font-black text-white uppercase tracking-tight">By Commercial Air</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-300 font-normal">
                        Fly directly from Manila (NAIA) to <strong>Naga Airport (WNP)</strong> located right in Pili, Camarines Sur. Daily flights are serviced by Cebu Pacific and Philippine Airlines.
                    </p>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-800/80 flex items-center justify-between text-[11px]">
                    <span class="text-slate-400">Destination: Pili / Naga Airport</span>
                    <span class="font-bold text-blue-400">Daily Flights</span>
                </div>
            </div>

            {{-- Mode 2: By Bus / Public Transport --}}
            <div class="flex flex-col justify-between rounded-2xl border border-slate-800 bg-slate-950/60 p-6 backdrop-blur transition-all duration-300 hover:border-emerald-500/50 hover:bg-slate-950/80">
                <div>
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20 text-emerald-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h8m-8 4h8m-8 4h8M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-[11px] font-bold text-emerald-300 border border-emerald-500/30">
                            ~8 to 10 Hours
                        </span>
                    </div>
                    <h3 class="mt-4 text-lg font-black text-white uppercase tracking-tight">By Public Bus</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-300 font-normal">
                        Multiple reputable bus lines operate executive, lazy-boy, and sleeper coaches from Metro Manila (PITX, Cubao, Pasay) directly to Naga City and Pili terminals.
                    </p>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-800/80 flex items-center justify-between text-[11px]">
                    <span class="text-slate-400">Peñafrancia, Philtranco, DLTB</span>
                    <span class="font-bold text-emerald-400">Day & Night Trips</span>
                </div>
            </div>

            {{-- Mode 3: By Private Vehicle --}}
            <div class="flex flex-col justify-between rounded-2xl border border-slate-800 bg-slate-950/60 p-6 backdrop-blur transition-all duration-300 hover:border-amber-500/50 hover:bg-slate-950/80">
                <div>
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-500/20 text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-amber-500/10 px-3 py-1 text-[11px] font-bold text-amber-300 border border-amber-500/30">
                            ~380 Kilometers
                        </span>
                    </div>
                    <h3 class="mt-4 text-lg font-black text-white uppercase tracking-tight">By Private Vehicle</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-300 font-normal">
                        Take the South Luzon Expressway (SLEX) and Quezon-Bicol scenic Maharlika Highway route into Camarines Sur with direct arterial access to Pili, Caramoan, and CWC.
                    </p>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-800/80 flex items-center justify-between text-[11px]">
                    <span class="text-slate-400">SLEX &amp; Maharlika Hwy</span>
                    <span class="font-bold text-amber-400">Scenic Road Trip</span>
                </div>
            </div>
        </div>

        {{-- Bottom Info Notice --}}
        <div class="mt-8 rounded-2xl bg-blue-950/40 border border-blue-800/40 p-4 sm:p-5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 font-bold text-sm">!</span>
                <p class="text-xs text-slate-300">
                    Planning routes, boat schedules to Caramoan, or local e-trike transfers? Expand the <strong class="text-amber-400">Full Travel Guide</strong> above for complete step-by-step instructions.
                </p>
            </div>
            <button onclick="toggleFullTravelGuide()" class="whitespace-nowrap text-xs font-bold text-amber-400 hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                <span>View Detailed Guide</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        {{-- Full In-Page Travel Guide (Expandable) --}}
        <div id="fullTravelGuidePanel" style="display:none;" class="mt-6 space-y-6" aria-hidden="true">

            {{-- Guide Header --}}
            <div class="rounded-2xl bg-slate-950/60 border border-slate-800 p-5 sm:p-6 backdrop-blur">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-400/20 text-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg font-black text-white uppercase tracking-tight">Complete Step-by-Step Travel Guide</h3>
                        <p class="mt-1 text-xs text-slate-400 leading-relaxed">Detailed instructions for every mode of transport — from Metro Manila to Pili, Naga City, CWC, and Caramoan. Fares and schedules are approximate and may vary seasonally.</p>
                    </div>
                </div>
            </div>

            {{-- SECTION 1: BY AIR --}}
            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 overflow-hidden backdrop-blur">
                <div class="flex items-center gap-3 bg-slate-800/60 border-b border-slate-800 px-5 py-4">
                    <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-blue-500/20 text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-white uppercase tracking-tight">Option 1 — By Commercial Air <span class="ml-2 rounded-full bg-blue-500/20 px-2.5 py-0.5 text-[10px] font-bold text-blue-300 border border-blue-500/30">Fastest · ~1 hr 20 min</span></h4>
                    </div>
                </div>
                <div class="p-5 sm:p-6 space-y-5">
                    <div class="space-y-3">
                        <p class="text-xs font-bold text-blue-300 uppercase tracking-wider">Step 1 — Book Your Flight</p>
                        <p class="text-xs text-slate-300 leading-relaxed">Book a domestic flight from <strong class="text-white">Ninoy Aquino International Airport (NAIA / MNL)</strong> to <strong class="text-white">Naga Airport (WNP)</strong>, located in Pili, Camarines Sur. The flight duration is approximately <strong class="text-blue-300">1 hour and 20 minutes</strong>.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-3">
                            <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                                <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">Cebu Pacific / Cebgo</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Operates multiple daily flights from NAIA Terminal 3. Most budget-friendly option. Book via their website or major booking platforms.</p>
                            </div>
                            <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                                <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">Philippine Airlines (PAL)</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Operates from NAIA Terminal 2. Full-service carrier with baggage allowance included. Book online or through authorized travel agents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-bold text-blue-300 uppercase tracking-wider">Step 2 — Arrive at Naga Airport (WNP)</p>
                        <p class="text-xs text-slate-300 leading-relaxed">Naga Airport is located in Pili, Camarines Sur — just minutes away from CWC and the Provincial Capitol. Upon arrival, you can proceed to your destination via the following local transport options:</p>
                        <ul class="mt-2 space-y-1.5">
                            <li class="flex items-start gap-2 text-[11px] text-slate-300">
                                <span class="mt-1 flex-shrink-0 h-1.5 w-1.5 rounded-full bg-blue-400"></span>
                                <span><strong class="text-white">Tricycle / E-Trike</strong> — Available at the airport exit. Short transfers to Pili town proper or CWC (~₱30–₱60).</span>
                            </li>
                            <li class="flex items-start gap-2 text-[11px] text-slate-300">
                                <span class="mt-1 flex-shrink-0 h-1.5 w-1.5 rounded-full bg-blue-400"></span>
                                <span><strong class="text-white">Jeepney to Naga City</strong> — Take a jeepney bound for Naga City from Pili terminal (~₱20–₱30, 20–30 min ride).</span>
                            </li>
                            <li class="flex items-start gap-2 text-[11px] text-slate-300">
                                <span class="mt-1 flex-shrink-0 h-1.5 w-1.5 rounded-full bg-blue-400"></span>
                                <span><strong class="text-white">Hired Taxi / GrabCar</strong> — Pre-booked ride-share services are available for point-to-point transfers.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-xl bg-slate-800/60 border border-slate-800 p-3.5">
                        <p class="text-[11px] text-blue-200 leading-relaxed"><strong class="text-amber-400">💡 Tip:</strong> Book flights at least 2–4 weeks in advance, especially during the Peñafrancia Festival (September) and summer season (March–May) for the best fares. Check airlines' official websites or Skyscanner / Airpaz for price comparisons.</p>
                    </div>
                </div>
            </div>

            {{-- SECTION 2: BY BUS --}}
            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 overflow-hidden backdrop-blur">
                <div class="flex items-center gap-3 bg-slate-800/60 border-b border-slate-800 px-5 py-4">
                    <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-emerald-500/20 text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h8m-8 4h8m-8 4h8M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-white uppercase tracking-tight">Option 2 — By Public Bus <span class="ml-2 rounded-full bg-emerald-500/20 px-2.5 py-0.5 text-[10px] font-bold text-emerald-300 border border-emerald-500/30">Budget-Friendly · 8–10+ Hours</span></h4>
                    </div>
                </div>
                <div class="p-5 sm:p-6 space-y-5">
                    <div class="space-y-3">
                        <p class="text-xs font-bold text-emerald-300 uppercase tracking-wider">Step 1 — Choose Your Departure Terminal in Metro Manila</p>
                        <p class="text-xs text-slate-300 leading-relaxed">Multiple terminals in Metro Manila serve buses bound for Naga City and Pili, Camarines Sur. Choose the one most accessible to you:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                                <p class="text-[11px] font-black text-emerald-300 uppercase tracking-wider mb-1">PITX Terminal</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Parañaque Integrated Terminal Exchange — located along Coastal Road, Parañaque. Most organized, air-conditioned terminal. Buses for Bicol depart from Bay 8.</p>
                            </div>
                            <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                                <p class="text-[11px] font-black text-emerald-300 uppercase tracking-wider mb-1">Cubao Terminal</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Located along EDSA, Quezon City. Multiple Bicol-bound bus lines operate here with frequent departures. Accessible via MRT-3 (Araneta Cubao Station).</p>
                            </div>
                            <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                                <p class="text-[11px] font-black text-emerald-300 uppercase tracking-wider mb-1">Pasay Terminal</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Near NAIA and MRT-3 EDSA Station. Convenient for travelers arriving at the airport. Several Bicol bus operators have offices here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-xs font-bold text-emerald-300 uppercase tracking-wider">Step 2 — Choose Your Bus Operator</p>
                        <div class="overflow-x-auto">
                            <table class="w-full text-[11px]">
                                <thead>
                                    <tr class="border-b border-slate-700">
                                        <th class="pb-2 pr-4 text-left font-black text-slate-300 uppercase tracking-wider">Bus Line</th>
                                        <th class="pb-2 pr-4 text-left font-black text-slate-300 uppercase tracking-wider">Terminal</th>
                                        <th class="pb-2 pr-4 text-left font-black text-slate-300 uppercase tracking-wider">Seat Types</th>
                                        <th class="pb-2 text-left font-black text-slate-300 uppercase tracking-wider">Destination</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-800/80">
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">Peñafrancia Tours</td>
                                        <td class="py-2.5 pr-4 text-slate-400">PITX, Cubao, Pasay</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Lazyboy, Sleeper</td>
                                        <td class="py-2.5 text-emerald-300">Naga City / Pili</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">DLTB Co.</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Cubao, Pasay</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Ordinary</td>
                                        <td class="py-2.5 text-emerald-300">Naga City</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">Philtranco</td>
                                        <td class="py-2.5 pr-4 text-slate-400">PITX, Pasay</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Lazyboy</td>
                                        <td class="py-2.5 text-emerald-300">Naga City / Pili</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">ALPS The Bus</td>
                                        <td class="py-2.5 pr-4 text-slate-400">PITX, Cubao</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Lazyboy</td>
                                        <td class="py-2.5 text-emerald-300">Naga City</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">Raymond Transportation</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Cubao</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Sleeper</td>
                                        <td class="py-2.5 text-emerald-300">Naga City / Caramoan</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 pr-4 font-bold text-white">Isarog Line (Bicol Isarog)</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Cubao, Pasay</td>
                                        <td class="py-2.5 pr-4 text-slate-400">Aircon, Lazyboy</td>
                                        <td class="py-2.5 text-emerald-300">Naga City</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-bold text-emerald-300 uppercase tracking-wider">Step 3 — Arrive at Naga City / Pili Terminal</p>
                        <p class="text-xs text-slate-300 leading-relaxed">Buses typically drop passengers at the <strong class="text-white">Naga City Bus Terminal</strong> (near SM City Naga) or at the <strong class="text-white">Pili Bus Terminal</strong>. From either terminal, local tricycles, jeepneys, and UV Express vans are available to reach your final destination.</p>
                    </div>
                    <div class="rounded-xl bg-slate-800/60 border border-slate-800 p-3.5 space-y-1.5">
                        <p class="text-[11px] text-emerald-200 leading-relaxed"><strong class="text-amber-400">💡 Tip:</strong> Book bus tickets online through the bus company's official social media page or authorized booking apps (e.g., 12Go.asia, BookAway) at least <strong class="text-white">1 week in advance</strong>, especially during holidays, Peñafrancia Festival, and summer break.</p>
                        <p class="text-[11px] text-emerald-200 leading-relaxed"><strong class="text-amber-400">⚠ Note:</strong> Travel time can extend to 10–12 hours during heavy traffic at Atimonan (Quezon) and Lupi-Sipocot area. Night trips (departing 7–10 PM) are popular as they avoid daytime traffic.</p>
                    </div>
                </div>
            </div>

            {{-- SECTION 3: BY PRIVATE VEHICLE --}}
            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 overflow-hidden backdrop-blur">
                <div class="flex items-center gap-3 bg-slate-800/60 border-b border-slate-800 px-5 py-4">
                    <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-amber-500/20 text-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-white uppercase tracking-tight">Option 3 — By Private Vehicle <span class="ml-2 rounded-full bg-amber-500/20 px-2.5 py-0.5 text-[10px] font-bold text-amber-300 border border-amber-500/30">Flexible · ~380 km · 7–9 Hours</span></h4>
                    </div>
                </div>
                <div class="p-5 sm:p-6 space-y-4">
                    <p class="text-xs font-bold text-amber-300 uppercase tracking-wider">Recommended Route: Manila → Pili / Naga City</p>
                    <ol class="space-y-3">
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 flex h-6 w-6 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 text-[11px] font-black">1</span>
                            <div>
                                <p class="text-[11px] font-bold text-white">Metro Manila → SLEX (South Luzon Expressway)</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Exit Metro Manila via the South Luzon Expressway (SLEX). Pass through Alabang Toll, Calamba, and continue to the STAR Tollway in Batangas.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 flex h-6 w-6 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 text-[11px] font-black">2</span>
                            <div>
                                <p class="text-[11px] font-bold text-white">STAR Tollway → Quezon Province (Maharlika Highway)</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Exit at Lipa City, take the route toward Lucena, then continue to the Maharlika Highway (Pan-Philippine Highway / AH26) passing through Gumaca, Atimonan, and Lopez.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 flex h-6 w-6 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 text-[11px] font-black">3</span>
                            <div>
                                <p class="text-[11px] font-bold text-white">Quezon → Camarines Sur (Bicol Region Entry)</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Continue along Maharlika Highway through Bondoc Peninsula and across to Ragay, Camarines Sur — marking your entry into the Bicol Region.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 flex h-6 w-6 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 text-[11px] font-black">4</span>
                            <div>
                                <p class="text-[11px] font-bold text-white">Sipocot → Pili → Naga City (Final Stretch)</p>
                                <p class="text-[11px] text-slate-400 leading-relaxed">Proceed through Lupi and Sipocot, then take the national road to Pili (Provincial Capitol and CWC) and Naga City. Total drive time is approximately <strong class="text-amber-300">7–9 hours</strong> depending on traffic.</p>
                            </div>
                        </li>
                    </ol>
                    <div class="rounded-xl bg-slate-800/60 border border-slate-800 p-3.5">
                        <p class="text-[11px] text-amber-200 leading-relaxed"><strong class="text-amber-400">💡 Tip:</strong> Fuel up before Atimonan as gas stations are sparse in parts of Quezon. Use Waze or Google Maps and set destination to <em>"Pili, Camarines Sur"</em>. Avoid driving during typhoon season (June–October) if possible; check PAGASA advisories before your trip.</p>
                    </div>
                </div>
            </div>

            {{-- SECTION 4: GETTING TO CARAMOAN --}}
            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 overflow-hidden backdrop-blur">
                <div class="flex items-center gap-3 bg-slate-800/60 border-b border-slate-800 px-5 py-4">
                    <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-violet-500/20 text-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-white uppercase tracking-tight">Bonus — Getting to Caramoan Peninsula <span class="ml-2 rounded-full bg-violet-500/20 px-2.5 py-0.5 text-[10px] font-bold text-violet-300 border border-violet-500/30">Island-Hopping Paradise</span></h4>
                    </div>
                </div>
                <div class="p-5 sm:p-6 space-y-5">
                    <p class="text-xs text-slate-300 leading-relaxed">Caramoan is a scenic coastal municipality famous for its pristine white sand beaches, dramatic karst formations, and lagoons — accessible from Naga City via two main routes:</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        {{-- Route A: Via Sabang Port (Sea Route) --}}
                        <div class="rounded-xl bg-slate-800/60 border border-slate-700/60 p-4 space-y-3">
                            <p class="text-xs font-black text-violet-300 uppercase tracking-wider">Route A — Via Sabang Port (Sea Route)</p>
                            <ol class="space-y-2.5">
                                <li class="flex items-start gap-2">
                                    <span class="flex-shrink-0 flex h-5 w-5 items-center justify-center rounded-full bg-violet-500/20 text-violet-300 text-[10px] font-black">1</span>
                                    <div>
                                        <p class="text-[11px] font-bold text-white">Naga City → Sabang Port</p>
                                        <p class="text-[11px] text-slate-400 leading-relaxed">From Naga Central Bus Terminal (near SM City Naga), board a van or jeepney bound for <strong class="text-white">Sabang, San Jose</strong>. Travel time: <strong class="text-violet-300">~1.5–2 hours</strong>. Fare: approximately <strong class="text-violet-300">₱100–₱150</strong>.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="flex-shrink-0 flex h-5 w-5 items-center justify-center rounded-full bg-violet-500/20 text-violet-300 text-[10px] font-black">2</span>
                                    <div>
                                        <p class="text-[11px] font-bold text-white">Sabang Port → Guijalo Port (by Boat)</p>
                                        <p class="text-[11px] text-slate-400 leading-relaxed">Passenger boats depart from <strong class="text-white">6:00 AM, running hourly until 11:00 AM</strong> (last trip). Boat ride to Guijalo Port takes approximately <strong class="text-violet-300">2 hours</strong>. Fare: approximately <strong class="text-violet-300">₱120 per person</strong>. You must sign the passenger manifest before boarding.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="flex-shrink-0 flex h-5 w-5 items-center justify-center rounded-full bg-violet-500/20 text-violet-300 text-[10px] font-black">3</span>
                                    <div>
                                        <p class="text-[11px] font-bold text-white">Guijalo Port → Town Center / Resort</p>
                                        <p class="text-[11px] text-slate-400 leading-relaxed">Pay the <strong class="text-white">Environmental Fee (~₱30)</strong> upon arrival at Guijalo Port. Take a tricycle to your resort or the town center. Tricycle fare: approximately <strong class="text-violet-300">₱300 per trip</strong> (shareable).</p>
                                    </div>
                                </li>
                            </ol>
                            <div class="rounded-lg bg-slate-950/60 border border-slate-800 p-2.5">
                                <p class="text-[10px] text-violet-200"><strong class="text-amber-400">⚠ Important:</strong> If you miss the 11:00 AM last boat, private boat charter costs ₱2,500–₱3,000+. Arrive at Sabang before 9:00 AM to be safe. Boats may be cancelled during rough seas (especially June–October).</p>
                            </div>
                        </div>

                        {{-- Route B: Direct Bus (Land Route) --}}
                        <div class="rounded-xl bg-slate-800/60 border border-slate-700/60 p-4 space-y-3">
                            <p class="text-xs font-black text-violet-300 uppercase tracking-wider">Route B — Direct Bus (Land Route) ✓ Recommended</p>
                            <ol class="space-y-2.5">
                                <li class="flex items-start gap-2">
                                    <span class="flex-shrink-0 flex h-5 w-5 items-center justify-center rounded-full bg-violet-500/20 text-violet-300 text-[10px] font-black">1</span>
                                    <div>
                                        <p class="text-[11px] font-bold text-white">Manila → Caramoan (Direct Bus)</p>
                                        <p class="text-[11px] text-slate-400 leading-relaxed">Bus companies such as <strong class="text-white">Raymond Transportation</strong> and <strong class="text-white">MRR</strong> now offer direct overnight buses from <strong class="text-white">Cubao</strong> to Caramoan town proper — no boat transfer required. Departs at night; arrives in the morning.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="flex-shrink-0 flex h-5 w-5 items-center justify-center rounded-full bg-violet-500/20 text-violet-300 text-[10px] font-black">2</span>
                                    <div>
                                        <p class="text-[11px] font-bold text-white">Caramoan Town → Your Resort</p>
                                        <p class="text-[11px] text-slate-400 leading-relaxed">From Caramoan town center, hire a tricycle or arrange a resort transfer to your specific beach accommodation in Barangay Paniman or nearby barangays.</p>
                                    </div>
                                </li>
                            </ol>
                            <div class="rounded-lg bg-slate-950/60 border border-slate-800 p-2.5">
                                <p class="text-[10px] text-emerald-200"><strong class="text-amber-400">✅ Advantage:</strong> No risk of missed boats, no dependency on sea conditions, and more convenient for families with heavy luggage. This route has become the preferred option for most travelers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SECTION 5: LOCAL TRANSPORT WITHIN CAMSUR --}}
            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-5 sm:p-6 backdrop-blur">
                <h4 class="text-sm font-black text-white uppercase tracking-tight mb-4">Getting Around Within Camarines Sur</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                        <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">🛺 Tricycle / E-Trike</p>
                        <p class="text-[11px] text-slate-400 leading-relaxed">The most common mode of transport for short-range trips within towns. Flag one down anywhere or arrange from your hotel. Fares start at ₱10–₱20 for short hops.</p>
                    </div>
                    <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                        <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">🚌 Jeepney</p>
                        <p class="text-[11px] text-slate-400 leading-relaxed">Intercity jeepney routes connect Naga City, Pili, Calabanga, and Libmanan. Inexpensive and frequent. Fares start at ₱13 (minimum LTFRB rate).</p>
                    </div>
                    <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                        <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">🚐 UV Express Van</p>
                        <p class="text-[11px] text-slate-400 leading-relaxed">Faster than jeepneys for longer inter-municipal routes. Departs when full. Useful for routes like Naga–Sabang and Naga–Goa.</p>
                    </div>
                    <div class="rounded-xl bg-slate-800 border border-slate-700/60 p-3.5">
                        <p class="text-[11px] font-black text-white uppercase tracking-wider mb-1">🚗 Hired Vehicle / GrabCar</p>
                        <p class="text-[11px] text-slate-400 leading-relaxed">Available in Naga City via Grab. For group travel, hiring a private multicab or van at your hotel is a flexible option for touring multiple attractions.</p>
                    </div>
                </div>
            </div>

            {{-- Close Guide Button --}}
            <div class="text-center pt-2">
                <button onclick="toggleFullTravelGuide()" class="inline-flex items-center gap-2 rounded-xl border border-slate-700 bg-slate-800 hover:bg-slate-700 px-5 py-2.5 text-xs font-bold text-slate-300 hover:text-white transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                    </svg>
                    Collapse Travel Guide
                </button>
            </div>

        </div>{{-- end fullTravelGuidePanel --}}
    </div>
</section>
