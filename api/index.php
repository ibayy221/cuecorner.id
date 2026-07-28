<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Force HTTPS environment superglobals behind Vercel reverse proxy
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;
$_SERVER['HTTP_X_FORWARDED_PROTO'] = 'https';

$host = $_SERVER['HTTP_HOST'] ?? 'cuecorner-id.vercel.app';
putenv("APP_URL=https://{$host}");
putenv("ASSET_URL=https://{$host}");

// Create required directories in /tmp for Vercel serverless environment
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Override environment variables for Vercel Serverless environment
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_SERVICES_CACHE=/tmp/storage/framework/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/storage/framework/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/storage/framework/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/storage/framework/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/storage/framework/cache/events.php');

define('LARAVEL_START', microtime(true));

// Register Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel application
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Point Laravel storage directory to /tmp/storage (writable in Vercel serverless)
$app->useStoragePath('/tmp/storage');

$app->handleRequest(Request::capture());
