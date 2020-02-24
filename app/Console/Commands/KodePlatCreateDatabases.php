<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class KodePlatCreateDatabases extends Command
{
    protected $signature = 'kp:setupdb';
    protected $description = 'Creates and sets up kodeplat and testing databases';

    public function handle(): void
    {
        $startTime = now();
        $this->info("\nChecking current environment...");

        $this->createSchema('kodeplat', false);

        $this->info("\nSetting up testing environment.");

        $path = base_path('.env.testing');
        if (!file_exists($path)) {

            $this->info("\nFile " . $path . ' does not exist, creating new.');
            copy(base_path('.env'), $path);

            file_put_contents($path,
                str_replace('APP_ENV=' . getenv('APP_ENV'),
                    'APP_ENV=testing', file_get_contents($path)));

            file_put_contents($path,
                str_replace('DB_DATABASE=' . getenv('DB_DATABASE'),
                    'DB_DATABASE=testing', file_get_contents($path)));
            $this->info("\nFile " . $path . ' created.');
        }

        $this->createSchema('testing', true);

        $this->info("\nWhole operation finished in "
            . $startTime->diffInRealSeconds() . ' sec.');
    }

    private function createSchema(String $schemaName, bool $overwrite): void
    {

        $this->info("\nCreating new database " . $schemaName . '.');

        $charset = config('database.connections.mysql.charset', 'utf8mb4');
        $collation = config('database.connections.mysql.collation', 'utf8mb4_unicode_ci');

        $query = "CREATE DATABASE IF NOT EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";

        DB::statement($query);

        $this->info("\nDatabase " . $schemaName . ' has been created.');

        $this->migrate($schemaName);

        if ($schemaName !== 'testing') {
            $this->seed($schemaName);
        }
    }

    private function migrate(String $schemaName): void
    {
        $startMigration = now();

        $this->info("\nStarting database migrations...");

        if ($schemaName === 'testing') {
            $this->call('migrate:fresh', ['--database' => 'mysql2']);
            DB::setDefaultConnection('mysql');
        } else {
            $this->call('migrate:fresh');
        }

        $this->info("\nMigrations completed in "
            . $startMigration->diffInRealSeconds() . ' sec.');
    }

    private function seed(String $schemaName): void
    {
        $startSeeding = now();

        $this->info("\nSeeding database tables with data...");
        $this->call('db:seed');

        $this->info("\nSeeding completed in "
            . $startSeeding->diffInRealSeconds()
            . ' sec.');
    }
}
