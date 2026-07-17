# Struktur Database

## Deskripsi

Sistem Absensi Guru Berbasis QR Code menggunakan database **MySQL** sebagai media penyimpanan data. Database berfungsi untuk menyimpan seluruh informasi yang dibutuhkan oleh sistem, mulai dari data pengguna, data guru, hingga data absensi.

Pada penelitian ini, database yang digunakan bernama **`absensi_qrcode`**. Database dirancang menggunakan beberapa tabel yang saling berhubungan sehingga proses pengolahan data dapat dilakukan secara efisien.

---

## Informasi Database

| Informasi | Keterangan |
|------------|------------|
| Nama Database | absensi_qrcode |
| DBMS | MySQL |
| Framework | Laravel 12 |
| Bahasa Pemrograman | PHP 8 |
| Web Server | Apache (XAMPP) |

---

## Struktur Tabel

Database terdiri dari empat tabel utama sebagai berikut.

| Nama Tabel | Fungsi |
|-------------|--------|
| users | Menyimpan data akun administrator untuk login ke sistem. |
| guru | Menyimpan identitas seluruh guru beserta QR Code yang dimiliki. |
| absensi | Menyimpan riwayat absensi masuk dan pulang setiap guru. |
| migrations | Menyimpan riwayat migrasi database Laravel. |

---

## Hubungan Antar Tabel

Hubungan antar tabel dalam database dapat dijelaskan sebagai berikut.

- **Tabel `guru`** merupakan tabel utama yang menyimpan identitas guru.
- **Tabel `absensi`** memiliki relasi dengan tabel `guru`, sehingga setiap data absensi selalu mengacu pada seorang guru.
- **Tabel `users`** digunakan untuk proses autentikasi administrator.
- **Tabel `migrations`** digunakan oleh Laravel untuk mencatat perubahan struktur database.

Secara konseptual hubungan antar tabel dapat digambarkan sebagai berikut.

```
users
   │
   └── Administrator

guru
   │
   └────< absensi

migrations
```

---

## Tampilan Database

Berikut merupakan struktur database yang digunakan pada penelitian.

![Struktur Database](02-struktur-db.png)

**Gambar 3.** Struktur database pada phpMyAdmin.

---

## Alasan Penggunaan MySQL

MySQL dipilih sebagai sistem manajemen basis data karena memiliki beberapa kelebihan, antara lain:

- Bersifat open source.
- Mudah diintegrasikan dengan framework Laravel.
- Memiliki performa yang baik untuk aplikasi berbasis web.
- Mendukung relasi antar tabel.
- Banyak digunakan dalam pengembangan sistem informasi sehingga dokumentasi dan komunitas pendukung sangat lengkap.

---

## Kesimpulan

Struktur database dirancang untuk mendukung seluruh proses bisnis pada Sistem Absensi Guru Berbasis QR Code. Pembagian data ke dalam beberapa tabel membuat pengelolaan data menjadi lebih terstruktur, memudahkan proses pencarian informasi, serta menjaga konsistensi data selama sistem digunakan.
