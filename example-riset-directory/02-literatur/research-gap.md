# Research Gap

## Pendahuluan

Research gap merupakan kesenjangan penelitian yang ditemukan setelah melakukan analisis terhadap berbagai penelitian terdahulu. Kesenjangan ini menjadi dasar dilakukannya penelitian agar dapat memberikan kontribusi baru terhadap pengembangan sistem absensi guru berbasis web.

---

## Identifikasi Kesenjangan Penelitian

### 1. Penggunaan Framework

Beberapa penelitian terdahulu masih menggunakan PHP konvensional sehingga struktur aplikasi kurang terorganisasi dan proses pengembangan menjadi lebih sulit ketika sistem berkembang.

Pada penelitian ini digunakan Framework Laravel yang menerapkan konsep Model-View-Controller (MVC) sehingga aplikasi menjadi lebih terstruktur, mudah dipelihara, dan memiliki fitur keamanan yang lebih baik.

---

### 2. Fitur Sistem

Sebagian penelitian hanya menyediakan fitur absensi menggunakan QR Code tanpa dilengkapi dashboard informasi, pengelolaan data guru, maupun laporan yang lengkap.

Penelitian ini menambahkan fitur:

- Dashboard
- CRUD Data Guru
- Generate QR Code
- Scan QR Code
- Absensi Masuk
- Absensi Pulang
- Laporan Absensi
- Export PDF

---

### 3. Antarmuka Pengguna

Beberapa sistem masih memiliki tampilan yang sederhana sehingga kurang nyaman digunakan.

Penelitian ini mengembangkan antarmuka yang lebih modern dan responsif menggunakan Bootstrap sehingga meningkatkan pengalaman pengguna.

---

### 4. Pengelolaan Data

Penelitian terdahulu belum sepenuhnya mengintegrasikan proses pengelolaan data guru dan data absensi dalam satu sistem.

Penelitian ini mengintegrasikan seluruh proses administrasi kehadiran guru ke dalam satu aplikasi berbasis web.

---

## Kebaruan Penelitian (Novelty)

Kebaruan penelitian ini meliputi:

- Implementasi Framework Laravel.
- Pemanfaatan QR Code untuk absensi guru.
- Dashboard informasi kehadiran.
- Pengelolaan data guru secara terintegrasi.
- Laporan absensi yang lebih lengkap.
- Pengembangan sistem menggunakan metode Waterfall.
- Pengujian menggunakan Black Box Testing.

---

## Kesimpulan

Berdasarkan hasil analisis penelitian terdahulu, masih terdapat beberapa aspek yang dapat dikembangkan, terutama dari sisi penggunaan framework, kelengkapan fitur, kemudahan pengelolaan data, dan kualitas antarmuka. Oleh karena itu, penelitian ini dikembangkan untuk menghasilkan sistem absensi guru berbasis QR Code menggunakan Framework Laravel yang lebih terstruktur, mudah digunakan, dan sesuai dengan kebutuhan administrasi sekolah.
