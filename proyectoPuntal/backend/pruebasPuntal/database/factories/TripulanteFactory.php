<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tripulante>
 */
class TripulanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numeroDocumento = $this->faker->unique()->randomNumber(8);
        $nombre = $this->faker->firstName();
        $sexo = $this->faker->randomElement(['H', 'M']);
        $nacionalidad = $this->faker->country();
        return [
            'NumeroDocumento' => $numeroDocumento,
            'Nombre' => $nombre,
            'Sexo' => $sexo,
            'Nacionalidad' => $nacionalidad,
        ];
    }
}
