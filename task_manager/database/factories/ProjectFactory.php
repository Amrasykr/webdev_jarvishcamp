<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
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
            'description' => $this->faker->text,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'status_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 3),
            
        ];
    }
}
