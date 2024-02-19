-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2024 at 08:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volcano`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `client_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `client_image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(6, 'aboutimage/a4l6i9NGXIe5wt7gCjjsc65dC7TZxPYt7sqYIciN.png', 'ahmed', 'magdy', '2024-02-19 15:37:38', '2024-02-19 15:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$12$Of3XwoIFjivnq8ZjyoncXutXiMVo7S4klBpfdCd7l7iLGWgCF43DG', NULL, '2024-02-15 20:54:12', '2024-02-15 20:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `subject`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Ahmed', NULL, NULL, 'superadmin@example.com', NULL, 'asdadas', '2024-02-15 20:10:26', '2024-02-15 20:10:26'),
(5, 'Ahmed', NULL, NULL, 'superadmin@example.com', NULL, 'asdadas', '2024-02-15 20:10:43', '2024-02-15 20:10:43'),
(6, 'Ahmed', NULL, NULL, 'ahmed.hamody5532@gmail.com', NULL, 'شسيشي', '2024-02-15 20:11:51', '2024-02-15 20:11:51'),
(7, 'Ahmed', NULL, NULL, 'ahmed_hamody56@yahoo.com', NULL, 'a', '2024-02-15 20:18:04', '2024-02-15 20:18:04'),
(8, 'Ahmed', NULL, NULL, 'superadmin@example.com', NULL, 'a', '2024-02-15 20:18:17', '2024-02-15 20:18:17'),
(9, 'Ahmed', NULL, NULL, 'test@test.com', NULL, 'asdsadd', '2024-02-15 20:19:13', '2024-02-15 20:19:13'),
(10, 'newwwwwwwwwww', NULL, NULL, 'superadmin@example.com', NULL, 'newwwwwwwwwwwwwwwww', '2024-02-15 20:19:34', '2024-02-15 20:19:34'),
(11, 'nes', NULL, NULL, 'test@test.com', NULL, 's', '2024-02-15 20:20:31', '2024-02-15 20:20:31'),
(12, 'asd', NULL, NULL, 'test@test.com', NULL, 'asdadasd', '2024-02-15 20:20:57', '2024-02-15 20:20:57'),
(13, 'Ahmed', NULL, NULL, 'ahmed_hamody56@yahoo.com', NULL, 'sadd', '2024-02-15 20:21:17', '2024-02-15 20:21:17'),
(14, 'Ahmed', NULL, NULL, 'ahmed.hamody5532@gmail.com', NULL, 'asd', '2024-02-15 20:25:02', '2024-02-15 20:25:02'),
(15, 'Ahmed', NULL, NULL, 'ahmed.hamody5532@gmail.com', NULL, 'NEW Message', '2024-02-19 13:11:12', '2024-02-19 13:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2024_02_12_221054_create_projects_table', 1),
(48, '2024_02_12_221108_create_teams_table', 1),
(49, '2024_02_12_221128_create_services_table', 1),
(51, '2024_02_15_130326_create_abouts_table', 3),
(52, '2024_02_15_172049_create_messages_table', 4),
(54, '2024_02_15_104714_create_admins_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `image`, `imageurl`, `created_at`, `updated_at`) VALUES
(3, 'DIPLO GATE', 'projectimage/rfQpuP8CQBGESJfqn6kOhG5u8FF5bjjwnJnHWoO1.png', NULL, '2024-02-19 15:49:01', '2024-02-19 15:49:01'),
(4, 'NEW ALAMEIN', 'projectimage/ABaRoUYSUpt9oZ9GIFpESI9caPMa7PkS26kJbrog.png', NULL, '2024-02-19 15:49:16', '2024-02-19 15:49:16'),
(5, 'DIPLO GATE', 'projectimage/tYe64QIY6lv4P5ndkCXY2BZMh8NcwP1Ri0YKET9D.png', NULL, '2024-02-19 15:49:31', '2024-02-19 15:49:31'),
(6, 'BOO ISLANDS', 'projectimage/cj6fqowcRJhA0JDz1lQUDk3l4660LkGKUqBG7o9D.png', NULL, '2024-02-19 15:50:00', '2024-02-19 15:50:00'),
(7, 'HACIENDA BAY', 'projectimage/iQ6J7khUvnaLEiXXLqVOrj7NtFyH647U9azrPoXQ.png', NULL, '2024-02-19 15:50:14', '2024-02-19 15:50:14'),
(8, 'MARASSI', 'projectimage/5qxsjjt10zHSfmCVqyn49hfXfYvtw8y6aL4PRiAN.png', NULL, '2024-02-19 15:50:29', '2024-02-19 15:50:29'),
(9, 'EL KARMA', 'projectimage/SDEUOD7nJvDGdGLmDN1P7hqCJaPvgD5w5g7LkmP9.png', NULL, '2024-02-19 15:50:42', '2024-02-19 15:50:42'),
(10, 'STELLA HEIGHTS', 'projectimage/u8p2YyYW5k0ltIBnXeP0nvjZkwFsvGo3Gk8BAzEq.png', NULL, '2024-02-19 15:51:01', '2024-02-19 15:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Steel Production', 'Professional and technical staff and advanced processing and production eqipment, strict process inspection and factory inspection,', 'serviceimage/VfMs7pc0zp4U8VO7wUaiDXtseEvqlliHT4te0D19.png', '2024-02-19 15:47:19', '2024-02-19 15:47:19'),
(5, 'Billboard Poster Printing', 'Our finished outdoor billboard posters are printed using UV stable inks, which means they have far more contrast and impact than', 'serviceimage/1iJk0YeWAWCnTu2KHB7JBqlIZ65QSClK05Yzu2aF.png', '2024-02-19 15:47:43', '2024-02-19 15:47:43'),
(6, 'Fast Installation', 'TIn addition to our expertise, what sets us apart is our ability to deliver installations quickly. We value your time, and our efficient', 'serviceimage/IXaxTht6iLFfh2kZHkBqKHv2htSZCfX1TJMd4QsL.png', '2024-02-19 15:48:03', '2024-02-19 15:48:03'),
(7, '24/7 Service Support', 'Customer satisfaction is our first priority. To ensure that, we offer round-the-clock service support. Experienced and professional staff is', 'serviceimage/pJdw3ZglAB2lTJ59dzGvkMTWUNWAYbWXhDBPP8DP.png', '2024-02-19 15:48:20', '2024-02-19 15:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `member_name`, `member_image`, `member_role`, `member_facebook`, `member_twitter`, `member_linkedin`, `member_gmail`, `created_at`, `updated_at`) VALUES
(5, 'MOHAMED DARWISH', 'teamimage/ikrStPPezNkLNYa6PQcUgB6IBvB2yBrVjC8VC2V0.jpg', 'Co-Founder', 'www.google.com', 'www.google.com', 'www.google.com', 'www.google.com', '2024-02-19 16:11:38', '2024-02-19 16:11:38'),
(6, 'MOHAMED DARWISH', 'teamimage/uNE9aGewLar8qmnCLuhSokWRknflNRHFx4BH8kMb.png', 'CEO', 'www.google.com', 'www.google.com', 'www.google.com', 'www.google.com', '2024-02-19 18:16:36', '2024-02-19 18:16:36'),
(7, 'MOHAMED DARWISH', 'teamimage/SweayOwFn9qrwnA5J8ro2v35my9xBnmyhy2C1ela.png', 'Co-Founder', 'www.google.com', 'www.google.com', 'www.google.com', 'www.google.com', '2024-02-19 18:17:01', '2024-02-19 18:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'test', 'test@example.com', NULL, '$2y$12$mbKNtZyCRU9WOsDvT.nAOuexTJKNKkXkJ7srwoX3E1aJbOu3nIC2.', NULL, '2024-02-18 13:04:14', '2024-02-18 13:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
