@extends('layouts.app')
@section('title', 'Basic Information')
@section('heading', 'Basic Information')
@section('description', 'Name, profile picture, contact details and short bio.')

@section('content')
@php
    $student = config('portfolio.student');
    $contact = config('portfolio.contact');
    $github = config('portfolio.github');
@endphp
<div class="grid">
    <section class="card s4 reveal" style="text-align:center">
        <div class="avatar-ring" style="width:150px;height:150px;margin:0 auto 18px">
            <img src="{{ asset('images/profile.svg') }}" alt="Profile picture of {{ $student['name'] }}">
        </div>
        <h2 class="gradient-text" style="font-size:22px">{{ $student['name'] }}</h2>
        <p class="muted" style="font-size:13px">{{ $student['role'] }}</p>
        <div class="badges chips" style="justify-content:center;margin-top:16px">
            <span class="badge"><x-icon name="pin"/>{{ $student['location'] }}</span>
        </div>
        <div class="badges chips" style="justify-content:center;margin-top:10px">
            @foreach(['Laravel','Blade','PHP','Git','CSS'] as $t)
                <span class="chip">{{ $t }}</span>
            @endforeach
        </div>
    </section>

    <section class="card s8 reveal">
        <div class="section-hint"><span class="dot"></span><p>About me</p></div>
        <h2>Short biography</h2>
        @foreach($student['bio'] as $paragraph)
            <p style="font-size:14.5px;margin-bottom:10px">{{ $paragraph }}</p>
        @endforeach

        <div class="divide"></div>
        <h3>Key information</h3>
        <div class="info-list" style="margin-top:10px">
            <b>Full name</b><span>{{ $student['name'] }}</span>
            <b>Email</b><span><a class="mail-link" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></span>
            <b>Phone</b><span><a class="tel-link" href="tel:{{ $contact['phone_intl'] }}">{{ $contact['phone'] }}</a></span>
            <b>Location</b><span>{{ $student['location'] }}</span>
            <b>School</b><span>{{ $student['school'] }}</span>
            <b>Course</b><span>Bachelor of Science in Information Technology</span>
            <b>GitHub</b><span><a href="{{ $github['profile'] }}" target="_blank" rel="noopener">{{ $github['profile'] }} ↗</a></span>
            <b>This repo</b><span><a href="{{ $github['repo'] }}" target="_blank" rel="noopener">borjamarklorenz/lorenzportfolio ↗</a></span>
        </div>

        <div class="divide"></div>
        <h3>Interests</h3>
        <div class="badges chips" style="margin-top:8px">
            @foreach($student['interests'] as $interest)
                <span class="badge">{{ $interest }}</span>
            @endforeach
        </div>
        <p class="muted" style="font-size:12px;margin-top:16px">📸 To use a real photo: save it as <code>public/images/profile.jpg</code> and update the <code>&lt;img&gt;</code> source in the Blade views.</p>
    </section>
</div>
@endsection
