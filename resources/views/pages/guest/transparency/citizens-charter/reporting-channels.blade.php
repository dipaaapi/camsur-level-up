{{-- Anti-Red Tape & Public Assistance Hotlines / Contacts Card --}}
<div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-200/90 transition hover:shadow-md mb-2">
    
    {{-- Card Header --}}
    <div class="flex items-center gap-3.5 mb-4 pb-4 border-b border-slate-100">
        <span class="p-3 rounded-xl bg-blue-100 text-blue-900 shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </span>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-slate-900">Public Assistance & Reporting Channels</h2>
            <p class="text-[11px] uppercase font-bold text-blue-700 tracking-wider">Direct Action, Complaints & Inquiries</p>
        </div>
    </div>

    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
        Need assistance, want to report fixing activities, or submit feedback? Click any channel below to directly initiate a call, open your email client, or visit official portals.
    </p>

    {{-- Interactive Action Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        
        {{-- ARTA Email Action --}}
        <a
            href="mailto:complaints@arta.gov.ph?subject=Anti-Red%20Tape%20Report%20/%20Citizen's%20Charter%20Concern"
            class="group p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-blue-50/60 hover:border-blue-300 transition flex items-start justify-between">
            <div class="flex items-start gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-red-100 text-red-700 group-hover:bg-red-600 group-hover:text-white flex items-center justify-center flex-shrink-0 transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Official ARTA Email</span>
                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-900 transition">Email ARTA Complaints</h3>
                    <p class="text-xs text-slate-500 mt-0.5">complaints@arta.gov.ph</p>
                </div>
            </div>
            <div class="flex items-center text-blue-600 group-hover:translate-x-1 transition-transform mt-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
        </a>

        {{-- Capitol / Provincial Government Email Action --}}
        <a
            href="mailto:info@camarinessur.gov.ph?subject=Citizen's%20Charter%20/%20Public%20Assistance%20Inquiry"
            class="group p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-blue-50/60 hover:border-blue-300 transition flex items-start justify-between">
            <div class="flex items-start gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-800 group-hover:bg-blue-900 group-hover:text-white flex items-center justify-center flex-shrink-0 transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Provincial Capitol Email</span>
                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-900 transition">Email Provincial Assistance</h3>
                    <p class="text-xs text-slate-500 mt-0.5">info@camarinessur.gov.ph</p>
                </div>
            </div>
            <div class="flex items-center text-blue-600 group-hover:translate-x-1 transition-transform mt-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
        </a>

        {{-- Online ARTA eCMS Portal --}}
        <a
            href="https://ecms.arta.gov.ph"
            target="_blank"
            rel="noopener noreferrer"
            class="group p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-blue-50/60 hover:border-blue-300 transition flex items-start justify-between">
            <div class="flex items-start gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 group-hover:bg-amber-600 group-hover:text-white flex items-center justify-center flex-shrink-0 transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Online Portal</span>
                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-900 transition">ARTA eCMS Filing Portal</h3>
                    <p class="text-xs text-slate-500 mt-0.5">ecms.arta.gov.ph</p>
                </div>
            </div>
            <div class="flex items-center text-blue-600 group-hover:translate-x-1 transition-transform mt-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </div>
        </a>

        {{-- Hotlines (Direct Call) --}}
        <a
            href="tel:8888"
            class="group p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-blue-50/60 hover:border-blue-300 transition flex items-start justify-between">
            <div class="flex items-start gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 group-hover:bg-emerald-600 group-hover:text-white flex items-center justify-center flex-shrink-0 transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Direct Hotlines</span>
                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-900 transition">Hotline 8888 & 1-ARTA (12782)</h3>
                    <p class="text-xs text-slate-500 mt-0.5">National Citizens' Complaint Center</p>
                </div>
            </div>
            <div class="flex items-center text-blue-600 group-hover:translate-x-1 transition-transform mt-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
        </a>

    </div>
</div>
