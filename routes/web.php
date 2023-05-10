<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommicsController;
use Faker\Guesser\Name;

Route::get('/', [AuthController::class, 'index'])->name('home');

Route::prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('loginVeri', [AuthController::class, 'loginVerify'])->name('login.verify');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('registerVeri', [AuthController::class, 'registerVerify'])->name('register.verify');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/comics/', [CommicsController::class, 'index'])->name('comics.index');
    Route::get('/comics/{id}', [CommicsController::class, 'show'])->name('comics.show');
});
