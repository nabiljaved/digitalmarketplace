-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 04:48 PM
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
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_services`
--

CREATE TABLE `additional_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `additional_service_title` varchar(255) NOT NULL,
  `additional_service_price` decimal(8,2) NOT NULL,
  `additional_service_duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `category_isFeatured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `category_isFeatured`, `created_at`, `updated_at`) VALUES
(1, 'Search Engine Optimization', 'search-engine-optimization', 'seo.png', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(2, 'Social Media Marketing', 'social-media-marketing', 'socialmedia.jpg', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(3, 'Content Marketing', 'content-marketing', 'content-marketing.jpg', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(4, 'Email Marketing', 'email-marketing', 'email-marketing.png', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(5, 'Pay-Per-Click (PPC)', 'pay-per-click', 'ppc.jpg', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(6, 'Web Design & Development', 'web-design-and-development', 'web-design.jpg', 1, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(7, 'Influencer Marketing', 'influencer-marketing', 'influencer-marketing.jpeg', 0, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(8, 'Analytics & Insights', 'analytics-and-insights', 'analytics.png', 0, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(9, 'Affiliate Marketing', 'affiliate-marketing', 'affiliate-marketing.png', 0, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(10, 'Online Advertising', 'online-advertising', 'online-advertising.jpg', 0, '2023-07-26 07:28:31', '2023-07-26 07:28:31'),
(11, 'Mobile Application Development', 'mobile-app-development', '1690797962.jpg', 1, '2023-07-31 06:06:02', '2023-07-31 06:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `credit_payments`
--

CREATE TABLE `credit_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `totalPrice` decimal(8,2) NOT NULL,
  `servicetitle` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_charge` decimal(8,2) NOT NULL,
  `coupon_charge` decimal(8,2) DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit_payments`
--

INSERT INTO `credit_payments` (`id`, `name`, `address`, `phone`, `date`, `totalPrice`, `servicetitle`, `user_id`, `service_charge`, `coupon_charge`, `service_id`, `created_at`, `updated_at`) VALUES
(3, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-25', 500.00, 'Web Design & Development', 10, 3.00, NULL, 3, '2023-08-02 09:25:09', '2023-08-02 09:25:09'),
(4, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-25', 500.00, 'Web Design & Development', 10, 3.00, NULL, 3, '2023-08-02 09:25:27', '2023-08-02 09:25:27'),
(9, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-24', 1000.00, 'Mobile Application Development', 12, 3.00, NULL, 8, '2023-08-02 09:46:06', '2023-08-02 09:46:06'),
(10, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-25', 250.00, 'PPC Advertising Service', 12, 3.00, NULL, 2, '2023-08-02 09:52:30', '2023-08-02 09:52:30'),
(11, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-25', 250.00, 'PPC Advertising Service', 12, 3.00, NULL, 2, '2023-08-02 09:54:51', '2023-08-02 09:54:51'),
(12, 'nabeel javed', 'Azam Town Karachi, Pakistan', '03082400619', '2023-08-18', 493.00, 'Web Design & Development', 12, 3.00, 10.00, 3, '2023-08-02 10:34:45', '2023-08-02 10:34:45');

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
(37, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(38, '2019_08_19_000000_create_failed_jobs_table', 2),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(40, '2023_07_12_110704_create_categories_table', 2),
(41, '2023_07_13_125130_create_additional_services_table', 2),
(42, '2023_07_14_101417_create_services_table', 2),
(43, '2023_07_25_090212_create_users_table', 2),
(44, '2023_08_01_130541_create_credit_payments_table', 3),
(45, '2023_08_02_073318_create_credit_payments_table', 4),
(46, '2023_08_02_125021_create_newsletter_emails_table', 5),
(47, '2023_08_02_125435_create_newsletter_emails_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

CREATE TABLE `newsletter_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`id`, `email`, `subscribed`, `created_at`, `updated_at`) VALUES
(2, 'nabeeljaved2029@gmail.com', 1, '2023-08-02 10:31:56', '2023-08-02 10:31:56');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_price` decimal(8,2) NOT NULL,
  `service_previous_price` decimal(8,2) NOT NULL,
  `service_category` bigint(20) UNSIGNED NOT NULL,
  `service_slug` varchar(255) NOT NULL,
  `service_isFeatured` tinyint(1) NOT NULL DEFAULT 0,
  `service_isPopular` tinyint(1) NOT NULL DEFAULT 0,
  `service_status` enum('pending','not active','active') NOT NULL DEFAULT 'pending',
  `service_detail` text NOT NULL,
  `service_url` text NOT NULL,
  `selected_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`selected_images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_price`, `service_previous_price`, `service_category`, `service_slug`, `service_isFeatured`, `service_isPopular`, `service_status`, `service_detail`, `service_url`, `selected_images`, `created_at`, `updated_at`) VALUES
(2, 'PPC Advertising Service', 250.00, 150.00, 5, 'ppc-advertising-service', 1, 0, 'active', 'Drive targeted traffic to your website with our PPC advertising service.', 'https://www.youtube.com/watch?v=AvLcKBOONgs', '[\"ppc-advertising-1.jpg\",\"ppc-advertising-2.png\",\"ppc-advertising-3.png\"]', '2023-07-26 07:29:21', '2023-07-31 04:42:33'),
(3, 'Web Design & Development', 500.00, 400.00, 6, 'web-design-development', 1, 0, 'active', 'Create a stunning website with our professional web design & development service.', 'https://www.youtube.com/watch?v=Nv7RgGpu6ME', '[\"web-design-development-1.jpeg\",\"web-design-development-2.png\",\"web-design-development-3.jpg\"]', '2023-07-26 07:29:21', '2023-07-31 04:42:46'),
(4, 'Influencer Marketing Campaign', 300.00, 220.00, 7, 'influencer-marketing-campaign', 0, 1, 'not active', 'Collaborate with influencers to promote your brand effectively.', 'https://www.youtube.com/watch?v=GVbcLNBpNbg', '[\"influencer-marketing-1.jpg\",\"influencer-marketing-2.jpg\",\"influencer-marketing-3.jpg\"]', '2023-07-26 07:29:21', '2023-07-31 04:41:49'),
(5, 'Analytics & Insights', 100.00, 50.00, 8, 'analytics-insights', 0, 1, 'pending', 'Gain valuable insights into your website\'s performance with advanced analytics.', 'https://www.youtube.com/watch?v=RlB_f6EG4r4', '[\"analytics-insights-1.png\",\"analytics-insights-2.jpg\",\"analytics-insights-3.png\"]', '2023-07-26 07:29:21', '2023-07-31 04:42:14'),
(8, 'Mobile Application Development', 1000.00, 1500.00, 11, 'mobile-application-development', 0, 1, 'active', 'ww', 'https://www.youtube.com/watch?v=vDMyIZ2nsS0', '[\"mobile-app-development-1.jpg\",\"mobile-app-development-2.jpg\",\"mobile-app-development-3.jpg\"]', '2023-07-31 06:19:26', '2023-07-31 07:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Farooq', 'farooq@oracle.com', '0504830684', '$2y$10$jsvcRyRVOve9cQoG05jtMumdQBWbDwFWZv6QNvO1eqXMg9MpT1bni', 'admin', NULL, '2023-07-31 04:32:19', '2023-07-31 04:32:19'),
(9, 'Amir', 'amir@oracle.com', '0504830685', '$2y$10$AGBp2D5gdKO1f5WU8UROP.FWVe19HfxcBT.BZ88RWK2lQBG3SqGTm', 'provider', NULL, '2023-07-31 04:32:19', '2023-07-31 04:32:19'),
(10, 'Nabeel', 'nabeel@oracle.com', '0504830686', '$2y$10$ZXJApZsy9uova4FNtu6FQu.IqaEmb4f6Gr/KxjNf0p1bgFoi8Qqqm', 'user', NULL, '2023-07-31 04:32:19', '2023-08-02 07:36:17'),
(12, 'nabeel javed', 'nabeeljaved2029@gmail.com', '03082400619', '$2y$10$0lUZ4SvzoxvOlz2ZHZc0aeDxeqppUiF8IVtm7WqfxH7ZsQBaWKBUu', 'user', NULL, '2023-08-02 09:27:27', '2023-08-02 09:27:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_services`
--
ALTER TABLE `additional_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Indexes for table `credit_payments`
--
ALTER TABLE `credit_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `credit_payments_user_id_foreign` (`user_id`),
  ADD KEY `credit_payments_service_id_foreign` (`service_id`);

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
-- Indexes for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_service_slug_unique` (`service_slug`),
  ADD KEY `services_service_category_foreign` (`service_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_services`
--
ALTER TABLE `additional_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `credit_payments`
--
ALTER TABLE `credit_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_payments`
--
ALTER TABLE `credit_payments`
  ADD CONSTRAINT `credit_payments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `credit_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_foreign` FOREIGN KEY (`service_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
