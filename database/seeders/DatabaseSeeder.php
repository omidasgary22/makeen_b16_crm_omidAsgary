<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\factor;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tiket;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Not;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([Factoryseeder::class]);
    }
}
