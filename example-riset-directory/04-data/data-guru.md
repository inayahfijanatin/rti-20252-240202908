# Data Guru

## Deskripsi

Data guru merupakan data utama yang digunakan dalam Sistem Absensi Guru Berbasis QR Code. Data ini digunakan sebagai dasar dalam proses pembuatan QR Code, pengelolaan identitas guru, serta pencatatan kehadiran.

Setiap guru memiliki identitas yang tersimpan di dalam basis data sehingga sistem dapat mengenali guru yang melakukan proses absensi melalui QR Code.

---

## Struktur Data

| No | Nama Field | Tipe Data | Keterangan |
|----|------------|-----------|------------|
| 1 | id | Integer | Primary Key |
| 2 | nip | Varchar | Nomor Induk Pegawai |
| 3 | nama_guru | Varchar | Nama lengkap guru |
| 4 | jabatan | Varchar | Jabatan guru |
| 5 | jk | Enum | Jenis kelamin |
| 6 | no_hp | Varchar | Nomor telepon |
| 7 | email | Varchar | Alamat email |
| 8 | qr_code | Varchar | Nama file QR Code |
| 9 | created_at | Timestamp | Waktu data dibuat |
|10 | updated_at | Timestamp | Waktu data diperbarui |

---

## Contoh Data

Berikut merupakan contoh data guru yang digunakan pada penelitian.

![Data Guru](01-data-guru.png)

**Gambar 1.** Data guru pada Sistem Absensi Guru Berbasis QR Code.

---

## Kegunaan Data

Data guru digunakan dalam beberapa proses utama pada sistem, yaitu:

- Menyimpan identitas setiap guru.
- Menghasilkan QR Code unik untuk masing-masing guru.
- Menjadi referensi pada proses absensi masuk dan pulang.
- Menyusun laporan kehadiran guru.
