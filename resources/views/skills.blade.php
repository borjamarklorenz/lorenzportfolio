@extends('layouts.app')
@section('title', 'Skills & Certifications')
@section('heading', 'Skills & Certifications')
@section('description', 'A dashboard of my tech stack, learning progress and certifications.')

@section('content')
@php
    $skills = config('portfolio.skills');
    $certs = config('portfolio.certifications');
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
            <div class="stat-num" data-target="{{ count($certs) }}">0</div>
            <div class="stat-label">Certifications earned</div>
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
        <section class="card reveal" style="margin-bottom:18px">
            <div class="section-hint"><span class="dot"></span><p>Certifications</p></div>
            <h2>Credentials</h2>
            @forelse($certs as $cert)
                <article class="card hover cert-item" style="padding:14px;margin-top:12px">
                    <div class="t-head">
                        <span class="cc-icon" style="width:38px;height:38px;border-radius:11px"><x-icon name="award" width="18" height="18"/></span>
                        <div>
                            <strong style="font-size:14px">{{ $cert['name'] }}</strong>
                            <span class="t-period">{{ $cert['year'] }}</span>
                        </div>
                    </div>
                    <p class="muted" style="font-size:12.5px;margin-top:6px">{{ $cert['issuer'] }} — {{ $cert['details'] }}</p>
                </article>
            @empty
                <div class="empty-state" style="padding:24px 16px;margin-top:12px">
                    <div class="empty-icon"><x-icon name="award"/></div>
                    <h3 style="font-size:15px">No certifications yet</h3>
                    <p class="muted">Add entries to <code>certifications</code> in <code>config/portfolio.php</code> and push a descriptive commit — cards appear automatically.</p>
                </div>
            @endforelse
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
