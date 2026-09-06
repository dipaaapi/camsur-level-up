<x-guest-layout>
    {{-- 🏛️ Unified Official Provincial Hero Banner --}}
    <x-hero-banner
        badge-text="GOOD GOVERNANCE & COMPLIANCE"
        title="TRANSPARENCY SEAL"
        description="A symbol of a policy shift towards openness in access to government information and public accountability."
    />

    {{-- Main Content Section --}}
    <main class="py-12 sm:py-16 bg-slate-100/80 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Left Column: About the Seal & Symbolism --}}
                <div class="lg:col-span-4 space-y-6">
                    {{-- Official Transparency Seal Badge Card --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/90 text-center flex flex-col items-center justify-center">
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100 mb-3 shadow-inner">
                            <img src="{{ asset('img/transparency/seal/seal.png') }}" alt="Official Transparency Seal" class="h-28 sm:h-32 w-auto object-contain drop-shadow-md">
                        </div>
                        <span class="text-xs font-black uppercase tracking-wider text-slate-800">Republic of the Philippines</span>
                        <p class="text-[11px] font-semibold text-slate-500 mt-0.5">Official Transparency Seal</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 sm:p-7 shadow-sm border border-slate-200/90 sticky top-24">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="p-2.5 rounded-xl bg-blue-50 text-blue-900 border border-blue-100">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </span>
                            <div>
                                <h2 class="text-xl font-bold text-blue-950 leading-tight">About the Seal</h2>
                                <p class="text-[11px] uppercase font-bold text-slate-500 tracking-wider">Legal Framework</p>
                            </div>
                        </div>

                        <p class="text-xs text-slate-500 mb-5 leading-relaxed">
                            <strong>Source:</strong> Section 7.0, National Budget Circular No. 542, August 29, 2012.
                        </p>

                        {{-- Quote Block with Icon --}}
                        <div class="flex items-start gap-3.5 mb-6 p-4 rounded-xl bg-slate-50 border border-slate-200/80">
                            <div class="text-blue-900/30 flex-shrink-0 mt-0.5">
                                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </div>
                            <p class="text-xs sm:text-sm italic text-slate-700 leading-relaxed">
                                “A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value.”
                            </p>
                        </div>

                        <hr class="my-6 border-slate-200/90">

                        {{-- Symbolism Section --}}
                        <div class="space-y-2.5">
                            <h3 class="text-sm sm:text-base font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                Symbolism
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                                The <strong>Transparency Seal</strong>, depicted by a pearl shining out of an open shell, represents a policy shift towards openness. It hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Required Documents Accordion --}}
                <div class="lg:col-span-8 space-y-6">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200/90 overflow-hidden" 
                         x-data="{
                             activeSection: null,
                             toggle(index) {
                                 this.activeSection = this.activeSection === index ? null : index;
                             }
                         }">
                        
                        {{-- Card Header --}}
                        <div class="p-6 sm:p-7 border-b border-slate-100 bg-gradient-to-r from-slate-50 to-white">
                            <div class="flex items-center gap-3">
                                <span class="p-2.5 rounded-xl bg-amber-100 text-amber-800">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                </span>
                                <div>
                                    <h2 class="text-xl font-bold text-slate-900">Required Documents</h2>
                                    <p class="text-xs text-slate-500 mt-0.5">
                                        Compliance with Sec. 93 (Transparency Seal) R.A. No. 10155 (General Appropriations Act FY 2012)
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Accordion List --}}
                        <div class="divide-y divide-slate-100">
                            
                            {{-- Item 1 --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(1)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 1 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">I</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Agency’s Mandate and Functions; Names of its Officials with their Position and Designation, and Contact Information
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 1 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 1" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        {{-- Mission & Vision (With link to page) --}}
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                                Mission &amp; Vision
                                            </span>
                                            <a href="{{ route('mission-vision') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                View Page
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                        {{-- Elected Officials (Redirect to Provincial Governor Panel in Profile) --}}
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                Elected Officials (Provincial Governor)
                                            </span>
                                            <a href="{{ route('profile') }}#governor-panel" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                View Profile
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                        {{-- Organizational Chart --}}
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                                                Organizational Chart
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        {{-- Contact Information (Scrolls down to footer) --}}
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                Contact Information
                                            </span>
                                            <button type="button" 
                                                    onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })" 
                                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60 cursor-pointer">
                                                Contact Details
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 2 --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(2)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 2 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">II</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Annual Financial Reports
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 2 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 2" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <div class="space-y-4 text-sm">
                                        <div>
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Statement of Appropriations, Allotments, Obligations, Disbursements and Balances</h4>
                                            <ul class="divide-y divide-slate-200/60">
                                                <li class="py-2 flex items-center justify-between">
                                                    <span class="text-slate-700">FY 2024 SAAODB</span>
                                                    <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                                </li>
                                                <li class="py-2 flex items-center justify-between">
                                                    <span class="text-slate-700">FY 2023 SAAODB</span>
                                                    <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Financial Accountability Reports</h4>
                                            <ul class="divide-y divide-slate-200/60">
                                                <li class="py-2 flex items-center justify-between">
                                                    <span class="text-slate-700">Financial Report 2024</span>
                                                    <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Item 3 (Updated to 2027) --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(3)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 3 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">III</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            DBM Approved Budgets and Corresponding Targets
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 3 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 3" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path></svg>
                                                Approved Budget 2027
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                                Targets 2027
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 4 --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(4)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 4 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">IV</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Projects, Programs and Activities, Beneficiaries, and Status of Implementation
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 4 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 4" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                                Program Status Implementation 2024
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                Beneficiaries List
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 5 (Procurement Plan - Redirects to BAC Page with 2027 years) --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(5)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 5 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">V</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Annual Procurement Plan
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 5 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 5" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                FY 2027 Annual Procurement Plan (CSE)
                                            </span>
                                            <a href="{{ route('bac') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                BAC Portal
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                FY 2027 Indicative Annual Procurement Plan
                                            </span>
                                            <a href="{{ route('bac') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                BAC Portal
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                FY 2027 Annual Procurement Plan
                                            </span>
                                            <a href="{{ route('bac') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                BAC Portal
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 6 (Agency Operations Manual linked to Citizen's Charter) --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(6)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 6 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">VI</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Quality Management System Certified by International Certifying Body or Agency Operations Manual
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 6 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 6" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-3 flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="p-2 rounded-lg bg-amber-100 text-amber-700">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                                </div>
                                                <div>
                                                    <p class="font-bold text-slate-800">ISO 9001:2015 Certification</p>
                                                    <p class="text-xs text-slate-500">Current Valid Certification</p>
                                                </div>
                                            </div>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                                Agency Operations Manual (Citizen's Charter)
                                            </span>
                                            <a href="{{ route('citizens-charter') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 hover:bg-blue-100 transition shadow-sm border border-blue-200/60">
                                                View Charter
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 7 --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(7)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 7 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">VII</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            System of Ranking Delivery Units
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 7 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 7" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                                Guidelines on Ranking of Delivery Units FY 2024
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 8 --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(8)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 8 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">VIII</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Review and Compliance Procedure of Statements and Financial Disclosures
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 8 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 8" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                SALN Review and Compliance Procedure
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Item 9 (Freedom of Information) --}}
                            <div class="transition">
                                <button type="button" 
                                        @click="toggle(9)" 
                                        class="w-full px-6 sm:px-8 py-4 sm:py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50/80 transition"
                                        :class="activeSection === 9 ? 'bg-blue-50/50' : ''">
                                    <div class="flex items-start gap-3">
                                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-900 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">IX</span>
                                        <span class="text-sm sm:text-base font-bold text-slate-800 leading-snug">
                                            Freedom of Information
                                        </span>
                                    </div>
                                    <svg class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" 
                                         :class="activeSection === 9 ? 'rotate-180 text-blue-600' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="activeSection === 9" x-collapse class="px-6 sm:px-8 py-5 bg-slate-50/60 border-t border-slate-100">
                                    {{-- FOI Feature Banner --}}
                                    <div class="p-4 bg-white rounded-xl border border-slate-200 shadow-sm mb-4">
                                        <div class="flex flex-col sm:flex-row items-center gap-4">
                                            <div class="w-16 h-16 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center flex-shrink-0 p-2">
                                                <img src="{{ asset('img/transparency/seal/foi.png') }}" alt="FOI Logo" class="max-h-full max-w-full object-contain">
                                            </div>
                                            <div class="text-center sm:text-left flex-1">
                                                <h5 class="text-sm font-bold text-slate-900">Freedom of Information (FOI)</h5>
                                                <p class="text-xs text-slate-600 mt-0.5">
                                                    The FOI program provides Filipinos with a mechanism to request information on government transactions and operations.
                                                </p>
                                                <div class="mt-2.5">
                                                    <a href="https://www.foi.gov.ph" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-900 text-white hover:bg-blue-800 shadow-sm transition">
                                                        Visit FOI Portal
                                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="divide-y divide-slate-200/60 text-sm">
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                People's Freedom of Information Manual
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                                DOST-PCOO Joint Memorandum Circular No. 2022-1
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                        <li class="py-2.5 flex items-center justify-between">
                                            <span class="text-slate-700 flex items-center gap-2">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                                Setup One-Page FOI Reports
                                            </span>
                                            <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-200/80 text-slate-600 font-medium">Not Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-guest-layout>
