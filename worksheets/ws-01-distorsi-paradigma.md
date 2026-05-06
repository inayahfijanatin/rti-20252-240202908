# WS-01: Distorsi & Paradigma

> **Bab 1 — Research Mindset in IT**

---

## Ringkasan Materi

### Research Trust Model

Pengetahuan ilmiah tidak muncul langsung dari kenyataan. Ia melewati **6 tahap transformasi** yang masing-masing rawan distorsi:

```
Reality → Data → Processing → Analysis → Inference → Knowledge
```

Etika mencegah distorsi yang disengaja (fabrikasi, cherry-picking). Validitas mendeteksi distorsi yang tidak disengaja (confounding variable, sampling bias).

### Tiga Jenis Validitas

| Jenis | Pertanyaan | Contoh Ancaman |
|-------|-----------|----------------|
| **Internal Validity** | Apakah hubungan kausal benar ada? | Confounding variable |
| **External Validity** | Apakah bisa digeneralisasi? | Dataset terlalu homogen |
| **Construct Validity** | Apakah mengukur hal yang benar? | Metrik tidak sesuai klaim |

### Paradigma Riset

Mata kuliah ini menggunakan pendekatan **Positivist** (fenomena TI bisa diukur objektif melalui eksperimen terkontrol) diperkuat **Design Science Research** (DSR). Penting untuk membedakan keduanya:

| Paradigma | Cara Kerja | Contoh di TI |
|-----------|-----------|---------------|
| **Positivis** | Uji hipotesis dengan eksperimen terkontrol | Apakah CNN lebih akurat dari RF pada dataset X? |
| **Design Science Research** | Bangun artefak (sistem/model/framework) untuk menguji proposisi | Dapatkah arsitektur hybrid CNN+LSTM membuktikan peningkatan recall ≥5%? |
| **Interpretivis** | Pahami makna melalui konteks & kualitatif | Bagaimana peneliti manafsirkan anomali data sensor IoT? |

Dalam DSR, artefak **bukan tujuan akhir** — ia adalah instrumen untuk menghasilkan pengetahuan. Pertanyaan riset tetap harus difalsifikasi.

### Mode Berpikir Peneliti

**Curious** (mempertanyakan fenomena) → **Critical** (mengevaluasi klaim berdasarkan bukti) → **Systematic** (merancang investigasi terstruktur dan reproducible).

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan | Membuat sistem yang bekerja | Menghasilkan pengetahuan yang valid |
| Pertanyaan khas | "Bagaimana membuatnya jalan?" | "Apakah klaim ini benar?" |
| Ukuran sukses | Sistem berfungsi, client puas | Hipotesis terjawab, temuan tervalidasi |
| Kegagalan | Harus dihindari | Harus dilaporkan (negative result = kontribusi) |

### Istilah Penting

- **Research Mindset** — Pola pikir yang menuntut bukti dan mempertanyakan asumsi
- **Research Ethics** — Prinsip perilaku: kejujuran, objektivitas, keterbukaan, akuntabilitas
- **HARKing** — Hypothesizing After Results are Known — merumuskan hipotesis setelah melihat data
- **Falsifiability** — Hipotesis harus bisa dibuktikan salah

---

## Template A.1 — Research Mindset Self-Assessment

```
Nama Peneliti    : Inayah Fijanatin
Tanggal          : 30 April 2026

1. Ketika membaca klaim "metode X 95% akurat":
   - Pertanyaan pertama saya: Apakah klaim tersebut didukung oleh desain eksperimen yang valid dan apakah metrik yang digunakan benar-benar merepresentasikan performa sistem?
   - Data yang dibutuhkan untuk verifikasi: Distribusi dataset, metode evaluasi (train-test split atau cross-validation), metrik performa, serta baseline pembanding

2. Posisi paradigma:
   - Pendekatan: [Ya] Positivis  [ ] Interpretivis  [Ya] Design Science  [ ] Mixed
   - Alasan: Penelitian ini tidak hanya menguji efektivitas sistem secara kuantitatif, tetapi juga membangun artefak berupa sistem absensi berbasis QR Code. Oleh karena itu, pendekatan yang digunakan merupakan kombinasi antara pengujian empiris (positivis) dan pembangunan solusi (Design Science Research).

3. Identifikasi distorsi:
   - Asumsi tersembunyi: Sistem digital berbasis QR Code diasumsikan secara inheren lebih efektif dibandingkan sistem manual tanpa mempertimbangkan konteks implementasi
   - Sumber bias potensial: Sampling terbatas pada satu institusi pendidikan serta kemungkinan bias penggunaan dalam kondisi jaringan yang stabil
   - Langkah mitigasi: Melakukan replikasi studi di berbagai lingkungan, menggunakan data yang lebih beragam, serta mempertimbangkan variabel eksternal seperti infrastruktur teknologi

4. Komitmen etika:
   - Data yang tidak akan dimanipulasi: Seluruh hasil pengujian, termasuk hasil yang tidak sesuai harapan atau menunjukkan keterbatasan sistem
   - Batasan yang diakui sejak awal: Ketergantungan sistem terhadap konektivitas internet, perangkat pengguna, serta potensi penyalahgunaan QR Code oleh pengguna
```

---

