<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Camarines Sur Official Portal') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col justify-between">

    {{-- Top Navigation Panel --}}
    <x-guest.panels.nav />

    {{-- Main Content Slot --}}
    <main class="flex-grow">
        {{ $slot }}
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

</body>
</html>
