-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2019 at 05:02 နံနက်
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookusers`
--

CREATE TABLE `bookusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `carline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seats` tinyint(1) NOT NULL,
  `due_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookusers`
--

INSERT INTO `bookusers` (`id`, `user_id`, `carline`, `destination`, `seats`, `due_date`, `created_at`, `updated_at`) VALUES
(8, 2, 'Pyi Taw', 'Yangon To Pago', 8, '0000-00-00', '2018-12-24 09:01:37', '2018-12-24 09:01:37'),
(9, 2, 'Mandalar Min', 'Yangon To Shan', 12, '0000-00-00', '2018-12-24 10:06:06', '2018-12-24 10:06:06'),
(10, 4, 'Myanmar Tour', 'Yangon To Myint Kyi Narr', 6, '0000-00-00', '2018-12-24 11:06:51', '2018-12-24 12:28:29'),
(11, 4, 'Pyi Taw', 'Yangon To Pyin Oo Lwin', 11, '0000-00-00', '2018-12-24 12:30:41', '2018-12-24 12:30:41'),
(12, 1, 'Red Link', 'Yangon To Pago', 7, '2018-12-27', '2018-12-25 00:32:49', '2018-12-25 00:32:49'),
(13, 3, 'Yoe Ma', 'Yangon To Myint Kyi Narr', 5, '2018-12-27', '2018-12-25 22:38:59', '2018-12-25 22:38:59'),
(14, 2, 'Pyi Taw', 'Yangon To Pago', 4, '2018-12-10', '2019-02-05 09:01:44', '2019-02-05 09:01:44'),
(15, 1, 'Pyi Taw', 'Yangon To Manday', 1, '2018-12-12', '2019-02-16 22:55:52', '2019-02-16 22:55:52'),
(16, 1, 'Mandalar Min', 'Yangon To Manday', 1, '2018-12-27', '2019-02-16 23:03:19', '2019-02-16 23:03:19'),
(17, 1, 'Myanmar Tour', 'Yangon To Manday', 1, '2018-12-27', '2019-02-16 23:03:37', '2019-02-16 23:03:37'),
(18, 2, 'Mandalar Min', 'Yangon To Manday', 1, '2018-12-10', '2019-02-16 23:05:18', '2019-02-16 23:05:18'),
(19, 2, 'Myanmar Tour', 'Yangon To Manday', 1, '2018-12-10', '2019-02-17 10:14:57', '2019-02-17 10:14:57'),
(20, 2, 'Myanmar Tour', 'Yangon To Manday', 4, '2018-12-27', '2019-02-17 10:23:27', '2019-02-17 10:23:27'),
(21, 2, 'Myanmar Tour', 'Yangon To Manday', 1, '2018-12-10', '2019-02-17 10:56:53', '2019-02-17 10:56:53'),
(22, 2, 'Myanmar Tour', 'Yangon To Ayeyawady', 6, '2018-12-10', '2019-02-17 10:57:03', '2019-02-17 10:57:03'),
(23, 2, 'Myanmar Tour', 'Yangon To Kachin', 10, '2018-12-27', '2019-02-17 11:02:24', '2019-02-17 11:02:24'),
(24, 2, 'Myanmar Tour', 'Yangon To Manday', 8, '2018-12-11', '2019-02-17 11:04:39', '2019-02-17 11:04:39'),
(25, 2, 'Myanmar Tour', 'Yangon To Ayeyawady', 1, '2018-12-04', '2019-02-17 11:05:33', '2019-02-17 11:05:33'),
(26, 1, 'Myanmar Tour', 'Yangon To Manday', 1, '2018-12-10', '2019-02-17 21:05:34', '2019-02-17 21:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_22_161844_create_posts_table', 1),
(4, '2018_12_23_054853_create_userbooks_table', 2),
(5, '2018_12_23_063451_create_user_books_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `carline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `carline`, `created_at`, `updated_at`) VALUES
(6, 'Myanmar Tour', '2018-12-23 08:50:40', '2018-12-23 08:50:40'),
(7, 'Red Link', '2019-02-16 23:43:05', '2019-02-16 23:43:05'),
(9, 'Mandala MIn', '2019-02-16 23:46:00', '2019-02-16 23:46:00'),
(10, 'KBZ', '2019-02-16 23:46:08', '2019-02-16 23:46:08'),
(11, 'Pyi Taw', '2019-02-17 10:09:51', '2019-02-17 10:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$w2PCscq27mBqScBZNLov0O1hwFLledlBvbPkjtulpkPqN/krjDv3O', 'vSqPzGWs9feLIXYCh7uMMAExRQgCQPoAP9XJcY0jfp77KfSji8Q81kUA7Fqb', '2018-12-22 10:35:18', '2019-02-17 10:14:38'),
(2, 'alex', 'alex@gmial.com', '$2y$10$5psDC/i9v2NaiTL5Fl8vZ.43IlPV85XZb4lYyYVrvCWfJSf6.B39u', 'X4SK53Mar8p7eS2gWzclzjgq0RMVf0ZosWpRq7gUGN9MYyFG4fP5ggVHIWjF', '2018-12-23 11:47:34', '2019-02-16 23:40:34'),
(3, 'Nik', 'nike@gmail.com', '$2y$10$b50NZNa/nKjKwsDdfsFRKu4BjltePvNZzdePW47FdilNmacV1SsM.', '3LqxANdgvFSqjEkKKCH770wJbtq3wEHN7E0GoXCpk6wkKUfUxo9q5jdfxL4f', '2018-12-23 21:49:41', '2018-12-25 11:07:54'),
(4, 'Clay Jasine', 'clay@gamil.com', '$2y$10$AnUcBH8FaJmvfK27v3T9/.9tMBZiD6Dha/HkWEWS/gBQAJlCg2wJa', 'Ff2lIhtE6YzhmO2tHpr9OravNFUVsvnyVSNG6AE1ym0MZAlMvq2opiEi17Ht', '2018-12-24 11:06:21', '2018-12-25 11:41:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookusers`
--
ALTER TABLE `bookusers`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bookusers`
--
ALTER TABLE `bookusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
