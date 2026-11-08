@extends('layouts.app')
@section('title', 'Educational Background')
@section('heading', 'Educational Background')
@section('description', 'Schools attended, degrees, certifications and learning progress.')

@section('content')
<div class="grid">
    <section class="card s8 reveal">
        <div class="section-hint"><span class="dot"></span><p>School history</p></div>
        <h2>Academic timeline</h2>
        <div class="timeline" style="margin-top:16px">
            @foreach(config('portfolio.education') as $edu)
                <div class="timeline-item card hover">
                    <div class="t-head">
                        <span class="t-status {{ strtolower($edu['status']) }}">{{ $edu['status'] }}</span>
                        <span class="t-period">{{ $edu['period'] }}</span>
                    </div>
                    <h3>{{ $edu['school'] }}</h3>
                    <p class="muted" style="margin:3px 0 6px;font-size:13.5px">{{ $edu['degree'] }}</p>
                    <p style="font-size:13.5px">{{ $edu['details'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="divide"></div>
        <div class="section-hint"><span class="dot"></span><p>Certifications</p></div>
        <div class="empty-state" style="padding:22px 18px">
            <div class="empty-icon"><x-icon name="cap"/></div>
            <h3 style="font-size:15px">No certifications listed yet</h3>
            <p class="muted">Add seminars, workshops and certificates here as they are earned.</p>
        </div>
    </section>

    <aside class="s4">
        <section class="card reveal" style="margin-bottom:18px">
            <div class="section-hint"><span class="dot"></span><p>Skills</p></div>
            <h2>Learning progress</h2>
            @foreach(config('portfolio.skills') as $skill)
                <div class="skill">
                    <div class="skill-top"><b>{{ $skill['name'] }}</b><span>{{ $skill['level'] }}%</span></div>
                    <div class="skill-bar"><div class="skill-fill" data-level="{{ $skill['level'] }}"></div></div>
                </div>
            @endforeach
        </section>
        <section class="card reveal">
            <div class="section-hint"><span class="dot"></span><p>Currently</p></div>
            <h2>BSIT student</h2>
            <p class="muted" style="font-size:13.5px">Building Laravel Blade applications and version-controlling every step with Git & GitHub as part of the IPA BSIT 4 Midterm.</p>
            <a class="btn btn-sm" style="margin-top:14px" href="{{ route('projects') }}">See projects →</a>
        </section>
    </aside>
</div>
@endsection
