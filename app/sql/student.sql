-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2023 pada 18.48
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
-- Database: `crudphpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `major` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`id`, `name`, `nim`, `major`, `email`, `university`) VALUES
(1, 'Muhammad Hannan Abrar', '225150600111023', 'Pendidikan Teknologi Informasi', 'muhamm@gmail.com', 'Universitas Brawijaya'),
(2, 'Zakiyyah Asma Amanyna Wardani', '225150600111024', 'Pendidikan Teknologi Informasi', 'zakiyy@gmail.com', 'Universitas Brawijaya'),
(3, 'Auralia Laksa Aji ', '225150600111025', 'Pendidikan Teknologi Informasi', 'aurali@gmail.com', 'Universitas Brawijaya'),
(4, 'Rivaldo Sidiq Pradana', '225150600111026', 'Pendidikan Teknologi Informasi', 'rivald@gmail.com', 'Universitas Brawijaya'),
(5, 'Fathiya Aulia Khoirunnisa ', '225150600111027', 'Pendidikan Teknologi Informasi', 'fathiy@gmail.com', 'Universitas Brawijaya'),
(6, 'Sarah Safira Millati', '225150600111028', 'Pendidikan Teknologi Informasi', 'sarahs@gmail.com', 'Universitas Brawijaya'),
(7, 'Ardi Vivando Perangin Angin', '225150600111029', 'Pendidikan Teknologi Informasi', 'ardivi@gmail.com', 'Universitas Brawijaya'),
(8, 'Putri Yudha Solikhati Sylvia ', '225150600111030', 'Pendidikan Teknologi Informasi', 'putriy@gmail.com', 'Universitas Brawijaya'),
(9, 'Devan Ferrel', '225150600111031', 'Pendidikan Teknologi Informasi', 'devanf@gmail.com', 'Universitas Brawijaya'),
(10, 'Elisabet Marisa Manalu', '225150600111032', 'Pendidikan Teknologi Informasi', 'elisab@gmail.com', 'Universitas Brawijaya'),
(11, 'Selma Mutiari Andini', '225150600111033', 'Pendidikan Teknologi Informasi', 'selmam@gmail.com', 'Universitas Brawijaya'),
(12, 'Jeihan Shinta Maharani', '225150600111034', 'Pendidikan Teknologi Informasi', 'jeihan@gmail.com', 'Universitas Brawijaya'),
(13, 'Winanda Kusuma Wigyantara', '225150601111020', 'Pendidikan Teknologi Informasi', 'winand@gmail.com', 'Universitas Brawijaya'),
(14, 'Muhammad Usman', '225150601111021', 'Pendidikan Teknologi Informasi', 'muhamm@gmail.com', 'Universitas Brawijaya'),
(15, 'Yuvina Nurvitasari', '225150601111022', 'Pendidikan Teknologi Informasi', 'yuvina@gmail.com', 'Universitas Brawijaya'),
(16, 'Afif Al Dzaqwan', '225150601111023', 'Pendidikan Teknologi Informasi', 'afifal@gmail.com', 'Universitas Brawijaya'),
(17, 'Mustika Ningtias', '225150601111024', 'Pendidikan Teknologi Informasi', 'mustik@gmail.com', 'Universitas Brawijaya'),
(18, 'Theresia Surya Sabatini', '225150601111025', 'Pendidikan Teknologi Informasi', 'theres@gmail.com', 'Universitas Brawijaya'),
(19, 'Thariq Azam Firdaus', '225150601111026', 'Pendidikan Teknologi Informasi', 'thariq@gmail.com', 'Universitas Brawijaya'),
(20, 'Annida Rahma Nadhifa ', '225150601111027', 'Pendidikan Teknologi Informasi', 'annida@gmail.com', 'Universitas Brawijaya'),
(21, 'Ni Nyoman Dinda Permata Putri Bangse', '225150607111034', 'Pendidikan Teknologi Informasi', 'ninyom@gmail.com', 'Universitas Brawijaya'),        
(22, 'Ni Luh Putu Ayu Amanda Oka Virna Nurata', '225150607111035', 'Pendidikan Teknologi Informasi', 'niluhp@gmail.com', 'Universitas Brawijaya'),     
(23, 'Hamdalla Agil Putra Nasol', '225150607111037', 'Pendidikan Teknologi Informasi', 'hamdal@gmail.com', 'Universitas Brawijaya'),
(24, 'Naela Nabila Mumtaza ', '225150607111038', 'Pendidikan Teknologi Informasi', 'naelan@gmail.com', 'Universitas Brawijaya'),
(25, 'Rifqi Nabil Al Fath ', '225150607111039', 'Pendidikan Teknologi Informasi', 'rifqin@gmail.com', 'Universitas Brawijaya'),
(26, 'Rafly Achmad Barran', '225150607111040', 'Pendidikan Teknologi Informasi', 'raflya@gmail.com', 'Universitas Brawijaya'),
(27, 'Desindy Rizki Anindityas', '225150607111041', 'Pendidikan Teknologi Informasi', 'desind@gmail.com', 'Universitas Brawijaya'),
(28, 'Mauliddyah Evalyanti  ', '225150607111042', 'Pendidikan Teknologi Informasi', 'maulid@gmail.com', 'Universitas Brawijaya'),
(29, 'Alda Fahimah Apriliana ', '225150607111043', 'Pendidikan Teknologi Informasi', 'aldafa@gmail.com', 'Universitas Brawijaya'),
(30, 'Khonsa Jahro Nabila Putri Wijaya ', '225150607111044', 'Pendidikan Teknologi Informasi', 'khonsa@gmail.com', 'Universitas Brawijaya'),
(31, 'Fikri Is Ad Ibnu Wiyasa ', '225150607111046', 'Pendidikan Teknologi Informasi', 'fikrii@gmail.com', 'Universitas Brawijaya'),
(32, 'Olivia Jihan Fadella', '225150607111047', 'Pendidikan Teknologi Informasi', 'olivia@gmail.com', 'Universitas Brawijaya'),
(33, 'Ayu Chiento Suci', '225150607111048', 'Pendidikan Teknologi Informasi', 'ayuchi@gmail.com', 'Universitas Brawijaya'),
(34, 'Gurnita Salma Atmainun', '225150607111049', 'Pendidikan Teknologi Informasi', 'gurnit@gmail.com', 'Universitas Brawijaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
