<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
 */
class taskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['بازاریابی', 'فروش', 'پخش', 'پشتیبانی']),
            'description' => fake()->randomElement(['اعتماد بیشتر فروش بیشتر ', 'گروه فناوری', 'starofking', 'hopefully']),
 
        ];
    }
}
