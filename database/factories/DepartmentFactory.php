<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'project_id' => Project::inRandomOrder()->first()->id,

            'name' => $this->faker->randomElement(['Almoxarifado','Escritorio','Galpão','Farmacia']),
        ];
    }
}
