{{-- UNIFIED HISTORICAL TIMELINE --}}
<section id="timeline" class="section">
    <div class="reveal tl-shell-wrap">
        <div class="tl-head">
            <div>
                <span class="eyebrow">Unified Historical Timeline</span>
                <h2 class="h-sec">Four Centuries in One Continuous Line</h2>
                <p class="lede">
                    Exploration, the founding decree, every territorial reorganisation, the capital’s move to Pili, the 1976 fire,
                    and the new Capitol — merged into a single chronological spine.
                    <strong class="text-blue-950">Select any card to open the full record.</strong>
                </p>
            </div>
            <div class="tl-nav">
                <button type="button" class="tl-btn" data-dir="-1" aria-label="Previous milestone">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.7" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <span class="tl-counter" id="tlCounter">01 / {{ count($timeline) }}</span>
                <button type="button" class="tl-btn" data-dir="1" aria-label="Next milestone">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.7" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg>
                </button>
            </div>
        </div>

        <div class="tl-filters" role="group" aria-label="Filter timeline by era">
            <button type="button" class="tl-chip" data-filter="all" aria-pressed="true">All Eras <small>{{ count($timeline) }}</small></button>
            @foreach ($eras as $key => $era)
                <button type="button" class="tl-chip" data-filter="{{ $key }}" aria-pressed="false">{{ $era['label'] }} <small>{{ $era['range'] }}</small></button>
            @endforeach
        </div>

        <div class="tl-shell" id="tlShell" role="region" aria-label="Camarines Sur historical timeline" tabindex="0">
            <div class="tl-track" id="tlTrack">
                <div class="tl-rail"></div>
                @foreach ($timeline as $i => $item)
                    @php
                        $typeClass = match ($item['era']) {
                            'origins' => 'amber',
                            'territory' => 'indigo',
                            'future' => 'emerald',
                            default => 'rose',
                        };
                    @endphp
                    <article class="tl-item {{ $i % 2 === 0 ? 'is-top' : 'is-bottom' }}" data-era="{{ $item['era'] }}" data-index="{{ $i }}" style="--d: {{ ($i % 6) * 60 }}ms">
                        <span class="tl-node" aria-hidden="true">{{ $item['icon'] }}</span>
                        <span class="tl-stem" aria-hidden="true"></span>
                        <button type="button" class="tl-card" data-open="{{ $i }}" aria-label="Open full details for {{ $item['date'] }} — {{ $item['title'] }}">
                            <span class="tl-card-media media {{ $item['image'] ? '' : 'is-empty' }}">
                                @if ($item['image'])
                                    <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="{{ $item['title'] }}" loading="lazy" data-fallback>
                                @endif
                                <span class="media-fallback">
                                    <span class="media-fallback-icon">{{ $item['icon'] }}</span>
                                    <span class="media-fallback-alt">{{ $item['title'] }}</span>
                                </span>
                                <span class="tl-card-era" style="background-color: var(--gold)">{{ $eras[$item['era']]['label'] }}</span>
                                <span class="tl-card-no">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </span>
                            <span class="tl-card-body">
                                <span class="tl-card-date">{{ $item['date'] }}</span>
                                <span class="tl-card-title">{{ $item['title'] }}</span>
                                <span class="tl-card-sum">{{ $item['summary'] }}</span>
                                <span class="tl-card-cta">View details
                                    <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                                </span>
                            </span>
                        </button>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="tl-foot">
            <div class="tl-progress"><span id="tlProgress"></span></div>
            <p class="tl-hint">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14M9 8l-4 4 4 4M15 8l4 4-4 4"/></svg>
                Drag, scroll, or use ← → · Select a card for the full record
            </p>
        </div>
    </div>
</section>
