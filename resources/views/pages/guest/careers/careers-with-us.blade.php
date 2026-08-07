@extends('layouts.guest')

@section('title', 'Government Careers - Provincial Government of Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8" x-data="{ activeTab: 'directory', openFaq: false, selectedFaqCategory: 'all' }">
    <div class="max-w-7xl mx-auto space-y-8">

        {{-- Hero Header --}}
        <x-jobs.banner 
            active="government"
            badge="Civil Service Opportunities"
            title="Careers with Us"
            description="Maglingkod sa lalawigan ng Camarines Sur. Tuklasin ang mga bakanteng posisyon sa pamahalaang panlalawigan at maging bahagi ng tapat at dedikadong serbisyo publiko." 
        />

        {{-- Quick Stats / Employment Overview --}}
        <x-jobs.quick-stats type="government" :totalActive="$totalActive ?? 0" />

        {{-- Main Navigation Tabs (Only 2 Tabs: Directory & Analytics) --}}
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button @click="activeTab = 'directory'"
                    :class="activeTab === 'directory' ? 'border-emerald-600 text-emerald-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Government Job Directory
                </button>

                <button @click="activeTab = 'analytics'"
                    :class="activeTab === 'analytics' ? 'border-emerald-600 text-emerald-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    Announcements & Analytics
                </button>
            </nav>
        </div>

        {{-- TAB 1: Government Job Directory --}}
        <div x-show="activeTab === 'directory'" class="space-y-6">
            
            {{-- Search & Filter Controls --}}
            <form method="GET" action="{{ route('careers.government') }}" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    {{-- Search Input --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">Search Keywords</label>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Position title or department..." class="w-full text-sm rounded-xl border-slate-300 focus:border-emerald-500 focus:ring-emerald-500">
                    </div>

                    {{-- Employment Type Filter (Government Standard) --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">Employment Type</label>
                        <select name="employment_type" class="w-full text-sm rounded-xl border-slate-300 focus:border-emerald-500 focus:ring-emerald-500">
                            <option value="">All Employment Types</option>
                            <option value="Permanent" {{ request('employment_type') == 'Permanent' ? 'selected' : '' }}>Permanent (Plantilla)</option>
                            <option value="Temporary" {{ request('employment_type') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                            <option value="Contractual" {{ request('employment_type') == 'Contractual' ? 'selected' : '' }}>Contractual</option>
                            <option value="Casual" {{ request('employment_type') == 'Casual' ? 'selected' : '' }}>Casual</option>
                            <option value="Job Order" {{ request('employment_type') == 'Job Order' ? 'selected' : '' }}>Job Order (JO)</option>
                            <option value="Contract of Service" {{ request('employment_type') == 'Contract of Service' ? 'selected' : '' }}>Contract of Service (COS)</option>
                        </select>
                    </div>

                    {{-- CSC Eligibility Filter --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 uppercase mb-1">CSC Eligibility</label>
                        <select name="csc_filter" class="w-full text-sm rounded-xl border-slate-300 focus:border-emerald-500 focus:ring-emerald-500">
                            <option value="">All Options</option>
                            <option value="required" {{ request('csc_filter') == 'required' ? 'selected' : '' }}>CSC Eligibility Required</option>
                            <option value="not_required" {{ request('csc_filter') == 'not_required' ? 'selected' : '' }}>Not Required / Open</option>
                        </select>
                    </div>

                    {{-- Items Per Page & Buttons --}}
                    <div class="flex items-end gap-2">
                        <button type="submit" class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold py-2 px-4 rounded-xl shadow transition-colors">
                            Filter Jobs
                        </button>
                        <a href="{{ route('careers.government') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-semibold py-2 px-4 rounded-xl transition-colors">
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
                                    <span @class([
                                        'inline-flex px-2.5 py-1 text-xs font-bold rounded-lg',
                                        'bg-emerald-100 text-emerald-800' => ($job->employment_type ?? '') === 'Permanent',
                                        'bg-blue-100 text-blue-800' => ($job->employment_type ?? '') === 'Temporary',
                                        'bg-purple-100 text-purple-800' => ($job->employment_type ?? '') === 'Contractual',
                                        'bg-amber-100 text-amber-800' => !in_array(($job->employment_type ?? ''), ['Permanent','Temporary','Contractual']),
                                    ])>
                                        {{ $job->employment_type ?? 'Government' }}
                                    </span>
                                    @if($job->csc_eligibility_required)
                                        <span class="text-xs bg-purple-50 text-purple-700 px-2 py-0.5 rounded font-medium border border-purple-200">CSC Req.</span>
                                    @endif
                                </div>

                                <h3 class="text-lg font-bold text-slate-900 line-clamp-2">{{ $job->title }}</h3>
                                <p class="text-xs font-medium text-slate-500 uppercase tracking-wide">{{ $job->department_or_company ?? 'Provincial Capitol' }}</p>

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

                                <button @click="openFaq = true" class="w-full text-center text-xs font-bold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 py-2.5 rounded-xl transition-colors">
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
                    <h3 class="text-base font-bold text-slate-800">Walang Nahanap na Bakanteng Posisyon</h3>
                    <p class="text-slate-500 text-xs max-w-md mx-auto">Subukang baguhin ang iyong search query o i-reset ang filter para makita ang iba pang job openings sa gobyerno.</p>
                </div>
            @endif
        </div>

        {{-- TAB 2: Announcements & Analytics --}}
        <div x-show="activeTab === 'analytics'" class="space-y-8" x-cloak>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Employment Types Breakdown Card --}}
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="text-base font-bold text-slate-900 border-b pb-3">Uri ng Trabaho sa Gobyerno (Employment Classifications)</h3>
                    <ul class="space-y-3 text-xs sm:text-sm">
                        <li class="p-3 rounded-xl bg-emerald-50 border border-emerald-100">
                            <span class="font-bold text-emerald-900">Permanent (Plantilla):</span>
                            <p class="text-emerald-700 text-xs mt-1">May ganap na seguridad sa trabaho (security of tenure), benepisyo, at kinakailangan ng Civil Service Eligibility.</p>
                        </li>
                        <li class="p-3 rounded-xl bg-blue-50 border border-blue-100">
                            <span class="font-bold text-blue-900">Temporary:</span>
                            <p class="text-blue-700 text-xs mt-1">Pansamantalang itinatalaga sa plantilla position habang binibigyan ng panahon na makakuha ng Civil Service eligibility.</p>
                        </li>
                        <li class="p-3 rounded-xl bg-purple-50 border border-purple-100">
                            <span class="font-bold text-purple-900">Contractual / Casual:</span>
                            <p class="text-purple-700 text-xs mt-1">Naka-akma sa partikular na proyekto o takdang panahon na may karampatang benepisyo alinsunod sa probinsya.</p>
                        </li>
                        <li class="p-3 rounded-xl bg-amber-50 border border-amber-100">
                            <span class="font-bold text-amber-900">Job Order (JO) / Contract of Service (COS):</span>
                            <p class="text-amber-700 text-xs mt-1">Piece-work o gawaing panandalian na walang permanenteng item ngunit bukas sa mga pampublikong aplikante.</p>
                        </li>
                    </ul>
                </div>

                {{-- Civil Service Quotes / Words of Wisdom --}}
                <div class="bg-emerald-900 text-white p-6 rounded-2xl shadow-sm flex flex-col justify-between space-y-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">Civil Service Values</span>
                        <h3 class="text-xl font-bold mt-2">Prinsipyo ng Tapat na Lingkod Bayan</h3>
                        <p class="text-emerald-100 text-xs mt-3 leading-relaxed">
                            "Ang pampublikong opisina ay isang pampublikong pagtitiwala. Ang bawat kawani ng Pamahalaang Panlalawigan ng Camarines Sur ay inaasahang maglilingkod nang may integridad, kahusayan, at dedikasyon."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-emerald-800 text-xs text-emerald-300">
                        Provincial Human Resource Management Office (PHRMO) — Camarines Sur
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Place this near the end before @endsection --}}
    <x-jobs.faq-modal type="government" />

</div>
@endsection