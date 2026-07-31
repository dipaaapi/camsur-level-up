<div style="background-color: #0d2b5c;" class="text-white pt-12 pb-10 border-t-4 border-amber-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Col 1: Provincial Logo & Info --}}
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/camsur-logo.png') }}" alt="Camsur Logo" class="h-12 w-auto">
                    <div>
                        <h3 class="font-extrabold text-sm tracking-wider uppercase text-white">Camarines Sur</h3>
                        <p class="text-[10px] text-blue-200 uppercase tracking-tight">Provincial Government</p>
                    </div>
                </div>
                <p class="text-xs text-blue-100 leading-relaxed mt-2">
                    Official Web Portal of the Provincial Government of Camarines Sur. Serving the people with integrity, transparency, and innovation.
                </p>
            </div>

            {{-- Col 2: Quick Links --}}
            <div>
                <h4 class="text-xs font-extrabold uppercase tracking-widest text-amber-300 mb-4 border-b border-white/10 pb-2">
                    Quick Links
                </h4>
                <ul class="space-y-2 text-xs text-blue-100">
                    <li><a href="{{ route('home') }}" class="hover:text-amber-300 transition">&rarr; Home</a></li>
                    <li><a href="#about" class="hover:text-amber-300 transition">&rarr; About Camsur</a></li>
                    <li><a href="#transparency" class="hover:text-amber-300 transition">&rarr; Transparency Seal</a></li>
                    <li><a href="{{ route('tourism') }}" class="hover:text-amber-300 transition">&rarr; Tourism & Eco-Adventure</a></li>
                    <li><a href="{{ route('search') }}" class="hover:text-amber-300 transition">&rarr; Search Portal</a></li>
                </ul>
            </div>

            {{-- Col 3: Public Services --}}
            <div>
                <h4 class="text-xs font-extrabold uppercase tracking-widest text-amber-300 mb-4 border-b border-white/10 pb-2">
                    Public Services
                </h4>
                <ul class="space-y-2 text-xs text-blue-100">
                    <li><a href="#citizens-charter" class="hover:text-amber-300 transition">&rarr; Citizen's Charter</a></li>
                    <li><a href="#bac" class="hover:text-amber-300 transition">&rarr; Bids & Awards Committee</a></li>
                    <li><a href="#careers" class="hover:text-amber-300 transition">&rarr; Job Vacancies / Careers</a></li>
                    <li><a href="#downloads" class="hover:text-amber-300 transition">&rarr; Downloadable Forms</a></li>
                </ul>
            </div>

            {{-- Col 4: Contact & Location --}}
            <div>
                <h4 class="text-xs font-extrabold uppercase tracking-widest text-amber-300 mb-4 border-b border-white/10 pb-2">
                    Contact Us
                </h4>
                <div class="space-y-2.5 text-xs text-blue-100">
                    <p class="flex items-start gap-2">
                        <span class="font-bold text-amber-300">📍</span>
                        <span>Provincial Capitol Complex, Cadlan, Pili, Camarines Sur, 4418</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-bold text-amber-300">📞</span>
                        <span>(054) 881-2831</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-bold text-amber-300">✉️</span>
                        <span>info@camarinessur.gov.ph</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-bold text-amber-300">🕒</span>
                        <span>Mon - Fri: 8:00 AM - 5:00 PM</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
