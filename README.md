# Tugas Rutin 11 — E-Commerce Database & Secure Authentication

Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web. Aplikasi menggunakan Laravel untuk menerapkan database e-commerce, relasi antartabel, autentikasi pengguna, serta pembatasan akses berdasarkan role.

## Deskripsi Proyek

Aplikasi ini merupakan dasar sistem e-commerce yang mengelola kategori produk, data produk, keranjang belanja, pesanan, dan ulasan. Sistem dilengkapi fitur login dan register serta pengaturan hak akses untuk Admin, Editor, dan User.

## Fitur

* Autentikasi pengguna menggunakan Laravel Breeze.
* Login, register, dan logout.
* Tiga role pengguna: Admin, Editor, dan User.
* Database dengan foreign key dan relasi antartabel.
* Seeder dan factory untuk data pengujian.
* 5 kategori dan 50 data produk.
* Model Eloquent beserta relasi dan query scope.
* Middleware untuk membatasi akses berdasarkan role.
* Product Policy untuk mengatur izin membuat, mengubah, dan menghapus produk.
* CRUD produk.
* Dokumentasi lima query Tinker.

## Teknologi yang Digunakan

* PHP
* Laravel
* MySQL
* Laravel Breeze
* Blade
* Tailwind CSS
* Vite
* Git dan GitHub

## Struktur Database

| Tabel         | Fungsi                           |
| ------------- | -------------------------------- |
| `users`       | Menyimpan data pengguna dan role |
| `categories`  | Menyimpan kategori produk        |
| `products`    | Menyimpan data produk            |
| `carts`       | Menyimpan keranjang pengguna     |
| `cart_items`  | Menyimpan produk dalam keranjang |
| `orders`      | Menyimpan data pesanan           |
| `order_items` | Menyimpan detail produk pesanan  |
| `reviews`     | Menyimpan ulasan produk          |

Relasi database menggunakan Eloquent ORM dan foreign key untuk menjaga hubungan antartabel.

## Hak Akses Pengguna

| Fitur                 | Admin | Editor | User |
| --------------------- | :---: | :----: | :--: |
| Melihat produk        |   ✓   |    ✓   |   ✓  |
| Menambah produk       |   ✓   |    ✓   |   —  |
| Mengubah produk       |   ✓   |    ✓   |   —  |
| Menghapus produk      |   ✓   |    —   |   —  |
| Melihat detail produk |   ✓   |    ✓   |   ✓  |

Akses dibatasi menggunakan middleware dan Product Policy.

## Akun Pengujian

Akun berikut tersedia setelah menjalankan seeder:

| Role   | Email                | Password   |
| ------ | -------------------- | ---------- |
| Admin  | `admin@example.com`  | `password` |
| Editor | `editor@example.com` | `password` |

Akun User juga dibuat oleh seeder. Untuk pengujian, gunakan akun User yang tersedia pada database atau lakukan registrasi melalui halaman aplikasi.

**Catatan:** Akun di atas hanya untuk pengujian lokal, bukan untuk penggunaan di lingkungan produksi.

## Cara Menjalankan Proyek

### 1. Clone repository

```bash
git clone https://github.com/aulia-11/TugasWeb-Pertemuan11-EcommerceAuth.git
cd TugasWeb-Pertemuan11-EcommerceAuth
```

### 2. Instal dependensi

```bash
composer install
npm install
```

### 3. Siapkan file environment

```bash
cp .env.example .env
php artisan key:generate
```

Pada Windows PowerShell, jika perintah `cp` tidak tersedia, gunakan:

```powershell
Copy-Item .env.example .env
```

### 4. Konfigurasi database

Buat database MySQL bernama `ecommerce_p11`, lalu sesuaikan pengaturan database di file `.env`.

Contoh konfigurasi lokal:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_p11
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan username dan password dengan konfigurasi MySQL masing-masing.

### 5. Migrasi dan isi database

```bash
php artisan migrate --seed
```

Perintah ini menjalankan migrasi dan seeder untuk membuat tabel serta data awal.

### 6. Jalankan aplikasi

Buka terminal pertama:

```bash
php artisan serve
```

Buka terminal kedua:

```bash
npm run dev
```

Kemudian buka alamat yang ditampilkan oleh Laravel, biasanya `http://127.0.0.1:8000`.

## Dokumentasi Tinker

Dokumentasi lima query Tinker tersedia di folder [`Dokumentasi_P11_Aulia`](Dokumentasi_P11_Aulia/).

Dokumentasi tersebut mencakup:

1. Menghitung jumlah produk pada setiap kategori.
2. Menampilkan produk beserta kategorinya.
3. Menampilkan produk berdasarkan kategori.
4. Melihat kategori dari suatu produk.
5. Menghitung produk aktif menggunakan query scope.

## Repository

GitHub: https://github.com/aulia-11/TugasWeb-Pertemuan11-EcommerceAuth

---

**Tugas Rutin 11 — Pemrograman Web**
Dikembangkan sebagai proyek pembelajaran Laravel dan MySQL.
