# 📚 Sistem Manajemen Perpustakaan (Perpus App)

Aplikasi web manajemen data buku dan perpustakaan sederhana berbasis **Laravel 12** yang dilengkapi dengan sistem autentikasi, manajemen kategori relasional, dan kontrol akses pengguna (*Role Admin vs Regular User*).

---

## 🚀 Fitur Utama

- **Autentikasi Pengguna**: Login, Register, dan Logout dengan session aman.
- **Kontrol Hak Akses (*Role-Based Access*)**:
  - 👑 **Admin (`isadmin = true`)**: Akses penuh CRUD (Tambah, Lihat, Edit, Hapus Buku) dan Admin Dashboard.
  - 👤 **User Biasa (`isadmin = false`)**: Akses membaca daftar buku dan detail buku.
- **Manajemen Buku (CRUD)**:
  - Tambah buku baru dengan validasi input & pesan error berbahasa Indonesia.
  - Relasi buku ke tabel kategori (`belongsTo`).
  - Edit & update data buku.
  - Hapus buku dengan konfirmasi.
- **Tampilan Modern & Responsif**: Menggunakan Tailwind CSS, komponen Blade reusable, dan dropdown profil interaktif.

---

## 🛠️ Prasyarat Sistem (*Prerequisites*)

Pastikan komputer Anda telah terinstal:
- **PHP** >= 8.2 (dengan ekstensi: `pdo`, `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`)
- **Composer** >= 2.x
- **MySQL / MariaDB** (atau menggunakan Laravel Herd / Laragon / XAMPP)
- **Git**

---

## 📥 Panduan Instalasi & Menjalankan Project

Ikuti langkah-langkah di bawah ini untuk meng-clone dan menjalankan project secara lokal:

### 1. Clone Repository
```bash
git clone <URL_REPOSITORY_ANDA> perpus
cd perpus
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

Buka file `.env` dan sesuaikan koneksi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpus
DB_USERNAME=root
DB_PASSWORD=
```
> **Catatan**: Pastikan database dengan nama `perpus` sudah dibuat di MySQL Anda:
> ```sql
> CREATE DATABASE perpus;
> ```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Migrasi & Seeder Database
Perintah ini akan membuat semua tabel yang diperlukan serta mengisi data kategori awal dan akun demo:
```bash
php artisan migrate --seed
```

### 6. Jalankan Server Lokal
Jalankan development server Laravel:
```bash
php artisan serve
```

Aplikasi dapat diakses melalui browser di: **`http://127.0.0.1:8000`** atau domain lokal Laravel Herd/Valet (contoh: `http://perpus.test`).

---

## 🔐 Akun Demo Bawaan (Hasil Seeder)

Setelah menjalankan `php artisan migrate --seed`, Anda dapat langsung login menggunakan akun berikut:

| Role | Email | Password | Hak Akses |
| :--- | :--- | :--- | :--- |
| **Super Admin** | `admin@perpus.test` | `password` | Akses penuh Create, Read, Update, Delete & Dashboard Admin |
| **User Biasa** | `user@perpus.test` | `password` | Hanya dapat melihat daftar dan detail buku |

> Anda juga dapat mendaftarkan akun baru melalui menu **Register** (secara default akan menjadi *User Biasa*).

---

## 🧭 Struktur Rute Utama

| Method | URI | Nama Route | Middleware | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| `GET` | `/login` | `login` | `guest` | Form login |
| `POST` | `/login` | - | `guest` | Proses login |
| `GET` | `/register` | `register` | `guest` | Form pendaftaran akun |
| `POST` | `/register` | - | `guest` | Proses registrasi |
| `POST` | `/logout` | `logout` | `auth` | Proses keluar akun |
| `GET` | `/books` | `books.index` | `auth` | Daftar seluruh buku |
| `GET` | `/books/{book}` | `books.show` | `auth` | Detail satu buku |
| `GET` | `/books/create` | `books.create` | `auth, admin` | Form tambah buku |
| `POST` | `/books` | `books.store` | `auth, admin` | Simpan buku baru |
| `GET` | `/books/{book}/edit` | `books.edit` | `auth, admin` | Form edit buku |
| `PUT` | `/books/{book}` | `books.update` | `auth, admin` | Simpan perubahan buku |
| `DELETE` | `/books/{book}` | `books.destroy` | `auth, admin` | Hapus buku |

---

## 💡 Perintah Bermanfaat (*Useful Commands*)

- **Reset dan isi ulang database dari awal:**
  ```bash
  php artisan migrate:fresh --seed
  ```
- **Membersihkan seluruh cache (config, view, route):**
  ```bash
  php artisan optimize:clear
  ```
- **Melihat daftar rute yang aktif:**
  ```bash
  php artisan route:list
  ```

---

## 📄 Lisensi
Project ini dibuat untuk keperluan pembelajaran dan berlisensi di bawah [MIT License](LICENSE).
