# WS-04: Research Question & Hypothesis

> **Bab 4 — Research Question, Contribution & Hypothesis**

---

## Ringkasan Materi

### RQ Bukan Pertanyaan Biasa

Research Question yang baik secara implisit mengandung cetak biru eksperimen: subjek, baseline, metrik, domain, dataset.

| Kualitas | Contoh |
|----------|--------|
| **Buruk** | "Bagaimana pengaruh deep learning terhadap deteksi malware?" |
| **Baik** | "Apakah CNN menghasilkan F1-Score lebih tinggi dari RF pada CIC-MalMem-2022?" |

Perbedaan: RQ yang baik menyebutkan **metode spesifik**, **metrik terukur**, **baseline**, dan **dataset**.

### Tiga Jenis RQ

| Jenis | Pola | Kebutuhan |
|-------|------|-----------|
| **Comparison** | A vs B → mana lebih baik? | ≥ 2 metode, metrik sama |
| **Improvement** | A' vs A → modifikasi lebih baik? | Pre/post, bukti perbaikan |
| **Exploratory** | Faktor X₁...Xₙ → pengaruh terhadap Y? | Multi-variabel, korelasi/regresi |

### Contribution Statement

Tiga jenis kontribusi: **Improvement** (metode terbukti lebih baik), **Comparison** (perbandingan sistematis yang belum ada), **Novel Approach** (pendekatan baru). Kontribusi harus terhubung langsung dengan gap — kontribusi tanpa gap = klaim tanpa justifikasi.

### Hypothesis H₀ / H₁

- **H₀** (Null) = Tidak ada perbedaan signifikan — asumsi default, harus dibuktikan salah
- **H₁** (Alternative) = Ada perbedaan signifikan — diterima hanya jika H₀ ditolak
- Harus **falsifiable**, mengandung **metrik terukur**, dirumuskan **SEBELUM eksperimen**

### Rantai Operasionalisasi

```
RQ → Variable → Metric → Data → Analysis
```

Jika rantai ini tidak lengkap, RQ belum mature. Bi-directional: RQ yang tidak bisa jadi hipotesis testable harus direvisi mundur.

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan pertanyaan | Apa yang harus dibangun? | Apa yang harus dibuktikan? |
| Bentuk jawaban | Sistem yang berfungsi | Bukti empiris terukur |
| Sukses diukur oleh | User satisfaction, uptime | Signifikansi statistik, effect size |
| Jika gagal | Debug dan perbaiki | Laporkan, analisis mengapa |

### Istilah Penting

- **Research Question (RQ)** — Pertanyaan spesifik: variabel terukur + metrik + konteks
- **Contribution Statement** — Apa yang diketahui setelah riset selesai yang sebelumnya belum ada
- **H₀ / H₁** — Null vs Alternative Hypothesis
- **Falsifiability** — Kondisi hipotesis ditolak harus bisa didefinisikan sebelum eksperimen
- **Operationalization** — Proses mewujudkan konsep abstrak menjadi variabel terukur

---

## Template A.4 — RQ-Contribution-Hypothesis

