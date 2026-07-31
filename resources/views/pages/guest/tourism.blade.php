<x-guest-layout>
    {{-- Tourism Hero Section --}}
    <section class="relative bg-slate-900 text-white py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
        {{-- Background Overlay --}}
        <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1600&q=80');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>

        <div class="relative max-w-5xl mx-auto text-center">
            <span class="bg-amber-400 text-blue-950 text-xs font-extrabold uppercase tracking-widest px-3 py-1 rounded-full">
                Visit Camarines Sur
            </span>
            <h1 class="mt-4 text-3xl sm:text-5xl font-black uppercase tracking-tight text-white leading-tight">
                Discover the Eco-Adventure Capital of the Philippines
            </h1>
            <p class="mt-4 text-slate-200 text-base sm:text-lg max-w-3xl mx-auto">
                From world-class wakeboarding and pristine island beaches to rich heritage sites and majestic mountain peaks.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="#destinations" class="bg-amber-400 hover:bg-amber-300 text-blue-950 font-bold px-6 py-3 rounded-lg shadow-lg transition">
                    Explore Destinations
                </a>
                <a href="#activities" class="bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-lg border border-white/20 transition">
                    Things to Do
                </a>
            </div>
        </div>
    </section>

    {{-- Destinations Showcase --}}
    <main id="destinations" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-black text-blue-950 uppercase tracking-wide">Top Tourist Destinations</h2>
            <p class="text-gray-600 mt-1 text-sm">Experience the best spots across Camarines Sur</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Destination 1 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=600&q=80"
                         alt="Caramoan Islands"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 right-3 bg-blue-950/80 text-white text-[10px] font-bold uppercase px-2 py-1 rounded backdrop-blur-sm">Islands & Beaches</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-900 transition">Caramoan Islands</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Pristine white sand beaches, hidden lagoons, and towering limestone formations made famous worldwide.
                    </p>
                </div>
            </div>

            {{-- Destination 2 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=600&q=80"
                         alt="CWC Water Sports Complex"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 right-3 bg-amber-500/90 text-blue-950 text-[10px] font-extrabold uppercase px-2 py-1 rounded backdrop-blur-sm">Sports & Adventure</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-900 transition">CWC Water Sports Complex</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        World-renowned six-point cable park for wakeboarding, wakeskating, and waterskiing located in Pili.
                    </p>
                </div>
            </div>

            {{-- Destination 3 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=600&q=80"
                         alt="Mt. Isarog National Park"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 right-3 bg-emerald-600/80 text-white text-[10px] font-bold uppercase px-2 py-1 rounded backdrop-blur-sm">Eco-Hiking</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-900 transition">Mt. Isarog National Park</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Majestic extinct volcano offering lush rainforest trails, Malabsay Falls, and rich biodiversity.
                    </p>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
