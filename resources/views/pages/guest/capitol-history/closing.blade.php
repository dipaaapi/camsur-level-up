{{-- CLOSING --}}
<section class="reveal section rounded-[2rem] border border-amber-100 bg-gradient-to-br from-amber-50 via-white to-blue-50 p-6 sm:p-10">
    <span class="eyebrow">Why This History Matters</span>
    <h2 class="h-sec">A Capitol That Mirrors the Province’s Journey</h2>
    <p class="lede">
        From the old seat of government in Naga, to the legal transfer to Pili, to the fire of 1976, the Bensia
        reconstruction, and the rise of the new iconic Capitol — the story of the Camarines Sur Provincial Capitol
        reflects the province’s resilience, adaptability, and continuing pursuit of progressive public service.
    </p>
    <div class="mt-7 flex flex-wrap gap-4">
        <button type="button" id="openCitations" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-5 py-3.5 text-[.7rem] font-bold uppercase tracking-[.12em] text-blue-900 shadow-sm transition hover:-translate-y-0.5 hover:bg-blue-50">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
            </svg>
            View Sources &amp; Citations
            <span class="rounded-full bg-blue-950 px-2 py-0.5 text-[.62rem] text-amber-300">{{ count($citations) }}</span>
        </button>

        <button type="button" id="openFeedback" class="inline-flex items-center gap-2 rounded-xl border border-amber-200 bg-amber-400 px-5 py-3.5 text-[.7rem] font-black uppercase tracking-[.12em] text-blue-950 shadow-sm transition hover:-translate-y-0.5 hover:bg-amber-300">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            Suggest Corrections / Raise Concerns
        </button>
    </div>
</section>
