<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\GuardiaCivil;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuardiaCivil>
 */
class GuardiaCivilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $usuarioID = Usuario::where('RolID', '4')->inRandomOrder()->first()->UsuarioID;
        $usuarioIDs = Usuario::where('RolID', '4')->pluck('UsuarioID')->toArray();
        $usuarioID = collect($usuarioIDs)->first(function ($usuarioID) {
            return !GuardiaCivil::where('UsuarioID', $usuarioID)->exists();
        });
        return [
            'UsuarioID' => $usuarioID,
            // 'UsuarioID' => $this->faker->unique()->randomElement($usuarioIDs),
        ];
    }
}
