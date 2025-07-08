<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('demo:reset', function () {
    if (!config('app.demo')) {
        $this->error('Demo mode is not enabled.');
        return;
    }

    $this->call('migrate:fresh', [
        '--seed' => true,
        '--seeder' => 'DemoSeeder',
    ]);

    $this->info('Demo data reset.');
})->purpose('Reset the demo database state');
