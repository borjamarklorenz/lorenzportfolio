<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Mark Lorenz B. Borja - Portfolio') | Lorenz Portfolio</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="app">
  <aside class="sidebar">
    <div class="brand">
      <div class="logo">MLB</div>
      <div>
        <strong>Mark Lorenz B. Borja</strong>
        <small>BSIT Student • Bangued, Abra</small>
      </div>
    </div>
    <nav class="nav">
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">👤 Basic Info</a>
      <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">🎓 Education</a>
      <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">💼 Projects</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">✉️ Contact</a>
      <a href="https://github.com/borjamarklorenz" target="_blank" rel="noopener">🐙 GitHub Profile ↗</a>
      <a href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank" rel="noopener">📁 This Repo ↗</a>
    </nav>
    <div class="profile-mini">
      <div style="display:flex;gap:12px;align-items:center">
        <img src="{{ asset('images/profile.svg') }}" alt="Mark Lorenz B. Borja profile picture" onerror="this.src='https://ui-avatars.com/api/?name=Mark+Lorenz+B+Borja&background=2563eb&color=fff&size=128'">
        <div>
          <strong style="font-size:14px">Mark Lorenz B. Borja</strong>
          <div class="small" style="color:#94a3b8">Baddec, Palao<br>Bangued, Abra</div>
        </div>
      </div>
      <a class="btn ghost" style="width:100%;justify-content:center;margin-top:12px;background:#fff" href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank" rel="noopener">View source code →</a>
    </div>
  </aside>

  <main class="main">
    <div class="topbar">
      <div>
        <p class="muted small" style="margin:0 0 4px">Lorenz Portfolio • Laravel Blade • No database</p>
        <h1>@yield('heading', 'Dashboard')</h1>
      </div>
      <div style="display:flex;gap:10px">
        <a class="btn ghost" href="mailto:borjamarklorenz07@gmail.com">✉️ Email me</a>
        <a class="btn" href="{{ route('projects') }}">View projects</a>
      </div>
    </div>
    @yield('content')
    <footer>Lorenz Portfolio — Mark Lorenz B. Borja • Data Center College of Bangued • Built with Laravel Blade • <a href="https://github.com/borjamarklorenz/lorenzportfolio" target="_blank">github.com/borjamarklorenz/lorenzportfolio</a></footer>
  </main>
</div>
</body>
</html>
