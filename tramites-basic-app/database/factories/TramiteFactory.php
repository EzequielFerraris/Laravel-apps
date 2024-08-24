<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tramite>
 */
class TramiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'tipo_id'=> random_int(1, 9),
            'sector_id' => random_int(1, 9),
            'descripcion' => $this->faker->realText(), 
            'pdf_asociado' => $this->faker->url()
        ];
    }
}