## Latihan 1 — Identifikasi Distorsi
Judul: Perancangan Sistem Informasi Absensi Siswa Menggunakan Teknologi QR Code Berbasis Website
Penulis (Tahun): Yamin Nuryamin, dkk (2024)

> **Panduan pencarian paper:** Gunakan [IEEE Xplore](https://ieeexplore.ieee.org), [ACM Digital Library](https://dl.acm.org), atau Google Scholar. Pilih paper **tahun 2020 ke atas**, di topik yang Anda minati: deteksi anomali, klasifikasi citra, NLP, keamanan siber, IoT, dsb.
> link sumber paper : https://journal.universitassuryadarma.ac.id/index.php/jsi/article/view/1342
> **Contoh domain TI:** "Deteksi anomali lalu-lintas jaringan menggunakan CNN — akurasi meningkat 94% vs baseline SVM 87%." Distorsi potensial: apakah dataset normal/anomali seimbang? Apakah hanya diuji pada satu vendor traffic?

**Paper yang dipilih:**
> Judul: Perancangan Sistem Informasi Absensi Siswa Menggunakan Teknologi QR Code Berbasis Website
> Penulis (Tahun): Yamin Nuryamin, dkk
> Sumber/Link DOI: https://journal.universitassuryadarma.ac.id/index.php/jsi/article/view/1342 

| Tahap | Apa yang Dilakukan | Potensi Distorsi |
|-------|-------------------|-----------------|
| Reality → Data | Mengidentifikasi permasalahan absensi manual di lingkungan sekolah | Data observasi terbatas pada satu konteks institusi |
| Data → Processing |Mengumpulkan kebutuhan sistem dan mendefinisikan fitur |Kemungkinan adanya kebutuhan pengguna yang tidak terakomodasi |
| Processing → Analysis |Mengembangkan sistem berbasis QR Code | Pengujian dilakukan dalam skenario terbatas|
| Analysis → Inference |Menarik kesimpulan bahwa sistem lebih efisien |Tidak mempertimbangkan variabel eksternal seperti konektivitas |
| Inference → Knowledge |Menggeneralisasi efektivitas sistem | Overgeneralisasi tanpa validasi lintas konteks|

**Distorsi paling besar di tahap:** Inverence - Knowladge

**Dua distorsi spesifik yang teridentifikasi:**
1. Generalisasi hasil penelitian tanpa validasi pada lingkungan yang berbeda
2. Tidak adanya pengujian longitudinal untuk menilai efektivitas jangka panjan
---

## Latihan 2 — Analisis Kasus Etika

Skenario: Seorang peneliti menemukan bahwa jika 3 data point outlier dihapus, hasil eksperimennya menjadi signifikan. Dengan outlier, hasilnya tidak signifikan.

| Perspektif | Analisis |
|------------|---------|
| Kejujuran ilmiah | Peneliti wajib melaporkan hasil secara utuh tanpa manipulasi data|
| Transparansi | Setiap keputusan pengolahan data, termasuk penghapusan outlier, harus dijelaskan secara eksplisit|
| Peer review | Komunitas ilmiah berperan dalam mengevaluasi validitas keputusan tersebut|

**Keputusan akhir dan justifikasi:**
> Penghapusan outlier tanpa justifikasi yang kuat merupakan pelanggaran terhadap prinsip integritas ilmiah. Oleh karena itu, peneliti harus menyajikan kedua hasil (dengan dan tanpa outlier) sebagai bentuk transparansi dan akuntabilitas.

---

## Latihan 3 — Posisi Paradigma

**Topik riset:** ________________________________________

> **Skala 1–5:** 1 = tidak sesuai sama sekali dengan topik ini, 5 = sangat sesuai dan dominan digunakan pada riset bertopik serupa.

| Kriteria | Positivis | Interpretivis | Design Science |
|----------|-----------|---------------|----------------|
| Kesesuaian dengan topik (1–5) | 4 — berbasis evaluasi kuantitatif| 2 — terbatas pada konteks pengguna |5 — berfokus pada pembangunan artefak  |
| Jenis data yang dikumpulkan |Data performa sistem |Persepsi pengguna  | Hasil implementasi dan uji sistem|
| Limitasi paradigma | Tidak menangkap seluruh konteks|Bersifat subjektif |Fokus pada artefak, bukan teori umum |

**Paradigma yang dipilih:** Design Science Research
**Alasan:** Penelitian ini berorientasi pada pembangunan artefak teknologi sebagai solusi terhadap permasalahan nyata. Artefak tersebut kemudian digunakan sebagai sarana untuk menghasilkan pengetahuan melalui evaluasi performa sistem.

---

## Refleksi

> Sebelum membaca materi ini, apakah pernah mempertanyakan klaim "95% akurat"? Setelah memahami rantai distorsi, pertanyaan apa yang sekarang akan diajukan saat membaca paper?

**Jawaban:**
Sebelum memahami konsep Research Trust Model, saya cenderung menerima klaim efektivitas sistem tanpa mempertanyakan proses di baliknya. Namun, setelah memahami potensi distorsi pada setiap tahap penelitian, saya menyadari bahwa hasil penelitian tidak selalu merepresentasikan kondisi sebenarnya secara utuh. Oleh karena itu, saya kini lebih kritis dengan mempertanyakan validitas data, metodologi yang digunakan, serta sejauh mana hasil penelitian dapat digeneralisasi ke konteks yang berbeda.
