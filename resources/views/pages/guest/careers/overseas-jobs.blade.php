@extends('layouts.guest')

@section('title', 'Overseas Careers - PESO Camarines Sur')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8" 
     x-data="{ 
        activeTab: 'directory', 
        openFaq: false, 
        viewMode: 'table', 
        selectedJob: null, 
        showJobModal: false,
        activeShareId: null,
        openJobModal(job) { this.selectedJob = job; this.showJobModal = true; },
        closeJobModal() { this.showJobModal = false; this.selectedJob = null; },
        toggleShare(id) { this.activeShareId = this.activeShareId === id ? null : id; }
     }">

    <div class="max-w-7xl mx-auto space-y-8">

        {{-- Hero Header --}}
        <x-jobs.banner 
            active="overseas"
            badge="DMW / POEA Accredited Jobs"
            title="Overseas Job Opportunities"
            description="Ligtas, legal, at lisensyadong mga oportunidad sa ibang bansa para sa mga mamamayan ng Camarines Sur." 
        />

        {{-- Quick Stats / Overview --}}
        <x-jobs.quick-stats type="overseas" :totalActive="$totalActive ?? 0" />

        {{-- Main Navigation Tabs (Directory & Insights) --}}
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button @click="activeTab = 'directory'"
                    :class="activeTab === 'directory' ? 'border-sky-600 text-sky-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Overseas Vacancies Directory
                </button>

                <button @click="activeTab = 'insights'"
                    :class="activeTab === 'insights' ? 'border-sky-600 text-sky-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Global Insights & DMW Protection Guide
                </button>
            </nav>
        </div>

        {{-- TAB 1: Overseas Vacancies Directory --}}
        <div x-show="activeTab === 'directory'" class="space-y-6">
            
            {{-- Search & View Controls Toolbar --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <form method="GET" action="{{ route('careers.overseas') }}" class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    
                    <div class="relative flex-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">🔍</span>
                        <input type="text" name="search" value="{{ request('search') }}" 
                               placeholder="Search job title, DMW agency, or country (e.g. Nurse, Dubai, Saudi)..." 
                               class="w-full pl-10 pr-4 py-2.5 text-sm bg-slate-50 border border-slate-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        <select name="per_page" onchange="this.form.submit()" class="bg-slate-50 border border-slate-300 text-slate-700 text-xs font-semibold rounded-xl px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-sky-500">
                            <option value="10" {{ (isset($perPage) && $perPage == 10) ? 'selected' : '' }}>Show 10</option>
                            <option value="25" {{ (isset($perPage) && $perPage == 25) ? 'selected' : '' }}>Show 25</option>
                            <option value="50" {{ (isset($perPage) && $perPage == 50) ? 'selected' : '' }}>Show 50</option>
                        </select>

                        <button type="submit" class="bg-sky-700 hover:bg-sky-800 text-white font-bold px-4 py-2.5 rounded-xl text-xs transition shadow-sm">
                            Filter
                        </button>

                        @if(request()->hasAny(['search', 'per_page']))
                            <a href="{{ route('careers.overseas') }}" class="bg-rose-50 hover:bg-rose-100 border border-rose-200 text-rose-700 font-bold px-3 py-2.5 rounded-xl text-xs transition">
                                Reset
                            </a>
                        @endif

                        {{-- View Switcher --}}
                        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl border border-slate-200 ml-auto md:ml-0">
                            <button type="button" @click="viewMode = 'table'" 
                                    :class="viewMode === 'table' ? 'bg-white text-sky-700 shadow-sm font-bold' : 'text-slate-500 font-medium'" 
                                    class="px-3 py-1.5 rounded-lg text-xs transition flex items-center gap-1">
                                📄 Table
                            </button>
                            <button type="button" @click="viewMode = 'grid'" 
                                    :class="viewMode === 'grid' ? 'bg-white text-sky-700 shadow-sm font-bold' : 'text-slate-500 font-medium'" 
                                    class="px-3 py-1.5 rounded-lg text-xs transition flex items-center gap-1">
                                📱 Cards
                            </button>
                        </div>
                    </div>

                </form>
            </div>

            {{-- VIEW MODE 1: Table View --}}
            <div x-show="viewMode === 'table'" class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs text-slate-600">
                        <thead class="bg-slate-100 text-slate-700 uppercase font-bold text-[11px] border-b border-slate-200">
                            <tr>
                                <th class="p-4">Position Title & DMW Agency</th>
                                <th class="p-4">Destination Country</th>
                                <th class="p-4">Contract Duration</th>
                                <th class="p-4">Deadline</th>
                                <th class="p-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($jobs as $job)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4">
                                        <div class="font-bold text-slate-900 text-sm">{{ $job->title }}</div>
                                        <div class="text-[11px] font-semibold text-sky-700 uppercase">{{ $job->department_or_company }}</div>
                                    </td>
                                    <td class="p-4 font-bold text-slate-900">
                                        <span class="inline-flex items-center gap-1.5 bg-sky-50 border border-sky-200 text-sky-900 px-2.5 py-1 rounded-lg">
                                            🌏 {{ $job->location }}
                                        </span>
                                    </td>
                                    <td class="p-4 font-medium text-slate-700">
                                        {{ $job->employment_type ?? '2-Year Contract' }}
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700">
                                        {{ $job->deadline ? \Carbon\Carbon::parse($job->deadline)->format('M d, Y') : 'Open until filled' }}
                                    </td>
                                    <td class="p-4 text-right">
                                        <div class="inline-flex items-center gap-2">
                                            <button @click="openJobModal({{ json_encode($job) }})" class="bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold px-3 py-1.5 rounded-lg text-xs transition">
                                                Full Details
                                            </button>
                                            @if($job->application_link_or_email)
                                                <a href="{{ Str::startsWith($job->application_link_or_email, 'http') ? $job->application_link_or_email : 'mailto:' . $job->application_link_or_email }}" 
                                                   target="_blank" 
                                                   class="bg-sky-600 hover:bg-sky-700 text-white font-bold px-3 py-1.5 rounded-lg text-xs transition">
                                                    Apply Now
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-8 text-center text-slate-500 font-medium">Walang nahanap na overseas job records.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-slate-100">
                    {{ $jobs->links() }}
                </div>
            </div>

            {{-- VIEW MODE 2: Card Grid View --}}
            <div x-show="viewMode === 'grid'" x-cloak class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($jobs as $job)
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-start justify-between gap-2">
                                <span class="inline-flex px-2.5 py-1 text-xs font-bold rounded-lg bg-sky-100 text-sky-900 border border-sky-200">
                                    🌏 {{ $job->location }}
                                </span>
                                <span class="text-xs text-slate-500 font-medium">
                                    {{ $job->employment_type ?? 'Contractual' }}
                                </span>
                            </div>

                            <h3 class="text-lg font-bold text-slate-900 line-clamp-2">{{ $job->title }}</h3>
                            <p class="text-xs font-semibold text-sky-700 uppercase tracking-wide">{{ $job->department_or_company }}</p>

                            <p class="text-slate-600 text-xs line-clamp-3 leading-relaxed">
                                {{ Str::limit($job->description, 140) }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-100 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-500">
                                <span>Posted: {{ \Carbon\Carbon::parse($job->posted_at)->format('M d, Y') }}</span>
                                @if($job->deadline)
                                    <span class="text-rose-600 font-medium">Deadline: {{ \Carbon\Carbon::parse($job->deadline)->format('M d, Y') }}</span>
                                @endif
                            </div>

                            <div class="flex items-center gap-2">
                                <button @click="openJobModal({{ json_encode($job) }})" class="flex-1 text-center text-xs font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 py-2.5 rounded-xl transition-colors">
                                    View Details
                                </button>
                                @if($job->application_link_or_email)
                                    <a href="{{ Str::startsWith($job->application_link_or_email, 'http') ? $job->application_link_or_email : 'mailto:' . $job->application_link_or_email }}" 
                                       target="_blank" 
                                       class="flex-1 text-center text-xs font-bold text-white bg-sky-600 hover:bg-sky-700 py-2.5 rounded-xl transition-colors shadow-sm">
                                        Apply
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full bg-white rounded-2xl border border-slate-200 p-12 text-center space-y-3">
                        <p class="text-slate-500 text-xs">Walang nahanap na overseas job postings.</p>
                    </div>
                @endforelse
            </div>

        </div>

        {{-- TAB 2: Global Insights & Protection Guide --}}
        <div x-show="activeTab === 'insights'" class="space-y-6" x-cloak>
            
            {{-- Destination Countries Breakdown --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <h3 class="text-base font-bold text-slate-900 border-b pb-3">Destinations & Job Openings Distribution</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @if(isset($destinationStats) && count($destinationStats) > 0)
                        @foreach($destinationStats as $country => $count)
                            @php 
                                $percentage = (isset($totalActive) && $totalActive > 0) ? round(($count / $totalActive) * 100) : 0;
                            @endphp
                            <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/60 flex flex-col justify-between">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-bold text-slate-800 text-sm">🌏 {{ $country }}</span>
                                    <span class="text-xs bg-sky-100 text-sky-800 font-bold px-2 py-0.5 rounded">{{ $count }} jobs</span>
                                </div>
                                <div class="w-full bg-slate-200 h-2 rounded-full overflow-hidden mb-1">
                                    <div class="bg-sky-600 h-2 rounded-full" style="width: {{ $percentage }}%"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 text-right block">{{ $percentage }}% of total openings</span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            {{-- Anti-Illegal Recruitment Checklist Card --}}
            <div class="bg-slate-900 text-white p-6 sm:p-8 rounded-2xl shadow-sm space-y-4">
                <div class="flex items-center gap-2 text-amber-400 font-bold text-xs uppercase tracking-wider">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    DMW Anti-Illegal Recruitment Checklist
                </div>
                <h3 class="text-xl font-bold">Gabay sa Ligtas na Pag-apply sa Ibang Bansa</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2 text-xs text-slate-300">
                    <div class="bg-white/10 p-4 rounded-xl border border-white/10 space-y-1">
                        <strong class="text-white block text-sm">1. Verify Agency License</strong>
                        <p class="leading-relaxed">Siguraduhing may validong lisensya mula sa Department of Migrant Workers (DMW / POEA) ang recruitment agency.</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-xl border border-white/10 space-y-1">
                        <strong class="text-white block text-sm">2. Check Approved Job Orders</strong>
                        <p class="leading-relaxed">Huwag mag-abot ng pera o magsumite ng orihinal na dokumento kung walang nakatala at rehistradong Job Order.</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-xl border border-white/10 space-y-1">
                        <strong class="text-white block text-sm">3. No Placement Fee Policy</strong>
                        <p class="leading-relaxed">Ang mga Seafarers, Domestic Workers, at mga papuntang USA, UK, Canada, o Japan ay BAWAL singilin ng placement fee.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    {{-- Place this near the end before @endsection --}}
    <x-jobs.faq-modal type="overseas" />
</div>
@endsection