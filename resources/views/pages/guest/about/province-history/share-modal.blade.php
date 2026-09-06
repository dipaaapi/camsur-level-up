<div
    x-data="{ open: false, copied: false }"
    @open-history-share.window="open = true"
    @keydown.escape.window="open = false"
    x-show="open" x-transition.opacity
    class="fixed inset-0 z-[60] flex items-center justify-center bg-black/60 p-4 backdrop-blur-sm print:hidden"
    style="display: none;" role="dialog" aria-modal="true" aria-labelledby="history-share-title">
    <div @click.outside="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100"
        class="w-full max-w-md space-y-5 rounded-3xl bg-white p-6 shadow-2xl dark:bg-slate-800">
        <div class="flex items-center justify-between gap-4">
            <h2 id="history-share-title" class="text-lg font-black text-slate-900 dark:text-white">Share this history page</h2>
            <button type="button" @click="open = false" class="flex h-9 w-9 items-center justify-center rounded-full text-slate-500 transition hover:bg-slate-100 dark:hover:bg-slate-700" aria-label="Close">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="flex items-center gap-2 rounded-xl border border-slate-200 bg-slate-50 p-2 pl-4 dark:border-slate-700 dark:bg-slate-900">
            <span class="min-w-0 flex-1 truncate text-sm text-slate-600 dark:text-slate-300" x-text="window.location.href"></span>
            <button type="button"
                @click="navigator.clipboard.writeText(window.location.href); copied = true; setTimeout(() => copied = false, 2000)"
                :class="copied ? 'bg-emerald-600' : 'bg-blue-600 hover:bg-blue-700'"
                class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-white transition">
                <span x-text="copied ? 'Copied!' : 'Copy'"></span>
            </button>
        </div>
        <div class="grid grid-cols-1 gap-2 sm:grid-cols-3">
            <a :href="`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`" target="_blank" rel="noopener noreferrer" class="rounded-xl bg-blue-600 p-3 text-center text-xs font-bold text-white transition hover:bg-blue-700">Facebook</a>
            <a :href="`https://twitter.com/intent/tweet?url=${encodeURIComponent(window.location.href)}&text=${encodeURIComponent(document.title)}`" target="_blank" rel="noopener noreferrer" class="rounded-xl bg-slate-950 p-3 text-center text-xs font-bold text-white transition hover:bg-black">X / Twitter</a>
            <a :href="`mailto:?subject=${encodeURIComponent(document.title)}&body=${encodeURIComponent(window.location.href)}`" class="rounded-xl bg-slate-200 p-3 text-center text-xs font-bold text-slate-900 transition hover:bg-slate-300 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600">Email</a>
        </div>
    </div>
</div>