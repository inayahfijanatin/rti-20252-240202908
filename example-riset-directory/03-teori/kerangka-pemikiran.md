# Kerangka Pemikiran

## Pendahuluan

Kerangka pemikiran merupakan gambaran konseptual yang menjelaskan hubungan antara permasalahan, landasan teori, metode penelitian, hingga solusi yang diusulkan. Kerangka pemikiran berfungsi sebagai pedoman dalam pelaksanaan penelitian agar proses pengembangan sistem berjalan secara sistematis dan sesuai dengan tujuan penelitian.

Pada penelitian ini, kerangka pemikiran disusun berdasarkan hasil observasi terhadap proses absensi guru yang masih dilakukan secara manual. Proses tersebut dinilai kurang efektif karena membutuhkan waktu yang relatif lama, rentan terhadap kesalahan pencatatan, serta menyulitkan proses rekapitulasi data kehadiran. Oleh karena itu, dikembangkan sebuah Sistem Absensi Guru Berbasis QR Code menggunakan Framework Laravel sebagai solusi untuk meningkatkan efisiensi dan akurasi proses absensi.

---

# Identifikasi Permasalahan

Berdasarkan hasil observasi dan analisis kebutuhan, ditemukan beberapa permasalahan pada sistem absensi yang berjalan, yaitu:

- Proses absensi masih dilakukan secara manual menggunakan buku kehadiran.
- Rekapitulasi data absensi memerlukan waktu yang cukup lama.
- Data absensi berisiko mengalami kehilangan atau kerusakan.
- Kesalahan pencatatan sering terjadi akibat faktor manusia (*human error*).
- Pembuatan laporan kehadiran masih dilakukan secara manual sehingga kurang efisien.

---

# Solusi yang Diusulkan

Sebagai solusi terhadap permasalahan tersebut, penelitian ini mengusulkan pembangunan Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel dengan fitur utama sebagai berikut:

- Login administrator.
- Pengelolaan data guru.
- Pembuatan QR Code untuk setiap guru.
- Proses absensi masuk menggunakan QR Code.
- Proses absensi pulang menggunakan QR Code.
- Penyimpanan data absensi ke dalam database MySQL.
- Pembuatan laporan absensi secara otomatis.

Dengan adanya sistem ini, proses pencatatan kehadiran guru diharapkan menjadi lebih cepat, akurat, dan mudah dikelola.

---

# Dasar Teori

Pengembangan sistem pada penelitian ini didukung oleh beberapa teori utama, yaitu:

- Sistem Informasi.
- Sistem Absensi.
- QR Code.
- Framework Laravel.
- PHP.
- MySQL.
- Bootstrap.
- Metode Waterfall.
- Black Box Testing.

Seluruh teori tersebut menjadi landasan dalam proses analisis, perancangan, implementasi, hingga pengujian sistem.

---

# Alur Kerangka Pemikiran

Secara umum, alur penelitian dapat dijelaskan sebagai berikut:

1. Identifikasi permasalahan pada proses absensi guru.
2. Melakukan studi literatur mengenai sistem absensi, QR Code, Laravel, dan teknologi pendukung lainnya.
3. Menganalisis kebutuhan sistem berdasarkan hasil observasi.
4. Merancang sistem menggunakan UML dan desain basis data.
5. Mengembangkan aplikasi menggunakan Framework Laravel.
6. Mengimplementasikan fitur QR Code pada proses absensi.
7. Melakukan pengujian menggunakan Black Box Testing.
8. Mengevaluasi hasil pengujian dan menyusun laporan penelitian.

---

# Diagram Kerangka Pemikiran

Diagram kerangka pemikiran penelitian dapat digambarkan sebagai berikut.

```text
Permasalahan
        │
        ▼
Observasi & Studi Literatur
        │
        ▼
Analisis Kebutuhan Sistem
        │
        ▼
Perancangan Sistem
(UML, ERD, Database, UI)
        │
        ▼
Implementasi
(Laravel + PHP + MySQL + Bootstrap)
        │
        ▼
Integrasi QR Code
        │
        ▼
Pengujian Black Box
        │
        ▼
Sistem Berjalan
        │
        ▼
Laporan Penelitian
```

---

# Hubungan Kerangka Pemikiran dengan Penelitian

Kerangka pemikiran menjadi acuan dalam seluruh tahapan penelitian, mulai dari identifikasi masalah hingga evaluasi sistem. Dengan adanya kerangka pemikiran, proses pengembangan Sistem Absensi Guru Berbasis QR Code dapat dilakukan secara terarah dan sesuai dengan tujuan penelitian.

Selain itu, kerangka pemikiran membantu menunjukkan hubungan antara teori yang digunakan dengan implementasi sistem sehingga penelitian memiliki dasar ilmiah yang jelas.

---

# Kesimpulan

Kerangka pemikiran menggambarkan alur logis penelitian yang dimulai dari identifikasi permasalahan, penyusunan landasan teori, analisis kebutuhan, perancangan sistem, implementasi aplikasi, pengujian, hingga penyusunan laporan penelitian. Melalui kerangka pemikiran ini, penelitian dapat dilaksanakan secara sistematis sehingga tujuan pengembangan Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel dapat tercapai.

---

# Referensi

1. Pressman, R. S. (2019). *Software Engineering: A Practitioner's Approach*. McGraw-Hill.
2. Sommerville, I. (2016). *Software Engineering* (10th Edition). Pearson.
3. Rosa, A. S., & Shalahuddin, M. (2018). *Rekayasa Perangkat Lunak Terstruktur dan Berorientasi Objek*. Informatika.
4. Jogiyanto. (2018). *Analisis dan Desain Sistem Informasi*. Andi Offset.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [black-box-testing.md](black-box-testing.md) | Teori Black Box Testing |
| [../01-proposal](../01-proposal/) | Proposal Penelitian |
| [../05-kode](../05-kode/) | Implementasi Sistem |
| [../08-laporan](../08-laporan/) | Laporan Penelitian |

---

**Status:** ✅ Selesai
