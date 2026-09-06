{{-- ==================== DETAIL MODAL ==================== --}}
<div class="modal" id="detailModal" aria-hidden="true">
    <div class="modal-panel relative" role="dialog" aria-modal="true" aria-labelledby="dmTitle">
        <button type="button" class="modal-close" data-close-detail aria-label="Close details">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
        </button>
        <div class="modal-scroll">
            <div class="modal-media media" id="dmMedia"></div>
            <div class="p-6 sm:p-8">
                <div class="flex flex-wrap items-center gap-2" id="dmMeta"></div>
                <h3 id="dmTitle" class="mt-3 text-xl font-black leading-tight text-blue-950 sm:text-2xl"></h3>
                <div id="dmProse" class="mt-4 space-y-3.5 text-[.88rem] leading-[1.8] text-gray-700"></div>
                <div id="dmFactsWrap" class="mt-7">
                    <p class="text-[.62rem] font-black uppercase tracking-[.14em] text-amber-600">Key Record</p>
                    <dl class="fact-grid mt-3" id="dmFacts"></dl>
                </div>
                <div id="dmSourcesWrap" class="mt-7">
                    <p class="text-[.62rem] font-black uppercase tracking-[.14em] text-amber-600">Sources for this entry</p>
                    <div class="mt-3 flex flex-wrap gap-2" id="dmSources"></div>
                </div>
            </div>
        </div>
        <div class="modal-foot">
            <button type="button" class="modal-navbtn" id="dmPrev">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M15 18l-6-6 6-6"/></svg> Previous
            </button>
            <span class="text-[.7rem] font-black tabular-nums text-gray-500" id="dmCounter"></span>
            <button type="button" class="modal-navbtn" id="dmNext">
                Next <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M9 6l6 6-6 6"/></svg>
            </button>
        </div>
    </div>
</div>

{{-- ==================== CITATIONS MODAL ==================== --}}
<div class="modal" id="citeModal" aria-hidden="true">
    <div class="modal-panel relative" role="dialog" aria-modal="true" aria-labelledby="cmTitle">
        <div class="border-b border-gray-100 p-6 sm:p-7">
            <button type="button" class="modal-close" data-close-cite aria-label="Close citations">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
            <span class="eyebrow">References</span>
            <h3 id="cmTitle" class="mt-2 text-xl font-black text-blue-950">Sources &amp; Citations</h3>
            <p class="mt-2 max-w-lg text-[.82rem] leading-relaxed text-gray-600">
                Historical content on this page — the founding decree, early explorations, and territorial reorganisations —
                was compiled from the following works.
            </p>
            <label class="mt-4 flex items-center gap-2.5 rounded-xl border border-gray-200 bg-gray-50 px-3.5 py-2.5 focus-within:border-amber-400">
                <svg class="h-4 w-4 shrink-0 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
                <input id="cmSearch" type="search" placeholder="Search titles, publishers, or types…" class="w-full border-0 bg-transparent p-0 text-sm text-gray-800 placeholder-gray-400 focus:ring-0" autocomplete="off">
                <span class="hidden shrink-0 text-[.65rem] font-black text-gray-400 sm:inline" id="cmCount"></span>
            </label>
        </div>
        <div class="modal-scroll p-6 sm:p-7">
            <ol class="space-y-3" id="cmList"></ol>
            <p class="hidden py-8 text-center text-sm font-semibold text-gray-400" id="cmEmpty">No matching sources.</p>
        </div>
    </div>
</div>

{{-- ==================== FEEDBACK / CONCERN MODAL ==================== --}}
<div class="modal" id="feedbackModal" aria-hidden="true">
    <div class="modal-panel relative !max-w-xl" role="dialog" aria-modal="true" aria-labelledby="fmTitle">
        <button type="button" class="modal-close" data-close-feedback aria-label="Close form">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
        </button>
        
        <div class="p-6 sm:p-8 border-b border-gray-100 bg-slate-50">
            <span class="eyebrow">Constituent Interface</span>
            <h3 id="fmTitle" class="mt-2 text-xl font-black text-blue-950">Suggest Corrections / Raise Concerns</h3>
            <p class="mt-2 text-xs leading-relaxed text-slate-500">
                Please use this form to suggest changes, point out spelling errors, or express concerns regarding the Bicolano history documented on this specific timeline.
            </p>
        </div>

        <form id="constituentForm" action="#" class="modal-scroll p-6 sm:p-8 space-y-4">
            <div class="p-3.5 rounded-xl border border-amber-200 bg-amber-50 text-[.74rem] leading-relaxed text-amber-900 font-medium">
                <strong>Disclaimer Note:</strong> This messaging form is strictly used and designated for Bicolano territorial history &amp; Provincial Capitol history-related archival corrections on this page only. Other municipal queries will not be entertained here.
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Your Name</label>
                    <input type="text" required class="w-full rounded-xl border border-slate-200 text-sm p-3 focus:border-amber-400 focus:ring-0" placeholder="Full name">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Email / Contact</label>
                    <input type="email" required class="w-full rounded-xl border border-slate-200 text-sm p-3 focus:border-amber-400 focus:ring-0" placeholder="Email address">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Type of Concern</label>
                <select class="w-full rounded-xl border border-slate-200 text-sm p-3 focus:border-amber-400 focus:ring-0">
                    <option value="correction">Suggested History Correction</option>
                    <option value="typo">Spelling / Typo Correction</option>
                    <option value="missing">Missing Archival Event Suggestion</option>
                    <option value="other">General Page Layout Concern</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Your Message / Correction</label>
                <textarea rows="4" required class="w-full rounded-xl border border-slate-200 text-sm p-3 focus:border-amber-400 focus:ring-0" placeholder="Please reference the specific year or item, and supply verifiable sources if proposing factual edits..."></textarea>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-blue-950 hover:bg-blue-900 text-white font-black text-xs uppercase tracking-widest transition shadow-md">
                Submit Archive Contribution
            </button>
        </form>
    </div>
</div>
