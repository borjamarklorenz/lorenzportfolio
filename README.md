# Lorenz Portfolio — Mark Lorenz B. Borja

**Static online portfolio built with Laravel Blade (no database).** This dashboard-style portfolio presents my basic information, educational background, projects, and public GitHub repository links in one place. It was created for **IPA BSIT 4 Midterm — Activity 1-3: Building and Hosting a Laravel Portfolio** and will be integrated into the final project.

- **Owner:** Mark Lorenz B. Borja — BSIT, Data Center College of Bangued, Philippines
- **Location:** Baddec, Palao, Bangued, Abra, Philippines
- **Contact:** borjamarklorenz07@gmail.com • 09629974405
- **GitHub:** https://github.com/borjamarklorenz
- **Repository:** https://github.com/borjamarklorenz/lorenzportfolio

## Features

- **Dashboard home (`/`)** — profile photo, name, bio, contact badges, quick links, education + projects preview, and stats cards.
- **Basic Information (`/about`)** — full name, contact details, short bio, profile picture.
- **Educational Background (`/education`)** — schools attended, years, degrees/certifications (Data Center College of Bangued — Bachelor of Science in Information Technology).
- **Projects (`/projects`)** — grid/list layout with descriptions. Currently empty per owner request, with an empty-state card ready to fill.
- **Contact & GitHub links (`/contact`)** — clickable email/phone and GitHub icons/links to source code (this repo + profile).
- **Laravel Blade templating (`.blade.php`)** — shared layout (`resources/views/layouts/main.blade.php`) with sidebar navigation.
- **No database** — no migrations or models used for portfolio data; routes use closures returning Blade views.
- **Responsive CSS** — custom `public/css/app.css`, no build step required.

## Tech stack

- Laravel 12 (PHP 8.2) — latest stable at scaffold time
- Blade templating
- Plain CSS (`public/css/app.css`) + inline styles
- Git / GitHub
- XAMPP / `php artisan serve` for local dev

## Routes

| Route | Page |
|-------|------|
| `GET /` | Dashboard |
| `GET /about` | Basic Information |
| `GET /education` | Educational Background |
| `GET /projects` | Projects (empty grid) |
| `GET /contact` | Contact & GitHub Links |

## Run locally

```bash
composer install
php artisan key:generate
php artisan serve
# open http://localhost:8000 (or http://localhost/lorenz-portfolio under XAMPP htdocs)
```

> If running under XAMPP, place this folder in `C:\xampp\htdocs\` and visit `http://localhost/lorenz-portfolio`. The profile picture placeholder is `public/images/profile.svg` — replace it with your real photo as `public/images/profile.jpg` and update the `<img>` src in Blade views if you prefer JPG.

## AI prompt documentation

See [`PROMPT_LOG.md`](PROMPT_LOG.md) in the repository root for every agent prompt used, in order, with results. The WORD report in the submission folder repeats the same log + git history.

## Git workflow

```bash
git init
git add .
git commit -m "Initial commit: Set up Laravel Blade layout and basic info page"
git remote add origin https://github.com/borjamarklorenz/lorenzportfolio.git
git push -u origin main
```

Descriptive commit messages are used throughout (no vague "fix/update/test").

## Project structure

```
app/                  Laravel application (no models for this static site)
routes/web.php        Closure routes → Blade views
resources/views/
  layouts/main.blade.php
  dashboard.blade.php
  about.blade.php
  education.blade.php
  projects.blade.php
  contact.blade.php
public/
  css/app.css
  images/profile.svg  (placeholder — replace with profile.jpg)
PROMPT_LOG.md
README.md
```

## Screenshot / live demo

Add screenshots here after running locally. Live URL (GitHub repo): https://github.com/borjamarklorenz/lorenzportfolio
