<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departments>
 */
class DepartmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
            'name' => $this->faker->randomElement(['Almoxarifado', 'Almoxarifado2','Escritorio1', 'Escritorio2', 'Galpão1', 'Galpão2', 'Farmácia1', 'Farmacia2']),
                
        ];
    }
}
