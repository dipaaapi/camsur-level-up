<nav
    x-data="provinceHistoryNavigation()"
    x-init="init()"
    class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 shadow-sm backdrop-blur-md dark:border-slate-800 dark:bg-slate-900/95 print:hidden"
    aria-label="Province history sections"
>
    <div class="mx-auto flex max-w-7xl items-center gap-3 px-4 py-3 sm:px-6 lg:px-8">
        <div class="scrollbar-hide min-w-0 flex-1 overflow-x-auto">
            <div class="flex min-w-max gap-1 text-xs font-semibold text-slate-600 dark:text-slate-300 sm:text-sm">
                <template x-for="section in sections" :key="section.id">
                    <a
                        :href="`#${section.id}`"
                        @click="active = section.id"
                        :class="active === section.id
                            ? 'bg-blue-600 text-white shadow-md shadow-blue-500/25'
                            : 'hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-slate-800 dark:hover:text-blue-300'"
                        class="rounded-full px-4 py-2 transition-all duration-200"
                        x-text="section.label"
                    ></a>
                </template>
            </div>
        </div>
    </div>
</nav>