<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdministrativoPlaza>
 */
class AdministrativoPlazaFactory extends Factory
{
    protected $model = \App\Models\AdministrativoPlaza::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'UsuarioID' => function () {
                return \App\Models\Administrativo::inRandomOrder()->first()->UsuarioID;
            },
            'PlazaID' => function () {
                return \App\Models\Plaza::inrandomOrder()->first()->PlazaID;
            },
            'FechaModificacion' => $this->faker->dateTimeBetween('-1 years', 'now'),
            //
        ];
    }
}
