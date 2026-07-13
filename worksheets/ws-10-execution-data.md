# WS-10: Experiment Execution & Data Collection

> **Bab 10 — Eksekusi Eksperimen & Pengumpulan Data**

---

## Ringkasan Materi

### Experiment Execution Pipeline

```
Design → Execution Plan → Controlled Execution → Data Collection → Data Logging → Dataset for Analysis
```

### Multiple Run = Non-Negotiable

Single run **tidak pernah cukup** untuk klaim ilmiah. Minimum 5-10 run per skenario dengan seed berbeda. Multiple run menghasilkan:
- Mean, std, confidence interval
- Distribusi hasil → uji statistik
- Variabilitas → error bar di grafik

### Execution Plan

Setiap eksperimen harus memiliki plan sebelum eksekusi:
- Daftar skenario
- Jumlah run per skenario
- Random seed per run (pre-determined!)
- Urutan eksekusi (randomisasi/counterbalancing)
- Pre-execution checklist

### Data Logging Komprehensif

Setiap run menghasilkan log terstruktur:
1. **Identitas** — Run ID, timestamp, skenario
2. **Konfigurasi** — Semua parameter, seed, code version
3. **Hasil** — Semua metrik, output detail
4. **Metadata** — Waktu eksekusi, resource usage, warning/error

Format: CSV/JSON/database — **bukan stdout yang di-copy-paste**.

### Engineering vs Research Execution

| Aspek | Engineering | Research |
|-------|-----------|---------|
| Run | Sekali (deploy) | Multiple (min 5-10, seed berbeda) |
| Logging | Error log, access log | Semua parameter, metrik, metadata |
| Anomali | Bug → fix → redeploy | Investigasi → dokumentasi → analisis |
| Urutan | Tidak penting | Bisa bias — perlu randomisasi |

### Anomali = Dokumentasi, Bukan Hapus

Run gagal/anomali tidak boleh dihapus tanpa dokumentasi. Bisa jadi:
- **Bug** → fix & re-run (dokumentasikan!)
- **Batas kemampuan metode** → DNF = temuan
- **Data yang bias** jika hanya simpan run "berhasil"

### Jebakan Kognitif

1. "Satu angka cukup" → tanpa distribusi, tidak bisa diuji
2. "Seed tidak penting" → bahkan algoritma deterministik bisa dipengaruhi library stokastik
3. "Run gagal langsung hapus" → kehilangan temuan potensial
4. "Semua run harus hari ini" → thermal throttling, fatigue

---

## Template A.10 — Execution Plan & Data Log

Penelitian ini bertujuan untuk menguji apakah sistem absensi guru berbasis QR Code dapat mencatat kehadiran guru secara cepat, akurat, dan konsisten. Eksperimen dilakukan beberapa kali menggunakan QR Code milik guru yang berbeda untuk memastikan hasil yang diperoleh stabil dan dapat dipercaya.

EXECUTION PLAN
| Run # | Skenario                                 | Seed | Parameter Kunci                          | Status  |
| ----- | ---------------------------------------- | ---- | ---------------------------------------- | ------- |
| 1     | Scan QR Guru (Jam Masuk)                 | 101  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 2     | Scan QR Guru (Jam Pulang)                | 102  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 3     | Scan QR Guru lain (Jam Masuk)            | 103  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 4     | Scan QR Guru lain (Jam Pulang)           | 104  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 5     | Uji konsistensi penyimpanan data absensi | 105  | Database MySQL, Laravel 12               | Planned |


Total skenario : 3 skenario (Jam Masuk, Jam Pulang, Penyimpanan Data)
Run per skenario : 2 kali (kecuali pengujian penyimpanan data dilakukan 1 kali)
Total run keseluruhan : 5 kali

DATA LOG (per run):

