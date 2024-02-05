<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Concesionario::factory(1)->create();
        // \App\Models\Administrativo::factory(10)->create();
        // \App\Models\Guardamuelles::factory(5)->create();
        // \App\Models\GuardiaCivil::factory(1)->create();
        // \App\Models\Pantalan::factory(10)->create();
        // \App\Models\Plaza::factory(10)->create();
        // \App\Models\PlazaBase::factory(10)->create();
        // \App\Models\Transito::factory(10)->create();
        // \App\Models\Incidencia::factory(5)->create();
        // \App\Models\Tripulante::factory(6)->create();
        // \App\Models\AdministrativoPlaza::factory(5)->create();
        // \App\Models\ConcesionarioInstalacion::factory(1)->create();
        // \App\Models\ConcesionarioRol::factory(1)->create();
        // \App\Models\GuardiaCivilTransito::factory(7)->create();
        // \App\Models\TransitoEmbarcacion::factory(10)->create();
        // \App\Models\TransitoTripulante::factory(10)->create();
        // \App\Models\Alquiler::factory(10)->create();
        // \App\Models\Usuario::factory(10)->create();
        // // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $usuario = User::find(21);
        $usuario->createToken('yyy');
        // User::create([
        //     'name' => 'Sanctum',
        //     'email' => 'usuario@correo.com',
        //     'password' => Hash::make('123'),
        // ]);

    }
}
