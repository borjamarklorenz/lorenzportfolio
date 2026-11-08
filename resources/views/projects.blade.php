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
            <article class="card hover {{ empty($project['images']) ? 'project-card' : 'project-wide' }}" style="margin-top:16px">
                <div class="pw-media">
                    @if(!empty($project['images']))
                        <div class="gallery">
                            <div class="g-main">
                                <img src="{{ asset($project['images'][0]['src']) }}" alt="{{ $project['images'][0]['alt'] }}">
                            </div>
                            <div class="g-thumbs">
                                @foreach($project['images'] as $i => $img)
                                    <button type="button" class="{{ $i === 0 ? 'active' : '' }}" data-src="{{ asset($img['src']) }}" data-alt="{{ $img['alt'] }}" title="{{ $img['alt'] }}">
                                        <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" loading="lazy">
                                    </button>
                                @endforeach
                            </div>
                            <p class="g-caption muted">Click a thumbnail below the preview to switch screenshots.</p>
                        </div>
                    @endif
                </div>
                <div class="pw-info">
                    <div class="section-hint" style="margin-bottom:8px"><span class="dot"></span><p>Featured system</p></div>
                    <h3>{{ $project['title'] }} @if(!empty($project['short']))<span class="muted" style="font-weight:500">— {{ $project['short'] }}</span>@endif</h3>
                    <p class="muted" style="font-size:13.5px;margin-top:8px">{{ $project['description'] }}</p>
                    @if(!empty($project['features']))
                        <div class="feats">
                            @foreach($project['features'] as $feature)
                                <span class="feat"><x-icon name="external" width="14" height="14"/>{{ $feature }}</span>
                            @endforeach
                        </div>
                    @endif
                    <div class="tags" style="margin-top:12px">
                        @foreach($project['tags'] as $tag)<span class="chip">{{ $tag }}</span>@endforeach
                    </div>
                    @if(!empty($project['repo']))
                        <a class="btn btn-sm btn-ghost" style="margin-top:14px;align-self:flex-start" href="{{ $project['repo'] }}" target="_blank" rel="noopener">Repository ↗</a>
                    @endif
                </div>
            </article>
        @empty
            <div class="empty-state" style="margin-top:16px">
                <div class="empty-icon"><x-icon name="briefcase"/></div>
                <h3>No projects yet — grid is ready</h3>
                <p class="muted">Add entries to <code>config/portfolio.php</code> and push a descriptive commit — cards render automatically.</p>
            </div>
        @endforelse
    </section>

    <section class="card s12 reveal">
        <div class="section-hint"><span class="dot"></span><p>On the roadmap</p></div>
        <h3>Planned project ideas</h3>
        <p class="muted" style="font-size:13.5px;margin-bottom:12px">Ideas waiting to be built — they will move to the grid above as they are completed.</p>
        <div class="idea-chips">
            @foreach(config('portfolio.project_ideas') as $idea)
                <span class="chip">{{ $idea }}</span>
            @endforeach
        </div>
    </section>
</div>
@endsection
