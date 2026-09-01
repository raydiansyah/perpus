<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Laravel</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="sticky top-0 z-30 flex h-16 w-full items-center justify-between border-b border-gray-200 bg-white px-4 md:px-6 dark:border-gray-800 dark:bg-gray-900">

  <!-- KIRI: Identitas & Navigasi Menu -->
  <div class="flex items-center gap-6 lg:gap-8">
    <!-- Logo Utama -->
    <a href="#" class="flex items-center gap-2 font-bold text-gray-900 dark:text-white">
      <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-600 font-black text-lg text-white">A</span>
      <span class="hidden text-base tracking-wide sm:block">AdminPanel</span>
    </a>

    <!-- Navigasi Utama -->
    <nav class="hidden items-center gap-1 text-sm font-medium md:flex">
      <!-- Menu 1: Dashboard -->
      <a href="#" class="rounded-lg px-3 py-2 text-gray-700 transition hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
        Dashboard
      </a>

      <!-- Menu 2: Library (Dropdown Trigger) -->
      <div class="group relative py-2">
        <button type="button" class="flex items-center gap-1 rounded-lg px-3 py-1.5 text-gray-700 transition hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
          Library
          <svg class="h-4 w-4 text-gray-400 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown Menu Library (Pure CSS Hover) -->
        <div class="pointer-events-none absolute left-0 mt-1 w-52 origin-top-left scale-95 rounded-xl border border-gray-200 bg-white py-1 opacity-0 shadow-lg transition-all duration-150 group-hover:pointer-events-auto group-hover:scale-100 group-hover:opacity-100 dark:border-gray-700 dark:bg-gray-800">
          <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            Books
          </a>
          <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
            Category Books
          </a>
        </div>
      </div>

      <!-- Menu 3: User -->
      <a href="#" class="rounded-lg px-3 py-2 text-gray-700 transition hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
        User
      </a>
    </nav>
  </div>

  <!-- KANAN: Notifikasi & Akun Pengguna -->
  <div class="flex items-center gap-4">
    <!-- Icon Notifikasi Aktif -->
    <button type="button" class="relative rounded-full p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-gray-200">
      <span class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 ring-2 ring-white dark:ring-gray-900"></span>
      <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
    </button>

    <div class="h-6 w-px bg-gray-200 dark:bg-gray-700"></div>

    <!-- Dropdown Profil (Pure CSS Hover) -->
    <div class="group relative py-2">
      <button type="button" class="flex items-center gap-2 rounded-lg p-1.5 transition hover:bg-gray-50 dark:hover:bg-gray-800">
        <!-- Avatar Inisial Nama -->
        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 text-sm font-semibold text-white shadow-sm">
          JD
        </div>
        <div class="hidden text-left lg:block">
          <p class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</p>
          <p class="text-2xs text-gray-400 dark:text-gray-500">Super Admin</p>
        </div>
        <svg class="hidden h-4 w-4 text-gray-400 transition-transform duration-200 group-hover:rotate-180 lg:block dark:text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>

      <!-- Panel Menu Profil -->
      <div class="pointer-events-none absolute right-0 mt-1 w-52 origin-top-right scale-95 rounded-xl border border-gray-200 bg-white py-1 opacity-0 shadow-lg transition-all duration-150 group-hover:pointer-events-auto group-hover:scale-100 group-hover:opacity-100 dark:border-gray-700 dark:bg-gray-800">
        <div class="border-b border-gray-100 px-4 py-2 dark:border-gray-700">
          <p class="truncate text-xs font-medium text-gray-900 dark:text-white">john.doe@example.com</p>
        </div>
        <div class="py-1">
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-gray-700/50">Profil Saya</a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-950/30">Keluar</a>
        </div>
      </div>
    </div>

  </div>
</header>

