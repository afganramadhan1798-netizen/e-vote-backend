<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidates;

class CandidateController extends Controller
{
    public function index()
    {
        return response()->json(
            Candidates::all()
        );
    }
}