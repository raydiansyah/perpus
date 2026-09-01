<?php

namespace App\Http\Controllers;

use App\Oop\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $book = new Book('Mastering Laravel 12', 'Web Development');
        // return $book->theJournal();
        $books = [
            [
                'id' => 1,
                'title' => 'Mastering Laravel 12',
                'author' => 'John Doe',
                'category' => 'Web Development',
                'year' => 2025,
                'description' => 'Panduan lengkap untuk membangun aplikasi modern dengan Laravel 12.'
            ],
            [
                'id' => 2,
                'title' => 'PHP OOP Advanced',
                'author' => 'Jane Smith',
                'category' => 'Programming',
                'year' => 2024,
                'description' => 'Belajar konsep OOP PHP dengan studi kasus nyata.'
            ],
            [
                'id' => 3,
                'title' => 'Clean Code in Practice',
                'author' => 'Robert Martin',
                'category' => 'Software Engineering',
                'year' => 2023,
                'description' => 'Menulis kode yang rapi, efisien, dan mudah dipelihara.'
            ]
        ];

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
