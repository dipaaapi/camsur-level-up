<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'guest',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'variant' => 'guest',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>


<header x-data="{
            open: false,
            scrolled: false,
            transparencyOpen: false,
            aboutOpen: false,
            servicesOpen: false,
            timeOnly: '',
            dateOnly: '',
            updateClock() {
                const now = new Date();
                // Philippine Standard Time (PST - Asia/Manila)
                const timeOptions = {
                    timeZone: 'Asia/Manila',
                    hour: 'numeric',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                };
                const dateOptions = {
                    timeZone: 'Asia/Manila',
                    month: 'long',
                    day: 'numeric',
                    year: 'numeric'
                };
                this.timeOnly = now.toLocaleTimeString('en-US', timeOptions);
                this.dateOnly = now.toLocaleDateString('en-US', dateOptions);
            }
        }"
        x-init="updateClock(); setInterval(() => updateClock(), 1000);"
        @scroll.window="scrolled = (window.scrollY > 30)"
        class="sticky top-0 z-50 transition-all duration-300">

    
    <div style="background-color: #141414f2;"
         :class="scrolled ? 'py-1 text-[11px]' : 'py-1.5 text-xs'"
         class="relative z-50 text-slate-200 border-b border-white/10 backdrop-blur-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center relative">

            
            <div class="flex items-center gap-2.5 z-10">
                <a href="https://www.gov.ph" target="_blank" rel="noopener noreferrer" class="font-extrabold text-white hover:text-blue-300 transition flex items-center gap-2">
                    <img src="<?php echo e(asset('img/about/socio-economic/brand.png')); ?>" alt="GOVPH Brand" class="h-4 w-auto object-contain" onerror="this.style.display='none'">
                    <span class="tracking-widest uppercase">govph</span>
                </a>
            </div>

            
            <?php if($variant === 'guest'): ?>
                <div class="hidden md:flex md:items-center md:space-x-6 absolute left-1/2 transform -translate-x-1/2 z-50">

                    
                    <a href="<?php echo e(Route::has('home') ? route('home') : '/'); ?>"
                       class="text-xs font-semibold text-white hover:text-amber-300 transition py-1 border-b-2 <?php echo e(request()->routeIs('home') ? 'border-amber-400 text-amber-300' : 'border-transparent'); ?>">
                        Home
                    </a>

                    
                    <div class="relative py-1" @click.away="transparencyOpen = false">
                        <button @click="transparencyOpen = !transparencyOpen; aboutOpen = false; servicesOpen = false"
                                class="flex items-center gap-1 text-xs font-semibold text-slate-200 hover:text-amber-300 transition focus:outline-none">
                            <span>Transparency</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="transparencyOpen ? 'rotate-180 text-amber-300' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="transparencyOpen"
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                             x-cloak
                             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-60 rounded-lg shadow-2xl bg-white text-gray-800 ring-1 ring-black/10 py-2 z-50">
                            <a href="<?php echo e(route('bac')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Bids & Awards Committee</a>
                            <a href="<?php echo e(route('citizens-charter')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Citizen's Charter</a>
                            <a href="<?php echo e(route('seal')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Transparency Seal</a>
                        </div>
                    </div>

                    
                    <div class="relative py-1" @click.away="aboutOpen = false">
                        <button @click="aboutOpen = !aboutOpen; transparencyOpen = false; servicesOpen = false"
                                class="flex items-center gap-1 text-xs font-semibold text-slate-200 hover:text-amber-300 transition focus:outline-none">
                            <span>About</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="aboutOpen ? 'rotate-180 text-amber-300' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="aboutOpen"
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                             x-cloak
                             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-56 rounded-lg shadow-2xl bg-white text-gray-800 ring-1 ring-black/10 py-2 z-50">
                            <a href="<?php echo e(route('profile')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Profile</a>
                            <a href="<?php echo e(route('socio-economic')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Socio-economic Profile</a>
                            <a href="<?php echo e(route('province-history')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Province History</a>
                            <a href="<?php echo e(route('mission-vision')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Mission & Vision</a>
                            <a href="<?php echo e(route('capitol-history')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Capitol History</a>
                            <a href="<?php echo e(route('past-governors')); ?>" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Past Governors</a>
                        </div>
                    </div>

                    
                    <div class="relative py-1"
                         x-data="{ activeSub: null }"
                         @click.away="servicesOpen = false; activeSub = null">
                        <button @click="servicesOpen = !servicesOpen; activeSub = null; transparencyOpen = false; aboutOpen = false"
                                class="flex items-center gap-1 text-xs font-semibold text-slate-200 hover:text-amber-300 transition focus:outline-none <?php echo e(request()->routeIs('tourism') || request()->routeIs('services.*') || request()->routeIs('faq') || request()->routeIs('guest.news.*') || request()->routeIs('careers.*') ? 'text-amber-300' : ''); ?>">
                            <span>Services</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="servicesOpen ? 'rotate-180 text-amber-300' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        
                        <div x-show="servicesOpen"
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                             x-cloak
                             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-64 rounded-xl shadow-2xl bg-white text-gray-800 ring-1 ring-black/10 py-2 z-50">

                            
                            <div class="px-3.5 pb-1.5 pt-0.5 text-[10px] font-bold text-gray-400 uppercase tracking-wider border-b border-gray-100">
                                Provincial Services
                            </div>

                            
                            <a href="<?php echo e(route('services.educational-assistance')); ?>"
                               @click="servicesOpen = false; activeSub = null"
                               class="block px-3.5 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">
                                Educational Assistance
                            </a>

                            
                            <a href="<?php echo e(route('tourism')); ?>"
                               @click="servicesOpen = false; activeSub = null"
                               class="block px-3.5 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">
                                Visit CamSur
                            </a>

                            
                            <div class="relative">
                                <button type="button"
                                        @click.stop="activeSub = (activeSub === 'news' ? null : 'news')"
                                        :class="activeSub === 'news' ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-gray-700'"
                                        class="w-full flex items-center justify-between px-3.5 py-2 text-xs font-medium hover:bg-blue-50 hover:text-blue-900 transition">
                                    <span>News & Media</span>
                                    <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                                         :class="activeSub === 'news' ? 'rotate-90 text-blue-900' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            
                            <div class="relative">
                                <button type="button"
                                        @click.stop="activeSub = (activeSub === 'jobs' ? null : 'jobs')"
                                        :class="activeSub === 'jobs' ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-gray-700'"
                                        class="w-full flex items-center justify-between px-3.5 py-2 text-xs font-medium hover:bg-blue-50 hover:text-blue-900 transition">
                                    <span>Job Portals</span>
                                    <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                                         :class="activeSub === 'jobs' ? 'rotate-90 text-blue-900' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            
                            <div class="my-1 border-t border-gray-100"></div>

                            
                            <a href="<?php echo e(route('faq')); ?>"
                               @click="servicesOpen = false; activeSub = null"
                               class="block px-3.5 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">
                                Help Center & FAQs
                            </a>

                            
                            <div x-show="activeSub === 'news'"
                                 x-transition:enter="transition ease-out duration-150"
                                 x-transition:enter-start="opacity-0 translate-x-2"
                                 x-transition:enter-end="opacity-100 translate-x-0"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100 translate-x-0"
                                 x-transition:leave-end="opacity-0 translate-x-2"
                                 x-cloak
                                 style="left: calc(100% + 12px); top: 0;"
                                 class="absolute w-60 rounded-xl shadow-2xl bg-white text-gray-800 ring-1 ring-black/10 py-2 z-50">
                                <div class="px-3.5 pb-1.5 text-[10px] font-bold text-gray-400 uppercase tracking-wider border-b border-gray-100 flex items-center justify-between">
                                    <span>News & Releases</span>
                                    <span class="text-blue-600 text-[10px] font-semibold">Press Room</span>
                                </div>
                                <div class="p-1 space-y-0.5">
                                    <a href="<?php echo e(route('guest.news.index')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">News & Press Releases</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">Official articles & statements</div>
                                    </a>
                                    <a href="<?php echo e(route('guest.videos.index')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">Videos & Video Reels</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">Full broadcasts & mobile shorts</div>
                                    </a>
                                </div>
                            </div>

                            
                            <div x-show="activeSub === 'jobs'"
                                 x-transition:enter="transition ease-out duration-150"
                                 x-transition:enter-start="opacity-0 translate-x-2"
                                 x-transition:enter-end="opacity-100 translate-x-0"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100 translate-x-0"
                                 x-transition:leave-end="opacity-0 translate-x-2"
                                 x-cloak
                                 style="left: calc(100% + 12px); top: 0;"
                                 class="absolute w-60 rounded-xl shadow-2xl bg-white text-gray-800 ring-1 ring-black/10 py-2 z-50">
                                <div class="px-3.5 pb-1.5 text-[10px] font-bold text-gray-400 uppercase tracking-wider border-b border-gray-100 flex items-center justify-between">
                                    <span>Employment & Placement</span>
                                    <span class="text-blue-600 text-[10px] font-semibold">Directory</span>
                                </div>
                                <div class="p-1 space-y-0.5">
                                    <a href="<?php echo e(route('careers.government')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">Careers With Us</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">Civil service & permanent plantilla</div>
                                    </a>
                                    <a href="<?php echo e(route('careers.local')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">Private Local Jobs</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">Accredited private firms & BPO hubs</div>
                                    </a>
                                    <a href="<?php echo e(route('careers.overseas')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">Overseas / OFW Careers</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">DMW / POEA verified agencies</div>
                                    </a>
                                    <a href="<?php echo e(route('careers.spes')); ?>"
                                       @click="servicesOpen = false; activeSub = null"
                                       class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-900 rounded-lg transition">
                                        <div class="font-medium">Student Jobs & SPES</div>
                                        <div class="text-[10px] text-gray-400 leading-none mt-0.5">Subsidized summer work & internships</div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <button type="button"
                            @click="$dispatch('open-search-modal'); servicesOpen = false; transparencyOpen = false; aboutOpen = false"
                            class="flex items-center gap-1.5 text-xs font-semibold text-slate-200 hover:text-amber-300 transition py-1 focus:outline-none"
                            title="Search Portal (Ctrl+K)">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span>Search</span>
                    </button>

                </div>
            <?php endif; ?>

            
            <div class="flex items-center gap-2.5 z-10" title="Philippine Standard Time">
                <div class="flex items-center text-[11px] sm:text-xs text-slate-200 tracking-normal font-medium whitespace-nowrap">
                    <span x-text="dateOnly"></span>
                    <span class="text-slate-400 font-normal px-1.5 inline-block">at</span>
                    <span x-text="timeOnly" class="font-semibold text-white"></span>
                </div>
            </div>

        </div>
    </div>

    
    <nav style="background-color: #114696;"
         :class="scrolled ? 'shadow-lg border-b border-blue-900/80' : 'border-b border-blue-900/50 shadow-md'"
         class="relative z-20 transition-all duration-300 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div :class="scrolled ? 'h-12' : 'h-16'" class="flex justify-between items-center transition-all duration-300">

                
                <div class="flex items-center">
                    <a href="<?php echo e(Route::has('home') ? route('home') : '/'); ?>" class="flex items-center gap-3 group">

                        
                        <div :class="scrolled ? 'w-8 h-8' : 'w-11 h-11'" class="relative transition-all duration-300 [perspective:1000px]">
                            <div class="w-full h-full relative transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] animate-coin-flip">
                                <img src="<?php echo e(asset('img/about/socio-economic/muns/camsur-logo.png')); ?>"
                                     alt="Camarines Sur Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden]">

                                <img src="<?php echo e(asset('img/shared/camsur-logo-outline.png')); ?>"
                                     alt="Camarines Sur Outline Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden] [transform:rotateY(180deg)]">
                            </div>
                        </div>

                        
                        <div class="hidden sm:block text-left">
                            <span x-show="!scrolled" x-collapse class="block text-[10px] text-blue-200 font-medium tracking-tight mt-0.5 uppercase">
                                republic of the philippines
                            </span>
                            <span :class="scrolled ? 'text-xs' : 'text-sm'" class="block font-extrabold tracking-wider text-white uppercase leading-none transition-all duration-300">
                                PROVINCIAL GOVERNMENT OF CAMARINES SUR
                            </span>
                            <span x-show="!scrolled" x-collapse class="block text-[10px] text-blue-200 font-medium tracking-tight mt-0.5 uppercase">
                                bicol region
                            </span>
                        </div>
                    </a>
                </div>

                
                <div class="hidden md:flex items-center">
                    <div class="flex items-center gap-2.5 select-none" title="Sagisag ng Republika ng Pilipinas">
                        <div class="w-8 h-5 rounded-sm overflow-hidden shadow-sm flex items-center justify-center shrink-0">
                            <img src="<?php echo e(asset('img/shared/flag.gif')); ?>" 
                                 alt="Flag of the Philippines" 
                                 class="w-full h-full object-cover" 
                                 onerror="this.style.display='none'">
                        </div>
                        <div class="flex flex-col text-left leading-tight">
                            <span class="text-[9px] font-semibold text-amber-300 tracking-wider uppercase">Sagisag ng Republika</span>
                            <span class="text-[11px] font-extrabold tracking-widest text-white uppercase">ng Pilipinas</span>
                        </div>
                    </div>
                </div>

                
                <div class="-mr-2 flex items-center md:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-100 hover:text-white hover:bg-white/10 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        
        <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden border-t border-white/10" style="background-color: #0e3b80;">
            <div class="pt-1 pb-3 space-y-1">
                <a href="<?php echo e(Route::has('home') ? route('home') : '/'); ?>" class="block pl-4 pr-4 py-2 border-l-4 border-amber-400 text-base font-medium text-amber-300 bg-white/5">Home</a>

                
                <div x-data="{ subOpen: false }">
                    <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                        <span>Transparency</span>
                        <svg class="w-4 h-4 transform transition" :class="subOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="subOpen" class="pl-8 pr-4 py-1 space-y-1 bg-black/20" x-cloak>
                        <a href="<?php echo e(route('bac')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Bids & Awards Committee</a>
                        <a href="<?php echo e(route('citizens-charter')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Citizen's Charter</a>
                        <a href="<?php echo e(route('seal')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Transparency Seal</a>
                    </div>
                </div>

                
                <div x-data="{ subOpen: false }">
                    <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                        <span>About</span>
                        <svg class="w-4 h-4 transform transition" :class="subOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="subOpen" class="pl-8 pr-4 py-1 space-y-1 bg-black/20" x-cloak>
                        <a href="<?php echo e(route('profile')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Profile</a>
                        <a href="<?php echo e(route('socio-economic')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Socio-economic Profile</a>
                        <a href="<?php echo e(route('province-history')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Province History</a>
                        <a href="<?php echo e(route('mission-vision')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Mission & Vision</a>
                        <a href="<?php echo e(route('capitol-history')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Capitol History</a>
                        <a href="<?php echo e(route('past-governors')); ?>" class="block py-1 text-sm text-blue-200 hover:text-white">Past Governors</a>
                    </div>
                </div>

                
                <button type="button" @click="open = false; $dispatch('open-search-modal')" class="w-full flex items-center gap-2 pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5 text-left">
                    <svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span>Search Portal</span>
                    <span class="ml-auto text-xs font-mono bg-white/10 px-2 py-0.5 rounded text-blue-200">Ctrl+K</span>
                </button>

                
                <div x-data="{ subOpen: false, newsSub: false, jobsSub: false }">
                    <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                        <span>Services</span>
                        <svg class="w-4 h-4 transform transition" :class="subOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="subOpen" class="pl-6 pr-4 py-1 space-y-1 bg-black/20" x-cloak>
                        
                        <a href="<?php echo e(route('services.educational-assistance')); ?>" class="block py-1.5 text-sm text-amber-300 hover:text-white font-medium">
                            Educational Assistance (Scholarship)
                        </a>

                        
                        <a href="<?php echo e(route('tourism')); ?>" class="block py-1.5 text-sm text-blue-200 hover:text-white">
                            Visit CamSur (Tourism)
                        </a>

                        
                        <div>
                            <button @click="newsSub = !newsSub" class="w-full flex justify-between items-center py-1.5 text-sm text-blue-200 hover:text-white">
                                <span>News & Media</span>
                                <svg class="w-3.5 h-3.5 transform transition" :class="newsSub ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="newsSub" class="pl-4 py-1 space-y-1 text-xs border-l border-white/10 ml-2" x-cloak>
                                <a href="<?php echo e(route('guest.news.index')); ?>" class="block py-1 text-blue-100 hover:text-white">Latest News</a>
                                <a href="<?php echo e(route('press-releases.index')); ?>" class="block py-1 text-blue-100 hover:text-white">Press Releases</a>
                            </div>
                        </div>

                        
                        <div>
                            <button @click="jobsSub = !jobsSub" class="w-full flex justify-between items-center py-1.5 text-sm text-blue-200 hover:text-white">
                                <span>Job Portals</span>
                                <svg class="w-3.5 h-3.5 transform transition" :class="jobsSub ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="jobsSub" class="pl-4 py-1 space-y-1 text-xs border-l border-white/10 ml-2" x-cloak>
                                <a href="<?php echo e(route('careers.government')); ?>" class="block py-1 text-blue-100 hover:text-white">Careers With Us (Plantilla)</a>
                                <a href="<?php echo e(route('careers.local')); ?>" class="block py-1 text-blue-100 hover:text-white">Private Local Jobs</a>
                                <a href="<?php echo e(route('careers.overseas')); ?>" class="block py-1 text-blue-100 hover:text-white">Overseas / OFW Careers</a>
                                <a href="<?php echo e(route('careers.spes')); ?>" class="block py-1 text-blue-100 hover:text-white">Student Jobs & SPES</a>
                            </div>
                        </div>

                        
                        <a href="<?php echo e(route('faq')); ?>" class="block py-1.5 text-sm text-blue-200 hover:text-white">
                            ❓ Help Center & FAQs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<style>
@keyframes continuousCoinFlip {
    0%, 100% {
        transform: rotateY(0deg);
    }
    45%, 55% {
        transform: rotateY(180deg);
    }
}

.animate-coin-flip {
    animation: continuousCoinFlip 6s infinite ease-in-out;
}
</style>
<?php /**PATH /var/www/resources/views/components/guest/panels/nav.blade.php ENDPATH**/ ?>