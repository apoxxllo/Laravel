<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'price' => fake()->randomFloat(1, 20, 30),
            'qty' => fake()->randomDigit(), 
            'image' => fake()->imageUrl(70, 70, 'product', true)
        ];
    }
}
