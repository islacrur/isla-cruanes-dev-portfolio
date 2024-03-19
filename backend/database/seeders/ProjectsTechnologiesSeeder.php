<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTechnologiesSeeder extends Seeder
{
    public function run()
    {
        $totalProjects = DB::table('projects')->count();
        $totalTechnologies = DB::table('technologies')->count();

        $totalRelationships = 10; 

        for ($i = 0; $i < $totalRelationships; $i++) {
            $projectId = rand(1, $totalProjects);
            $technologyId = rand(1, $totalTechnologies);

            DB::table('projects_technologies')->insert([
                'id_project' => $projectId,
                'id_technology' => $technologyId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
