{{-- NEW CAPITOL --}}
<section id="new-capitol" class="reveal surface section overflow-hidden">
    <div class="grid lg:grid-cols-12">
        <div class="lg:col-span-5 h-[24rem] lg:h-auto relative bg-[#030816]">
            {{-- Dynamic Carousel Element --}}
            <div class="carousel-container" id="capitolCarousel">
                @foreach ($carouselSlides as $slideIndex => $slide)
                    <div class="carousel-slide {{ $slideIndex === 0 ? 'active' : '' }}" data-slide-index="{{ $slideIndex }}" data-type="{{ $slide['type'] }}">
                        @if ($slide['type'] === 'image')
                            <img class="w-full h-full object-cover" src="{{ asset($slide['src']) }}" alt="{{ $slide['alt'] }}" loading="lazy">
                        @elseif ($slide['type'] === 'video')
                            <iframe class="carousel-video-frame" src="{{ $slide['src'] }}" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        @endif
                    </div>
                @endforeach

                {{-- Carousel Controls --}}
                <button type="button" class="carousel-control carousel-prev" id="carouselPrev" aria-label="Previous Slide">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button type="button" class="carousel-control carousel-next" id="carouselNext" aria-label="Next Slide">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>

                {{-- Indicators --}}
                <div class="carousel-indicators">
                    @foreach ($carouselSlides as $slideIndex => $slide)
                        <button type="button" class="carousel-dot {{ $slideIndex === 0 ? 'active' : '' }}" data-indicator="{{ $slideIndex }}" aria-label="Go to slide {{ $slideIndex + 1 }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="p-6 sm:p-10 lg:col-span-7">
            <span class="eyebrow">Better, Bolder, Bigger</span>
            <h2 class="h-sec">The New Iconic Capitol</h2>
            <p class="lede">
                An open, adaptive, forward-looking civic building. Its design translates traditional forms into modern
                instruments that respond to light, heat, sustainability, public movement, and provincial identity —
                drawing on Mt. Isarog, Lake Buhi, the Caramoan coast, and the Pili nut.
            </p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                @foreach ($levels as $level)
                    <article class="card p-5">
                        <div class="flex items-start gap-3">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-blue-950 text-xl text-amber-300">{{ $level['icon'] }}</span>
                            <div>
                                <p class="text-[.62rem] font-bold uppercase tracking-[.14em] text-amber-600">{{ $level['level'] }}</p>
                                <h3 class="font-black leading-tight text-blue-950">{{ $level['title'] }}</h3>
                            </div>
                        </div>
                        <p class="mt-3 text-[.82rem] leading-relaxed text-gray-600">{{ $level['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
