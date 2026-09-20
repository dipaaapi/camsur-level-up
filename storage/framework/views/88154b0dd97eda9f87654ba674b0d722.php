<?php
    $currentRoute = request()->route() ? request()->route()->getName() : '';
    $currentUri = request()->path();

    // Determine layout archetype
    $isHistory = str_contains($currentUri, 'province-history') || str_contains($currentUri, 'capitol-history');
    $isProfile = str_contains($currentUri, 'profile') || str_contains($currentUri, 'socio-economic');
    $isHome = $currentUri === '/' || $currentRoute === 'home';
?>


<div 
    id="global-page-skeleton" 
    class="fixed inset-0 z-[9999] flex flex-col bg-slate-50 dark:bg-slate-900 overflow-hidden pointer-events-none transition-opacity duration-700 ease-out"
    aria-hidden="true"
>
    
    <div class="w-full bg-[#141414] py-2 px-4 sm:px-8 border-b border-white/10 flex justify-between items-center">
        <div class="h-4 w-28 rounded bg-slate-750 skeleton-shimmer"></div>
        <div class="hidden md:flex items-center gap-6">
            <div class="h-3 w-16 rounded bg-slate-750 skeleton-shimmer"></div>
            <div class="h-3 w-20 rounded bg-slate-750 skeleton-shimmer"></div>
            <div class="h-3 w-16 rounded bg-slate-750 skeleton-shimmer"></div>
        </div>
        <div class="h-4 w-32 rounded bg-slate-750 skeleton-shimmer"></div>
    </div>

    <?php if($isHome): ?>
        
        <div class="w-full bg-slate-900 h-96 sm:h-[480px] p-8 flex flex-col justify-center items-center text-center space-y-4">
            <div class="h-6 w-44 rounded-full bg-slate-800 skeleton-shimmer"></div>
            <div class="h-12 sm:h-16 w-3/4 max-w-2xl rounded-2xl bg-slate-800 skeleton-shimmer"></div>
            <div class="h-5 w-1/2 max-w-md rounded bg-slate-800 skeleton-shimmer"></div>
            <div class="flex gap-4 pt-4">
                <div class="h-12 w-36 rounded-xl bg-slate-800 skeleton-shimmer"></div>
                <div class="h-12 w-36 rounded-xl bg-slate-800 skeleton-shimmer"></div>
            </div>
        </div>

        <div class="flex-1 overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="h-64 rounded-3xl bg-white/70 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-800/60 p-6 skeleton-shimmer"></div>
                <div class="h-64 rounded-3xl bg-white/70 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-800/60 p-6 skeleton-shimmer"></div>
                <div class="h-64 rounded-3xl bg-white/70 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-800/60 p-6 skeleton-shimmer"></div>
            </div>
        </div>

    <?php elseif($isHistory): ?>
        
        
        <div class="w-full bg-[#122251] border-b-4 border-amber-400/40 p-6 sm:p-10 shadow-sm">
            <div class="mx-auto max-w-7xl space-y-3">
                <div class="h-5 w-48 rounded-full bg-slate-700/60 skeleton-shimmer"></div>
                <div class="h-10 sm:h-14 w-3/4 max-w-2xl rounded-2xl bg-slate-750/70 skeleton-shimmer"></div>
                <div class="h-4 sm:h-5 w-full max-w-3xl rounded bg-slate-750/50 skeleton-shimmer"></div>
            </div>
        </div>

        
        <div class="w-full border-b border-slate-200/70 bg-white/80 px-4 py-3 dark:border-slate-800/70 dark:bg-slate-850/80">
            <div class="mx-auto flex max-w-7xl items-center gap-3 overflow-hidden">
                <div class="h-8 w-24 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                <div class="h-8 w-28 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                <div class="h-8 w-24 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                <div class="h-8 w-24 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                <div class="h-8 w-28 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                <div class="h-8 w-28 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
            </div>
        </div>

        
        <div class="flex-1 overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl space-y-8">
                
                <div class="rounded-3xl border border-slate-700/80 bg-slate-900 p-6 sm:p-8 space-y-6 shadow-xl">
                    <div class="h-6 w-44 rounded-full bg-slate-800 skeleton-shimmer"></div>
                    <div class="h-9 sm:h-12 w-3/4 max-w-xl rounded-xl bg-slate-800 skeleton-shimmer"></div>
                    <div class="h-4 w-full max-w-2xl rounded bg-slate-800/60 skeleton-shimmer"></div>

                    
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 pt-4">
                        <div class="h-20 rounded-2xl bg-slate-800/80 border border-slate-750 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-800/80 border border-slate-755 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-800/80 border border-slate-750 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-800/80 border border-slate-750 skeleton-shimmer"></div>
                    </div>
                </div>

                
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <div class="lg:col-span-7 h-[460px] rounded-3xl border border-slate-200/60 bg-white/70 dark:border-slate-800/60 dark:bg-slate-800/60 p-6 skeleton-shimmer"></div>
                    <div class="lg:col-span-5 h-[460px] rounded-3xl border border-slate-200/60 bg-white/70 dark:border-slate-800/60 dark:bg-slate-800/60 p-6 skeleton-shimmer"></div>
                </div>
            </div>
        </div>

    <?php else: ?>
        
        <div class="w-full bg-[#122251]/80 border-b-4 border-amber-400/30 p-6 sm:p-10 shadow-sm">
            <div class="mx-auto max-w-7xl space-y-4">
                <div class="h-6 w-48 rounded-full bg-slate-700/40 skeleton-shimmer"></div>
                <div class="h-10 sm:h-14 w-3/4 max-w-2xl rounded-2xl bg-slate-750/50 skeleton-shimmer"></div>
                <div class="h-4 sm:h-5 w-full max-w-3xl rounded bg-slate-750/35 skeleton-shimmer"></div>
            </div>
        </div>

        <div class="flex-1 overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl space-y-8">
                <div class="rounded-3xl border border-slate-200/60 bg-white/70 p-6 sm:p-8 dark:border-slate-800/60 dark:bg-slate-800/60 shadow-sm space-y-6">
                    <div class="h-6 w-40 rounded-full bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                    <div class="h-8 w-2/3 max-w-xl rounded-xl bg-slate-200/50 dark:bg-slate-750/40 skeleton-shimmer"></div>
                    <div class="h-4 w-full max-w-2xl rounded bg-slate-100/60 dark:bg-slate-750/40 skeleton-shimmer"></div>

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 pt-2">
                        <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                        <div class="h-20 rounded-2xl bg-slate-100/50 dark:bg-slate-750/30 skeleton-shimmer"></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <div class="lg:col-span-7 h-80 rounded-3xl border border-slate-200/60 bg-white/60 dark:border-slate-800/60 dark:bg-slate-800/50 p-6 skeleton-shimmer"></div>
                    <div class="lg:col-span-5 h-80 rounded-3xl border border-slate-200/60 bg-white/60 dark:border-slate-800/60 dark:bg-slate-800/50 p-6 skeleton-shimmer"></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>


