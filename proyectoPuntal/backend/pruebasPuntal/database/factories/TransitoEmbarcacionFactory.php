<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransitoEmbarcacion>
 */
class TransitoEmbarcacionFactory extends Factory
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
        $matricula = \App\Models\Embarcacion::inRandomOrder()->first()->Matricula;
        return [
            'TransitoID' => $transitoId,
       
            'FechaModificacion' => $fechaModificacion,
            'Matricula' => $matricula,
        ];
    }
}
