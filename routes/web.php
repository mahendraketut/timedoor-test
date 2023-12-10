<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
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

Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/authors', [AuthorController::class, 'index'])->name('author.index');
Route::get('/getBook/{author}', [RatingController::class, 'getBook'])->name('rating.getBook');
Route::resource('rating', RatingController::class);