```
RQ-CONTRIBUTION-HYPOTHESIS

Gap Statement  : Sistem absensi berbasis QR Code masih memiliki kelemahan dalam validasi kehadiran dan belum banyak dievaluasi efektivitasnya pada lingkungan pendidikan yang berbeda.

Research Question:
  Tipe         : [Ya] Comparison  [ ] Improvement  [ ] Exploratory
  Formulasi    : Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dibandingkan absensi manual pada lingkungan pendidikan?
  Variabel IV  : Jenis sistem absensi (QR Code vs manual)
  Variabel DV  : Efisiensi dan akurasi absensi
  Metrik       : Waktu proses absensi dan jumlah kesalahan pencatatan
  Dataset      : Data absensi siswa
  Baseline     : Sistem absensi manual

Quality Check RQ:
  [Ya] Variabel spesifik
  [Ya] Metrik jelas
  [Ya] Baseline ada
  [Ya] Konteks disebutkan
  [Ya] Memerlukan eksperimen (bukan hanya survei literatur)

Contribution Statement:
  Apa yang baru diketahui :   Efektivitas sistem absensi QR Code dibandingkan metode manual dalam meningkatkan efisiensi dan akurasi pencatatan kehadiran.
  Jenis kontribusi        : [ ] Improvement  [Ya] Comparison  [ ] Novel approach
  Gap yang diisi          :   Kurangnya evaluasi efektivitas sistem absensi QR Code pada lingkungan pendidikan.

Hypothesis Pair:
  H₀ :     Tidak ada perbedaan signifikan antara sistem absensi QR Code dan absensi manual dalam efisiensi dan akurasi pencatatan data.
  H₁ :   Sistem absensi QR Code menghasilkan efisiensi dan akurasi pencatatan yang lebih baik dibandingkan absensi manual.
  Threshold              :   Pengurangan waktu absensi ≥ 20% dan penurunan kesalahan pencatatan.
  Justifikasi threshold  :   Threshold digunakan untuk menunjukkan peningkatan yang cukup signifikan dan dapat dirasakan dalam proses absensi.

---

## Latihan 1 — Dari Gap ke RQ

Gunakan gap yang ditemukan di WS-03. Transformasikan menjadi Research Question.

**Gap dari WS-03:** Sistem absensi QR Code masih memiliki potensi manipulasi data dan belum banyak dievaluasi efektivitasnya pada berbagai lingkungan pendidikan.

**RQ versi pertama (tulis bebas):**
> Bagaimana efektivitas sistem absensi QR Code dibandingkan absensi manual?

**Evaluasi RQ:**

| Komponen | Ada? | Isi |
|----------|------|-----|
| Metode spesifik |Ya|Sistem QR Code vs manual |
| Metrik terukur |Ya|waktu absensi dan kesalahan data|
| Baseline |Ya|sistem manual |
| Dataset/konteks |Ya|lingkungan pendidikan |

**Tipe RQ:** [Ya] Comparison / [ ] Improvement / [ ] Exploratory

**RQ versi revisi (setelah evaluasi):**
> Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?
---

## Latihan 2 — Hypothesis Pair

Rumuskan pasangan hipotesis dari RQ di Latihan 1.

| Komponen | Isi |
|----------|-----|
| H₀ | Tidak ada perbedaan signifikasi antara sistem absensi QR COde dan absensi manual |
| H₁ |Sistem absensi QR Code lebih efisiensi dan akurat dibanding absensi manual |
| Metrik |waktu absensi dan jumlah kesalahan pencatatan|
| Threshold |Efisiensi meningkat lebih dari 20 % |
| Justifikasi threshold | untuk meunjukkan peningkatan yang cukup signifikasi dalam penggunaan sistem|

**Apakah hipotesis ini falsifiable?** [Ya] Ya / [ ] Tidak
> Bagaimana cara membuktikannya salah? Dengan melakukan pengujian dan menunjukkan bahwa sistem QR Code tidak memberikan peningkatan efisiensi atau akurasi yang signifikan dibandingkan sistem manual.

---

## Latihan 3 — Rantai Operasionalisasi

Lengkapi rantai dari RQ hingga metode analisis.

| Tahap | Isi |
|-------|-----|
| RQ | Apakah sistem absensi QR Code lebih efisien dibanding absensi manusl? |
| Variable (IV) | jenis sistem absensi |
| Variable (DV) |efisiensi dan akurasi absensi |
| Metric | waktu absensi dan jumlah kesalahan|
| Data source |Data absensi siswa |
| Analysis method |perbandingan hasil absensi manual dan QR Code|

**Apakah rantai lengkap?** [Ya] Ya / [ ] Tidak
> Jika tidak, tahap mana yang perlu direvisi?

---

## Refleksi

> Ambil satu judul skripsi/paper yang pernah dibaca. Coba ekstrak RQ-nya. Apakah RQ tersebut memenuhi semua komponen (metode, metrik, baseline, konteks)? Jika tidak, apa yang hilang?

**Judul:** Perancangan Sistem Informasi Absensi Siswa Menggunakan Teknologi QR Code Berbasis Website
**RQ yang diekstrak:** Apakah sistem absensi QR Code dapat meningkatkan efisiensi proses absensi siswa?
**Komponen yang hilang:** Penelitian belum menjelaskan threshold peningkatan secara spesifik dan belum menyebutkan metode analisis statistik yang digunakan.
