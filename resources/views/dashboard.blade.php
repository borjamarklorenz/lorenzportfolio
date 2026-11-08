@extends('layouts.main')
@section('title', 'Dashboard')
@section('heading', 'Welcome back, Mark Lorenz 👋')
@section('content')
<div class="grid">
  <section class="card hero">
    <div class="hero-flex">
      <img src="{{ asset('images/profile.svg') }}" alt="Profile picture of Mark Lorenz B. Borja" onerror="this.src='https://ui-avatars.com/api/?name=Mark+Lorenz+B+Borja&background=2563eb&color=fff&size=256'">
      <div>
        <p class="badge">BSIT Student • Data Center College of Bangued</p>
        <h2 style="font-size:28px;margin:10px 0 6px">Mark Lorenz B. Borja</h2>
        <p class="muted" style="line-height:1.7;margin:0">Information Technology student from Baddec, Palao, Bangued, Abra. This static portfolio is built with Laravel Blade — no database, no migrations — and hosted from a public GitHub repository. Explore my education and projects below, or view the source code directly.</p>
        <div class="badges">
          <span class="badge">📧 borjamarklorenz07@gmail.com</span>
          <span class="badge">📱 09629974405</span>
          <span class="badge">📍 Bangued, Abra, Philippines</span>
        </div>
        <div style="display:flex;gap:10px;margin-top:16px;flex-wrap:wrap">
          <a class="btn" href="{{ route('about') }}">View basic info →</a>
          <a class="btn ghost" href="https://github.com/borjamarklorenz" target="_blank">🐙 GitHub ↗</a>
          <a class="btn ghost" href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank">📁 Source repo ↗</a>
        </div>
      </div>
    </div>
  </section>

  <aside class="card side">
    <h3>Quick overview</h3>
    <div class="kv" style="grid-template-columns:110px 1fr;font-size:14px">
      <b>Name</b><span>Mark Lorenz B. Borja</span>
      <b>Course</b><span>BSIT</span>
      <b>School</b><span>Data Center College of Bangued</span>
      <b>Location</b><span>Baddec, Palao, Bangued, Abra</span>
      <b>Focus</b><span>Laravel • Blade • Git/GitHub</span>
    </div>
    <a href="{{ route('education') }}" style="display:inline-block;margin-top:14px;color:var(--brand);font-weight:800">See education →</a>
  </aside>

  <div class="stats">
    <div class="stat"><span class="muted small">Projects published</span><div class="num">0</div><span class="small muted">Empty for now — section ready to fill</span></div>
    <div class="stat"><span class="muted small">GitHub repos linked</span><div class="num">1</div><span class="small muted"><a href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank" style="color:var(--brand);font-weight:800">lorenzportfolio ↗</a></span></div>
    <div class="stat"><span class="muted small">Stack</span><div class="num">Laravel 12</div><span class="small muted">Blade • CSS • No database</span></div>
  </div>

  <section class="card" style="grid-column:span 7">
    <h3>Education preview</h3>
    <p class="muted">Data Center College of Bangued – Philippines<br><strong>Bachelor of Science in Information Technology (BSIT)</strong></p>
    <a class="btn ghost" href="{{ route('education') }}">Full education history →</a>
  </section>
  <section class="card" style="grid-column:span 5">
    <h3>Projects preview</h3>
    <div class="empty" style="padding:18px">
      <strong>No projects yet.</strong>
      <p class="muted small" style="margin:6px 0 0">Project cards will appear here once added. The grid layout is ready.</p>
    </div>
    <a class="btn ghost" style="margin-top:12px" href="{{ route('projects') }}">Open projects page →</a>
  </section>
</div>
@endsection
