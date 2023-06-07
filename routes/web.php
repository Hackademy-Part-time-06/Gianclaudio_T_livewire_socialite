<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Http;

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
})->name('index');

Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');

Route::get('/categoria', [CategoryController::class, 'index'])->name('categorys.index');
Route::get('/categoria/crea', [CategoryController::class, 'create'])->name('categorys.create');
Route::post('/categoria/salva', [CategoryController::class, 'store'])->name('categorys.store');
Route::get('/categoria/{category}/dettagli', [CategoryController::class, 'show'])->name('categorys.show');

Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])->name('books.edit');
Route::put('/libri/{book}/aggiorna', [BookController::class, 'update'])->name('books.update');
Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::resource('authors', AuthorController::class);



//Chiamata API

Route::get('/api', function () {
    $genres = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
    return view('api.api', ['genres' => $genres['data']]);
});
Route::get('/anime/list/genre/{genre_id}/{genre_name}', function ($genre_id, $genre_name) {
    $animes = Http::get('https://api.jikan.moe/v4/anime', [
        'genres' => $genre_id
    ])->json();
    return view('api.list', ['animes' => $animes['data'], 'genre_name' => $genre_name]);
})->name('anime.list');
    
