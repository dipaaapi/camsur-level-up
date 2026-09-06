{{-- 2. Citizen's Charter Handbook Card --}}
<div class="bg-white rounded-2xl shadow-sm border border-slate-200/90 overflow-hidden transition hover:shadow-md mb-2">
    {{-- Card Header --}}
    <div class="p-6 sm:p-7 border-b border-slate-100 bg-slate-50/50">
        <div class="flex items-center gap-3.5">
            <span class="p-3 rounded-xl bg-amber-100 text-amber-800 shadow-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </span>
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-slate-900">Citizen's Charter Handbook</h2>
                <p class="text-xs sm:text-sm text-slate-500 font-medium">Comprehensive guide on the frontline services of the Provincial Government of Camarines Sur.</p>
            </div>
        </div>
    </div>

    <div class="p-6 sm:p-8">
        {{-- High-Visibility Public Notice / Alert Box --}}
        <div class="mb-8 p-5 rounded-2xl bg-gradient-to-r from-blue-900/10 via-indigo-900/10 to-blue-950/10 border-2 border-blue-600/60 shadow-sm">
            <div class="flex items-start gap-4">
                <div class="p-2.5 bg-blue-900 text-white rounded-xl flex-shrink-0 shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-2 mb-1.5">
                        <span class="px-2.5 py-0.5 rounded-full bg-blue-900 text-amber-300 text-[10px] font-black uppercase tracking-wider shadow-sm">
                            Official Release
                        </span>
                        <h3 class="text-sm sm:text-base font-black text-blue-950 uppercase tracking-tight">
                            2026 Edition Now Available for Public Viewing
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 font-medium leading-relaxed">
                        The consolidated and updated Citizen's Charter Handbook is now fully accessible online. All constituents, applicants, and stakeholders can view the complete step-by-step procedures, requirements, and legal processing timelines across all provincial departments.
                    </p>
                </div>
            </div>
        </div>

        {{-- PDF Box with Generously Padded View Handbook Button --}}
        <div class="p-8 sm:p-10 bg-slate-50 rounded-2xl border border-slate-200 text-center flex flex-col items-center justify-center shadow-inner">
            <div class="w-16 h-16 rounded-full bg-blue-900 text-white flex items-center justify-center mb-4 shadow-md">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-1.5">Citizen's Charter Handbook</h3>
            <p class="text-xs sm:text-sm text-slate-600 max-w-lg mb-6 leading-relaxed">
                Read the comprehensive guide on frontline services, operational workflows, requirements, and service standards of the Provincial Government of Camarines Sur.
            </p>
            <div class="w-full flex justify-center">
                <button
                    type="button"
                    @click="pdfModalOpen = true"
                    style="padding-left: 2.75rem; padding-right: 2.75rem;"
                    class="inline-flex items-center justify-center px-10 sm:px-14 py-3.5 rounded-xl bg-blue-900 hover:bg-blue-800 text-white text-sm sm:text-base font-bold shadow-md hover:shadow-lg transition cursor-pointer transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    View Handbook
                </button>
            </div>
        </div>
    </div>
</div>
