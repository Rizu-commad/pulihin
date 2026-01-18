-- RESET TOTAL DATABASE DONASI APP
-- Jalankan ini dulu sebelum membuat database baru

USE mysql;
DROP DATABASE IF EXISTS db_donasi;

-- Buat database baru
CREATE DATABASE db_donasi 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- Grant permissions
GRANT ALL PRIVILEGES ON db_donasi.* TO 'root'@'localhost';
FLUSH PRIVILEGES;

-- Test connection
USE db_donasi;

SELECT 'Database db_donasi berhasil dibuat!' as status;
