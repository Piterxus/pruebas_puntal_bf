<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instalacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pantalan>
 */
class PantalanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     
        $nombrePantalan = $this->faker->city;
        $ubicacionPantalan = $this->faker->latitude . ',' . $this->faker->longitude;
        $descripcionPantalan = $this->faker->text();
        $instalacionID = Instalacion::inRandomOrder()->first()->InstalacionID;
        $capacidad = $this->faker->numberBetween(1, 10);
        return [
            'NombrePantalan' => $nombrePantalan,
            'Ubicacion' => $ubicacionPantalan,
            'Descripcion' => $descripcionPantalan,
            'InstalacionID' => $instalacionID,
            'Capacidad' => $capacidad,
        ];
    }
}
