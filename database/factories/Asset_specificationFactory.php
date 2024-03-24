<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset_specification>
 */
class Asset_specificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'type' => $this->faker->randomElement(['Mobiliário', 'Eletronico', 'Infraestrutura', 'Ferramental', 'Utensílios']),

        'neworused' => $this->faker->randomElement(['Novo', 'Usado']),
        ];
    }
}
