<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client' => $this->faker->unique()->randomElement(['Prefeitura do Rio de Janeiro', 'Rede Dor', 'Hp. Getulio Vargas', 'Rede Samaritano']),
        ];
    }
}
