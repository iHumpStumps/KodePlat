<?php

use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class, 5)
            ->create()
//            ->each(function ($project) {
//                $project->images()->save(factory(Image::class)->make());
//            })
        ;
    }
}
