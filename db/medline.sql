-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 12:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medline`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `en_name`, `ar_name`, `en_details`, `ar_details`, `permalink`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'من نحن', '<h2><span style=\"font-family:comic sans ms,cursive\"><strong><span style=\"color:#0000CD\"><img alt=\"cool\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/shades_smile.png\" style=\"height:23px; width:23px\" title=\"cool\" /><img alt=\"laugh\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/teeth_smile.png\" style=\"height:23px; width:23px\" title=\"laugh\" />About us&nbsp;About us&nbsp;About us&nbsp;About us</span></strong>&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About u<img alt=\"cool\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/shades_smile.png\" style=\"height:23px; width:23px\" title=\"cool\" />s&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;About us&nbsp;</span></h2>', '<h2><span style=\"color:#FF0000\"><strong><span style=\"font-size:14px\"><span style=\"font-family:courier new,courier,monospace\">من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن من نحن&nbsp;من نحن من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;</span></span></strong></span></h2>', 'about-us', 'About,us', 'About usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout usAbout us', '2018-08-12 11:57:46', '2018-08-14 16:08:54'),
(2, 'Factory', 'المصنع', '<p>Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;Factory page details&nbsp;</p>', '<p>تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;تفاصيل المصنع&nbsp;</p>', 'factory', 'Factory', 'Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details Factory page details ', '2018-08-13 16:05:54', '2018-08-13 16:05:54'),
(3, 'Welcome', 'اهلا بك', '<h2><span style=\"color:#000080\">Welcome page details</span>&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;Welcome page details&nbsp;</h2>', '<h3><span style=\"color:#000080\">تفاصيل صفحة اهلا بك</span>&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;تفاصيل صفحة اهلا بك&nbsp;</h3>', 'welcome', 'Welcome', 'Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details Welcome page details ', '2018-08-14 09:32:25', '2018-08-14 09:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `en_title`, `ar_title`, `en_description`, `ar_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Banner title', 'عنوان الصوره', '<p>Banner description&nbsp;&nbsp;Banner description&nbsp;Banner description&nbsp;&nbsp;Banner description&nbsp;Banner description&nbsp;&nbsp;Banner description&nbsp;</p>', '<p>العربيه&nbsp;عنوان الصور بالعربيه&nbsp;عنوان الصور بالعربيه&nbsp;عنوان الصور بالعربيه&nbsp;عنوان الصور بالعربيه&nbsp;عنوان الصور بالعربيه&nbsp;عنوان الصور</p>', '16573439181534072143.jpg', '2018-08-12 11:09:04', '2018-08-14 08:36:11'),
(2, 'New banner', 'بانر جديد', '<p>New banner details&nbsp;New banner details&nbsp;New banner details&nbsp;New banner details&nbsp;New banner details&nbsp;New banner details&nbsp;New banner details&nbsp;New banner</p>', '<p>بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;بانر جديد تفاصيل&nbsp;</p>', '15962273951534236960.jpg', '2018-08-14 08:56:01', '2018-08-14 08:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `en_name`, `ar_name`, `created_at`, `updated_at`) VALUES
(1, 'Pharmacy', 'صيدليات', '2018-08-12 10:37:18', '2018-08-12 10:37:18'),
(2, 'Hospitals', 'مستشفيات', '2018-08-15 08:44:07', '2018-08-15 08:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `en_name`, `ar_name`, `en_details`, `ar_details`, `created_at`, `updated_at`) VALUES
(1, 'New Job', 'وظيفه جديده', '<p>New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;New job details&nbsp;</p>', '<p>تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;تفاصيل وظيفة جديدة&nbsp;</p>', '2018-08-12 11:26:12', '2018-08-12 11:26:12'),
(2, 'We are hiring', 'وظيفة جديده', '<p>We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;We are hiring senior&nbsp;</p>', '<p>نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور&nbsp;نحن بحاجة الى سينيور نحن بحاجة الى سينيور&nbsp;</p>', '2018-08-15 13:22:20', '2018-08-15 13:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_apply`
--

CREATE TABLE `jobs_apply` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs_apply`
--

INSERT INTO `jobs_apply` (`id`, `name`, `email`, `details`, `cv`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'Ayman', 'ayman@elmalah.com', 'Hello there', '16754808721534410858.pdf', 1, '2018-08-16 09:14:18', '2018-08-16 09:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'if 0 not seen elseif 1 then its seen elseif 2 replied',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ayman Elmalah', 'ayman@elmalah.com', 'Hello from Post man', 0, '2018-08-14 13:29:45', '2018-08-14 13:29:45'),
(2, 'Ayman Elmalah', 'ayman@elmalah.com', 'hello from browser', 0, '2018-08-14 13:35:31', '2018-08-14 13:35:31'),
(3, 'Ayman Elmalah', 'ayman@elmalah.com', 'Hello again', 0, '2018-08-14 13:37:03', '2018-08-14 13:37:03'),
(4, 'ايمن الملاح', 'ayman@elamal.com', 'السلام عليكم', 0, '2018-08-14 13:38:13', '2018-08-14 13:38:13'),
(5, 'ايمن الملاح', 'ayman@elmalah.com', 'السلام عليكم', 0, '2018-08-14 13:39:04', '2018-08-14 13:39:04'),
(6, 'Ayman Elmalah', 'ayman@elmalah.com', 'Hello', 0, '2018-08-14 13:40:10', '2018-08-14 13:40:10'),
(7, 'ايمن الملاح', 'ayman@elmalah.com', 'اهلا', 0, '2018-08-14 13:40:25', '2018-08-14 13:40:25'),
(8, 'ايمن الملاح', 'ayman@elmalah.com', 'ايمن الملاح يرحب بكم', 0, '2018-08-14 13:42:09', '2018-08-14 13:42:09'),
(9, 'ايمن الملاح', 'ayman@elmalah.com', 'ايمن الملاح معكم', 0, '2018-08-14 13:42:51', '2018-08-14 13:42:51'),
(10, 'Ayman', 'ayman@elmalah.com', 'Hello', 0, '2018-08-14 13:43:53', '2018-08-14 13:43:53'),
(11, 'ايمن', 'ayman@elmalah.com', 'اهلا يك', 0, '2018-08-14 13:44:09', '2018-08-14 13:44:09'),
(12, 'Ahmed', 'ayman@elmalah.com', 'sdfrgtrhythjh', 0, '2018-08-14 14:20:37', '2018-08-14 14:20:37'),
(13, 'ايمن', 'ayman@elmalah.com', 'اهلا بك', 0, '2018-08-14 14:21:44', '2018-08-14 14:21:44'),
(14, 'Ahmed', 'ayman@elmalah.com', 'sasasa', 0, '2018-08-14 14:22:22', '2018-08-14 14:22:22'),
(15, 'Ayman Elmalah', 'ayman@elmalah.com', 'sdafdsgdf', 1, '2018-08-14 14:23:30', '2018-08-14 14:23:30'),
(16, 'ayman', 'ayman@elmalah.com', 'Hello from contact form', 0, '2018-08-15 15:01:22', '2018-08-15 15:01:22'),
(17, 'Ahmed', 'ayman@elmalah.com', 'dsdsfegrty', 0, '2018-08-15 15:01:50', '2018-08-15 15:01:50');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_25_180630_create_categories_table', 1),
(4, '2018_07_26_103417_create_products_table', 1),
(5, '2018_07_26_123419_create_product_images_table', 1),
(6, '2018_07_26_133646_create_banners_table', 1),
(7, '2018_07_26_150601_create_agents_table', 1),
(8, '2018_07_26_154034_create_news_table', 1),
(9, '2018_07_26_164953_create_settings_table', 1),
(10, '2018_07_30_093328_create_mails_table', 1),
(11, '2018_07_30_104506_create_abouts_table', 1),
(12, '2018_07_30_144054_create_jobs_table', 1),
(14, '2018_08_16_104240_create_jobs_apply_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `en_title`, `ar_title`, `en_details`, `ar_details`, `image`, `permalink`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Welcome in our website', 'اهلا بكم فى موقع الشركه', '<p>Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;Welcome in our website&nbsp;</p>', '<p>اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;اهلا بكم فى موقع الشركه&nbsp;</p>', '19546352801534074033.jpg', 'welcome-in-our-website', 'Welcome,in,our,website', 'Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website ', '2018-08-12 11:40:34', '2018-08-12 11:40:34'),
(2, 'The second news', 'الخبر الثانى', '<p>The second news details&nbsp;The second news details&nbsp;The second news details&nbsp;The second news details&nbsp;The second news details&nbsp;The second news details The second news details The second news details The second news details&nbsp;The second news details&nbsp;The second news details&nbsp;</p>', '<p>تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;تفاصيل الخبر الثانى&nbsp;</p>', '15105987441534245379.jpg', 'the-second-news', 'The,second,news', 'The second news details The second news details The second news details The second news details The second news details The second news details The second news details The second news details The second news details The second news details The second news details ', '2018-08-14 11:16:20', '2018-08-14 11:16:20');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `permalink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'its for seo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `en_name`, `ar_name`, `en_details`, `ar_details`, `image`, `category_id`, `permalink`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'New product New product', 'منتج جديد منتج جديد', '<p>New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;New product details&nbsp;</p>', '<p>تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد تفاصيل المنتج الجديد تفاصيل المنتج الجديد تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;تفاصيل المنتج الجديد&nbsp;</p>', '19848226691534071065.jpg', 1, 'new-product', 'New,product', 'New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details New product details ', '2018-08-12 10:51:06', '2018-08-14 10:01:43'),
(2, 'Product 2', 'منتج 2', '<p>Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;Product 2 details&nbsp;</p>', '<p>تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;تفاصيل منتج 2&nbsp;</p>', '11151059961534322319.jpg', 1, 'product-2', 'Product,2', 'Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details Product 2 details ', '2018-08-15 08:38:39', '2018-08-15 08:38:39'),
(3, 'Hospitals product', 'منتج للمستشفيات', '<h2><img alt=\"laugh\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/teeth_smile.png\" style=\"height:23px; width:23px\" title=\"laugh\" /><img alt=\"cool\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/shades_smile.png\" style=\"height:23px; width:23px\" title=\"cool\" />&nbsp;<strong><span style=\"color:#0000CD\">Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;</span>&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product d<span style=\"color:#FF0000\">etails&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product d</span>etails&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;Hospital product details&nbsp;&nbsp;</strong></h2>', '<h2 style=\"font-style:italic\"><span style=\"color:#000000\"><strong><span style=\"font-size:18px\"><span style=\"font-family:comic sans ms,cursive\"><img alt=\"smiley\" src=\"https://cdn.ckeditor.com/4.4.3/full/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" />تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج</span></span></strong></span><span style=\"color:#2F4F4F\"><strong><span style=\"font-size:18px\"><span style=\"font-family:comic sans ms,cursive\"> للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج</span></span></strong></span><span style=\"color:#000000\"><strong><span style=\"font-size:18px\"><span style=\"font-family:comic sans ms,cursive\"> للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;تفاصيل منتج للمستشفيات&nbsp;</span></span></strong></span></h2>', '1754833381534322732.jpg', 2, 'hospitals-product', 'Hospitals,product', 'Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  Hospital product details  ', '2018-08-15 08:45:32', '2018-08-15 09:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '19413888181534071510.jpg', 1, NULL, NULL),
(2, '8877656011534324197.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `email`, `address`, `lat`, `lon`, `facebook`, `twitter`, `googleplus`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '+(202) 123 456 89', 'info@medline.com', 'Cairo, Egypt', '30.0668537', '31.336261700000023', 'https://www.facebook.com/medline', 'https://www.twitter.com/medline', 'https://www.googleplus.com/medline', 'https://www.linkedin.com/medline', NULL, '2018-08-14 14:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayman Elmalah', 'ayman@elmalah.com', '$2y$10$DPuoaA1r7KJP4DzWuRqnd.5l8KiTWVGTxiu9gsgqxoA1y1.cV0QAu', 'GJKvseIyWAYzCyBh36WLIkTjVYV6CdPZ9THA5Fook9Ly7AB11VQ16ukfGFed', NULL, NULL),
(2, 'Ayman', 'ayman1@elmalah.com', '$2y$10$9ejW6OLm5e7Vc9ADNQtjUOvPi8WzTMCthZ0lBrc8gm3hyQH2SMMSa', NULL, '2018-08-12 10:31:18', '2018-08-12 10:31:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_apply`
--
ALTER TABLE `jobs_apply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_apply_job_id_foreign` (`job_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs_apply`
--
ALTER TABLE `jobs_apply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs_apply`
--
ALTER TABLE `jobs_apply`
  ADD CONSTRAINT `jobs_apply_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
