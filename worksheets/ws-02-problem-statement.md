# WS-02: Problem Statement

> **Bab 2 — Problem Formulation & System Context**

---

## Ringkasan Materi

### Problem Formation Model

Masalah riset melewati 5 tahap transformasi. Melompat langsung dari Reality ke Variable adalah kesalahan paling umum.

```
Reality → Observed Issue (Symptom) → Diagnosed Problem (Root Cause)
→ Researchable Problem (Scoped) → Measurable Variable (Operationalized)
```

### Topic ≠ Problem ≠ Research Problem

| Level | Contoh | Status |
|-------|--------|--------|
| **Topik** | Keamanan IoT | Terlalu luas, tidak bisa diuji |
| **Problem** | MQTT tidak terenkripsi | Spesifik tapi belum riset |
| **Research Problem** | Belum ada studi membandingkan overhead TLS 1.3 vs DTLS pada MQTT di IoT RAM < 64KB | Bisa dirancang eksperimennya |

### Symptom vs Root Cause

Apa yang diamati (gejala) ≠ mengapa terjadi (akar masalah). Gunakan **5 Whys** atau **Fishbone Diagram** untuk menggali.

Contoh: "User meninggalkan checkout" (symptom) → "Waktu loading > 8 detik karena API call sequential" (root cause).

### System Thinking

Setiap masalah riset TI harus terikat pada komponen sistem: **Input → Process → Output → Outcome → Constraints → Stakeholders**.

### Problem Quality Check

Masalah riset yang layak harus memenuhi 5 kriteria:
- **Clarity** — Satu orang membaca akan paham
- **Measurability** — Ada metrik kuantitatif
- **Relevance** — Penting untuk domain
- **Testability** — Bisa gagal (falsifiable)
- **Impact** — Ada kontribusi jika terjawab

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan | Menyelesaikan masalah (*solve*) | Memahami dan membuktikan (*understand & prove*) |
| Masalah | Bug, error, fitur belum ada | Gap dalam pengetahuan |
| Scope | Selesaikan semua yang perlu | Batasi agar bisa dibuktikan |
| Output | Working system | Evidence, paper, replicable findings |

### Istilah Penting

- **Problem Statement** — Formulasi tertulis: konteks sistem + gap + dampak + justifikasi
- **System Context** — Deskripsi lengkap: input, proses, output, outcome, constraints, stakeholders
- **Problem Drift** — Masalah "bermutasi" dari pendahuluan ke metodologi karena statement awal tidak presisi
- **Solution-First Thinking** — Memulai dari solusi tanpa masalah yang jelas — berbahaya dalam riset
- **Operational Definition** — Definisi variabel yang cukup jelas agar peneliti lain bisa mengukur hal yang sama

---

## Template A.2 — Problem Statement Builder

```
PROBLEM STATEMENT BUILDER

Domain & Konteks
  Domain   : Sistem Informasi
  Konteks  : Sistem absensi siswa berbasis QR Code di lingkungan pendidikan

System Context
  Input       : Data kehadiran siswa (scan QR Code)
  Process     : Sistem memproses hasil scan dan mencatat ke database
  Output      : Data absensi siswa secara digital
  Outcome     : Meningkatkan efisiensi dan akurasi absensi
  Constraints :Koneksi internet, perangkat pengguna, potensi penyalahgunaan QR 
  Stakeholders: Siswa, guru, admin sekolah

Fenomena → Problem
  Fenomena yang diamati : Sekolah mulai beralih dari absensi manual ke sistem digital
  Gejala (symptom) yang terukur : Masih terjadi titip absen dan kesalahan pencatatan data
  Masalah yang didiagnosis (root cause) : Sistem absensi belum memiliki mekanisme validasi kehadiran yang kuat
  Masalah riset (researchable) : Belum ada evaluasi yang jelas mengenai efektivitas sistem absensi berbasis QR Code dalam meningkatkan akurasi dan keandalan data kehadiran
  Variabel yang terukur :
    - Tingkat keakuratan data absensi
    - Waktu proses absensi
    - Jumlah kesalahan atau manipulasi data

Problem Quality Check
  [Ya ] Clarity — Apakah satu orang membaca akan paham?
  [Ya] Measurability — Apakah ada metrik kuantitatif?
  [Ya] Relevance — Apakah penting untuk domain?
  [Ya] Testability — Apakah bisa gagal?
  [Ya] Impact — Apakah ada kontribusi jika terjawab?

Problem Statement (1 paragraf):
  Perkembangan sistem informasi mendorong digitalisasi proses absensi di lingkungan pendidikan, salah satunya melalui penggunaan QR Code. Namun, meskipun sistem ini dianggap lebih efisien dibandingkan metode manual, masih terdapat permasalahan terkait validitas dan keakuratan data kehadiran, seperti potensi penyalahgunaan QR Code dan ketergantungan pada kondisi teknis tertentu. Oleh karena itu, diperlukan penelitian untuk mengevaluasi efektivitas sistem absensi berbasis QR Code dalam meningkatkan akurasi, efisiensi, dan keandalan data kehadiran siswa.
```

---

## Latihan 1 — Dari Topik ke Masalah Riset

Pilih satu topik di bidang TI yang diminati. Transformasikan melalui 5 tahap Problem Formation Model.

**Topik awal:** Sistem absensi berbasis QR Code

| Tahap | Hasil |
|-------|-------|
| Reality | Sekolah menggunakan sistem absensi digital |
| Observed Issue (Symptom) | Masih terjadi kesalahan dan manipulasi absensi |
| Diagnosed Problem (Root Cause) |Sistem belum mampu memverifikasi kehadiran secara akurat |
| Researchable Problem |Belum ada evaluasi efektivitas sistem QR Code dalam meningkatkan keakuratan absensi |
| Measurable Variable | Akurasi data, waktu absensi, tingkat kesalahan|

**Apakah terjebak solution-first thinking?** [ ] Ya / [ Yang ini, Jawabannya] Tidak
> Jika ya, kembali ke tahap mana? ________________________

---

## Latihan 2 — System Context Decomposition

Gambarkan konteks sistem dari masalah riset di Latihan 1.

| Komponen | Deskripsi |
|----------|----------|
| Input | Data scan QR Code dari siswa |
| Process |Sistem membaca QR dan menyimpan data ke database |
| Output | Data absensi digital|
| Outcome | Proses absensi lebih cepat dan efisien|
| Constraints |Internet, perangkat, potensi kecurangan |
| Stakeholders | siswa, guru, admin|

**Komponen mana yang paling relevan dengan masalah riset?** Process (proses validasi data absensi)

---

## Latihan 3 — Problem Quality Check

Evaluasi problem statement yang sudah dibuat menggunakan 5 kriteria.

| Kriteria | Skor (1-5) | Justifikasi |
|----------|-----------|-------------|
| Clarity | *Contoh: 4 — cukup jelas tapi perlu spesifikasi dataset* | |
| Measurability | | |
| Relevance | | |
| Testability | | |
| Impact | | |

**Skor total:** _____ / 25

**Problem statement versi final (1 paragraf):**
> ___________________________________________________
> ___________________________________________________

---

## Refleksi

> Bandingkan "masalah" yang biasa ditemui saat coding (bug, error) dengan masalah riset. Apa perbedaan fundamental dalam cara mendefinisikan dan mendekati keduanya?

**Jawaban:**
> ___________________________________________________
> ___________________________________________________
