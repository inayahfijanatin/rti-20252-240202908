# WS-07: Experimental Design & Validity

> **Bab 7 — Experimental Design & Validity**

---

## Ringkasan Materi

### Correlation ≠ Causality

Kausalitas membutuhkan 3 syarat:
1. **Covariance** — X dan Y bergerak bersama
2. **Temporal precedence** — X berubah sebelum Y
3. **Elimination of alternatives** — Tidak ada faktor lain yang menjelaskan Y

Controlled experiment adalah satu-satunya metode yang bisa membuktikan kausalitas.

### Empat Jenis Validitas

| Jenis | Pertanyaan | Ancaman Umum |
|-------|-----------|-------------|
| **Internal** | Apakah hubungan IV→DV nyata? | Confounding variable, selection bias |
| **External** | Apakah bisa digeneralisasi? | Dataset terlalu spesifik |
| **Construct** | Apakah mengukur konsep yang benar? | Metrik tidak sesuai |
| **Conclusion** | Apakah kesimpulan statistik valid? | Sample size kecil, uji salah |

Internal dan external validity sering berkonflik: semakin terkontrol (internal kuat) → semakin artificial (external lemah).

### Tiga Tipe Eksperimen dalam Riset TI

| Tipe | Deskripsi | Kapan Digunakan |
|------|----------|----------------|
| **Comparison Study** | Metode A vs B pada kondisi identik | Membandingkan pendekatan berbeda |
| **Ablation Study** | Full system → lepas komponen satu per satu | Mengukur kontribusi tiap komponen |
| **Parameter Study** | Variasikan satu parameter, amati dampak | Uji sensitifitas/robustness |

### Fairness dalam Perbandingan

Perbandingan yang adil = **kondisi identik** untuk semua metode: dataset sama, preprocessing sama, tuning effort sebanding, environment sama, metrik sama.

Contoh tidak adil: Transformer (30 fitur tambahan + Bayesian optimization) vs RF (default params) → hasilnya misleading.

### Threats to Validity = Diidentifikasi Sebelum Eksperimen

Ancaman validitas harus diidentifikasi **sebelum** eksperimen dan mitigasinya dirancang sebagai bagian dari desain — bukan ditulis sebagai boilerplate setelah selesai.

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan testing | Memastikan sistem memenuhi requirement | Membuktikan hubungan kausal antar variabel |
| Baseline | Versi sebelumnya (last release) | Metode tervalidasi dari literatur |
| Kegagalan | Bug → fix → release | H₀ tidak ditolak → tetap kontribusi ilmiah |
| Sukses | 100% test pass | Evidence valid — mendukung atau menolak hipotesis |

### Istilah Penting

- **Causality** — Hubungan sebab-akibat (covariance + temporal + elimination)
- **Controlled Experiment** — Ubah satu variabel, kontrol sisanya, amati efek
- **Fairness** — Semua metode diuji pada kondisi yang benar-benar identik
- **Threats to Validity** — Faktor yang bisa melemahkan kesimpulan jika tidak dimitigasi
- **Conclusion Validity** — Validitas statistik: power, sample size, uji yang tepat

---

## Template A.7 — Desain Eksperimen Lengkap

