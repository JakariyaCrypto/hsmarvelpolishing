-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 06:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_polishing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'jakariya ahmed', '017711508098', 'message', NULL, NULL),
(2, 'JISHAN AHMED', '01771158298', 'MESSAGE HERE', NULL, NULL),
(3, 'demo', '0147875451', 'dkddkkd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_20_171652_create_services_table', 2),
(5, '2022_03_20_174238_create_works_table', 2),
(6, '2022_03_25_044333_create_sessions_table', 3),
(7, '2022_03_28_105448_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'anoteher demo service', 'uploads/Service/Service1071306366.jpg', '2022-03-22 06:05:53', '2022-03-22 08:43:54'),
(3, 'top polishing marvel', 'uploads/Service/Service1011902065.jpg', '2022-03-22 10:53:26', '2022-03-22 10:53:26'),
(4, 'top polishing marvel', 'uploads/Service/Service1066427419.jpg', '2022-03-22 10:55:16', '2022-03-22 10:55:16'),
(5, 'top polishing marvel', 'uploads/Service/Service1105780736.jpg', '2022-03-22 10:55:44', '2022-03-22 10:55:44'),
(6, 'top polishing marvel', 'uploads/Service/Service1061370264.jpg', '2022-03-22 10:56:23', '2022-03-22 10:56:23'),
(7, 'top polishing marvel', 'uploads/Service/Service1108469123.webp', '2022-03-22 10:56:49', '2022-03-22 10:56:49'),
(8, 'top polishing marvel service', 'uploads/Service/Service1042972920.jpg', '2022-03-22 10:57:42', '2022-03-22 10:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'developer@gmail.com', NULL, '$2y$10$t1spDbOt/a3geJA9btR8j.A8ERgEm.G2330Qvd64uyjNzG93L06fy', NULL, '2022-03-20 09:55:33', '2022-03-20 09:55:33'),
(2, 'hspolishingadmin1', 'hspolishingadmin1@gmail.com', NULL, '$2y$10$7GkEXn9k34BMhoM04ZXHW.4D9cluOG.H4NhxvogKuO2Y9t4p2iiGG', NULL, '2022-03-20 09:57:17', '2022-03-20 09:57:17'),
(3, 'hspolishingadmin3', 'hspolishingadmin3@gmail.com', NULL, '$2y$10$1n/GjL.ttBphgWlS2IHagu3pomlAxP1ci4Xzyv./JXfQtiVruSaDq', NULL, '2022-03-20 09:58:25', '2022-03-20 09:58:25'),
(4, 'hspolishingadmin2', 'hspolishingadmin2@gmail.com', NULL, '$2y$10$uS.gmWGuqrVz255ieafmx.9g/QyZph89aH9UcdvYPLQV9AkZtzuhC', NULL, '2022-03-20 09:59:19', '2022-03-20 09:59:19'),
(5, 'hspolishingadmin4', 'hspolishingadmin4@gmail.com', NULL, '$2y$10$haN1L3SysKfhiHLGvzV9v.s7tB5mDqVnzRJ/lbRu85iurPnjqqpfi', NULL, '2022-03-20 10:00:46', '2022-03-20 10:00:46'),
(6, 'hspolishingadmin5', 'hspolishingadmin5@gmail.com', NULL, '$2y$10$nBIOpuxSWBhFBMqupSGwv.UrIfsEhZjUbXEtw9nbRNX0B6GnlvrAS', NULL, '2022-03-20 10:01:52', '2022-03-20 10:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'other', 'uploads/Work/work1647960591489965442.jpg', '2022-03-22 07:43:47', '2022-03-22 08:49:51'),
(3, 'demo title', 'uploads/Work/work1647960527954993394.jpg', '2022-03-22 08:36:08', '2022-03-22 08:48:47'),
(4, 'polishing the mad', 'uploads/Work/work1647960820704430878.jpg', '2022-03-22 08:53:40', '2022-03-22 08:53:40'),
(5, NULL, 'uploads/Work/work1647968470434108442.jpg', '2022-03-22 11:01:10', '2022-03-22 11:01:10'),
(6, NULL, 'uploads/Work/work1647968495150965649.jpg', '2022-03-22 11:01:35', '2022-03-22 11:01:35'),
(7, NULL, 'uploads/Work/work1647968520366316378.jpg', '2022-03-22 11:02:00', '2022-03-22 11:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
