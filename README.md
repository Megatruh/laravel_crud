# Hasra Coffee Roastery - Inventory Management System

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![Filament](https://img.shields.io/badge/Filament-5.x-EBB308?style=for-the-badge&logo=laravel)
![ParrotOS](https://img.shields.io/badge/Developed%20on-Parrot%20OS-51ad28?style=for-the-badge&logo=parrotos)

Sistem manajemen inventori kopi sederhana yang dibangun untuk memenuhi tugas praktikum Pemrograman Web. Sistem ini dirancang khusus untuk **Hasra Coffee Roastery** guna memantau stok, varietas, dan proses pasca-panen kopi secara efisien.

## 🎯 Tujuan Proyek
1. **Digitalisasi Stok:** Menggantikan pencatatan manual stok kopi menjadi sistem berbasis database yang terpusat.
2. **Monitoring Real-time:** Memberikan visualisasi cepat mengenai status stok (aman/kritis) melalui dashboard statistik.
3. **Integritas Data:** Mengimplementasikan standarisasi data menggunakan *Enumeration* (Enum) untuk spesies dan proses kopi.
4. **Keamanan Data:** Menggunakan **ULID** (Universally Unique Lexicographically Sortable Identifier) sebagai Primary Key untuk menghindari ID enumeration yang mudah ditebak.

## 🚀 Fitur Utama
- **Dashboard Overview:** Statistik total koleksi dan jumlah stok kritis secara real-time.
- **Manajemen CRUD:** Operasi lengkap untuk data kopi (Create, Read, Update, Delete).
- **Conditional Styling:** Indikator warna dinamis untuk level stok dan jenis proses kopi (Wine, Honey, Natural, Wash).
- **Search & Filter:** Pencarian varietas dan filter berdasarkan spesies kopi.

## 💻 Tech Stack
- **Framework:** Laravel 12
- **Admin Panel:** Filament v5 (TALL Stack: Tailwind, Alpine.js, Laravel, Livewire)
- **Database:** MariaDB/MySQL
- **OS Environment:** Parrot OS

## 🛠️ Cara Menjalankan Project

Ikuti langkah-langkah berikut untuk menjalankan project ini di lingkungan lokal Anda:

### 1. Clone Repository
```bash
git clone [https://github.com/Megatruh/laravel_crud.git](https://github.com/Megatruh/laravel_crud.git)
cd laravel_crud

### 2. Instalasi Dependensi
```bash
composer install
npm install && npm run build

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate

### 4. Migrasi Database
```bash
php artisan migrate

### 5. Membuat User Admin
```bash
php artisan make:filament-user

### 6. Jalankan Server
```bash
php artisan serve
//Akses dashboard di: http://127.0.0.1:8000/admin



