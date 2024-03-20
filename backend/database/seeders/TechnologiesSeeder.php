<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('technologies')->insert([
            ['name' => 'HTML5'],
            ['name' => 'CSS3'],
            ['name' => 'JavaScript'],
            ['name' => 'React'],
            ['name' => 'Laravel'],
            ['name' => 'PHP'],
            ['name' => 'MySQL'],
        ]);
    }
}
