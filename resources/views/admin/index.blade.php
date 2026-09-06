<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-black text-blue-950">Capitol History Content Manager</h2>
    </x-slot>

    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">
        @if(session('status'))
            <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-800">{{ session('status') }}</div>
        @endif

        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="border-b border-slate-200 px-6 py-4">
                <nav class="flex gap-2 overflow-x-auto" id="contentTabs">
                    @foreach(['eras','citations','timeline','carousel','governance','levels'] as $tab)
                        <button type="button" class="tab-btn rounded-lg px-4 py-2 text-sm font-bold uppercase tracking-wide transition {{ $loop->first ? 'bg-blue-950 text-white' : 'text-slate-600 hover:bg-slate-100' }}" data-tab="{{ $tab }}">
                            {{ ucfirst($tab) }}
                        </button>
                    @endforeach
                </nav>
            </div>

            <div class="p-6">
                @foreach(['eras','citations','timeline','carousel','governance','levels'] as $section)
                    <div class="tab-panel {{ $loop->first ? '' : 'hidden' }}" data-panel="{{ $section }}">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-lg font-black text-blue-950">{{ ucfirst($section) }} Items</h3>
                            <button type="button" class="rounded-lg bg-amber-400 px-4 py-2 text-xs font-black uppercase text-blue-950" onclick="document.getElementById('form-{{ $section }}').classList.toggle('hidden')">+ Add New</button>
                        </div>

                        {{-- Create/Edit Form --}}
                        <form id="form-{{ $section }}" action="{{ route('admin.history-content.store', $section) }}" method="POST" enctype="multipart/form-data" class="hidden mb-6 rounded-xl border border-slate-200 bg-slate-50 p-4 space-y-3">
                            @csrf
                            @if($section === 'timeline')
                                <select name="era_id" class="w-full rounded-lg border-slate-300 text-sm"><option value="">Select Era</option>@foreach($eras_list as $id=>$lbl)<option value="{{ $id }}">{{ $lbl }}</option>@endforeach</select>
                                <input name="date" placeholder="Date (e.g. 1579)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="sort_date" placeholder="Sort Date (e.g. 1579-05-27)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="label" placeholder="Label (e.g. Official Foundation)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="icon" placeholder="Icon (emoji)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="title" placeholder="Title" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <textarea name="summary" placeholder="Summary" class="w-full rounded-lg border-slate-300 text-sm" required></textarea>
                                <input type="file" name="image" class="w-full text-sm">
                                <textarea name="body_text" placeholder="Body paragraphs (one per line)" class="w-full rounded-lg border-slate-300 text-sm" rows="3"></textarea>
                                <textarea name="facts_json" placeholder='Facts JSON: [{"label":"x","value":"y"}]' class="w-full rounded-lg border-slate-300 text-sm font-mono text-xs" rows="2"></textarea>
                                <textarea name="sources_json" placeholder='Sources JSON: ["key1","key2"]' class="w-full rounded-lg border-slate-300 text-sm font-mono text-xs" rows="2"></textarea>
                                <input name="sort_order" type="number" value="0" class="w-full rounded-lg border-slate-300 text-sm">
                            @elseif($section === 'eras')
                                <input name="key" placeholder="Key (e.g. origins)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="label" placeholder="Label" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="range" placeholder="Range (e.g. 1569 – 1579)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="tone" placeholder="Tone (amber/indigo/rose/emerald)" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="sort_order" type="number" value="0" class="w-full rounded-lg border-slate-300 text-sm">
                            @elseif($section === 'citations')
                                <input name="key" placeholder="Key (e.g. pgcs-history)" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="title" placeholder="Title" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="publisher" placeholder="Publisher" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="url" placeholder="URL (optional)" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="type" placeholder="Type (e.g. Government Record)" class="w-full rounded-lg border-slate-300 text-sm" required>
                            @else
                                <input name="title" placeholder="Title" class="w-full rounded-lg border-slate-300 text-sm" required>
                                <input name="icon" placeholder="Icon (emoji)" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="src" placeholder="Source URL/Path" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="alt" placeholder="Alt text" class="w-full rounded-lg border-slate-300 text-sm">
                                <textarea name="body" placeholder="Body" class="w-full rounded-lg border-slate-300 text-sm"></textarea>
                                <input type="file" name="image" class="w-full text-sm">
                                <input name="type" placeholder="Type (image/video)" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="sort_order" type="number" value="0" class="w-full rounded-lg border-slate-300 text-sm">
                                <input name="is_active" type="checkbox" value="1" checked> Active
                            @endif
                            <button class="rounded-lg bg-blue-950 px-4 py-2 text-xs font-black uppercase text-white">Save</button>
                        </form>

                        {{-- List --}}
                        <div class="space-y-2">
                            @foreach($$section as $item)
                                <div class="flex items-center justify-between rounded-lg border border-slate-200 bg-white p-3">
                                    <div class="text-sm">
                                        <strong>{{ $item->title ?? $item->label ?? $item->key ?? 'Item' }}</strong>
                                        @if(isset($item->date)) <span class="text-slate-500">({{ $item->date }})</span> @endif
                                    </div>
                                    <div class="flex gap-2">
                                        <form action="{{ route('admin.history-content.destroy', [$section, $item->id]) }}" method="POST" onsubmit="return confirm('Delete?')">
                                            @csrf @method('DELETE')
                                            <button class="text-xs font-bold text-rose-600 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.replace('bg-blue-950','text-slate-600'));
                btn.classList.replace('text-slate-600','bg-blue-950');
                document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
                document.querySelector(`[data-panel="${btn.dataset.tab}"]`).classList.remove('hidden');
            });
        });
    </script>
</x-app-layout>
