@props([
    'active' => 'government', // government, local, overseas, spes
    'badge' => '',
    'title' => '',
    'description' => ''
])

@php
    $portals = [
        'government' => [
            'name' => 'Government Careers',
            'sub' => 'Provincial Capitol Plantilla',
            'icon' => '🏛️',
            'route' => Route::has('careers.government') ? route('careers.government') : '#',
        ],
        'local' => [
            'name' => 'Local Employment',
            'sub' => 'Private & Local Companies',
            'icon' => '🏢',
            'route' => Route::has('careers.local') ? route('careers.local') : '#',
        ],
        'overseas' => [
            'name' => 'Overseas Careers',
            'sub' => 'DMW Accredited Agencies',
            'icon' => '🌏',
            'route' => Route::has('careers.overseas') ? route('careers.overseas') : '#',
        ],
        'spes' => [
            'name' => 'SPES & Internships',
            'sub' => 'Student Work Programs',
            'icon' => '🎓',
            'route' => Route::has('careers.spes') ? route('careers.spes') : '#',
        ],
    ];

    $current = $portals[$active] ?? $portals['government'];
@endphp

{{-- 
    IMPORTANT: Dito sa wrapper ginamit ang explicit Tailwind classes per active state 
    para sigurado silang ma-compile ng Vite/Tailwind v4 
--}}
<div @class([
    'relative rounded-3xl p-6 sm:p-10 text-white shadow-xl z-20 w-full overflow-visible',
    'bg-gradient-to-r from-emerald-800 via-emerald-700 to-teal-800' => $active === 'government',
    'bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900' => $active === 'local',
    'bg-gradient-to-r from-sky-900 via-blue-900 to-slate-900' => $active === 'overseas',
    'bg-gradient-to-r from-purple-950 via-indigo-900 to-purple-900' => $active === 'spes',
])>
    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6 w-full">
        
        {{-- Banner Details --}}
        <div class="max-w-2xl space-y-3">
            @if($badge)
                <span @class([
                    'inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md border',
                    'bg-emerald-500/30 text-emerald-100 border-emerald-400/30' => $active === 'government',
                    'bg-blue-500/30 text-blue-100 border-blue-400/30' => $active === 'local',
                    'bg-sky-500/30 text-sky-100 border-sky-400/30' => $active === 'overseas',
                    'bg-purple-500/30 text-purple-100 border-purple-400/30' => $active === 'spes',
                ])>
                    <span>{{ $current['icon'] }}</span>
                    <span>{{ $badge }}</span>
                </span>
            @endif
            
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white">{{ $title }}</h1>
            
            @if($description)
                <p class="text-slate-100 text-xs sm:text-sm leading-relaxed opacity-90">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- Dropdown Button --}}
        <div class="relative shrink-0 self-start md:self-center z-30" x-data="{ quickNavOpen: false }">
            <button @click="quickNavOpen = !quickNavOpen" @click.away="quickNavOpen = false"
                    class="bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold px-4 py-3 rounded-2xl backdrop-blur-md shadow-lg transition flex items-center gap-3 text-xs sm:text-sm">
                <span @class([
                    'p-1.5 rounded-xl',
                    'bg-emerald-500/30 text-emerald-300' => $active === 'government',
                    'bg-blue-500/30 text-blue-300' => $active === 'local',
                    'bg-sky-500/30 text-sky-300' => $active === 'overseas',
                    'bg-purple-500/30 text-purple-300' => $active === 'spes',
                ])>{{ $current['icon'] }}</span>
                
                <div class="text-left">
                    <span class="block text-[10px] text-slate-200 uppercase font-semibold">Switch Career Portal</span>
                    <span class="font-extrabold text-white">{{ $current['name'] }}</span>
                </div>

                <svg class="w-4 h-4 text-slate-200 transition-transform duration-200" :class="quickNavOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            {{-- Dropdown List --}}
            <div x-show="quickNavOpen" x-transition.origin.top.right x-cloak
                 class="absolute right-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-slate-200 py-2 z-50 text-slate-800">
                <div class="px-3 py-1.5 text-[10px] font-extrabold text-slate-400 uppercase tracking-wider border-b border-slate-100 mb-1">
                    Select Career Portal:
                </div>

                @foreach($portals as $key => $portal)
                    <a href="{{ $portal['route'] }}" 
                       @class([
                           'flex items-center gap-3 px-3.5 py-2.5 font-semibold text-xs transition',
                           'bg-emerald-50 text-emerald-900 font-bold border-l-4 border-emerald-600' => $key === $active && $key === 'government',
                           'bg-blue-50 text-blue-900 font-bold border-l-4 border-blue-600' => $key === $active && $key === 'local',
                           'bg-sky-50 text-sky-900 font-bold border-l-4 border-sky-600' => $key === $active && $key === 'overseas',
                           'bg-purple-50 text-purple-900 font-bold border-l-4 border-purple-600' => $key === $active && $key === 'spes',
                           'hover:bg-slate-50 text-slate-700' => $key !== $active,
                       ])>
                        <span class="text-base">{{ $portal['icon'] }}</span>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <span class="font-bold text-slate-900">{{ $portal['name'] }}</span>
                                @if($key === $active)
                                    <span @class([
                                        'text-[9px] px-1.5 py-0.5 rounded font-black',
                                        'bg-emerald-200 text-emerald-900' => $key === 'government',
                                        'bg-blue-200 text-blue-900' => $key === 'local',
                                        'bg-sky-200 text-sky-900' => $key === 'overseas',
                                        'bg-purple-200 text-purple-900' => $key === 'spes',
                                    ])>Active</span>
                                @endif
                            </div>
                            <span class="text-[10px] text-slate-500 block">{{ $portal['sub'] }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</div>