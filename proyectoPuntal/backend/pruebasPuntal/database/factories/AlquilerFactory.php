<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alquiler>
 */
class AlquilerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plazabaseId = \App\Models\PlazaBase::inRandomOrder()->first()->PlazaID;
        $embarcacionId = \App\Models\Embarcacion::inRandomOrder()->first()->Matricula;
        $fechaInicio = $this->faker->dateTimeBetween('-1 years', 'now');
        $fechaFinalizacion = $this->faker->dateTimeBetween($fechaInicio, 'now');

        return [
            'PlazaBaseID' => $plazabaseId,
            'EmbarcacionID' => $embarcacionId,
            'FechaInicio' => $fechaInicio,
            'FechaFinalizacion' => $fechaFinalizacion,
        ];
    }
}
