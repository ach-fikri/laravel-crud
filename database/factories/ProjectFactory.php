<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_name' => fake()->word(),
            'clien' => fake()->name(),
            'project_leader' => fake()->name(),
            'start_date' => fake()->date('Y-m-d', 'now'),
            'end_date' => fake()->date('Y-m-d'),
            'progres'=> mt_rand(1, 100)
        ];
    }
}
