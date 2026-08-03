<?php

namespace Database\Seeders;

use App\Models\Voter;
use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voters = [

            // =========================
            // SISWA
            // =========================
            [
                'voter_code' => '23110001',
                'name' => 'Afgan Ramadhan',
                'role' => 'student',
                'class' => 'XI RPL',
                'position' => null,
                'status' => 'active',
            ],

            [
                'voter_code' => '23110002',
                'name' => 'Ahmad Farhan',
                'role' => 'student',
                'class' => 'XI RPL',
                'position' => null,
                'status' => 'active',
            ],

            [
                'voter_code' => '23110003',
                'name' => 'Rizky Pratama',
                'role' => 'student',
                'class' => 'XI RPL',
                'position' => null,
                'status' => 'active',
            ],

            [
                'voter_code' => '23110004',
                'name' => 'Siti Aisyah',
                'role' => 'student',
                'class' => 'XI AKL 1',
                'position' => null,
                'status' => 'active',
            ],

            // =========================
            // GURU
            // =========================

            [
                'voter_code' => '19881201001',
                'name' => 'Budi Santoso',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Guru Informatika',
                'status' => 'active',
            ],

            [
                'voter_code' => '19890514002',
                'name' => 'Siti Nurhayati',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Guru Bahasa Indonesia',
                'status' => 'active',
            ],

        ];

        foreach ($voters as $voter) {
            Voter::create($voter);
        }
    }
}
