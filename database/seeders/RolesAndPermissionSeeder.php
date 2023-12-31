<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cashier = Role::create(['name' => 'cashier']);
        $supervisor = Role::create(['name' => 'supervisor']);
        $admin = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'make-sales']);
        Permission::create(['name' => 'record-payments']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'manage']);
        Permission::create(['name' => 'manage-users']);

        $cashier->givePermissionTo('make-sales', 'record-payments');
        $supervisor->givePermissionTO('make-sales', 'record-payments', 'create', 'delete', 'manage');
        $admin->givePermissionTo(Permission::all());

        $cashierUser = User::create([
            'name' => 'Cashier User',
            'email' => 'cashier@gmail.com',
            'password' => bcrypt('password123')
        ]);

        $supervisorUser = User::create([
            'name' => 'Supervisor User',
            'email' => 'supervisor@gmail.com',
            'password' => bcrypt('password123')
        ]);

        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123')
        ]);

        $cashierUser->assignRole($cashier);
        $supervisorUser->assignRole($supervisor);
        $adminUser->assignRole($admin);
    }
}
