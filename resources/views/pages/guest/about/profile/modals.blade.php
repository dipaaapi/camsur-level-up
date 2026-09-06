{{-- Profile Suggestion & Feedback Modal --}}
<div id="profileSuggestionModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
    <div class="relative w-full max-w-lg overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white p-6 sm:p-8">
        <button id="closeProfileSuggestionModal" type="button" class="absolute top-4 right-4 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="flex items-center gap-3 mb-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-400 text-slate-950 text-2xl font-black shadow-md">
                📝
            </div>
            <div>
                <span class="text-[10px] font-black uppercase tracking-wider text-amber-400">Research &amp; Data Integrity</span>
                <h3 class="text-xl font-black text-white leading-tight">Submit Profile Suggestion</h3>
            </div>
        </div>

        <p class="text-xs text-slate-300 leading-relaxed mb-6 font-normal">
            Help maintain rigorous accuracy for Camarines Sur's geographic baseline. Share updated research citations, land surveys, statistical corrections, or inquiries.
        </p>

        <form id="profileSuggestionForm" class="space-y-4">
            <div>
                <label for="profSugName" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Your Name / Institution (Optional)</label>
                <input type="text" id="profSugName" placeholder="e.g. Maria Santos / Bicol University Researcher"
                       class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="profSugCategory" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Topic / Category *</label>
                    <select id="profSugCategory" required
                            class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 cursor-pointer">
                        <option value="geography_topography">Topography &amp; Terrain</option>
                        <option value="hydrography_watershed">Hydrography &amp; Water Resources</option>
                        <option value="soil_classification">Soil &amp; Agrarian Data</option>
                        <option value="boundary_cadastral">Cadastral &amp; Land Area</option>
                        <option value="statistical_correction">Demographic / LGU Correction</option>
                        <option value="general_inquiry">General Profile Inquiry</option>
                    </select>
                </div>
                <div>
                    <label for="profSugLocation" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Municipality / Focus Area *</label>
                    <input type="text" id="profSugLocation" required placeholder="e.g. Caramoan, Libmanan, Mount Isarog"
                           class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
                </div>
            </div>

            <div>
                <label for="profSugMessage" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Details, Citations or Inquiry *</label>
                <textarea id="profSugMessage" required rows="4" placeholder="Provide context, references, agency publication links, or specific geographic details..."
                          class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 leading-relaxed"></textarea>
            </div>

            <div id="profileSuggestionSuccessMsg" class="hidden rounded-2xl bg-emerald-950/60 border border-emerald-500/40 p-3 text-center text-xs text-emerald-300 font-bold">
                ✓ Maraming salamat! Your suggestion has been submitted to the planning and research team.
            </div>

            <div class="pt-2 flex items-center justify-end gap-3">
                <button type="button" id="cancelProfileSuggestionBtn" class="rounded-2xl border border-slate-700 bg-slate-800 px-5 py-3 text-xs font-bold uppercase tracking-wider text-slate-300 hover:bg-slate-700 transition cursor-pointer">
                    Cancel
                </button>
                <button type="submit" id="submitProfileSuggestionBtn" class="rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-500/20 hover:scale-[1.02] transition cursor-pointer">
                    Submit Suggestion
                </button>
            </div>
        </form>
    </div>
</div>
