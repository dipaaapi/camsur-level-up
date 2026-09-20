@extends('layouts.guest')

@php
    $portalConfigs = [
        'government' => [
            'name' => 'Government Careers',
            'route' => route('careers.government'),
            'theme' => 'emerald',
            'badge_bg' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
            'btn_bg' => 'bg-emerald-700 hover:bg-emerald-800',
            'accent_text' => 'text-emerald-700',
            'banner_gradient' => 'from-emerald-900 via-teal-900 to-slate-900',
        ],
        'private_local' => [
            'name' => 'Private Local Jobs',
            'route' => route('careers.local'),
            'theme' => 'blue',
            'badge_bg' => 'bg-blue-50 text-blue-800 border-blue-200',
            'btn_bg' => 'bg-blue-700 hover:bg-blue-800',
            'accent_text' => 'text-blue-700',
            'banner_gradient' => 'from-blue-950 via-indigo-900 to-slate-900',
        ],
        'overseas' => [
            'name' => 'Overseas & OFW Careers',
            'route' => route('careers.overseas'),
            'theme' => 'sky',
            'badge_bg' => 'bg-sky-50 text-sky-800 border-sky-200',
            'btn_bg' => 'bg-sky-700 hover:bg-sky-800',
            'accent_text' => 'text-sky-700',
            'banner_gradient' => 'from-sky-950 via-blue-900 to-slate-900',
        ],
        'spes' => [
            'name' => 'SPES & Internships',
            'route' => route('careers.spes'),
            'theme' => 'purple',
            'badge_bg' => 'bg-purple-50 text-purple-800 border-purple-200',
            'btn_bg' => 'bg-purple-700 hover:bg-purple-800',
            'accent_text' => 'text-purple-700',
            'banner_gradient' => 'from-purple-950 via-indigo-900 to-slate-900',
        ],
    ];

    $cfg = $portalConfigs[$job->type] ?? $portalConfigs['government'];
    $deadlineCarbon = $job->deadline ? \Carbon\Carbon::parse($job->deadline) : null;
    $isExpired = $deadlineCarbon && $deadlineCarbon->isPast();
    $daysLeft = $deadlineCarbon && !$isExpired ? (int) ceil(now()->diffInDays($deadlineCarbon, false)) : null;
@endphp

@section('title', $job->title . ' - ' . $cfg['name'] . ' | Camarines Sur')

