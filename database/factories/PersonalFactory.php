<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'apellidos' => fake()->word(),
            'nombres' => fake()->word(),
            'grado' => fake()->word(),
            'placa' => fake()->numberBetween(000001, 200000),
        ];
    }
}
