<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votes;
use App\Models\Voter;
use App\Models\Candidates;

class AdminDashboardController extends Controller
{
    public function index()
{
    $candidates = Candidates::withCount('votes')->get();

    return response()->json(
        $candidates->map(function ($candidate) {
            return [
                'id' => $candidate->id,
                'number' => $candidate->number,
                'name' => $candidate->name,
                'photo' => $candidate->photo,
                'total_vote' => $candidate->votes_count,
            ];
        })
    );
}
}