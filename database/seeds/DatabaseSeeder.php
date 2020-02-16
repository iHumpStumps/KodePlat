<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $image = $faker->image('public/storage/', '1280', '720', 'city', false);
        dd($image);
//        $this->call(UsersTableSeeder::class);
//        $this->call(ProjectsTableSeeder::class);
    }
}
