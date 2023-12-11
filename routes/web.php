<?php
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\UeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/apprenants',[ApprenantController::class, "index"]);
Route::get('/matiere',[MatiereController::class, "index"]);
Route::get('/note',[NoteController::class, "index"]);
Route::get('/ue',[UeController::class, "index"]);
Route::get('/professeur',[ProfesseurController::class, "index"]);