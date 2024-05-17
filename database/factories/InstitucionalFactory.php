<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institucional>
 */
class InstitucionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_arma' => fake()->numberBetween(10000000,60000000),
            'sigla_vehiculo' => fake()->numberBetween(250000,255000),
            'chaleco_balistico' => fake()->numberBetween(10000000,400000000),
        ];
    }
}
 