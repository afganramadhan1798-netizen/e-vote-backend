<?php

namespace App\Exports;

use App\Models\Votes;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VotesExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        return Votes::with([
            'voter',
            'candidate'
        ]);
    }

    public function headings(): array
    {
        return [
            'No',
            'NIS / NIP',
            'Nama Voter',
            'Role',
            'Kelas',
            'Nomor Paslon',
            'Nama Paslon',
            'Waktu Voting',
        ];
    }

    public function map($vote): array
    {
        return [
            $vote->id,
            $vote->voter->voter_code ?? '-',
            $vote->voter->name ?? '-',
            $vote->voter->role ?? '-',
            $vote->voter->class ?? '-',
            $vote->candidate->number ?? '-',
            $vote->candidate->name ?? '-',
            $vote->created_at?->format('d-m-Y H:i:s') ?? '-',
        ];
    }
}
