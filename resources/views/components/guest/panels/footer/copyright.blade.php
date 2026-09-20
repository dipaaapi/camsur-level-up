<div class="bg-black text-slate-400 py-3 text-[11px] border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-2">
        <div>
            &copy; {{ date('Y') }} <span class="text-white font-bold uppercase">Provincial Government of Camarines Sur</span>. All Rights Reserved.
        </div>
        <div class="flex items-center gap-3 text-slate-400">
            <span>Maintained by: <strong class="text-slate-200">ICARMO</strong> <span class="hidden md:inline text-slate-500">(Information Communication Archives and Records Management Office)</span></span>
            <span class="text-slate-700 hidden sm:inline">•</span>
            <a href="{{ route('sitemap') }}" class="text-slate-400 hover:text-amber-400 transition inline-flex items-center gap-1 text-[11px] font-medium">
                <i class="fa-solid fa-sitemap text-[10px] text-amber-500"></i>
                <span>Sitemap</span>
            </a>
            <span class="text-slate-700 hidden sm:inline">•</span>
            <a href="{{ route('login') }}" class="text-slate-500 hover:text-amber-400 transition inline-flex items-center gap-1 text-[10px] uppercase font-semibold tracking-wider">
                <i class="fa-solid fa-lock text-[9px]"></i>
                <span>Portal Access</span>
            </a>
        </div>
    </div>
</div>
