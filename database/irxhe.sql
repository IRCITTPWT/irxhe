-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 05:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irxhe`
--

-- --------------------------------------------------------

--
-- Table structure for table `broadcasts`
--

CREATE TABLE `broadcasts` (
  `idBroadcast` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `type` enum('txt','vid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `broadcasts`
--

INSERT INTO `broadcasts` (`idBroadcast`, `idUser`, `type`, `tujuan`, `content`, `img`, `vid`, `created_at`, `updated_at`) VALUES
(1, 1, 'txt', '1', 'Hello world', '', '', '2018-05-20 00:20:06', '2018-05-20 00:20:06'),
(2, 1, 'txt', '2', 'Test Untuk cabang 2', '', '', '2018-05-20 00:20:44', '2018-05-20 00:20:44'),
(3, 1, 'txt', '3', 'test untuk cabang 3', '', '', '2018-05-20 00:26:09', '2018-05-20 00:26:09'),
(4, 1, 'txt', 'all', 'Untuk cabang 3 di harapkan minggu besok ..', '', '', '2018-05-20 07:13:46', '2018-05-20 07:13:46'),
(6, 1, 'txt', '3', 'penjualan untuk cabang 3 menurun 80%', '', '', '2018-05-20 18:00:33', '2018-05-20 18:00:33'),
(7, 1, 'txt', 'all', 'Hari ini /......', '', '', '2018-05-21 01:17:22', '2018-05-21 01:17:22'),
(8, 1, 'txt', '3', 'Cabang 3 besok ke kantor pusat', '', '', '2018-05-21 01:23:49', '2018-05-21 01:23:49'),
(9, 1, 'txt', 'all', 'Test Upload Gambar', 'noimage.png', '', '2018-05-21 07:20:56', '2018-05-21 07:20:56'),
(10, 1, 'txt', '1', 'test', 'noimage.png', '', '2018-05-21 07:34:56', '2018-05-21 07:34:56'),
(11, 1, 'txt', 'all', 'test 2', 'noimage.png', '', '2018-05-21 07:35:44', '2018-05-21 07:35:44'),
(12, 1, 'txt', 'all', 'test gambar 4', '20237_logo infest 2017_1526915878.png', '', '2018-05-21 08:17:58', '2018-05-21 08:17:58'),
(13, 1, 'txt', 'all', 'gans', '71080_1526915896.png', '', '2018-05-21 08:18:16', '2018-05-21 08:18:16'),
(14, 1, 'txt', 'all', 'cap kaki razer', '13682258_47bbe482-1020-4e2f-aac6-072b2b7304d4_300_312_1526916868.png', '', '2018-05-21 08:34:28', '2018-05-21 08:34:28'),
(15, 1, 'txt', 'all', 'hello', 'contoh teknologi AR_1526968314.jpg', '', '2018-05-21 22:51:54', '2018-05-21 22:51:54'),
(16, 1, 'txt', 'all', 'hello lagi', 'Indokom-Ovis_1526968363.jpg', '', '2018-05-21 22:52:43', '2018-05-21 22:52:43'),
(17, 1, 'txt', 'all', 'test ajax', 'noimage.png', '', '2018-05-22 09:40:57', '2018-05-22 09:40:57'),
(18, 1, 'txt', 'all', 'test ajax 2', 'noimage.png', '', '2018-05-22 09:41:54', '2018-05-22 09:41:54'),
(19, 1, 'txt', 'all', 'test ajax 3', 'noimage.png', '', '2018-05-22 09:46:29', '2018-05-22 09:46:29'),
(20, 1, 'txt', 'all', 'test ajax 4', 'noimage.png', '', '2018-05-22 09:47:55', '2018-05-22 09:47:55'),
(21, 1, 'txt', 'all', 'hello', '', '', '2018-05-22 11:04:30', '2018-05-22 11:04:30');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_05_20_040257_create_broadcasts_table', 1),
(7, '2018_05_23_162633_create_roles_table', 2),
(8, '2018_05_23_162723_create_user_roles_table', 2),
(9, '2018_05_23_172759_add_role_id_to_users_table', 3),
(10, '2018_05_24_074658_add_cabang_to_users_table', 4);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `cabang` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `cabang`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ikhwanudin', 'me.ikhwanudin@gmail.com', '$2y$10$Q3wGNx6CYzXtCg.vApSJj.itBJoVSfvXVLxgbxclLHrkBxrrloVsO', 2, 0, 'W46KRfYpdYnnjuO7rtsEkGBIoQqwJTleh8wDLSVJ0UgRqOAmTJr93vOGDCE4', '2018-05-23 10:11:44', '2018-05-23 10:11:44'),
(2, 'admin', 'admin@admin.dev', '$2y$10$l4ABWsx4SVp8iHnXQX1oCO0FowVHfektDDJOsazkw5eYmwB7/0WDe', 1, 0, NULL, '2018-05-24 00:10:27', '2018-05-24 00:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broadcasts`
--
ALTER TABLE `broadcasts`
  ADD PRIMARY KEY (`idBroadcast`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broadcasts`
--
ALTER TABLE `broadcasts`
  MODIFY `idBroadcast` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
