<x-guest-layout>
    {{-- Page Meta --}}
    @section('title', 'Tourism & Destinations - Province of Camarines Sur')

    {{-- 1. Hero Banner Component (English Formality) --}}
    <x-hero-banner
        badge-text="ECO-ADVENTURE & HERITAGE CAPITAL"
        title="TOURISM & DESTINATIONS OF CAMARINES SUR"
        description="From world-class wakeboarding and the pristine limestone islands of Caramoan to sacred pilgrimage sites and the verdant slopes of Mt. Isarog — experience the vibrant spirit of the Bicol Region."
    />

    <main class="min-h-screen bg-slate-50 py-10 transition-colors duration-300 dark:bg-slate-900 sm:py-14">
        <div class="mx-auto max-w-7xl space-y-16 px-4 sm:px-6 lg:px-8">

            {{-- 2. Highlights Overview Banner with Key Metrics --}}
            @include('pages.guest.services.tourism.overview-highlights')

            {{-- 3. Premier Attractions: Vertical Bottom-to-Top Auto Carousel (6 Slides) --}}
            @include('pages.guest.services.tourism.flagship-adventures')

            {{-- 4. Travel Guide: How to Get to Camarines Sur --}}
            @include('pages.guest.services.tourism.travel-guide')

            {{-- 5. 12-Month Year-Round Travel Calendar --}}
            @include('pages.guest.services.tourism.travel-calendar')

            {{-- 6. Major Festivals & Cultural Events --}}
            @include('pages.guest.services.tourism.festivals')

            {{-- 7. Must-Try Bicolano Dishes & Delicacies --}}
            @include('pages.guest.services.tourism.culinary')

            {{-- 8. Endemic Species & Natural Treasures of Camarines Sur --}}
            @include('pages.guest.services.tourism.endemics')

            {{-- 9. Interactive Destination Directory Portal (Live API + Search + Filters) --}}
            @include('pages.guest.services.tourism.destinations-portal')

            {{-- 10. Citations, References & Community Tourism Suggestion Section --}}
            @include('pages.guest.services.tourism.citations-suggestions')

        </div>
    </main>

    {{-- Modals --}}
    @include('pages.guest.services.tourism.modals')

    {{-- Scripts & Swiper Bundle --}}
    @include('pages.guest.services.tourism.scripts')
</x-guest-layout>
