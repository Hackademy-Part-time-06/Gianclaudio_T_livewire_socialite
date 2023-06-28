<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TaskController;
//use Illuminate\Foundation\Auth\User as AuthUser;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\User;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialiteController;



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

// Route::get('/libri', [BookController::class, 'index'])->name('books.index');
// Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
// Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
// Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');

Route::resource('books', BookController::class);
Route::post('/search', [BookController::class, 'search'])->name('search');

Route::get('/categoria', [CategoryController::class, 'index'])->name('categorys.index');
Route::get('/categoria/crea', [CategoryController::class, 'create'])->name('categorys.create');
Route::post('/categoria/salva', [CategoryController::class, 'store'])->name('categorys.store');
Route::get('/categoria/{category}/dettagli', [CategoryController::class, 'show'])->name('categorys.show');

Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])->name('books.edit');
Route::put('/libri/{book}/aggiorna', [BookController::class, 'update'])->name('books.update');
Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::resource('authors', AuthorController::class);

route::get('/livewire', [TaskController::class, 'index'])->name('livewire.index');
route::get('/livewire/crea', [TaskController::class, 'create'])->name('livewire.create');
Route::get('/livewire/{task}/modifica', [TaskController::class, 'edit'])->name('livewire.edit');

Route::get('/auth/redirect', function () {
  return Socialite::driver('github')->redirect();
})->name('socialite.login');

Route::get('/auth/callback', function () {
  $user = Socialite::driver('github')->user();
  dd($user);
  if ($user) {
    Auth::login($user);
  } 
  return redirect('/dashboard');
});

//Route::get('login/github', [SocialiteController::class, 'login'])->name('socialite.login');
//Route::get('login/github/callback', [SocialiteController::class, 'callback']);

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
