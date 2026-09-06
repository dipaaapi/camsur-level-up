<div x-data="{ visible: false }"
     x-init="window.addEventListener('scroll', () => visible = window.scrollY > 350, { passive: true })"
     class="print:hidden">
    <button type="button"
            x-show="visible"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-y-4 scale-90"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 scale-90"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-6 right-6 z-50 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 hover:bg-blue-700 text-white shadow-xl shadow-blue-600/30 transition-all hover:scale-110 active:scale-95 focus:outline-none"
            aria-label="Scroll to top"
            title="Scroll to top"
            style="display: none;">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m5 15 7-7 7 7"/>
        </svg>
    </button>
</div>
