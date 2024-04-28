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



        // User Permissions
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'update-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'index-users']);

        // product Permissions
        Permission::create(['name' => 'create-roles']);
        Permission::create(['name' => 'update-roles']);
        Permission::create(['name' => 'delete-roles']);
        Permission::create(['name' => 'index.roles']);

        // Roles

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'create-users',
            'update-users',
            'delete-users',
            'index-users'
        ]);

        $super_admin = Role::create(['name' => 'super_admin']);
        $super_admin->givePermissionTo([
            'create-users',
            'update-users',
            'delete-users',
            'index-users',
            'create-roles',
            'update-roles',
            'delete-roles',
            'index-roles',
        ]);

        $user = Role::create(['name' => 'user']);
        $reseller = Role::create(['name' => 'reseller']);
    }
}
