<x-guest-layout>
    {{-- ========================================== --}}
    {{-- 1. FULL-WIDTH HERO BANNER                  --}}
    {{-- ========================================== --}}
    <x-hero-banner
        badge-text="PROVINCIAL GOVERNANCE MANDATE"
        title="MISSION AND VISION"
        description="Guiding how the Provincial Government of Camarines Sur serves its people, manages resources, formulates development policies, and builds a globally competitive and resilient province."
    />

    <main class="min-h-screen bg-slate-50 dark:bg-slate-900 py-12 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            {{-- 1. 🎯 PRIMARY FOCUS: Core Mission & Vision Statements (Verbatim & Sacred) --}}
            @include('pages.guest.about.mission-vision.core-cards')

            {{-- 2. 🏛️ Institutional Foundation & Governance Scale --}}
            @include('pages.guest.about.mission-vision.mandate-foundation')

            {{-- 3. ⚙️ Our 5 Core Commitments in Motion --}}
            @include('pages.guest.about.mission-vision.commitments')

            {{-- 4. 🏢 Operational Pillars & 8 Core Functions --}}
            @include('pages.guest.about.mission-vision.operations')

            {{-- 5. 🌟 Driving Spirit — 5 Core Institutional Values --}}
            @include('pages.guest.about.mission-vision.values')

            {{-- 6. ⚖️ Statutory & Legal Framework (RA 7160, Constitution, etc.) --}}
            @include('pages.guest.about.mission-vision.legal-framework')

            {{-- 7. 📚 Official Citations, Baseline References & Reusable Public Inquiry Component --}}
            @include('pages.guest.about.mission-vision.citations-inquiry')

        </div>
    </main>
</x-guest-layout>
