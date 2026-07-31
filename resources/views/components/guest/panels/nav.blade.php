@props([
    'variant' => 'guest',
])

{{-- 🏛️ Sticky Wrapper para sa Buong Header --}}
<header x-data="{
            open: false,
            scrolled: false,
            transparencyOpen: false,
            aboutOpen: false,
            timeString: '',
            updateClock() {
                const now = new Date();
                const options = {
                    timeZone: 'Asia/Manila',
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                };
                this.timeString = now.toLocaleString('en-US', options);
            }
        }"
        x-init="updateClock(); setInterval(() => updateClock(), 1000);"
        @scroll.window="scrolled = (window.scrollY > 30)"
        class="sticky top-0 z-50 transition-all duration-300">

    {{-- 🇵🇭 1st Layer: Official GOVPH Topbar + Centered Navigation Links + Dynamic Clock --}}
    <div style="background-color: #141414f2;"
         :class="scrolled ? 'py-1 text-[11px]' : 'py-1.5 text-xs'"
         class="text-slate-200 border-b border-white/10 backdrop-blur-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center relative">

            {{-- Left Side: GOVPH Brand Image + Text --}}
            <div class="flex items-center gap-2.5 z-10">
                <a href="https://www.gov.ph" target="_blank" rel="noopener noreferrer" class="font-extrabold text-white hover:text-blue-300 transition flex items-center gap-2">
                    <img src="{{ asset('img/brand.png') }}" alt="GOVPH Brand" class="h-4 w-auto object-contain" onerror="this.style.display='none'">
                    <span class="tracking-widest uppercase">govph</span>
                </a>
            </div>

            {{-- 🧭 CENTERED NAVIGATION LINKS (Inilagay sa GOVPH Topbar) --}}
            @if($variant === 'guest')
                <div class="hidden md:flex md:items-center md:space-x-6 absolute left-1/2 transform -translate-x-1/2 z-10">

                    {{-- 1. Home --}}
                    <a href="{{ Route::has('home') ? route('home') : '/' }}"
                       class="text-xs font-semibold text-white hover:text-amber-300 transition py-1 border-b-2 {{ request()->routeIs('home') ? 'border-amber-400 text-amber-300' : 'border-transparent' }}">
                        Home
                    </a>

                    {{-- 2. Transparency Dropdown --}}
                    <div class="relative py-1" @click.away="transparencyOpen = false">
                        <button @click="transparencyOpen = !transparencyOpen; aboutOpen = false"
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
                             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-60 rounded-lg shadow-xl bg-white text-gray-800 ring-1 ring-black ring-opacity-5 py-2 z-50">
                            <a href="{{ route('bac') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Bids & Awards Committee</a>
                            <a href="{{ route('citizens-charter') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Citizen's Charter</a>
                            <a href="{{ route('seal') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Transparency Seal</a>
                        </div>
                    </div>

                    {{-- 3. About Dropdown --}}
                    <div class="relative py-1" @click.away="aboutOpen = false">
                        <button @click="aboutOpen = !aboutOpen; transparencyOpen = false"
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
                             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-56 rounded-lg shadow-xl bg-white text-gray-800 ring-1 ring-black ring-opacity-5 py-2 z-50">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Profile</a>
                            <a href="{{ route('socio-economic') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Socio-economic Profile</a>
                            <a href="{{ route('province-history') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Province History</a>
                            <a href="{{ route('mission-vision') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Mission & Vision</a>
                            <a href="{{ route('capitol-history') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Capitol History</a>
                            <a href="{{ route('past-governors') }}" class="block px-4 py-2 text-xs font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 transition">Past Governors</a>
                        </div>
                    </div>

                    {{-- 4. Tourism --}}
                    <a href="/tourism" class="text-xs font-semibold text-slate-200 hover:text-amber-300 transition py-1">
                        Tourism
                    </a>

                    {{-- 5. Search Button (Redirects directly to /search page) --}}
                    <a href="{{ Route::has('search') ? route('search') : '/search' }}"
                       aria-label="Search"
                       class="p-1 rounded-full text-slate-200 hover:text-amber-300 hover:bg-white/10 transition focus:outline-none flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </a>

                </div>
            @endif

            {{-- Right Side: PH Flag GIF + Stacked Philippine Standard Time Clock --}}
            <div class="flex items-center gap-2.5 text-white font-mono text-[11px] z-10">
                <img src="{{ asset('img/flag.gif') }}" alt="PH Flag" class="w-5 h-3.5 object-cover rounded shadow-sm" onerror="this.style.display='none'">

                <div class="flex flex-col text-left leading-tight">
                    <span class="text-slate-300 uppercase font-semibold text-[9px] tracking-wider">philippine standard time</span>
                    <span class="text-white font-bold text-[11px]" x-text="timeString">Loading time...</span>
                </div>
            </div>

        </div>
    </div>

    {{-- ⚓ 2nd Layer: Main Navbar (Background: #114696) - Pure Blank Right Side --}}
    <nav style="background-color: #114696;"
         :class="scrolled ? 'shadow-lg border-b border-blue-900/80' : 'border-b border-blue-900/50 shadow-md'"
         class="transition-all duration-300 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div :class="scrolled ? 'h-12' : 'h-16'" class="flex justify-between items-center transition-all duration-300">

                {{-- Logo & Brand Text Section --}}
                <div class="flex items-center">
                    <a href="{{ Route::has('home') ? route('home') : '/' }}" class="flex items-center gap-3 group">

                        {{-- 🪙 3D Coin-Flip Container --}}
                        <div :class="scrolled ? 'w-8 h-8' : 'w-11 h-11'" class="relative transition-all duration-300 [perspective:1000px]">
                            <div class="w-full h-full relative transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] animate-coin-flip">
                                <img src="{{ asset('img/camsur-logo.png') }}"
                                     alt="Camarines Sur Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden]">

                                <img src="{{ asset('img/camsur-logo-outline.png') }}"
                                     alt="Camarines Sur Outline Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden] [transform:rotateY(180deg)]">
                            </div>
                        </div>

                        {{-- Text Brand: NO HOVER COLOR CHANGE (Always Pure White) --}}
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

                {{-- Completely Empty Right Area on Main Blue Bar --}}
                <div class="hidden md:block"></div>

                {{-- Mobile Hamburger Button --}}
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

        {{-- 📱 Mobile Responsive Menu --}}
        <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden border-t border-white/10" style="background-color: #0e3b80;">
            <div class="pt-1 pb-3 space-y-1">
                <a href="{{ Route::has('home') ? route('home') : '/' }}" class="block pl-4 pr-4 py-2 border-l-4 border-amber-400 text-base font-medium text-amber-300 bg-white/5">Home</a>

                {{-- Mobile Transparency Accordion --}}
                <div x-data="{ subOpen: false }">
                    <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                        <span>Transparency</span>
                        <svg class="w-4 h-4 transform transition" :class="subOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="subOpen" class="pl-8 pr-4 py-1 space-y-1 bg-black/20" x-cloak>
                        <a href="{{ route('bac') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Bids & Awards Committee</a>
                        <a href="{{ route('citizens-charter') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Citizen's Charter</a>
                        <a href="{{ route('seal') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Transparency Seal</a>
                    </div>
                </div>

                {{-- Mobile About Accordion --}}
                <div x-data="{ subOpen: false }">
                    <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                        <span>About</span>
                        <svg class="w-4 h-4 transform transition" :class="subOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="subOpen" class="pl-8 pr-4 py-1 space-y-1 bg-black/20" x-cloak>
                        <a href="{{ route('profile') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Profile</a>
                        <a href="{{ route('socio-economic') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Socio-economic Profile</a>
                        <a href="{{ route('province-history') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Province History</a>
                        <a href="{{ route('mission-vision') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Mission & Vision</a>
                        <a href="{{ route('capitol-history') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Capitol History</a>
                        <a href="{{ route('past-governors') }}" class="block py-1 text-sm text-blue-200 hover:text-white">Past Governors</a>
                    </div>
                </div>

                {{-- Mobile Tourism Direct Link --}}
                <a href="#tourism" class="block pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">Tourism</a>

                {{-- Mobile Search Direct Link --}}
                <a href="{{ Route::has('search') ? route('search') : '/search' }}" class="flex items-center gap-2 pl-4 pr-4 py-2 text-base font-medium text-blue-100 hover:bg-white/5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span>Search</span>
                </a>
            </div>
        </div>
    </nav>
</header>

{{-- 🪙 CSS Keyframe para sa Automatic Loop Coin Flip Effect --}}
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
