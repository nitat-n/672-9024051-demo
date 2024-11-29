<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/bio', function () {
    return view('bio');
});

Route::get('/assignment', function () {
    return view('assignment');
});

Route::get('/title', [TitleController::class,'index']);
Route::get('/lecturer', [LecturerController::class,'index']);