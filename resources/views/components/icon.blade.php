@props(['name'])

@switch($name)
    @case('home')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    @break
    @case('user')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
    @break
    @case('cap')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12.3V17c3 2.7 9 2.7 12 0v-4.7"/></svg>
    @break
    @case('briefcase')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
    @break
    @case('mail')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,6 12,13 2,6"/></svg>
    @break
    @case('phone')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
    @break
    @case('pin')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
    @break
    @case('github')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'currentColor']) }}><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.55 0-.27-.01-1.17-.02-2.12-3.2.69-3.87-1.36-3.87-1.36-.52-1.33-1.28-1.68-1.28-1.68-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.03 1.75 2.69 1.25 3.35.95.1-.75.4-1.25.72-1.54-2.55-.29-5.23-1.28-5.23-5.68 0-1.26.45-2.28 1.18-3.09-.12-.29-.51-1.46.11-3.05 0 0 .96-.31 3.15 1.18a10.9 10.9 0 0 1 5.74 0c2.19-1.49 3.15-1.18 3.15-1.18.62 1.59.23 2.76.11 3.05.74.81 1.18 1.83 1.18 3.09 0 4.41-2.69 5.38-5.25 5.67.41.35.77 1.05.77 2.12 0 1.54-.01 2.77-.01 3.15 0 .3.2.67.8.55A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5z"/></svg>
    @break
    @case('sun')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.9 4.9l1.4 1.4m11.4 11.4l1.4 1.4M2 12h2m16 0h2M4.9 19.1l1.4-1.4m11.4-11.4l1.4-1.4"/></svg>
    @break
    @case('moon')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
    @break
    @case('external')
        <svg {{ $attributes->merge(['class' => 'icon', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => 1.8, 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round']) }}><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
    @break
@endswitch
