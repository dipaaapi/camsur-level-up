<x-guest-layout>
    {{-- Header Banner --}}
    <section class="bg-blue-950 text-white py-12 px-4 sm:px-6 lg:px-8 border-b-4 border-amber-400">
        <div class="max-w-7xl mx-auto">
            <span class="text-xs font-bold text-amber-300 uppercase tracking-widest">Transparency Portal</span>
            <h1 class="text-3xl font-black uppercase mt-1">Bids & Awards Committee (BAC)</h1>
            <p class="text-blue-200 text-sm mt-1">Official Procurement Notices, Invitations to Bid, and Awarded Contracts.</p>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        {{-- Search & Filter Controls --}}
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <input type="text" placeholder="Search procurement reference or project name..." class="w-full md:w-96 text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
            <div class="flex gap-2 text-xs">
                <button class="bg-blue-900 text-white font-bold px-4 py-2 rounded-lg">All Bids</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-lg">Goods & Services</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-lg">Infrastructure</button>
            </div>
        </div>

        {{-- BAC Bids Table --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-slate-100 text-blue-950 text-xs font-bold uppercase border-b border-gray-200">
                        <th class="p-4">Ref. No.</th>
                        <th class="p-4">Project Title / Description</th>
                        <th class="p-4">Approved Budget (ABC)</th>
                        <th class="p-4">Opening Date</th>
                        <th class="p-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-blue-50/50 transition">
                        <td class="p-4 font-mono font-bold text-blue-900">BAC-2026-001</td>
                        <td class="p-4">
                            <span class="font-bold text-gray-900 block">Supply and Delivery of Medical Equipment</span>
                            <span class="text-xs text-gray-500">Provincial Health Office - Goods</span>
                        </td>
                        <td class="p-4 font-semibold text-gray-800">₱ 2,500,000.00</td>
                        <td class="p-4 text-xs text-gray-600">Aug 15, 2026</td>
                        <td class="p-4 text-center">
                            <a href="#" class="inline-block bg-amber-400 hover:bg-amber-300 text-blue-950 text-xs font-bold px-3 py-1.5 rounded transition">
                                Download PDF
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</x-guest-layout>
