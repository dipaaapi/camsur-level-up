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
                Quick answers to common inquiries regarding provincial scholarships, citizen social welfare, tourism, transparency, and public services across Camarines Sur.
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
                        question: 'How do I apply for the CamSur Educational Assistance Program?',
                        answer: 'You may submit your Certificate of Enrollment (COE), True Copy of Grades from the previous semester, Barangay Certificate of Indigency, and a valid school ID to the Provincial Scholarship Office at the Capitol Complex, Cadlan, Pili. Monitor official application announcements on the Province of CamSur official Facebook page.',
                        link: '{{ route('services.educational-assistance') }}',
                        linkText: 'View Complete Scholarship Guidelines'
                    },
                    {
                        category: 'education',
                        question: 'What financial assistance amount does a beneficiary student receive?',
                        answer: 'Financial grant amounts depend on the student\'s academic level and program guidelines (typically starting at ₱5,000 for tuition assistance, academic supplies, or project requirements). Payouts are distributed directly via cash or check through official provincial payroll distribution.',
                        link: '{{ route('services.educational-assistance') }}',
                        linkText: 'Learn more about payout schedules'
                    },
                    {
                        category: 'education',
                        question: 'Is academic honor required to qualify for educational assistance?',
                        answer: 'Academic honors are not required; however, applicants must have passing grades (no failing marks) and be regularly enrolled bona fide students in an accredited high school, college, or university.',
                        link: null,
                        linkText: null
                    },
                    {
                        category: 'services',
                        question: 'Where can citizens request Medical and Emergency Financial Assistance (AICS)?',
                        answer: 'For medical, burial, and emergency financial assistance, visit the Provincial Social Welfare and Development Office (PSWDO) at the Capitol Complex, Cadlan, Pili. Please bring your Medical Certificate/Abstract, Hospital Bill or Pharmacy Prescription, Barangay Certificate of Indigency, and a Valid Government ID.',
                        link: null,
                        linkText: null
                    },
                    {
                        category: 'tourism',
                        question: 'How do visitors travel to and tour the Caramoan Peninsula?',
                        answer: 'Visitors can travel by bus or van from Naga City to Sabang Port (San Jose) or Guijalo Port (Caramoan). Before embarking on island hopping tours, register at the Municipal Tourism Office of Caramoan to process environmental conservation fees and secure accredited boat operators.',
                        link: '{{ route('tourism') }}',
                        linkText: 'Visit Official Tourism & Travel Guide'
                    },
                    {
                        category: 'transparency',
                        question: 'Where can bidders view public bidding opportunities and BAC notices?',
                        answer: 'All Invitations to Bid, Supplemental Bid Bulletins, and Notices of Award are publicly accessible on our Transparency Portal under the Bids and Awards Committee (BAC) section in full compliance with Republic Act 9184.',
                        link: '{{ route('bac') }}',
                        linkText: 'Access BAC Procurement Portal'
                    },
                    {
                        category: 'careers',
                        question: 'How do I apply for civil service and job vacancies in Camarines Sur?',
                        answer: 'Visit the Careers section of this portal to browse government vacancies, private local jobs, and licensed overseas recruitment. Submit your Personal Data Sheet (CS Form 212) along with your credentials to the Provincial Human Resource Management Office (PHRMO).',
                        link: '{{ route('careers.government') }}',
                        linkText: 'Browse Open Job Vacancies'
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
                   placeholder="Search questions (e.g., scholarship, medical assistance, Caramoan, jobs)..."
                   class="w-full pl-11 pr-4 py-3.5 bg-white border border-gray-300 rounded-2xl shadow-sm text-sm focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition outline-none">
        </div>

        {{-- Filter Category Pills --}}
        <div class="flex flex-wrap items-center justify-center gap-2 mb-10 text-xs font-semibold">
            <button type="button" @click="activeCategory = 'all'"
                    :class="activeCategory === 'all' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">All Topics</button>
            <button type="button" @click="activeCategory = 'education'"
                    :class="activeCategory === 'education' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Scholarship & Education</button>
            <button type="button" @click="activeCategory = 'services'"
                    :class="activeCategory === 'services' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Public Services & AICS</button>
            <button type="button" @click="activeCategory = 'tourism'"
                    :class="activeCategory === 'tourism' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Tourism & Travel</button>
            <button type="button" @click="activeCategory = 'transparency'"
                    :class="activeCategory === 'transparency' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Transparency & BAC</button>
            <button type="button" @click="activeCategory = 'careers'"
                    :class="activeCategory === 'careers' ? 'bg-blue-900 text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full transition">Careers & Employment</button>
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
                <h3 class="font-bold text-gray-700">No matching questions found</h3>
                <p class="text-xs text-gray-500 mt-1">Try searching with different keywords or select another topic category.</p>
            </div>
        </div>
    </section>
</x-guest-layout>
