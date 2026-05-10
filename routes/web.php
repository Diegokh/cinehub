<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'Hola soy Diego y estoy aprendiendo Laravel';
});

Route::get('/movies',[MovieController::class, 'index']);
Route::get('/movies/{id}',[MovieController::class, 'show']);