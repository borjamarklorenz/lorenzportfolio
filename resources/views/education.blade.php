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
        <p class="muted" style="font-size:13.5px">Certifications, seminars and workshops now live in their own dashboard so they always stay up to date.</p>
        <a class="btn btn-sm" style="margin-top:12px" href="{{ route('skills') }}">Open Skills & Certifications dashboard →</a>
    </section>

    <aside class="s4">
        <section class="card reveal" style="margin-bottom:18px">
            <div class="section-hint"><span class="dot"></span><p>At a glance</p></div>
            <h2>Study highlights</h2>
            <div class="info-list" style="margin-top:10px">
                <b>College</b><span>Data Center College of Bangued</span>
                <b>Course</b><span>BSIT — Information Technology</span>
                <b>High school</b><span>Abra High School (2021)</span>
                <b>Elementary</b><span>Bangued East Central School (2017)</span>
            </div>
            <a class="btn btn-ghost btn-sm" style="margin-top:14px" href="{{ route('skills') }}">See skill levels →</a>
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
