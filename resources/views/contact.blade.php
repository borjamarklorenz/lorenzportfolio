@extends('layouts.main')
@section('title', 'Contact & GitHub')
@section('heading', 'Contact & GitHub Links')
@section('content')
<div class="grid">
  <section class="card" style="grid-column:span 7">
    <h2>Contact details</h2>
    <div class="kv" style="margin-top:14px">
      <b>Name</b><span>Mark Lorenz B. Borja</span>
      <b>Email</b><span><a href="mailto:borjamarklorenz07@gmail.com" style="color:var(--brand);font-weight:700">borjamarklorenz07@gmail.com</a></span>
      <b>Phone</b><span>09629974405</span>
      <b>Mobile</b><span><a href="tel:+639629974405" style="color:var(--brand);font-weight:700">+63 962 997 4405</a></span>
      <b>Location</b><span>Baddec, Palao, Bangued, Abra, Philippines</span>
      <b>School</b><span>Data Center College of Bangued</span>
    </div>
    <div style="display:flex;gap:10px;margin-top:16px;flex-wrap:wrap">
      <a class="btn" href="mailto:borjamarklorenz07@gmail.com">Send email</a>
      <a class="btn ghost" href="tel:+639629974405">Call me</a>
    </div>
  </section>
  <section class="card" style="grid-column:span 5">
    <h3>GitHub repository links</h3>
    <p class="muted">Clickable links / icons to source code — required section.</p>
    <div style="display:flex;flex-direction:column;gap:12px;margin-top:12px">
      <a class="btn" href="https://github.com/borjamarklorenz" target="_blank" style="justify-content:center">🐙 GitHub profile ↗</a>
      <a class="btn ghost" href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank" style="justify-content:center">📁 Lorenz Portfolio (this project) ↗</a>
      <p class="small muted">Repo: <code>https://github.com/borjamarklorenz/lorenzportfolio.git</code></p>
    </div>
  </section>
</div>
@endsection
