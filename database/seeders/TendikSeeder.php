<?php

namespace Database\Seeders;

use App\Models\Voter;
use Illuminate\Database\Seeder;

class TendikSeeder extends Seeder
{
    public function run(): void
    {
        $voters = [
            [
                'voter_code' => '2635752652200002',
                'name' => 'Abdul Gofur',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '1442759662200013',
                'name' => 'Achmad Fauzi',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '0438751653200023',
                'name' => 'Bastoni',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '199302182025062001',
                'name' => 'Bonita Ratnasari',
                'role' => 'teacher',
                'class' => null,
                'position' => 'PNS',
                'status' => 'active',
            ],
            [
                'voter_code' => '7239751653110053',
                'name' => 'Cecep Supriyadi',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '197706222014122002',
                'name' => 'Dewi Rengganis Meitrovitri',
                'role' => 'teacher',
                'class' => null,
                'position' => 'PNS',
                'status' => 'active',
            ],
            [
                'voter_code' => '7437760663200003',
                'name' => 'Erix Nurdiansyah',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '8044755656200003',
                'name' => 'Fauzan Riza',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '196902201995122001',
                'name' => 'Indah Sri Wahyuningsih',
                'role' => 'teacher',
                'class' => null,
                'position' => 'PNS',
                'status' => 'active',
            ],
            [
                'voter_code' => 'TENDIK-010',
                'name' => 'Mochamad Ilham Rachman',
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '197407312014121003',
                'name' => 'Rochtanu Mulyana',
                'role' => 'teacher',
                'class' => null,
                'position' => 'PNS',
                'status' => 'active',
            ],
            [
                'voter_code' => '3847749652200022',
                'name' => "Sya'roni",
                'role' => 'teacher',
                'class' => null,
                'position' => 'Honor Daerah TK.I Provinsi',
                'status' => 'active',
            ],
            [
                'voter_code' => '197704062014122002',
                'name' => 'Umiasih Tri Supiyani',
                'role' => 'teacher',
                'class' => null,
                'position' => 'PNS',
                'status' => 'active',
            ],
        ];

        foreach ($voters as $voter) {
            Voter::updateOrCreate(
                ['voter_code' => $voter['voter_code']],
                $voter
            );
        }
    }
}