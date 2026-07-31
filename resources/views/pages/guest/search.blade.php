<x-guest-layout>
    {{-- Header Banner Section --}}
    <section class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-12 px-4 sm:px-6 lg:px-8 shadow-inner">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-2xl sm:text-4xl font-extrabold uppercase tracking-wider">
                Search Camarines Sur Portal
            </h1>
            <p class="mt-2 text-blue-200 text-sm sm:text-base">
                Find official news, public services, provincial ordinances, and tourism destinations.
            </p>

            {{-- Big Interactive Search Input --}}
            <form action="{{ route('search') }}" method="GET" class="mt-6 flex items-center bg-white rounded-xl shadow-lg p-1.5 focus-within:ring-4 focus-within:ring-amber-400/50 transition">
                <div class="pl-3 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text"
                       name="q"
                       value="{{ request('q') }}"
                       placeholder="Type your search here (e.g. Permits, Caramoan, Ordinance)..."
                       class="w-full text-gray-800 placeholder-gray-400 px-4 py-2 bg-transparent border-none focus:outline-none text-base">
                <button type="submit" class="bg-amber-400 hover:bg-amber-300 text-blue-950 font-bold px-6 py-2.5 rounded-lg transition">
                    Search
                </button>
            </form>

            {{-- Quick Filter Chips --}}
            <div class="flex flex-wrap justify-center gap-2 mt-4 text-xs">
                <span class="text-slate-300 self-center">Popular:</span>
                <a href="?q=E-Services" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full transition">E-Services</a>
                <a href="?q=Scholarship" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full transition">Scholarship</a>
                <a href="?q=Procurement" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full transition">Procurement / BAC</a>
                <a href="?q=Caramoan" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full transition">Caramoan Islands</a>
            </div>
        </div>
    </section>

    {{-- Results Content Container --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex justify-between items-center mb-6 border-b border-gray-200 pb-4">
            <h2 class="text-xl font-bold text-gray-800">
                @if(request('q'))
                    Search Results for <span class="text-blue-900 font-extrabold">"{{ request('q') }}"</span>
                @else
                    All Searchable Content
                @endif
            </h2>
            <span class="text-xs text-gray-500 font-medium">Showing top results</span>
        </div>

        {{-- Results Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Sample Result Item 1 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-blue-100 text-blue-900 text-[10px] font-bold uppercase px-2 py-0.5 rounded">E-Services</span>
                        <span class="text-xs text-gray-400">Updated 2 days ago</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg hover:text-blue-900 transition">
                        <a href="#">Provincial Business Permit & Tax Clearance</a>
                    </h3>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                        Online application system for securing provincial tax clearances, business permits, and governor's endorsement.
                    </p>
                </div>
                <a href="#" class="mt-4 text-xs font-bold text-blue-900 hover:text-amber-600 inline-flex items-center gap-1">
                    Apply Online &rarr;
                </a>
            </div>

            {{-- Sample Result Item 2 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-emerald-100 text-emerald-900 text-[10px] font-bold uppercase px-2 py-0.5 rounded">Tourism</span>
                        <span class="text-xs text-gray-400">Destination</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg hover:text-blue-900 transition">
                        <a href="#">Caramoan Peninsula & Island Hopping Guide</a>
                    </h3>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                        Explore pristine white sand beaches, limestone cliffs, and island-hopping tours across the Caramoan archipelago.
                    </p>
                </div>
                <a href="{{ route('tourism') }}" class="mt-4 text-xs font-bold text-blue-900 hover:text-amber-600 inline-flex items-center gap-1">
                    View Tourism Guide &rarr;
                </a>
            </div>

            {{-- Sample Result Item 3 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-amber-100 text-amber-900 text-[10px] font-bold uppercase px-2 py-0.5 rounded">Transparency</span>
                        <span class="text-xs text-gray-400">BAC Document</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg hover:text-blue-900 transition">
                        <a href="#">Bids and Awards Committee (BAC) Notices</a>
                    </h3>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                        Official invitations to bid, bidding documents, and notices of award for provincial infrastructure projects.
                    </p>
                </div>
                <a href="#" class="mt-4 text-xs font-bold text-blue-900 hover:text-amber-600 inline-flex items-center gap-1">
                    Browse BAC Documents &rarr;
                </a>
            </div>
        </div>
    </main>
</x-guest-layout>
