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
                    <img src="{{ asset('img/camsur_logo.png') }}" alt="CamSur Seal" class="h-28 w-auto filter drop-shadow-xl">
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
                                <img src="{{ asset('img/camsur_logo_hd.png') }}" class="w-32 h-32 object-contain">
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