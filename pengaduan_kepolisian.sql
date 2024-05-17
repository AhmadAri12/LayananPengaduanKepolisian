-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2024 at 01:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_kepolisian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pengaduan`
--

CREATE TABLE `tb_jenis_pengaduan` (
  `id_kasus` char(8) NOT NULL,
  `nama_kasus` varchar(60) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` char(8) NOT NULL,
  `nama_pelapor` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp_pelapor` varchar(20) DEFAULT NULL,
  `email_pelapor` varchar(100) DEFAULT NULL,
  `tkp_kejadian` varchar(100) DEFAULT NULL,
  `id_kasus` char(8) DEFAULT NULL,
  `isi_pengaduan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_roles` char(8) NOT NULL,
  `nama_roles` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `id_tanggapan` char(8) NOT NULL,
  `id_pengaduan` char(8) DEFAULT NULL,
  `tanggapan_pengaduan` text,
  `tgl_tanggapan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` char(8) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email_users` varchar(50) DEFAULT NULL,
  `id_roles` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_pengaduan`
--
ALTER TABLE `tb_jenis_pengaduan`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_kasus` (`id_kasus`);

--
-- Indexes for table `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_roles` (`id_roles`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD CONSTRAINT `tb_pengaduan_ibfk_1` FOREIGN KEY (`id_kasus`) REFERENCES `tb_jenis_pengaduan` (`id_kasus`);

--
-- Constraints for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD CONSTRAINT `tb_tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `tb_pengaduan` (`id_pengaduan`);

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `tb_roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
