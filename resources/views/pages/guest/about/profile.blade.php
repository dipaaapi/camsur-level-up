@extends('layouts.app')

@section('content')
@php
    $profiles = \App\Models\ProvincialProfile::orderBy('sort_order')->get()->keyBy('section_key');
    $overview = $profiles->get('overview');
    $vision = $profiles->get('vision');
    $mission = $profiles->get('mission');
    $history = $profiles->get('history');
    $geography = $profiles->get('geography');
@endphp

<div class="py-5 bg-dark text-white" style="background: linear-gradient(135deg, #06142e 0%, #0a214a 50%, #071736 100%);">
    <div class="container py-4">

        {{-- Hero Header --}}
        <div class="text-center mb-5">
            <span class="badge badge-warning text-uppercase px-3 py-2 font-weight-bold tracking-widest mb-2">
                Official Provincial Profile
            </span>
            <h1 class="display-4 font-weight-bold text-uppercase text-white">
                Province of Camarines Sur
            </h1>
            <p class="lead text-light max-w-2xl mx-auto">
                {{ $overview->subtitle ?? 'The Heart of Bicolandia' }}
            </p>
        </div>

        {{-- Overview Card & Fast Facts --}}
        @if($overview)
        <div class="card bg-navy border-secondary shadow-lg mb-5 text-white" style="background-color: rgba(10, 33, 74, 0.8);">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h3 class="h2 font-weight-bold text-warning mb-3">{{ $overview->title }}</h3>
                        <p class="lead text-light" style="line-height: 1.8;">
                            {{ $overview->content }}
                        </p>
                    </div>
                    
                    @if($overview->quick_facts)
                    <div class="col-lg-5">
                        <div class="bg-dark p-4 rounded border border-secondary shadow">
                            <h5 class="text-warning font-weight-bold text-uppercase mb-3 pb-2 border-bottom border-secondary">
                                Fast Facts
                            </h5>
                            <ul class="list-unstyled mb-0">
                                @foreach($overview->quick_facts as $key => $value)
                                <li class="d-flex justify-content-between py-2 border-bottom border-secondary">
                                    <span class="text-muted font-weight-bold">{{ $key }}:</span>
                                    <span class="text-white font-weight-bold text-right">{{ $value }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        {{-- Vision & Mission --}}
        <div class="row mb-5">
            @if($vision)
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100 bg-navy border-warning shadow text-white" style="background-color: rgba(10, 33, 74, 0.8);">
                    <div class="card-body p-4">
                        <span class="badge badge-warning mb-2 font-weight-bold">OUR VISION</span>
                        <h3 class="card-title font-weight-bold text-white">{{ $vision->title }}</h3>
                        <p class="card-text text-light" style="line-height: 1.7;">
                            {{ $vision->content }}
                        </p>
                    </div>
                </div>
            </div>
            @endif

            @if($mission)
            <div class="col-md-6">
                <div class="card h-100 bg-navy border-primary shadow text-white" style="background-color: rgba(10, 33, 74, 0.8);">
                    <div class="card-body p-4">
                        <span class="badge badge-primary mb-2 font-weight-bold">OUR MISSION</span>
                        <h3 class="card-title font-weight-bold text-white">{{ $mission->title }}</h3>
                        <p class="card-text text-light" style="line-height: 1.7;">
                            {{ $mission->content }}
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>

        {{-- History & Geography --}}
        @if($history)
        <div class="card bg-navy border-secondary shadow-lg mb-4 text-white" style="background-color: rgba(10, 33, 74, 0.8);">
            <div class="card-body p-4 p-md-5">
                <h3 class="h2 font-weight-bold text-warning mb-2">{{ $history->title }}</h3>
                <h6 class="text-muted text-uppercase mb-4">{{ $history->subtitle }}</h6>
                <p class="text-light" style="line-height: 1.8;">
                    {{ $history->content }}
                </p>
            </div>
        </div>
        @endif

    </div>
</div>
@endsection