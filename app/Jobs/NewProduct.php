<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Product ::create([

            'name' => fake()->randomElement(['lenovo', 'asus', 'mac']),
            'model' => fake()->randomElement(['LOQ', 'RAG', 'PRO 16']),
            'ram' => fake()->randomElement(['4', '8', '16', '32']),
            'graphics' => fake()->randomElement(['1', '2', '4', '8', '12']),
            'memory' => fake()->randomElement(['256ssd', '512ssd', '1tb/ssd']),
            'price' => fake()->randomElement(['50000', '60000', '70000', '80000']),
        ]); 
    }
}
