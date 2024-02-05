<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incidencia>
 */
class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = $this->faker->sentence(3);
        $guardamuellesId = \App\Models\Guardamuelle::inRandomOrder()->first()->UsuarioID;
        $foto = $this->faker->imageUrl(640, 480, 'animals', true);
        $descripcion = $this->faker->sentence(10);
        $administrativoId = \App\Models\Administrativo::inRandomOrder()->first()->UsuarioID;
        return [
            'Titulo' => $titulo,
            'GuardamuellesID' => $guardamuellesId,
            'Foto' => $foto,
            'Descripcion' => $descripcion,
            'AdministrativoID' => $administrativoId,
        ];
    }
}
