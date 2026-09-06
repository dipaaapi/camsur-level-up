{{-- 7. DIVISION EVACUATION CENTERS MATRIX & DEMOGRAPHIC MAP --}}
<section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
    
    {{-- Section Header --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="flex items-center gap-4">
            <div class="p-3.5 bg-indigo-100 text-indigo-700 rounded-2xl shrink-0 shadow-xs">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Demographic Map & Division Evacuation Centers</h2>
                <p class="text-sm text-slate-500 mt-0.5">District safety infrastructure, evacuation capacity, and LGU shelters</p>
            </div>
        </div>

        {{-- Province-wide totals --}}
        <div class="flex flex-wrap sm:flex-nowrap gap-3 items-center shrink-0">
            <div class="flex items-center gap-2.5 px-4 py-2 bg-indigo-50 border border-indigo-100 rounded-2xl shadow-xs">
                <span class="text-indigo-600 text-base font-black">🏢</span>
                <div>
                    <div class="text-[10px] text-indigo-600 font-black uppercase tracking-wider">Total Centers</div>
                    <div class="text-base font-black text-indigo-950 leading-none">70 Facilities</div>
                </div>
            </div>
            <div class="flex items-center gap-2.5 px-4 py-2 bg-emerald-50 border border-emerald-100 rounded-2xl shadow-xs">
                <span class="text-emerald-600 text-base font-black">🛡️</span>
                <div>
                    <div class="text-[10px] text-emerald-600 font-black uppercase tracking-wider">Total Capacity</div>
                    <div class="text-base font-black text-emerald-950 leading-none">28,500 Fam.</div>
                </div>
            </div>
        </div>
    </div>

    <p class="text-xs text-slate-500 flex items-center gap-2 font-medium">
        <span class="text-indigo-500 text-sm">💡</span>
        Hover over the interactive map pins or click any district below to explore detailed shelter capacities and municipal allocations.
    </p>

    {{-- Main Layout: Map + Badges --}}
    @php
    $districts = [
        [
            'd' => 1, 'top' => '25%', 'left' => '22%', 'label' => 'D1',
            'name' => '1st Congressional District', 'lgus' => 'Libmanan, Sipocot, Cabusao, Del Gallego, Lupi, Ragay', 
            'lgu_data' => [
                ['name' => 'Libmanan', 'count' => 5], ['name' => 'Sipocot', 'count' => 2], ['name' => 'Cabusao', 'count' => 1],
                ['name' => 'Del Gallego', 'count' => 2], ['name' => 'Lupi', 'count' => 1], ['name' => 'Ragay', 'count' => 1]
            ],
            'centers' => 12, 'capacity' => 4500, 'maxCap' => 7100,
            'c' => [
                'border' => 'border-rose-400', 'bgAct' => 'bg-rose-50', 'shadow' => 'shadow-rose-100',
                'icon' => 'bg-rose-100 text-rose-700', 'iconAct' => 'bg-rose-200',
                'text' => 'text-rose-700', 'bar' => 'bg-rose-600',
                'pinActive' => 'bg-rose-600 ring-4 ring-rose-300 shadow-rose-500/50', 'pinInactive' => 'bg-rose-500 border-rose-200', 'pinPing' => 'bg-rose-400'
            ]
        ],
        [
            'd' => 2, 'top' => '54%', 'left' => '36%', 'label' => 'D2',
            'name' => '2nd Congressional District', 'lgus' => 'Pili (Capital), Gainza, Milaor, Minalabac, Pamplona, Pasacao, San Fernando', 
            'lgu_data' => [
                ['name' => 'Pili', 'count' => 4], ['name' => 'Gainza', 'count' => 1], ['name' => 'Milaor', 'count' => 2],
                ['name' => 'Minalabac', 'count' => 2], ['name' => 'Pamplona', 'count' => 2], ['name' => 'Pasacao', 'count' => 2],
                ['name' => 'San Fernando', 'count' => 2]
            ],
            'centers' => 15, 'capacity' => 6200, 'maxCap' => 7100,
            'c' => [
                'border' => 'border-amber-400', 'bgAct' => 'bg-amber-50', 'shadow' => 'shadow-amber-100',
                'icon' => 'bg-amber-100 text-amber-800', 'iconAct' => 'bg-amber-200',
                'text' => 'text-amber-800', 'bar' => 'bg-amber-600',
                'pinActive' => 'bg-amber-600 ring-4 ring-amber-300 shadow-amber-500/50', 'pinInactive' => 'bg-amber-500 border-amber-200', 'pinPing' => 'bg-amber-400'
            ]
        ],
        [
            'd' => 3, 'top' => '42%', 'left' => '47%', 'label' => 'D3',
            'name' => '3rd Congressional District', 'lgus' => 'Naga City, Bombon, Calabanga, Camaligan, Canaman, Magarao, Ocampo', 
            'lgu_data' => [
                ['name' => 'Naga City', 'count' => 4], ['name' => 'Bombon', 'count' => 1], ['name' => 'Calabanga', 'count' => 3],
                ['name' => 'Camaligan', 'count' => 1], ['name' => 'Canaman', 'count' => 2], ['name' => 'Magarao', 'count' => 1],
                ['name' => 'Ocampo', 'count' => 2]
            ],
            'centers' => 14, 'capacity' => 5800, 'maxCap' => 7100,
            'c' => [
                'border' => 'border-indigo-400', 'bgAct' => 'bg-indigo-50', 'shadow' => 'shadow-indigo-100',
                'icon' => 'bg-indigo-100 text-indigo-700', 'iconAct' => 'bg-indigo-200',
                'text' => 'text-indigo-700', 'bar' => 'bg-indigo-600',
                'pinActive' => 'bg-indigo-600 ring-4 ring-indigo-300 shadow-indigo-500/50', 'pinInactive' => 'bg-indigo-500 border-indigo-200', 'pinPing' => 'bg-indigo-400'
            ]
        ],
        [
            'd' => 4, 'top' => '32%', 'left' => '76%', 'label' => 'D4',
            'name' => '4th Congressional District (Partido)', 'lgus' => 'Caramoan, Goa, Lagonoy, Presentacion, Sagnay, San Jose, Tigaon, Tinambac, Garchitorena', 
            'lgu_data' => [
                ['name' => 'Caramoan', 'count' => 3], ['name' => 'Goa', 'count' => 2], ['name' => 'Lagonoy', 'count' => 2],
                ['name' => 'Presentacion', 'count' => 1], ['name' => 'Sagnay', 'count' => 2], ['name' => 'San Jose', 'count' => 2],
                ['name' => 'Tigaon', 'count' => 2], ['name' => 'Tinambac', 'count' => 2], ['name' => 'Garchitorena', 'count' => 2]
            ],
            'centers' => 18, 'capacity' => 7100, 'maxCap' => 7100,
            'c' => [
                'border' => 'border-emerald-400', 'bgAct' => 'bg-emerald-50', 'shadow' => 'shadow-emerald-100',
                'icon' => 'bg-emerald-100 text-emerald-700', 'iconAct' => 'bg-emerald-200',
                'text' => 'text-emerald-700', 'bar' => 'bg-emerald-600',
                'pinActive' => 'bg-emerald-600 ring-4 ring-emerald-300 shadow-emerald-500/50', 'pinInactive' => 'bg-emerald-500 border-emerald-200', 'pinPing' => 'bg-emerald-400'
            ]
        ],
        [
            'd' => 5, 'top' => '72%', 'left' => '54%', 'label' => 'D5',
            'name' => '5th Congressional District (Rinconada)', 'lgus' => 'Iriga City, Baao, Balatan, Bato, Buhi, Bula, Nabua', 
            'lgu_data' => [
                ['name' => 'Iriga City', 'count' => 3], ['name' => 'Baao', 'count' => 2], ['name' => 'Balatan', 'count' => 1],
                ['name' => 'Bato', 'count' => 1], ['name' => 'Buhi', 'count' => 2], ['name' => 'Bula', 'count' => 1],
                ['name' => 'Nabua', 'count' => 1]
            ],
            'centers' => 11, 'capacity' => 4900, 'maxCap' => 7100,
            'c' => [
                'border' => 'border-blue-400', 'bgAct' => 'bg-blue-50', 'shadow' => 'shadow-blue-100',
                'icon' => 'bg-blue-100 text-blue-700', 'iconAct' => 'bg-blue-200',
                'text' => 'text-blue-700', 'bar' => 'bg-blue-600',
                'pinActive' => 'bg-blue-600 ring-4 ring-blue-300 shadow-blue-500/50', 'pinInactive' => 'bg-blue-500 border-blue-200', 'pinPing' => 'bg-blue-400'
            ]
        ],
    ];
    @endphp

    {{-- Responsive Layout: Authentic District Map & Synchronized District Cards --}}
    <div class="flex flex-col items-center gap-6 w-full">
        
        {{-- Interactive Map Showcase Container (Stationary & Clean) --}}
        <div class="w-full flex flex-col items-center justify-center p-6 sm:p-8 md:p-10 bg-gradient-to-b from-slate-900 via-slate-950 to-slate-900 rounded-3xl border border-slate-800 text-white relative overflow-hidden shadow-2xl">
            
            {{-- Ambient Glow Sheen --}}
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl pointer-events-none"></div>

            {{-- Map Header Bar & Live Status --}}
            <div class="w-full flex flex-col sm:flex-row justify-between sm:items-center gap-3 mb-6 relative z-10">
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-[11px] font-black uppercase tracking-wider text-indigo-400 block">CamSur Cartographic GIS Map</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500/20 text-indigo-300 border border-indigo-400/30">
                            Interactive Map
                        </span>
                    </div>
                    <span class="text-xs text-slate-300 font-medium">5 Congressional Districts • 2 Cities • 35 Municipalities • 70 Evacuation Shelters</span>
                </div>
                
                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-2 text-xs bg-slate-800/90 text-slate-200 px-4 py-1.5 rounded-full font-bold border border-slate-700 shadow-inner">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span x-text="hoveredDistrict ? 'District ' + hoveredDistrict + ' Selected' : 'Hover over any district marker'"></span>
                    </span>
                </div>
            </div>
            
            {{-- Stationary Map Stage Frame --}}
            <div class="relative w-full max-w-[620px] md:max-w-[700px] aspect-[1223/1000] flex items-center justify-center p-2 select-none">
                
                {{-- Dynamic Ground Shadow --}}
                <div class="absolute inset-x-12 bottom-2 h-10 bg-slate-950/90 blur-2xl rounded-full transform scale-95 pointer-events-none"></div>

                {{-- Authentic Cartographic Base Map (Maap.png) --}}
                <img src="{{ asset('img/about/socio-economic/muns/Maap.png') }}" 
                     alt="Official Camarines Sur Congressional District Cartographic Map" 
                     class="w-full h-full object-contain filter drop-shadow-[0_20px_35px_rgba(0,0,0,0.6)] pointer-events-none select-none">

                {{-- Interactive Precision SVG Layer Overlaid on Maap.png (1223 x 1000) --}}
                <svg viewBox="0 0 1223 1000" class="absolute inset-0 w-full h-full overflow-visible z-20 pointer-events-auto">
                    {{-- DISTRICT 1 HITBOX (Red / Coral) --}}
                    <g @mouseenter="hoveredDistrict = 1" @mouseleave="hoveredDistrict = null" @click="selectedDistrict = 1" class="cursor-pointer">
                        <polygon points="0,280 208,220 420,270 430,350 480,390 480,480 380,470 250,510 210,480 160,420 80,390 35,320" 
                                 fill="transparent" 
                                 class="transition-all duration-300"
                                 :class="hoveredDistrict === 1 ? 'stroke-rose-400/80 stroke-2' : 'stroke-transparent'"/>
                    </g>

                    {{-- DISTRICT 2 HITBOX (Orange) --}}
                    <g @mouseenter="hoveredDistrict = 2" @mouseleave="hoveredDistrict = null" @click="selectedDistrict = 2" class="cursor-pointer">
                        <polygon points="210,480 250,510 380,470 480,480 470,560 575,565 610,650 560,670 560,730 470,710 350,640 260,560" 
                                 fill="transparent" 
                                 class="transition-all duration-300"
                                 :class="hoveredDistrict === 2 ? 'stroke-amber-400/80 stroke-2' : 'stroke-transparent'"/>
                    </g>

                    {{-- DISTRICT 3 HITBOX (Gold / Yellow) --}}
                    <g @mouseenter="hoveredDistrict = 3" @mouseleave="hoveredDistrict = null" @click="selectedDistrict = 3" class="cursor-pointer">
                        <polygon points="480,390 640,430 710,470 770,580 720,630 610,650 575,565 470,560 480,480" 
                                 fill="transparent" 
                                 class="transition-all duration-300"
                                 :class="hoveredDistrict === 3 ? 'stroke-yellow-400/80 stroke-2' : 'stroke-transparent'"/>
                    </g>

                    {{-- DISTRICT 4 HITBOX (Emerald Green - Partido / Caramoan Peninsula) --}}
                    <g @mouseenter="hoveredDistrict = 4" @mouseleave="hoveredDistrict = null" @click="selectedDistrict = 4" class="cursor-pointer">
                        <polygon points="640,430 580,320 630,230 680,180 720,280 850,290 980,340 1220,480 1180,500 1080,500 920,500 850,440 770,580 710,470" 
                                 fill="transparent" 
                                 class="transition-all duration-300"
                                 :class="hoveredDistrict === 4 ? 'stroke-emerald-400/80 stroke-2' : 'stroke-transparent'"/>
                    </g>

                    {{-- DISTRICT 5 HITBOX (Teal / Cyan Blue - Rinconada) --}}
                    <g @mouseenter="hoveredDistrict = 5" @mouseleave="hoveredDistrict = null" @click="selectedDistrict = 5" class="cursor-pointer">
                        <polygon points="560,730 560,670 610,650 720,630 770,580 800,640 885,680 885,745 840,780 730,820 620,865 590,830" 
                                 fill="transparent" 
                                 class="transition-all duration-300"
                                 :class="hoveredDistrict === 5 ? 'stroke-cyan-400/80 stroke-2' : 'stroke-transparent'"/>
                    </g>
                </svg>

                {{-- Interactive Callout Hotspot Pins Aligned to District Coordinates --}}
                @php
                $hotspots = [
                    ['d' => 1, 'top' => '35.4%', 'left' => '19.8%', 'label' => 'D1', 'color' => 'bg-rose-500 ring-rose-300 shadow-rose-500/50'],
                    ['d' => 2, 'top' => '58.3%', 'left' => '34.8%', 'label' => 'D2', 'color' => 'bg-amber-500 ring-amber-300 shadow-amber-500/50'],
                    ['d' => 3, 'top' => '54.4%', 'left' => '50.8%', 'label' => 'D3', 'color' => 'bg-yellow-500 ring-yellow-300 shadow-yellow-500/50'],
                    ['d' => 4, 'top' => '40.2%', 'left' => '69.8%', 'label' => 'D4', 'color' => 'bg-emerald-500 ring-emerald-300 shadow-emerald-500/50'],
                    ['d' => 5, 'top' => '69.6%', 'left' => '56.5%', 'label' => 'D5', 'color' => 'bg-cyan-500 ring-cyan-300 shadow-cyan-500/50'],
                ];
                @endphp

                @foreach($hotspots as $pin)
                <div style="top: {{ $pin['top'] }}; left: {{ $pin['left'] }};" 
                     @mouseenter="hoveredDistrict = {{ $pin['d'] }}"
                     @mouseleave="hoveredDistrict = null"
                     @click="selectedDistrict = {{ $pin['d'] }}"
                     class="absolute z-30 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer transition-all duration-300 group"
                     :class="hoveredDistrict === {{ $pin['d'] }} ? 'scale-125 z-40' : 'hover:scale-110'">
                    
                    {{-- Concentric Radar Pulse when Active --}}
                    <span x-show="hoveredDistrict === {{ $pin['d'] }}" 
                          class="absolute -inset-2.5 rounded-full animate-ping opacity-75 {{ $pin['color'] }}"></span>
                    
                    {{-- Floating Badge Pin --}}
                    <div class="relative w-8 h-8 sm:w-9 sm:h-9 rounded-full flex items-center justify-center font-black text-xs text-white shadow-xl ring-2 ring-white/90 {{ $pin['color'] }} transition-shadow">
                        {{ $pin['label'] }}
                    </div>
                </div>
                @endforeach

                {{-- Interactive Floating HUD Card for Hovered District --}}
                <div x-show="hoveredDistrict !== null" x-transition.opacity.duration.200ms
                     class="absolute bottom-3 left-3 right-3 sm:left-auto sm:right-5 sm:bottom-5 sm:w-80 bg-slate-900/95 backdrop-blur-xl border border-slate-700/90 rounded-2xl p-4 shadow-2xl z-40 pointer-events-none text-left">
                    @foreach($districts as $dist)
                    <div x-show="hoveredDistrict === {{ $dist['d'] }}">
                        <div class="flex items-center justify-between gap-2 mb-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider {{ $dist['c']['text'] }}">District {{ $dist['d'] }} Information</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-slate-800 text-slate-300 font-bold border border-slate-700">{{ $dist['centers'] }} Centers</span>
                        </div>
                        <h4 class="text-sm font-black text-white leading-tight mb-1">{{ $dist['name'] }}</h4>
                        <p class="text-[11px] text-slate-300 line-clamp-1 mb-2.5 font-medium">{{ $dist['lgus'] }}</p>
                        
                        <div class="flex items-center justify-between pt-2 border-t border-slate-800 text-[10px]">
                            <span class="text-slate-400">Total Family Capacity: <strong class="text-emerald-400 font-bold">{{ number_format($dist['capacity']) }}</strong></span>
                            <span class="text-indigo-400 font-bold">Click to inspect &rarr;</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Row of Interactive Synchronized District Selector Cards --}}
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3.5">
            @foreach($districts as $dist)
            <button type="button"
                    @click="selectedDistrict = {{ $dist['d'] }}" 
                    @mouseenter="hoveredDistrict = {{ $dist['d'] }}" 
                    @mouseleave="hoveredDistrict = null"
                    class="group flex items-center gap-3.5 p-4 rounded-2xl border transition-all duration-300 text-left bg-white cursor-pointer shadow-xs hover:shadow-lg hover:-translate-y-1 relative overflow-hidden"
                    :class="hoveredDistrict === {{ $dist['d'] }} ? '{{ $dist['c']['border'] }} {{ $dist['c']['bgAct'] }} ring-2 ring-offset-2 {{ $dist['c']['shadow'] }} -translate-y-1' : 'border-slate-200 hover:border-slate-300'">
                <div class="w-11 h-11 rounded-xl {{ $dist['c']['icon'] }} group-hover:scale-110 transition-transform duration-300 flex items-center justify-center shrink-0 font-black text-sm shadow-xs">
                    D{{ $dist['d'] }}
                </div>
                <div class="min-w-0 flex-1">
                    <div class="text-xs font-black text-slate-900 truncate group-hover:text-indigo-600 transition-colors">District {{ $dist['d'] }}</div>
                    <div class="text-[11px] font-bold {{ $dist['c']['text'] }} mt-0.5">{{ $dist['centers'] }} Centers • {{ number_format($dist['capacity']) }} Fam.</div>
                    <div class="text-[10px] text-slate-400 font-medium truncate mt-0.5">Click for LGUs &rarr;</div>
                </div>
            </button>
            @endforeach
        </div>
    </div>

    {{-- District Details Modal --}}
    <template x-teleport="body">
        <div x-show="selectedDistrict !== null" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm" x-transition.opacity style="display: none;">
            <div @click.outside="selectedDistrict = null" class="bg-white rounded-3xl p-6 md:p-8 w-full max-w-lg shadow-2xl border border-slate-200 relative max-h-[90vh] overflow-y-auto" x-transition.scale>
                @foreach($districts as $dist)
                @php $pct = round(($dist['capacity'] / $dist['maxCap']) * 100); @endphp
                <div x-show="selectedDistrict === {{ $dist['d'] }}">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl {{ $dist['c']['icon'] }} flex items-center justify-center shrink-0 shadow-xs font-black text-xl">
                            D{{ $dist['d'] }}
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-slate-900 leading-tight">{{ $dist['name'] }}</h3>
                            <p class="text-xs text-slate-500 mt-0.5 font-medium">{{ $dist['lgus'] }}</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-center">
                            <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block">Total Centers</span>
                            <div class="text-2xl sm:text-3xl font-black {{ $dist['c']['text'] }} mt-1">{{ $dist['centers'] }}</div>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-center">
                            <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block">Total Capacity</span>
                            <div class="text-2xl sm:text-3xl font-black {{ $dist['c']['text'] }} mt-1 leading-none">{{ number_format($dist['capacity']) }} <span class="text-xs font-semibold text-slate-500">Fam.</span></div>
                        </div>
                    </div>
                    
                    <div class="p-4 sm:p-5 border border-slate-100 rounded-2xl bg-white space-y-2.5">
                        <div class="flex justify-between items-end">
                            <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block">Capacity Visualized</span>
                            <span class="text-xs font-black text-slate-900">{{ $pct }}% of Provincial Peak</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-3 overflow-hidden shadow-inner">
                            <div class="h-full rounded-full {{ $dist['c']['bar'] }} transition-all duration-1000 ease-out" style="width: {{ $pct }}%"></div>
                        </div>
                    </div>

                    {{-- LGU Centers Distribution Graph --}}
                    <div class="mt-4 p-4 sm:p-5 border border-slate-100 rounded-2xl bg-slate-50/80">
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block mb-3">Evacuation Facilities per LGU</span>
                        <div class="space-y-2.5 max-h-48 overflow-y-auto pr-2">
                            @php $maxLguCount = max(array_column($dist['lgu_data'], 'count')); @endphp
                            @foreach($dist['lgu_data'] as $lgu)
                            @php $lguPct = round(($lgu['count'] / $maxLguCount) * 100); @endphp
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="font-bold text-slate-800">{{ $lgu['name'] }}</span>
                                    <span class="font-black {{ $dist['c']['text'] }}">{{ $lgu['count'] }} center{{ $lgu['count'] > 1 ? 's' : '' }}</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-1.5 overflow-hidden">
                                    <div class="h-full rounded-full {{ $dist['c']['bar'] }} transition-all duration-1000" style="width: {{ $lguPct }}%"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Footer with Single Close Button --}}
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between gap-3">
                        <span class="text-[11px] text-slate-400 font-medium">District {{ $dist['d'] }} DRRM Network</span>
                        <button type="button" @click="selectedDistrict = null"
                                class="px-6 py-2.5 rounded-2xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs transition cursor-pointer shrink-0 shadow-xs">
                            Close Window
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </template>
</section>
