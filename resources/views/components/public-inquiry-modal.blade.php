@props([
    'context' => 'General',
    'title' => 'Suggest an Update or Submit an Inquiry',
    'description' => 'Have feedback, questions, or verified data citations to recommend? Send your submission directly to the provincial planning and research administration.',
    'categories' => [
        'inquiry' => 'General Inquiry / Question',
        'suggestion' => 'Data or Content Suggestion',
        'comment' => 'Public Feedback / Comment',
        'complaint' => 'Concern / Formal Complaint',
        'citation' => 'Statutory / Research Citation Submission'
    ],
    'id' => 'publicInquiryModal',
    'buttonId' => 'openPublicInquiryBtn',
])

@php
    $modalId = $id;
    $btnId = $buttonId;
    $formId = $modalId . 'Form';
    $closeBtnId = 'close' . ucfirst($modalId);
    $cancelBtnId = 'cancel' . ucfirst($modalId);
    $successMsgId = $modalId . 'SuccessMsg';
    $errorMsgId = $modalId . 'ErrorMsg';
    $fileInputId = $modalId . 'Attachment';
    $fileNameDisplayId = $modalId . 'FileNameDisplay';
@endphp

{{-- ========================================================================= --}}
{{-- 1. CALLOUT / MESSAGING CARD (Amber Design System)                        --}}
{{-- ========================================================================= --}}
<div class="rounded-3xl border border-amber-300 bg-gradient-to-br from-amber-500 to-amber-600 p-6 sm:p-8 shadow-xl text-slate-950 flex flex-col justify-between transition-all duration-300 hover:shadow-2xl">
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <span class="rounded-full bg-slate-950 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-amber-300">
                Citizen Research &amp; Public Inquiries
            </span>
            <span class="text-2xl">💡</span>
        </div>
        <div>
            <h3 class="text-xl sm:text-2xl font-black text-slate-950 leading-tight">
                {{ $title }}
            </h3>
            <p class="mt-2 text-xs sm:text-sm text-slate-900/90 font-medium leading-relaxed">
                {{ $description }}
            </p>
        </div>
    </div>

    <div class="mt-6 pt-4 border-t border-slate-950/20 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
        <button type="button" id="{{ $btnId }}"
                class="inline-flex items-center justify-center gap-2 rounded-2xl bg-slate-950 px-6 py-3.5 text-xs font-black uppercase tracking-wider text-amber-300 shadow-lg transition-all duration-200 hover:bg-slate-900 hover:scale-[1.02] cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
            <span>Submit Inquiry / Feedback</span>
        </button>
        <span class="text-[11px] font-bold text-slate-900/80 text-center sm:text-right">Reviewed within 24–48 hours</span>
    </div>
</div>

