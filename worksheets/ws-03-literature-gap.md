# WS-03: Literature Mapping & Gap

> **Bab 3 — Literature Review, Research Gap & Baseline**

---

## Ringkasan Materi

### Literature Review = Positioning, Bukan Ringkasan

Literature review bukan merangkum paper satu per satu. Pendekatan yang benar adalah **concept-centric** — organisasi berdasarkan tema, metode, atau variabel. Tujuan: menemukan **pola, kontradiksi, dan gap**.

**Perbandingan pendekatan Author-centric vs Concept-centric:**

| Aspek | Author-centric (Hindari) | Concept-centric (Gunakan) |
|-------|--------------------------|---------------------------|
| Struktur | Per penulis/paper ("Rahman et al. menyatakan...") | Per konsep/metode ("Pendekatan berbasis transformer") |
| Tujuan | Ringkasan isi paper | Perbandingan metode & identifikasi gap |
| Contoh paragraph | "Rahman (2023) pakai CNN. Lee (2022) pakai LSTM. Zhang (2021) pakai RF." | "Tiga pendekatan dominan: CNN digunakan oleh 4 paper untuk representasi fitur visual; LSTM untuk data sekuensial; RF sebagai baseline klasik." |
| Hasil akhir | Daftar paper | Peta pengetahuan + gap yang teridentifikasi |

### Empat Jenis Research Gap

| Jenis Gap | Deskripsi | Contoh |
|-----------|----------|--------|
| **Performance Gap** | Performa belum memadai | Akurasi deteksi hanya 78% pada kasus tertentu |
| **Method Gap** | Pendekatan belum diterapkan | Belum ada yang pakai transformer untuk task ini |
| **Data Gap** | Dataset terbatas/tidak representatif | Semua studi pakai dataset sintetis |
| **Context Gap** | Belum diuji pada konteks berbeda | Belum ada evaluasi di negara berkembang |

Gap terkuat = kombinasi 2+ jenis.

### Systematic Search Strategy

