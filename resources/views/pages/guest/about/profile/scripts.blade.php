<script>
    // 📊 37 Municipalities & Component Cities Cadastre Data
    const townsData = [
        {name: 'Baao', areaHa: 10663, area: '10,663 ha', district: 5, tag: 'Inland Lake & Bicol River Basin Corridor'},
        {name: 'Balatan', areaHa: 9309, area: '9,309 ha', district: 5, tag: 'Coastal Marine Fishing & Ragay Gulf Port'},
        {name: 'Bato', areaHa: 10712, area: '10,712 ha', district: 5, tag: 'Freshwater Aquaculture Hub & Lake Bato'},
        {name: 'Bombon', areaHa: 2873, area: '2,873 ha', district: 3, tag: 'Heritage Town & Famous Leaning Bell Tower'},
        {name: 'Buhi', areaHa: 24665, area: '24,665 ha', district: 5, tag: 'Sanctuary of Sinarapan (World\'s Smallest Fish)'},
        {name: 'Bula', areaHa: 16764, area: '16,764 ha', district: 5, tag: 'Expansive Central Agrarian Rice Plains'},
        {name: 'Cabusao', areaHa: 4680, area: '4,680 ha', district: 1, tag: 'San Miguel Bay Mangrove Wetland & Fishery'},
        {name: 'Calabanga', areaHa: 16380, area: '16,380 ha', district: 3, tag: 'Major Commercial Fishery & Coastal Trade Hub'},
        {name: 'Camaligan', areaHa: 468, area: '468 ha', district: 3, tag: 'Historic Riverfront Enclave & Oldest Church Site'},
        {name: 'Canaman', areaHa: 4327, area: '4,327 ha', district: 3, tag: 'Suburban Cultural Hub of Native Crafts & Arts'},
        {name: 'Caramoan', areaHa: 27600, area: '27,600 ha', district: 4, tag: 'World-Class Limestone Karst Islands & Marine Park'},
        {name: 'Del Gallego', areaHa: 20831, area: '20,831 ha', district: 1, tag: 'Northernmost Gateway Connecting Bicol to Luzon'},
        {name: 'Gainza', areaHa: 1475, area: '1,475 ha', district: 2, tag: 'Rich Bicol River Agrarian Delta'},
        {name: 'Garchitorena', areaHa: 24380, area: '24,380 ha', district: 4, tag: 'Pacific Ocean Seaboard & Protected Forestry'},
        {name: 'Goa', areaHa: 20318, area: '20,318 ha', district: 4, tag: 'Commercial & Higher Education Capital of Partido'},
        {name: 'Iriga City', areaHa: 13735, area: '13,735 ha', district: 5, isCity: true, tag: 'City of Crystal Springs & Mount Asog Foothills'},
        {name: 'Lagonoy', areaHa: 37790, area: '37,790 ha', district: 4, tag: 'Expansive Coastal Watersheds & Mineral Reserves'},
        {name: 'Libmanan', areaHa: 34282, area: '34,282 ha', district: 2, tag: 'Premier Rice Granary & Ancient Karst Caves'},
        {name: 'Lupi', areaHa: 19912, area: '19,912 ha', district: 1, tag: 'Highland Forest Watershed & Railway Transport Line'},
        {name: 'Magarao', areaHa: 4497, area: '4,497 ha', district: 3, tag: 'Agro-Aquaculture & Resilient Coastal Basin'},
        {name: 'Milaor', areaHa: 3364, area: '3,364 ha', district: 2, tag: 'Metropolitan Commercial Gateway to Naga City'},
        {name: 'Minalabac', areaHa: 12610, area: '12,610 ha', district: 2, tag: 'Scenic Ragay Gulf Coastline & White Beaches'},
        {name: 'Nabua', areaHa: 9620, area: '9,620 ha', district: 5, tag: 'Rinconada Educational & Commercial Crossroads'},
        {name: 'Naga City', areaHa: 8448, area: '8,448 ha', district: 3, isCity: true, tag: 'Heart of Bicol, Marian Pilgrimage & Tech Hub'},
        {name: 'Ocampo', areaHa: 11833, area: '11,833 ha', district: 3, tag: 'Mount Isarog Highland Agro-Tourism & Springs'},
        {name: 'Pamplona', areaHa: 8060, area: '8,060 ha', district: 2, tag: 'Central Highway Logistics & Grain Production'},
        {name: 'Pasacao', areaHa: 14954, area: '14,954 ha', district: 2, tag: 'Port of Pasacao — Premier Regional Seaport'},
        {name: 'Pili', areaHa: 12625, area: '12,625 ha', district: 3, isCapital: true, tag: 'Provincial Capital, Capitol Complex & CWC Watersports'},
        {name: 'Presentacion', areaHa: 14380, area: '14,380 ha', district: 4, tag: 'Pacific Coastline, Sea Caves & Mineral Resources'},
        {name: 'Ragay', areaHa: 40022, area: '40,022 ha', district: 1, tag: 'Largest Municipality by Land Area in Camarines Sur'},
        {name: 'Sagñay', areaHa: 14476, area: '14,476 ha', district: 4, tag: 'Atalayan Island Marine Sanctuary & Mountain Vistas'},
        {name: 'San Fernando', areaHa: 7176, area: '7,176 ha', district: 2, tag: 'Central Bicol Plains High-Yield Rice Basin'},
        {name: 'San Jose', areaHa: 4307, area: '4,307 ha', district: 4, tag: 'Lagonoy Gulf Maritime Trade & Eco-Tourism Port'},
        {name: 'Sipocot', areaHa: 24343, area: '24,343 ha', district: 1, tag: 'Major Commercial Highway Nexus of the 1st District'},
        {name: 'Siruma', areaHa: 14127, area: '14,127 ha', district: 4, tag: 'Pristine Northern Coves & Untouched White Beaches'},
        {name: 'Tigaon', areaHa: 7235, area: '7,235 ha', district: 4, tag: 'Mount Isarog Foothill Cacao & High-Value Orchards'},
        {name: 'Tinambac', areaHa: 35162, area: '35,162 ha', district: 4, tag: 'Dual Coastline Plains & Extensive Coconut Groves'}
    ];

    let currentDistrict = 'all';
    let currentSearch = '';
    let currentSort = 'name-asc';
    let currentViewMode = 'grid';
    const maxTownArea = 40022;

    function filterDistrict(dist) {
        currentDistrict = dist;
        document.querySelectorAll('.dist-filter-btn').forEach(btn => {
            btn.className = 'dist-filter-btn px-3.5 py-1.5 rounded-full font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition';
        });
        const activeBtn = document.getElementById(`dist-btn-${dist}`);
        if (activeBtn) {
            activeBtn.className = 'dist-filter-btn px-3.5 py-1.5 rounded-full font-bold bg-emerald-600 text-white shadow-xs transition';
        }
        renderTowns();
    }

    function handleTownSearch() {
        currentSearch = document.getElementById('townSearch').value.toLowerCase().trim();
        renderTowns();
    }

    function handleTownSort() {
        currentSort = document.getElementById('townSort').value;
        renderTowns();
    }

    function setViewMode(mode) {
        currentViewMode = mode;
        const gridBtn = document.getElementById('view-mode-grid');
        const tableBtn = document.getElementById('view-mode-table');
        const gridView = document.getElementById('townsGridView');
        const tableView = document.getElementById('townsTableView');

        if (mode === 'grid') {
            if (gridBtn) gridBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg bg-white text-emerald-700 shadow-xs transition';
            if (tableBtn) tableBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg text-slate-600 hover:text-slate-900 transition';
            if (gridView) gridView.classList.remove('hidden');
            if (tableView) tableView.classList.add('hidden');
        } else {
            if (tableBtn) tableBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg bg-white text-emerald-700 shadow-xs transition';
            if (gridBtn) gridBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold rounded-lg text-slate-600 hover:text-slate-900 transition';
            if (tableView) tableView.classList.remove('hidden');
            if (gridView) gridView.classList.add('hidden');
        }
    }

    function resetTownFilters() {
        const searchInput = document.getElementById('townSearch');
        const sortSelect = document.getElementById('townSort');
        if (searchInput) searchInput.value = '';
        currentSearch = '';
        if (sortSelect) sortSelect.value = 'name-asc';
        currentSort = 'name-asc';
        filterDistrict('all');
    }

    function getDistrictBadgeColor(d) {
        switch(d) {
            case 1: return 'bg-blue-100 text-blue-800 border-blue-200';
            case 2: return 'bg-amber-100 text-amber-800 border-amber-200';
            case 3: return 'bg-emerald-100 text-emerald-800 border-emerald-200';
            case 4: return 'bg-purple-100 text-purple-800 border-purple-200';
            case 5: return 'bg-rose-100 text-rose-800 border-rose-200';
            default: return 'bg-slate-100 text-slate-800 border-slate-200';
        }
    }

    function renderTowns() {
        let list = townsData.filter(t => {
            const matchDistrict = currentDistrict === 'all' || t.district === currentDistrict;
            const matchSearch = !currentSearch ||
                t.name.toLowerCase().includes(currentSearch) ||
                t.tag.toLowerCase().includes(currentSearch) ||
                `district ${t.district}`.includes(currentSearch);
            return matchDistrict && matchSearch;
        });

        // Sort
        list.sort((a, b) => {
            if (currentSort === 'name-asc') return a.name.localeCompare(b.name);
            if (currentSort === 'area-desc') return b.areaHa - a.areaHa;
            if (currentSort === 'area-asc') return a.areaHa - b.areaHa;
            if (currentSort === 'district-asc') return a.district - b.district || a.name.localeCompare(b.name);
            return 0;
        });

        // Count update
        const countEl = document.getElementById('townsCount');
        if (countEl) {
            countEl.textContent = `Showing ${list.length} of 37 Municipalities & Cities`;
        }

        const gridView = document.getElementById('townsGridView');
        const tableBody = document.getElementById('townsTableBody');
        const emptyState = document.getElementById('townsEmptyState');

        if (!gridView || !tableBody) return;

        if (list.length === 0) {
            gridView.innerHTML = '';
            tableBody.innerHTML = '';
            if (emptyState) emptyState.classList.remove('hidden');
            return;
        }
        if (emptyState) emptyState.classList.add('hidden');

        // Render Grid Cards
        gridView.innerHTML = list.map(t => {
            const pct = Math.max(8, Math.round((t.areaHa / maxTownArea) * 100));
            const badgeClass = getDistrictBadgeColor(t.district);

            let titleBadge = '';
            if (t.isCapital) {
                titleBadge = '<span class="inline-flex items-center gap-1 text-[10px] font-black bg-amber-500 text-white px-2 py-0.5 rounded-md shadow-xs">👑 Capital</span>';
            } else if (t.isCity) {
                titleBadge = '<span class="inline-flex items-center gap-1 text-[10px] font-black bg-blue-600 text-white px-2 py-0.5 rounded-md shadow-xs">🏙️ City</span>';
            }

            return `
                <div class="bg-gradient-to-br from-white to-slate-50/80 rounded-2xl p-4 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-emerald-300 transition duration-300 flex flex-col justify-between space-y-3 group">
                    <div>
                        <div class="flex items-start justify-between gap-2">
                            <div class="space-y-1">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-black text-slate-900 text-sm group-hover:text-emerald-700 transition">${t.name}</h4>
                                    ${titleBadge}
                                </div>
                                <p class="text-[11px] text-slate-500 leading-snug line-clamp-2">${t.tag}</p>
                            </div>
                            <span class="text-[10px] font-black px-2 py-0.5 rounded-full shrink-0 border ${badgeClass}">D${t.district}</span>
                        </div>
                    </div>

                    <div class="space-y-1.5 pt-2 border-t border-slate-100">
                        <div class="flex justify-between items-center text-[11px]">
                            <span class="text-slate-400 font-semibold">Territorial Area</span>
                            <span class="font-black text-slate-800">${t.area}</span>
                        </div>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-gradient-to-r from-emerald-500 to-teal-400 h-1.5 rounded-full" style="width: ${pct}%"></div>
                        </div>
                    </div>
                </div>
            `;
        }).join('');

        // Render Table
        tableBody.innerHTML = list.map((t, idx) => {
            const badgeClass = getDistrictBadgeColor(t.district);
            let titleBadge = '';
            if (t.isCapital) titleBadge = '<span class="text-[10px] font-bold bg-amber-100 text-amber-800 px-1.5 py-0.5 rounded ml-1.5">👑 Capital</span>';
            if (t.isCity) titleBadge = '<span class="text-[10px] font-bold bg-blue-100 text-blue-800 px-1.5 py-0.5 rounded ml-1.5">🏙️ City</span>';

            return `
                <tr class="hover:bg-slate-50/80 transition">
                    <td class="px-4 py-3 font-bold text-slate-400 text-[11px]">${idx + 1}</td>
                    <td class="px-4 py-3 font-bold text-slate-900">
                        ${t.name} ${titleBadge}
                    </td>
                    <td class="px-4 py-3">
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full border ${badgeClass}">District ${t.district}</span>
                    </td>
                    <td class="px-4 py-3 font-black text-slate-800">${t.area}</td>
                    <td class="px-4 py-3 text-slate-500 text-[11px]">${t.tag}</td>
                </tr>
            `;
        }).join('');
    }

    // 🏔️ Topography Showcase Controller
    let topoIdx = 0;
    const totalTopo = 4;
    let topoInterval = null;

    function setTopo(idx) {
        if (idx < 0) idx = totalTopo - 1;
        if (idx >= totalTopo) idx = 0;

        for (let i = 0; i < totalTopo; i++) {
            const slide = document.getElementById(`topo-slide-${i}`);
            const dot = document.getElementById(`topo-dot-${i}`);
            const card = document.getElementById(`topo-card-${i}`);

            if (slide) {
                if (i === idx) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100');
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            }

            if (dot) {
                if (i === idx) {
                    dot.className = 'topo-dot w-6 h-1.5 rounded-full bg-white shadow-sm transition-all duration-300';
                } else {
                    dot.className = 'topo-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300';
                }
            }

            if (card) {
                const activeThemes = [
                    ['border-blue-500', 'bg-blue-50/70', 'ring-2', 'ring-blue-400/20', 'shadow-md'],
                    ['border-emerald-500', 'bg-emerald-50/70', 'ring-2', 'ring-emerald-400/20', 'shadow-md'],
                    ['border-amber-500', 'bg-amber-50/70', 'ring-2', 'ring-amber-400/20', 'shadow-md'],
                    ['border-sky-500', 'bg-sky-50/70', 'ring-2', 'ring-sky-400/20', 'shadow-md']
                ];
                const allActive = ['border-blue-500', 'bg-blue-50/70', 'ring-blue-400/20', 'border-emerald-500', 'bg-emerald-50/70', 'ring-emerald-400/20', 'border-amber-500', 'bg-amber-50/70', 'ring-amber-400/20', 'border-sky-500', 'bg-sky-50/70', 'ring-sky-400/20', 'ring-2', 'shadow-md'];
                allActive.forEach(c => card.classList.remove(c));
                card.classList.remove('border-slate-200/80', 'bg-white');

                if (i === idx) {
                    activeThemes[i].forEach(c => card.classList.add(c));
                } else {
                    card.classList.add('border-slate-200/80', 'bg-white');
                }
            }
        }
        topoIdx = idx;
    }

    function moveTopo(dir) {
        setTopo(topoIdx + dir);
    }

    function startTopoAuto() {
        if (!topoInterval) {
            topoInterval = setInterval(() => moveTopo(1), 5000);
        }
    }

    function stopTopoAuto() {
        if (topoInterval) {
            clearInterval(topoInterval);
            topoInterval = null;
        }
    }

    // 💧 Hydrography Showcase Controller
    let hydroIdx = 0;
    const totalHydro = 4;
    let hydroInterval = null;

    function setHydro(idx) {
        if (idx < 0) idx = totalHydro - 1;
        if (idx >= totalHydro) idx = 0;

        for (let i = 0; i < totalHydro; i++) {
            const slide = document.getElementById(`hydro-slide-${i}`);
            const dot = document.getElementById(`hydro-dot-${i}`);
            const card = document.getElementById(`hydro-card-${i}`);

            if (slide) {
                if (i === idx) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100');
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            }

            if (dot) {
                if (i === idx) {
                    dot.className = 'hydro-dot w-6 h-1.5 rounded-full bg-white shadow-sm transition-all duration-300';
                } else {
                    dot.className = 'hydro-dot w-2 h-1.5 rounded-full bg-white/40 hover:bg-white/70 shadow-sm transition-all duration-300';
                }
            }

            if (card) {
                if (i === idx) {
                    card.classList.add('border-blue-400', 'ring-2', 'ring-blue-400/20', 'shadow-md');
                    card.classList.remove('border-transparent');
                } else {
                    card.classList.remove('border-blue-400', 'ring-2', 'ring-blue-400/20', 'shadow-md');
                    card.classList.add('border-transparent');
                }
            }
        }
        hydroIdx = idx;
    }

    function moveHydro(dir) {
        setHydro(hydroIdx + dir);
    }

    function startHydroAuto() {
        if (!hydroInterval) {
            hydroInterval = setInterval(() => moveHydro(1), 5000);
        }
    }

    function stopHydroAuto() {
        if (hydroInterval) {
            clearInterval(hydroInterval);
            hydroInterval = null;
        }
    }

    // Initialize & bind hover pause & Modal triggers
    document.addEventListener('DOMContentLoaded', () => {
        renderTowns();

        const topoContainer = document.getElementById('topo-showcase-container');
        if (topoContainer) {
            topoContainer.addEventListener('mouseenter', stopTopoAuto);
            topoContainer.addEventListener('mouseleave', startTopoAuto);
            startTopoAuto();
        }

        const hydroContainer = document.getElementById('hydro-showcase-container');
        if (hydroContainer) {
            hydroContainer.addEventListener('mouseenter', stopHydroAuto);
            hydroContainer.addEventListener('mouseleave', startHydroAuto);
            startHydroAuto();
        }

        // Profile Suggestion Modal Handlers
        const profSugModal = document.getElementById('profileSuggestionModal');
        const openProfSugBtn = document.getElementById('openProfileSuggestionBtn');
        const closeProfSugBtn = document.getElementById('closeProfileSuggestionModal');
        const cancelProfSugBtn = document.getElementById('cancelProfileSuggestionBtn');
        const profSugForm = document.getElementById('profileSuggestionForm');
        const profSugSuccessMsg = document.getElementById('profileSuggestionSuccessMsg');

        function openProfModal() {
            if (!profSugModal) return;
            profSugModal.classList.remove('hidden');
            profSugModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeProfModal() {
            if (!profSugModal) return;
            profSugModal.classList.add('hidden');
            profSugModal.classList.remove('flex');
            document.body.style.overflow = '';
            if (profSugSuccessMsg) profSugSuccessMsg.classList.add('hidden');
        }

        if (openProfSugBtn) openProfSugBtn.addEventListener('click', openProfModal);
        if (closeProfSugBtn) closeProfSugBtn.addEventListener('click', closeProfModal);
        if (cancelProfSugBtn) cancelProfSugBtn.addEventListener('click', closeProfModal);

        if (profSugModal) {
            profSugModal.addEventListener('click', (e) => {
                if (e.target === profSugModal) closeProfModal();
            });
        }

        if (profSugForm) {
            profSugForm.addEventListener('submit', (e) => {
                e.preventDefault();
                if (profSugSuccessMsg) {
                    profSugSuccessMsg.classList.remove('hidden');
                }
                profSugForm.reset();
                setTimeout(() => {
                    closeProfModal();
                }, 2200);
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (profSugModal && !profSugModal.classList.contains('hidden')) closeProfModal();
            }
        });
    });
</script>
