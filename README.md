# Lab11_PHP_CI

## Praktikum 11

- Nama : Satria Dimas Permana
- Kelas : TI.20.B2
- NIM : 312010450

### Persiapan

- Download kode file codeigniter 4 dari website resminya. Kemudian di extract pada folder /laragon/www/Lab11Web.
- Kemudian aktifkan extension yang di butuhkan untuk menjalankan codeigniter 4 melalui php.ini
  ![2021-06-15_084032](https://user-images.githubusercontent.com/50513551/121985469-fc947480-cdbe-11eb-804f-602f572667e5.png)

### Menjalankan codeigniter

- Buka terminal pada xampp dan masuk ke folder codeigniter
- Kemudian jalankan perintah php spark server
- Lalu akses http://localhost:8080
  ![welcome](https://user-images.githubusercontent.com/50513551/121985580-382f3e80-cdbf-11eb-8479-7ee77dd36e57.png)

### Membuat routes baru

- Membuat routes baru di file app/config/routes.php
- Jika baru membuat routesnya saja, maka jika di akses hasilnya not found, di karenakan belum ada isinya di halaman tersebut.
  ![about](https://user-images.githubusercontent.com/50513551/121985884-cacfdd80-cdbf-11eb-8218-d5a237543269.png)
- Kemudian untuk mengisi halaman about bisa langsung melalui contoller.
  ![halaman about](https://user-images.githubusercontent.com/50513551/121985940-e3d88e80-cdbf-11eb-8af5-0bcbd8026c79.png)
- Tampilan halaman about yang sudah di sesuaikan.
- ![image](https://user-images.githubusercontent.com/20396585/172055776-ea585efc-50ce-4911-a3a6-edbf0224d112.png)

- Tampilan halaman kontak.
- ![image](https://user-images.githubusercontent.com/20396585/172055819-7fb94765-3f21-4412-aeef-a188fe2d163b.png)

## Praktikum 13 | Membuat Halaman Login

### Persiapan | Membuat table user login

- Membuat table user pada database lab_ci4
  ![image](https://user-images.githubusercontent.com/20396585/172055910-cb850499-98bd-406e-b858-838efcabf43e.png)

### Membuat halaman login

- Membuat model user untuk memproses data login. Membuat file baru pada folder app/Models dengan nama UserModel.php
- Selanjutnya buat controller baru dengan nama User.php pada folder app/Controllers. Lalu tambahkan method index() untuk menampilkan daftar user dan method login() untuk memproses login.
- Selanjutnya membuat view login atau tampilan halaman login pada folder app/views/user dengan nama login.php.
- Untuk ujicoba modul login kita perlu membuat dummy user dan password, maka di buat dengan menggunakan Database Seeder. Pada CLI jalankan perintah "php spark make:seeder UserSeeder". Kemudian edit file /app/Database/Seeds/UserSeeder.php untuk memasukan user dan password loginnya.
- Setelah itu kembali ke CLI dan jalankan perintah "php spark db:seed UserSeeder".
- Coba akses halaman loginnya http://localhost:8080/user/login
  ![halaman login](https://user-images.githubusercontent.com/50513551/123499482-66cfd380-d661-11eb-8c1e-838512f26648.png)

### Menambahkan auth filter

Menambahkan auth filter untuk halaman admin/artikel. Sehingga jika akan mengakses admin/artikel akan muncul halaman login terlebih dahulu.

- Buat file dengan nama Auth.php pada folder app/Filters.
- Selanjutnya tambahkan class auth pada app/Config/Filters.php
- Kemudian edit app/Config/Routes.php dan tambahkan filter auth.
- Setelah itu di coba akses halaman admin/artikel. Maka akan muncul halaman admin.

### Menambahkan fungsi logout

- Tambahkan method logout pada Contoller user.
