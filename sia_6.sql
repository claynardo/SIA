-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_6`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliahs`
--

CREATE TABLE `jadwal_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_mkul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mkul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_dosen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `ruang_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mhs` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_kuliahs`
--

INSERT INTO `jadwal_kuliahs` (`id`, `kd_mkul`, `nama_mkul`, `kd_dosen`, `jam`, `ruang_kelas`, `jumlah_mhs`, `tanggal_mulai`, `created_at`, `updated_at`) VALUES
(1, '181700001', 'SISTEM INFORMASI MANAJEMEN', '11181', '08:30:00', 'D-202', 20, '2021-06-04', '2021-05-31 07:17:16', '2021-05-31 08:24:25'),
(2, '181700002', 'ALJABAR LINEAR', '11182', '10:30:00', 'D-203', 19, '2021-06-07', '2021-05-31 07:26:06', '2021-05-31 08:24:54'),
(3, '181700003', 'CCNA R&S 1', '11183', '13:30:00', 'D-201', 24, '2021-06-08', '2021-05-31 07:27:40', '2021-05-31 07:27:40'),
(4, '181700004', 'DASAR KEAMANAN KOMPUTER', '11185', '09:30:00', 'D-301', 22, '2021-06-09', '2021-05-31 07:28:58', '2021-05-31 08:52:10'),
(5, '181700005', 'PENGANTAR MANAJEMEN DAN BISNIS', '11184', '15:00:00', 'D-210', 29, '2021-06-09', '2021-05-31 07:29:54', '2021-05-31 07:29:54'),
(6, '181700006', 'LOGIKA MATEMATIKA', '11186', '08:00:00', 'D-206', 25, '2021-06-10', '2021-05-31 07:31:10', '2021-05-31 07:31:10'),
(7, '181700007', 'BAHASA INGGRIS I', '11187', '10:30:00', 'D-106', 30, '2021-06-10', '2021-05-31 07:32:18', '2021-05-31 07:32:18'),
(8, '181700008', 'SISTEM BASIS DATA', '11188', '13:00:00', 'D-206', 25, '2021-06-10', '2021-05-31 07:33:15', '2021-05-31 07:33:15'),
(9, '181700009', 'KONSEP SISTEM INFORMASI', '111809', '10:00:00', 'D-203', 20, '2021-06-11', '2021-05-31 07:34:09', '2021-05-31 07:34:09'),
(10, '181700010', 'DASAR PEMROGRAMAN (LAB)', '11190', '14:00:00', 'D-201', 24, '2021-06-11', '2021-05-31 07:34:57', '2021-05-31 07:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_31_122548_create_jadwal_kuliahs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$/HZmkI0VgRQFmP.d2otgJO0t7/Rv6p2wRD7U8wpSJKj/boD6nKDJa', NULL, '2021-05-31 05:42:14', '2021-05-31 05:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal_kuliahs`
--
ALTER TABLE `jadwal_kuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kuliahs`
--
ALTER TABLE `jadwal_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
