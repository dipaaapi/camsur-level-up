{{-- 12-Month Year-Round Travel Calendar (Every Month Has a Unique Reason to Visit) --}}
@php
    $monthsCalendar = [
        1 => [
            'id' => 1,
            'name' => 'January',
            'localName' => 'Enero',
            'badge' => 'Cool Mountain & Waterfalls',
            'tagClass' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950/70 dark:text-emerald-300 border-emerald-500/30',
            'icon' => '🌿',
            'headline' => 'Cool Mountain Breezes & Waterfalls in Full Flow',
            'whyVisit' => 'Presko at komportableng klima para sa mountain trekking sa Mt. Isarog National Park, paglangoy sa malinis na Malabsay Falls, at nakakarelaks na pagbabad sa Panicuason Hot Springs.',
            'festival' => 'New Year Celebrations & Pasacao Coastal Fiestas',
            'activities' => ['Mt. Isarog Rainforest Trekking', 'Malabsay & Nabontolan Waterfalls', 'Panicuason Therapeutic Hot Springs'],
            'vibe' => 'Refreshing cool mountain air, lush green waterfalls, and tranquil nature escapes.'
        ],
        2 => [
            'id' => 2,
            'name' => 'February',
            'localName' => 'Pebrero',
            'badge' => 'Harvest Fiestas & Lakes',
            'tagClass' => 'bg-purple-100 text-purple-800 dark:bg-purple-950/70 dark:text-purple-300 border-purple-500/30',
            'icon' => '🎉',
            'headline' => 'Colorful Harvest Festivals & Romantic Lake Getaways',
            'whyVisit' => 'Puno ng sigla ang probinsya sa pagdiriwang ng Tinagba Festival sa Iriga City at Karanowan Festival sa Bato, kasabay ng payapang pamamangka sa Lake Buhi.',
            'festival' => 'Tinagba Festival (Iriga City, Feb 11) & Karanowan Festival (Bato, Feb 15)',
            'activities' => ['Tinagba Carabao/Bullcart Parade', 'Lake Buhi & Sinarapan Sanctuary Tour', 'Lake Bato Sunset Boat Cruise'],
            'vibe' => 'Festive street dancing, cultural thanksgiving, and scenic lake cruises.'
        ],
        3 => [
            'id' => 3,
            'name' => 'March',
            'localName' => 'Marso',
            'badge' => 'Island Hopping Kickoff',
            'tagClass' => 'bg-amber-100 text-amber-800 dark:bg-amber-950/70 dark:text-amber-300 border-amber-500/30',
            'icon' => '☀️',
            'headline' => 'Pristine Turquoise Seas & Caramoan Island Exploration',
            'whyVisit' => 'Pagsisimula ng maaliwalas na tag-araw! Tamang-tama para sa island hopping sa Caramoan Peninsula bago dumagsa ang peak crowd, na may kalmadong karagatan at puting buhangin.',
            'festival' => 'Lenten Heritage Pilgrimages & Garchitorena Town Fiesta',
            'activities' => ['Matukad, Lahos & Cotivas Island Hopping', 'CWC Wakeboarding Session', 'Caramoan Spelunking & Cliff Diving'],
            'vibe' => 'Sunny blue skies, crystal-clear water, and peaceful uncrowded beaches.'
        ],
        4 => [
            'id' => 4,
            'name' => 'April',
            'localName' => 'Abril',
            'badge' => 'Peak Summer & Watersports',
            'tagClass' => 'bg-orange-100 text-orange-800 dark:bg-orange-950/70 dark:text-orange-300 border-orange-500/30',
            'icon' => '🏄',
            'headline' => 'Ultimate Summer Sunshine & World-Class Cable Parks',
            'whyVisit' => 'Ang sentro ng extreme summer sports sa Pilipinas. Tangkilikin ang cable wakeboarding sa CWC, snorkeling sa Caramoan marine sanctuaries, at summer beach camps.',
            'festival' => 'Semana Santa Holy Week Pilgrimages & Summer Youth Camps',
            'activities' => ['CWC 6-Point Cable Wakeboarding', 'Sabang Beach Watersports', 'Caramoan Coral Reef Snorkeling'],
            'vibe' => 'Energetic summer vibes, thrilling watersports, and abundant sunshine.'
        ],
        5 => [
            'id' => 5,
            'name' => 'May',
            'localName' => 'Mayo',
            'badge' => 'Grand Kaogma Festival',
            'tagClass' => 'bg-rose-100 text-rose-800 dark:bg-rose-950/70 dark:text-rose-300 border-rose-500/30',
            'icon' => '🎊',
            'headline' => 'Kaogma Festival: The World\'s Hottest Festival',
            'whyVisit' => 'Ang pinakamalaking pagdiriwang ng pagkakatatag ng Camarines Sur! Linggo-linggong street dancing, live concerts, culinary competitions, at fireworks sa Capitol Complex sa Pili.',
            'festival' => 'Kaogma Festival (Provincial Foundation Anniversary, May 21–27)',
            'activities' => ['Kaogma Mardi Gras & Street Dancing', 'Capitol Night Food & Music Expo', 'Flores de Mayo Cultural Parades'],
            'vibe' => 'Province-wide euphoria, world-class entertainment, and non-stop celebration.'
        ],
        6 => [
            'id' => 6,
            'name' => 'June',
            'localName' => 'Hunyo',
            'badge' => 'Heritage & City Escapes',
            'tagClass' => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-950/70 dark:text-indigo-300 border-indigo-500/30',
            'icon' => '🏛️',
            'headline' => 'Rich Bicolano Heritage, Historical Landmarks & Food Walks',
            'whyVisit' => 'Perpektong buwan para sa heritage walks sa Naga City — bisitahin ang Naga Metropolitan Cathedral, Museo Conciliar del Seminario de Nueva Caceres, at tikman ang lokal na Kinalas.',
            'festival' => 'Naga City Charter Anniversary & Provincial Heritage Month',
            'activities' => ['Naga City Historical Walking Tour', 'Kinalas Food Crawl & Local Cafes', 'Holy Rosary Minor Seminary Museum'],
            'vibe' => 'Rich colonial architecture, culinary discoveries, and relaxed urban pace.'
        ],
        7 => [
            'id' => 7,
            'name' => 'July',
            'localName' => 'Hulyo',
            'badge' => 'Hot Springs & Comfort Food',
            'tagClass' => 'bg-teal-100 text-teal-800 dark:bg-teal-950/70 dark:text-teal-300 border-teal-500/30',
            'icon' => '♨️',
            'headline' => 'Therapeutic Volcanic Springs & Warm Bicolano Delicacies',
            'whyVisit' => 'Tamang-tama ang preskong panahon para magbabad sa natural volcanic hot springs ng Panicuason sa paanan ng Mt. Isarog at kumain ng mainit at maanghang na Bicol Express at Pinangat.',
            'festival' => 'Town Fiestas in Bato, Buhi & Ocampo',
            'activities' => ['Panicuason Forest Hot Springs Relaxation', 'Authentic Bicol Express Cooking Demos', 'Lake Bato Freshwater Tilapia Feast'],
            'vibe' => 'Cozy wellness retreats, comforting savory food trips, and serene green vistas.'
        ],
        8 => [
            'id' => 8,
            'name' => 'August',
            'localName' => 'Agosto',
            'badge' => 'Agro-Tourism & Pili Harvest',
            'tagClass' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-950/70 dark:text-yellow-300 border-yellow-500/30',
            'icon' => '🥜',
            'headline' => 'Fresh Pili Harvest Season & Agro-Farm Discoveries',
            'whyVisit' => 'Tuklasin ang industriya ng katutubong Pili Nut sa kabisera ng Pili at mga sakahan sa Rinconada. Tikman ang bagong pitas na Pili, mazapan, at bisitahin ang mga eco-farm.',
            'festival' => 'Pili Town Fiesta & Buhi Agro-Eco Fair',
            'activities' => ['Pili Nut Processing Plant & Souvenir Tours', 'Ocampo Strawberry & Eco-Farm Visits', 'Lake Buhi Kayaking & Tabios Discovery'],
            'vibe' => 'Farm-to-table culinary experiences, sweet native delicacies, and lush agriculture.'
        ],
        9 => [
            'id' => 9,
            'name' => 'September',
            'localName' => 'Setyembre',
            'badge' => 'Peñafrancia Festival (Asia\'s Biggest)',
            'tagClass' => 'bg-violet-100 text-violet-800 dark:bg-violet-950/70 dark:text-violet-300 border-violet-500/30',
            'icon' => '🕊️',
            'headline' => 'Peñafrancia Festival: Millions Unite in Faith & Celebration',
            'whyVisit' => 'Ang pinakamalaking Marian Festival sa buong Asya! Milyun-milyong deboto at turista ang dumadagsa sa Naga City para sa Translacion, Civic Parades, at Fluvial Procession sa Ilog Naga.',
            'festival' => 'Our Lady of Peñafrancia Festival & Fluvial Procession (Naga City)',
            'activities' => ['Peñafrancia Fluvial River Procession', 'Miss Bicolandia & Regional Pageants', 'Night Street Food Markets & Trade Fairs'],
            'vibe' => 'Deep spiritual devotion, electric festive energy, and world-renowned cultural pride.'
        ],
        10 => [
            'id' => 10,
            'name' => 'October',
            'localName' => 'Oktubre',
            'badge' => 'Eco-Adventures & Spelunking',
            'tagClass' => 'bg-sky-100 text-sky-800 dark:bg-sky-950/70 dark:text-sky-300 border-sky-500/30',
            'icon' => '🧗',
            'headline' => 'Cave Explorations, Lake Cruises & Nature Tranquility',
            'whyVisit' => 'Mag-explore sa mga limestone cave ng Caramoan tulad ng Culapnit Cave, mag-birdwatching sa Mt. Isarog, at tamasahin ang mapayapang pamamasyal na walang dagsa ng tao.',
            'festival' => 'Oktoberfest Local Beer & Food Celebrations sa Naga',
            'activities' => ['Caramoan Limestone Spelunking', 'Mt. Isarog Bird Watching & Trekking', 'Lake Buhi Floating Cottage Dining'],
            'vibe' => 'Peaceful nature connection, thrilling cave tours, and uncrowded destinations.'
        ],
        11 => [
            'id' => 11,
            'name' => 'November',
            'localName' => 'Nobyembre',
            'badge' => 'Cool Breeze & Eco-Parks',
            'tagClass' => 'bg-cyan-100 text-cyan-800 dark:bg-cyan-950/70 dark:text-cyan-300 border-cyan-500/30',
            'icon' => '🌲',
            'headline' => 'Crisp Mountain Breezes & Serene Eco-Park Escapes',
            'whyVisit' => 'Pagsisimula ng malamig na hanging amihan! Tamang-tama para sa overnight glamping sa Mt. Isarog foothills, cycling tours sa Rinconada, at pagbisita sa coastal eco-tourism parks.',
            'festival' => 'Pre-Christmas Fairs & Baao Heritage Celebrations',
            'activities' => ['Foothill Glamping & Campfire Nights', 'Rinconada Eco-Trail Biking', 'Naga City Evening Dining & Bistros'],
            'vibe' => 'Cool crisp mountain air, stargazing glamping, and scenic countryside tranquility.'
        ],
        12 => [
            'id' => 12,
            'name' => 'December',
            'localName' => 'Disyembre',
            'badge' => 'Holiday Lights & Pastores',
            'tagClass' => 'bg-red-100 text-red-800 dark:bg-red-950/70 dark:text-red-300 border-red-500/30',
            'icon' => '✨',
            'headline' => 'Spectacular Christmas Lights, Pastores Bicol & Night Markets',
            'whyVisit' => 'Mahiwagang Paskong Bicolano! Panoorin ang tradisyunal na Pastores Bicol street carolers, mamasyal sa grand Christmas light displays sa Capitol Grounds sa Pili, at mag-shopping ng pasalubong.',
            'festival' => 'Pastores Bicol Competitions, Paskuhan sa Capitol & Simbang Gabi',
            'activities' => ['Capitol Complex Holiday Lights & Fair', 'Pastores Caroling Street Dances', 'Plaza Quezon Holiday Night Bazaar'],
            'vibe' => 'Magical holiday illumination, warm family celebrations, and joyous festive spirit.'
        ],
    ];
