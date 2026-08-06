<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminDashboardController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/vote',[VoteController::class,'store']);
Route::get('/candidates', [CandidateController::class, 'index']);
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);