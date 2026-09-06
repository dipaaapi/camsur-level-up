<x-guest-layout>
    <x-slot name="title">Help Center & FAQs | Province of Camarines Sur</x-slot>

    {{-- Header Banner --}}
    <section class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 px-4 sm:px-6 lg:px-8 shadow-inner">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 border border-amber-400/30 text-xs font-bold uppercase tracking-wider mb-3">
                Citizen Assistance Desk
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                Frequently Asked Questions (FAQ)
            </h1>
            <p class="mt-3 text-blue-200 text-sm sm:text-base max-w-2xl mx-auto">
                Mabilisang sagot sa mga karaniwang katanungan ukol sa scholarship, serbisyo publiko, turismo, at mga transaksyon sa Pamahalaang Panlalawigan ng Camarines Sur.
            </p>
        </div>
    </section>

    {{-- Interactive Search & Accordion Section --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
             x-data="{
                searchQuery: '',
                activeCategory: 'all',
                faqs: [
                    {
                        category: 'education',
                        question: 'Paano mag-apply para sa Educational Assistance Program ng CamSur?',
                        answer: 'Maaaring magsumite ng inyong Certificate of Enrollment (COE), True Copy of Grades mula sa nakaraang semestre, Barangay Certificate of Indigency, at valid school ID sa Provincial Scholarship Office sa Kapitolyo, Pili. Bantayan ang opisyal na anunsyo bago magsimula ang semestre sa Province of CamSur Facebook page.',
                        link: '{{ route('services.educational-assistance') }}',
                        linkText: 'Tingnan ang Kumpletong Gabay ng Scholarship'
                    },
                    {
                        category: 'education',
                        question: 'Magkano ang natatanggap na educational assistance ng isang estudyante?',
                        answer: 'Ang halaga ng tulong-pinansyal ay nakadepende sa antas ng pag-aaral at alituntunin ng programa (karaniwang nagsisimula sa ₱5,000 para sa tulong sa matrikula o gastusin sa proyekto at gamit sa eskwela). Direktang ipinamamahagi ito via cash o cheque sa pamamagitan ng payroll distribution.',
                        link: '{{ route('services.educational-assistance') }}',
                        linkText: 'Alamin ang detalye ng distribution'
                    },
                    {
                        category: 'education',
                        question: 'Kailangan ba na mataas ang grado (with honors) para maging scholar?',
                        answer: 'Hindi kinakailangang may honor, ngunit kailangang walang bagsak na grado (passing marks) at regular o bona fide student ng kinikilalang kolehiyo, unibersidad, o high school.',
                        link: null,
                        linkText: null
                    },
                    {
                        category: 'services',
                        question: 'Saan maaaring lumapit para sa Medical at Financial Assistance (AICS)?',
                        answer: 'Para sa medical, burial, at emergency financial assistance, maaaring magtungo sa Provincial Social Welfare and Development Office (PSWDO) sa Capitol Complex, Cadlan, Pili. Magdala ng Medical Certificate/Abstract, Hospital Bill o Reseta, Barangay Indigency, at Valid ID.',
                        link: null,
                        linkText: null
                    },
                    {
                        category: 'tourism',
                        question: 'Paano pumunta at mag-book ng tour sa Caramoan Peninsula?',
                        answer: 'Maaaring magbiyahe via van o bus patungong Sabang Port (San Jose) o Guijalo Port (Caramoan). Bago mag-island hopping, magpatala sa Municipal Tourism Office ng Caramoan para sa environmental fee at accredited boat operators.',
                        link: '{{ route('tourism') }}',
                        linkText: 'Bisitahin ang Opisyal na Gabay sa Turismo'
                    },
                    {
                        category: 'transparency',
                        question: 'Saan makikita ang mga Bidding Opportunities at BAC notices ng probinsya?',
                        answer: 'Lahat ng Invitation to Bid, Bid Bulletins, at Notice of Award ay pampublikong makikita sa ating Transparency Portal sa ilalim ng Bids and Awards Committee (BAC) section alinsunod sa RA 9184.',
                        link: '{{ route('bac') }}',
                        linkText: 'Pumunta sa BAC Portal'
                    },
                    {
                        category: 'careers',
                        question: 'Paano mag-apply ng trabaho sa Kapitolyo ng Camarines Sur?',
                        answer: 'Maaaring bisitahin ang Careers section ng ating portal upang makita ang mga bakanteng posisyon sa gobyerno, local jobs, at overseas recruitment. Isumite ang Personal Data Sheet (CSC Form 212) at mga kaukulang kredensyal sa Provincial Human Resource Management Office (PHRMO).',
                        link: '{{ route('careers.government') }}',
                        linkText: 'Tingnan ang mga Bakanteng Trabaho'
                    }
                ],
                get filteredFaqs() {
                    return this.faqs.filter(faq => {
                        const matchesCategory = this.activeCategory === 'all' || faq.category === this.activeCategory;
                        const matchesSearch = !this.searchQuery.trim() || 
                            faq.question.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                            faq.answer.toLowerCase().includes(this.searchQuery.toLowerCase());
                        return matchesCategory && matchesSearch;
                    });
                }
             }">

        {{-- Live Search Input --}}
        <div class="relative max-w-2xl mx-auto mb-8">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="text"
                   x-model="searchQuery"
                   placeholder="Maghanap ng tanong (hal. scholarship, requirements, AICS, Caramoan)..."
                   class="w-full pl-11 pr-4 py-3.5 bg-white border border-gray-300 rounded-2xl shadow-sm text-sm focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition outline-none">
        </div>

        {{-- Filter Category Pills --}}
        <div class="flex flex-wrap items-center justify-center gap-2 mb-10 text-xs font-semibold">
            <button type="button" @click="activeCategory = 'all'"
                    :class="activeCategory === 'all' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Lahat ng Paksa</button>
            <button type="button" @click="activeCategory = 'education'"
                    :class="activeCategory === 'education' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Scholarship & Edukasyon</button>
            <button type="button" @click="activeCategory = 'services'"
                    :class="activeCategory === 'services' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Serbisyo Publiko & AICS</button>
            <button type="button" @click="activeCategory = 'tourism'"
                    :class="activeCategory === 'tourism' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Turismo & Paglalakbay</button>
            <button type="button" @click="activeCategory = 'transparency'"
                    :class="activeCategory === 'transparency' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Transparency & BAC</button>
            <button type="button" @click="activeCategory = 'careers'"
                    :class="activeCategory === 'careers' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Trabaho & Hiring</button>
        </div>

        {{-- Accordion Items --}}
        <div class="space-y-4">
            <template x-for="(faq, index) in filteredFaqs" :key="index">
                <div x-data="{ expanded: false }" class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden transition">
                    <button type="button"
                            @click="expanded = !expanded"
                            class="w-full text-left px-6 py-4 flex items-center justify-between gap-4 hover:bg-slate-50 transition focus:outline-none">
                        <span class="font-bold text-gray-900 text-base sm:text-lg" x-text="faq.question"></span>
                        <span class="p-1 rounded-full bg-slate-100 text-slate-600 shrink-0 transform transition duration-200" :class="expanded ? 'rotate-180 bg-blue-100 text-blue-900' : ''">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div x-show="expanded"
                         x-collapse
                         x-cloak
                         class="px-6 pb-5 pt-1 text-sm text-gray-600 border-t border-gray-100 bg-slate-50/50 leading-relaxed">
                        <p x-text="faq.answer"></p>
                        <template x-if="faq.link">
                            <div class="mt-3">
                                <a :href="faq.link" class="inline-flex items-center gap-1 text-xs font-bold text-blue-700 hover:text-blue-900 underline">
                                    <span x-text="faq.linkText"></span> &rarr;
                                </a>
                            </div>
                        </template>
                    </div>
                </div>
            </template>

            {{-- Empty State --}}
            <div x-show="filteredFaqs.length === 0" class="text-center py-12 bg-slate-50 rounded-2xl border border-dashed border-gray-300">
                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="font-bold text-gray-700">Walang nahanap na katugmang tanong</h3>
                <p class="text-xs text-gray-500 mt-1">Subukang maghanap gamit ang ibang salita o pumili ng ibang kategorya.</p>
            </div>
        </div>
    </section>
</x-guest-layout>
