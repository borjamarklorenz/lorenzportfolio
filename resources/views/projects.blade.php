@extends('layouts.app')
@section('title', 'Projects')
@section('heading', 'Projects')
@section('description', 'A grid list of projects with descriptions — currently empty by design, ready to fill.')

@section('content')
@php $projects = config('portfolio.projects'); @endphp
<div class="grid">
    <section class="card s12 reveal">
        <div class="section-hint"><span class="dot"></span><p>Portfolio work</p></div>
        <div style="display:flex;justify-content:space-between;gap:14px;flex-wrap:wrap;align-items:center">
            <h2>My projects</h2>
            <a class="btn btn-ghost btn-sm" href="{{ config('portfolio.github.profile') }}?tab=repositories" target="_blank" rel="noopener">
                <x-icon name="github" width="17" height="17"/> Browse on GitHub ↗
            </a>
        </div>

        @forelse($projects as $project)
            <div class="grid-cards" style="margin-top:16px">
                <article class="card hover project-card">
                    <h3>{{ $project['title'] }}</h3>
                    <p class="muted" style="font-size:13.5px">{{ $project['description'] }}</p>
                    <div class="tags">
                        @foreach($project['tags'] as $tag)<span class="chip">{{ $tag }}</span>@endforeach
                    </div>
                    @if(!empty($project['repo']))
                        <a class="btn btn-sm btn-ghost" style="align-self:flex-start;margin-top:6px" href="{{ $project['repo'] }}" target="_blank" rel="noopener">Repository ↗</a>
                    @endif
                </article>
            </div>
        @empty
            <div class="empty-state" style="margin-top:16px">
                <div class="empty-icon"><x-icon name="briefcase"/></div>
                <h3>No projects yet — grid is ready</h3>
                <p class="muted">This section intentionally stays empty for now. Add entries to <code>config/portfolio.php</code> and push a descriptive commit such as <em>“Add first project card to the projects grid”</em> — cards render automatically.</p>
                <div class="cta-row">
                    <a class="btn" href="{{ route('contact') }}">Collaborate with me</a>
                    <a class="btn btn-ghost" href="{{ route('dashboard') }}">Back to dashboard</a>
                </div>
            </div>
        @endforelse
    </section>

    <section class="card s6 reveal">
        <div class="section-hint"><span class="dot"></span><p>On the roadmap</p></div>
        <h3>Planned project ideas</h3>
        <p class="muted" style="font-size:13.5px;margin-bottom:12px">Ideas waiting to be built — they will move to the grid above as they are completed.</p>
        <div class="idea-chips">
            @foreach(config('portfolio.project_ideas') as $idea)
                <span class="chip">{{ $idea }}</span>
            @endforeach
        </div>
    </section>

    <section class="card s6 reveal" style="background:linear-gradient(140deg, rgba(168,85,247,0.14), rgba(99,102,241,0.1)), var(--panel)">
        <div class="section-hint"><span class="dot"></span><p>Workflow</p></div>
        <h3>How projects get here</h3>
        <div class="info-list" style="margin-top:10px">
            <b>Step 1</b><span>Build the app with Laravel / Blade</span>
            <b>Step 2</b><span>Push to a public GitHub repository</span>
            <b>Step 3</b><span>Add a card to <code>config/portfolio.php</code></span>
            <b>Step 4</b><span>Commit: “Add &lt;project&gt; card to the projects grid”</span>
        </div>
    </section>
</div>
@endsection
