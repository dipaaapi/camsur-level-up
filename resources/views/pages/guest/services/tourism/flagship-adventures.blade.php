{{-- Premier Attractions: Vertical Bottom-to-Top Auto Carousel --}}
<div class="space-y-6">
    <div class="border-b border-slate-200 pb-4 dark:border-slate-800 flex items-center justify-between">
        <div>
            <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Premier Attractions</span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white uppercase tracking-tight">
                Flagship Centers of Adventure
            </h2>
        </div>
        {{-- Carousel Navigation Controls --}}
        <div class="flex items-center gap-2">
            <span id="verticalCarouselCounter" class="text-xs font-bold text-slate-400 mr-2">1 / 6</span>
            <button id="vPrevBtn" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 bg-white text-slate-700 shadow-sm transition hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-blue-600 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/>
                </svg>
            </button>
            <button id="vNextBtn" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 bg-white text-slate-700 shadow-sm transition hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-blue-600 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Swiper Vertical (Bottom to Top) Showcase --}}
    <div class="swiper premier-vertical-swiper rounded-3xl overflow-hidden shadow-xl" style="height: 520px; min-height: 520px;">
        <div class="swiper-wrapper">

            {{-- Slide 1: CamSur Watersports Complex (Palette: #fadc3f - Vibrant Sun Gold Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-3 shadow-2xl transition-all" style="background-color: #fadc3f;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-3 sm:p-5 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/cwc-background.jpg') }}" 
                                 alt="CamSur Watersports Complex" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #ffffff; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(255,255,255,0.2); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Watersports Capital
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Cadlan, Pili, Camarines Sur</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-slate-950">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="rounded-xl bg-slate-950/10 p-2 backdrop-blur-sm">
                                        <img src="{{ asset('img/services/tourism/logo/cwc.png') }}" alt="CWC Logo" class="h-12 w-auto object-contain filter drop-shadow">
                                    </div>
                                    <span class="rounded-full bg-slate-950 px-3 py-1 text-[11px] font-black uppercase tracking-wider shadow-sm" style="color: #fadc3f;">
                                        World-Class Cable Park
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black text-slate-950 tracking-tight">
                                    CamSur Watersports Complex (CWC)
                                </h3>
                                <p class="text-sm leading-relaxed font-semibold text-slate-900/90">
                                    The first world-class watersports complex in the Philippines and across Asia. Spanning six hectares with a premier 6-point cable ski system, it attracts riders, competitors, and spectators worldwide all year round.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-950/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://www.cwcwake.com" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-slate-950 px-4 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-900 hover:scale-[1.02]" style="color: #fadc3f;">
                                        Official Site
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-black uppercase tracking-wider text-slate-950">All-Season Open</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2: Pili Grove Golf Club (Palette: #226951 - Forest Golf Green Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-2 shadow-2xl transition-all" style="background-color: #226951;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-4 sm:p-6 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/grove-background.jpg') }}" 
                                 alt="Pili Grove Golf Club" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #34d399; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(52,211,153,0.3); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Golf &amp; Leisure
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Mt. Isarog Foothills, Pili</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-white">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="rounded-xl bg-white p-2 shadow-sm">
                                        <img src="{{ asset('img/services/tourism/logo/golf.png') }}" alt="Pili Grove Golf Logo" class="h-10 w-auto object-contain">
                                    </div>
                                    <span class="rounded-full px-3 py-1 text-[11px] font-black uppercase tracking-wider border" style="background-color: rgba(6,78,59,0.5); color: #6ee7b7; border-color: rgba(52,211,153,0.3);">
                                        9-Hole Championship
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black tracking-tight" style="color: #fff;">
                                    Pili Grove Golf Club
                                </h3>
                                <p class="text-sm leading-relaxed font-normal" style="color: #d1fae5;">
                                    A lush 9-hole golf course framed by the magnificent backdrop of Mount Isarog. Offering a relaxed social environment, top-tier greens, modern carts, and comprehensive golf facilities for all skill levels.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://www.piligrovegolfclub.com" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-emerald-400 px-4 py-2.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-md transition-all hover:bg-emerald-300 hover:scale-[1.02]">
                                        Book Tee Time
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]" style="color: #226951;">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-bold" style="color: #a7f3d0;">Open to Public</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3: CamSur Pickleball Club (Palette: #4baccf - Ocean Cyan Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-2 shadow-2xl transition-all" style="background-color: #4baccf;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-4 sm:p-6 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/pickleball_bg.jpg') }}" 
                                 alt="CamSur Pickleball Club" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #38bdf8; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(56,189,248,0.3); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Fastest Growing Sport
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Capitol Complex, Pili</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-slate-950">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="rounded-xl bg-slate-950/10 p-2 backdrop-blur-sm">
                                        <img src="{{ asset('img/services/tourism/logo/pickleball.png') }}" alt="Pickleball Logo" class="h-12 w-auto object-contain">
                                    </div>
                                    <span class="rounded-full bg-slate-950 px-3 py-1 text-[11px] font-black uppercase tracking-wider shadow-sm" style="color: #4baccf;">
                                        Pro-Standard Courts
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black text-slate-950 tracking-tight">
                                    CamSur Pickleball Club
                                </h3>
                                <p class="text-sm leading-relaxed font-semibold text-slate-900/90">
                                    Experience the world's fastest-growing racket sport on pro-standard courts right at the Provincial Capitol. Welcoming players of all ages for casual matches, clinics, and competitive tournaments.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-950/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://pickleball.camsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-slate-950 px-4 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-900 hover:scale-[1.02]" style="color: #4baccf;">
                                        Join the Action
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-black uppercase tracking-wider text-slate-950">Open Daily</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 4: Villa del Rey (Palette: #205096 - Royal Blue Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-2 shadow-2xl transition-all" style="background-color: #205096;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-4 sm:p-6 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/villa_pool.png') }}" 
                                 alt="Villa del Rey CamSur" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #60a5fa; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(96,165,250,0.3); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Luxury Suites &amp; Villas
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Cadlan, Pili, Camarines Sur</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-white">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="rounded-xl bg-white px-3 py-1.5 shadow-sm">
                                        <img src="{{ asset('img/services/tourism/logo/villa_del_rey.png') }}" alt="Villa del Rey Logo" class="h-9 w-auto object-contain">
                                    </div>
                                    <span class="rounded-full bg-blue-950/60 px-3 py-1 text-[11px] font-black uppercase tracking-wider text-blue-200 border border-blue-400/30">
                                        Premier Resort &amp; Spa
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black tracking-tight" style="color: #fff;">
                                    Villa del Rey
                                </h3>
                                <p class="text-sm leading-relaxed font-normal" style="color: #eff6ff;">
                                    An oasis of tranquility located right beside CWC. Offering premium private cabanas, tiki huts, modern hotel rooms, landscaped pools, and fine dining for families and corporate retreats.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-blue-300 px-4 py-2.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-md transition-all hover:bg-blue-200 hover:scale-[1.02]">
                                        Book Stay
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]" style="color: #205096;">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-bold" style="color: #bfdbfe;">Suites &amp; Cabins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 5: Gota Village Resort Caramoan (Palette: #5e99e1 - Sky Blue Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-2 shadow-2xl transition-all" style="background-color: #5e99e1;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-4 sm:p-6 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/caramoan_gota.jpg') }}" 
                                 alt="Gota Village Resort Caramoan" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #ffffff; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(255,255,255,0.2); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Eco-Luxury Island Gateway
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Gota Beach, Caramoan</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-white">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="rounded-xl bg-slate-950/80 p-2 shadow-sm">
                                        <img src="{{ asset('img/services/tourism/logo/gota.png') }}" alt="Gota Village Resort Logo" class="h-9 w-auto object-contain brightness-125">
                                    </div>
                                    <span class="rounded-full bg-slate-950/50 px-3 py-1 text-[11px] font-black uppercase tracking-wider text-blue-100 border border-white/20">
                                        Survivor Shoot Location
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black tracking-tight" style="color: #fff;">
                                    Gota Village Resort Caramoan
                                </h3>
                                <p class="text-sm leading-relaxed font-normal" style="color: #eff6ff;">
                                    Nestled between dramatic karst cliffs and the turquoise waters of Caramoan. A legendary eco-resort that hosted the hit TV series Survivor, offering wooden cabins, beach front dining, and island-hopping adventures.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-slate-950 px-4 py-2.5 text-xs font-black uppercase tracking-wider text-white shadow-md transition-all hover:bg-slate-900 hover:scale-[1.02]">
                                        Explore Gota
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]" style="color: #5e99e1;">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-bold" style="color: #dbeafe;">Caramoan Peninsula</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 6: Ka Fuerte Sports Complex (Palette: #c2410c / #ea580c - Athletic Crimson / Vibrant Energy Shaded) --}}
            <div class="swiper-slide h-full">
                <div class="h-full rounded-3xl p-2 shadow-2xl transition-all" style="background-color: #be123c;">
                    <div class="grid h-full grid-cols-1 lg:grid-cols-12 gap-6 p-4 sm:p-6 items-center">
                        <div class="relative h-56 sm:h-72 lg:h-full lg:col-span-7 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/services/tourism/background/kafuerte_sports.jpg') }}" 
                                 alt="Ka Fuerte Sports Complex" 
                                 class="h-full w-full object-cover">
                            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 40%, transparent 100%);"></div>
                            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                <span style="background-color: #0f172a; color: #f43f5e; padding: 4px 14px; border-radius: 9999px; font-weight: 900; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid rgba(244,63,94,0.3); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);">
                                    Olympic-Class Sports Hub
                                </span>
                                <span class="text-xs font-bold text-slate-100" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Capitol Grounds, Cadlan, Pili</span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-4 px-2 sm:px-4 text-white">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 rounded-xl bg-white/10 px-3 py-1.5 backdrop-blur-sm border border-white/20">
                                        <span class="text-xl">🏟️</span>
                                        <span class="text-xs font-black uppercase tracking-wider text-rose-100">Ka Fuerte Arena</span>
                                    </div>
                                    <span class="rounded-full bg-rose-950/70 px-3 py-1 text-[11px] font-black uppercase tracking-wider text-rose-200 border border-rose-400/40">
                                        Multi-Sport Arena
                                    </span>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-black tracking-tight" style="color: #fff;">
                                    Ka Fuerte Sports Complex
                                </h3>
                                <p class="text-sm leading-relaxed font-normal" style="color: #ffe4e6;">
                                    A premier multi-sport venue featuring an Olympic-sized swimming pool, covered arena, athletics track &amp; field stadium, and tournament courts. The proud home of regional championships, Palarong Bicol, and youth athletic excellence.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center justify-between gap-2">
                                <div class="flex items-center gap-2">
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-rose-200 px-4 py-2.5 text-xs font-black uppercase tracking-wider text-slate-950 shadow-md transition-all hover:bg-white hover:scale-[1.02]">
                                        Explore Complex
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <a href="https://visitcamsur.com/" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1.5 rounded-xl bg-white px-3.5 py-2.5 text-xs font-black uppercase tracking-wider shadow-md transition-all hover:bg-slate-100 hover:scale-[1.02]" style="color: #be123c;">
                                        VisitCamSur &rarr;
                                    </a>
                                </div>
                                <span class="text-xs font-bold" style="color: #fecdd3;">Olympic Facilities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
