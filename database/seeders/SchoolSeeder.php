<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        School::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'SD Negeri Contoh',
                'level' => 'SD',
                'status' => 'Negeri',
                'email' => 'admin@sekolah.sch.id',
                'phone' => '021000000',
            ]
        );
    }
}