{{-- ========================================================================= --}}
{{-- 2. MODAL DIALOG WITH PURPOSE, FEEDBACK TYPE, & ATTACHMENT UPLOAD         --}}
{{-- ========================================================================= --}}
<div id="{{ $modalId }}" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm overflow-y-auto">
    <div class="relative w-full max-w-xl my-8 overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl text-white p-6 sm:p-8">
        {{-- Close button --}}
        <button id="{{ $closeBtnId }}" type="button" class="absolute top-4 right-4 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        {{-- Header --}}
        <div class="flex items-center gap-3.5 mb-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-400 text-slate-950 text-2xl font-black shadow-md shrink-0">
                📝
            </div>
            <div>
                <span class="text-[10px] font-black uppercase tracking-wider text-amber-400">Public Engagement Interface &bull; {{ $context }}</span>
                <h3 class="text-xl font-black text-white leading-tight">Submit Feedback or Inquiry</h3>
            </div>
        </div>

        <p class="text-xs text-slate-300 leading-relaxed mb-5 font-normal">
            Please fill out the form below. Whether submitting a suggestion, raising a concern, or providing verified reference files, your input directly assists provincial governance and research.
        </p>

        <form id="{{ $formId }}" class="space-y-4" enctype="multipart/form-data">
            {{-- Hidden Context Tag --}}
            <input type="hidden" name="page_context" value="{{ $context }}">

            {{-- Anti-Bot Honeypot Field (invisible to genuine users, traps automated bots) --}}
            <div style="display: none !important; opacity: 0; position: absolute; left: -9999px;">
                <label for="{{ $modalId }}_website_hp">Leave this field blank</label>
                <input type="text" id="{{ $modalId }}_website_hp" name="website_hp" tabindex="-1" autocomplete="off">
            </div>

            {{-- Timestamp to prevent instantaneous script submissions --}}
            <input type="hidden" name="form_load_timestamp" value="{{ time() }}">

            {{-- 1. Subject / Purpose Title --}}
            <div>
                <label for="{{ $modalId }}_title" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                    Subject / Title of Submission *
                </label>
                <input type="text" id="{{ $modalId }}_title" name="subject_title" required placeholder="e.g. Proposed correction to Agricultural Data / Inquiry on Programs"
                       class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
            </div>

            {{-- 2. Nature of Feedback & Category Selection --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="{{ $modalId }}_type" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Purpose / Type of Message *
                    </label>
                    <select id="{{ $modalId }}_type" name="feedback_type" required
                            class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 cursor-pointer">
                        <option value="comment">💬 Comment / Observation</option>
                        <option value="suggestion" selected>💡 Suggestion / Recommendation</option>
                        <option value="complaint">⚠️ Concern / Complaint</option>
                        <option value="inquiry">❓ Official Inquiry / Question</option>
                    </select>
                </div>

                <div>
                    <label for="{{ $modalId }}_category" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Topic / Category *
                    </label>
                    <select id="{{ $modalId }}_category" name="category" required
                            class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 cursor-pointer">
                        @foreach($categories as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- 3. Contact & Municipality Info --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="{{ $modalId }}_name" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Your Name / Organization (Optional)
                    </label>
                    <input type="text" id="{{ $modalId }}_name" name="sender_name" placeholder="e.g. Juan dela Cruz / Community Leader"
                           class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
                </div>
                <div>
                    <label for="{{ $modalId }}_location" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Municipality / Focus Sector *
                    </label>
                    <input type="text" id="{{ $modalId }}_location" name="location_sector" required placeholder="e.g. Pili, Iriga City, Agriculture"
                           class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20">
                </div>
            </div>

            {{-- 4. Message Content --}}
            <div>
                <label for="{{ $modalId }}_message" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                    Details, Citations or Inquiry Message *
                </label>
                <textarea id="{{ $modalId }}_message" name="message" required rows="4" placeholder="Provide full context, citations, or describe your suggestion/concern in detail..."
                          class="w-full rounded-2xl border border-slate-700 bg-slate-800 px-4 py-3 text-xs text-white placeholder:text-slate-500 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400/20 leading-relaxed"></textarea>
            </div>

            {{-- 5. File Attachment / Supporting Documents (PDF, JPG, PNG, DOC - Max 10MB) --}}
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                    Supporting Documents / Images (Optional &bull; Max 10MB)
                </label>
                <div class="relative flex items-center justify-between rounded-2xl border border-dashed border-slate-700 bg-slate-800/60 p-3 hover:border-amber-400/60 transition">
                    <input type="file" id="{{ $fileInputId }}" name="attachment" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="flex items-center gap-2.5 text-xs text-slate-400 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                        </svg>
                        <span id="{{ $fileNameDisplayId }}" class="truncate max-w-[280px]">Attach file (PDF, PNG, JPG, DOC up to 10MB)</span>
                    </div>
                    <span class="text-[10px] font-bold text-amber-400 uppercase tracking-wider bg-slate-700 px-2.5 py-1 rounded-xl shrink-0">Browse</span>
                </div>
            </div>

            {{-- Success Message --}}
            <div id="{{ $successMsgId }}" class="hidden rounded-2xl bg-emerald-950/70 border border-emerald-500/50 p-3.5 text-center text-xs text-emerald-300 font-bold">
                ✓ Maraming salamat! Your submission has been successfully transmitted to the provincial research and governance team.
            </div>

            {{-- Explanatory Error / Rate Limit Message Box --}}
            <div id="{{ $errorMsgId }}" class="hidden rounded-2xl bg-rose-950/80 border border-rose-500/60 p-4 text-xs text-rose-200">
                <div class="flex items-start gap-2.5">
                    <span class="text-base shrink-0">⚠️</span>
                    <div class="space-y-1">
                        <div class="font-bold text-rose-100 flex items-center gap-1.5" id="{{ $errorMsgId }}_title">
                            Pansamantalang Naharang (Too Many Requests)
                        </div>
                        <p class="text-[11px] text-rose-200/90 leading-relaxed font-normal" id="{{ $errorMsgId }}_desc">
                            Upang maprotektahan ang sistema laban sa spam at flooding, nililimitahan ang bilis ng pagpapadala. Mangyaring maghintay ng kaunting sandali bago muling magsumite.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="pt-2 flex items-center justify-end gap-3">
                <button type="button" id="{{ $cancelBtnId }}" class="rounded-2xl border border-slate-700 bg-slate-800 px-5 py-3 text-xs font-bold uppercase tracking-wider text-slate-300 hover:bg-slate-700 transition cursor-pointer">
                    Cancel
                </button>
                <button type="submit" class="rounded-2xl bg-gradient-to-r from-amber-400 to-amber-500 px-6 py-3 text-xs font-black uppercase tracking-wider text-slate-950 shadow-lg shadow-amber-500/20 hover:scale-[1.02] transition cursor-pointer">
                    Submit Submission
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ========================================================================= --}}
{{-- 3. JAVASCRIPT CONTROLLER FOR THIS INSTANCE                                --}}
{{-- ========================================================================= --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('{{ $modalId }}');
        const openBtn = document.getElementById('{{ $btnId }}');
        const closeBtn = document.getElementById('{{ $closeBtnId }}');
        const cancelBtn = document.getElementById('{{ $cancelBtnId }}');
        const form = document.getElementById('{{ $formId }}');
        const successMsg = document.getElementById('{{ $successMsgId }}');
        const errorMsg = document.getElementById('{{ $errorMsgId }}');
        const errorTitle = document.getElementById('{{ $errorMsgId }}_title');
        const errorDesc = document.getElementById('{{ $errorMsgId }}_desc');
        const fileInput = document.getElementById('{{ $fileInputId }}');
        const fileNameDisplay = document.getElementById('{{ $fileNameDisplayId }}');

        function openModal() {
            if (!modal) return;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            if (errorMsg) errorMsg.classList.add('hidden');
        }

        function closeModal() {
            if (!modal) return;
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            if (successMsg) successMsg.classList.add('hidden');
            if (errorMsg) errorMsg.classList.add('hidden');
        }

        if (openBtn) openBtn.addEventListener('click', openModal);
        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
        }

        if (fileInput && fileNameDisplay) {
            fileInput.addEventListener('change', () => {
                if (fileInput.files && fileInput.files[0]) {
                    const file = fileInput.files[0];
                    const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
                    if (file.size > 10 * 1024 * 1024) {
                        alert('Warning: File size exceeds the maximum allowed 10MB limit.');
                        fileInput.value = '';
                        fileNameDisplay.textContent = 'Attach file (PDF, PNG, JPG, DOC up to 10MB)';
                    } else {
                        fileNameDisplay.textContent = `${file.name} (${sizeMB} MB)`;
                    }
                } else {
                    fileNameDisplay.textContent = 'Attach file (PDF, PNG, JPG, DOC up to 10MB)';
                }
            });
        }

        if (form) {
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-slate-950 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg> Submitting...
                `;

                try {
                    const formData = new FormData(form);
                    const response = await fetch('{{ route("public-inquiry.store") }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const result = await response.json();

                    if (response.ok && result.success) {
                        if (errorMsg) errorMsg.classList.add('hidden');
                        if (successMsg) {
                            successMsg.textContent = `✓ Maraming salamat! Your submission (#${result.reference_id}) has been recorded.`;
                            successMsg.classList.remove('hidden');
                        }
                        form.reset();
                        if (fileNameDisplay) {
                            fileNameDisplay.textContent = 'Attach file (PDF, PNG, JPG, DOC up to 10MB)';
                        }
                        setTimeout(() => {
                            closeModal();
                        }, 2500);
                    } else {
                        if (successMsg) successMsg.classList.add('hidden');
                        
                        if (response.status === 429) {
                            // 429 Rate Limit / Anti-Flood Triggered
                            if (errorTitle) errorTitle.textContent = '⏱️ Sandali Lamang (429 Too Many Requests)';
                            if (errorDesc) {
                                errorDesc.innerHTML = result.message || 'Masyadong mabilis ang pagpapadala ng mensahe. Upang maiwasan ang automated flooding at spam, mangyaring maghintay ng 1 hanggang 2 minuto bago sumubok muli.';
                            }
                        } else if (response.status === 422) {
                            // Validation Errors
                            if (errorTitle) errorTitle.textContent = '⚠️ Pakisuri ang mga sumusunod na impormasyon:';
                            if (errorDesc) {
                                const errList = result.errors ? Object.values(result.errors).flat().join('<br>&bull; ') : (result.message || 'May kakulangan sa form.');
                                errorDesc.innerHTML = '&bull; ' + errList;
                            }
                        } else {
                            if (errorTitle) errorTitle.textContent = '⚠️ May Naganap na Problema';
                            if (errorDesc) errorDesc.textContent = result.message || 'Hindi naipadala ang mensahe. Mangyaring subukan muli.';
                        }

                        if (errorMsg) {
                            errorMsg.classList.remove('hidden');
                            errorMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                        }
                    }
                } catch (err) {
                    console.error('Submission error:', err);
                    if (errorMsg) {
                        if (errorTitle) errorTitle.textContent = '⚠️ Network Connection Error';
                        if (errorDesc) errorDesc.textContent = 'Hindi maabot ang server o nagkaroon ng network timeout. Pakisubukang muli.';
                        errorMsg.classList.remove('hidden');
                    } else {
                        alert('An unexpected network error occurred. Please try again.');
                    }
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (modal && !modal.classList.contains('hidden')) closeModal();
            }
        });
    });
</script>
