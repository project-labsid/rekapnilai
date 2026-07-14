<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@siakad.test'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Admin12345')
            ]
        );

        $user->assignRole('Super Admin');
    }
}