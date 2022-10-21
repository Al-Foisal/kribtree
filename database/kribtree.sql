-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2022 at 04:17 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kribtree`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `logo`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Email', '<i class=\"fas fa-envelope\"></i>', '<a href=\"mailto:support.mail@kribtree.com\">support.mail@kribtree.com</a>', 1, 1, '2021-09-20 16:42:08', '2021-09-20 16:48:10', NULL),
(2, 'Mobile', '<i class=\"fas fa-phone-volume\"></i>', '<a href=\"tel:+880\">+880</a>', 2, 1, '2021-09-20 17:13:25', '2022-09-08 12:07:45', NULL),
(3, 'Whatsapp', '<i class=\'fab fa-whatsapp\'></i>', '<a href=\"https://wa.me/+880\">Text whatsapp!</a>', 3, 1, '2021-09-20 17:19:53', '2022-09-08 12:07:56', NULL),
(4, 'Address', '<i class=\"fas fa-map-marker-alt\"></i>', 'Address, KRIBTREE LLC\nNEWYORK.', 5, 1, '2021-09-20 17:26:11', NULL, NULL),
(5, 'Skype', '<i class=\'fab fa-skype\'></i>', '<a href=\"https://\">Call me skype!</a>', 4, 1, '2022-02-24 03:51:46', '2022-09-08 12:08:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttonName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `title`, `buttonName`, `link`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'images/home/1662498103.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; background-color: rgb(247, 247, 247);\">Hello. We Are KRIBTREE.</span><br></p>', 'WHO WE ARE', '#', 1, 1, '2022-09-06 21:01:43', '2022-09-06 21:27:19', NULL),
(2, 'images/home/1662498229.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; background-color: rgb(239, 239, 239);\">We Know Environments.</span><br></p>', 'WHAT WE DO', '#', 2, 1, '2022-09-06 21:03:49', '2022-09-06 21:28:03', NULL),
(3, 'images/home/1662498296.jpg', '<div class=\"thrv_wrapper thrv_text_element optml-bg-lazyloaded\" data-css=\"tve-u-1826ea639e9\" style=\"box-sizing: content-box; font-family: futura-pt; overflow-wrap: break-word; margin: 0px; padding: 1px; font-size: 18px; box-shadow: none !important; --tve-applied-box-shadow:none  !important;\"><p data-css=\"tve-u-1826ecddc51\" style=\"box-sizing: inherit; font-family: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 24px; --tcb-typography-font-family: inherit; text-shadow: rgba(255, 255, 255, 0.72) 2px 2px 2px; --tve-applied-text-shadow:2px 2px 2px rgba(255,255,255,0.72); text-align: center; font-size: 61px !important; line-height: 1.2em !important; font-weight: var(--g-bold-weight,bold)  !important; --tcb-applied-color:rgb(41,41,42)  !important; --tve-applied-color:rgb(41,41,42)  !important;\"><span style=\"color: rgb(66, 66, 66);\">We Solve the Right Problems.</span><br></p></div>', 'HOW WE DO IT', '#', 3, 1, '2022-09-06 21:04:56', '2022-09-06 21:29:13', NULL),
(4, 'images/home/1662498336.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center;\">See Our Press.</span><br></p>', 'WHAT THEY\'RE SAYING', '#', 4, 1, '2022-09-06 21:05:36', '2022-09-06 21:05:36', NULL),
(5, 'images/home/1662498433.jpg', '<p><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(156, 156, 148);\">Read Our Blog.</span><br></p>', 'WHAT WE\'RE SAYING', '#', 5, 1, '2022-09-06 21:07:13', '2022-09-06 21:29:44', NULL),
(6, 'images/home/1662498552.jpg', '<p><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(247, 247, 247);\">Become a Part of the Team.</span><br></p>', 'JOIN US', '#', 6, 1, '2022-09-06 21:09:12', '2022-09-06 21:30:07', NULL),
(7, 'images/home/1662498662.jpg', '<p><span style=\"color: rgb(41, 41, 42); font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center;\">IA is Around </span><span style=\"font-family: futura-pt; font-size: 61px; font-weight: 700; text-align: center; color: rgb(156, 156, 148);\">the Globe.</span><br></p>', 'FIND IA', '#', 7, 1, '2022-09-06 21:11:02', '2022-09-06 21:30:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `title`, `url`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Blog', '#', 1, 1, '2022-09-06 21:12:39', '2022-09-06 21:12:39', NULL),
(2, 'Videos', '#', 2, 1, '2022-09-06 21:12:49', '2022-09-06 21:12:49', NULL),
(3, 'Webinars', '#', 3, 1, '2022-09-06 21:12:58', '2022-09-06 21:12:58', NULL),
(4, 'Research', '#', 4, 1, '2022-09-06 21:13:09', '2022-09-06 21:13:09', NULL),
(5, 'Press', '#', 5, 1, '2022-09-06 21:13:19', '2022-09-06 21:13:19', NULL);

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
(4, '2021_08_02_134009_create_social_sites_table', 1),
(5, '2021_08_03_033321_create_homes_table', 1),
(6, '2021_08_22_135951_create_contacts_table', 1),
(8, '2022_09_07_000040_create_usefull_links_table', 1),
(9, '2022_09_07_000145_create_leaderships_table', 1),
(12, '2022_09_10_003246_create_services_table', 2),
(13, '2022_09_10_003335_create_real_estates_table', 2),
(17, '2022_09_11_000229_create_professional_networks_table', 3),
(18, '2022_09_11_005013_create_professional_network_services_table', 3),
(19, '2022_09_11_012942_create_professional_net_services_table', 4),
(20, '2022_09_15_234745_create_product_categories_table', 5),
(22, '2022_09_06_231605_create_products_table', 6);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryId`, `name`, `image`, `details`, `price`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 1, 'Product name', 'images/product/1663344732.jpeg', '<p>details</p>', '150', 1, 1, '2022-09-16 16:12:12', '2022-09-16 16:12:12', NULL),
(28, 2, 'Product name', 'images/product/1663344762.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '160', 2, 1, '2022-09-16 16:12:42', '2022-09-16 16:12:42', NULL),
(29, 1, 'Product name', 'images/product/1663344792.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;</p>', '180', 3, 1, '2022-09-16 16:13:12', '2022-09-16 16:13:12', NULL),
(30, 3, 'Product name', 'images/product/1663344814.jpeg', '<p>details</p>', '200', 4, 1, '2022-09-16 16:13:34', '2022-09-16 16:13:34', NULL),
(31, 1, 'Product name', 'images/product/1663344832.jpeg', '<p>details</p>', '220', 5, 1, '2022-09-16 16:13:52', '2022-09-16 16:13:52', NULL),
(32, 1, 'Product name', 'images/product/1663344853.jpeg', '<p>details</p>', '230', 6, 1, '2022-09-16 16:14:13', '2022-09-16 16:14:13', NULL),
(33, 2, 'Product name', 'images/product/1663344732.jpeg', '<p>details</p>', '150', 1, 1, '2022-09-16 16:12:12', '2022-09-16 16:12:12', NULL),
(34, 2, 'Product name', 'images/product/1663344762.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '160', 2, 1, '2022-09-16 16:12:42', '2022-09-16 16:12:42', NULL),
(35, 2, 'Product name', 'images/product/1663344792.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;</p>', '180', 3, 1, '2022-09-16 16:13:12', '2022-09-16 16:13:12', NULL),
(36, 2, 'Product name', 'images/product/1663344814.jpeg', '<p>details</p>', '200', 4, 1, '2022-09-16 16:13:34', '2022-09-16 16:13:34', NULL),
(37, 2, 'Product name', 'images/product/1663344832.jpeg', '<p>details</p>', '220', 5, 1, '2022-09-16 16:13:52', '2022-09-16 16:13:52', NULL),
(38, 2, 'Product name', 'images/product/1663344853.jpeg', '<p>details</p>', '230', 6, 1, '2022-09-16 16:14:13', '2022-09-16 16:14:13', NULL),
(39, 3, 'Product name', 'images/product/1663344732.jpeg', '<p>details</p>', '150', 1, 1, '2022-09-16 16:12:12', '2022-09-16 16:12:12', NULL),
(40, 3, 'Product name', 'images/product/1663344762.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '160', 2, 1, '2022-09-16 16:12:42', '2022-09-16 16:12:42', NULL),
(41, 3, 'Product name', 'images/product/1663344792.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;</p>', '180', 3, 1, '2022-09-16 16:13:12', '2022-09-16 16:13:12', NULL),
(42, 3, 'Product name', 'images/product/1663344814.jpeg', '<p>details</p>', '200', 4, 1, '2022-09-16 16:13:34', '2022-09-16 16:13:34', NULL),
(43, 3, 'Product name', 'images/product/1663344832.jpeg', '<p>details</p>', '220', 5, 1, '2022-09-16 16:13:52', '2022-09-16 16:13:52', NULL),
(44, 3, 'Product name', 'images/product/1663344853.jpeg', '<p>details</p>', '230', 6, 1, '2022-09-16 16:14:13', '2022-09-16 16:14:13', NULL),
(45, 4, 'Product name', 'images/product/1663344732.jpeg', '<p>details</p>', '150', 1, 1, '2022-09-16 16:12:12', '2022-09-16 16:12:12', NULL),
(46, 4, 'Product name', 'images/product/1663344762.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '160', 2, 1, '2022-09-16 16:12:42', '2022-09-16 16:12:42', NULL),
(47, 4, 'Product name', 'images/product/1663344792.jpeg', '<p>details&nbsp;&nbsp;&nbsp;&nbsp;</p>', '180', 3, 1, '2022-09-16 16:13:12', '2022-09-16 16:13:12', NULL),
(48, 4, 'Product name', 'images/product/1663344814.jpeg', '<p>details</p>', '200', 4, 1, '2022-09-16 16:13:34', '2022-09-16 16:13:34', NULL),
(49, 4, 'Product name', 'images/product/1663344832.jpeg', '<p>details</p>', '220', 5, 1, '2022-09-16 16:13:52', '2022-09-16 16:13:52', NULL),
(50, 4, 'Product name', 'images/product/1663344853.jpeg', '<p>details</p>', '230', 6, 1, '2022-09-16 16:14:13', '2022-09-16 16:14:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'One\'s Finances', 1, 1, '2022-09-15 19:51:53', '2022-09-15 19:51:53', NULL),
(2, 'Financial Goal', 2, 1, '2022-09-15 19:52:08', '2022-09-15 19:52:08', NULL),
(3, 'Contract', 3, 1, '2022-09-15 19:52:20', '2022-09-15 19:52:20', NULL),
(4, 'Bank', 4, 1, '2022-09-15 19:52:31', '2022-09-15 19:52:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professional_networks`
--

CREATE TABLE `professional_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_networks`
--

INSERT INTO `professional_networks` (`id`, `title`, `image`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Professional Services', 'images/professional-network/1662880954.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Services provided by &nbsp;Real Estate, Finance, Design, &nbsp;Construction &nbsp;and Management Professionall Network Providers to help prepare, implement and manage Real Estate Plan&nbsp;</span><br></p>', 1, 1, '2022-09-11 07:18:06', '2022-09-11 07:22:34', NULL),
(11, 'Certified Financial Advisor', 'images/professional-network/1662880713.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Prepare Wealth Accumulation, &nbsp;Management and Protection Financial Plan to achieve Financial Goals&nbsp;</span><br></p>', 2, 1, '2022-09-11 07:18:33', '2022-09-11 07:18:33', NULL),
(12, 'Real Estate Lawyer', 'images/professional-network/1662880979.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Provide legal advice for Property Acquisition, Financing, Construction and Management&nbsp;</span><br></p>', 3, 1, '2022-09-11 07:22:59', '2022-09-11 07:22:59', NULL),
(13, 'Residential Property Lender', 'images/professional-network/1662885552.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Lender that provides residential propert yMortgages and Construction loans</span><br></p>', 4, 1, '2022-09-11 08:39:12', '2022-09-11 08:39:12', NULL),
(14, 'Real Estate Broker', 'images/professional-network/1662885591.jpg', '<span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Advise property buyers about real estate market in a particular neighborhood, plus acquisition &amp; financing processes&nbsp;</span>', 5, 1, '2022-09-11 08:39:51', '2022-09-11 08:39:51', NULL),
(15, 'Residential Licensed Home Inspector', 'images/professional-network/1662885610.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Provide detailed report on Condition of residential property&nbsp;</span><br></p>', 6, 1, '2022-09-11 08:40:10', '2022-09-11 08:40:10', NULL),
(16, 'Residential Property Appraiser', 'images/professional-network/1662885628.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Provide valuation for Property based on market conditions and quality plus condition of Property&nbsp;</span><br></p>', 7, 1, '2022-09-11 08:40:28', '2022-09-11 08:40:28', NULL),
(17, 'Architect', 'images/professional-network/1662885672.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Professional to design interior and exterior of a residential property&nbsp;</span><br></p>', 8, 1, '2022-09-11 08:41:12', '2022-09-11 08:41:12', NULL),
(18, 'Certified Public Accountant', 'images/professional-network/1662885745.png', '<p>Tax and Budget Planning<br></p>', 9, 1, '2022-09-11 08:42:25', '2022-09-11 08:42:25', NULL),
(19, 'Property Manager', 'images/professional-network/1662885772.jpg', '<p><span style=\"color: rgb(87, 87, 87); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center; background-color: rgb(246, 246, 246);\">Professional to oversee property operations, maintenance and rent collection</span><br></p>', 10, 1, '2022-09-11 08:42:52', '2022-09-11 08:42:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professional_net_services`
--

CREATE TABLE `professional_net_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_net_services`
--

INSERT INTO `professional_net_services` (`id`, `image`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'images/professional-network/1662880226.jpeg', '<div data-ux=\"ContentBasic\" id=\"b5d15bf1-a804-4ab5-8137-b4fc76e27cbd\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE1_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Select Services from our Professional Network</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION1_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Choose from list of Services to help Prepare and Manage your Real Estate Plan to Find, Buy, Finance and Manage your new Home and Income Property&nbsp;</span></p></div></div><div data-ux=\"ContentBasic\" id=\"7a9e11db-09e8-4213-86bd-61f50cad9357\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE2_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Accountant &amp; Financial Advisor</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION2_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Expertise providing budget, tax and financial planning&nbsp;</span></p></div></div><div data-ux=\"ContentBasic\" id=\"b58004ae-12cd-4a15-86bd-ba590ad3597d\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE3_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Real Estate Lawyer &amp; Lender</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION3_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Experienced reviewing legal rights and responsibilities related to real estate. Plus, services providing real estate loans/mortgages for new Home and Income Property&nbsp;</span></p></div></div><div data-ux=\"ContentBasic\" id=\"1dfc9e8f-e85b-41b7-96ec-789074445022\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE4_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Realtor, Home Inspector, Appraiser &amp; Property Insurance Broker</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION4_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Professionals to help buy property, evaluate condition of property, calculate value &amp; insure property</span></p></div></div><div data-ux=\"ContentBasic\" id=\"2cc56620-f69f-4769-bd0b-b10c94ccb3c5\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE5_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Architect &amp; Builder</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION5_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Professionals to design property, and construct building to match design</span></p></div></div><div data-ux=\"ContentBasic\" id=\"ab19facd-f119-4b84-b12c-3a365d8f941d\" class=\"x-el x-el-div x-el c1-1 c1-2 c1-11 c1-63 c1-4 c1-8x c1-ar c1-1y c1-8y c1-8z c1-b c1-c c1-88 c1-89 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g\" style=\"box-sizing: inherit; width: 725.323px; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 32px; background-color: rgb(246, 246, 246);\"><h4 role=\"heading\" aria-level=\"4\" data-ux=\"ContentHeading\" data-aid=\"CONTENT_HEADLINE6_RENDERED\" data-typography=\"HeadingDelta\" class=\"x-el x-el-h4 c1-1 c1-2 c1-18 c1-19 c1-92 c1-1u c1-1t c1-1b c1-1c c1-b c1-2o c1-6o c1-1f c1-6r c1-6t c1-6u c1-6v\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(21, 21, 21); font-size: 22px; max-width: 100%; line-height: 1.25;\">Real Estate Developer</h4><div data-ux=\"ContentText\" alignment=\"left\" data-aid=\"CONTENT_DESCRIPTION6_RENDERED\" data-typography=\"BodyAlpha\" class=\"x-el c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-8k c1-b c1-4k c1-c c1-1f c1-d c1-e c1-f c1-g x-rt\" style=\"box-sizing: inherit; overflow-wrap: break-word; line-height: 1.5; margin-top: 0px; color: rgb(87, 87, 87); flex-grow: 1; max-width: 100%; margin-bottom: 0px !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"box-sizing: inherit;\">Professional to prepare and manage Real Estate Development Plan-Planning, Acquisition, Design, Financing, Construction, Management and Marketing&nbsp;</span></p></div></div>', 1, 1, '2022-09-11 07:10:26', '2022-09-11 07:10:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `real_estates`
--

CREATE TABLE `real_estates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estates`
--

INSERT INTO `real_estates` (`id`, `title`, `image`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Step One', 'images/service/real-estate/1662804495.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Clear &amp; Accurate Pcture of Finances and Financial Goals&nbsp;</span><br></p>', 1, 1, '2022-09-10 10:08:15', '2022-09-10 10:08:15', NULL),
(4, 'Step Two', 'images/service/real-estate/1662804515.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Clear &amp; Accurate Picture of Property Legal Issues and Responsibilities; plus Financing Process, Terms &amp; Options&nbsp;</span><br></p>', 2, 1, '2022-09-10 10:08:35', '2022-09-10 10:08:35', NULL),
(5, 'Step Three', 'images/service/real-estate/1662804556.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Clear &amp; Accurate Picture of Property Location, Condition, Value and Price; plus Design &amp; Style&nbsp;</span><br></p>', 3, 1, '2022-09-10 10:09:16', '2022-09-10 10:09:16', NULL),
(6, 'Step Four', 'images/service/real-estate/1662804605.jpg', 'Clear &amp; Accurate Picture of Pre-Closing Process', 4, 1, '2022-09-10 10:10:05', '2022-09-10 10:10:05', NULL),
(7, 'Step Five', 'images/service/real-estate/1662804626.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Clear &amp; Accurate Picture and Understanding of Closing Process, &nbsp;Loan Closing Documents and Responsibilities&nbsp;</span><br></p>', 5, 1, '2022-09-10 10:10:26', '2022-09-10 10:10:26', NULL),
(8, 'Step Six', 'images/service/real-estate/1662804643.png', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Clear and Accurate Picture of Legal, Financing, Property Maintenance and Management Responsibilities</span><br></p>', 6, 1, '2022-09-10 10:10:43', '2022-09-10 10:10:43', NULL),
(9, 'Step Seven', 'images/service/real-estate/1662804662.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Prepare, Review, Implement and Manage Real Estate Plan to Find, Buy, Finance and Manage new Home and Income Property&nbsp;</span><br></p>', 7, 1, '2022-09-10 10:11:02', '2022-09-10 10:11:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `details`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Select PATH Home or Income Property', 'images/service/service/1662879861.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Choose &nbsp;Buying a 1 Family, Duplex, 2 Family, 3 Family, Condo, Townhouse &nbsp;&amp;/or Buying a Multi-Unit (1-4 unit ) Income Property to generate Income and Equity/Wealth to become Financially Independent.</span><br></p>', 1, 1, '2022-09-10 09:48:29', '2022-09-11 07:04:21', NULL),
(8, 'Select Gold Key Assistance or Platinum Turnkey Service to Prepare Real Estate Plan', 'images/service/service/1662803579.jpg', '<p>Option DIY or KRIBTREE Will DO IT 4 OR WITH YOU.<br></p>', 2, 1, '2022-09-10 09:52:59', '2022-09-10 09:52:59', NULL),
(9, 'Select Property Type- Build, Renovate or Existing', 'images/service/service/1662803602.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Select Newly Constructed, Custom Built. Re-designed, Renovated or Existing Home and Income Property&nbsp;</span><br></p>', 3, 1, '2022-09-10 09:53:22', '2022-09-10 09:53:22', NULL),
(10, 'Receive Savings 4 Professional Network Services', 'images/service/service/1662803624.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">Use Professional Network Service Provider and Receive CashBack.&nbsp;</span><br></p>', 4, 1, '2022-09-10 09:53:44', '2022-09-10 09:53:44', NULL),
(11, 'Select PATH, Type of Property and Location', 'images/service/service/1662803651.jpg', '<p><span style=\"color: rgb(94, 94, 94); font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; text-align: center;\">KRIBTREE will Prepare and Manage your Real Estate Plan based on your criteria and provide Services required and needed to complete acquisition, financing &amp; managementof Home &amp; Income Property&nbsp;</span><br></p>', 5, 1, '2022-09-10 09:54:11', '2022-09-10 09:54:11', NULL),
(12, 'Questions', 'images/service/service/1662803712.jpg', '<p><span class=\"x-el x-el-span c1-27 c1-28 c1-b c1-a2 c1-41 c1-4w c1-a3\" style=\"box-sizing: inherit; font-family: &quot;Source Sans Pro&quot;, arial, sans-serif; color: rgb(94, 94, 94); font-weight: 700; line-height: inherit; text-align: center;\">Buy New&nbsp; Construction, Existing Home Or Income Property? Buy Income Property TOBE Financially&nbsp; Independent? Buy&nbsp; Custom Built Home? During Planning Process Auestions Will Be Answered 4 Your Understandingfg</span></p>', 6, 1, '2022-09-10 09:55:12', '2022-09-10 09:55:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_sites`
--

CREATE TABLE `social_sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socialLogo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socialName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socialUrl` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_sites`
--

INSERT INTO `social_sites` (`id`, `socialLogo`, `socialName`, `socialUrl`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<i class=\"fab fa-linkedin\"></i>', 'Linkedin', '#', 1, 1, '2021-09-20 05:36:02', NULL, NULL),
(2, '<i class=\"fab fa-youtube\"></i>', 'Youtube', '#', 4, 1, '2021-09-20 05:38:30', NULL, NULL),
(4, '<i class=\"fab fa-facebook\"></i>', 'Facebook', '#', 6, 1, '2021-09-20 05:41:29', NULL, NULL),
(6, '<i class=\"fab fa-twitter\"></i>', 'Twitter', '#', 8, 1, '2021-10-09 15:48:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usefull_links`
--

CREATE TABLE `usefull_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usefull_links`
--

INSERT INTO `usefull_links` (`id`, `title`, `url`, `orderBy`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Who We Are', '#', 1, 1, '2022-09-06 21:11:41', '2022-09-06 21:11:41', NULL),
(2, 'What We Do', '#', 2, 1, '2022-09-06 21:12:03', '2022-09-06 21:12:03', NULL),
(3, 'How We Do It', '#', 3, 1, '2022-09-06 21:12:15', '2022-09-06 21:12:15', NULL),
(4, 'What They\'re Saying', '#', 4, 1, '2022-09-06 21:12:24', '2022-09-06 21:12:24', NULL);

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
(1, 'Admin', 'admin@gmail.com', '2022-09-06 20:35:25', '$2y$10$p6R6/T/.TOl43T47PQO/kezYdWMCmVOTxW74ZGChOkPo8N7y9BjYS', 'PnAdtD3HdH8RcaDFGiNr5MUusvcbYToc9JEBIe5V3a2e6OAQ7HSo6lrBolHj', NULL, NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_networks`
--
ALTER TABLE `professional_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_net_services`
--
ALTER TABLE `professional_net_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_sites`
--
ALTER TABLE `social_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usefull_links`
--
ALTER TABLE `usefull_links`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `professional_networks`
--
ALTER TABLE `professional_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `professional_net_services`
--
ALTER TABLE `professional_net_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social_sites`
--
ALTER TABLE `social_sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usefull_links`
--
ALTER TABLE `usefull_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
