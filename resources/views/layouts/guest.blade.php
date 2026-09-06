<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Dynamic Title: Gumagana sa <x-slot name="title"> at @section('title') --}}
    <title>{{ $title ?? View::yieldContent('title', config('app.name', 'Camarines Sur Official Portal')) }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col justify-between">

    {{-- 🌐 Universal Skeleton Loader: lumalabas sa simula at nagfa-fade out pag kumpleto na ang assets --}}
    <x-guest.panels.page-skeleton />

    {{-- Page Body Wrapper: Naka-opacity-0 habang naglo-load ang skeleton, magfa-fade in pag tapos na --}}
    <div id="global-page-wrapper" class="opacity-0 transition-opacity duration-700 ease-out flex-grow flex flex-col justify-between">

        {{-- Top Navigation Panel --}}
        <x-guest.panels.nav />

        {{-- Main Content Slot & Yield Support --}}
        <main class="flex-grow">
            {{ $slot ?? $content ?? '' }}
            @yield('content')
        </main>

        {{-- 🦶 Modular Footer Panels --}}
        <footer class="mt-auto">
            {{-- Panel 1: Main Links & Contact Information --}}
            <x-guest.panels.footer.main />

            {{-- Panel 2: GOVPH Standard Seals & FOI Panel --}}
            <x-guest.panels.footer.govph />

            {{-- Panel 3: Copyright & Tech Credits --}}
            <x-guest.panels.footer.copyright />
        </footer>

        {{-- ♿ & 🚀 Unified Floating Toolbar (Accessibility Tools + Auto Scroll to Top) --}}
        <x-guest.panels.accessibility-toolbar />

        {{-- 🔍 Global Search Modal (Ctrl+K Command Palette) --}}
        <x-guest.panels.search-modal />
    </div>

</body>
</html>