@section('content')
<div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto space-y-6">

        {{-- 🧭 Breadcrumbs & Navigation Bar --}}
        <div class="flex flex-wrap items-center justify-between gap-4 pb-2 border-b border-slate-200/80">
            <nav class="flex items-center space-x-2 text-xs text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-blue-900 transition">Home</a>
                <span>/</span>
                <a href="{{ $cfg['route'] }}" class="hover:text-blue-900 transition">{{ $cfg['name'] }}</a>
                <span>/</span>
                <span class="text-slate-800 font-semibold truncate max-w-xs sm:max-w-md">{{ $job->title }}</span>
            </nav>

            <a href="{{ $cfg['route'] }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-700 hover:text-blue-900 bg-white hover:bg-slate-100 border border-slate-200 px-3.5 py-2 rounded-xl shadow-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span>Back to {{ $cfg['name'] }}</span>
            </a>
        </div>

        {{-- 🏛️ Hero Job Title Banner --}}
        <div class="relative bg-gradient-to-r {{ $cfg['banner_gradient'] }} rounded-3xl p-6 sm:p-10 text-white shadow-xl overflow-hidden">
            <div class="relative z-10 max-w-4xl space-y-4">
                <div class="flex flex-wrap items-center gap-2.5">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-white border border-white/20 backdrop-blur-sm">
                        {{ $job->employment_type ?? 'Full-time' }}
                    </span>
                    @if($job->location)
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-white/10 text-slate-200 border border-white/15 backdrop-blur-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <span>{{ $job->location }}</span>
                        </span>
                    @endif
                    @if($job->csc_eligibility_required)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-400 text-slate-900 shadow-sm">
                            CSC Eligibility Required
                        </span>
                    @endif
                </div>

                <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    {{ $job->title }}
                </h1>

                <p class="text-sm sm:text-base font-medium text-slate-200 flex items-center gap-2">
                    <svg class="w-4 h-4 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <span>{{ $job->department_or_company ?? 'Provincial Government of Camarines Sur' }}</span>
                </p>

                <div class="pt-2 flex flex-wrap items-center gap-6 text-xs text-slate-300">
                    <span>Posted: <strong class="text-white">{{ $job->posted_at ? $job->posted_at->format('F d, Y') : 'Recent' }}</strong></span>
                    @if($deadlineCarbon)
                        <span class="{{ $isExpired ? 'text-rose-400 font-bold' : 'text-amber-300 font-bold' }}">
                            Deadline: {{ $deadlineCarbon->format('F d, Y') }} 
                            @if(!$isExpired && $daysLeft !== null)
                                ({{ $daysLeft }} {{ Str::plural('day', $daysLeft) }} left)
                            @elseif($isExpired)
                                (Closed)
                            @endif
                        </span>
                    @else
                        <span class="text-emerald-300 font-medium">Application Status: Open until filled</span>
                    @endif
                </div>
            </div>
        </div>

        {{-- 📄 Main Grid Layout (Content + Sidebar) --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            {{-- Left 2 Columns: Full Job Requirements & Details --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Section 1: Overview & Description --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4">
                    <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                        Position Overview & Job Description
                    </h2>
                    <div class="text-xs sm:text-sm text-slate-700 leading-relaxed space-y-3 whitespace-pre-line">
                        {{ $job->description ?: 'No detailed job description provided.' }}
                    </div>
                </div>

                {{-- Section 2: Qualifications & Requirements --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4">
                    <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                        Qualification Standards & Requirements
                    </h2>
                    
                    @if($job->requirements)
                        <div class="text-xs sm:text-sm text-slate-700 leading-relaxed whitespace-pre-line bg-slate-50 p-4 rounded-xl border border-slate-200/60">
                            {{ $job->requirements }}
                        </div>
                    @else
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
                            <li class="flex items-start gap-2">
                                <span class="font-bold text-emerald-600">✓</span>
                                <span>Relevant educational attainment aligned with the position requirements.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-bold text-emerald-600">✓</span>
                                <span>Demonstrated experience or competencies required for the designated tasks.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-bold text-emerald-600">✓</span>
                                <span>Good moral character and clearances (Barangay, Police, or NBI clearances).</span>
                            </li>
                        </ul>
                    @endif
                </div>

                {{-- Section 3: How to Apply & Submission Instructions --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4">
                    <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                        Application Instructions & Submission Guidelines
                    </h2>
                    
                    <div class="space-y-4 text-xs sm:text-sm text-slate-700 leading-relaxed">
                        @if($job->type === 'government')
                            <p>
                                Interested and qualified applicants are advised to submit their complete documentary portfolio to the <strong>Provincial Human Resource Management Office (PHRMO)</strong>, Capitol Complex, Cadlan, Pili, Camarines Sur.
                            </p>
                            <div class="bg-emerald-50/70 border border-emerald-200 rounded-xl p-4 text-xs text-emerald-900 space-y-2">
                                <strong class="block font-bold">Checklist of Documents to Prepare:</strong>
                                <ul class="list-disc pl-5 space-y-1 text-slate-700">
                                    <li>Fully accomplished Personal Data Sheet (PDS - CS Form No. 212, Revised 2017) with recent passport-sized picture.</li>
                                    <li>Authenticated copy of Civil Service Eligibility or PRC Board License (if applicable).</li>
                                    <li>Authenticated copy of Transcript of Records (TOR) and College Diploma.</li>
                                    <li>Certificate of Employment / Seminars / Trainings attended.</li>
                                    <li>Performance Rating (IPCR) in the last rating period (for government employees).</li>
                                </ul>
                            </div>
                        @else
                            <p>
                                Interested applicants may submit their Resume/Curriculum Vitae along with supporting documents through the contact channel provided by the hiring partner employer:
                            </p>
                            @if($job->application_link_or_email)
                                <div class="bg-blue-50/70 border border-blue-200 rounded-xl p-4 text-xs space-y-2">
                                    <span class="font-bold text-blue-900 block">Employer Contact / Application Channel:</span>
                                    <div class="flex items-center gap-2">
                                        @if(Str::startsWith($job->application_link_or_email, 'http'))
                                            <a href="{{ $job->application_link_or_email }}" target="_blank" class="inline-flex items-center gap-1.5 font-bold text-blue-700 hover:text-blue-900 underline">
                                                <span>{{ $job->application_link_or_email }}</span>
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                            </a>
                                        @elseif(Str::contains($job->application_link_or_email, '@'))
                                            <a href="mailto:{{ $job->application_link_or_email }}" class="font-bold text-blue-700 hover:text-blue-900 underline">
                                                {{ $job->application_link_or_email }}
                                            </a>
                                        @else
                                            <span class="font-bold text-slate-800">{{ $job->application_link_or_email }}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif

                        <div class="pt-4 flex flex-wrap items-center gap-3">
                            @if($job->application_link_or_email)
                                @if(Str::startsWith($job->application_link_or_email, 'http'))
                                    <a href="{{ $job->application_link_or_email }}" target="_blank" class="px-6 py-3 text-xs font-bold text-white rounded-xl shadow transition-colors {{ $cfg['btn_bg'] }}">
                                        Apply Online via Partner Portal &rarr;
                                    </a>
                                @elseif(Str::contains($job->application_link_or_email, '@'))
                                    <a href="mailto:{{ $job->application_link_or_email }}?subject={{ urlencode('Application for ' . $job->title) }}" class="px-6 py-3 text-xs font-bold text-white rounded-xl shadow transition-colors {{ $cfg['btn_bg'] }}">
                                        Email Application Directly &rarr;
                                    </a>
                                @endif
                            @endif

                            <button type="button" 
                                    @click="$dispatch('open-faq-modal')"
                                    class="px-5 py-3 text-xs font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-xl transition-colors">
                                Inquire About This Position
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Right 1 Column: Summary Card & Related Opportunities --}}
            <div class="space-y-6">

                {{-- Summary Card --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm space-y-4">
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-2.5">
                        Job Posting Summary
                    </h3>

                    <dl class="space-y-3 text-xs">
                        <div>
                            <dt class="text-slate-400 font-medium">Position ID</dt>
                            <dd class="text-slate-800 font-bold font-mono">#JOB-{{ str_pad($job->id, 5, '0', STR_PAD_LEFT) }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400 font-medium">Category / Sector</dt>
                            <dd class="text-slate-800 font-semibold">{{ $cfg['name'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400 font-medium">Employment Classification</dt>
                            <dd class="text-slate-800 font-semibold">{{ $job->employment_type ?? 'Full-time' }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400 font-medium">Assignment Location</dt>
                            <dd class="text-slate-800 font-semibold">{{ $job->location ?? 'Camarines Sur' }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400 font-medium">Date Posted</dt>
                            <dd class="text-slate-800 font-semibold">{{ $job->posted_at ? $job->posted_at->format('M d, Y') : 'Recent' }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400 font-medium">Application Deadline</dt>
                            <dd class="font-bold {{ $isExpired ? 'text-rose-600' : 'text-emerald-700' }}">
                                {{ $deadlineCarbon ? $deadlineCarbon->format('M d, Y') : 'Open until filled' }}
                            </dd>
                        </div>
                    </dl>

                    <div class="pt-3 border-t border-slate-100">
                        <button type="button" 
                                @click="$dispatch('open-faq-modal')" 
                                class="w-full text-center text-xs font-bold text-white py-2.5 rounded-xl shadow-sm transition-colors {{ $cfg['btn_bg'] }}">
                            Ask Questions / Help Desk
                        </button>
                    </div>
                </div>

                {{-- Equal Opportunity Guarantee --}}
                <div class="bg-slate-900 text-white rounded-2xl p-5 shadow-sm space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-300">Equal Opportunity Principle</span>
                    <p class="text-[11px] text-slate-300 leading-relaxed">
                        The Provincial Government of Camarines Sur strictly adheres to merit-based and non-discriminatory hiring policies regardless of gender, civil status, disability, religion, ethnicity, or political affiliation.
                    </p>
                </div>

                {{-- Related Openings in this Sector --}}
                @if(isset($relatedJobs) && $relatedJobs->count() > 0)
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm space-y-4">
                        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2.5">
                            Other Openings in this Sector
                        </h3>
                        <div class="space-y-3">
                            @foreach($relatedJobs as $relJob)
                                <a href="{{ route('careers.show', $relJob->id) }}" class="block p-3 rounded-xl border border-slate-100 hover:border-blue-300 hover:bg-blue-50/40 transition group">
                                    <h4 class="font-bold text-xs text-slate-800 group-hover:text-blue-900 line-clamp-1">
                                        {{ $relJob->title }}
                                    </h4>
                                    <p class="text-[11px] text-slate-500 mt-0.5 line-clamp-1">
                                        {{ $relJob->department_or_company }}
                                    </p>
                                    <div class="flex items-center justify-between mt-2 text-[10px] text-slate-400">
                                        <span class="font-medium text-slate-600">{{ $relJob->location }}</span>
                                        <span class="text-blue-700 font-semibold group-hover:underline">View &rarr;</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

        </div>

    </div>

    {{-- Universal Inquiry Modal for Careers --}}
    <x-jobs.faq-modal :type="$job->type === 'private_local' ? 'local' : $job->type" />
</div>
@endsection
