# WS-09: Implementation & Environment

> **Bab 9 — Implementasi Riset & Kontrol Lingkungan**

---

## Ringkasan Materi

### Implementasi Riset ≠ Coding Biasa

Tujuan implementasi riset bukan membuat software yang berfungsi, melainkan membangun **instrumen pengukuran yang konsisten**. Setiap modul harus di-mapping ke variabel (dari Bab 6), parameter harus config-driven, dan logging aktif dari hari pertama.

> **Mengapa reproducibility penting?** Sains dibangun di atas prinsip verifikasi — temuan harus bisa dikonfirmasi oleh peneliti lain. _Replicability crisis_ yang terjadi di banyak paper riset ML/AI disebabkan oleh environment tidak terdokumentasi: orang lain tidak bisa reproduksi, hasil diragukan, kepercayaan terhadap temuan hilang. Prinsip: **dokumentasi environment = snapshot kredibilitas riset Anda.**

### Reproducible Implementation Model

```
Design → Implementation → Environment Setup → Execution Consistency → Reproducibility → Trustworthy Result
```

Setiap transisi memiliki syarat:
- Design → Implementation: kode sesuai mapping variabel-ke-komponen
- Implementation → Environment: versi, dependency, seed, path, OS eksplisit
- Environment → Consistency: seed terkunci, urutan deterministik
- Consistency → Reproducibility: dokumentasi lengkap
- Reproducibility → Trust: siapa pun ikuti dokumentasi → hasil sama/serupa

### Repeatability vs Reproducibility

| Level | Peneliti | Environment | Hasil |
|-------|---------|-------------|-------|
| **Repeatability** | Sama | Sama | Sama persis |
| **Reproducibility** | Berbeda | Berbeda (ikuti docs) | Sama/serupa |

Capai **repeatability** dulu, baru **reproducibility**.

### Engineering vs Research Perspective

| Aspek | Engineering | Research |
|-------|-----------|---------|
| Tujuan | Sistem berfungsi untuk user | Instrumen pengukuran konsisten |
| Dependency | Update ke terbaru | Lock di versi spesifik |
| Testing | Unit, integration, E2E | Repeatability test (run ulang → sama?) |
| Dokumentasi | User guide, API docs | Environment spec, execution steps, expected output |
| Config | Default masuk akal | Setiap parameter eksplisit & adjustable |

### Jebakan Kognitif

1. Menunda environment setup → bug sulit dilacak
2. Tidak pakai version control → hasil tidak bisa direkonstruksi
3. Menolak Docker/container → "di laptop saya bisa" saat review
   - **Docker** = teknologi container yang "membungkus" aplikasi beserta seluruh dependency-nya dalam satu unit terisolasi. Hasilnya: kode berjalan identik di laptop, server, maupun reviewer lain. Intro singkat: `docker run -v $(pwd):/workspace environment-image python run_experiment.py`
4. 3× hasil sama ≠ repeatable (bisa cache/state tersimpan)

### Dependency Locking

Mengandalkan "install library terbaru" berbahaya: versi berbeda = perilaku berbeda = hasil tidak reproducible. Praktik:
- **Python**: buat `requirements.txt` dengan versi eksplisit: `scikit-learn==1.3.2`, lalu kunci dengan `pip freeze > requirements.txt`
- **Conda**: gunakan `conda env export > environment.yml` untuk snapshot lengkap
- **Node.js/R/Julia**: gunakan `package-lock.json` / `renv.lock` / `Project.toml` — semua fungsi serupa: lock versi + hash

### Istilah Penting

- **Environment Specification** — Deskripsi lengkap: hardware, OS, runtime, library + versi, config, seed
- **Dependency** — Komponen eksternal yang harus di-lock versinya
- **Config-driven** — Parameter dieksternalisasi ke file konfigurasi, bukan hardcode

---

## Template A.9 — Dokumentasi Setup Eksperimen

```
EXPERIMENT SETUP DOCUMENTATION

Hardware:
  CPU     : Intel Core i5
  RAM     : 8 GB
  GPU     : Intel UHD Graphics
  Storage : SSD 256 GB

Software:
  OS        : Windows 10 Pro 64-bit
  Runtime   : PHP 8.2.12
  Framework : Laravel 12.63.0
  Database  : MYSQL
  IDE       : VS Code

| Library        | Version | Sumber   | Hash         |
| -------------- | ------- | -------- | ------------ |
| Laravel        | 12.63.0 | Composer | package-lock |
| PHP            | 8.2.12  | XAMPP    | Official     |
| Bootstrap      | 5.3.3   | CDN      | Official     |
| Simple QR Code | 4.2.0   | Composer | Official     |
| Chart.js       | 4.x     | CDN      | Official     |



Konfigurasi:
  Config file     : .env
  Database        : MYSQL
  Random seed     : Tidak digunakan
  QR Folder       : storage/app/public/qrcode

Reproducibility Check:
  [YA] Dependency terdokumentasi (requirements.txt / lock file)
  [YA] Seed ditetapkan di semua level (Python, NumPy, framework)
  [YA] Config di version control
  [YA] README instruksi reproduksi lengkap
```

---

## Latihan 1 — Environment Specification

Dokumentasikan environment untuk eksperimen Anda (boleh environment saat ini atau yang direncanakan).

