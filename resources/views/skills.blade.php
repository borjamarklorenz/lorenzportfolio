@extends('layouts.app')
@section('title', 'Skills')
@section('heading', 'Skills')
@section('description', 'A dashboard of my tech stack and learning progress.')

@section('content')
@php
    $skills = config('portfolio.skills');
    $avg = count($skills) ? round(array_sum(array_column($skills, 'level')) / count($skills)) : 0;
@endphp
<div class="grid">
    {{-- Stats --}}
    <div class="stats s12">
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ count($skills) }}">0</div>
            <div class="stat-label">Skills tracked</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ $avg }}">0</div>
            <div class="stat-label">Average progress %</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ collect($skills)->where('level', '>=', 80)->count() }}">0</div>
            <div class="stat-label">Skills at 80% or higher</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ count(config('portfolio.learning_goals')) }}">0</div>
            <div class="stat-label">Learning goals next</div>
        </div>
    </div>

    {{-- Skills grid --}}
    <section class="card s8 reveal">
        <div class="section-hint"><span class="dot"></span><p>Tech stack</p></div>
        <h2>Skills dashboard</h2>
        <p class="muted" style="font-size:13.5px">Self-assessed proficiency built from coursework and this portfolio project — each card fills as the page opens.</p>
        <div class="grid-cards" style="margin-top:16px">
            @foreach($skills as $skill)
                <article class="card hover skill-card reveal">
                    <span class="sc-icon"><x-icon name="code" width="20" height="20"/></span>
                    <div class="skill-top"><b>{{ $skill['name'] }}</b><span>{{ $skill['level'] }}%</span></div>
                    <div class="skill-bar"><div class="skill-fill" data-level="{{ $skill['level'] }}"></div></div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- Certifications --}}
    <aside class="s4">
        <section class="card reveal" style="margin-bottom:18px;background:linear-gradient(140deg, rgba(168,85,247,0.14), rgba(99,102,241,0.1)), var(--panel)">
            <div class="section-hint"><span class="dot"></span><p>Next milestone</p></div>
            <h2>Certifications dashboard</h2>
            <p class="muted" style="font-size:13.5px">Certificates, seminars and workshops have their own dedicated dashboard with achievement cards and planned credentials.</p>
            <a class="btn btn-sm" style="margin-top:14px" href="{{ route('certifications') }}">🏆 Open certifications →</a>
        </section>

        <section class="card reveal" style="background:linear-gradient(140deg, rgba(34,211,238,0.14), rgba(99,102,241,0.1)), var(--panel)">
            <div class="section-hint"><span class="dot"></span><p>Next up</p></div>
            <h2>Learning goals</h2>
            <div class="idea-chips" style="margin-top:10px">
                @foreach(config('portfolio.learning_goals') as $goal)
                    <span class="chip">{{ $goal }}</span>
                @endforeach
            </div>
            <a class="btn btn-ghost btn-sm" style="margin-top:16px" href="{{ route('education') }}">School timeline →</a>
        </section>
    </aside>
</div>
@endsection
