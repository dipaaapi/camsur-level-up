<div x-data="{ visible: false }"
    x-init="window.addEventListener('scroll', () => visible = window.scrollY > 600, { passive: true })"
    class="print:hidden">
    <button type="button" x-show="visible" x-transition
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 z-40 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-indigo-700 text-white shadow-xl shadow-blue-500/30 transition-all hover:-translate-y-1 hover:scale-110 hover:from-blue-700 hover:to-indigo-800"
        aria-label="Back to top">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m5 15 7-7 7 7"/></svg>
    </button>
</div>