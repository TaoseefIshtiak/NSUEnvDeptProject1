-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmersdatalogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `mashik_bey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mashik_ay` text COLLATE utf8mb4_unicode_ci,
  `krishijomi_ache_kina` text COLLATE utf8mb4_unicode_ci,
  `krishijomi_promian` text COLLATE utf8mb4_unicode_ci,
  `krishijomi_promian_unit` text COLLATE utf8mb4_unicode_ci,
  `boshot_bhitar_dhoron` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gobadi_poshu_songkha_hash` text COLLATE utf8mb4_unicode_ci,
  `gobadi_poshu_songkha_murgi` text COLLATE utf8mb4_unicode_ci,
  `gobadi_poshu_songkha_goru` text COLLATE utf8mb4_unicode_ci,
  `gobadi_poshu_songkha_chagol` text COLLATE utf8mb4_unicode_ci,
  `pukure_mach_chash_kore_kina` text COLLATE utf8mb4_unicode_ci,
  `mach_theke_bochore_koto_ay_kore` text COLLATE utf8mb4_unicode_ci,
  `boshot_bari_khoy_khoti_yesorno` text COLLATE utf8mb4_unicode_ci,
  `boshot_bari_khoy_khotir_dhoron` text COLLATE utf8mb4_unicode_ci,
  `boshot_bari_khoy_khotir_poriman` text COLLATE utf8mb4_unicode_ci,
  `krishi_jomir_khoti_hoyeche_kina` text COLLATE utf8mb4_unicode_ci,
  `krishi_jomir_ki_dhoroner_khoti` text COLLATE utf8mb4_unicode_ci,
  `krishi_jomir_ki_poriman_khoti_takay` text COLLATE utf8mb4_unicode_ci,
  `fosholer_khoti` text COLLATE utf8mb4_unicode_ci,
  `fosholer_khotir_poriman_takay` text COLLATE utf8mb4_unicode_ci,
  `pukure_macher_khoti` text COLLATE utf8mb4_unicode_ci,
  `pukure_macher_khotir_poriman_takay` text COLLATE utf8mb4_unicode_ci,
  `onnanno_khotir_dhoron` text COLLATE utf8mb4_unicode_ci,
  `onnanno_khotir_poriman_takay` text COLLATE utf8mb4_unicode_ci,
  `prottashito_shohayota` text COLLATE utf8mb4_unicode_ci,
  `arthik_koto_taka` text COLLATE utf8mb4_unicode_ci,
  `shohayotar_dhoron` text COLLATE utf8mb4_unicode_ci,
  `kar_kach_theke_asha_koren` int(11) DEFAULT NULL,
  `onnanno_ki_dhoroner_shoyayota` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chashir_dhoron` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `mashik_bey`, `mashik_ay`, `krishijomi_ache_kina`, `krishijomi_promian`, `krishijomi_promian_unit`, `boshot_bhitar_dhoron`, `gobadi_poshu_songkha_hash`, `gobadi_poshu_songkha_murgi`, `gobadi_poshu_songkha_goru`, `gobadi_poshu_songkha_chagol`, `pukure_mach_chash_kore_kina`, `mach_theke_bochore_koto_ay_kore`, `boshot_bari_khoy_khoti_yesorno`, `boshot_bari_khoy_khotir_dhoron`, `boshot_bari_khoy_khotir_poriman`, `krishi_jomir_khoti_hoyeche_kina`, `krishi_jomir_ki_dhoroner_khoti`, `krishi_jomir_ki_poriman_khoti_takay`, `fosholer_khoti`, `fosholer_khotir_poriman_takay`, `pukure_macher_khoti`, `pukure_macher_khotir_poriman_takay`, `onnanno_khotir_dhoron`, `onnanno_khotir_poriman_takay`, `prottashito_shohayota`, `arthik_koto_taka`, `shohayotar_dhoron`, `kar_kach_theke_asha_koren`, `onnanno_ki_dhoroner_shoyayota`, `created_at`, `updated_at`, `chashir_dhoron`) VALUES
