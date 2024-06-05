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
            'numero_arma' => fake()->numberBetween(100000,600000000),
            'sigla_vehiculo' => fake()->numberBetween(250000,255000),
            'chaleco_balistico' => fake()->numberBetween(000001,400000),
            'lugar_de_faccion' => fake()->word(),
            'mision_por_cumplir' => fake()->word(),
        ];
    }
}
