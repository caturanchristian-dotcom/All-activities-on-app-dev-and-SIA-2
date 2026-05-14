-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2026 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `act5_student_dashboard`
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-chyn@gmail.com|127.0.0.1', 'i:1;', 1778661643),
('laravel-cache-chyn@gmail.com|127.0.0.1:timer', 'i:1778661643;', 1778661643),
('laravel-cache-dashboard_posts', 'a:5:{i:0;a:7:{s:2:\"id\";i:1;s:5:\"title\";s:32:\"His mother had always taught him\";s:4:\"body\";s:289:\"His mother had always taught him not to ever think of himself as better than others. He\'d tried to live by this motto. He never looked down on those who were less fortunate or who had less money than him. But the stupidity of the group of people he was talking to made him change his mind.\";s:4:\"tags\";a:3:{i:0;s:7:\"history\";i:1;s:8:\"american\";i:2;s:5:\"crime\";}s:9:\"reactions\";a:2:{s:5:\"likes\";i:192;s:8:\"dislikes\";i:25;}s:5:\"views\";i:305;s:6:\"userId\";i:121;}i:1;a:7:{s:2:\"id\";i:2;s:5:\"title\";s:40:\"He was an expert but not in a discipline\";s:4:\"body\";s:325:\"He was an expert but not in a discipline that anyone could fully appreciate. He knew how to hold the cone just right so that the soft server ice-cream fell into it at the precise angle to form a perfect cone each and every time. It had taken years to perfect and he could now do it without even putting any thought behind it.\";s:4:\"tags\";a:3:{i:0;s:6:\"french\";i:1;s:7:\"fiction\";i:2;s:7:\"english\";}s:9:\"reactions\";a:2:{s:5:\"likes\";i:859;s:8:\"dislikes\";i:32;}s:5:\"views\";i:4884;s:6:\"userId\";i:91;}i:2;a:7:{s:2:\"id\";i:3;s:5:\"title\";s:49:\"Dave watched as the forest burned up on the hill.\";s:4:\"body\";s:508:\"Dave watched as the forest burned up on the hill, only a few miles from her house. The car had been hastily packed and Marta was inside trying to round up the last of the pets. Dave went through his mental list of the most important papers and documents that they couldn\'t leave behind. He scolded himself for not having prepared these better in advance and hoped that he had remembered everything that was needed. He continued to wait for Marta to appear with the pets, but she still was nowhere to be seen.\";s:4:\"tags\";a:3:{i:0;s:7:\"magical\";i:1;s:7:\"history\";i:2;s:6:\"french\";}s:9:\"reactions\";a:2:{s:5:\"likes\";i:1448;s:8:\"dislikes\";i:39;}s:5:\"views\";i:4152;s:6:\"userId\";i:16;}i:3;a:7:{s:2:\"id\";i:4;s:5:\"title\";s:30:\"All he wanted was a candy bar.\";s:4:\"body\";s:229:\"All he wanted was a candy bar. It didn\'t seem like a difficult request to comprehend, but the clerk remained frozen and didn\'t seem to want to honor the request. It might have had something to do with the gun pointed at his face.\";s:4:\"tags\";a:3:{i:0;s:7:\"mystery\";i:1;s:7:\"english\";i:2;s:8:\"american\";}s:9:\"reactions\";a:2:{s:5:\"likes\";i:359;s:8:\"dislikes\";i:18;}s:5:\"views\";i:4548;s:6:\"userId\";i:47;}i:4;a:7:{s:2:\"id\";i:5;s:5:\"title\";s:38:\"Hopes and dreams were dashed that day.\";s:4:\"body\";s:360:\"Hopes and dreams were dashed that day. It should have been expected, but it still came as a shock. The warning signs had been ignored in favor of the possibility, however remote, that it could actually happen. That possibility had grown from hope to an undeniable belief it must be destiny. That was until it wasn\'t and the hopes and dreams came crashing down.\";s:4:\"tags\";a:3:{i:0;s:5:\"crime\";i:1;s:7:\"mystery\";i:2;s:4:\"love\";}s:9:\"reactions\";a:2:{s:5:\"likes\";i:119;s:8:\"dislikes\";i:30;}s:5:\"views\";i:626;s:6:\"userId\";i:131;}}', 1778731364);

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_17_003906_add_name_role_to_users_table', 2);

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
('BK6sYjnqwBzOv07UlPsLKGER2YXGoSgWq9x4tJj1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidW1oMkxzNGtjamoxcXVnY3dWcVFvSnVaUksxVzNQa1RuTUp3UTJQVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1778730723),
('zFSexID3FQOuQYBSzOqrtVOrqVLjZs8vy11HbkC0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielNNaWhzWjh4VzVmNGIwREdUR1VlVG4wVnpJVEFzS0ZKYVY5aEF4TCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778737605);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chan', 'user', 'chan@gmail.com', NULL, '$2y$12$gGYT/vT585dnRGDZ/Mof/.ymLMR9iXipjjYjs5WZEPHl3Z7516t8e', NULL, '2026-04-16 16:38:00', '2026-04-16 16:38:00'),
(2, 'Christian Papong Caturan', 'admin', 'caturanchristian@gmail.com', NULL, '$2y$12$SI9po1eszZzUHDB.S9qo/.Fq5QAJp5XGqkzlaxqUVWCIdH7GobcJK', 'pbok2622Hv9SRWmCVqMBy9ra5AyK8RGHDqyiHz1xnhoTEeB0tDZLIaatStVx', '2026-04-16 17:41:36', '2026-04-16 17:41:36'),
(3, 'kk lll', 'user', 'christiancaturan3@gmail.com', NULL, '$2y$12$gCLTtpWsCyVq4NZHLaO/h.ySbQhBATSJvYAThVGgqGMtN5PzfZlJ.', NULL, '2026-04-16 17:50:45', '2026-04-16 17:51:32'),
(5, 'kokokokok', 'admin', 'marl@gmail.com', NULL, '$2y$12$RmQraz9ulEJCVnJ4CGJJbO6JxQ.Xn4719Dsoeu9./n1b9KfJH3osC', NULL, '2026-04-16 17:58:02', '2026-04-16 17:58:02'),
(6, 'user chan', 'user', 'caturanchristian9@gmail.com', NULL, '$2y$12$jRcTHkyv8AMUq7orXnKmfue/9KXFFV0wmiQBWVmlQOnaoL2m2u6IS', NULL, '2026-04-16 18:03:08', '2026-04-16 18:03:08'),
(7, 'user hahahaha', 'user', 'caturanchristian8@gmail.com', NULL, '$2y$12$1r0A39zv1p3A3dJbJvyZTuJuy6O50B002M.W4PJ3BlKTzmRq.xjNC', NULL, '2026-04-16 18:32:17', '2026-04-16 18:32:17'),
(8, 'user 1', 'user', 'chan1@gmail.com', NULL, '$2y$12$SRCb4nkQgo4YiDK1xeZPIeN84eulS0GcL/tIiqob/Hp29VCPdAYSm', NULL, '2026-04-18 04:11:37', '2026-04-18 04:11:37'),
(9, 'admin christian', 'admin', 'chan2@gmail.com', NULL, '$2y$12$MbhE.idOCQC8ASaNJaJN1.fwn4DrDXcqHpFpIIc3NBxV/Sh4BrvcK', NULL, '2026-04-18 18:08:49', '2026-04-18 18:08:49'),
(10, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$vr.jKMejX5EHg4K1i4ARCep3tm4WpYm9WZpjpxlkBrdbYdgzRZ9wa', NULL, '2026-05-13 19:47:34', '2026-05-13 19:47:34'),
(11, 'user', 'user', 'user@gmail.com', NULL, '$2y$12$jDLTMGDSwwdGkVVm2wDMjO0uSfCsPqMSPhI0q//Gdg2TBXPQG0Kza', NULL, '2026-05-13 19:48:55', '2026-05-13 19:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
