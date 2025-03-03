<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands_arr = ['Adidas', 'Puma', 'Nike', 'The North Face', 'Levi\'s', 'Tommy Hilfiger',
            'Calvin Klein', 'H&M', 'Zara', 'Gucci'];

        return [
            'name' => $brands_arr[array_rand($brands_arr)]
        ];
    }
}
