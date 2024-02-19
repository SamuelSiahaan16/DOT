<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Project

Proyek ini bertujuan untuk membuat sebuah aplikasi web sederhana untuk manajemen toko  menggunakan Laravel 8. Aplikasi ini akan memiliki fitur autentikasi untuk admin, kemampuan untuk mengelola data dari dua tabel yang terhubung (produk dan kategori), serta menyediakan API untuk mengakses data produk dan kategori melalui permintaan HTTP.

## Design Database

![WhatsApp Image 2024-02-19 at 7 57 44 PM](https://github.com/SamuelSiahaan16/DOT/assets/91043243/70d785e4-de83-4fa9-ac26-5cdc3154ac17)

## Screenshoot

Gambar()

## Cara Penggunaan

1. Clone The Github repository, ganti file .env.example menjadi .env
2. Sesuaikan data DB di .env dengan environment di dalam local sendiri
3. ketik "php artisan migrate:fresh --seed" pada terminal, ketik juga "composer update" pada terminal
4. setelah itu jalankan menggunakan "php artisan serve"

## Data

Data Login :
username : admin@dot.co.id
password : password

## API

Data Api :

### Untuk Melihat Barang
http://127.0.0.1:8000/api/barang
### Untuk Mencari Barang
http://127.0.0.1:8000/api/barang/{id}

### Untuk Melihat Kategori Barang
http://127.0.0.1:8000/api/kategori
### Untuk Mencari Kategori Barang
http://127.0.0.1:8000/api/kategori/{id}


