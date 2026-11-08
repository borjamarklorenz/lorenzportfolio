@extends('layouts.main')
@section('title', 'Projects')
@section('heading', 'Projects')
@section('content')
@php
    // Empty for now per owner's request. Add project arrays here when ready.
    $projects = [];
@endphp
<div class="grid">
  <section class="card" style="grid-column:span 12">
    <div style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;align-items:center">
      <div>
        <h2 style="margin:0">My work</h2>
        <p class="muted" style="margin:6px 0 0">A grid of projects with descriptions and repository links. Currently empty — cards below will populate automatically.</p>
      </div>
      <a class="btn ghost" href="https://github.com/borjamarklorenz" target="_blank">🐙 View all on GitHub ↗</a>
    </div>
  </section>

  @forelse($projects as $project)
    <article class="proj" style="grid-column:span 4">
      <h3>{{ $project['title'] }}</h3>
      <p class="muted">{{ $project['description'] }}</p>
      <p>
        @foreach($project['tags'] as $tag)
          <span class="badge">{{ $tag }}</span>
        @endforeach
      </p>
      @if(!empty($project['repo']))
        <a class="btn" href="{{ $project['repo'] }}" target="_blank">View repository ↗</a>
      @endif
    </article>
  @empty
    <section class="card" style="grid-column:span 12">
      <div class="empty">
        <div style="font-size:42px">📂</div>
        <h3 style="margin:8px 0 4px">No projects yet</h3>
        <p class="muted" style="margin:0 auto;max-width:520px">This section is intentionally empty for now. When you add projects, push a new commit — e.g. <code>git commit -m "Add first project card to projects grid"</code> — and list each project with a title, description, and clickable GitHub link.</p>
        <div style="display:flex;gap:10px;justify-content:center;margin-top:14px;flex-wrap:wrap">
          <a class="btn" href="https://github.com/borjamarklorenz" target="_blank">Browse GitHub ↗</a>
          <a class="btn ghost" href="{{ route('dashboard') }}">Back to dashboard</a>
        </div>
      </div>
    </section>
  @endforelse
</div>
@endsection
