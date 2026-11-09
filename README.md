# E-Vote System – PEMILOS 2026/2027

**E-Vote System** adalah aplikasi pemilihan Ketua dan Wakil Ketua OSIS berbasis web yang dikembangkan untuk SMKN 20 Jakarta. Aplikasi ini dirancang untuk mempermudah proses pemungutan suara secara digital, meningkatkan efisiensi pemilihan, serta membantu panitia memantau hasil voting secara terstruktur dan transparan.

Sistem ini memiliki dua bagian utama, yaitu halaman pemilih (voter) dan halaman administrator (admin).

---

##  Features

### 1. Voter System
- Login menggunakan NIS/NIP.
- Validasi akun berdasarkan status aktif dan nonaktif.
- Menampilkan daftar pasangan calon (paslon).
- Menampilkan foto dan informasi kandidat.
- Proses pemungutan suara secara digital.
- Validasi agar satu voter hanya dapat memberikan satu suara.
- Notifikasi konfirmasi dan keberhasilan voting.

### 2. Admin Dashboard
- Login administrator.
- Dashboard hasil voting secara real-time saat data dimuat ulang.
- Menampilkan daftar pasangan calon.
- Menampilkan total suara masing-masing kandidat.
- Menampilkan kandidat dengan perolehan suara tertinggi.
- Menampilkan foto kandidat berdasarkan data database.
- Export data voting ke Excel.
- Rekap nama voter yang telah memberikan suara dan kandidat yang dipilih.

### 3. Voter Management
- Pengelolaan data siswa kelas X, XI, dan XII.
- Pengelolaan data guru dan tenaga kependidikan.
- Pengelolaan akun administrator.
- Pengelompokan voter berdasarkan role.
- Pengelolaan status akun active dan inactive.
- Validasi status voting setiap voter.

---

## 🛠️ Tech Stack

### Frontend
- Vue.js
- JavaScript
- HTML5
- CSS3
- Axios
- Vue Router

### Backend
- Laravel
- PHP
- Laravel API
- MySQL
- Laravel Eloquent ORM

### Development Tools
- Laragon
- Visual Studio Code
- Postman
- phpMyAdmin
- Git & GitHub

---

## 🗄️ Database Structure

Database menggunakan MySQL dengan nama:

`e-vote-database`

### Main Tables

| Table | Description |
|---|---|
| `voters` | Menyimpan data pemilih, termasuk siswa, guru, tendik, dan admin. |
| `candidates` | Menyimpan informasi pasangan calon. |
| `votes` | Menyimpan data hasil pemungutan suara. |

### Voters Table

Menyimpan informasi pemilih dengan beberapa atribut utama:

- `id`
- `voter_code`
- `name`
- `role`
- `class`
- `position`
- `status`
- `created_at`
- `updated_at`

Role yang digunakan:
- `student`
- `teacher`
- `admin`

Status akun:
- `active`
- `inactive`

### Candidates Table

Menyimpan informasi pasangan calon:

- `id`
- `number`
- `name`
- `photo`
- `vision`
- `mission`

### Votes Table

Menyimpan riwayat pemungutan suara:

- `id`
- `voter_id`
- `candidate_id`
- `created_at`
- `updated_at`

Relasi database:
- Satu voter hanya dapat memiliki satu vote.
- Satu kandidat dapat menerima banyak vote.
- Setiap vote terhubung dengan satu voter dan satu kandidat.

---

## 📂 Project Structure

### Backend (Laravel)

```text
e-vote-backend/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AuthenticationController.php
│   │       ├── VoteController.php
│   │       └── AdminDashboardController.php
│   └── Models/
│       ├── Voter.php
│       ├── Candidates.php
│       └── Votes.php
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   └── api.php
├── storage/
│   └── app/public/
└── .env
```

### Frontend (Vue.js)

