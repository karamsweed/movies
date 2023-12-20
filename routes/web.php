<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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
Route::get('/moves', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/moves/create', [MoviesController::class, 'create'])->name('movies.create');
Route::post('/moves', [MoviesController::class, 'store'])->name('movies.store');
// Route::get('/create', [MoviesController::class, 'create'])->name('create');
Route::get('/moves/{id}/edit', [MoviesController::class,'edit'])->name('movies.edit');
Route::patch('/moves/{id}', [MoviesController::class,'update'])->name('movies.update');
Route::delete('/moves/{id}', [MoviesController::class,'destroy'])->name('movies.destroy');


Route::get('/create', [MoviesController::class, 'create'])->name('create');
Route::get('/index', [MoviesController::class, 'index'])->name('index');

