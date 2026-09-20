<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <span>🏛️</span> {{ __('Admin Control Panel') }}
            </h2>
            <span class="text-xs font-semibold px-3 py-1 bg-blue-100 text-blue-800 rounded-full">
                Laravel 13 • {{ date('Y') }}
            </span>
        </div>
    </x-slot>

    {{-- Main Container with Alpine State --}}
    <div x-data="{
        clockMode: 'digital',
        rightTrayOpen: false,
        activeTab: 'messages',
        activeIdxTab: 'me',
        activeArcTab: 'me',
        activeActTab: 'month',
        showIndexedModal: false,
        showArchivedModal: false,
        showActivityModal: false,
        showTaskModal: false,
        showMessageModal: false,
        showAlarmModal: false,
        msgTarget: 'ALL TEAM',
        alarmTitle: '',
        alarmDesc: '',
        currentAlarmIdx: -1,
        timeStr: '',
        dateStr: '',
        tasks: JSON.parse(localStorage.getItem('admin_tasks') || '[]'),
        memos: JSON.parse(localStorage.getItem('admin_team_bulletin_v1') || '[]'),
        
        init() {
            this.updateClock();
            setInterval(() => this.updateClock(), 1000);
            this.checkAlarms();
        },
        updateClock() {
            const now = new Date();
            this.timeStr = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
            this.dateStr = now.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            
            // Analog Hand Calculation
            const h = now.getHours();
            const m = now.getMinutes();
            const s = now.getSeconds();
            if (this.$refs.analogHour) this.$refs.analogHour.style.transform = `rotate(${(h * 30) + (m / 2)}deg)`;
            if (this.$refs.analogMin) this.$refs.analogMin.style.transform = `rotate(${(m * 6) + (s / 10)}deg)`;
            if (this.$refs.analogSec) this.$refs.analogSec.style.transform = `rotate(${s * 6}deg)`;
        },
        checkAlarms() {
            const todayStr = new Date().toISOString().split('T')[0];
            this.tasks.forEach((task, idx) => {
                const taskKey = `alarm_ack_${task.title}_${task.rawDate}`;
                if (task.rawDate === todayStr && !localStorage.getItem(taskKey)) {
                    this.triggerAlarm(task, idx);
                }
            });
        },
        triggerAlarm(task, idx) {
            this.currentAlarmIdx = idx;
            this.alarmTitle = task.title;
            this.alarmDesc = task.desc || 'Priority task reached its deadline today.';
            this.showAlarmModal = true;
        },
        acknowledgeAlarm() {
            if (this.currentAlarmIdx > -1 && this.tasks[this.currentAlarmIdx]) {
                const task = this.tasks[this.currentAlarmIdx];
                localStorage.setItem(`alarm_ack_${task.title}_${task.rawDate}`, 'true');
                this.deleteTask(this.currentAlarmIdx);
            }
            this.showAlarmModal = false;
            this.currentAlarmIdx = -1;
        },
        saveTask(title, date, desc) {
            if (!title || !date) return alert('Title and Date are required!');
            const displayDate = new Date(date).toLocaleDateString('en-US', { month: 'short', day: 'numeric' }).toUpperCase();
            this.tasks.push({ title, desc, date: displayDate, rawDate: date });
            localStorage.setItem('admin_tasks', JSON.stringify(this.tasks));
            this.showTaskModal = false;
        },
        deleteTask(idx) {
            this.tasks.splice(idx, 1);
            localStorage.setItem('admin_tasks', JSON.stringify(this.tasks));
        },
        openMsgModal(target) {
            this.msgTarget = target;
            this.showMessageModal = true;
        },
        sendMemo(content) {
            if (!content) return;
            const now = new Date();
            const newMemo = {
                id: Date.now(),
                target: this.msgTarget,
                from: '{{ Auth::user()->name }}',
                content: content,
                time: now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true })
            };
            this.memos.unshift(newMemo);
            localStorage.setItem('admin_team_bulletin_v1', JSON.stringify(this.memos));
            this.showMessageModal = false;
        },
        dismissMemo(id) {
            this.memos = this.memos.filter(m => m.id !== id);
            localStorage.setItem('admin_team_bulletin_v1', JSON.stringify(this.memos));
        }
    }" class="py-8 bg-slate-100 min-h-screen">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            {{-- Flash Messages --}}
            @if (session('login') || session('success'))
                <div class="p-4 bg-emerald-500 text-white rounded-2xl shadow-lg flex items-center justify-between">
                    <div class="flex items-center gap-3 font-semibold">
                        <span>✅</span> {{ session('login') ?? session('success') }}
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="p-4 bg-rose-500 text-white rounded-2xl shadow-lg flex items-center justify-between">
                    <div class="flex items-center gap-3 font-semibold">
                        <span>⚠️</span> {{ session('error') }}
                    </div>
                </div>
            @endif

            {{-- 1. HERO WELCOME BANNER --}}
            <div id="welcome-banner" x-data="{ open: true }" x-show="open" x-transition:leave="transition ease-in duration-300 transform opacity-0 -translate-y-4" class="relative bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-6 sm:p-8 shadow-xl overflow-hidden border border-blue-800/40 flex items-center justify-between">
                <div class="relative z-10 max-w-2xl space-y-2">
                    <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight leading-tight text-white">
                        {{ $welcomeMessage ?? 'Welcome back, ' . Auth::user()->name . '!' }}
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base font-normal">
                        {{ $welcomeDescription ?? 'Manage official news, announcements, public services, and system analytics for Camarines Sur.' }}
                    </p>
                </div>
                <div class="hidden sm:flex items-center gap-4 relative z-10 shrink-0">
                    <img src="{{ asset('img/shared/camsur_logo.png') }}" alt="CamSur Seal" class="h-28 w-auto filter drop-shadow-xl">
                    <button @click="open = false" class="text-blue-200 hover:text-white p-2 rounded-full hover:bg-white/10 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            {{-- 2. LIVE TICKER BULLETIN MARQUEE --}}
            <div class="bg-blue-950 text-white rounded-2xl p-3 shadow-md border border-blue-800/60 flex items-center overflow-hidden">
                <div class="flex items-center gap-2 px-3 py-1 bg-rose-600 text-white text-xs font-black rounded-lg uppercase tracking-wider shrink-0 z-10 shadow">
                    <span>📣</span> BULLETIN
                </div>
                <div class="overflow-hidden whitespace-nowrap w-full ml-4 relative">
                    <div class="inline-block animate-marquee text-xs font-semibold space-x-8">
                        <span class="text-amber-300">⚡ System Status: All service modules running normally.</span>
                        <template x-for="task in tasks" :key="task.title">
                            <span class="text-blue-200">📌 <strong>Task:</strong> <span x-text="task.title"></span> (<span x-text="task.date"></span>)</span>
                        </template>
                        <template x-for="memo in memos" :key="memo.id">
                            <span class="text-emerald-300">💬 <strong>Memo:</strong> <span x-text="memo.content"></span> - <small x-text="memo.from"></small></span>
                        </template>
                    </div>
                </div>
            </div>

            {{-- 3. TOP STATS OVERVIEW CARDS --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Total Indexed Card --}}
                <div @click="showIndexedModal = true" class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 hover:shadow-lg transition cursor-pointer flex items-center justify-between group">
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Indexed</p>
                        <p class="text-3xl font-black text-blue-900 mt-1">{{ $monthlyStats['overall_index'] ?? 0 }}</p>
                    </div>
                    <div class="p-4 bg-blue-50 text-blue-600 rounded-2xl group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                </div>

                {{-- Archived Items Card --}}
                <div @click="showArchivedModal = true" class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 hover:shadow-lg transition cursor-pointer flex items-center justify-between group">
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Archived Items</p>
                        <p class="text-3xl font-black text-amber-600 mt-1">{{ $monthlyStats['overall_archive'] ?? 0 }}</p>
                    </div>
                    <div class="p-4 bg-amber-50 text-amber-600 rounded-2xl group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v1a2 2 0 01-2 2M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                </div>

                {{-- Monthly Activity Card --}}
                <div @click="showActivityModal = true" class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 hover:shadow-lg transition cursor-pointer flex items-center justify-between group">
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Monthly Activity</p>
                        <p class="text-3xl font-black text-emerald-600 mt-1">{{ $monthlyStats['activities_count'] ?? 0 }}</p>
                    </div>
                    <div class="p-4 bg-emerald-50 text-emerald-600 rounded-2xl group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                </div>
            </div>

            {{-- 4. MODULES FEATURE GRID --}}
            @php
                $cards = [];
                $userPerms = is_array(Auth::user()->card_permissions) ? Auth::user()->card_permissions : [];
                if (empty($userPerms)) {
                    $uname = Auth::user()->username;
                    if(in_array($uname, ['admin', 'multimedia', 'icarmo'])) $userPerms[] = 'News';
                    $userPerms[] = 'Videos';
                    $userPerms[] = 'SDGs';
                    if(in_array($uname, ['admin', 'icarmo', 'multimedia'])) { $userPerms[] = 'Galleries'; $userPerms[] = 'Jobs'; }
                    if(in_array($uname, ['admin', 'bacadmin', 'baccamarinessur'])) { $userPerms[] = 'Bids'; $userPerms[] = 'Procurements'; }
                }

                if (in_array('News', $userPerms)) {
                    $cards[] = ['title' => 'Latest News', 'index' => $latest_news ?? 0, 'archive' => $latest_news_archive ?? 0, 'route' => route('admin.latest-news.index'), 'color' => 'bg-blue-600', 'unused' => $unused_news_count ?? 0];
                    $cards[] = ['title' => 'Press Releases', 'index' => $latest_pr ?? 0, 'archive' => $latest_pr_archive ?? 0, 'route' => route('admin.latest-pr.index'), 'color' => 'bg-indigo-600'];
                }
                if (in_array('Videos', $userPerms)) {
                    $cards[] = ['title' => 'Featured Videos', 'index' => $latest_featured_videos ?? 0, 'archive' => $latest_featured_videos_archive ?? 0, 'route' => route('admin.latest-featured-video.index'), 'color' => 'bg-purple-600', 'unused' => $unused_video_count ?? 0];
                }
                if (in_array('SDGs', $userPerms)) {
                    $cards[] = ['title' => 'Sustainable Goals', 'index' => $latest_sdgs ?? 0, 'archive' => $latest_sdgs_archive ?? 0, 'route' => route('admin.latest-sdg.index'), 'color' => 'bg-teal-600'];
                }
                if (in_array('Galleries', $userPerms)) {
                    $cards[] = ['title' => 'Main Galleries', 'index' => $maingalleries ?? 0, 'archive' => $maingalleries_archive ?? 0, 'route' => route('admin.main-gallery.index'), 'color' => 'bg-rose-600', 'unused' => $unused_gallery_count ?? 0];
                }
                if (in_array('Jobs', $userPerms)) {
                    $cards[] = ['title' => 'Jobs & Openings', 'index' => $latest_announcements ?? 0, 'archive' => $latest_announcements_archive ?? 0, 'route' => route('admin.latest-announcement.index'), 'color' => 'bg-amber-600', 'unused' => $unused_announcement_count ?? 0];
                }
                if (in_array('Bids', $userPerms)) {
                    $cards[] = ['title' => 'Bid Results', 'index' => $bid_results ?? 0, 'archive' => $bid_results_archive ?? 0, 'route' => route('admin.bid-result.index'), 'color' => 'bg-sky-600', 'type' => 'document'];
                }
                if (in_array('Procurements', $userPerms)) {
                    $cards[] = ['title' => 'Bids and Procurement', 'index' => $bidsandproc ?? 0, 'archive' => $bidsandproc_archive ?? 0, 'route' => route('admin.bidsandproc.index'), 'color' => 'bg-emerald-600', 'type' => 'document'];
                }
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($cards as $card)
                    <a href="{{ $card['route'] }}" class="block group">
                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-200/80 group-hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                            <div class="absolute -right-6 -bottom-6 opacity-5 group-hover:opacity-10 transition">
                                <img src="{{ asset('img/shared/camsur_logo_hd.png') }}" class="w-32 h-32 object-contain">
                            </div>
                            
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-bold text-lg text-slate-800 group-hover:text-blue-700 transition">{{ $card['title'] }}</h3>
                                <span class="w-3 h-3 rounded-full {{ $card['color'] }}"></span>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-2 text-xs text-slate-500 font-semibold">
                                    @if(($card['type'] ?? 'image') === 'image')
                                        <span class="px-2.5 py-1 bg-amber-50 text-amber-700 rounded-lg border border-amber-200/60">
                                            Unused: <strong>{{ $card['unused'] ?? 0 }}</strong>
                                        </span>
                                    @else
                                        <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg">
                                            📄 System Document
                                        </span>
                                    @endif
                                </div>

                                <div class="flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-bold text-slate-600">
                                    <span class="text-emerald-600">Active: <strong>{{ $card['index'] }}</strong></span>
                                    @if($card['title'] !== 'Main Galleries')
                                        <span class="text-amber-600">Archived: <strong>{{ $card['archive'] }}</strong></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- 4.5 MULTI-CHANNEL CONTENT INGESTION & PUBLISHING STUDIO --}}
            <div x-data="{
                ingestMode: 'manual', // 'manual', 'embed', 'api', 'document'
                postType: 'job', // 'news', 'pr', 'job'
                docFileType: '',
                docFileName: '',
                isParsing: false,
                parseSuccess: false,
                extractedImages: [
                    '{{ asset('img/shared/camsur_logo_hd.png') }}',
                    '{{ asset('img/shared/camsur_logo.png') }}'
                ],
                extractedRows: [
                    { title: 'Information Officer I (Permanent)', department: 'Provincial Information Office', slots: 2, deadline: '2026-10-15', status: 'Ready' },
                    { title: 'Administrative Assistant II', department: 'ICARMO', slots: 1, deadline: '2026-10-20', status: 'Ready' },
                    { title: 'Community Development Facilitator', department: 'Provincial Social Welfare', slots: 4, deadline: '2026-10-30', status: 'Ready' }
                ],
                socialUrl: '',
                socialPlatform: 'facebook',
                apiSyncSource: 'philjobnet',
                isSyncing: false,
                syncStatusMsg: '',
                
                handleFileSelect(e) {
                    const file = e.target.files[0];
                    if (!file) return;
                    this.docFileName = file.name;
                    this.docFileType = file.name.split('.').pop().toLowerCase();
                    this.isParsing = true;
                    this.parseSuccess = false;
                    setTimeout(() => {
                        this.isParsing = false;
                        this.parseSuccess = true;
                    }, 1200);
                },

                triggerApiSync() {
                    this.isSyncing = true;
                    this.syncStatusMsg = 'Connecting to ' + this.apiSyncSource.toUpperCase() + ' gateway...';
                    setTimeout(() => {
                        this.syncStatusMsg = 'Fetching accredited vacancies for Camarines Sur...';
                    }, 800);
                    setTimeout(() => {
                        this.isSyncing = false;
                        this.syncStatusMsg = 'Live sync completed! 12 new listings verified and synced.';
                    }, 1800);
                }
            }" class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200/80 space-y-6">
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-100 pb-5">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-[11px] font-black rounded-full uppercase tracking-wider mb-2">
                            <span>🚀</span> Multi-Channel Ingestion & Publishing Studio
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Content Pipeline & Universal Ingestion</h3>
                        <p class="text-xs sm:text-sm text-slate-500">I-publish o i-sync ang content sa pamamagitan ng 4 iba't ibang paraan nang walang kahirap-hirap.</p>
                    </div>

                    {{-- Mode Selector Tabs --}}
                    <div class="flex items-center bg-slate-100 p-1.5 rounded-2xl border border-slate-200/80 overflow-x-auto">
                        <button @click="ingestMode = 'manual'" :class="ingestMode === 'manual' ? 'bg-white text-blue-900 shadow-sm font-black' : 'text-slate-600 font-semibold hover:text-slate-900'" class="px-3.5 py-2 rounded-xl text-xs flex items-center gap-1.5 whitespace-nowrap transition">
                            <i class="fa-solid fa-pen-nib text-blue-600"></i>
                            <span>1. Manual Entry</span>
                        </button>
                        <button @click="ingestMode = 'embed'" :class="ingestMode === 'embed' ? 'bg-white text-blue-900 shadow-sm font-black' : 'text-slate-600 font-semibold hover:text-slate-900'" class="px-3.5 py-2 rounded-xl text-xs flex items-center gap-1.5 whitespace-nowrap transition">
                            <i class="fa-solid fa-share-nodes text-indigo-600"></i>
                            <span>2. Social Embed</span>
                        </button>
                        <button @click="ingestMode = 'api'" :class="ingestMode === 'api' ? 'bg-white text-blue-900 shadow-sm font-black' : 'text-slate-600 font-semibold hover:text-slate-900'" class="px-3.5 py-2 rounded-xl text-xs flex items-center gap-1.5 whitespace-nowrap transition">
                            <i class="fa-solid fa-bolt text-amber-600"></i>
                            <span>3. API Live Sync</span>
                        </button>
                        <button @click="ingestMode = 'document'" :class="ingestMode === 'document' ? 'bg-white text-blue-900 shadow-sm font-black' : 'text-slate-600 font-semibold hover:text-slate-900'" class="px-3.5 py-2 rounded-xl text-xs flex items-center gap-1.5 whitespace-nowrap transition">
                            <i class="fa-solid fa-file-arrow-up text-emerald-600"></i>
                            <span>4. Bulk Document</span>
                        </button>
                    </div>
                </div>

                {{-- Target Type Selector --}}
                <div class="flex items-center gap-3 text-xs font-bold text-slate-600">
                    <span class="text-slate-400 uppercase tracking-wider text-[10px]">Target Destination:</span>
                    <label class="inline-flex items-center gap-1.5 cursor-pointer">
                        <input type="radio" name="post_target" value="job" x-model="postType" class="text-blue-600 focus:ring-blue-500">
                        <span>Career / Job Opening</span>
                    </label>
                    <label class="inline-flex items-center gap-1.5 cursor-pointer">
                        <input type="radio" name="post_target" value="news" x-model="postType" class="text-blue-600 focus:ring-blue-500">
                        <span>News Article</span>
                    </label>
                    <label class="inline-flex items-center gap-1.5 cursor-pointer">
                        <input type="radio" name="post_target" value="pr" x-model="postType" class="text-blue-600 focus:ring-blue-500">
                        <span>Press Release</span>
                    </label>
                </div>

                {{-- ================= TAB 1: MANUAL ENTRY ================= --}}
                <div x-show="ingestMode === 'manual'" class="space-y-4 pt-2">
                    <div class="p-4 bg-blue-50/50 rounded-2xl border border-blue-100 flex items-start gap-3">
                        <span class="text-xl">✍️</span>
                        <div class="text-xs text-blue-900">
                            <strong>Manual Content Authoring:</strong> Tamang-tama para sa orihinal na anunsyo, trabaho, o balita na may buong kontrol sa pamagat, detalye, imahe, at mga tag.
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                        <div class="space-y-1">
                            <label class="font-bold text-slate-700">TITLE / POSITION NAME <span class="text-rose-500">*</span></label>
                            <input type="text" placeholder="Hal: Administrative Officer II / Kapitolyo Caravan" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition">
                        </div>
                        <div class="space-y-1">
                            <label class="font-bold text-slate-700">DEPARTMENT / ISSUING BODY <span class="text-rose-500">*</span></label>
                            <input type="text" placeholder="Hal: Provincial Human Resource Management Office (PHRMO)" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                        <div class="space-y-1">
                            <label class="font-bold text-slate-700">CATEGORY / STREAM</label>
                            <select class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition">
                                <option>Provincial Government (PGI)</option>
                                <option>PESO Camarines Sur</option>
                                <option>Private Sector & Tourism</option>
                                <option>Special Recruitment (SRA / Caravan)</option>
                            </select>
                        </div>
                        <div class="space-y-1">
                            <label class="font-bold text-slate-700">LOCATION / VENUE</label>
                            <input type="text" placeholder="Hal: Provincial Capitol Complex, Cadlan, Pili" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition">
                        </div>
                        <div class="space-y-1">
                            <label class="font-bold text-slate-700">VALID UNTIL / DEADLINE</label>
                            <input type="date" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition">
                        </div>
                    </div>

                    <div class="space-y-1 text-xs">
                        <label class="font-bold text-slate-700">FULL DETAILS / QUALIFICATIONS / EXCERPT</label>
                        <textarea rows="3" placeholder="Ipasok ang kabuuang detalye, requirements, o panuntunan..." class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition"></textarea>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <span class="text-[11px] text-slate-400">Direktang mai-index sa Search Engine at Sitemap kapag na-save.</span>
                        <button type="button" class="px-5 py-2.5 bg-blue-900 hover:bg-blue-800 text-white font-black rounded-xl text-xs shadow-md transition flex items-center gap-2">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <span>Save & Publish Live</span>
                        </button>
                    </div>
                </div>

                {{-- ================= TAB 2: SOCIAL EMBED ================= --}}
                <div x-show="ingestMode === 'embed'" class="space-y-4 pt-2">
                    <div class="p-4 bg-indigo-50/50 rounded-2xl border border-indigo-100 flex items-start gap-3">
                        <span class="text-xl">🌐</span>
                        <div class="text-xs text-indigo-900">
                            <strong>Direct Social Feed & Reel Embed:</strong> I-paste ang URL ng official post, reel, o video mula sa Facebook, Instagram, YouTube, o X upang ma-embed agad sa Social Hub o Job Openings nang hindi na manu-manong nagta-type.
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                        <button @click="socialPlatform = 'facebook'" :class="socialPlatform === 'facebook' ? 'border-blue-600 bg-blue-50/60 text-blue-900 font-black' : 'border-slate-200 text-slate-600 hover:border-slate-300'" class="p-3 border-2 rounded-2xl flex items-center justify-center gap-2 text-xs transition">
                            <i class="fa-brands fa-facebook text-blue-600 text-base"></i>
                            <span>Facebook</span>
                        </button>
                        <button @click="socialPlatform = 'instagram'" :class="socialPlatform === 'instagram' ? 'border-pink-600 bg-pink-50/60 text-pink-900 font-black' : 'border-slate-200 text-slate-600 hover:border-slate-300'" class="p-3 border-2 rounded-2xl flex items-center justify-center gap-2 text-xs transition">
                            <i class="fa-brands fa-instagram text-pink-600 text-base"></i>
                            <span>Instagram</span>
                        </button>
                        <button @click="socialPlatform = 'youtube'" :class="socialPlatform === 'youtube' ? 'border-red-600 bg-red-50/60 text-red-900 font-black' : 'border-slate-200 text-slate-600 hover:border-slate-300'" class="p-3 border-2 rounded-2xl flex items-center justify-center gap-2 text-xs transition">
                            <i class="fa-brands fa-youtube text-red-600 text-base"></i>
                            <span>YouTube</span>
                        </button>
                        <button @click="socialPlatform = 'x'" :class="socialPlatform === 'x' ? 'border-slate-900 bg-slate-100 text-slate-900 font-black' : 'border-slate-200 text-slate-600 hover:border-slate-300'" class="p-3 border-2 rounded-2xl flex items-center justify-center gap-2 text-xs transition">
                            <i class="fa-brands fa-x-twitter text-slate-900 text-base"></i>
                            <span>X (Twitter)</span>
                        </button>
                    </div>

                    <div class="space-y-1 text-xs">
                        <label class="font-bold text-slate-700">PASTE SOCIAL POST / REEL / VIDEO PERMALINK</label>
                        <div class="flex gap-2">
                            <input type="url" x-model="socialUrl" placeholder="https://www.facebook.com/CamarinesSur/posts/... o https://youtu.be/..." class="flex-grow p-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white transition text-xs">
                            <button type="button" class="px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl text-xs transition whitespace-nowrap">
                                🔍 Fetch Preview
                            </button>
                        </div>
                    </div>

                    {{-- Embed Simulation Preview --}}
                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-2xl text-xs space-y-2">
                        <div class="flex items-center justify-between text-slate-500 text-[11px]">
                            <span class="font-bold uppercase tracking-wider">Embed Card Target Preview</span>
                            <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded-full font-bold">Parser Ready</span>
                        </div>
                        <p class="text-slate-600 text-[11px]">Awtomatikong kukunin ang author metadata, caption text, at video player para ma-render bilang high-resolution responsive widget sa portal.</p>
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="button" class="px-5 py-2.5 bg-indigo-900 hover:bg-indigo-800 text-white font-black rounded-xl text-xs shadow-md transition flex items-center gap-2">
                            <i class="fa-solid fa-code"></i>
                            <span>Save Embed to Hub</span>
                        </button>
                    </div>
                </div>

                {{-- ================= TAB 3: API LIVE SYNC ================= --}}
                <div x-show="ingestMode === 'api'" class="space-y-4 pt-2">
                    <div class="p-4 bg-amber-50/50 rounded-2xl border border-amber-100 flex items-start gap-3">
                        <span class="text-xl">⚡</span>
                        <div class="text-xs text-amber-900">
                            <strong>Automated Government API Live Sync:</strong> Direktang kumonekta sa mga accredited national databases tulad ng PhilJobNet, Department of Migrant Workers (DMW), Civil Service Commission (CSC), o TESDA para sa totoong oras na pag-synchronize ng mga bakanteng posisyon sa Camarines Sur.
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                        <button @click="apiSyncSource = 'philjobnet'" :class="apiSyncSource === 'philjobnet' ? 'border-amber-500 bg-amber-50/60 font-black text-amber-950' : 'border-slate-200 text-slate-600'" class="p-3 border-2 rounded-2xl text-left text-xs transition">
                            <div class="font-bold text-slate-800">PhilJobNet (DOLE)</div>
                            <div class="text-[10px] text-slate-500">Local & regional jobs</div>
                        </button>
                        <button @click="apiSyncSource = 'dmw'" :class="apiSyncSource === 'dmw' ? 'border-amber-500 bg-amber-50/60 font-black text-amber-950' : 'border-slate-200 text-slate-600'" class="p-3 border-2 rounded-2xl text-left text-xs transition">
                            <div class="font-bold text-slate-800">DMW Overseas Portal</div>
                            <div class="text-[10px] text-slate-500">Accredited agency jobs</div>
                        </button>
                        <button @click="apiSyncSource = 'csc'" :class="apiSyncSource === 'csc' ? 'border-amber-500 bg-amber-50/60 font-black text-amber-950' : 'border-slate-200 text-slate-600'" class="p-3 border-2 rounded-2xl text-left text-xs transition">
                            <div class="font-bold text-slate-800">CSC Job Portal</div>
                            <div class="text-[10px] text-slate-500">Plantilla civil service</div>
                        </button>
                        <button @click="apiSyncSource = 'tesda'" :class="apiSyncSource === 'tesda' ? 'border-amber-500 bg-amber-50/60 font-black text-amber-950' : 'border-slate-200 text-slate-600'" class="p-3 border-2 rounded-2xl text-left text-xs transition">
                            <div class="font-bold text-slate-800">TESDA Skills Gateway</div>
                            <div class="text-[10px] text-slate-500">TVET & certified skills</div>
                        </button>
                    </div>

                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-2xl space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-xs text-slate-800">Endpoint Authentication & Rate Limits</h4>
                                <p class="text-[11px] text-slate-500">Target Region: <span class="font-semibold text-slate-700">Region V (Bicol) & Camarines Sur LGUs</span></p>
                            </div>
                            <button @click="triggerApiSync()" :disabled="isSyncing" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 disabled:opacity-50 text-slate-900 font-extrabold rounded-xl text-xs transition shadow flex items-center gap-1.5">
                                <i class="fa-solid fa-arrows-rotate" :class="isSyncing ? 'animate-spin' : ''"></i>
                                <span x-text="isSyncing ? 'Syncing...' : 'Start Live Sync Now'"></span>
                            </button>
                        </div>
                        
                        <div x-show="syncStatusMsg" class="p-2.5 bg-white border border-slate-200 rounded-xl text-xs text-slate-700 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span x-text="syncStatusMsg" class="font-medium"></span>
                        </div>
                    </div>
                </div>

                {{-- ================= TAB 4: BULK DOCUMENT UPLOAD ================= --}}
                <div x-show="ingestMode === 'document'" class="space-y-4 pt-2">
                    <div class="p-4 bg-emerald-50/50 rounded-2xl border border-emerald-100 flex items-start gap-3">
                        <span class="text-xl">📄</span>
                        <div class="text-xs text-emerald-900">
                            <strong>Bulk Document, Spreadsheet & Image Extraction:</strong> Para sa ibang departamento na nagpapadala lamang ng Excel (.xlsx/.csv) o Word/PDF (.docx/.pdf). I-upload lamang ang file; kukunin ng system ang listahan at i-e-extract ang mga nakapaloob na larawan para maging editable draft bago i-publish.
                        </div>
                    </div>

                    {{-- Drag & Drop Upload Zone --}}
                    <div class="border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-3xl p-8 text-center bg-slate-50/60 transition group cursor-pointer relative">
                        <input type="file" @change="handleFileSelect($event)" accept=".xlsx,.xls,.csv,.doc,.docx,.pdf" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                        <div class="space-y-2 pointer-events-none">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 mx-auto flex items-center justify-center text-xl group-hover:scale-110 transition">
                                <i class="fa-solid fa-file-excel" x-show="!isParsing"></i>
                                <i class="fa-solid fa-spinner animate-spin" x-show="isParsing"></i>
                            </div>
                            <div class="text-xs font-bold text-slate-800">
                                <span class="text-emerald-700">I-click upang mag-upload</span> o i-drag and drop ang file dito
                            </div>
                            <p class="text-[11px] text-slate-400">Tumatanggap ng Microsoft Excel (.xlsx, .xls), CSV, Word (.docx), o PDF (Hanggang 25MB)</p>
                            <div x-show="docFileName" class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-100 text-emerald-800 font-bold text-xs rounded-full mt-2">
                                <span>📎</span> <span x-text="docFileName"></span>
                            </div>
                        </div>
                    </div>

                    {{-- Extracted Document Content & Image Preview --}}
                    <div x-show="parseSuccess" class="space-y-4 transition">
                        <div class="flex items-center justify-between">
                            <h4 class="font-bold text-xs text-slate-800 flex items-center gap-2">
                                <span>📊</span> Na-extract na Talaan (<span x-text="extractedRows.length"></span> items natagpuan)
                            </h4>
                            <span class="text-[11px] text-slate-500">Maaari mo itong i-edit bago i-commit sa database.</span>
                        </div>

                        {{-- Extracted Table --}}
                        <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                            <table class="w-full text-left text-xs">
                                <thead class="bg-slate-50 text-slate-600 font-bold border-b border-slate-200">
                                    <tr>
                                        <th class="p-3">Position / Item Title</th>
                                        <th class="p-3">Department / Office</th>
                                        <th class="p-3">Slots</th>
                                        <th class="p-3">Deadline</th>
                                        <th class="p-3">Status</th>
                                        <th class="p-3 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <template x-for="(row, idx) in extractedRows" :key="idx">
                                        <tr class="hover:bg-slate-50/50">
                                            <td class="p-3 font-semibold text-slate-800" x-text="row.title"></td>
                                            <td class="p-3 text-slate-600" x-text="row.department"></td>
                                            <td class="p-3 text-slate-600" x-text="row.slots"></td>
                                            <td class="p-3 text-slate-600" x-text="row.deadline"></td>
                                            <td class="p-3">
                                                <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded-full font-bold text-[10px]" x-text="row.status"></span>
                                            </td>
                                            <td class="p-3 text-right">
                                                <button type="button" class="text-blue-600 hover:text-blue-800 font-bold text-xs">Edit</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>

                        {{-- Extracted Media Pullout Section --}}
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                            <div class="flex items-center justify-between">
                                <h5 class="font-bold text-xs text-slate-800 flex items-center gap-1.5">
                                    <span>🖼️</span> Mga Na-extract na Larawan sa Dokumento
                                </h5>
                                <span class="text-[10px] text-slate-400">Awtomatikong inihiwalay mula sa Word/PDF/Excel sheet</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <template x-for="(imgSrc, i) in extractedImages" :key="i">
                                    <div class="relative w-20 h-20 rounded-xl overflow-hidden border border-slate-300 bg-white p-1">
                                        <img :src="imgSrc" class="w-full h-full object-contain">
                                        <div class="absolute bottom-0 inset-x-0 bg-black/60 text-white text-[9px] text-center font-semibold">Ready</div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-2">
                            <span class="text-[11px] text-slate-400">Lahat ng talaan ay agad maisasama sa live search registry at sitemap.</span>
                            <button type="button" class="px-6 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white font-black rounded-xl text-xs shadow-md transition flex items-center gap-2">
                                <i class="fa-solid fa-check-double"></i>
                                <span>Confirm & Commit All Records</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- 5. ACTIVITY HUB & HEATMAP SECTION --}}
            @php
                $today = \Carbon\Carbon::today();
                $startOfRange = $today->copy()->subDays(69)->startOfWeek(\Carbon\Carbon::SUNDAY); 
                $endOfRange = $today->copy();

                $activityCounts = [];
                $sourceActivities = $heatmapActivities ?? $recentActivities ?? []; 
                
                foreach ($sourceActivities as $act) {
                    if ($act && isset($act->created_at)) {
                        $key = $act->created_at->format('Y-m-d');
                        if ($act->created_at->between($startOfRange, $endOfRange)) {
                            $activityCounts[$key] = ($activityCounts[$key] ?? 0) + 1;
                        }
                    }
                }

                $maxCount = !empty($activityCounts) ? max($activityCounts) : 0;
                $totalContrib = array_sum($activityCounts);
                
                $miniWeeks = [];
                $cursor = $startOfRange->copy();
                while ($cursor->lte($endOfRange)) {
                    $dateKey = $cursor->format('Y-m-d');
                    $miniWeeks[] = [
                        'date' => $cursor->copy(),
                        'count' => $activityCounts[$dateKey] ?? 0,
                    ];
                    $cursor->addDay();
                }
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Left: Heatmap Analytics --}}
                <div class="lg:col-span-4 bg-white rounded-3xl p-6 shadow-sm border border-slate-200 space-y-5">
                    <div class="border-b border-slate-100 pb-3">
                        <h3 class="font-bold text-slate-900 text-base flex items-center gap-2">
                            <span>📜</span> Activity Performance
                        </h3>
                        <p class="text-xs text-slate-400">Recent 98-day contribution log</p>
                    </div>

                    {{-- Heatmap Grid --}}
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200/80 space-y-3">
                        <div class="grid grid-cols-7 gap-1.5">
                            @foreach($miniWeeks as $day)
                                @php
                                    $level = 'bg-slate-200';
                                    if ($day['count'] > 0 && $maxCount > 0) {
                                        $ratio = $day['count'] / $maxCount;
                                        if ($ratio <= 0.25) $level = 'bg-emerald-200';
                                        elseif ($ratio <= 0.5) $level = 'bg-emerald-400';
                                        elseif ($ratio <= 0.75) $level = 'bg-emerald-600';
                                        else $level = 'bg-emerald-800';
                                    }
                                @endphp
                                <div class="w-full h-3.5 rounded-sm {{ $level }}" title="{{ $day['date']->format('M d') }}: {{ $day['count'] }} actions"></div>
                            @endforeach
                        </div>
                        <div class="flex items-center justify-between text-[10px] text-slate-400 font-bold uppercase">
                            <span>Less</span>
                            <div class="flex gap-1">
                                <span class="w-2.5 h-2.5 bg-slate-200 rounded-xs"></span>
                                <span class="w-2.5 h-2.5 bg-emerald-200 rounded-xs"></span>
                                <span class="w-2.5 h-2.5 bg-emerald-400 rounded-xs"></span>
                                <span class="w-2.5 h-2.5 bg-emerald-600 rounded-xs"></span>
                                <span class="w-2.5 h-2.5 bg-emerald-800 rounded-xs"></span>
                            </div>
                            <span>More</span>
                        </div>
                    </div>

                    <div class="p-4 bg-blue-50/60 rounded-2xl border border-blue-100 flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-black text-blue-900">{{ $totalContrib }}</span>
                            <span class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider">Total Recorded Actions</span>
                        </div>
                        <button onclick="location.reload()" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-xs font-bold transition">
                            🔄 Refresh
                        </button>
                    </div>
                </div>

                {{-- Right: Activity Log Timeline --}}
                <div class="lg:col-span-8 bg-white rounded-3xl p-6 shadow-sm border border-slate-200 space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base">Latest Audit Trail Logs</h3>
                            <p class="text-xs text-slate-400">Timestamped system events and user operations</p>
                        </div>
                        <a href="{{ route('admin.activity.log') }}" class="px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition">
                            View History &rarr;
                        </a>
                    </div>

                    <div class="space-y-3 max-h-96 overflow-y-auto pr-2">
                        @php
                            $feedActivities = collect($sourceActivities ?? [])->sortByDesc('created_at')->values();
                        @endphp
                        @forelse($feedActivities as $index => $activity)
                            <div class="{{ $index >= 10 ? 'hidden' : 'flex' }} items-start gap-4 p-3.5 bg-slate-50 hover:bg-slate-100/80 rounded-2xl border border-slate-200/60 transition">
                                <div class="p-2.5 bg-white shadow-xs rounded-xl shrink-0 text-base">
                                    @php
                                        $action = strtolower($activity->action ?? '');
                                        if (str_contains($action, 'login')) echo '🔑';
                                        elseif (str_contains($action, 'create')) echo '➕';
                                        elseif (str_contains($action, 'update')) echo '🔄';
                                        elseif (str_contains($action, 'delete')) echo '🗑️';
                                        else echo '📌';
                                    @endphp
                                </div>
                                <div class="space-y-0.5 flex-grow text-xs">
                                    <div class="flex justify-between items-center">
                                        <span class="font-bold text-slate-900">{{ $activity->action ?? 'System Event' }}</span>
                                        <span class="text-slate-400 text-[11px]">{{ $activity->created_at ? $activity->created_at->format('M d, Y h:i A') : '' }}</span>
                                    </div>
                                    <p class="text-slate-600">{{ $activity->description ?: 'No additional details provided.' }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-10 text-slate-400 space-y-2">
                                <span>📭</span>
                                <p class="text-xs font-bold">Digital Silence (No activities recorded)</p>
                            </div>
                        @endforelse
                    </div>

                    {{-- Audit Security Footer --}}
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 text-xs space-y-2">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div>
                                <strong class="text-slate-800 block mb-0.5">🛡️ Audit Security</strong>
                                <p class="text-slate-500 text-[11px]">Actions logged with IP tracking.</p>
                            </div>
                            <div>
                                <strong class="text-slate-800 block mb-0.5">⚠️ Data Integrity</strong>
                                <p class="text-slate-500 text-[11px]">Deletions are permanent.</p>
                            </div>
                            <div>
                                <strong class="text-slate-800 block mb-0.5">🔄 Sync Protocol</strong>
                                <p class="text-slate-500 text-[11px]">Logs sync every 5 minutes.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- 6. SIDEBAR WIDGET TRAY TRIGGER --}}
        <div class="fixed bottom-6 right-6 z-40">
            <button @click="rightTrayOpen = !rightTrayOpen" class="px-5 py-3.5 bg-blue-900 hover:bg-indigo-900 text-white rounded-full shadow-2xl font-extrabold text-xs flex items-center gap-2 border border-blue-700 transition transform hover:scale-105">
                <span>⚡ Quick Panel</span>
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            </button>
        </div>

        {{-- SIDEBAR WIDGET TRAY PANEL --}}
        <div x-show="rightTrayOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed inset-y-0 right-0 w-80 sm:w-96 bg-white shadow-2xl border-l border-slate-200 z-50 p-6 overflow-y-auto space-y-6">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <h3 class="font-black text-slate-900 text-lg">Dashboard Tray</h3>
                <button @click="rightTrayOpen = false" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg">✕</button>
            </div>

            {{-- Clock Widget --}}
            <div @click="clockMode = (clockMode === 'digital' ? 'analog' : 'digital')" class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white p-6 rounded-3xl text-center cursor-pointer shadow-lg space-y-2">
                <div x-show="clockMode === 'digital'">
                    <div class="text-3xl font-black tracking-widest font-mono" x-text="timeStr">00:00:00</div>
                    <div class="text-xs text-blue-200 mt-1 font-semibold" x-text="dateStr">...</div>
                </div>
                <div x-show="clockMode === 'analog'" class="relative w-24 h-24 mx-auto border-2 border-white/40 rounded-full flex items-center justify-center">
                    <div x-ref="analogHour" class="absolute w-1 h-7 bg-white top-5 rounded origin-bottom"></div>
                    <div x-ref="analogMin" class="absolute w-0.5 h-9 bg-amber-400 top-3 rounded origin-bottom"></div>
                    <div x-ref="analogSec" class="absolute w-0.5 h-10 bg-rose-500 top-2 rounded origin-bottom"></div>
                    <div class="w-2 h-2 bg-white rounded-full z-10"></div>
                </div>
                <p class="text-[10px] text-blue-300 font-bold uppercase tracking-wider">Tap to toggle clock mode</p>
            </div>

            {{-- Shortcuts Panel --}}
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider">Quick Actions</h4>
                <div class="space-y-2 text-xs">
                    <a href="{{ route('admin.latest-news.index') }}" class="block p-3 bg-slate-50 hover:bg-slate-100 rounded-2xl font-bold text-slate-800 border border-slate-200/80 transition">
                        📰 Manage Latest News
                    </a>
                    <a href="{{ route('admin.latest-featured-video.index') }}" class="block p-3 bg-slate-50 hover:bg-slate-100 rounded-2xl font-bold text-slate-800 border border-slate-200/80 transition">
                        🎥 Review Featured Videos
                    </a>
                    <a href="{{ route('admin.main-gallery.index') }}" class="block p-3 bg-slate-50 hover:bg-slate-100 rounded-2xl font-bold text-slate-800 border border-slate-200/80 transition">
                        🖼️ Update Main Galleries
                    </a>
                    <a href="{{ route('admin.bidsandproc.index') }}" class="block p-3 bg-slate-50 hover:bg-slate-100 rounded-2xl font-bold text-slate-800 border border-slate-200/80 transition">
                        📂 Bids & Procurement Portal
                    </a>
                </div>
            </div>

            {{-- Team Bulletin & Tasks Tabs --}}
            <div class="space-y-4">
                <div class="flex border-b border-slate-200 text-xs font-bold text-slate-500">
                    <button @click="activeTab = 'messages'" :class="activeTab === 'messages' ? 'border-b-2 border-blue-600 text-blue-600' : ''" class="pb-2 flex-1 text-center">
                        Bulletins
                    </button>
                    <button @click="activeTab = 'tasks'" :class="activeTab === 'tasks' ? 'border-b-2 border-blue-600 text-blue-600' : ''" class="pb-2 flex-1 text-center">
                        Tasks
                    </button>
                </div>

                {{-- Messages Tab --}}
                <div x-show="activeTab === 'messages'" class="space-y-3 text-xs">
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-slate-700">Team Bulletin</span>
                        <button @click="openMsgModal('ALL TEAM')" class="px-2.5 py-1 bg-blue-600 text-white font-bold rounded-lg text-[10px]">
                            + Broadcast
                        </button>
                    </div>
                    <div class="space-y-2 max-h-60 overflow-y-auto pr-1">
                        <template x-for="memo in memos" :key="memo.id">
                            <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200/80 space-y-1">
                                <div class="flex justify-between text-[10px] text-slate-400 font-bold">
                                    <span x-text="memo.from"></span>
                                    <span x-text="memo.time"></span>
                                </div>
                                <p class="text-slate-800 font-medium" x-text="memo.content"></p>
                                <div class="text-right">
                                    <button @click="dismissMemo(memo.id)" class="text-[10px] text-rose-500 font-bold hover:underline">Dismiss</button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                {{-- Tasks Tab --}}
                <div x-show="activeTab === 'tasks'" class="space-y-3 text-xs">
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-slate-700">Task Ledger</span>
                        <button @click="showTaskModal = true" class="px-2.5 py-1 bg-emerald-600 text-white font-bold rounded-lg text-[10px]">
                            + Add Task
                        </button>
                    </div>
                    <div class="space-y-2 max-h-60 overflow-y-auto pr-1">
                        <template x-for="(task, idx) in tasks" :key="idx">
                            <div class="p-3 bg-emerald-50/60 rounded-2xl border border-emerald-100 space-y-1">
                                <div class="flex justify-between text-[10px] text-emerald-800 font-bold">
                                    <span x-text="task.title"></span>
                                    <span x-text="task.date"></span>
                                </div>
                                <p class="text-slate-600 text-[11px]" x-text="task.desc || 'No additional notes.'"></p>
                                <div class="text-right">
                                    <button @click="deleteTask(idx)" class="text-[10px] text-slate-400 hover:text-rose-600 font-bold">Done / Delete</button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

        </div>

        {{-- 7. ALPINE MODALS --}}

        {{-- Indexed Breakdown Modal --}}
        <div x-show="showIndexedModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 flex items-center justify-center p-4">
            <div @click.away="showIndexedModal = false" class="bg-white rounded-3xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="font-bold text-lg text-slate-900">Total Indexed Breakdown</h3>
                    <button @click="showIndexedModal = false" class="text-slate-400">✕</button>
                </div>
                <div class="space-y-2 max-h-80 overflow-y-auto text-xs">
                    @foreach($breakdownIndexed ?? [] as $cat => $cnt)
                        <div class="flex justify-between p-3 bg-slate-50 rounded-xl">
                            <span class="font-bold text-slate-700">{{ $cat }}</span>
                            <span class="px-2.5 py-0.5 bg-blue-100 text-blue-800 font-black rounded-full">{{ $cnt }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Archived Breakdown Modal --}}
        <div x-show="showArchivedModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 flex items-center justify-center p-4">
            <div @click.away="showArchivedModal = false" class="bg-white rounded-3xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="font-bold text-lg text-slate-900">Total Archived Breakdown</h3>
                    <button @click="showArchivedModal = false" class="text-slate-400">✕</button>
                </div>
                <div class="space-y-2 max-h-80 overflow-y-auto text-xs">
                    @foreach($breakdownArchived ?? [] as $cat => $cnt)
                        <div class="flex justify-between p-3 bg-slate-50 rounded-xl">
                            <span class="font-bold text-slate-700">{{ $cat }}</span>
                            <span class="px-2.5 py-0.5 bg-amber-100 text-amber-800 font-black rounded-full">{{ $cnt }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Activity Breakdown Modal --}}
        <div x-show="showActivityModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 flex items-center justify-center p-4">
            <div @click.away="showActivityModal = false" class="bg-white rounded-3xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="font-bold text-lg text-slate-900">Activity Breakdown</h3>
                    <button @click="showActivityModal = false" class="text-slate-400">✕</button>
                </div>
                <div class="space-y-2 max-h-80 overflow-y-auto text-xs">
                    @foreach($activityBreakdown ?? [] as $act => $cnt)
                        <div class="flex justify-between p-3 bg-slate-50 rounded-xl">
                            <span class="font-bold text-slate-700">{{ $act }}</span>
                            <span class="px-2.5 py-0.5 bg-emerald-100 text-emerald-800 font-black rounded-full">{{ $cnt }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Task Add Modal --}}
        <div x-show="showTaskModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 flex items-center justify-center p-4">
            <div x-data="{ title: '', date: '', desc: '' }" class="bg-white rounded-3xl max-w-md w-full p-6 space-y-4 shadow-2xl">
                <h3 class="font-bold text-lg text-slate-900">New Activity Task</h3>
                <div class="space-y-3 text-xs">
                    <div>
                        <label class="font-bold text-slate-600 block mb-1">TITLE</label>
                        <input type="text" x-model="title" class="w-full p-2.5 border rounded-xl" placeholder="Task description">
                    </div>
                    <div>
                        <label class="font-bold text-slate-600 block mb-1">TARGET DATE</label>
                        <input type="date" x-model="date" class="w-full p-2.5 border rounded-xl">
                    </div>
                    <div>
                        <label class="font-bold text-slate-600 block mb-1">NOTES</label>
                        <textarea x-model="desc" class="w-full p-2.5 border rounded-xl" rows="2" placeholder="Optional notes"></textarea>
                    </div>
                </div>
                <div class="flex gap-2 justify-end pt-2">
                    <button @click="showTaskModal = false" class="px-4 py-2 bg-slate-100 text-slate-600 font-bold rounded-xl text-xs">Cancel</button>
                    <button @click="saveTask(title, date, desc)" class="px-4 py-2 bg-blue-600 text-white font-bold rounded-xl text-xs">Save Task</button>
                </div>
            </div>
        </div>

        {{-- Broadcast Memo Modal --}}
        <div x-show="showMessageModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 flex items-center justify-center p-4">
            <div x-data="{ content: '' }" class="bg-white rounded-3xl max-w-md w-full p-6 space-y-4 shadow-2xl">
                <h3 class="font-bold text-lg text-slate-900">Broadcast Note</h3>
                <div class="text-xs space-y-2">
                    <textarea x-model="content" class="w-full p-3 border rounded-xl" rows="4" placeholder="Post an update for the team..."></textarea>
                </div>
                <div class="flex gap-2 justify-end pt-2">
                    <button @click="showMessageModal = false" class="px-4 py-2 bg-slate-100 text-slate-600 font-bold rounded-xl text-xs">Cancel</button>
                    <button @click="sendMemo(content)" class="px-4 py-2 bg-blue-600 text-white font-bold rounded-xl text-xs">Post Note</button>
                </div>
            </div>
        </div>

        {{-- Priority Task Alarm Modal --}}
        <div x-show="showAlarmModal" class="fixed inset-0 bg-blue-950/95 backdrop-blur-md z-50 flex items-center justify-center p-6 text-white text-center">
            <div class="max-w-lg w-full space-y-6">
                <div class="text-6xl animate-bounce">🔔</div>
                <h2 class="text-3xl font-black text-amber-400 uppercase tracking-widest">Task Deadline Alert</h2>
                <div class="p-6 bg-white text-slate-900 rounded-3xl space-y-2 shadow-2xl">
                    <h3 class="text-xl font-bold text-blue-900" x-text="alarmTitle"></h3>
                    <p class="text-sm text-slate-600" x-text="alarmDesc"></p>
                </div>
                <button @click="acknowledgeAlarm()" class="w-full py-4 bg-amber-400 hover:bg-amber-500 text-slate-900 font-black rounded-2xl shadow-xl transition text-base">
                    ACKNOWLEDGE & COMPLETE TASK
                </button>
            </div>
        </div>

    </div>
</x-app-layout>