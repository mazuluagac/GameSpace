<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GamesControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReportController;


//--------------- ADMINISTRADORES ---------------
Route::middleware(['auth' , 'roles:administrador'])->group(function () {
    // esta ruta solo la puede ver el administrador
    // puede ser un controlador o una vista
    Route::get('/admin', function () {
        return view('admin');
    });
    Route::get('/games',[GamesControllers::class,'index'])->name('games.index');
    Route::post('/games/store',[GamesControllers::class,'store'])->name('games.store');
    Route::delete('/games/{id}',[GamesControllers::class,'destroy'])->name('games.destroy');
    Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
    Route::get('/games/create', [GamesControllers::class, 'create'])->name('games.create');
    Route::get('/games/{id}',[GamesControllers::class,'edit'])->name('games.edit');

   
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    //Route::get('/users/download-excel', [GamesControllers::class,'generarExcel'])->name('users.descargar-excel');
    //Route::get('/users/download-pdf',[GamesController::class,'generarPDF'])->name('users.descargar-pdf');

    Route::get('/users/download-excel', [ReportController::class, 'generateExcel'])->name('users.descargar-excel');
    Route::get('/users/download-pdf', [ReportController::class, 'generatePDF'])->name('users.descargar-pdf');
    
});

//------------ MODERADORES -------------------
Route::middleware(['auth', 'roles:moderador'])->group(function () {
    // esta ruta solo la puede ver el moderador
    // puede ser un controlador o una vista
    Route::get('/mod', function () {
        return view('mod');
    });
    Route::post('/games',[GamesControllers::class,'store'])->name('games.store');
    Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
    Route::delete('/games/{id}',[GamesControllers::class,'destroy'])->name('games.destroy');
    Route::put('/games/{id}',[GamesControllers::class,'update'])->name('games.update');
    Route::get('/games/create', [GamesControllers::class, 'create'])->name('games.create');
    Route::get('/games/{id}',[GamesControllers::class,'edit'])->name('games.edit');

});

// RUTAS PUBLICAS - USUARIOS
Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/juego', [JuegoController::class, 'index'])->name('juego');
Route::get('/games',[GamesControllers::class,'index'])->name('games.index');
Route::get('/games/download-excel', [GamesControllers::class,'generarExcel'])->name('games.descargar-excel');
Route::get('/games/download-pdf',[GamesController::class,'generarPDF'])->name('games.descargar-pdf');
Route::get('/search/search', [GameController::class,'search'])->name('search.search');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Auth::routes();


