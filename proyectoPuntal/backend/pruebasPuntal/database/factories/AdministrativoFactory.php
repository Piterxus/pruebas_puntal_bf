<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Administrativo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrativo>
 */
class AdministrativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $usuarioID = Usuario::where('RolID', '2')->inRandomOrder()->first()->UsuarioID;
        // $plazaId = \App\Models\Plaza::inRandomOrder()->first()->PlazaID;
        // $fechaModificacion = $this->faker->dateTimeBetween('-1 years', 'now');
        $usuarioIDs = Usuario::where('RolID', '2')->pluck('UsuarioID')->toArray();
        $usuarioIDsDisponibles = array_filter($usuarioIDs, function ($usuarioID) {
            return !Administrativo::where('UsuarioID', $usuarioID)->exists();
        });
        // $usuarioID = collect($usuarioIDs)->first(function ($usuarioID) {
        //     return !Administrativo::where('UsuarioID', $usuarioID)->exists();
        // });
        $usuarioID = empty($usuarioIDsDisponibles)
        ? Usuario::factory()->create(['RolID' => 2])->UsuarioID
        : reset($usuarioIDsDisponibles); // Usamos reset para obtener el primer valor del array
        // if (!$usuarioID) {
        //     $usuarioID = Usuario::factory()->create(['RolID' => 2])->UsuarioID;
        // }
        return [
            'UsuarioID' => $usuarioID,
            // 'PlazaID' => $plazaId,
            // 'FechaModificacion' => $fechaModificacion,
        ];
    }
}
