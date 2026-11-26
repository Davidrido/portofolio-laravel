CREATE DATABASE IF NOT EXISTS db_portofolio;
USE db_portofolio;

-- Tabel untuk menyimpan data bagian About
CREATE TABLE IF NOT EXISTS about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL,
    sub_deskripsi VARCHAR(255) DEFAULT NULL
);

INSERT INTO about (judul, deskripsi, sub_deskripsi) VALUES
('Pendidikan', 'Politeknik ATMI Surakarta', 'Teknologi Rekayasa Mekatronika'),
('Keahlian', 'Elektronika, Robotika, Pemrograman & Kontrol', NULL),
('Minat', 'Otomasi industri, kelistrikan dan teknologi cerdas.', NULL),
('Tujuan', 'Mengembangkan solusi teknologi yang inovatif, efisien, dan otomatis melalui integrasi elektronika, pemrograman, sistem kontrol, dan robotika.', NULL);

-- Tabel untuk menyimpan pesan dari halaman Contact
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);