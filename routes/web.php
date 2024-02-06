<?php

use App\Http\Controllers\AnimeApiController;
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

Route::get('/', [AnimeApiController::class, 'home'])->name('home');

Route::get('/anime', [AnimeApiController::class, 'index'])->name('anime.index');

Route::get('/anime/{id}', [AnimeApiController::class, 'show'])->name('anime.show');


