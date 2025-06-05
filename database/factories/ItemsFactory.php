<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productName = fake()->words(3, true);
        return [
            'name' => $productName,
            'slug' => Str::slug($productName),
            'description' => fake()->paragraph(8, true),
            'price' => number_format(fake()->numberBetween(10000, 100000), 0, ',', '.'),
            'image1' => 'https://picsum.photos/500/500?random=' . fake()->unique()->numberBetween(1, 10000),
            'image2' => 'https://picsum.photos/500/500?random=' . fake()->unique()->numberBetween(10001, 20000)
        ];
    }
}