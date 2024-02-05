<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concesionario>
 */
class ConcesionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuarioID = Usuario::where('RolID', '1')->inRandomOrder()->first()->UsuarioID;

        return [
            'UsuarioID' => $usuarioID,
        ];
    }
}
