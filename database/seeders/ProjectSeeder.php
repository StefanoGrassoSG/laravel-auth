<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->title = fake()->word();
            $project->description = fake()->sentence();
            $project->start_date = fake()->dateTimeBetween('-1 week', '+1 week');
            $project->end_date = fake()->dateTimeBetween('-1 week', '+1 week');
            $project->category = fake()->word();
            $project->languages = fake()->word();
            $project->project_status = fake()->word();
            $project->save();
        }
    }
}
