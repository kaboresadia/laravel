<?php

use App\Http\Controllers\EtudiantController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', [EtudiantController::class, 'registerForm']);
Route::post('/register/traitement', [EtudiantController::class, 'enregistrement']);
Route::get('/liste', [EtudiantController::class, 'afficherListe']);

Route::get('/etudiants/{id}', [EtudiantController::class, 'modifier'])->name('modifiers');
// Route::put('/modifier/{id}update', [EtudiantController::class, 'modifierListe'])->name('modifier');
Route::get('/supprimer/{id}', [EtudiantController::class, 'supprimerListe'])->name('supprimer');
Route::get('/detail/{id}', [EtudiantController::class, 'detailListe'])->name('detail');

Route::put('/etudiants/{id}/update', [EtudiantController::class, 'update'])->name('modif');
