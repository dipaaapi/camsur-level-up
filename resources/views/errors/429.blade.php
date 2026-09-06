@extends('layouts.guest')

@section('title', '429 - Masyadong Maraming Kahilingan | Too Many Requests')

@section('content')
<div class="min-h-[75vh] flex items-center justify-center px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-2xl w-full bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
        {{-- Header Accent Bar --}}
        <div class="h-3 bg-gradient-to-r from-amber-500 via-orange-500 to-red-500"></div>

        <div class="p-8 sm:p-12 text-center">
            {{-- Icon Badge --}}
            <div class="mx-auto flex items-center justify-center h-24 w-24 rounded-full bg-amber-50 border-4 border-amber-200 shadow-inner mb-6 animate-pulse">
                <span class="text-4xl">⏱️</span>
            </div>

            {{-- Status & Main Title --}}
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-black tracking-wider uppercase bg-amber-100 text-amber-900 border border-amber-300 mb-3">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                HTTP Error 429 &bull; Anti-Flooding Protection
            </span>

            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Masyadong Maraming Kahilingan
            </h1>
            <p class="text-sm font-semibold text-amber-700 uppercase tracking-widest mt-1">
                Too Many Requests &bull; Temporary Rate Limit Reached
            </p>

            {{-- Relatable Explanation Box --}}
            <div class="mt-8 text-left bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-7 space-y-4">
                <div class="flex items-start gap-3.5">
                    <div class="p-2 bg-amber-500/10 rounded-xl text-amber-700 text-xl font-bold shrink-0">
                        🛡️
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900">Bakit lumabas ang pahinang ito?</h2>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                            Upang maprotektahan ang official portal ng Camarines Sur laban sa <strong>malicious attacks, automated bot flooding, at spam messaging</strong>, may aktibong safety limit ang ating system (hanggang 5 kahilingan bawat minuto).
                        </p>
                    </div>
                </div>

                <div class="border-t border-slate-200/80 pt-4 flex items-start gap-3.5">
                    <div class="p-2 bg-blue-500/10 rounded-xl text-blue-700 text-xl font-bold shrink-0">
                        💡
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900">Ano ang dapat mong gawin?</h2>
                        <ul class="text-xs sm:text-sm text-slate-600 mt-1 space-y-1.5 list-disc list-inside">
                            <li>Maghintay lamang ng <strong>1 hanggang 2 minuto</strong> bago muling magsumite o mag-refresh.</li>
                            <li>Siguraduhing hindi sunod-sunod na napindot ang <em>Submit</em> button.</li>
                            <li>Tiyaking hindi gumagamit ng automated browser extensions o mabilisang auto-clicker scripts.</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Navigation Action Buttons --}}
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
                <button onclick="window.history.back()"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-2xl bg-amber-500 hover:bg-amber-600 text-slate-950 font-black text-xs uppercase tracking-wider px-7 py-3.5 shadow-lg shadow-amber-500/25 transition cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Bumalik sa Nakaraang Pahina
                </button>
                <a href="{{ url('/') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-2xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider px-6 py-3.5 border border-slate-300 transition">
                    Pumunta sa Homepage
                </a>
            </div>

            {{-- Support & Assistance Note --}}
            <p class="mt-8 text-[11px] text-slate-400">
                Provincial Government of Camarines Sur &bull; Information and Communications Technology Office
            </p>
        </div>
    </div>
</div>
@endsection
