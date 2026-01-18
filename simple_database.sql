-- VERSI SEDERHANA - TANPA COMPLEX FEATURES
-- Copy paste ini langsung di phpMyAdmin SQL tab

CREATE DATABASE IF NOT EXISTS db_donasi;
USE db_donasi;

-- Admins
CREATE TABLE admins (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nama_admin VARCHAR(255) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Donaturs
CREATE TABLE donaturs (
    id_donatur INT AUTO_INCREMENT PRIMARY KEY,
    nama_donatur VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Korbans
CREATE TABLE korbans (
    id_korban INT AUTO_INCREMENT PRIMARY KEY,
    nama_korban VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    status_verifikasi VARCHAR(20) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Volunteers
CREATE TABLE volunteers (
    id_volunteer INT AUTO_INCREMENT PRIMARY KEY,
    nama_volunteer VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    status VARCHAR(20) DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Program Bantuans
CREATE TABLE program_bantuans (
    id_program INT AUTO_INCREMENT PRIMARY KEY,
    nama_program VARCHAR(255) NOT NULL,
    target_dana DECIMAL(15,2) DEFAULT 0,
    dana_terkumpul DECIMAL(15,2) DEFAULT 0,
    status VARCHAR(20) DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Donasis
CREATE TABLE donasis (
    id_donasi INT AUTO_INCREMENT PRIMARY KEY,
    id_donatur INT NOT NULL,
    id_program INT NOT NULL,
    jumlah_donasi DECIMAL(15,2) NOT NULL,
    status_pembayaran VARCHAR(20) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERT DATA MINIMAL
INSERT INTO admins (nama_admin, username, password) VALUES
('Rizqi', 'admin_rizqi', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Ahnaf', 'ahnaf123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO donaturs (nama_donatur, email, password) VALUES
('Muthia', 'muthia@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Rizu', 'rizu@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO korbans (nama_korban, email, password) VALUES
('Amru', 'amru@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Kipli', 'kipli@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO volunteers (nama_volunteer, email, password) VALUES
('Ahnaf', 'ahnaf@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Ozzie', 'ozzie@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO program_bantuans (nama_program, target_dana) VALUES
('Bantuan Gempa Cianjur', 100000000),
('Bantuan Banjir Garut', 50000000);

INSERT INTO donasis (id_donatur, id_program, jumlah_donasi, status_pembayaran) VALUES
(1, 1, 5000000, 'berhasil'),
(2, 1, 10000000, 'berhasil');

SELECT 'Database sederhana berhasil dibuat!' as status;
