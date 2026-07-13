# WS-13: Data Preprocessing

> **Bab 13 — Preprocessing & Persiapan Data untuk Analisis**

---

## Ringkasan Materi

### Data Refinement Pipeline

```
Raw Data → Cleaning → Transformation → Normalization → Processed Data → Analysis Ready
```

Setiap tahap memiliki tujuan berbeda. **Preprocessing bukan langkah teknis biasa** — setiap keputusan preprocessing adalah keputusan riset yang bisa mengubah kesimpulan.

### Empat Prinsip Preprocessing

| Prinsip | Deskripsi |
|---------|----------|
| **Consistency** | Metode sama untuk data yang sama |
| **Transparency** | Setiap langkah terdokumentasi |
| **Reproducibility** | Orang lain bisa mengulang dengan hasil sama |
| **Minimal Distortion** | Ubah sesedikit mungkin; jika normalisasi tidak perlu, jangan lakukan |

### Cleaning Triad

| Masalah | Strategi | Risiko |
|---------|---------|--------|
| **Missing values** | | |
| — Listwise deletion | Missing < 5%, random | Data loss |
| — Mean/median imputation | Sedikit missing, dist. normal | Mengurangi variabilitas |
| — Model-based imputation | Banyak missing, pola sistematis | Introduces dependency |
| — Flag & separate | Missing karena alasan substantif | Kompleksitas analisis |
| **Duplikat** | Identifikasi → verifikasi → hapus | False positive (data mirip ≠ duplikat) |
| **Error format** | Standardisasi tipe, encoding | Kehilangan informasi saat konversi |

### Normalisasi — Kapan & Metode Mana

| Metode | Formula | Output | Sensitif Outlier? |
|--------|---------|--------|-------------------|
| Min-max | (x-min)/(max-min) | [0, 1] | Ya |
| Z-score | (x-mean)/std | Unbounded | Lebih robust |
| Robust scaling | (x-median)/IQR | Unbounded | Paling robust |

**Kunci:** Parameter normalisasi harus dihitung dari **training set saja** — bukan seluruh data. Pelanggaran = **data leakage**.

### Data Leakage Prevention

Data leakage terjadi ketika informasi dari test set "bocor" ke preprocessing:
- Normalisasi parameter dari seluruh dataset ← **SALAH**
- Cross-validation dilakukan sebelum split ← **SALAH**
- Feature selection menggunakan label test set ← **SALAH**

### Jebakan Kognitif

1. "Preprocessing cuma teknis — tidak perlu detail" → bisa ubah kesimpulan
2. "Lebih banyak preprocessing = lebih bersih = lebih baik" → over-processing distorsi data
3. "Normalisasi selalu diperlukan" → belum tentu, tergantung metode analisis
4. "Imputation sama untuk semua situasi" → strategi harus sesuai konteks

---

## Template A.13 — Preprocessing Documentation Log

```
PREPROCESSING LOG

Dataset           : Data Absensi Guru Berbasis QR Code
Jumlah data awal  : 5 data absensi

Cleaning:

| Masalah | Jumlah Kasus | Penanganan | Justifikasi |
|---------|-------------|------------|-------------|
| Missing value | 0 | Tidak ada tindakan | Seluruh data berhasil tersimpan |
| Duplikat | 0 | Tidak ada tindakan | Sistem hanya membuat satu data absensi per hari dan scan berikutnya mengisi jam pulang |
| Error format | 0 | Validasi format tanggal, jam, dan status | Seluruh data sesuai format database MySQL |

Transformation:

| Transformasi | Variabel | Detail | Alasan |
|--------------|----------|--------|--------|
| Format tanggal | tanggal | YYYY-MM-DD menjadi DD-MM-YYYY saat ditampilkan | Agar lebih mudah dibaca pengguna |
| Format waktu | jam_masuk, jam_pulang | Format HH:mm:ss | Menyeragamkan tampilan data |
| Relasi data | guru_id | Menampilkan nama guru menggunakan relasi tabel guru | Mempermudah pembacaan laporan |

Normalization:

Metode    : Tidak dilakukan
Alasan    : Data berupa identitas, tanggal, waktu, dan status sehingga tidak memerlukan normalisasi.
Parameter : Tidak ada

Leakage Check:

[✓] Tidak ada parameter normalisasi
[✓] Tidak ada informasi yang bocor antar data
[✓] Seluruh proses dilakukan setelah data berhasil tersimpan

Jumlah data akhir : 5 data absensi

Script tersedia : [✓] Ya → Laravel Controller dan Model
```

---

## Latihan 1 — Cleaning Plan

Periksa dataset Anda (atau dataset contoh) dan dokumentasikan masalah yang ditemukan.

