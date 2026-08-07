@extends('layouts.guest')

@section('title', 'SPES & Student Internships - Provincial Government of Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8" 
     x-data="{ 
        activeTab: 'directory', 
        openFaq: false, 
        viewMode: 'table', 
        selectedJob: null, 
        showJobModal: false,
        openJobModal(job) { this.selectedJob = job; this.showJobModal = true; },
        closeJobModal() { this.showJobModal = false; this.selectedJob = null; }
     }">

    <div class="max-w-7xl mx-auto space-y-8">

        {{-- Hero Header --}}
        <x-jobs.banner 
            active="spes"
            badge="DOLE & Provincial Youth Employment Program"
            title="SPES & Student Internships"
            description="Special Program for Employment of Students (SPES) at Student Internship Programs sa Pamahalaang Panlalawigan ng Camarines Sur." 
        />

        {{-- Quick Stats / Overview --}}
        <x-jobs.quick-stats type="spes" :totalActive="$totalActive ?? 0" />

        {{-- Main Navigation Tabs (Directory & Guidelines) --}}
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button @click="activeTab = 'directory'"
                    :class="activeTab === 'directory' ? 'border-purple-600 text-purple-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    SPES & Student Internship Directory
                </button>

                <button @click="activeTab = 'guidelines'"
                    :class="activeTab === 'guidelines' ? 'border-purple-600 text-purple-700 font-bold' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium'"
                    class="py-4 px-1 border-b-2 text-sm sm:text-base transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    SPES Guidelines & Qualifications
                </button>
            </nav>
        </div>

        {{-- TAB 1: SPES & Internship Directory --}}
        <div x-show="activeTab === 'directory'" class="space-y-6">
            
            {{-- Search & Filter Controls --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                <form method="GET" action="{{ route('careers.spes') }}" class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    
                    <div class="relative flex-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">🔍</span>
                        <input type="text" name="search" value="{{ request('search') }}" 
                               placeholder="Search SPES program, office, or skill requirements..." 
                               class="w-full pl-10 pr-4 py-2.5 text-sm bg-slate-50 border border-slate-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white font-bold px-4 py-2.5 rounded-xl text-xs transition shadow-sm">
                            Search Slots
                        </button>

                        @if(request()->has('search'))
                            <a href="{{ route('careers.spes') }}" class="bg-rose-50 hover:bg-rose-100 border border-rose-200 text-rose-700 font-bold px-3 py-2.5 rounded-xl text-xs transition">
                                Reset
                            </a>
                        @endif

                        {{-- View Switcher --}}
                        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl border border-slate-200 ml-auto md:ml-0">
                            <button type="button" @click="viewMode = 'table'" 
                                    :class="viewMode === 'table' ? 'bg-white text-purple-700 shadow-sm font-bold' : 'text-slate-500 font-medium'" 
                                    class="px-3 py-1.5 rounded-lg text-xs transition flex items-center gap-1">
                                📄 Table
                            </button>
                            <button type="button" @click="viewMode = 'grid'" 
                                    :class="viewMode === 'grid' ? 'bg-white text-purple-700 shadow-sm font-bold' : 'text-slate-500 font-medium'" 
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
                                <th class="p-4">Program / Internship Title</th>
                                <th class="p-4">Assigned Capitol Office / Partner</th>
                                <th class="p-4">Application Deadline</th>
                                <th class="p-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($jobs as $job)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4">
                                        <div class="font-bold text-slate-900 text-sm">{{ $job->title }}</div>
                                        <div class="text-[11px] text-slate-500">{{ Str::limit($job->description, 80) }}</div>
                                    </td>
                                    <td class="p-4 font-bold text-purple-700 uppercase">
                                        {{ $job->department_or_company ?? 'Provincial Government of CamSur' }}
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700">
                                        {{ $job->deadline ? \Carbon\Carbon::parse($job->deadline)->format('M d, Y') : 'Open until slots are filled' }}
                                    </td>
                                    <td class="p-4 text-right">
                                        <button @click="openJobModal({{ json_encode($job) }})" class="bg-purple-50 hover:bg-purple-100 text-purple-700 font-bold px-3 py-1.5 rounded-lg text-xs transition">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="p-8 text-center text-slate-500 font-medium">Walang nahanap na SPES o Student Internship slots sa kasalukuyan.</td>
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
                                <span class="inline-flex px-2.5 py-1 text-xs font-bold rounded-lg bg-purple-100 text-purple-900 border border-purple-200">
                                    🎓 SPES / Internship
                                </span>
                            </div>

                            <h3 class="text-lg font-bold text-slate-900 line-clamp-2">{{ $job->title }}</h3>
                            <p class="text-xs font-semibold text-purple-700 uppercase tracking-wide">{{ $job->department_or_company ?? 'Provincial Office' }}</p>

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

                            <button @click="openJobModal({{ json_encode($job) }})" class="w-full text-center text-xs font-bold text-purple-700 bg-purple-50 hover:bg-purple-100 py-2.5 rounded-xl transition-colors">
                                View Requirements & Details
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full bg-white rounded-2xl border border-slate-200 p-12 text-center space-y-3">
                        <p class="text-slate-500 text-xs">Walang nahanap na SPES slots sa kasalukuyan.</p>
                    </div>
                @endforelse
            </div>

        </div>

        {{-- TAB 2: SPES Guidelines & Qualifications --}}
        <div x-show="activeTab === 'guidelines'" class="space-y-6" x-cloak>
            
            {{-- Program Qualifications Grid --}}
            <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm space-y-6">
                <div>
                    <h3 class="text-lg font-bold text-slate-900">Ano ang SPES (Special Program for Employment of Students)?</h3>
                    <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                        Isang programa ng DOLE at ng Pamahalaang Panlalawigan ng Camarines Sur sa ilalim ng Republic Act No. 10917 upang matulungan ang mga mahihirap ngunit karapat-dapat na estudyante na maipagpatuloy ang kanilang pag-aaral sa pamamagitan ng pansamantalang trabaho tuwing bakasyon o Summer/Trimestral break.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-2">
                    <div class="bg-purple-50/60 p-5 rounded-2xl border border-purple-100 space-y-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-purple-800">1. Edad at Estado</span>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            Mula <strong>15 hanggang 30 taong gulang</strong>. Bukas para sa mga High School, Senior High School, College Students, o Out-of-School Youth (OSY) na nagnanais bumalik sa pag-aaral.
                        </p>
                    </div>

                    <div class="bg-indigo-50/60 p-5 rounded-2xl border border-indigo-100 space-y-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-indigo-800">2. Income Threshold</span>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            Ang pinagsamang taunang kita ng mga magulang ay hindi lalagpas sa opisyal na **poverty threshold** ng rehiyon ayon sa talaan ng NEDA.
                        </p>
                    </div>

                    <div class="bg-emerald-50/60 p-5 rounded-2xl border border-emerald-100 space-y-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">3. Passing Grades</span>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            Mayroong **passing grade** sa huling semester o school year na pinasukan (walang bagsak na marka sa Form 137 / Report Card o TOR).
                        </p>
                    </div>
                </div>

                <div class="border-t border-slate-100 pt-6 space-y-3">
                    <h4 class="text-sm font-bold text-slate-900">Listahan ng mga Kinakailangang Dokumento (Documentary Requirements):</h4>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700">
                        <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl border border-slate-200/60">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span><strong>SPES Application Form</strong> (Nakalagda at may ID picture).</span>
                        </li>
                        <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl border border-slate-200/60">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span><strong>PSA Birth Certificate</strong> o Barangay Certificate of Live Birth.</span>
                        </li>
                        <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl border border-slate-200/60">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span><strong>Copy of Form 138 / Report Card / TOR</strong> na may passing grade.</span>
                        </li>
                        <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl border border-slate-200/60">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span><strong>Parents' Income Tax Return (ITR)</strong> o Certificate of Indigency mula sa Barangay.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    {{-- Place this near the end before @endsection --}}
    <x-jobs.faq-modal type="spes" />
</div>
@endsection