# QR Code

## Pendahuluan

Perkembangan teknologi informasi telah mendorong penggunaan berbagai metode identifikasi otomatis untuk meningkatkan efisiensi proses administrasi. Salah satu teknologi yang banyak digunakan adalah **Quick Response Code (QR Code)**. QR Code merupakan kode dua dimensi yang mampu menyimpan informasi dalam jumlah lebih banyak dibandingkan barcode satu dimensi serta dapat dipindai dengan cepat menggunakan kamera smartphone maupun perangkat pemindai lainnya.

Saat ini QR Code telah diterapkan pada berbagai bidang, seperti sistem pembayaran digital, manajemen inventaris, autentikasi pengguna, hingga sistem absensi. Dalam dunia pendidikan, QR Code dimanfaatkan sebagai media identifikasi guru maupun siswa untuk mempercepat proses pencatatan kehadiran.

Pada penelitian ini, QR Code digunakan sebagai identitas unik setiap guru sehingga proses absensi dapat dilakukan secara cepat, akurat, dan terintegrasi dengan sistem berbasis web menggunakan Framework Laravel.

---

# Pengertian QR Code

QR Code (Quick Response Code) merupakan kode matriks dua dimensi yang pertama kali dikembangkan oleh perusahaan Denso Wave, Jepang, pada tahun 1994. QR Code dirancang sebagai pengembangan dari barcode konvensional dengan kapasitas penyimpanan data yang lebih besar dan kemampuan pembacaan dari berbagai arah.

Menurut Denso Wave, QR Code mampu menyimpan berbagai jenis informasi seperti teks, angka, URL, maupun data lainnya dalam bentuk pola persegi berwarna hitam dan putih yang dapat dipindai menggunakan kamera atau QR Scanner.

Berbeda dengan barcode satu dimensi yang hanya menyimpan data secara horizontal, QR Code menyimpan data secara horizontal dan vertikal sehingga kapasitas penyimpanannya jauh lebih besar.

---

# Sejarah QR Code

QR Code dikembangkan oleh **Masahiro Hara** bersama tim dari **Denso Wave Incorporated** pada tahun 1994. Awalnya teknologi ini digunakan untuk melacak komponen kendaraan pada industri otomotif Toyota.

Seiring berkembangnya teknologi informasi, penggunaan QR Code meluas ke berbagai bidang seperti:

- Sistem pembayaran digital
- Tiket elektronik
- Sistem inventaris
- Sistem absensi
- Media promosi
- Verifikasi identitas
- Berbagi informasi melalui perangkat seluler

Saat ini QR Code menjadi salah satu teknologi identifikasi yang paling banyak digunakan karena mudah dibuat, mudah dipindai, serta tidak memerlukan perangkat khusus selain kamera.

---

# Karakteristik QR Code

QR Code memiliki beberapa karakteristik utama, yaitu:

- Berbentuk kode dua dimensi.
- Dapat dibaca dari berbagai arah (360°).
- Memiliki kapasitas penyimpanan data yang besar.
- Memiliki fitur error correction sehingga tetap dapat dipindai meskipun sebagian kode rusak.
- Proses pemindaian berlangsung sangat cepat.
- Mudah diintegrasikan dengan aplikasi berbasis web maupun mobile.

---

# Struktur QR Code

Secara umum QR Code terdiri atas beberapa bagian penting, yaitu:

### 1. Finder Pattern

Berfungsi sebagai penanda posisi QR Code agar scanner dapat mengenali arah pembacaan.

### 2. Alignment Pattern

Digunakan untuk menjaga akurasi pembacaan terutama ketika QR Code mengalami distorsi.

### 3. Timing Pattern

Berfungsi menentukan koordinat modul pada QR Code sehingga proses decoding menjadi lebih akurat.

### 4. Data Area

Bagian yang berisi informasi utama yang disimpan dalam QR Code, seperti identitas guru atau kode unik.

### 5. Quiet Zone

Area kosong di sekitar QR Code yang berfungsi agar proses pemindaian tidak terganggu oleh objek lain.

---

# Cara Kerja QR Code

Proses penggunaan QR Code pada sistem absensi secara umum terdiri atas beberapa tahapan:

1. Administrator menghasilkan QR Code untuk setiap guru.
2. QR Code disimpan pada database dan dapat dicetak atau ditampilkan secara digital.
3. Guru melakukan pemindaian QR Code menggunakan perangkat scanner.
4. Sistem membaca data yang tersimpan pada QR Code.
5. Sistem melakukan validasi identitas guru.
6. Data kehadiran disimpan ke dalam database.
7. Sistem menampilkan informasi bahwa proses absensi berhasil dilakukan.

---

# Kelebihan QR Code

Beberapa kelebihan QR Code antara lain:

- Proses pemindaian sangat cepat.
- Kapasitas penyimpanan data lebih besar dibanding barcode.
- Mudah dibuat menggunakan berbagai library.
- Tidak memerlukan perangkat khusus.
- Biaya implementasi relatif rendah.
- Mudah diintegrasikan dengan aplikasi berbasis web.
- Mendukung proses digitalisasi administrasi.

---

# Kekurangan QR Code

Selain memiliki berbagai kelebihan, QR Code juga memiliki beberapa keterbatasan, yaitu:

- Membutuhkan kamera dengan kualitas yang cukup baik.
- QR Code dapat rusak apabila media cetak mengalami kerusakan.
- Memerlukan mekanisme keamanan agar tidak mudah disalin atau disalahgunakan.
- Bergantung pada kondisi pencahayaan saat proses pemindaian.

---

# Penerapan QR Code dalam Penelitian

Pada penelitian ini, setiap guru memiliki QR Code yang berisi identitas unik yang dihasilkan oleh sistem menggunakan Framework Laravel. QR Code tersebut digunakan saat proses absensi masuk maupun pulang.

Ketika QR Code dipindai, sistem akan melakukan validasi data guru, mencatat waktu kehadiran secara otomatis, kemudian menyimpan data tersebut ke dalam database MySQL. Selanjutnya administrator dapat melihat riwayat absensi dan menghasilkan laporan kehadiran secara cepat.

Penerapan QR Code pada penelitian ini diharapkan mampu meningkatkan efisiensi proses absensi guru dibandingkan metode pencatatan manual.

---

# Kesimpulan

QR Code merupakan teknologi identifikasi dua dimensi yang memiliki kemampuan menyimpan data dalam jumlah besar serta dapat dipindai secara cepat. Dengan berbagai kelebihan yang dimilikinya, QR Code menjadi salah satu solusi yang efektif untuk diterapkan pada sistem absensi berbasis web. Dalam penelitian ini, QR Code berperan sebagai media identifikasi guru yang mendukung proses absensi secara otomatis, akurat, dan terintegrasi.

---

# Referensi

1. Denso Wave Incorporated. (2024). *QR Code Essentials*. https://www.qrcode.com/
2. ISO/IEC 18004:2015. *Information Technology — QR Code Bar Code Symbology Specification*.
3. Kato, H., & Tan, K. T. (2007). *Pervasive 2D Barcodes for Camera Phone Applications*. IEEE.
4. Jogiyanto. (2018). *Analisis dan Desain Sistem Informasi*. Andi Offset.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [sistem-absensi.md](sistem-absensi.md) | Teori Sistem Absensi |
| [framework-laravel.md](framework-laravel.md) | Teori Framework Laravel |
| [../02-literatur](../02-literatur/) | Studi Literatur |
| [../05-kode](../05-kode/) | Implementasi Sistem |

---

**Status:** ✅ Selesai
