<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MypageController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
  Route::get('/mypage', [AuthController::class, 'mypage']);
});
