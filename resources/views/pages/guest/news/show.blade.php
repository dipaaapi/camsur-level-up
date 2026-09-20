<x-guest-layout>
    {{-- 🚀 Header Banner --}}
    <x-hero-banner
        badge-text="Official Public Release & Bulletin"
        title="{{ $article->category }}"
        description="Official communication released by {{ $article->author }} for the Provincial Government of Camarines Sur."
    />

    <main class="min-h-screen bg-slate-50 dark:bg-slate-950 py-12 transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            {{-- Breadcrumb & Back Link --}}
            <nav class="flex items-center gap-2 text-xs font-bold text-slate-500 dark:text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-[#104695] dark:hover:text-blue-400">Home</a>
                <span>&rsaquo;</span>
                <a href="{{ route('guest.news.index') }}" class="hover:text-[#104695] dark:hover:text-blue-400">News & Media</a>
                <span>&rsaquo;</span>
                <span class="text-slate-800 dark:text-slate-200 truncate max-w-xs">{{ $article->title }}</span>
            </nav>

            {{-- Main Article Card --}}
            <article class="bg-white dark:bg-slate-900 rounded-[32px] overflow-hidden shadow-xl border border-slate-200/80 dark:border-slate-800">
                
                {{-- Banner Image --}}
                @if($article->image)
                    <div class="relative h-72 sm:h-96 md:h-[480px] overflow-hidden">
                        <img src="{{ $article->image }}" 
                             alt="{{ $article->title }}"
                             class="w-full h-full object-cover"
                             onerror="this.src='{{ asset('img/home/stories/capitol.jpg') }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                        {{-- Floating Date Pill --}}
                        <div class="absolute bottom-6 left-6 flex items-center gap-3">
                            <div class="bg-white/95 dark:bg-slate-900/90 backdrop-blur-md px-4 py-2.5 rounded-2xl flex flex-col items-center shadow-lg">
                                <span class="text-2xl font-black text-slate-900 dark:text-white leading-none">
                                    {{ $article->published_at ? $article->published_at->format('d') : '01' }}
                                </span>
                                <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                    {{ $article->published_at ? strtoupper($article->published_at->format('M')) : 'JAN' }}
                                </span>
                            </div>

                            <span class="bg-[#104695] text-white text-xs font-black uppercase px-4 py-2 rounded-full shadow-lg">
                                {{ $article->category }}
                            </span>
                        </div>
                    </div>
                @endif

                {{-- Body Container --}}
                <div class="p-6 sm:p-12 space-y-8">
                    
                    {{-- Meta Header --}}
                    <div class="border-b border-slate-100 dark:border-slate-800 pb-6">
                        <div class="flex flex-wrap items-center gap-4 text-xs font-bold text-slate-500 dark:text-slate-400 mb-3">
                            <span class="flex items-center gap-1.5 text-[#104695] dark:text-blue-400">
                                🏛️ {{ $article->author }}
                            </span>
                            <span>&bull;</span>
                            <span>Published on {{ $article->published_at ? $article->published_at->format('F d, Y \a\t h:i A') : '' }}</span>
                        </div>

                        <h1 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white uppercase tracking-tight leading-tight">
                            {{ $article->title }}
                        </h1>
                    </div>

                    {{-- Excerpt Highlight Quote --}}
                    <div class="bg-blue-50 dark:bg-blue-950/40 border-l-4 border-[#104695] p-5 rounded-r-2xl text-slate-700 dark:text-blue-200 text-sm sm:text-base leading-relaxed italic">
                        {{ $article->excerpt }}
                    </div>

                    {{-- Full Content Text --}}
                    <div class="prose prose-slate dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed space-y-4">
                        @if($article->content)
                            <p>{{ $article->content }}</p>
                        @else
                            <p>
                                The Provincial Government of Camarines Sur continues its unwavering commitment to elevating the quality of life for all Camarinenses through progressive governance, infrastructure modernization, and community-driven welfare initiatives.
                            </p>
                            <p>
                                Official programs launched by {{ $article->author }} reflect the province's active partnership with national agencies, non-government organizations, and local government units across all 35 municipalities and 2 component cities.
                            </p>
                            <p>
                                For more updates and official documentation regarding this release, citizens and stakeholders may contact the Provincial Information Office or visit the Capitol Complex in Pili.
                            </p>
                        @endif
                    </div>

                    {{-- UN SDG Tags --}}
                    @if(!empty($article->sdgs))
                        <div class="pt-6 border-t border-slate-100 dark:border-slate-800">
                            <span class="text-xs font-black uppercase tracking-wider text-slate-400 block mb-2">
                                Aligned Sustainable Development Goals (SDGs):
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach($article->sdgs as $sdg)
                                    <span class="text-xs font-bold text-white bg-[#104695] px-3 py-1 rounded-lg">
                                        {{ $sdg }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Social Share & Return Actions --}}
                    <div class="pt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('guest.news.index') }}" 
                           class="inline-flex items-center gap-2 text-xs font-bold uppercase text-[#104695] dark:text-blue-400 hover:underline">
                            <span>&larr;</span>
                            <span>Return to News Hub</span>
                        </a>

                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <span>Share this article:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="px-3 py-1 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700">Facebook</a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}" target="_blank" class="px-3 py-1 bg-black text-white rounded-lg font-bold hover:bg-gray-800">X</a>
                        </div>
                    </div>

                </div>
            </article>

            {{-- 📰 Related Stories Grid --}}
            @if($related->isNotEmpty())
                <section class="space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-3">
                        <h3 class="text-lg font-black uppercase text-slate-900 dark:text-white flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                            Related Capitol Stories
                        </h3>
                        <a href="{{ route('guest.news.index') }}" class="text-xs font-bold text-[#104695] dark:text-blue-400 hover:underline">
                            View All &rarr;
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($related as $rel)
                            <article class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-md border border-slate-200/80 dark:border-slate-800 transition-all flex flex-col justify-between group">
                                <div class="relative h-44 overflow-hidden">
                                    <img src="{{ $rel->image ?? asset('img/home/stories/capitol.jpg') }}" 
                                         alt="{{ $rel->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         onerror="this.src='{{ asset('img/home/stories/capitol.jpg') }}'">
                                </div>
                                <div class="p-4 flex-1 flex flex-col justify-between">
                                    <div>
                                        <span class="text-[10px] font-bold text-[#104695] dark:text-blue-400 uppercase tracking-wider block mb-1">
                                            {{ $rel->category }}
                                        </span>
                                        <h4 class="text-xs font-black uppercase text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-[#104695] transition-colors">
                                            <a href="{{ route('guest.news.show', $rel->slug) }}">
                                                {{ $rel->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <span class="text-[10px] text-slate-400 pt-2 border-t border-slate-100 dark:border-slate-800 block">
                                        {{ $rel->published_at ? $rel->published_at->format('M d, Y') : '' }}
                                    </span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endif

        </div>
    </main>
</x-guest-layout>
