# 05 - Implementasi Program

Folder ini berisi implementasi program yang digunakan pada penelitian **"Perancangan dan Implementasi Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel"**.

Seluruh proses pengembangan sistem dilakukan menggunakan **Framework Laravel 12** dengan bahasa pemrograman **PHP**, database **MySQL**, serta antarmuka berbasis **Bootstrap 5**. Implementasi program mencakup pengelolaan data guru, pembuatan QR Code, proses absensi, dan penyajian laporan kehadiran.

---

# Lingkungan Pengembangan

| Komponen | Keterangan |
|----------|------------|
| **Framework** | Laravel 12 |
| **Bahasa Pemrograman** | PHP 8.2 |
| **Database** | MySQL |
| **Web Server** | Apache (XAMPP) |
| **Frontend** | HTML, CSS, Bootstrap 5, JavaScript |
| **IDE** | Visual Studio Code |
| **Sistem Operasi** | Windows 10 / Windows 11 |

---

# Tahapan Implementasi

Implementasi sistem dilakukan melalui beberapa tahapan sebagai berikut.

## 1. Implementasi Database

Tahap awal implementasi adalah membangun struktur database menggunakan migration Laravel. Database digunakan untuk menyimpan seluruh data yang dibutuhkan oleh sistem.

Tabel utama yang digunakan meliputi:

- users
- guru
- absensi
- migrations

---

## 2. Implementasi Autentikasi

Sistem menerapkan autentikasi menggunakan Laravel Breeze sehingga hanya administrator yang memiliki hak akses dapat mengelola sistem.

Fitur yang diimplementasikan meliputi:

- Login
- Logout
- Middleware Authentication

---

## 3. Implementasi Manajemen Data Guru

Modul Data Guru digunakan untuk mengelola identitas guru yang akan menggunakan sistem absensi.

Fitur yang diimplementasikan meliputi:

- Menambah data guru
- Mengubah data guru
- Menghapus data guru
- Menampilkan data guru
- Pencarian data guru

---

## 4. Implementasi QR Code

Setiap guru memiliki QR Code yang dihasilkan secara otomatis sebagai identitas unik pada proses absensi.

Tahapan implementasi meliputi:

- Generate QR Code
- Penyimpanan QR Code
- Menampilkan QR Code pada halaman sistem

---

## 5. Implementasi Scan QR Code

Sistem melakukan proses pembacaan QR Code untuk mengenali identitas guru sebelum data absensi disimpan ke dalam database.

Tahapan implementasi meliputi:

- Membaca QR Code
- Memverifikasi data guru
- Mengirim data ke proses absensi

---

## 6. Implementasi Absensi

Setelah QR Code berhasil dikenali, sistem mencatat data kehadiran guru secara otomatis.

Informasi yang dicatat meliputi:

- Identitas guru
- Tanggal absensi
- Jam masuk
- Jam pulang
- Status kehadiran

---

## 7. Implementasi Laporan

Sistem menyediakan halaman laporan yang digunakan administrator untuk melihat riwayat kehadiran guru berdasarkan data absensi yang tersimpan pada database.

---

# Struktur Source Code

Kode program disusun berdasarkan struktur Framework Laravel.

| Folder | Deskripsi |
|---------|-----------|
| app | Berisi Controller dan Model yang mengatur logika aplikasi. |
| database | Berisi migration untuk membangun struktur database. |
| resources | Berisi file tampilan (Blade Template). |
| routes | Berisi konfigurasi routing aplikasi. |
| public | Berisi aset publik seperti CSS, JavaScript, dan gambar. |

---

# Isi Folder

| Berkas | Deskripsi |
|---------|-----------|
| [app](app/) | Source code utama berupa Controller dan Model Laravel. |
| [database](database/) | Migration database yang digunakan dalam sistem. |
| [resources](resources/) | Tampilan antarmuka sistem menggunakan Blade Template. |
| [routes](routes/) | Routing aplikasi Laravel. |
| [README.md](README.md) | Dokumentasi implementasi program. |

---

# Hubungan dengan Penelitian

Implementasi pada folder ini digunakan untuk:

- Mengembangkan sistem absensi guru berbasis QR Code menggunakan Laravel.
- Mengelola data guru secara terkomputerisasi.
- Menghasilkan QR Code sebagai identitas guru.
- Melakukan proses scan QR Code.
- Mencatat data absensi guru secara otomatis.
- Menyediakan laporan kehadiran guru.

---

# Keterkaitan dengan Repository

| Folder | Deskripsi |
|---------|-----------|
| [01-proposal](../01-proposal/) | Proposal penelitian yang memuat latar belakang, rumusan masalah, tujuan, manfaat, dan metodologi penelitian. |
| [02-literatur](../02-literatur/) | Studi literatur yang menjadi dasar pengembangan sistem. |
| [03-metodologi](../03-metodologi/) | Metode penelitian dan tahapan pengembangan sistem menggunakan model Waterfall. |
| [04-data](../04-data/) | Data penelitian yang meliputi data guru, data absensi, dan struktur database. |
| [06-pengujian](../06-pengujian/) | Dokumentasi hasil pengujian sistem menggunakan metode Black Box Testing. |
| [07-hasil](../07-hasil/) | Hasil implementasi sistem berupa tampilan aplikasi, dashboard, QR Code, dan laporan absensi. |
| [08-dokumentasi](../08-dokumentasi/) | Dokumentasi pendukung selama proses penelitian dan pengembangan sistem. |

---

# Catatan

Folder **05-kode** berisi implementasi utama Sistem Absensi Guru Berbasis QR Code menggunakan Framework Laravel. Source code yang disertakan merupakan bagian inti dari sistem, meliputi Controller, Model, Migration, Routing, dan Blade Template.

Folder yang bersifat dependensi seperti **vendor**, **node_modules**, dan file hasil kompilasi tidak disertakan karena dapat dibangun kembali melalui proses instalasi Laravel menggunakan Composer dan NPM.
