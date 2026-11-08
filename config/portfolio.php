<?php

// portfolio.php — single source of truth for every piece of portfolio content.
// No database is used: all Blade views read from this config file.

return [

    'student' => [
        'name' => 'Mark Lorenz B. Borja',
        'initials' => 'MLB',
        'role' => 'BSIT Student & Aspiring Web Developer',
        'tagline' => 'Crafting Laravel experiences from Bangued, Abra',
        'school' => 'Data Center College of Bangued',
        'location' => 'Baddec, Palao, Bangued, Abra, Philippines',
        'bio' => [
            'Hello! I am Mark Lorenz B. Borja, a Bachelor of Science in Information Technology student at Data Center College of Bangued, Philippines.',
            'I enjoy turning ideas into clean, responsive web interfaces with Laravel Blade, and I keep every project organized with Git and GitHub.',
            'This dashboard-style portfolio was built for my IPA BSIT 4 Midterm and gathers my basic information, educational background, projects, and public repository links in one place.',
        ],
        'interests' => ['Web Development', 'Laravel', 'UI Design', 'Open Source', 'Problem Solving'],
    ],

    'contact' => [
        'email' => 'borjamarklorenz07@gmail.com',
        'phone' => '09629974405',
        'phone_intl' => '+639629974405',
    ],

    'github' => [
        'profile' => 'https://github.com/borjamarklorenz',
        'repo' => 'https://github.com/borjamarklorenz/lorenzportfolio',
        'repo_clone' => 'https://github.com/borjamarklorenz/lorenzportfolio.git',
    ],

    'education' => [
        [
            'status' => 'Current',
            'school' => 'Data Center College of Bangued — Philippines',
            'degree' => 'Bachelor of Science in Information Technology (BSIT)',
            'period' => 'Ongoing',
            'details' => 'Course focused on systems, programming and web development. Built this Laravel Blade portfolio for the IPA BSIT 4 Midterm: Git/GitHub workflow plus documented AI prompting.',
        ],
        [
            'status' => 'Earlier',
            'school' => 'Elementary / Secondary education',
            'degree' => 'To be updated',
            'period' => '—',
            'details' => 'Add school names, years attended and achievements here as you gather them.',
        ],
    ],

    // Self-assessed learning progress (editable in one place)
    'skills' => [
        ['name' => 'HTML & CSS', 'level' => 85],
        ['name' => 'Blade Templating', 'level' => 80],
        ['name' => 'Laravel', 'level' => 76],
        ['name' => 'PHP', 'level' => 72],
        ['name' => 'Git & GitHub', 'level' => 74],
    ],

    'stats' => [
        ['label' => 'Pages built', 'value' => 5],
        ['label' => 'Git commits', 'value' => 9],
        ['label' => 'Projects published', 'value' => 0],
        ['label' => 'Skills highlighted', 'value' => 5],
    ],

    'projects' => [
        // Intentionally empty per owner's request — cards render automatically once added here.
        // Example structure:
        // ['title' => 'Sample', 'description' => '...', 'tags' => ['Laravel'], 'repo' => 'https://...'],
    ],

    'project_ideas' => ['Portfolio Dashboard', 'Barangay Services App', 'Student Records Portal', 'E-commerce Starter', 'School Event Manager'],

];
