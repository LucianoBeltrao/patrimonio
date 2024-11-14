<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'user_id' => User::inRandomOrder()->first()->id,

                'category_id' => Category::inRandomOrder()->first()->id,

				'record' => $this->faker->numberBetween(int1: 1_00, int2: 100_00),

                'brand' => $this->faker->randomElement(['Arno', 'Reino', 'NewT']),

                'model' => $this->faker->randomElement(['Zeta2', 'Alfa4', 'Jupter1']),

                'health' => $this->faker->randomElement(['Novo', 'Usado']),

                'uptime' => $this->faker->numberBetween(int1: 50_00, int2: 45000_00),

                'invoice' => $this->faker->numberBetween(int1: 50_00, int2: 45000_00),

                'serial_number' => $this->faker->numberBetween(int1: 50_00, int2: 45000_00),

				'name' => $this->faker->unique()->randomElement(['Geladeira',
				'Lixeira',
				'Pallet',
				'Placas',
				'Prateleiras',
				'Celular',
				'Impressora',
				'Notebook',
				'Termohigrometro',
				'Estante',
				'Etiquetas',
				'Armário',
				'Bateria',
				'Computador',
				'Fonte',
				'Camera',
				'Adaptador',
				'Ar',
				'Autotransformador',
				'Caixa',
				'Campainha',
				'Carrinho',
				'Coletor',
				'Computadores',
				'Corrente',
				'Divisória',
				'Escada',
				'Estantes',
				'Estrado',
				'Exaustor',
				'Gelox',
				'Kit',
				'Letriro',
				'Longarina',
				'Mangueira',
				'Mesa',
				'Microondas',
				'Organizador',
				'Pallets',
				'Pedestais',
				'Porta',
				'Quadro',
				'Saboneteira',
				'Suporte',
				'Tanque',
				'Termometro',
				'Torneira',
				'Ventilador',
				'Gaiolas',
				'Gerador',
				'Hacks',
				'Corrente azul',
				'Corrente verde',
				'Adesivo',
				'Armario',
				'Ballun',
				'Bandeja',
				'Bebedouro',
				'Computadore',
				'Dvr',
				'Extensão',
				'Filtro',
				'Gaveteiro',
				'Gelo',
				'Hd',
				'Mini',
				'Monitor',
				'Pá',
				'Poupa',
				'Unidades',
				'Ventileador',
				'Paletes',
				'Longarinas']),

				'description' => $this->faker->paragraph(nbSentences:2),

				'price' => $this->faker->numberBetween(int1: 50_00, int2: 900_00),
        ];
    }
}
