-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2024 at 06:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance__salaries`
--

CREATE TABLE `advance__salaries` (
  `id` bigint UNSIGNED NOT NULL,
  `emp_id` int NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance__salaries`
--

INSERT INTO `advance__salaries` (`id`, `emp_id`, `month`, `year`, `advance_salary`, `created_at`, `updated_at`) VALUES
(1, 5, '11', '2024', '7800', NULL, NULL),
(2, 5, '08', '2024', '2024', NULL, NULL),
(3, 4, '01', '2024', '5000', NULL, NULL),
(4, 5, '01', '2024', '5000', NULL, NULL),
(5, 4, '02', '2024', '5000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `att_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `att_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `att_date`, `att_year`, `attendance`, `edit_year`, `created_at`, `updated_at`) VALUES
(1, 4, '07/02/24', '2024', 'Present', '07_02_24', NULL, NULL),
(2, 5, '07/02/24', '2024', 'Absent', '07_02_24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'accesories', NULL, NULL),
(2, 'Fashion', NULL, NULL),
(3, 'Home Appliance', NULL, NULL),
(4, 'Toyota', NULL, NULL),
(5, 'Honda', NULL, NULL),
(6, 'Archar', NULL, NULL),
(7, 'Joyuta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `shop_name`, `photo`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(1, 'wohywebyw@mailinator.com', 'ridot@mailinator.com', 'lame@mailinator.com', 'litutulysu@mailinator.com', 'nykixe@mailinator.com', '1707146097.jpg', 'hipum@mailinator.com', 'fywonudyd@mailinator.com', 'zepumetobo@mailinator.com', 'zepumetobo@mailinator.com', 'jukihixuh@mailinator.com', NULL, NULL),
(2, 'vybim@mailinator.com', 'kyveqyzis@mailinator.com', 'ziny@mailinator.com', 'pysinu@mailinator.com', 'dosaxehysu@mailinator.com', '1707146171.jpg', 'dygo@mailinator.com', 'kelirason@mailinator.com', 'sedecuzaz@mailinator.com', 'sedecuzaz@mailinator.com', 'kygymyhoco@mailinator.com', NULL, NULL),
(3, 'myxowucix@mailinator.com', 'zuromim@mailinator.com', 'sabyvyxat@mailinator.com', 'tudebahyvu@mailinator.com', 'cytykypera@mailinator.com', '1707146465.jpg', 'dujy@mailinator.com', 'hafuhazoj@mailinator.com', 'jodebiruw@mailinator.com', 'jodebiruw@mailinator.com', 'subukyseqi@mailinator.com', NULL, NULL),
(4, 'fohuc@mailinator.com', 'qihyduvy@mailinator.com', 'lolis@mailinator.com', 'zajewohumi@mailinator.com', 'natuvohop@mailinator.com', '1707149692.jpg', 'qyhoqihig@mailinator.com', 'kiqozyqiw@mailinator.com', 'byqymadabu@mailinator.com', 'byqymadabu@mailinator.com', 'micyz@mailinator.com', NULL, NULL),
(5, 'Mominul', 'devsmominul@gmail.com', '01778254919', 'Tangail', 'ddd', '1707231169.jpg', 'tttttt', '444 55', 'ddd ddd', 'ddd ddd', 'tang', NULL, NULL),
(6, 'Mominul', 'devsmominul@gmail.com', '01778254919', 'Tangail', 'asha', '1707231528.jpg', 'mominul', '444 55', 'asia', 'asia', 'tangail', NULL, NULL),
(7, 'syfydegusu@mailinator.com', 'xygacixyly@mailinator.com', 'mikehehoza@mailinator.com', 'wasenit@mailinator.com', 'xemi@mailinator.com', '1707386556.jpg', 'byceforicy@mailinator.com', 'xasyzyf@mailinator.com', 'vekulewat@mailinator.com', 'vekulewat@mailinator.com', 'ziwowuxuzi@mailinator.com', NULL, NULL),
(8, 'mowak@mailinator.com', 'tigyfobu@mailinator.com', 'vamykimopu@mailinator.com', 'zupiven@mailinator.com', 'lobuful@mailinator.com', '1707386795.jpg', 'jogyhuboq@mailinator.com', 'dujekimos@mailinator.com', 'dajoxec@mailinator.com', 'dajoxec@mailinator.com', 'pypefy@mailinator.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `email`, `phone`, `address`, `experience`, `photo`, `salary`, `vacation`, `city`, `created_at`, `updated_at`) VALUES
(4, 'Mominul', 'devsmominul@gmail.com', '01778254919', 'Tangail', 'laravel', '1707111876.jpg', '55k', 'friday', 'tangail', NULL, NULL),
(5, 'Afrint Jannat Bethi', 'devsmominul@gmail.com', '01778254919', 'Gopulpur', 'laravel', '1707113062.jpg', '44k', 'friday', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_05_052627_create_employes_table', 2),
(6, '2024_02_05_133227_create_customers_table', 3),
(7, '2024_02_05_154600_create_supplyers_table', 4),
(10, '2024_02_06_015158_create_salaries_table', 5),
(11, '2024_02_06_024030_create_advance__salaries_table', 5),
(12, '2024_02_06_130907_create_categories_table', 6),
(16, '2024_02_06_142733_create_products_table', 7),
(17, '2024_02_07_065545_create_attendances_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `sup_id` int NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_garage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `sup_id`, `product_code`, `product_garage`, `product_route`, `product_image`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(1, 'Emmanuel Burch', 6, 2, 'Aut ex possimus aut', 'Id est odit vitae ut', 'Dolore quia earum it', '1707317203.jpg', '1982-08-26', '1972-06-24', '809', '323', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint UNSIGNED NOT NULL,
  `emp_id` int NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amounts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplyers`
--

CREATE TABLE `supplyers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplyers`
--

INSERT INTO `supplyers` (`id`, `name`, `email`, `phone`, `address`, `type`, `shop_name`, `photo`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(1, 'cuqatin@mailinator.com', 'jeguzytazy@mailinator.com', 'dojul@mailinator.com', 'qibu@mailinator.com', 'suxi@mailinator.com', 'qohi@mailinator.com', '1707231847.jpg', 'mybidu@mailinator.com', 'tydan@mailinator.com', 'pimo@mailinator.com', 'pimo@mailinator.com', 'vexizem@mailinator.com', NULL, NULL),
(2, 'Mominul', 'bajyfi@mailinator.com', 'cuhakadap@mailinator.com', 'diqekosat@mailinator.com', 'myhucukisu@mailinator.com', 'mamaloku@mailinator.com', '1707231909.jpg', 'mityxysuq@mailinator.com', 'zamasa@mailinator.com', 'qyxoloza@mailinator.com', 'qyxoloza@mailinator.com', 'ryferamu@mailinator.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Geoffrey Ballard', 'qaqoby@mailinator.com', NULL, '$2y$12$t8nYtF7swNCJHYIZH30fc.azKjOO83k64E.1r5wkHJtb0OqQYuAY2', NULL, '2024-02-03 12:27:43', '2024-02-03 12:27:43'),
(2, 'Fitzgerald Morris', 'jynaqacasu@mailinator.com', NULL, '$2y$12$Lp0CS6LnstfnM3Lq7lx3K.aBxIicO.F3zvLmDy1dDjabgk83xVNFO', NULL, '2024-02-03 12:39:57', '2024-02-03 12:39:57'),
(3, 'Violet Carney', 'wuge@mailinator.com', NULL, '$2y$12$aOEFIiQPq2Qd/zSBSmAQPOIAVZGmQYNa5KWnMaRqGtq.wkTq/4kK.', NULL, '2024-02-03 12:44:51', '2024-02-03 12:44:51'),
(4, 'Hayley Mcgee', 'hugucacaq@mailinator.com', NULL, '$2y$12$xxzW25/k3GJbvtq3u1oe/.8zFYoKiq3gJGpSKmF5Gk5VXrcORsaoK', NULL, '2024-02-03 13:26:12', '2024-02-03 13:26:12'),
(5, 'riwow@mailinator.com', 'nehiwotaki@mailinator.com', NULL, '$2y$12$D2fLj594TE490D2q6OTIaumITRTkN7r7TeSpYphFU3jtpj2VwBqmm', NULL, '2024-02-05 00:04:46', '2024-02-05 00:30:49'),
(6, 'Jillian Bishop', 'kanuhy@mailinator.com', NULL, '$2y$12$vBUxaeO8GTFOBa919p/QJOhae4v2j7sjCKtF0QZNjX/sKqG/cpLeC', NULL, '2024-02-05 12:42:27', '2024-02-05 13:22:22'),
(7, 'Bryar Foley', 'fire@mailinator.com', NULL, '$2y$12$E81f1h/Wz15IvQKXc6PZkOlps/KmzjfPjPKeyGW4tk9KKs4l69jUS', NULL, '2024-02-06 00:05:02', '2024-02-06 00:05:02'),
(8, 'Jaquelyn Mercado', 'cacopa@mailinator.com', NULL, '$2y$12$BUiilOJdah2jy1BzJEc9E.LKVwuXkbOrhyqwV3KtTglxVOI66qU9C', NULL, '2024-02-05 13:29:26', '2024-02-05 13:29:26'),
(9, 'Roanna Nelson', 'lipys@mailinator.com', NULL, '$2y$12$OKC8qT5YBlniw8hK.NLq0eOxF07m7fF4S4z5Bu8zfx9e4/.epOh3S', NULL, '2024-02-05 08:56:29', '2024-02-05 08:56:29'),
(10, 'Rajah Bowen', 'madylu@mailinator.com', NULL, '$2y$12$.UBW1PtyHCdw7hgVCz3mfOwG7isTxgcDROKolR8bklHkLdbdQYY7K', NULL, '2024-02-05 20:01:11', '2024-02-05 20:01:11'),
(11, 'Nadine Joyner', 'nyjunu@mailinator.com', NULL, '$2y$12$y9QtAhQ6AjVWqkrvpsF2IeusqFgXeDG2p/z2V2IIAnASlt0SxioUe', NULL, '2024-02-06 02:52:06', '2024-02-06 02:52:06'),
(12, 'Graiden Sargent', 'givybijyv@mailinator.com', NULL, '$2y$12$Bbqr9pI2NH2vHE02GQ/NwO.bU1fG3p8AFncO3gkz/Weeh45bPmmt6', NULL, '2024-02-07 00:42:49', '2024-02-07 00:42:49'),
(13, 'Myles Frank', 'cahot@mailinator.com', NULL, '$2y$12$Ni1Q86lLUtKxY7vzx6at4.YXr5zNOn372hKkJZKTad28ndv9uY4RS', NULL, '2024-02-07 08:23:10', '2024-02-07 08:23:10'),
(14, 'Tanisha Bradford', 'melicej@mailinator.com', NULL, '$2y$12$LumvjYWaozyPRTRU0RxJaOoTbcU0A464qJJJmHRCZHWR2W1.P1kbO', NULL, '2024-02-07 23:40:18', '2024-02-07 23:40:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance__salaries`
--
ALTER TABLE `advance__salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplyers`
--
ALTER TABLE `supplyers`
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
-- AUTO_INCREMENT for table `advance__salaries`
--
ALTER TABLE `advance__salaries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplyers`
--
ALTER TABLE `supplyers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
