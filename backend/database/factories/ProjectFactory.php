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
        ];
    }
}
