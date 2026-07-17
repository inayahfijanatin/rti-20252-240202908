# Framework Laravel

## Pendahuluan

Perkembangan teknologi web mendorong penggunaan framework dalam proses pengembangan aplikasi. Framework menyediakan struktur kerja yang terorganisasi sehingga pengembang dapat membangun aplikasi dengan lebih cepat, aman, dan mudah dipelihara. Salah satu framework PHP yang paling banyak digunakan saat ini adalah **Laravel**.

Laravel merupakan framework berbasis PHP yang menerapkan konsep **Model-View-Controller (MVC)**. Framework ini menyediakan berbagai fitur bawaan seperti routing, autentikasi, migration, ORM (Object Relational Mapping), middleware, template engine Blade, hingga sistem keamanan yang mendukung pengembangan aplikasi web modern.

Dalam penelitian ini, Laravel digunakan sebagai framework utama dalam pembangunan Sistem Absensi Guru Berbasis QR Code karena mampu menghasilkan aplikasi yang terstruktur, mudah dikembangkan, dan memiliki performa yang baik.

---

# Pengertian Framework

Framework adalah sekumpulan library, komponen, dan aturan yang digunakan sebagai kerangka kerja dalam proses pengembangan perangkat lunak. Framework membantu pengembang agar tidak perlu membangun aplikasi dari awal karena berbagai fungsi dasar telah tersedia.

Menurut Pressman (2019), framework merupakan struktur perangkat lunak yang menyediakan fondasi bagi pengembangan aplikasi sehingga proses pembangunan menjadi lebih cepat dan konsisten.

---

# Pengertian Laravel

Laravel adalah framework open source berbasis PHP yang dikembangkan oleh **Taylor Otwell** pada tahun 2011. Laravel dirancang untuk mempermudah pengembangan aplikasi web melalui sintaks yang sederhana, dokumentasi yang lengkap, serta berbagai fitur modern yang mendukung proses pengembangan.

Laravel mengimplementasikan pola arsitektur **Model-View-Controller (MVC)** sehingga logika program, tampilan antarmuka, dan pengelolaan data dipisahkan menjadi beberapa bagian yang saling terhubung.

---

# Sejarah Laravel

Laravel pertama kali diperkenalkan oleh **Taylor Otwell** pada tahun 2011 sebagai alternatif framework CodeIgniter yang pada saat itu masih memiliki beberapa keterbatasan, terutama dalam hal autentikasi dan pengelolaan aplikasi.

Seiring perkembangannya, Laravel menjadi salah satu framework PHP paling populer di dunia karena memiliki komunitas yang besar, dokumentasi yang lengkap, serta pembaruan versi yang rutin.

Saat ini Laravel banyak digunakan untuk membangun:

- Sistem Informasi
- Website Sekolah
- Sistem Akademik
- E-Commerce
- Aplikasi Inventaris
- Sistem Absensi
- Dashboard Monitoring
- Web Service dan REST API

---

# Arsitektur MVC (Model-View-Controller)

Laravel menggunakan arsitektur **Model-View-Controller (MVC)** yang bertujuan memisahkan logika aplikasi menjadi beberapa bagian.

### Model

Model berfungsi mengelola data dan berinteraksi dengan database menggunakan Eloquent ORM.

Contoh pada penelitian ini:

- Data Guru
- Data Absensi
- Data User

### View

View merupakan bagian yang menampilkan antarmuka kepada pengguna menggunakan Blade Template.

Contoh:

- Dashboard
- Login
- Data Guru
- Scan QR Code
- Laporan

### Controller

Controller bertugas menghubungkan Model dengan View serta mengatur proses bisnis aplikasi.

Contoh:

- GuruController
- DashboardController
- QrCodeController
- ScanController
- LaporanController

---

# Fitur Laravel

Laravel menyediakan berbagai fitur yang mempermudah pengembangan aplikasi.

## Routing

Routing digunakan untuk menghubungkan URL dengan controller.

Contoh:

```
Route::resource('guru', GuruController::class);
```

---

## Middleware

Middleware digunakan untuk melakukan penyaringan terhadap request sebelum diproses oleh aplikasi.

Contohnya:

- Authentication
- Guest
- Verified

---

## Eloquent ORM

Eloquent ORM mempermudah proses pengelolaan database tanpa harus menulis query SQL secara langsung.

Contoh:

```php
Guru::all();
Guru::find($id);
Guru::create($request->all());
```

---

## Migration

Migration digunakan untuk mengelola struktur database sehingga perubahan tabel dapat dilakukan secara sistematis.

Contoh perintah:

```bash
php artisan migrate
```

---

## Blade Template

Blade merupakan template engine bawaan Laravel yang digunakan untuk membuat tampilan aplikasi lebih rapi dan mudah dipelihara.

Contoh:

```blade
{{ $guru->nama_guru }}
```

---

## Authentication

Laravel menyediakan sistem autentikasi yang mendukung proses login, logout, manajemen pengguna, dan pembatasan hak akses.

---

# Kelebihan Laravel

Beberapa kelebihan Laravel antara lain:

- Menggunakan arsitektur MVC.
- Sintaks mudah dipahami.
- Dokumentasi lengkap.
- Memiliki sistem keamanan yang baik.
- Mendukung migration database.
- Mendukung Eloquent ORM.
- Memiliki Blade Template.
- Mudah dikembangkan.
- Memiliki komunitas yang besar.
- Mendukung REST API.

---

# Kekurangan Laravel

Selain memiliki berbagai kelebihan, Laravel juga memiliki beberapa kekurangan, yaitu:

- Membutuhkan spesifikasi server yang lebih tinggi dibandingkan PHP konvensional.
- Kurva pembelajaran relatif lebih panjang bagi pemula.
- Performa dapat menurun apabila aplikasi tidak dioptimalkan.
- Membutuhkan Composer sebagai dependency manager.

---

# Penerapan Laravel dalam Penelitian

Pada penelitian ini Laravel digunakan sebagai framework utama dalam membangun aplikasi Sistem Absensi Guru Berbasis QR Code.

Laravel digunakan untuk mengembangkan berbagai fitur, antara lain:

- Login pengguna
- Dashboard
- CRUD Data Guru
- Generate QR Code
- Scan QR Code
- Absensi Masuk
- Absensi Pulang
- Laporan Absensi
- Export PDF
- Manajemen Database

Selain itu, Laravel memanfaatkan Eloquent ORM untuk pengelolaan database MySQL serta Blade Template untuk membangun antarmuka aplikasi yang responsif.

---

# Kesimpulan

Laravel merupakan framework PHP modern yang menerapkan arsitektur Model-View-Controller (MVC) dan menyediakan berbagai fitur yang mendukung pengembangan aplikasi web secara cepat, aman, dan terstruktur. Penggunaan Laravel pada penelitian ini memberikan kemudahan dalam proses pengembangan Sistem Absensi Guru Berbasis QR Code, mulai dari pengelolaan data, autentikasi pengguna, hingga penyusunan laporan absensi.

---

# Referensi

1. Otwell, T. (2024). *Laravel Documentation*. https://laravel.com/docs
2. Pressman, R. S. (2019). *Software Engineering: A Practitioner's Approach*. McGraw-Hill.
3. Stauffer, M. (2019). *Laravel: Up and Running*. O'Reilly Media.
4. PHP Documentation. https://www.php.net/

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [qr-code.md](qr-code.md) | Teori QR Code |
| [php.md](php.md) | Teori PHP |
| [../02-literatur](../02-literatur/) | Studi Literatur |
| [../05-kode](../05-kode/) | Implementasi Sistem |

---

**Status:** ✅ Selesai
