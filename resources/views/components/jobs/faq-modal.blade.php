@props([
    'type' => 'government' // government, local, overseas, spes
])

@php
    $configs = [
        'government' => [
            'title' => 'Government Careers FAQ & Help Desk',
            'subtitle' => 'Frequently asked questions regarding applying to the Provincial Government of Camarines Sur',
            'btn_bg' => 'bg-emerald-700 hover:bg-emerald-800',
            'text_accent' => 'text-emerald-800',
            'dot_bg' => 'bg-emerald-600',
            'header_gradient' => 'from-emerald-800 to-teal-800',
            'input_focus' => 'focus:ring-emerald-500 focus:border-emerald-500',
            'btn_submit' => 'bg-emerald-700 hover:bg-emerald-800',
            'route' => Route::has('careers.government.send-inquiry') ? route('careers.government.send-inquiry') : '#',
            'categories' => [
                'Permanent Plantilla Application',
                'Job Order (JO) / Contract of Service (COS)',
                'Civil Service Eligibility & CSC Verification',
                'Documentary Requirements & Compliance',
                'Recruitment & PSB Selection Status Follow-up',
                'General Inquiry / Others'
            ],
            'faqs' => [
                [
                    'q' => 'What are the primary documentary requirements for government application?',
                    'a' => 'Applicants must prepare a fully accomplished Personal Data Sheet (CS Form 212 - Revised 2017) with Work Experience Sheet, Authenticated Copy of Transcript of Records (TOR) & Diploma, Certificate of Eligibility or PRC Board License, and IPCR rating (for current government employees).'
                ],
                [
                    'q' => 'Is Civil Service Eligibility mandatory for all positions?',
                    'a' => 'For Permanent (Plantilla) and Temporary positions, YES (CSC Professional/Sub-Professional or PRC Board License). For Job Order (JO) and Contract of Service (COS) positions, eligibility is not strictly required but serves as an advantage.'
                ],
                [
                    'q' => 'Where and how do I submit my application portfolio?',
                    'a' => 'You may submit original hard copies to the Provincial Human Resource Management Office (PHRMO), Capitol Complex, Cadlan, Pili, Camarines Sur, or submit inquiries and documents through our official online portal directory.'
                ],
                [
                    'q' => 'How long does the recruitment and selection process (PSB) take?',
                    'a' => 'The standard evaluation and screening process typically takes 30 to 60 calendar days from the publication deadline, adhering strictly to the Merit Selection Plan of the Civil Service Commission.'
                ],
                [
                    'q' => 'Are walk-in applicants given equal consideration without internal endorsements?',
                    'a' => 'Yes! The Provincial Government of Camarines Sur strictly enforces the Equal Employment Opportunity Principle (EEOP). All qualified applicants receive fair, unbiased, and merit-based evaluation regardless of background.'
                ]
            ]
        ],
        'local' => [
            'title' => 'Local Employment FAQ & Assistance Desk',
            'subtitle' => 'Guidelines and assistance for private local employment across Camarines Sur',
            'btn_bg' => 'bg-blue-700 hover:bg-blue-800',
            'text_accent' => 'text-blue-800',
            'dot_bg' => 'bg-blue-600',
            'header_gradient' => 'from-blue-900 to-indigo-900',
            'input_focus' => 'focus:ring-blue-500 focus:border-blue-500',
            'btn_submit' => 'bg-blue-700 hover:bg-blue-800',
            'route' => Route::has('careers.local.send-inquiry') ? route('careers.local.send-inquiry') : '#',
            'categories' => [
                'Local Job Application Assistance',
                'PESO Job Fair Schedule & Pre-Registration',
                'Private Employer Accreditation & Legitimacy',
                'Resume Screening & Interview Assistance',
                'Employer Follow-up & Feedback',
                'Labor Complaint or Grievance',
                'General Inquiry / Others'
            ],
            'faqs' => [
                [
                    'q' => 'Are PESO placement and referral services free of charge?',
                    'a' => 'Yes, 100% FREE. All services provided by PESO Camarines Sur are government-subsidized. No placement fees or service charges are ever collected from jobseekers.'
                ],
                [
                    'q' => 'Are all employers listed in the directory verified and accredited?',
                    'a' => 'Yes. Every private enterprise and commercial company undergoes strict compliance verification with PESO Camarines Sur and DOLE before their vacancies are published.'
                ],
                [
                    'q' => 'What documents should I bring when attending Provincial Job Fairs?',
                    'a' => 'Bring multiple updated copies of your Resume/Curriculum Vitae, 2x2 ID photos, photocopies of TOR/Diploma, and valid Government/Barangay/NBI clearances.'
                ],
                [
                    'q' => 'What should I do if a local employer has not responded to my application?',
                    'a' => 'Candidate screening usually takes 1 to 2 weeks. You may also follow up directly by submitting an inquiry through our PESO Employment Desk.'
                ]
            ]
        ],
        'overseas' => [
            'title' => 'Overseas Careers & OFW Safety Help Desk',
            'subtitle' => 'Verified guidelines for safe and legitimate overseas employment (DMW / POEA Standards)',
            'btn_bg' => 'bg-sky-700 hover:bg-sky-800',
            'text_accent' => 'text-sky-800',
            'dot_bg' => 'bg-sky-600',
            'header_gradient' => 'from-sky-900 via-indigo-950 to-slate-900',
            'input_focus' => 'focus:ring-sky-500 focus:border-sky-500',
            'btn_submit' => 'bg-sky-700 hover:bg-sky-800',
            'route' => Route::has('careers.overseas.send-inquiry') ? route('careers.overseas.send-inquiry') : '#',
            'categories' => [
                'Recruitment Agency License Verification (DMW / POEA)',
                'Job Order Legitimacy & Contract Verification',
                'OEC / Overseas Clearance Assistance',
                'Anti-Illegal Recruitment & Scam Incident Report',
                'OFW Reintegration & OWWA Livelihood Assistance',
                'Agency or Employer Grievance',
                'General Inquiry / Others'
            ],
            'faqs' => [
                [
                    'q' => 'How can I ensure an overseas recruitment agency is fully licensed?',
                    'a' => 'All overseas recruitment partners and job orders must be verified directly with the Department of Migrant Workers (DMW / formerly POEA). Never deal with unlicensed recruiters or unsolicited social media contacts.'
                ],
                [
                    'q' => 'Is a placement fee required when applying for overseas employment?',
                    'a' => 'Under DMW regulations, collecting placement fees is strictly prohibited for Domestic Workers / Household Service Workers (HSWs), as well as destinations with standard No Placement Fee policies (such as the UK, Canada, USA, Japan, and Germany).'
                ],
                [
                    'q' => 'What is an OEC (Overseas Employment Certificate) and why is it essential?',
                    'a' => 'The OEC is the official clearance issued by the DMW proving you completed legitimate documentation and are officially protected by the Philippine Government while working abroad.'
                ],
                [
                    'q' => 'Does the Provincial Government offer assistance for returning or distressed OFWs?',
                    'a' => 'Yes. Through PESO CamSur and the Overseas Workers Welfare Administration (OWWA), comprehensive reintegration programs, skills retraining, and livelihood startup capital are available.'
                ]
            ]
        ],
        'spes' => [
            'title' => 'SPES & Student Internships Help Desk',
            'subtitle' => 'Information and support for students seeking youth employment and Capitol internships',
            'btn_bg' => 'bg-purple-700 hover:bg-purple-800',
            'text_accent' => 'text-purple-800',
            'dot_bg' => 'bg-purple-600',
            'header_gradient' => 'from-purple-950 to-indigo-900',
            'input_focus' => 'focus:ring-purple-500 focus:border-purple-500',
            'btn_submit' => 'bg-purple-700 hover:bg-purple-800',
            'route' => Route::has('careers.spes.send-inquiry') ? route('careers.spes.send-inquiry') : (Route::has('careers.local.send-inquiry') ? route('careers.local.send-inquiry') : '#'),
            'categories' => [
                'SPES Eligibility & Qualification Inquiries',
                'Documentary Requirements & Compliance',
                'SPES Stipend & Wage Disbursement Status',
                'College On-the-Job Training (OJT) / Internship Placement',
                'Youth Livelihood & Skills Training',
                'General Inquiry / Others'
            ],
            'faqs' => [
                [
                    'q' => 'Who is eligible to apply for the SPES (Special Program for Employment of Students)?',
                    'a' => 'Students aged 15 to 30 years old (High School, Senior High, College, or Out-of-School Youth intending to resume education) who possess passing grades and whose combined parental income does not exceed the regional poverty threshold.'
                ],
                [
                    'q' => 'What is the duration of SPES employment and how is salary computed?',
                    'a' => 'Employment periods range from 20 to 78 working days. Compensation complies with the prevailing regional minimum wage, with 60% paid by the Provincial Government and 40% subsidized by DOLE.'
                ],
                [
                    'q' => 'What documents are required to complete a SPES application?',
                    'a' => 'Duly accomplished SPES Application Form, PSA Birth Certificate, Form 138 / Report Card / Transcript of Records with passing marks, and Certificate of Indigency or Parents\' Income Tax Return (ITR).'
                ],
                [
                    'q' => 'How can college students apply for Provincial Government On-the-Job Training (OJT)?',
                    'a' => 'Submit an official University Endorsement Letter, Resume, and Letter of Intent addressed to the Provincial Human Resource Management Office (PHRMO) or designated Capitol department.'
                ]
            ]
        ]
    ];

    $cur = $configs[$type] ?? $configs['government'];
