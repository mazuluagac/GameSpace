<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GamesControllers;

Route::get('/games',[GamesControllers::class,'index'])->name('games.index');
Route::post('/games',[GamesControllers::class,'store'])->name('games.store');
Route::delete('/games/{id}',[GamesControllers::class,'destroy'])->name('games.destroy');
Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
Route::get('/games/{id}',[GamesControllers::class,'edit'])->name('games.edit');

Route::get('/games/create', [GamesControllers::class, 'create'])->name('games.create');


Route::get('/', function () {
    return view('welcome');
});
