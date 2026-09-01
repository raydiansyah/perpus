<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resources([
    'books' => BooksController::class,
]);
Route::get('/user/{name?}', function(?string $name = 'John'){
    return $name;
});
Route::get('/admin', function(){
    return 'ini halaman admin';
})->middleware('admin');
