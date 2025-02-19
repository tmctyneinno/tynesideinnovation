-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2025 at 10:28 AM
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
-- Database: `tynesideInnovation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@gmail.com', '$2y$12$ncQlE8b3boNfV5oSbukBReYqJmGvBljQSnOyRc/YZ0HHO5s0XbVoi', '2025-01-21 11:57:22', '2025-01-21 10:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'title', 'title', '<p>content</p>', 'assets/images/blog/1739784485.jpg', '2025-02-17 08:28:05', '2025-02-17 08:28:05'),
(2, 'title', 'title', '<p>content update</p>', 'assets/images/blog/1739784639.jpg', '2025-02-17 08:30:39', '2025-02-17 08:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_items`
--

CREATE TABLE `dropdown_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_item_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropdown_items`
--

INSERT INTO `dropdown_items` (`id`, `menu_item_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(12, 8, 'Cloud Services', 'cloud-services', '2025-01-27 09:33:45', '2025-01-27 09:33:45'),
(13, 8, 'IT Consultancy', 'it-consultancy', '2025-01-27 09:33:45', '2025-01-27 09:33:45'),
(14, 8, 'Cyber Security Solution', 'cyber-security-solution', '2025-01-27 09:33:45', '2025-01-27 09:33:45'),
(15, 8, 'Manage IT Services', 'manage-it-services', '2025-01-27 09:33:45', '2025-01-27 09:33:45'),
(16, 8, 'Multimedia', 'multimedia', '2025-01-27 09:33:45', '2025-01-27 09:33:45'),
(17, 8, 'Animation Design', 'animation-design', '2025-01-27 09:33:46', '2025-01-27 09:33:46'),
(18, 8, 'Imaging and Digital Printing', 'imaging-and-digital-printing', '2025-01-27 09:33:46', '2025-01-27 09:33:46'),
(22, 6, 'What we do', 'what-we-do', '2025-02-03 09:18:23', '2025-02-03 09:18:23'),
(23, 6, 'Mission and Vision', 'mission-and-vision', '2025-02-03 09:18:23', '2025-02-03 09:18:23'),
(24, 6, 'Our Values', 'our-values', '2025-02-03 09:18:23', '2025-02-03 09:18:23'),
(25, 12, 'TynePrint', 'https://www.tyneprints.com/', '2025-02-15 05:33:51', '2025-02-15 05:33:51'),
(26, 12, 'Portrec', 'https://portrec.ng/', '2025-02-15 05:33:51', '2025-02-15 05:33:51'),
(27, 12, 'Oystercheck NG', 'https://www.oysterchecks.com/', '2025-02-15 05:33:51', '2025-02-15 05:33:51');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'I have some questions about privacy. Who can I ask?', '<p>From two to five he worked at his trade. The rest of the evening until 10 he spent in music, or diversion of some sort. This time is used also to put things in their places. In the last thing before retiring was examination of the day. At the age of 79, he ascribed his health to temperance; the acquisition of misfortune to industry and frugality; the confidence of his country to sincerity and justice.</p><p>&nbsp;</p>', '2025-01-29 18:31:11', '2025-01-29 18:31:11'),
(3, 'What is the cost of a Service Agreement?', '<p>There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.</p>', '2025-01-29 18:31:29', '2025-01-29 18:31:29'),
(4, 'Why IT Staff Management?', '<p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives. Telephones and e-mail, clients and managers, spouses and kids, TV, newspapers and radio – the distractions are everywhere and endless. Everyone wants a piece of us and the result can be totally overwhelming.</p>', '2025-01-29 18:31:53', '2025-01-29 18:31:53'),
(5, 'What are the Benefits of our service?', '<p>It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>', '2025-01-29 18:32:21', '2025-01-29 18:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Home', 'home', '2025-01-21 14:06:38', '2025-01-21 14:06:38'),
(6, 'About us', 'about-us', '2025-01-21 14:21:46', '2025-01-21 14:21:46'),
(8, 'Our Services', 'our-services', '2025-01-24 08:58:20', '2025-01-24 09:12:17'),
(12, 'Our Products', 'our-products', '2025-01-27 09:31:35', '2025-02-15 05:33:51'),
(13, 'Contact', 'contact', '2025-01-27 09:31:43', '2025-01-27 09:31:43');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_21_103830_create_admins_table', 2),
(5, '2025_01_21_115215_create_personal_access_tokens_table', 3),
(6, '2025_01_21_141243_create_menu_items_table', 4),
(7, '2025_01_21_141353_create_dropdown_items_table', 4),
(8, '2025_01_21_145802_create_dropdown_items_table', 5),
(9, '2025_01_24_113817_create_sliders_table', 6),
(10, '2025_01_27_123911_create_privacy_policies_table', 7),
(11, '2025_01_27_132241_create_terms_conditions_table', 8),
(12, '2025_01_27_143406_create_vision_missions_table', 9),
(13, '2025_01_27_150537_create_faqs_table', 10),
(14, '2025_01_29_182045_create_services_table', 11),
(15, '2025_01_29_190833_create_portfolios_table', 12),
(16, '2025_02_10_142938_create_tyneprints_table', 13),
(17, '2025_02_17_092105_create_blogs_table', 14),
(18, '2025_02_17_130612_create_portfolio_categories_table', 15);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category_id`, `slug`, `content`, `image`, `video`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Portrec', 4, 'portrec', '<p>Portrec Resourcing is a global recruitment and HR solutions provider, dedicated to matching top talent with leading organizations across various sectors. We offer comprehensive services, including executive search, talent resourcing, payroll management, and umbrella company solutions.</p>', 'assets/images/portfolio/1739523292.png', NULL, NULL, '2025-02-14 07:54:52', '2025-02-17 12:50:58'),
(3, 'Archwayhomes', 1, 'archwayhomes', '<p>https://www.archwayhomes.com.ng</p>', 'assets/images/portfolio/1739807785.png', NULL, NULL, '2025-02-14 08:27:24', '2025-02-17 14:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Design & Development', 'web-design-development', '2025-02-17 12:10:57', '2025-02-17 12:10:57'),
(2, 'Branding & Creative', 'branding-creative', '2025-02-17 12:16:11', '2025-02-17 12:16:11'),
(3, 'SEO', 'seo', '2025-02-17 12:16:29', '2025-02-17 12:16:29'),
(4, 'E-Commerce', 'e-commerce', '2025-02-17 12:16:42', '2025-02-17 12:16:42'),
(5, 'Managed Services', 'managed-services', '2025-02-17 12:16:54', '2025-02-17 12:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>No Privacy Policy content</p>', '2025-01-27 11:40:02', '2025-02-19 07:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'IT Consultancy', 'it-consultancy', '<p>Sometimes, yours is the need to solve problems facing people in various facets of life, and your own nibbling problem is how to make the problematic world know that you are a problem solver. Call on TYNESIDE INNOVATIONs and we curb your problem first, then make you a world problem solver.</p><p>With our industry experts just a swift away, you will have a better approach towards your business plans.</p>', 'assets/images/service/1738176213.jpg', '2025-01-29 17:27:46', '2025-02-03 10:21:15'),
(3, 'Cloud Services', 'cloud-services', '<p>This is truly the century of smart cloud gadgets and services, and businesses are looking everywhere for the right solutions to run business operations seamlessly from distant places.<br>Therefore, we provide all our cloud solutions with the functionality to access it from anywhere, anytime. So you never have to worry.</p>', 'assets/images/service/1739606089.jpg', '2025-01-29 17:35:38', '2025-02-15 06:54:49'),
(4, 'Cyber Security Solutions', 'cyber-security-solutions', '<p>These days, all the operations are truly depended on cybersecurity.</p><p>To eliminate any potential threat, we have come up with such sophisticated solutions that will help to fortify the system defences.</p>', 'assets/images/service/1739193697.jpg', '2025-02-10 12:21:37', '2025-02-10 12:21:37'),
(5, 'Managed IT Service', 'managed-it-service', '<p>With our Managed IT Service, you will be ready to face all hurdles and challenges, no matter what!</p>', 'assets/images/service/1739193792.jpg', '2025-02-10 12:23:12', '2025-02-10 12:23:12'),
(6, 'Multimedia', 'multimedia', '<p>Multimedia is an important aspect of every industry in this digital world.</p><p>If you are looking for some compelling multimedia content that can change the way your customers think, you came to the right place!</p>', 'assets/images/service/1739193873.jpg', '2025-02-10 12:24:33', '2025-02-10 12:24:33'),
(7, 'Animation Design', 'animation-design', '<p>In the recent few years, the demand for animation has seen an unexpected surge due to the increasing benefits in SEO, lead generation, and UI experience.</p><p>If you are looking for some intuitive animations to nail the first impression, you know where to come.</p>', 'assets/images/service/1739193964.jpg', '2025-02-10 12:26:04', '2025-02-10 12:26:04'),
(8, 'Imaging and Digital Printing', 'imaging-and-digital-printing', '<p>As we all know, imagining is the backbone of the digital world’s revolution, where a million stories can be told in a single image, nailing the storytelling.</p><p>Oh, you are looking for the exact thing? Welcome the powerhouse of imaging!</p>', 'assets/images/service/1739795200.jpg', '2025-02-10 12:27:09', '2025-02-17 11:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('attU8RxajXkHN3gEYWDK2lQH1MCP8WrEjTqbAgEP', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiODBwWHF4V01oT1ZRaWdTRHdXSzZXdURJWDg4RXhSbWd1MDl1ODM0TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1739957236),
('ul8h099ftnz4FwDCOj4enaGVse8kAtq1IDUmmRh1', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXNyUVhUZjh0MHFpRlJCUDZubW8zN2hSWHF6VXpRdHFsSEp6bWJSWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1739807812),
('YPaieHzrzzHyRMlyrkZKSiJquuZKsjhUKjks8nlg', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRU5kVUJVQXJVcEt2MWdlbVREMkhUR2h0VFplem9PQ01sMnRHZW5MRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739869250);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `caption`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(3, 'We\'re Tyneside Innovation. We help drive change with technology.', 'If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process?', NULL, 'sliders/1737724346-01.jpg', '2025-01-24 11:21:39', '2025-01-27 09:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>No content available yet&nbsp;</p><p>&nbsp;</p>', '2025-01-27 12:23:30', '2025-02-19 08:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `tyneprints`
--

CREATE TABLE `tyneprints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tyneprints`
--

INSERT INTO `tyneprints` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Roll Up Banner Stands', 'roll-up-banner-stands', '<p><strong>Be it an exhibition or an event at your place, our stands know how to make an impact. With our premium stands, make your art super unique.</strong></p>', 'assets/images/tyneprint/1739198533.jpg', '2025-02-10 13:42:13', '2025-02-10 13:49:49'),
(2, 'Booklet Printing', 'booklet-printing', '<p><strong>Printing booklets is not just our passion but also a speciality. We offer multiple types of printing options, all tailored to suit your needs, to make your art class apart.</strong></p>', 'assets/images/tyneprint/1739200452.jpg', '2025-02-10 14:14:12', '2025-02-10 14:14:12'),
(3, 'Sample Packs', 'sample-packs', '<p><strong>Not sure if you should use our products? Don’t worry. We offer sample packs that will put your faith in our high-quality products for sure.</strong></p>', 'assets/images/tyneprint/1739201824.jpg', '2025-02-10 14:37:04', '2025-02-10 14:37:04'),
(4, 'Stationary', 'stationary', '<p><strong>With our class apart design, make an impression with our stationery products. We lead in printing stationery products such as business cards, letterheads, appointment cards, and what not!</strong></p>', 'assets/images/tyneprint/1739202473.jpg', '2025-02-10 14:47:53', '2025-02-10 14:47:53'),
(5, 'Bound Documents', 'bound-documents', '<p><strong>When it comes to office products, we are not far behind. Our bound books, stapled documents, saddle-stitched make sure your presence is felt in the office.</strong></p>', 'assets/images/tyneprint/1739202755.jpg', '2025-02-10 14:52:35', '2025-02-10 14:52:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `vision_missions`
--

CREATE TABLE `vision_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` text DEFAULT NULL,
  `mission_img` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `vision_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_missions`
--

INSERT INTO `vision_missions` (`id`, `mission`, `mission_img`, `vision`, `vision_img`, `created_at`, `updated_at`) VALUES
(1, '<p>mission</p>', 'assets/images/mission/', 'vision', 'assets/images/vision/', '2025-01-27 13:52:22', '2025-01-27 13:54:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dropdown_items_menu_item_id_foreign` (`menu_item_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyneprints`
--
ALTER TABLE `tyneprints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tyneprints`
--
ALTER TABLE `tyneprints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vision_missions`
--
ALTER TABLE `vision_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD CONSTRAINT `dropdown_items_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
