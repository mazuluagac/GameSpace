<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GamesControllers;

Route::get('/',[GamesControllers::class,'index'])->name('authors.index');
Route::post('/authors',[GamesControllers::class,'store'])->name('authors.store');
Route::delete('/authors/{id}',[GamesControllers::class,'destroy'])->name('authors.destroy');
Route::put('/authors/{id}',[GamesControllers::class,'update'])->name('authors.update');
Route::get('/authors_edit/{id}',[GamesControllers::class,'edit'])->name('authors.edit');

Route::get('/', function () {
    return view('index');
});