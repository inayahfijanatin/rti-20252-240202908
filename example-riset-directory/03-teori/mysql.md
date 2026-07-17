# MySQL

## Pendahuluan

Basis data (database) merupakan salah satu komponen utama dalam pengembangan sistem informasi. Seluruh data yang diolah oleh aplikasi disimpan di dalam database agar dapat dikelola secara terstruktur, aman, dan mudah diakses kembali. Tanpa adanya database, proses penyimpanan dan pengelolaan data dalam suatu sistem akan menjadi kurang efektif.

Salah satu Database Management System (DBMS) yang paling banyak digunakan dalam pengembangan aplikasi berbasis web adalah **MySQL**. MySQL dikenal sebagai DBMS yang bersifat open source, memiliki performa yang baik, mudah digunakan, serta mampu menangani pengolahan data dalam jumlah besar.

Pada penelitian ini, MySQL digunakan sebagai sistem manajemen basis data untuk menyimpan seluruh informasi yang berkaitan dengan proses absensi guru, seperti data pengguna, data guru, QR Code, serta riwayat kehadiran.

---

# Pengertian Database

Database adalah kumpulan data yang saling berhubungan dan disusun secara sistematis sehingga mudah dikelola, diakses, dan diperbarui sesuai kebutuhan pengguna.

Menurut Connolly dan Begg (2015), database merupakan kumpulan data yang saling berkaitan secara logis beserta deskripsinya yang dirancang untuk memenuhi kebutuhan informasi suatu organisasi.

Database memungkinkan data tersimpan secara terpusat sehingga mempermudah proses pencarian, pembaruan, maupun penghapusan data.

---

# Pengertian MySQL

MySQL adalah sistem manajemen basis data relasional (*Relational Database Management System* atau RDBMS) yang menggunakan bahasa SQL (*Structured Query Language*) sebagai bahasa utama dalam pengolahan data.

MySQL dikembangkan oleh MySQL AB dan saat ini dikelola oleh Oracle Corporation. Karena bersifat open source, MySQL banyak digunakan oleh pengembang aplikasi web maupun perusahaan dalam membangun sistem informasi.

Dalam penelitian ini, MySQL digunakan sebagai media penyimpanan seluruh data yang dikelola oleh aplikasi absensi guru berbasis QR Code.

---

# Sejarah MySQL

MySQL pertama kali dikembangkan oleh Michael Widenius, David Axmark, dan Allan Larsson pada tahun 1995 melalui perusahaan MySQL AB. Sejak tahun 2010, MySQL menjadi bagian dari Oracle Corporation setelah proses akuisisi Sun Microsystems.

Hingga saat ini, MySQL tetap menjadi salah satu DBMS yang paling populer karena mendukung berbagai platform, mudah digunakan, serta kompatibel dengan banyak framework web, termasuk Laravel.

---

# Karakteristik MySQL

MySQL memiliki beberapa karakteristik sebagai berikut:

- Bersifat open source.
- Menggunakan bahasa SQL.
- Mendukung sistem basis data relasional.
- Memiliki performa yang cepat.
- Mendukung transaksi data.
- Mendukung multi-user.
- Kompatibel dengan berbagai sistem operasi.

---

# Fungsi MySQL

MySQL memiliki berbagai fungsi dalam pengembangan aplikasi, antara lain:

1. Menyimpan data aplikasi secara terstruktur.
2. Mengelola proses penambahan, perubahan, dan penghapusan data.
3. Mendukung pencarian data secara cepat.
4. Menjaga konsistensi data melalui relasi antar tabel.
5. Mendukung pembuatan laporan berdasarkan data yang tersimpan.

---

# Komponen Database pada Penelitian

Dalam penelitian ini, database MySQL digunakan untuk menyimpan beberapa tabel utama, antara lain:

### 1. Tabel User

Digunakan untuk menyimpan data akun pengguna yang memiliki hak akses ke dalam sistem.

### 2. Tabel Guru

Berisi informasi mengenai guru, seperti NIP, nama guru, jabatan, nomor telepon, alamat email, dan QR Code.

### 3. Tabel Absensi

Digunakan untuk menyimpan data kehadiran guru, meliputi tanggal, jam masuk, jam pulang, status kehadiran, serta identitas guru.

Relasi antar tabel tersebut memungkinkan sistem mengelola data secara terintegrasi sehingga proses pencatatan absensi menjadi lebih efektif.

---

# Kelebihan MySQL

Beberapa kelebihan MySQL antara lain:

- Gratis dan open source.
- Mudah dipelajari.
- Performa tinggi.
- Mendukung transaksi data.
- Mendukung berbagai bahasa pemrograman.
- Kompatibel dengan Laravel.
- Memiliki komunitas pengguna yang besar.
- Mudah diintegrasikan dengan XAMPP.

---

# Kekurangan MySQL

Selain memiliki berbagai kelebihan, MySQL juga memiliki beberapa kekurangan, yaitu:

- Beberapa fitur lanjutan hanya tersedia pada versi komersial.
- Kurang optimal untuk pengolahan data yang sangat besar dibandingkan DBMS enterprise tertentu.
- Membutuhkan proses optimasi apabila jumlah data terus meningkat.

---

# Penerapan MySQL dalam Penelitian

Pada penelitian ini, MySQL digunakan sebagai media penyimpanan seluruh data yang dihasilkan oleh aplikasi Sistem Absensi Guru Berbasis QR Code.

Database menyimpan data guru, data pengguna, QR Code, serta data absensi yang dihasilkan setiap kali guru melakukan proses scan QR Code. Seluruh data tersebut dikelola melalui Framework Laravel menggunakan Eloquent ORM sehingga proses manipulasi data menjadi lebih mudah dan terstruktur.

Penggunaan MySQL mendukung proses pencarian data, pembuatan laporan, dan pengelolaan informasi secara efisien.

---

# Kesimpulan

MySQL merupakan sistem manajemen basis data relasional yang banyak digunakan dalam pengembangan aplikasi berbasis web. Dengan dukungan SQL, performa yang baik, serta kemudahan integrasi dengan Laravel, MySQL menjadi pilihan yang tepat sebagai media penyimpanan data pada Sistem Absensi Guru Berbasis QR Code. Penggunaan MySQL memungkinkan pengelolaan data menjadi lebih terstruktur, aman, dan efisien.

---

# Referensi

1. Connolly, T., & Begg, C. (2015). *Database Systems: A Practical Approach to Design, Implementation, and Management*. Pearson.
2. Oracle Corporation. (2024). *MySQL Documentation*. https://dev.mysql.com/doc/
3. Kadir, A. (2020). *Pengenalan Sistem Informasi*. Andi Offset.
4. Elmasri, R., & Navathe, S. B. (2017). *Fundamentals of Database Systems*. Pearson.

---

## Navigasi Repository

| Folder | Keterangan |
|--------|------------|
| [README.md](README.md) | Kembali ke halaman Landasan Teori |
| [php.md](php.md) | Teori PHP |
| [bootstrap.md](bootstrap.md) | Teori Bootstrap |
| [../02-literatur](../02-literatur/) | Studi Literatur |
| [../05-kode](../05-kode/) | Implementasi Sistem |

---

**Status:** ✅ Selesai
