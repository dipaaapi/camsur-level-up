{{-- 🌤️ Weather Widget Section: Enclosed inside standardized layout --}}
<section class="py-6 bg-slate-900 border-b border-slate-800 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-950/80 rounded-2xl border border-slate-800 p-4 sm:p-5 shadow-xl flex flex-col md:flex-row items-center justify-between gap-4">
            
            {{-- Context / Label --}}
            <div class="flex items-center gap-3 flex-shrink-0">
                <div class="w-10 h-10 rounded-xl bg-amber-400/10 border border-amber-400/30 flex items-center justify-center text-amber-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] font-black uppercase tracking-widest text-amber-400 block">CamSur Weather Watch</span>
                    <span class="text-xs font-bold text-white">Provincial Meteorological Monitoring</span>
                </div>
            </div>

            {{-- Third-Party Weather Widget Container --}}
            <div class="w-full md:w-auto flex-grow max-w-2xl overflow-hidden rounded-xl bg-black/40 border border-white/5 p-2">
                <div id="ww_e2db661773192" v='1.3' loc='id' a='{"t":"ticker","lang":"en","sl_lpl":1,"ids":["wl4565"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                    <a href="https://weatherwidget.org/" id="ww_e2db661773192_u" target="_blank" class="text-xs text-slate-400">Html Weather Widget</a>
                </div>
                <script async src="https://app3.weatherwidget.org/js/?id=ww_e2db661773192"></script>
            </div>
            
        </div>
    </div>
</section>
