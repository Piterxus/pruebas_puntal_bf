<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $instalacionIds = \App\Models\Instalacion::pluck('InstalacionID');
        $perfilesRoles = [
            'Concesionario' => 1,
            'Administrativo' => 2,
            'Guardamuelles' => 3,
            'Guardia Civil' => 4,
        ];

        $perfil = $this->faker->randomElement(array_keys($perfilesRoles));

        return [
            'NombreCompleto' => $this->faker->name(),
            'NombreUsuario' => $this->faker->userName(),
            'RolID' => $perfilesRoles[$perfil],
            'Habilitado' => $this->faker->boolean(),
            'InstalacionID' => $this->faker->randomElement($instalacionIds),
            'DNI' => $this->faker->unique()->ean13,
            'Contraseña' => $this->faker->password(),
            'Telefono' => $this->faker->phoneNumber(),
            'Email' => $this->faker->email(),
            'Direccion' => $this->faker->address(),
            'Perfil' => $perfil,
            'Imagen' => 'https://picsum.photos/200/300',
            'Descripcion' => $this->faker->text(),


        ];
    }
}
