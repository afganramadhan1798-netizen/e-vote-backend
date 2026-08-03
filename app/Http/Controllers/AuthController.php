<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'voter_code' => 'required'
        ]);

        $voter = Voter::where('voter_code', $request->voter_code)->first();

        if (!$voter) {

            return response()->json([
                'message' => 'NIS / NIP tidak ditemukan.'
            ], 404);

        }

        return response()->json([
            'message' => 'Login berhasil',
            'user' => $voter
        ]);
    }
}