| Komponen    | Spesifikasi                                                       |
| ----------- | ----------------------------------------------------------------- |
| CPU         | Intel Core i5 (64-bit) *(sesuaikan dengan laptopmu jika berbeda)* |
| RAM         | 8 GB DDR4 *(sesuaikan jika berbeda)*                              |
| GPU         | Intel UHD Graphics (Integrated)                                   |
| Storage     | SSD 256 GB                                                        |
| OS          | Windows 10 Pro 64-bit                                             |
| Runtime     | PHP 8.2.12                                                        |
| Framework   | Laravel 12.63.0                                                   |
| Web Server  | Apache (XAMPP)                                                    |
| Database    | MySQL                                                             |
| IDE         | Visual Studio Code                                                |
| Browser     | Google Chrome / Microsoft Edge                                    |
| Random Seed | Tidak digunakan (aplikasi web bersifat deterministik)             |


**Dependencies (minimal 5):**

| Library           | Version | Alasan Dibutuhkan            |
| ----------------- | ------- | ---------------------------- |
| Laravel Framework | 12.63.0 | Framework utama aplikasi     |
| PHP               | 8.2.12  | Runtime Laravel              |
| Bootstrap         | 5.3.3   | Membangun antarmuka pengguna |
| Simple QR Code    | 4.2.0   | Membuat QR Code guru         |
| Chart.js          | 4.x     | Menampilkan grafik dashboard |
| MySQL             | 8.x     | Penyimpanan data             |
| Composer          | 2.x     | Manajemen dependency PHP     |


---

## Latihan 2 — Repeatability Test Plan

Rancang tes repeatability sederhana: jalankan kode yang sama 3× di environment yang sama.

| Run | Kondisi        | Pengujian        | Hasil Sama? |
| --- | -------------- | ---------------- | ----------- |
| 1   | Data Guru sama | Generate QR Code | Ya          |
| 2   | Data Guru sama | Generate QR Code | Ya          |
| 3   | Data Guru sama | Generate QR Code | Ya          |

**Metrik**
- QR Code berhasil dibuat
- File tersimpan pada folder storage/app/public/qrcode
- Nama file sesuai database
- Data guru tetap sama
- QR dapat dipindai dengan benar

**Jika hasil berbeda, kemungkinan penyebab:**
**Kemungkinan penyebab**
- Folder storage belum di-link
- Dependency QR Code belum lengkap.
- Konfigurasi .env berubah.
- Database berbeda.
- Cache Laravel belum dibersihkan.
___________________________________________________

**Checklist kontrol yang sudah diterapkan:**
- [YA] Random seed di-set di semua level
- [YA] Tidak ada background process yang mengganggu
- [YA] Cache dibersihkan antar-run
- [YA] Config file yang sama untuk semua run

---

## Latihan 3 — README Eksperimen

Tulis README minimum untuk eksperimen Anda (6 komponen wajib).

```
# Judul Eksperimen: **Implementasi Sistem Absensi Guru Berbasis QR Code Menggunakan Laravel**

## 1. Environment
- Windows 10 Pro
- PHP 8.2.12
- Laravel 12.63.0
- Apache (XAMPP)
- MySQL
- Bootstrap 5
- Visual Studio Code

## 2. Installation
- Clone project : git clone <repository>
- Masuk ke folder project : cd absensi-qrcode
- Install dpendency : composer install
- Salin konfogurasi : copy .env.example .env
- Generate application key : php artisan key:generate
- Migrasi database : php artisan migrate
- Hubungkan storage : php artisan storage:link
- Jalankan Aplikasi : php artisan serve

## 3. Data
Data penelitian menggunakan data guru yang terdiri dari:
- NIP
- Nama Guru
- Jabatan
- Jenis Kelamin
- Nomor HP
- Email
- QR Code

## 4. Execution
- Menjalankan Aplikasi : php artisan serve
- Akses melalui browser : http://127.0.0.1:8000

## 5. Configuration
Konfigurasi menggunakan file .env. Parameter utama meliputi:
- Database MySQL
- APP_URL
- Storage Public
- QR Code Folder

## 6. Expected Output
Output yang diharapkan meliputi:
- Login berhasil.
- Dashboard menampilkan statistik guru.
- CRUD data guru berjalan normal.
- QR Code setiap guru dapat dihasilkan dan disimpan.
- QR Code dapat digunakan pada proses absensi.
- Data absensi tersimpan ke database dan dapat ditampilkan dalam laporan.

---

## Refleksi

> Apakah eksperimen Anda saat ini bisa direproduksi oleh orang lain tanpa bantuan Anda? Komponen apa yang masih hilang?
Ya, sebagian besar dapat direproduksi. Seluruh kebutuhan perangkat lunak, versi framework, runtime PHP, database, serta langkah instalasi telah didokumentasikan sehingga peneliti lain dapat menjalankan aplikasi pada lingkungan yang serupa. Namun, untuk mencapai reproducibility yang lebih baik masih diperlukan dokumentasi repository Git, contoh data awal (seed database), serta panduan konfigurasi deployment yang lebih lengkap.

**Level saat ini:** [YA] Repeatability / [ ] Reproducibility / [ ] Belum keduanya
**Komponen yang belum terdokumentasi:**
- Repository Git
- Seed database
- Dokumentasi deployment
- Backup database
- Panduan konfigurasi server produksi
