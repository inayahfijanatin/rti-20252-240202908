# Metode Waterfall

## Pendahuluan

Dalam pengembangan perangkat lunak, diperlukan suatu metode yang mampu mengarahkan proses pembangunan sistem agar berjalan secara sistematis, terstruktur, dan terdokumentasi dengan baik. Salah satu metode pengembangan perangkat lunak yang banyak digunakan adalah **Metode Waterfall**.

Metode Waterfall merupakan model pengembangan perangkat lunak yang dilakukan secara berurutan, dimulai dari tahap analisis kebutuhan hingga tahap pemeliharaan. Setiap tahapan harus diselesaikan terlebih dahulu sebelum melanjutkan ke tahap berikutnya sehingga proses pengembangan menjadi lebih terstruktur dan mudah dikendalikan.

Pada penelitian ini, metode Waterfall digunakan sebagai metode pengembangan Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel karena sesuai dengan karakteristik penelitian yang memiliki kebutuhan sistem yang telah ditentukan sejak awal.

---

# Pengertian Metode Waterfall

Metode Waterfall adalah model pengembangan perangkat lunak yang dilakukan secara bertahap dan berurutan. Setiap tahap harus diselesaikan sebelum melanjutkan ke tahap berikutnya sehingga menghasilkan proses pengembangan yang sistematis dan terdokumentasi.

Menurut Pressman (2019), Waterfall merupakan model klasik dalam rekayasa perangkat lunak yang menggambarkan proses pengembangan sebagai aliran yang berjalan secara berurutan mulai dari analisis kebutuhan hingga pemeliharaan sistem.

Sementara itu, Sommerville (2016) menjelaskan bahwa Waterfall cocok digunakan pada proyek yang memiliki kebutuhan sistem yang jelas dan tidak mengalami banyak perubahan selama proses pengembangan.

---

# Karakteristik Metode Waterfall

Metode Waterfall memiliki beberapa karakteristik utama, yaitu:

- Tahapan dilakukan secara berurutan.
- Setiap tahap harus diselesaikan sebelum masuk ke tahap berikutnya.
- Dokumentasi dibuat pada setiap tahapan.
- Cocok digunakan untuk proyek dengan kebutuhan yang jelas.
- Mudah dipahami dan diterapkan.

---

# Tahapan Metode Waterfall

Secara umum, metode Waterfall terdiri atas beberapa tahapan sebagai berikut.

## 1. Analisis Kebutuhan (Requirement Analysis)

Tahap pertama dilakukan untuk mengidentifikasi kebutuhan pengguna dan menentukan fungsi-fungsi yang harus tersedia pada sistem.

Pada penelitian ini dilakukan identifikasi kebutuhan melalui observasi dan wawancara sehingga diperoleh kebutuhan utama, yaitu:

- Login administrator
- Pengelolaan data guru
- Generate QR Code
- Scan QR Code
- Pencatatan absensi masuk
- Pencatatan absensi pulang
- Laporan absensi

---

## 2. Perancangan Sistem (System Design)

Tahap ini bertujuan merancang struktur sistem sebelum proses pengkodean dilakukan.

Perancangan meliputi:

- Use Case Diagram
- Activity Diagram
- Class Diagram
- Entity Relationship Diagram (ERD)
- Desain Database
- Desain Antarmuka (User Interface)

Tahap ini menjadi pedoman dalam proses implementasi aplikasi.

---

## 3. Implementasi (Implementation)

Tahap implementasi merupakan proses penerjemahan hasil perancangan ke dalam kode program.

Pada penelitian ini implementasi dilakukan menggunakan:

- Framework Laravel
- PHP
- MySQL
- Bootstrap
- Visual Studio Code
- XAMPP

Seluruh fitur aplikasi dikembangkan berdasarkan hasil analisis kebutuhan dan desain sistem.

---

## 4. Pengujian (Testing)

Tahap pengujian dilakukan untuk memastikan seluruh fungsi aplikasi berjalan sesuai dengan kebutuhan pengguna.

Metode pengujian yang digunakan adalah **Black Box Testing**, yang berfokus pada pengujian fungsi-fungsi sistem tanpa melihat kode program.

Pengujian dilakukan pada seluruh fitur utama, seperti:

- Login
- CRUD Data Guru
- Generate QR Code
- Scan QR Code
- Proses Absensi
- Laporan Absensi

---

## 5. Pemeliharaan (Maintenance)

Tahap terakhir adalah pemeliharaan sistem yang dilakukan setelah aplikasi selesai dikembangkan.

Pemeliharaan bertujuan untuk:

- Memperbaiki kesalahan yang ditemukan setelah implementasi.
- Menyesuaikan sistem dengan kebutuhan baru.
- Meningkatkan performa aplikasi.
- Menambahkan fitur baru apabila diperlukan.

---

# Kelebihan Metode Waterfall

Metode Waterfall memiliki beberapa kelebihan, antara lain:

- Alur pengembangan jelas dan terstruktur.
- Dokumentasi lengkap pada setiap tahap.
- Mudah dipahami oleh pengembang.
- Memudahkan proses evaluasi.
- Cocok untuk proyek dengan kebutuhan yang stabil.

---

# Kekurangan Metode Waterfall

Selain memiliki kelebihan, metode Waterfall juga memiliki beberapa kekurangan, yaitu:

- Sulit mengakomodasi perubahan kebutuhan di tengah proses pengembangan.
- Kesalahan pada tahap awal dapat berdampak pada tahap berikutnya.
- Pengguna baru dapat melihat hasil sistem setelah proses implementasi selesai.
- Kurang fleksibel dibandingkan metode Agile.

---

# Penerapan Metode Waterfall pada Penelitian

Pada penelitian ini, metode Waterfall diterapkan sebagai pedoman dalam pengembangan Sistem Absensi Guru Berbasis QR Code. Proses dimulai dari analisis kebutuhan melalui observasi dan wawancara, dilanjutkan dengan perancangan sistem menggunakan UML dan ERD, implementasi aplikasi menggunakan Framework Laravel, pengujian menggunakan Black Box Testing, hingga tahap pemeliharaan sistem.

Penerapan metode Waterfall membantu proses pengembangan menjadi lebih sistematis sehingga setiap tahapan dapat diselesaikan secara terstruktur dan terdokumentasi.

---

# Kesimpulan

Metode Waterfall merupakan salah satu model pengembangan perangkat lunak yang dilakukan secara berurutan mulai dari analisis kebutuhan hingga pemeliharaan. Dalam penelitian ini, metode Waterfall dipilih karena sesuai dengan kebutuhan pengembangan Sistem Absensi Guru Berbasis QR Code yang memiliki ruang lingkup dan kebutuhan sistem yang telah ditentukan sejak awal.

---

# Referensi

1. Pressman, R. S. (2019). *Software Engineering: A Practitioner's Approach*. McGraw-Hill.
2. Sommerville, I. (2016). *Software Engineering* (10th Edition). Pearson.
3. Rosa, A. S., & Shalahuddin, M. (2018). *Rekayasa Perangkat Lunak Terstruktur dan Berorientasi Objek*. Informatika.
4. Satzinger, J. W., Jackson, R. B., & Burd, S. D. (2016). *Systems Analysis and Design in a Changing World*. Cengage Learning.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [bootstrap.md](bootstrap.md) | Teori Bootstrap |
| [black-box-testing.md](black-box-testing.md) | Teori Black Box Testing |
| [../01-proposal](../01-proposal/) | Proposal Penelitian |
| [../05-kode](../05-kode/) | Implementasi Sistem |

---

**Status:** ✅ Selesai
