<div class="topbar">
    <div class="topbar-titles">
        <p class="crumb">Lorenz Portfolio <span>/</span> @yield('heading')</p>
        <h1>@yield('heading')</h1>
        <p class="lead muted">@yield('description', 'A Laravel Blade portfolio — no database, hosted from a public GitHub repository.')</p>
    </div>
    <div class="topbar-actions">
        <button class="theme-toggle" id="themeToggle" type="button" aria-label="Toggle light / dark theme">
            <span class="sun-wrap"><x-icon name="sun" width="18" height="18"/></span>
            <span class="moon-wrap"><x-icon name="moon" width="18" height="18"/></span>
        </button>
        <button class="burger" id="burger" type="button" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</div>
