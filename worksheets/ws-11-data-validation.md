# WS-11: Data Validation & Integrity

> **Bab 11 — Validasi Data & Integritas**

---

## Ringkasan Materi

### Data Trust Model

```
Raw Data → Data Cleaning → Consistency Check → Validation Process → Trusted Data
```

Data mentah belum bisa dipercaya. Harus melewati pipeline validasi sebelum siap untuk analisis statistik.

### Empat Pilar Data Quality

| Pilar | Deskripsi | Contoh Pelanggaran |
|-------|----------|-------------------|
| **Accuracy** | Nilai dalam range masuk akal | Akurasi = 1.5 (di luar [0,1]) |
| **Consistency** | Format seragam di semua run | Run 1: CSV, Run 2: JSON |
| **Completeness** | Tidak ada data hilang dari plan | 97 dari 100 run tercatat |
| **Validity** | Data sesuai desain eksperimen | Parameter baseline tercampur treatment |

### Proses Validasi Progresif

1. **Format validation** — Tipe file, header, kolom
2. **Range validation** — Nilai dalam batas logis
3. **Consistency validation** — Format seragam antar-run
4. **Logic validation** — Data cocok dengan desain eksperimen

Jika gagal di langkah awal → tidak perlu lanjut.

### Anomaly Detection — 3 Jenis

| Jenis | Deskripsi | Deteksi |
|-------|----------|---------|
| **Statistical outlier** | Nilai di luar distribusi normal | IQR: < Q1-1.5×IQR atau > Q3+1.5×IQR |
| **Contextual anomaly** | Normal absolut, abnormal dalam konteks | Run 1-10: ~91%, Run 11-20: ~88% |
| **Pattern anomaly** | Pola sistematis (bukan random) | Performa menurun berurutan |

**Prinsip:** Detect → Investigate → Document → Decide — **JANGAN langsung hapus.**

### Engineering vs Research Validation

| Aspek | Engineering | Research |
|-------|-----------|---------|
| Tujuan | Data sesuai spesifikasi bisnis | Data layak untuk analisis statistik |
| Missing data | Impute / set default | Investigasi penyebab → dokumentasi |
| Outlier | Bug → fix | Mungkin temuan → investigasi |
| Dokumentasi | Minimal (log error) | Komprehensif (anomali + keputusan) |

### Jebakan Kognitif

1. "Logging otomatis ≠ data benar" → bisa ada bug di logger
2. "Outlier = hapus" → bisa jadi temuan penting
3. "Dataset kecil tidak perlu validasi" → justru lebih rentan
4. "Mean normal = data benar" → [94, 95, 93, **44**, 94] → mean 84% terlihat wajar

---

## Template A.11 — Data Validation Checklist

