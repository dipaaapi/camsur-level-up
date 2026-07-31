@props([
    'variant' => 'guest',
])

<div x-data="{ open: false, timeString: '' }"
     x-init="
        const updateTime = () => {
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
            timeString = now.toLocaleString('en-US', options) + ' PST';
        };
        updateTime();
        setInterval(updateTime, 1000);
     }">

    {{-- 🇵🇭 1st Bar: Official GOVPH Topbar (Background: #141414f2) --}}
    <div style="background-color: #141414f2;" class="text-slate-200 text-xs border-b border-white/10 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1.5 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">

            {{-- Left Side: GOVPH Brand Image + Text --}}
            <div class="flex items-center gap-2.5">
                <a href="https://www.gov.ph" target="_blank" rel="noopener noreferrer" class="font-extrabold text-white hover:text-blue-300 transition flex items-center gap-2">
                    <img src="{{ asset('images/brand.png') }}" alt="GOVPH Brand" class="h-4 w-auto object-contain" onerror="this.style.display='none'">
                    <span class="tracking-widest">GOVPH</span>
                </a>
                <span class="text-slate-600">|</span>
                <span class="text-slate-300 font-medium">Republic of the Philippines</span>
                <span class="text-slate-600 hidden sm:inline">|</span>
                <span class="text-slate-400 hidden sm:inline">Province of Camarines Sur</span>
            </div>

            {{-- Right Side: PH Flag GIF + Dynamic Clock --}}
            <div class="flex items-center gap-2 text-slate-300 font-mono text-[11px]">
                {{-- Autoplay / Autoloop PH Flag GIF --}}
                <img src="{{ asset('images/flag.gif') }}" alt="PH Flag" class="w-5 h-3.5 object-cover rounded shadow-sm" onerror="this.style.display='none'">

                <span class="text-slate-400">PST:</span>
                <span class="text-amber-300 font-semibold" x-text="timeString">Loading time...</span>
            </div>

        </div>
    </div>

    {{-- ⚓ 2nd Bar: Main Navbar (Background: #114696) --}}
    <nav style="background-color: #114696;" class="border-b border-blue-900/50 shadow-md sticky top-0 z-50 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                {{-- Logo & Coin Flip Animation Section --}}
                <div class="flex items-center">
                    <a href="{{ Route::has('home') ? route('home') : '/' }}" class="flex items-center gap-3 group">

                        {{-- 🪙 3D Coin-Flip Container --}}
                        <div class="relative w-11 h-11 [perspective:1000px]">
                            <div class="w-full h-full relative transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] animate-coin-flip">
                                {{-- Front Logo: camsur-logo.png --}}
                                <img src="{{ asset('images/camsur-logo.png') }}"
                                     alt="Camarines Sur Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden]">

                                {{-- Back Logo: camsur-logo-outline.png --}}
                                <img src="{{ asset('images/camsur-logo-outline.png') }}"
                                     alt="Camarines Sur Outline Logo"
                                     class="absolute inset-0 w-full h-full object-contain [backface-visibility:hidden] [transform:rotateY(180deg)]">
                            </div>
                        </div>

                        {{-- Text Brand --}}
                        <div class="hidden sm:block text-left">
                            <span class="block text-sm font-extrabold tracking-wider text-white uppercase leading-none group-hover:text-amber-300 transition">Camarines Sur</span>
                            <span class="block text-[10px] text-blue-200 font-medium tracking-tight mt-0.5">Official Provincial Government Portal</span>
                        </div>
                    </a>

                    {{-- Navigation Links (White text for dark blue navbar) --}}
                    @if($variant === 'guest')
                        <div class="hidden sm:-my-px sm:ml-10 sm:flex sm:space-x-8">
                            <x-nav-link :href="Route::has('home') ? route('home') : '#'" :active="request()->routeIs('home')" class="text-white hover:text-amber-300 border-amber-400">
                                {{ __('Home') }}
                            </x-nav-link>

                            <x-nav-link :href="Route::has('guest.news.index') ? route('guest.news.index') : '#'" :active="request()->routeIs('guest.news.*')" class="text-blue-100 hover:text-amber-300 border-amber-400">
                                {{ __('News & Updates') }}
                            </x-nav-link>

                            <x-nav-link :href="Route::has('guest.services.index') ? route('guest.services.index') : '#'" :active="request()->routeIs('guest.services.*')" class="text-blue-100 hover:text-amber-300 border-amber-400">
                                {{ __('Services') }}
                            </x-nav-link>

                            <a href="#tourism" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-blue-100 hover:text-amber-300 transition duration-150 ease-in-out">
                                {{ __('Tourism') }}
                            </a>
                        </div>
                    @endif
                </div>

                {{-- Right Side Actions --}}
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth
                        <div class="relative ml-3" x-data="{ userDropdown: false }">
                            <button @click="userDropdown = !userDropdown" class="flex items-center text-sm font-semibold text-white hover:text-amber-300 focus:outline-none transition">
                                <span class="mr-2">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div x-show="userDropdown" @click.away="userDropdown = false" x-cloak
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white text-gray-800 ring-1 ring-black ring-opacity-5 py-1 z-50">
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}" class="text-sm font-medium text-blue-100 hover:text-white px-3 py-2 rounded-lg hover:bg-white/10 transition">Sign In</a>
                            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold text-blue-950 bg-amber-400 rounded-lg hover:bg-amber-300 transition shadow-sm">
                                Register
                            </a>
                        </div>
                    @endauth
                </div>

                {{-- Mobile Hamburger --}}
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-100 hover:text-white hover:bg-white/10 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden border-t border-white/10" style="background-color: #0e3b80;">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 border-l-4 border-amber-400 text-base font-medium text-amber-300 bg-white/5">Home</a>
                <a href="{{ Route::has('guest.news.index') ? route('guest.news.index') : '#' }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-blue-100 hover:text-white hover:bg-white/5">News</a>
                <a href="{{ Route::has('guest.services.index') ? route('guest.services.index') : '#' }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-blue-100 hover:text-white hover:bg-white/5">Services</a>
            </div>
        </div>
    </nav>
</div>

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
