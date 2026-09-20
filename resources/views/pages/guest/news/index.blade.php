<x-guest-layout>
    {{-- 🚀 Hero Header Banner --}}
    <x-hero-banner
        badge-text="Official Public Communications & Press Room"
        title="News & Press Releases"
        description="Comprehensive repository of official bulletins, press statements, public notices, and provincial news updates from the Provincial Capitol of Camarines Sur."
    />

    {{-- 🧭 Sub-Navigation / Filter Tabs for News & Press Releases --}}
    <div class="sticky top-[56px] sm:top-[64px] z-30 bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between overflow-x-auto no-scrollbar py-3 gap-3">
                <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                    @if($totalPressReleases > 0 && $totalNews > 0)
                    {{-- Tab 1: All --}}
                    <a href="{{ route('guest.news.index', ['tab' => 'all', 'q' => request('q'), 'category' => request('category'), 'year' => request('year')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $tab === 'all' ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>📰</span>
                        <span>All Updates ({{ $totalAll }})</span>
                    </a>
                    @endif

                    {{-- Tab 2: News Articles --}}
                    @if($totalNews > 0)
                    <a href="{{ route('guest.news.index', ['tab' => 'news', 'q' => request('q'), 'category' => request('category'), 'year' => request('year')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $tab === 'news' || ($totalPressReleases === 0 && $tab === 'all') ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>🗞️</span>
                        <span>News Articles ({{ $totalNews }})</span>
                    </a>
                    @endif

                    {{-- Tab 3: Press Releases -- Only shown if count > 0 --}}
                    @if($totalPressReleases > 0)
                    <a href="{{ route('guest.news.index', ['tab' => 'press-releases', 'q' => request('q'), 'category' => request('category'), 'year' => request('year')]) }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-extrabold uppercase tracking-wider transition-all {{ $tab === 'press-releases' ? 'bg-[#104695] text-white shadow-sm' : 'bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300' }} flex items-center gap-2">
                        <span>📢</span>
                        <span>Press Releases ({{ $totalPressReleases }})</span>
                    </a>
                    @endif
                </div>

                {{-- Fast Search Form --}}
                <form action="{{ route('guest.news.index') }}" method="GET" class="relative hidden sm:block w-72">
                    <input type="hidden" name="tab" value="{{ $tab }}">
                    <input type="text"
                           name="q"
                           value="{{ request('q') }}"
                           placeholder="Search news & releases..."
                           class="w-full pl-9 pr-4 py-1.5 text-xs rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-100 border-none focus:ring-2 focus:ring-[#104695]">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>
            </div>
        </div>
    </div>

    <main class="min-h-screen bg-slate-50 dark:bg-slate-950 py-10 sm:py-14 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            {{-- 🌟 1. Single Featured Hero News Spotlight --}}
            @if($featured && !request('q') && !request('category') && request('page', 1) == 1 && $tab === 'all')
                <section class="relative">
                    <div class="bg-gradient-to-br from-[#0a214a] via-[#104695] to-[#071736] text-white rounded-[32px] sm:rounded-[40px] overflow-hidden shadow-2xl border border-blue-800/60 group">
                        <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">
                            
                            {{-- Image Column --}}
                            <div class="lg:col-span-7 relative min-h-[300px] sm:min-h-[400px] overflow-hidden">
                                <img src="{{ $featured->image ?? asset('img/home/stories/capitol.jpg') }}" 
                                     alt="{{ $featured->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
                                     onerror="this.src='{{ asset('img/home/stories/capitol.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                                {{-- Date Tag Floating --}}
                                <div class="absolute top-5 left-5 flex items-center gap-3">
                                    <div class="bg-white/95 dark:bg-slate-900/90 backdrop-blur-md px-3.5 py-2 rounded-2xl flex flex-col items-center shadow-lg">
                                        <span class="text-xl font-black text-slate-900 dark:text-white leading-none">
                                            {{ $featured->published_at ? $featured->published_at->format('d') : '01' }}
                                        </span>
                                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                            {{ $featured->published_at ? strtoupper($featured->published_at->format('M')) : 'JAN' }}
                                        </span>
                                    </div>
                                    <span class="inline-flex items-center gap-1.5 bg-amber-400 text-slate-950 text-xs font-black uppercase px-3.5 py-1.5 rounded-full shadow-md">
                                        <span class="w-2 h-2 rounded-full bg-slate-950 animate-pulse"></span>
                                        Capitol Headline
                                    </span>
                                </div>
                            </div>

                            {{-- Details Column --}}
                            <div class="lg:col-span-5 p-6 sm:p-10 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-[11px] font-extrabold uppercase tracking-widest text-amber-300 bg-white/10 px-3 py-1 rounded-full border border-white/20">
                                            {{ $featured->category }}
                                        </span>
                                        <span class="text-xs text-blue-200/60">&bull;</span>
                                        <span class="text-xs font-medium text-blue-100">{{ $featured->author }}</span>
                                    </div>

                                    <h2 class="text-2xl sm:text-3xl font-black uppercase tracking-tight leading-tight text-white mb-4 group-hover:text-amber-300 transition-colors">
                                        <a href="{{ route('guest.news.show', $featured->slug) }}">
                                            {{ $featured->title }}
                                        </a>
                                    </h2>

                                    <p class="text-blue-100/90 text-sm leading-relaxed line-clamp-4 mb-6">
                                        {{ $featured->excerpt }}
                                    </p>

                                    @if(!empty($featured->sdgs))
                                        <div class="flex flex-wrap gap-1.5 mb-6">
                                            @foreach($featured->sdgs as $sdg)
                                                <span class="text-[10px] font-bold text-white bg-white/10 px-2.5 py-0.5 rounded-md border border-white/15">
                                                    {{ $sdg }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="pt-6 border-t border-white/15 flex items-center justify-between">
                                    <a href="{{ route('guest.news.show', $featured->slug) }}"
                                       class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider px-6 py-3 rounded-xl transition shadow-lg">
                                        <span>Read Complete Story</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                    <span class="text-xs font-semibold text-blue-200">
                                        {{ $featured->published_at ? $featured->published_at->format('F d, Y') : '' }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            @endif

            {{-- 🔍 2. Filter & Controls Bar --}}
            <section id="news-grid" style="background: #ffffff; border-color: #e2e8f0;" class="rounded-3xl p-6 sm:p-8 shadow-sm border">
                <form action="{{ route('guest.news.index') }}" method="GET" class="space-y-4">
                    <input type="hidden" name="tab" value="{{ $tab }}">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        
                        {{-- Search Input Box --}}
                        <div class="relative flex-1">
                            <input type="text"
                                   name="q"
                                   value="{{ request('q') }}"
                                   placeholder="Filter stories by keywords, title, or department..."
                                   style="background: #f8fafc; color: #0f172a; border-color: #cbd5e1;"
                                   class="w-full pl-10 pr-4 py-2.5 text-sm rounded-2xl border focus:ring-2 focus:ring-[#104695]">
                            <svg class="w-5 h-5 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        {{-- Category Select --}}
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-3">
                            <select name="category" 
                                    onchange="this.form.submit()"
                                    style="background: #f8fafc; color: #0f172a; border-color: #cbd5e1;"
                                    class="py-2.5 px-4 text-xs font-bold uppercase rounded-xl border focus:ring-2 focus:ring-[#104695]">
                                <option value="all">All Categories</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                        {{ $cat }}
                                    </option>
                                @endforeach
                            </select>

                            {{-- Year Select --}}
                            <select name="year" 
                                    onchange="this.form.submit()"
                                    style="background: #f8fafc; color: #0f172a; border-color: #cbd5e1;"
                                    class="py-2.5 px-4 text-xs font-bold uppercase rounded-xl border focus:ring-2 focus:ring-[#104695]">
                                <option value="all">All Years</option>
                                @foreach($years as $yr)
                                    <option value="{{ $yr }}" {{ request('year') == $yr ? 'selected' : '' }}>
                                        {{ $yr }}
                                    </option>
                                @endforeach
                            </select>

                            {{-- Sort Select --}}
                            <select name="sort" 
                                    onchange="this.form.submit()"
                                    style="background: #f8fafc; color: #0f172a; border-color: #cbd5e1;"
                                    class="py-2.5 px-4 text-xs font-bold uppercase rounded-xl border focus:ring-2 focus:ring-[#104695]">
                                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Newest First</option>
                                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                                <option value="az" {{ request('sort') == 'az' ? 'selected' : '' }}>Title (A-Z)</option>
                                <option value="za" {{ request('sort') == 'za' ? 'selected' : '' }}>Title (Z-A)</option>
                            </select>

                            {{-- Clear Filters Button --}}
                            @if(request('q') || (request('category') && request('category') !== 'all') || (request('year') && request('year') !== 'all') || (request('sort') && request('sort') !== 'latest'))
                                <a href="{{ route('guest.news.index', ['tab' => $tab]) }}" 
                                   class="py-2.5 px-4 text-xs font-bold text-rose-600 bg-rose-50 hover:bg-rose-100 rounded-xl transition flex items-center gap-1 border border-rose-200">
                                    <span>✕</span>
                                    <span>Reset</span>
                                </a>
                            @endif
                        </div>

                    </div>
                </form>
            </section>

            {{-- 📰 3. News & Releases Grid --}}
            <section class="space-y-6">
                <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-3">
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                        {{ $news->total() }} Results Available
                    </h3>
                    <span class="text-xs text-slate-400">
                        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
                    </span>
                </div>

                @if($news->isEmpty())
                    <div class="py-16 text-center bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-8">
                        <div class="w-16 h-16 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-400 text-2xl">
                            🔍
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 dark:text-slate-200 mb-2">No stories found</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 max-w-sm mx-auto mb-6">
                            We couldn't find any press releases or news matching your current filters or search term.
                        </p>
                        <a href="{{ route('guest.news.index', ['tab' => $tab]) }}" 
                           class="inline-block bg-[#104695] text-white text-xs font-bold px-6 py-2.5 rounded-xl shadow hover:bg-blue-800 transition">
                            Clear Filters & Search
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($news as $item)
                            <article class="bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/80 dark:border-slate-800 transition-all duration-300 flex flex-col justify-between group">
                                
                                {{-- Card Image --}}
                                <div class="relative h-56 overflow-hidden bg-slate-100 dark:bg-slate-800">
                                    <img src="{{ $item->image ?? asset('img/home/stories/capitol.jpg') }}" 
                                         alt="{{ $item->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         onerror="this.src='{{ asset('img/home/stories/capitol.jpg') }}'">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                                    {{-- Date Stamp Floating --}}
                                    <div class="absolute top-4 left-4 bg-white/95 dark:bg-slate-900/90 backdrop-blur-md px-3 py-1.5 rounded-xl flex flex-col items-center shadow-md">
                                        <span class="text-base font-black text-slate-900 dark:text-white leading-none">
                                            {{ $item->published_at ? $item->published_at->format('d') : '01' }}
                                        </span>
                                        <span class="text-[9px] font-extrabold text-slate-500 dark:text-slate-400 uppercase">
                                            {{ $item->published_at ? strtoupper($item->published_at->format('M')) : 'JAN' }}
                                        </span>
                                    </div>

                                    {{-- Category Pill --}}
                                    <div class="absolute bottom-3 left-4">
                                        <span class="text-[10px] font-black uppercase tracking-wider text-amber-300 bg-slate-950/80 backdrop-blur-sm px-2.5 py-1 rounded-md border border-white/10">
                                            {{ $item->category }}
                                        </span>
                                    </div>
                                </div>

                                {{-- Card Content --}}
                                <div class="p-6 flex-1 flex flex-col justify-between">
                                    <div>
                                        <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wide mb-1">
                                            {{ $item->author }}
                                        </span>
                                        
                                        <h3 class="text-base font-black text-slate-900 dark:text-white leading-snug line-clamp-2 uppercase group-hover:text-[#0d6efd] transition-colors mb-3">
                                            <a href="{{ route('guest.news.show', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </h3>

                                        <p class="text-xs text-slate-500 dark:text-slate-400 line-clamp-3 leading-relaxed mb-4">
                                            {{ $item->excerpt }}
                                        </p>

                                        @if(!empty($item->sdgs))
                                            <div class="flex flex-wrap gap-1 mb-4">
                                                @foreach(array_slice($item->sdgs, 0, 2) as $sdg)
                                                    <span class="text-[9px] font-bold text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded">
                                                        {{ $sdg }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                        <a href="{{ route('guest.news.show', $item->slug) }}" 
                                           class="text-xs font-bold text-[#104695] dark:text-blue-400 group-hover:underline flex items-center gap-1.5">
                                            <span>Read Article</span>
                                            <span>&rarr;</span>
                                        </a>
                                        <span class="text-[11px] text-slate-400">
                                            {{ $item->published_at ? $item->published_at->format('Y') : '' }}
                                        </span>
                                    </div>
                                </div>

                            </article>
                        @endforeach
                    </div>

                    {{-- Pagination Links --}}
                    <div class="pt-8">
                        {{ $news->links() }}
                    </div>
                @endif
            </section>

        </div>
    </main>
</x-guest-layout>
