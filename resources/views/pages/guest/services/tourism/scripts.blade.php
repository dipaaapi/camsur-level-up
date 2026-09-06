{{-- Swiper Bundle for Vertical & Touch Carousels --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<style>
    html {
        scroll-behavior: smooth !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        /* Smooth scroll for Explore Destinations button */
        const exploreBtn = document.getElementById('exploreDestinationsBtn');
        const portalSection = document.getElementById('destinations-portal');
        if (exploreBtn && portalSection) {
            exploreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                portalSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if (history.pushState) {
                    history.pushState(null, null, '#destinations-portal');
                }
            });
        }

        /* 1. Initialize Premier Attractions Vertical Carousel (Bottom to Top) - 6 Slides */
        let premierSwiper = null;
        const counterEl = document.getElementById('verticalCarouselCounter');
        const TOTAL_SLIDES = 6;

        try {
            premierSwiper = new Swiper('.premier-vertical-swiper', {
                direction: 'vertical',
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                    reverseDirection: false, // flows bottom to top
                },
                effect: 'slide',
                on: {
                    init(s) {
                        if (counterEl) counterEl.textContent = `${(s.realIndex || 0) + 1} / ${TOTAL_SLIDES}`;
                    },
                    slideChange(s) {
                        if (counterEl) counterEl.textContent = `${(s.realIndex || 0) + 1} / ${TOTAL_SLIDES}`;
                    }
                }
            });

            const vPrev = document.getElementById('vPrevBtn');
            const vNext = document.getElementById('vNextBtn');
            if (vPrev) vPrev.addEventListener('click', () => premierSwiper.slidePrev());
            if (vNext) vNext.addEventListener('click', () => premierSwiper.slideNext());
        } catch(e) {
            console.warn('Swiper init error:', e);
        }

        /* 2. Live API Integration & Interactive Portal */
        const API_BASE = 'https://admin.visitcamsur.com/api/articles';
        const PER_PAGE = 9;

        let allArticles = [];
        let filteredArticles = [];
        let visibleCount = PER_PAGE;
        let currentCat = 'all';
        let currentQuery = '';

        const grid = document.getElementById('destGrid');
        const searchInput = document.getElementById('destSearch');
        const loadMoreWrap = document.getElementById('loadMoreWrap');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const statusBadge = document.getElementById('apiStatusBadge');

        function extractItems(raw) {
            if (!raw) return { items: [], lastPage: 1 };
            function getLastPage(obj) { return obj.last_page || (obj.meta && obj.meta.last_page) || 1; }
            if (Array.isArray(raw.data)) return { items: raw.data, lastPage: getLastPage(raw) };
            if (raw.data && Array.isArray(raw.data.data)) return { items: raw.data.data, lastPage: getLastPage(raw.data) };
            if (Array.isArray(raw)) return { items: raw, lastPage: 1 };
            for (const k of ['data', 'items', 'articles', 'results']) {
                if (Array.isArray(raw[k])) return { items: raw[k], lastPage: getLastPage(raw) };
            }
            return { items: [], lastPage: 1 };
        }

        async function fetchLiveArticles() {
            let collected = [];
            try {
                const res = await fetch(`${API_BASE}?page=1`);
                if (!res.ok) throw new Error(`HTTP ${res.status}`);
                const raw = await res.json();
                const { items: p1, lastPage } = extractItems(raw);
                collected = [...p1];

                if (lastPage > 1) {
                    const requests = [];
                    for (let p = 2; p <= Math.min(lastPage, 6); p++) {
                        requests.push(fetch(`${API_BASE}?page=${p}`).then(r => r.json()).then(d => extractItems(d).items).catch(() => []));
                    }
                    const extra = await Promise.all(requests);
                    extra.forEach(pageList => { collected = [...collected, ...pageList]; });
                }
            } catch (err) {
                console.warn('API error or CORS restriction, activating resilient fallback data:', err);
                if (statusBadge) {
                    statusBadge.innerHTML = '<span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span> Official Directory';
                }
            }

            // If API was unreachable, populate with official CamSur tourism articles
            if (!collected.length) {
                collected = [
                    {
                        id: 1,
                        title: "Caramoan Peninsula & Islands",
                        location: "Caramoan, Camarines Sur",
                        category: { name: "Beaches & Islands" },
                        description: "A breathtaking paradise of powdery white sands, hidden crystal lagoons, and dramatic limestone cliffs. Internationally acclaimed as the shoot location for the global hit reality show Survivor.",
                        images: [{ url: "{{ asset('img/services/tourism/background/caramoan_gota.jpg') }}" }]
                    },
                    {
                        id: 2,
                        title: "CamSur Watersports Complex (CWC)",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Sports & Adventure" },
                        description: "Asia's premier six-point cable ski park for wakeboarding, wakeskating, and waterskiing, complete with poolside villas, clubhouse dining, and world-class hospitality.",
                        images: [{ url: "{{ asset('img/services/tourism/background/cwc-background.jpg') }}" }]
                    },
                    {
                        id: 3,
                        title: "Ka Fuerte Sports Complex",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Sports & Recreation" },
                        description: "State-of-the-art sports and events complex hosting regional and national athletic meets, football leagues, swimming competitions, and civic gatherings.",
                        images: [{ url: "{{ asset('img/services/tourism/background/kafuerte_sports.jpg') }}" }]
                    },
                    {
                        id: 4,
                        title: "Pili Grove Golf Club",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Golf & Leisure" },
                        description: "A scenic 9-hole golf course located at the foothills of Mount Isarog within the CWC complex, providing championship greens and leisure experiences.",
                        images: [{ url: "{{ asset('img/services/tourism/background/grove-background.jpg') }}" }]
                    },
                    {
                        id: 5,
                        title: "CamSur Pickleball Club",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Sports & Adventure" },
                        description: "A state-of-the-art facility tailored for the world's fastest-growing racket sport, hosting open community plays, clinics, and competitions.",
                        images: [{ url: "{{ asset('img/services/tourism/background/pickleball_bg.jpg') }}" }]
                    },
                    {
                        id: 6,
                        title: "Villa del Rey Resort & Suites",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Resorts & Stays" },
                        description: "A tropical luxury oasis beside CWC featuring private villas, themed cabanas, swimming pools, tiki bars, and serene relaxation gardens.",
                        images: [{ url: "{{ asset('img/services/tourism/background/villa_del_rey.jpg') }}" }]
                    },
                    {
                        id: 7,
                        title: "Gota Village Resort Caramoan",
                        location: "Caramoan, Camarines Sur",
                        category: { name: "Beaches & Islands" },
                        description: "Nestled between towering limestone mountains and pristine shores, offering serene wooden cabins and direct access to island hopping excursions.",
                        images: [{ url: "{{ asset('img/services/tourism/background/caramoan_gota.jpg') }}" }]
                    },
                    {
                        id: 8,
                        title: "Camarines Sur Eco-Tourism & Heritage",
                        location: "Province-Wide, Camarines Sur",
                        category: { name: "Nature & Wildlife" },
                        description: "Explore lush tropical rainforests, natural mountain hot springs, scenic volcanic lakes, and rich heritage sites across the province.",
                        images: [{ url: "{{ asset('img/services/tourism/background/visit-background.jpg') }}" }]
                    },
                    {
                        id: 9,
                        title: "Provincial Capitol Tourism & Events",
                        location: "Cadlan, Pili, Camarines Sur",
                        category: { name: "Culture & Events" },
                        description: "The vibrant civic hub hosting the annual Kaogma Festival, agricultural expos, cultural presentations, and official provincial events.",
                        images: [{ url: "{{ asset('img/services/tourism/background/banner.jpg') }}" }]
                    }
                ];
            }

            return collected;
        }

        function buildCategories() {
            const cats = {};
            allArticles.forEach(item => {
                const c = (item.category && item.category.name) ? item.category.name : null;
                if (c) cats[c] = true;
            });

            const selectEl = document.getElementById('categorySelect');
            const quickTagsWrap = document.getElementById('quickTagsWrap');

            // 1. Populate Dropdown Options
            if (selectEl) {
                selectEl.innerHTML = '<option value="all">All Categories</option>';
                Object.keys(cats).sort().forEach(catName => {
                    const opt = document.createElement('option');
                    opt.value = catName;
                    opt.textContent = catName;
                    selectEl.appendChild(opt);
                });

                selectEl.addEventListener('change', (e) => {
                    currentCat = e.target.value;
                    updateQuickTagsActiveState(currentCat);
                    applyFilters();
                });
            }

            // 2. Populate Quick Tags (Top popular categories)
            if (quickTagsWrap) {
                quickTagsWrap.innerHTML = `
                    <button type="button" class="quick-tag active px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-blue-600 text-white transition cursor-pointer" data-cat="all">
                        All
                    </button>
                `;

                const popularKeys = Object.keys(cats).slice(0, 6);
                popularKeys.forEach(catName => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'quick-tag px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-slate-100 text-slate-800 hover:bg-slate-200 transition dark:bg-slate-700 dark:text-slate-200 dark:hover:bg-slate-600 cursor-pointer';
                    btn.dataset.cat = catName;
                    btn.textContent = catName;
                    quickTagsWrap.appendChild(btn);
                });

                quickTagsWrap.addEventListener('click', (e) => {
                    const tag = e.target.closest('.quick-tag');
                    if (!tag) return;
                    currentCat = tag.dataset.cat;
                    if (selectEl) selectEl.value = currentCat;
                    updateQuickTagsActiveState(currentCat);
                    applyFilters();
                });
            }
        }

        function updateQuickTagsActiveState(activeCat) {
            const tags = document.querySelectorAll('.quick-tag');
            tags.forEach(btn => {
                if (btn.dataset.cat === activeCat) {
                    btn.classList.add('active', 'bg-blue-600', 'text-white');
                    btn.classList.remove('bg-slate-100', 'text-slate-800', 'dark:bg-slate-700', 'dark:text-slate-200');
                } else {
                    btn.classList.remove('active', 'bg-blue-600', 'text-white');
                    btn.classList.add('bg-slate-100', 'text-slate-800', 'dark:bg-slate-700', 'dark:text-slate-200');
                }
            });
        }

        function applyFilters() {
            visibleCount = PER_PAGE;
            filteredArticles = allArticles.filter(item => {
                const cName = (item.category && item.category.name) ? item.category.name : '';
                const matchCat = (currentCat === 'all') || (cName === currentCat);
                const q = currentQuery.toLowerCase();
                const title = (item.title || '').toLowerCase();
                const loc = (item.location || '').toLowerCase();
                const desc = (item.description || '').toLowerCase();
                const matchQuery = !q || title.includes(q) || loc.includes(q) || desc.includes(q);
                return matchCat && matchQuery;
            });
            renderCards();
        }

        function renderCards() {
            grid.innerHTML = '';
            if (!filteredArticles.length) {
                grid.innerHTML = `
                    <div class="col-span-full py-16 text-center text-slate-500">
                        <p class="text-base font-bold">No destinations found.</p>
                        <p class="text-xs text-slate-400 mt-1">Try selecting another category or searching with different keywords.</p>
                    </div>
                `;
                if (loadMoreWrap) loadMoreWrap.classList.add('hidden');
                return;
            }

            const slice = filteredArticles.slice(0, visibleCount);
            slice.forEach(item => {
                const card = buildCard(item);
                if (card) grid.appendChild(card);
            });

            if (loadMoreWrap) {
                if (visibleCount < filteredArticles.length) {
                    loadMoreWrap.classList.remove('hidden');
                } else {
                    loadMoreWrap.classList.add('hidden');
                }
            }
        }

        function buildCard(item) {
            const imgUrl = (item.images && item.images.length > 0) 
                ? (item.images[0].full_url || item.images[0].url) 
                : '{{ asset("img/services/tourism/background/visit-background.jpg") }}';

            const catName = (item.category && item.category.name) ? item.category.name : 'Destination';
            const location = item.location || 'Camarines Sur';

            const card = document.createElement('div');
            card.className = "group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-xl dark:border-slate-800 dark:bg-slate-800 cursor-pointer flex flex-col justify-between";
            card.innerHTML = `
                <div>
                    <div class="relative h-52 overflow-hidden">
                        <img src="${imgUrl}" alt="${item.title}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 rounded-full bg-slate-900/80 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-white backdrop-blur-sm shadow">
                            ${catName}
                        </span>
                    </div>
                    <div class="p-5 space-y-2">
                        <h4 class="text-base font-black text-slate-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition leading-snug">
                            ${item.title}
                        </h4>
                        <p class="text-xs text-slate-600 dark:text-slate-300 line-clamp-2 leading-relaxed font-normal">
                            ${item.description || ''}
                        </p>
                    </div>
                </div>
                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 dark:border-slate-700/60 text-xs">
                    <span class="font-medium text-slate-500 dark:text-slate-400 truncate max-w-[170px]">${location}</span>
                    <span class="font-bold text-blue-600 dark:text-blue-400">View Details &rarr;</span>
                </div>
            `;

            card.addEventListener('click', () => openModal(item, imgUrl, catName, location));
            return card;
        }

        // Modal Handlers
        const modal = document.getElementById('destModal');
        const modalImg = document.getElementById('modalImg');
        const modalCat = document.getElementById('modalCat');
        const modalTitle = document.getElementById('modalTitle');
        const modalLoc = document.getElementById('modalLoc');
        const modalDesc = document.getElementById('modalDesc');
        const closeBtn = document.getElementById('closeDestModal');

        function openModal(item, imgUrl, catName, location) {
            modalImg.src = imgUrl;
            modalCat.textContent = catName;
            modalTitle.textContent = item.title;
            modalLoc.textContent = location;
            modalDesc.textContent = item.description || '';
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (modal && !modal.classList.contains('hidden')) closeModal();
                if (sugModal && !sugModal.classList.contains('hidden')) closeSugModal();
            }
        });

        // Search
        const searchClearBtn = document.getElementById('destSearchClear');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                currentQuery = e.target.value.trim();
                if (searchClearBtn) {
                    if (currentQuery.length > 0) {
                        searchClearBtn.classList.remove('hidden');
                        searchClearBtn.classList.add('flex');
                    } else {
                        searchClearBtn.classList.add('hidden');
                        searchClearBtn.classList.remove('flex');
                    }
                }
                applyFilters();
            });
        }

        if (searchClearBtn) {
            searchClearBtn.addEventListener('click', () => {
                if (searchInput) searchInput.value = '';
                currentQuery = '';
                searchClearBtn.classList.add('hidden');
                searchClearBtn.classList.remove('flex');
                applyFilters();
                if (searchInput) searchInput.focus();
            });
        }

        // Load more
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                visibleCount += PER_PAGE;
                renderCards();
            });
        }

        // Suggestion Modal Handlers
        const sugModal = document.getElementById('suggestionModal');
        const openSugBtn = document.getElementById('openSuggestionModalBtn');
        const closeSugBtn = document.getElementById('closeSuggestionModal');
        const cancelSugBtn = document.getElementById('cancelSuggestionBtn');
        const sugForm = document.getElementById('tourismSuggestionForm');
        const sugSuccessMsg = document.getElementById('suggestionSuccessMsg');

        function openSugModal() {
            if (!sugModal) return;
            sugModal.classList.remove('hidden');
            sugModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeSugModal() {
            if (!sugModal) return;
            sugModal.classList.add('hidden');
            sugModal.classList.remove('flex');
            document.body.style.overflow = '';
            if (sugSuccessMsg) sugSuccessMsg.classList.add('hidden');
        }

        if (openSugBtn) openSugBtn.addEventListener('click', openSugModal);
        if (closeSugBtn) closeSugBtn.addEventListener('click', closeSugModal);
        if (cancelSugBtn) cancelSugBtn.addEventListener('click', closeSugModal);

        if (sugModal) {
            sugModal.addEventListener('click', (e) => {
                if (e.target === sugModal) closeSugModal();
            });
        }

        if (sugForm) {
            sugForm.addEventListener('submit', (e) => {
                e.preventDefault();
                if (sugSuccessMsg) {
                    sugSuccessMsg.classList.remove('hidden');
                }
                sugForm.reset();
                setTimeout(() => {
                    closeSugModal();
                }, 2200);
            });
        }

        // Bootstrap
        fetchLiveArticles().then(data => {
            allArticles = data;
            buildCategories();
            applyFilters();
        });
    });

    // Full Travel Guide Toggle
    function toggleFullTravelGuide() {
        const panel = document.getElementById('fullTravelGuidePanel');
        const btnText = document.getElementById('travelGuideBtnText');
        const btnIcon = document.getElementById('travelGuideBtnIcon');

        if (!panel) return;

        const isHidden = panel.style.display === 'none' || panel.style.display === '';

        if (isHidden) {
            panel.style.display = 'flex';
            panel.style.flexDirection = 'column';
            panel.setAttribute('aria-hidden', 'false');
            if (btnText) btnText.textContent = 'Collapse Guide';
            if (btnIcon) btnIcon.style.transform = 'rotate(180deg)';
            setTimeout(() => {
                panel.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 80);
        } else {
            panel.style.display = 'none';
            panel.setAttribute('aria-hidden', 'true');
            if (btnText) btnText.textContent = 'Full Travel Guide';
            if (btnIcon) btnIcon.style.transform = 'rotate(0deg)';
            const section = panel.closest('section');
            if (section) {
                setTimeout(() => {
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 80);
            }
        }
    }
</script>
