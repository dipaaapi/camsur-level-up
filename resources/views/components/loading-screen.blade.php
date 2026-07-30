<div
    x-data="{ showLoading: true }"
    x-init="window.addEventListener('load', () => showLoading = false)"
    x-show="showLoading"
    x-transition:leave="transition ease-in duration-300 transform"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-slate-900 text-white"
>
    <div class="relative flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-blue-500/20 border-t-blue-500 rounded-full animate-spin"></div>
        <div class="absolute w-10 h-10 border-4 border-emerald-500/20 border-t-emerald-500 rounded-full animate-spin [animation-duration:1.5s] [animation-direction:reverse]"></div>
    </div>

    <div class="mt-4 text-center">
        <h2 class="text-lg font-bold tracking-wider uppercase text-slate-200">Camsur Level Up</h2>
        <p class="text-xs text-slate-400 mt-1 animate-pulse">Loading resources...</p>
    </div>
</div>
