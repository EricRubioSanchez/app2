<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\InserirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/



Route::apiResource('/',ArticlesController::class);

Route::get('/inserir', function () {return view('inserir');})->name('inserir');
Route::get('/eliminar', function () {return view('eliminar');})->name('eliminar');
Route::get('/modificar', function () {return view('modificar');})->name('modificar');

Route::post('inserir', [InserirController::class, 'store']);
Route::post('modificar', [InserirController::class, 'update']);
Route::post('eliminar', [InserirController::class, 'delete']);
 
Route::get('/dashboard',[ArticlesController::class,'show'])->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
