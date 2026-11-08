<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portfolio of Mark Lorenz B. Borja — BSIT student, Data Center College of Bangued. Laravel Blade, Git & GitHub.">
<title>@yield('title', 'Dashboard') - Lorenz Portfolio</title>
<link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script>
  // Apply saved theme before first paint to avoid flashing
  document.documentElement.dataset.theme = localStorage.getItem('lorenz-theme') || 'dark';
</script>
