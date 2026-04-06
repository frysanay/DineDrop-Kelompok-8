# DINEDROP — Sistem Reservasi Meja Restoran Berbasis Website

<div align="center">

![DineDrop Banner](https://img.shields.io/badge/DineDrop-Restaurant%20Reservation%20System-brown?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0xMSAydi4wNkM2LjQ0IDIuNTUgMyA2LjkyIDMgMTJjMCA1LjUyIDQuNDggMTAgMTAgMTBzMTAtNC40OCAxMC0xMGMwLTUuMDgtMy40NC05LjQ1LTgtOS45NFYyaC0yem0wIDIuMDZWMTJIMy4wNkM1LjExIDYuODQgNy42IDMuNjcgMTEgMi4wNnptMiAwYzMuNDEgMS42MSA1LjkgNC43OCA3Ljk0IDkuOTRIMTNWMi4wNnoiLz48L3N2Zz4=)

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-CSS3-E34F26?style=flat-square&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![SendGrid](https://img.shields.io/badge/SendGrid-Email%20API-1A82E2?style=flat-square&logo=sendgrid&logoColor=white)](https://sendgrid.com/)
[![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Server-FB7A24?style=flat-square&logo=xampp&logoColor=white)](https://www.apachefriends.org/)

**Proposal Perancangan & Pengembangan Sistem — Kelompok 8**

| Nama | NIM |
|------|-----|
| Berliana Nidia Meiningrum | 24091397142 |
| Frysa Nayla Ayu | 24091397162 |
| Nabila Firdausi Farsa | 24091397166 |

**Manajemen Informatika · Fakultas Vokasi · Universitas Negeri Surabaya · 2026**

</div>

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Struktur Database](#-struktur-database)
- [Instalasi & Setup](#-instalasi--setup)
- [Konfigurasi API Email](#-konfigurasi-api-email)
- [Struktur Folder](#-struktur-folder)
- [Use Case & Alur Sistem](#-use-case--alur-sistem)
- [Rencana Pengembangan (Sprint)](#-rencana-pengembangan-sprint)
- [Anggota Tim](#-anggota-tim)

---

## 🎯 Tentang Proyek

**DINEDROP** adalah sistem reservasi meja restoran berbasis website yang dirancang untuk menjawab tantangan digitalisasi industri kuliner Indonesia yang terus berkembang, mencapai nilai **Rp450 triliun pada 2025** dengan pertumbuhan tahunan **12%**.

Sistem ini hadir sebagai solusi atas permasalahan umum yang dihadapi restoran menengah-besar, terutama di kota-kota seperti **Surabaya dan Jakarta**, yang masih mengandalkan sistem reservasi manual melalui telepon atau WhatsApp.

### Masalah yang Diselesaikan

| Masalah | Solusi DINEDROP |
|---------|-----------------|
| Overbooking & double booking | Real-time availability check |
| Konfirmasi lambat | Notifikasi email otomatis via SendGrid |
| No-show pelanggan | Email reminder H-1 otomatis |
| Pengelolaan meja tidak efisien | Dashboard manajemen meja real-time |
| Rendahnya rata-rata nilai transaksi | Fitur paket bundling terintegrasi |

> 📊 Survei menunjukkan **78% pelanggan** lebih memilih reservasi online daripada menelepon, dan mengharapkan konfirmasi instan dalam hitungan menit.

---

## ✨ Fitur Utama

### 👤 Untuk Pengguna (Customer)
- **Registrasi & Login** — Pembuatan akun dengan validasi data
- **Reservasi Meja Real-Time** — Pilih tanggal, waktu, jumlah tamu, dan meja yang tersedia
- **Bundling Menu** — Paket makanan dengan harga diskon yang hemat
- **Notifikasi Email Otomatis** — Konfirmasi booking, detail reservasi, dan QR Code bukti reservasi
- **Manajemen Reservasi** — Lihat, ubah jadwal, atau batalkan reservasi

### 🏪 Untuk Pemilik Restoran (Restaurant Owner)
- **Dashboard Occupancy** — Pantau kepadatan meja secara real-time
- **Manajemen Meja** — Status *available/occupied* setiap meja
- **Laporan Reservasi** — Data reservasi harian dan mingguan

### 🔧 Untuk Admin
- **Kelola Seluruh Aplikasi** — Manajemen pengguna, restoran, dan paket bundling
- **Laporan Penjualan Paket** — Analisis paket bundling terpopuler
- **Database Pelanggan Terpusat** — Analisis pola reservasi, paket favorit, dan frekuensi kunjungan

### 📧 Notifikasi Email (via SendGrid API)
- ✅ Konfirmasi reservasi setelah booking
- 🕐 Reminder H-1 sebelum jadwal makan
- ⭐ Follow-up review setelah kunjungan
- ❌ Informasi pembatalan reservasi
- 🔲 QR Code sebagai bukti reservasi digital

---

## 🛠️ Teknologi yang Digunakan

| Kategori | Tools |
|----------|-------|
| **Code Editor** | Visual Studio Code |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP |
| **Database** | MySQL (via XAMPP) |
| **Local Server** | XAMPP (Apache + MySQL) |
| **API Testing** | Postman |
| **Email API** | SendGrid |
| **UI/UX Design** | Figma |
| **Version Control** | GitHub |
| **Prototype Validation** | Figma (divalidasi dengan 10 user potensial) |

---

## 🗄️ Struktur Database

Sistem menggunakan **MySQL** dengan desain ERD yang mencakup tabel-tabel berikut:

```
┌─────────────┐     ┌──────────────────┐     ┌──────────────────┐
│  Pengguna   │     │   Reservasi      │     │  PaketBundling   │
│─────────────│     │──────────────────│     │──────────────────│
│ id_pengguna │──┐  │ id_reservasi (PK)│  ┌──│ id_bundle (PK)   │
│ nama        │  └─►│ id_pengguna (FK) │  │  │ nama_paket       │
│ email       │     │ id_table (FK)    │  │  │ harga            │
│ password    │     │ tanggal          │  │  │ deskripsi        │
│ no_hp       │     │ waktu            │  │  └──────────────────┘
└─────────────┘     │ jumlah_orang     │  │         │
                    │ lokasi_meja      │  │  ┌──────────────────┐
┌─────────────┐     │ request          │──┘  │  Bundle_Detail   │
│    Table    │     └──────────────────┘     │──────────────────│
│─────────────│              │               │ id_detail (PK)   │
│ id_table    │◄─────────────┘               │ id_bundle (FK)   │
│ nomor_meja  │              │               │ id_menu (FK)     │
│ kapasitas   │     ┌──────────────────┐     │ jumlah           │
│ status      │     │    Payments      │     └──────────────────┘
└─────────────┘     │──────────────────│              │
                    │ id_payment (PK)  │     ┌──────────────────┐
                    │ id_reservasi (FK)│     │      Menu        │
                    │ metode_pembayaran│     │──────────────────│
                    │ tanggal_pembayaran     │ id_menu (PK)     │
                    └──────────────────┘     │ nama_menu        │
                                             │ harga            │
                                             │ stok             │
                                             └──────────────────┘
```

### Tabel Utama

| Tabel | Deskripsi |
|-------|-----------|
| `Pengguna` | Data akun pengguna sistem |
| `Table` | Data meja restoran beserta status |
| `Reservasi` | Data pemesanan meja oleh pengguna |
| `PaketBundling` | Daftar paket menu dengan harga diskon |
| `Bundle_Detail` | Isi item pada setiap paket bundling |
| `Menu` | Daftar item makanan dan minuman |
| `Payments` | Data pembayaran uang muka reservasi |

---

## ⚙️ Instalasi & Setup

### Prasyarat
- [XAMPP](https://www.apachefriends.org/) v8.x atau lebih baru
- PHP 8.x
- Browser modern (Chrome, Firefox, Edge)
- [Composer](https://getcomposer.org/) *(jika menggunakan dependency manager)*

### Langkah Instalasi

**1. Clone repository ini**
```bash
git clone https://github.com/username/dinedrop.git
cd dinedrop
```

**2. Pindahkan ke folder htdocs XAMPP**
```bash
# Windows
cp -r dinedrop/ C:/xampp/htdocs/dinedrop

# macOS / Linux
cp -r dinedrop/ /opt/lampp/htdocs/dinedrop
```

**3. Jalankan XAMPP**
- Aktifkan modul **Apache** dan **MySQL**
- Buka [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

**4. Import Database**
- Buat database baru dengan nama `dinedrop`
- Import file SQL:
```bash
mysql -u root -p dinedrop < database/dinedrop.sql
```
Atau melalui phpMyAdmin: pilih database `dinedrop` → **Import** → pilih `database/dinedrop.sql`

**5. Konfigurasi koneksi database**

Buka file `config/database.php` dan sesuaikan:
```php
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');       // sesuaikan username MySQL
define('DB_PASS', '');           // sesuaikan password MySQL
define('DB_NAME', 'dinedrop');
?>
```

**6. Jalankan aplikasi**

Buka browser dan akses:
```
http://localhost/dinedrop
```

---

## 📧 Konfigurasi API Email

DINEDROP menggunakan **SendGrid API** untuk pengiriman email otomatis.

**1. Daftar akun di [SendGrid](https://sendgrid.com/)** dan dapatkan API Key.

**2. Buka file `config/email.php`** dan isi konfigurasi:
```php
<?php
define('SENDGRID_API_KEY', 'SG.xxxxxxxxxxxxxxxxxxxxxxxx'); // API Key kamu
define('MAIL_FROM',        'noreply@dinedrop.id');
define('MAIL_FROM_NAME',   'DineDrop Reservation');
?>
```

**3. Email yang dikirim otomatis oleh sistem:**

| Trigger | Template |
|---------|----------|
| Setelah booking berhasil | `templates/email/booking_confirmation.php` |
| H-1 sebelum reservasi | `templates/email/reminder.php` |
| Setelah kunjungan selesai | `templates/email/review_followup.php` |
| Pembatalan reservasi | `templates/email/cancellation.php` |

---

## 📁 Struktur Folder

```
dinedrop/
├── 📁 config/
│   ├── database.php          # Konfigurasi koneksi MySQL
│   └── email.php             # Konfigurasi SendGrid API
│
├── 📁 database/
│   └── dinedrop.sql          # File dump database MySQL
│
├── 📁 assets/
│   ├── css/                  # Stylesheet
│   ├── js/                   # JavaScript files
│   └── images/               # Gambar & aset statis
│
├── 📁 templates/
│   └── email/                # Template HTML untuk email
│
├── 📁 pages/
│   ├── auth/                 # Login & registrasi
│   ├── customer/             # Halaman untuk pelanggan
│   ├── owner/                # Dashboard pemilik restoran
│   └── admin/                # Panel admin
│
├── 📁 api/
│   ├── reservation.php       # API endpoint reservasi
│   ├── menu.php              # API endpoint menu
│   └── notification.php      # API endpoint notifikasi email
│
├── index.php                 # Entry point aplikasi
└── README.md
```

---

## 🔄 Use Case & Alur Sistem

### Aktor Sistem

| Aktor | Peran |
|-------|-------|
| **User / Customer** | Melakukan reservasi, memilih bundling, pembayaran DP |
| **Restaurant Owner** | Memantau dashboard occupancy meja |
| **Admin** | Mengelola keseluruhan aplikasi & laporan |

### Alur Reservasi Pelanggan

```
[Buka Aplikasi]
      │
      ▼
[Registrasi / Login]
      │
      ▼
[Lihat Menu & Paket Bundling]
      │
      ▼
[Isi Formulir Pemesanan]
  ├── Pilih tanggal & waktu
  ├── Pilih jumlah tamu
  ├── Pilih lokasi meja
  └── Pilih paket bundling (opsional)
      │
      ▼
[Melakukan Pembayaran DP]
      │
      ▼
[Konfirmasi Pesanan]
      │
      ▼
[📧 Email Otomatis Terkirim]
  ├── Detail reservasi
  ├── QR Code bukti booking
  └── Informasi restoran
      │
      ▼
[📧 Reminder H-1]
      │
      ▼
[Kunjungan ke Restoran]
      │
      ▼
[📧 Follow-up Review]
```

---

## 📅 Rencana Pengembangan (Sprint)

Proyek dikembangkan dengan metode **Agile** menggunakan pendekatan sprint:

| Sprint | Fokus | Deliverable |
|--------|-------|-------------|
| **Sprint 1** | Analisis Kebutuhan | Use Case Diagram, identifikasi fitur, analisis target pengguna |
| **Sprint 2** | Desain Sistem | Prototype Figma (mobile-first), ERD Database, desain UI/UX |
| **Sprint 3** | Implementasi | Setup MySQL, pengembangan backend & frontend, integrasi API email |
| **Sprint 4** | Testing | Pengujian fungsi, integrasi modul, user testing & bug fixing |
| **Sprint 5** | Finalisasi | Optimasi performa, penyempurnaan fitur, deployment |

---

## 📊 Target Pengguna

- **Segmen Utama:** Mahasiswa dan pekerja muda Surabaya usia **18–35 tahun**
- **Pain Point:** Kesulitan reservasi di restoran ramai secara manual
- **Ekspektasi:** Konfirmasi instan, proses tanpa kontak fisik, kemudahan akses via smartphone

---

## 🤝 Anggota Tim

<table>
  <tr>
    <td align="center"><b>Berliana Nidia Meiningrum</b><br>NIM: 24091397142</td>
    <td align="center"><b>Frysa Nayla Ayu</b><br>NIM: 24091397162</td>
    <td align="center"><b>Nabila Firdausi Farsa</b><br>NIM: 24091397166</td>
  </tr>
</table>

**Program Studi:** Manajemen Informatika  
**Fakultas:** Vokasi  
**Universitas:** Universitas Negeri Surabaya (UNESA)  
**Tahun:** 2026  

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan akademis — **Tugas Mata Kuliah Pemrograman Mobile, Manajemen Informatika UNESA 2026**.

---

<div align="center">
  <sub>Made with ❤️ by Kelompok 8 — Manajemen Informatika UNESA 2026</sub>
</div>
# DineDrop-Kelompok-8