<style>
    /* Skeleton shimmer animation */
    .skeleton-shimmer {
        background: linear-gradient(
            90deg,
            rgba(203, 213, 225, 0.25) 0%,
            rgba(226, 232, 240, 0.45) 50%,
            rgba(203, 213, 225, 0.25) 100%
        );
        background-size: 200% 100%;
        animation: global-skeleton-wave 1.6s ease-in-out infinite;
    }

    .dark .skeleton-shimmer {
        background: linear-gradient(
            90deg,
            rgba(30, 41, 59, 0.35) 0%,
            rgba(51, 65, 85, 0.55) 50%,
            rgba(30, 41, 59, 0.35) 100%
        );
        background-size: 200% 100%;
        animation: global-skeleton-wave 1.6s ease-in-out infinite;
    }

    @keyframes global-skeleton-wave {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
</style>

<script>
    (function () {
        let dismissed = false;

        const dismissGlobalSkeleton = () => {
            if (dismissed) return;
            dismissed = true;

            const skeletonEl = document.getElementById('global-page-skeleton');
            const pageBody = document.getElementById('global-page-wrapper');

            // 1. Reveal page body immediately
            if (pageBody) {
                pageBody.classList.remove('opacity-0');
                pageBody.classList.add('opacity-100');
            }

            // 2. Fade out skeleton smoothly
            if (skeletonEl) {
                skeletonEl.style.opacity = '0';
                setTimeout(() => {
                    if (skeletonEl && skeletonEl.parentNode) {
                        skeletonEl.parentNode.removeChild(skeletonEl);
                    }
                }, 400);
            }
        };

        // Guarantee maximum display time of 250ms so user is never stuck
        const maxTimer = setTimeout(dismissGlobalSkeleton, 250);

        // Check when page is ready
        const onReady = () => {
            setTimeout(dismissGlobalSkeleton, 50);
        };

        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            dismissGlobalSkeleton();
        } else {
            window.addEventListener('DOMContentLoaded', onReady, { once: true });
        }
    })();
</script>
<?php /**PATH /var/www/resources/views/components/guest/panels/page-skeleton.blade.php ENDPATH**/ ?>