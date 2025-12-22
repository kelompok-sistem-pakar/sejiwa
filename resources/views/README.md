# README Frontend - Project MVP Sejiwa

## 📌 Tujuan
Halaman-halaman ini dibuat agar NISA bisa langsung **render UI/UX** sesuai design yang sudah dibuat, **tanpa backend logic dulu**.  
Fokus MVP:  
1. Dashboard + CRUD admin (gejala, penyakit, mahasiswa)  
2. Home, About, Konsultasi, Hasil Konsultasi  

---

## 🏗 Layout Master (`layouts/app.blade.php`)

- Semua halaman **extend** layout ini
- Sudah ada:
  - Bootstrap CSS/JS
  - `@yield('title')` → judul halaman
  - `@yield('content')` → isi halaman
- Navbar ada di `partials/navbar.blade.php`

**TODO Frontend:**  
- Styling navbar sesuai design UI/UX  
- Menambahkan logo / link CTA  

---

## 📝 Halaman Frontend

### 1. Home Page - `home/index.blade.php`
**Tujuan:** Hero section, informasi web, CTA konsul  

**TODO Frontend:**  
- Hero section dengan gambar / teks  
- Informasi singkat web  
- Tombol CTA menuju `/konsultasi`  

---

### 2. About Page - `about/index.blade.php`
**Tujuan:** Info anggota kelompok  

**TODO Frontend:**  
- Tampilkan daftar anggota (foto + nama)  
- Desain sesuai mockup UI/UX  

---

### 3. Konsultasi Page - `konsultasi/index.blade.php`
**Tujuan:** Form input data mahasiswa & gejala  

**TODO Frontend:**  
- Form data diri: nama, umur, jenis kelamin  
- Checkbox gejala → gunakan tabel atau card  
- Tombol **Submit** (sementara submit bisa arah ke `/konsultasi/hasil`)  

---

### 4. Hasil Konsultasi - `konsultasi/hasil.blade.php`
**Tujuan:** Menampilkan hasil diagnosis  

**TODO Frontend:**  
- Tampilkan **nama penyakit & CF** (dummy sementara)  
- Bisa pakai tabel / card  
- Tambahkan tombol **Kembali / Konsultasi lagi**  

---

### 5. Dashboard Admin - `admin/dashboard.blade.php`
**Tujuan:** Ringkasan data + menu CRUD  

**TODO Frontend:**  
- Ringkasan: jumlah mahasiswa, gejala, penyakit  
- Link cepat ke CRUD: gejala, penyakit, mahasiswa  
- Styling sesuai mockup  

---

### 6. CRUD Admin

#### a. Gejala - `admin/gejala.blade.php`
**TODO Frontend:**  
- Tabel daftar gejala  
- Tombol **Tambah / Edit / Hapus**  
- Form tambah/edit bisa modal atau halaman terpisah  

#### b. Penyakit - `admin/penyakit.blade.php`
**TODO Frontend:**  
- Tabel daftar penyakit  
- Tombol **Tambah / Edit / Hapus**  

#### c. Mahasiswa - `admin/mahasiswa.blade.php`
**TODO Frontend:**  
- Tabel daftar mahasiswa  
- Tombol **Tambah / Edit / Hapus**  

> Semua CRUD sementara **tidak perlu logic backend**, frontend cukup render tabel & form sesuai desain.  

---

## ⚡ Route Minimal (Untuk referensi frontend)
- `/` → Home  
- `/about` → About  
- `/konsultasi` → Form Konsultasi  
- `/konsultasi/hasil` → Hasil Konsultasi  
- `/admin/dashboard` → Dashboard Admin  
- `/admin/gejala` → CRUD Gejala  
- `/admin/penyakit` → CRUD Penyakit  
- `/admin/mahasiswa` → CRUD Mahasiswa  

---

## 💡 Tips Frontend

1. Gunakan **Bootstrap** (sesuai kesepakatan)  
2. Gunakan **TODO** comment di Blade agar jelas bagian mana yang harus diisi  
3. Integrasi backend bisa nanti melalui **controller / API**  

