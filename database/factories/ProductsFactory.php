<?php

namespace Database\Factories;

use App\Models\Brand;

class ProductsFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clothing_types = ['Футболка', 'Джинсы', 'Свитер', 'Куртка', 'Шорты', 'Кроссовки',
            'Бейсболка', 'Рубашка', 'Платье', 'Брюки'];

        $brand_ids = Brand::all()->pluck('id')->toArray();

        return [
            'name' => $clothing_types[array_rand($clothing_types)],
            'brand_id' => $brand_ids[array_rand($brand_ids)],
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a felis bibendum nunc suscipit pellentesque. Suspendisse sodales nisl nec imperdiet euismod. Donec sit amet mauris lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus luctus tincidunt nibh id tincidunt. Nunc a consectetur lectus, et accumsan lorem. Fusce vitae odio vel ipsum tincidunt tempus ut ut sapien. Aliquam erat volutpat. Aenean aliquam placerat diam et elementum.',
            'quantity' => mt_rand(1, 10),
            'price' => mt_rand(100, 100000) + mt_rand(0, 99) / 100,
        ];
    }
}
