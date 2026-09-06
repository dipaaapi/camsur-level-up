{{-- Fullscreen Image Lightbox Modal --}}
<div 
    x-data="imageLightboxModal()"
    x-init="init()"
    x-show="isOpen"
    @keydown.escape.window="close()"
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-6 md:p-8 print:hidden"
    role="dialog"
    aria-modal="true"
    aria-label="Image Preview"
>
    {{-- Dark Backdrop with Blur --}}
    <div 
        x-show="isOpen"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="close()"
        class="fixed inset-0 bg-slate-950/85 backdrop-blur-md transition-opacity"
    ></div>

    {{-- Modal Content Box --}}
    <div 
        x-show="isOpen"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95 translate-y-4"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-4"
        @click.stop
        class="relative z-10 flex max-h-[92vh] w-full max-w-5xl flex-col overflow-hidden rounded-3xl border border-slate-750 bg-slate-900 shadow-2xl"
    >
        {{-- Header Bar --}}
        <div class="flex items-center justify-between border-b border-slate-800 bg-slate-950/70 px-5 py-3.5 backdrop-blur-md">
            <div class="flex items-center gap-2.5 min-w-0 pr-4">
                <span class="flex h-2.5 w-2.5 rounded-full bg-blue-500"></span>
                <p class="truncate text-xs sm:text-sm font-bold text-white" x-text="altText || 'Historical Archival Media'"></p>
            </div>
            <div class="flex items-center gap-2">
                {{-- Open raw image in new tab --}}
                <a 
                    :href="imageSrc" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    title="Open original image"
                    class="rounded-xl border border-slate-700 bg-slate-800 p-2 text-slate-300 transition-colors hover:bg-slate-700 hover:text-white"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                {{-- Close Button --}}
                <button 
                    type="button" 
                    @click="close()"
                    title="Close preview (Esc)"
                    class="rounded-xl bg-slate-800 p-2 text-slate-300 transition-colors hover:bg-rose-600 hover:text-white"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        {{-- Image Display Area --}}
        <div class="relative flex min-h-[300px] sm:min-h-[450px] flex-1 items-center justify-center overflow-auto p-3 sm:p-6 bg-slate-950/40">
            {{-- Skeleton Loader shimmer while image loads --}}
            <div 
                x-show="isLoading" 
                class="absolute inset-4 sm:inset-8 flex flex-col items-center justify-center rounded-2xl bg-slate-800/80 animate-pulse border border-slate-750"
            >
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-700/60 text-slate-500">
                    <svg class="h-8 w-8 animate-spin text-blue-500" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                </div>
                <div class="mt-4 h-3 w-40 rounded bg-slate-750"></div>
                <div class="mt-2 h-2.5 w-24 rounded bg-slate-800"></div>
            </div>

            <img 
                :src="imageSrc" 
                :alt="altText"
                @load="isLoading = false"
                x-show="!isLoading"
                class="max-h-[76vh] w-auto max-w-full rounded-xl object-contain drop-shadow-2xl transition-opacity duration-300"
            />
        </div>

        {{-- Footer Caption Bar --}}
        <div class="flex items-center justify-between border-t border-slate-800 bg-slate-950/70 px-5 py-2.5 text-xs text-slate-400">
            <span class="truncate" x-text="altText"></span>
            <span class="hidden sm:inline-block shrink-0 text-[11px] text-slate-500">Pindutin ang labas o ESC para isara</span>
        </div>
    </div>
</div>
