@props([
    'badgeText' => 'VALIDATED OFFICIAL PROVINCIAL DATA BASELINE',
    'title' => 'LALAWIGAN NG CAMARINES SUR',
    'description' => 'Ang komprehensibong balangkas ng heograpiya, demograpiya, makroekonomiya, imprastraktura, at climate resiliency status ng pinakamalaking lalawigan at sentro ng kaunlaran sa Bicol Region.',
])

<div {{ $attributes->merge(['class' => 'w-full rounded-2xl bg-gradient-to-r from-blue-950 via-indigo-900 to-slate-900 text-white border-b-4 border-amber-400 shadow-md']) }}>
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 space-y-4">
        
        {{-- Actual Badge Element (Pill Container) --}}
        @if($badgeText)
            <div class="inline-block">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] sm:text-xs font-extrabold tracking-wider uppercase bg-amber-400 text-slate-950 shadow-sm">
                    {{ $badgeText }}
                </span>
            </div>
        @endif

        {{-- Main Large Title --}}
        <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-white uppercase leading-tight !text-white">
            {{ $title }}
        </h1>

        {{-- Description Paragraph --}}
        @if($description)
            <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-4xl font-normal !text-slate-200">
                {{ $description }}
            </p>
        @endif

        {{-- Optional Slot --}}
        @if(isset($slot) && $slot->isNotEmpty())
            <div class="pt-2">
                {{ $slot }}
            </div>
        @endif

    </div>
</div>