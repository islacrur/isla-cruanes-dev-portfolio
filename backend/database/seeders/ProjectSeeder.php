<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Proyecto 1',
                'short_description' => 'Descripción corta del proyecto 1',
                'long_description' => 'Descripción larga del proyecto 1',
                'image' => 'ruta/a/la/imagen1.jpg',
                'repo_link' => 'https://github.com/proyecto1',
                'demo_link' => 'https://demo.proyecto1.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Proyecto 2',
                'short_description' => 'Descripción corta del proyecto 2',
                'long_description' => 'Descripción larga del proyecto 2',
                'image' => 'ruta/a/la/imagen2.jpg',
                'repo_link' => 'https://github.com/proyecto2',
                'demo_link' => 'https://demo.proyecto2.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