```
EXPERIMENT DESIGN

Research Question : Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?
Hypothesis        : Sistem absensi berbasis QR Code lebih efisien dan akurat dibandingkan absensi manual.
Tipe Eksperimen   : [Ya] Comparison  [ ] Ablation  [ ] Parameter

Kondisi Eksperimen:
| Kondisi | Deskripsi | IV Value | CV Settings |
|---------|-----------|----------|-------------|
| Control | Sistem absensi manual          |Manual          |Jumlah siswa sama, waktu pelaksanaan sama             |
| Treatment | Sistem absensi QR Code        | QR Code         | Jumlah siswa sama, waktu pelaksanaan sama            |

Fairness Checklist:
  [Ya] Dataset identik untuk semua kondisi
  [Ya] Preprocessing setara
  [Ya] Tuning effort setara
  [Ya] Environment identik
  [Ya] Metrik evaluasi sama

Threat Analysis:
| Threat Type | Ancaman Spesifik | Mitigasi |
|-------------|-----------------|----------|
| Internal    |Perbedaan kemampuan pengguna menggunakan sistem                 |Memberikan pengaruh senelum eksperimen          |
| External    |Pengujian hanya dilakukan di satu sekolah                 |menambah variasi lokasi penelitian          |
| Construct   | Waktu absensi belum sepenuhnya merepresentasikan efektivitas sistem                |menggunakan metrik tambahan seperti tingkat kesalahan          |
| Conclusion  |Jumlah sampel terlalu sedikit                 |Menambah jumlah responden dan pengulangan eksperimen          |

Statistical Plan:
  Uji statistik   : Uji perbandingan rata-rata
  Justifikasi      : Digunakan untuk mebandingkan performa dua metode absensi
  Alpha            : 0,05
  Effect size min  : 20% peningkatan efisiensi

---

## Latihan 1 — Desain Eksperimen

Susun desain eksperimen berdasarkan RQ, variabel, dan sistem dari WS-04 sampai WS-06.

**RQ:** Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?
**Tipe eksperimen:** [Ya] Comparison / [ ] Ablation / [ ] Parameter

| Kondisi | Deskripsi | IV Value | CV Settings |
|---------|-----------|----------|-------------|
| Control |Menggunakan absensi manual  |Manual  |Jumlah siswa, waktu, dan lokasi sama  |
| Treatment |Menggunakan absensi QR Code |QR Code  |Jumlah siswa, waktu, dan lokasi sama |

---
## Latihan 2 — Fairness Checklist

Evaluasi apakah desain eksperimen di Latihan 1 sudah fair.

| Kriteria | Status | Detail |
|----------|--------|--------|
| Dataset identik | ✅ |Menggunakan data siswa yang sama |
| Preprocessing setara | ✅ |Data diproses dengan prosedur yang sama |
| Tuning effort setara |✅  |Kedua metode diuji dalam kondisi setara |
| Environment identik |✅  |Pengujian dilakukan pada tempat dan waktu yang sama |
| Metrik evaluasi sama |✅  |Menggunakan wakti dan jumlah kesalahan |

**Ada yang tidak fair?** [ ] Ya / [Jawabannya_tidak] Tidak
> Jika ya, bagaimana cara memperbaikinya? ________________

---

## Latihan 3 — Threat Analysis

Identifikasi ancaman validitas untuk desain eksperimen ini.

| Threat Type | Ancaman Spesifik | Mitigasi |
|-------------|-----------------|----------|
| Internal |Pengguna belum terbiasa dengan QR Code  |Memberikan simulasi terlebih dahulu  |
| External |Hanya diuji pada satu lingkungan sekolah |Menambah sampel dari sekolah lain |
| Construct |Efektivitas hanya doukur dari waktu |menambah metrik akurasi dan kepuasan pengguna |
| Conclusion |Jumlah data eksperimen terbatas |Melakukan Pengulangan eksperimen |

**Ancaman mana yang paling sulit dimitigasi?** External Validity
**Mengapa?**
> Karena hasil penelitian pada satu sekolah belum tentu dapat mewakili seluruh lingkungan pendidikan yang memiliki kondisi dan infrastruktur berbeda.

---

## Refleksi

> Sebuah paper melaporkan "metode kami mengalahkan semua baseline." Apa 3 pertanyaan pertama yang harus diajukan untuk mengevaluasi klaim ini?

**Jawaban:**
1. Apakah seluruh baseline diuji pada kondisi eksperimen yang sama?
2. Apakah metode evaluasi dan metrik yang digunakan sudah adil dan relevan?
3. Apakah peningkatan performa yang dilaporkan benar-benar signifikan secara statistik atau hanya kebetulan dari dataset tertentu?
