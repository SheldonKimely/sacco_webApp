-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 06:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedloans`
--

CREATE TABLE `appliedloans` (
  `id` int(11) NOT NULL,
  `nid` char(12) NOT NULL,
  `amount` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gnid` varchar(255) NOT NULL,
  `gaddress` varchar(255) NOT NULL,
  `gphone` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(50) NOT NULL,
  `groupname` varchar(50) DEFAULT NULL,
  `nid` int(50) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `date_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `groupname`, `nid`, `amount`, `date_paid`) VALUES
(1, NULL, 28131989, '2000', '2017-08-23 17:37:14'),
(2, NULL, 22334455, '2000', '2017-08-23 17:37:27'),
(3, 'kisewe', NULL, '5000', '2017-08-23 17:49:18'),
(4, 'kiomo', NULL, '5000', '2017-08-23 17:51:20'),
(5, 'kiomo', NULL, '5000', '2017-08-23 18:06:53'),
(6, 'kiomo', NULL, '5000', '2017-08-23 18:07:18'),
(7, 'kiomo', NULL, '5000', '2017-08-23 18:07:43'),
(8, 'mtihani', NULL, '5000', '2017-08-23 21:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(50) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `nid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupname`, `nid`) VALUES
(1, 'Kisewe', 28131971),
(2, 'Kisewe', 30117367),
(3, 'Kisewe', 11234567),
(4, 'KIOMO', 12345678),
(5, 'KIOMO', 12345578),
(6, 'Mtihani', 222222222),
(7, 'Mtihani', 333333333);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(50) NOT NULL,
  `nid` int(50) DEFAULT NULL,
  `groupname` varchar(255) DEFAULT NULL,
  `date_awarded` varchar(255) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `loan_period` int(50) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `loan_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `nid`, `groupname`, `date_awarded`, `principal`, `loan_period`, `interest`, `amount`, `loan_status`) VALUES
