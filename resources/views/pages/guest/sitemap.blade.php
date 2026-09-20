@extends('layouts.guest')

@section('title', 'Public Sitemap & System Directory | Provincial Government of Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-950 py-10 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        {{-- 🏛️ Header Banner --}}
        <div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white rounded-3xl p-8 sm:p-12 shadow-2xl relative overflow-hidden border border-blue-800/60">
            <div class="absolute -right-16 -bottom-16 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="max-w-3xl relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 rounded-full border border-white/20 backdrop-blur-md mb-4">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-amber-300">
                        Centralized Web App Architecture & Sitemap
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black uppercase tracking-tight text-white leading-tight">
                    CamSur Portal Sitemap
                </h1>
                <p class="mt-3 text-blue-100/90 text-xs sm:text-sm leading-relaxed max-w-2xl font-normal">
                    Comprehensive structural directory of all verified public gateways, citizen service systems, transparency documents, employment registries, and media archives. Automatically updated in real time.
                </p>

                {{-- Fast Search / Jump Box --}}
                <div class="mt-6 flex flex-wrap items-center gap-3">
                    <a href="{{ route('search') }}" 
                       class="inline-flex items-center gap-2 px-5 py-2.5 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider rounded-xl shadow-lg transition">
                        <span>🔍 Open Search Directory</span>
                        <span>&rarr;</span>
                    </a>
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-xl border border-white/20 transition">
                        <span>Return to Homepage</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- 📊 Real-Time System Metrics Bar --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-950/50 text-blue-600 flex items-center justify-center text-2xl shrink-0">
                    🧭
                </div>
                <div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white leading-none">{{ count($publicPages) }}</span>
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wider mt-1">Indexed Gateways</p>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 text-emerald-600 flex items-center justify-center text-2xl shrink-0">
                    💼
                </div>
                <div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white leading-none">{{ $totalJobs }}</span>
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wider mt-1">Active Job Vacancies</p>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-50 dark:bg-indigo-950/50 text-indigo-600 flex items-center justify-center text-2xl shrink-0">
                    📢
                </div>
                <div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white leading-none">{{ $totalPress }}</span>
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wider mt-1">Press Releases & News</p>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-950/50 text-amber-600 flex items-center justify-center text-2xl shrink-0">
                    📍
                </div>
                <div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white leading-none">{{ $totalLgus }}</span>
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wider mt-1">LGU Municipalities & Cities</p>
                </div>
            </div>
        </div>

        {{-- 📍 OFFICIAL CAPITOL ADDRESS & CONTACT STRIP (Click to Copy & Direct Dial) --}}
        <div x-data="{ 
            copiedAddr: false, 
            copiedPho: false,
            copyText(text, key) { 
                navigator.clipboard.writeText(text); 
                if (key === 'addr') { this.copiedAddr = true; setTimeout(() => this.copiedAddr = false, 2500); }
                if (key === 'pho') { this.copiedPho = true; setTimeout(() => this.copiedPho = false, 2500); }
            } 
        }" class="bg-gradient-to-br from-white via-slate-50 to-blue-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-blue-950/40 rounded-3xl border border-slate-200 dark:border-slate-800 p-6 sm:p-8 shadow-sm space-y-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200/80 dark:border-slate-800 pb-4">
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300 text-[10px] font-black uppercase tracking-wider mb-1">
                        <span>📍</span> Official Capitol Seat & Contacts
                    </span>
                    <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white uppercase tracking-tight">
                        Provincial Capitol Complex & Hotlines
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Direktang i-click ang numero para tumawag, o i-click ang address para makopya agad sa inyong clipboard.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping"></span>
                    <span class="text-xs font-bold text-slate-600 dark:text-slate-300">Live Assistance Ready</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
                {{-- Address Box --}}
                <div @click="copyText('Provincial Capitol Complex, Cadlan, Pili, Camarines Sur, Philippines 4418', 'addr')"
                     title="I-click upang kopyahin ang address"
                     class="group p-4 bg-white dark:bg-slate-800/80 rounded-2xl border border-slate-200 dark:border-slate-700/80 hover:border-amber-400 dark:hover:border-amber-400 cursor-pointer shadow-xs hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 active:scale-[0.98]">
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-black text-[10px] uppercase tracking-wider text-slate-400">Headquarters Address</span>
                        <span x-show="!copiedAddr" class="text-amber-500 text-[11px] font-bold group-hover:scale-110 transition-transform">
                            <i class="fa-regular fa-copy"></i>
                        </span>
                        <span x-show="copiedAddr" x-cloak class="text-emerald-600 dark:text-emerald-400 text-[10px] font-black uppercase tracking-wider">
                            ✓ Copied!
                        </span>
                    </div>
                    <p class="font-bold text-slate-800 dark:text-white text-xs leading-relaxed group-hover:text-blue-700 dark:group-hover:text-amber-300 transition-colors">
                        Provincial Capitol Complex, Cadlan, Pili, Camarines Sur, Philippines 4418
                    </p>
                    <p class="text-[10px] text-slate-400 mt-2 font-medium">
                        <span x-show="!copiedAddr">I-tap para kopyahin sa clipboard</span>
                        <span x-show="copiedAddr" x-cloak class="text-emerald-500 font-bold">Nai-kopya na ang buong address!</span>
                    </p>
                </div>

                {{-- Provincial Health Office (PHO) Box --}}
                <div class="p-4 bg-white dark:bg-slate-800/80 rounded-2xl border border-slate-200 dark:border-slate-700/80 hover:border-blue-500 dark:hover:border-blue-400 shadow-xs hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-black text-[10px] uppercase tracking-wider text-blue-600 dark:text-blue-400">Provincial Health Office</span>
                        <span class="px-2 py-0.5 bg-blue-50 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 rounded text-[9px] font-extrabold">PHO Direct</span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <a href="tel:+63544777000" 
                           class="font-black text-slate-900 dark:text-white text-base hover:text-blue-600 dark:hover:text-amber-400 transition-colors no-underline inline-flex items-center gap-1.5 active:scale-95"
                           title="Direct Call Provincial Health Office">
                            <i class="fa-solid fa-phone-volume text-blue-600 text-xs"></i>
                            <span>(054) 477-7000</span>
                        </a>
                        <button type="button" @click="copyText('(054) 477-7000', 'pho')" class="text-slate-400 hover:text-blue-600 p-1 rounded-lg transition" title="Copy PHO number">
                            <span x-show="!copiedPho"><i class="fa-regular fa-copy text-xs"></i></span>
                            <span x-show="copiedPho" x-cloak class="text-emerald-500 text-[10px] font-bold">✓</span>
                        </button>
                    </div>
                    <p class="text-[10px] text-slate-400 mt-2">Medikal, AICS healthcare, at koordinasyon sa mga pampublikong ospital.</p>
                </div>

                {{-- CamSur Rescue / EDMERO Box --}}
                <div class="p-4 bg-white dark:bg-slate-800/80 rounded-2xl border border-slate-200 dark:border-slate-700/80 hover:border-rose-500 dark:hover:border-rose-400 shadow-xs hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-black text-[10px] uppercase tracking-wider text-rose-600 dark:text-rose-400">Emergency & Rescue</span>
                        <span class="px-2 py-0.5 bg-rose-50 dark:bg-rose-900/40 text-rose-700 dark:text-rose-300 rounded text-[9px] font-extrabold animate-pulse">24/7 Hotline</span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <a href="tel:+63548812831" 
                           class="font-black text-slate-900 dark:text-white text-base hover:text-rose-600 dark:hover:text-amber-400 transition-colors no-underline inline-flex items-center gap-1.5 active:scale-95"
                           title="Direct Call CamSur Rescue EDMERO">
                            <i class="fa-solid fa-truck-medical text-rose-600 text-xs"></i>
                            <span>(054) 881-2831</span>
                        </a>
                    </div>
                    <p class="text-[10px] text-slate-400 mt-2">EDMERO quick response para sa bagyo, aksidente, baha, at sakuna.</p>
                </div>
            </div>
        </div>

        {{-- 🗺️ THEMATIC SITEMAP CATEGORIES TREE --}}
        <div class="space-y-10">
            @foreach($sections as $secTitle => $secData)
                <div class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6 sm:p-8 shadow-sm space-y-6">
                    
                    {{-- Section Title & Scope --}}
                    <div class="flex items-start justify-between gap-4 pb-4 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="text-3xl p-2 bg-slate-100 dark:bg-slate-800 rounded-2xl">{{ $secData['icon'] }}</span>
                            <div>
                                <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white uppercase tracking-tight">
                                    {{ $secTitle }}
                                </h2>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5 font-medium">
                                    {{ $secData['description'] }}
                                </p>
                            </div>
                        </div>
                        <span class="text-xs font-bold text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full shrink-0">
                            {{ count($secData['items']) }} Routes
                        </span>
                    </div>

                    {{-- Items Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($secData['items'] as $item)
                            @php
                                $isPhone = ($item['type'] ?? '') === 'phone';
                                $isEmail = ($item['type'] ?? '') === 'email';
                            @endphp
                            <a href="{{ $item['url'] }}" 
                               class="group block p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 hover:bg-blue-50/80 dark:hover:bg-blue-950/40 border border-slate-200/80 dark:border-slate-700/60 hover:border-blue-400 dark:hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg active:scale-[0.98] visited:border-slate-300 no-underline">
                                
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <span class="text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded-md {{ $isPhone ? 'bg-emerald-100 dark:bg-emerald-900/60 text-emerald-800 dark:text-emerald-200' : ($isEmail ? 'bg-amber-100 dark:bg-amber-900/60 text-amber-800 dark:text-amber-200' : 'bg-blue-100 dark:bg-blue-900/60 text-blue-800 dark:text-blue-200') }}">
                                        {{ $item['badge'] }}
                                    </span>
                                    <span class="text-xs text-slate-400 group-hover:text-blue-600 dark:group-hover:text-amber-400 transition-transform group-hover:translate-x-1 duration-200">
                                        @if($isPhone)
                                            <i class="fa-solid fa-phone text-[11px]"></i>
                                        @elseif($isEmail)
                                            <i class="fa-solid fa-envelope text-[11px]"></i>
                                        @else
                                            &rarr;
                                        @endif
                                    </span>
                                </div>

                                <h3 class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-blue-800 dark:group-hover:text-amber-300 transition-colors leading-snug no-underline">
                                    {{ $item['title'] }}
                                </h3>

                                @if(isset($item['contact']))
                                    <p class="text-xs font-black text-blue-700 dark:text-amber-400 mt-1 flex items-center gap-1.5">
                                        @if($isPhone) <i class="fa-solid fa-phone-flip text-[10px]"></i> @endif
                                        @if($isEmail) <i class="fa-solid fa-at text-[10px]"></i> @endif
                                        <span>{{ $item['contact'] }}</span>
                                    </p>
                                @endif

                                <p class="text-xs text-slate-500 dark:text-slate-400 line-clamp-2 mt-1.5 leading-relaxed font-normal">
                                    {{ $item['description'] }}
                                </p>
                            </a>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>

        {{-- Footer Help Callout --}}
        <div class="bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 text-white rounded-3xl p-8 border border-white/10 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-lg font-black text-white">Can't find what you're looking for?</h3>
                <p class="text-xs text-slate-300 mt-1">Use our full-text keyword search engine or submit a direct public inquiry to the Provincial Capitol.</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('search') }}" class="px-5 py-2.5 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider rounded-xl shadow-md transition">
                    Search Portal
                </a>
                <a href="{{ route('faq') }}#inquiry" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-xl border border-white/20 transition">
                    Submit Inquiry
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
