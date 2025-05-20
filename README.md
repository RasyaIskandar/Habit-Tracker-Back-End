# Aplikasi UMKM Web App

Aplikasi berbasis web untuk membantu UMKM dalam mengelola data produk, pelanggan, dan transaksi. Backend dibangun menggunakan Laravel, dan frontend menggunakan React + Vite.

---

## 🛠️ Langkah Install Project

### 1. Clone Repository
```bash
git clone https://github.com/username/umkm-web-app.git
cd umkm-web-app

cd backend
composer install
cp .env.example .env
php artisan key:generate

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=umkm_db
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate --seed

cd ../frontend
npm install

cd backend
php artisan serve

📡 Penjelasan Singkat Endpoint API
Berikut beberapa endpoint utama yang tersedia dalam backend:

Method	Endpoint	Deskripsi
GET	/api/products	Menampilkan semua produk
POST	/api/products	Menambahkan produk baru
GET	/api/products/{id}	Menampilkan detail produk
PUT	/api/products/{id}	Mengupdate data produk
DELETE	/api/products/{id}	Menghapus produk

Semua endpoint mengembalikan data dalam format JSON. Pastikan menggunakan Accept: application/json di header.

umkm-web-app/
├── backend/             # Laravel backend
│   ├── app/
│   ├── routes/
│   ├── .env
│   └── ...
├── frontend/            # Frontend React
│   ├── src/
│   ├── public/
│   └── ...
├── screenshots/         # Screenshot hasil Postman & App
│   ├── postman-get-products.png
│   ├── postman-post-product.png
│   ├── app-home.png
│   └── app-products.png
└── README.md

📄 Lisensi
Project ini menggunakan lisensi MIT. Silakan gunakan, modifikasi, dan distribusikan sesuai kebutuhan.


---

Kalau kamu ingin aku bantu generate **file aslinya langsung (.md)** atau **menambahkan badge GitHub (build, license, dsb)**, tinggal bilang ya!
