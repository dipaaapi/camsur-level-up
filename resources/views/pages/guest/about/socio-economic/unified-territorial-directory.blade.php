{{-- ⭐ UNIFIED MASTER PANEL: PROVINCIAL TERRITORIAL & DISTRICT EVACUATION DIRECTORY --}}
<section class="space-y-8 bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200"
         x-data="{ 
            expandedLgu: null
         }">
    
    {{-- Section Header & 2x2 Balanced Scoreboard --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 border-b border-slate-100 pb-6">
        {{-- Title & Subtitle (Full width balance, no cramping) --}}
        <div class="flex items-start gap-4 flex-1">
            <div class="p-3.5 bg-gradient-to-br from-blue-600 to-indigo-700 text-white rounded-2xl shrink-0 shadow-md shadow-blue-500/20 mt-1">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div class="space-y-1">
                <div class="flex flex-wrap items-center gap-2">
                    <h2 class="text-2xl font-bold text-slate-900 leading-tight">Territorial Directory & Evacuation Centers</h2>
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-black bg-blue-100 text-blue-800 border border-blue-200 text-center justify-center leading-tight">
                        Unified Master Hub
                    </span>
                </div>
                <p class="text-xs sm:text-sm text-slate-500 max-w-xl leading-relaxed">
                    Interactive cartographic map across 5 Congressional Districts and 37 Local Government Units. Click any district on the map to explore its constituent cities, municipalities, and evacuation facilities.
                </p>
            </div>
        </div>

        {{-- 2x2 Balanced Key Metrics Grid --}}
        <div class="grid grid-cols-2 gap-2.5 sm:w-80 shrink-0">
            <div class="p-3 bg-slate-50 border border-slate-200 rounded-2xl text-center">
                <span class="text-[9px] font-black uppercase tracking-wider text-slate-500 block">Districts</span>
                <span class="text-xs sm:text-sm font-black text-slate-900 mt-0.5 block">5 Congressional</span>
            </div>
            <div class="p-3 bg-blue-50 border border-blue-100 rounded-2xl text-center">
                <span class="text-[9px] font-black uppercase tracking-wider text-blue-700 block">Total LGUs</span>
                <span class="text-xs sm:text-sm font-black text-blue-950 mt-0.5 block">37 Units (2 Cities)</span>
            </div>
            <div class="p-3 bg-indigo-50 border border-indigo-100 rounded-2xl text-center">
                <span class="text-[9px] font-black uppercase tracking-wider text-indigo-700 block">Evac Centers</span>
                <span class="text-xs sm:text-sm font-black text-indigo-950 mt-0.5 block">70 Shelters</span>
            </div>
            <div class="p-3 bg-emerald-50 border border-emerald-100 rounded-2xl text-center">
                <span class="text-[9px] font-black uppercase tracking-wider text-emerald-700 block">Total Capacity</span>
                <span class="text-xs sm:text-sm font-black text-emerald-950 mt-0.5 block">28.5k Families</span>
            </div>
        </div>
    </div>

    @php
    $districtsData = [
        [
            'd' => 1,
            'name' => '1st Congressional District',
            'desc' => 'Northwestern coastal gateway and agricultural basin bordering Quezon Province and Ragay Gulf.',
            'lgus_summary' => 'Libmanan, Sipocot, Cabusao, Del Gallego, Lupi, Ragay',
            'centers' => 12, 'capacity' => 4500, 'maxCap' => 7100,
            'color' => 'rose',
            'theme' => [
                'badge' => 'bg-rose-100 text-rose-800 border-rose-200',
                'border' => 'border-rose-200 hover:border-rose-400',
                'bgCard' => 'from-white to-rose-50/50',
                'text' => 'text-rose-700',
                'bar' => 'bg-rose-600',
                'icon' => 'bg-rose-100 text-rose-700',
                'pin' => 'bg-rose-600 ring-4 ring-rose-300 shadow-rose-500/50',
            ],
            'municipalities' => [
                [
                    'id' => 'cabusao', 'name' => 'Cabusao', 'class' => '5th Class Municipality',
                    'area' => '46.80 km²', 'pop' => '19,200', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/cabusao.png',
                    'map_url' => 'https://maps.google.com/maps?q=Cabusao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Coastal municipality on San Miguel Bay, center for municipal fisheries and mangrove bio-buffers.'
                ],
                [
                    'id' => 'delgallego', 'name' => 'Del Gallego', 'class' => '4th Class Municipality',
                    'area' => '208.84 km²', 'pop' => '26,700', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/delgallego.png',
                    'map_url' => 'https://maps.google.com/maps?q=Del+Gallego+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Northernmost boundary town connecting Camarines Sur to Quezon Province and South Luzon highway.'
                ],
                [
                    'id' => 'libmanan', 'name' => 'Libmanan', 'class' => '1st Class Municipality (Largest Area)',
                    'area' => '342.82 km²', 'pop' => '116,100', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/libmanan.png',
                    'map_url' => 'https://maps.google.com/maps?q=Libmanan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Largest municipality by land area, primary rice granary with extensive NIA irrigation networks.'
                ],
                [
                    'id' => 'lupi', 'name' => 'Lupi', 'class' => '3rd Class Municipality',
                    'area' => '199.12 km²', 'pop' => '34,500', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/lupi.png',
                    'map_url' => 'https://maps.google.com/maps?q=Lupi+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Forestry and upland agricultural community with watershed protection zones.'
                ],
                [
                    'id' => 'ragay', 'name' => 'Ragay', 'class' => '1st Class Municipality',
                    'area' => '400.22 km²', 'pop' => '61,800', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/ragay.png',
                    'map_url' => 'https://maps.google.com/maps?q=Ragay+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Major marine fisheries and commercial port area along Ragay Gulf.'
                ],
                [
                    'id' => 'sipocot', 'name' => 'Sipocot', 'class' => '1st Class Municipality',
                    'area' => '243.43 km²', 'pop' => '70,200', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/sipocot.png',
                    'map_url' => 'https://maps.google.com/maps?q=Sipocot+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Commercial crossroads connecting northern Camarines Sur, Quirino Highway, and Bicol mainland.'
                ],
            ]
        ],
        [
            'd' => 2,
            'name' => '2nd Congressional District',
            'desc' => 'Seat of the Provincial Government at Pili Capital, Mount Isarog foothills, and industrial agro-processing.',
            'lgus_summary' => 'Pili (Capital), Gainza, Milaor, Minalabac, Pamplona, Pasacao, San Fernando',
            'centers' => 15, 'capacity' => 6200, 'maxCap' => 7100,
            'color' => 'amber',
            'theme' => [
                'badge' => 'bg-amber-100 text-amber-800 border-amber-200',
                'border' => 'border-amber-200 hover:border-amber-400',
                'bgCard' => 'from-white to-amber-50/50',
                'text' => 'text-amber-800',
                'bar' => 'bg-amber-600',
                'icon' => 'bg-amber-100 text-amber-800',
                'pin' => 'bg-amber-600 ring-4 ring-amber-300 shadow-amber-500/50',
            ],
            'municipalities' => [
                [
                    'id' => 'pili', 'name' => 'Pili (Provincial Capital)', 'class' => '1st Class Municipality',
                    'area' => '290.25 km²', 'pop' => '102,100', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/pili.png',
                    'map_url' => 'https://maps.google.com/maps?q=Pili+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Provincial Capitol complex, Camarines Sur Watersports Complex (CWC), and airport hub.'
                ],
                [
                    'id' => 'gainza', 'name' => 'Gainza', 'class' => '5th Class Municipality',
                    'area' => '14.75 km²', 'pop' => '11,800', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/gainza.png',
                    'map_url' => 'https://maps.google.com/maps?q=Gainza+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Agricultural and inland riverway community bordered by Bicol River.'
                ],
                [
                    'id' => 'milaor', 'name' => 'Milaor', 'class' => '3rd Class Municipality',
                    'area' => '33.64 km²', 'pop' => '34,900', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/milaor.png',
                    'map_url' => 'https://maps.google.com/maps?q=Milaor+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Historic municipality adjacent to Naga City with thriving local trade.'
                ],
                [
                    'id' => 'minalabac', 'name' => 'Minalabac', 'class' => '2nd Class Municipality',
                    'area' => '126.10 km²', 'pop' => '56,200', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/minalabac.png',
                    'map_url' => 'https://maps.google.com/maps?q=Minalabac+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Agricultural lowlands and coastal beach ridges along Ragay Gulf.'
                ],
                [
                    'id' => 'pamplona', 'name' => 'Pamplona', 'class' => '3rd Class Municipality',
                    'area' => '80.60 km²', 'pop' => '37,900', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/pamplona.png',
                    'map_url' => 'https://maps.google.com/maps?q=Pamplona+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Key agricultural link between central plains and Pasacao seaport corridor.'
                ],
                [
                    'id' => 'pasacao', 'name' => 'Pasacao', 'class' => '3rd Class Municipality',
                    'area' => '149.54 km²', 'pop' => '51,400', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/pasacao.png',
                    'map_url' => 'https://maps.google.com/maps?q=Pasacao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'The Port of Pasacao serves as the prime maritime trade and fuel terminal for Region V.'
                ],
                [
                    'id' => 'sanfernando', 'name' => 'San Fernando', 'class' => '2nd Class Municipality',
                    'area' => '117.63 km²', 'pop' => '38,600', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/sanfernando.png',
                    'map_url' => 'https://maps.google.com/maps?q=San+Fernando+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Productive agricultural center with active rice and coconut agro-processing.'
                ],
            ]
        ],
        [
            'd' => 3,
            'name' => '3rd Congressional District',
            'desc' => 'Metro Naga urban commercial center, premier academic universities, and central riverway municipalities.',
            'lgus_summary' => 'Naga City, Bombon, Calabanga, Camaligan, Canaman, Magarao, Ocampo',
            'centers' => 14, 'capacity' => 5800, 'maxCap' => 7100,
            'color' => 'indigo',
            'theme' => [
                'badge' => 'bg-indigo-100 text-indigo-800 border-indigo-200',
                'border' => 'border-indigo-200 hover:border-indigo-400',
                'bgCard' => 'from-white to-indigo-50/50',
                'text' => 'text-indigo-700',
                'bar' => 'bg-indigo-600',
                'icon' => 'bg-indigo-100 text-indigo-700',
                'pin' => 'bg-indigo-600 ring-4 ring-indigo-300 shadow-indigo-500/50',
            ],
            'municipalities' => [
                [
                    'id' => 'naga', 'name' => 'Naga City', 'class' => 'Independent Component City',
                    'area' => '84.48 km²', 'pop' => '215,400', 'centers' => 4,
                    'seal' => '/img/about/socio-economic/muns/naga.png',
                    'map_url' => 'https://maps.google.com/maps?q=Naga+City+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Regional center of commerce, finance, culture, education, and health services in Bicol.'
                ],
                [
                    'id' => 'bombon', 'name' => 'Bombon', 'class' => '4th Class Municipality',
                    'area' => '28.73 km²', 'pop' => '17,800', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/bombon.png',
                    'map_url' => 'https://maps.google.com/maps?q=Bombon+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Home to the famous Leaning Bell Tower of Bombon and lush rice paddies.'
                ],
                [
                    'id' => 'calabanga', 'name' => 'Calabanga', 'class' => '1st Class Municipality',
                    'area' => '163.80 km²', 'pop' => '91,400', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/calabanga.png',
                    'map_url' => 'https://maps.google.com/maps?q=Calabanga+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Major fishing port along San Miguel Bay with extensive aquaculture.'
                ],
                [
                    'id' => 'camaligan', 'name' => 'Camaligan', 'class' => '5th Class Municipality (Smallest Area)',
                    'area' => '4.68 km²', 'pop' => '25,100', 'centers' => 1,
                    'seal' => '/img/about/socio-economic/muns/camaligan.png',
                    'map_url' => 'https://maps.google.com/maps?q=Camaligan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Riverfront town known for the Camaligan River Park and high population density.'
                ],
                [
                    'id' => 'canaman', 'name' => 'Canaman', 'class' => '3rd Class Municipality',
                    'area' => '43.27 km²', 'pop' => '37,200', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/canaman.png',
                    'map_url' => 'https://maps.google.com/maps?q=Canaman+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Cradle of Bikol culture and literature with rich wetland agricultural fields.'
                ],
                [
                    'id' => 'magarao', 'name' => 'Magarao', 'class' => '4th Class Municipality',
                    'area' => '44.97 km²', 'pop' => '27,300', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/magarao.png',
                    'map_url' => 'https://maps.google.com/maps?q=Magarao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Thriving suburban agricultural town known for handicrafts and rice farming.'
                ],
                [
                    'id' => 'ocampo', 'name' => 'Ocampo', 'class' => '3rd Class Municipality',
                    'area' => '118.33 km²', 'pop' => '52,800', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/ocampo.png',
                    'map_url' => 'https://maps.google.com/maps?q=Ocampo+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Foothill municipality of Mount Isarog with high ecotourism and highland crops.'
                ],
            ]
        ],
        [
            'd' => 4,
            'name' => '4th Congressional District (Partido)',
            'desc' => 'Pacific coastline, world-famous Caramoan island tourism, marine fisheries, and coastal greenbelts.',
            'lgus_summary' => 'Caramoan, Goa, Lagonoy, Presentacion, Sagnay, San Jose, Siruma, Tigaon, Tinambac, Garchitorena',
            'centers' => 18, 'capacity' => 7100, 'maxCap' => 7100,
            'color' => 'emerald',
            'theme' => [
                'badge' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
                'border' => 'border-emerald-200 hover:border-emerald-400',
                'bgCard' => 'from-white to-emerald-50/50',
                'text' => 'text-emerald-700',
                'bar' => 'bg-emerald-600',
                'icon' => 'bg-emerald-100 text-emerald-700',
                'pin' => 'bg-emerald-600 ring-4 ring-emerald-300 shadow-emerald-500/50',
            ],
            'municipalities' => [
                [
                    'id' => 'caramoan', 'name' => 'Caramoan', 'class' => '2nd Class Municipality',
                    'area' => '277.41 km²', 'pop' => '53,200', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/caramoan.png',
                    'map_url' => 'https://maps.google.com/maps?q=Caramoan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Internationally celebrated ecotourism haven with limestone karsts and marine reserves.'
                ],
                [
                    'id' => 'garchitorena', 'name' => 'Garchitorena', 'class' => '4th Class Municipality',
                    'area' => '243.80 km²', 'pop' => '29,400', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/garchitorena.png',
                    'map_url' => 'https://maps.google.com/maps?q=Garchitorena+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Remote northeastern Pacific coast town with rich marine biodiversity.'
                ],
                [
                    'id' => 'goa', 'name' => 'Goa', 'class' => '1st Class Municipality',
                    'area' => '206.18 km²', 'pop' => '73,600', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/goa.png',
                    'map_url' => 'https://maps.google.com/maps?q=Goa+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Educational and commercial capital of the Partido district; home to Partido State University.'
                ],
                [
                    'id' => 'lagonoy', 'name' => 'Lagonoy', 'class' => '2nd Class Municipality',
                    'area' => '377.90 km²', 'pop' => '58,400', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/lagonoy.png',
                    'map_url' => 'https://maps.google.com/maps?q=Lagonoy+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Known as the Tiger Grass & Broom Capital with vast watershed uplands.'
                ],
                [
                    'id' => 'presentacion', 'name' => 'Presentacion', 'class' => '4th Class Municipality',
                    'area' => '143.80 km²', 'pop' => '22,600', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/presentacion.png',
                    'map_url' => 'https://maps.google.com/maps?q=Presentacion+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Pacific coastline with protected marine sanctuaries and mineral deposits.'
                ],
                [
                    'id' => 'sagnay', 'name' => 'Sagnay', 'class' => '4th Class Municipality',
                    'area' => '154.19 km²', 'pop' => '36,400', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/sagnay.png',
                    'map_url' => 'https://maps.google.com/maps?q=Sagnay+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Gateway to Atalayan Island with scenic coastal beaches along Lagonoy Gulf.'
                ],
                [
                    'id' => 'sanjose', 'name' => 'San Jose', 'class' => '4th Class Municipality',
                    'area' => '43.07 km²', 'pop' => '42,100', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/sanjose.png',
                    'map_url' => 'https://maps.google.com/maps?q=San+Jose+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Coastal center for municipal fishing and agricultural commerce.'
                ],
                [
                    'id' => 'siruma', 'name' => 'Siruma', 'class' => '4th Class Municipality',
                    'area' => '141.27 km²', 'pop' => '19,800', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/siruma.png',
                    'map_url' => 'https://maps.google.com/maps?q=Siruma+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Pristine white sand beaches and extensive coastal marine fishing grounds.'
                ],
                [
                    'id' => 'tigaon', 'name' => 'Tigaon', 'class' => '1st Class Municipality',
                    'area' => '72.35 km²', 'pop' => '60,500', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/tigaon.png',
                    'map_url' => 'https://maps.google.com/maps?q=Tigaon+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Historic municipality, major producer of abaca and cacao.'
                ],
                [
                    'id' => 'tinambac', 'name' => 'Tinambac', 'class' => '1st Class Municipality',
                    'area' => '351.62 km²', 'pop' => '73,900', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/tinambac.png',
                    'map_url' => 'https://maps.google.com/maps?q=Tinambac+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Vast municipal territory fronting San Miguel Bay with active fisheries and agriculture.'
                ],
            ]
        ],
        [
            'd' => 5,
            'name' => '5th Congressional District (Rinconada)',
            'desc' => 'Rinconada lakes district, Mount Iriga, Lake Buhi (home of Sinarapan), and component city commerce.',
            'lgus_summary' => 'Iriga City, Baao, Balatan, Bato, Buhi, Bula, Nabua',
            'centers' => 11, 'capacity' => 4900, 'maxCap' => 7100,
            'color' => 'blue',
            'theme' => [
                'badge' => 'bg-blue-100 text-blue-800 border-blue-200',
                'border' => 'border-blue-200 hover:border-blue-400',
                'bgCard' => 'from-white to-blue-50/50',
                'text' => 'text-blue-700',
                'bar' => 'bg-blue-600',
                'icon' => 'bg-blue-100 text-blue-700',
                'pin' => 'bg-blue-600 ring-4 ring-blue-300 shadow-blue-500/50',
            ],
            'municipalities' => [
                [
                    'id' => 'iriga', 'name' => 'Iriga City', 'class' => 'Component City',
                    'area' => '137.35 km²', 'pop' => '118,200', 'centers' => 3,
                    'seal' => '/img/about/socio-economic/muns/iriga.png',
                    'map_url' => 'https://maps.google.com/maps?q=Iriga+City+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'City of Crystal Springs at the base of Mount Iriga (Asog); trade hub of Rinconada.'
                ],
                [
                    'id' => 'baao', 'name' => 'Baao', 'class' => '1st Class Municipality',
                    'area' => '106.50 km²', 'pop' => '61,300', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/baao.png',
                    'map_url' => 'https://maps.google.com/maps?q=Baao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Rich cultural heritage, Lake Baao wetland ecosystems, and fertile rice fields.'
                ],
                [
                    'id' => 'balatan', 'name' => 'Balatan', 'class' => '4th Class Municipality',
                    'area' => '93.09 km²', 'pop' => '31,800', 'centers' => 1,
                    'seal' => '/img/about/socio-economic/muns/balatan.png',
                    'map_url' => 'https://maps.google.com/maps?q=Balatan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Coastal town on Ragay Gulf known for the scenic Animasola Island.'
                ],
                [
                    'id' => 'bato', 'name' => 'Bato', 'class' => '3rd Class Municipality',
                    'area' => '107.12 km²', 'pop' => '53,900', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/bato.png',
                    'map_url' => 'https://maps.google.com/maps?q=Bato+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Surrounding Lake Bato, major freshwater fish sanctuary and flood buffer zone.'
                ],
                [
                    'id' => 'buhi', 'name' => 'Buhi', 'class' => '1st Class Municipality',
                    'area' => '246.65 km²', 'pop' => '84,500', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/buhi.png',
                    'map_url' => 'https://maps.google.com/maps?q=Buhi+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Home of Lake Buhi and the world\'s smallest commercial fish, the Sinarapan (Mistichthys luzonensis).'
                ],
                [
                    'id' => 'bula', 'name' => 'Bula', 'class' => '1st Class Municipality',
                    'area' => '167.64 km²', 'pop' => '72,100', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/bula.png',
                    'map_url' => 'https://maps.google.com/maps?q=Bula+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'One of the oldest settlements in Camarines Sur (founded 1578) with vast rice farms.'
                ],
                [
                    'id' => 'nabua', 'name' => 'Nabua', 'class' => '1st Class Municipality',
                    'area' => '88.54 km²', 'pop' => '86,800', 'centers' => 2,
                    'seal' => '/img/about/socio-economic/muns/nabua.png',
                    'map_url' => 'https://maps.google.com/maps?q=Nabua+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed',
                    'notes' => 'Educational and commercial center of Rinconada; home to CSPC main campus.'
                ],
            ]
        ],
    ];

    // Precise Geographical Centers for the Pulsating Pins on each District field
    $pinCoordinates = [
        1 => ['top' => '36.5%', 'left' => '23.5%', 'bg' => 'bg-rose-600', 'pulse' => 'bg-rose-400', 'ring' => 'bg-rose-500/50', 'text' => 'text-white'],
        2 => ['top' => '55.0%', 'left' => '35.5%', 'bg' => 'bg-amber-600', 'pulse' => 'bg-amber-400', 'ring' => 'bg-amber-500/50', 'text' => 'text-white'],
        3 => ['top' => '53.0%', 'left' => '50.0%', 'bg' => 'bg-amber-400', 'pulse' => 'bg-amber-300', 'ring' => 'bg-amber-400/50', 'text' => 'text-slate-950'],
        4 => ['top' => '39.0%', 'left' => '71.0%', 'bg' => 'bg-emerald-600', 'pulse' => 'bg-emerald-400', 'ring' => 'bg-emerald-500/50', 'text' => 'text-white'],
        5 => ['top' => '71.0%', 'left' => '57.5%', 'bg' => 'bg-blue-600', 'pulse' => 'bg-blue-400', 'ring' => 'bg-blue-500/50', 'text' => 'text-white'],
    ];
    @endphp

    {{-- INTERACTIVE CARTOGRAPHIC GIS MAP (Clean stationary base map with Pulsating District Pins) --}}
    <div class="w-full flex flex-col items-center justify-center p-6 sm:p-8 bg-gradient-to-b from-slate-900 via-slate-950 to-slate-900 rounded-3xl border border-slate-800 text-white relative overflow-hidden shadow-xl">
        
        {{-- Map Top Bar --}}
        <div class="w-full flex flex-col sm:flex-row justify-between sm:items-center gap-3 mb-6 relative z-10">
            <div>
                <div class="flex items-center gap-2">
                    <span class="text-[11px] font-black uppercase tracking-wider text-indigo-400 block">CamSur Cartographic GIS Map</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500/20 text-indigo-300 border border-indigo-400/30">
                        Interactive Districts
                    </span>
                </div>
                <span class="text-xs text-slate-300 font-medium">Click any district pin on the map to inspect its municipalities & evacuation shelters</span>
            </div>
            
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-2 text-xs bg-slate-800/90 text-slate-200 px-4 py-1.5 rounded-full font-bold border border-slate-700 shadow-inner">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span x-text="hoveredDistrict ? 'District ' + hoveredDistrict + ' Hovered' : 'Hover & click any district pin'"></span>
                </span>
            </div>
        </div>

        {{-- Stationary Map Stage Frame with Responsive District Pins --}}
        <div class="relative w-full max-w-[640px] md:max-w-[700px] aspect-[1223/1000] flex items-center justify-center p-2 select-none">
            
            {{-- Dynamic Ground Shadow --}}
            <div class="absolute inset-x-12 bottom-2 h-10 bg-slate-950/90 blur-2xl rounded-full transform scale-95 pointer-events-none"></div>

            {{-- Authentic Cartographic Base Map (Maap.png) --}}
            <img src="{{ asset('img/about/socio-economic/muns/Maap.png') }}" 
                 alt="Official Camarines Sur Congressional District Cartographic Map" 
                 class="w-full h-full object-contain filter drop-shadow-[0_20px_35px_rgba(0,0,0,0.6)] pointer-events-none select-none">

            {{-- 📍 PULSATING DISTRICT PINS (Click to Open District Modal) --}}
            @foreach($districtsData as $dist)
            @php $coord = $pinCoordinates[$dist['d']]; @endphp
            <button type="button"
                    @click="selectedDistrict = {{ $dist['d'] }}"
                    @mouseenter="hoveredDistrict = {{ $dist['d'] }}"
                    @mouseleave="hoveredDistrict = null"
                    style="top: {{ $coord['top'] }}; left: {{ $coord['left'] }};"
                    class="absolute -translate-x-1/2 -translate-y-1/2 z-30 group cursor-pointer focus:outline-none"
                    aria-label="Inspect District {{ $dist['d'] }} Profile">
                
                {{-- Pulsing Radar Glow Ring --}}
                <span class="absolute -inset-2 rounded-full {{ $coord['pulse'] }} opacity-75 animate-ping"></span>
                
                {{-- Outer Glow Ring --}}
                <span class="absolute -inset-1 rounded-full {{ $coord['ring'] }} blur-xs group-hover:scale-125 transition-transform duration-300"></span>

                {{-- Pin Core Button --}}
                <span class="relative flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8 rounded-full font-black text-[11px] sm:text-xs {{ $coord['text'] }} shadow-xl border-2 border-white/90 transform group-hover:scale-115 group-active:scale-95 transition-all duration-200 {{ $coord['bg'] }}">
                    <span>D{{ $dist['d'] }}</span>
                </span>

                {{-- Floating Tooltip on Hover --}}
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-3 py-1.5 rounded-xl bg-slate-900/95 text-white text-[11px] font-bold whitespace-nowrap shadow-2xl border border-slate-700 pointer-events-none opacity-0 group-hover:opacity-100 transition-all duration-200 transform group-hover:-translate-y-1 z-40 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full {{ $coord['bg'] }}"></span>
                    <span>District {{ $dist['d'] }}</span>
                    <span class="text-slate-400 text-[10px]">({{ count($dist['municipalities']) }} LGUs)</span>
                </span>
            </button>
            @endforeach
        </div>
    </div>

    {{-- ⭐ DISTRICT DETAILS MODAL (With Expandable Municipalities & Cities) --}}
    <template x-teleport="body">
        <div x-show="selectedDistrict !== null" 
             class="fixed inset-0 z-[100] flex items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-md overflow-y-auto" 
             x-transition.opacity 
             style="display: none;">
            
            <div @click.outside="selectedDistrict = null; expandedLgu = null" 
                 class="bg-white rounded-3xl sm:rounded-4xl p-6 sm:p-8 md:p-10 w-full max-w-3xl shadow-2xl border border-slate-200 relative max-h-[92vh] flex flex-col overflow-hidden" 
                 x-transition.scale>
                
                @foreach($districtsData as $dist)
                @php $pct = round(($dist['capacity'] / $dist['maxCap']) * 100); @endphp
                <div x-show="selectedDistrict === {{ $dist['d'] }}" class="flex flex-col h-full overflow-hidden">
                    
                    {{-- Modal District Header --}}
                    <div class="flex items-center gap-4 pb-5 border-b border-slate-100 shrink-0">
                        <div class="w-14 h-14 rounded-2xl {{ $dist['theme']['icon'] }} flex items-center justify-center shrink-0 shadow-md font-black text-2xl">
                            D{{ $dist['d'] }}
                        </div>
                        <div class="space-y-1 min-w-0 flex-1">
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-black uppercase tracking-wider {{ $dist['theme']['badge'] }} px-2.5 py-0.5 rounded-full border text-center justify-center leading-tight">
                                    Congressional District {{ $dist['d'] }}
                                </span>
                                <span class="text-xs font-bold text-slate-400">{{ count($dist['municipalities']) }} Local Government Units</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 leading-tight truncate">{{ $dist['name'] }}</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">{{ $dist['desc'] }}</p>
                        </div>
                    </div>
                    
                    {{-- Scrollable Modal Content (Stats + Expandable Municipalities) --}}
                    <div class="overflow-y-auto py-5 space-y-6 flex-1 pr-1 text-slate-700 text-xs sm:text-sm">
                        
                        {{-- Evacuation Metrics & Visualized Capacity --}}
                        <div class="grid grid-cols-2 gap-3">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-center text-center sm:text-left">
                                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block">Total Evac Centers</span>
                                <div class="text-2xl sm:text-3xl font-black {{ $dist['theme']['text'] }} mt-1">{{ $dist['centers'] }} Shelters</div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-center text-center sm:text-left">
                                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider block">Total Family Capacity</span>
                                <div class="text-2xl sm:text-3xl font-black {{ $dist['theme']['text'] }} mt-1">{{ number_format($dist['capacity']) }} <span class="text-xs font-semibold text-slate-500">Fam.</span></div>
                            </div>
                        </div>
                        
                        {{-- Capacity Progress Bar --}}
                        <div class="p-4 border border-slate-100 rounded-2xl bg-white space-y-2">
                            <div class="flex justify-between items-end text-xs font-bold">
                                <span class="text-slate-500">Provincial Evacuation Capacity Share:</span>
                                <span class="text-slate-900 font-black">{{ $pct }}% of Peak District</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden shadow-inner">
                                <div class="h-full rounded-full {{ $dist['theme']['bar'] }} transition-all duration-1000 ease-out" style="width: {{ $pct }}%"></div>
                            </div>
                        </div>

                        {{-- ⭐ MUNICIPALITIES & CITIES EXPANDABLE LIST --}}
                        <div class="space-y-3">
                            <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                                <h4 class="text-xs font-black uppercase tracking-wider text-slate-900 flex items-center gap-1.5">
                                    <span>🏛️</span>
                                    <span>Municipalities & Cities (Click to expand details & map)</span>
                                </h4>
                                <span class="text-[11px] font-semibold text-slate-400">
                                    {{ count($dist['municipalities']) }} LGUs in District {{ $dist['d'] }}
                                </span>
                            </div>

                            <div class="space-y-2.5">
                                @foreach($dist['municipalities'] as $m)
                                <div class="border border-slate-200 rounded-2xl overflow-hidden transition-all duration-200 bg-white hover:border-blue-300 shadow-2xs">
                                    {{-- Accordion Header Bar --}}
                                    <button type="button" 
                                            @click="expandedLgu = (expandedLgu === '{{ $m['id'] }}' ? null : '{{ $m['id'] }}')"
                                            class="w-full p-3.5 sm:p-4 flex items-center justify-between gap-3 text-left transition-colors cursor-pointer"
                                            :class="expandedLgu === '{{ $m['id'] }}' ? 'bg-blue-50/60' : 'bg-white hover:bg-slate-50'">
                                        
                                        <div class="flex items-center gap-3 min-w-0">
                                            <div class="w-11 h-11 rounded-xl bg-slate-50 p-1 flex items-center justify-center border border-slate-100 shrink-0 shadow-2xs">
                                                <img src="{{ $m['seal'] }}" alt="{{ $m['name'] }}" class="w-full h-full object-contain" onError="this.src='/images/camsur-logo.png'">
                                            </div>
                                            <div class="min-w-0">
                                                <h5 class="font-black text-slate-900 text-sm truncate">{{ $m['name'] }}</h5>
                                                <span class="text-[11px] text-slate-500 font-medium block truncate">{{ $m['class'] }}</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-3 shrink-0">
                                            <span class="hidden sm:inline-flex text-[11px] font-bold text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-lg border border-indigo-100">
                                                {{ $m['centers'] }} Evac Centers
                                            </span>
                                            <div class="w-7 h-7 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 transition-transform duration-200"
                                                 :class="expandedLgu === '{{ $m['id'] }}' ? 'rotate-180 bg-blue-100 text-blue-700' : ''">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                            </div>
                                        </div>
                                    </button>

                                    {{-- Accordion Expanded Body with Complete Details & Google Map --}}
                                    <div x-show="expandedLgu === '{{ $m['id'] }}'" 
                                         x-collapse
                                         class="p-4 sm:p-5 border-t border-slate-100 bg-slate-50/50 space-y-4 text-xs">
                                        
                                        {{-- Stats Grid --}}
                                        <div class="grid grid-cols-3 gap-2.5 text-center">
                                            <div class="p-3 bg-white rounded-xl border border-slate-200">
                                                <span class="text-[9px] uppercase font-bold text-slate-400 block">Land Area</span>
                                                <span class="font-black text-slate-800 text-xs mt-0.5 block">{{ $m['area'] }}</span>
                                            </div>
                                            <div class="p-3 bg-white rounded-xl border border-slate-200">
                                                <span class="text-[9px] uppercase font-bold text-slate-400 block">Population</span>
                                                <span class="font-black text-slate-800 text-xs mt-0.5 block">{{ $m['pop'] }}</span>
                                            </div>
                                            <div class="p-3 bg-white rounded-xl border border-slate-200">
                                                <span class="text-[9px] uppercase font-bold text-slate-400 block">Evac Facilities</span>
                                                <span class="font-black text-indigo-700 text-xs mt-0.5 block">{{ $m['centers'] }} Shelters</span>
                                            </div>
                                        </div>

                                        {{-- Notes --}}
                                        <p class="text-slate-600 leading-relaxed bg-white p-3 rounded-xl border border-slate-200">
                                            {{ $m['notes'] }}
                                        </p>

                                        {{-- Embedded Google Map --}}
                                        <div class="space-y-1.5">
                                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 block">Spatial & Boundary Map</span>
                                            <div class="w-full h-48 rounded-xl overflow-hidden border border-slate-200 shadow-inner bg-slate-100">
                                                <iframe src="{{ $m['map_url'] }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    {{-- Single Modal Footer Close Button --}}
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3 shrink-0">
                        <span class="text-[11px] text-slate-400 font-medium">District {{ $dist['d'] }} Territorial Profile</span>
                        <button type="button" @click="selectedDistrict = null; expandedLgu = null"
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
