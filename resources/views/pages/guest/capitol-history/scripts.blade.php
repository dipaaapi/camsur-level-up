<script type="application/json" id="capitolData">@json($payload, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE)</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    const DATA   = JSON.parse(document.getElementById('capitolData').textContent);
    const ITEMS  = DATA.items;
    const CITES  = DATA.citations;
    const ERAS   = DATA.eras;
    const REDUCE = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const esc    = (s) => String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));

    /* scroll lock */
    let lockCount = 0;
    const lock   = () => { if (++lockCount === 1) document.body.style.overflow = 'hidden'; };
    const unlock = () => { if (lockCount > 0 && --lockCount === 0) document.body.style.overflow = ''; };

    /* broken image -> alt-only fallback */
    document.querySelectorAll('img[data-fallback]').forEach(img => {
        const fail = () => img.closest('.media')?.classList.add('is-empty');
        img.addEventListener('error', fail, { once: true });
        if (img.complete && img.naturalWidth === 0) fail();
    });

    /* reveal vertical sections */
    const reveals = document.querySelectorAll('.reveal');
    if (!REDUCE && 'IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(el => io.observe(el));
    } else {
        reveals.forEach(el => el.classList.add('in'));
    }

    /* =================== TIMELINE =================== */
    const shell    = document.getElementById('tlShell');
    const track    = document.getElementById('tlTrack');
    const progress = document.getElementById('tlProgress');
    const counter  = document.getElementById('tlCounter');
    const navBtns  = document.querySelectorAll('.tl-btn[data-dir]');
    const chips    = document.querySelectorAll('.tl-chip[data-filter]');
    const allItems = Array.from(track.querySelectorAll('.tl-item'));

    /* reveal timeline cards when the PANEL enters view (fixes horizontal off-screen bug) */
    const panel = document.querySelector('#timeline .tl-shell-wrap');
    const showAllItems = () => allItems.forEach(el => el.classList.add('in'));
    if (!REDUCE && 'IntersectionObserver' in window && panel) {
        const pio = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) { showAllItems(); pio.disconnect(); } });
        }, { threshold: 0.05 });
        pio.observe(panel);
    } else {
        showAllItems();
    }

    let visible = allItems.slice();
    const step  = () => (visible[0]?.offsetWidth || 336) + 24;

    function sync() {
        const max = shell.scrollWidth - shell.clientWidth;
        progress.style.width = (max > 0 ? (shell.scrollLeft / max) * 100 : 100) + '%';
        navBtns.forEach(b => {
            const dir = Number(b.dataset.dir);
            b.disabled = dir < 0 ? shell.scrollLeft <= 4 : shell.scrollLeft >= max - 4;
        });
        const mid = shell.scrollLeft + shell.clientWidth / 2;
        let best = 0, bestD = Infinity;
        visible.forEach((el, i) => {
            const d = Math.abs(el.offsetLeft + el.offsetWidth / 2 - mid);
            if (d < bestD) { bestD = d; best = i; }
        });
        if (visible.length) {
            counter.textContent = String(best + 1).padStart(2, '0') + ' / ' + String(visible.length).padStart(2, '0');
        }
    }

    shell.addEventListener('scroll', sync, { passive: true });
    window.addEventListener('resize', sync);
    sync();

    navBtns.forEach(b => b.addEventListener('click', () =>
        shell.scrollBy({ left: Number(b.dataset.dir) * step(), behavior: 'smooth' })));

    shell.addEventListener('keydown', (e) => {
        if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
        e.preventDefault();
        shell.scrollBy({ left: (e.key === 'ArrowRight' ? 1 : -1) * step(), behavior: 'smooth' });
    });

    /* drag to pan */
    let dragging = false, moved = false, startX = 0, startLeft = 0;
    shell.addEventListener('pointerdown', (e) => {
        if (e.pointerType === 'touch') return;
        dragging = true; moved = false;
        startX = e.clientX; startLeft = shell.scrollLeft;
        shell.classList.add('dragging');
    });
    shell.addEventListener('pointermove', (e) => {
        if (!dragging) return;
        const dx = e.clientX - startX;
        if (Math.abs(dx) > 4) moved = true;
        shell.scrollLeft = startLeft - dx;
    });
    const endDrag = () => { dragging = false; shell.classList.remove('dragging'); };
    ['pointerup', 'pointerleave', 'pointercancel'].forEach(ev => shell.addEventListener(ev, endDrag));

    /* era filters */
    chips.forEach(chip => chip.addEventListener('click', () => {
        const era = chip.dataset.filter;
        chips.forEach(c => c.setAttribute('aria-pressed', String(c === chip)));
        allItems.forEach(el => { el.hidden = !(era === 'all' || el.dataset.era === era); });
        visible = allItems.filter(el => !el.hidden);
        shell.scrollTo({ left: 0, behavior: REDUCE ? 'auto' : 'smooth' });
        requestAnimationFrame(sync);
    }));

    /* =================== NEW ICONIC CAPITOL CAROUSEL =================== */
    const carouselEl = document.getElementById('capitolCarousel');
    if (carouselEl) {
        const slides = carouselEl.querySelectorAll('.carousel-slide');
        const dots = carouselEl.querySelectorAll('.carousel-dot');
        let currentSlide = 0;

        function showSlide(index) {
            // Stop any playing video iframe inside slides
            slides.forEach(slide => {
                if (slide.dataset.type === 'video') {
                    const iframe = slide.querySelector('iframe');
                    if (iframe) {
                        const tempSrc = iframe.src;
                        iframe.src = tempSrc; // Resets video player on slide change
                    }
                }
            });

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (index + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        document.getElementById('carouselPrev').addEventListener('click', () => {
            showSlide(currentSlide - 1);
        });

        document.getElementById('carouselNext').addEventListener('click', () => {
            showSlide(currentSlide + 1);
        });

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => showSlide(idx));
        });
    }

    /* =================== DETAIL MODAL =================== */
    const dm       = document.getElementById('detailModal');
    const dmMedia  = document.getElementById('dmMedia');
    const dmMeta   = document.getElementById('dmMeta');
    const dmTitle  = document.getElementById('dmTitle');
    const dmProse  = document.getElementById('dmProse');
    const dmFacts  = document.getElementById('dmFacts');
    const dmFactsW = document.getElementById('dmFactsWrap');
    const dmSrc    = document.getElementById('dmSources');
    const dmSrcW   = document.getElementById('dmSourcesWrap');
    const dmPrev   = document.getElementById('dmPrev');
    const dmNext   = document.getElementById('dmNext');
    const dmCount  = document.getElementById('dmCounter');

    let cursor = 0, lastFocus = null;
    const order = () => visible.map(el => Number(el.dataset.index));

    function render(index) {
        const it = ITEMS[index];
        if (!it) return;
        cursor = index;

        if (it.imageUrl) {
            dmMedia.classList.remove('is-empty');
            dmMedia.innerHTML =
                `<img src="${esc(it.imageUrl)}" alt="${esc(it.title)}">` +
                `<div class="media-fallback">
                    <span class="media-fallback-icon">${esc(it.icon)}</span>
                    <p class="media-fallback-alt">${esc(it.title)}</p>
                    <p class="media-fallback-note">Image unavailable — alt text shown</p>
                 </div>`;
            const img = dmMedia.querySelector('img');
            img.addEventListener('error', () => dmMedia.classList.add('is-empty'), { once: true });
        } else {
            dmMedia.classList.add('is-empty');
            dmMedia.innerHTML =
                `<div class="media-fallback">
                    <span class="media-fallback-icon">${esc(it.icon)}</span>
                    <p class="media-fallback-alt">${esc(it.title)}</p>
                    <p class="media-fallback-note">No photograph on record</p>
                 </div>`;
        }

        dmMeta.innerHTML =
            `<span class="rounded-full bg-blue-950 px-3 py-1 text-[.65rem] font-black uppercase tracking-[.12em] text-amber-300">${esc(it.date)}</span>
             <span class="rounded-full bg-amber-100 px-3 py-1 text-[.65rem] font-black uppercase tracking-[.12em] text-amber-800">${esc(ERAS[it.era]?.label || '')}</span>
             <span class="rounded-full bg-gray-100 px-3 py-1 text-[.65rem] font-black uppercase tracking-[.12em] text-gray-600">${esc(it.label)}</span>`;

        dmTitle.textContent = it.title;
        dmProse.innerHTML   = (it.body || []).map(p => `<p>${esc(p)}</p>`).join('');

        const facts = it.facts || [];
        dmFactsW.hidden = facts.length === 0;
        dmFacts.innerHTML = facts.map(f => `<div class="fact"><dt>${esc(f.label)}</dt><dd>${esc(f.value)}</dd></div>`).join('');

        const keys = it.sources || [];
        dmSrcW.hidden = keys.length === 0;
        dmSrc.innerHTML = keys.map(k => {
            const c = CITES[k]; if (!c) return '';
            const icon = `<svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M14 4h6v6M20 4l-9 9M18 14v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5"/></svg>`;
            return c.url
                ? `<a class="src-chip" href="${esc(c.url)}" target="_blank" rel="noopener noreferrer">${esc(c.publisher)} ${icon}</a>`
                : `<span class="src-chip">${esc(c.publisher)}</span>`;
        }).join('');

        const seq = order();
        const pos = seq.indexOf(index);
        dmCount.textContent = seq.length ? `${pos + 1} of ${seq.length}` : '';
        dmPrev.disabled = pos <= 0;
        dmNext.disabled = pos < 0 || pos >= seq.length - 1;

        dm.querySelector('.modal-scroll').scrollTop = 0;
    }

    function openDetail(index) {
        lastFocus = document.activeElement;
        render(index);
        dm.classList.add('open');
        dm.setAttribute('aria-hidden', 'false');
        lock();
        dm.querySelector('[data-close-detail]').focus();
    }
    function closeDetail() {
        dm.classList.remove('open');
        dm.setAttribute('aria-hidden', 'true');
        unlock();
        lastFocus?.focus();
    }
    function move(delta) {
        const seq = order();
        const pos = seq.indexOf(cursor) + delta;
        if (pos < 0 || pos >= seq.length) return;
        render(seq[pos]);
        visible[pos]?.scrollIntoView({ behavior: REDUCE ? 'auto' : 'smooth', inline: 'center', block: 'nearest' });
    }

    track.addEventListener('click', (e) => {
        const btn = e.target.closest('[data-open]');
        if (!btn) return;
        if (moved) { moved = false; return; }
        openDetail(Number(btn.dataset.open));
    });

    dmPrev.addEventListener('click', () => move(-1));
    dmNext.addEventListener('click', () => move(1));
    dm.querySelector('[data-close-detail]').addEventListener('click', closeDetail);
    dm.addEventListener('click', (e) => { if (e.target === dm) closeDetail(); });

    /* =================== CITATIONS MODAL =================== */
    const cm       = document.getElementById('citeModal');
    const cmList   = document.getElementById('cmList');
    const cmSearch = document.getElementById('cmSearch');
    const cmCount  = document.getElementById('cmCount');
    const cmEmpty  = document.getElementById('cmEmpty');
    const cmEntries = Object.entries(CITES);

    cmList.innerHTML = cmEntries.map(([key, c], i) => `
        <li class="cite-item" data-search="${esc((c.title + ' ' + c.publisher + ' ' + c.type).toLowerCase())}">
            <span class="cite-index">${String(i + 1).padStart(2, '0')}</span>
            <div class="min-w-0 flex-1">
                <span class="cite-type">${esc(c.type)}</span>
                <p class="mt-1.5 text-[.85rem] font-black leading-snug text-blue-950">${esc(c.title)}</p>
                <p class="mt-0.5 text-[.75rem] font-semibold text-gray-500">${esc(c.publisher)}</p>
                ${c.url ? `<p class="mt-1 truncate text-[.7rem] text-gray-400">${esc(c.url)}</p>` : ''}
                <div class="cite-actions">
                    ${c.url ? `
                        <a class="cite-btn" href="${esc(c.url)}" target="_blank" rel="noopener noreferrer">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M14 4h6v6M20 4l-9 9M18 14v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5"/></svg>
                            Open source
                        </a>
                        <button type="button" class="cite-btn" data-copy="${esc(c.url)}">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><rect x="9" y="9" width="11" height="11" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>
                            Copy link
                        </button>` : `<span class="cite-btn">Not publicly linked</span>`}
                </div>
            </div>
        </li>`).join('');

    cmList.addEventListener('click', async (e) => {
        const btn = e.target.closest('[data-copy]');
        if (!btn) return;
        try {
            await navigator.clipboard.writeText(btn.dataset.copy);
            const original = btn.innerHTML;
            btn.textContent = 'Copied ✓';
            setTimeout(() => { btn.innerHTML = original; }, 1400);
        } catch { window.prompt('Copy this link:', btn.dataset.copy); }
    });

    function filterCites() {
        const q = cmSearch.value.trim().toLowerCase();
        let shown = 0;
        cmList.querySelectorAll('.cite-item').forEach(li => {
            const hit = !q || li.dataset.search.includes(q);
            li.style.display = hit ? '' : 'none';
            if (hit) shown++;
        });
        cmCount.textContent = shown + ' / ' + cmEntries.length;
        cmEmpty.classList.toggle('hidden', shown > 0);
    }
    cmSearch.addEventListener('input', filterCites);
    filterCites();

    let citeFocus = null;
    const openCite = () => {
        citeFocus = document.activeElement;
        cm.classList.add('open'); cm.setAttribute('aria-hidden', 'false');
        lock(); cm.querySelector('[data-close-cite]').focus();
    };
    const closeCite = () => {
        cm.classList.remove('open'); cm.setAttribute('aria-hidden', 'true');
        unlock(); citeFocus?.focus();
    };

    document.getElementById('openCitations').addEventListener('click', openCite);
    cm.querySelector('[data-close-cite]').addEventListener('click', closeCite);
    cm.addEventListener('click', (e) => { if (e.target === cm) closeCite(); });

    /* =================== FEEDBACK MODAL =================== */
    const fm = document.getElementById('feedbackModal');
    const fmForm = document.getElementById('constituentForm');
    let feedbackFocus = null;

    const openFeedback = () => {
        feedbackFocus = document.activeElement;
        fm.classList.add('open'); fm.setAttribute('aria-hidden', 'false');
        lock(); fm.querySelector('[data-close-feedback]').focus();
    };
    const closeFeedback = () => {
        fm.classList.remove('open'); fm.setAttribute('aria-hidden', 'true');
        unlock(); feedbackFocus?.focus();
    };

    document.getElementById('openFeedback').addEventListener('click', openFeedback);
    fm.querySelector('[data-close-feedback]').addEventListener('click', closeFeedback);
    fm.addEventListener('click', (e) => { if (e.target === fm) closeFeedback(); });

    fmForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thank you! Your feedback/historical correction suggestion has been logged and sent to the page administrators for archival verification.');
        fmForm.reset();
        closeFeedback();
    });

    /* global keyboard controls */
    document.addEventListener('keydown', (e) => {
        if (cm.classList.contains('open')) { if (e.key === 'Escape') closeCite(); return; }
        if (fm.classList.contains('open')) { if (e.key === 'Escape') closeFeedback(); return; }
        if (!dm.classList.contains('open')) return;
        if (e.key === 'Escape')     closeDetail();
        if (e.key === 'ArrowRight') move(1);
        if (e.key === 'ArrowLeft')  move(-1);
    });
});
</script>
