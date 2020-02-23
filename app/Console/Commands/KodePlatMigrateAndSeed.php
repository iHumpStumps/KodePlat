<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class KodePlatMigrateAndSeed extends Command
{
    protected $signature = 'kp:db';
    protected $description = 'Runs migrations and seeds db';

    public function handle(): void
    {
        $startMigration = now();

        $this->info("\nStarting database migrations...");
        $this->call('migrate:fresh');

        $this->info("\nMigrations completed in "
            . $startMigration->diffInRealSeconds() . ' sec.');

        $startSeeding = now();

        $this->info("\nSeeding database tables with data...");
        $this->call('db:seed');

        $this->info("\nSeeding completed in "
            . $startSeeding->diffInRealSeconds()
            . ' sec, whole operation took '
            . $startMigration->diffInRealSeconds() . ' sec.');
    }
}
