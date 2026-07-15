# WS-15: Scientific Writing

> **Bab 15 — Penulisan Ilmiah**

---

## Ringkasan Materi

### Scientific Argument Flow

```
Problem → Gap → RQ → Method → Result → Analysis → Conclusion → Contribution
```

Paper ilmiah adalah **satu argumen utuh** dari masalah ke kontribusi. Setiap node harus terhubung logis ke node sebelum dan sesudahnya.

### Struktur IMRAD

| Section | Peran | Pertanyaan Kunci |
|---------|-------|-----------------|
| **Introduction** | Motivasi + frame | Why is this needed? |
| **Method** | Deskripsi (reproducible) | How was it done? |
| **Results** | Laporan objektif | What was found? |
| **Discussion** | Interpretasi + refleksi | What does it mean? |
| **Conclusion** | Ringkasan + kontribusi | So what? |

### Logical Flow — "Red Thread"

Setiap paragraf menjawab satu pertanyaan dan memicu pertanyaan berikutnya. Alur logis ini harus terasa di tiga level:
1. **Antar-kalimat** dalam paragraf
2. **Antar-paragraf** dalam section
3. **Antar-section** dalam paper

### Internal Consistency

Setiap elemen yang dijanjikan di Introduction harus hadir di Discussion/Conclusion.

**Consistency Matrix:**
```
           Intro  Method  Result  Discuss  Conclude
RQ1          ✓      ✓       ✓       ✓        ✓
RQ2          ✓      ✓       ✓       ✗ ←      ✓
Metrik-X     ✗      ✗       ✓ ←     ✗        ✗
```
**Masalah:** RQ2 dibahas di semua bagian kecuali Discussion. Metrik-X muncul di Result tapi tidak diperkenalkan di Method.

### Writing Quality Triad

| Kualitas | Deskripsi | Contoh Buruk → Baik |
|----------|----------|---------------------|
| **Clarity** | Dipahami sekali baca | "Performa meningkat" → "Accuracy meningkat dari 85.3% ke 89.7%" |
| **Precision** | Istilah eksak, tanpa ambiguitas | "signifikan" → "signifikan secara statistik (p=0.003, d=1.2)" |
| **Conciseness** | Setiap kata menambah informasi | Hapus kalimat redundan, filler words |

### Urutan Penulisan yang Disarankan

1. **Method & Results** — paling stabil, tulis pertama
2. **Discussion** — interpretasi berdasarkan hasil
3. **Introduction** — frame sesuai temuan aktual
4. **Abstract & Conclusion** — terakhir

### Target Jumlah Kata

| Section | Target |
|---------|--------|
| Introduction | 500–700 |
| Related Work | 700–1000 |
| Method | 800–1200 |
| Results | 500–800 |
| Discussion | 600–900 |
| Conclusion | 200–400 |

### Jebakan Kognitif

1. "Lebih panjang = lebih lengkap" → conciseness lebih berharga
2. "Introduction harus ditulis pertama" → justru ditulis terakhir
3. "Jargon teknis = lebih ilmiah" → clarity lebih penting
4. "Discussion = ringkasan Results" → Discussion = interpretasi + konteks

---

PAPER STRUCTURE CHECKLIST

Title   : Sistem Absensi Guru Berbasis QR Code Menggunakan Framework Laravel
Target  : [ ] Jurnal  [ ] Konferensi  [✓] Laporan

Section Check:
  [✓] Abstract — menjelaskan masalah absensi manual, metode pengembangan menggunakan Laravel dan QR Code, hasil implementasi sistem, serta kontribusi penelitian (maksimal 250 kata)
  [✓] Introduction — menjelaskan latar belakang, permasalahan absensi manual, research gap, research question (RQ), tujuan penelitian, kontribusi penelitian, dan struktur penulisan
  [✓] Related Work — membahas penelitian terdahulu mengenai sistem absensi berbasis QR Code, RFID, biometrik, serta posisi penelitian yang dilakukan
  [✓] Method — menjelaskan metode penelitian, desain sistem, variabel penelitian, perangkat yang digunakan, tahapan pengembangan, serta prosedur pengujian sehingga penelitian dapat direplikasi
  [✓] Results — menyajikan hasil implementasi berupa halaman login, dashboard, data guru, generate QR Code, scan QR Code, hasil pengujian sistem, tabel, grafik, dan observasi tanpa interpretasi
  [✓] Discussion — menginterpretasikan hasil penelitian, membandingkan dengan penelitian terdahulu, menjelaskan kelebihan sistem, implikasi penelitian, serta keterbatasan sistem
  [✓] Conclusion — menjawab seluruh research question, menjelaskan kontribusi penelitian, serta memberikan saran pengembangan pada penelitian selanjutnya

