<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function (){
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::resources([
    'books' => BooksController::class,
]);