```text
e-vote-frontend/
├── public/
│   └── data/
├── src/
│   ├── assets/
│   ├── components/
│   ├── pages/
│   │   ├── login/
│   │   ├── vote/
│   │   └── admin/
│   ├── router/
│   └── main.js
└── package.json
```

*Struktur folder dapat disesuaikan dengan struktur project aktual.*

---

## ⚙️ Installation & Setup

### 1. Clone Repository

```bash
git clone https://github.com/USERNAME/e-vote.git
```

Masuk ke folder backend:

```bash
cd e-vote-backend
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Configuration

Buat file `.env` berdasarkan `.env.example`.

```env
APP_NAME=E-Vote
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e-vote-database
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan konfigurasi database dengan lingkungan lokal.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Database Migration

```bash
php artisan migrate
```

### 6. Database Seeding

```bash
php artisan db:seed
```

**Penting:** Periksa isi `DatabaseSeeder` sebelum menjalankan perintah ini. Seeder project dapat menghapus data voting dan voter sebelumnya sebelum memasukkan data baru. Jangan jalankan pada database produksi atau database yang berisi hasil pemilihan resmi tanpa memahami dampaknya.

### 7. Storage Link

```bash
php artisan storage:link
```

### 8. Run Backend Server

```bash
php artisan serve
```

Backend berjalan pada:

`http://127.0.0.1:8000`

---

## 💻 Frontend Setup

Masuk ke folder frontend:

```bash
cd e-vote-frontend
```

Install dependencies:

```bash
npm install
```

Jalankan development server:

```bash
npm run dev
```

Frontend akan berjalan menggunakan alamat lokal yang ditampilkan oleh Vite.

Pastikan URL API Axios sudah mengarah ke backend Laravel.

---

## 🔗 API Endpoints

Berikut gambaran endpoint utama yang digunakan dalam aplikasi:

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/login` | Login voter |
| GET | `/api/candidates` | Mengambil daftar kandidat |
| POST | `/api/vote` | Mengirimkan suara |
| GET | `/api/admin/dashboard` | Mengambil rekap hasil voting |
| GET | `/api/admin/export-votes` | Export data voting ke Excel |

*Sesuaikan nama endpoint export dengan route yang digunakan di `routes/api.php`.*

---

## 🔐 Security & Validation

Sistem menerapkan beberapa validasi untuk menjaga integritas pemungutan suara:

1. Voter harus memiliki akun yang terdaftar di database.
2. Akun dengan status `inactive` tidak diperbolehkan melakukan voting.
3. Setiap voter hanya dapat memberikan satu suara.
4. Database menggunakan foreign key untuk menjaga relasi antar tabel.
5. Unique constraint pada `voter_id` di tabel `votes` mencegah pemilih memberikan suara lebih dari satu kali.
6. Validasi kandidat dilakukan sebelum suara disimpan.

---

## 📊 Voting Result & Export

Hasil voting disimpan di database dan dihitung berdasarkan jumlah vote yang diterima masing-masing kandidat.

Administrator dapat:
- Melihat total suara setiap pasangan calon.
- Memantau perolehan suara.
- Mengunduh rekap voting dalam format Excel.
- Melihat identitas voter dan kandidat yang dipilih dalam laporan rekap.

---

## 🎯 Project Goals

Pengembangan E-Vote System bertujuan untuk:

- Mendigitalisasi proses pemilihan Ketua dan Wakil Ketua OSIS.
- Mengurangi penggunaan kertas dalam pemungutan suara.
- Mempermudah pengelolaan data pemilih.
- Meningkatkan efisiensi proses pemilihan.
- Mempermudah proses rekapitulasi hasil voting.
- Menyediakan sistem pemilihan yang terstruktur dan dapat dipantau oleh administrator.

---

## 👨‍💻 Developer

**Afgan Ramadhan**

SMKN 20 Jakarta  
Software Engineering (Rekayasa Perangkat Lunak)

Project: E-Vote System – PEMILOS 2026/2027

---

*Developed as a school project to support the digitalization of student council elections at SMKN 20 Jakarta.*
