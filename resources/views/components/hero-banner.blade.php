@props([
    'badgeText' => 'VALIDATED OFFICIAL PROVINCIAL DATA BASELINE',
    'title' => 'LALAWIGAN NG CAMARINES SUR',
    'description' => 'Ang komprehensibong balangkas ng heograpiya, demograpiya, makroekonomiya, imprastraktura, at climate resiliency status ng pinakamalaking lalawigan at sentro ng kaunlaran sa Bicol Region.',
])

<div class="w-full bg-[#122251] text-white border-b-4 border-amber-400 shadow-md">
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 space-y-3">

        {{-- Gold / Yellow Pill Badge --}}
        @if($badgeText)
            <div>
                <span class="inline-block px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-amber-400 text-slate-950 shadow-sm">
                    {{ $badgeText }}
                </span>
            </div>
        @endif

        {{-- Main Large Title --}}
        <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-white uppercase leading-tight">
            {{ $title }}
        </h1>

        {{-- Description --}}
        @if($description)
            <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-4xl font-normal">
                {{ $description }}
            </p>
        @endif

    </div>
</div>
