<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class KodePlatRunTests extends Command
{
    protected $signature = 'kp:test';
    protected $description = 'Run all tests';

    public function handle(): void
    {
        passthru('./vendor/bin/phpunit --colors=always');
    }
}
