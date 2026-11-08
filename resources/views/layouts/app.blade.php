<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    @include('partials.head')
</head>
<body>
    <div class="bg-orbs" aria-hidden="true">
        <span class="orb o1"></span><span class="orb o2"></span><span class="orb o3"></span>
    </div>
    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

    <div class="shell">
        @include('partials.sidebar')

        <div class="page">
            @include('partials.topbar')
            <main class="content">
                @yield('content')
            </main>
            @include('partials.footer')
        </div>
    </div>

    @include('partials.scripts')
</body>
</html>
