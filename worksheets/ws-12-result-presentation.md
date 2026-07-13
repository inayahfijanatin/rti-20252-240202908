# WS-12: Result Presentation & Visualization

> **Bab 12 — Penyajian Hasil & Visualisasi**

---

## Ringkasan Materi

### Data → Insight Model

```
Validated Data → Structured Presentation → Visualization → Pattern Recognition → Insight
```

Penyajian **mendahului** analisis. Tabel dan grafik membantu peneliti "melihat" data sebelum menghitung. Langsung ke uji statistik tanpa visualisasi berisiko kesimpulan yang secara teknis benar tapi kontekstual salah (Anscombe's Quartet, 1973).

### Tabel = Presisi, Grafik = Pola

Keduanya **saling melengkapi**:
- Tabel: angka presisi, self-contained (dipahami tanpa teks), sortable
- Grafik: pola visual, tren, perbandingan cepat

### Jenis Grafik Berdasarkan Tujuan

| Tujuan | Jenis Grafik |
|--------|-------------|
| Perbandingan antar-skenario | Bar chart (grouped/stacked) |
| Distribusi per-skenario | Box plot / violin plot |
| Tren temporal | Line chart |
| Korelasi dua variabel | Scatter plot |
| Proporsi (total = 100%) | Pie chart (hati-hati!) |

### Contoh Tabel Hasil yang Baik

| Model | Accuracy (%) | F1-Score (%) | Training Time (min) |
|-------|-------------|-------------|---------------------|
| BERT | 88.4 ± 1.2 | 87.1 ± 1.4 | 45.2 ± 3.1 |
| LSTM | 86.1 ± 1.8 | 84.5 ± 2.0 | 12.8 ± 1.2 |
| SVM | 82.3 ± 0.9 | 80.7 ± 1.1 | 0.3 ± 0.1 |

*N=10 per model. Mean ± std. Diurutkan berdasarkan Accuracy.*

### Visualization Bias — Yang Harus Dihindari

| Bias | Deskripsi | Dampak |
|------|----------|--------|
| Truncated axis | Y tidak dari 0 | Memperbesar perbedaan kecil |
| Inconsistent scale | Dua grafik skala beda | Perbandingan menyesatkan |
| Cherry-picked data | Hanya tampilkan yang "menang" | Selektif, tidak jujur |
| 3D effects | Efek 3D tanpa dimensi data ke-3 | Distorsi tanpa informasi |
| Missing error bar | Tidak ada variabilitas | Menyembunyikan ketidakpastian |

### Engineering vs Research Presentation

| Aspek | Engineering | Research |
|-------|-----------|---------|
| Tujuan grafik | Dashboard monitoring | Mendukung argumen ilmiah |
| Informasi wajib | KPI, threshold | Mean, std, CI, N, p-value |
| Bias handling | Less critical | Wajib dihindari (peer-review) |

---

## Template A.12 — Result Presentation Plan

```
RESULT PRESENTATION PLAN

Research Question :
Apakah sistem absensi guru berbasis QR Code yang dibangun menggunakan Laravel 12 mampu mencatat data absensi guru secara cepat, akurat, dan konsisten, baik pada saat jam masuk maupun jam pulang?

Metrik Utama :
1. Keberhasilan pembacaan QR Code
2. Waktu proses scan QR Code
3. Keberhasilan penyimpanan data ke database
4. Ketepatan pencatatan jam masuk dan jam pulang

Tabel Hasil:

| Skenario                    | Waktu Scan (mean ± std) | Keberhasilan Scan (mean ± std) | n |
|-----------------------------|-------------------------|---------------------------------|---|
| Scan QR Jam Masuk           | 1,35 ± 0,15 detik       | 100% ± 0%                       | 5 |
| Scan QR Jam Pulang          | 1,42 ± 0,18 detik       | 100% ± 0%                       | 5 |
| Penyimpanan Data Absensi    | 1,30 ± 0,12 detik       | 100% ± 0%                       | 5 |

Visualisasi yang Direncanakan:

| # | Jenis Grafik | Pesan Utama | Metrik |
|---|-------------|-------------|--------|
| 1 | Bar Chart | Perbandingan rata-rata waktu scan pada setiap skenario | Mean waktu scan |
| 2 | Pie Chart | Persentase keberhasilan dan kegagalan proses scan QR Code | Status scan |
| 3 | Line Chart | Konsistensi waktu proses scan pada setiap pengujian | Waktu scan setiap run |

Bias Check:

[✓] Y-axis dimulai dari 0
[✓] Error bar ditampilkan (mean ± std)
[✓] Seluruh data ditampilkan (tidak memilih data tertentu)
[✓] Tidak menggunakan grafik 3D
```

---

## Latihan 1 — Tabel Hasil

Buat tabel hasil eksperimen Anda (boleh dengan data simulasi jika belum punya data riil).
| Skenario                     | Waktu Scan (mean ± std) | Tingkat Keberhasilan | n |
| ---------------------------- | ----------------------- | -------------------- | - |
| Scan QR Jam Masuk            | **1,35 ± 0,15 detik**   | **100% ± 0%**        | 5 |
| Scan QR Jam Pulang           | **1,42 ± 0,18 detik**   | **100% ± 0%**        | 5 |
| Penyimpanan Data ke Database | **1,30 ± 0,12 detik**   | **100% ± 0%**        | 5 |


**Checklist tabel:**
- [ya] Self-contained (judul jelas, satuan ada, N tercantum)
- [ya] Mean ± std (bukan single number)
- [ya] Diurutkan berdasarkan metrik utama
- [ya] Format konsisten di semua baris

---

## Latihan 2 — Rencana Visualisasi

Rencanakan 2-3 grafik untuk menyajikan data dari Latihan 1. Setiap grafik = satu pesan.

| No | Jenis Grafik | Pesan                                                                                       | Data yang Digunakan            |
| -- | ------------ | ------------------------------------------------------------------------------------------- | ------------------------------ |
| 1  | Bar Chart    | Membandingkan rata-rata waktu scan QR Code pada jam masuk, jam pulang, dan penyimpanan data | Mean waktu scan                |
| 2  | Pie Chart    | Menunjukkan persentase keberhasilan proses scan QR Code                                     | Jumlah scan berhasil dan gagal |
| 3  | Line Chart   | Menunjukkan kestabilan waktu scan pada setiap proses pengujian                              | Data waktu scan seluruh run    |


---

## Latihan 3 — Bias Detection

Evaluasi visualisasi berikut untuk bias (skenario dari contoh):

**Skenario:** Metode A = 91.2%, Metode B = 90.8%. Bar chart dengan Y-axis mulai dari 90%.

| Pertanyaan                        | Jawaban                                                                                                                                           |
| --------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| Apakah Y-axis menyesatkan?        | Tidak. Sumbu Y dimulai dari angka 0 sehingga tidak memperbesar perbedaan antar data.                                                              |
| Apakah error bar ditampilkan?     | Ya. Nilai rata-rata ditampilkan bersama standar deviasi (mean ± std).                                                                             |
| Apakah semua kondisi ditampilkan? | Ya. Seluruh hasil pengujian jam masuk, jam pulang, dan penyimpanan data disajikan tanpa menghilangkan data tertentu.                              |
| Apa solusinya?                    | Tetap menggunakan skala yang konsisten, menampilkan seluruh data hasil eksperimen, dan menghindari penggunaan efek visual yang dapat menyesatkan. |

**Evaluasi grafik Anda sendiri dari Latihan 2:**
- [YA] Semua bias check lulus
  Tidak ditemukan visualisasi yang berpotensi menyesatkan karena grafik menggunakan skala yang konsisten, seluruh data eksperimen ditampilkan, dan tidak menggunakan efek tiga dimensi.
- [ ] Ada yang perlu diperbaiki: ____

---

## Refleksi

> Mengapa tabel dan grafik keduanya diperlukan — tidak cukup salah satu saja?
Tabel dan grafik memiliki fungsi yang saling melengkapi dalam penyajian hasil penelitian. Tabel digunakan untuk menyajikan data secara rinci dan presisi, sehingga pembaca dapat mengetahui nilai setiap metrik dengan jelas. Sementara itu, grafik membantu menampilkan pola, tren, dan perbandingan antar hasil eksperimen secara visual sehingga informasi lebih mudah dipahami. Dengan menggabungkan tabel dan grafik, hasil penelitian menjadi lebih informatif, mudah dianalisis, dan mendukung proses pengambilan kesimpulan.
> 
> Pernahkah Anda membuat grafik yang (tanpa sengaja) menyesatkan?
Pada awal pembuatan laporan, saya pernah membuat grafik yang hanya menampilkan hasil terbaik tanpa menyertakan seluruh data pengujian. Setelah mempelajari materi mengenai visualisasi data, saya memahami bahwa semua hasil eksperimen harus disajikan secara lengkap agar tidak menimbulkan bias. Oleh karena itu, pada penelitian ini saya menggunakan grafik dengan skala yang konsisten, menampilkan seluruh data hasil pengujian, serta menyertakan nilai rata-rata dan standar deviasi sehingga visualisasi yang dihasilkan lebih objektif dan dapat dipercaya.
> ___________________________________________________
> ___________________________________________________
