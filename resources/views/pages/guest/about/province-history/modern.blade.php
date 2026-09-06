<section id="modern" x-data="{ shown: false }" x-intersect.once="shown = true"
    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
    class="scroll-mt-28 space-y-8 transition-all duration-700">

    <div class="max-w-3xl">
        <span class="text-xs font-bold uppercase tracking-widest text-teal-600 dark:text-teal-400">Socio-Economic Evolution</span>
        <h2 class="mt-2 text-3xl font-black text-slate-900 dark:text-white">Modern Governance and Development</h2>
        <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300 sm:text-base">Modern Camarines Sur builds on its agricultural foundations while expanding education, digital transformation, and infrastructure.</p>
    </div>

    <div class="grid grid-cols-1 items-stretch gap-6 lg:grid-cols-2">
        {{-- IMAGE: The modern CamSur Provincial Capitol representing modern governance --}}
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-2.5 shadow-sm dark:border-slate-700 dark:bg-slate-800 flex items-center justify-center">
            <img
                src="{{ asset('img/about/province-history/camsur-capitol.jpg') }}"
                alt="The modern Provincial Capitol of Camarines Sur in Pili"
                class="h-full min-h-[18rem] max-h-[460px] w-full rounded-2xl object-cover"
                loading="lazy"
            />
        </div>

        <div class="space-y-6">
            <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-teal-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-teal-700">
                <h3 class="text-xl font-black text-slate-900 dark:text-white">Agriculture & Rural Development</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">The province remains a key agricultural center. In April 2026, Land Bank launched the Agrisenso Plus Lending Program and ASCEND initiative, providing capital and digital banking for farmers and fisherfolk.</p>
            </article>
            <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-teal-300 hover:shadow-xl dark:border-slate-700 dark:bg-slate-800 dark:hover:border-teal-700">
                <h3 class="text-xl font-black text-slate-900 dark:text-white">Education, Technology & Infrastructure</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">Smarter CamSur programs include educational assistance, teacher digital certification, and specialized technology and arts facilities.</p>
            </article>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
        @foreach ([
            ['Education','Ka Fuerte Educational Assistance','Financial assistance for college scholars and qualified learners.'],
            ['Digital Skills','Digital Educator Certification','Technology training and certification for educators.'],
            ['Innovation','Advanced Learning Facilities','AI, technical education, arts, and future-ready skills.'],
            ['Public Service','Provincial Infrastructure','Modern facilities improving public service delivery.'],
        ] as $p)
            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-teal-300 hover:shadow-lg dark:border-slate-700 dark:bg-slate-800 dark:hover:border-teal-700">
                <p class="text-xs font-bold uppercase tracking-widest text-teal-600 dark:text-teal-400">{{ $p[0] }}</p>
                <h3 class="mt-2 font-black text-slate-900 dark:text-white">{{ $p[1] }}</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $p[2] }}</p>
            </article>
        @endforeach
    </div>
</section>