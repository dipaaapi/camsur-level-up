@props([
    'type' => 'government' // government, local, overseas, spes
])

@php
    $configs = [
        'government' => [
            'title' => 'Government Careers FAQ & Help Desk',
            'subtitle' => 'Mga madalas itanong ukol sa pag-apply sa Provincial Government ng Camarines Sur',
            'btn_bg' => 'bg-emerald-700 hover:bg-emerald-800',
            'text_accent' => 'text-emerald-800',
            'dot_bg' => 'bg-emerald-600',
            'header_gradient' => 'from-emerald-800 to-teal-800',
            'input_focus' => 'focus:ring-emerald-500 focus:border-emerald-500',
            'btn_submit' => 'bg-emerald-700 hover:bg-emerald-800',
            'route' => Route::has('careers.government.send-inquiry') ? route('careers.government.send-inquiry') : '#',
            'faqs' => [
                [
                    'q' => 'Anu-ano ang mga pangunahing requirement sa pag-apply sa gobyerno?',
                    'a' => 'Kailangang ihanda ang Personal Data Sheet (CS Form 212 - Revised 2017) na may Work Experience Sheet, Authenticated Copy ng TOR & Diploma, Certificate of Eligibility/PRC License, at IPCR (para sa kasalukuyang empleyado ng gobyerno).'
                ],
                [
                    'q' => 'Kailangan ba ng Civil Service Eligibility para sa lahat ng posisyon?',
                    'a' => 'Para sa Permanent (Plantilla) at Temporary positions, OPO (CSC Professional/Sub-Professional o Board/PRC License). Sa Job Order (JO) at Contract of Service (COS), hindi ito mahigpit na requirement ngunit isang malaking bentahe.'
                ],
                [
                    'q' => 'Saan at paano ipapaikot o isusumite ang mga aplikasyon?',
                    'a' => 'Maaaring magsumite ng orihinal na hard copy sa Provincial Human Resource Management Office (PHRMO), Capitol Complex, Cadlan, Pili, Camarines Sur o mag-upload sa ating online portal directory.'
                ],
                [
                    'q' => 'Gaano katagal ang proseso ng recruitment at selection (PSB)?',
                    'a' => 'Karaniwang tumatagal ng 30 hanggang 60 calendar days mula sa publication deadline alinsunod sa Merit Selection Plan ng Civil Service Commission.'
                ],
                [
                    'q' => 'Bukas ba ang Capitol sa mga nag-a-apply na walang kakilala sa loob?',
                    'a' => 'Opo! Ang Pamahalaang Panlalawigan ng CamSur ay nagpapatupad ng Equal Employment Opportunity Principle (EEOP). Lahat ng qualified applicants ay pantay-pantay ang pagkakataon nang walang diskriminasyon.'
                ]
            ]
        ],
        'local' => [
            'title' => 'Local Employment FAQ & Assistance',
            'subtitle' => 'Mga gabay sa paghahanap ng lokal na trabaho sa pribadong sektor sa Camarines Sur',
            'btn_bg' => 'bg-blue-700 hover:bg-blue-800',
            'text_accent' => 'text-blue-800',
            'dot_bg' => 'bg-blue-600',
            'header_gradient' => 'from-blue-900 to-indigo-900',
            'input_focus' => 'focus:ring-blue-500 focus:border-blue-500',
            'btn_submit' => 'bg-blue-700 hover:bg-blue-800',
            'route' => Route::has('careers.local.send-inquiry') ? route('careers.local.send-inquiry') : '#',
            'faqs' => [
                [
                    'q' => 'Libre ba ang pag-apply sa pamamagitan ng PESO Local Placement Desk?',
                    'a' => 'Opo, 100% LIBRE ang lahat ng serbisyo ng PESO Camsur. Walang placement fee o anumang singil sa mga jobseekers.'
                ],
                [
                    'q' => 'Ligtas at accredited ba ang mga employer na nakatala sa directory?',
                    'a' => 'Opo. Lahat ng kumpanya at business establishments ay biniberipika ng PESO Camarines Sur at DOLE bago payagang mag-post ng kanilang local job vacancies.'
                ],
                [
                    'q' => 'Ano ang kailangang dalhin kapag dadalo sa Job Fairs o Walk-in Placement?',
                    'a' => 'Magdala ng maraming kopya ng updated Resume/CV, 2x2 ID Pictures, Photocopy ng TOR/Diploma, at Barangay/NBI Clearances.'
                ],
                [
                    'q' => 'Ano ang gagawin kung sakaling hindi pa tinatawagan ng local employer?',
                    'a' => 'Karaniwang tumatagal ng 1-2 linggo ang pag-filter ng resumes. Maaari rin kayong mag-follow up sa pamamagitan ng pagpapadala ng inquiry form sa aming desk.'
                ]
            ]
        ],
        'overseas' => [
            'title' => 'Overseas Careers & OFW Safety FAQ',
            'subtitle' => 'Mga gabay sa legal at ligtas na pagtatrabaho sa ibang bansa (DMW / POEA Guidelines)',
            'btn_bg' => 'bg-sky-700 hover:bg-sky-800',
            'text_accent' => 'text-sky-800',
            'dot_bg' => 'bg-sky-600',
            'header_gradient' => 'from-sky-900 via-indigo-950 to-slate-900',
            'input_focus' => 'focus:ring-sky-500 focus:border-sky-500',
            'btn_submit' => 'bg-sky-700 hover:bg-sky-800',
            'route' => Route::has('careers.overseas.send-inquiry') ? route('careers.overseas.send-inquiry') : '#',
            'faqs' => [
                [
                    'q' => 'Paano makakasiguro na legal at lisensyado ang agency para sa Overseas Jobs?',
                    'a' => 'Lahat ng job orders dito ay direktang naka-validate sa Department of Migrant Workers (DMW / dating POEA). Huwag kailanman mag-apply sa mga illegal recruiters sa Facebook o messaging apps.'
                ],
                [
                    'q' => 'May placement fee ba para sa pag-apply sa ibang bansa?',
                    'a' => 'Alinsunod sa DMW rules, HINDI pinapayagang maningil ng placement fee sa mga Household Service Workers (HSWs) at maging sa mga bansang may "No Placement Fee Policy" (tulad ng UK, Canada, USA, Japan, at Germany).'
                ],
                [
                    'q' => 'Ano ang OEC (Overseas Employment Certificate) at bakit ito mahalaga?',
                    'a' => 'Ang OEC ang opisyal na clearance ng OFW mula sa DMW na nagpapatunay na kayo ay dumaan sa legal na proseso at protektado ng Pamahalaan ng Pilipinas sa inyong pag-alis.'
                ],
                [
                    'q' => 'May tulong ba ang Provincial Government para sa mga nagbabalik na OFW (Reintegration)?',
                    'a' => 'Opo! Sa pamamagitan ng PESO Camsur at Overseas Workers Welfare Administration (OWWA), may livelihood assistance, scholarship, at retraining programs para sa mga displaced OFWs.'
                ]
            ]
        ],
        'spes' => [
            'title' => 'SPES & Student Internships FAQ',
            'subtitle' => 'Gabay para sa mga mag-aaral na nais magtrabaho at mag-internship sa lalawigan',
            'btn_bg' => 'bg-purple-700 hover:bg-purple-800',
            'text_accent' => 'text-purple-800',
            'dot_bg' => 'bg-purple-600',
            'header_gradient' => 'from-purple-950 to-indigo-900',
            'input_focus' => 'focus:ring-purple-500 focus:border-purple-500',
            'btn_submit' => 'bg-purple-700 hover:bg-purple-800',
            'route' => Route::has('careers.spes.send-inquiry') ? route('careers.spes.send-inquiry') : (Route::has('careers.local.send-inquiry') ? route('careers.local.send-inquiry') : '#'),
            'faqs' => [
                [
                    'q' => 'Sinu-sino ang pwedeng mag-apply sa SPES (Special Program for Employment of Students)?',
                    'a' => 'Mga mag-aaral na may edad 15 hanggang 30 taong gulang (High School, Senior High, College, o Out-of-School Youth na gustong bumalik sa pag-aaral) na may passing grades at ang pinagsamang kita ng magulang ay hindi lumalagpas sa regional poverty threshold.'
                ],
                [
                    'q' => 'Ilang araw ang tagal ng SPES employment at magkano ang sahod?',
                    'a' => 'Tumatagal ng 20 hanggang 78 working days. Ang sahod ay nakabatay sa umiiral na Minimum Wage kung saan 60% ay binabayaran ng Provincial Government at 40% naman ay mula sa DOLE.'
                ],
                [
                    'q' => 'Ano ang mga kinakailangang dokumento para sa SPES?',
                    'a' => 'Duly accomplished SPES Application Form, Birth Certificate (PSA/Barangay), Form 138/Report Card/TOR na may passing grade, at Barangay Certificate of Indigency o Parents Income Tax Return (ITR).'
                ],
                [
                    'q' => 'Pano naman mag-apply para sa Government College Internship / On-the-Job Training (OJT)?',
                    'a' => 'Magdala ng Endorsement Letter mula sa inyong Unibersidad/Kolehiyo, Resume, at Letter of Intent na nakatutok sa Provincial HRMO o sa napiling Capitol Office.'
                ]
            ]
        ]
    ];

    $cur = $configs[$type] ?? $configs['government'];
