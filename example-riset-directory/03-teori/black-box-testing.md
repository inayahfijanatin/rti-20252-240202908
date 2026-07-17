# Black Box Testing

## Pendahuluan

Setelah proses pengembangan sistem selesai dilakukan, tahap berikutnya adalah pengujian aplikasi. Pengujian bertujuan untuk memastikan bahwa seluruh fungsi yang terdapat pada sistem telah berjalan sesuai dengan kebutuhan pengguna serta menghasilkan keluaran yang benar.

Salah satu metode pengujian perangkat lunak yang banyak digunakan adalah **Black Box Testing**. Metode ini berfokus pada pengujian fungsi-fungsi sistem tanpa memperhatikan struktur atau kode program yang digunakan. Penguji hanya memeriksa apakah masukan (*input*) yang diberikan menghasilkan keluaran (*output*) yang sesuai dengan spesifikasi sistem.

Pada penelitian ini, Black Box Testing digunakan untuk menguji seluruh fitur utama pada Sistem Absensi Guru Berbasis QR Code sehingga dapat dipastikan bahwa aplikasi berjalan sesuai dengan kebutuhan yang telah dirancang.

---

# Pengertian Black Box Testing

Black Box Testing adalah metode pengujian perangkat lunak yang dilakukan dengan menguji fungsi-fungsi aplikasi berdasarkan spesifikasi kebutuhan tanpa melihat kode program yang berada di dalam sistem.

Menurut Pressman (2019), Black Box Testing merupakan teknik pengujian yang berfokus pada perilaku eksternal perangkat lunak dengan cara memberikan berbagai masukan dan mengamati keluaran yang dihasilkan.

Sementara itu, menurut Rosa dan Shalahuddin (2018), Black Box Testing bertujuan untuk menemukan kesalahan pada fungsi sistem, antarmuka, akses basis data, maupun validasi input sehingga aplikasi dapat berjalan sesuai dengan kebutuhan pengguna.

---

# Tujuan Black Box Testing

Penggunaan Black Box Testing memiliki beberapa tujuan, yaitu:

1. Memastikan seluruh fungsi aplikasi berjalan sesuai kebutuhan.
2. Menguji validasi data yang dimasukkan pengguna.
3. Memastikan keluaran sistem sesuai dengan yang diharapkan.
4. Mengidentifikasi kesalahan pada antarmuka pengguna.
5. Memastikan integrasi antar fitur berjalan dengan baik.
6. Menjamin kualitas perangkat lunak sebelum digunakan.

---

# Karakteristik Black Box Testing

Black Box Testing memiliki beberapa karakteristik sebagai berikut:

- Berfokus pada fungsi sistem.
- Tidak memerlukan pengetahuan mengenai kode program.
- Menguji input dan output aplikasi.
- Berdasarkan spesifikasi kebutuhan sistem.
- Dapat dilakukan oleh pengembang maupun pengguna.

---

# Teknik Black Box Testing

Dalam pengujian perangkat lunak, Black Box Testing memiliki beberapa teknik yang umum digunakan, antara lain:

### 1. Equivalence Partitioning

Teknik ini membagi data masukan ke dalam beberapa kelompok yang memiliki karakteristik yang sama sehingga pengujian menjadi lebih efisien.

### 2. Boundary Value Analysis

Pengujian dilakukan pada batas minimum dan maksimum suatu nilai input untuk mengetahui apakah sistem mampu menangani kondisi tersebut.

### 3. Decision Table Testing

Teknik ini digunakan untuk menguji berbagai kombinasi kondisi dan tindakan yang mungkin terjadi pada sistem.

### 4. Error Guessing

Pengujian dilakukan berdasarkan pengalaman penguji dalam memperkirakan kemungkinan terjadinya kesalahan pada sistem.

---

# Langkah-Langkah Black Box Testing

Proses Black Box Testing dilakukan melalui beberapa tahapan berikut.

