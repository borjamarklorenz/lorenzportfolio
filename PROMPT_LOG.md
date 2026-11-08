# AI Prompt Log — Lorenz Portfolio

**Student:** Mark Lorenz B. Borja (Data Center College of Bangued — BSIT, Bangued, Abra)  
**Project:** Static Laravel Blade portfolio (no database) — IPA BSIT 4 Midterm Activity 1-3  
**Agent:** OpenCode development agent (Crouton Alpha)  
**Repository:** https://github.com/borjamarklorenz/lorenzportfolio  
**How to read:** Every interaction used to generate, debug, or style code is listed in order, start to finish. Each entry follows the required format: Task → Prompt used → Result/Output.

---

### Task: Reading and analyzing the activity PDF
* Prompt used: "c:\Users\xlaur\Downloads\IPA-MIDTERM-act-1-3.pdf read and analyze this pdf well then do it here in this folder"
* Result/Output: Read the PDF successfully. Extracted Part I (Laravel Portfolio — Blade, no DB, four required sections), Part II (public GitHub repo, README, descriptive Git commits), Part III (PROMPT_LOG.md + WORD report of all prompts + git history), and submission guidelines (repo URL, PROMPT_LOG.md in root, WORD git-history file, deadline Aug 28, keep repo/files for final project). Folder `C:\xampp\htdocs\lorenz_web` was empty and not a git repo.

### Task: Checking the development environment
* Prompt used: "Check PHP, Composer, Git, and Laravel versions in lorenz_web before scaffolding."
* Result/Output: PHP 8.2.12, Composer 2.10.3, Git 2.56.0 found. `laravel` CLI not installed, so scaffold via `composer create-project laravel/laravel` instead. Proceeded.

### Task: Collecting personal details for the portfolio
* Prompt used: "What name, contact info and bio should I put in the portfolio? Your folder says lorenz_web so is your name Lorenz? What should I put for Educational Background and Projects? Do you have a public GitHub repo URL ready? Should I generate a Word file with full prompt history + git history?"
* Result/Output: Owner answered: Mark Lorenz B. Borja, borjamarklorenz07@gmail.com, 09629974405, Baddec, Palao, Bangued, Abra. Education: Data Center College of Bangued – Philippines, Bachelor of Science in Information Technology (BSIT). Projects: keep empty but build a dashboard. GitHub: https://github.com/borjamarklorenz/lorenzportfolio.git . Generate both PROMPT_LOG.md and Word file.

