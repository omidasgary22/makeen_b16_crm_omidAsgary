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

            'name' => fake()->randomElement(['lenovo', 'asus', 'mac']),
            'model' => fake()->randomElement(['LOQ', 'RAG', 'PRO 16']),
            'ram' => fake()->randomElement(['4', '8', '16', '32']),
            'graphics' => fake()->randomElement(['1', '2', '4', '8', '12']),
            'memory' => fake()->randomElement(['256ssd', '512ssd', '1tb/ssd']),
            'price' => fake()->randomElement(['50000', '60000', '70000', '80000']),
            'image_path'=>fake()->imageUrl(640, 480, 'animals', true),
            //'description' => fake()->randomElement(['زیبا', 'قدرتمند', 'متنوع']),
        ];
    }
}
