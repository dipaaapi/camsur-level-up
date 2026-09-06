@props([
    'target',
    'label',
    'suffix' => '',
    'decimals' => 0,
    'format' => false,
])

<div {{ $attributes->merge(['class' => 'p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-blue-300 dark:hover:border-blue-700 hover:shadow-lg transition-all duration-300']) }}
    x-data="{
        current: 0,
        target: {{ $target }},
        decimals: {{ $decimals }},
        format: {{ $format ? 'true' : 'false' }},
        animate() {
            const duration = 1600;
            const start = performance.now();
            const step = (now) => {
                const p = Math.min(1, (now - start) / duration);
                const eased = 1 - Math.pow(1 - p, 3);
                this.current = this.target * eased;
                if (p < 1) requestAnimationFrame(step);
                else this.current = this.target;
            };
            requestAnimationFrame(step);
        },
        display() {
            const val = this.decimals > 0 ? this.current.toFixed(this.decimals) : Math.round(this.current);
            return this.format ? Number(val).toLocaleString() : val;
        }
    }"
    x-intersect.once="animate()"
>
    <p class="text-2xl sm:text-3xl font-black text-blue-600 dark:text-blue-400">
        <span x-text="display()"></span>{{ $suffix }}
    </p>
    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mt-1">{{ $label }}</p>
</div>