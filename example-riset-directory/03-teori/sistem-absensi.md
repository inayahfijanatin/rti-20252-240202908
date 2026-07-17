# Sistem Absensi

## Pendahuluan

Absensi merupakan salah satu kegiatan administrasi yang penting dalam suatu organisasi, termasuk di lingkungan sekolah. Melalui sistem absensi, pihak sekolah dapat mengetahui tingkat kehadiran guru sebagai dasar evaluasi kedisiplinan, penyusunan laporan, hingga pengambilan keputusan oleh pihak manajemen sekolah.

Perkembangan teknologi informasi telah mengubah proses absensi yang sebelumnya dilakukan secara manual menjadi sistem berbasis digital. Penggunaan sistem absensi berbasis web mampu meningkatkan efisiensi proses pencatatan kehadiran, mengurangi kesalahan pencatatan, serta mempermudah pengelolaan data absensi.

Pada penelitian ini dikembangkan sistem absensi guru berbasis QR Code menggunakan Framework Laravel untuk mendukung proses pencatatan kehadiran yang lebih cepat, akurat, dan terintegrasi.

---

# Pengertian Sistem Absensi

Sistem absensi merupakan suatu sistem yang digunakan untuk mencatat, mengelola, dan memantau data kehadiran seseorang dalam suatu organisasi atau instansi. Sistem ini bertujuan untuk mendokumentasikan waktu kehadiran dan kepulangan secara sistematis sehingga menghasilkan informasi yang akurat.

Menurut Kadir (2019), sistem absensi merupakan bagian dari sistem informasi yang berfungsi untuk mengelola data kehadiran sehingga dapat digunakan sebagai dasar penyusunan laporan maupun evaluasi kedisiplinan.

Dengan berkembangnya teknologi informasi, sistem absensi tidak lagi dilakukan menggunakan buku hadir, melainkan telah memanfaatkan teknologi seperti barcode, QR Code, RFID, fingerprint, face recognition, maupun aplikasi berbasis web.

---

# Tujuan Sistem Absensi

Penerapan sistem absensi memiliki beberapa tujuan, yaitu:

1. Mencatat data kehadiran secara otomatis.
2. Mengurangi kesalahan pencatatan secara manual.
3. Mempermudah proses rekapitulasi data absensi.
4. Meningkatkan kedisiplinan pegawai atau guru.
5. Mendukung proses evaluasi kehadiran.
6. Menyediakan laporan absensi secara cepat dan akurat.

---

# Jenis-Jenis Sistem Absensi

Perkembangan teknologi menghasilkan berbagai metode absensi yang digunakan oleh instansi maupun sekolah.

### 1. Absensi Manual

Absensi dilakukan menggunakan buku hadir yang ditandatangani oleh pengguna.

**Kelebihan**

- Mudah diterapkan.
- Tidak membutuhkan perangkat khusus.

**Kekurangan**

- Rentan terjadi kesalahan pencatatan.
- Mudah dimanipulasi.
- Proses rekapitulasi membutuhkan waktu lama.

---

### 2. Absensi Fingerprint

Menggunakan sidik jari sebagai identitas pengguna.

**Kelebihan**

- Identitas unik.
- Sulit dipalsukan.

**Kekurangan**

- Membutuhkan perangkat fingerprint.
- Sensor dapat mengalami kerusakan.

---

### 3. Absensi RFID

Menggunakan kartu RFID sebagai identitas pengguna.

**Kelebihan**

- Proses absensi cepat.
- Mudah digunakan.

**Kekurangan**

- Kartu dapat hilang atau dipinjamkan kepada orang lain.

---

### 4. Absensi QR Code

Menggunakan QR Code sebagai media identifikasi pengguna.

**Kelebihan**

- Proses absensi cepat.
- Biaya implementasi relatif rendah.
- Dapat diintegrasikan dengan aplikasi berbasis web.
- Mudah dibuat dan digunakan.

**Kekurangan**

- Membutuhkan perangkat kamera.
- QR Code harus dijaga agar tidak rusak.
- Memerlukan pengamanan agar tidak mudah disalahgunakan.

---

# Komponen Sistem Absensi

Sistem absensi umumnya terdiri atas beberapa komponen, yaitu:

### Administrator

Bertugas mengelola seluruh data sistem.

### Pengguna (Guru)

Melakukan proses absensi menggunakan QR Code.

### Database

Menyimpan seluruh data guru dan data kehadiran.

### QR Code

Digunakan sebagai identitas unik setiap guru.

### Aplikasi Web

Digunakan untuk mengelola seluruh proses absensi.

---

# Manfaat Sistem Absensi

Penerapan sistem absensi memberikan beberapa manfaat, antara lain:

- Mempermudah pencatatan kehadiran.
- Mengurangi penggunaan dokumen manual.
- Meningkatkan efisiensi administrasi sekolah.
- Mempermudah penyusunan laporan kehadiran.
- Mengurangi risiko kehilangan data.
- Mendukung proses monitoring kehadiran secara real-time.

---

# Hubungan Sistem Absensi dengan Penelitian

Penelitian ini mengembangkan sistem absensi guru berbasis web menggunakan Framework Laravel dengan memanfaatkan teknologi QR Code sebagai media identifikasi guru. Setiap guru memiliki QR Code yang digunakan saat melakukan absensi masuk maupun pulang. Data kehadiran yang berhasil dipindai akan tersimpan secara otomatis ke dalam database sehingga memudahkan proses pengelolaan dan pelaporan absensi.

Dengan sistem ini, proses administrasi kehadiran guru menjadi lebih cepat, efisien, dan akurat dibandingkan dengan sistem absensi manual.

---

# Kesimpulan

Sistem absensi merupakan bagian penting dari sistem informasi yang digunakan untuk mencatat dan mengelola data kehadiran secara terstruktur. Pemanfaatan teknologi QR Code pada sistem absensi berbasis web memberikan kemudahan dalam proses pencatatan kehadiran, meningkatkan efisiensi administrasi, serta menghasilkan laporan yang lebih akurat dan mudah dikelola.

---

# Referensi

1. Abdul Kadir. (2019). *Pengenalan Sistem Informasi*. Andi Publisher.
2. Jogiyanto. (2018). *Analisis dan Desain Sistem Informasi*. Andi Offset.
3. Laudon, K. C., & Laudon, J. P. (2020). *Management Information Systems*. Pearson.
4. Pressman, R. S. (2019). *Software Engineering: A Practitioner's Approach*. McGraw-Hill.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [sistem-informasi.md](sistem-informasi.md) | Teori Sistem Informasi |
| [qr-code.md](qr-code.md) | Teori QR Code |
| [../02-literatur](../02-literatur/) | Studi Literatur |
| [../05-kode](../05-kode/) | Implementasi Sistem |

---

**Status:** ✅ Selesai
