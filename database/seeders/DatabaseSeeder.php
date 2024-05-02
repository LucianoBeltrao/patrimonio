<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Category::factory(4)->create();

        Asset::factory()
        
            ->count(10)
			
			->hasCategory(1)

			->create();

        Project::factory(count: 4)
        
        ->hasDepartments(3)

        ->create();
    }
}
