<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('products', ProductController::class)->names('productos');

Route::resource('users', UserController::class)->except('create')->names('usuarios');

Route::post('iniciar', [AuthController::class, 'login'])->name('iniciar-sesion');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::view('register', "usuarios.create")->name('register');
Route::view('dashboard', "usuarios.dashboard")->middleware('auth')->name('dashboard');
Route::view('login', "login")->name('login');


