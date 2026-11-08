@extends('layouts.app')
@section('title', 'Certifications')
@section('heading', 'Certifications')
@section('description', 'A dedicated dashboard of my certifications, seminars and workshops — ready to grow.')

@section('content')
@php
    $certs = config('portfolio.certifications');
    $countType = function ($type) use ($certs) {
        return count(array_filter($certs, fn ($c) => ($c['type'] ?? 'Certification') === $type));
    };
@endphp
<div class="grid">
    {{-- Stats --}}
    <div class="stats s12">
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ $countType('Certification') }}">0</div>
            <div class="stat-label">Certifications earned</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ $countType('Seminar') }}">0</div>
            <div class="stat-label">Seminars attended</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ $countType('Workshop') }}">0</div>
            <div class="stat-label">Workshops completed</div>
        </div>
        <div class="card stat-card reveal">
            <div class="stat-num" data-target="{{ count(config('portfolio.cert_ideas')) }}">0</div>
            <div class="stat-label">Planned to take</div>
        </div>
    </div>

    {{-- Certification cards --}}
    <section class="card s8 reveal">
        <div class="section-hint"><span class="dot"></span><p>Achievements</p></div>
        <div style="display:flex;justify-content:space-between;gap:14px;flex-wrap:wrap;align-items:center">
            <h2>My certifications</h2>
            <a class="btn btn-ghost btn-sm" href="{{ route('skills') }}">⚡ See skill levels →</a>
        </div>

        @forelse($certs as $cert)
            <article class="card hover cert-item" style="margin-top:14px">
                <span class="cc-icon"><x-icon name="award" width="20" height="20"/></span>
                <div class="t-head" style="margin-top:10px">
                    <h3 style="font-size:16px">{{ $cert['name'] }}</h3>
                    <span class="chip">{{ $cert['type'] ?? 'Certification' }}</span>
                    <span class="t-period">{{ $cert['year'] }}</span>
                </div>
                <p class="muted" style="font-size:13.5px;margin-top:4px"><strong style="color:var(--text)">{{ $cert['issuer'] }}</strong> — {{ $cert['details'] }}</p>
            </article>
        @empty
            <div class="empty-state" style="margin-top:14px">
                <div class="empty-icon"><x-icon name="award"/></div>
                <h3>No certifications yet — dashboard is ready</h3>
                <p class="muted">Entries in <code>config/portfolio.php</code> under <code>certifications</code> (with <code>name, type, issuer, year, details</code>) render here automatically. Push a descriptive commit such as <em>“Add first seminar certificate to the certifications dashboard.”</em></p>
            </div>
        @endforelse
    </section>

    {{-- Aside --}}
    <aside class="s4">
        <section class="card reveal" style="margin-bottom:18px">
            <div class="section-hint"><span class="dot"></span><p>Future</p></div>
            <h2>Planned certifications</h2>
            <p class="muted" style="font-size:13px;margin-bottom:12px">Industry credentials on my roadmap — plans, not achievements yet.</p>
            <div class="idea-chips">
                @foreach(config('portfolio.cert_ideas') as $idea)
                    <span class="chip">{{ $idea }}</span>
                @endforeach
            </div>
        </section>
        <section class="card reveal">
            <div class="section-hint"><span class="dot"></span><p>Related</p></div>
            <h2>Skill levels behind the goal</h2>
            <p class="muted" style="font-size:13.5px">Every certification starts from practice. My current study stack and progress live on the skills dashboard.</p>
            <div class="cta-row">
                <a class="btn btn-sm btn-ghost" href="{{ route('skills') }}">⚡ Skills dashboard →</a>
                <a class="btn btn-sm btn-ghost" href="{{ route('education') }}">🎓 Education →</a>
            </div>
        </section>
    </aside>
</div>
@endsection
