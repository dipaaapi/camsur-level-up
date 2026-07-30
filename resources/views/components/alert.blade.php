@props(['type' => 'info', 'message'])

@php
    $styles = [
        'success' => 'bg-emerald-50 text-emerald-800 border-emerald-200 dark:bg-emerald-950 dark:text-emerald-200',
        'error'   => 'bg-rose-50 text-rose-800 border-rose-200 dark:bg-rose-950 dark:text-rose-200',
        'info'    => 'bg-sky-50 text-sky-800 border-sky-200 dark:bg-sky-950 dark:text-sky-200',
    ][$type] ?? 'bg-slate-50 text-slate-800 border-slate-200';
@endphp

<div {{ $attributes->merge(['class' => "p-4 rounded-xl border text-sm font-medium flex items-center justify-between $styles"]) }}>
    <span>{{ $message ?? $slot }}</span>
</div>
