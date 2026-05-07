# WS-05: Variabel & Metrik

> **Bab 5 — Metric, Measurement & Data**

---

## Ringkasan Materi

### Measurement Alignment Model

Setiap pengukuran yang valid harus bisa ditelusuri melalui rantai ini tanpa lompatan logis:

```
Problem → Concept → Variable → Metric → Data → Result
```

### Operationalization = Keputusan Desain

Menerjemahkan konsep abstrak menjadi variabel terukur bukan proses mekanis. "Code quality" yang diukur via SonarQube code smells membawa asumsi implisit. Setiap operasionalisasi harus didokumentasikan dan dijustifikasi.

### Empat Tipe Data (NOIR)

| Tipe | Ciri | Contoh | Operasi Valid |
|------|------|--------|---------------|
| **Nominal** | Kategori, tanpa urutan | Jenis algoritma (RF, SVM, CNN) | Modus, chi-square |
| **Ordinal** | Urutan, interval tidak sama | Skala Likert (1-5) | Median, Spearman |
| **Interval** | Jarak bermakna, tanpa nol absolut | Suhu Celsius | Mean, Pearson, t-test |
| **Ratio** | Jarak bermakna + nol absolut | Waktu eksekusi (ms) | Semua operasi |

Tipe data menentukan uji statistik yang valid. Kebanyakan metrik performa TI = ratio; persepsi pengguna = ordinal.

### Kriteria Pemilihan Metrik

- **Representative** — Mewakili konsep yang diteliti
- **Sensitive** — Cukup peka menangkap perbedaan bermakna (hindari ceiling effect)
- **Feasible** — Bisa dikumpulkan dalam batasan waktu dan biaya

### Pre-registration

Metrik harus ditentukan **sebelum** eksperimen. Memilih metrik setelah melihat data = **p-hacking**. Metrik tambahan yang ditemukan kemudian dilaporkan sebagai *exploratory*, bukan *confirmatory*.

### Primary vs Secondary Metric

- **Primary Metric** — Langsung terikat ke hipotesis, menentukan kesimpulan
- **Secondary Metric** — Pendukung, dilaporkan di samping primary; statusnya suplementer

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Pemilihan metrik | Berdasarkan kebiasaan/tool yang ada | Berdasarkan construct validity |
| Anomali | Dihapus untuk laporan bersih | Diinvestigasi — bisa jadi temuan |
| Kapan dipilih | Setelah sistem jadi (monitoring) | Sebelum eksperimen (by design) |

### Istilah Penting

- **Operationalization** — Transformasi konsep abstrak menjadi variabel terukur
- **Construct Validity** — Sejauh mana pengukuran benar-benar mengukur konsep yang dimaksud
- **Measurement Scale** — Klasifikasi data (NOIR) yang menentukan analisis valid
- **Multi-metric Evaluation** — Menggunakan beberapa metrik untuk menangkap konsep kompleks

---

## Template A.5 — Definisi Variabel, Metrik & Justifikasi

```
VARIABLE & METRIC DEFINITION

Research Question: Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?

| Variabel | Tipe | Konsep | Metrik | Skala | Satuan | Cara Mengukur | Justifikasi |
|----------|------|--------|--------|-------|--------|---------------|-------------|
|Jenis sistem absensi          | IV   |Metode absensi        |QR Code vs manual        |Nominal       | -       |Membandingkan dua jenis sistem               | Representatif untuk mebandingkan metode absensi            |
|Efisiensi absensi          | DV   |Kecepatan proses absensi        |Waktu proses absensi        |Ratio       | Menit       |menghitung waktu dari awal hingga selesai absensi               |mengukur efektivitas sistem secara lanngsung             |
|Akurasi absensi          | DV   |Ketepatan data kehadiran        |Jumlah kesalahan pencatatan        | Ratio      |Jumlah error        | Menghitung kesalahan data absensi              |mewakili validitas data kehadoiran              |
|Jumlah siswa          | CV   |Kondisi pengujian        | Banyak peserta absensi       |Ratio       | Orang       | Menghitung jumlah siswa saat pengujian              |Mdengontrol pengaruh ukuran sampel             |

Alignment Check:
  RQ → Concept → Variable → Metric → Data → Result
  [Ya] Setiap langkah terdokumentasi
  [Ya] Tidak ada "lompatan logis"
  [Ya] Metrik mengukur apa yang dimaksud (construct validity)
```

