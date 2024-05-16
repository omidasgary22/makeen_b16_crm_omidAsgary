<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tiket>
 */
class TiketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->randomElement(['خرید', 'تماس با پشتیبانی', 'خدمات پس از فروش', 'انتقادات']),
            'expires' => fake()->dateTimeBetween(),
            //'user_id'=>User::factory(),
            'user_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}
