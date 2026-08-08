<?php

namespace Database\Seeders;

use App\Models\Voter;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Voter::updateOrCreate(
            ['voter_code' => 'admin123'],
            [
                'name' => 'Administrator',
                'role' => 'admin',
                'class' => null,
                'position' => null,
                'status' => 'active',
            ]
        );
    }
}