## 1. Menentukan Fitur yang Akan Diuji

Pengembang menentukan fitur-fitur yang akan diuji berdasarkan kebutuhan sistem.

## 2. Menyusun Skenario Pengujian

Setiap fitur dibuatkan skenario pengujian yang berisi input, proses, dan output yang diharapkan.

## 3. Melakukan Pengujian

Penguji menjalankan setiap skenario dan mencatat hasil yang diperoleh.

## 4. Membandingkan Hasil

Hasil aktual dibandingkan dengan hasil yang diharapkan.

## 5. Menarik Kesimpulan

Apabila hasil sesuai dengan spesifikasi, maka fitur dinyatakan berhasil. Sebaliknya, apabila terdapat perbedaan, maka dilakukan perbaikan pada sistem.

---

# Kelebihan Black Box Testing

Metode Black Box Testing memiliki beberapa kelebihan, antara lain:

- Mudah dilakukan.
- Tidak memerlukan pemahaman terhadap kode program.
- Berfokus pada kebutuhan pengguna.
- Mampu menemukan kesalahan pada fungsi aplikasi.
- Cocok digunakan pada aplikasi berbasis web.

---

# Kekurangan Black Box Testing

Selain memiliki kelebihan, metode ini juga memiliki beberapa kekurangan, yaitu:

- Tidak dapat mengetahui kesalahan pada struktur kode program.
- Tidak mengukur kualitas algoritma yang digunakan.
- Tidak dapat menjamin seluruh jalur program telah diuji.
- Sangat bergantung pada kelengkapan skenario pengujian.

---

# Penerapan Black Box Testing pada Penelitian

Pada penelitian ini, Black Box Testing digunakan untuk menguji seluruh fitur utama pada Sistem Absensi Guru Berbasis QR Code. Pengujian dilakukan dengan memberikan berbagai masukan sesuai skenario yang telah disusun, kemudian membandingkan hasil yang diperoleh dengan hasil yang diharapkan.

Beberapa fitur yang diuji meliputi:

- Login Administrator
- Dashboard
- Tambah Data Guru
- Ubah Data Guru
- Hapus Data Guru
- Generate QR Code
- Scan QR Code
- Absensi Masuk
- Absensi Pulang
- Laporan Absensi
- Logout

Setiap fitur dinyatakan **berhasil** apabila menghasilkan keluaran sesuai dengan spesifikasi sistem yang telah dirancang.

---

# Kesimpulan

Black Box Testing merupakan metode pengujian perangkat lunak yang berfokus pada fungsi sistem tanpa melihat struktur kode program. Metode ini sangat sesuai digunakan pada penelitian ini karena mampu memastikan bahwa seluruh fitur Sistem Absensi Guru Berbasis QR Code berjalan sesuai dengan kebutuhan pengguna. Melalui Black Box Testing, kualitas aplikasi dapat dievaluasi sehingga sistem yang dihasilkan lebih andal dan siap digunakan.

---

# Referensi

1. Pressman, R. S. (2019). *Software Engineering: A Practitioner's Approach*. McGraw-Hill.
2. Rosa, A. S., & Shalahuddin, M. (2018). *Rekayasa Perangkat Lunak Terstruktur dan Berorientasi Objek*. Informatika.
3. Sommerville, I. (2016). *Software Engineering* (10th Edition). Pearson.
4. Myers, G. J., Sandler, C., & Badgett, T. (2012). *The Art of Software Testing*. John Wiley & Sons.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [metode-waterfall.md](metode-waterfall.md) | Teori Metode Waterfall |
| [kerangka-pemikiran.md](kerangka-pemikiran.md) | Kerangka Pemikiran Penelitian |
| [../05-kode](../05-kode/) | Implementasi Sistem |
| [../08-laporan](../08-laporan/) | Laporan Penelitian |

---

**Status:** ✅ Selesai
