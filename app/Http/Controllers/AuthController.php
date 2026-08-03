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
            'success' => false,
            'message' => 'NIS / NIP tidak terdaftar.'
        ], 404);
    }

    if ($voter->status === 'inactive') {
        return response()->json([
            'success' => false,
            'message' => 'Akun Anda sedang dinonaktifkan. Silakan hubungi panitia.'
        ], 403);
    }

    return response()->json([
        'success' => true,
        'message' => 'Login berhasil.',
        'user' => $voter
    ]);
}
}