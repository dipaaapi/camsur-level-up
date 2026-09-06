{{-- TABBED HISTORICAL SEATS SECTION --}}
<section id="historical-seats" class="scroll-mt-28 space-y-8" x-data="{ activeSeat: 'nueva-caceres' }" x-on:change-seat.window="activeSeat = $event.detail">
    <div class="text-center max-w-3xl mx-auto">
        <span class="eyebrow">The Evolution of the Seats of Power</span>
        <h2 class="h-sec">Historical Seats of Government</h2>
        <p class="lede mx-auto">
            Explore the historical journey of the Capitol through its different seats of governance from the colonial era to the future Uptown master plan.
        </p>
    </div>

    {{-- Tabs Navigation --}}
    <div class="flex flex-wrap justify-center gap-2 border-b border-gray-200 pb-4">
        <button type="button" 
            @click="activeSeat = 'nueva-caceres'"
            :class="activeSeat === 'nueva-caceres' ? 'bg-amber-600 text-white border-amber-600' : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-50'"
            class="px-5 py-3 rounded-full text-xs font-black uppercase tracking-wider border transition-all duration-200">
            🏰 Nueva Cáceres
        </button>
        <button type="button" 
            @click="activeSeat = 'naga'"
            :class="activeSeat === 'naga' ? 'bg-blue-900 text-white border-blue-900' : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-50'"
            class="px-5 py-3 rounded-full text-xs font-black uppercase tracking-wider border transition-all duration-200">
            🌉 Naga City
        </button>
        <button type="button" 
            @click="activeSeat = 'pili'"
            :class="activeSeat === 'pili' ? 'bg-rose-600 text-white border-rose-600' : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-50'"
            class="px-5 py-3 rounded-full text-xs font-black uppercase tracking-wider border transition-all duration-200">
            🏢 Pili
        </button>
        <button type="button" 
            @click="activeSeat = 'uptown'"
            :class="activeSeat === 'uptown' ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-50'"
            class="px-5 py-3 rounded-full text-xs font-black uppercase tracking-wider border transition-all duration-200">
            ⛰️ Uptown Pili
        </button>
    </div>

    {{-- Tab Contents --}}
    <div class="mt-6">
        <div x-show="activeSeat === 'nueva-caceres'" 
            x-transition:enter="transition ease-out duration-500" 
            x-transition:enter-start="opacity-0 translate-y-6" 
            x-transition:enter-end="opacity-100 translate-y-0">
            @include('pages.guest.capitol-history.nueva-caceres')
        </div>
        <div x-show="activeSeat === 'naga'" 
            x-transition:enter="transition ease-out duration-500" 
            x-transition:enter-start="opacity-0 translate-y-6" 
            x-transition:enter-end="opacity-100 translate-y-0" 
            style="display: none;">
            @include('pages.guest.capitol-history.naga')
        </div>
        <div x-show="activeSeat === 'pili'" 
            x-transition:enter="transition ease-out duration-500" 
            x-transition:enter-start="opacity-0 translate-y-6" 
            x-transition:enter-end="opacity-100 translate-y-0" 
            style="display: none;">
            @include('pages.guest.capitol-history.pili')
        </div>
        <div x-show="activeSeat === 'uptown'" 
            x-transition:enter="transition ease-out duration-500" 
            x-transition:enter-start="opacity-0 translate-y-6" 
            x-transition:enter-end="opacity-100 translate-y-0" 
            style="display: none;">
            @include('pages.guest.capitol-history.uptown')
        </div>
    </div>
</section>
