<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement([0,1]),
            'name' => $this->faker->name(),
            'companies_id' => $this->faker->numberBetween(1, 10),
            'cities_id' => $this->faker->numberBetween(1, 30),
            'budget' => $this->faker->numberBetween(10000000, 1099999999),
            'users_id' => 1,
            'start_date' => $this->faker->date(),
            'compliance_date' => $this->faker->date(),
        ];
    }
}
