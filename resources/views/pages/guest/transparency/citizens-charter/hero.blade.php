{{-- Hero / Page Header --}}
<section class="relative bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 text-white py-12 sm:py-16 overflow-hidden border-b-4 border-amber-400">
    <div class="absolute inset-0 bg-cover bg-center opacity-10 mix-blend-overlay" style="background-image: url('{{ asset('img/transparency/citizens-charter/citizen-bg.jpg') }}');"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="max-w-2xl text-center md:text-left">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-800/80 border border-blue-400/30 text-amber-300 text-xs font-bold uppercase tracking-wider mb-3 shadow-sm">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Public Service Standards
                </span>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black uppercase tracking-tight text-white">
                    Citizen's Charter
                </h1>
                <p class="mt-2.5 text-sm sm:text-base text-blue-100/90 leading-relaxed font-medium">
                    Promoting integrity, accountability, and proper management of public affairs and public property.
                </p>
            </div>

            {{-- Scaled-down subtle banner icon --}}
            <div class="flex-shrink-0 bg-white/10 p-3.5 rounded-2xl backdrop-blur-sm border border-white/15 shadow-inner">
                <img src="{{ asset('img/transparency/citizens-charter/citizen01.png') }}" alt="Citizen's Charter" class="h-20 sm:h-24 w-auto object-contain drop-shadow">
            </div>
        </div>
    </div>
</section>
