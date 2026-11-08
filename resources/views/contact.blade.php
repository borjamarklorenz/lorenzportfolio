@extends('layouts.app')
@section('title', 'Contact & GitHub')
@section('heading', 'Contact & GitHub Links')
@section('description', 'Clickable email and phone, plus links to my source code on GitHub.')

@section('content')
@php
    $contact = config('portfolio.contact');
    $github = config('portfolio.github');
    $student = config('portfolio.student');
@endphp
<div class="grid">
    <section class="card s7 reveal">
        <div class="section-hint"><span class="dot"></span><p>Reach me</p></div>
        <h2>Contact details</h2>

        <div class="card contact-card" style="margin-top:14px;padding:16px">
            <span class="cc-icon"><x-icon name="mail" width="21" height="21"/></span>
            <div>
                <strong>Email</strong>
                <a class="mail-link" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
            </div>
        </div>
        <div class="card contact-card" style="margin-top:12px;padding:16px">
            <span class="cc-icon"><x-icon name="phone" width="21" height="21"/></span>
            <div>
                <strong>Phone / Mobile</strong>
                <a class="tel-link" href="tel:{{ $contact['phone_intl'] }}">{{ $contact['phone'] }}</a>
            </div>
        </div>
        <div class="card contact-card" style="margin-top:12px;padding:16px">
            <span class="cc-icon"><x-icon name="pin" width="21" height="21"/></span>
            <div>
                <strong>Location</strong>
                <span class="muted" style="font-size:13.5px">{{ $student['location'] }}</span>
            </div>
        </div>

        <div class="divide"></div>
        <h3>GitHub repository links</h3>
        <div class="cta-row">
            <a class="btn" href="{{ $github['profile'] }}" target="_blank" rel="noopener">
                <x-icon name="github" width="17" height="17"/> GitHub profile ↗
            </a>
            <a class="btn btn-ghost" href="{{ $github['repo'] }}" target="_blank" rel="noopener">
                <x-icon name="external" width="16" height="16"/> lorenzportfolio repo ↗
            </a>
        </div>
        <p class="muted" style="font-size:12px;margin-top:12px">Clone: <code>{{ $github['repo_clone'] }}</code></p>
    </section>

    <section class="card s5 reveal">
        <div class="section-hint"><span class="dot"></span><p>Message me</p></div>
        <h2>Send a message</h2>
        <p class="muted" style="font-size:13px;margin-bottom:14px">This opens your email client with the message pre-filled — no database or backend mail needed for this static portfolio.</p>
        <form id="contactForm" data-to="{{ $contact['email'] }}" novalidate>
            <div class="form-grid">
                <div class="field">
                    <label for="cf-name">Your name</label>
                    <input id="cf-name" name="name" type="text" placeholder="Juan Dela Cruz" required>
                </div>
                <div class="field">
                    <label for="cf-email">Your email</label>
                    <input id="cf-email" name="email" type="email" placeholder="you@example.com" required>
                </div>
                <div class="field full">
                    <label for="cf-message">Message</label>
                    <textarea id="cf-message" name="message" placeholder="Hi Lorenz! I checked your portfolio…" required></textarea>
                </div>
                <div class="full">
                    <button class="btn" type="submit"><x-icon name="mail" width="17" height="17"/> Compose email</button>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection
