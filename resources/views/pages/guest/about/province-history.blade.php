<x-guest-layout>
    @include('pages.guest.about.province-history.progress-bar')

    <x-hero-banner
        badge-text="PROVINCIAL HERITAGE & IDENTITY"
        title="A BRIEF HISTORY OF CAMARINES SUR"
        description="From the ancient settlements of Ibalon and the Bicol River basin to a modern center for agriculture, education, technology, and public service."
    />

    @include('pages.guest.about.province-history.navigation')

    <main id="main-content" class="min-h-screen bg-slate-50 py-12 transition-colors duration-300 dark:bg-slate-900 sm:py-16">
        <div class="mx-auto max-w-7xl space-y-20 px-4 sm:px-6 lg:px-8">
            @include('pages.guest.about.province-history.overview')
            @include('pages.guest.about.province-history.ibalon')
            @include('pages.guest.about.province-history.colonial')
            @include('pages.guest.about.province-history.timeline')
            @include('pages.guest.about.province-history.penafrancia')
            @include('pages.guest.about.province-history.revolution')
            @include('pages.guest.about.province-history.modern')
            @include('pages.guest.about.province-history.synthesis')
            @include('pages.guest.about.province-history.sources')
        </div>
    </main>

    @include('pages.guest.about.province-history.image-modal')
    @include('pages.guest.about.province-history.scripts')
</x-guest-layout>