-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 02:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'PUBG', 1, '2021-10-22 09:29:32', '2021-10-22 09:29:32'),
(2, 'CHESS', 1, '2021-10-22 09:29:32', '2021-10-22 09:29:32');

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
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `followed_customer_id` int(11) NOT NULL,
  `is_accept` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`follower_id`, `customer_id`, `followed_customer_id`, `is_accept`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2021-09-23 06:08:00', '2021-09-23 06:08:00'),
(4, 1, 3, 1, '2021-09-23 06:23:21', '2021-09-23 06:23:21'),
(5, 1, 4, 1, '2021-09-23 06:31:38', '2021-09-23 06:31:38'),
(6, 1, 5, 1, '2021-09-23 06:48:08', '2021-09-23 06:48:08'),
(7, 17, 4, 0, '2021-10-19 23:36:30', '2021-10-19 23:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE `followings` (
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `following_customer_id` int(11) NOT NULL,
  `is_accept` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`following_id`, `customer_id`, `following_customer_id`, `is_accept`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, '2021-09-23 06:50:17', '2021-09-23 06:50:17'),
(2, 1, 2, 1, '2021-09-23 06:51:33', '2021-09-23 06:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(10, '2021_09_16_055235_create_sessions_table', 2),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(12, '2021_03_30_203216_create_products_table', 4),
(13, '2021_09_21_120509_create_posts_table', 5),
(14, '2021_09_21_121959_create_post_types_table', 6),
(15, '2021_09_22_045329_create_post_images_table', 7),
(16, '2021_09_22_051517_create_post_videos_table', 8),
(17, '2021_09_23_103058_create_followers_table', 9),
(18, '2021_09_23_103255_create_following_table', 10),
(19, '2021_09_23_104540_create_following_table', 11),
(20, '2021_09_24_054656_create_post_like_table', 12),
(21, '2021_09_24_102553_create_post_comments_table', 13),
(22, '2021_09_24_113711_create_post_comment_reply_table', 14),
(23, '2021_09_25_061705_create_post_comment_like', 15),
(24, '2021_09_27_050609_create_post_messages_table', 16),
(25, '2021_10_21_062052_create_jobs_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('013a923a1db5cf3597b3a930ecd6eb89109a2c9ab2758286e3b24b17a6c98d2e0a6b18722ebbe9a4', 1, 1, 'MyApp', '[]', 0, '2021-09-15 00:57:18', '2021-09-15 00:57:18', '2022-09-15 06:27:18'),
('1850759d1d5bda391d122570951733b6e4fc9ff3c2104b02d6d8900c9e2412e38565050e20fabac8', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:16:09', '2021-09-15 01:16:09', '2022-09-15 06:46:09'),
('225d4d2c26c2c6370210e0cfe4e3d50f17f7e8199e0d6cc993d94fe93c135a4ac4035283948a9591', 1, 1, 'MyApp', '[]', 0, '2021-09-15 04:06:43', '2021-09-15 04:06:43', '2022-09-15 09:36:43'),
('3ba46dd00d02ae7f16f1154884c6fb63b4f552f0c2067da02534379198cf1ed4269c373ce3319806', 1, 1, 'MyApp', '[]', 0, '2021-09-15 06:24:42', '2021-09-15 06:24:42', '2022-09-15 11:54:42'),
('3bf7d02c71ad685713827ddc55939a92efdf750afac052afa3f0cd2993898d257322d9d373653048', 3, 1, 'MyApp', '[]', 0, '2021-09-15 05:27:09', '2021-09-15 05:27:09', '2022-09-15 10:57:09'),
('50404c5288cc9758a2c57922e73871fb90bc253c497a891e0fc42125b5664684aa74f7bac03e1705', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:19:24', '2021-09-15 01:19:24', '2022-09-15 06:49:24'),
('533b4fa1f86642deff1b72ee7f8efd0120b44d5da54ccf780be2ba9d572c3cd6bff7728cf1bbacf1', 5, 1, 'MyApp', '[]', 0, '2021-09-15 08:06:04', '2021-09-15 08:06:04', '2022-09-15 13:36:04'),
('6b56e8816fe737f0f0f3d262627f578bcc7101314d47a477303884362af0a0700e64cd518f2d4968', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:11:35', '2021-09-15 01:11:35', '2022-09-15 06:41:35'),
('8ea9eabce1f80a4aee7f891eb5b929d8662c123b9d499fe8a2b8e06c425576a1745faff183afb3c8', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:00:09', '2021-09-15 01:00:09', '2022-09-15 06:30:09'),
('b1da514ac4a09f8d5e1069c52bfd0ae46e7af7433a7d7a96d03371eb0a65502db08db9b3fec4b90c', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:06:24', '2021-09-15 01:06:24', '2022-09-15 06:36:24'),
('b6cc60ae6cf9eb95d849f5ee05fc61de1e017bd3bc38eb3be73fa751fac3e7a8aa510b3b8ce4e175', 1, 1, 'MyApp', '[]', 0, '2021-09-15 07:22:24', '2021-09-15 07:22:24', '2022-09-15 12:52:24'),
('c16c5e08650a074b8fb67690ff1d323b818f5e88aacc64b05c18de435d2ffd3253f5058ac2944582', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:11:22', '2021-09-15 01:11:22', '2022-09-15 06:41:22'),
('cdd94fd32559593dd52346f15454bd44d5c36cfc26aac2afe687e041d8ec0165269c31eec4ce0396', 6, 1, 'MyApp', '[]', 0, '2021-09-15 08:09:25', '2021-09-15 08:09:25', '2022-09-15 13:39:25'),
('e1a0c91fefc2726df441f90e8046c7762150b6a98d21b1b159e7d16045a79782317c2378656857f0', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:17:53', '2021-09-15 01:17:53', '2022-09-15 06:47:53'),
('e3e2b9e590a7b9abe6b10252f5ac0e43bf7356f90a874911d9f4c28ce4ebd59794a4ddec6a0a61fb', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:07:20', '2021-09-15 01:07:20', '2022-09-15 06:37:20'),
('eceb2817dd070e92ca9b7f56913d866318c83e16ff46f96f599a4b87b2805cf1187a889784c55aa7', 1, 1, 'MyApp', '[]', 0, '2021-09-15 06:24:59', '2021-09-15 06:24:59', '2022-09-15 11:54:59'),
('f1d7d4db7643786fb615814ec5b38fba2bce24083b102966d0067f0f6f3c0078c0ec3673502efcab', 1, 1, 'MyApp', '[]', 0, '2021-09-15 01:12:19', '2021-09-15 01:12:19', '2022-09-15 06:42:19'),
('f1ea2d3fb5a0238ae7811a248c674f1cf4ac3428c9607e9305fa6ffbde7ff0c668e47a7e54bc21af', 1, 1, 'MyApp', '[]', 0, '2021-09-15 05:26:50', '2021-09-15 05:26:50', '2022-09-15 10:56:50'),
('fa6bbe2be8409798dab14b5141de7f3cebd49a18fd396abbaf024221f5ccbf6f7928cdbb9bd87dc3', 4, 1, 'MyApp', '[]', 0, '2021-09-15 08:03:57', '2021-09-15 08:03:57', '2022-09-15 13:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'ySp6JHAA5PRcrl6U6RzCmfWLBbC0kINLVpQ5j2Rb', NULL, 'http://localhost', 1, 0, 0, '2021-09-15 00:48:33', '2021-09-15 00:48:33'),
(2, NULL, 'Laravel Password Grant Client', 'PGs24rfKJBbbgcKFdmsp5tZBKA4ZRixISUzvsk9V', 'users', 'http://localhost', 0, 1, 0, '2021-09-15 00:48:33', '2021-09-15 00:48:33'),
(3, NULL, 'Laravel Personal Access Client', 'Wtyb0wa0HVwnJeZNCqjXXuq6hHK4cE9hkqLgkuD7', NULL, 'http://localhost', 1, 0, 0, '2021-09-16 05:20:18', '2021-09-16 05:20:18'),
(4, NULL, 'Laravel Password Grant Client', 'SI8J6FpOtEBJFIxV9Jei2g4gaEpNXN92rerlBCMK', 'users', 'http://localhost', 0, 1, 0, '2021-09-16 05:20:18', '2021-09-16 05:20:18'),
(5, NULL, 'Laravel Personal Access Client', 'ozLAnnTzHTy1hdgAY8QOTB52B7cstWJ4DTsbqQg9', NULL, 'http://localhost', 1, 0, 0, '2021-09-16 05:58:28', '2021-09-16 05:58:28'),
(6, NULL, 'Laravel Password Grant Client', 'NeFVuMZoyUUQ8fGoQU6dzK4OhqR3A5CDYXA0QhlH', 'users', 'http://localhost', 0, 1, 0, '2021-09-16 05:58:28', '2021-09-16 05:58:28'),
(7, NULL, 'Laravel Personal Access Client', 'OV4bwLPBGxqILEZ4ajf1vfLAO9pM78952pj3aVCv', NULL, 'http://localhost', 1, 0, 0, '2021-09-16 06:12:43', '2021-09-16 06:12:43'),
(8, NULL, 'Laravel Password Grant Client', 'JlRCDWtIWnqlLgu5K3r6ZYInP7R59ZbFAR9YEXT8', 'users', 'http://localhost', 0, 1, 0, '2021-09-16 06:12:43', '2021-09-16 06:12:43'),
(9, NULL, 'Laravel Personal Access Client', 'k3Q9hhetNfndOk08j4PaaBluyI3yWyRYAdIiPLiA', NULL, 'http://localhost', 1, 0, 0, '2021-09-16 07:39:57', '2021-09-16 07:39:57'),
(10, NULL, 'Laravel Password Grant Client', 'XWrFKAwDMLb4NHzCyEegV8TuZn678EMURoIQ5rwZ', 'users', 'http://localhost', 0, 1, 0, '2021-09-16 07:39:57', '2021-09-16 07:39:57'),
(11, NULL, 'Laravel Personal Access Client', 'o5WS0HnOeLqn6Z8M6BXQDpgn8VHQ2eShMq0uaMWc', NULL, 'http://localhost', 1, 0, 0, '2021-09-16 07:40:05', '2021-09-16 07:40:05'),
(12, NULL, 'Laravel Password Grant Client', 'y95keusNVQkTAFmgRbUTtGixOCwRJTxpmniJXEdI', 'users', 'http://localhost', 0, 1, 0, '2021-09-16 07:40:05', '2021-09-16 07:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-15 00:48:33', '2021-09-15 00:48:33'),
(2, 3, '2021-09-16 05:20:18', '2021-09-16 05:20:18'),
(3, 5, '2021-09-16 05:58:28', '2021-09-16 05:58:28'),
(4, 7, '2021-09-16 06:12:43', '2021-09-16 06:12:43'),
(5, 9, '2021-09-16 07:39:57', '2021-09-16 07:39:57'),
(6, 11, '2021-09-16 07:40:05', '2021-09-16 07:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', '16c11eaf882585e0e6f9726277659f79b4de951b6f2f707b5c5ed8d32b4b4f2b', '[\"*\"]', NULL, '2021-09-16 05:08:05', '2021-09-16 05:08:05'),
(2, 'App\\Models\\User', 1, 'MyApp', '0351c6766564f3339aee06759153f9a030435de4b8712252f534f2ec446441a3', '[\"*\"]', NULL, '2021-09-16 05:10:52', '2021-09-16 05:10:52'),
(3, 'App\\Models\\User', 1, 'MyApp', '7cee7b235f5e72e80af62cb183ddd49309f3acb01e7c35bb87667817e451547b', '[\"*\"]', NULL, '2021-09-16 05:20:58', '2021-09-16 05:20:58'),
(4, 'App\\Models\\User', 1, 'MyApp', '2e03d33f1726d0f4772100229c001cd08da2feb4701c8cbd67332337165b10a4', '[\"*\"]', NULL, '2021-09-16 05:21:00', '2021-09-16 05:21:00'),
(5, 'App\\Models\\User', 1, 'MyApp', 'de6e4674425349f143d71489dfddb9c8a703da7405a02ef154ce775bf710bedd', '[\"*\"]', NULL, '2021-09-16 05:21:01', '2021-09-16 05:21:01'),
(6, 'App\\Models\\User', 15, 'MyApp', 'dd7c1f00889c20431a04813f0d141743fdfe77954b385ed5dc291fb2031b11dd', '[\"*\"]', NULL, '2021-09-16 05:21:28', '2021-09-16 05:21:28'),
(7, 'App\\Models\\User', 1, 'MyApp', '288e5487faf412d2e4967fe3c2516f6873151b0ef97d55d738cac4593c777f17', '[\"*\"]', NULL, '2021-09-16 05:22:06', '2021-09-16 05:22:06'),
(8, 'App\\Models\\User', 1, 'MyApp', 'd931867af7beb6aedc2ec02f4b4376e5a05ec678e20c02cf688961fbf85b6c8e', '[\"*\"]', NULL, '2021-09-16 05:51:38', '2021-09-16 05:51:38'),
(9, 'App\\Models\\User', 1, 'MyApp', '6c6e532450d8aac16b78b1608005fabb9cdd1a46fd018b48fae88fe7b582ba38', '[\"*\"]', NULL, '2021-09-16 05:53:58', '2021-09-16 05:53:58'),
(10, 'App\\Models\\User', 1, 'MyApp', 'dd886c98296b718dbc708dbddbbfe1e8f14490622fa2276a04430684df5e5b05', '[\"*\"]', NULL, '2021-09-16 05:54:38', '2021-09-16 05:54:38'),
(11, 'App\\Models\\User', 1, 'MyApp', '09c673e1239ae65c1be624c2b8f5c31cebeee48b9c4a64df5c36395be82a7272', '[\"*\"]', NULL, '2021-09-16 05:55:55', '2021-09-16 05:55:55'),
(12, 'App\\Models\\User', 1, 'MyApp', 'f1c367281b4351ac3a4194aa79fceb0014c36d1ab1becb896b551956b0790686', '[\"*\"]', NULL, '2021-09-16 05:56:28', '2021-09-16 05:56:28'),
(13, 'App\\Models\\User', 1, 'MyApp', '29a6e726ab491ee60597a44cb241536685bdbb74bbc3c40ae0bc1ea6363718d6', '[\"*\"]', NULL, '2021-09-16 05:56:28', '2021-09-16 05:56:28'),
(14, 'App\\Models\\User', 1, 'MyApp', 'faa68678da34efa6751dcbcb7007af4412949cbc88747d1b48e04d79f1777189', '[\"*\"]', NULL, '2021-09-16 06:00:26', '2021-09-16 06:00:26'),
(15, 'App\\Models\\User', 1, 'MyApp', 'aacdd3c23a29999303edddd617372fe830f36daf66d1e02ccef4164d75e95ee9', '[\"*\"]', NULL, '2021-09-16 06:02:28', '2021-09-16 06:02:28'),
(16, 'App\\Models\\User', 1, 'MyApp', '292aa74c22874e65436fa3811afa3ad77302fee0be806f05ce921b7e09bb5107', '[\"*\"]', NULL, '2021-09-16 06:03:24', '2021-09-16 06:03:24'),
(17, 'App\\Models\\User', 1, 'MyApp', '800513a076e8fc7a02ea234466d5b9918bb64c96493eb07ffe0a47a26b30cdd8', '[\"*\"]', NULL, '2021-09-16 06:03:26', '2021-09-16 06:03:26'),
(18, 'App\\Models\\User', 1, 'MyApp', 'e398377eef59b9f66e17846f2c1921ec63d582f334ac6dc299af667c9a95372d', '[\"*\"]', NULL, '2021-09-16 06:05:45', '2021-09-16 06:05:45'),
(19, 'App\\Models\\User', 1, 'MyApp', 'a64634a72665530223cfea48c64fe676e4588ed9d6c09b1122a7dbcd08665b06', '[\"*\"]', NULL, '2021-09-16 06:06:32', '2021-09-16 06:06:32'),
(20, 'App\\Models\\User', 1, 'MyApp', 'bcac66bfec2514a325d00dbb712f130bfffeb9d88cf882160efb7fb64296eed0', '[\"*\"]', NULL, '2021-09-16 06:07:25', '2021-09-16 06:07:25'),
(21, 'App\\Models\\User', 1, 'MyApp', 'e1ea797254691e9af1d47eeaa2f116c79b1e5bc4645464301a9e76c4def047bf', '[\"*\"]', NULL, '2021-09-16 06:07:40', '2021-09-16 06:07:40'),
(22, 'App\\Models\\User', 1, 'MyApp', '4e9a605a513bab53050f09e44fd5974ef8e9aa8d61c50587efd596c7acbeea25', '[\"*\"]', NULL, '2021-09-16 06:12:01', '2021-09-16 06:12:01'),
(23, 'App\\Models\\User', 1, 'MyApp', '6678306efe323964a8af0c502e9ad6d40fd309bd8608189e58a86a08adb16a1f', '[\"*\"]', NULL, '2021-09-16 06:16:47', '2021-09-16 06:16:47'),
(24, 'App\\Models\\User', 1, 'MyApp', 'b5bfadda5ea966f73e9ece0a6c8eecfd08c6ca96962778c81392578dea096507', '[\"*\"]', NULL, '2021-09-16 06:17:50', '2021-09-16 06:17:50'),
(25, 'App\\Models\\User', 1, 'MyApp', '142174728ec34f1370abe9219a16105653715b4c816a02126d55a300964891ba', '[\"*\"]', NULL, '2021-09-16 06:18:16', '2021-09-16 06:18:16'),
(26, 'App\\Models\\User', 1, 'MyApp', '367df2b20a359974db4a7db297f6a6310212a683d071c6e3c7ab09f1704dde22', '[\"*\"]', NULL, '2021-09-16 06:18:27', '2021-09-16 06:18:27'),
(27, 'App\\Models\\User', 1, 'MyApp', '011d3a730186167983d5111dc11607fec8f2ec3b7982f96606837968d47a7ddf', '[\"*\"]', NULL, '2021-09-16 06:19:08', '2021-09-16 06:19:08'),
(28, 'App\\Models\\User', 1, 'MyApp', 'a8f51a201f56511e1620b45a1146972dcdf277cefc3715c90f639fee463b6d77', '[\"*\"]', NULL, '2021-09-16 06:19:44', '2021-09-16 06:19:44'),
(29, 'App\\Models\\User', 17, 'MyApp', '3f04f29bf3388dcc2c7ac5ccd109ad14cc19c45a875f5b74fc63e55a591f398e', '[\"*\"]', NULL, '2021-09-16 06:19:52', '2021-09-16 06:19:52'),
(30, 'App\\Models\\User', 1, 'MyApp', '6969035a62c953421e6f3f917fba055ba49b154c5062014b336a4d02ca6e343c', '[\"*\"]', NULL, '2021-09-16 06:21:09', '2021-09-16 06:21:09'),
(31, 'App\\Models\\User', 1, 'MyApp', '648824dddc6931999d7f07a6cb8326d446557e8fbde31f9c3cf64d3a28a5c8fa', '[\"*\"]', NULL, '2021-09-16 06:22:59', '2021-09-16 06:22:59'),
(32, 'App\\Models\\User', 1, 'MyApp', '8b8d52a70e51290676da6b2d35bc5038d43b12a6d44624fd799321ff1424fe62', '[\"*\"]', NULL, '2021-09-16 06:26:07', '2021-09-16 06:26:07'),
(33, 'App\\Models\\User', 1, 'MyApp', '0697cddad208e57762be4242fd410a063d1910952022602586d0e5420a0c6fb4', '[\"*\"]', NULL, '2021-09-16 06:26:09', '2021-09-16 06:26:09'),
(34, 'App\\Models\\User', 1, 'MyApp', '2c0c16179674539293e80e4239553b4f71aca0654913d43f75d45553ee82fa9c', '[\"*\"]', NULL, '2021-09-16 06:26:10', '2021-09-16 06:26:10'),
(35, 'App\\Models\\User', 1, 'MyApp', '1f00843ac790887c90f1a3b62922786cd683123b0c9aff474b0f326f4cbf0dc8', '[\"*\"]', NULL, '2021-09-16 06:26:11', '2021-09-16 06:26:11'),
(36, 'App\\Models\\User', 1, 'MyApp', '3c8ed7e20934d6996e6111f4716f266e3ceb4d1f705fa8f4cb96c4964ed34d61', '[\"*\"]', NULL, '2021-09-16 06:26:13', '2021-09-16 06:26:13'),
(37, 'App\\Models\\User', 1, 'MyApp', 'b7dcb7c94aabc40ff7342e36ea59b55cd9650c03fb86d83d6f2ec7ebd36ab965', '[\"*\"]', NULL, '2021-09-16 06:26:14', '2021-09-16 06:26:14'),
(38, 'App\\Models\\User', 1, 'MyApp', '1ad4b6c7daf32c5ace7eccab9de7558108b5b6e4c9de123ff4e488fe97c56c2b', '[\"*\"]', NULL, '2021-09-16 06:27:46', '2021-09-16 06:27:46'),
(39, 'App\\Models\\User', 1, 'MyApp', 'dcaf4920cecb17565576c19c5f1913e5a6db890ed552d46b7bee9940b3a119ac', '[\"*\"]', NULL, '2021-09-16 06:27:59', '2021-09-16 06:27:59'),
(40, 'App\\Models\\User', 1, 'MyApp', 'a351a6292dd3334b530f00c66fa50c15ffa0bea19544071c40b7152569a3a55e', '[\"*\"]', NULL, '2021-09-16 06:28:39', '2021-09-16 06:28:39'),
(41, 'App\\Models\\User', 1, 'MyApp', 'd92d90a5d45e4785bdedc9406a11c5788d5877222bb6c34822eb126611f420ec', '[\"*\"]', NULL, '2021-09-16 06:29:02', '2021-09-16 06:29:02'),
(42, 'App\\Models\\User', 1, 'MyApp', '1251a97402896c243376e727f475ad26d9def37772f0fb259baa2d3b63c75d0b', '[\"*\"]', NULL, '2021-09-16 06:34:21', '2021-09-16 06:34:21'),
(43, 'App\\Models\\User', 1, 'MyApp', 'c97ee3158d246d6696c670195ac159b2d42154df18678cb838db8f660db1f31c', '[\"*\"]', NULL, '2021-09-16 06:34:52', '2021-09-16 06:34:52'),
(44, 'App\\Models\\User', 1, 'MyApp', 'b9037d79171e48d1caa94cdfb7816efeaccf1cdd51e34deda32bb9d9041e34c3', '[\"*\"]', NULL, '2021-09-16 06:35:09', '2021-09-16 06:35:09'),
(45, 'App\\Models\\User', 1, 'MyApp', '6b5d1e6fbc5b224b82432f29e7cc662d066deb6b3fb5d394727d9bc01ce5b33d', '[\"*\"]', NULL, '2021-09-16 06:35:17', '2021-09-16 06:35:17'),
(46, 'App\\Models\\User', 1, 'MyApp', '11f9b1822c04d725ee63bd3c769720d902d1695a263390663f6a985d410d5803', '[\"*\"]', NULL, '2021-09-16 06:35:23', '2021-09-16 06:35:23'),
(47, 'App\\Models\\User', 1, 'MyApp', '4fe853beb38c123429a19e57357fd7c84f19297dacdae83696e3800fec22210e', '[\"*\"]', NULL, '2021-09-16 06:36:26', '2021-09-16 06:36:26'),
(48, 'App\\Models\\User', 1, 'MyApp', '348d744cb1b422559acaddaa8fecd1a1d93d9ef8a0a406ecdd620bcf54c2cf2c', '[\"*\"]', NULL, '2021-09-16 06:37:13', '2021-09-16 06:37:13'),
(49, 'App\\Models\\User', 1, 'MyApp', 'f42d2e9d449249e548f863f288dd6755222741bd5082a78d2fd61bf271594623', '[\"*\"]', NULL, '2021-09-16 06:37:31', '2021-09-16 06:37:31'),
(50, 'App\\Models\\User', 1, 'MyApp', 'dd1a05d416870bb25bb498f285520c6b48c4de14afa161002103de596ccc4b8d', '[\"*\"]', NULL, '2021-09-16 06:39:06', '2021-09-16 06:39:06'),
(51, 'App\\Models\\User', 1, 'MyApp', 'e1a80601405ff12949915f3c9b66bc51e3be791b7fd3306d1d104b87127a6d2d', '[\"*\"]', NULL, '2021-09-16 06:39:49', '2021-09-16 06:39:49'),
(52, 'App\\Models\\User', 1, 'MyApp', '3099874087334a04cd62c02a9b603bd615eef773cb290785c70819c166320e06', '[\"*\"]', NULL, '2021-09-16 06:46:44', '2021-09-16 06:46:44'),
(53, 'App\\Models\\User', 1, 'MyApp', 'f515c55bf82638f05ffc7c351c00056ef72ef3bae81d10b71320a79c3f404d0f', '[\"*\"]', NULL, '2021-09-16 06:47:30', '2021-09-16 06:47:30'),
(54, 'App\\Models\\User', 1, 'MyApp', 'caa3e955b5b39a4cc3aae9874c2555191f4e043500d55aa2250b415649e71e9f', '[\"*\"]', NULL, '2021-09-16 06:49:44', '2021-09-16 06:49:44'),
(55, 'App\\Models\\User', 1, 'MyApp', '57bb3227629ed5eb1e3ab6997bf62f1885d3af9cdc49cc9c357e8893faa5fec0', '[\"*\"]', NULL, '2021-09-16 06:50:29', '2021-09-16 06:50:29'),
(56, 'App\\Models\\User', 1, 'MyApp', 'b35c29f956cafa2dbd48cf59fc8f1323ea161f3d5df1987d4757173257b48eb2', '[\"*\"]', NULL, '2021-09-16 06:51:13', '2021-09-16 06:51:13'),
(57, 'App\\Models\\User', 1, 'MyApp', '1616821af0b7c9155b5b867e3c96f4927fb0ee828f0e1cb547cba51afe4d14ab', '[\"*\"]', NULL, '2021-09-16 06:56:12', '2021-09-16 06:56:12'),
(58, 'App\\Models\\User', 1, 'MyApp', 'dd07c0ed4ea608f327c060e9e899b7e2a9a3b6a1aec013a817756e2ec3ed2e9c', '[\"*\"]', NULL, '2021-09-16 06:58:40', '2021-09-16 06:58:40'),
(59, 'App\\Models\\User', 3, 'MyApp', '19efb5429443e5babfcd359876950380fcc69e5fedd291640afed0c12dfd57dc', '[\"*\"]', NULL, '2021-09-16 06:59:22', '2021-09-16 06:59:22'),
(60, 'App\\Models\\User', 3, 'MyApp', '353691b404ce630c49e90623671abdba2090f11b196b3b4fda3f0735b70bca27', '[\"*\"]', NULL, '2021-09-16 07:00:21', '2021-09-16 07:00:21'),
(61, 'App\\Models\\User', 3, 'MyApp', '406e9b5f2351102df7b31b1461ddc075b0b20d61b7562727abb90efef40051b3', '[\"*\"]', NULL, '2021-09-16 07:14:12', '2021-09-16 07:14:12'),
(62, 'App\\Models\\User', 3, 'MyApp', '18f96df9e9d09f35243378c53de0ad13a3cb70593cfbdd6c47720aa6e78d1c33', '[\"*\"]', NULL, '2021-09-16 07:14:39', '2021-09-16 07:14:39'),
(63, 'App\\Models\\User', 3, 'MyApp', '4f8bfd16aee64c5c76b179a2f68b96e653cae0ae6cdd9dbba106fbb650bdb316', '[\"*\"]', NULL, '2021-09-16 07:14:57', '2021-09-16 07:14:57'),
(64, 'App\\Models\\User', 3, 'MyApp', '147eec6f57f8df2d02ada095a469e08e95a51007b1cb517aa7f1ac7748017015', '[\"*\"]', NULL, '2021-09-16 07:15:46', '2021-09-16 07:15:46'),
(65, 'App\\Models\\User', 3, 'MyApp', 'fe3454ba779d64c83e78b4298e978b12add820f7b97012780cd072ce52f2971d', '[\"*\"]', NULL, '2021-09-16 07:16:25', '2021-09-16 07:16:25'),
(66, 'App\\Models\\User', 3, 'MyApp', '2058523e2ce7119e818f0760de4a2689e0fdcd1bb81954c59930024840a5b8c7', '[\"*\"]', NULL, '2021-09-16 07:16:27', '2021-09-16 07:16:27'),
(67, 'App\\Models\\User', 3, 'MyApp', '4f759eac8dccbcef276abb0c3510b4c0bf1c067e85dabf843f22ff64e5524c53', '[\"*\"]', NULL, '2021-09-16 07:17:10', '2021-09-16 07:17:10'),
(68, 'App\\Models\\User', 3, 'MyApp', '73b35a3a0647a1d462030e1add83accdfdf8d067d86714365ad825b37b0c1b2e', '[\"*\"]', NULL, '2021-09-16 07:17:47', '2021-09-16 07:17:47'),
(69, 'App\\Models\\User', 3, 'MyApp', '6e30908a995f2c9b76758de6dc36ee21745d129a08def53b1633f7c48ae7cdaa', '[\"*\"]', NULL, '2021-09-16 07:18:57', '2021-09-16 07:18:57'),
(70, 'App\\Models\\User', 3, 'MyApp', 'a043918e9a383c045d73d8a4bbbb46157fa5f0b7cd120d74a8c2739a46697eb5', '[\"*\"]', NULL, '2021-09-16 07:20:50', '2021-09-16 07:20:50'),
(71, 'App\\Models\\User', 3, 'MyApp', '60d05983d9250fa20661b34158d10cd86faed927759db39266c5596e569df594', '[\"*\"]', NULL, '2021-09-16 07:22:12', '2021-09-16 07:22:12'),
(72, 'App\\Models\\User', 3, 'MyApp', '01f054495577a6798a14d2e6c32277149619a479ff80b642f2c7ee1c17f2d0cb', '[\"*\"]', NULL, '2021-09-16 07:23:17', '2021-09-16 07:23:17'),
(73, 'App\\Models\\User', 3, 'MyApp', '384cc885d15edcc4d3f29036c5d5cbda970ffc67eb264fd8dfb524e42b2fdd03', '[\"*\"]', NULL, '2021-09-16 07:23:59', '2021-09-16 07:23:59'),
(74, 'App\\Models\\User', 3, 'MyApp', '57b1bc1718f72991da1aeb5e37401c782af54025bcf395b215d922b86f119b26', '[\"*\"]', NULL, '2021-09-16 07:28:16', '2021-09-16 07:28:16'),
(75, 'App\\Models\\User', 3, 'MyApp', '6ab5308233de574c7211f4714e0620b79b0b042f04d0768d1aa39f50dccc475d', '[\"*\"]', NULL, '2021-09-16 07:34:59', '2021-09-16 07:34:59'),
(76, 'App\\Models\\User', 3, 'MyApp', 'e1c5f62cc6ddbba43d275bc4dc1280d2a67c6f11a319602e2df95a86433fb887', '[\"*\"]', NULL, '2021-09-16 07:35:11', '2021-09-16 07:35:11'),
(77, 'App\\Models\\User', 3, 'MyApp', '3e0ba3904bcd200b0f9ca24150ba422fea35eb3b6b87bb3be819a92f59be990e', '[\"*\"]', NULL, '2021-09-16 07:36:04', '2021-09-16 07:36:04'),
(78, 'App\\Models\\User', 3, 'Gammer', '9a053a29e88fe9de425223eaa886f23e5eb404d166bb30c5d2d5fcd0e4ff5f7f', '[\"*\"]', NULL, '2021-09-16 07:37:28', '2021-09-16 07:37:28'),
(79, 'App\\Models\\User', 3, 'TutsForWeb', '3116afadbc8a3512c5eb5b85359b187958dcdd409d9864c7c407d4d143710cf2', '[\"*\"]', NULL, '2021-09-16 07:42:29', '2021-09-16 07:42:29'),
(80, 'App\\Models\\User', 3, 'Gammer', 'ab384aa147b75bf60753247d06f3fde1a385a15cb04880235313b9dab7ff9f4d', '[\"*\"]', NULL, '2021-09-16 07:43:06', '2021-09-16 07:43:06'),
(81, 'App\\Models\\User', 3, 'Gammer', '58e1431127acc59bcbeacd655ddf79b8150946626059a707f3cab653bf33c22f', '[\"*\"]', NULL, '2021-09-16 07:43:06', '2021-09-16 07:43:06'),
(82, 'App\\Models\\User', 3, 'Gammer', 'bd9104009ddd1721bd0fd4c504cb79d4ca9c18077d222669570b2f88e10bf5a3', '[\"*\"]', NULL, '2021-09-16 07:43:30', '2021-09-16 07:43:30'),
(83, 'App\\Models\\User', 3, 'Gammer', 'bb97bd443b6d0b340a20673a470f7b78e89dea47a60b7ea842c7d83f2e965135', '[\"*\"]', NULL, '2021-09-16 07:43:30', '2021-09-16 07:43:30'),
(84, 'App\\Models\\User', 3, 'Gammer', '991ccf65b0725e43def91613ac22387da2540919754e4c1faa890c7fefbc6b45', '[\"*\"]', NULL, '2021-09-16 07:45:16', '2021-09-16 07:45:16'),
(85, 'App\\Models\\User', 3, 'Gammer', 'fadfd8f46e7b181d81232d88bc34a8036d42b1a068499e9553a76d6994f0ecb5', '[\"*\"]', NULL, '2021-09-16 07:46:29', '2021-09-16 07:46:29'),
(86, 'App\\Models\\User', 3, 'Gammer', '9e73803aff1153a636ce41d2bc71eef669269dd0554feec4b8f25b7703ae804f', '[\"*\"]', NULL, '2021-09-16 07:53:31', '2021-09-16 07:53:31'),
(87, 'App\\Models\\User', 3, 'Gammer', 'b26b4392ac677907d6f135c465569af7ca43d58b45a657724a6447c4cdfd56e5', '[\"*\"]', NULL, '2021-09-16 07:56:47', '2021-09-16 07:56:47'),
(88, 'App\\Models\\User', 3, 'Gammer', 'ded78d5f1dbc9eaaa24205226951802dcf9f3f2cba40165e6477e80e3b24f13d', '[\"*\"]', NULL, '2021-09-16 07:57:28', '2021-09-16 07:57:28'),
(89, 'App\\Models\\User', 3, 'Gammer', 'd7dec5305391d1428d44f7c7e50c7f3c541f070e815dc982bd4789d72819bed7', '[\"*\"]', NULL, '2021-09-16 07:57:30', '2021-09-16 07:57:30'),
(90, 'App\\Models\\User', 3, 'Gammer', '03d9566edc4d5eda291fae421190e7e5cafe05a4b7232659f6da4ff28f3b2694', '[\"*\"]', NULL, '2021-09-16 07:58:01', '2021-09-16 07:58:01'),
(91, 'App\\Models\\User', 3, 'Gammer', '32ebf42efc9a9abaa8fd917e592ded2c0b852a65d67d2b5177a3011b65e00574', '[\"*\"]', NULL, '2021-09-16 07:58:37', '2021-09-16 07:58:37'),
(92, 'App\\Models\\User', 3, 'Gammer', '18d3acbd06cbc66248fe1940180bbb24b16acfb0d69779584f0591c10b30436b', '[\"*\"]', NULL, '2021-09-16 08:01:55', '2021-09-16 08:01:55'),
(93, 'App\\Models\\User', 3, 'Gammer', '65e9652917098d72f428c481fc0e29b4dcf200ef766d0321cb8c036657dd596a', '[\"*\"]', NULL, '2021-09-16 08:06:06', '2021-09-16 08:06:06'),
(94, 'App\\Models\\User', 3, 'Gammer', 'be03471c60be9aa210afe41c32543aa79106bd7dca6a18d27d2463464d10fb00', '[\"*\"]', NULL, '2021-09-16 08:06:11', '2021-09-16 08:06:11'),
(95, 'App\\Models\\User', 3, 'Gammer', '0054ab7de0084cc5bfe02296348e6d0cea0a16c089382f51983dd8dad05d57fa', '[\"*\"]', NULL, '2021-09-16 08:06:15', '2021-09-16 08:06:15'),
(96, 'App\\Models\\User', 3, 'Gammer', 'f586e92b84de6e9669b92074c508cecb860d53c9ef18b61bc445df9dccdff48a', '[\"*\"]', NULL, '2021-09-16 08:07:05', '2021-09-16 08:07:05'),
(97, 'App\\Models\\User', 3, 'Gammer', '9caa0226414750d290015e709d376ec5d87f070f3ab5fb5df97cdb095d49f8a2', '[\"*\"]', NULL, '2021-09-16 08:07:50', '2021-09-16 08:07:50'),
(98, 'App\\Models\\User', 3, 'Gammer', '7c4c89b11f85db4e187616a1261bbe51709d47e42eaad86eb167a5e6063f887c', '[\"*\"]', NULL, '2021-09-16 08:09:40', '2021-09-16 08:09:40'),
(99, 'App\\Models\\User', 3, 'Gammer', 'c930e2715ec6452a03ce971d21987e1307ebdccbd5de5a74d69c4509d4ac43ac', '[\"*\"]', NULL, '2021-09-16 08:10:45', '2021-09-16 08:10:45'),
(100, 'App\\Models\\User', 19, 'MyApp', '5a8ea7d874ddc6f54edba461560e3af7be6fa675c8f28dcd43c8a21574d651e7', '[\"*\"]', NULL, '2021-09-16 08:10:54', '2021-09-16 08:10:54'),
(101, 'App\\Models\\User', 3, 'Gammer', '1b2604e77a3f4e3aade9e53c4cef5f6647abdde47373e6a93d33fb7d8352aded', '[\"*\"]', NULL, '2021-09-16 23:17:30', '2021-09-16 23:17:30'),
(102, 'App\\Models\\User', 3, 'Gammer', '2b64c9766120da9ada342a5224020d7ceeedbef52648001c19f0073802efaeab', '[\"*\"]', NULL, '2021-09-16 23:32:43', '2021-09-16 23:32:43'),
(103, 'App\\Models\\User', 3, 'Loop', '5dff8fd23ca5d794adc697eb4be4f6da1ba30b468fb2450543648e3f3b262b0a', '[\"*\"]', NULL, '2021-09-16 23:35:00', '2021-09-16 23:35:00'),
(104, 'App\\Models\\User', 3, 'Loop', '0a9a5a0c7bc944e0cb129a306fb1a64620034910084316c3fa93dcdf15426cbe', '[\"*\"]', NULL, '2021-09-16 23:37:29', '2021-09-16 23:37:29'),
(105, 'App\\Models\\User', 3, 'Loop', '76b604e6c9e867793c74acf9480cfd2666d5d09b01e1378c749adc344b60446f', '[\"*\"]', NULL, '2021-09-16 23:37:48', '2021-09-16 23:37:48'),
(106, 'App\\Models\\User', 3, 'Loop', '93dd28d40685883551c2adc0a37ee84e3137c5fe975fbb4cde980251644d2be1', '[\"*\"]', NULL, '2021-09-16 23:38:39', '2021-09-16 23:38:39'),
(107, 'App\\Models\\User', 3, 'Loop', '51bf354b31be69810d506966ddb1bf851a4cb358c07ab69be9cc8781562932e5', '[\"*\"]', NULL, '2021-09-16 23:40:09', '2021-09-16 23:40:09'),
(108, 'App\\Models\\User', 3, 'Loop', '439caefa29bf4cabf2e290adc8275025595e8d53dfb639f43c8f0351584325f2', '[\"*\"]', NULL, '2021-09-17 00:15:03', '2021-09-17 00:15:03'),
(109, 'App\\Models\\User', 3, 'Loop', 'a118f5846a32942fc666550a8720926e934c56ffe25f7ec88da95dffb83c9c06', '[\"*\"]', NULL, '2021-09-17 00:17:31', '2021-09-17 00:17:31'),
(110, 'App\\Models\\User', 3, 'Loop', 'f19de137bd9b42f9e84258a617c2da530de968e49d93238f47d6bc5aad540343', '[\"*\"]', NULL, '2021-09-17 00:51:45', '2021-09-17 00:51:45'),
(111, 'App\\Models\\User', 3, 'Loop', '0f067686121739ddac0d16e093f812464a96f0fb110ea22688376283a05388d0', '[\"*\"]', NULL, '2021-09-17 00:52:52', '2021-09-17 00:52:52'),
(112, 'App\\Models\\User', 3, 'Loop', '87a563eec84ca5b1f3f695ef27c76694fa3a99808c11654f015933dbd7f07c38', '[\"*\"]', NULL, '2021-09-17 01:27:45', '2021-09-17 01:27:45'),
(113, 'App\\Models\\User', 3, 'Loop', '166885e9b0562376ec137a129a4ece116a29d09b468af928a255b4fe82ddd87b', '[\"*\"]', '2021-09-17 02:37:30', '2021-09-17 02:13:25', '2021-09-17 02:37:30'),
(114, 'App\\Models\\User', 21, 'MyApp', 'bfdb4bb65f639ba55ca1d658c3baa007e9a51a3342f70342ce187fbe480ef3c4', '[\"*\"]', NULL, '2021-09-17 02:16:25', '2021-09-17 02:16:25'),
(115, 'App\\Models\\User', 3, 'Loop', 'ce0385def220efcdce3a8f78cdd760f0edf888d58ef68b8a54569fe20dd45a4f', '[\"*\"]', NULL, '2021-09-17 02:55:10', '2021-09-17 02:55:10'),
(116, 'App\\Models\\User', 23, 'MyApp', '0935289351ccf118488ea8751c90d68358866ca7fa694263704bb7e806833fd2', '[\"*\"]', NULL, '2021-09-17 02:55:22', '2021-09-17 02:55:22'),
(117, 'App\\Models\\User', 3, 'Loop', '44818a078e2353413abdc4314d4e8e15229cb46aaad591ab030596986a00b479', '[\"*\"]', NULL, '2021-09-17 05:52:44', '2021-09-17 05:52:44'),
(118, 'App\\Models\\User', 3, 'Loop', '93f67346092918ff274c74caa5bd40e1d0104da27ffa7ec46f7b480faf72f21a', '[\"*\"]', NULL, '2021-09-17 05:52:55', '2021-09-17 05:52:55'),
(119, 'App\\Models\\User', 3, 'Loop', 'da4e244540e8aa7ba0e1904b6d90ca6f23275d871380b90771c37da50fcc74c9', '[\"*\"]', NULL, '2021-09-17 05:56:51', '2021-09-17 05:56:51'),
(120, 'App\\Models\\User', 3, 'Loop', '24142af9bb77a97b861edef1b8c36c9c1ac6f4e66b8de671384270a2324bc45e', '[\"*\"]', NULL, '2021-09-19 23:31:02', '2021-09-19 23:31:02'),
(121, 'App\\Models\\User', 25, 'MyApp', '24ea066ba8d8cd74136fe2e763785b68504ee791eb4e087c38cd6deef8ec7f84', '[\"*\"]', NULL, '2021-09-20 00:04:30', '2021-09-20 00:04:30'),
(122, 'App\\Models\\User', 26, 'MyApp', '308b3991b07a1e7f2570aad4c889e26f1c415b066b95c08fb410271e6f9a228e', '[\"*\"]', NULL, '2021-09-20 00:05:28', '2021-09-20 00:05:28'),
(123, 'App\\Models\\User', 28, 'MyApp', '5475381fe2ea6633b692a699b0f2355fbc21a48db6972d7aa496f0c931594167', '[\"*\"]', NULL, '2021-09-20 00:07:18', '2021-09-20 00:07:18'),
(124, 'App\\Models\\User', 30, 'MyApp', '5a35b542e78492c009fcd437078180248c51bf4d954957cde06687b76fea6e18', '[\"*\"]', NULL, '2021-09-20 00:07:42', '2021-09-20 00:07:42'),
(125, 'App\\Models\\User', 31, 'MyApp', '95533f74adf6f15c41d19dcfdae333e64881ede57ad78dc67c8b412d3aa06ae9', '[\"*\"]', NULL, '2021-09-20 00:10:01', '2021-09-20 00:10:01'),
(126, 'App\\Models\\User', 35, 'MyApp', '2bd859db6448bde67298fed593f8e77a8f7e0c959c2ab0edc5cba9193aad1fbe', '[\"*\"]', NULL, '2021-09-20 00:17:12', '2021-09-20 00:17:12'),
(127, 'App\\Models\\User', 36, 'MyApp', 'e6bc31229ed9642eb69e680fece84e1e4674b89595b88168c6d1ca6f363e6734', '[\"*\"]', NULL, '2021-09-20 00:18:05', '2021-09-20 00:18:05'),
(128, 'App\\Models\\User', 37, 'MyApp', 'b30d009c7bc89fdd311d97b38517a20efc37c1b743310690d97e04536f94602b', '[\"*\"]', NULL, '2021-09-20 00:18:56', '2021-09-20 00:18:56'),
(129, 'App\\Models\\User', 38, 'MyApp', '3c9e18f7f17feb71efd1d0929d0ceaeed2ee41cbb6aca9e3c22d1968f9373014', '[\"*\"]', NULL, '2021-09-20 00:19:14', '2021-09-20 00:19:14'),
(130, 'App\\Models\\User', 39, 'MyApp', '7309a41c9fa2c00e251b8cf3bc373283b592d91f2a61395b1888ae3164d2406c', '[\"*\"]', NULL, '2021-09-20 00:48:42', '2021-09-20 00:48:42'),
(131, 'App\\Models\\User', 42, 'MyApp', 'f6a2552021b3806565bf7c3ab5c3765635c8b76e0762df2c2037900cab685b92', '[\"*\"]', NULL, '2021-09-20 01:47:48', '2021-09-20 01:47:48'),
(132, 'App\\Models\\User', 3, 'Loop', '3a3ddb1146e2be2b6a399e35e8ab2354aa313fe3ed322fb1d8b14ede5273be5a', '[\"*\"]', NULL, '2021-09-20 07:45:59', '2021-09-20 07:45:59'),
(133, 'App\\Models\\User', 3, 'Loop', '53bac41ee0b4fbf8171b7f2266b9b9e6e1ff9a07662f226aca8b331c8b02f1bc', '[\"*\"]', NULL, '2021-09-20 07:46:58', '2021-09-20 07:46:58'),
(134, 'App\\Models\\User', 44, 'MyApp', 'b3a8f6cca1bc45e59765a0d70d041ae45351cd8831bc2e768faee06a55535c99', '[\"*\"]', NULL, '2021-09-20 07:47:08', '2021-09-20 07:47:08'),
(135, 'App\\Models\\User', 3, 'Loop', '0489a4c9c8f0818a304a38039ea650f4ccc402f719dc0cff429a319bf9d8e9a7', '[\"*\"]', NULL, '2021-09-20 07:58:06', '2021-09-20 07:58:06'),
(136, 'App\\Models\\User', 46, 'MyApp', 'bfa681811377f10554a4659ea6d21a619f170df33031fc150fd6511705a12665', '[\"*\"]', NULL, '2021-09-20 07:58:19', '2021-09-20 07:58:19'),
(137, 'App\\Models\\User', 48, 'MyApp', '1e3369df30668dce44df4dcb85d148d530ce9dcd0cc078d6c00201ea52628601', '[\"*\"]', NULL, '2021-09-20 08:13:49', '2021-09-20 08:13:49'),
(138, 'App\\Models\\User', 50, 'MyApp', '2d0e92467db56da9df2baaddce513903a8039055248ef0eb653a5eca0ec64622', '[\"*\"]', NULL, '2021-09-20 08:14:26', '2021-09-20 08:14:26'),
(139, 'App\\Models\\User', 52, 'MyApp', 'd01429c46d0e87757b8bb6d14236b050e75eb359070db9df109e7a0de076726d', '[\"*\"]', NULL, '2021-09-20 08:14:42', '2021-09-20 08:14:42'),
(140, 'App\\Models\\User', 54, 'MyApp', '8ac294d54e423baa050dedf5ff75f9fb782762803fed57f600347f227cca4cf9', '[\"*\"]', NULL, '2021-09-21 00:57:20', '2021-09-21 00:57:20'),
(141, 'App\\Models\\User', 1, 'MyApp', '9a5f938c9825c011ca97d890516a4b63b9a99298b1b9777a76eb7e06f24b5710', '[\"*\"]', NULL, '2021-09-21 00:58:00', '2021-09-21 00:58:00'),
(142, 'App\\Models\\User', 2, 'MyApp', '88f6654a528ebdda2ac8946ff408163a8e956de4738eb039ec5ab3101ffca79b', '[\"*\"]', NULL, '2021-09-21 00:58:16', '2021-09-21 00:58:16'),
(143, 'App\\Models\\User', 3, 'MyApp', '0866a8ce2e1ede9f5eb2a1e23cc288c7567609d53ec8b78cf3ff3a1291b65d6c', '[\"*\"]', NULL, '2021-09-21 00:59:25', '2021-09-21 00:59:25'),
(144, 'App\\Models\\User', 4, 'MyApp', '00dd57bbdc9f89bba560519a8e1ff6af97fea098f65031e0d80f33f95cfac035', '[\"*\"]', NULL, '2021-09-21 01:00:51', '2021-09-21 01:00:51'),
(145, 'App\\Models\\User', 5, 'MyApp', 'c63be36ba0775c157e8e10cfc38036d6fca72f46795a0206d3d5c96f386a979b', '[\"*\"]', NULL, '2021-09-21 01:03:55', '2021-09-21 01:03:55'),
(146, 'App\\Models\\User', 6, 'MyApp', 'b33b4980c16e4b79dce5fea3d4e1635445b40cb3a69c2e26d2daf6b9b0bc0181', '[\"*\"]', NULL, '2021-09-21 01:04:25', '2021-09-21 01:04:25'),
(147, 'App\\Models\\User', 7, 'MyApp', 'f54cf4271d305fb96affda9a9fdea09f467b5c8ed5d81064a97868e5c491ba20', '[\"*\"]', NULL, '2021-09-21 01:05:33', '2021-09-21 01:05:33'),
(148, 'App\\Models\\User', 1, 'Loop', '9f98e86cfab3e0b2262a19949943093b34a784b7035446ed3624476ea18efc66', '[\"*\"]', NULL, '2021-09-21 02:26:01', '2021-09-21 02:26:01'),
(149, 'App\\Models\\User', 1, 'Loop', '7965446aa95baabdcce30b5039df13d134e90a84001190f480e8623a104e8928', '[\"*\"]', NULL, '2021-09-21 02:29:17', '2021-09-21 02:29:17'),
(150, 'App\\Models\\User', 1, 'Loop', '32aec22325323c9dc34af805fd66e8ef1a6974fe6fbeefb64f92b90cd60a03be', '[\"*\"]', NULL, '2021-09-21 02:29:25', '2021-09-21 02:29:25'),
(151, 'App\\Models\\User', 1, 'Loop', '762516322382b47c5282d5bf03b49378e952718f63fa883402cc6a03ba0ffb59', '[\"*\"]', NULL, '2021-09-21 02:29:30', '2021-09-21 02:29:30'),
(152, 'App\\Models\\User', 1, 'Loop', '43a64c21c3543b90fa73d7bf7401c3f9610eaf412d8ace8a4475cb570016c081', '[\"*\"]', NULL, '2021-09-21 04:27:46', '2021-09-21 04:27:46'),
(153, 'App\\Models\\User', 1, 'Loop', '174f356aa6dd2822fb2adbfdaa05cfc756ff41875fa9fefd7a7d057574ec8a50', '[\"*\"]', NULL, '2021-09-21 05:51:58', '2021-09-21 05:51:58'),
(154, 'App\\Models\\User', 1, 'Loop', 'caf83883bd3c676b7225638b265538100fb1dae431621220f08b83259201fba7', '[\"*\"]', NULL, '2021-09-21 06:03:35', '2021-09-21 06:03:35'),
(155, 'App\\Models\\User', 1, 'Loop', '4a6852f6e8946b36999278a4d96bae3eab76d4a4fd3bb69ec51070a35719943b', '[\"*\"]', NULL, '2021-09-21 06:03:48', '2021-09-21 06:03:48'),
(156, 'App\\Models\\User', 9, 'MyApp', 'da586e28ba451869a569700e257d93535ddab98660801642079813f7df9e6786', '[\"*\"]', NULL, '2021-09-21 06:12:26', '2021-09-21 06:12:26'),
(157, 'App\\Models\\User', 12, 'MyApp', '40ad1affc347370541153db4062360adbb054f013b41592630998efb51ef5183', '[\"*\"]', NULL, '2021-09-21 06:19:00', '2021-09-21 06:19:00'),
(158, 'App\\Models\\User', 13, 'MyApp', '474b95604e7e32ef2913b7536369e4c0656e553d8e6940f89210fc5d6ebc3533', '[\"*\"]', NULL, '2021-09-21 06:19:16', '2021-09-21 06:19:16'),
(159, 'App\\Models\\User', 14, 'MyApp', '62d37b462af9db4de37627b22d1e7b645db35e4b7657e6e0698596e32f8802bb', '[\"*\"]', NULL, '2021-09-21 06:23:16', '2021-09-21 06:23:16'),
(160, 'App\\Models\\User', 15, 'MyApp', '6733932e012d0e889c6f55a2052ead58df84dd0876ba605886fc8a028078599e', '[\"*\"]', NULL, '2021-09-21 06:34:39', '2021-09-21 06:34:39'),
(161, 'App\\Models\\User', 1, 'Loop', 'fc3f3195eca80b9ec1e8e27ff322334685f0a620b30c1cf46c14b557b55c5a1e', '[\"*\"]', NULL, '2021-09-21 06:34:45', '2021-09-21 06:34:45'),
(162, 'App\\Models\\User', 1, 'Loop', '833ef7f42b7de564cfd345fd4d867c8310d2961182a10602b31705dbe18633a0', '[\"*\"]', '2021-10-04 06:15:53', '2021-09-21 22:50:09', '2021-10-04 06:15:53'),
(163, 'App\\Models\\User', 1, 'Loop', '270592866bf05728dad67802ce7039a9398e37d77493e146965b2a823ff81c98', '[\"*\"]', '2021-09-25 00:04:28', '2021-09-22 00:23:30', '2021-09-25 00:04:28'),
(164, 'App\\Models\\User', 1, 'Loop', '5a4430ae19e29ba1d5c75d3e1233989fc59b1975192103ebfb540eb67faa3641', '[\"*\"]', '2021-10-19 23:36:30', '2021-09-23 06:07:02', '2021-10-19 23:36:30'),
(165, 'App\\Models\\User', 1, 'Loop', 'a649595148b64a8876976cf8d99f64c21dceedfc518eed43afc3c25c3a174b12', '[\"*\"]', '2021-10-22 07:04:46', '2021-09-24 00:54:35', '2021-10-22 07:04:46'),
(166, 'App\\Models\\User', 16, 'MyApp', 'b90e0e6471580398906e742104a3be243c49dbd8a95294f7231880c1dd9751c0', '[\"*\"]', NULL, '2021-09-24 23:03:41', '2021-09-24 23:03:41'),
(167, 'App\\Models\\User', 16, 'Loop', '60f55984c21a6f4aaa350a9c4d792667fa76d26f9a21e076ebda2ddeeb1ed66f', '[\"*\"]', NULL, '2021-09-24 23:04:33', '2021-09-24 23:04:33'),
(168, 'App\\Models\\User', 1, 'Loop', 'b346543a48d7cd8cb6bfb969d8f7e3fbbaa3482e5acfc35a20306a75f58a576a', '[\"*\"]', '2021-09-27 00:57:12', '2021-09-27 00:29:24', '2021-09-27 00:57:12'),
(169, 'App\\Models\\User', 1, 'Loop', '0bb648cee0cad4f26d7616eec222b8b2892b7ce346c6009ff76ff9aec8f97570', '[\"*\"]', '2021-10-22 07:06:03', '2021-09-28 02:26:51', '2021-10-22 07:06:03'),
(170, 'App\\Models\\User', 1, 'Loop', 'a32b2fd95b208b55fed306de9ef5d326f0b583fcf42505dcc80c06b82cab8fc7', '[\"*\"]', NULL, '2021-09-29 02:46:54', '2021-09-29 02:46:54'),
(171, 'App\\Models\\User', 1, 'Loop', '4ca1cef25efdeebb581d683d3a05ea50222cc7fa1fbc42efcc38ae1cc9e52b9d', '[\"*\"]', NULL, '2021-10-04 01:10:34', '2021-10-04 01:10:34'),
(172, 'App\\Models\\User', 1, 'Loop', '2fde32f2f88e1890f19aebeb3af04f0da650ba47a0d2444d0dfe6969300eb47e', '[\"*\"]', '2021-10-19 23:34:45', '2021-10-04 06:07:06', '2021-10-19 23:34:45'),
(173, 'App\\Models\\User', 1, 'Loop', '54d0c2df963173527339ae5c44cdc96060a10b4309717578872d663a03e7bce9', '[\"*\"]', NULL, '2021-10-04 06:52:44', '2021-10-04 06:52:44'),
(174, 'App\\Models\\User', 1, 'Loop', 'f3b58b8e0c6a51eed31a4fcfb5ce18105d8cb4b6b11903205da27f6b8e46402b', '[\"*\"]', NULL, '2021-10-06 00:26:06', '2021-10-06 00:26:06'),
(175, 'App\\Models\\User', 1, 'Loop', 'e01f59b668ac87b8aa586c2a20035ec8edd6aa4817ab0a77d70d3123d35f3ea6', '[\"*\"]', NULL, '2021-10-08 00:50:59', '2021-10-08 00:50:59'),
(176, 'App\\Models\\User', 1, 'Loop', '0eb65b83bd4ed60fec6f147493aaa0054911d9b6b3803141978285cb99eb51b1', '[\"*\"]', NULL, '2021-10-12 23:24:17', '2021-10-12 23:24:17'),
(177, 'App\\Models\\User', 1, 'Loop', '15b897ab32f1ba5ae97e581fefaa7df5b76367aea24a856c837cd4da3e64a125', '[\"*\"]', NULL, '2021-10-13 00:41:42', '2021-10-13 00:41:42'),
(178, 'App\\Models\\User', 1, 'Loop', '71e18bee5f551cc6157ee612523cbea98748c71769f3ab967b94cc6e8a359674', '[\"*\"]', NULL, '2021-10-13 01:03:13', '2021-10-13 01:03:13'),
(179, 'App\\Models\\User', 1, 'Loop', 'd193aef0bb71ed0ea405f6f1731677e008b7026f45842600f744f4532d4c1ca6', '[\"*\"]', NULL, '2021-10-13 03:04:55', '2021-10-13 03:04:55'),
(180, 'App\\Models\\User', 1, 'Loop', 'f2b3790a74cf6c26fdba90259e78da8506fcacef00cda5698d6c7e0b6f7877ad', '[\"*\"]', NULL, '2021-10-13 03:08:35', '2021-10-13 03:08:35'),
(181, 'App\\Models\\User', 1, 'Loop', '11af62ff7c5559dea496bc9f58c2a358226ace1ba15c39f09fd9accfbd1ea676', '[\"*\"]', NULL, '2021-10-13 04:09:26', '2021-10-13 04:09:26'),
(182, 'App\\Models\\User', 1, 'Loop', '9a2ac9d0bf5ef2a1fa0cf2c654105355694f069b99c05d989f85e660aef58a77', '[\"*\"]', NULL, '2021-10-17 23:48:52', '2021-10-17 23:48:52'),
(183, 'App\\Models\\User', 17, 'MyApp', '489401c2928efb1f81c08bad7797b3a9bb01664599caa869f57e897bdf2154f1', '[\"*\"]', NULL, '2021-10-19 23:33:26', '2021-10-19 23:33:26'),
(184, 'App\\Models\\User', 1, 'Loop', '1cd148e0da1359c7343e1a076c10b779cd4d725f457e9ccf7fa7dbfd3c13d979', '[\"*\"]', NULL, '2021-10-20 04:15:34', '2021-10-20 04:15:34'),
(185, 'App\\Models\\User', 1, 'Loop', '6d035f9d6c94ab701b990c30436c03c8c24c6187a3dbb48064fb54b1b88c2daf', '[\"*\"]', NULL, '2021-10-20 04:15:57', '2021-10-20 04:15:57'),
(186, 'App\\Models\\User', 1, 'Loop', 'ba1c5ac65a61746166d78a4a9fc422cf5d9ca21ed458697528a62bbe46ec4dd3', '[\"*\"]', NULL, '2021-10-20 04:16:12', '2021-10-20 04:16:12'),
(187, 'App\\Models\\User', 1, 'Loop', '25d2d76003bc945fabcfdc1ae6fdaeeeb08aec08d21501ebbe1872ae9eab7360', '[\"*\"]', NULL, '2021-10-20 04:16:56', '2021-10-20 04:16:56'),
(188, 'App\\Models\\User', 1, 'Loop', '2ec2c9303b80e600ce435004f6ed47de4c9bb0207e68815d7758c19cf11110d0', '[\"*\"]', NULL, '2021-10-20 04:28:49', '2021-10-20 04:28:49'),
(189, 'App\\Models\\User', 18, 'MyApp', 'c7d9dd0e44e3fd3ba9fa9c09aab49e19623b5ceb97f542a6182ea9df0752a047', '[\"*\"]', NULL, '2021-10-22 00:18:55', '2021-10-22 00:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `customer_id`, `category_id`, `post_type`, `post_caption`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'test', '2021-09-22 01:51:05', '2021-09-22 01:51:05'),
(2, 1, 1, '1', 'test', '2021-09-22 01:52:07', '2021-09-22 01:52:07'),
(3, 1, 0, '1', 'test', '2021-09-22 07:25:17', '2021-09-22 07:25:17'),
(4, 1, 0, '1', 'test', '2021-09-22 01:57:42', '2021-09-22 01:57:42'),
(5, 1, 0, '1', 'test', '2021-09-22 01:58:25', '2021-09-22 01:58:25'),
(6, 1, 0, '1', 'test', '2021-09-22 01:58:35', '2021-09-22 01:58:35'),
(7, 1, 0, '1', 'test', '2021-09-22 02:01:58', '2021-09-22 02:01:58'),
(8, 1, 0, '1', 'test', '2021-09-22 02:02:19', '2021-09-22 02:02:19'),
(9, 1, 0, '1', 'test', '2021-09-22 02:04:34', '2021-09-22 02:04:34'),
(10, 1, 0, '1', 'test', '2021-09-22 02:04:44', '2021-09-22 02:04:44'),
(11, 1, 0, '1', 'test', '2021-09-22 02:06:13', '2021-09-22 02:06:13'),
(12, 1, 0, '1', 'test', '2021-09-22 02:09:34', '2021-09-22 02:09:34'),
(13, 1, 0, '1', 'test', '2021-09-22 02:09:58', '2021-09-22 02:09:58'),
(14, 1, 0, '1', 'test', '2021-09-22 02:10:13', '2021-09-22 02:10:13'),
(15, 1, 0, '1', 'test', '2021-09-22 02:10:33', '2021-09-22 02:10:33'),
(16, 1, 0, '1', 'test', '2021-09-22 02:17:40', '2021-09-22 02:17:40'),
(17, 1, 0, '1', 'test', '2021-09-22 02:19:28', '2021-09-22 02:19:28'),
(18, 1, 0, '1', 'test', '2021-09-22 02:25:11', '2021-09-22 02:25:11'),
(19, 1, 0, '1', 'test', '2021-09-22 02:35:54', '2021-09-22 02:35:54'),
(20, 1, 0, '1', 'test', '2021-09-22 02:36:02', '2021-09-22 02:36:02'),
(21, 1, 0, '1', 'test', '2021-09-22 02:55:52', '2021-09-22 02:55:52'),
(22, 1, 0, '1', 'test', '2021-09-22 02:56:20', '2021-09-22 02:56:20'),
(23, 1, 0, '1', 'test', '2021-09-22 02:56:41', '2021-09-22 02:56:41'),
(24, 1, 0, '1', 'test', '2021-09-22 02:56:59', '2021-09-22 02:56:59'),
(25, 1, 0, '1', 'test', '2021-09-22 02:57:17', '2021-09-22 02:57:17'),
(26, 1, 0, '1', 'test', '2021-09-22 02:58:37', '2021-09-22 02:58:37'),
(27, 1, 0, '1', 'test', '2021-09-22 02:59:29', '2021-09-22 02:59:29'),
(28, 1, 0, '1', 'test', '2021-09-22 03:00:34', '2021-09-22 03:00:34'),
(29, 1, 0, '1', 'test', '2021-09-22 03:02:42', '2021-09-22 03:02:42'),
(30, 1, 0, '1', 'test', '2021-09-22 03:03:08', '2021-09-22 03:03:08'),
(31, 1, 0, '1', 'test', '2021-09-22 03:03:41', '2021-09-22 03:03:41'),
(32, 1, 0, '1', 'test', '2021-09-22 03:03:49', '2021-09-22 03:03:49'),
(33, 1, 0, '1', 'test', '2021-09-22 03:05:00', '2021-09-22 03:05:00'),
(34, 1, 0, '1', 'test', '2021-09-22 04:11:54', '2021-09-22 04:11:54'),
(35, 1, 0, '1', 'test', '2021-09-22 04:12:50', '2021-09-22 04:12:50'),
(36, 1, 0, '1', 'test', '2021-09-22 04:13:17', '2021-09-22 04:13:17'),
(37, 1, 0, '1', 'test', '2021-09-22 04:13:38', '2021-09-22 04:13:38'),
(38, 1, 0, '1', 'test', '2021-09-22 04:14:02', '2021-09-22 04:14:02'),
(39, 1, 0, '1', 'test', '2021-09-22 05:38:03', '2021-09-22 05:38:03'),
(40, 1, 0, '1', 'test', '2021-09-22 05:41:49', '2021-09-22 05:41:49'),
(41, 1, 0, '1', 'test', '2021-09-22 05:42:10', '2021-09-22 05:42:10'),
(42, 1, 0, '1', 'test', '2021-09-22 05:43:11', '2021-09-22 05:43:11'),
(43, 1, 0, '1', 'test', '2021-09-22 05:43:47', '2021-09-22 05:43:47'),
(44, 1, 0, '1', 'test', '2021-09-22 05:44:03', '2021-09-22 05:44:03'),
(45, 1, 0, '1', 'test', '2021-09-22 05:44:24', '2021-09-22 05:44:24'),
(46, 1, 0, '1', 'test', '2021-09-22 05:47:10', '2021-09-22 05:47:10'),
(47, 1, 0, '1', 'test', '2021-09-22 05:47:33', '2021-09-22 05:47:33'),
(48, 1, 0, '1', 'test', '2021-09-22 05:47:53', '2021-09-22 05:47:53'),
(49, 1, 0, '1', 'test', '2021-09-22 05:49:11', '2021-09-22 05:49:11'),
(50, 1, 0, '1', 'test', '2021-09-22 06:07:55', '2021-09-22 06:07:55'),
(51, 1, 0, '1', 'test', '2021-09-22 06:08:13', '2021-09-22 06:08:13'),
(52, 1, 0, '1', 'test', '2021-09-22 06:12:44', '2021-09-22 06:12:44'),
(53, 1, 0, '1', 'test', '2021-09-22 06:14:18', '2021-09-22 06:14:18'),
(54, 1, 0, '1', 'test', '2021-09-22 06:14:49', '2021-09-22 06:14:49'),
(55, 1, 0, '1', 'test', '2021-09-22 06:18:46', '2021-09-22 06:18:46'),
(56, 1, 0, '1', 'test', '2021-09-22 06:20:11', '2021-09-22 06:20:11'),
(57, 1, 0, '1', 'test', '2021-09-22 06:20:46', '2021-09-22 06:20:46'),
(58, 1, 0, '1', 'test', '2021-09-22 06:22:01', '2021-09-22 06:22:01'),
(59, 1, 0, '2', 'test', '2021-09-22 06:29:35', '2021-09-22 06:29:35'),
(60, 1, 0, '2', 'test', '2021-09-22 06:30:05', '2021-09-22 06:30:05'),
(61, 1, 0, '2', 'test', '2021-09-22 06:47:12', '2021-09-22 06:47:12'),
(62, 1, 0, '2', 'test', '2021-09-22 07:18:16', '2021-09-22 07:18:16'),
(63, 1, 0, '2', 'test', '2021-09-22 07:18:31', '2021-09-22 07:18:31'),
(64, 1, 0, '2', 'test', '2021-09-22 23:59:04', '2021-09-22 23:59:04'),
(65, 1, 0, '2', 'test', '2021-09-22 23:59:40', '2021-09-22 23:59:40'),
(66, 1, 0, '2', 'test', '2021-09-23 02:28:50', '2021-09-23 02:28:50'),
(67, 1, 0, '2', 'test', '2021-09-23 02:29:14', '2021-09-23 02:29:14'),
(68, 1, 0, '2', 'test', '2021-09-23 02:33:51', '2021-09-23 02:33:51'),
(69, 1, 0, '2', 'test', '2021-09-23 02:34:51', '2021-09-23 02:34:51'),
(70, 1, 0, '2', 'test', '2021-09-23 02:36:16', '2021-09-23 02:36:16'),
(71, 1, 0, '2', 'test', '2021-09-23 02:36:42', '2021-09-23 02:36:42'),
(72, 1, 0, '2', 'test', '2021-09-23 02:37:30', '2021-09-23 02:37:30'),
(73, 1, 0, '2', 'test', '2021-09-23 02:38:08', '2021-09-23 02:38:08'),
(74, 1, 0, '1', 'test', '2021-09-23 02:38:23', '2021-09-23 02:38:23'),
(75, 1, 0, '1', 'test', '2021-09-23 02:38:32', '2021-09-23 02:38:32'),
(76, 1, 0, '2', 'test', '2021-09-23 02:40:40', '2021-09-23 02:40:40'),
(77, 1, 0, '2', 'test', '2021-09-23 03:48:40', '2021-09-23 03:48:40'),
(78, 1, 0, '1', 'test', '2021-09-23 04:12:27', '2021-09-23 04:12:27'),
(79, 1, 0, '1', 'test', '2021-09-23 04:13:03', '2021-09-23 04:13:03'),
(80, 1, 0, '1', 'test', '2021-09-23 04:14:17', '2021-09-23 04:14:17'),
(81, 1, 0, '1', 'test', '2021-09-23 04:15:19', '2021-09-23 04:15:19'),
(82, 2, 0, '1', 'post test', '2021-09-23 04:52:02', '2021-09-23 04:52:02'),
(83, 2, 0, '2', 'post test', '2021-09-23 04:52:16', '2021-09-23 04:52:16'),
(84, 2, 0, '1', 'test', '2021-09-24 23:07:56', '2021-09-24 23:07:56'),
(85, 2, 0, '1', 'test', '2021-09-28 05:17:47', '2021-09-28 05:17:47'),
(86, 2, 0, '1', 'test', '2021-10-04 06:15:53', '2021-10-04 06:15:53'),
(87, 2, 0, '1', 'test', '2021-10-04 06:16:23', '2021-10-04 06:16:23'),
(88, 17, 0, '1', 'create post test', '2021-10-19 23:34:45', '2021-10-19 23:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `post_comment_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `post_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`post_comment_id`, `post_id`, `customer_id`, `post_comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test', '2021-09-24 05:28:54', '2021-09-24 05:28:54'),
(2, 1, 1, 'test', '2021-09-24 05:28:59', '2021-09-24 05:28:59'),
(3, 1, 1, 'Hdhdhdh😜😀😊😃hzhzhzzhjzj 我爱你 ❌', '2021-09-24 05:30:56', '2021-09-24 05:30:56'),
(4, 1, 1, 'Hdhdhdh😛', '2021-09-24 05:47:54', '2021-09-24 05:47:54'),
(5, 1, 1, 'Hdhdhdh😛🧒🆘', '2021-09-24 05:50:16', '2021-09-24 05:50:16'),
(6, 1, 2, 'Hdhdhdh😛🧒🆘🏐', '2021-09-24 05:52:36', '2021-09-24 05:52:36'),
(7, 1, 1, 'Hdhdhdh😛🧒🆘🏐', '2021-09-25 00:04:38', '2021-09-25 00:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment_likes`
--

CREATE TABLE `post_comment_likes` (
  `post_comment_like_id` bigint(20) UNSIGNED NOT NULL,
  `post_comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `is_like` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comment_likes`
--

INSERT INTO `post_comment_likes` (`post_comment_like_id`, `post_comment_id`, `post_id`, `customer_id`, `is_like`, `created_at`, `updated_at`) VALUES
(5, 7, 1, 1, 1, '2021-09-25 01:54:21', '2021-09-25 01:54:21'),
(6, 6, 1, 1, 0, '2021-09-25 02:08:44', '2021-09-25 02:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment_reply`
--

CREATE TABLE `post_comment_reply` (
  `post_comment_reply_id` bigint(20) UNSIGNED NOT NULL,
  `post_comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `post_comment_reply` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comment_reply`
--

INSERT INTO `post_comment_reply` (`post_comment_reply_id`, `post_comment_id`, `post_id`, `customer_id`, `post_comment_reply`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'reply Hdhdhdh😛🧒🆘🏐', '2021-09-24 06:59:17', '2021-09-24 06:59:17'),
(2, 6, 1, 1, '6reply Hdhdhdh😛🧒🆘🏐', '2021-09-24 07:05:19', '2021-09-24 07:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `post_image_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `post_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`post_image_id`, `post_id`, `customer_id`, `post_image`, `created_at`, `updated_at`) VALUES
(1, 54, 1, 'test614b1731a9a79.jpg', NULL, NULL),
(2, 54, 1, 'test614b1731a9cb8.jpg', NULL, NULL),
(3, 54, 1, 'test614b1731a9f04.jpg', NULL, NULL),
(4, 55, 1, 'test614b181e318d7.jpg', NULL, NULL),
(5, 55, 1, 'test614b181e31bf6.jpg', NULL, NULL),
(6, 57, 1, 'test614b189662464.jpg', NULL, NULL),
(7, 57, 1, 'test614b18966269a.jpg', NULL, NULL),
(8, 58, 1, 'test614b18e1a5ed6.jpg', '2021-09-22 05:39:01', '2021-09-22 05:39:01'),
(9, 58, 1, 'test614b18e1a6180.jpg', '2021-09-22 05:39:01', '2021-09-22 05:39:01'),
(10, 74, 1, 'post_img614c35f775906.jpg', '2021-09-23 02:39:23', '2021-09-23 02:39:23'),
(11, 74, 1, 'post_img614c35f775bf8.jpg', '2021-09-23 02:39:23', '2021-09-23 02:39:23'),
(12, 75, 1, 'post_img614c36000d681.jpg', '2021-09-23 02:39:32', '2021-09-23 02:39:32'),
(13, 75, 1, 'post_img614c36000d92d.jpg', '2021-09-23 02:39:32', '2021-09-23 02:39:32'),
(14, 78, 1, 'post_img614c4c034911c.jpg', '2021-09-23 03:39:27', '2021-09-23 03:39:27'),
(15, 79, 1, 'post_img614c4c27a6821.jpg', '2021-09-23 03:39:03', '2021-09-23 03:39:03'),
(16, 80, 1, 'post_img614c4c715ba0b.jpg', '2021-09-23 03:39:17', '2021-09-23 03:39:17'),
(17, 81, 1, 'post_img614c4cafcd2c7.jpg', '2021-09-23 03:39:19', '2021-09-23 03:39:19'),
(18, 82, 2, 'post_img614c554a326b5.jpg', '2021-09-23 04:39:02', '2021-09-23 04:39:02'),
(19, 84, 2, 'post_img614ea7a428201.jpg', '2021-09-24 22:39:56', '2021-09-24 22:39:56'),
(20, 84, 2, 'post_img614ea7a4284b6.jpg', '2021-09-24 22:39:56', '2021-09-24 22:39:56'),
(21, 84, 2, 'post_img614ea7a42864f.jpg', '2021-09-24 22:39:56', '2021-09-24 22:39:56'),
(22, 88, 17, 'post_img616fa36d6a07a.jpg', '2021-10-19 23:40:45', '2021-10-19 23:40:45'),
(23, 88, 17, 'post_img616fa36d6a409.jpg', '2021-10-19 23:40:45', '2021-10-19 23:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `post_likes_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `is_like` int(11) NOT NULL DEFAULT 0 COMMENT '0=unlike,1=like',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`post_likes_id`, `customer_id`, `post_id`, `is_like`, `created_at`, `updated_at`) VALUES
(5, 1, 4, 1, '2021-09-24 01:09:42', '2021-09-24 02:28:40'),
(8, 1, 16, 1, '2021-09-24 01:45:12', '2021-09-24 01:55:16'),
(11, 1, 19, 1, '2021-09-24 03:45:37', '2021-09-24 03:45:37'),
(13, 1, 3, 1, '2021-09-25 00:04:32', '2021-09-25 00:04:32'),
(15, 1, 20, 1, '2021-09-28 04:32:46', '2021-09-28 04:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `post_messages`
--

CREATE TABLE `post_messages` (
  `post_msg_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `post_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_messages`
--

INSERT INTO `post_messages` (`post_msg_id`, `post_id`, `customer_id`, `receiver_id`, `post_message`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'test', '2021-09-27 00:31:04', '2021-09-27 00:31:04'),
(2, 1, 1, 2, 'test', '2021-09-27 00:31:34', '2021-09-27 00:31:34'),
(3, 1, 1, 3, 'test3', '2021-09-27 00:57:12', '2021-09-27 00:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `post_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_types`
--

INSERT INTO `post_types` (`post_type_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Image', 1, '2021-09-22 05:50:00', '2021-09-22 05:50:13'),
(2, 'Video', 1, '2021-09-22 05:50:16', '2021-09-22 05:50:18'),
(3, 'Text', 1, '2021-09-22 05:50:21', '2021-09-22 05:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `post_videos`
--

CREATE TABLE `post_videos` (
  `post_video_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `customer_id` bigint(11) NOT NULL,
  `post_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_videos`
--

INSERT INTO `post_videos` (`post_video_id`, `post_id`, `customer_id`, `post_video`, `created_at`, `updated_at`) VALUES
(1, 60, 1, 'test614b1ac550c8d.mp4', '2021-09-22 06:39:05', '2021-09-22 06:39:05'),
(2, 76, 1, 'post_vdo614c36809f6f0.mp4', '2021-09-23 02:39:40', '2021-09-23 02:39:40'),
(3, 77, 1, 'post_vdo614c4670b16fd.mp4', '2021-09-23 03:39:40', '2021-09-23 03:39:40'),
(4, 83, 2, 'post_vdo614c5558b20ec.mp4', '2021-09-23 04:39:16', '2021-09-23 04:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'test', '#test', NULL, '123.00', '2021-09-17 02:21:43', '2021-09-17 02:21:43'),
(2, 'test', '#test', NULL, '123.00', '2021-09-17 02:29:48', '2021-09-17 02:29:48'),
(3, 'test', '#test', NULL, '123.00', '2021-09-17 02:30:16', '2021-09-17 02:30:16'),
(4, 'test', '#test', NULL, '123.00', '2021-09-17 02:33:50', '2021-09-17 02:33:50'),
(5, 'test', '#test', NULL, '123.00', '2021-09-17 02:34:30', '2021-09-17 02:34:30'),
(6, 'test', '#test', NULL, '123.00', '2021-09-17 02:37:30', '2021-09-17 02:37:30');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1MlhbMrWUhOzwTeGNiWiw57zbKIASPPzLaFFEBvc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHVZTXN3NloxcklZMHJ5N21POE1kQnhIbElHbnRHc1ZZRm85UklHQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1631788729),
('35uXZ1uqUxNhh5MfnWzJhknqIOBavTHFwgBExN9G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3YwakFtQTNNcEdmeHoxMG1Ybm5EcVlQNTNMU0lieVNhYnpvY0tPciI7czo1OiJzdGF0ZSI7czo0MDoidlltYU5sVTd3REN5amtWUlozNkV4NUdNVkFMRnFWdzRidWRDNzdrNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1631793385),
('5geOagYWv8NLvpn7j5IOhy5zMIBYbN2AGkzERXpV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidTJJTnF2WU1QWVRNcGF6bVRLcWVPWkZha25zcGZGcXBvTHY3TG9RNCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1631787509),
('60kVyQfZAgyz43mhjxAB7e93Ap585j3x43lj3gqD', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV0tpT3VHSnNobFk5RDZ3ZnQxYldTUENjYTF0eVVRczZUbE5idnRLcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvZ29vZ2xlL2NhbGxiYWNrP2F1dGh1c2VyPTAmY29kZT00JTJGMEFYNFhmV2pjVVp0RUpSYnNWeE9ocEhfWWVac2FGZUhDNGNmSkIwLTN4WlZQVkJhY0kzOFZHTEl2QVduRUZPYjBQWFBsTncmcHJvbXB0PW5vbmUmc2NvcGU9ZW1haWwlMjBwcm9maWxlJTIwb3BlbmlkJTIwaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlYXBpcy5jb20lMkZhdXRoJTJGdXNlcmluZm8ucHJvZmlsZSUyMGh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZWFwaXMuY29tJTJGYXV0aCUyRnVzZXJpbmZvLmVtYWlsJnN0YXRlPUdPVFAwaG9VOW03Q1VLYVppNTZWcVQxWHZ3b1pMT0RzRUNKZEsxWDYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo5O30=', 1631787508),
('91tkmQVrVP4JwNXMnXFYREyW8UvicaxgNeaHQvbL', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTmw1MldaREF2RmwxbHM0eWVmNVAxT3hoVFB4R3FJcEtxWGJtRHN5cyI7czo1OiJzdGF0ZSI7czo0MDoiVzlUbm93VkppQTFFdVR6OWJFdEIxbnpEZU9abU5OT3VrZ1dLS0xldSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631788705),
('CE3zEbseKwPQk3nNn3lW72uvsar9hTKVHC3X8XZj', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia1F2V2swMnZpTVUzOXJEd05VdVRWNnFHdWZQRUp4VFFYaU1aZmpPayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvZ29vZ2xlL2NhbGxiYWNrP2F1dGh1c2VyPTAmY29kZT00JTJGMEFYNFhmV2o1VXludDFteU5laTRwX21QV3ZUbDVvc0dER25EQi04U2dRRnZsVGhXVkNfWmozR2tVcFFmamdTblFjYkNYN0EmcHJvbXB0PW5vbmUmc2NvcGU9ZW1haWwlMjBwcm9maWxlJTIwaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlYXBpcy5jb20lMkZhdXRoJTJGdXNlcmluZm8uZW1haWwlMjBvcGVuaWQlMjBodHRwcyUzQSUyRiUyRnd3dy5nb29nbGVhcGlzLmNvbSUyRmF1dGglMkZ1c2VyaW5mby5wcm9maWxlJnN0YXRlPTMwQmp2YWJtMHQwa1NRaW94MGIweGlUZEJwRlRZS3RIMnIyMmNnZXAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1631788728),
('dSc8Bb7townh4ZmCd8VKZSiM5T75aMzyLDCXk7A0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmt6RkFTcEF1anU1Y3NHOEdsSzc5azFPNmlhVlcyUklrdHozRER5aSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1631788821),
('e5Z3vUnwl8QYf2qutZIG6mV8BAX6Du9xdS8NUdiq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRzJHWnpGUFlkVHU3bXViVHo0bVc2UlpycGdvVHdGZ0FhUGdsTWNMYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1631787450),
('etAC1ltO0MOCet8rPgt0TfHxnHZLZUsDXx3Q5AZJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1BnVjB4VmtEWWE3RHNNY0Q5c3pYYm9Qb244cUNCUlBmcVozVWxYaCI7czo1OiJzdGF0ZSI7czo0MDoiMkNiZGN6VUFmYU5LTmp2cFQySGoybE50NDNPZWlQdlNySmZMMjY1RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631774455),
('ftNihVj8Sq6onbGOaysUJVWX9WWbnCIptyiJkEfw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1FvVmxIQm9pam03ZnZxcUtKeUlEcURVVGtRaGs0YlMyemF0V3VxRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631775085),
('fzzdoxOlBUfyW8XRv987CyiY1l5JfFKH3c3WHSPZ', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVRIMldwOW5lZ0plNGpCbVRUSEVpWlVoS1NEeGpwUkVJTG1LOVJXZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1633347964),
('G3ogTvDAiDbGe67vxRtjFtQVwh9F2FEDjh8Mi0zD', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3EzZ1NOejE5OXoyTTd0N1RiYzlaRHh0WTl4cmJpQTFjb2lFM3hEciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632297738),
('gslalOodcyjV6Fr8JqROhl7dn0YnTHVamQWRR6ya', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2dRUHBlWWlEWWEyQmtiOHZHVk5qdUdvUGJSbEFZQUIzWXlneXpRZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631867048),
('Ho4qXsJr58p7BeaJqTB5RBVtAtQpaujbvQ1YpTcx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHFRNk0zWXA1Rm13ZnVINjNncmlzZWpIUHgzeUhCYnJnekVUNjRpTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631778265),
('K4rAB87YJK4Qbv27ZSqBgYbZAYm4TzJcf9Y0BayS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHdCb1hIM2dYamtIcExqS3hRWFlnMVk0M3hFaHdwT2hzc2JhZFhzRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9nZW5lcmF0b3JfYnVpbGRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1633524628),
('PKy5OiL38l8TkNKm1v6LzsJPVoi5RDTKdnaEWRR3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFlueFZpTUI0SlozWGxicUZvbkVQMUZENjZ5U0hKOWN2OGJheHdReCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632291847),
('qw7fJKYbCk9V1cJ82tvvHVm4gbKtQpg6xr387ljo', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQWoxdWcyQWY2YUowaXpJNkxYTnZHajJ2TzVpd3E4RGNudTFaTGNraCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvZ29vZ2xlL2NhbGxiYWNrP2F1dGh1c2VyPTAmY29kZT00JTJGMEFYNFhmV2owUmtDQzZWS2hUbHVxNVNRelg2ZG9OLWRENW1mR3JfS1RvWW56TXZ1TmEtMEFhVWc0bHlRY3JwWVpjRjZxZXcmcHJvbXB0PW5vbmUmc2NvcGU9ZW1haWwlMjBwcm9maWxlJTIwaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlYXBpcy5jb20lMkZhdXRoJTJGdXNlcmluZm8ucHJvZmlsZSUyMGh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZWFwaXMuY29tJTJGYXV0aCUyRnVzZXJpbmZvLmVtYWlsJTIwb3BlbmlkJnN0YXRlPWdFcElwTzdtOTBkM1h4VExwQ2E5MGV1NUN5UEM0YTNRTFNXVHNTRzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1631788229),
('r5Ycx5s0txT6fv8KMea8wmTCL4mwOBAUD8K7DW3Z', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTlBVd2JibjZ2UWl3RFE4NmIwb2tFYkhJZklxUDhGQ1JwMFdIMWxJMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvZ29vZ2xlL2NhbGxiYWNrP2F1dGh1c2VyPTAmY29kZT00JTJGMEFYNFhmV2lDMGhBQnZQZGppWDFNUmFlU21VYkxtQjNvUW80ZWk2ODYxSEt1N0diYmlGbU9kTzhYc1o2NF9HV1RWbmhQcGcmcHJvbXB0PW5vbmUmc2NvcGU9ZW1haWwlMjBwcm9maWxlJTIwaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlYXBpcy5jb20lMkZhdXRoJTJGdXNlcmluZm8ucHJvZmlsZSUyMGh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZWFwaXMuY29tJTJGYXV0aCUyRnVzZXJpbmZvLmVtYWlsJTIwb3BlbmlkJnN0YXRlPUxoeTV1U3ZFVldPSkwwSXVoVzN5a2dEckJBV25RZjNobmhmVTlzZjciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1631788821),
('SH1KbfChPUmT658p7amssb4azQWRPeAW2D4IrZj4', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZHVvZHIxN1Y4SmhaU2d5SWg1Q0tUMFJ4bWhaTnJ0eUlFeGRhUVhmaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvZ29vZ2xlL2NhbGxiYWNrP2F1dGh1c2VyPTAmY29kZT00JTJGMEFYNFhmV2dicGZGU29DeE5wc0k4OTZGVG0xX2dZQ0hpUTdlWTJ2M2t2VXo0eW9vVEZEVUxQdTMwX3NaSHN3UGNud1ZUWWcmcHJvbXB0PW5vbmUmc2NvcGU9ZW1haWwlMjBwcm9maWxlJTIwaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlYXBpcy5jb20lMkZhdXRoJTJGdXNlcmluZm8ucHJvZmlsZSUyMGh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZWFwaXMuY29tJTJGYXV0aCUyRnVzZXJpbmZvLmVtYWlsJTIwb3BlbmlkJnN0YXRlPWtTS3NWdDVucHFJcEY0cFVZOEFrWTVSUGRWU3hkaU1DN0NVRE83NXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1631787449),
('t4Y3i48awZyNQOi1OE2rpNiPoN7W5W9sfU430ZBo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3Y3UVhnbUkxS2U2MHhreVJWUHBPRUcxMUlwdUxHekZIczFVejB0byI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1631788230),
('UGrIuBpOlY62eKkT3N05Vx7vpQkR6fjIpDSwlRTO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXlUbTVNVEFqZ2dvWm11Zk5pd3ZKSFZGVjM1WnQzVFRMUXRSSURoTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1634542883),
('Uobqd8ddxNpU8vbBNDZ1Mk5oiFI6LYBsMJhyWOVO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWk5za3hTUWU5RjhRdTU2ZFNQSFc3UHlFY0ppUHRHT2JOUXAzQWFYeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631773836),
('WeY5FnmVfla5J8B7wE9ealYW0SDb0b8telPo1TaG', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUVNNFpGWkgwYnVRTHB6ZVZuc0FMT2pzQXhJeXBvOG1LR3F6eEVtOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632200588),
('ZowaBI88tEV9o1UJSn66evgozeNbnfJiMvTG4I8n', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicU5UQmRZOEJlNmhmdExYYWh4S0gyM09OallGWXN4eHRhemJuZmJGSyI7czo1OiJzdGF0ZSI7czo0MDoiczJ2bmV6RzE4eXRYWVU1eGw1N1k4elVya1QycWhOY0JacG1RUjV5NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631777347),
('ztzoC36fMv8WM4Dih65JdLuhBAHkxOgTN6LqX60D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibm5aS050dUNXdUQ2SXhzeW10MmJ2TmdYNFU2RWVTSXhPOXRUVGtQTiI7czo1OiJzdGF0ZSI7czo0MDoiY0NDQmFvR3ZnNTc2R3A5ako1SEJ2cHlsa0pwbTd4blc4V3A4MThEMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631773820),
('zwtUt4QmGSSHsv27eZ1YrwZQqigvvytHCNkjF34f', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaVZxYnJTSzF2aXYzVmtXdTZ1TE1zTHhIdjN5cFByazh3OFNxV3pzQyI7czo1OiJzdGF0ZSI7czo0MDoiVk10MHp5b3NkSnlNN29aeFd0RWdsMHExaTBnZmlHOU9aRUFjZ2ZPaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631775110);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country_code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `facebook_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `social_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` int(50) DEFAULT NULL COMMENT '0 = Female, 1 = Male',
  `is_active` int(50) DEFAULT 0,
  `access_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` int(50) DEFAULT NULL COMMENT '0 = Android, 1 = iOS',
  `device_token` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `country_code`, `mobile`, `facebook_id`, `google_id`, `social_type`, `dob`, `gender`, `is_active`, `access_token`, `device_type`, `device_token`, `profile_image`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'akshay.digitalinovation@gmail.com', NULL, '+91', 1234567899, NULL, NULL, '1', NULL, 2, 1, '', 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632205679.jpg', '$2y$10$3BqRgQafd5AicrdtaEM2k.Rqn6hYkADPTd2sVu36C4FOLhLtoE79y', NULL, NULL, NULL, '2021-09-21 00:58:00', '2021-10-22 06:14:49'),
(2, 'test', 'akshays@gmail.com', NULL, '+91', 123456781, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632205696.jpg', '$2y$10$N40xHTmKZMveDNveTHgt0eGa3mYyCG.SmvWScyO36uNcE2wePF/CC', NULL, NULL, NULL, '2021-09-21 00:58:16', '2021-09-21 00:58:16'),
(3, 'test', 'akshaypatel@gmail.com', NULL, '+91', 123456782, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632205765.jpg', '$2y$10$kL62uHK58x9BCkPzQwfYFedLnx7ID5wNmEOmNefNSFpB0S8cREfaS', NULL, NULL, NULL, '2021-09-21 00:59:25', '2021-09-21 00:59:25'),
(4, 'test', 'akshaypatel1@gmail.com', NULL, '+91', 123456783, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632205851.jpg', '$2y$10$KBbjflKUfn9w9Y9N/6XN3eelSgLWthSt1Viw1YaF7aDx8jY.FRpVi', NULL, NULL, NULL, '2021-09-21 01:00:51', '2021-09-21 01:00:51'),
(5, 'test', 'akshaypatel12@gmail.com', NULL, '+91', 1234567832, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632206035.jpg', '$2y$10$jSgCiOiqvHQ.GL1J3361OueQKQEHPv725TSSq9nMFNTMF4gOi1O6a', NULL, NULL, NULL, '2021-09-21 01:03:55', '2021-09-21 01:03:55'),
(6, 'test', 'akshaypatel123@gmail.com', NULL, '+91', 12345673832, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632206065.jpg', '$2y$10$f4YESOqCW7dLi/QW9AevBeLgzq4rbbhmfjjiowUXdavCc2jqxZapS', NULL, NULL, NULL, '2021-09-21 01:04:25', '2021-09-21 01:04:25'),
(7, 'test', 'akshaypatel1234@gmail.com', NULL, '+91', 123456738324, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632206133.jpg', '$2y$10$qJq2pJVAo7u04JstaaGYx.7YwQO2D9Fh/G3/nF0pLidGVsjVibnqi', NULL, NULL, NULL, '2021-09-21 01:05:33', '2021-09-21 01:05:33'),
(8, 'test', 'akshaypatel12345@gmail.com', NULL, '+91', 1234567383244, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224205.jpg', '$2y$10$RGmdTxiEjvYIBuFFYeziE.sqGAk8lDawXg..3X0cWXtVVeauKbcu6', NULL, NULL, NULL, '2021-09-21 06:06:45', '2021-09-21 06:06:45'),
(9, 'test', 'sdsds@gmail.com', NULL, '+91', 1234567867, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224546.jpg', '$2y$10$VuQ5tOXbECrUo0385HowquFsbpZCQTIi3k6RHZhjtW1VPY.5hZxkK', NULL, NULL, NULL, '2021-09-21 06:12:26', '2021-09-21 06:12:26'),
(10, 'test', 'sdsdsdsds@gmail.com', NULL, '+91', 1234567897, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224634.jpg', '$2y$10$VtDjRGWBmbUTnz4WAczjtexExoV3pdjK2urZS1BvBGfU2AQ0L9fxm', NULL, NULL, NULL, '2021-09-21 06:13:54', '2021-09-21 06:13:54'),
(11, 'test', 'sdsdssdsds@gmail.com', NULL, '+91', 1234567892, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224661.jpg', '$2y$10$ZgACo.nd43iRlh3.flr9fepM7AF6IXVAEj/xtgqyVLuNeBTIjXPxG', NULL, NULL, NULL, '2021-09-21 06:14:21', '2021-09-21 06:14:21'),
(12, 'test', 'sdsdssdddsdasds@gmail.com', NULL, '+91', 1234567894, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224940.jpg', '$2y$10$Zf/LSe.gx6e76uk86meJ2u/V1mSYgvnRwnEysAKBb2ucl8ug3bykC', NULL, NULL, NULL, '2021-09-21 06:19:00', '2021-09-21 06:19:00'),
(13, 'test', 'sdsdssdddsdadsds@gmail.com', NULL, '+91', 12345678942, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632224956.jpg', '$2y$10$1vGHIRTk7Se/GsZUV4RWa.Fvs3KTY5aSJ0HkuqVNYdCCE5PCRusoC', NULL, NULL, NULL, '2021-09-21 06:19:16', '2021-09-21 06:19:16'),
(14, 'test', 'test123hj@gmail.com', NULL, '+91', 9874563215, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632225196.jpg', '$2y$10$IloNpfKhRwS1A7UE/xAAKeo0VuYgVGqkGPuy.iqEMiI1IKWZXm5ru', NULL, NULL, NULL, '2021-09-21 06:23:16', '2021-09-21 06:23:16'),
(15, 'test', 'test123sdsdhsj@gmail.comsd', NULL, '+91', 9874563122, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1632225879.jpg', '$2y$10$RYoxM.RrqCPpyAW5oLdnw.Oa6gfuJn7kpcm3ts1ZK72PjTmHiugUm', NULL, NULL, NULL, '2021-09-21 06:34:39', '2021-09-21 06:34:39'),
(16, 'test', 'test12as@gmail.com', NULL, '+91', 9979332159, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', '', '$2y$10$jtl8PCOkNjD5crhsLv/RMeJddsWWzvwRwtgLDUerNb3XkGvO8w0BO', NULL, NULL, NULL, '2021-09-24 23:03:41', '2021-09-24 23:03:41'),
(17, 'test', 'akshay.digitalinovatiosn@gmail.com', NULL, '+91', 1234567899, NULL, NULL, '1', NULL, 1, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', '', '$2y$10$0t7Pe59qllrveuv1s7vcBOPm/Swxi8dJUz9XYVIf43CC1QVAz8tGK', NULL, NULL, NULL, '2021-10-19 23:33:26', '2021-10-22 06:51:05'),
(18, 'testa', 'akshay.digitalinovastiosn@gmail.com', NULL, '+91', 1234567899, NULL, NULL, '1', NULL, 0, 0, NULL, 1, 's3sd2df4gfg5y5hghfdg54fgdg', 'profile_1634906086.jpg', '$2y$10$PMuLRmIXFsFYu7LUrOWFZOk/4QcEo2pxTCaQWPeUrpvJHQQQkJq4C', NULL, NULL, NULL, '2021-10-22 00:18:55', '2021-10-22 07:04:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`follower_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD PRIMARY KEY (`following_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`post_comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `post_comment_likes`
--
ALTER TABLE `post_comment_likes`
  ADD PRIMARY KEY (`post_comment_like_id`),
  ADD KEY `post_comment_id` (`post_comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `post_comment_reply`
--
ALTER TABLE `post_comment_reply`
  ADD PRIMARY KEY (`post_comment_reply_id`),
  ADD KEY `post_comment_id` (`post_comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`post_image_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`post_likes_id`),
  ADD KEY `customer_id` (`customer_id`,`post_id`);

--
-- Indexes for table `post_messages`
--
ALTER TABLE `post_messages`
  ADD PRIMARY KEY (`post_msg_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `post_types`
--
ALTER TABLE `post_types`
  ADD PRIMARY KEY (`post_type_id`);

--
-- Indexes for table `post_videos`
--
ALTER TABLE `post_videos`
  ADD PRIMARY KEY (`post_video_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `follower_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `followings`
--
ALTER TABLE `followings`
  MODIFY `following_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `post_comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_comment_likes`
--
ALTER TABLE `post_comment_likes`
  MODIFY `post_comment_like_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_comment_reply`
--
ALTER TABLE `post_comment_reply`
  MODIFY `post_comment_reply_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `post_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `post_likes_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_messages`
--
ALTER TABLE `post_messages`
  MODIFY `post_msg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `post_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_videos`
--
ALTER TABLE `post_videos`
  MODIFY `post_video_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
