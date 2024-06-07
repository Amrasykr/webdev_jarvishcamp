<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'deadline' => $this->faker->date(),
            'description' => $this->faker->text,
            'status_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
