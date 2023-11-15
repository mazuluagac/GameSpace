<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GamesControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


//--------------- ADMINISTRADORES ---------------
Route::middleware(['auth' , 'role:administrador'])->group(function () {
    // esta ruta solo la puede ver el administrador
    // puede ser un controlador o una vista
    Route::get('/admin', function () {
        return view('admin');
    });
    Route::post('/games/store',[GamesControllers::class,'store'])->name('games.store');
    Route::delete('/games/{id}',[GamesControllers::class,'destroy'])->name('games.destroy');
    Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
    Route::get('/games/create', [GamesControllers::class, 'create'])->name('games.create');
    Route::get('/games/{id}',[GamesControllers::class,'edit'])->name('games.edit');
    Route::get('/games/export-excel', 'GameController@exportExcel')->name('games.export-excel');
    Route::get('download-pdf',[GamesController::class,'exportPDF'])->name('games.export-pdf');
});

//------------ MODERADORES -------------------
Route::middleware(['auth', 'role:moderador'])->group(function () {
    // esta ruta solo la puede ver el moderador
    // puede ser un controlador o una vista
    Route::get('/mod', function () {
        return view('mod');
    });
    Route::post('/games',[GamesControllers::class,'store'])->name('games.store');
    Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
    Route::get('/games/export-excel', 'GameController@exportExcel')->name('games.export-excel');
    Route::get('download-pdf',[GamesController::class,'exportPDF'])->name('games.export-pdf');
});

// RUTAS PUBLICAS - USUARIOS
Route::get('/', function () {
    return view('home');
});
Route::get('/games',[GamesControllers::class,'index'])->name('games.index');
Route::get('/search', 'GameController@search')->name('search');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{user}', 'UserController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'UserController@update')->name('users.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
