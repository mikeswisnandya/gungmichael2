-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:02 AM
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
-- Database: `db_gungmichael2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image_path`, `users_id`, `created_at`, `updated_at`) VALUES
(4, 'Pantai Kelingking', 'Pantai Kelingking adalah salah satu pantai yang indah yang terletak di Pulau Nusa Penida, tempat yang sempurna untuk berjalan-jalan santai bersama teman atau keluarga. Seperti yang terlihat di gambar-gambar, tanahnya yang menjulang dan subur menjadikan Pulau Nusa Penida sebagai tempat yang menyenangkan untuk liburan santai.\r\n\r\nPantai Kelingking adalah salah satu destinasi wisata yang populer dan menarik di Pulau Nusa Penida. Banyak pengunjung datang untuk menikmati keindahannya, dan ini adalah salah satu alasan mengapa pemandangan Pulau Nusa Penida sangat memukau bagi wisatawan yang ingin menginap semalam di pulau ini.', 'blog/5hcwkMgb2yzrRQFbb9JMwkpZQuwswpz00ieJitwX.jpg', 1, '2024-01-21 08:20:09', '2024-01-21 09:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Photography', '2024-01-19 06:52:35', '2024-01-19 06:52:35'),
(2, 'Videography', '2024-01-19 06:53:41', '2024-01-19 06:53:41'),
(3, 'Graphic Design', '2024-01-19 06:53:49', '2024-01-19 06:53:49'),
(4, 'Motion Graphics', '2024-01-19 06:53:58', '2024-01-19 06:53:58'),
(5, 'Hardware Technician', '2024-01-19 06:54:08', '2024-01-19 06:54:08'),
(6, 'Campus Projects', '2024-01-19 06:54:15', '2024-01-19 06:54:15'),
(8, 'Website Development', '2024-01-19 07:43:51', '2024-01-19 07:43:51'),
(10, 'Cosplay Events', '2024-01-24 18:25:55', '2024-01-24 18:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_19_111444_create_projects_table', 2),
(7, '2024_01_19_111952_create_category_table', 3),
(8, '2024_01_19_143553_create_categories_table', 4),
(9, '2024_01_20_065200_create_blog_table', 5),
(11, '2024_01_21_155656_add_user_id_to_blogs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `video_source` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image_path`, `video_source`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Video Profile Fakultas Hukum dan Ilmu Sosial', NULL, 'portfolio/ZAyM0gTz6IetezJUf9eaFFw8Ir4dtxzgoPJJw68W.jpg', 'https://www.youtube.com/watch?v=xrruGWs5HNk&t=1s', 2, '2024-01-21 00:54:26', '2024-01-21 00:54:26'),
(8, 'Spanduk Visitasi AQAS Undiksha', 'Membuat 18 spanduk yang ditempatkan di beberapa titik pada Kampus Tengah Undiksha dalam rangka akreditasi internasional AQAS.', 'portfolio/suJiQMgZf5qKw0ZYtmXJu1OHRbGNQH1GBWI3MhND.jpg', '/', 3, '2024-01-24 07:31:03', '2024-01-24 07:31:03'),
(9, 'Video Profile S1 Pendidikan Teknik Informatika', 'Pembuatan 2 video profile S1 Pendidikan Teknik Informatika (Bahasa Indonesia dan Bahasa Inggris).', 'portfolio/4I3YEXMFydcWTwBxjBc7D2V4eqzzkmaFK1nZXmrH.png', 'https://www.youtube.com/watch?v=vAHPyN2ddnw&t=41s', 2, '2024-01-24 07:32:05', '2024-01-24 07:32:05'),
(10, 'Bismapati Productions', 'Produksi 6 seri Bincang Bersama PTI (Bismapati)', 'portfolio/Ysn7LJrfv0xtGhhEr59VoLwDHR1mOtZs2gLGiUuv.png', 'https://www.youtube.com/playlist?list=PL6PZBIekQVMtTyKaDTtIEbImmvphon6Cp', 2, '2024-01-24 07:33:04', '2024-01-24 07:33:04'),
(11, 'Talkshow Edukasi Covid-19', 'Produksi 12 seri talkshow edukasi covid-19 bersama tokoh-tokoh penting, bekerjasama dengan Balipuspanews.com', 'portfolio/oRyMo43KjJYsukSwvrWw0MDjmvQ2lDfkcwZlUL3o.png', 'https://www.youtube.com/playlist?list=PL-lm8ezwTkPnMvJSLjJdoxtOkBxV2M6ay', 2, '2024-01-24 07:35:24', '2024-01-24 07:35:24'),
(12, 'Motion Graphics Edukasi Covid-19', 'Produksi 90+ video motion graphic singkat untuk edukasi covid-19', 'portfolio/KqLUW8wvJbVkBaXUuxhz3bMMzZKi26M1VrveV6Zs.png', 'https://www.youtube.com/playlist?list=PL-lm8ezwTkPnKQxZSqRwUILNIYiE2RdNn', 4, '2024-01-24 07:36:22', '2024-01-24 07:36:22'),
(13, 'TenunKu - Web Programming Projects', 'Proyek Akhir UAS Pemrograman Website', 'portfolio/jHB4vuWhYozP590EfwaC93dERPKxFKmKMDjpaDEI.jpg', 'https://projects.gungmichael.my.id/tenunku', 6, '2024-01-24 18:27:55', '2024-01-24 18:27:55'),
(14, 'Kedaireka Matching Fund', 'Editing video laporan akhir Kedaireka Matching Fund', 'portfolio/36Rton4rd2w6432ReTRvIa9DmsiphZB1YYpMWqKV.jpg', 'https://www.youtube.com/watch?v=sPWMXZDnRVU', 2, '2024-01-24 18:28:49', '2024-01-24 18:28:49'),
(15, 'Pembuatan Media Ajar Video', 'Pembuatan media ajar video pembuatan brownies mahasiswa PVSK Undiksha', 'portfolio/PYGm6915C5ySHgAF8f3RWugDIR9Pvr5VIkCILSF6.jpg', '/', 2, '2024-01-24 18:29:39', '2024-01-24 18:29:39'),
(16, 'Video Profiles S2 Pendidikan Bahasa Inggris', 'Pembuatan video profiles S2 Pendidikan Bahasa Inggris', 'portfolio/nOlrdiWd0BsTWrrsSaKwqjLDsCOmNPmvyUThtrFw.jpg', '/', 2, '2024-01-24 18:30:30', '2024-01-24 18:30:30'),
(17, 'Video Profiles S2 Akuntansi', 'Pembuatan video profiles S2 Akuntansi', 'portfolio/KjjWAJNqzLz51t1zQ6r8v7wmjJXGNwhWmJz4tLqW.png', 'https://www.youtube.com/watch?v=pifGTqgyiV0', 2, '2024-01-24 18:31:06', '2024-01-24 18:31:06'),
(18, 'UAS Tata Kecantikan Prodi PKK 2023', 'Pembuatan video tata kecantikan prodi PKK Undiksha', 'portfolio/gpWNZd4Myj0RvbkFdKExnuQGNnm8FKgZw6wQISKE.jpg', '/', 2, '2024-01-24 18:31:55', '2024-01-24 18:31:55'),
(19, 'Waktu Infinity Berbincang Series (16-now)', 'Produksi serial waktu infinity berbincang (WIB) di HMJ TI Undiksha', 'portfolio/bHZ4TbrsREJAqGCpEZLiRA8DAGsK6UYprySC5VOg.jpg', 'https://www.youtube.com/watch?v=AyGu5LWC-QI', 2, '2024-01-24 18:32:58', '2024-01-24 18:32:58'),
(20, 'Advertisement - Arabian Styles', 'Pembuatan video iklan untuk fashion bertemakan arab', 'portfolio/6nd3M3TBqLHVvmX559Ri1UcZFxMox4TeBkhHAZE1.jpg', '/', 2, '2024-01-24 18:33:34', '2024-01-24 18:33:34'),
(21, 'Video Profiles S3 Pendidikan Bahasa Inggris', 'Pembuatan video profile S3 Pendidikan Bahasa Inggris', 'portfolio/W8Y5yfLWZgK37q06CvDGEEoOXYYjCZY4sbHDRBV2.png', 'https://www.facebook.com/100064113615553/videos/339916932187327', 2, '2024-01-24 18:40:30', '2024-01-24 18:40:30'),
(22, 'Video Profiles S2 Manajemen Lingkungan', 'Pembuatan video profiles S2 Manajemen', 'portfolio/JLGGYWodwxCMblFPAnxpwPv2lghNhXdXTpr4io3v.png', '/', 2, '2024-01-24 18:44:08', '2024-01-24 18:44:08'),
(23, 'Sky of Justice - Kabar Undiksha x Mike Potret', 'Foto konser Sky of Justice di Etimology #2', 'portfolio/muWYKJEiPpBjJOYH3PugGs7PfXkQ0uTLxduCwHac.png', 'https://www.instagram.com/p/C2H_I2rRMQA/?img_index=1', 1, '2024-01-24 18:50:19', '2024-01-24 18:50:19'),
(24, 'Sound of A Mirror - Kabar Undiksha x Mike Potret', 'Foto konser Sound of A Mirror di Etimology #2', 'portfolio/uRtVZXc6i3mgmnf7VX43ZBUKde3qAyR5KuUBAjLG.png', 'https://www.instagram.com/p/C2IEC7aRjkb/?img_index=1', 1, '2024-01-24 18:52:02', '2024-01-24 18:52:02'),
(25, 'Feby Putri - Kabar Undiksha x Mike Potret', 'Foto konser Feby Putri di Etimology #2', 'portfolio/lFse2VRZR5R74nULXnCAXP0phn3klTdcULMbLm7W.png', 'https://www.instagram.com/p/C2IHIKGRbTT/?img_index=1', 1, '2024-01-24 18:52:46', '2024-01-24 18:52:46'),
(26, 'Geisha - Kabar Undiksha x Mike Potret', 'Foto grup band Geisha di Etimology #2', 'portfolio/yBNtDVE5qMjbnluG2aWfAGZ5wukQG4dSWhY8sp1p.png', 'https://www.instagram.com/p/C2KyWXDxp2_/?img_index=1', 1, '2024-01-24 18:53:24', '2024-01-24 18:53:24'),
(27, 'Video Profiles S2 Pendidikan IPA', 'Pembuatan video profile S2 Pendidikan Ilmu Pengetahuan Alam', 'portfolio/lR24cfWzr85XanmGOee9ElfeydKw9hJ5Ho6jh422.png', '/', 2, '2024-01-24 18:54:55', '2024-01-24 18:54:55'),
(28, 'Fight the Questions', 'Final projects for Object Oriented Programming, making with Greenfoot', 'portfolio/oXiDuTDKDWE3HR4G8ltioqkou2g9KvYmR6U9SgWz.jpg', '/', 6, '2024-01-24 18:57:08', '2024-01-24 18:57:08'),
(29, 'Michael Swisnandya Personal Website', 'making my personal website using laravel framework with bootstrap, node.js, adminlte, and react and many more plugins', 'portfolio/GcOetle9vyhL4bGxPwjAq4MucR1G5FxR50h6cEvc.png', '/', 8, '2024-01-24 18:58:57', '2024-01-24 18:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agung Michael Swisnandya', 'info@gungmichael.my.id', NULL, '$2y$12$x5ln92BtCZZQf9S1mRD8X.LPEV3MwFhEhJCAh4HhXhXR39VHPeTu6', NULL, '2024-01-18 21:36:05', '2024-01-21 22:22:03'),
(2, 'Mike Studios', 'admin@gungmichael.my.id', NULL, '$2y$12$eeYdSST60.uj1IL5K2v2UOtx8cLoyiXcXfd4xJ2W7Anvi0O/LL3km', NULL, '2024-01-21 22:17:25', '2024-01-21 22:17:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usersid` (`users_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_usersid` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
