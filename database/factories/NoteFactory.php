<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['خریدها', 'در انتظار خرید', 'اولویت خرید', 'تکالیف', 'برنامه', 'یاداشتها']),
            'text' => fake()->text(70),
            // 'timestamps' => fake()->dateTimeAD(),
            'user_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
