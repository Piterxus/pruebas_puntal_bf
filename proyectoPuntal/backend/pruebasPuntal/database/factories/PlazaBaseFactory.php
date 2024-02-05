<?php

namespace Database\Factories;

use App\Models\Plaza;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlazaBase>
 */
class PlazaBaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plazaId = Plaza::inRandomOrder()->first()->PlazaID;

        $fechaentrada = $this->faker->dateTimeBetween('-1 years', 'now');
        $finContrato = $this->faker->dateTimeBetween($fechaentrada, '+1 years');
        $datosEstancia = $this->faker->sentence(3);

        return [
            'PlazaID' => $plazaId,
            'FechaEntrada' => $fechaentrada,
            'FinContrato' => $finContrato,
            'DatosEstancia' => $datosEstancia,
        ];
    }
}
