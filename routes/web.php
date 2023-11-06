<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GamesControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/games',[GamesControllers::class,'index'])->name('games.index');
Route::post('/games',[GamesControllers::class,'store'])->name('games.store');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::delete('/games/{id}',[GamesControllers::class,'destroy'])->name('games.destroy');
Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
Route::get('/games/create', [GamesControllers::class, 'create'])->name('games.create');
Route::post('/games', [GamesControllers::class, 'store'])->name('games.store');
Route::get('/games/{id}',[GamesControllers::class,'edit'])->name('games.edit');


Route::get('/', function () {
    return view('index');
});