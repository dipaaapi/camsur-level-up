{{-- Community Tourism Suggestion Modal --}}
<div id="suggestionModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
    <div class="relative w-full max-w-lg overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white p-6 sm:p-8">
        <button id="closeSuggestionModal" type="button" class="absolute top-4 right-4 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="flex items-center gap-3 mb-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-400 text-slate-950 text-2xl font-black shadow-md">
                📝
            </div>
            <div>
                <span class="text-[10px] font-black uppercase tracking-wider text-amber-400">Community Engagement</span>
                <h3 class="text-xl font-black text-white leading-tight">Submit Tourism Suggestion</h3>
            </div>
        </div>

        <p class="text-xs text-slate-300 leading-relaxed mb-6 font-normal">
            Help fellow travelers experience the best of Camarines Sur. Submit attraction recommendations, photo submissions, corrections, or transport tips.
        </p>

        <form id="tourismSuggestionForm" class="space-y-4">
            <div>
                <label for="sugName" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Your Name / Organization (Optional)</label>
                <input type="text" id="sugName" placeholder="e.g. Juan dela Cruz / Local Tour Guide"
                       class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="sugCategory" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Suggestion Type *</label>
                    <select id="sugCategory" required
                            class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 cursor-pointer">
                        <option value="new_destination">New Destination / Spot</option>
                        <option value="travel_route">Route & Transport Update</option>
                        <option value="food_spot">Local Food / Delicacy Spot</option>
                        <option value="event_festival">Festival / Event Update</option>
                        <option value="correction">Information Correction</option>
                    </select>
                </div>
                <div>
                    <label for="sugLocation" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Municipality / City *</label>
                    <input type="text" id="sugLocation" required placeholder="e.g. Caramoan, Naga City, Pili"
                           class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
                </div>
            </div>

            <div>
                <label for="sugMessage" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Details & Highlights *</label>
                <textarea id="sugMessage" required rows="4" placeholder="Describe the place, best time to go, activities, entrance fees, contact person, or specific suggestions..."
                          class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 leading-relaxed"></textarea>
            </div>

            <div id="suggestionSuccessMsg" class="hidden rounded-2xl bg-emerald-950/60 border border-emerald-500/40 p-3 text-center text-xs text-emerald-300 font-bold">
                ✓ Salamat po! Your tourism suggestion has been submitted for review.
            </div>

            <div class="pt-2 flex items-center justify-end gap-3">
                <button type="button" id="cancelSuggestionBtn" class="rounded-2xl border border-slate-700 bg-slate-800 px-5 py-3 text-xs font-bold uppercase tracking-wider text-slate-300 hover:bg-slate-700 transition cursor-pointer">
                    Cancel
                </button>
                <button type="submit" id="submitSuggestionBtn" class="rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-500/20 hover:scale-[1.02] transition cursor-pointer">
                    Submit Suggestion
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Detail Modal Dialog for Clicked Destination --}}
<div id="destModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
    <div class="relative w-full max-w-2xl overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white">
        <button id="closeDestModal" class="absolute top-4 right-4 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-slate-950/60 text-white backdrop-blur hover:bg-slate-800 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="h-64 sm:h-80 w-full overflow-hidden relative">
            <img id="modalImg" src="" alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/30 to-transparent"></div>
            <div class="absolute bottom-4 left-6 right-6">
                <span id="modalCat" class="inline-block rounded-full bg-blue-500/90 px-3 py-1 text-xs font-black uppercase tracking-wider text-white backdrop-blur-sm shadow"></span>
                <h3 id="modalTitle" class="mt-2 text-2xl font-black text-white leading-tight"></h3>
            </div>
        </div>

        <div class="p-6 sm:p-8 space-y-4 max-h-[50vh] overflow-y-auto">
            <div class="flex items-center gap-2 text-xs font-semibold text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span id="modalLoc"></span>
            </div>
            <p id="modalDesc" class="text-sm leading-relaxed text-slate-300 font-normal whitespace-pre-line"></p>
            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                <a href="https://www.visitcamsur.com" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 text-xs font-bold text-amber-400 hover:text-amber-300">
                    Discover more at VisitCamSur.com
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
