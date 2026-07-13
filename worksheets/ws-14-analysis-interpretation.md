# WS-14: Analysis, Interpretation & Failure Analysis

> **Bab 14 — Analisis Data, Interpretasi & Failure Analysis**

---

## Ringkasan Materi

### Data → Knowledge Model

```
Data → Analysis → Interpretation → Explanation → Knowledge
```

Tiga level yang berbeda:
- **Analysis** — "Apa yang terjadi?" (deskriptif + inferensial)
- **Interpretation** — "Apa artinya?" (konteks RQ + literatur)
- **Failure Analysis** — "Mengapa tidak berhasil?" (boundary conditions)

### Beyond p-value

**Statistical significance ≠ practical significance.** Selalu laporkan:
1. p-value (signifikansi statistik)
2. Effect size (besarnya efek)
3. Confidence interval (rentang ketidakpastian)

| Effect Size (Cohen's d) | Interpretasi |
|-------------------------|-------------|
| < 0.2 | Small |
| 0.2 – 0.8 | Medium |
| > 0.8 | Large |

### Pemilihan Uji Statistik

| Kondisi | Uji yang Tepat |
|---------|---------------|
| 2 grup, normal, paired | Paired t-test |
| 2 grup, non-normal | Wilcoxon signed-rank |
| > 2 grup, normal | One-way ANOVA + post-hoc |
| > 2 grup, non-normal | Kruskal-Wallis + post-hoc |
| 2 variabel kontinu | Pearson (normal) / Spearman (rank) |

### Failure Analysis as Contribution

Hipotesis yang ditolak adalah **temuan yang berharga**:

| Dataset | New (F1) | Baseline (F1) | p-value | Cohen's d |
|---------|---------|--------------|---------|-----------|
| DS-1 (small, clean) | 94.2±1.1 | 89.3±1.5 | <0.001 | **3.7** |
| DS-4 (medium, noisy) | 78.3±3.2 | 82.1±2.8 | 0.008 | **-1.3** |
| DS-5 (large, noisy) | 71.6±4.1 | 80.5±3.0 | <0.001 | **-2.5** |

**Insight:** Metode baru unggul di data bersih tapi gagal di data noisy → asumsi Gaussian dilanggar → **boundary condition** ditemukan → hybrid approach direkomendasikan.

**Partial failure + deep analysis = kontribusi lebih kaya daripada full success tanpa analisis.**

### Limitation Types

| Jenis | Contoh |
|-------|--------|
| Internal validity | Confounders yang tidak dikontrol |
| External validity | Generalisasi ke domain lain |
| Construct validity | Metrik mengukur apa yang dimaksud? |
| Statistical limitation | Sample size, asumsi distribusi |

### Jebakan Kognitif

1. "Signifikan statistik = penting secara praktis" → cek effect size
2. "Hipotesis tidak didukung → cari sudut baru" → p-hacking
3. "Kegagalan tidak perlu dilaporkan detail" → missed insight
4. "Limitasi cukup disebutkan, tidak perlu dianalisis" → kedalaman hilang

---

## Template A.14 — Analysis & Interpretation Report

```
ANALYSIS & INTERPRETATION

1. Statistik Deskriptif:
| Skenario                  | Mean      | Std       | Median    | Min       | Max       | n |
| ------------------------- | --------- | --------- | --------- | --------- | --------- | - |
| Scan QR Code Absensi Guru | 5,4 detik | 0,6 detik | 5,3 detik | 4,7 detik | 6,2 detik | 5 |

Keterangan:
Mean menunjukkan rata-rata waktu yang dibutuhkan sistem mulai dari proses pemindaian QR Code hingga data absensi berhasil tersimpan ke database. Berdasarkan lima kali pengujian, rata-rata waktu proses adalah sekitar 5,4 detik dengan variasi waktu yang relatif kecil.

2. Uji Hipotesis:
   Uji yang digunakan  : Analisis deskriptif (belum menggunakan uji inferensial karena jumlah data pengujian masih sedikit).
   Justifikasi          : Penelitian ini merupakan implementasi sistem informasi yang bertujuan menguji apakah sistem absensi berbasis QR Code dapat berjalan sesuai kebutuhan pengguna. Fokus penelitian lebih kepada keberhasilan fungsi sistem dibandingkan membandingkan dua metode menggunakan statistik inferensial.
   Hasil: p = Belum dihitung, effect size (d/r/η²) = belum di hitung 
   CI 95%               : belum dihitung

3. Keputusan:
   [YA] H₀ ditolak → H₁ diterima
   [ ] H₀ tidak ditolak

4. Interpretasi:
   Hubungan ke RQ       : Hasil pengujian menunjukkan bahwa sistem berhasil membaca QR Code guru, mengenali identitas guru, menyimpan data jam masuk maupun jam pulang ke database, kemudian menampilkan data tersebut pada menu Absensi dan Laporan. Dengan demikian sistem mampu menggantikan proses absensi manual menjadi lebih cepat dan terdokumentasi secara otomatis.
   Practical significance: Secara praktis, sistem memberikan beberapa manfaat, yaitu: mempercepat proses absensi guru, mengurangi kesalahan pencatatan manual, data langsung tersimpan ke database,laporan absensi dapat diakses kapan saja, mempermudah rekapitulasi kehadiran guru.
   Perbandingan literatur: Hasil implementasi sesuai dengan penelitian-penelitian sebelumnya yang menyatakan bahwa penggunaan QR Code dapat meningkatkan efisiensi proses absensi dibandingkan metode tanda tangan manual.

5. Limitation:
| Jenis                  | Ancaman                                            | Dampak                                      | Mitigasi                       |
| ---------------------- | -------------------------------------------------- | ------------------------------------------- | ------------------------------ |
| Internal Validity      | Pengujian hanya menggunakan beberapa data guru     | Belum mewakili kondisi sebenarnya           | Menambah jumlah data guru      |
| External Validity      | Sistem hanya diuji pada jaringan lokal (localhost) | Belum diketahui performa pada server online | Deploy ke hosting/server       |
| Construct Validity     | Belum mengukur kepuasan pengguna                   | Evaluasi sistem kurang lengkap              | Menambahkan kuesioner pengguna |
| Statistical Limitation | Jumlah pengujian hanya 5 kali                      | Belum cukup untuk analisis statistik        | Menambah jumlah eksperimen     |


6. Failure Analysis (jika H₀ tidak ditolak):
   Penyebab potensial  : Selama pengujian ditemukan beberapa kendala, antara lain: QR Code tidak terbaca ketika kamera kurang fokus, Data absensi tidak langsung muncul karena route dan controller belum terhubung dengan benar, Kesalahan relasi database menyebabkan nama guru tidak tampil pada menu absensi, Jam pulang belum tersimpan sebelum dilakukan penambahan logika update pada controller.
   Boundary condition   : Sistem bekerja dengan baik apabila: QR Code dalam kondisi jelas, Kamera memiliki pencahayaan yang cukup, Database MySQL aktif, Laravel Server berjalan normal, Koneksi browser stabil.
   Insight              : 
Implementasi menunjukkan bahwa keberhasilan sistem tidak hanya dipengaruhi oleh algoritma QR Code, tetapi juga integrasi antar modul Laravel seperti routing, controller, model, relasi database, serta sinkronisasi data.
```

---

## Latihan 1 — Pemilihan Uji Statistik

Tentukan uji statistik yang tepat untuk eksperimen Anda.

| Pertanyaan                        | Jawaban                                                                                                                 |
| --------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| Berapa grup yang dibandingkan?    | 1 grup (Sistem Absensi QR Code)                                                                                         |
| Apakah data berpasangan (paired)? | Tidak                                                                                                                   |
| Apakah distribusi normal?         | Belum diuji karena jumlah data masih sedikit                                                                            |
| **Uji yang dipilih**              | Analisis Statistik Deskriptif                                                                                           |
| **Justifikasi**                   | Penelitian lebih berfokus pada implementasi dan pengujian fungsi sistem daripada membandingkan dua metode yang berbeda. |

**Effect size yang akan dilaporkan:** [ ] Cohen's d / [ ] Eta-squared / [YA] Lainnya: Belum digunakan karena penelitian implementasi sistem.

---

## Latihan 2 — Interpretasi Hasil

Gunakan data berikut (atau data riil Anda) untuk berlatih interpretasi.

Misalkan hasil pengujian sistem adalah:
**Data:**
| Pengujian      | Keberhasilan (%) | n |
| -------------- | ---------------- | - |
| Sistem QR Code | 100%             | 5 |

p = 0.045, Cohen's d = 0.74, CI 95% = [0.03, 2.77]

| Aspek                         | Interpretasi                                                                                                       |
| ----------------------------- | ------------------------------------------------------------------------------------------------------------------ |
| Signifikansi statistik        | Tidak dilakukan uji statistik inferensial karena fokus penelitian pada implementasi sistem.                        |
| Effect Size                   | Tidak dihitung.                                                                                                    |
| Practical Significance        | Sistem mampu mempercepat proses absensi dan mengurangi kesalahan pencatatan manual.                                |
| Hubungan ke Research Question | Sistem berhasil melakukan proses scan QR Code, menyimpan data absensi, serta menghasilkan laporan secara otomatis. |
| Perbandingan Literatur        | Hasil implementasi mendukung penelitian sebelumnya bahwa QR Code efektif digunakan sebagai media absensi digital.  |

---

## Latihan 3 — Failure Analysis

Latih kemampuan failure analysis: hipotesis TIDAK didukung. Apa yang bisa dipelajari?

**Skenario:** Metode baru Anda mendapat F1 = 83.2%, baseline = 84.7%. p = 0.12 (tidak signifikan).

Misalkan selama pengujian ditemukan beberapa kegagalan.
| Pertanyaan                        | Jawaban                                                                                                                                        |
| --------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| Apakah ini "gagal"?               | Tidak. Kendala yang ditemukan merupakan bagian dari proses pengembangan sistem dan memberikan informasi untuk perbaikan.                       |
| Kemungkinan penyebab?             | Route belum terhubung, relasi database belum benar, QR Code tidak sesuai format, atau kamera gagal membaca kode.                               |
| Boundary Condition?               | Sistem bekerja optimal pada kondisi pencahayaan yang baik, kamera aktif, dan server Laravel berjalan normal.                                   |
| Insight yang bisa diambil?        | Integrasi antar modul Laravel sangat mempengaruhi keberhasilan sistem, bukan hanya proses scan QR Code.                                        |
| Apakah layak dilaporkan? Mengapa? | Ya. Kendala yang ditemukan menunjukkan proses debugging dan menjadi dokumentasi penting agar sistem lebih stabil pada pengembangan berikutnya. |


**Limitation terkait:**
| Jenis        | Ancaman                               | Dampak                                              |
| ------------ | ------------------------------------- | --------------------------------------------------- |
| Statistical  | Jumlah pengujian hanya 5 kali         | Belum dapat dilakukan analisis statistik yang kuat  |
| Technical    | Pengujian masih menggunakan localhost | Belum diketahui performa ketika dihosting           |
| User Testing | Belum diuji oleh banyak guru          | Belum diketahui tingkat usability secara menyeluruh |

---

## Refleksi

> Apakah "failure" dalam riset benar-benar gagal, atau justru kontribusi? Bagaimana failure analysis mengubah cara Anda melihat hasil negatif?

Failure dalam penelitian bukan berarti penelitian tersebut gagal, melainkan menjadi sumber informasi yang sangat penting untuk mengetahui keterbatasan sistem yang dikembangkan. Selama proses pembuatan Sistem Absensi Guru berbasis QR Code, beberapa kendala seperti data absensi yang belum tersimpan, relasi database yang salah, serta route yang belum terhubung justru membantu menemukan bagian sistem yang perlu diperbaiki.

Melalui proses failure analysis, setiap kesalahan tidak langsung dihapus, tetapi dianalisis penyebabnya, diperbaiki, kemudian diuji kembali hingga sistem dapat berjalan dengan baik. Pendekatan ini membuat hasil penelitian menjadi lebih valid, transparan, dan dapat dijadikan acuan dalam pengembangan sistem pada penelitian selanjutnya.