(1, 28131989, NULL, '2017-08-25 19:33:54', '10500', 3, '302.16666666667', 10878, 'active'),
(2, 30117367, NULL, '2017-08-25 19:34:19', '4800', 4, '104', 4992, 'active'),
(3, 28131971, NULL, '2017-08-25 19:43:24', '3520', 4, '76.266666666667', 3661, 'active'),
(4, 22334455, NULL, '2017-08-25 19:45:41', '3600', 3, '103.6', 3730, 'active'),
(5, 333333333, NULL, '2017-08-25 19:59:52', '10240', 4, '221.86666666667', 10650, 'active'),
(10, NULL, 'KIOMO', '2017-08-25 23:39:18', '2400', 5, '41.6', 2496, 'active'),
(11, NULL, 'Kisewe', '2017-08-25 23:57:49', '2640', 5, '45.76', 2746, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `loans_applied`
--

CREATE TABLE `loans_applied` (
  `id` int(11) NOT NULL,
  `nid` char(12) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `gname` varchar(255) NOT NULL,
  `gaddress` varchar(255) NOT NULL,
  `gphone` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_repayments`
--

CREATE TABLE `loan_repayments` (
  `id` int(50) NOT NULL,
  `loan_id` int(50) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_repayments`
--

INSERT INTO `loan_repayments` (`id`, `loan_id`, `amount`, `date_paid`) VALUES
(1, 11, '45.76', '2017-08-29 18:25:50'),
(2, 11, '45.76', '2017-08-29 18:32:06'),
(3, 2, '104', '2017-08-29 18:57:29'),
(4, 1, '302.16666666667', '2017-08-30 22:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `manager_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `updated_at` varchar(25) DEFAULT NULL,
  `created_at` varchar(25) DEFAULT NULL,
  `role_id` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`manager_id`, `username`, `phone_number`, `email`, `password`, `updated_at`, `created_at`, `role_id`) VALUES
(1, 'Sheldon Kimely', '0745808495', 'sheldonngetich@gmail.com', '$2y$10$VlFjRJTmJh2epRHvCmffceUUmCb4m0tPyDz2WzTvqqANnqDJ7Effi', '2022-08-13 07:25:03', '2022-08-13 07:25:03', 1),
(2, 'Miriam Ngetich', '0722417685', 'miriamngetich412@gmail.com', '$2y$10$OTdpEFQIlwXeoTCDrFLkcu39g/lzrPDHIYV6nCvOrhwB0QjRKmN/6', '2022-08-13 07:31:37', '2022-08-13 07:31:37', 3),
(3, 'Timothy Wanyama', '0734058681', 'tWanyama@gmail.com', '$2y$10$LG773nD6J5ET5t3SDoUowObiXCdB68aw3aPT47Z.M3CV9viL9PSUi', '2022-08-13 07:48:53', '2022-08-13 07:48:53', 3),
(4, 'John Doe', '0745808495', 'johndoe@gmail.com', '$2y$10$OdToJs1A.cdRzWwIoOXw1O1v0rJE3WDxxCJnRhVdqS.JOx3PyMHxm', '2022-08-13 07:59:00', '2022-08-13 07:59:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `nid` char(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `nid`, `address`, `phone`, `password`, `updated_at`, `created_at`, `role_id`) VALUES
(1, 'Daniel Katumbi', '28131989', '43 Kitui', '0727991247', '$2y$10$fGn/2i4qF3.neIUyQUefhuX2wjJ8xoTUUwPgtViAjD1kJxl.XrD1.', '2022-07-20 03:25:29', '2022-07-20 03:25:29', 2),
(2, 'Omboko Milemba', '28131971', '98 Kiambere', '0716890098', '$2y$10$yTcpk1xCGE9Mo3l55oAEdu6LrC6u0BoZhW3jPxV5NioIWcaqEqMGi', '2022-07-20 03:32:37', '2022-07-20 03:32:37', 2),
(3, 'Mike Mmena', '30117367', '111 Ngong', '071689088', '$2y$10$Jx1IOlwQTWyFJsjOLgQBhebECvrnGNoZ9HFwEIEd/2RkjV61YQbXm', '2022-07-20 04:36:18', '2022-07-20 04:36:18', 2),
(4, 'George Magoha', '22334455', '201 Moyale', '07336765878', '$2y$10$e07LP4Vfti.M4EWA/q.udeF.wjL42c/TrkjDV3lbJCQSUuMBPUdWi', '2022-07-20 06:27:46', '2022-07-20 06:27:46', 2),
(5, 'Chris Otieno', '38488671', '001 Mombasa', '0745808495', '$2y$10$HbSRF9.xMjO9otAreISet.5Mqg8ZBqWw59C87a2q1BaHcrCuGMize', '2022-07-20 10:21:39', '2022-07-20 10:21:39', 2),
(6, 'Chris Otieno', '38488671', '001 Mombasa', '0745808495', '$2y$10$5VVq/z0WhzPGekls.wqWTe3tKxz99tmForsoVyNoA/TVeGJJV5IqC', '2022-07-22 07:27:28', '2022-07-22 07:27:28', 2),
(7, 'John Doe', '12345678', '23 Kitui', '0745808495', '$2y$10$zz44ZlralLPLi3IUoNxXDed7rQZyNqedyWTO4O.Exeec0q01DxUqq', '2022-07-22 07:30:18', '2022-07-22 07:30:18', 2),
(8, 'Marty Byrde', '36443261', '43 Kitui', '0745808495', '$2y$10$GMAitAye.tBMWw2Ol2lRjOWTKDJWATK6w/Xl8awA.0ircLSm6d4C6', '2022-08-08 09:03:12', '2022-08-08 09:03:12', 2),
(9, 'Florence Mithika', '21389543', '34 Kajiado', '0768333556', '$2y$10$W.GFhJV3xe9gtBeOlpQlmOg8ofg14F.MWGvw8ICrBwQEXx20KISS.', '2022-08-11 12:59:11', '2022-08-11 12:59:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership_applications`
--

CREATE TABLE `membership_applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNumber` int(11) NOT NULL,
  `idImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `churchMembershipNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_applications`
--

INSERT INTO `membership_applications` (`id`, `name`, `idNumber`, `idImage`, `email`, `phone`, `churchMembershipNumber`, `department`, `service`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sheldon Kimely', 38488671, '1672412283.jpg', 'sheldonngetich@gmail.com', 745808495, '14', 'youth', 'Mentor', 'pending', '2022-12-30 11:58:04', '2022-12-30 11:58:04');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_29_162709_create_membership_applications_table', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(50) NOT NULL,
  `nid` int(50) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `date_paid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `contribution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `nid`, `group_name`, `date_paid`, `amount`, `contribution`) VALUES
(1, 28131989, NULL, '2017-08-23 18:50:51', '2200', '2200'),
(2, 11234567, NULL, '2017-08-23 18:51:07', '1440', '1800'),
(3, NULL, 'Kisewe', '2017-08-23 18:51:07', '360', '1800'),
(4, 12345678, NULL, '2017-08-23 18:51:26', '800', '1000'),
(5, NULL, 'KIOMO', '2017-08-23 18:51:26', '200', '1000'),
(6, 22334455, NULL, '2017-08-23 18:51:44', '1200', '1200'),
(7, 12345578, NULL, '2017-08-23 18:51:56', '2400', '3000'),
(8, NULL, 'KIOMO', '2017-08-23 18:51:56', '600', '3000'),
(9, 30117367, NULL, '2017-08-23 18:52:08', '1200', '1500'),
(10, NULL, 'Kisewe', '2017-08-23 18:52:08', '300', '1500'),
(11, 28131971, NULL, '2017-08-23 18:52:19', '880', '1100'),
(12, NULL, 'Kisewe', '2017-08-23 18:52:19', '220', '1100'),
(13, 333333333, NULL, '2017-08-23 21:58:58', '2560', '3200'),
(14, NULL, 'Mtihani', '2017-08-23 21:58:58', '640', '3200'),
(15, 28131989, NULL, '2017-08-25 13:27:28', '1300', '1300');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedloans`
--
ALTER TABLE `appliedloans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans_applied`
--
ALTER TABLE `loans_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_repayments`
--
ALTER TABLE `loan_repayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_applications`
--
ALTER TABLE `membership_applications`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
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
-- AUTO_INCREMENT for table `appliedloans`
--
ALTER TABLE `appliedloans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loans_applied`
--
ALTER TABLE `loans_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_repayments`
--
ALTER TABLE `loan_repayments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `membership_applications`
--
ALTER TABLE `membership_applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
