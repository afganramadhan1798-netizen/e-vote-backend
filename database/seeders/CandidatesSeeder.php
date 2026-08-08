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
        ];

        foreach ($candidates as $candidate) {
            Candidates::create($candidate);
        }
    }
}
