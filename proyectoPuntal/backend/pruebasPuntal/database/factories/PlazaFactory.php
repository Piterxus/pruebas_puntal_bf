<?php

namespace Database\Factories;

use App\Models\Pantalan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plaza>
 */
class PlazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $codigo = $this->faker->unique()->randomNumber(4);
        $anio = $this->faker->date();
        $pantalanId = Pantalan::inRandomOrder()->first()->PantalanID;
        $tipoPlaza = $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9']);
        $estado = $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9']);
        return [
            'CodigoPlaza' => $codigo,
            'Anio' => $anio,
            'PantalanID' => $pantalanId,
            'tipoPlaza' => $tipoPlaza,
            'estado' => $estado,
           
            
        ];
    }
}
