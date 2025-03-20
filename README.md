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

## 🚀 Cara Menjalankan Proyek

1. **Clone repository**

   ```bash
   git clone https://github.com/muhammadfariz123/webbutimin.git
   cd webbutimin
   ```

2. **Jalankan server lokal** (menggunakan XAMPP/Laragon)

   - Pindahkan folder ke `htdocs` jika menggunakan XAMPP
   - Jalankan Apache & MySQL dari XAMPP Control Panel

3. **Konfigurasi database**

   - Buat database baru di MySQL dengan nama `warungbakso`
   - Import file `warungbakso.sql` ke dalam database

4. **Jalankan aplikasi**

   - Akses di browser melalui `http://localhost/webbutimin`

## 📌 Struktur Folder

```
├── action/          # File PHP untuk aksi/form handler
├── admin/           # Halaman admin untuk manajemen konten
├── config/          # File konfigurasi, termasuk koneksi database
├── page/            # Halaman utama (home, menu, kontak, dll.)
├── action.php       # File untuk menangani aksi/form
├── index.php        # Halaman utama
├── page.php         # File untuk menampilkan halaman dinamis
├── warungbakso.sql  # Struktur dan data awal database
```

💡 **Kontribusi & Pengembangan lebih lanjut sangat diharapkan!** 🚀
