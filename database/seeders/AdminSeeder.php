<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role jika belum ada
        $role = Role::firstOrCreate([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        // Buat user admin
        $admin = User::updateOrCreate(
            [
                'email' => 'admin@sdmi.test',
            ],
            [
                'name'      => 'Super Admin',
                'username'  => 'admin',
                'phone'     => '081234567890',
                'is_active' => true,
                'password'  => Hash::make('password'),
            ]
        );

        // Beri role
        if (! $admin->hasRole('Super Admin')) {
            $admin->assignRole($role);
        }
    }
}