@endphp

<div x-data>
    {{-- FLOATING BUTTON --}}
    <div class="fixed bottom-6 right-6 z-40">
        <button @click="$dispatch('open-faq-modal')" 
                class="flex items-center gap-2 text-white font-bold px-4 py-3 rounded-full shadow-2xl hover:scale-105 transition-all {{ $cur['btn_bg'] }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="hidden sm:inline text-sm">FAQ & Inquiry Desk</span>
        </button>
    </div>

    {{-- MODAL OVERLAY --}}
    <div x-data="{ open: false }" 
         @open-faq-modal.window="open = true" 
         x-show="open" 
         class="fixed inset-0 z-50 overflow-y-auto" 
         x-cloak>
        <div class="flex items-end sm:items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            
            {{-- Backdrop --}}
            <div x-show="open" x-transition.opacity @click="open = false" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            {{-- Modal Content Box --}}
            <div x-show="open" x-transition 
                 class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full border border-slate-100">
                
                {{-- Header --}}
                <div class="bg-gradient-to-r {{ $cur['header_gradient'] }} p-6 text-white flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold">{{ $cur['title'] }}</h3>
                        <p class="text-slate-200 text-xs mt-1">{{ $cur['subtitle'] }}</p>
                    </div>
                    <button @click="open = false" class="text-slate-200 hover:text-white p-1 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <div class="p-6 space-y-6 max-h-[70vh] overflow-y-auto">
                    
                    {{-- Dynamic FAQ Accordions / List --}}
                    <div class="space-y-4">
                        <h4 class="text-xs font-black uppercase tracking-wider text-slate-400">Mga Madalas Itanong (Frequently Asked Questions):</h4>
                        
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
                        <h4 class="text-sm font-bold text-slate-900">May iba ka pang tiyak na katanungan? Magpadala ng mensahe sa amin:</h4>
                        
                        <form id="jobsFaqInquiryForm" class="space-y-3" onsubmit="submitJobFaqForm(event, '{{ $cur['route'] }}')">
                            @csrf
                            <input type="hidden" name="website_hp" value="">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Buong Pangalan *</label>
                                    <input type="text" name="full_name" required placeholder="Juan Dela Cruz" class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Email Address *</label>
                                    <input type="email" name="email" required placeholder="juan@example.com" class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-600 mb-1">Paksa / Title *</label>
                                <input type="text" name="title" required placeholder="Isulat ang paksa ng iyong katanungan..." class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-600 mb-1">Mensahe o Katanungan *</label>
                                <textarea name="content" rows="3" required placeholder="Isulat dito ang inyong detalyadong katanungan..." class="w-full text-xs rounded-lg border-slate-300 {{ $cur['input_focus'] }}"></textarea>
                            </div>

                            <div id="jobFaqResponseMsg" class="hidden p-3 rounded-lg text-xs font-medium"></div>

                            <div class="flex justify-end gap-2">
                                <button type="button" @click="open = false" class="px-4 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-100 rounded-lg">
                                    Isara
                                </button>
                                <button type="submit" id="submitJobFaqBtn" class="px-4 py-2 text-xs font-bold text-white rounded-lg shadow transition-colors {{ $cur['btn_submit'] }}">
                                    Ipadala ang Katanungan
                                </button>
                            </div>
                        </form>
                    </div>

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
        submitBtn.innerText = 'Ipinapadala...';
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
                responseMsg.innerText = data.message || 'Nagkaroon ng problema. Subukang muli.';
            }
        })
        .catch(err => {
            responseMsg.classList.remove('hidden');
            responseMsg.classList.add('bg-red-50', 'text-red-700');
            responseMsg.innerText = 'Nagkaroon ng error sa server connection.';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Ipadala ang Katanungan';
        });
    }
}
</script>