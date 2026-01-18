# Donasi App - Aplikasi Manajemen Donasi

Aplikasi web berbasis Laravel 12 untuk mengelola program bantuan, donasi, dan penyaluran bantuan kepada korban bencana.

## 🚀 Fitur

### Multi-Role Authentication
- **Admin**: Mengelola program, donasi, korban, volunteer, dan laporan
- **Donatur**: Melihat program, berdonasi, dan melihat riwayat donasi
- **Korban**: Mengajukan kebutuhan, melihat status verifikasi, riwayat bantuan
- **Volunteer**: Mengelola penyaluran bantuan dan melihat tugas

### Core Features
- ✅ Program Bantuan Management
- ✅ Donasi Processing & Verification
- ✅ Penyaluran Bantuan Tracking
- ✅ Korban Verification System
- ✅ Laporan & Export (Excel/Print)
- ✅ File Upload (Bukti Transfer)
- ✅ Real-time Dana Tracking
- ✅ Rate Limiting & Security

## 🛠️ Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Templates, Bootstrap
- **Database**: SQLite (default), MySQL/PostgreSQL supported
- **Authentication**: Multi-Guard System
- **File Storage**: Local

## 📋 Prerequisites

- PHP 8.2+
- Composer
- Node.js & NPM
- SQLite/MySQL/PostgreSQL

## 🚀 Installation

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd donasi-app
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Build Assets**
   ```bash
   npm run build
   ```

6. **Start Development Server**
   ```bash
   php artisan serve
   npm run dev
   ```

## 👥 Default Users

### Admin Access
- **Username**: `admin_rizqi`
- **Password**: `12345678`

### Development Admin Creation
```bash
# Create admin with environment variables
ADMIN_USERNAME=myadmin ADMIN_PASSWORD=secret123 php create_admin.php

# Or use secure defaults
php create_admin.php
# Username: admin, Password: admin123
```

## 📁 Project Structure

```
donasi-app/
├── app/
│   ├── Http/Controllers/     # Controllers per role
│   ├── Models/              # Eloquent Models
│   └── Helpers/             # Custom Helpers
├── database/
│   ├── migrations/          # Database Schema
│   └── seeders/            # Sample Data
├── resources/views/         # Blade Templates
├── routes/                 # Route Definitions
└── public/uploads/         # File Uploads
```

## 🔐 Security Features

- ✅ Multi-Guard Authentication
- ✅ Rate Limiting (5 attempts/15min)
- ✅ Input Validation & Sanitization
- ✅ Password Hashing (bcrypt)
- ✅ CSRF Protection
- ✅ SQL Injection Prevention
- ✅ File Upload Validation

## 📊 Database Schema

### Core Tables
- `admins` - Administrator accounts
- `donaturs` - Donor accounts  
- `korban` - Victims/beneficiaries
- `volunteers` - Volunteer accounts
- `program_bantuans` - Aid programs
- `donasis` - Donation records
- `penyalurans` - Distribution records
- `kebutuhans` - Victim needs
- `laporans` - Reports

## 🔄 Workflow

1. **Admin** creates program bantuan
2. **Donatur** views programs and donates
3. **Admin** verifies donation payments
4. **Volunteer** distributes aid to verified victims
5. **System** tracks all transactions and generates reports

## 🧪 Testing

```bash
# Run tests
php artisan test

# Run specific test
php artisan test --filter LoginTest
```

## 📝 Environment Variables

```env
# Database
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# Admin Creation (Optional)
ADMIN_USERNAME=admin
ADMIN_PASSWORD=secret123
ADMIN_NAME=System Administrator

# Application
APP_URL=http://localhost
APP_DEBUG=true
```

## 🚨 Security Notes

- Remove `create_admin.php` and `check_login.php` before production
- Change default passwords immediately
- Use HTTPS in production
- Set `APP_DEBUG=false` in production
- Configure proper file permissions for uploads

## 📈 Performance

- Database indexes on frequently queried fields
- Eager loading for relationships
- File compression for uploads
- Caching for rate limiting

## 🤝 Contributing

1. Fork the repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## 📄 License

This project is licensed under the MIT License.

## 🆘 Support

For issues and questions:
- Check the logs: `storage/logs/laravel.log`
- Verify database connections
- Ensure proper file permissions

---

**Developed with Laravel 12** ❤️
