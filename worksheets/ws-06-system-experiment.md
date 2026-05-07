# WS-06: System-Experiment Mapping

> **Bab 6 — System Design sebagai Experimental Artifact**

---

## Ringkasan Materi

### Sistem = Instrumen Pengujian, Bukan Produk

Seorang engineer bertanya "apakah sistem bekerja?" — seorang peneliti bertanya "apa yang bisa dibuktikan sistem ini?" Sistem dalam riset adalah **artifact** — objek yang sengaja dibuat untuk menguji klaim spesifik.

### System as Experiment Model

```
RQ → Variable → System Component → Experimental Setup → Output
```

Setiap komponen sistem harus bisa ditelusuri ke variabel riset (top-down), dan setiap pengukuran harus menjawab RQ (bottom-up).

### Mapping Variabel ke Komponen

| Tipe Variabel | Peran di Sistem | Contoh |
|---------------|----------------|--------|
| **IV** (Independent) | Modul yang bisa di-toggle/swap | Algoritma A vs B |
| **DV** (Dependent) | Modul pengukuran | Logger, metrics collector |
| **CV** (Control) | Config yang dikunci | Dataset, parameter tetap |

Jika variabel tidak bisa di-map ke komponen apapun → arsitektur perlu didesain ulang.

### 4 Prinsip Desain Eksperimental

| Prinsip | Pertanyaan Kunci |
|---------|-----------------|
| **Traceability** | Komponen ini melayani variabel yang mana? |
| **Modularity** | Bisakah IV diubah tanpa memengaruhi yang lain? |
| **Controllability** | Apakah CV dieksternalisasi ke config file? |
| **Measurability** | Apakah sistem otomatis menghasilkan data yang dibutuhkan? |

### Variable Isolation melalui Arsitektur

- **Modular architecture** — Pisahkan berdasarkan variabel
- **Configuration-driven** — Ubah config (YAML/JSON), bukan code
- **Feature toggles** — On/off flag untuk ablation study

  Contoh config YAML dengan feature toggles:
  ```yaml
  model:
    type: cnn          # IV: ganti "rf" untuk kondisi baseline
  features:
    use_temporal: true  # toggle komponen temporal
    use_normalization: true  # toggle preprocessing
  experiment:
    seed: 42
    runs: 5
  ```
  Dengan pendekatan ini, berbeda kondisi eksperimen = berbeda satu baris config, **tanpa mengubah kode**.

### Research vs Engineering

| Aspek | Engineering | Research |
|-------|------------|----------|
| Tujuan sistem | Memenuhi kebutuhan user | Menguji hipotesis, menghasilkan bukti |
| Arsitektur | Optimasi performa & skalabilitas | Optimasi isolasi variabel & reprodusibilitas |
| Konfigurasi | Sering hardcoded | Dieksternalisasi ke config file |
| Fitur tambahan | Menambah nilai user | Menambah noise jika tidak terkait RQ |

### Istilah Penting

- **Artifact** — Objek yang sengaja dibuat untuk memecahkan masalah atau menguji proposisi
- **Traceability** — Kemampuan menelusuri hubungan RQ → variabel → komponen → output
- **Variable Isolation** — Mengubah hanya satu variabel sambil menahan yang lain konstan
- **Ablation Study** — Menguji kontribusi tiap komponen dengan melepasnya satu per satu
- **Configuration-driven Execution** — Semua parameter di config file, bukan hardcoded

---

## Template A.6 — Mapping RQ ke Arsitektur Sistem

```
SYSTEM-EXPERIMENT MAPPING

Research Question: Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?

Variable → Component Mapping:
| Variabel | Tipe | Komponen Sistem | Cara Manipulasi/Pengukuran |
|----------|------|-----------------|---------------------------|
| Jenis sistem absensi         | IV   |  Modul absensi (QR Code vc manual)               |  Mengubah metode absensi yang digunakan                          |
| Efisiensi absensi         | DV   | LOogger waktu absensi                |Mengukur durasi proses absensi                           |
| Akurasi absensi         | DV   | Database absensi                | Menghitung jumlah kesalahan pencatatan                          |
| Jumlah siswa         | CV   | Data peserta absensi                | Menjaga jumlah peserta tetap sama                          |

4 Prinsip Desain:
  [Ya] Traceability — Setiap komponen bisa ditelusuri ke variabel
  [Ya] Variable Isolation — IV bisa diubah tanpa mengubah CV
  [Ya] Measurement Integration — Pengukuran DV built-in
  [Ya] Reproducibility — Setup bisa direkonstruksi

Experimental Setup:
  Input data     : Data absensi siswa
  Parameter      : Jumlah siswa, waktu absensi, metode absensi
  Output format  : Data waktu absensi dan jumlah kesalahan pencatatan
```

