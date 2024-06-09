<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $reseller = Role::create(['name' => 'reseller']);
        $user = Role::create(['name' => 'user']);

        //superAdmin
        $superAdmin->givePermissionTo(Permission::all());

        //Admin
        $admin->givePermissionTo(['create_user', 'update_user', 'index_factor', 'update_factor', 'create_label', 'update_label', 'delete_label', 'index_label', 'index_message', 'index_note', 'create_order', 'update_order', 'index_product', 'create_reseller', 'update_reseller', 'index_reseller', 'create_task', 'update_task', 'delete_task', 'index_task', 'update_team', 'index_team', 'create_tiket', 'update_tiket', 'delete_tiket', 'index_tiket', 'create_user', 'update_user', 'delete_user', 'index_warrenty']);

        //reseller
        $reseller->givePermissionTo(['index_factor', 'index_label', 'index_message', 'index_note', 'create_order', 'update_order', 'delete_order', 'index_order', 'index_product', 'index_reseller', 'index_task', 'index_team', 'index_team', 'index_user', 'index_warrenty']);

        //user
        $user->givePermissionTo(['create_user', 'update_user', 'delete_user', 'create_order', 'update_order', 'delete_order', 'delete_order', 'create_message', 'update_message', 'delete_message']);
    }
}
