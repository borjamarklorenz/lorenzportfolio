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
            'status' => 'Completed',
            'school' => 'Abra High School',
            'degree' => 'Secondary — High School',
            'period' => '2021',
            'details' => 'Completed secondary education at Abra High School.',
        ],
        [
            'status' => 'Completed',
            'school' => 'Bangued East Central School',
            'degree' => 'Elementary',
            'period' => '2017',
            'details' => 'Completed elementary education at Bangued East Central School.',
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
        ['label' => 'Pages built', 'value' => 7],
        ['label' => 'Git commits', 'value' => 24],
        ['label' => 'Projects published', 'value' => 1],
        ['label' => 'Skills highlighted', 'value' => 5],
    ],

    'projects' => [
        [
            'title' => 'Barangay Directory and Document Request and Public Information System',
            'short' => 'System (BDRPIS) for Barangay Linasin, Zone 1, Bangued, Abra',
            'description' => 'An online portal that lets residents request barangay certificates and clearances, track the status of their requests, and access public information — announcements, resident verification, relief distribution updates and the barangay officials directory — from Barangay Linasin, Zone 1, Bangued, Abra.',
            'features' => ['Document requests & tracking', 'Public announcements & news', 'Verify a resident', 'Relief distribution updates', 'Barangay officials directory'],
            'tags' => ['Web Application', 'Community Services', 'Document Requests', 'Public Information'],
            'images' => [
                ['src' => 'images/projects/bdrpis-home.png', 'alt' => 'BDRPIS public homepage — welcome to Barangay Linasin, Zone 1, Bangued, Abra'],
                ['src' => 'images/projects/bdrpis-services.png', 'alt' => 'BDRPIS quick services — document requests, public information, resident verification, relief distribution, barangay officials'],
                ['src' => 'images/projects/bdrpis-login.png', 'alt' => 'BDRPIS sign-in page for residents of Barangay Linasin'],
            ],
            'repo' => '',
        ],
        // More projects can be added here following the same structure.
    ],

    // Certifications / seminars / workshops — add entries and the cards render automatically
    // on the dedicated /certifications dashboard. Add 'image' => 'images/<file>.jpg'
    // to display the scanned certificate inside the card.
    'certifications' => [
        [
            'name' => 'Understanding Startups & Getting Your Idea Ready for the Philippine Startup Challenge XI',
            'type' => 'Webinar',
            'issuer' => 'DICT — Department of Information and Communications Technology, Cordillera Administrative Region',
            'year' => '2026',
            'details' => 'Certificate of Participation for the webinar series held via Zoom on September 7, 2026 (1:30–4:30 PM), providing practical insights on understanding startups, developing innovative ideas, and preparing concepts for the Philippine Startup Challenge XI. Certificate No. COP-WSF-2026-68.',
            'image' => 'images/certificate-dict-startup.jpg',
        ],
    ],

    // Ideas for future credentials shown on the certifications dashboard.
    'cert_ideas' => ['CompTIA ITF+', 'Google IT Support', 'AWS Cloud Practitioner', 'Microsoft Azure AZ-900', 'Cisco CCNA'],

    'learning_goals' => ['Laravel Eloquent', 'JavaScript Fundamentals', 'Tailwind CSS', 'MySQL Queries', 'API Basics'],

    'project_ideas' => ['Portfolio Dashboard', 'Student Records Portal', 'E-commerce Starter', 'School Event Manager'],

];
