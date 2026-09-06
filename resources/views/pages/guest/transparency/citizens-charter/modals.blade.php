{{-- Full View PDF Modal with Guaranteed Visible Height and Scroll Lock --}}
<div
    x-show="pdfModalOpen"
    x-cloak
    class="fixed inset-0 z-50 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
    @keydown.escape.window="pdfModalOpen = false">
    
    <div class="flex items-center justify-center min-h-screen p-2 sm:p-4 text-center">
        {{-- Backdrop --}}
        <div
            x-show="pdfModalOpen"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-slate-950/85 backdrop-blur-sm transition-opacity"
            @click="pdfModalOpen = false"></div>

        {{-- Modal Dialog --}}
        <div
            x-show="pdfModalOpen"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative bg-slate-900 rounded-2xl overflow-hidden shadow-2xl transform transition-all w-full max-w-6xl z-10 border border-slate-700 text-left flex flex-col my-auto">
            
            {{-- Modal Header --}}
            <div class="px-6 py-4 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 text-white flex items-center justify-between border-b border-blue-800/60 flex-shrink-0">
                <div class="flex items-center gap-3">
                    <img src="https://camsur.com/img/transparency/citizens-charter/camsur_logo_sml.png" alt="CamSur Logo" class="h-8 w-auto">
                    <div>
                        <h3 class="text-sm sm:text-base font-bold leading-none text-white">Citizen's Charter 2026</h3>
                        <span class="text-[11px] text-blue-200/80 font-medium">Official Frontline Handbook - Provincial Government of Camarines Sur</span>
                    </div>
                </div>
                
                {{-- Actions: View in New Tab Button beside Close Button --}}
                <div class="flex items-center gap-2.5 sm:gap-3">
                    <a
                        href="{{ asset('documents/transparency/citizens-charter/citizens-charter-2026.pdf') }}"
                        target="_blank"
                        class="inline-flex items-center px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-semibold transition">
                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        View in New Tab
                    </a>
                    <button
                        type="button"
                        @click="pdfModalOpen = false"
                        class="p-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-white transition cursor-pointer"
                        title="Close Modal">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            {{-- Modal Body: Fixed Height Embedded PDF Viewer --}}
            <div class="w-full bg-slate-900" style="height: 78vh; min-height: 550px;">
                <iframe
                    src="{{ asset('documents/transparency/citizens-charter/citizens-charter-2026.pdf') }}#toolbar=0&navpanes=0"
                    class="w-full h-full border-0 block"
                    style="height: 100%; width: 100%; min-height: 550px;"
                    title="Citizen's Charter PDF"></iframe>
            </div>
        </div>
    </div>
</div>

{{-- Modal for Viewing Poster Fullscreen --}}
<div
    x-show="posterModalOpen"
    x-cloak
    class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4"
    aria-modal="true"
    @keydown.escape.window="posterModalOpen = false">
    
    <div
        x-show="posterModalOpen"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/85 backdrop-blur-sm transition-opacity"
        @click="posterModalOpen = false"></div>

    <div
        x-show="posterModalOpen"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="relative max-w-2xl w-full z-10 text-center">
        <button
            type="button"
            @click="posterModalOpen = false"
            class="absolute -top-10 right-0 text-white/80 hover:text-white p-2 text-sm font-bold flex items-center gap-1 cursor-pointer">
            <span>Close</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <img :src="activePoster" alt="Poster Full View" class="max-h-[85vh] w-auto mx-auto rounded-xl shadow-2xl">
    </div>
</div>
