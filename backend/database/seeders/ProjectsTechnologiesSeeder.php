<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTechnologiesSeeder extends Seeder
{
    public function run()
    {
        $projects = DB::table('projects')->pluck('id');
        $technologies = DB::table('technologies')->pluck('id');

        foreach ($projects as $projectId) {
            $technologiesCount = rand(1, count($technologies));
            $selectedTechnologies = $technologies->random($technologiesCount);

            foreach ($selectedTechnologies as $technologyId) {
                DB::table('projects_technologies')->insert([
                    'id_project' => $projectId,
                    'id_technology' => $technologyId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}