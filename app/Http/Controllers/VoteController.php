<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Votes;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\UniqueConstraintViolationException;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'voter_id' => 'required|exists:voters,id',
            'candidate_id' => 'required|exists:candidates,id'
        ]);

        try {
            DB::transaction(function () use ($request) {
                $voter = Voter::where('id', $request->voter_id)->lockForUpdate()->first();

                if ($voter->status == 'inactive') {
                    abort(403, 'Akun dinonaktifkan.');
                }

                $alreadyVote = Votes::where('voter_id', $voter->id)->exists();

                if ($alreadyVote) {
                    abort(403, 'Anda sudah melakukan voting.');
                }

                Votes::create([
                    'voter_id' => $voter->id,
                    'candidate_id' => $request->candidate_id
                ]);
            });
        } catch (UniqueConstraintViolationException $e) {
            return response()->json([
                'message' => 'Anda sudah melakukan voting.'
            ], 403);
        }

        return response()->json([
            'message' => 'Vote berhasil.'
        ]);
    }
}
