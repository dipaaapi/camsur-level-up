<x-guest-layout>
    {{-- Header Banner --}}
    <section class="bg-blue-950 text-white py-12 px-4 sm:px-6 lg:px-8 border-b-4 border-amber-400">
        <div class="max-w-7xl mx-auto">
            <span class="text-xs font-bold text-amber-300 uppercase tracking-widest">About Camsur</span>
            <h1 class="text-3xl font-black uppercase mt-1">Socio-Economic Profile</h1>
            <p class="text-blue-200 text-sm mt-1">Comprehensive indicators on agriculture, economy, infrastructure, and human development.</p>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-8">

        {{-- Economic Key Statistics Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 border-l-4 border-l-blue-900">
                <span class="text-xs font-bold text-gray-500 uppercase">Major Industry</span>
                <p class="text-xl font-black text-blue-950 mt-1">Agriculture & Tourism</p>
                <p class="text-xs text-gray-500 mt-2">Rice, Coconut, Corn, Eco-Tourism</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 border-l-4 border-l-amber-400">
                <span class="text-xs font-bold text-gray-500 uppercase">Employment Rate</span>
                <p class="text-2xl font-black text-blue-950 mt-1">94.2%</p>
                <p class="text-xs text-emerald-600 font-semibold mt-2">↑ Steady Growth</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 border-l-4 border-l-emerald-600">
                <span class="text-xs font-bold text-gray-500 uppercase">Registered Businesses</span>
                <p class="text-2xl font-black text-blue-950 mt-1">15,400+</p>
                <p class="text-xs text-gray-500 mt-2">MSMEs & Commercial Hubs</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 border-l-4 border-l-indigo-600">
                <span class="text-xs font-bold text-gray-500 uppercase">Electrification Rate</span>
                <p class="text-2xl font-black text-blue-950 mt-1">98.5%</p>
                <p class="text-xs text-gray-500 mt-2">Barangay Power Coverage</p>
            </div>
        </div>

        {{-- Detailed Sections --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-blue-950 uppercase border-b pb-3 mb-4">🌾 Agricultural Sector</h2>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Camarines Sur remains the rice granary of the Bicol Region. Millions of hectares are dedicated to palay production, coconut plantations, and inland fisheries around Lake Buhi and Lake Bato.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-blue-950 uppercase border-b pb-3 mb-4">🏗️ Infrastructure & Utilities</h2>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Connected by major highways, Naga Airport in Pili, and expanding seaport facilities in Pasacao, facilitating smooth trade routes between Luzon and Visayas.
                </p>
            </div>
        </div>

    </main>
</x-guest-layout>