@endphp

<div x-data>
    {{-- FLOATING BUTTON: Generously spaced to the left of the Accessibility Dock, identical bottom offset and height --}}
    <div class="fixed bottom-6 right-44 sm:right-48 z-40">
        <button @click="$dispatch('open-faq-modal')" 
                class="flex items-center gap-2 text-white font-bold h-[52px] px-5 rounded-full shadow-2xl hover:scale-105 active:scale-95 transition-all duration-200 border border-white/20 {{ $cur['btn_bg'] }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="hidden sm:inline text-xs sm:text-sm tracking-wide">FAQ & Inquiry Desk</span>
        </button>
    </div>

    {{-- MODAL OVERLAY (Locks background scroll so ONLY inside modal scrolls) --}}
    <div x-data="{ open: false, selectedCategory: '', isOtherCategory: false }" 
         x-init="$watch('open', value => {
             if (value) {
                 document.body.classList.add('overflow-hidden');
             } else {
                 document.body.classList.remove('overflow-hidden');
             }
         })"
         @open-faq-modal.window="open = true" 
         x-show="open" 
         class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 overflow-hidden" 
         x-cloak>
        
        {{-- Backdrop (Click outside closes modal) --}}
        <div x-show="open" 
             x-transition.opacity 
             @click="open = false" 
             class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm"></div>

        {{-- Modal Content Box (Single Clean Viewport, Centered, Internal Scroll Only) --}}
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative bg-white rounded-3xl text-left shadow-2xl w-full max-w-3xl max-h-[90vh] flex flex-col overflow-hidden border border-slate-100 z-10">
            
            {{-- Header (Fixed at top of modal) --}}
            <div class="bg-gradient-to-r {{ $cur['header_gradient'] }} p-5 sm:p-6 text-white flex items-center justify-between shrink-0">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold">{{ $cur['title'] }}</h3>
                    <p class="text-slate-200 text-xs mt-1">{{ $cur['subtitle'] }}</p>
                </div>
                <button @click="open = false" class="text-slate-200 hover:text-white p-1 rounded-lg transition-colors" title="Close">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            {{-- Modal Body (ONLY SCROLLABLE AREA) --}}
            <div class="p-5 sm:p-6 space-y-6 overflow-y-auto flex-1">
                
                {{-- Dynamic FAQ Accordions / List --}}
                <div class="space-y-4">
                    <h4 class="text-xs font-black uppercase tracking-wider text-slate-400">Frequently Asked Questions:</h4>
                    
                    @foreach($cur['faqs'] as $index => $faq)
                        <div class="space-y-2">
                            <h5 class="text-xs sm:text-sm font-bold {{ $cur['text_accent'] }} flex items-start gap-2">
                                <span class="w-2 h-2 rounded-full {{ $cur['dot_bg'] }} mt-1.5 shrink-0"></span>
                                <span>{{ $index + 1 }}. {{ $faq['q'] }}</span>
                            </h5>
                            <div class="bg-slate-50 p-3.5 rounded-xl text-xs text-slate-700 leading-relaxed border border-slate-200/60 ml-4">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Inquiry Form Section --}}
                <div class="pt-6 border-t border-slate-200 space-y-4">
                    <h4 class="text-sm font-bold text-slate-900">Have a specific inquiry? Send a message directly to our desk:</h4>
                    
                    <form id="jobsFaqInquiryForm" class="space-y-3" onsubmit="submitJobFaqForm(event, '{{ $cur['route'] }}')">
                        @csrf
                        <input type="hidden" name="website_hp" value="">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-medium text-slate-600 mb-1">Full Name *</label>
                                <input type="text" name="full_name" required placeholder="Juan Dela Cruz" class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-slate-600 mb-1">Email Address *</label>
                                <input type="email" name="email" required placeholder="juan@example.com" class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                            </div>
                        </div>

                        {{-- Inquiry Category Selector --}}
                        <div class="space-y-2">
                            <div>
                                <label class="block text-xs font-medium text-slate-600 mb-1">Inquiry / Concern Category *</label>
                                <select name="category" 
                                        required
                                        x-model="selectedCategory"
                                        @change="isOtherCategory = ($event.target.value === 'other')"
                                        class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                                    <option value="" disabled selected>Select a relevant category...</option>
                                    @foreach($cur['categories'] as $cat)
                                        <option value="{{ $cat }}">{{ $cat }}</option>
                                    @endforeach
                                    <option value="other">Other (Please specify custom topic)</option>
                                </select>
                            </div>

                            {{-- Dynamic input if 'Other' category is chosen --}}
                            <div x-show="isOtherCategory" x-cloak x-transition>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Specify Your Custom Topic / Category *</label>
                                <input type="text" 
                                       name="other_category" 
                                       :required="isOtherCategory"
                                       placeholder="e.g. Interview Follow-up, Certificate Inquiry, etc." 
                                       class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-slate-600 mb-1">Subject / Title *</label>
                            <input type="text" name="title" required placeholder="Brief summary of your inquiry..." class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-slate-600 mb-1">Message or Questions *</label>
                            <textarea name="content" rows="3" required placeholder="Provide the complete details of your inquiry or concern..." class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}"></textarea>
                        </div>

                        <div id="jobFaqResponseMsg" class="hidden p-3 rounded-lg text-xs font-medium"></div>

                        <div class="flex justify-end pt-2">
                            <button type="submit" id="submitJobFaqBtn" class="px-5 py-2.5 text-xs font-bold text-white rounded-xl shadow transition-colors {{ $cur['btn_submit'] }}">
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
if (typeof submitJobFaqForm !== 'function') {
    function submitJobFaqForm(e, targetRoute) {
        e.preventDefault();
        const form = e.target;
        const responseMsg = document.getElementById('jobFaqResponseMsg');
        const submitBtn = document.getElementById('submitJobFaqBtn');

        if (!targetRoute || targetRoute === '#') {
            alert('Enquiry route is not yet configured for this portal.');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerText = 'Sending...';
        responseMsg.classList.add('hidden');

        const formData = new FormData(form);

        fetch(targetRoute, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            responseMsg.classList.remove('hidden', 'bg-red-50', 'text-red-700', 'bg-emerald-50', 'text-emerald-700');
            if(data.status === 'success') {
                responseMsg.classList.add('bg-emerald-50', 'text-emerald-700');
                responseMsg.innerText = data.message;
                form.reset();
            } else {
                responseMsg.classList.add('bg-red-50', 'text-red-700');
                responseMsg.innerText = data.message || 'An error occurred. Please try again.';
            }
        })
        .catch(err => {
            responseMsg.classList.remove('hidden');
            responseMsg.classList.add('bg-red-50', 'text-red-700');
            responseMsg.innerText = 'Unable to connect to the server. Please try again.';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Send Inquiry';
        });
    }
}
</script>