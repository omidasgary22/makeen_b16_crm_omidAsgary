<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reseller>
 */
class ResellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'records' => fake()->randomElement(['فروش در سایت دیجیکالا', 'فروش در سایت ترب', 'سابقه همکاری با شرکت داریا', 'مدیر فروش شرکت متا', 'کاسب']),
            'fields' => fake()->randomElement(['فروش لوازم جانبی', 'فروش لب تاپ', 'فروش گوشی سامسونگ', 'فروش گوشی ایفون', 'فروش ابزار شبکه', 'Manager of sellers']),

        ];
    }
}
