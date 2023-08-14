---
sidebar_position: 2
---

# Override View

Untuk mengganti tampilan, Anda dapat mengikuti langkah-langkah berikut:

- Anda harus menjalankan pengaturan tema terlebih dahulu dengan menjalankan perintah `php artisan skijasi-post-theme:setup`.

- Folder bernama `post-theme` akan dibuat di folder `resources/js/skijasi/theme`.

- Di dalam folder `post-theme`, akan ada folder bernama `pages`. Buat file .vue di dalam folder `pages` dengan nama yang sama dengan halaman. Misalnya, jika Anda ingin mengganti halaman `home`, Anda dapat membuat file `home.vue` di folder `pages`.
  
- Anda dapat melihat halaman yang tersedia yang dapat diganti di file `vendor/skijasi/post-theme/src/resources/app/pages/`.