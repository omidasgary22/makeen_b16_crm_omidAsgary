<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'Address' => fake()->address(),
            'products' => fake()->randomElement(['lenovo', 'asus', 'mac']),
            'number' => fake()->randomDigit(),
            'price' => fake()->randomElement(['50000', '60000', '70000', '80000']),
            'description' => fake()->randomElement(['ممنون از فروشگاه خوبتون', 'امید وارم هر چی سریع تر ارسال بشه', 'به امید پیشرفت هر روز شما']),
            'user_id' => $this->faker->numberBetween(1, 3)
           // 'user_id' => User::factory()


        ];
    }
}
