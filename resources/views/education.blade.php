@extends('layouts.main')
@section('title', 'Educational Background')
@section('heading', 'Educational Background')
@section('content')
<div class="grid">
  <section class="card" style="grid-column:span 8">
    <h3>School history</h3>
    <div class="timeline" style="margin-top:14px">
      <div class="timeline-item">
        <span class="badge">Current</span>
        <h3>Data Center College of Bangued – Philippines</h3>
        <p class="muted" style="margin:4px 0">Bachelor of Science in Information Technology (BSIT)</p>
        <p class="small muted">Course focused on systems, programming, and web development. This portfolio was created for IPA BSIT 4 Midterm — Laravel Blade portfolio, Git/GitHub workflow, and AI prompt documentation.</p>
      </div>
      <div class="timeline-item">
        <span class="badge" style="background:#f0fdf4;color:#15803d;border-color:#bbf7d0">Earlier</span>
        <h3>Earlier schooling</h3>
        <p class="muted" style="margin:4px 0">To be updated</p>
        <p class="small muted">Add elementary / high school years and certifications here as you gather them. Format: school name, years attended, degree/certification.</p>
      </div>
    </div>
  </section>
  <aside class="card side" style="grid-column:span 4">
    <h3>Certifications & skills</h3>
    <p class="muted">Laravel • PHP • Blade templating • HTML/CSS • Git & GitHub</p>
    <div class="badges">
      <span class="badge">PHP</span><span class="badge">Laravel 12</span><span class="badge">Blade</span><span class="badge">Git</span>
    </div>
    <p class="small muted" style="margin-top:12px">Add certifications (school, year, title) in this card.</p>
  </aside>
</div>
@endsection
