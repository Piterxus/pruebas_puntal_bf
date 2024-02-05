<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConcesionarioRol>
 */
class ConcesionarioRolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $concesionarioId = \App\Models\Concesionario::inRandomOrder()->first()->UsuarioID;
        $rolId = \App\Models\Rol::where('NombreRol', 'Concesionario')->first()->RolID;
        $fechaModificacion = $this->faker->dateTimeBetween('-1 years', 'now');
        return [
            'UsuarioID' => $concesionarioId,
            'RolID' => $rolId,
            'FechaModificacion' => $fechaModificacion,
            
        ];
    }
}
