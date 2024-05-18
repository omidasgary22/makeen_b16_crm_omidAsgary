<?php

namespace Database\Seeders;

use App\Models\User;
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
        $superAdmin = Role::create(['name' => 'superAdmin']);
        $admin = Role::create(['name' => 'admin']);
        $reseller = Role::create(['name' => 'reseller']);
        $user = Role::create(['name' => 'user']);

        //superAdmin
        $superAdmin->givePermissionTo([
            'create_user', 'update_user', 'delete_user', 'index_user',
            'create_product', 'update_product', 'delete_product', 'index_product',
            'create_message', 'update_message', 'delete_message', 'index_message',
            'create_factor', 'update_factor', 'delete_factor', 'index_factor',
            'create_label', 'update_label', 'delete_label', 'index_label',
            'create_note', 'update_note', 'delete_note', 'index_note',
            'create_order', 'update_order', 'delete_order', 'index_order',
            'create_reseller', 'update_reseller', 'delete_reseller', 'index_reseller',
            'create_task', 'update_task', 'delete_task', 'index_task',
            'create_team', 'update_team', 'delete_team', 'index_team',
            'create_tiket', 'update_tiket', 'delete_tiket', 'index_tiket',
            'create_warrenty', 'update_warrenty', 'delete_warrenty', 'index_warrenty',

        ]);

        //Admin
        $admin->givePermissionTo([
            'create_user', 'update_user', 'index_factor', 'update_factor', 'create_label', 'update_label', 'delete_label', 'index_label', 'index_message', 'index_note', 'create_order', 'update_order', 'index_product', 'create_reseller', 'update_reseller', 'index_reseller', 'create_task', 'update_task', 'delete_task', 'index_task', 'update_team', 'index_team', 'create_tiket', 'update_tiket', 'delete_tiket', 'index_tiket', 'create_user', 'update_user', 'delete_user', 'index_warrenty'
        ]);

        //reseller
        $reseller->givePermissionTo([
            'index_factor', 'index_label', 'index_message', 'index_note', 'create_order', 'update_order', 'delete_order', 'index_order', 'index_product', 'index_reseller', 'index_task', 'index_team', 'index_team', 'index_user', 'index_warrenty'
        ]);

        //user
        $user->givePermissionTo([
            'create_user', 'update_user', 'delete_user', 'create_order', 'update_order', 'delete_order', 'delete_order', 'create_message', 'update_message', 'delete_message'
        ]);


$superAdmin = User::create([
    'first_name'=>'امید',
    'last_name'=>'عسگری',
    'phone_number'=>'091201111',
    'email'=>'omid@gmail.com',
    'Country'=>'ایران',
    'gender'=>'مرد',
    'Address'=>'tehran',
    'password'=>'12345',
    'image_user'=>'jpg',
    'team_id'=>'1',

]);

$superAdmin->assignRole('superAdmin');

    }
}
