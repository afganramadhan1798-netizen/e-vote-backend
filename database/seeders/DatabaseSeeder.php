<?php

namespace Database\Seeders;

use App\Models\Voter;
use App\Models\Votes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus seluruh data voting/testing
        Votes::query()->delete();

        // Hapus seluruh data voter lama
        Voter::query()->delete();

        DB::statement('ALTER TABLE voters AUTO_INCREMENT = 1');

        // Seed data voter baru
        $this->call([
            AdminSeeder::class,

            VotersClassXSeeder::class,
            VotersClassXISeeder::class,
            VotersClassXIISeeder::class,

            TeacherSeeder::class,
            TendikSeeder::class,
            CandidatesSeeder::class,
        ]);
    }
}
