# Data Absensi

## Deskripsi

Data absensi merupakan data yang dihasilkan dari proses pemindaian (scan) QR Code oleh guru pada saat melakukan kehadiran. Data ini digunakan untuk mencatat aktivitas absensi masuk dan pulang setiap guru secara otomatis sehingga proses pencatatan menjadi lebih cepat, akurat, dan mengurangi kesalahan pencatatan manual.

Data absensi disimpan pada tabel `absensi` di dalam database MySQL. Setiap data absensi memiliki hubungan dengan data guru sehingga setiap riwayat kehadiran dapat diketahui berdasarkan identitas guru yang melakukan absensi.

---

## Tujuan Penggunaan Data

Data absensi digunakan untuk:

- Mencatat waktu kehadiran guru.
- Mencatat waktu kepulangan guru.
- Menentukan status kehadiran guru.
- Menyediakan riwayat absensi berdasarkan tanggal.
- Menjadi dasar dalam penyusunan laporan absensi.

---

## Struktur Data

| No | Nama Field | Tipe Data | Keterangan |
|----|------------|-----------|------------|
| 1 | id | Integer | Primary Key |
| 2 | guru_id | Integer | Foreign Key ke tabel guru |
| 3 | tanggal | Date | Tanggal absensi |
| 4 | jam_masuk | Time | Waktu hadir |
| 5 | jam_pulang | Time | Waktu pulang |
| 6 | status | Enum | Hadir, Izin, Sakit, Alpha |
| 7 | created_at | Timestamp | Waktu data dibuat |
| 8 | updated_at | Timestamp | Waktu data diperbarui |

---

## Contoh Data

Berikut merupakan contoh data absensi yang tersimpan pada sistem.

![Data Absensi](03-data-absensi.png)

**Gambar 2.** Contoh data absensi guru.

---

## Alur Penggunaan Data

Data absensi diproses melalui tahapan berikut.

1. Guru melakukan scan QR Code.
2. Sistem memverifikasi identitas guru.
3. Sistem mencatat tanggal dan waktu absensi.
4. Data disimpan ke dalam tabel `absensi`.
5. Administrator dapat melihat riwayat absensi melalui menu laporan.

---

## Hubungan dengan Data Lain

Data absensi berhubungan langsung dengan tabel berikut.

| Tabel | Hubungan |
|--------|----------|
| guru | Menampilkan identitas guru yang melakukan absensi |
| users | Digunakan oleh administrator untuk mengelola data absensi |

---

## Kesimpulan

Data absensi merupakan hasil utama dari proses bisnis Sistem Absensi Guru Berbasis QR Code. Data ini menjadi dasar dalam proses monitoring kehadiran, evaluasi kedisiplinan guru, serta penyusunan laporan absensi yang dapat diakses oleh administrator secara cepat dan terstruktur.
