---
sidebar_position: 1
---

# Installation

1. Install [skijasi](https://github.com/nadzorservera-indonesia/skijasi) and [skijasi-post-module](https://github.com/nadzorservera-indonesia/skijasi-post-module). Setelah itu, Anda dapat memasukkan paket Skijasi dengan perintah berikut.

```
composer require skijasi/post-theme
```

2. Jalankan perintah berikut.
```
npm install
```

3. Jalankan perintah berikut untuk mengatur `skijasi-content`.

```
php artisan skijasi-content:setup
```

4. Jalankan perintah berikut untuk memigrasi tabel `skijasi-content`.

```
php artisan migrate
```

5. Jalankan perintah berikut.

```
php artisan skijasi-post-theme:setup
```
