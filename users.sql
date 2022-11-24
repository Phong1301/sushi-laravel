-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_expire` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `token_expire`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Viết Phong', 'phuc@gmail.com', '$2y$10$pxU7nrL9TDcl.YSDeHGa/OroW3Q/c8oL8hQNGCEJ3oRQQkxxsB5oq', NULL, NULL, '2022-11-22 01:10:39', '2022-11-22 01:10:39'),
(2, 'Linh', 'chuheobd13@gmail.com', '$2y$10$9ilGQNafhJ6gtaa47mr2heCtX1f2Q7zRFZ6xdgsEQPH2glDLoILUu', NULL, NULL, '2022-11-22 02:06:08', '2022-11-22 02:06:08'),
(3, 'Tùng', 'tung@gmail.com', '$2y$10$9VKW/F9W6tN1WkpqaIkTcOINgYybEUPSA.ZgUByFrTpK/xZcqAfza', NULL, NULL, '2022-11-22 21:22:47', '2022-11-22 21:22:47'),
(4, 'Tùng', 'tung1@gmail.com', '$2y$10$GfhH4SF/W43ko23hC0Kc1.VPFffORrK3tvz2WVzen/s2FFvrXWrDy', NULL, NULL, '2022-11-22 21:23:47', '2022-11-22 21:23:47'),
(5, 'Khải', 'khai1@gmail.com', '$2y$10$fKYvwCIsHnL5WSw/9j4g5OjnXI6dgFAqtV.p8M/QsV7RxugedhARe', NULL, NULL, '2022-11-22 21:24:10', '2022-11-22 21:24:10'),
(6, 'a', 'a@gmail.com', '$2y$10$EhqSYwbys9MzRMDOzn/fs.IW5RXJlIjRF4NBNIySxky222zUW6Xj.', NULL, NULL, '2022-11-22 21:26:36', '2022-11-22 21:26:36'),
(7, 'b', 'b@gmail.com', '$2y$10$j8gY/XyyrjlpI8h6ME1uFOFUTk.aigixTofIGg8d75JpP4Oa87Am2', NULL, NULL, '2022-11-22 21:56:40', '2022-11-22 21:56:40'),
(8, 'b', 'c@gmail.com', '$2y$10$FzBEheqiJeJbS.0qoYzDh.Ytva0gEO1aNiLaIrmRra.W98t165u4W', NULL, NULL, '2022-11-22 21:57:21', '2022-11-22 21:57:21'),
(9, 'Việt', 'viet@gmail.com', '$2y$10$0P9c4phAL3yDxIiHCiHObuPgFYqpk4/24lS43j8ER9i.DrLnAtVdS', NULL, NULL, '2022-11-23 01:51:15', '2022-11-23 01:51:15'),
(10, 'p', 'p@gmail.com', '$2y$10$hPVGslYIiBi49A9nXp2tre0.SRH273GE/jD6jUHJ.H/WNeXhI7M.6', NULL, NULL, '2022-11-23 03:05:22', '2022-11-23 03:05:22'),
(11, 'm', 'm@gmail.com', '$2y$10$sqbOoqpltR6otu67K2f9j.y9zyzreCNQCaRpP6r2..jcZexWDKZVe', NULL, NULL, '2022-11-23 17:56:06', '2022-11-23 17:56:06');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
