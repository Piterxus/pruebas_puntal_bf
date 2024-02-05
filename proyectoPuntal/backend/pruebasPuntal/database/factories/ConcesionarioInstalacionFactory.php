<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConcesionarioInstalacion>
 */
class ConcesionarioInstalacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $instalacionID = \App\Models\Instalacion::inRandomOrder()->first()->InstalacionID;
        $concesionarioID = \App\Models\Concesionario::inRandomOrder()->first()->UsuarioID;
        $fechaModificacion = $this->faker->dateTimeBetween('-1 years', 'now');
        return [
            'InstalacionID' => $instalacionID,
            'UsuarioID' => $concesionarioID,
            'FechaModificacion' => $fechaModificacion,
        ];
    }
}
