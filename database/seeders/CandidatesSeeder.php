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
<<<<<<< HEAD
            // [
            //     'number' => '1',
            //     'name' => 'Fadlan Dzilikram & Pragita',
            //     'photo' => '-',
            //     'vision' => '-',
            //     'mission' => '-',
            // ],
            // [
            //     'number' => '2',
            //     'name' => 'Meylani Al Meyra & Hisyam',
            //     'photo' => '-',
            //     'vision' => '-',
            //     'mission' => '-',
            // ],
            // [
            //     'number' => '3',
            //     'name' => 'Ahmad Farhan & Kirana',
            //     'photo' => '-',
            //     'vision' => '-',
            //     'mission' => '-',
            // ],
=======
            [
                'number' => '1',
                'name' => 'Afgan & Altaf',
                'photo' => 'candidates/afaf.png',
                'vision' => '-',
                'mission' => '-',
            ],
            [
                'number' => '2',
                'name' => 'Luna & Afgan',
                'photo' => 'candidates/aflun.png',
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
>>>>>>> 8d43ef48fc92e0e3f111481daab0102442c29389
        ];

        foreach ($candidates as $candidate) {
            Candidates::create($candidate);
        }
    }
}