1. **Database utama**: IEEE Xplore, ACM DL, Scopus
   - Akses IEEE/ACM melalui jaringan kampus atau VPN institusi
   - Alternatif bebas biaya: Google Scholar, ResearchGate ([researchgate.net](https://www.researchgate.net)), arXiv ([arxiv.org](https://arxiv.org))
2. **Boolean query** yang terdokumentasi eksplisit
   - Contoh: `("anomaly detection" OR "intrusion detection") AND ("deep learning" OR "neural network") NOT ("medical imaging")`
   - Gunakan tanda kutip untuk frasa eksak; AND/OR/NOT mengontrol scope
3. **Snowballing** — dua arah:
   - **Backward snowballing**: buka daftar referensi di paper kunci → telusuri paper yang dikutip
   - **Forward snowballing**: di Google Scholar, klik "Cited by" di bawah paper kunci → temukan paper yang mengutipnya
   - Ulangi 1–2 tingkat untuk membangun cakupan komprehensif
4. Klaim "belum ada penelitian" harus didukung **bukti pencarian**

### Baseline Selection — 3 Kriteria

| Kriteria | Pertanyaan |
|----------|-----------|
| **Relevan** | Apakah menyelesaikan masalah yang sama? |
| **Representatif** | Apakah mewakili common practice? |
| **State-of-the-Art** | Apakah terbaru/terbaik? |

Membandingkan deep learning 2024 dengan decision tree sederhana tanpa justifikasi = **straw man comparison** (perbandingan tidak jujur).

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan baca literatur | Mencari solusi yang sudah ada | Memahami apa yang belum terjawab |
| Cara membaca paper | Tutorial, how-to | Metode, limitasi, gap |
| Baseline | Framework terpopuler | State-of-the-art yang rigorous |
| Dokumentasi pencarian | Tidak diperlukan | Wajib (reproducible) |

### Istilah Penting

- **Concept-centric** — Organisasi literatur berdasarkan konsep/metode, bukan per penulis
- **Snowballing** — Backward (telusuri referensi) + Forward (cari yang mengutip paper kunci)
- **Research Position** — Pernyataan eksplisit posisi riset terhadap studi sebelumnya
- **Straw man comparison** — Memilih baseline lemah agar metode sendiri terlihat lebih baik

---

## Template A.3 — Literature Mapping & Gap Identification

```
LITERATURE MAPPING

Topik      : Sistem Absensi Berbasis QR
Database   : 
Query      : ("QR Code" OR "Sistem Absensi") AND ("Website" OR "Digital")
Tahun      : 2020–2025
Hasil awal : 20 paper → Screening → 5 paper final

Literature Matrix (concept-centric):

| Study | Tahun | Method | Data | Result | Limitation |
|-------|-------|--------|------|--------|------------|
|Yamin Nuryamin et al.  |2023|QR Code berbasis website| Data absensi siswa|Mempermudah pencatatan absensi|Hanya diuji pada satu sekolah|
|Andri Setiawan et al. |2022|QR Code + Web System| Data Mahasiswa|Proses absensi lebih cepat   |Bergantung pada internet|
|Dwi Lestari et al.    |2021|Sistem absensi digital| Data Kehadiran Siswa|Mengurangi kesalahan manual  |Belum ada validasi lokasi|
|Ahmad Fauzi et al.    |2024|QR Code real-time| Data absensi kampus | Monitoring lebih efisien |Potensi titip absen |
|Rizky Pratama et al.   |2023|QR Code + Database| Data Sekolah| Rekap absensi otomatis|Belum diuji jangka panjang |


Pola yang ditemukan:
  Metode dominan     : Sistem absensi berbasis QR Code dan website
  Dataset umum       : Data absensi siswa atau mahasiswa
  Limitasi berulang  : Ketergantungan internet dan potensi manipulasi absensi

GAP IDENTIFICATION

Gap 1: [Jenis: Contect Gap]
  Deskripsi    : Sebagian besar penelitian hanya diuji pada satu institusi pendidikan tertentu
  Bukti        : Mayoritas paper menggunakan lingkungan pengujian terbatas satu sekolah atau satu kampus
  Signifikansi : hasil penelitian belum tentu relevan untuk lingkungan pendidikan yang berbeda

Gap 2: [Jenis: Performance Gap]
  Deskripsi    : Sistem QR Code masih meimiliki kelemahan validasi kehadiran aslui pengguna
  Bukti        : Beberapa penelitian masih menemukan kasus titip absen atau penyalahgunaan QR Code
  Signifikansi : Menurunkan validitas dan keakuratan data absensi digital
Baseline Selection:
| Baseline | Relevansi | Representatif | Source |
|----------|-----------|---------------|--------|
|Sistem absensi manual|Digunakan sebagai pembanding utama|Masih digunakan di banyak sekolah|Dwi Lestari et al., 2021|
|Sistem absensi QR berbasis web|memiliki fungsi yang sama|Digunakan di sebagian besar penelitian|Yamin Nuryamin et al., 2023|



---

## Latihan 1 — Concept-Centric Literature Table

Topik riset : Sistem absensi berbasis QR Code

> **Panduan pencarian:**
> - Database: IEEE Xplore, ACM DL, Google Scholar, atau ResearchGate
> - Tulis query Boolean yang digunakan: contoh `("object detection" OR "image classification") AND ("edge computing") NOT ("medical")`. Dokumentasikan query secara eksplisit.
> - Akses gratis: buka Google Scholar → cari judul paper → klik [PDF] jika tersedia, atau akses lewat campus VPN

**Topik riset:** Sistem absensi berbasis QR Code
**Query pencarian:** ("QR Code" OR "Sistem Absensi") AND ("Website" OR "Digital")
**Database:** Google Scholar
| # | Study | Tahun | Method | Dataset | Result | Limitasi |
|---|-------|-------|--------|---------|--------|----------|
| 1 | Yamin Nuryamin et al.| 2023 | QR Code Website| Data Siswa | Absensi lebih efisien| Satu sekolah |
| 2 |Andri Setiawan et al. |2022 |QR Code System |Data Mahasiswa |Mempercepat absensi |Bergantung internet |
| 3 |Dwi Lestari et al. |2021 |Sistem digital |Data Sekolah |Mengurangi kesalahan manual |Belum validasi lokasi |
| 4 |Ahmad Fauzi et al. |2024|Real-time QR |Data Kampus| Monitoring lebih cepat|potensi manipulasi |
| 5 |Rizky Pratama et al. |2023 |QR + Database |Data Absensi|Rekap otomatis |Belum lama diuji |

**Pola yang terlihat — Metode dominan:** Sistem absensi berbasis QR Code dan website
**Limitasi yang berulang:** Ketergantungan terhadap koneksi internet dan potensi titip absen

---

## Latihan 2 — Gap Identification

Berdasarkan tabel di Latihan 1, identifikasi gap.

| Jenis Gap | Ditemukan? | Gap Statement |
|-----------|-----------|---------------|
| Performance Gap | [Ya] Ya / [ ] Tidak |Sistem masih memiliki potensi manipulasi absensi|
| Method Gap | [Ya] Ya / [ ] Tidak |Belum banyak penelitian yang menggabungkan validasi lokasi atau biometrik |
| Data Gap | [Ya] Ya / [ ] Tidak |Dataset hanya berasal dari satu institusi |
| Context Gap | [Ya] Ya / [ ] Tidak |Belum diuji pada berbagai lingkungan pendidikan |

**Gap utama yang dipilih:** Context Gap dan Performance Gap
**Mengapa gap ini penting (bukan sekadar "belum ada yang meneliti")?**
> Gap ini penting karena efektivitas sistem absensi QR Code belum tentu sama di setiap lingkungan pendidikan. Selain itu, potensi manipulasi absensi dapat mempengaruhi validitas data kehadiran sehingga perlu evaluasi lebih lanjut terhadap keamanan dan keandalan sistem.

---

## Latihan 3 — Baseline Selection

Pilih 2 baseline dari literatur yang sudah dibaca.

| # | Baseline | Mengapa Relevan | Mengapa Representatif | Apakah SOTA? | Sumber |
|---|----------|----------------|----------------------|-------------|--------|
| 1 |  Sistem absensi manual| Membandingkan metode lama dan baru|Masih umum digunakan | Tidak | Dwi Lestari et al., 2021 |
| 2 |Sistem absensi QR berbasis web |Memiliki tujuan yang sama |Banyak digunakan pada penelitian serupa |Ya | Yamin Nuryamin et al., 2023|

**Apakah pemilihan baseline ini bisa dianggap straw man?** [ ] Ya / [jawabannya tidak] Tidak
> Justifikasi: Baseline yang dipilih masih relevan dengan permasalahan penelitian dan digunakan secara umum dalam implementasi sistem absensi di lingkungan pendidikan.

---

## Refleksi

> Apa perbedaan antara "belum ada yang meneliti ini" (klaim tanpa bukti) dengan research gap yang valid? Bagaimana cara membuktikan bahwa sebuah gap benar-benar ada?

**Jawaban:**
> Pernyataan “belum ada yang meneliti ini” tidak dapat dianggap sebagai research gap tanpa bukti yang jelas dari hasil pencarian literatur. Research gap yang valid harus didukung oleh analisis beberapa penelitian sebelumnya untuk menemukan keterbatasan, kontradiksi, atau konteks yang belum diuji.
> Sebuah gap dapat dibuktikan melalui literature review yang sistematis, penggunaan query pencarian yang jelas, serta identifikasi pola limitasi yang berulang pada penelitian sebelumnya.
