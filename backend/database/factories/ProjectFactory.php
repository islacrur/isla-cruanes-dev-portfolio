<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

class ProjectFactory extends Factory
{
    protected $model = Project::class;
   
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'short_description' => $this->faker->sentence,
            'long_description' => $this->faker->paragraph,
            'image' => $this->faker->image('public/storage/images',640,480, null, false),
            'repo_link' => $this->faker->url(), 
            'demo_link' => $this->faker->url(), 
            //'id_technology'=> $this->faker->randomElement($technologyIds),
        ];
    }
}
