<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Study;

class StudyFactory extends Factory
{
    
    protected $model = Study::class;

    public function definition(): array
    {
        return [
            'course_name' => $this->faker->sentence,
            'institution' => $this->faker->company,
            'subjects' => $this->faker->randomElements(['TDD', 'MVP', 'CRUD'], rand(1, 3)),
            'start_date' => $this->faker->dateTimeThisDecade,
            'end_date' => $this->faker->dateTimeThisDecade,
        ];
    }
}
