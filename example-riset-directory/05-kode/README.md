# 05 - Implementasi Program

Folder ini berisi implementasi program yang digunakan pada penelitian **"Perancangan dan Implementasi Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel"**.

Implementasi dilakukan menggunakan **Framework Laravel 12** dengan bahasa pemrograman **PHP** dan database **MySQL**. Tahap implementasi merupakan lanjutan dari proses perancangan sistem berdasarkan model pengembangan **Waterfall**, yaitu dengan membangun seluruh fitur yang telah dirancang agar dapat digunakan sesuai kebutuhan pengguna.

---

# Lingkungan Pengembangan

| Komponen | Keterangan |
|----------|------------|
| Framework | Laravel 12 |
| Bahasa Pemrograman | PHP 8.x |
| Database | MySQL |
| Web Server | Apache (XAMPP) |
| Frontend | HTML, CSS, Bootstrap 5, JavaScript |
| IDE | Visual Studio Code |
| Sistem Operasi | Windows 10/11 |

---

# Tahapan Implementasi

Implementasi program dilakukan berdasarkan kebutuhan sistem yang telah dianalisis pada tahap sebelumnya.

## 1. Implementasi Autentikasi

Tahap ini membangun mekanisme autentikasi pengguna menggunakan Laravel Breeze sehingga administrator dapat mengakses sistem dengan aman.

Fitur yang diimplementasikan meliputi:

- Login
- Logout
- Middleware Authentication

---

## 2. Implementasi Dashboard

Dashboard dikembangkan untuk menampilkan informasi utama sistem setelah administrator berhasil login.

Informasi yang ditampilkan meliputi:

- Jumlah guru
- Statistik absensi
- Menu utama sistem

---

## 3. Implementasi Data Guru

Modul Data Guru digunakan untuk mengelola seluruh data guru yang akan melakukan absensi menggunakan QR Code.

Fitur yang diimplementasikan meliputi:

- Menambah data guru
- Mengubah data guru
- Menghapus data guru
- Menampilkan daftar guru
- Pencarian data guru

---

## 4. Implementasi QR Code

Setiap guru memiliki QR Code yang dihasilkan secara otomatis sebagai identitas pada proses absensi.

Implementasi meliputi:

- Generate QR Code
- Penyimpanan file QR Code
- Menampilkan QR Code pada sistem

---

## 5. Implementasi Scan QR Code

Tahap ini mengimplementasikan proses pembacaan QR Code menggunakan kamera untuk mengenali identitas guru.

Tahapan proses meliputi:

- Membaca QR Code
- Memverifikasi identitas guru
- Mengirim data ke proses absensi

---

## 6. Implementasi Absensi

Setelah QR Code berhasil dikenali, sistem secara otomatis mencatat data kehadiran guru ke dalam database.

Informasi yang disimpan meliputi:

- Identitas guru
- Tanggal absensi
- Jam masuk
- Jam pulang
- Status kehadiran

---

## 7. Implementasi Laporan

Modul laporan digunakan untuk menampilkan riwayat absensi guru berdasarkan data yang tersimpan pada database sehingga administrator dapat melakukan monitoring kehadiran.

---

# Struktur Source Code

Implementasi sistem terdiri atas beberapa komponen utama.

| Folder | Deskripsi |
|---------|-----------|
| app/Http/Controllers | Logika proses aplikasi |
| app/Models | Model data |
| database/migrations | Struktur database |
| resources/views | Antarmuka pengguna |
| routes | Routing aplikasi |

---

# Isi Folder

Folder ini berisi source code utama yang digunakan dalam pengembangan sistem.

| Berkas | Deskripsi |
|---------|-----------|
| app/ | Controller dan Model |
| database/ | Migration database |
| resources/ | Tampilan sistem (Blade) |
| routes/ | Routing aplikasi |
| README.md | Dokumentasi implementasi program |

---

# Hubungan dengan Penelitian

Implementasi pada folder ini mendukung seluruh tujuan penelitian, yaitu:

- Mengembangkan sistem absensi guru berbasis QR Code menggunakan Laravel.
- Mengelola data guru secara terkomputerisasi.
- Menghasilkan QR Code sebagai identitas guru.
- Melakukan proses scan QR Code.
- Menyimpan data absensi secara otomatis ke dalam database.
- Menyediakan laporan absensi guru.

---

# Keterkaitan dengan Repository

| Folder | Deskripsi |
|---------|-----------|
| ../01-proposal | Proposal penelitian |
| ../02-literatur | Studi literatur |
| ../03-metodologi | Metode penelitian |
| ../04-data | Data penelitian |
| ../06-pengujian | Hasil pengujian sistem |
| ../07-hasil | Hasil implementasi sistem |
| ../08-dokumentasi | Dokumentasi penelitian |

---

# Catatan

Folder **05-kode** berisi implementasi utama Sistem Absensi Guru Berbasis QR Code menggunakan Framework Laravel. Source code pada folder ini merupakan implementasi dari tahap **Implementation** pada model pengembangan **Waterfall**, sebagaimana dijelaskan dalam proposal penelitian. Seluruh fitur yang diimplementasikan akan diuji menggunakan metode **Black Box Testing** untuk memastikan setiap fungsi sistem berjalan sesuai kebutuhan pengguna.