Run ID     : RUN-001
Timestamp  : 13-07-2026 20:32:19
Skenario   : Scan QR Jam Masuk
Input      : QR Code Guru (guru:1) dipindai menggunakan kamera laptop melalui browser Google Chrome.
Output     : QR Code berhasil terbaca, data guru ditemukan, jam masuk tercatat pukul 20:32:19, status "Hadir", dan data berhasil disimpan ke tabel absensis.
Anomali    : Tidak ada.
Catatan    : Proses scan berlangsung dengan lancar, waktu pembacaan QR Code sekitar 1–2 detik, kemudian data langsung muncul pada menu Absensi, Dashboard, dan Laporan.
```
DATA LOG (per run)

Run ID     : RUN-002
Timestamp  : 13-07-2026 20:41:16
Skenario   : Scan QR Jam Pulang
Input      : QR Code Guru (guru:1) dipindai kembali menggunakan kamera laptop.
Output     : Sistem mengenali bahwa guru telah melakukan absensi masuk pada hari yang sama, kemudian kolom jam_pulang berhasil diperbarui menjadi 22:05:11.
Anomali    : Tidak ada.
Catatan    : Sistem tidak membuat data absensi baru, tetapi memperbarui data absensi yang sudah ada dengan mengisi jam pulang.

---

## Latihan 1 — Execution Plan

Susun execution plan untuk eksperimen Anda. Tentukan skenario, jumlah run, dan seed sebelum eksekusi.

| Run # | Skenario                                 | Seed | Parameter Kunci                          | Status  |
| ----- | ---------------------------------------- | ---- | ---------------------------------------- | ------- |
| 1     | Scan QR Guru (Jam Masuk)                 | 101  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 2     | Scan QR Guru (Jam Pulang)                | 102  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 3     | Scan QR Guru lain (Jam Masuk)            | 103  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 4     | Scan QR Guru lain (Jam Pulang)           | 104  | Laravel 12, Google Chrome, Webcam Laptop | Planned |
| 5     | Uji konsistensi penyimpanan data absensi | 105  | Database MySQL, Laravel 12               | Planned |


Total skenario : 3 skenario (Jam Masuk, Jam Pulang, Penyimpanan Data)
Run per skenario : 2 kali (kecuali pengujian penyimpanan data dilakukan 1 kali)
Total run keseluruhan : 5 kali

---

## Latihan 2 — Data Log Terstruktur

Desain format data log untuk eksperimen Anda. Tentukan field apa saja yang akan dicatat.

| Field     | Contoh                |
| --------- | -------------------   |
| Run ID    | RUN-001               |
| Timestamp | 13-07-2026 20:32:19   |
| Nama Guru | Atik Kusuma Dewi, S.Pd|
| NIP       | 3305184812920002      |
| Skenario  | Scan QR Jam Masuk     |


**Konfigurasi:**
| Field        | Contoh                   |
| ------------ | ------------------------ |
| Seed         | 101                      |
| Code Version | Sistem Absensi Guru v1.0 |
| Framework    | Laravel 12               |
| PHP          | 8.2                      |
| Database     | MySQL (XAMPP)            |
| Browser      | Google Chrome            |
| Kamera       | Webcam Laptop            |
| Library QR   | html5-qrcode             |


**Hasil:**
| Metrik            | Tipe Data | Range Valid          |
| ----------------- | --------- | -------------------- |
| QR Code Terbaca   | Boolean   | True / False         |
| Status Scan       | String    | Berhasil / Gagal     |
| Jam Masuk         | Time      | 00:00–23:59          |
| Jam Pulang        | Time      | 00:00–23:59          |
| Status Kehadiran  | String    | Hadir / Izin / Alpha |
| Data Tersimpan    | Boolean   | True / False         |
| Waktu Proses Scan | Float     | > 0 detik            |


**Format output:** [YA] CSV / [ ] JSON / [YA] Database / [ ] Lainnya: ____

---

## Latihan 3 — Anomaly Protocol

Rencanakan bagaimana menangani anomali. Untuk setiap jenis, tentukan langkah yang diambil.
Selama proses eksperimen, kemungkinan muncul beberapa kondisi yang menyebabkan hasil tidak sesuai harapan. Setiap anomali akan didokumentasikan terlebih dahulu sebelum dilakukan perbaikan agar seluruh proses penelitian tetap transparan dan dapat dipertanggungjawabkan.

| Jenis Anomali                 | Contoh                                                               | Tindakan                                                                                                                                         |
| ----------------------------- | -------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------ |
| Run gagal (crash)             | Browser tidak dapat mengakses kamera                                 | Memeriksa izin kamera pada browser, mendokumentasikan penyebabnya, kemudian melakukan pengujian ulang setelah izin diberikan.                    |
| Hasil ekstrem                 | QR Code membutuhkan waktu lebih dari 10 detik untuk terbaca          | Memeriksa kualitas pencahayaan, posisi kamera, dan kualitas QR Code, kemudian mengulang proses scan.                                             |
| Waktu eksekusi anomali        | Proses penyimpanan data ke database lebih lambat dari biasanya       | Memeriksa koneksi database dan performa server lokal (XAMPP), kemudian melakukan pengujian ulang.                                                |
| Inkonsistensi dengan run lain | QR Code berhasil dipindai tetapi data belum muncul pada menu Absensi | Memeriksa route Laravel, `ScanController`, model `Absensi`, dan proses penyimpanan ke database sebelum melakukan pengujian ulang.                |
| Scan ganda                    | Guru melakukan scan lebih dari satu kali dalam waktu yang sama       | Sistem memeriksa data absensi pada tanggal yang sama sehingga scan kedua digunakan untuk mengisi jam pulang dan tidak membuat data absensi baru. |


Prinsip: Detect → Investigate → Document → Decide

Artinya setiap masalah dideteksi terlebih dahulu, kemudian dianalisis penyebabnya, didokumentasikan secara lengkap, dan diputuskan apakah perlu dilakukan pengujian ulang atau cukup dijadikan bagian dari hasil penelitian.

---

## Refleksi

> Pernahkah Anda melaporkan hasil riset/tugas dari single run? Apa risikonya? Bagaimana multiple run mengubah kepercayaan terhadap hasil? tidak

**Pengalaman sebelumnya:**
> Pada tugas pemrograman sebelumnya saya sering melakukan pengujian hanya satu kali. Ketika fitur berhasil dijalankan, misalnya QR Code berhasil dipindai dan data masuk ke database, saya langsung menyimpulkan bahwa sistem sudah berjalan dengan baik tanpa melakukan pengujian ulang pada kondisi yang berbeda.

**Yang akan dilakukan berbeda:**
> Pada penelitian ini saya melakukan beberapa kali pengujian menggunakan skenario yang berbeda, yaitu pengujian jam masuk, jam pulang, dan penyimpanan data absensi. Setiap proses didokumentasikan melalui data log yang mencatat waktu pengujian, konfigurasi sistem, hasil scan, serta kemungkinan munculnya anomali. Dengan melakukan multiple run, hasil penelitian menjadi lebih konsisten, lebih objektif, dan memberikan tingkat kepercayaan yang lebih tinggi terhadap kinerja sistem absensi guru berbasis QR Code.
