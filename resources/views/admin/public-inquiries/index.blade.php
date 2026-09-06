<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-black text-slate-900 tracking-tight flex items-center gap-2.5">
                    <span>📬</span> Citizen Feedback &amp; Public Inquiries CMS
                </h2>
                <p class="text-xs text-slate-500 mt-1">Manage, review, and track public submissions across all portal pages.</p>
            </div>
            <a href="{{ route('dashboard') }}" class="text-xs font-bold text-slate-600 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 px-3.5 py-2 rounded-xl transition">
                &larr; Back to Dashboard
            </a>
        </div>
    </x-slot>

    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8 space-y-8" x-data="{
        detailModalOpen: false,
        activeItem: null,
        openDetail(item) {
            this.activeItem = item;
            this.detailModalOpen = true;
            document.body.style.overflow = 'hidden';
        },
        closeDetail() {
            this.detailModalOpen = false;
            this.activeItem = null;
            document.body.style.overflow = '';
        }
    }">

        {{-- Status Alert --}}
        @if(session('status'))
            <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-800 flex items-center justify-between shadow-xs">
                <div class="flex items-center gap-2">
                    <span>✓</span>
                    <span>{{ session('status') }}</span>
                </div>
                <button type="button" @click="$el.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-black text-xs uppercase">&times;</button>
            </div>
        @endif

        {{-- 1. Statistics Scoreboard --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <div class="p-5 bg-white rounded-2xl border border-slate-200/80 shadow-xs space-y-1">
                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400">Total Submissions</span>
                <div class="text-2xl font-black text-slate-900">{{ $stats['total'] }}</div>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-amber-200/80 shadow-xs space-y-1 bg-amber-50/20">
                <span class="text-[10px] font-black uppercase tracking-wider text-amber-600">Pending</span>
                <div class="text-2xl font-black text-amber-700">{{ $stats['pending'] }}</div>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-blue-200/80 shadow-xs space-y-1 bg-blue-50/20">
                <span class="text-[10px] font-black uppercase tracking-wider text-blue-600">Under Review</span>
                <div class="text-2xl font-black text-blue-700">{{ $stats['under_review'] }}</div>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-emerald-200/80 shadow-xs space-y-1 bg-emerald-50/20">
                <span class="text-[10px] font-black uppercase tracking-wider text-emerald-600">Resolved</span>
                <div class="text-2xl font-black text-emerald-700">{{ $stats['resolved'] }}</div>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-rose-200/80 shadow-xs space-y-1 bg-rose-50/20">
                <span class="text-[10px] font-black uppercase tracking-wider text-rose-600">Complaints</span>
                <div class="text-2xl font-black text-rose-700">{{ $stats['complaints'] }}</div>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-purple-200/80 shadow-xs space-y-1 bg-purple-50/20">
                <span class="text-[10px] font-black uppercase tracking-wider text-purple-600">Suggestions</span>
                <div class="text-2xl font-black text-purple-700">{{ $stats['suggestions'] }}</div>
            </div>
        </div>

        {{-- 2. Filter Bar & Search --}}
        <div class="p-5 bg-white rounded-3xl border border-slate-200 shadow-sm space-y-4">
            <form method="GET" action="{{ route('admin.public-inquiries.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">
                {{-- Search query --}}
                <div class="lg:col-span-2">
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Search Keywords</label>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search title, sender, message..."
                           class="w-full rounded-xl border border-slate-300 text-xs p-2.5 focus:border-blue-600 focus:ring-0">
                </div>

                {{-- Context Filter --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Origin Page</label>
                    <select name="page_context" class="w-full rounded-xl border border-slate-300 text-xs p-2.5 focus:border-blue-600 focus:ring-0">
                        <option value="all">All Pages</option>
                        @foreach($pageContexts as $ctx)
                            <option value="{{ $ctx }}" {{ request('page_context') === $ctx ? 'selected' : '' }}>{{ $ctx }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Type Filter --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Feedback Purpose</label>
                    <select name="feedback_type" class="w-full rounded-xl border border-slate-300 text-xs p-2.5 focus:border-blue-600 focus:ring-0">
                        <option value="all">All Types</option>
                        <option value="comment" {{ request('feedback_type') === 'comment' ? 'selected' : '' }}>💬 Comment</option>
                        <option value="suggestion" {{ request('feedback_type') === 'suggestion' ? 'selected' : '' }}>💡 Suggestion</option>
                        <option value="complaint" {{ request('feedback_type') === 'complaint' ? 'selected' : '' }}>⚠️ Complaint</option>
                        <option value="inquiry" {{ request('feedback_type') === 'inquiry' ? 'selected' : '' }}>❓ Inquiry</option>
                    </select>
                </div>

                {{-- Status & Actions --}}
                <div class="flex items-end gap-2">
                    <div class="flex-1">
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Status</label>
                        <select name="status" class="w-full rounded-xl border border-slate-300 text-xs p-2.5 focus:border-blue-600 focus:ring-0">
                            <option value="all">All Statuses</option>
                            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="under_review" {{ request('status') === 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="resolved" {{ request('status') === 'resolved' ? 'selected' : '' }}>Resolved</option>
                            <option value="archived" {{ request('status') === 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-blue-950 hover:bg-blue-900 text-white font-black text-xs uppercase tracking-wider px-4 py-3 rounded-xl transition">
                        Filter
                    </button>
                    @if(request()->hasAny(['search', 'page_context', 'feedback_type', 'status']))
                        <a href="{{ route('admin.public-inquiries.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase px-3 py-3 rounded-xl transition" title="Reset">
                            ✕
                        </a>
                    @endif
                </div>
            </form>
        </div>

        {{-- 3. Datatable --}}
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50 text-[11px] font-black uppercase tracking-wider text-slate-500">
                            <th class="p-4">Ref #</th>
                            <th class="p-4">Purpose / Type</th>
                            <th class="p-4">Subject &amp; Origin Page</th>
                            <th class="p-4">Sender &amp; Location</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Attachment</th>
                            <th class="p-4">Date</th>
                            <th class="p-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($inquiries as $inq)
                            <tr class="hover:bg-slate-50/70 transition">
                                <td class="p-4 font-black text-slate-900">#{{ $inq->id }}</td>
                                <td class="p-4 whitespace-nowrap">
                                    @if($inq->feedback_type === 'complaint')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-100 text-rose-800">⚠️ Complaint</span>
                                    @elseif($inq->feedback_type === 'suggestion')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-purple-100 text-purple-800">💡 Suggestion</span>
                                    @elseif($inq->feedback_type === 'comment')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-blue-100 text-blue-800">💬 Comment</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-100 text-amber-800">❓ Inquiry</span>
                                    @endif
                                </td>
                                <td class="p-4 max-w-xs">
                                    <div class="font-bold text-slate-900 truncate" title="{{ $inq->subject_title }}">{{ $inq->subject_title }}</div>
                                    <span class="text-[10px] text-slate-400 font-semibold block mt-0.5">{{ $inq->page_context }} &bull; {{ $inq->category }}</span>
                                </td>
                                <td class="p-4">
                                    <div class="font-semibold text-slate-800">{{ $inq->sender_name ?? 'Anonymous / Citizen' }}</div>
                                    <span class="text-[10px] text-slate-500">{{ $inq->location_sector }}</span>
                                </td>
                                <td class="p-4 whitespace-nowrap">
                                    @if($inq->status === 'resolved')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-emerald-100 text-emerald-800">✓ Resolved</span>
                                    @elseif($inq->status === 'under_review')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-blue-100 text-blue-800">● Reviewing</span>
                                    @elseif($inq->status === 'archived')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-slate-100 text-slate-700">Archived</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-100 text-amber-800">Pending</span>
                                    @endif
                                </td>
                                <td class="p-4 whitespace-nowrap">
                                    @if($inq->attachment_path)
                                        <a href="{{ asset('storage/' . $inq->attachment_path) }}" target="_blank" class="inline-flex items-center gap-1 font-bold text-blue-600 hover:text-blue-800 hover:underline">
                                            <span>📎 View</span>
                                        </a>
                                    @else
                                        <span class="text-slate-400 text-[11px]">—</span>
                                    @endif
                                </td>
                                <td class="p-4 text-slate-500 whitespace-nowrap text-[11px]">
                                    {{ $inq->created_at->format('M d, Y h:i A') }}
                                </td>
                                <td class="p-4 text-right whitespace-nowrap space-x-2">
                                    <button type="button" @click="openDetail({{ Js::from($inq) }})" class="px-3 py-1.5 rounded-xl bg-blue-50 text-blue-800 hover:bg-blue-100 font-bold transition">
                                        Review / Edit
                                    </button>
                                    <form action="{{ route('admin.public-inquiries.destroy', $inq->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this submission?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2.5 py-1.5 rounded-xl bg-rose-50 text-rose-700 hover:bg-rose-100 font-bold transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="p-8 text-center text-slate-400 font-semibold">
                                    No public inquiries or citizen submissions match your search criteria.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                {{ $inquiries->links() }}
            </div>
        </div>

        {{-- 4. Interactive Review & Status Modal --}}
        <div x-show="detailModalOpen" style="display: none;" class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm overflow-y-auto">
            <div class="relative w-full max-w-2xl my-8 overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white p-6 sm:p-8" @click.away="closeDetail()">
                <button type="button" @click="closeDetail()" class="absolute top-4 right-4 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition">
                    &times;
                </button>

                <template x-if="activeItem">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-amber-400 text-slate-950 flex items-center justify-center text-2xl font-black">
                                📬
                            </div>
                            <div>
                                <span class="text-[10px] font-black uppercase tracking-wider text-amber-400" x-text="`SUBMISSION #${activeItem.id} • ${activeItem.page_context}`"></span>
                                <h3 class="text-xl font-black text-white leading-tight" x-text="activeItem.subject_title"></h3>
                            </div>
                        </div>

                        {{-- Metadata Grid --}}
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 p-4 rounded-2xl bg-slate-800/80 border border-slate-700 text-xs">
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Purpose</span>
                                <strong class="text-amber-300 uppercase tracking-wide" x-text="activeItem.feedback_type"></strong>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Category</span>
                                <strong class="text-white" x-text="activeItem.category"></strong>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Sender</span>
                                <strong class="text-white" x-text="activeItem.sender_name || 'Anonymous'"></strong>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Location / Sector</span>
                                <strong class="text-white" x-text="activeItem.location_sector"></strong>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Date Submitted</span>
                                <strong class="text-slate-300" x-text="new Date(activeItem.created_at).toLocaleString()"></strong>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 uppercase font-bold block">Attachment</span>
                                <template x-if="activeItem.attachment_path">
                                    <a :href="`/storage/${activeItem.attachment_path}`" target="_blank" class="text-blue-400 hover:underline font-bold">
                                        Download File ↗
                                    </a>
                                </template>
                                <template x-if="!activeItem.attachment_path">
                                    <span class="text-slate-500">None</span>
                                </template>
                            </div>
                        </div>

                        {{-- Message Content --}}
                        <div class="space-y-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-slate-400">Citizen's Message:</span>
                            <div class="p-4 rounded-2xl bg-slate-800 border border-slate-700 text-xs sm:text-sm text-slate-200 leading-relaxed whitespace-pre-wrap" x-text="activeItem.message"></div>
                        </div>

                        {{-- Update Status & Admin Notes Form --}}
                        <form :action="`/admin/public-inquiries/${activeItem.id}`" method="POST" class="space-y-4 pt-4 border-t border-slate-800">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Update Status *</label>
                                    <select name="status" class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:ring-0 cursor-pointer">
                                        <option value="pending" :selected="activeItem.status === 'pending'">🟡 Pending</option>
                                        <option value="under_review" :selected="activeItem.status === 'under_review'">🔵 Under Review</option>
                                        <option value="resolved" :selected="activeItem.status === 'resolved'">🟢 Resolved / Actioned</option>
                                        <option value="archived" :selected="activeItem.status === 'archived'">⚪ Archived</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Administrative Notes / Action Taken</label>
                                <textarea name="admin_notes" rows="3" placeholder="Enter notes on investigation, agency contact, or resolution taken..."
                                          class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:ring-0 leading-relaxed"
                                          x-text="activeItem.admin_notes || ''"></textarea>
                            </div>

                            <div class="flex items-center justify-end gap-3 pt-2">
                                <button type="button" @click="closeDetail()" class="rounded-2xl border border-slate-700 bg-slate-800 px-5 py-3 text-xs font-bold uppercase tracking-wider text-slate-300 hover:bg-slate-700 transition">
                                    Close
                                </button>
                                <button type="submit" class="rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg hover:scale-[1.02] transition">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </template>
            </div>
        </div>

    </div>
</x-app-layout>
