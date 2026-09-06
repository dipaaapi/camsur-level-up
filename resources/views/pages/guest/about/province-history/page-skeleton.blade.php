{{-- FULL PAGE INITIAL SKELETON LOADER SCREEN --}}
<div 
    id="page-skeleton-loader" 
    class="fixed inset-0 z-50 flex flex-col bg-slate-50 dark:bg-slate-900 overflow-hidden pointer-events-none transition-opacity duration-700 ease-out"
    aria-hidden="true"
>
    {{-- Skeleton Header / Banner placeholder --}}
    <div class="w-full bg-[#122251]/70 border-b-4 border-amber-400/30 p-6 sm:p-10 shadow-sm">
        <div class="mx-auto max-w-7xl space-y-4">
            <div class="h-6 w-52 rounded-full bg-slate-700/40 skeleton-shimmer"></div>
            <div class="h-10 sm:h-14 w-3/4 max-w-2xl rounded-2xl bg-slate-750/50 skeleton-shimmer"></div>
            <div class="h-4 sm:h-5 w-full max-w-3xl rounded bg-slate-750/35 skeleton-shimmer"></div>
        </div>
    </div>

    {{-- Skeleton Sub-nav Bar --}}
    <div class="w-full border-b border-slate-200/60 bg-white/70 px-4 py-3 shadow-sm dark:border-slate-800/60 dark:bg-slate-850/60">
        <div class="mx-auto flex max-w-7xl items-center gap-3 overflow-hidden">
            <div class="h-8 w-24 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
            <div class="h-8 w-32 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
            <div class="h-8 w-28 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
            <div class="h-8 w-24 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
            <div class="h-8 w-32 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
        </div>
    </div>

    {{-- Skeleton Main Content Layout --}}
    <div class="flex-1 overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl space-y-8">
            
            {{-- Top Overview Card skeleton --}}
            <div class="rounded-3xl border border-slate-200/60 bg-white/70 p-6 sm:p-8 dark:border-slate-800/60 dark:bg-slate-800/60 shadow-sm space-y-6">
                <div class="flex items-center gap-3">
                    <div class="h-6 w-44 rounded-full bg-slate-200/50 dark:bg-slate-700/40 skeleton-shimmer"></div>
                </div>
                <div class="h-9 w-2/3 max-w-xl rounded-xl bg-slate-200/50 dark:bg-slate-700/40 skeleton-shimmer"></div>
                <div class="h-4 w-full max-w-2xl rounded bg-slate-100/60 dark:bg-slate-750/40 skeleton-shimmer"></div>

                {{-- 4 metric cards skeleton --}}
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 pt-2">
                    <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                    <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                    <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                    <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                </div>
            </div>

            {{-- Main 2-column skeleton (Map & Aside card) --}}
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                <div class="lg:col-span-7 h-96 rounded-3xl border border-slate-200/60 bg-white/60 dark:border-slate-800/60 dark:bg-slate-800/50 p-6 skeleton-shimmer"></div>
                <div class="lg:col-span-5 h-96 rounded-3xl border border-slate-200/60 bg-white/60 dark:border-slate-800/60 dark:bg-slate-800/50 p-6 skeleton-shimmer"></div>
            </div>
        </div>
    </div>
</div>
