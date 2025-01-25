<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GreetController;

Route::get('/greet', [GreetController::class, 'index']);