<?php

/*
 * Vercel serverless entry point.
 *
 * Hands every request over to Laravel's normal front controller
 * (public/index.php). Before booting, it prepares the one writable
 * area on Vercel (/tmp) because the serverless filesystem itself
 * is read-only — compiled Blade views and logs live there.
 *
 * Locally this file is never used: `php artisan serve` still boots
 * through public/index.php exactly as before.
 */

if (isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL'])) {
    // Writable directories Vercel allows us to touch.
    foreach ([
        '/tmp/compiled-views',
        '/tmp/storage/logs',
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/cache/data',
        '/tmp/storage/app/public',
    ] as $dir) {
        if (! is_dir($dir)) {
            @mkdir($dir, 0775, true);
        }
    }

    // Fallback: if APP_KEY is missing from the deployment environment
    // (dashboards get misconfigured), generate an ephemeral per-instance
    // key instead of throwing a 500 MissingAppKeyException.
    // Safe here: this portfolio is stateless (cookie/array drivers) and
    // has no persisted data that server-side decryption must recover.
    if (empty($_ENV['APP_KEY'])) {
        $_ENV['APP_KEY'] = 'base64:'.base64_encode(random_bytes(32));
    }
}

require __DIR__.'/../public/index.php';
