<x-guest-layout>
    {{-- 🚀 HERO BANNER --}}
    <x-hero-banner
        badge-text="Province of Camarines Sur"
        title="Provincial Profile"
        description="Discover the rich history, geography, and demographics of our beloved province."
    />
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-sm border border-gray-100 space-y-8 text-gray-700 leading-relaxed text-sm">

        {{-- 👔 THE GOVERNOR PANEL --}}
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-red-100 text-red-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/Governor.png') }}" alt="Governor Icon" class="w-7 h-7 object-contain">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">The Provincial Governor</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Leadership and vision for the province of Camarines Sur</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center my-2">
                <div class="md:col-span-1">
                    <img src="{{ asset('/img/icons/profile/Gov.jpg') }}" alt="Governor" class="w-full h-auto rounded-2xl shadow-sm border border-slate-200 object-cover">
                </div>
                <div class="md:col-span-1 space-y-4">
                    <h3 class="text-xl font-black text-slate-800">Hon. Luis Raymund “LRay” Villafuerte Jr.</h3>
                    <div class="text-sm text-slate-600 leading-relaxed space-y-3 text-justify italic">
                        <p>
                            With an unwavering commitment to serve the people of Camarines Sur, Governor Luis Raymund “LRay” Villafuerte Jr. has dedicated his life to uplifting the province through dynamic leadership and forward-looking programs. A graduate of the prestigious University of the Philippines, he honed his knowledge and skills to prepare himself for public service, which later paved the way for his groundbreaking projects in governance.
                        </p>
                        <p>
                            During his first three terms as Governor from 2004 to 2013, he championed development programs that energized the local economy and improved the quality of life for every Camarinense. His leadership in the House of Representatives as Congressman of the 2nd District (2016–2025) and as Deputy Speaker of the 18th Congress further strengthened his voice in shaping policies for national and local progress.
                        </p>
                        <p>
                            Now, as he returns as the newly elected Governor of Camarines Sur in 2025, Governor LRay brings with him a renewed vision and proven experience. With a heart for innovation and genuine public service, he is set to lead the province toward even greater growth and opportunities for all.
                        </p>
                    </div>
                    <button class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition">
                        <span>Alamin ang iba pang programa</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- 📊 STATS HIGHLIGHT OVERVIEW --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-6 shadow-sm border border-blue-100 hover:shadow-lg hover:-translate-y-1 transition duration-300">
                <div class="text-xs font-bold text-blue-400 uppercase tracking-wider">Kabuuan ng Lupa</div>
                <div class="text-3xl font-black text-blue-900 mt-2">5,497.03 km²</div>
                <div class="text-xs text-slate-500 mt-1">30.4% – 34.0% ng Bicol Landmass (#16 sa buong PH)</div>
            </div>

            <div class="bg-gradient-to-br from-white to-emerald-50 rounded-2xl p-6 shadow-sm border border-emerald-100 hover:shadow-lg hover:-translate-y-1 transition duration-300">
                <div class="text-xs font-bold text-emerald-400 uppercase tracking-wider">Kabuuan ng Populasyon</div>
                <div class="text-3xl font-black text-emerald-600 mt-2">2,063,314</div>
                <div class="text-xs text-slate-500 mt-1">34.01% ng Bicol Region (#11 sa buong PH)</div>
            </div>

            <div class="bg-gradient-to-br from-white to-amber-50 rounded-2xl p-6 shadow-sm border border-amber-100 hover:shadow-lg hover:-translate-y-1 transition duration-300">
                <div class="text-xs font-bold text-amber-400 uppercase tracking-wider">Provincial GDP</div>
                <div class="text-3xl font-black text-amber-600 mt-2">₱218.95B</div>
                <div class="text-xs text-slate-500 mt-1">33.4% Share sa Bicol GDP (#1 Regional Rank)</div>
            </div>

            <div class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl p-6 shadow-sm border border-indigo-100 hover:shadow-lg hover:-translate-y-1 transition duration-300">
                <div class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Employment Rate</div>
                <div class="text-3xl font-black text-indigo-600 mt-2">94.2%</div>
                <div class="text-xs text-slate-500 mt-1">1.12M Employed sa 1.21M Labor Force</div>
            </div>
        </div>

        {{-- 🏔️ GEOGRAPHIC FOUNDATIONS --}}
        <section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-blue-50 text-blue-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/Locaation.png') }}" alt="Geography Icon" class="w-7 h-7 object-contain" onerror="this.style.display='none'">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Executive Overview &amp; Geographic Foundations</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Heograpiya, mga pangunahing bundok, at mga uri ng klima sa lalawigan</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-slate-50/80 rounded-2xl p-5 border border-slate-200/80 space-y-3">
                    <h3 class="font-bold text-slate-800 text-base flex items-center gap-2"><span>🏔️</span> Geomorphological Features</h3>
                    <ul class="text-xs text-slate-600 space-y-2.5 list-disc list-inside leading-relaxed">
                        <li><strong>Mount Isarog:</strong> Extinct stratovolcano na may taas na 2,011.7 meters.</li>
                        <li><strong>Mount Iriga / Asog:</strong> Stratovolcano na may taas na 1,196.0 meters.</li>
                        <li><strong>Mount Bernacci (Tangcong Vaca):</strong> Central western highland corridor.</li>
                        <li><strong>Caramoan Peninsula:</strong> Rugged karst topography at protected marine park.</li>
                    </ul>
                </div>

                <div class="bg-slate-50/80 rounded-2xl p-5 border border-slate-200/80 space-y-3">
                    <h3 class="font-bold text-slate-800 text-base flex items-center gap-2"><span>🌦️</span> Climate &amp; Weather Regimes</h3>
                    <ul class="text-xs text-slate-600 space-y-2.5 list-disc list-inside leading-relaxed">
                        <li><strong>Modified Type II (North/East Coast):</strong> Walang dry season; malakas na ulan mula Hulyo hanggang Disyembre.</li>
                        <li><strong>Modified Type IV (West Valley):</strong> Pantay ang buhos ng ulan sa buong taon.</li>
                        <li><strong>Average Temperature:</strong> Naglalaro sa 27.0°C hanggang 30.0°C.</li>
                    </ul>
                </div>

                <div class="bg-slate-50/80 rounded-2xl p-5 border border-slate-200/80 space-y-3">
                    <h3 class="font-bold text-slate-800 text-base flex items-center gap-2"><span>📍</span> Boundaries &amp; Capital</h3>
                    <ul class="text-xs text-slate-600 space-y-2.5 list-disc list-inside leading-relaxed">
                        <li><strong>Kabisera (Capital):</strong> Pili (May 99,196 kabuuang populasyon).</li>
                        <li><strong>Pinakamalaking LGU:</strong> Libmanan (34,282 hectares).</li>
                        <li><strong>Pinakamaliit na LGU:</strong> Camaligan (4.68 km²).</li>
                        <li><strong>Hangganan:</strong> San Miguel Bay, Lagonoy Gulf, Albay, Ragay Gulf, at CamNorte.</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- 🗺️ TOPOGRAPHY --}}
        <section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-6">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-indigo-50 text-indigo-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/Topography.png') }}" alt="Topography Icon" class="w-7 h-7 object-contain" onerror="this.style.display='none'">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Topography</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Elevation profiles across coastal, basin, highland, and karst terrain zones</p>
                </div>
            </div>

            <div class="space-y-4 flex flex-col md:flex-row items-center">
                <div class="flex-1 flex flex-col gap-4 items-start justify-start px-4 sm:px-20">
                    <p style="text-align: justify; text-justify: inter-word;" class="text-sm leading-relaxed">Camarines Sur is hilly and mountainous with a flat central area known as the Bikol plain. It is generally flat at the midsection, between mountain ranges, with other small coastal plains on the northeastern coast. These areas are circumscribed by rolling hills. The ravines are deep, while steep slopes are covered only by cogon. Mangroves and nipa swamps form along both coasts of the province. The Caramoan peninsula is rough and mountainous with an elevation as high as 904 meters above sea level. The Ragay coast, meanwhile, is hilly and rolling.
                    </p>
                    <p style="text-align: justify; text-justify: inter-word;" class="text-sm leading-relaxed">The province has two inactive volcanoes in its central and southern part, namely Mt. Isarog, with an elevation of 1, 976 meters, and Mt. Iriga, with an elevation of 1, 196 meters. Two mountain ranges also envelope the province. The Tangkong Baka mountain range, which is the lower portion of the Sierra Madre mountain system, and the Calinigan Mountain Range (904 meters), which is located in the Partido area. Other mountains in the province are Mt. Sugutin (366 meters), Mt. Tiis (610 meters), Saddle Peak (1,028 meters), Triple Peak (638 meters), Mt. Putianay (640 meters), Mt. Elizario (508 meters), and Mt. Talitig (385 meters).</p>
                </div>

                <div class="flex-1 mt-6 md:mt-0 relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-slate-100 h-96">
                    <div class="absolute inset-0">
                        <div class="topo-slide absolute inset-0 transition-all duration-500 ease-in-out" id="topo-slide-0">
                            <img src="{{ asset('/img/icons/profile/aa.png') }}" alt="Elevation Map Coastal" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                            <div class="absolute bottom-0 inset-x-0 p-3 text-center text-sm font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Coastal Elevation</div>
                        </div>
                        <div class="topo-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="topo-slide-1">
                            <img src="{{ asset('/img/icons/profile/bb.png') }}" alt="Elevation Map Basin" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                            <div class="absolute bottom-0 inset-x-0 p-3 text-center text-sm font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Bicol Plain Basin</div>
                        </div>
                        <div class="topo-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="topo-slide-2">
                            <img src="{{ asset('/img/icons/profile/cc.png') }}" alt="Elevation Map Highlands" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                            <div class="absolute bottom-0 inset-x-0 p-3 text-center text-sm font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Highland Volcanic Slopes</div>
                        </div>
                        <div class="topo-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="topo-slide-3">
                            <img src="{{ asset('/img/icons/profile/dd.png') }}" alt="Elevation Map Karst" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                            <div class="absolute bottom-0 inset-x-0 p-3 text-center text-sm font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Karst &amp; Peninsulas</div>
                        </div>
                    </div>
                    <button onclick="moveTopo(-1)" class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white hover:scale-105 transition z-10 font-bold">&lt;</button>
                    <button onclick="moveTopo(1)" class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white hover:scale-105 transition z-10 font-bold">&gt;</button>
                </div>
            </div>
        </section>

        {{-- 💧 HYDROGRAPHY --}}
        <section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-blue-50 text-blue-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/Hydrography.png') }}" alt="Hydrography Icon" class="w-7 h-7 object-contain" onerror="this.style.display='none'">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Hydrography</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Mga pangunahing ilog, dagat-dagatan, at freshwater ecosystems ng lalawigan</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-7 space-y-6">
                    <div class="p-5 bg-blue-50/50 rounded-2xl border border-blue-100/80 space-y-2">
                        <h3 class="font-bold text-blue-950 text-sm">🌊 The Bicol River System</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Ang pangunahing drainage basin ng lalawigan na dumadaloy mula sa Mount Mayon at Lake Bato patungong San Miguel Bay, na nagbibigay-tubig sa malawak na alluvial rice plains.</p>
                    </div>
                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 space-y-3">
                        <h3 class="font-bold text-slate-800 text-sm">🐟 Major Inland Lakes &amp; Unique Species</h3>
                        <ul class="space-y-2 text-xs text-slate-600 list-disc list-inside">
                            <li><strong>Lake Buhi:</strong> Tahanan ng <em>Sinarapan</em> (<em>Mistichthys luzonensis</em>), ang pinakamaliit na komersyal na isda sa buong mundo.</li>
                            <li><strong>Lake Bato:</strong> Pangunahing freshwater fishery hub sa timog-kanlurang bahagi ng lalawigan.</li>
                            <li><strong>Lake Baao:</strong> Shallow freshwater wetland basin na mahalaga sa flood regulation at biodiversity.</li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-4">
                    <div class="flex items-center gap-2 text-slate-800 font-bold text-base">
                        <img src="{{ asset('/img/icons/profile/Hydrography.png') }}" alt="Hydrography Map Icon" class="w-6 h-6 object-contain" onerror="this.style.display='none'">
                        <h3>Hydrography Maps</h3>
                    </div>
                    <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-slate-100 h-80">
                        <div class="absolute inset-0">
                            <div class="hydro-slide absolute inset-0 transition-all duration-500 ease-in-out" id="hydro-slide-0">
                                <img src="{{ asset('/img/icons/profile/11.png') }}" alt="Hydrography Map 1" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                                <div class="absolute bottom-0 inset-x-0 p-3 text-center text-xs font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Bicol River Basin Map</div>
                            </div>
                            <div class="hydro-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-1">
                                <img src="{{ asset('/img/icons/profile/22.png') }}" alt="Hydrography Map 2" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                                <div class="absolute bottom-0 inset-x-0 p-3 text-center text-xs font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Lake Buhi Water System</div>
                            </div>
                            <div class="hydro-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-2">
                                <img src="{{ asset('/img/icons/profile/33.png') }}" alt="Hydrography Map 3" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                                <div class="absolute bottom-0 inset-x-0 p-3 text-center text-xs font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Lake Bato Drainage</div>
                            </div>
                            <div class="hydro-slide absolute inset-0 transition-all duration-500 ease-in-out opacity-0 pointer-events-none" id="hydro-slide-3">
                                <img src="{{ asset('/img/icons/profile/44.png') }}" alt="Hydrography Map 4" class="w-full h-full object-contain" onerror="this.parentElement.style.background='#e2e8f0'">
                                <div class="absolute bottom-0 inset-x-0 p-3 text-center text-xs font-bold text-slate-700 bg-white/90 backdrop-blur-sm border-t border-slate-200">Baao Wetland Basin</div>
                            </div>
                        </div>
                        <button onclick="moveHydro(-1)" class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white hover:scale-105 transition z-10 font-bold">&lt;</button>
                        <button onclick="moveHydro(1)" class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white hover:scale-105 transition z-10 font-bold">&gt;</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- 🌱 SOIL PROFILE & LAND CLASSIFICATION --}}
        <section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-amber-50 text-amber-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/Soil.png') }}" alt="Soil Icon" class="w-7 h-7 object-contain" onerror="this.style.display='none'">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Soil Profile &amp; Land Classification</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Uri ng lupa, paggamit ng lupain, at klasipikasyon ng land cover sa lalawigan</p>
                </div>
            </div>

            {{-- Land Use Classification --}}
            <div class="space-y-4">
                <h3 class="text-md font-bold text-slate-600 tracking-wider">Land Use Classification</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-5 bg-emerald-50 rounded-2xl border border-emerald-100 text-center space-y-1">
                        <div class="text-3xl font-black text-emerald-700">54.2%</div>
                        <div class="text-xs font-bold text-emerald-900 uppercase tracking-wide">Agricultural Land</div>
                        <div class="text-[11px] text-slate-500">~298,000 ha</div>
                    </div>
                    <div class="p-5 bg-green-50 rounded-2xl border border-green-100 text-center space-y-1">
                        <div class="text-3xl font-black text-green-700">29.8%</div>
                        <div class="text-xs font-bold text-green-900 uppercase tracking-wide">Forest Land</div>
                        <div class="text-[11px] text-slate-500">~164,000 ha — Protected Reserves</div>
                    </div>
                    <div class="p-5 bg-indigo-50 rounded-2xl border border-indigo-100 text-center space-y-1">
                        <div class="text-3xl font-black text-indigo-700">9.1%</div>
                        <div class="text-xs font-bold text-indigo-900 uppercase tracking-wide">Built-up / Urban</div>
                        <div class="text-[11px] text-slate-500">~50,000 ha — LGU Centers</div>
                    </div>
                    <div class="p-5 bg-blue-50 rounded-2xl border border-blue-100 text-center space-y-1">
                        <div class="text-3xl font-black text-blue-700">6.9%</div>
                        <div class="text-xs font-bold text-blue-900 uppercase tracking-wide">Inland Water &amp; Wetlands</div>
                        <div class="text-[11px] text-slate-500">~38,000 ha — Lakes &amp; Rivers</div>
                    </div>
                </div>
            </div>



            {{-- Soil Classification Groups --}}
            <div class="pt-6 space-y-4">
                <h3 class="text-sm font-bold text-slate 600 uppercase tracking-wider">Soil Classification Groups</h3>
                <p class="text-md text-justify text-slate-600 leading-relaxed">Soil texture ranges from clayey to gravelly. The Bicol plain consists of loam, clay loam, and deposits with silt materials along the banks of the Bicol River. Generally, the surface is moderately dense and compact. The plains and valleys of Camarines Sur are covered by secondary soils, while its hills and mountains are covered by primary soils. The soils of the province are divided into 3 general groups, namely:</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-amber-50 p-4 rounded-2xl">
                    <p class="font-bold text-amber-600 text-md">Group A: Alluvial Plains Soil</p>
                    <div class="items-center p-5">
                        <img src="{{ asset('/img/icons/profile/A.png') }}" alt="Group A Soil" class="w-full object-contain mb-3 self-center justify-center" onerror="this.style.display='none'; document.getElementById('soil-a-badge').style.display='flex'">
                        <p class="text-sm italic font-bold text-slate-600 leading-relaxed">Pili, San Miguel, Guigua, or Balongay series</p>
                        <p class="text-sm text-justify text-slate-600 leading-relaxed">May <b>mataas na fertility</b> at angkop para sa produksyon ng <b>Palay</b>, <b>Sugarcane</b>, at mga <b>gulay</b> sa central plain valley.</p>
                    </div>
                </div>

                <div class="bg-green-50 p-4 rounded-2xl">
                    <p class="font-bold text-green-600 text-md">Group B: Volcanic Foot-slope Soil</p>
                    <div class="items-center p-5">
                        <img src="{{ asset('/img/icons/profile/B.png') }}" alt="Group B Soil" class="w-full object-contain mb-3 self-center justify-center" onerror="this.style.display='none'; document.getElementById('soil-b-badge').style.display='flex'">
                        <p class="text-sm italic font-bold text-slate-600 leading-relaxed">Tigaon, Bacolod, Faraon and Luisana series</p>
                        <p class="text-sm text-justify text-slate-600 leading-relaxed">Matatagpuan sa paanan ng <b>Mount Isarog at Iriga</b>; perpekto para sa <b>Niyog</b>, <b>Corn</b>, <b>Abaca</b>, at mga <b>high-value fruit trees</b>.</p>
                    </div>
                </div>

                <div class="bg-red-50 p-4 rounded-2xl">
                    <p class="font-bold text-red-600 text-md">Group C: Upland Karst &amp; Hilly Soil</p>
                    <div class="items-center p-5">
                        <img src="{{ asset('/img/icons/profile/C.png') }}" alt="Group C Soil" class="w-full object-contain mb-3 self-center justify-center" onerror="this.style.display='none'; document.getElementById('soil-c-badge').style.display='flex'">
                        <p class="text-sm italic font-bold text-slate-600 leading-relaxed">Hydrosol or undifferentiated mountain soil</p>
                        <p class="text-sm text-justify text-slate-600 leading-relaxed">Nakatutok sa <b>Caramoan at Ragay areas</b>; nakalaan para sa <b>forest reserves</b>, <b>ecotourism</b>, at <b>pasture lands</b>.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Demographics & Macroeconomic Performance --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Demographics --}}
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="p-3 bg-emerald-50 text-emerald-700 rounded-2xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-900">Demographics & Human Capital</h2>
                        <p class="text-xs text-slate-500">Istruktura ng populasyon at lakas-paggawa sa lalawigan</p>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="bg-emerald-50/50 rounded-2xl p-5 border border-emerald-100 space-y-3">
                        <div class="flex justify-between items-center text-xs font-bold text-slate-700">
                            <span>AGE STRUCTURE BREAKDOWN</span>
                            <span class="text-emerald-700 font-black">Median Age: 21.65 yrs</span>
                        </div>
                        <div class="space-y-3 text-xs">
                            <div>
                                <div class="flex justify-between text-slate-600 mb-1">
                                    <span>Working-Age (15–64 yrs)</span>
                                    <span class="font-bold text-slate-900">58.70% (1,146,051)</span>
                                </div>
                                <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                                    <div class="bg-emerald-600 h-2.5 rounded-full" style="width: 58.7%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-slate-600 mb-1">
                                    <span>Youth Dependents (&lt;15 yrs)</span>
                                    <span class="font-bold text-slate-900">36.35% (709,724)</span>
                                </div>
                                <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 36.35%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-slate-600 mb-1">
                                    <span>Senior Citizens (65+ yrs)</span>
                                    <span class="font-bold text-slate-900">4.96% (96,769)</span>
                                </div>
                                <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                                    <div class="bg-amber-500 h-2.5 rounded-full" style="width: 4.96%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <span class="text-slate-400 font-bold block mb-0.5">LITERACY RATE</span>
                            <span class="text-2xl font-black text-slate-800">98.50%</span>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <span class="text-slate-400 font-bold block mb-0.5">HOUSEHOLDS</span>
                            <span class="text-2xl font-black text-slate-800">436,871</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Macroeconomic Performance --}}
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="p-3 bg-amber-50 text-amber-700 rounded-2xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-900">Macroeconomic & Sector Output</h2>
                        <p class="text-xs text-slate-500">Agrikultura, industriya, at mga bagong pasilidad sa Pili</p>
                    </div>
                </div>

                <div class="space-y-4 text-xs">
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 flex justify-between items-center">
                        <div class="space-y-0.5">
                            <p class="font-bold text-slate-800 text-sm">Agriculture, Forestry & Fishing (AFF)</p>
                            <p class="text-slate-500">Palay (665k MT), Niyog (322k MT), Sugarcane (239k MT), Mais (125k MT)</p>
                        </div>
                        <span class="px-3 py-1 bg-amber-100 text-amber-900 font-black rounded-xl text-xs shrink-0">43.0% Share</span>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 flex justify-between items-center">
                        <div class="space-y-0.5">
                            <p class="font-bold text-slate-800 text-sm">Services Sector Output</p>
                            <p class="text-slate-500">Trade, tourism, education, finance, at digital hubs</p>
                        </div>
                        <span class="px-3 py-1 bg-blue-100 text-blue-900 font-black rounded-xl text-xs shrink-0">34.1% Share</span>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 flex justify-between items-center">
                        <div class="space-y-0.5">
                            <p class="font-bold text-slate-800 text-sm">Industry & High-Tech Manufacturing</p>
                            <p class="text-slate-500">Google Chromebook Assembly & TESDA e-Vehicle Facility sa Pili</p>
                        </div>
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-900 font-black rounded-xl text-xs shrink-0">28.2% Share</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- INFRASTRUCTURE, DIGITAL & RESILIENCY --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Infrastructure & Digital --}}
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="p-3 bg-indigo-50 text-indigo-700 rounded-2xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10 10 0 0114.142 0M2.828 9.9a15 15 0 0121.214 0"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-900">Infrastructure & Digital Network</h2>
                        <p class="text-xs text-slate-500">Network ng kalsada at connectivity sa malalayong lugar</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 text-xs">
                    <div class="p-4 bg-indigo-50/50 rounded-2xl border border-indigo-100 space-y-1">
                        <p class="font-bold text-indigo-950">Kabuuan ng Kalsada</p>
                        <p class="text-2xl font-black text-indigo-700">1,387.90 km</p>
                        <p class="text-[11px] text-slate-500">National: 651.73 km | Provincial: 349.23 km</p>
                    </div>
                    <div class="p-4 bg-indigo-50/50 rounded-2xl border border-indigo-100 space-y-1">
                        <p class="font-bold text-indigo-950">GIDA Satellite Terminals</p>
                        <p class="text-2xl font-black text-indigo-700">250 LEO Sites</p>
                        <p class="text-[11px] text-slate-500">Nakatayo sa Baao, Buhi, at Caramoan Islands</p>
                    </div>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl text-xs space-y-2 border border-slate-200">
                    <div class="flex justify-between items-center">
                        <span class="text-slate-600">Free Wi-Fi Active Sites:</span>
                        <span class="font-bold text-slate-900">2,500 sites across 873 locations</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-600">Registered eGov Users:</span>
                        <span class="font-bold text-slate-900">&gt;137,000 citizens</span>
                    </div>
                </div>
            </div>

            {{-- Disaster Resiliency --}}
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="p-3 bg-rose-50 text-rose-700 rounded-2xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-900">Climate Resiliency Infrastructure</h2>
                        <p class="text-xs text-slate-500">Ligtas na mga pasilidad para sa paghahanda sa sakuna</p>
                    </div>
                </div>

                <div class="p-5 bg-rose-50/50 rounded-2xl border border-rose-100 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-rose-950">Permanent Evacuation Facilities</p>
                        <p class="text-3xl font-black text-rose-700 mt-1">301 Dedicated Centers</p>
                        <p class="text-xs text-slate-600 mt-1">Malamig at storm-resistant centers upang hindi maabala ang klase sa mga paaralan.</p>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3 text-center text-xs">
                    <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-black text-slate-900 text-lg block">41</span>
                        <span class="text-slate-500">Magarao Facilities</span>
                    </div>
                    <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-black text-slate-900 text-lg block">38</span>
                        <span class="text-slate-500">Pamplona Facilities</span>
                    </div>
                    <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-black text-slate-900 text-lg block">17</span>
                        <span class="text-slate-500">San Jose Facilities</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- ECOTOURISM & LEGISLATIVE DISTRICTS --}}
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-sky-50 text-sky-700 rounded-2xl shrink-0">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 18.618V7.882a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Ecotourism Assets & Administrative Division</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Mga destinasyon ng turismo, Peñafrancia pilgrimage, at 5 Congressional Districts</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-4 text-xs">
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-bold text-slate-900 text-sm block mb-1">🏖️ Caramoan Ecotourism Zone</span>
                        <p class="text-slate-600 leading-relaxed">Isang sikat na marine park na may limestone karst formations; 5-time host location ng internasyonal na palabas na <em>Survivor</em> at nagtatala ng libo-libong tourist arrivals.</p>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-bold text-slate-900 text-sm block mb-1">🏄 CamSur Watersports Complex (CWC)</span>
                        <p class="text-slate-600 leading-relaxed">Ang kauna-unahang world-class wakeboarding at watersports complex sa Asia na matatagpuan sa Kapitolyo sa Pili.</p>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                        <span class="font-bold text-slate-900 text-sm block mb-1">⛪ Peñafrancia Regional Pilgrimage</span>
                        <p class="text-slate-600 leading-relaxed">Nagtatala ng higit sa 1.8 milyong pilgrims taun-taon tuwing Setyembre sa Lungsod ng Naga bilang sentro ng Marian devotion sa Bicol.</p>
                    </div>
                </div>

                {{-- CONGRESSIONAL DISTRICT MAP --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 text-center space-y-4">
                    <img src="{{ asset('/img/icons/profile/Maap.png') }}" alt="Congressional District Map" class="max-h-80 w-auto mx-auto object-contain rounded-xl shadow-sm">
                    <div>
                        <h4 class="text-sm font-bold text-slate-800">Political Boundary & Congressional Map</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Binubuo ng 2 Lungsod (Naga, Iriga), 35 Munisipalidad, 1,063 Barangays, at 5 Congressional Districts</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- HISTORY & GOVERNANCE --}}
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5">
                <div class="p-3.5 bg-fuchsia-50 text-fuchsia-700 rounded-2xl shrink-0">
                    <img src="{{ asset('/img/icons/profile/GovOld.png') }}" alt="Governance Icon" class="w-7 h-7 object-contain">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">History & Local Governance</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Pamahalaang panlalawigan at mahahalagang bahagi ng kasaysayan</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-50/80 rounded-2xl p-6 border border-slate-200/80 space-y-3">
                    <h3 class="font-bold text-slate-800 text-base flex items-center gap-2">
                        <span>📜</span> Historical Foundation
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Itinatag noong Mayo 27, 1569, ang Camarines Sur ang pinakamatandang lalawigan sa Bicol Region. Kilala bilang Ambos Camarines bago tuluyang nahati sa Norte at Sur noong 1920.
                    </p>
                </div>

                <div class="bg-slate-50/80 rounded-2xl p-6 border border-slate-200/80 space-y-3">
                    <h3 class="font-bold text-slate-800 text-base flex items-center gap-2">
                        <span>🏛️</span> Provincial Capitol
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Matatagpuan sa Cadlan, Pili ang modernong Kapitolyo ng lalawigan na nagsisilbing sentro ng maayos na pamamahala at mabilis na serbisyo para sa mga mamamayan.
                    </p>
                </div>
            </div>
        </div>

        {{-- TOWNS & CITIES SECTION --}}
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200 space-y-8">
            <div class="flex items-center gap-4 border-b border-slate-100 pb-5 mb-4">
                <div class="p-3.5 bg-green-50 text-green-700 rounded-2xl shrink-0">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Towns &amp; Cities</h2>
                    <p class="text-sm text-slate-500 mt-0.5">Area breakdown in Hectares (Ha)</p>
                </div>
            </div>
            <div class="mb-4">
                <input type="text" id="townSearch" placeholder="Search town..." class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500" onkeyup="filterTowns()" />
            </div>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Town / City</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Area (ha)</th>
                        </tr>
                    </thead>
                    <tbody id="townsTableBody" class="text-sm text-slate-700"></tbody>
                </table>
            </div>
        </div>
        <script>
            const townsData = [
                {name: 'baao', area: '10,663 ha'},
                {name: 'balatan', area: '9,309 ha'},
                {name: 'bato', area: '10,712 ha'},
                {name: 'bombon', area: '2,873 ha'},
                {name: 'buhi', area: '24,665 ha'},
                {name: 'bula', area: '16,764 ha'},
                {name: 'cabuso', area: '4,680 ha'},
                {name: 'calabanga', area: '16,380 ha'},
                {name: 'camaligan', area: '468 ha'},
                {name: 'canaman', area: '4,327 ha'},
                {name: 'caramoan', area: '27,600 ha'},
                {name: 'del gallego', area: '20,831 ha'},
                {name: 'gainza', area: '1,475 ha'},
                {name: 'garchitorena', area: '24,380 ha'},
                {name: 'goa', area: '20,318 ha'},
                {name: 'iriga city', area: '13,735 ha'},
                {name: 'lagonoy', area: '37,790 ha'},
                {name: 'libmanan', area: '34,282 ha'},
                {name: 'lupi', area: '19,912 ha'},
                {name: 'magarao', area: '4,497 ha'},
                {name: 'milaor', area: '3,364 ha'},
                {name: 'minalabac', area: '12,610 ha'},
                {name: 'nabua', area: '9,620 ha'},
                {name: 'naga city', area: '8,448 ha'},
                {name: 'ocampo', area: '11,833 ha'},
                {name: 'pamplona', area: '8,060 ha'},
                {name: 'pasacao', area: '14,954 ha'},
                {name: 'pili', area: '12,625 ha'},
                {name: 'presentacion', area: '14,380 ha'},
                {name: 'ragay', area: '40,022 ha'},
                {name: 'sangay', area: '14,476 ha'},
                {name: 'san fernando', area: '7,176 ha'},
                {name: 'san jose', area: '4,307 ha'},
                {name: 'sipocot', area: '24,343 ha'},
                {name: 'siruma', area: '14,127 ha'},
                {name: 'tigaon', area: '7,235 ha'},
                {name: 'tinambac', area: '35,162 ha'}
            ];
            function renderTowns(filter = '') {
                const tbody = document.getElementById('townsTableBody');
                tbody.innerHTML = '';
                const filtered = townsData.filter(t => t.name.toLowerCase().includes(filter.toLowerCase()));
                filtered.forEach(t => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `<td class="px-4 py-2 border-t">${t.name}</td><td class="px-4 py-2 border-t">${t.area}</td>`;
                    tbody.appendChild(tr);
                });
            }
            function filterTowns() {
                const query = document.getElementById('townSearch').value;
                renderTowns(query);
            }
            document.addEventListener('DOMContentLoaded', () => renderTowns());
        </script>

    </div>
</div>

<script>
    // Topography Slideshow JS
    let topoIdx = 0;
    const topoSlides = ['topo-slide-0', 'topo-slide-1', 'topo-slide-2', 'topo-slide-3'];
    function moveTopo(dir) {
        document.getElementById(topoSlides[topoIdx]).classList.add('opacity-0', 'pointer-events-none');
        topoIdx = (topoIdx + dir + topoSlides.length) % topoSlides.length;
        document.getElementById(topoSlides[topoIdx]).classList.remove('opacity-0', 'pointer-events-none');
    }

    // Hydrography Slideshow JS
    let hydroIdx = 0;
    const hydroSlides = ['hydro-slide-0', 'hydro-slide-1', 'hydro-slide-2', 'hydro-slide-3'];
    function moveHydro(dir) {
        document.getElementById(hydroSlides[hydroIdx]).classList.add('opacity-0', 'pointer-events-none');
        hydroIdx = (hydroIdx + dir + hydroSlides.length) % hydroSlides.length;
        document.getElementById(hydroSlides[hydroIdx]).classList.remove('opacity-0', 'pointer-events-none');
    }
</script>

</x-guest-layout>
