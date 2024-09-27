Contoh penerapan fungsi CRUD (Create, Read, Update, Delete) menggunakan PHP Native untuk manajemen data mahasiswa. Struktur folder dan manajemen file dibuat sedemikian rupa dengan menggunakan pendekatan OOP dan pengelompokan file yang sesuai.


Struktur Tabel MySQL:

CREATE DATABASE db_mahasiswa;

USE db_mahasiswa;

CREATE TABLE mahasiswa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    jurusan VARCHAR(50) NOT NULL
);
