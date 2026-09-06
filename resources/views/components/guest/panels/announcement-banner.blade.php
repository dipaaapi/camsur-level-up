<div x-data="{
        showBanner: false,
        bannerId: 'camsur-announcement-v1',
        init() {
            if (localStorage.getItem('dismissed_banner_' + this.bannerId) !== 'true') {
                this.showBanner = true;
            }
        },
        dismiss() {
            this.showBanner = false;
            localStorage.setItem('dismissed_banner_' + this.bannerId, 'true');
        }
    }"
    x-show="showBanner"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="-translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0"
    x-cloak
    class="bg-gradient-to-r from-amber-600 via-amber-500 to-yellow-500 text-slate-950 font-medium px-4 py-2.5 shadow-md relative z-50 text-xs sm:text-sm border-b border-amber-600/30">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
        <div class="flex items-center gap-2.5 flex-1 min-w-0">
            <span class="inline-flex items-center justify-center bg-slate-950 text-amber-300 font-extrabold text-[10px] tracking-wider uppercase px-2 py-0.5 rounded shadow-sm shrink-0">
                Official Advisory
            </span>
            <p class="truncate text-slate-950 font-semibold text-xs sm:text-sm">
                🎓 <strong>Educational Assistance Program:</strong> Applications & verification schedules are actively ongoing across CamSur districts.
            </p>
            <a href="{{ route('services.educational-assistance') }}" class="hidden md:inline-flex items-center gap-1 font-bold text-slate-950 underline underline-offset-2 hover:text-white transition shrink-0 ml-1">
                View Requirements & Schedule &rarr;
            </a>
        </div>

        <div class="flex items-center gap-2 shrink-0">
            <a href="{{ route('services.educational-assistance') }}" class="md:hidden font-bold underline text-xs text-slate-950">
                View Info
            </a>
            <button @click="dismiss()"
                    type="button"
                    class="p-1 rounded-md text-slate-900 hover:bg-black/10 transition focus:outline-none"
                    aria-label="Dismiss announcement">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
