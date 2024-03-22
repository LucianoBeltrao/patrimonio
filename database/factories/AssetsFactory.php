<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assets>
 */
class AssetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
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
