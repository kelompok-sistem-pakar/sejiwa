# 🚀 Cara Menjalankan Project Laravel – Sejiwa

Dokumen ini ditujukan untuk **seluruh anggota tim** agar dapat menjalankan project Laravel **tanpa kebingungan**, khususnya untuk kebutuhan **MVP tugas Sistem Pakar**.

---

## 📦 Prasyarat

Pastikan perangkat sudah terinstall:

- PHP >= 8.1
- Composer
- Node.js & NPM
- Git
- XAMPP / Laragon / Web Server lain

Cek versi dengan:
```bash
php -v
composer -V
node -v
npm -v
git --version
```

---

## 📥 Clone Repository

```bash
https://github.com/kelompok-sistem-pakar/sejiwa.git
cd sejiwa
```

---

## ⚙️ Setup Awal Laravel

### 1. Install dependency
```bash
composer install
```

### 2. Copy file environment
```bash
cp .env.example .env
```

> Windows:
```powershell
copy .env.example .env
```

### 3. Generate App Key
```bash
php artisan key:generate
```

---

## 🗄️ Setup Database

1. Buat database MySQL  
   Contoh: `sejiwa_db`

2. Edit file `.env`
```env
DB_DATABASE=sejiwa_db
DB_USERNAME=root
DB_PASSWORD=
```

3. Jalankan migration
```bash
php artisan migrate
```

---

## ▶️ Menjalankan Aplikasi

```bash
php artisan serve
```

Buka browser:
```
http://127.0.0.1:8000
```

---

## 🧭 Halaman MVP

### 🌐 User / Frontend
| URL | Halaman |
|----|--------|
| `/` | Home |
| `/about` | About |
| `/konsultasi` | Form Konsultasi |
| `/konsultasi/hasil` | Hasil Diagnosis |

### 🔐 Admin
| URL | Halaman |
|----|--------|
| `/admin/dashboard` | Dashboard |
| `/admin/gejala` | CRUD Gejala |
| `/admin/penyakit` | CRUD Penyakit |
| `/admin/mahasiswa` | CRUD Mahasiswa |

---

## 🎨 Workspace Frontend

Frontend **HANYA bekerja di folder berikut**:

```
resources/views/
├── layouts/
│   └── app.blade.php
├── partials/
│   └── navbar.blade.php
├── home/
│   └── index.blade.php
├── about/
│   └── index.blade.php
├── konsultasi/
│   ├── index.blade.php
│   ├── form.blade.php
│   └── hasil.blade.php
└── admin/
    ├── dashboard.blade.php
    ├── gejala.blade.php
    ├── penyakit.blade.php
    └── mahasiswa.blade.php
```

⚠️ Frontend **TIDAK BOLEH**:
- Edit controller
- Edit route
- Edit migration
- Edit model

---

## 📝 Catatan MVP

- Tidak perlu login
- Tidak perlu validasi backend
- Data boleh dummy
- Fokus UI, layout, dan flow halaman
- Digunakan untuk screenshot laporan tugas

---

## 🌿 Git Workflow

Pindah ke branch frontend:
```bash
git checkout frontend/nisa
```

Commit perubahan:
```bash
git add .
git commit -m "feat: layout halaman home"
git push origin frontend/nisa
```

⚠️ Jangan push langsung ke `main` atau `dev`.

---

## ✅ Checklist MVP

- [ ] Home Page
- [ ] About Page
- [ ] Form Konsultasi
- [ ] Hasil Konsultasi
- [ ] Dashboard Admin
- [ ] CRUD Gejala (UI)
- [ ] CRUD Penyakit (UI)
- [ ] CRUD Mahasiswa (UI)

---

Jika mengalami kendala, hubungi:
**Backend / Project Manager – Mario Ganteng**
