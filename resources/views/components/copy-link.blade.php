@props(['section', 'theme' => 'light'])

<button
    x-data="{ copied: false }"
    @click="
        const url = window.location.origin + window.location.pathname + '#{{ $section }}';
        navigator.clipboard.writeText(url);
        copied = true;
        setTimeout(() => copied = false, 2000);
    "
    :title="copied ? 'Link copied!' : 'Copy link to this section'"
    class="inline-flex items-center justify-center w-7 h-7 rounded-full transition-all
        {{ $theme === 'dark' ? 'text-slate-300 hover:bg-white/10' : 'text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-blue-600' }}"
    aria-label="Copy link to this section"
>
    <template x-if="!copied">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
    </template>
    <template x-if="copied">
        <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
    </template>
</button>