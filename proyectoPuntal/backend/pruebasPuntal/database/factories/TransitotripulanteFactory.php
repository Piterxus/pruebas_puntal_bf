<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transitotripulante>
 */
class TransitotripulanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $transitoId = \App\Models\Transito::inRandomOrder()->first()->PlazaID;
        $fechaModificacion = $this->faker->dateTimeBetween('-1 years', 'now');
        $dni = \App\Models\Tripulante::inRandomOrder()->first()->NumeroDocumento;
        $fechaAsociacion = $this->faker->dateTimeBetween('-1 years', 'now');
        return [
            'TransitoID' => $transitoId,
            'FechaModificacion' => $fechaModificacion,
            'DNI' => $dni,
            'FechaAsociacion' => $fechaAsociacion,
        ];
    }
}
