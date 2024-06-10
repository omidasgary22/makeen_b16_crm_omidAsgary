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
<<<<<<< HEAD
=======
use Spatie\Permission\Contracts\Permission;
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([permissionSeedr::class, RoleSeeder::class, Factoryseeder::class]);
=======
        $this->call([PermissionSeeder::class, RoleSeeder::class,factoryseeder::class]);

>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
    }
}
