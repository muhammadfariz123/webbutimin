# Bakso Bu Timin 🍜
Website manajemen dan promosi warung **Bakso Bu Timin**, membantu pelanggan dalam melihat menu, lokasi, dan informasi lainnya.

## ✨ Fitur Utama
- **Daftar Menu**: Menampilkan berbagai pilihan bakso dengan harga.
- **Lokasi & Kontak**: Informasi alamat warung dan cara pemesanan.
- **Testimoni Pelanggan**: Ulasan dari pelanggan yang telah menikmati bakso.
- **Pesan Online**: Fitur pemesanan langsung melalui website (opsional).

## 🛠️ Teknologi yang Digunakan
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP & MySQL
- **Framework**: Laravel (Opsional untuk pengelolaan lebih lanjut)

## 🚀 Cara Menjalankan Proyek
1. **Clone repository**
   ```bash
   git clone https://github.com/username/bakso-bu-timin.git
   cd bakso-bu-timin
   ```
2. **Jalankan server lokal** (menggunakan XAMPP/Laragon)
   - Pindahkan folder ke `htdocs` jika menggunakan XAMPP
   - Jalankan Apache & MySQL dari XAMPP Control Panel
   
3. **Konfigurasi database**
   - Buat database baru di MySQL dengan nama `bakso_bu_timin`
   - Import file `database.sql` ke dalam database
   
4. **Jalankan aplikasi**
   - Akses di browser melalui `http://localhost/bakso-bu-timin`

## 📌 Struktur Folder
```
├── assets/          # File gambar, CSS, JS
├── includes/        # File PHP untuk koneksi database & fungsi umum
├── pages/           # Halaman utama (home, menu, kontak, dll.)
├── index.php        # Halaman utama
├── config.php       # Konfigurasi database
├── database.sql     # Struktur database
```

💡 **Kontribusi & Pengembangan lebih lanjut sangat diharapkan!** 🚀
