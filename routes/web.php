<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ArticleController;

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
Route::middleware(['auth'])->group(function(){


Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');

Route::get('/categoria', [CategoryController::class, 'index'])->name('categorys.index');
Route::get('/categoria/crea', [CategoryController::class, 'create'])->name('categorys.create');
Route::post('/categoria/salva', [CategoryController::class, 'store'])->name('categorys.store');
Route::get('/categoria/{category}/dettagli', [CategoryController::class, 'show'])->name('categorys.show');

});


