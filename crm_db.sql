-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 06:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `age`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clement Wuckert', 'howard.weissnat@example.net', 77, 1178919184, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(2, 'Maudie Kub V', 'conroy.edison@example.com', 91, 1137477063, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(3, 'Victoria Grady', 'renner.wava@example.net', 22, 1160918289, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(4, 'Ms. Kaitlyn Cremin DDS', 'rau.makenzie@example.com', 31, 1124983656, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(5, 'Kaylee Watsica', 'rosalee27@example.net', 24, 1164292668, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(6, 'Kiley Smitham', 'shyann.terry@example.org', 94, 1134629237, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(7, 'Emilie Dickens', 'jefferey.zieme@example.net', 65, 1167548583, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(8, 'Chesley Hansen V', 'imante@example.net', 99, 1164661859, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(9, 'Graham Adams DDS', 'deckow.neil@example.org', 76, 1101624550, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(10, 'Glenda Stanton DVM', 'cfranecki@example.net', 89, 1142633737, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(11, 'Dr. Dino Larkin', 'tara99@example.net', 84, 1102241942, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(12, 'Laisha Hane', 'bartell.raegan@example.net', 98, 1172096831, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(13, 'Ms. Michele Lesch', 'klein.kristy@example.com', 48, 1120439147, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(14, 'Florine Murray', 'pstehr@example.net', 39, 1113835661, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(15, 'William Mraz', 'stan.homenick@example.com', 62, 1143198059, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(16, 'Jaylon Beer', 'hildegard.ondricka@example.org', 29, 1181882724, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(17, 'Yvette Effertz', 'weissnat.eddie@example.com', 23, 1144693484, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(18, 'Tremayne Rutherford DVM', 'kub.vince@example.com', 68, 1114294446, 0, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(19, 'Monica Rippin PhD', 'giles.crist@example.org', 94, 1188354092, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(20, 'Karlie Boyle', 'osinski.aracely@example.org', 79, 1132352826, 1, '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(21, 'Lenore Smitham', 'beatty.brionna@example.net', 77, 1129222192, 0, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(22, 'Zander Denesik', 'nolan.edythe@example.com', 75, 1191732062, 0, '2024-03-24 20:01:13', '2024-03-24 20:04:53'),
(23, 'Katlynn Schiller', 'gabriel.rempel@example.org', 20, 1180027081, 0, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(24, 'Dr. Zita Lueilwitz Jr.', 'robel.rickie@example.net', 46, 1134409001, 1, '2024-03-24 20:01:13', '2024-03-24 20:10:59'),
(25, 'Eunice Harber', 'arno84@example.com', 49, 1119723145, 0, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(26, 'Sidney Dietrich', 'adolphus18@example.org', 66, 1181661103, 1, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(27, 'Jeff Krajcik II', 'effie.bahringer@example.com', 38, 1166233077, 0, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(28, 'Mallory Larson', 'jayme.lowe@example.com', 47, 1131159645, 0, '2024-03-24 20:01:13', '2024-03-24 20:01:13'),
(29, 'carlos riveros', 'carlosriveros1998@gmail.com', 25, 1131759714, 1, '2024-03-24 20:01:38', '2024-03-24 20:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `client_user`
--

CREATE TABLE `client_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`id`, `user_id`, `client_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 3, 18),
(19, 3, 19),
(20, 3, 20),
(21, 3, 21),
(22, 4, 22),
(23, 4, 23),
(24, 4, 24),
(25, 4, 25),
(26, 4, 26),
(27, 4, 27),
(28, 4, 28),
(29, 4, 29),
(30, 4, 30);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_03_21_203228_create_clients_table', 1),
(4, '2024_03_22_184707_client_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Felipa Kohler', 'bogisich.raul@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aoQTLDZevx', '2024-03-24 20:01:11', '2024-03-24 20:01:11'),
(2, 'Mr. Eldon Hickle MD', 'schumm.lucious@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iJhCENtDBk', '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(3, 'Mr. Walker D\'Amore DVM', 'rgulgowski@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rVDXLnEX28', '2024-03-24 20:01:12', '2024-03-24 20:01:12'),
(4, 'admin', 'admin@prueba.com', '$2y$10$KcxUTr.Bb2m8uYvie9lSpOUiq9e9grxwAGwLGwSt1f89Ts7m0jo9K', '87tjg0zYHXFcN5emIVZNM0ip0ITpYYsBm77RWCrHKV419qrk88nwKCGcNKua', '2024-03-24 20:01:13', '2024-03-24 20:02:11'),
(5, 'carlos riveros', 'carlosriveros1998@gmail.com', '$2y$10$j.VeLLM1dl4bueDOQ2zxIuUZeylS4Xybq1CuF1fNiGA8zSaOK3h92', 'XSoUrqjx2Y', '2024-03-24 20:11:41', '2024-03-24 20:11:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_user`
--
ALTER TABLE `client_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `client_user`
--
ALTER TABLE `client_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
