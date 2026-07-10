# WS-08: Proposal Integration (UTS)

> **Bab 8 — Proposal & Checkpoint**

---

## Ringkasan Materi

### Proposal = Satu Argumen Utuh

Proposal riset bukan kumpulan bab yang independen. Ia adalah **satu argumen** yang mengalir dari masalah ke rencana solusi. Jika satu koneksi putus, seluruh proposal kehilangan koherensi.

### Integration Map — 6 Koneksi Kritis

```
Problem (Bab 2) → Gap (Bab 3) → RQ & H (Bab 4) → Metrik (Bab 5) → Sistem (Bab 6) → Eksperimen (Bab 7)
```

| Koneksi | Pertanyaan Verifikasi |
|---------|----------------------|
| Problem → Gap | Apakah gap muncul dari analisis literatur terhadap masalah? |
| Gap → RQ | Apakah RQ langsung menjawab gap yang teridentifikasi? |
| RQ → Metrik | Apakah setiap variabel di RQ punya metrik terdefinisi? |
| Metrik → Sistem | Apakah setiap metrik bisa diukur oleh komponen sistem? |
| Sistem → Eksperimen | Apakah desain eksperimen menggunakan sistem sebagai instrumen? |

### Koherensi Vertikal + Horizontal

- **Vertikal** — Alur logis atas-ke-bawah (problem → experiment). Setiap section menjawab pertanyaan yang diangkat section sebelumnya dan memunculkan pertanyaan baru.
- **Horizontal** — Konsistensi terminologi (nama variabel di RQ = di hipotesis = di metrik = di desain)

**Operasionalisasi Red Thread** (benang merah):
```
Bab 2 (Problem) → | memperkenalkan masalah X + evidensi |
                          ↓ menimbulkan pertanyaan: "apa akar gap-nya?"
Bab 3 (Gap)     → | menjawab pertanyaan tadi + membuka "lalu apa yang perlu diteliti?" |
                          ↓
Bab 4 (RQ/H)    → | menjawab gap dengan pertanyaan spesifik + prediksi terukur |
                          ↓
Bab 5-7 (Method)→ | menjawab RQ melalui desain eksperimen yang tepat |
```
Jika ada lompatan (section B tidak menjawab pertanyaan section A), red thread putus.

### Jebakan Kognitif

| Jebakan | Deskripsi |
|---------|----------|
| "Selling" Introduction | Menulis promosi, bukan menyajikan data dan gap |
| Copy-paste Methodology | Menyalin deskripsi tekstbook tanpa menyesuaikan ke RQ |
| Optimistic Timeline | Meremehkan waktu implementasi; selalu tambah buffer 30-50% |
| No Possibility of Failure | Mengimplikasikan hasil pasti sukses — proposal jujur mengakui H₀ mungkin tidak ditolak |

### Struktur Proposal

1. **Pendahuluan** — Latar belakang + problem statement (Bab 1-2)
2. **Tinjauan Pustaka** — Literature review + gap + baseline (Bab 3)
3. **RQ / Kontribusi / Hipotesis** — (Bab 4)
4. **Metodologi** — Metrik + sistem + desain eksperimen (Bab 5-7)
5. **Timeline & Output**

### Istilah Penting

- **Integration Map** — Diagram 6 koneksi kritis antar komponen proposal
- **Vertical Coherence** — Alur logis atas-ke-bawah
- **Horizontal Coherence** — Konsistensi terminologi di semua bagian
- **Checkpoint** — Titik self-assessment sebelum transisi dari desain ke eksekusi

---

## Template A.8 — Integration Checklist

