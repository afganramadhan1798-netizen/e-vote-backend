<?php

namespace Database\Seeders;

use App\Models\Candidates;
use Illuminate\Database\Seeder;

class CandidatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidates = [
            [
                'number' => '1',
                'name' => 'Paslon 1',
                'photo' => 'candidates/fotopaslon.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '2',
                'name' => 'Paslon 2',
                'photo' => 'candidates/fotopaslon.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '3',
                'name' => 'Paslon 3',
                'photo' => 'candidates/fotopaslon.png',
                'vision' => '-',
                'mission' => '-',
            ],
        ];

        foreach ($candidates as $candidate) {
            Candidates::create($candidate);
        }
    }
}