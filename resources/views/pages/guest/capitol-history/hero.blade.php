{{-- ============================ HERO ============================ --}}
<section class="relative overflow-hidden border-b-4 border-amber-400 bg-blue-950 px-4 py-16 text-white sm:px-6 sm:py-20 lg:px-8">
    <div class="hero-orb pointer-events-none absolute -top-24 -right-20 h-72 w-72 rounded-full bg-amber-400/20 blur-3xl"></div>
    <div class="hero-orb pointer-events-none absolute bottom-0 left-10 h-56 w-56 rounded-full bg-blue-400/20 blur-3xl"></div>
    <div class="hero-orb pointer-events-none absolute top-20 left-1/2 h-44 w-44 rounded-full bg-white/10 blur-3xl"></div>

    <div class="relative mx-auto grid max-w-7xl gap-12 lg:grid-cols-12 lg:items-center">
        <div class="reveal lg:col-span-7">
            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-[.68rem] font-bold uppercase tracking-[.16em] text-amber-300 ring-1 ring-white/15">
                <span class="h-1.5 w-1.5 rounded-full bg-amber-300"></span> Heritage &amp; Culture
            </span>
            <h1 class="mt-6 text-4xl font-black uppercase leading-[1.05] tracking-tight sm:text-5xl">Capitol History</h1>
            <p class="mt-5 max-w-2xl text-sm leading-relaxed text-blue-100 sm:text-base">
                Four and a half centuries in one continuous line — from the granaries that gave the province its name,
                through every territorial split and merger, to the fire of 1976 and the iconic Capitol now rising in Pili.
            </p>
            <div class="mt-9 grid max-w-2xl gap-3 sm:grid-cols-3">
                @foreach ([['#timeline','Explore','Unified Timeline'],['#new-capitol','Discover','New Capitol'],['#future','Look Ahead','CamSur Uptown']] as [$href,$kicker,$label])
                    <a href="{{ $href }}" class="rounded-2xl bg-white/10 p-4 ring-1 ring-white/10 transition hover:-translate-y-0.5 hover:bg-white/[.16]">
                        <p class="text-[.62rem] font-bold uppercase tracking-[.16em] text-amber-300">{{ $kicker }}</p>
                        <p class="mt-1 font-black text-white">{{ $label }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="reveal lg:col-span-5" style="--d:120ms">
            <figure class="media h-80 rounded-[2rem] border border-white/10 shadow-2xl">
                <img src="{{ asset($heroImage) }}" alt="Camarines Sur Provincial Capitol" loading="lazy" data-fallback>
                <div class="media-fallback">
                    <span class="media-fallback-icon">🏛️</span>
                    <p class="media-fallback-alt">Camarines Sur Provincial Capitol</p>
                    <p class="media-fallback-note">Image unavailable</p>
                </div>
            </figure>
        </div>
    </div>
</section>
