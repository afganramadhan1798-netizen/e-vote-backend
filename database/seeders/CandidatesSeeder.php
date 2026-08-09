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
                'name' => 'Afgan & Altaf',
                'photo' => 'candidates/afaf.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '2',
                'name' => 'Afgan & Rasya',
                'photo' => 'candidates/afras.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '3',
                'name' => 'Farhan & Afgan',
                'photo' => 'candidates/fargan.png',
                'vision' => '-',
                'mission' => '-',
            ],
        ];

        foreach ($candidates as $candidate) {
            Candidates::create($candidate);
        }
    }
}