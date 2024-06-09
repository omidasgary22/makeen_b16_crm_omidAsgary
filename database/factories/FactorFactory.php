<?php

namespace Database\Factories;

use App\Models\factor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factor>
 */
class FactorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Product_Code'=>fake()->randomNumber(5, false),
            'Description_of_goods'=>fake()->randomElement(['ویژگی‌ها: سیستم‌عامل macOS، طراحی شیک، کیفیت ساخت بالا، صفحه‌نمایش با کیفیت Retina، عمر باتری خوب.','ویژگی‌ها: پردازنده‌های قدرتمند، کیفیت ساخت خوب، صفحه‌نمایش با کیفیت، مقاومت در برابر ضربه‌ها','ویژگی‌ها: مدل‌های متنوع با امکانات مختلف، طراحی مدرن، کارایی خوب، قیمت مناسب']),
            'Amount'=>fake()->randomDigit(),
            'order_id'=>$this->faker->numberBetween(1,3)

        ];
    }
}