| Masalah              | Jumlah Kasus | Penanganan          | Justifikasi                                                                                |
| -------------------- | ------------ | ------------------- | ------------------------------------------------------------------------------------------ |
| Missing data         | 0            | Tidak ada           | Semua data hasil scan berhasil tersimpan ke database                                       |
| Data duplikat        | 0            | Tidak ada           | Sistem hanya membuat satu data absensi setiap guru per hari, scan kedua mengisi jam pulang |
| Error format tanggal | 0            | Format diseragamkan | Menggunakan tipe DATE pada database                                                        |
| Error format jam     | 0            | Format diseragamkan | Menggunakan tipe TIME pada database                                                        |
| Error status         | 0            | Validasi status     | Status hanya menggunakan nilai Hadir, Izin, Sakit, dan Alpha                               |


**Jumlah data sebelum cleaning:** 5
**Jumlah data setelah cleaning:** 5
**Persentase data yang hilang/berubah:** 0 %

---

## Latihan 2 — Normalisasi Decision

Tentukan apakah data Anda perlu normalisasi, dan jika ya, metode apa yang tepat.

| Variabel   | Range Asli                | Distribusi | Outlier? | Metode Normalisasi | Alasan                            |
| ---------- | ------------------------- | ---------- | -------- | ------------------ | --------------------------------- |
| guru_id    | 1–5                       | Nomor urut | Tidak    | Tidak perlu        | Hanya sebagai identitas guru      |
| tanggal    | Tanggal absensi           | Konsisten  | Tidak    | Tidak perlu        | Sudah menggunakan tipe DATE       |
| jam_masuk  | 00:00–23:59               | Normal     | Tidak    | Tidak perlu        | Digunakan sebagai informasi waktu |
| jam_pulang | 00:00–23:59               | Normal     | Tidak    | Tidak perlu        | Digunakan sebagai informasi waktu |
| status     | Hadir, Izin, Sakit, Alpha | Kategori   | Tidak    | Tidak perlu        | Data kategorikal                  |


**Apakah normalisasi diperlukan?** [ ] Ya / [ya] Tidak
**Justifikasi:**
> Normalisasi tidak diperlukan karena data penelitian berupa data identitas guru, tanggal, waktu absensi, dan status kehadiran. Variabel-variabel tersebut tidak digunakan untuk perhitungan berbasis jarak atau algoritma Machine Learning sehingga tidak memerlukan transformasi nilai numerik. Data sudah memiliki format yang seragam sesuai dengan tipe data pada database MySQL.

**Leakage check:**
- [ya] Parameter dihitung dari training set saja
- [ya] Normalisasi diterapkan setelah train-test split

---

## Latihan 3 — Preprocessing Report

Buat ringkasan preprocessing lengkap — dokumentasi yang cukup bagi orang lain untuk mereplikasi.

```
PREPROCESSING SUMMARY

1. Dataset
   Data Absensi Guru Berbasis QR Code

2. Data awal
   5 records
   6 features
   (guru_id, tanggal, jam_masuk, jam_pulang, status, created_at)

3. Cleaning
   - Missing values : 0 kasus
     Metode : Tidak ada tindakan

   - Duplikat : 0 kasus
     Tindakan : Tidak ada

   - Error format : 0 kasus
     Tindakan : Validasi format tanggal, jam, dan status

4. Transformation

   - Mengubah format tampilan tanggal menjadi DD-MM-YYYY
   - Menampilkan nama guru melalui relasi tabel guru
   - Menyeragamkan format jam menjadi HH:mm:ss

5. Normalisasi

   Tidak dilakukan

   Alasan:
   Data penelitian berupa data kategorikal, tanggal, dan waktu sehingga tidak memerlukan normalisasi.

6. Data akhir

   5 records
   6 features

7. Leakage Check
   [✓] Lulus
```

---

## Refleksi

> Apakah Anda pernah melakukan normalisasi "karena biasa dilakukan" tanpa mempertimbangkan apakah benar-benar diperlukan?
Pada penelitian ini saya tidak melakukan normalisasi data karena setelah mempelajari materi, saya memahami bahwa normalisasi hanya diperlukan pada jenis data tertentu, terutama untuk analisis statistik atau algoritma machine learning. Data yang digunakan dalam sistem absensi guru berupa identitas guru, tanggal, waktu, dan status kehadiran sehingga sudah memiliki format yang sesuai dan tidak memerlukan normalisasi.

>  Apa risiko over-preprocessing?
Over-preprocessing dapat menyebabkan perubahan pada data yang sebenarnya tidak diperlukan sehingga informasi asli dapat berkurang atau bahkan hilang. Selain itu, proses yang terlalu banyak juga dapat membuat hasil analisis menjadi kurang sesuai dengan kondisi nyata. Oleh karena itu, preprocessing hanya dilakukan pada bagian yang benar-benar diperlukan, seperti validasi format data, pengecekan data duplikat, dan memastikan tidak ada data yang hilang sebelum dilakukan analisis.
