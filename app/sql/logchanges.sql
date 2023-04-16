-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2023 pada 18.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basics`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `logchanges`
--

CREATE TABLE `logchanges` (
  `id` int(11) NOT NULL,
  `admin` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  `time` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `logchanges`
--

INSERT INTO `logchanges` (`id`, `admin`, `action`, `time`) VALUES
(9, 'Devan', 'Add a new student (Mustika Ningtias, Pendidikan Teknologi Informasi, Universitas Brawijaya.png)', '2023-04-10 00:07:16'),
(10, 'Devan', 'Update a student data (Devan Ferrel, Informatika, Institut Teknologi Bandung)', '2023-04-10 05:09:03'),
(11, 'Devan', 'Update a student data (Devan Ferrel, Sistem dan Teknologi Informasi, Institut Teknologi Bandung)', '2023-04-10 05:33:21'),
(12, 'lis', 'Add a new student (Selma Mutisari, Kedokteran, Universitas Indonesia.png)', '2023-04-12 12:23:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logchanges`
--
ALTER TABLE `logchanges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `logchanges`
--
ALTER TABLE `logchanges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
