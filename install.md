<a href="https://ibb.co/8rQHMZr"><img src="https://i.ibb.co/8rQHMZr/laravel2.jpg" alt="laravel2" border="0"></a> 
<a href="https://ibb.co/12K7g2Y"><img src="https://i.ibb.co/12K7g2Y/laravel1.png" alt="laravel1" border="0"></a>


# Crud Laravel 9

Aplikasi ini adalah aplikasi CRUD + Search sederhana yang dibuat untuk kebutukan pembelajaran dan penggunakan bahan UJIKOM Taruna/Taruna XII-RPL SMK Negeri Kasomalang. Aplikasi ini menggukan basis PHP 8 dan Laravel 9 dan Livewire 2, bisa ikuti cara-cara berikut ini.

## Perlengkapan 
Xampp : (<a href="https://www.apachefriends.org/download.html">Download disini</a>)<br>
Composer : (<a href="https://getcomposer.org/download/">Download disini</a>)<br>
NPM : (<a href="https://nodejs.org/en/download/">Download disini</a>)<br>
GIT : (<a href="https://git-scm.com/downloads">Download disini</a>)<br> 
VS Code : (<a href="https://code.visualstudio.com/download">Download disini</a>)<br>  


## Clone

1.Clone

```bash
https://github.com/dennsoe/crud-laravel9-rpl.git
```

```bash
cd crud-laravel9-rpl
```

2.Install Dependensi

```bash
composer install
```

```bash
npm install
```

```bash
npm run dev
```

3.Clone Devatar

Devatar adalah avatar alfabet yang bisa digunakan untuk default aplikasi kita. Repositori defatar bisa dilihat [disini](https://github.com/abinoval/defatar).

Kita akan clone defatar ke folder public di storage.

```bash
cd storage/app/public
```

```bash
git clone https://github.com/abinoval/defatar.git
```

Setelah itu, rename folder `defatar` menjadi `avatar`, bisa melalui CMD atau manual di file explorer, jika melalui CMD bisa jalankan perintah ini:

```bash
ren defatar avatar
```

Jika tidak bisa, maka rename manual saja.

4.Generate key dan copy .env.example

Sebelumnya, silakan kembali ke folder root lagi, bisa seperti ini:

```bash
cd ../../../
```

Setelah itu kita copy file .env.example dan rename filenya menjadi .env, bisa manual atau melalui CMD, jika melalui CMD, bisa jalankan perintah seperti ini:

```bash
cp .env.example .env
```

Jika tidak bisa, maka copy dan rename manual saja.

```bash
php artisan key:generate
```

5.Setting database dan filesystem

Silakan buat database, lalu ubah `DB_DATABASE` di file .env menyesuaikan nama database yang dibuat.

![.env file](https://i.ibb.co/Tc0P93Z/Screenshot-68.png)

Sesuaikan juga `host`, `port`, `username`, dan `password` jika belum sesuai.

Selanjutnya, jika discroll kebawah, maka akan ditemukan seperti ini:

![.env file](https://i.ibb.co/Y00YPzk/Screenshot-69.png)

Ubah `FILESYSTEM_DISK` tersebut dari `local` menjadi `public`.

6.Jalankan migration dan seeder

```bash
php artisan migrate:fresh --seed
```

7.Selesai

Aplikasi siap dibuka, silakan gunakan local environment kalian untuk membukanya, bisa menggunakan artisan serve atau menggunakan localhost dari xampp atau laragon.
