<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\BrandFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::factory(10)->create();
//        Brand::factory(10)->create();

        $types = [
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
            ['name' => 'Nike'],
            ['name' => 'The North Face'],
            ['name' => 'Levi\'s'],
            ['name' => 'Tommy Hilfiger'],
            ['name' => 'Calvin Klein'],
            ['name' => 'H&M'],
            ['name' => 'Zara'],
            ['name' => 'Gucci'],
            // Добавьте другие типы одежды по мере необходимости
        ];

        DB::table('brands')->insert($types);

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
