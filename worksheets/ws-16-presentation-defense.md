# WS-16: Presentation & Defense (UAS)

> **Bab 16 — Presentasi & Pertahanan Ilmiah**

---

## Ringkasan Materi

### Scientific Defense Model

```
Research Work → Presentation → Questioning → Defense → Evaluation → Acceptance
```

### Presentasi ≠ Ringkasan Paper

| Paper | Presentasi |
|-------|-----------|
| Dibaca (self-paced) | Didengar (presenter-paced) |
| Detail lengkap | Ide kunci + highlight |
| Tabel numerik detail | Grafik visual + angka kunci |
| Pembaca bisa re-read | Audiens dengar sekali |

**Prinsip:** Presentasi membutuhkan **reformulasi**, bukan kompresi. Medium berbeda = pendekatan berbeda.

### Claim-Evidence-Reasoning (CER)

Setiap jawaban defense harus memiliki:
1. **Claim** — Pernyataan yang dijawab
2. **Evidence** — Data/fakta pendukung
3. **Reasoning** — Logika yang menghubungkan evidence ke claim

**Contoh:**
| Pertanyaan | Bad Answer | Good Answer (CER) |
|-----------|-----------|-------------------|
| "Kenapa hanya 3 dataset?" | "Tiga sudah cukup" | "3 dataset mewakili variasi: small-clean, medium-clean, medium-noisy [E]. Generalisasi perlu validasi lanjut — listed as limitation [R]" |
| "Hasil DS-3 menurun?" | "Itu outlier" | "Ya, karena distribusi heavy-tail melanggar asumsi Gaussian [E]. Ini menunjukkan boundary condition metode [R]" |
| "Effect size?" | "p=0.003, jadi signifikan" | "Cohen's d=1.2 (large effect) [E] — bukan hanya signifikan tapi substansial [R]" |

### Slide Design — One Slide, One Message

**Optimal 9-Slide Plan (15 menit):**

| # | Slide | Waktu | Pesan |
|---|-------|-------|-------|
| 1 | Title + context | 1 min | Apa ini tentang apa |
| 2 | Problem + motivation | 2 min | Mengapa penting |
| 3 | Gap + RQ | 1.5 min | Apa yang belum terjawab |
| 4 | Method overview | 2 min | Bagaimana dijawab (diagram) |
| 5 | Key result — tabel | 2 min | Temuan utama |
| 6 | Key result — grafik | 2 min | Pola visual |
| 7 | Interpretation + failure | 2 min | Apa artinya |
| 8 | Limitation + future | 1.5 min | Batasan & arah |
| 9 | Conclusion + contribution | 1 min | Closing message |

### Anticipatory Defense

Prediksi pertanyaan berdasarkan kategori:

| Kategori | Contoh Pertanyaan |
|---------|------------------|
| Problem | "Mengapa masalah ini penting?" |
| Gap | "Bagaimana dengan studi X yang sudah menjawab ini?" |
| Method | "Mengapa metode ini, bukan Y?" |
| Results | "Bagaimana menjelaskan anomali di DS-3?" |
| Generalization | "Apakah bisa diterapkan di domain lain?" |

### Tiga Prinsip Jawaban

1. **Direct** — Jawab dulu, elaborasi kemudian
2. **Data-based** — Tunjuk evidence spesifik
3. **Honest** — Akui limitasi jika memang ada

### Jebakan Kognitif

1. "Presentasi = semua yang ada di paper" → terlalu padat
2. "Slide cantik = presentasi bagus" → konten > estetika
3. "Tidak bisa jawab = gagal" → "I don't know, but..." menunjukkan kejujuran
4. "Tidak perlu latihan — saya paham riset saya" → latihan = menemukan celah

---

## Template A.16 — Defense Preparation Sheet

```
DEFENSE PREPARATION

Slide Deck Plan:
  Total slides   : 11 (10 slide materi + 1 penutup)
  Time per slide : ±1,5 menit
  Total time     : 15 menit

Slide Outline:
| # | Pesan Utama | Visual | Waktu |
|---|-------------|--------|-------|
| 1 | Judul penelitian dan identitas | Cover + logo sekolah | 30 detik |
| 2 | Permasalahan absensi guru | Ilustrasi absensi manual | 2 menit |
| 3 | Research Gap dan Research Question | Diagram gap penelitian | 2 menit |
| 4 | Metode penelitian dan arsitektur sistem | Flowchart sistem | 2 menit |
| 5 | Implementasi sistem | Screenshot Login, Dashboard, Data Guru | 2 menit |
| 6 | Generate dan Scan QR Code | Screenshot QR Code dan proses scan | 2 menit |
| 7 | Hasil pengujian sistem | Tabel Black Box Testing | 2 menit |
| 8 | Kelebihan, keterbatasan, dan pengembangan | Diagram poin-poin | 1,5 menit |
| 9 | Kesimpulan dan kontribusi | Ringkasan hasil penelitian | 1 menit |
|10 | Sesi Tanya Jawab | Slide "Terima Kasih" | 30 detik |
```

---

## Latihan 1 — Slide Outline

