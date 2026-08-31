<?php

namespace App\Http\Controllers;

use App\Oop\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     echo 'ini kode otomatis di awal method';
    // }
    public function index()
    {
        //return "Halo nama saya Yoga";
        $book = new Book();
        return $book->getPenerbit();
    }

    // public function __destruct()
    // {
    //     return 'ini kode otomatis di akhir method';
    // }
}