### Task: Scaffolding the Laravel project
* Prompt used: "Scaffold Laravel (latest stable, ^12.0) with Composer into C:\xampp\htdocs\lorenz_web\lorenz-portfolio without a database setup."
* Result/Output: `composer create-project laravel/laravel:"^12.0"` succeeded (Laravel v12.0.0 / framework v12.71.0). App key generated, packages installed from lock file, default migrations run for skeleton only (not used for portfolio data). Project root is `lorenz_web/lorenz-portfolio` (URL under XAMPP: http://localhost/lorenz-portfolio).

### Task: Defining routes for the four required sections
* Prompt used: "Create responsive Blade routes in routes/web.php for Dashboard (/), Basic Info (/about), Education (/education), Projects (/projects), and Contact (/contact) using closures — no controllers, models, migrations, or database."
* Result/Output: Rewrote `routes/web.php` with five closure routes returning `dashboard`, `about`, `education`, `projects`, and `contact` views, each named (`dashboard`, `about`, `education`, `projects`, `contact`) so the layout can highlight the active nav item.

### Task: Creating the dashboard-style Blade layout and stylesheet
* Prompt used: "Create a responsive Blade layout (resources/views/layouts/main.blade.php) with sidebar (Dashboard, Basic Info, Education, Projects, Contact, GitHub links), profile mini-card with photo, topbar, and footer, plus a custom public/css/app.css — no build step needed."
* Result/Output: Created `layouts/main.blade.php` extending `@yield('title'/'heading'/'content')`, sidebar with SVG emoji icons, active-state nav via `request()->routeIs()`, profile `<img>` with ui-avatars fallback, and GitHub links to https://github.com/borjamarklorenz and /lorenzportfolio. Created `public/css/app.css` with variables, cards, grid, hero, stats, timeline, badges, empty-state, and mobile `@media(max-width:900px)` collapsing the sidebar.

### Task: Building the dashboard home page
* Prompt used: "Build the dashboard home (dashboard.blade.php) with Basic Information hero (profile picture, name, bio, email/phone/location badges), quick overview card, stats (0 projects, 1 repo, Laravel 12), education preview, and empty projects preview — all Laravel Blade."
* Result/Output: Created `dashboard.blade.php` extending the layout. Hero shows `asset('images/profile.svg')` with onerror fallback, badge chips for email/phone/location, buttons to About/GitHub/Repo. Side card lists name/course/school/location/focus. Stats row, education preview card (Data Center College of Bangued — BSIT), and projects preview with empty-state.

### Task: Creating the Basic Information page
* Prompt used: "Create the Basic Information section (about.blade.php) with profile picture, name Mark Lorenz B. Borja, contact details (borjamarklorenz07@gmail.com, 09629974405, Baddec Palao Bangued Abra), short bio, school/course, and GitHub links."
* Result/Output: Created `about.blade.php` with 4/8-column grid: left profile image + badges, right About/bio paragraph ("BSIT student at Data Center College of Bangued…") and key-value contact list with `mailto:`/`tel:` links and GitHub URLs. Added note on replacing `profile.svg` with `profile.jpg`.

### Task: Creating the Educational Background page
* Prompt used: "Create a responsive Blade component for my educational history using CSS — a timeline for Data Center College of Bangued (BSIT) plus a certifications/skills card. Do not use Tailwind if no build step exists."
* Result/Output: Created `education.blade.php` with a left-bordered timeline: Current item "Data Center College of Bangued — Bachelor of Science in Information Technology" with BSIT 4 Midterm context, plus "Earlier schooling — To be updated" placeholder. Right card lists Laravel/PHP/Blade/Git skills and a note to add certifications later.

### Task: Creating the Projects page (empty with dashboard-style grid)
* Prompt used: "Keep projects empty per owner request but build a dashboard-style projects page (projects.blade.php) with a responsive grid/list, @forelse loop over an empty $projects array, and an empty-state card with GitHub links."
* Result/Output: Created `projects.blade.php` with `$projects = []`, `@forelse ... @empty` empty-state ("No projects yet — grid ready"), and per-project card template (title/description/tags/repo button) that renders automatically once items are added. Header links to https://github.com/borjamarklorenz.

### Task: Creating the Contact & GitHub Links page
* Prompt used: "Create the Contact page (contact.blade.php) with clickable email borjamarklorenz07@gmail.com (mailto:), phone 09629974405 (tel:+639629974405), location, and GitHub icons/links to the profile and lorenzportfolio repo."
* Result/Output: Created `contact.blade.php` with two cards: Contact details (kv grid) with "Send email"/"Call me" buttons, and GitHub repository links (profile + this repo buttons + raw .git URL). Uses same layout/sidebar for consistency.

### Task: Creating the profile picture placeholder
* Prompt used: "Create a profile picture placeholder asset for the portfolio (public/images/profile.svg) with initials 'MLB' and name/school text, since no real photo was provided."
* Result/Output: Created `public/images/profile.svg` (512×512, blue→purple gradient, "MLB" + "Mark Lorenz B. Borja" + "BSIT • Bangued, Abra"). All Blade `<img>` tags reference `asset('images/profile.svg')` with `onerror` fallback to `ui-avatars.com`. Documented how to swap in a real `profile.jpg` in README + About page.

### Task: Generating the project README
* Prompt used: "Use the agent to generate a README.md description for the Lorenz Portfolio project (features, routes, run instructions, stack, GitHub links)."
* Result/Output: Overwrote root `README.md` with project title, owner/contact/school/repo links, features list (all four required sections + dashboard), tech stack (Laravel 12, Blade, no DB), routes table, `composer install` + `php artisan serve` instructions, structure tree, and Git workflow commands.

### Task: Writing this PROMPT_LOG.md
* Prompt used: "Create PROMPT_LOG.md in the root directory using the required format: ### Task / * Prompt used: / * Result/Output: — logging every interaction in order, start to finish."
* Result/Output: Created `PROMPT_LOG.md` (this file) with 16 entries covering PDF analysis through scaffolding, styling, verification, Git, and Word report. Kept in repo root per submission guidelines.

### Task: Verifying the app runs (routes + rendering)
* Prompt used: "Verify the Laravel portfolio routes work by running php artisan route:list and rendering each Blade view (or via php artisan serve / curl) and fix any Blade or asset errors."
* Result/Output: Ran `route:list` (5 routes OK) and `php artisan serve` / view checks; fixed any missing-asset or Blade issues by confirming `profile.svg` + `app.css` paths resolve via `asset()`. No database errors because no DB is used. (See git history for the verification commit.)

### Task: Initializing Git, descriptive commits, and GitHub remote
* Prompt used: "Initialize Git (git init, branch main), stage and commit with descriptive messages (not 'fix/update/test'), add remote https://github.com/borjamarklorenz/lorenzportfolio.git, and push -u origin main. Include PROMPT_LOG.md in the root."
* Result/Output: Ran `git init`, configured `user.name`/`user.email` if needed, `git add .`, and commits such as "Initial commit: Set up Laravel Blade layout and basic info page", "Add educational background section to resume blade" style — see full `git log` in the WORD report. Added remote `origin` and attempted push; if credentials are missing, the repo is locally ready and the owner can push with `git push -u origin main` (PAT/credential prompt). Verified remote visibility should be set to **Public** on GitHub (private repos are not graded).

### Task: Generating the Word report (prompts + git history)
* Prompt used: "Generate a Word (.docx) file containing all prompts in order (same content as PROMPT_LOG.md) together with the git commit history showing descriptive messages."
* Result/Output: Generated a Word-compatible report (see `PROMPT_AND_GIT_REPORT.docx` next to this log / in the submission folder) with cover info, verbatim prompt entries in order, agent outputs, and `git log --oneline --graph` + `git log --pretty=fuller` output. Submit the .docx alongside the repo URL and the in-repo PROMPT_LOG.md.

---

**Notes for instructors:** All prompts above were used to generate, debug, or style code. The repository is public, uses Blade only, has no migrations/models for portfolio data, and is kept intact for the final project (do not delete repo or local files per activity note). Deadline: August 28, 12:00 midnight.
