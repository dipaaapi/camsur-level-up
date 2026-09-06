{{-- Bicolano Culinary Guide: Must-Try Dishes & Delicacies --}}
<section class="space-y-6" x-data="{ activeFoodCat: 'all' }">
    <div class="border-b border-slate-200 pb-4 dark:border-slate-800">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="text-xs font-black uppercase tracking-widest text-rose-600 dark:text-rose-400">Culinary Heritage</span>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white uppercase tracking-tight mt-1">
                    Must-Try Bicolano Dishes & Delicacies
                </h2>
                <p class="text-sm text-slate-600 dark:text-slate-300 mt-1 font-normal max-w-2xl leading-relaxed">
                    Bicolano cuisine is renowned for its rich coconut milk (<em>gata</em>) and spicy bird's eye chilies (<em>siling labuyo</em>). Galugarin ang iba't ibang kategorya ng natatanging pagkaing CamSur.
                </p>
            </div>
        </div>

        {{-- Category Filter Buttons (Klase ng Pagkain) --}}
        <div class="mt-5 flex flex-wrap items-center gap-2">
            <button type="button" @click="activeFoodCat = 'all'"
                :class="activeFoodCat === 'all' ? 'bg-rose-600 text-white shadow-md shadow-rose-600/20 scale-[1.02]' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 border border-slate-200/80 dark:border-slate-700/80'"
                class="px-3.5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                <span>🌟</span>
                <span>Lahat ng Pagkain (9)</span>
            </button>

            <button type="button" @click="activeFoodCat = 'main'"
                :class="activeFoodCat === 'main' ? 'bg-rose-600 text-white shadow-md shadow-rose-600/20 scale-[1.02]' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 border border-slate-200/80 dark:border-slate-700/80'"
                class="px-3.5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                <span>🥥</span>
                <span>Pangunahing Ulam & Gata (5)</span>
            </button>

            <button type="button" @click="activeFoodCat = 'noodles'"
                :class="activeFoodCat === 'noodles' ? 'bg-rose-600 text-white shadow-md shadow-rose-600/20 scale-[1.02]' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 border border-slate-200/80 dark:border-slate-700/80'"
                class="px-3.5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                <span>🍜</span>
                <span>Pancit & Sabaw (2)</span>
            </button>

            <button type="button" @click="activeFoodCat = 'pasalubong'"
                :class="activeFoodCat === 'pasalubong' ? 'bg-rose-600 text-white shadow-md shadow-rose-600/20 scale-[1.02]' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 border border-slate-200/80 dark:border-slate-700/80'"
                class="px-3.5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                <span>🥜</span>
                <span>Pasalubong & Snacks (1)</span>
            </button>

            <button type="button" @click="activeFoodCat = 'dessert'"
                :class="activeFoodCat === 'dessert' ? 'bg-rose-600 text-white shadow-md shadow-rose-600/20 scale-[1.02]' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 border border-slate-200/80 dark:border-slate-700/80'"
                class="px-3.5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                <span>🍨</span>
                <span>Panghimagas & Sweets (1)</span>
            </button>
        </div>
    </div>

    {{-- 9 Food Cards Grid with High-Contrast Light/Dark Support, Categories & Authentic Photos --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">

        {{-- 1. Tortang Sinarapan (Strictly Endemic to Lake Buhi, CamSur) --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'main'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-cyan-200/80 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-cyan-800/80 dark:bg-slate-800/90 flex flex-col justify-between relative ring-1 ring-cyan-500/20">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/tortang_sinarapan.jpg') }}" alt="Tortang Sinarapan" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-cyan-950/90 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-cyan-300 border border-cyan-400/40 shadow-md">CamSur Endemic Treasure</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-slate-900/85 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-cyan-300 border border-cyan-500/30">Ulam / Lake Buhi Native</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-cyan-600 dark:text-cyan-400 mb-1">World's Smallest Fish Delicacy</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-cyan-600 dark:group-hover:text-cyan-400">Tortang Sinarapan (Tabios)</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Crispy golden pan-fried patties made of thousands of whole <em>Sinarapan (Mistichthys luzonensis)</em>, the world's smallest edible fish found exclusively in Lake Buhi and Lake Bato, CamSur.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-cyan-700 dark:text-cyan-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Lake Buhi, Rinconada & Bato Restaurants</span>
                </div>
            </div>
        </div>

        {{-- 2. Bicol Express --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'main'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/bicol_express.jpg') }}" alt="Bicol Express Dish" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-rose-400 border border-rose-500/30 shadow-md">Spicy Classic</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-rose-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-rose-300 border border-rose-500/30">Ulam / Main Dish</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-rose-600 dark:text-rose-400 mb-1">Gata & Sili Classic</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-rose-600 dark:group-hover:text-rose-400">Bicol Express</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Pork strips slow-simmered in rich coconut cream, fermented shrimp paste (<em>bagoong</em>), and generous slices of fiery green and red chilies.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-rose-600 dark:text-rose-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Naga City & Local Restos</span>
                </div>
            </div>
        </div>

        {{-- 3. Laing (Pinangat na Gabi) --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'main'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/laing.jpg') }}" alt="Laing Dish" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-400 border border-emerald-500/30 shadow-md">Taro & Gata</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-emerald-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-emerald-300 border border-emerald-500/30">Gulay / Vegetable Dish</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400 mb-1">Dahon ng Gabi Specialty</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-emerald-600 dark:group-hover:text-emerald-400">Laing / Natong</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Sun-dried taro leaves cooked gently in thick coconut milk, seasoned with chili, shrimp paste, and bits of pork or smoked fish. Deeply savory and velvety.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-emerald-600 dark:text-emerald-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Throughout Camarines Sur</span>
                </div>
            </div>
        </div>

        {{-- 4. Kinalas --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'noodles'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/kinalas.jpg') }}" alt="Kinalas Noodle Soup" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-amber-400 border border-amber-500/30 shadow-md">Naga Icon</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-amber-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-amber-300 border border-amber-500/30">Pancit & Sabaw / Soup</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-amber-600 dark:text-amber-400 mb-1">Naga Specialty Comfort Food</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-amber-600 dark:group-hover:text-amber-400">Kinalas Noodle Soup</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Naga City's iconic comfort food — steaming broth with hand-pulled meat from pork or beef head, topped with a thick, savory brown gravy and chili paste.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-amber-600 dark:text-amber-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Kinalasan Stalls across Naga City</span>
                </div>
            </div>
        </div>

        {{-- 5. Pili Nut Specialties --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'pasalubong'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/pili_nuts.jpg') }}" alt="Pili Nut Specialties" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-yellow-300 border border-yellow-500/30 shadow-md">Top Pasalubong</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-yellow-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-yellow-300 border border-yellow-500/30">Meryenda & Pasalubong</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-yellow-600 dark:text-yellow-400 mb-1">Volcanic Nut Confectionery</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-yellow-600 dark:group-hover:text-yellow-400">Pili Nuts & Candies</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Native to the volcanic soil of Bicol. Enjoy crispy caramelized pili, sea-salt roasted, mazapan de pili, tarts, and pili butter — the quintessential CamSur souvenir.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-yellow-700 dark:text-yellow-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Pili & Naga City Souvenir Shops</span>
                </div>
            </div>
        </div>

        {{-- 6. Pinangat --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'main'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/pinangat.jpg') }}" alt="Pinangat Dish" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-teal-300 border border-teal-500/30 shadow-md">Wrapped Parcel</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-teal-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-teal-300 border border-teal-500/30">Ulam / Gata Delicacy</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-teal-600 dark:text-teal-400 mb-1">Leaf-Wrapped Slow Braise</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-teal-600 dark:group-hover:text-teal-400">Pinangat</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Minced fish or pork and coconut meat delicately wrapped in layers of gabi leaves into tight packets, slow-braised in thick pure coconut milk.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-teal-600 dark:text-teal-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Local markets & Bicolano restaurants</span>
                </div>
            </div>
        </div>

        {{-- 7. Kinunot --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'main'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/kinunot.jpg') }}" alt="Kinunot Dish" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-sky-300 border border-sky-500/30 shadow-md">Seafood Delight</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-sky-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-sky-300 border border-sky-500/30">Seafood / Ulam</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-sky-600 dark:text-sky-400 mb-1">Malunggay & Coconut Stew</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-sky-600 dark:group-hover:text-sky-400">Kinunot</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Shredded stingray or fish flakes gently cooked in spiced coconut milk, fresh moringa leaves (<em>malunggay</em>), and green chili peppers.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-sky-600 dark:text-sky-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Coastal eateries & Bicol bistros</span>
                </div>
            </div>
        </div>

        {{-- 8. Pancit Bato --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'noodles'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/pancit_bato.jpg') }}" alt="Pancit Bato" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-orange-400 border border-orange-500/30 shadow-md">Bato, CamSur</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-orange-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-orange-300 border border-orange-500/30">Pancit & Meryenda / Noodles</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-orange-600 dark:text-orange-400 mb-1">Toasted Noodles Heritage</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-orange-600 dark:group-hover:text-orange-400">Pancit Bato</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Traditional noodles crafted in the municipality of Bato, toasted over embers for a distinct smoky flavor, then stir-fried with vegetables and seafood or served in broth with dinuguan.
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-orange-600 dark:text-orange-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: Bato, Iriga & Naga City Markets</span>
                </div>
            </div>
        </div>

        {{-- 9. Sili Ice Cream --}}
        <div x-show="activeFoodCat === 'all' || activeFoodCat === 'dessert'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 dark:border-slate-800 dark:bg-slate-800/90 flex flex-col justify-between">
            <div>
                <div class="relative h-52 w-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('img/services/tourism/food/sili_ice_cream.jpg') }}" alt="Sili Ice Cream" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent pointer-events-none"></div>
                    <span class="absolute top-3 right-3 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-wider text-pink-400 border border-pink-500/30 shadow-md">Sweet & Spicy</span>
                    <span class="absolute bottom-3 left-3 rounded-md bg-pink-950/80 backdrop-blur-sm px-2 py-0.5 text-[9px] font-black uppercase tracking-wider text-pink-300 border border-pink-500/30">Panghimagas / Dessert</span>
                </div>
                <div class="p-5">
                    <div class="text-[10px] font-black uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-1">Artisanal Sweet & Spicy Treat</div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white transition-colors group-hover:text-pink-600 dark:group-hover:text-pink-400">Sili Ice Cream</h3>
                    <p class="mt-1.5 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        An inventive Bicolano classic blending rich creamy sweetness with progressive spice levels (Level 1 to Volcano). A memorable culinary challenge for travelers!
                    </p>
                </div>
            </div>
            <div class="px-5 pb-5 pt-0">
                <div class="pt-3 border-t border-slate-100 dark:border-slate-700/80 flex items-center gap-1.5 text-[11px] font-bold text-pink-600 dark:text-pink-400">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Where: 1st Colonial Grill & Naga Dessert Cafes</span>
                </div>
            </div>
        </div>

    </div>
</section>
