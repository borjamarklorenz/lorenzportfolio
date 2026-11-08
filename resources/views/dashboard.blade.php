@extends('layouts.app')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('description', 'Welcome to my portfolio — explore my info, education, projects and GitHub links.')

@section('content')
@php
    $student = config('portfolio.student');
    $contact = config('portfolio.contact');
    $github = config('portfolio.github');
    $stats = config('portfolio.stats');
    $skills = config('portfolio.skills');
@endphp

<div class="grid">
    {{-- Hero --}}
    <section class="card hero s12 reveal">
        <div class="avatar-ring">
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile picture of {{ $student['name'] }}">
        </div>
        <div style="flex:1; min-width:260px">
            <p class="greet">👋 Hello, welcome to my portfolio</p>
            <h2 class="hero-name">I’m <span class="gradient-text">{{ $student['name'] }}</span></h2>
            <p class="typed-line"><span id="typed"></span></p>
            <p class="intro muted">{{ $student['bio'][0] }} {{ $student['bio'][1] }}</p>
            <div class="badges" style="margin-top:14px">
                <span class="badge"><x-icon name="mail"/>{{ $contact['email'] }}</span>
                <span class="badge"><x-icon name="phone"/>{{ $contact['phone'] }}</span>
                <span class="badge"><x-icon name="pin"/>Bangued, Abra</span>
            </div>
            <div class="cta-row">
                <a class="btn" href="{{ route('about') }}">View basic info</a>
                <a class="btn btn-ghost" href="{{ $github['repo'] }}" target="_blank" rel="noopener">
                    <x-icon name="github" width="17" height="17"/> Source code ↗
                </a>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <div class="stats s12">
        @foreach($stats as $stat)
            <div class="card stat-card reveal">
                <div class="stat-num" data-target="{{ $stat['value'] }}">0</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Skills --}}
    <section class="card s7 reveal">
        <div class="section-hint"><span class="dot"></span><p>Learning progress</p></div>
        <h2>Skills & hands-on focus</h2>
        <p class="muted" style="font-size:13.5px">Self-assessed proficiency built from coursework and this portfolio project.</p>
        @foreach($skills as $skill)
            <div class="skill">
                <div class="skill-top"><b>{{ $skill['name'] }}</b><span>{{ $skill['level'] }}%</span></div>
                <div class="skill-bar"><div class="skill-fill" data-level="{{ $skill['level'] }}"></div></div>
            </div>
        @endforeach
    </section>

    {{-- Education preview --}}
    <section class="card s5 reveal">
        <div class="section-hint"><span class="dot"></span><p>Education</p></div>
        <h2>Data Center College of Bangued</h2>
        <p class="muted" style="font-size:14px">Bachelor of Science in Information Technology (BSIT) — currently taking up, focused on web development and systems.</p>
        <div class="divide"></div>
        <div class="badges chips">
            @foreach($student['interests'] as $interest)
                <span class="badge">{{ $interest }}</span>
            @endforeach
        </div>
        <a class="btn btn-ghost btn-sm" style="margin-top:18px" href="{{ route('education') }}">Full education history →</a>
    </section>

    {{-- Projects preview --}}
    <section class="card s7 reveal">
        <div class="section-hint"><span class="dot"></span><p>Projects</p></div>
        @if(empty(config('portfolio.projects')))
            <div class="empty-state" style="padding:26px 20px">
                <div class="empty-icon"><x-icon name="briefcase"/></div>
                <h3>No projects published yet</h3>
                <p class="muted">The project grid is set up and ready — cards will appear here automatically once added to <code>config/portfolio.php</code>.</p>
            </div>
        @else
            <div class="grid-cards" style="margin-top:16px">
                @foreach(config('portfolio.projects') as $project)
                    <article class="card hover project-card">
                        @if(!empty($project['images']))
                            <a class="pc-banner" href="{{ route('projects') }}" title="Open the project gallery">
                                <img src="{{ asset($project['images'][0]['src']) }}" alt="{{ $project['images'][0]['alt'] }}" loading="lazy">
                            </a>
                        @endif
                        <h3>{{ $project['title'] }}</h3>
                        @if(!empty($project['short']))<p class="muted" style="font-size:12.5px;margin-top:-2px">{{ $project['short'] }}</p>@endif
                        <p class="muted" style="font-size:13.5px">{{ $project['description'] }}</p>
                        <div class="tags">
                            @foreach($project['tags'] as $tag)<span class="chip">{{ $tag }}</span>@endforeach
                        </div>
                        <a class="btn btn-sm btn-ghost" style="align-self:flex-start;margin-top:6px" href="{{ route('projects') }}">View gallery →</a>
                    </article>
                @endforeach
            </div>
        @endif
        <a class="btn btn-ghost btn-sm" style="margin-top:18px" href="{{ route('projects') }}">Open projects page →</a>
    </section>

    {{-- Explore / GitHub --}}
    <section class="card s5 reveal" style="background:linear-gradient(140deg, rgba(99,102,241,0.16), rgba(34,211,238,0.1)), var(--panel)">
        <div class="section-hint"><span class="dot"></span><p>Explore</p></div>
        <h2>Find your way around</h2>
        <div class="info-list" style="margin-top:12px">
            <b>Basic info</b><span><a href="{{ route('about') }}">/about — bio, contacts & photo</a></span>
            <b>Education</b><span><a href="{{ route('education') }}">/education — school & skills</a></span>
            <b>Skills</b><span><a href="{{ route('skills') }}">/skills — progress dashboard</a></span>
            <b>Certifications</b><span><a href="{{ route('certifications') }}">/certifications — awards & plans</a></span>
            <b>Projects</b><span><a href="{{ route('projects') }}">/projects — empty grid, ready</a></span>
            <b>Contact</b><span><a href="{{ route('contact') }}">/contact — email, phone & GitHub</a></span>
        </div>
        <div class="cta-row">
            <a class="btn" href="{{ route('contact') }}">Get in touch</a>
            <a class="btn btn-ghost" href="{{ $github['profile'] }}" target="_blank" rel="noopener">
                <x-icon name="github" width="17" height="17"/> My GitHub
            </a>
        </div>
    </section>
</div>
@endsection