(1, '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, '10000', NULL, 'হ্যাঁ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-11 14:51:30', '2019-05-11 14:51:30', NULL),
(3, '10001', NULL, 'হ্যাঁ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 03:40:30', '2019-05-14 03:40:30', NULL),
(4, '10001', NULL, 'হ্যাঁ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 03:43:22', '2019-05-14 03:43:22', NULL),
(5, '1000', NULL, 'না', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 03:51:03', '2019-05-14 03:51:03', NULL),
(6, '100000', NULL, 'হ্যা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 03:57:55', '2019-05-14 03:57:55', NULL),
(7, '10001', NULL, 'a', 'a', 'a', NULL, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', NULL, 'a', 'a', 0, 0, '2019-05-14 04:04:57', '2019-05-14 04:04:57', NULL),
(8, '678', NULL, 'না', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 05:28:21', '2019-05-14 05:28:21', NULL),
(9, '100', '100', 'না', '100', 'বিঘা', 'আধাপাকা', '10', '100', '100', '100', 'হ্যা', '100', 'হ্যা', NULL, '100', 'হ্যা', NULL, '100', 'হ্যা', '100', 'হ্যা', '100', '100', '100', NULL, '100', 'ঋণ', 0, 0, '2019-05-14 16:11:59', '2019-05-14 16:11:59', NULL),
(10, '101', '100', 'হ্যা', '100', 'বিঘা', 'আধাপাকা', '5', '100', '100', '100', 'হ্যা', '100', 'হ্যা', NULL, '100', 'হ্যা', NULL, '100', 'হ্যা', '100', 'হ্যা', '100', '100', '100', NULL, '101', 'ঋণ', 0, 0, '2019-05-14 16:55:50', '2019-05-14 16:55:50', NULL),
(11, '12', '12', '12', '12', '12', '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 12, NULL, NULL, NULL),
(12, '12', '12', '12', '12', '12', '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 12, NULL, NULL, NULL),
(13, '5865', '9599', 'হ্যা', '7997', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5865', NULL, NULL, NULL, '2019-10-06 07:16:48', '2019-10-06 07:16:48', NULL),
(14, '11', '45', 'হ্যা', '258', NULL, NULL, '2', '3', '4', '5', NULL, '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vvs', '980', NULL, '11', NULL, NULL, NULL, '2019-10-08 20:48:05', '2019-10-08 20:48:05', NULL),
(15, '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 10, 10, '0000-00-00 00:00:00', NULL, 'বড় চাষী'),
(16, '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', '20', 20, 20, NULL, NULL, 'মাঝারি চাষী'),
(17, '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', 30, 30, NULL, NULL, 'ছোট চাষী'),
(18, '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', '40', 40, 40, NULL, NULL, 'বর্গাচাষী'),
(19, '11', '45', 'হ্যা', '258', NULL, NULL, '2', '3', '4', '5', NULL, '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vvs', '980', NULL, '11', NULL, NULL, NULL, '2019-10-09 00:06:36', '2019-10-09 00:06:36', NULL),
(20, '128', '5888', 'হ্যা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '128', NULL, NULL, NULL, '2019-10-09 02:02:30', '2019-10-09 02:02:30', NULL),
(21, '388585', '88085', 'হ্যা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '388585', NULL, NULL, NULL, '2019-10-16 22:51:36', '2019-10-16 22:51:36', NULL),
(22, '50000', '88085', 'হ্যা', NULL, NULL, NULL, '66', NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', NULL, '5585', 'h', '9999', NULL, '50000', NULL, NULL, NULL, '2019-10-16 23:16:00', '2019-10-16 23:16:00', NULL),
(23, NULL, NULL, 'হ্যা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-19 14:19:53', '2019-10-19 14:19:53', NULL),
(24, NULL, NULL, 'হ্যা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-19 21:28:57', '2019-10-19 21:28:57', NULL);

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
(1, '2019_05_09_093603_create_articles_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
