<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user
        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'update_user']);
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'index_user']);
        //product
        Permission::create(['name' => 'create_product']);
        Permission::create(['name' => 'update_product']);
        Permission::create(['name' => 'delete_product']);
        Permission::create(['name' => 'index_product']);
        //message
        Permission::create(['name' => 'create_message']);
        Permission::create(['name' => 'update_message']);
        Permission::create(['name' => 'delete_message']);
        Permission::create(['name' => 'index_message']);
        //factor
        Permission::create(['name' => 'create_factor']);
        Permission::create(['name' => 'update_factor']);
        Permission::create(['name' => 'delete_factor']);
        Permission::create(['name' => 'index_factor']);
        //label
        Permission::create(['name' => 'create_label']);
        Permission::create(['name' => 'update_label']);
        Permission::create(['name' => 'delete_label']);
        Permission::create(['name' => 'index_label']);
        //Note
        Permission::create(['name' => 'create_note']);
        Permission::create(['name' => 'update_note']);
        Permission::create(['name' => 'delete_note']);
        Permission::create(['name' => 'index_note']);
        //order
        Permission::create(['name' => 'create_order']);
        Permission::create(['name' => 'update_order']);
        Permission::create(['name' => 'delete_order']);
        Permission::create(['name' => 'index_order']);
        //Reseller
        Permission::create(['name' => 'create_reseller']);
        Permission::create(['name' => 'update_reseller']);
        Permission::create(['name' => 'delete_reseller']);
        Permission::create(['name' => 'index_reseller']);
        //task
        Permission::create(['name' => 'create_task']);
        Permission::create(['name' => 'update_task']);
        Permission::create(['name' => 'delete_task']);
        Permission::create(['name' => 'index_task']);
        //Team
        Permission::create(['name' => 'create_team']);
        Permission::create(['name' => 'update_team']);
        Permission::create(['name' => 'delete_team']);
        Permission::create(['name' => 'index_team']);
        //Tiket
        Permission::create(['name' => 'create_tiket']);
        Permission::create(['name' => 'update_tiket']);
        Permission::create(['name' => 'delete_tiket']);
        Permission::create(['name' => 'index_tiket']);
        //Warrenty
        Permission::create(['name' => 'create_warrenty']);
        Permission::create(['name' => 'update_warrenty']);
        Permission::create(['name' => 'delete_warrenty']);
        Permission::create(['name' => 'index_warrenty']);
    }
}
