<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'customer' => $this->faker->unique()->randomElement(['Prefeitura do Rio de Janeiro', 'Rede Dor', 'Hp. Getulio Vargas', 'Rede Samaritano']),
            'corporate_reason' => $this->faker->unique()->randomElement(['INNOVA Ltda', 'Rede Dor EIRELI', 'ATLANTICA ASSOCIACOES SA', 'INTEGRADOS DA GAVEA SA']),
            'cnpj' => $this->faker->unique()->randomElement(['15.487.045/0001-87', '06.574.587/0001-54', '07.145.652/0001-62', '26.754.321/0001-09']),
            'city' => $this->faker->randomElement(['Rio de Janeiro', 'Rio de Janeiro', 'Rio de Janeiro', 'Rio de Janeiro']),

        ];
    }
}
