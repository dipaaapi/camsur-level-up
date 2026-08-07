<x-guest-layout>
    {{-- Header Banner --}}
    <x-hero-banner 
        badge-text="Heritage & History"
        title="PROVINCE HISTORY"
        description="The origins, historical milestones, and cultural evolution of Camarines Sur."
    />

    {{-- Main Content --}}
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-sm border border-gray-100 space-y-8 text-gray-700 leading-relaxed text-sm">

            {{-- Timeline Item 1: Pre-Colonial Era --}}
            <div class="relative pl-6 border-l-2 border-amber-400 space-y-2">
                <span class="text-xs font-black text-amber-600 bg-amber-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                    Pre-Colonial Era
                </span>
                <h2 class="text-xl font-bold text-blue-950">Early Settlement along Bicol River</h2>
                <p>
                    Long before Spanish arrival, native Bicolanos thrived along the fertile banks of the Bicol River and around Lake Buhi and Lake Bato. Early communities engaged in farming, fishing, and trading with neighboring islands and Asian merchants.
                </p>
            </div>

            {{-- Timeline Item 2: Spanish Conquest (1573) --}}
            <div class="relative pl-6 border-l-2 border-blue-900 space-y-2">
                <span class="text-xs font-black text-blue-900 bg-blue-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                    1573 – Spanish Exploration
                </span>
                <h2 class="text-xl font-bold text-blue-950">Exploration by Juan de Salcedo</h2>
                <p>
                    In 1573, Spanish conquistador Juan de Salcedo explored the Bicol region. The Spanish colonizers observed numerous small bamboo granaries called <em>"Camarines"</em> (rice huts) throughout the plains, from which the name of the province was derived.
                </p>
            </div>

            {{-- Timeline Item 3: Division of Both Camarines (1829 & 1919) --}}
            <div class="relative pl-6 border-l-2 border-emerald-600 space-y-2">
                <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                    1829 & 1919 – Provincial Division
                </span>
                <h2 class="text-xl font-bold text-blue-950">Establishment of Camarines Sur</h2>
                <p>
                    In 1829, the province of <em>Ambos Camarines</em> was formally split into Camarines Norte and Camarines Sur. Although briefly re-united in 1893, the division was permanently finalized on March 3, 1919 under Legislative Act No. 2809.
                </p>
            </div>

            {{-- Timeline Item 4: Modern Era --}}
            <div class="relative pl-6 border-l-2 border-indigo-600 space-y-2">
                <span class="text-xs font-black text-indigo-700 bg-indigo-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                    Modern Era
                </span>
                <h2 class="text-xl font-bold text-blue-950">Premier Province of Bicol Region</h2>
                <p>
                    Today, Camarines Sur stands as the largest and most populous province in the Bicol Region. From its agricultural roots as the rice granary of Bicol, it has transformed into a world-class tourism, sports, and economic hub.
                </p>
            </div>

        </div>
    </main>
</x-guest-layout>
