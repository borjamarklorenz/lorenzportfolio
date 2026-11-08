@extends('layouts.app')
@section('title', 'Welcome')
@section('heading', 'Welcome')

@section('content')
@php $github = config('portfolio.github'); @endphp
<section class="card s12 reveal">
    <div class="empty-state">
        <div class="empty-icon"><x-icon name="home"/></div>
        <h3>This starter page is replaced by the dashboard</h3>
        <p class="muted">Head over to <a href="{{ route('dashboard') }}" style="color:var(--accent-2);font-weight:700">the dashboard →</a> to see the real portfolio.</p>
        <div class="cta-row">
            <a class="btn" href="{{ route('dashboard') }}">Go to dashboard</a>
            <a class="btn btn-ghost" href="{{ $github['repo'] }}" target="_blank" rel="noopener">Source code ↗</a>
        </div>
    </div>
</section>
@endsection
