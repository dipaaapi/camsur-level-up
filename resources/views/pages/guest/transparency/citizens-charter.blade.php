<x-guest-layout>
    {{-- Header Banner --}}
    <section class="bg-blue-950 text-white py-12 px-4 sm:px-6 lg:px-8 border-b-4 border-amber-400">
        <div class="max-w-7xl mx-auto">
            <span class="text-xs font-bold text-amber-300 uppercase tracking-widest">Transparency Portal</span>
            <h1 class="text-3xl font-black uppercase mt-1">Citizen's Charter</h1>
            <p class="text-blue-200 text-sm mt-1">Guide to key provincial government services, requirements, processing time, and responsible offices.</p>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Service Category Card 1 --}}
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-blue-100 text-blue-900 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                    🏢
                </div>
                <h3 class="text-lg font-bold text-blue-950">Administrative & General Services</h3>
                <p class="text-xs text-gray-600 mt-2">Issuance of certifications, use of provincial facilities, and general public inquiries.</p>
                <a href="#" class="inline-block mt-4 text-xs font-bold text-blue-900 hover:text-amber-600">Download Guide (PDF) &rarr;</a>
            </div>

            {{-- Service Category Card 2 --}}
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-900 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                    🏥
                </div>
                <h3 class="text-lg font-bold text-blue-950">Health & Social Services</h3>
                <p class="text-xs text-gray-600 mt-2">Medical assistance, hospital admissions, financial aid, and social welfare programs.</p>
                <a href="#" class="inline-block mt-4 text-xs font-bold text-blue-900 hover:text-amber-600">Download Guide (PDF) &rarr;</a>
            </div>

            {{-- Service Category Card 3 --}}
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-amber-100 text-amber-900 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                    🌾
                </div>
                <h3 class="text-lg font-bold text-blue-950">Agriculture & Veterinary</h3>
                <p class="text-xs text-gray-600 mt-2">Farmer assistance, crop insurance support, livestock vaccination, and agricultural equipment rental.</p>
                <a href="#" class="inline-block mt-4 text-xs font-bold text-blue-900 hover:text-amber-600">Download Guide (PDF) &rarr;</a>
            </div>

        </div>
    </main>
</x-guest-layout>
