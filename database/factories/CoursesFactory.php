<?php

namespace Database\Factories;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructor;

/**
 * @extends Factory<Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instructor_id' => Instructor::factory(),
            'code' => strtoupper(fake()->unique()->lexify('???')) . fake()->numberBetween(1,4),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'units' => fake()->numberBetween(1,3),
        ];
    }
}
