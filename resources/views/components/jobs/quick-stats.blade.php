@props([
    'type' => 'government', // Options: government, local, overseas, spes
    'totalActive' => 0,
])

@php
    $configs = [
        'government' => [
            'card_bg' => 'bg-emerald-950/5 hover:bg-white',
            'border' => 'border-emerald-200/80 hover:border-emerald-500',
            'hover_shadow' => 'hover:shadow-emerald-500/10 hover:shadow-xl',
            'badge' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
            'num_color' => 'text-emerald-700',
            'bar_color' => 'bg-emerald-600',
            'sub_text' => 'text-emerald-800/80',
            'cards' => [
                [
                    'sub' => 'Available Openings',
                    'title' => 'Total Active Jobs',
                    'icon' => '🏛️',
                    'val' => $totalActive > 0 ? $totalActive : '24+',
                    'desc' => 'Provincial Capitol & LGUs',
                    'items' => [
                        ['label' => 'Permanent (Plantilla)', 'pct' => 45],
                        ['label' => 'Job Order / COS', 'pct' => 55],
                    ]
                ],
                [
                    'sub' => 'Security of Tenure',
                    'title' => 'Permanent (Plantilla)',
                    'icon' => '📜',
                    'val' => 'Plantilla',
                    'desc' => 'With GSIS, PhilHealth & Leave Credits',
                    'items' => [
                        ['label' => 'Eligibility Requirement Rate', 'pct' => 100],
                    ]
                ],
                [
                    'sub' => 'Contractual Basis',
                    'title' => 'Job Order / COS',
                    'icon' => '📋',
                    'val' => 'JO / COS',
                    'desc' => 'Project-Based & Seasonal Deployment',
                    'items' => [
                        ['label' => 'Provincial Priority Projects', 'pct' => 70],
                        ['label' => 'Field Assistance Support', 'pct' => 30],
                    ]
                ],
                [
                    'sub' => 'Civil Service Standards',
                    'title' => 'CSC Eligibility Req.',
                    'icon' => '🏅',
                    'val' => 'CSC Req.',
                    'desc' => 'Professional & Sub-Professional',
                    'items' => [
                        ['label' => 'CSC Eligibility Required', 'pct' => 60],
                        ['label' => 'Open Entry / Non-Eligible JO', 'pct' => 40],
                    ]
                ],
            ]
        ],
        'local' => [
            'card_bg' => 'bg-blue-950/5 hover:bg-white',
            'border' => 'border-blue-200/80 hover:border-blue-500',
            'hover_shadow' => 'hover:shadow-blue-500/10 hover:shadow-xl',
            'badge' => 'bg-blue-100 text-blue-800 border-blue-300',
            'num_color' => 'text-blue-700',
            'bar_color' => 'bg-blue-600',
            'sub_text' => 'text-blue-800/80',
            'cards' => [
                [
                    'sub' => 'Private & Industrial',
                    'title' => 'Local Job Openings',
                    'icon' => '🏢',
                    'val' => $totalActive > 0 ? $totalActive : '180+',
                    'desc' => 'Across Camarines Sur',
                    'items' => [
                        ['label' => 'Retail & Services', 'pct' => 45],
                        ['label' => 'Manufacturing & BPO', 'pct' => 55],
                    ]
                ],
                [
                    'sub' => 'PESO Accredited Firms',
                    'title' => 'Verified Employers',
                    'icon' => '✅',
                    'val' => '100% Legit',
                    'desc' => 'BIR & LGU Cleared Businesses',
                    'items' => [
                        ['label' => 'PESO Vetting Verification Rate', 'pct' => 100],
                    ]
                ],
                [
                    'sub' => 'Full-time & Part-time',
                    'title' => 'Job Types Available',
                    'icon' => '⏱️',
                    'val' => 'Flexible',
                    'desc' => 'Day & Night Shifts',
                    'items' => [
                        ['label' => 'Full-Time Positions', 'pct' => 80],
                        ['label' => 'Part-Time / Seasonal', 'pct' => 20],
                    ]
                ],
                [
                    'sub' => 'Assistance Guarantee',
                    'title' => 'PESO Placement Rate',
                    'icon' => '🎯',
                    'val' => '92%',
                    'desc' => 'Endorsed Candidates Hired',
                    'items' => [
                        ['label' => 'PESO Endorsement Efficiency', 'pct' => 92],
                    ]
                ],
            ]
        ],
        'overseas' => [
            'card_bg' => 'bg-sky-950/5 hover:bg-white',
            'border' => 'border-sky-200/80 hover:border-sky-500',
            'hover_shadow' => 'hover:shadow-sky-500/10 hover:shadow-xl',
            'badge' => 'bg-sky-100 text-sky-800 border-sky-300',
            'num_color' => 'text-sky-700',
            'bar_color' => 'bg-sky-600',
            'sub_text' => 'text-sky-800/80',
            'cards' => [
                [
                    'sub' => 'Global Opportunities',
                    'title' => 'Overseas Openings',
                    'icon' => '🌏',
                    'val' => $totalActive > 0 ? $totalActive : '350+',
                    'desc' => 'DMW Approved Job Orders',
                    'items' => [
                        ['label' => 'Healthcare & Nursing', 'pct' => 40],
                        ['label' => 'Skilled, Trades & Engineering', 'pct' => 60],
                    ]
                ],
                [
                    'sub' => 'Global Partner Nations',
                    'title' => 'Top Destinations',
                    'icon' => '✈️',
                    'val' => '12+ Countries',
                    'desc' => 'Middle East, Asia & Europe',
                    'items' => [
                        ['label' => 'Middle East & Asia-Pacific', 'pct' => 70],
                        ['label' => 'Canada & European Union', 'pct' => 30],
                    ]
                ],
                [
                    'sub' => 'POEA Validated Agencies',
                    'title' => 'DMW Accredited',
                    'icon' => '🛡️',
                    'val' => '100% Safe',
                    'desc' => 'Zero Illegal Recruiters Guarantee',
                    'items' => [
                        ['label' => 'DMW License Compliance Rate', 'pct' => 100],
                    ]
                ],
                [
                    'sub' => 'RA 10022 Compliance',
                    'title' => 'Fee Protection',
                    'icon' => '🔒',
                    'val' => 'No Fee Policy',
                    'desc' => 'Protected Domestic & Skilled Overseas Workers',
                    'items' => [
                        ['label' => 'Placement Fee Exemption Coverage', 'pct' => 100],
                    ]
                ],
            ]
        ],
        'spes' => [
            'card_bg' => 'bg-purple-950/5 hover:bg-white',
            'border' => 'border-purple-200/80 hover:border-purple-500',
            'hover_shadow' => 'hover:shadow-purple-500/10 hover:shadow-xl',
            'badge' => 'bg-purple-100 text-purple-800 border-purple-300',
            'num_color' => 'text-purple-700',
            'bar_color' => 'bg-purple-600',
            'sub_text' => 'text-purple-800/80',
            'cards' => [
                [
                    'sub' => 'Student Work Program',
                    'title' => 'Active SPES Slots',
                    'icon' => '🎓',
                    'val' => $totalActive > 0 ? $totalActive : '120+',
                    'desc' => 'Summer & Vacation Grants',
                    'items' => [
                        ['label' => 'College / Tertiary Level', 'pct' => 60],
                        ['label' => 'Senior High & OSY Youth', 'pct' => 40],
                    ]
                ],
                [
                    'sub' => 'Public Service Work',
                    'title' => 'Assigned Offices',
                    'icon' => '🏛️',
                    'val' => 'Capitol & LGUs',
                    'desc' => '36 Provincial Departments',
                    'items' => [
                        ['label' => 'Capitol Departments', 'pct' => 65],
                        ['label' => 'Municipal PESO Desks', 'pct' => 35],
                    ]
                ],
                [
                    'sub' => 'Income Qualified Students',
                    'title' => 'Target Beneficiaries',
                    'icon' => '👥',
                    'val' => '15 - 30 Y/O',
                    'desc' => 'High School & College Youth',
                    'items' => [
                        ['label' => 'NEDA Poverty Threshold Qualified', 'pct' => 100],
                    ]
                ],
                [
                    'sub' => 'DOLE & LGU Co-Funded',
                    'title' => 'Salary Sharing Scheme',
                    'icon' => '💵',
                    'val' => '60% / 40%',
                    'desc' => '60% LGU + 40% DOLE Voucher',
                    'items' => [
                        ['label' => 'LGU Provincial Share', 'pct' => 60],
                        ['label' => 'DOLE Government Share', 'pct' => 40],
                    ]
                ],
            ]
        ]
    ];

    $cur = $configs[$type] ?? $configs['government'];
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
    @foreach($cur['cards'] as $card)
        <div class="relative w-full p-5 rounded-2xl border transition-all duration-300 {{ $cur['card_bg'] }} {{ $cur['border'] }} {{ $cur['hover_shadow'] }} hover:-translate-y-1 flex flex-col justify-between gap-4">
            
            {{-- Header Portion --}}
            <div class="flex items-start justify-between gap-2">
                <div class="space-y-0.5">
                    <span class="text-[10px] font-extrabold uppercase tracking-wider block {{ $cur['sub_text'] }}">
                        {{ $card['sub'] }}
                    </span>
                    <h3 class="text-xs font-black text-slate-900 leading-snug">
                        {{ $card['title'] }}
                    </h3>
                </div>
                <span class="text-xs p-1.5 rounded-xl border shrink-0 {{ $cur['badge'] }}">
                    {{ $card['icon'] }}
                </span>
            </div>

            {{-- Main Value Display --}}
            <div>
                <div class="text-2xl sm:text-3xl font-black tracking-tight {{ $cur['num_color'] }}">
                    {{ $card['val'] }}
                </div>
                <p class="text-[11px] font-medium text-slate-600 mt-0.5">
                    {{ $card['desc'] }}
                </p>
            </div>

            {{-- Breakdown / Progress Bar Section (Naka-display na agad!) --}}
            <div class="pt-3 border-t border-slate-200/60 space-y-2">
                @foreach($card['items'] as $item)
                    <div class="space-y-1">
                        <div class="flex justify-between text-[10px] font-bold text-slate-700">
                            <span class="truncate pr-2">{{ $item['label'] }}</span>
                            <span class="{{ $cur['num_color'] }} shrink-0">{{ $item['pct'] }}%</span>
                        </div>
                        <div class="w-full bg-slate-200/80 h-1.5 rounded-full overflow-hidden">
                            <div class="{{ $cur['bar_color'] }} h-1.5 rounded-full transition-all duration-500" style="width: {{ $item['pct'] }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    @endforeach
</div>