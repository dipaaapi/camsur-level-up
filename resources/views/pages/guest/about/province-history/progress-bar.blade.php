{{-- READING PROGRESS BAR --}}
<div
    x-data="{ progress: 0 }"
    x-init="
        const update = () => {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            progress = height > 0 ? Math.min(100, Math.max(0, (scrollTop / height) * 100)) : 0;
        };
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update, { passive: true });
        update();
    "
    class="fixed inset-x-0 top-0 z-[70] h-1 bg-slate-200/50 dark:bg-slate-800/50 print:hidden"
    role="progressbar"
    :aria-valuenow="Math.round(progress)"
    aria-valuemin="0"
    aria-valuemax="100"
    aria-label="Page reading progress"
>
    <div
        class="h-full bg-gradient-to-r from-blue-600 via-indigo-500 to-purple-600 shadow-[0_0_12px_rgba(59,130,246,0.65)] transition-[width] duration-150 ease-out"
        :style="`width: ${progress}%`"
    ></div>
</div>

{{-- SKIP TO CONTENT --}}
<a
    href="#main-content"
    class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[80] focus:rounded-xl focus:bg-blue-600 focus:px-5 focus:py-3 focus:font-bold focus:text-white focus:shadow-2xl focus:outline-none focus:ring-4 focus:ring-blue-300"
>
    Skip to main content
</a>