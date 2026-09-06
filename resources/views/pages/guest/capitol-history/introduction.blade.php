{{-- INTRODUCTION --}}
<section class="reveal surface surface-pad section">
    <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7">
            <span class="eyebrow">Seat of Provincial Governance</span>
            <h2 class="h-sec">A Story of Relocation, Resilience, and Renewal</h2>
            <p class="lede">
                The Capitol History of Camarines Sur is not only the story of a government building. It is the story of how a
                province searched for a permanent administrative home, endured destruction, rebuilt with urgency, and continues
                to transform its Capitol into a modern symbol of governance, culture, and public service.
            </p>
            <p class="lede">
                That story begins over four centuries ago — with a royal decree signed on <strong class="text-blue-950">May 27, 1579</strong>,
                a river dividing two settlements, and a name borrowed from the rice granaries that once lined the Bicol Valley.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-3 lg:col-span-5" x-data="{}">
            <a href="#historical-seats" @click="$dispatch('change-seat', 'nueva-caceres')" class="stat-card border border-amber-200 bg-amber-50/50 hover:bg-amber-100/60 hover:-translate-y-0.5 hover:shadow-md transition-all duration-300 block text-left">
                <p class="text-[.62rem] font-bold uppercase tracking-[.14em] text-amber-700">Spanish Era</p>
                <p class="mt-1.5 text-lg font-black text-blue-950">Nueva Cáceres</p>
                <p class="mt-1 text-[.7rem] font-semibold text-amber-700/70">1579 – 1919</p>
            </a>
            <a href="#historical-seats" @click="$dispatch('change-seat', 'naga')" class="stat-card border border-blue-200 bg-blue-50/50 hover:bg-blue-100/60 hover:-translate-y-0.5 hover:shadow-md transition-all duration-300 block text-left">
                <p class="text-[.62rem] font-bold uppercase tracking-[.14em] text-blue-700">Post-Separation</p>
                <p class="mt-1.5 text-lg font-black text-blue-950">Naga</p>
                <p class="mt-1 text-[.7rem] font-semibold text-blue-700/70">1919 – 1955</p>
            </a>
            <a href="#historical-seats" @click="$dispatch('change-seat', 'pili')" class="stat-card border border-rose-200 bg-rose-50/50 hover:bg-rose-100/60 hover:-translate-y-0.5 hover:shadow-md transition-all duration-300 block text-left">
                <p class="text-[.62rem] font-bold uppercase tracking-[.14em] text-rose-700">Present</p>
                <p class="mt-1.5 text-lg font-black text-blue-950">Pili</p>
                <p class="mt-1 text-[.7rem] font-semibold text-rose-700/70">1955 – Today</p>
            </a>
            <a href="#historical-seats" @click="$dispatch('change-seat', 'uptown')" class="stat-card border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/60 hover:-translate-y-0.5 hover:shadow-md transition-all duration-300 block text-left">
                <p class="text-[.62rem] font-bold uppercase tracking-[.14em] text-emerald-700">Future</p>
                <p class="mt-1.5 text-lg font-black text-blue-950">Uptown</p>
                <p class="mt-1 text-[.7rem] font-semibold text-emerald-700/70">Master plan</p>
            </a>
        </div>
    </div>
</section>
