<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Define all models/tables
        $entities = [
            'users',
            'categories',
            'products',
            'orders',
            'order_items',
            'carts',
            'cart_items',
            'addresses',
            'coupons',
        ];
        $actions = ['create', 'read', 'update', 'delete'];

        $permissions = [];
        foreach ($entities as $entity) {
            foreach ($actions as $action) {
                $permissions[] = "$action $entity";
            }
        }

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'web']);
        }

        // Create roles and assign permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        $adminRole->givePermissionTo(Permission::all());
        // User role: only read and create for main entities
        $userPermissions = [];
        foreach ($entities as $entity) {
            $userPermissions[] = "read $entity";
            $userPermissions[] = "create $entity";
        }
        $userRole->givePermissionTo($userPermissions);

        // Assign roles to users
        $firstUser = User::first();
        if ($firstUser) {
            $firstUser->assignRole('admin');
        }
        $otherUsers = User::where('id', '!=', $firstUser?->id)->get();
        foreach ($otherUsers as $user) {
            $user->assignRole('user');
        }
    }
} 