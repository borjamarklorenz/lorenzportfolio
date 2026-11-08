@extends('layouts.main')
@section('title', 'Basic Information')
@section('heading', 'Basic Information')
@section('content')
<div class="grid">
  <section class="card" style="grid-column:span 4">
    <img src="{{ asset('images/profile.svg') }}" alt="Mark Lorenz B. Borja profile picture" style="width:100%;height:280px;object-fit:cover;border-radius:18px;background:#e2e8f0" onerror="this.src='https://ui-avatars.com/api/?name=Mark+Lorenz+B+Borja&background=2563eb&color=fff&size=512'">
    <h2 style="margin-top:14px">Mark Lorenz B. Borja</h2>
    <p class="muted">BSIT Student • Data Center College of Bangued</p>
    <div class="badges">
      <span class="badge">Laravel</span><span class="badge">Blade</span><span class="badge">Git</span><span class="badge">GitHub</span>
    </div>
  </section>
  <section class="card" style="grid-column:span 8">
    <h3>About / Short Bio</h3>
    <p style="line-height:1.8;color:#334155">Hello! I am <strong>Mark Lorenz B. Borja</strong>, a Bachelor of Science in Information Technology student at Data Center College of Bangued, Philippines, residing in Baddec, Palao, Bangued, Abra. I build static web portfolios with Laravel Blade and track my work with Git and GitHub. This portfolio collects my basic information, educational background, projects, and public repository links in one dashboard-style site.</p>
    <div class="kv" style="margin-top:18px">
      <b>Full name</b><span>Mark Lorenz B. Borja</span>
      <b>Email</b><span><a href="mailto:borjamarklorenz07@gmail.com" style="color:var(--brand);font-weight:700">borjamarklorenz07@gmail.com</a></span>
      <b>Phone</b><span>09629974405</span>
      <b>Location</b><span>Baddec, Palao, Bangued, Abra, Philippines</span>
      <b>School</b><span>Data Center College of Bangued – Philippines</span>
      <b>Course</b><span>Bachelor of Science in Information Technology (BSIT)</span>
      <b>GitHub</b><span><a href="https://github.com/borjamarklorenz" target="_blank" style="color:var(--brand);font-weight:700">github.com/borjamarklorenz ↗</a></span>
      <b>This repo</b><span><a href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank" style="color:var(--brand);font-weight:700">github.com/borjamarklorenz/lorenzportfolio ↗</a></span>
    </div>
    <p class="muted small" style="margin-top:16px">📸 To use a real photo, replace <code>public/images/profile.svg</code> with your photo as <code>public/images/profile.jpg</code> and update the <code>&lt;img&gt;</code> src in the Blade files — the layout already uses <code>asset('images/profile.svg')</code> as a placeholder.</p>
  </section>
</div>
@endsection
