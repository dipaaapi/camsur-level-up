<x-guest-layout>
    <x-loading-screen />

    <div class="min-h-screen w-full bg-slate-900 text-slate-100 flex flex-col justify-between">

        <main class="w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-20 flex-grow flex flex-col justify-center items-center text-center">

            <div class="mb-6 w-full max-w-2xl">
                <x-alert type="info">
                    🚀 Welcome to the upgraded Camsur Web Portal powered by Laravel 13 & Tailwind CSS!
                </x-alert>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-white max-w-4xl">
                Modernizing Services for <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Camarines Sur</span>
            </h1>

            <p class="mt-6 text-slate-300 text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed">
                Fast, secure, and accessible online public platform built with modern web technologies.
            </p>

            <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-4 w-full sm:w-auto justify-center">
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-6 py-3.5 bg-gradient-to-r from-blue-600 to-emerald-500 text-white font-bold rounded-xl shadow-lg shadow-blue-500/20 hover:scale-105 transition text-center">
                    Get Started Now
                </a>
                <a href="{{ route('login') }}" class="w-full sm:w-auto px-6 py-3.5 bg-slate-800 border border-slate-700 text-slate-200 font-semibold rounded-xl hover:bg-slate-700 transition text-center">
                    Member Access
                </a>
            </div>
        </main>

        <footer class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 border-t border-slate-800 text-center text-xs text-slate-400">
            &copy; {{ date('Y') }} Camsur Level-Up Project. Built with Laravel 13 & Tailwind CSS.
        </footer>
    </div>
</x-guest-layout>
