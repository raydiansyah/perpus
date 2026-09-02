<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Hanya untuk yang sudah login
Route::middleware('auth')->group(function (){
    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
    Route::get('books/{books}', [BooksController::class, 'show'])->name('books.show');
});

Route::middleware(['auth','admin'])->group(function(){
    //Jika sudah membuat fitur pages admin

    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');

    //Jika belum ada fitur admin, gunakan yang ada dulu
    /*Route::get('/books/create', function(){
        return redirect()->route('books.create');
    });*/

    Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
    Route::post('/books', [BooksController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('books.destroy');
});

