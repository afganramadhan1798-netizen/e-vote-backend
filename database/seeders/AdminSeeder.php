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
            ['voter_code' => 'ADMIN001'],
            [
                'name' => 'Admin Ganteng',
                'role' => 'admin',
                'class' => null,
                'position' => 'Administrator',
                'status' => 'active',
            ]
        );
    }
}
