<x-guest-layout>
    {{-- 🚀 HERO BANNER --}}
    <x-hero-banner
        badge-text="Province of Camarines Sur"
        title="Socio-Economic Profile"
        description="The comprehensive baseline framework of geography, demography, macroeconomic growth, and disaster resiliency in Camarines Sur."
    />

    <div x-data="{
        selectedDistrict: null,
        selectedLgu: null,
        selectedSeason: null,
        selectedUtility: null,
        selectedDemographic: null,
        selectedHazard: null,
        searchQuery: '',
        filterDistrict: 'all',
        lgus: {{ Js::from($lgus) }},
        hoveredDistrict: null,
        get isAnyModalOpen() {
            return !!(this.selectedDistrict || this.selectedLgu || this.selectedSeason || this.selectedUtility || this.selectedDemographic || this.selectedHazard);
        }
    }"
    x-init="
        $watch('isAnyModalOpen', value => {
            if (value) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        });
    ">
        <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="space-y-8 text-gray-700 leading-relaxed text-sm">
                {{-- ⭐ UNIFIED MASTER PANEL: Territorial Directory & District Evacuation Centers --}}
                @include('pages.guest.about.socio-economic.unified-territorial-directory')

                {{-- 1. 🗺️ Geographic Dimensions & Territorial Boundaries --}}
                @include('pages.guest.about.socio-economic.geographic-boundaries')

                {{-- 2. 👥 Demographic Dynamics, Family Vitality & Human Capital --}}
                @include('pages.guest.about.socio-economic.demographics')

                {{-- 3. 🌦️ Climate Profile, Hazard Susceptibility & Disaster Resiliency Framework --}}
                @include('pages.guest.about.socio-economic.climate-hazard-resiliency')

                {{-- 4. 📈 Macroeconomic Performance & Strategic Sectoral Matrix --}}
                @include('pages.guest.about.socio-economic.economic-sectoral-matrix')

                {{-- 5. 📚 Citations, Official Baseline References & Community Suggestion Panel --}}
                @include('pages.guest.about.socio-economic.citations-suggestions')
            </div>
        </main>

        {{-- Interactive Modals (LGU Details & Socio-Economic Suggestion Modal) --}}
        @include('pages.guest.about.socio-economic.modals')

        {{-- Interactive Scripts & View Controllers --}}
        @include('pages.guest.about.socio-economic.scripts')
    </div>
</x-guest-layout>
