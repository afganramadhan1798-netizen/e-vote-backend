<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Votes;
use App\Models\Voter;
use App\Models\Candidate;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'voter_id' => 'required|exists:voters,id',
            'candidate_id' => 'required|exists:candidates,id'
        ]);

        $voter = Voter::find($request->voter_id);

        if ($voter->status == 'inactive') {
            return response()->json([
                'message' => 'Akun dinonaktifkan.'
            ],403);
        }

        $alreadyVote = Votes::where('voter_id', $voter->id)->exists();

        if ($alreadyVote) {
            return response()->json([
                'message' => 'Anda sudah melakukan voting.'
            ], 403);
        }

        Votes::create([
            'voter_id'=>$voter->id,
            'candidate_id'=>$request->candidate_id
        ]);

        return response()->json([
            'message'=>'Vote berhasil.'
        ]);
    }
}
