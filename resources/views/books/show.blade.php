{{-- View: books.show; Purpose: Display one book record; Used by: BooksController@show; Dependencies: Layout component and $book; Public functions: none; Side effects: none. --}}
<x-layout title="Detail Buku">
    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm font-medium uppercase tracking-[0.2em] text-brand-600">Library</p>
        <h2 class="mt-1 text-2xl font-bold text-slate-900">{{ $book->title }}</h2>
        <dl class="mt-6 grid gap-4 sm:grid-cols-2">
            <div><dt class="text-sm text-slate-500">Penulis</dt><dd class="font-semibold text-slate-900">{{ $book->author }}</dd></div>
            <div><dt class="text-sm text-slate-500">Kategori</dt><dd class="font-semibold text-slate-900">{{ $book->category->name }}</dd></div>
            <div><dt class="text-sm text-slate-500">Tahun</dt><dd class="font-semibold text-slate-900">{{ $book->year }}</dd></div>
            <div class="sm:col-span-2"><dt class="text-sm text-slate-500">Deskripsi</dt><dd class="text-slate-700">{{ $book->description ?: 'Tidak ada deskripsi.' }}</dd></div>
        </dl>
        <a href="{{ route('books.index') }}" class="mt-6 inline-flex rounded-lg border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-50">Kembali</a>
    </div>
</x-layout>