Consistency Matrix:
  [✓] RQ di Introduction = RQ di Method = RQ di Conclusion
  [✓] Variabel di Method = variabel di Results
  [✓] Klaim di Discussion didukung data di Results
  [✓] Limitasi di Discussion di-address di Conclusion/Future Work

Writing Quality:
  [✓] Clarity — pembahasan menggunakan bahasa yang jelas, mudah dipahami, dan tidak bertele-tele
  [✓] Precision — setiap istilah teknis dijelaskan secara tepat dan tidak menimbulkan ambiguitas
  [✓] Conciseness — setiap kalimat berisi informasi penting tanpa pengulangan yang tidak diperlukan
```

---

## Latihan 1 — Paper Outline

Buat outline paper untuk riset Anda menggunakan struktur IMRAD.

| Section          | Konten Utama (2–3 kalimat)                                                                                                                                                                                                                                                                                                                                                                           | Target Kata |
| ---------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------: |
| **Abstract**     | Penelitian ini membahas pengembangan sistem absensi guru berbasis QR Code menggunakan Laravel untuk meningkatkan efisiensi proses absensi. Sistem memungkinkan pembuatan QR Code, pemindaian menggunakan kamera, serta pencatatan kehadiran secara otomatis. Hasil implementasi menunjukkan proses absensi menjadi lebih cepat, akurat, dan mengurangi kesalahan pencatatan manual.                  |     200–250 |
| **Introduction** | Absensi guru masih banyak dilakukan secara manual sehingga rentan terhadap kesalahan pencatatan, keterlambatan rekapitulasi, dan manipulasi data. Penelitian ini menawarkan sistem absensi berbasis QR Code menggunakan Laravel sebagai solusi. Research Question: *Apakah sistem absensi berbasis QR Code mampu meningkatkan efisiensi dan akurasi proses absensi guru dibandingkan metode manual?* |     500–700 |
| **Related Work** | Mengulas penelitian terdahulu mengenai sistem absensi berbasis QR Code, RFID, biometrik, dan Face Recognition. Dibahas pula kelebihan dan kekurangan masing-masing metode serta alasan pemilihan QR Code sebagai solusi yang lebih ekonomis dan mudah diterapkan.                                                                                                                                    |    700–1000 |
| **Method**       | Penelitian menggunakan metode Research and Development (R&D) dengan pendekatan waterfall. Sistem dikembangkan menggunakan Laravel, MySQL, Bootstrap, dan library QR Code. Tahapan meliputi analisis kebutuhan, perancangan sistem, implementasi, pengujian, dan evaluasi.                                                                                                                            |    800–1200 |
| **Results**      | Menampilkan hasil implementasi berupa halaman login, dashboard, data guru, generate QR Code, scan QR Code, serta proses absensi. Disajikan juga hasil pengujian fungsi sistem menggunakan metode Black Box Testing.                                                                                                                                                                                  |     500–800 |
| **Discussion**   | Membahas bahwa penggunaan QR Code mampu mempercepat proses absensi, mengurangi kesalahan input data, serta mempermudah pengelolaan data kehadiran. Dibahas pula keterbatasan sistem, misalnya ketergantungan pada kamera dan kualitas pencahayaan saat pemindaian.                                                                                                                                   |     600–900 |
| **Conclusion**   | Sistem absensi guru berbasis QR Code berhasil dibangun menggunakan Laravel dan dapat membantu meningkatkan efisiensi proses absensi. Pengembangan selanjutnya dapat menambahkan fitur notifikasi, laporan real-time, serta integrasi dengan Face Recognition atau aplikasi mobile.                                                                                                                   |     200–400 |


---

## Latihan 2 — Consistency Matrix

Buat consistency matrix untuk memverifikasi internal consistency paper Anda.

| Komponen                                       | Intro | Method | Result | Discussion | Conclusion |
| ---------------------------------------------- | :---: | :----: | :----: | :--------: | :--------: |
| **RQ1**                                        |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |
| **RQ2**                                        |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |
| **Metrik utama (Kecepatan & Akurasi Absensi)** |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |
| **Variabel Independen (Sistem QR Code)**       |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |
| **Variabel Dependen (Efisiensi Absensi)**      |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |
| **Klaim/Kontribusi**                           |   ✓   |    ✓   |    ✓   |      ✓     |      ✓     |


**Isi setiap sel:** ✓ (ada & konsisten), ✗ (missing), ~ (ada tapi inkonsisten)

**Inkonsistensi yang ditemukan:**
Tidak ditemukan inkonsistensi yang signifikan. Setiap Research Question dijawab melalui metode, hasil, pembahasan, dan disimpulkan kembali pada bagian akhir sehingga alur penelitian tetap konsisten

**Tindakan perbaikan:**
- Memastikan seluruh variabel penelitian dijelaskan pada bagian metode.
- Menyajikan hasil pengujian dalam bentuk tabel agar lebih objektif.
- Menyesuaikan kesimpulan dengan hasil penelitian tanpa menambahkan klaim baru.
---

## Latihan 3 — Writing Quality Check

Ambil satu paragraf dari tulisan Anda (atau tulis paragraf baru) dan evaluasi kualitasnya.

**Paragraf asli:**
> Sistem absensi guru yang masih dilakukan secara manual sering menyebabkan berbagai permasalahan seperti keterlambatan pencatatan, kesalahan input data, serta proses rekapitulasi yang membutuhkan waktu cukup lama sehingga kurang efektif dalam mendukung administrasi sekolah.

| Kriteria        | Evaluasi                                                              | Perbaikan                                                                                  |
| --------------- | --------------------------------------------------------------------- | ------------------------------------------------------------------------------------------ |
| **Clarity**     | Sudah cukup jelas tetapi belum menjelaskan dampaknya secara spesifik. | Tambahkan dampak terhadap efisiensi administrasi sekolah.                                  |
| **Precision**   | Istilah "cukup lama" masih bersifat umum.                             | Ganti dengan istilah yang lebih spesifik seperti "membutuhkan proses rekapitulasi manual". |
| **Conciseness** | Ada beberapa frasa yang dapat dipersingkat tanpa mengurangi makna.    | Hilangkan kata-kata yang berulang dan langsung menuju inti pembahasan.                     |


**Paragraf setelah perbaikan:**
> Proses absensi guru yang masih dilakukan secara manual berpotensi menimbulkan kesalahan pencatatan, keterlambatan rekapitulasi data, serta meningkatkan beban administrasi sekolah. Untuk mengatasi permasalahan tersebut, penelitian ini mengembangkan sistem absensi berbasis QR Code menggunakan Laravel yang mampu mempercepat proses absensi, meningkatkan akurasi pencatatan, dan mempermudah pengelolaan data kehadiran guru.

---

## Refleksi

- Apa perbedaan antara menulis "tentang" riset dan menulis sebagai "argumen" riset?
Menulis tentang riset hanya menjelaskan apa yang dikerjakan, sedangkan menulis sebagai argumen riset menyusun alur logis yang dimulai dari identifikasi masalah, kesenjangan penelitian (gap), pertanyaan penelitian, metode yang digunakan, hasil yang diperoleh, hingga kontribusi penelitian. Dengan pendekatan ini, setiap bagian saling mendukung sehingga pembaca dapat memahami alasan mengapa penelitian dilakukan dan bagaimana hasil penelitian menjawab pertanyaan yang diajukan.

- Bagaimana urutan penulisan (Method → Discussion → Introduction) mengubah kualitas tulisan?
Urutan penulisan Method → Results → Discussion → Introduction → Conclusion membantu menghasilkan tulisan yang lebih konsisten. Metode dan hasil ditulis terlebih dahulu karena merupakan bagian yang paling objektif. Setelah hasil tersedia, pembahasan dapat disusun berdasarkan bukti yang diperoleh. Pendahuluan kemudian disesuaikan agar selaras dengan temuan penelitian, sedangkan abstrak dan kesimpulan ditulis terakhir sehingga mampu merangkum keseluruhan penelitian secara akurat.
