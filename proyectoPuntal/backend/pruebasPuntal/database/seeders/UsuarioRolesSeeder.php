<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Concesionario;
use App\Models\Administrativo;
use App\Models\Guardamuelles;
use App\Models\Guardiacivil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuariosPorRol = Usuario::all()->groupBy('RolID');

        foreach ($usuariosPorRol as $rolID => $usuarios) {
            switch ($rolID) {
                case 1: // Concesionario
                    Concesionario::factory()->count($usuarios->count())->create();
                    break;

                case 2: // Administrativo
                    Administrativo::factory()->count($usuarios->count())->create();
                    break;

                case 3: // Guardamuelles
                    Guardamuelles::factory()->count($usuarios->count())->create();
                    break;

                case 4: // Guardiacivil
                    GuardiaCivil::factory()->count($usuarios->count())->create();
                    break;
            }
        }

        // foreach ($usuariosPorRol as $rolID => $usuarios) {
        //     $rol = 'App\Models\\' . $usuarios->first()->rol->Nombre . 'Factory';
        //     $rol::factory($usuarios->count())->create();
        // }
    }
}
