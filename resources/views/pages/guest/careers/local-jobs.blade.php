@extends('layouts.guest')

@section('title', 'Private Local Jobs - PESO Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8" x-data="{ activeTab: 'directory', openFaq: false, selectedYear: '{{ $selectedYear }}' }">
    <div class="max-w-7xl mx-auto space-y-8">

        {{-- Hero Header --}}
        <x-jobs.banner 
            active="local"
            badge="Provincial Job Placement & PESO"
            title="Local Employment Opportunities"
            description="Mga fultime at part-time na trabaho sa mga pampubliko at pribadong kumpanya sa buong lalawigan ng Camarines Sur." 
        />

        {{-- Quick Stats / Employment Overview --}}
        <x-jobs.quick-stats type="local" :totalActive="$totalActive ?? 0" />

        {{-- Main Navigation Tabs (Directory & Analytics) --}}
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button @click="activeTab = 'directory'"
                    :class="activeTab === 'directory' ? 'border-blue-600 text-blue-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Private Local Job Directory
                </button>

                <button @click="activeTab = 'analytics'"
                    :class="activeTab === 'analytics' ? 'border-blue-600 text-blue-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                    Local Employment Trends & Analytics
                </button>
            </nav>
        </div>

        {{-- TAB 1: Private Local Job Directory --}}
        <div x-show="activeTab === 'directory'" class="space-y-6">
            
            {{-- Search & Filter Controls --}}
            <form method="GET" action="{{ route('careers.local') }}" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    {{-- Search Input --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">Search Keywords</label>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Job title, company, location..." class="w-full text-sm rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    {{-- Company Filter --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">Company / Employer</label>
                        <select name="company" class="w-full text-sm rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500">
                            <option value="">All Companies</option>
                            @foreach($availableCompanies as $company)
                                <option value="{{ $company }}" {{ request('company') == $company ? 'selected' : '' }}>{{ $company }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Employment Type Filter --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">Employment Type</label>
                        <select name="employment_type" class="w-full text-sm rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500">
                            <option value="">All Employment Types</option>
                            @foreach($availableEmploymentTypes as $type)
                                <option value="{{ $type }}" {{ request('employment_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Sorting & Submit --}}
                    <div class="flex items-end gap-2">
                        <button type="submit" class="flex-1 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold py-2 px-4 rounded-xl shadow transition-colors">
                            Filter Jobs
                        </button>
                        <a href="{{ route('careers.local') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-semibold py-2 px-4 rounded-xl transition-colors">
                            Reset
                        </a>
                    </div>
                </div>
            </form>

            {{-- Job Postings Grid/List --}}
            @if(isset($jobs) && $jobs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($jobs as $job)
                        <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="flex items-start justify-between gap-2">
                                    <span class="inline-flex px-2.5 py-1 text-xs font-bold rounded-lg bg-blue-100 text-blue-800">
                                        {{ $job->employment_type ?? 'Full-time' }}
                                    </span>
                                    @if($job->location)
                                        <span class="text-xs text-slate-500 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                            {{ $job->location }}
                                        </span>
                                    @endif
                                </div>

                                <h3 class="text-lg font-bold text-slate-900 line-clamp-2">{{ $job->title }}</h3>
                                <p class="text-xs font-semibold text-blue-700 uppercase tracking-wide">{{ $job->department_or_company ?? 'Private Partner Employer' }}</p>

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

                                <button @click="openFaq = true" class="w-full text-center text-xs font-bold text-blue-700 bg-blue-50 hover:bg-blue-100 py-2.5 rounded-xl transition-colors">
                                    View Requirements & How to Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $jobs->links() }}
                </div>
            @else
                <div class="bg-white rounded-2xl border border-slate-200 p-12 text-center space-y-3">
                    <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-base font-bold text-slate-800">Walang Nahanap na Bakanteng Trabaho</h3>
                    <p class="text-slate-500 text-xs max-w-md mx-auto">Subukang baguhin ang iyong search query o i-reset ang filter para makita ang iba pang job vacancies sa CamSur.</p>
                </div>
            @endif
        </div>

        {{-- TAB 2: Employment Trends & Analytics --}}
        <div x-show="activeTab === 'analytics'" class="space-y-6" x-cloak>
            
            {{-- Interactive Chart Card --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b pb-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Local Employment Trend Analysis</h3>
                        <p class="text-xs text-slate-500">Bilang ng mga inilabas na trabaho kada buwan ayon sa kategorya</p>
                    </div>

                    {{-- Dynamic Year Selector --}}
                    <div class="flex items-center gap-2">
                        <label class="text-xs font-semibold text-slate-600">Pumili ng Taon:</label>
                        <select id="trendYearSelect" @change="updateTrendGraph($event.target.value)" class="text-xs font-bold rounded-xl border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                            @foreach($availableYears as $year)
                                <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Chart Canvas --}}
                <div class="relative h-80 w-full">
                    <canvas id="localJobTrendChart"></canvas>
                </div>
            </div>

            {{-- Wisdom / Career Advice Card --}}
            <div class="bg-slate-900 text-white p-6 rounded-2xl shadow-sm space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-400">PESO Camarines Sur Tip</span>
                <h3 class="text-lg font-bold">Maghanda para sa Local Job Interview</h3>
                <p class="text-slate-300 text-xs leading-relaxed">
                    Siguraduhing updated ang iyong Resume/CV, ihanda ang iyong 2x2 ID picture, NBI/Police Clearance, at tiyaking dumating nang maaga sa nakatakdang interview o Job Fair site ng PESO CamSur.
                </p>
            </div>
        </div>

    </div>

    {{-- Place this near the end before @endsection --}}
    <x-jobs.faq-modal type="local" />

</div>

{{-- Chart.js CDN for Analytics --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    let localChartInstance = null;

    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('localJobTrendChart').getContext('2d');
        const initialGraphData = @json($graphData ?? ['labels' => [], 'datasets' => []]);

        localChartInstance = new Chart(ctx, {
            type: 'line',
            data: initialGraphData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    y: { beginAtZero: true, ticks: { precision: 0 } }
                }
            }
        });
    });

    function updateTrendGraph(selectedYear) {
        fetch("{{ route('careers.local.filter-graph') }}?year=" + selectedYear, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(res => res.json())
        .then(resData => {
            if (resData.status === 'success' && localChartInstance) {
                localChartInstance.data = resData.data;
                localChartInstance.update();
            }
        })
        .catch(err => console.error("Error updating graph:", err));
    }
</script>
@endsection