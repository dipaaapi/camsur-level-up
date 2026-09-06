<x-guest-layout>
    {{-- 🚀 HERO BANNER --}}
    <x-hero-banner
        badge-text="Province of Camarines Sur"
        title="Provincial Profile"
        description="Discover the rich history, geography, and demographics of our beloved province."
    />

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="space-y-8 text-gray-700 leading-relaxed text-sm">
            {{-- 1. 📊 Quick Macro Snapshot / Executive Scoreboard --}}
            @include('pages.guest.about.profile.stats-overview')

            {{-- 2. 👔 The Provincial Governor Executive Leadership Panel --}}
            @include('pages.guest.about.profile.governor')

            {{-- 3. 🏔️ Geographic Foundations & Territorial Gateway --}}
            @include('pages.guest.about.profile.geographic-foundations')

            {{-- 4. 🗺️ Topography & Elevation Profiles --}}
            @include('pages.guest.about.profile.topography')

            {{-- 5. 💧 Hydrography & Water Systems --}}
            @include('pages.guest.about.profile.hydrography')

            {{-- 6. 🌱 Soil Profile & Land Classification --}}
            @include('pages.guest.about.profile.soil-classification')

            {{-- 7. 👥 Demographics & Macroeconomic Performance --}}
            @include('pages.guest.about.profile.demographics-economy')

            {{-- 8. 🌐 Infrastructure, Digital Network & Climate Resiliency --}}
            @include('pages.guest.about.profile.infrastructure-resiliency')

            {{-- 9. 🏖️ Ecotourism Assets & Congressional District Map --}}
            @include('pages.guest.about.profile.ecotourism-districts')

            {{-- 10. 🏛️ Interactive Municipalities & Component Cities Directory --}}
            @include('pages.guest.about.profile.municipalities-explorer')

            {{-- 11. 📚 Citations, Official Baseline References & Community Suggestion Panel --}}
            @include('pages.guest.about.profile.citations-suggestions')
        </div>
    </main>

    {{-- Interactive Modals (Profile Suggestion & Feedback) --}}
    @include('pages.guest.about.profile.modals')

    {{-- Interactive Scripts & View Controllers --}}
    @include('pages.guest.about.profile.scripts')
</x-guest-layout>
