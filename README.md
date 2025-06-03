# Belajar CRUD Rumah Makan 

## 📌 Deskripsi Proyek 
**Belajar CRUD Rumah Makan** adalah sebuah proyek pembelajaran yang bertujuan unt uk memahami konsep dasar Create, Read, Update, dan Delete (CRUD) dalam pengelolaan data rumah makan. Proyek ini dibuat menggunakan teknologi web dengan backend berbasis **PHP dan MySQL** serta frontend menggunakan **HTML, CSS, dan JavaScript**.
  
## 🚀 Fitur Utama
- **Menambahkan Data**: Tambah menu makanan, pelanggan, dan pesanan.
- **Menampilkan Data**: Lihat daftar menu, pelanggan, dan pesanan.
- **Mengedit Data**: Ubah informasi menu, pelanggan, atau pesanan.
- **Menghapus Data**: Hapus data yang tidak diperlukan.
- **Autentikasi**: Login dan logout untuk keamanan akses.

## 🛠️ Teknologi yang Digunakan
- **Backend**: PHP (Native/Laravel)
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Framework CSS**: Bootstrap (Opsional)
- **Tool Lain**: XAMPP, Postman (untuk testing API jika ada)

## 🔧 Instalasi & Penggunaan
### 1️⃣ Clone Repository
```sh
git clone https://github.com/tioandriyanto/crud-rumah-makan.git
cd crud-rumah-makan
```

### 2️⃣ Konfigurasi Database
1. Buat database baru di MySQL (misalnya **rumah_makan_db**).
2. Import file **database.sql** yang ada di folder proyek ke dalam database.
3. Sesuaikan konfigurasi koneksi database di file `config.php`:
```php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'rumah_makan_db';
$conn = new mysqli($host, $user, $password, $database);
```

### 3️⃣ Jalankan Proyek
Jika menggunakan XAMPP:
1. Aktifkan **Apache** dan **MySQL** di XAMPP Control Panel.
2. Buka browser dan akses:
   ```sh
   http://localhost/belajar-crud-rumah-makan/
   ```

Jika menggunakan PHP built-in server:
```sh
php -S localhost:8000
```
Lalu akses di browser:
```
http://localhost:8000
```

## 🏆 Kontribusi
Kontribusi sangat diterima! Jika ingin berkontribusi, silakan fork repo ini dan buat pull request. Pastikan mengikuti standar kode yang ada.

## 📄 Lisensi
Proyek ini menggunakan lisensi **MIT**. Silakan lihat file `LICENSE` untuk detail lebih lanjut.

---
📢 Jika ada pertanyaan atau ingin berdiskusi, silakan hubungi saya melalui **[GitHub Issues](https://github.com/username/belajar-crud-rumah-makan/issues)** atau email. 😊

