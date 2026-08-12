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
                'name' => 'Fadlan Dzilikram & Pragita Islamidina',
                'photo' => 'candidates/Paslon_1.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '2',
                'name' => 'Meylani Al Meyra & Hisyam Rafa Adzami',
                'photo' => 'candidates/Paslon_2.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '3',
                'name' => 'Ahmad Farhan & Kirana Zulfa Hafidzah',
                'photo' => 'candidates/Paslon_3.png',
                'vision' => '-',
                'mission' => '-',
            ],
        ];

        foreach ($candidates as $candidate) {
            Candidates::create($candidate);
        }
    }
}