```
PROPOSAL INTEGRATION CHECKLIST

[✓] Problem → Gap: Masalah terdokumentasi di literatur.
[✓] Gap → RQ: Research Question secara langsung menjawab gap yang telah diidentifikasi.
[✓] RQ → Hypothesis: Hipotesis memprediksi jawaban dari Research Question.
[✓] Hypothesis → Metric: Metrik berupa waktu proses absensi dan jumlah kesalahan pencatatan mengukur variabel pada hipotesis.
[✓] Metric → System: Komponen sistem (modul QR Code, database, dan pencatat waktu) menghasilkan data yang dibutuhkan untuk mengukur metrik.
[✓] System → Experiment: Desain eksperimen menggunakan sistem sebagai instrumen untuk membandingkan absensi manual dan QR Code.

Koneksi Horizontal (Konsistensi):
[✓] Istilah sama di semua bagian.
[✓] Variabel di RQ = variabel di hipotesis = metrik di desain.
[✓] Scope tidak berubah dari masalah ke eksperimen.

Cognitive Trap Checklist:
[✓] Tidak ada paragraf "promosi" di pendahuluan (hanya menjelaskan masalah dan gap penelitian).
[✓] Metodologi disesuaikan dengan Research Question, bukan sekadar menyalin teori.
[✓] Timeline telah mempertimbangkan penambahan buffer sekitar 30–50% dari estimasi awal.
[✓] Proposal mengakui kemungkinan H₀ tidak ditolak (hasil penelitian bisa saja menunjukkan tidak ada perbedaan yang signifikan).
[✓] Tidak terdapat klaim bahwa sistem "pasti berhasil" atau "pasti meningkatkan" performa.

Rubrik Self-Assessment:
| Kriteria     | 1 (Lemah)                                        | 2 (Cukup)                                     | 3 (Baik)                                           | Skor |
|------------- |--------------------------------------------------|-----------------------------------------------|----------------------------------------------------|------|
| Koherensi    | >2 koneksi vertikal terputus                     | 1-2 koneksi lemah, argumen masih bisa diikuti | Semua 6 koneksi terhubung, red thread jelas        |   3   |
| Specificity  | Variabel/metrik masih abstrak, tidak ada angka   | Sebagian metrik terdefinisi numerik           | Semua metrik + threshold + unit pengukuran jelas   |    3  |
| Feasibility  | Timeline >6 bulan tanpa memperhitungkan sumber   | Timeline 3-6 bulan dengan asumsi tertentu     | Timeline 1-3 bulan realistis dengan rencana detail |     3 |
| Rigor        | Baseline tidak jelas atau straw man              | 1-2 baseline dengan justifikasi partial       | 2+ baseline SOTA + justifikasi pemilihan lengkap   |    3  |
```
Skor 12/12
---

## Latihan 1 — Kompilasi Proposal Mini

Kumpulkan hasil dari WS-02 sampai WS-07 menjadi satu ringkasan proposal.

| Komponen | Sumber | Isi (1-2 kalimat) |
|----------|--------|-------------------|
| Problem Statement | WS-02 | Sistem absensi manual masih membutuhkan waktu yang relatif lama, rentan terjadi kesalahan pencatatan, serta memiliki potensi manipulasi data kehadiran. Oleh karena itu diperlukan sistem absensi berbasis QR Code yang lebih efisien dan akurat. |
| Gap | WS-03 | Penelitian sebelumnya menunjukkan bahwa sistem absensi QR Code masih memiliki kelemahan dalam validasi kehadiran, berpotensi terjadi titip absen, dan sebagian besar hanya diuji pada satu lingkungan pendidikan sehingga efektivitasnya belum dapat digeneralisasikan. |
| RQ | WS-04 | Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan? |
| Hipotesis | WS-04 | H₁: Sistem absensi berbasis QR Code menghasilkan efisiensi dan akurasi yang lebih baik dibandingkan sistem absensi manual dengan pengurangan waktu absensi minimal 20% serta penurunan jumlah kesalahan pencatatan. |
| Variabel & Metrik | WS-05 | IV = Jenis sistem absensi (QR Code dan manual). DV = Efisiensi (waktu proses absensi) dan akurasi (jumlah kesalahan pencatatan). CV = Jumlah siswa dan kondisi pengujian. |
| Sistem | WS-06 | Sistem terdiri dari modul absensi QR Code, database penyimpanan data, dan pencatat waktu (logger) yang digunakan untuk mengukur efisiensi dan akurasi selama proses absensi.|
| Desain Eksperimen | WS-07 |Penelitian menggunakan metode comparison study dengan membandingkan sistem absensi manual dan QR Code pada kondisi yang sama menggunakan jumlah siswa, lokasi, waktu, serta metrik evaluasi yang identik. |

---

## Latihan 2 — Integration Checklist

