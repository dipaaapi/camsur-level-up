<x-guest-layout>
    <div x-data="{ 
            selectedLgu: null, 
            searchQuery: '',
            filterDistrict: 'all',
            lgus: [
                // 1ST DISTRICT
                { id: 'cabusao', name: 'Cabusao', district: '1st District', class: '5th Class Municipality', area: '46.80 km²', pop: '19,200', mapUrl: 'https://maps.google.com/maps?q=Cabusao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/cabusao.png', evacCenters: 2 },
                { id: 'delgallego', name: 'Del Gallego', district: '1st District', class: '4th Class Municipality', area: '208.84 km²', pop: '26,700', mapUrl: 'https://maps.google.com/maps?q=Del+Gallego+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/delgallego.png', evacCenters: 2 },
                { id: 'libmanan', name: 'Libmanan', district: '1st District', class: '1st Class Municipality (Largest Area)', area: '342.82 km²', pop: '116,100', mapUrl: 'https://maps.google.com/maps?q=Libmanan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/libmanan.png', evacCenters: 3 },
                { id: 'lupi', name: 'Lupi', district: '1st District', class: '3rd Class Municipality', area: '199.12 km²', pop: '34,500', mapUrl: 'https://maps.google.com/maps?q=Lupi+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/lupi.png', evacCenters: 2 },
                { id: 'ragay', name: 'Ragay', district: '1st District', class: '1st Class Municipality', area: '400.22 km²', pop: '61,800', mapUrl: 'https://maps.google.com/maps?q=Ragay+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/ragay.png', evacCenters: 3 },
                { id: 'sipocot', name: 'Sipocot', district: '1st District', class: '1st Class Municipality', area: '243.43 km²', pop: '70,200', mapUrl: 'https://maps.google.com/maps?q=Sipocot+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/sipocot.png', evacCenters: 2 },

                // 2ND DISTRICT
                { id: 'gainza', name: 'Gainza', district: '2nd District', class: '5th Class Municipality', area: '14.75 km²', pop: '11,800', mapUrl: 'https://maps.google.com/maps?q=Gainza+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/gainza.png', evacCenters: 2 },
                { id: 'milaor', name: 'Milaor', district: '2nd District', class: '3rd Class Municipality', area: '33.64 km²', pop: '34,900', mapUrl: 'https://maps.google.com/maps?q=Milaor+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/milaor.png', evacCenters: 2 },
                { id: 'minalabac', name: 'Minalabac', district: '2nd District', class: '2nd Class Municipality', area: '126.10 km²', pop: '56,200', mapUrl: 'https://maps.google.com/maps?q=Minalabac+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/minalabac.png', evacCenters: 2 },
                { id: 'pamplona', name: 'Pamplona', district: '2nd District', class: '3rd Class Municipality', area: '80.60 km²', pop: '37,900', mapUrl: 'https://maps.google.com/maps?q=Pamplona+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/pamplona.png', evacCenters: 2 },
                { id: 'pasacao', name: 'Pasacao', district: '2nd District', class: '3rd Class Municipality', area: '149.54 km²', pop: '51,400', mapUrl: 'https://maps.google.com/maps?q=Pasacao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/pasacao.png', evacCenters: 3 },
                { id: 'pili', name: 'Pili (Provincial Capital)', district: '2nd District', class: '1st Class Municipality', area: '290.25 km²', pop: '102,100', mapUrl: 'https://maps.google.com/maps?q=Pili+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/pili.png', evacCenters: 3 },
                { id: 'sanfernando', name: 'San Fernando', district: '2nd District', class: '2nd Class Municipality', area: '117.63 km²', pop: '38,600', mapUrl: 'https://maps.google.com/maps?q=San+Fernando+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/sanfernando.png', evacCenters: 2 },

                // 3RD DISTRICT
                { id: 'bombon', name: 'Bombon', district: '3rd District', class: '4th Class Municipality', area: '28.73 km²', pop: '17,800', mapUrl: 'https://maps.google.com/maps?q=Bombon+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/bombon.png', evacCenters: 2 },
                { id: 'calabanga', name: 'Calabanga', district: '3rd District', class: '1st Class Municipality', area: '163.80 km²', pop: '91,400', mapUrl: 'https://maps.google.com/maps?q=Calabanga+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/calabanga.png', evacCenters: 3 },
                { id: 'camaligan', name: 'Camaligan', district: '3rd District', class: '5th Class Municipality (Smallest Area)', area: '4.68 km²', pop: '25,100', mapUrl: 'https://maps.google.com/maps?q=Camaligan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/camaligan.png', evacCenters: 1 },
                { id: 'canaman', name: 'Canaman', district: '3rd District', class: '3rd Class Municipality', area: '43.27 km²', pop: '37,200', mapUrl: 'https://maps.google.com/maps?q=Canaman+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/canaman.png', evacCenters: 2 },
                { id: 'magarao', name: 'Magarao', district: '3rd District', class: '4th Class Municipality', area: '44.97 km²', pop: '27,300', mapUrl: 'https://maps.google.com/maps?q=Magarao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/magarao.png', evacCenters: 2 },
                { id: 'naga', name: 'Naga City', district: '3rd District', class: 'Independent Component City', area: '84.48 km²', pop: '215,400', mapUrl: 'https://maps.google.com/maps?q=Naga+City+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/naga.png', evacCenters: 4 },
                { id: 'ocampo', name: 'Ocampo', district: '3rd District', class: '3rd Class Municipality', area: '118.33 km²', pop: '52,800', mapUrl: 'https://maps.google.com/maps?q=Ocampo+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/ocampo.png', evacCenters: 2 },

                // 4TH DISTRICT (PARTIDO)
                { id: 'caramoan', name: 'Caramoan', district: '4th District', class: '2nd Class Municipality', area: '277.41 km²', pop: '53,200', mapUrl: 'https://maps.google.com/maps?q=Caramoan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/caramoan.png', evacCenters: 3 },
                { id: 'garchitorena', name: 'Garchitorena', district: '4th District', class: '4th Class Municipality', area: '243.80 km²', pop: '29,400', mapUrl: 'https://maps.google.com/maps?q=Garchitorena+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/garchitorena.png', evacCenters: 2 },
                { id: 'goa', name: 'Goa', district: '4th District', class: '1st Class Municipality', area: '206.18 km²', pop: '73,600', mapUrl: 'https://maps.google.com/maps?q=Goa+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/goa.png', evacCenters: 3 },
                { id: 'lagonoy', name: 'Lagonoy', district: '4th District', class: '2nd Class Municipality', area: '377.90 km²', pop: '58,400', mapUrl: 'https://maps.google.com/maps?q=Lagonoy+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/lagonoy.png', evacCenters: 2 },
                { id: 'presentacion', name: 'Presentacion', district: '4th District', class: '4th Class Municipality', area: '143.80 km²', pop: '22,600', mapUrl: 'https://maps.google.com/maps?q=Presentacion+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/presentacion.png', evacCenters: 2 },
                { id: 'sagnay', name: 'Sagnay', district: '4th District', class: '4th Class Municipality', area: '154.19 km²', pop: '36,400', mapUrl: 'https://maps.google.com/maps?q=Sagnay+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/sagnay.png', evacCenters: 2 },
                { id: 'sanjose', name: 'San Jose', district: '4th District', class: '4th Class Municipality', area: '43.07 km²', pop: '42,100', mapUrl: 'https://maps.google.com/maps?q=San+Jose+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/sanjose.png', evacCenters: 2 },
                { id: 'tigaon', name: 'Tigaon', district: '4th District', class: '1st Class Municipality', area: '72.35 km²', pop: '60,500', mapUrl: 'https://maps.google.com/maps?q=Tigaon+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/tigaon.png', evacCenters: 2 },
                { id: 'tinambac', name: 'Tinambac', district: '4th District', class: '1st Class Municipality', area: '351.62 km²', pop: '73,900', mapUrl: 'https://maps.google.com/maps?q=Tinambac+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/tinambac.png', evacCenters: 2 },

                // 5TH DISTRICT
                { id: 'baao', name: 'Baao', district: '5th District', class: '1st Class Municipality', area: '106.50 km²', pop: '61,300', mapUrl: 'https://maps.google.com/maps?q=Baao+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/baao.png', evacCenters: 2 },
                { id: 'balatan', name: 'Balatan', district: '5th District', class: '4th Class Municipality', area: '93.09 km²', pop: '31,800', mapUrl: 'https://maps.google.com/maps?q=Balatan+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/balatan.png', evacCenters: 1 },
                { id: 'bato', name: 'Bato', district: '5th District', class: '3rd Class Municipality', area: '107.12 km²', pop: '53,900', mapUrl: 'https://maps.google.com/maps?q=Bato+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/bato.png', evacCenters: 2 },
                { id: 'buhi', name: 'Buhi', district: '5th District', class: '1st Class Municipality', area: '246.65 km²', pop: '84,500', mapUrl: 'https://maps.google.com/maps?q=Buhi+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/buhi.png', evacCenters: 2 },
                { id: 'bula', name: 'Bula', district: '5th District', class: '1st Class Municipality', area: '167.64 km²', pop: '72,100', mapUrl: 'https://maps.google.com/maps?q=Bula+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/bula.png', evacCenters: 2 },
                { id: 'iriga', name: 'Iriga City', district: '5th District', class: 'Component City', area: '137.35 km²', pop: '118,200', mapUrl: 'https://maps.google.com/maps?q=Iriga+City+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/iriga.png', evacCenters: 3 },
                { id: 'nabua', name: 'Nabua', district: '5th District', class: '1st Class Municipality', area: '88.54 km²', pop: '86,800', mapUrl: 'https://maps.google.com/maps?q=Nabua+Camarines+Sur&t=&z=13&ie=UTF8&iwloc=&output=embed', seal: '/images/lgus/nabua.png', evacCenters: 2 }
            ]
        }" 
        class="min-h-screen bg-slate-50 dark:bg-slate-900 py-10 transition-colors duration-300">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            {{-- 1. HERO BANNER SECTION --}}
            <x-hero-banner 
                badge-text="VALIDATED OFFICIAL PROVINCIAL DATA BASELINE"
                title="LALAWIGAN NG CAMARINES SUR"
                description="Ang komprehensibong balangkas ng heograpiya, demograpiya, makroekonomiya, imprastraktura, at climate resiliency status ng pinakamalaking lalawigan at sentro ng kaunlaran sa Bicol Region."
            />

            {{-- 2. GEOGRAPHIC DIMENSIONS, LAND AREA & CLIMATE PROFILE --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-blue-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2" /></svg>
                    </span>
                    Geographic Dimensions, Climate & Boundaries
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200/80 dark:border-slate-700">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Total Land Area</span>
                        <div class="text-2xl font-black text-blue-600 dark:text-blue-400 mt-1">5,497.03 km²</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">548,703 ektarya (~30.4% hanggang 34.0% ng Bicol Region)</p>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200/80 dark:border-slate-700">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">National Area & Pop Rank</span>
                        <div class="text-2xl font-black text-emerald-600 dark:text-emerald-400 mt-1">16th Area / 11th Pop</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Mula sa 82 kabuuang lalawigan sa buong Pilipinas</p>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200/80 dark:border-slate-700">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Political Subdivisions</span>
                        <div class="text-2xl font-black text-indigo-600 dark:text-indigo-400 mt-1">37 LGUs</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">2 Lungsod (Naga & Iriga) | 35 Bayan | 1,063 Barangay</p>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200/80 dark:border-slate-700">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Geographic Coordinates</span>
                        <div class="text-xl font-black text-amber-600 dark:text-amber-400 mt-1">13.4000° N, 123.3500° E</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Boundaries: Cam Norte, Quezon, Pacific, Albay</p>
                    </div>
                </div>

                {{-- Extreme Municipalities & Climate Seasons Grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="p-6 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base">Municipal Area Extremes</h3>
                        <div class="space-y-2 text-sm text-slate-600 dark:text-slate-300">
                            <div class="flex justify-between items-center p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700">
                                <div>
                                    <strong class="text-slate-900 dark:text-white block">Pinakamalaking Bayan</strong>
                                    <span class="text-xs text-slate-500">Libmanan (1st Congressional District)</span>
                                </div>
                                <span class="font-black text-blue-600 dark:text-blue-400 text-base">342.82 km² (34,282 ha)</span>
                            </div>
                            <div class="flex justify-between items-center p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700">
                                <div>
                                    <strong class="text-slate-900 dark:text-white block">Pinakamaliit na Bayan</strong>
                                    <span class="text-xs text-slate-500">Camaligan (3rd Congressional District)</span>
                                </div>
                                <span class="font-black text-amber-600 dark:text-amber-400 text-base">4.68 km² (468 ha)</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-blue-50/50 dark:bg-slate-900/60 rounded-2xl border border-blue-100 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base">Climate Classification & Seasonal Cycles</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300">
                            May klimang <strong>Type II</strong> (silangan at hilagang baybayin—walang tiyak na dry season, malakas ang ulan mula Nobyembre hanggang Enero) at <strong>Type IV</strong> (kanluran at lambak—pantay ang bagsak ng ulan buong taon).
                        </p>
                        <div class="grid grid-cols-3 gap-2 text-center text-xs">
                            <div class="p-2.5 bg-white dark:bg-slate-800 rounded-xl">
                                <span class="font-bold text-amber-500 block uppercase text-[10px]">Marso – Mayo</span>
                                <span class="font-semibold text-slate-800 dark:text-slate-200">Dry / Hot Season</span>
                            </div>
                            <div class="p-2.5 bg-white dark:bg-slate-800 rounded-xl">
                                <span class="font-bold text-blue-500 block uppercase text-[10px]">Hunyo – Oktubre</span>
                                <span class="font-semibold text-slate-800 dark:text-slate-200">Wet Season</span>
                            </div>
                            <div class="p-2.5 bg-white dark:bg-slate-800 rounded-xl">
                                <span class="font-bold text-teal-500 block uppercase text-[10px]">Nobyembre – Pebrero</span>
                                <span class="font-semibold text-slate-800 dark:text-slate-200">Cool Season</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3. HAZARD SUSCEPTIBILITY & RISK PROFILE --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-red-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    </span>
                    Hazard Susceptibility & Risk Profile
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-5 bg-red-50/50 dark:bg-slate-900/60 rounded-2xl border border-red-100 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-red-600 dark:text-red-400 uppercase tracking-wider block">Flood Inundation</span>
                        <div class="text-xl font-bold text-slate-900 dark:text-white">Bicol River Basin</div>
                        <p class="text-xs text-slate-600 dark:text-slate-300">Nakaaapekto sa ~42% ng kabuuang agricultural lowlands ng lalawigan.</p>
                    </div>

                    <div class="p-5 bg-amber-50/50 dark:bg-slate-900/60 rounded-2xl border border-amber-100 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-amber-600 dark:text-amber-400 uppercase tracking-wider block">Typhoon Corridor</span>
                        <div class="text-xl font-bold text-slate-900 dark:text-white">High Frequency Path</div>
                        <p class="text-xs text-slate-600 dark:text-slate-300">Tinatahak ng mga bagyong nagmumula sa Karagatang Pasipiko.</p>
                    </div>

                    <div class="p-5 bg-purple-50/50 dark:bg-slate-900/60 rounded-2xl border border-purple-100 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-purple-600 dark:text-purple-400 uppercase tracking-wider block">Volcanic Buffer Zones</span>
                        <div class="text-xl font-bold text-slate-900 dark:text-white">Isarog & Iriga Volcanos</div>
                        <p class="text-xs text-slate-600 dark:text-slate-300">Lahar at volcanic hazard monitoring zones para sa surrounding LGUs.</p>
                    </div>

                    <div class="p-5 bg-blue-50/50 dark:bg-slate-900/60 rounded-2xl border border-blue-100 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-blue-600 dark:text-blue-400 uppercase tracking-wider block">Coastal Storm Surge</span>
                        <div class="text-xl font-bold text-slate-900 dark:text-white">Coastal Margin LGUs</div>
                        <p class="text-xs text-slate-600 dark:text-slate-300">Lagonoy Gulf, San Miguel Bay, at Ragay Gulf coastal communities.</p>
                    </div>
                </div>
            </div>

            {{-- 4. DEMOGRAPHIC DYNAMICS & HUMAN CAPITAL (PSA DATA SYNTHESIS) --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-emerald-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </span>
                    Demographic Dynamics, Human Capital & Social Indicators
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-600 to-teal-800 text-white shadow-lg space-y-2">
                        <span class="text-xs font-semibold text-emerald-200 uppercase tracking-wider block">2026 Projected Population</span>
                        <div class="text-3xl font-black">2,115,000+</div>
                        <p class="text-xs text-emerald-100 leading-relaxed">
                            34.01% ng kabuuang populasyon ng Bicol Region. 2020 Baseline: <strong>2,068,244</strong> | 2024 PSA Baseline: <strong>2,063,314</strong>.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 text-white shadow-lg space-y-2">
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Density & Households</span>
                        <div class="text-3xl font-black text-amber-400">375.35 / km²</div>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Households: <strong>436,871</strong> (Average 4.7 tao bawat sambahayan) | Annual Growth Rate: <strong>0.98%</strong>.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-blue-900 text-white shadow-lg space-y-2">
                        <span class="text-xs font-semibold text-blue-200 uppercase tracking-wider block">Human Capital & Literacy</span>
                        <div class="text-3xl font-black text-cyan-300">98.50%</div>
                        <p class="text-xs text-blue-100 leading-relaxed">
                            Working-Age Workforce (15–64 yrs): <strong>58.70% (1,214,059)</strong> | Dependency Ratio: <strong>70.36 per 100</strong>.
                        </p>
                    </div>
                </div>

                {{-- Age Demographics Table & Populous Extremes Grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-700">
                        <table class="w-full text-left text-sm text-slate-600 dark:text-slate-300">
                            <thead class="bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-200 uppercase text-xs">
                                <tr>
                                    <th class="p-3">Sektor ng Edad</th>
                                    <th class="p-3">Kabuuan</th>
                                    <th class="p-3">Bahagdan (%)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-700">
                                <tr>
                                    <td class="p-3 font-semibold">Working-Age (15–64)</td>
                                    <td class="p-3 font-bold text-slate-900 dark:text-white">1,214,059</td>
                                    <td class="p-3 font-bold text-emerald-600">58.70%</td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-semibold">Young Dependents (&lt;15)</td>
                                    <td class="p-3 font-bold text-slate-900 dark:text-white">751,807</td>
                                    <td class="p-3 font-bold text-blue-600">36.35%</td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-semibold">Senior Citizens (65+)</td>
                                    <td class="p-3 font-bold text-slate-900 dark:text-white">102,584</td>
                                    <td class="p-3 font-bold text-amber-600">4.96%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base">Population Extremes by LGU</h3>
                        <div class="space-y-2 text-xs">
                            <div class="p-3 bg-white dark:bg-slate-800 rounded-xl">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block uppercase">Most Populous LGUs</span>
                                <p class="text-slate-700 dark:text-slate-200 mt-1">1. Naga City (~215.4k) | 2. Iriga City (~118.2k) | 3. Libmanan (~116.1k) | 4. Pili (~102.1k) | 5. Calabanga (~91.4k)</p>
                            </div>
                            <div class="p-3 bg-white dark:bg-slate-800 rounded-xl">
                                <span class="font-bold text-amber-600 dark:text-amber-400 block uppercase">Least Populous LGUs</span>
                                <p class="text-slate-700 dark:text-slate-200 mt-1">1. Gainza (~11.8k) | 2. Bombon (~17.8k) | 3. Cabusao (~19.2k) | 4. Siruma (~19.8k) | 5. Presentacion (~22.6k)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 5. MACROECONOMIC DRIVERS, AGRICULTURE, WATER & ENERGY RESOURCES --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-amber-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    </span>
                    Macroeconomic Drivers, Agriculture & Natural Resources
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Gross Provincial GDP</span>
                        <div class="text-3xl font-black text-amber-600 dark:text-amber-400">PhP 225.0B+</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400">33.4% ng GRDP ng Bicol Region (Rank #1 sa Probinsya sa Bicol).</p>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Regional Growth Trajectory</span>
                        <div class="text-3xl font-black text-emerald-600 dark:text-emerald-400">8.1% – 5.7%</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Sustained regional economic expansion post-pandemic baseline.</p>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Rice Production Volume</span>
                        <div class="text-3xl font-black text-blue-600 dark:text-blue-400">~380,000 MT</div>
                        <p class="text-xs text-slate-500 dark:text-slate-400">"Rice Granary of Bicol Region" | High-hybrid seed yields.</p>
                    </div>
                </div>

                {{-- Agriculture, Fisheries, Irrigation & Power Grid Matrix --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base">🌾 Agriculture, High-Value Crops & Fisheries</h3>
                        <ul class="space-y-2">
                            <li>• <strong>Coconut Plantations:</strong> 120,000+ ektarya na nakalaan sa produksyon ng copra at coconut processing.</li>
                            <li>• <strong>High-Value Crops:</strong> Abaca, mais, kamoteng kahoy (cassava), at mga gulay sa upland areas.</li>
                            <li>• <strong>Endemic Fisheries:</strong> Lake Buhi (Home of <em>Sinarapan / Mistichthys luzonensis</em> - pinakamaliit na komersyal na isda), Lake Bato, Ragay Gulf, at San Miguel Bay.</li>
                        </ul>
                    </div>

                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base">⚡ Irrigation, Water Systems & Energy Infrastructure</h3>
                        <ul class="space-y-2">
                            <li>• <strong>NIA Irrigation Systems:</strong> Bicol River Basin Irrigation System na sumasaklaw sa 45,000+ ektarya kasama ang Solar-Powered Irrigation Systems (SPIS).</li>
                            <li>• <strong>Power Cooperatives:</strong> CASURECO I, CASURECO II, CASURECO III, at CASURECO IV.</li>
                            <li>• <strong>Water Utilities:</strong> Metro Naga Water District (MNWD) at 35 Municipal Waterworks Systems.</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- 6. DIVISION EVACUATION CENTERS MATRIX --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-6">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-indigo-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </span>
                    Division Evacuation Centers & Institutional Facilities
                </h2>

                <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full text-left text-sm text-slate-600 dark:text-slate-300">
                        <thead class="bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-200 uppercase text-xs">
                            <tr>
                                <th class="p-4">Congressional District</th>
                                <th class="p-4">Covered Municipalities / LGUs</th>
                                <th class="p-4">Active Evacuation Facilities</th>
                                <th class="p-4">Standard Capacity</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-700">
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30">
                                <td class="p-4 font-bold text-slate-900 dark:text-white">1st Congressional District</td>
                                <td class="p-4">Libmanan, Sipocot, Cabusao, Del Gallego, Lupi, Ragay</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300 rounded-lg font-bold text-xs">12 Active Centers</span></td>
                                <td class="p-4 font-semibold text-slate-800 dark:text-slate-200">4,500 Families</td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30">
                                <td class="p-4 font-bold text-slate-900 dark:text-white">2nd Congressional District</td>
                                <td class="p-4">Pili (Capital), Gainza, Milaor, Minalabac, Pamplona, Pasacao, San Fernando</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300 rounded-lg font-bold text-xs">15 Active Centers</span></td>
                                <td class="p-4 font-semibold text-slate-800 dark:text-slate-200">6,200 Families</td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30">
                                <td class="p-4 font-bold text-slate-900 dark:text-white">3rd Congressional District</td>
                                <td class="p-4">Naga City, Bombon, Calabanga, Camaligan, Canaman, Magarao, Ocampo</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300 rounded-lg font-bold text-xs">14 Active Centers</span></td>
                                <td class="p-4 font-semibold text-slate-800 dark:text-slate-200">5,800 Families</td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30">
                                <td class="p-4 font-bold text-slate-900 dark:text-white">4th Congressional District (Partido)</td>
                                <td class="p-4">Caramoan, Goa, Lagonoy, Presentacion, Sagnay, San Jose, Tigaon, Tinambac, Garchitorena</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300 rounded-lg font-bold text-xs">18 Active Centers</span></td>
                                <td class="p-4 font-semibold text-slate-800 dark:text-slate-200">7,100 Families</td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30">
                                <td class="p-4 font-bold text-slate-900 dark:text-white">5th Congressional District</td>
                                <td class="p-4">Iriga City, Baao, Balatan, Bato, Buhi, Bula, Nabua</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300 rounded-lg font-bold text-xs">11 Active Centers</span></td>
                                <td class="p-4 font-semibold text-slate-800 dark:text-slate-200">4,900 Families</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- 7. MULTI-SECTORAL INFRASTRUCTURE, EDUCATION, HEALTH, TOURISM & TRADE --}}
            <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200/80 dark:border-slate-700/80 space-y-8">
                <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                    <span class="p-2.5 bg-teal-600 text-white rounded-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </span>
                    Sectoral Master Matrix
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Transportation & Connectivity --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">🌐 Infrastructure & Connectivity</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Road Network:</strong> 1,240+ km provincial at national paved highways (AH26 Maharlika Highway).</li>
                            <li>• <strong>Air Transport:</strong> Naga Airport (Pili) with daily commercial flights.</li>
                            <li>• <strong>Seaports:</strong> Pasacao Regional Seaport & Caramoan Eco-Ports.</li>
                            <li>• <strong>Railway Systems:</strong> PNR South Main Line railway modernization corridor.</li>
                        </ul>
                    </div>

                    {{-- Labor, Employment & Agrarian Reform --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">💼 Labor & Agrarian Reform</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Employment Rate:</strong> 94.2% Labor Force Participation Rate.</li>
                            <li>• <strong>Agrarian Reform:</strong> 85,000+ Agrarian Reform Beneficiaries (ARBs) with awarded land titles.</li>
                            <li>• <strong>Workforce Sector:</strong> Service Sector (48%), Agriculture (35%), Industry (17%).</li>
                        </ul>
                    </div>

                    {{-- Trade, Industry & Commerce --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">🏦 Trade, Commerce & BPO Corridor</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Registered MSMEs:</strong> 28,000+ active commercial establishments.</li>
                            <li>• <strong>Banking Network:</strong> 140+ commercial, thrift, at rural banks.</li>
                            <li>• <strong>IT-BPO Hub:</strong> Naga-Pili Tech Corridor with expanding IT-BPM parks.</li>
                        </ul>
                    </div>

                    {{-- Tourism Attractions & Heritage --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">🏖️ Tourism & Cultural Heritage</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Eco-Tourism Wonders:</strong> CWC Water Sports Complex, Caramoan Islands, Mt. Isarog National Park, Lake Buhi.</li>
                            <li>• <strong>Religious Heritage:</strong> Our Lady of Peñafrancia Shrine & Annual Pilgrimage Festival.</li>
                            <li>• <strong>Tourist Arrivals:</strong> 1.8M+ annual domestic and international visitors.</li>
                        </ul>
                    </div>

                    {{-- Education Sector --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">🎓 Education & Institutional Inventory</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Schools:</strong> 920 Public Elementary & Secondary Schools.</li>
                            <li>• <strong>Higher Education Institutions:</strong> CBSUA (Central Bicol State University of Agriculture), CSPC, UNC, ADNU, UNEP.</li>
                            <li>• <strong>Total Student Enrollment:</strong> 420,000+ enrolled students statewide.</li>
                        </ul>
                    </div>

                    {{-- Health & Medical Facilities --}}
                    <div class="p-5 bg-slate-50 dark:bg-slate-900/60 rounded-2xl border border-slate-200 dark:border-slate-700 space-y-3">
                        <h3 class="font-bold text-slate-900 dark:text-white text-base flex items-center gap-2">🏥 Health & Medical Infrastructure</h3>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-2">
                            <li>• <strong>Major Hospitals:</strong> Bicol Medical Center (BMC - Naga), Bicol Region General Hospital & Geriatric Medical Center, Camarines Sur Provincial Hospital.</li>
                            <li>• <strong>Primary Care:</strong> 12 Provincial & District Hospitals, 37 Rural Health Units (RHUs), 1,063 Barangay Health Stations.</li>
                            <li>• <strong>Total Bed Capacity:</strong> ~2,400+ hospital beds.</li>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- 8. COMPLETE 37 LGUS MASTER DIRECTORY (2 CITIES + 35 MUNICIPALITIES WITH MODAL MAPS) --}}
            <div class="space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-black text-slate-900 dark:text-white flex items-center gap-3">
                            <span class="p-2.5 bg-blue-700 text-white rounded-xl shadow-md">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </span>
                            Complete 37 LGUs Master Directory (2 Cities & 35 Municipalities)
                        </h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">I-click ang alinmang LGU Card upang buksan ang opisyal na profile modal na may kasamang embedded interactive Google Map.</p>
                    </div>

                    {{-- Search & District Filter Controls --}}
                    <div class="flex flex-col sm:flex-row items-center gap-3 w-full sm:w-auto">
                        <select x-model="filterDistrict" class="w-full sm:w-48 px-3.5 py-2 text-xs rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100">
                            <option value="all">Lahat ng Distrito (37 LGUs)</option>
                            <option value="1st District">1st District</option>
                            <option value="2nd District">2nd District</option>
                            <option value="3rd District">3rd District</option>
                            <option value="4th District">4th District (Partido)</option>
                            <option value="5th District">5th District</option>
                        </select>

                        <input type="text" x-model="searchQuery" placeholder="Maghanap ng LGU..." 
                            class="w-full sm:w-56 px-4 py-2 text-xs rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100">
                    </div>
                </div>

                {{-- LGU Master Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <template x-for="lgu in lgus.filter(i => (filterDistrict === 'all' || i.district === filterDistrict) && i.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="lgu.id">
                        <div @click="selectedLgu = lgu" 
                            class="group cursor-pointer bg-white dark:bg-slate-800 p-5 rounded-2xl border border-slate-200/80 dark:border-slate-700/80 shadow-sm hover:shadow-xl hover:border-indigo-500 transition duration-300 flex flex-col justify-between space-y-4">
                            
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-slate-700/60 p-1.5 flex items-center justify-center border border-slate-200 dark:border-slate-600 group-hover:scale-105 transition-transform">
                                    <img :src="lgu.seal" :alt="lgu.name" class="w-full h-full object-contain" onError="this.src='/images/camsur-logo.png'">
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 dark:text-white text-sm group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition" x-text="lgu.name"></h3>
                                    <span class="text-[11px] text-slate-500 dark:text-slate-400 block font-medium" x-text="lgu.class"></span>
                                </div>
                            </div>

                            <div class="text-xs text-slate-600 dark:text-slate-300 space-y-1.5 border-t border-slate-100 dark:border-slate-700 pt-3">
                                <div class="flex justify-between">
                                    <span class="text-slate-400">Congressional District:</span>
                                    <span class="font-semibold text-slate-800 dark:text-slate-200" x-text="lgu.district"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-400">Sukat ng Lupa:</span>
                                    <span class="font-semibold text-slate-800 dark:text-slate-200" x-text="lgu.area"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-400">Populasyon:</span>
                                    <span class="font-semibold text-slate-800 dark:text-slate-200" x-text="lgu.pop"></span>
                                </div>
                            </div>

                            <div class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-600 dark:text-indigo-400 group-hover:translate-x-1 transition-transform">
                                View Interactive Profile & Map
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>

        {{-- ========================================== --}}
        {{-- INTERACTIVE LGU DETAIL MODAL WITH GOOGLE MAP --}}
        {{-- ========================================== --}}
        <div x-show="selectedLgu" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm"
            style="display: none;">
            
            <div @click.away="selectedLgu = null" class="bg-white dark:bg-slate-800 rounded-3xl max-w-2xl w-full p-6 sm:p-8 shadow-2xl border border-slate-200 dark:border-slate-700 space-y-6 relative max-h-[90vh] overflow-y-auto">
                
                {{-- Close Button --}}
                <button @click="selectedLgu = null" class="absolute top-5 right-5 p-2 rounded-full text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 bg-slate-100 dark:bg-slate-700 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                {{-- Modal Header --}}
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-slate-100 dark:bg-slate-700 p-2 border border-slate-200 dark:border-slate-600 flex items-center justify-center">
                        <img :src="selectedLgu?.seal" :alt="selectedLgu?.name" class="w-full h-full object-contain" onError="this.src='/images/camsur-logo.png'">
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-slate-900 dark:text-white" x-text="selectedLgu?.name"></h3>
                        <p class="text-xs font-semibold text-indigo-600 dark:text-indigo-400" x-text="selectedLgu?.class + ' • ' + selectedLgu?.district"></p>
                    </div>
                </div>

                {{-- Key Statistics Summary --}}
                <div class="grid grid-cols-3 gap-3 p-4 bg-slate-50 dark:bg-slate-900 rounded-2xl border border-slate-100 dark:border-slate-700 text-center">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">Sukat ng Lupa</span>
                        <p class="font-bold text-slate-800 dark:text-slate-200 text-sm sm:text-base mt-0.5" x-text="selectedLgu?.area"></p>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">Populasyon</span>
                        <p class="font-bold text-slate-800 dark:text-slate-200 text-sm sm:text-base mt-0.5" x-text="selectedLgu?.pop"></p>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">Evac Centers</span>
                        <p class="font-bold text-red-600 dark:text-red-400 text-sm sm:text-base mt-0.5" x-text="(selectedLgu?.evacCenters || 0) + ' Facilities'"></p>
                    </div>
                </div>

                {{-- Embedded Interactive Google Map --}}
                <div class="space-y-2">
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm flex items-center gap-2">
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                        Interactive Location Map
                    </h4>
                    <div class="w-full h-64 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 shadow-inner bg-slate-100 dark:bg-slate-900">
                        <iframe :src="selectedLgu?.mapUrl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-guest-layout>