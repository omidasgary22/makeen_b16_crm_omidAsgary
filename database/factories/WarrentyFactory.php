<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warrenty>
 */
class WarrentyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->randomElement(['گارانتی موبایل','گارانتی لب تاپ','گارانتی لوازم جانبی']),
            'expiration'=>fake()->randomElement(['شش ماه گارنتی طلایی','دوازده ماه گارانتی طلایی','هجده ماه گرانتی طلایی']),
            'description'=>fake()->randomElement(['اعتماد شما اعتبار ماست','با ارزوی بهترین ها','از این که مارا انتخاب کرده اید سپاس گزاریم','به امید دیدار مجدد']),
        ];
    }
}