---

## Latihan 1 — Operationalization Chain

Gunakan RQ dari WS-04. Definisikan variabel dan metriknya.

**RQ:** Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?

| Variabel | Tipe | Konsep Abstrak | Metrik Konkret | Skala (NOIR) | Satuan |
|----------|------|---------------|----------------|-------------|--------|
| Jenis sistem absensi | IV |Metode absensi | QR Code vs manual |Nominal  |-|
|Efisiensi absensi | DV |Kecepatan proses |Waktu absensi |Ratio |Menit |
| Akurasi absensi| DV | Ketepatan data|Jumlah kesalahan |Ratio |Error |
|Jumlah siswa | CV |kondoso eksperimen |Total siswa |Ratio |Orang |

**Apakah ada lompatan logis dalam rantai?** [ ] Ya / [V, inin jawabannya] Tidak
> Jika ya, di mana? 

---

## Latihan 2 — Evaluasi Metrik

Evaluasi metrik DV yang dipilih di Latihan 1 menggunakan 3 kriteria.

| Kriteria | Skor (1-5) | Justifikasi |
|----------|-----------|-------------|
| Representative | 5 | Waktu dan jumlah keselahan secara langsung menggambarkan efisiensi dan akurasi |
| Sensitive |4 |Perubahan kesil pada waktu dan error masih dapat terlihat |
| Feasible |5 |Data mudah dikumpulkan saat proses absensi berlangsung |

**Apakah perlu secondary metric?** [Ya] Ya / [ ] Tidak
> Jika ya, apa dan mengapa? Untuk mengetahui pengalaman pengguna selain hanya performa teknis sistem.

**Contoh kasus ceiling effect untuk metrik ini:**
> Jika seluruh siswa dapat melakukan absensi dengan sangat cepat, maka perbedaan performa antar sistem menjadi sulit terlihat karena semua hasil mendekati nilai maksimum.

---

## Latihan 3 — Data Quality Check

Bayangkan data yang akan dikumpulkan dari eksperimen. Evaluasi 4 dimensi kualitas data.

| Dimensi | Pertanyaan | Jawaban | Strategi Mitigasi |
|---------|-----------|---------|------------------|
| Completeness | *Apakah semua data point terkumpul?* |Kemungkinan ada data yang hilang |Melakukan backup data otomatis |
| Consistency | *Apakah ada kontradiksi internal?* |Bisa terjadi data ganda |validasi data pada database |
| Validity | *Apakah benar-benar mengukur yang dimaksud?* |Ya, karena menggunakan data absensi langsung |Menggunakan metrik yang sesusai |
| Representativeness | *Apakah sampel mewakili populasi target?* | Masih terbatas pada satu sekolah|Menambah variasi lokasi penelitian |

---

## Refleksi

> Mengapa memilih metrik setelah melihat data dianggap p-hacking? Apa bedanya dengan eksplorasi data yang sah?

**Jawaban:**
> Memilih metrik setelah melihat data dianggap sebagai p-hacking karena peneliti dapat memilih hasil yang paling menguntungkan sehingga kesimpulan menjadi tidak objektif. Hal ini dapat menurunkan validitas penelitian karena metrik dipilih berdasarkan hasil, bukan berdasarkan tujuan penelitian sejak awal.
> Berbeda dengan eksplorasi data yang sah, di mana analisis tambahan dilakukan untuk menemukan pola baru tanpa mengubah hipotesis utama yang telah ditentukan sebelumnya. Hasil eksplorasi biasanya dilaporkan sebagai temuan tambahan, bukan sebagai bukti utama penelitian.
