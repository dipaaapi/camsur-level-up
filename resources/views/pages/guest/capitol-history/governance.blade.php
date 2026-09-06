{{-- GOVERNANCE --}}
<section class="reveal surface surface-pad section">
    <span class="eyebrow">Governance &amp; Infrastructure</span>
    <h2 class="h-sec">The Capitol as a Center of Public Service</h2>
    <p class="lede">
        Beyond architecture, the Capitol is an operating center for provincial leadership, public administration,
        local development, and service delivery for the people of Camarines Sur.
    </p>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
        @foreach ($governanceCards as $card)
            <article class="reveal card overflow-hidden" style="--d: {{ $loop->index * 110 }}ms">
                <figure class="media h-48">
                    <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" loading="lazy" data-fallback>
                    <div class="media-fallback">
                        <span class="media-fallback-icon">{{ $card['icon'] }}</span>
                        <p class="media-fallback-alt">{{ $card['title'] }}</p>
                    </div>
                </figure>
                <div class="p-6">
                    <h3 class="text-lg font-black text-blue-950">{{ $card['title'] }}</h3>
                    <p class="mt-2.5 text-[.85rem] leading-relaxed text-gray-600">{{ $card['body'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