```
DATA VALIDATION CHECKLIST

DATA VALIDATION CHECKLIST

Completeness:
  [✓] Semua skenario tercakup
  [✓] Jumlah run sesuai rencana
  [✓] Tidak ada file output hilang
  Missing: 0 dari 5 data points

Format Consistency:
  [✓] Semua data menggunakan format yang sama (Database MySQL dan hasil ekspor CSV/PDF)
  [✓] Header konsisten
  [✓] Tipe data konsisten (ID bertipe integer, tanggal bertipe date, jam bertipe time, status bertipe string)

Range & Logic:
  [✓] Nilai dalam range masuk akal
  [✓] Tidak ada waktu negatif
  [✓] Jam masuk dan jam pulang berada pada rentang 00:00–23:59
  Anomali ditemukan:
  Terdapat satu kali proses scan yang lebih lambat karena pencahayaan kurang optimal, namun setelah dilakukan pengujian ulang QR Code berhasil terbaca dan data tersimpan dengan benar.

Cross-Validation:
  [✓] Run identik menghasilkan data yang konsisten
  [✓] Trend sesuai dengan ekspektasi, yaitu scan pertama mencatat jam masuk dan scan kedua pada hari yang sama mencatat jam pulang tanpa membuat data absensi baru.

Keputusan:
  [✓] Data siap analisis
  [ ] Perlu cleaning
  [ ] Perlu re-run (skenario: Tidak diperlukan)

---

## Latihan 1 — Completeness Check

Verifikasi apakah semua data yang direncanakan sudah terkumpul.

Tahap ini dilakukan untuk memastikan bahwa seluruh skenario pengujian yang telah direncanakan benar-benar berhasil dijalankan dan seluruh data berhasil tersimpan pada database.

| Skenario                 | Run Direncanakan | Run Tercatat | Missing | Alasan                                |
| ------------------------ | ---------------- | ------------ | ------- | ------------------------------------- |
| Scan QR Jam Masuk        | 2                | 2            | 0       | Seluruh data berhasil tersimpan       |
| Scan QR Jam Pulang       | 2                | 2            | 0       | Seluruh data berhasil diperbarui      |
| Penyimpanan Data Absensi | 1                | 1            | 0       | Data berhasil masuk ke tabel absensis |


**Total expected:** 5 | **Total actual:** 5 | **Missing:** 0

**Keputusan untuk data missing:**
> Seluruh data yang direncanakan berhasil dikumpulkan sehingga tidak diperlukan pengulangan eksperimen (re-run). Semua hasil pengujian dapat digunakan sebagai data penelitian.

---

## Latihan 2 — Anomaly Investigation
Karena penelitian ini bukan mengukur accuracy, maka metrik yang lebih sesuai adalah waktu proses scan QR Code (detik).

**Dataset sampel (atau data Anda sendiri):**
| Run | Waktu Scan (detik) |
| --- | ------------------ |
| 1   | 1,2                |
| 2   | 1,4                |
| 3   | 1,3                |
| 4   | 4,8                |
| 5   | 1,5                |


**Deteksi outlier:**
- Q1 = 1,25 | Q3 = 3,15 | IQR = 1,90
- Batas bawah (Q1 - 1.5×IQR) =  1.25 − (1.5 × 1.90) = -1.60
- Batas atas (Q3 + 1.5×IQR) =3.15 + (1.5 × 1.90) = 6.00
- Outlier terdeteksi: Tidak terdapat outlier karena seluruh waktu proses scan masih berada pada rentang yang dapat diterima.

**Investigasi (untuk setiap outlier):**

| Outlier | Nilai     | Kemungkinan Penyebab                                                                                                   | Keputusan                                                                                              |
| ------- | --------- | ---------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------ |
| Run 4   | 4,8 detik | Pencahayaan kurang dan posisi QR Code kurang tepat sehingga kamera membutuhkan waktu lebih lama untuk membaca QR Code. | Pengujian diulang dengan pencahayaan yang lebih baik dan QR Code berhasil dipindai dalam waktu normal. |

---

## Latihan 3 — Validation Report

Buat laporan validasi ringkas untuk dataset eksperimen Anda.

**1. Completeness:** 100 % data terkumpul
**2. Format:** [ya] Konsisten / [ ] Ada inkonsistensi: ____
**3. Range check (anomali):** Tidak ditemukan nilai yang berada di luar batas logis. Beberapa pengujian menunjukkan waktu scan sedikit lebih lama akibat kondisi pencahayaan, namun data tetap valid dan berhasil tersimpan ke database.
**4. Logic check:** [ya] Parameter sesuai plan / [ ] Ada ketidaksesuaian: ____

**Kesimpulan:** [ya] Data siap analisis / [ ] Perlu tindakan: ____

---

## Refleksi

- Apa perbedaan antara "data yang benar" dan "data yang dipercaya"? 
Data yang benar adalah data yang berhasil direkam oleh sistem sesuai dengan hasil pengamatan pada saat eksperimen dilakukan. Namun, data yang dipercaya adalah data yang telah melalui proses validasi sehingga dapat dipastikan memiliki format yang benar, lengkap, konsisten, dan sesuai dengan rancangan penelitian. Dengan kata lain, data yang benar belum tentu dapat langsung dipercaya sebelum dilakukan proses validasi.

- Mengapa proses validasi formal diperlukan meskipun data dikumpulkan secara otomatis?
Meskipun sistem absensi berbasis QR Code melakukan pencatatan data secara otomatis ke dalam database, proses validasi tetap diperlukan karena kesalahan masih dapat terjadi, seperti QR Code yang tidak terbaca, data yang tidak tersimpan akibat gangguan sistem, atau ketidaksesuaian antara hasil scan dengan data yang muncul pada menu Absensi. Melalui validasi formal, setiap data diperiksa kembali dari aspek kelengkapan, konsistensi, dan logika sistem sehingga data yang digunakan dalam penelitian benar-benar dapat dipertanggungjawabkan dan menghasilkan analisis yang lebih akurat.
