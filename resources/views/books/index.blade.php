{{-- View: books.index; Purpose: List seeded books and expose CRUD actions; Used by: BooksController@index; Dependencies: Layout component, Book collection, routes, flash session; Public functions: none; Side effects: Sends delete requests to books.destroy. --}}
<x-layout title="Books">
    <div class="space-y-6">
        <div class="flex flex-col gap-4 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-brand-600">Library</p>
                <h2 class="mt-1 text-2xl font-bold text-slate-900">Books</h2>
            </div>

            <a href="{{ route('books.create') }}" class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm shadow-brand-500/30 transition hover:bg-brand-700">
                + Add Book
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">No</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Author</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Year</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        @forelse ($books as $book)
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 text-sm text-slate-700">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900">{{ $book['title'] }}</p>
                                        <p class="text-xs text-slate-500">{{ Str::limit($book['description'], 40) }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-700">{{ $book['author'] }}</td>
                                <td class="px-6 py-4 text-sm text-slate-700">{{ $book->category->name ?? '-' }}</td>
                                <td class="px-6 py-4 text-sm text-slate-700">{{ $book['year'] }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('books.edit', $book['id']) }}" class="rounded-lg bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-600">
                                            Edit
                                        </a>

                                        <form action="{{ route('books.destroy', $book['id']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-lg bg-red-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-red-600">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-sm text-slate-500">
                                    Data buku belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
