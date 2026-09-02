<?php

namespace App\Http\Controllers;

use App\Oop\Book;
use App\Models\Book as DataBook;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
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
        $books = DataBook::query()->with('category')->latest()->get();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        DataBook::query()->create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBook $book)
    {
        $book->load('category');

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataBook $book)
    {
        $categories = Category::query()->orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataBook $book): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataBook $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }

    private function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            // 'category' => 'required',
            'category_id' => 'required|exists:categories,id',
            'year' => 'required|integer|min:1000|max:2100',
            'description' => 'nullable|string',
        ];
    }
}
