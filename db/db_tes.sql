-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 05:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes-jakarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teguh Joko Salahudin', '2019-08-11 12:09:09', '2019-08-11 12:09:09'),
(2, 'Nasab Najmudin S.E.I', '2019-08-11 12:09:09', '2019-08-11 12:09:09'),
(3, 'Ratna Nasyidah', '2019-08-11 12:09:09', '2019-08-11 12:09:09'),
(4, 'Ira Mulyani M.M.', '2019-08-11 12:09:09', '2019-08-11 12:09:09'),
(5, 'Imam Tarihoran S.I.Kom', '2019-08-11 12:09:10', '2019-08-11 12:09:10'),
(6, 'Asmadi Irawan', '2019-08-11 12:09:10', '2019-08-11 12:09:10'),
(7, 'Ratih Suci Kusmawati M.Ak', '2019-08-11 12:09:10', '2019-08-11 12:09:10'),
(8, 'Paris Uyainah', '2019-08-11 12:09:10', '2019-08-11 12:09:10'),
(9, 'Galuh Hari Prasetyo', '2019-08-11 12:09:10', '2019-08-11 12:09:10'),
(10, 'Baktiono Among Jailani', '2019-08-11 12:09:10', '2019-08-11 12:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_hadiah`
--

CREATE TABLE `anggota_hadiah` (
  `id` int(10) UNSIGNED NOT NULL,
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `hadiah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota_hadiah`
--

INSERT INTO `anggota_hadiah` (`id`, `anggota_id`, `hadiah_id`, `created_at`, `updated_at`) VALUES
(1, 3, 10, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(2, 10, 4, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(3, 6, 8, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(4, 6, 1, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(5, 2, 2, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(6, 5, 1, '2019-08-11 12:14:35', '2019-08-11 12:14:35'),
(7, 4, 10, '2019-08-11 12:14:36', '2019-08-11 12:14:36'),
(8, 2, 8, '2019-08-11 12:14:36', '2019-08-11 12:14:36'),
(9, 3, 8, '2019-08-11 12:14:36', '2019-08-11 12:14:36'),
(10, 10, 9, '2019-08-11 12:14:36', '2019-08-11 12:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `hadiah`
--

CREATE TABLE `hadiah` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_hadiah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hadiah`
--

INSERT INTO `hadiah` (`id`, `nama_hadiah`, `created_at`, `updated_at`) VALUES
(1, 'Kulkas', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(2, 'Lemari', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(3, 'Rumah', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(4, 'Mobil', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(5, 'Sepeda Motor', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(6, 'Pulpen', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(7, 'Tas', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(8, 'Sepatu', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(9, 'Voucher', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(10, 'Mouse', '2019-08-11 12:09:17', '2019-08-11 12:09:17'),
(11, 'Laptop', '2019-08-11 12:09:18', '2019-08-11 12:09:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_hadiah`
--
ALTER TABLE `anggota_hadiah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_hadiah_anggota_id_foreign` (`anggota_id`),
  ADD KEY `anggota_hadiah_hadiah_id_foreign` (`hadiah_id`);

--
-- Indexes for table `hadiah`
--
ALTER TABLE `hadiah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `anggota_hadiah`
--
ALTER TABLE `anggota_hadiah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hadiah`
--
ALTER TABLE `hadiah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