---

## Latihan 1 — Variable-to-Component Mapping

Gunakan RQ dan variabel dari WS-05. Petakan ke komponen sistem.

**RQ:** Apakah sistem absensi berbasis QR Code menghasilkan proses absensi yang lebih efisien dan akurat dibandingkan sistem absensi manual pada lingkungan pendidikan?

| Variabel | Tipe | Komponen Sistem | Cara Manipulasi / Pengukuran |
|----------|------|-----------------|---------------------------|
|Jenis sistem absensi  |IV  |Modul absensi |Mengubah mode QR Code atau manual  |
|Efisiensi absensi | DV |Sistem pencatat waktu |Menghitung lama proses absensi |
| Akurasi absensi| DV |Database absensi |Menghitung jumlah kesalahan data |
|Jumlah Siswa| CV |Data peserta |Menyamakan jumlah siswa |

**Apakah semua variabel bisa di-map?** [Ya ] Ya / [ ] Tidak
> Jika tidak, komponen apa yang perlu ditambahkan? _________

---

## Latihan 2 — 4 Prinsip Desain

Evaluasi desain sistem terhadap 4 prinsip.

| Prinsip | Status | Bukti / Penjelasan |
|---------|--------|-------------------|
| Traceability | ✅ |Setiap variabel memiliki komponen sistem yang jelas |
| Modularity |✅ |sistem QR dan manual dapat dipisahkan |
| Controllability |✅ |Jumlah siswa dan kondisi pengujian dikontrol |
| Measurability |✅ |sistem menghasilkan data waktu dan error secara otomatis |

**Prinsip mana yang paling sulit dipenuhi?** Controllability
**Strategi untuk mengatasinya:**
> Menjaga kondisi eksperimen tetap sama, seperti jumlah siswa, waktu pelaksanaan, dan perangkat yang digunakan selama pengujian.

---

## Latihan 3 — Ablation Study Planning

Jika sistem memiliki 3 komponen utama, rencanakan ablation study.

> **Panduan jumlah kondisi:** Untuk 3 komponen (A, B, C), kondisi minimal yang direkomendasikan:
> Full + (-A) + (-B) + (-C) = **4 kondisi dasar**. Jika waktu memungkinkan, tambahkan kombinasi ganda: (-A,-B), (-A,-C), (-B,-C) = **7 kondisi**. Sesuaikan dengan *computational cost* dan tenggat waktu penelitian.

| Kondisi | Komponen A | Komponen B | Komponen C | Hasil yang Diharapkan |
|---------|-----------|-----------|-----------|----------------------|
| Full | ✅ QR Code | ✅ Database otomatis |  ✅ Validasi waktu  | Sistem bekerja optimal |
| – A | ❌ Manual | ✅ | ✅ | Proses lebih lambat|
| – B | ✅ | ❌ pencatatan manual | ✅ |Resiko kesalahan meningkat |
| – C | ✅ | ✅ | ❌ tanpa validasi | Potensi manipulasi absensi meningkat|

**Komponen mana yang diprediksi paling berkontribusi?** QR Code
**Mengapa?**
> Karena QR Code menjadi inti proses digitalisasi absensi yang berpengaruh langsung terhadap kecepatan dan efisiensi pencatatan data kehadiran.

---

## Refleksi

> Apa risiko jika sistem dibangun seperti produk (monolitik, fitur lengkap) lalu baru dilakukan eksperimen? Mengapa arsitektur modular penting untuk riset?

**Jawaban:**
> Jika sistem dibangun seperti produk yang monolitik dan penuh fitur sebelum eksperimen dilakukan, maka akan sulit untuk mengetahui komponen mana yang benar-benar mempengaruhi hasil penelitian. Hal ini dapat menyebabkan bias dan menyulitkan proses evaluasi variabel penelitian.
> Arsitektur modular penting dalam riset karena memungkinkan peneliti mengisolasi variabel tertentu, melakukan pengujian secara terstruktur, serta meningkatkan reprodusibilitas eksperimen sehingga hasil penelitian menjadi lebih valid dan dapat dipercaya.
