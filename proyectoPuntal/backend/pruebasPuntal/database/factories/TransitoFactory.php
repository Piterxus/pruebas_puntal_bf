<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plaza;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transito>
 */
class TransitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plazaId = Plaza::inRandomOrder()->first()->PlazaID;
        $fechaEntrada = $this->faker->dateTimeBetween('-1 years', 'now');
        $guardamuellesId = \App\Models\Guardamuelle::inRandomOrder()->first()->UsuarioID;
        $fechaSalida = $this->faker->dateTimeBetween($fechaEntrada, '+1 years');
        $patron = $this->faker->name();
        $proposito = $this->faker->sentence(3);
        return [
            'PlazaID' => $plazaId,
            'FechaEntrada' => $fechaEntrada,
            'GuardamuellesID' => $guardamuellesId,
            'FechaSalida' => $fechaSalida,
            'Patron' => $patron,
            'Proposito' => $proposito,
        ];
    }
}
