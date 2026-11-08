@php
    $student = config('portfolio.student');
    $github = config('portfolio.github');
@endphp
<aside class="sidebar" id="sidebar">
    <a class="brand" href="{{ route('dashboard') }}">
        <span class="logo">{{ $student['initials'] }}</span>
        <span class="brand-text">
            <strong>{{ $student['name'] }}</strong>
            <small>BSIT • Bangued, Abra</small>
        </span>
    </a>

    <nav class="nav">
        <span class="nav-label">Menu</span>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <x-icon name="home"/><span>Dashboard</span>
        </a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
            <x-icon name="user"/><span>Basic Info</span>
        </a>
        <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">
            <x-icon name="cap"/><span>Education</span>
        </a>
        <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">
            <x-icon name="zap"/><span>Skills</span>
        </a>
        <a href="{{ route('certifications') }}" class="{{ request()->routeIs('certifications') ? 'active' : '' }}">
            <x-icon name="award"/><span>Certifications</span>
        </a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">
            <x-icon name="briefcase"/><span>Projects</span>
        </a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <x-icon name="mail"/><span>Contact</span>
        </a>
        <span class="nav-label">Elsewhere</span>
        <a href="{{ $github['profile'] }}" target="_blank" rel="noopener">
            <x-icon name="github"/><span>GitHub profile <em>↗</em></span>
        </a>
        <a href="{{ $github['repo'] }}" target="_blank" rel="noopener">
            <x-icon name="external"/><span>This repository <em>↗</em></span>
        </a>
    </nav>

    <div class="profile-card">
        <img src="{{ asset('images/profile.jpg') }}" alt="{{ $student['name'] }}" width="52" height="52">
        <div>
            <strong>{{ $student['name'] }}</strong>
            <small>Baddec, Palao<br>Bangued, Abra</small>
        </div>
        <a class="btn btn-sm btn-ghost" href="{{ $github['repo'] }}" target="_blank" rel="noopener">View source ↗</a>
    </div>
</aside>
<div class="backdrop" id="backdrop"></div>
