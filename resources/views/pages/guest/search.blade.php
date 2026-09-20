@extends('layouts.guest')

@section('title', (request('q') ? 'Search: ' . request('q') . ' - ' : '') . 'Search Portal | Provincial Government of Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50">

    {{-- Header Banner Section --}}
    <section class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-12 px-4 sm:px-6 lg:px-8 shadow-inner">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/10 text-amber-300 border border-white/15 backdrop-blur-sm mb-3">
                🔍 Centralized Public Search Directory
            </span>
            <h1 class="text-2xl sm:text-4xl font-extrabold uppercase tracking-wider text-white">
                Search Camarines Sur Portal
            </h1>
            <p class="mt-2 text-blue-200 text-xs sm:text-sm max-w-2xl mx-auto leading-relaxed">
                Quickly discover provincial services, latest news & press releases, civil service vacancies, private jobs, scholarships, and tourism destinations.
            </p>

            {{-- Big Interactive Search Input --}}
            <form action="{{ route('search') }}" method="GET" class="mt-6 flex items-center bg-white rounded-2xl shadow-xl p-1.5 focus-within:ring-4 focus-within:ring-amber-400/50 transition">
                <div class="pl-4 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text"
                       name="q"
                       value="{{ request('q') }}"
                       placeholder="Type your search here (e.g. Scholarship, Careers, Caramoan, BAC, Plantilla)..."
                       class="w-full text-gray-800 placeholder-gray-400 px-4 py-2.5 bg-transparent border-none focus:outline-none text-xs sm:text-sm">
                
                @if(request('category') && request('category') !== 'all')
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <button type="submit" class="bg-amber-400 hover:bg-amber-300 text-blue-950 font-bold px-6 py-2.5 rounded-xl transition text-xs sm:text-sm shrink-0">
                    Search
                </button>
            </form>

            {{-- Quick Search Suggestions Chips --}}
            <div class="flex flex-wrap justify-center items-center gap-2 mt-4 text-xs">
                <span class="text-slate-300 font-medium">Quick suggestions:</span>
                <a href="{{ route('search', ['q' => 'Scholarship']) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full border border-white/10 transition">Scholarship</a>
                <a href="{{ route('search', ['q' => 'Careers']) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full border border-white/10 transition">Job Vacancies</a>
                <a href="{{ route('search', ['q' => 'Caramoan']) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full border border-white/10 transition">Caramoan Tourism</a>
                <a href="{{ route('search', ['q' => 'Procurement']) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full border border-white/10 transition">BAC / Bidding</a>
                <a href="{{ route('search', ['q' => 'Citizens Charter']) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full border border-white/10 transition">Citizen's Charter</a>
            </div>
        </div>
    </section>

    {{-- Main Search Container --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-8">

        {{-- 🛡️ SECURITY WARNING / PROHIBITED KEYWORD ALERT --}}
        @if(isset($securityAlert) && $securityAlert)
            <div class="bg-rose-50 border-2 border-rose-300 rounded-3xl p-6 sm:p-8 shadow-sm space-y-4">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-rose-600 text-white flex items-center justify-center shrink-0 shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <div class="inline-flex items-center gap-2 px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-200 text-rose-900">
                            Security Notice & Access Restriction
                        </div>
                        <h3 class="text-lg font-extrabold text-rose-950">
                            Restricted Query Detected: "{{ $securityAlert['keyword'] }}"
                        </h3>
                        <p class="text-xs sm:text-sm text-rose-900 leading-relaxed">
                            {{ $securityAlert['message'] }}
                        </p>
                        <div class="bg-white/80 border border-rose-200 p-3 rounded-xl text-xs text-rose-800 font-medium">
                            ⚖️ <strong>Legal Notice:</strong> {{ $securityAlert['legal'] }}
                        </div>
                    </div>
                </div>

                <div class="pt-2 border-t border-rose-200 flex flex-wrap items-center justify-between gap-3 text-xs">
                    <span class="text-rose-700">Looking for legitimate civic or public services?</span>
                    <a href="{{ route('search') }}" class="font-bold text-rose-900 hover:text-rose-950 underline">
                        Return to Clean Search &rarr;
                    </a>
                </div>
            </div>
        @else

            {{-- Filter Tabs & Query Summary Bar --}}
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200 pb-5">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 flex items-center gap-2">
                        @if(request('q'))
                            <span>Results for <strong class="text-blue-900">"{{ request('q') }}"</strong></span>
                        @else
                            <span>All Public Content & Services Directory</span>
                        @endif
                        <span class="text-xs font-normal text-slate-400">({{ $totalResults }} found)</span>
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">Showing verified public-facing entries, job postings, official news, and provincial programs.</p>
                </div>

                {{-- Category Filter Navigation Tabs --}}
                <div class="flex flex-wrap items-center gap-1.5 bg-slate-200/70 p-1.5 rounded-2xl text-xs font-semibold">
                    @foreach($availableCategories as $cat)
                        @php
                            $catSlug = strtolower($cat);
                            $isActive = ($categoryFilter === $catSlug) || ($catSlug === 'all' && ($categoryFilter === 'all' || empty($categoryFilter)));
                        @endphp
                        <a href="{{ route('search', ['q' => request('q'), 'category' => $catSlug]) }}" 
                           class="px-3 py-1.5 rounded-xl transition {{ $isActive ? 'bg-white text-blue-900 shadow-sm font-bold' : 'text-slate-600 hover:text-slate-900' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Dynamic Search Results Grid --}}
            @if(count($results) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($results as $item)
                        <div class="bg-white rounded-2xl border border-slate-200/80 hover:border-blue-300 p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div class="space-y-3">
                                <div class="flex items-start justify-between gap-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-blue-50 text-blue-800 border border-blue-100">
                                        {{ $item['category'] }}
                                    </span>
                                    @if(isset($item['badge']) && $item['badge'])
                                        <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded-md">
                                            {{ $item['badge'] }}
                                        </span>
                                    @endif
                                </div>

                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-900 transition line-clamp-2">
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </h3>

                                @if(isset($item['meta']) && $item['meta'])
                                    <p class="text-xs font-medium text-slate-400 flex items-center gap-1">
                                        {{ $item['meta'] }}
                                    </p>
                                @endif

                                <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                                    {{ $item['description'] }}
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <a href="{{ $item['url'] }}" class="text-xs font-bold text-blue-700 hover:text-blue-900 inline-flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                                    <span>{{ $item['action_text'] ?? 'Open Details' }}</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Empty Search Results State --}}
                <div class="bg-white rounded-3xl border border-slate-200 p-12 text-center space-y-4 max-w-xl mx-auto shadow-sm">
                    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto text-2xl">
                        🔍
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">
                        Walang Nahanap na Resulta para sa "{{ request('q') }}"
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Subukang gumamit ng ibang mga keywords, tanggalin ang mga filter, o mag-explore sa mga pangunahing serbisyo ng Pamahalaang Panlalawigan.
                    </p>
                    <div class="pt-3 flex flex-wrap justify-center gap-2">
                        <a href="{{ route('search') }}" class="px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-bold text-xs rounded-xl shadow-sm transition">
                            I-reset ang Search
                        </a>
                        <a href="{{ route('faq') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs rounded-xl transition">
                            Tingnan ang Help Desk / FAQ
                        </a>
                    </div>
                </div>
            @endif

        @endif

    </main>

</div>
@endsection
