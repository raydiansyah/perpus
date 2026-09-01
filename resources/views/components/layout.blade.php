<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Admin Dashboard' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            brand: {
                                50: '#eff6ff',
                                100: '#dbeafe',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8'
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="bg-slate-100 text-slate-800 antialiased">
        <div class="min-h-screen">
            <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur-xl">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-4">
                        <button id="menuToggle" class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-600 transition hover:bg-slate-100 lg:hidden" aria-label="Toggle menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-600 text-lg font-bold text-white shadow-sm shadow-brand-500/30">
                                A
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-[0.2em] text-slate-400">Admin</p>
                                <h1 class="text-lg font-bold text-slate-900">Angkasapura</h1>
                            </div>
                        </div>
                    </div>

                    <nav class="hidden items-center gap-2 lg:flex">
                        <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Dashboard</a>
                        <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Orders</a>
                        <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Customers</a>

                        <div class="relative group">
                            <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">
                                Library
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div class="absolute left-0 top-full pt-2 opacity-0 invisible transition duration-200 group-hover:visible group-hover:opacity-100">
                                <div class="min-w-[200px] rounded-xl border border-slate-200 bg-white p-2 shadow-lg">
                                    <a href="#" class="block rounded-lg px-3 py-2 text-sm text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Book Category</a>
                                    <a href="#" class="block rounded-lg px-3 py-2 text-sm text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Book</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Reports</a>
                        <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-slate-900">Settings</a>
                    </nav>

                    <div class="flex items-center gap-3">
                        <div class="hidden items-center gap-2 rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 sm:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <input type="text" placeholder="Search..." class="w-32 border-0 bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400 sm:w-40" />
                        </div>

                        <button class="relative inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-600 transition hover:bg-slate-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 11-6 0m6 0H9" />
                            </svg>
                            <span class="absolute -right-1 -top-1 inline-flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-red-500 px-1 text-[10px] font-bold text-white">3</span>
                        </button>

                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-2 py-1.5">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80" alt="User avatar" class="h-9 w-9 rounded-full object-cover" />
                            <div class="hidden text-left sm:block">
                                <p class="text-sm font-semibold text-slate-900">Admin User</p>
                                <p class="text-xs text-slate-500">Super Admin</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="hidden h-4 w-4 text-slate-500 sm:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </header>

            <div id="mobileMenu" class="hidden border-b border-slate-200 bg-white lg:hidden">
                <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6">
                    <div class="space-y-2">
                        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Dashboard</a>
                        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Orders</a>
                        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Customers</a>

                        <div>
                            <button type="button" class="library-mobile-toggle flex w-full items-center justify-between rounded-lg px-3 py-2 text-left text-sm font-medium text-slate-700 hover:bg-slate-100" aria-expanded="false">
                                Library
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="library-mobile-menu hidden mt-1 space-y-1 rounded-lg bg-slate-50 p-2">
                                <a href="#" class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-white">Book Category</a>
                                <a href="#" class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-white">Book</a>
                            </div>
                        </div>

                        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Reports</a>
                        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Settings</a>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
        </div>

        <script>
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');

            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            document.querySelectorAll('.library-mobile-toggle').forEach((button) => {
                button.addEventListener('click', () => {
                    const menu = button.nextElementSibling;
                    const expanded = button.getAttribute('aria-expanded') === 'true';

                    button.setAttribute('aria-expanded', String(!expanded));
                    menu.classList.toggle('hidden');
                    button.querySelector('svg').classList.toggle('rotate-180');
                });
            });
        </script>
    </body>
</html>