Verifikasi 6 koneksi kritis. Isi dengan merujuk tabel di Latihan 1.

| Koneksi | Status | Bukti |
|---------|--------|-------|
| Problem → Gap | ✅ | Masalah absensi manual dan potensi manipulasi didukung oleh hasil literature review yang menunjukkan keterbatasan sistem QR Code pada penelitian sebelumnya.|
| Gap → RQ |  ✅ | Research Question secara langsung menguji efektivitas sistem QR Code untuk mengatasi kelemahan yang ditemukan pada literature review.|
| RQ → Hypothesis |  ✅|Hipotesis memprediksi bahwa sistem QR Code lebih efisien dan akurat dibandingkan sistem manual. |
| Hypothesis → Metric | ✅ |Hipotesis diukur menggunakan waktu proses absensi, jumlah kesalahan pencatatan, dan target peningkatan efisiensi minimal 20%. |
| Metric → System |✅  | Logger sistem mengukur waktu absensi sedangkan database mencatat jumlah kesalahan sehingga seluruh metrik dapat diperoleh dari sistem.|
| System → Experiment |✅  | Sistem digunakan sebagai instrumen eksperimen untuk membandingkan metode QR Code dan manual dalam kondisi pengujian yang sama.|

**Koneksi mana yang paling lemah?** Tidak ada koneksi yang terputus, namun koneksi Problem → Gap masih dapat diperkuat dengan menambah referensi penelitian terbaru yang mendukung adanya permasalahan validasi absensi QR Code.
**Bagaimana cara memperkuatnya?**
> Menambahkan lebih banyak jurnal terbaru (2023–2025), memperluas database pencarian (IEEE, Scopus, ACM), serta menggunakan lebih dari satu lingkungan pendidikan sebagai objek penelitian.

**Konsistensi horizontal — apakah istilah dan scope konsisten?** [ ✓] Ya / [ ] Tidak
> Jika tidak, di bagian mana terjadi inkonsistensi? _________

---

## Latihan 3 — Rubrik Self-Assessment

Evaluasi proposal mini menggunakan rubrik.

| Kriteria | Skor (1-3) | Justifikasi |
|----------|-----------|-------------|
| Koherensi | 3 |Semua bagian proposal saling terhubung mulai dari problem, gap, RQ, hipotesis, metrik, sistem hingga eksperimen. |
| Specificity |3  |Variabel, metrik, threshold peningkatan efisiensi (≥20%), satuan pengukuran, dan metode evaluasi telah dijelaskan dengan jelas. |
| Feasibility | 3| Penelitian realistis diselesaikan dalam waktu 1–3 bulan dengan kebutuhan perangkat dan data yang mudah diperoleh.|
| Rigor |3 |Baseline menggunakan sistem absensi manual dan sistem QR Code yang didukung oleh literature review serta memiliki justifikasi yang jelas. |

**Skor total:** 12 / 12

**Apakah proposal siap untuk fase eksekusi?** [ ✓]] Ya / [ ] Belum
Karena seluruh komponen penelitian telah saling terhubung, memiliki variabel dan metrik yang jelas, desain eksperimen yang sesuai dengan RQ, serta baseline yang relevan.

---

## Refleksi

> Dari seluruh proses WS-01 sampai WS-08, bagian mana yang paling mudah dan paling sulit? Mengapa? Apa yang akan dilakukan berbeda jika mengulang dari awal?

**Bagian termudah:** Menentukan variabel penelitian dan metrik pengukuran karena hubungan antara efisiensi, akurasi, waktu proses, dan jumlah kesalahan sudah cukup jelas.
**Bagian tersulit:** Menyusun literature review secara concept-centric dan mengidentifikasi research gap yang benar-benar didukung oleh hasil analisis beberapa penelitian sebelumnya.
**Yang akan dilakukan berbeda:**
> Melakukan pencarian literatur yang lebih sistematis sejak awal menggunakan database seperti IEEE Xplore, Scopus, dan Google Scholar agar proses identifikasi gap menjadi lebih mudah.
> Menyusun proposal berdasarkan hubungan antar bab (Problem → Gap → RQ → Hipotesis → Metrik → Sistem → Eksperimen) sejak awal sehingga tidak perlu banyak revisi pada tahap integrasi.
