<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuardiaCivilTransito>
 */
class GuardiaCivilTransitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $guardiaCivilID = \App\Models\GuardiaCivil::inRandomOrder()->first()->UsuarioID;
        $transitoId = \App\Models\Transito::inRandomOrder()->first()->PlazaID;
        $fechaVisualizacion = $this->faker->dateTimeBetween('-1 years', 'now');
        return [
            'GuardiaCivilID' => $guardiaCivilID,
            'TransitoID' => $transitoId,
            'FechaVisualizacion' => $fechaVisualizacion,
        ];
    }
}
