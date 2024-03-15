<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Technology;

class TechnologyFactory extends Factory
{
    protected $model = Technology::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
