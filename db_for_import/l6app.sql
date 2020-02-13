-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2020 at 12:26 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l6app`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `seller_id`, `name`, `ent_date`) VALUES
(1, 1, 'Test Company', '2019-03-14 10:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2020_01_17_070911_create_posts_table', 1),
(10, '2020_01_22_130343_create_sessions_table', 1),
(11, '2020_02_03_095557_create_programs_table', 1),
(12, '2020_02_06_062832_create_programs_table', 0),
(13, '2020_02_07_064104_create_seller_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_client_id_foreign` (`client_id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_client_id_foreign` (`client_id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_foreign` (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_foreign` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `unit` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `customer` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `warp_count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `warp_yarn_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `warp_yarn_blend` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft1_count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft1_yarn_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft1_yarn_blend` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft2_count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft2_yarn_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft2_yarn_blend` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft3_count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft3_yarn_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft3_yarn_blend` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft4_count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft4_yarn_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weft4_yarn_blend` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_end` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_pick` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_width` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_fabric_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_selvedge` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_writing` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `w_writing_val` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sub_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `construction` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fabric_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `order_quantity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `design_status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Pending',
  `design_status_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `design_status_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dispatch_address` text CHARACTER SET utf8 DEFAULT NULL,
  `dispatch_quantity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `stock_quantity` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `sample_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sample_word` varchar(255) CHARACTER SET utf8 DEFAULT 'Pending',
  `dispatch_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `selvedge_color` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `delivered_quantity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `looms` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `closing_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `produced_quantity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `change_by` int(11) DEFAULT NULL,
  `remarks` text CHARACTER SET utf8 DEFAULT NULL,
  `set_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Pending',
  `thisonetoshow` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'yes',
  `whichcolumnch` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'new',
  `levelcode` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Master',
  `subcode_number` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `mastercode` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `style_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `waiting_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `etm_code` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `stock_at_stm` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `notes_for_us` varchar(5000) CHARACTER SET utf8 DEFAULT NULL,
  `warp_cont` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `weft1_cont` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `weft2_cont` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `weft3_cont` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `weft4_cont` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `running_priority` int(11) NOT NULL DEFAULT 1,
  `on_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `ent_date`) VALUES
(1, 'abc', '2019-04-03 06:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `seller_id`, `name`, `ent_date`) VALUES
(1, 1, 'Test Unit', '2019-03-14 10:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `user_type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'user',
  `master` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weaving_extras`
--

DROP TABLE IF EXISTS `weaving_extras`;
CREATE TABLE IF NOT EXISTS `weaving_extras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'warp count',
  `ent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weaving_extras`
--

INSERT INTO `weaving_extras` (`id`, `seller_id`, `name`, `type`, `ent_date`) VALUES
(1, 3, '5080', 'warp count', '2019-12-14 09:41:20'),
(18, 3, 'test warp', 'warp type', '2019-12-14 09:56:25'),
(20, 3, 'Red cotton', 'warp blend', '2019-12-14 09:57:27'),
(28, 3, 'test fabric', 'fabric type', '2019-12-14 10:01:19'),
(36, 3, 'test selvedge', 'selvedge', '2019-12-14 10:02:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
