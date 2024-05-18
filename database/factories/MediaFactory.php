<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name'=>fake()->mimeType(),
            'type'=>fake()->fileExtension(),
            'size'=>fake()->randomElement(['3','8','2','9']),
            'ext'=>fake()->randomElement(['mp3','mp4','jpg','mkv'])
        ];
    }
}