Rencanakan presentasi 15 menit untuk riset Anda.
| No | Pesan Utama                                 | Visual yang Digunakan       | Waktu     |
| -- | ------------------------------------------- | --------------------------- | --------- |
| 1  | Judul penelitian dan identitas peneliti     | Cover + Logo                | 1 menit   |
| 2  | Permasalahan absensi guru yang masih manual | Diagram permasalahan        | 2 menit   |
| 3  | Research Gap dan Research Question          | Diagram Gap Penelitian      | 1,5 menit |
| 4  | Metode penelitian dan desain sistem         | Flowchart Laravel + QR Code | 2 menit   |
| 5  | Implementasi sistem                         | Screenshot Dashboard        | 2 menit   |
| 6  | Proses Generate dan Scan QR Code            | Screenshot QR Code          | 2 menit   |
| 7  | Hasil pengujian sistem                      | Tabel Black Box Testing     | 2 menit   |
| 8  | Kelebihan, keterbatasan, dan pengembangan   | Diagram Future Work         | 1,5 menit |
| 9  | Kesimpulan dan kontribusi penelitian        | Ringkasan poin utama        | 1 menit   |


**Total waktu estimasi:** 15 menit

---

## Latihan 2 — Anticipatory Defense

Prediksi 5 pertanyaan yang mungkin diajukan penguji, lalu siapkan jawaban CER.

| No | Kategori       | Pertanyaan                                         | Claim                                                                        | Evidence                                                                               | Reasoning                                                                                                   |
| -- | -------------- | -------------------------------------------------- | ---------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| 1  | Problem        | Mengapa memilih sistem absensi berbasis QR Code?   | QR Code lebih praktis dan ekonomis dibanding absensi manual.                 | Sistem berhasil mempercepat proses absensi dan mengurangi kesalahan pencatatan.        | QR Code dapat dibuat dengan mudah tanpa perangkat khusus sehingga cocok diterapkan di sekolah.              |
| 2  | Method         | Mengapa menggunakan Laravel?                       | Laravel mempermudah pengembangan aplikasi web yang aman dan terstruktur.     | Laravel menyediakan fitur routing, authentication, migration, dan MVC.                 | Framework mempercepat proses pengembangan sekaligus memudahkan pemeliharaan aplikasi.                       |
| 3  | Results        | Bagaimana membuktikan sistem berjalan dengan baik? | Seluruh fungsi sistem berhasil dijalankan.                                   | Hasil Black Box Testing menunjukkan semua fitur berjalan sesuai kebutuhan.             | Pengujian membuktikan bahwa fungsi login, CRUD guru, generate QR, scan QR, dan absensi bekerja dengan baik. |
| 4  | Results        | Apa kelemahan sistem ini?                          | Sistem masih bergantung pada kamera dan pencahayaan.                         | Pengujian menunjukkan proses scan lebih lambat jika kondisi cahaya kurang baik.        | Faktor lingkungan memengaruhi keberhasilan pembacaan QR Code sehingga perlu diperhatikan saat implementasi. |
| 5  | Generalization | Apakah sistem ini dapat digunakan di sekolah lain? | Ya, sistem dapat diterapkan di sekolah lain dengan sedikit penyesuaian data. | Data guru dan identitas sekolah dapat diubah melalui database dan pengaturan aplikasi. | Struktur sistem bersifat umum sehingga mudah diadaptasi oleh institusi lain.                                |


---

## Latihan 3 — Simulasi Q&A

Minta teman/kolega mengajukan 3 pertanyaan tentang riset Anda. Catat pertanyaan dan evaluasi jawaban Anda.
| No | Pertanyaan                                              | Jawaban Saya                                                                                                                                                                                                                                     | Evaluasi                       |
| -- | ------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------ |
| 1  | Mengapa memilih QR Code dibanding fingerprint?          | QR Code tidak memerlukan perangkat fingerprint sehingga biaya implementasi lebih rendah dan proses pengembangan lebih sederhana.                                                                                                                 | ☑ Direct ☑ Data-based ☑ Honest |
| 2  | Bagaimana jika QR Code difoto dan digunakan orang lain? | Saat ini sistem masih menggunakan QR Code statis sehingga terdapat potensi penyalahgunaan. Hal ini menjadi salah satu keterbatasan penelitian dan dapat dikembangkan dengan QR Code dinamis atau verifikasi tambahan pada penelitian berikutnya. | ☑ Direct ☑ Data-based ☑ Honest |
| 3  | Mengapa tidak menggunakan aplikasi Android?             | Penelitian difokuskan pada aplikasi berbasis web menggunakan Laravel agar dapat diakses melalui browser tanpa instalasi aplikasi tambahan. Pengembangan aplikasi mobile dapat menjadi penelitian lanjutan.                                       | ☑ Direct ☑ Data-based ☑ Honest |


**Pertanyaan yang paling sulit dijawab:**
> Bagaimana menjamin keamanan QR Code agar tidak dapat disalin atau disalahgunakan oleh pihak lain?

**Apa yang perlu disiapkan lebih baik:**
> Mempelajari lebih dalam mengenai keamanan sistem, autentikasi tambahan, QR Code dinamis, serta metode enkripsi agar dapat memberikan solusi yang lebih komprehensif saat sesi tanya jawab.

---

## Refleksi
**Insight terbesar**
- Seluruh rangkaian WS-01 hingga WS-16 mengubah cara pandang saya bahwa penelitian bukan hanya proses membuat sebuah sistem, tetapi juga menyusun argumen ilmiah yang didukung oleh metode yang tepat, hasil yang valid, serta kemampuan mempertahankan hasil penelitian melalui presentasi dan sesi tanya jawab.
**Yang akan selalu diterapkan:**
- Pada penelitian berikutnya saya akan selalu menyusun penelitian berdasarkan alur yang sistematis, mulai dari identifikasi masalah, penyusunan research question, pemilihan metode yang sesuai, pengujian yang objektif, hingga penyampaian hasil penelitian secara jelas, logis, dan didukung oleh bukti yang dapat dipertanggungjawabkan.
