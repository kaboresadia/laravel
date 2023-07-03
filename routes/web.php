<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [EtudiantController::class, 'registerForm']);
Route::post('/register/traitement', [EtudiantController::class, 'enregistrement']);
