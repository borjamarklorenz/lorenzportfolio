# Lorenz Portfolio — Mark Lorenz B. Borja

**Static online portfolio built with Laravel Blade (no database) — redesigned.** This dashboard-style portfolio presents my basic information, educational background, projects, and public GitHub repository links in one place. It was created for **IPA BSIT 4 Midterm — Activity 1-3: Building and Hosting a Laravel Portfolio** and will be integrated into the final project.

- **Owner:** Mark Lorenz B. Borja — BSIT, Data Center College of Bangued, Philippines
- **Location:** Baddec, Palao, Bangued, Abra, Philippines
- **Contact:** borjamarklorenz07@gmail.com • 09629974405
- **GitHub:** https://github.com/borjamarklorenz
- **Repository:** https://github.com/borjamarklorenz/lorenzportfolio

## Features

- **Dashboard home (`/`)** — animated hero with glowing gradient-ring profile photo, typing subtitle, contact badges, animated stat counters, skill progress bars, education/projects previews and "explore" navigation card.
- **Basic Information (`/about`)** — full name, contact details, short bio, profile picture, interests chips.
- **Educational Background (`/education`)** — gradient timeline: Data Center College of Bangued (BSIT, current), Abra High School (2021), Bangued East Central School (2017), plus a study-highlights summary card.
- **Skills (`/skills`)** — a dedicated dashboard: animated stat cards, a grid of skill-level cards with progress bars and next learning goals.
- **Certifications (`/certifications`)** — a separate dashboard purely for credentials: animated counters by type (Certification / Seminar / Workshop), award cards that render automatically from `config/portfolio.php`, and "planned certifications" roadmap chips.
- **Projects (`/projects`)** — grid layout with descriptions. First entry: *Barangay Directory and Document Request and Public Information System (BDRPIS)* for Barangay Linasin, Zone 1, Bangued, Abra, with a three-screenshot gallery (public homepage, quick services, resident sign-in) and clickable thumbnail switching.
- **Contact & GitHub links (`/contact`)** — clickable email/phone/location cards, GitHub links and a mailto-powered message form (no backend needed).
- **Design system** — dark-first glassmorphism theme with light/dark toggle (persisted in localStorage), animated gradient orbs + scroll progress bar, reveal-on-scroll animations, Sora + Inter fonts, inline SVG icon system, responsive sidebar that collapses to a mobile drawer.
- **Structure** — `PortfolioController` serves all pages; every piece of content lives in `config/portfolio.php` (single source of truth); layout uses partials (`head`, `sidebar`, `topbar`, `footer`, `scripts`) and a reusable `<x-icon>` Blade component.
- **No database** — no migrations or models used for portfolio data.

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
| `GET /skills` | Skills dashboard |
| `GET /certifications` | Certifications dashboard |
| `GET /projects` | Projects (empty grid) |
| `GET /contact` | Contact & GitHub Links |

## Run locally

```bash
composer install
php artisan key:generate
php artisan serve
# open http://localhost:8000 (or http://localhost/lorenz-portfolio under XAMPP htdocs)
```

> If running under XAMPP, place this folder in `C:\xampp\htdocs\` and visit `http://localhost/lorenz-portfolio`. The profile picture is `public/images/profile.jpg`.

## Deploy to Vercel

The repository is ready for [Vercel](https://vercel.com) using the community `vercel-php` PHP 8.4 runtime — no database is needed. Everything required is committed:

- `api/index.php` — serverless entry point (prepares writable `/tmp` dirs, then forwards to `public/index.php`)
- `vercel.json` — pins runtime, routes `/css/*` and `/images/*` to `public/`, passes everything else to the function, sets serverless-friendly env defaults (`stderr` logs, `cookie` sessions, `array` cache, compiled views in `/tmp`). Composer is **not** invoked in the build shell (it doesn't exist there) — the `vercel-php` runtime detects `composer.json`/`composer.lock` and installs dependencies automatically during the function build, so `installCommand`/`buildCommand` are deliberately no-ops.
- `.vercelignore` — keeps `vendor/`, `tests/`, `storage/` and secrets out of the deployment bundle
- `bootstrap/app.php` — trusts Vercel's proxy headers so pages/adapters render `https://` links behind the edge network

### One-time setup in the Vercel dashboard

1. Add an env var `APP_KEY` (value = output of `php artisan key:generate --show` on your machine). No other secrets are required.
2. Import the GitHub repo (`borjamarklorenz/lorenzportfolio`) as a project — or run `npx vercel` from the project root and follow the prompts.
3. Deploy. Every push to `main` then auto-deploys.

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
app/Http/Controllers/PortfolioController.php   Serves all five pages
config/portfolio.php        Single source of truth for all content (edit here)
routes/web.php              Routes mapped to PortfolioController
resources/views/
  layouts/app.blade.php     Main layout (dark glass theme skeleton)
  partials/{head,sidebar,topbar,footer,scripts}.blade.php
  components/icon.blade.php <x-icon> inline SVG icon component
  dashboard.blade.php  about.blade.php  education.blade.php
  skills.blade.php     certifications.blade.php
  projects.blade.php   contact.blade.php
public/
  css/app.css               Redesigned stylesheet (dark + light themes)
  images/profile.svg        (Placeholder — replace with profile.jpg)
  images/favicon.svg
PROMPT_LOG.md
README.md
```

## Screenshot / live demo

Add screenshots here after running locally. Live URL (GitHub repo): https://github.com/borjamarklorenz/lorenzportfolio