@endphp

<section class="space-y-6" x-data="{ activeMonth: 3, viewMode: 'spotlight' }">
    <div class="border-b border-slate-200 pb-4 dark:border-slate-800">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">12-Month Travel Calendar</span>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white uppercase tracking-tight mt-1">
                    Camarines Sur: A Year-Round Destination
                </h2>
                <p class="text-sm text-slate-600 dark:text-slate-300 mt-1 font-normal max-w-2xl leading-relaxed">
                    Walang pinipiling buwan ang pagbisita sa Camarines Sur! Bawat buwan ng taon ay may kani-kaniyang natatanging pista, pampasiglang aktibidad, at magagandang dahilan para maglakbay.
                </p>
            </div>
            <div class="flex items-center gap-2">
                <button type="button" @click="viewMode = 'spotlight'"
                    :class="viewMode === 'spotlight' ? 'bg-amber-600 text-white shadow-md' : 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300'"
                    class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all cursor-pointer">
                    Monthly Spotlight
                </button>
                <button type="button" @click="viewMode = 'grid'"
                    :class="viewMode === 'grid' ? 'bg-amber-600 text-white shadow-md' : 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300'"
                    class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all cursor-pointer">
                    View All 12 Months
                </button>
            </div>
        </div>
    </div>

    {{-- Interactive 12-Month Calendar Bar Selector --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-4 sm:p-5 shadow-sm dark:border-slate-800 dark:bg-slate-800/90">
        <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-100 dark:border-slate-700/60">
            <span class="text-xs font-black uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Pumili ng Buwan (Select Any Month)
            </span>
            <span class="text-[11px] text-slate-500 dark:text-slate-400 font-medium">I-click ang buwan para makita ang mga atraksyon</span>
        </div>

        <div class="grid grid-cols-2 xs:grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-2">
            @foreach($monthsCalendar as $mId => $mInfo)
                <button type="button"
                    @click="activeMonth = {{ $mId }}; viewMode = 'spotlight'"
                    :class="activeMonth === {{ $mId }} ? 'ring-2 ring-amber-500 bg-amber-50 dark:bg-amber-950/40 shadow-md scale-[1.03]' : 'bg-slate-50 dark:bg-slate-900/80 hover:bg-slate-100 dark:hover:bg-slate-800'"
                    class="rounded-2xl border border-slate-200 dark:border-slate-700 p-2.5 text-center transition-all duration-200 flex flex-col justify-between cursor-pointer" style="min-height: 86px;">
                    <div class="flex items-center justify-between w-full">
                        <span class="text-xs font-black text-slate-900 dark:text-white uppercase">{{ substr($mInfo['name'], 0, 3) }}</span>
                        <span class="text-sm">{{ $mInfo['icon'] }}</span>
                    </div>
                    <div class="my-1">
                        <span class="text-[9px] font-bold text-slate-500 dark:text-slate-400 line-clamp-1 block">{{ $mInfo['localName'] }}</span>
                    </div>
                    <div class="w-full h-1 rounded-full transition-colors"
                        :class="activeMonth === {{ $mId }} ? 'bg-amber-500' : 'bg-slate-200 dark:bg-slate-700'"></div>
                </button>
            @endforeach
        </div>
    </div>

    {{-- View Mode 1: Active Month Detailed Spotlight --}}
    <div x-show="viewMode === 'spotlight'" x-transition:enter="transition ease-out duration-300">
        @foreach($monthsCalendar as $mId => $mInfo)
            <div x-show="activeMonth === {{ $mId }}"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8 shadow-xl dark:border-slate-800 dark:bg-slate-800/95">
                
                {{-- Month Header Banner --}}
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100 dark:border-slate-700/80">
                    <div class="flex items-center gap-4">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-500 text-white text-3xl shadow-lg flex-shrink-0">
                            {{ $mInfo['icon'] }}
                        </div>
                        <div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Buwan {{ $mId }} · {{ $mInfo['localName'] }}</span>
                                <span class="rounded-full px-3 py-0.5 text-[10px] font-black uppercase tracking-wider border {{ $mInfo['tagClass'] }}">
                                    {{ $mInfo['badge'] }}
                                </span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-0.5">
                                {{ $mInfo['name'] }} in Camarines Sur
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-amber-700 dark:text-amber-400 mt-0.5">
                                {{ $mInfo['headline'] }}
                            </p>
                        </div>
                    </div>

                    {{-- Prev / Next Month Controls --}}
                    <div class="flex items-center gap-2 self-end md:self-auto">
                        <button type="button"
                            @click="activeMonth = activeMonth === 1 ? 12 : activeMonth - 1"
                            class="px-3 py-2 rounded-xl bg-slate-100 dark:bg-slate-700/80 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-bold transition-all flex items-center gap-1 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            <span>Nakaraan</span>
                        </button>
                        <button type="button"
                            @click="activeMonth = activeMonth === 12 ? 1 : activeMonth + 1"
                            class="px-3 py-2 rounded-xl bg-amber-600 hover:bg-amber-700 text-white text-xs font-bold transition-all flex items-center gap-1 cursor-pointer shadow-md">
                            <span>Susunod</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                {{-- 3-Column Highlights Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    
                    {{-- Column 1: Why Visit --}}
                    <div class="rounded-2xl bg-slate-50 dark:bg-slate-900/60 p-5 border border-slate-100 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-xs font-black uppercase tracking-wider text-amber-600 dark:text-amber-400">
                                <span>🌟</span>
                                <span>Bakit Magandang Bumisita?</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 dark:text-slate-300 leading-relaxed font-normal">
                                {{ $mInfo['whyVisit'] }}
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-200/60 dark:border-slate-800 text-[11px] font-bold text-slate-600 dark:text-slate-400 italic">
                            Atmosphere: {{ $mInfo['vibe'] }}
                        </div>
                    </div>

                    {{-- Column 2: Festivals & Celebrations --}}
                    <div class="rounded-2xl bg-purple-50/60 dark:bg-purple-950/20 p-5 border border-purple-100 dark:border-purple-900/40 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-xs font-black uppercase tracking-wider text-purple-700 dark:text-purple-400">
                                <span>🎪</span>
                                <span>Pista & Mga Kaganapan</span>
                            </div>
                            <h4 class="text-sm font-black text-slate-900 dark:text-white">
                                {{ $mInfo['festival'] }}
                            </h4>
                            <p class="text-xs text-slate-600 dark:text-slate-300 mt-2 leading-relaxed font-normal">
                                Maranasan ang makulay na tradisyong Bicolano, mga parada, sayawan sa kalye, at pagdiriwang ng pananampalataya.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-purple-200/60 dark:border-purple-900/50 text-[11px] font-bold text-purple-700 dark:text-purple-300">
                            Cultural Experience Guaranteed
                        </div>
                    </div>

                    {{-- Column 3: Recommended Activities --}}
                    <div class="rounded-2xl bg-blue-50/60 dark:bg-blue-950/20 p-5 border border-blue-100 dark:border-blue-900/40 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-xs font-black uppercase tracking-wider text-blue-700 dark:text-blue-400">
                                <span>🏄</span>
                                <span>Rekomendadong Gawin</span>
                            </div>
                            <ul class="space-y-2 mt-1">
                                @foreach($mInfo['activities'] as $act)
                                    <li class="flex items-center gap-2 text-xs text-slate-700 dark:text-slate-300 font-semibold">
                                        <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        <span>{{ $act }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-4 pt-3 border-t border-blue-200/60 dark:border-blue-900/50 text-[11px] font-bold text-blue-700 dark:text-blue-300">
                            Adventure & Leisure Ready
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- View Mode 2: All 12 Months Grid Overview --}}
    <div x-show="viewMode === 'grid'" x-transition:enter="transition ease-out duration-300" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach($monthsCalendar as $mId => $mInfo)
            <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between hover:shadow-lg transition-all duration-200">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-500 text-white text-xl shadow-md">
                            {{ $mInfo['icon'] }}
                        </span>
                        <span class="rounded-full px-2.5 py-0.5 text-[9px] font-black uppercase tracking-wider border {{ $mInfo['tagClass'] }}">
                            {{ substr($mInfo['name'], 0, 3) }} · {{ $mInfo['localName'] }}
                        </span>
                    </div>
                    <h4 class="text-base font-black text-slate-900 dark:text-white">{{ $mInfo['name'] }}</h4>
                    <div class="text-[11px] font-bold text-amber-600 dark:text-amber-400 mt-0.5">{{ $mInfo['badge'] }}</div>
                    <p class="text-xs text-slate-600 dark:text-slate-300 mt-2 leading-relaxed font-normal">
                        {{ $mInfo['whyVisit'] }}
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-700/80">
                    <button type="button" @click="activeMonth = {{ $mId }}; viewMode = 'spotlight'"
                        class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline flex items-center gap-1 cursor-pointer">
                        <span>Tingnan ang detalye</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</section>
