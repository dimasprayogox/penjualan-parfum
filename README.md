# Landing Page dan Dashboard Admin

**Sebelum menjalankan proyek, pastikan Anda memiliki:**
- PHP versi `^8.1`
- Composer versi terbaru
- Node.js dan npm/yarn
- MySQL atau database yang kompatibel

## Cara Clone dan Menjalankan Proyek

### 1. Clone Repository
```bash
git clone https://github.com/dimasprayogox/penjualan-parfum.git
cd penjualan-parfum
```

### 2. Install Dependensi Backend
Jalankan perintah berikut untuk menginstal dependensi Laravel:
```bash 
composer install
```

### 3. Install Dependensi Frontend
```bash
npm install
npm run dev
```

### 4. Konfigurasi Lingkungan
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Migrate
```bash
php artisan migrate
```

### 7. Jalankan Server Lokal
```bash
php artisan serve
```
Akses aplikasi di: http://localhost:8000