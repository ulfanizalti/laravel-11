-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2025 at 02:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `member` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `user_id`, `nama`, `email`, `password`, `member`, `created_at`, `updated_at`) VALUES
(2, 3, 'ibadurrahman', 'ibadurrahman@gmail.com', '29043005', 50.00, '2025-07-12 21:23:01', '2025-07-12 21:23:01'),
(3, 2, 'Aditya', 'user@gmail.com', '29043005', 47.40, '2025-07-12 21:49:30', '2025-07-12 21:50:54'),
(4, 2, 'Leonza', 'leo@gmail.com', '29043005', 50.00, '2025-07-12 22:07:19', '2025-07-12 22:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '0001_01_01_000000_create_users_table', 1),
(29, '0001_01_01_000001_create_cache_table', 1),
(30, '2025_07_10_163856_create_pemesanans_table', 1),
(31, '2025_07_11_114856_create_memberships_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat_penjemputan` varchar(255) NOT NULL,
  `jenis_pemesanan` varchar(255) NOT NULL,
  `jenis_layanan` varchar(255) NOT NULL,
  `tanggal_penjemputan` date NOT NULL,
  `jam_penjemputan` time NOT NULL,
  `pengiriman` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `berat` decimal(8,2) DEFAULT NULL,
  `total_harga` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `user_id`, `nama`, `telp`, `email`, `alamat_penjemputan`, `jenis_pemesanan`, `jenis_layanan`, `tanggal_penjemputan`, `jam_penjemputan`, `pengiriman`, `status`, `berat`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ibadurrahman Al Hadi', '2904300513', 'hadi@gmail.com', 'Jl. Pramuka', 'Layanan Sepatu', 'Biasa', '2025-07-12', '23:59:00', 'antar', 'Finished', 2.30, 15000.00, '2025-03-03 23:23:51', '2025-07-11 23:23:51'),
(2, 2, 'ibadurrahman al hadi', '082390442675', 'ibadurrahman@gmail.com', 'JL. Garuda Sakti', 'Cuci Kering', 'Member', '2025-07-14', '16:46:00', 'antar', 'Finished', 3.10, 0.00, '2025-07-11 23:23:51', '2025-07-11 23:25:10'),
(3, 2, 'Ibadurrahman Al Hadi', '0932841234243', 'leonza@gmail.com', 'JL. Garuda Sakti', 'Cuci Kering', 'Member', '2025-07-13', '23:13:00', 'antar', 'Finished', 5.30, 0.00, '2025-07-12 00:19:44', '2025-07-12 00:22:53'),
(4, 3, 'ibadurrahmanalhadi', '082398874327912', 'ibadurrahman@gmail.com', 'JL. Bangu Sakti', 'Cuci Setrika', 'Biasa', '2025-07-14', '16:23:00', 'antar', 'Finished', 2.30, 11500.00, '2025-07-12 21:20:23', '2025-07-12 21:48:12'),
(5, 2, 'Aditya', '08234389280340', 'user@gmail.com', 'JL. Bangu Sakti', 'Cuci Kering', 'Member', '2025-07-14', '15:23:00', 'antar', 'Finished', 2.60, 0.00, '2025-07-12 21:50:10', '2025-07-12 21:51:16'),
(6, 2, 'adit', '082332123321', 'adit@gmail.com', 'alamat', 'Layanan Tas', 'Biasa', '2025-07-14', '15:36:00', 'antar', 'Finished', 5.00, 25000.00, '2025-07-12 22:53:23', '2025-07-12 22:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cdlsIQFKjUKq368gtXal4yj47Y3cskYcjCpuXUWO', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Safari/605.1.15', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiZ0w0ZG1qaURpMFhvQWEydUFTWXF4bWNFajB6YkNsaTBjM2RucmwzcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWNhcC8wMSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1752483032);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Prasetyo', 'admin@gmail.com', '$2y$12$e/Bas.CuD/BzdAV2.LTple2eY21X.rBoUQLvBdzARAT1lePpbk6p.', 'admin', NULL, '2025-07-11 23:23:51', '2025-07-11 23:23:51'),
(2, 'Leonza', 'user@gmail.com', '$2y$12$SMxcSDj.rhPwWD/BTbqoaOEiDoH7kICxCXIlWuyBMt/GIqhuTsCg2', 'user', NULL, '2025-07-11 23:23:51', '2025-07-11 23:23:51'),
(3, 'Ibadurrahman Al Hadi', 'ibadurrahman@gmail.com', '$2y$12$zMVuS/blZbfDOYalgulA8.jtzv6tNo/1JavKXK8IXnbGHIEtY/84e', 'user', NULL, '2025-07-12 21:10:48', '2025-07-12 21:10:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
