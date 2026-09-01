{{-- View: books.create; Purpose: Render the validated book creation form; Used by: BooksController@create/store; Dependencies: Layout component, routes, session errors; Public functions: none; Side effects: Sends POST data to books.store. --}}
<x-layout title="Tambah Buku">
    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-brand-600">Master Data</p>
                <h2 class="mt-1 text-2xl font-bold text-slate-900">Tambah Buku Baru</h2>
            </div>
            <a href="{{ route('books.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                Kembali
            </a>
        </div>

        <form action="{{ route('books.store') }}" method="POST" class="grid gap-5 md:grid-cols-2">
            @csrf
            @if ($errors->any())
                <div class="md:col-span-2 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">Periksa kembali input buku.</div>
            @endif
            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Judul Buku</label>
                <input type="text" name="title" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-brand-500 focus:bg-white" placeholder="Masukkan judul buku" />
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Penulis</label>
                <input type="text" name="author" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-brand-500 focus:bg-white" placeholder="Masukkan nama penulis" />
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Kategori</label>
                <input type="text" name="category" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-brand-500 focus:bg-white" placeholder="Contoh: Web Development" />
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Tahun Terbit</label>
                <input type="number" name="year" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-brand-500 focus:bg-white" placeholder="2025" />
            </div>

            <div class="space-y-2 md:col-span-2">
                <label class="block text-sm font-medium text-slate-700">Deskripsi</label>
                <textarea name="description" rows="5" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-brand-500 focus:bg-white" placeholder="Masukkan deskripsi buku"></textarea>
            </div>

            <div class="md:col-span-2 flex items-center justify-end gap-3 pt-2">
                <button type="reset" class="rounded-lg border border-slate-200 px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                    Reset
                </button>
                <button type="submit" class="rounded-lg bg-brand-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-brand-500/30 transition hover:bg-brand-700">
                    Simpan Buku
                </button>
            </div>
        </form>
    </div>
</x-layout>
