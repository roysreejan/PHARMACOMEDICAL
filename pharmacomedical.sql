-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 02:12 PM
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
-- Database: `pharmacomedical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `appointmentDate&Time` datetime NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visited` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasPaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidDate&Time` datetime NOT NULL,
  `appointmentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appID`, `userID`, `doctorID`, `appointmentDate&Time`, `purpose`, `visited`, `hasPaid`, `paidDate&Time`, `appointmentStatus`, `link`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '2020-08-21 12:00:00', 'test', 'true', 'true', '2020-08-21 11:30:00', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(4, 6, 2, '2020-08-21 12:00:00', 'test', 'true', 'true', '2020-08-21 11:30:00', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(5, 8, 2, '2020-08-21 12:00:00', 'test', 'true', 'true', '2020-08-21 11:30:00', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(6, 9, 2, '2020-08-21 12:00:00', 'test', 'true', 'true', '2020-08-21 11:30:00', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(7, 10, 2, '2020-08-21 12:00:00', 'test', 'true', 'true', '2020-08-21 11:30:00', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(8, 14, 2, '2022-07-03 21:13:30', 'test', 'true', 'true', '2022-07-03 21:13:30', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(9, 15, 2, '2022-07-03 21:15:01', 'test', 'true', 'true', '2022-07-03 21:15:01', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(10, 13, 2, '2022-07-03 21:15:29', 'test', 'true', 'true', '2022-07-03 21:15:29', 'accepted', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(11, 12, 2, '2022-07-03 21:16:01', 'test', 'true', 'true', '2022-07-03 21:16:01', '', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `fee` double NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorID`, `userID`, `fee`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 1000, NULL, NULL, NULL),
(2, 3, 800, NULL, NULL, NULL),
(4, 53, 1200, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reviews`
--

CREATE TABLE `doctor_reviews` (
  `doctorReviewID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_reviews`
--

INSERT INTO `doctor_reviews` (`doctorReviewID`, `userID`, `doctorID`, `point`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '5', 'Good', NULL, NULL),
(2, 6, 2, '4', 'Good', NULL, NULL),
(3, 8, 2, '4', 'Good', NULL, NULL),
(4, 9, 2, '3', 'Good', NULL, NULL),
(6, 10, 2, '5', 'Good', NULL, NULL),
(7, 14, 2, '4', 'Good', NULL, NULL),
(8, 15, 2, '4', 'Good', NULL, NULL),
(9, 13, 2, '3', 'Good', NULL, NULL);

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
(5, '2022_06_20_162709_create_doctors_table', 1),
(61, '2022_06_21_063345_create_doctors_table', 3),
(62, '2022_06_21_063623_create_appointments_table', 4),
(63, '2022_06_21_064136_create_pharmaceutical_items_table', 5),
(64, '2022_06_21_064731_create_prescriptions_table', 6),
(65, '2022_06_21_065028_create_doctor_reviews_table', 7),
(66, '2022_06_21_065322_create_orders_table', 8),
(103, '2014_10_12_100000_create_password_resets_table', 9),
(104, '2019_08_19_000000_create_failed_jobs_table', 9),
(105, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(106, '2022_06_19_140406_create_users_table', 9),
(107, '2022_06_25_192104_create_doctors_table', 9),
(108, '2022_06_25_192421_create_appointments_table', 9),
(109, '2022_06_25_192624_create_pharmaceutical_items_table', 9),
(110, '2022_06_25_192728_create_prescriptions_table', 9),
(111, '2022_06_25_192909_create_doctor_reviews_table', 9),
(112, '2022_06_25_193007_create_orders_table', 9),
(113, '2022_06_26_113459_add_fb_id_column_in_users_table', 9),
(114, '2022_06_26_124229_add_google_id_column_in_users_table', 9),
(115, '2022_08_01_143548_create_tokens_table', 10),
(116, '2022_08_07_165455_create_otps_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `hasPaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidDate&Time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` int(10) UNSIGNED NOT NULL,
  `otp` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `otp`, `email`, `created_at`, `expired_at`) VALUES
(1, 1846, 'sreejanroy01@gmail.com', '2022-08-07 17:12:11', NULL),
(2, 7795, 'sreejanroy01@gmail.com', '2022-08-07 17:12:57', NULL),
(3, 1100, 'apurbajyotisaha@gmail.com', '2022-08-07 17:17:13', NULL),
(4, 5183, 'apurbajyotisaha@gmail.com', '2022-08-07 17:18:55', NULL),
(5, 7980, 'sreejanroy01@gmail.com', '2022-08-07 17:31:28', NULL),
(6, 6694, 'sreejanroy01@gmail.com', '2022-08-07 17:34:28', NULL),
(7, 4499, 'sreejanroy01@gmail.com', '2022-08-07 17:35:13', NULL),
(8, 8430, 'sreejanroy01@gmail.com', '2022-08-07 17:36:30', NULL),
(9, 3953, 'sreejanroy01@gmail.com', '2022-08-07 17:37:31', NULL),
(10, 3410, 'sreejanroy01@gmail.com', '2022-08-07 17:38:30', NULL),
(11, 8872, 'sreejanroy01@gmail.com', '2022-08-07 17:39:30', NULL),
(12, 3061, 'sreejanroy01@gmail.com', '2022-08-07 17:40:19', NULL),
(13, 6546, 'sreejanroy01@gmail.com', '2022-08-07 17:42:15', NULL),
(14, 5831, 'sreejanroy01@gmail.com', '2022-08-07 17:44:11', NULL),
(15, 5622, 'sreejanroy01@gmail.com', '2022-08-07 17:53:49', NULL),
(16, 6962, 'sreejanroy01@gmail.com', '2022-08-07 17:54:12', NULL),
(17, 3141, 'sreejanroy01@gmail.com', '2022-08-07 17:57:01', NULL),
(18, 5897, 'sreejanroy.dev@gmail.com', '2022-08-07 17:57:52', NULL),
(19, 6354, 'sreejanroy.dev@gmail.com', '2022-08-07 17:59:37', NULL),
(20, 7949, 'sreejanroy.dev@gmail.com', '2022-08-07 18:01:35', NULL),
(21, 1466, 'sreejanroy.dev@gmail.com', '2022-08-07 18:04:57', NULL),
(22, 8232, 'sreejanroy.dev@gmail.com', '2022-08-07 18:06:09', NULL),
(23, 7726, 'sreejanroy.dev@gmail.com', '2022-08-07 18:07:03', NULL),
(24, 5029, 'sreejanroy.dev@gmail.com', '2022-08-07 18:12:15', NULL),
(27, 8498, 'sreejanroy.dev@gmail.com', '2022-08-07 18:14:54', NULL),
(28, 3633, 'sreejanroy.dev@gmail.com', '2022-08-07 18:17:45', NULL),
(29, 7672, 'sreejanroy.dev@gmail.com', '2022-08-07 18:22:18', NULL),
(30, 2360, 'sreejanroy.dev@gmail.com', '2022-08-07 18:24:12', NULL),
(31, 7675, 'sreejanroy.dev@gmail.com', '2022-08-07 18:24:43', NULL),
(32, 8572, 'sreejanroy.dev@gmail.com', '2022-08-07 18:25:22', NULL),
(33, 7358, 'sreejanroy.dev@gmail.com', '2022-08-07 18:25:40', NULL),
(34, 3807, 'sreejanroy.dev@gmail.com', '2022-08-07 18:26:11', NULL),
(35, 1408, 'sreejanroy.dev@gmail.com', '2022-08-07 18:26:45', NULL),
(36, 2159, 'sreejanroy.dev@gmail.com', '2022-08-07 18:28:33', NULL),
(37, 8664, 'sreejanroy.dev@gmail.com', '2022-08-07 18:29:33', NULL),
(38, 7998, 'sreejanroy.dev@gmail.com', '2022-08-07 18:30:14', NULL),
(39, 4605, 'sreejanroy.dev@gmail.com', '2022-08-07 18:34:25', NULL),
(40, 3680, 'sreejanroy01@gmail.com', '2022-08-07 18:35:06', NULL),
(41, 3749, 'sreejanroy01@gmail.com', '2022-08-07 18:35:38', NULL),
(42, 7765, 'sreejanroy01@gmail.com', '2022-08-07 18:35:57', NULL),
(43, 2411, 'sreejanroy01@gmail.com', '2022-08-07 18:49:14', NULL),
(44, 1237, 'sreejanroy01@gmail.com', '2022-08-07 18:49:15', NULL),
(45, 7890, 'sreejanroy01@gmail.com', '2022-08-08 06:01:23', NULL),
(46, 2936, 'sreejanroy.dev@gmail.com', '2022-08-08 06:04:36', NULL),
(47, 8680, 'sreejanroy.dev@gmail.com', '2022-08-08 06:04:59', NULL),
(48, 4208, 'sreejanroy.dev@gmail.com', '2022-08-08 06:06:07', NULL),
(49, 1779, 'sreejanroy.dev@gmail.com', '2022-08-08 06:06:31', NULL),
(50, 4265, 'sreejanroy.dev@gmail.com', '2022-08-08 06:08:15', NULL),
(51, 7480, 'sreejanroy01@gmail.com', '2022-08-08 06:14:14', NULL),
(52, 6704, 'apurbajyotisaha@gmail.com', '2022-08-08 14:11:27', NULL),
(53, 3645, 'sreejanroy01@gmail.com', '2022-08-08 14:21:16', NULL),
(54, 5533, 'sreejanroy01@gmail.com', '2022-08-08 14:29:18', NULL),
(55, 2752, 'sreejanroy01@gmail.com', '2022-08-08 14:35:07', NULL);

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
-- Table structure for table `pharmaceutical_items`
--

CREATE TABLE `pharmaceutical_items` (
  `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmaceutical_items`
--

INSERT INTO `pharmaceutical_items` (`pharmaceuticalItemID`, `userID`, `itemName`, `price`, `created_at`, `updated_at`) VALUES
(1, 7, 'Maxpro', 80, NULL, NULL),
(2, 7, 'Paracetamol', 50, NULL, NULL),
(3, 7, 'Napa', 10, NULL, NULL),
(4, 7, 'Happysol', 75, NULL, NULL),
(5, 7, 'Flexi', 50, NULL, NULL),
(6, 7, 'Virux', 65, NULL, NULL),
(7, 7, 'Esloric', 80, NULL, NULL),
(8, 7, 'Akicin', 90, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescriptionID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `appID` int(10) UNSIGNED NOT NULL,
  `pharmaceuticalItemsName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescriptionID`, `userID`, `doctorID`, `appID`, `pharmaceuticalItemsName`, `advice`, `created_at`, `updated_at`) VALUES
(38, 4, 2, 1, 'Maxpro,Paracetamol,Napa,Happysol', 'Take it as prescribed', NULL, NULL),
(39, 6, 2, 4, 'Paracetamol,Maxpro', 'Take it as prescribed', NULL, NULL),
(40, 8, 2, 5, 'Paracetamol,Napa', 'Take it as prescribed', NULL, NULL),
(42, 10, 2, 7, 'Maxpro,Paracetamol,Napa', 'Take it as prescribed', NULL, NULL),
(43, 9, 2, 6, 'Happysol,Paracetamol', 'Take it as prescribed', NULL, NULL),
(44, 14, 2, 8, 'Flexi,Happysol,Virux', 'Take it as prescribed', NULL, NULL),
(45, 15, 2, 9, 'Akicin,Maxpro,Napa', 'Take it as prescribed', NULL, NULL),
(46, 13, 2, 10, 'Virux,Esloric,Flexi', 'Take it as prescribed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `userID`, `email`, `token`, `role`, `created_at`, `expired_at`) VALUES
(1, 2, 'sreejan@gmail.com', '9R9KLl3LAF6GkzICcBczYaSp4dpT2kHfrtG9uWqw6puZo40roqlq5c98RkODbEo9', '', '2022-08-04 09:19:28', '2022-08-04 09:19:54'),
(2, 2, 'sreejan@gmail.com', 'OWKOZkMbxTaihpgWkGNeppV4pgcRi2TwuTxY3nG9wd25vGOXkkdegBROZ1nZaIMg', '', '2022-08-04 09:22:20', '2022-08-04 15:22:45'),
(3, 2, 'sreejan@gmail.com', 'COMxlVizqvJRt0zaguILWboFSsstPCHB6HNeqYE1dvl2SY9XXtcVpk5Fu6Vy0YfH', '', '2022-08-04 09:22:20', '2022-08-04 09:22:27'),
(4, 2, 'sreejan@gmail.com', '8aiE99jyapTiTPXXURBSwUh3SIGM4tCOdE4W77QeUGSTkpJN0gVIe4LrEEscLzPJ', '', '2022-08-04 09:23:06', '2022-08-04 09:27:22'),
(5, 2, 'sreejan@gmail.com', 'e9YgFKfiVK8yFG3Waef1WchB2C8wt8Z9x87nPIg8KX1KApfmMhyVjyGJGVShnBMw', '', '2022-08-04 09:27:33', '2022-08-04 09:27:40'),
(6, 2, 'sreejan@gmail.com', 'tywcPQLbqJJMi7jHNaRm0GtrkCr0wgiBqyyyrakotbkIxm77CSKprQitoMSs1uH0', '', '2022-08-04 09:29:05', '2022-08-04 09:29:11'),
(7, 2, 'sreejan@gmail.com', '4AkJJUD9swvuZxmJtrqtlLcdkoVhOyh9GpePHl7j1x0pumZakfmkSXhaYYR0564I', '', '2022-08-04 09:30:37', '2022-08-04 09:31:37'),
(8, 2, 'sreejan@gmail.com', 'W1Hd9i93vH3o2HYF1tlAKMmdwimhRsoVyDKl5kIxQlRBLGVMwShIdPWo2PYZEUUi', '', '2022-08-04 09:33:16', '2022-08-04 09:33:33'),
(9, 2, 'sreejan@gmail.com', '3XqXoGFznHB9b9UNPnDwY31NqDcxBG8nn0XxKRIqSKuqn5ITj6fid4xSrXT99bat', '', '2022-08-04 09:34:29', '2022-08-04 09:34:35'),
(10, 2, 'sreejan@gmail.com', '1LM8PJYrEG98ECTqjRc83QZ1LOeww3UQNfIJAwm4IdxztlsEYIvTpV6XvJNaevgn', '', '2022-08-04 09:40:25', '2022-08-04 09:40:28'),
(11, 2, 'sreejan@gmail.com', '7I75N8eiATdhkZtCvjF95iPSgk78bD6AZF0NsMqiGMAcGTyndjOzzWgElQetcuNO', '', '2022-08-04 09:42:41', '2022-08-04 09:42:48'),
(12, 2, 'sreejan@gmail.com', '6ZrVSr0f9aUqGr0zbtMlpwM670ShgVt9K3VFtp9T1Qi91u2WOrnE29G53Wafppzy', '', '2022-08-04 11:18:12', NULL),
(13, 2, 'sreejan@gmail.com', 'UU5wbl3PgC4ejW1kxUT2ESCcAs0eJTYXafVkIEAXjeXM4POTtMj1Oj7Xt3A2n9Ug', '', '2022-08-04 15:32:27', '2022-08-04 15:36:37'),
(14, 2, 'sreejan@gmail.com', 'kU6a5RPwukKEAasgkdD9n9VeMac6do7AIqPvwnREipv8GMb4qz0Idsaos7waOeJR', '', '2022-08-04 15:37:39', '2022-08-04 15:39:07'),
(15, 2, 'sreejan@gmail.com', 'exBTUU19huxYDtca33gNHmWGfKhqsHinMyYo86X6GIiAqdwzPXdg1mbN5unTWN27', '', '2022-08-04 15:39:18', '2022-08-04 15:47:06'),
(16, 2, 'sreejan@gmail.com', 'F10IbinDw47PbOPw0gNHfvqycWnMnuqz3Ou1yea0loGj7XoUb0J9EVj5wx4fRnu1', '', '2022-08-04 15:53:19', '2022-08-04 15:53:22'),
(17, 2, 'sreejan@gmail.com', 'bWZ9Sq1RetTuA7HXM4MqFARRJDKQciR0zLfxxqacOv3j9CIkY3iNwqPr7OL79GH6', '', '2022-08-04 15:54:07', NULL),
(18, 2, 'sreejan@gmail.com', 'umy2Rly7h6qCjlOvytNqmXFCbQqfBLgr4Ekv2o38W1wBhtQQWuSxsmVaVcnvxw0k', '', '2022-08-04 15:54:13', '2022-08-04 15:54:37'),
(19, 2, 'sreejan@gmail.com', 'K53RJNGt5MDbJavKsCr7Duhqp7YkNIOjWGIRqTautap8Ao1utS2PSD6vg0i8d9Rx', '', '2022-08-04 15:57:09', '2022-08-04 15:57:16'),
(20, 2, 'sreejan@gmail.com', '5xoI5EJyFuwYbcA2NGqmTmVvZmbE0sIAt43ezNKJlY7ZKYnQkoVjOuiZX1uxm78C', '', '2022-08-04 16:15:35', '2022-08-04 18:05:55'),
(21, 2, 'sreejan@gmail.com', 'iUDmKZXsd46jzlj2ChZumwIh1YmZzmPSo4KDQFkNARBdMHr8OzQI9Jw3eqBud0OO', '', '2022-08-04 18:07:53', '2022-08-04 18:09:03'),
(22, 2, 'sreejan@gmail.com', 'bHXb5UGAFBqaI4NqJnmcL6YLSYMa3vk1Z0x7rhVb4Oez7SwM1BZ7ZhPFjv1ROWy1', '', '2022-08-04 21:30:14', '2022-08-05 18:30:21'),
(23, 2, 'sreejan@gmail.com', 'S9aYRsgJWCsH8ajxQIWo97oBW0QW270BJ9TFrN4RLnaSBsc2C2PfcrCIx76nUFmR', '', '2022-08-05 18:43:45', '2022-08-05 18:44:00'),
(26, 2, 'sreejan@gmail.com', 'TlHuRrzEpRToBtI2jL6SwQc5oakznViujkdWACtZulMXTtHdpJVx6EO8SSVQi032', '', '2022-08-05 21:11:31', '2022-08-05 21:11:54'),
(29, 2, 'sreejan@gmail.com', 'Ziz5UODF58N1azafhYOhgexVNNnPrYagCtd7oFyaaRA0wDiy3QH4yHld72RtCz3c', '', '2022-08-05 21:26:16', '2022-08-05 21:26:36'),
(30, 2, 'sreejan@gmail.com', 'QV2vxPxjpYUTbKueOJEaKNELMHdU2IkypSyBvm3j7jVJ6Q0mLHhFBQIXLPhzUpM6', '', '2022-08-05 21:26:47', '2022-08-05 21:28:02'),
(31, 2, 'sreejan@gmail.com', 'aLdE94QfSz26ntzYFJ9LqZTulQ7JA3Q6OPFecdHtNZCDIZNWeWns52UPE6UF0Vrf', '', '2022-08-05 21:39:05', '2022-08-05 21:39:11'),
(32, 2, 'sreejan@gmail.com', 'TUmU4VPfenzX2DJAzboUu3mgpRXy9rBEFfBEKtZL2ZHeZH5J1SmniFWdJ4zn6zGR', '', '2022-08-05 21:42:07', '2022-08-05 21:42:21'),
(33, 2, 'sreejan@gmail.com', '9U1u0eZzsL3Afo2vz6NnJ1VeiR0B9dJxu0efwc51sF84IjAKX7t6H6xtvLcaiclr', '', '2022-08-05 21:42:25', '2022-08-05 21:42:34'),
(34, 2, 'sreejan@gmail.com', '6Qmgo64LDd1vjjr0pUjqITdYGN8k78o8MqSb6BuKyLceIwyIlHNLOKQU249dmioY', '', '2022-08-05 21:42:49', '2022-08-05 21:51:52'),
(35, 2, 'sreejan@gmail.com', '2SFKOpW5liEXbrRYqZ7ui9VhG5qbpEif7k6KWLUfFq3GDDATpTSOtXeY3YdzY1sM', '', '2022-08-05 21:55:17', '2022-08-05 22:05:31'),
(36, 2, 'sreejan@gmail.com', 'OJggoqd3v1wH30A5NBpM9EFEZI7Kw4d6ntsGasp3AiwwwbkL9miX2sDdDZjItRf5', '', '2022-08-07 13:50:22', NULL),
(37, 2, 'sreejan@gmail.com', 'VLH8x474PshY7O6ZWn7vHrxK1F6e9utuUCVG5YlkaZRQrfnDX1A3komp74vJIPvU', '', '2022-08-07 13:50:32', NULL),
(38, 2, 'sreejan@gmail.com', 'aUntGCZ7QyDZU6wQLFhzW7xl3xbPvOiCNBekVJAKQTgp6iqFn3gJiuvhWmtKlSCr', '', '2022-08-07 13:50:51', '2022-08-07 13:50:57'),
(39, 2, 'sreejan@gmail.com', 'Gq18edLuBOYcBItD7qRWdyUdiqISHSKBs6Nma6ftrnYWBA4qRvBH3NjicRsK5Fea', '', '2022-08-07 13:51:48', NULL),
(40, 2, 'sreejan@gmail.com', 'NDUKim9QcGh8T7c2hFg3uyj0xrYquLkw6mGVyKpJAphb3BNgNa3ppUA6olbfPYGo', '', '2022-08-07 13:51:50', NULL),
(41, 2, 'sreejan@gmail.com', '7HyoaXVyCnWicLGg5vyvqt9l7Gwfcj4a9xkPgCpCJCOZMuEMpDDoQULToJGwWTO5', '', '2022-08-07 14:01:34', '2022-08-07 14:01:38'),
(42, 2, 'sreejan@gmail.com', 'XcCKL2o2ZVSuv1mEqcdchpZ4nHbkO0WkSzwyrtEwSiaVYZJI1lfJ90ITcOfWWcNx', 'doctor', '2022-08-07 15:07:18', NULL),
(43, 2, 'sreejan@gmail.com', 'dx7yofMY6WEyPaVrEBM8Sf9neIB7ULmJ6yvWpjaNhp7HWJRFevlAXGlmmiogumPL', 'doctor', '2022-08-07 15:07:20', NULL),
(44, 2, 'sreejan@gmail.com', 'b9nOgmKwZhJz7HnhhQjYIOtpoQvZmC1fT4EPE4WHzeZK7k4T3OpRWNfaegK8EbdH', 'doctor', '2022-08-07 15:07:25', NULL),
(45, 2, 'sreejan@gmail.com', 'LI7R7CEWb6aiL4UNOYxmRSX1yeOS8uZ9Gi0VCX5T0RjurwezJSEYZ8g5970wSnM5', 'doctor', '2022-08-07 15:11:15', NULL),
(46, 2, 'sreejan@gmail.com', 'hRx4MP9cYrR9dvyA2BJuE0z7BEQhkoT5vcNYRtkhKAARnrAcggMRvZzuu7zzuuA3', 'doctor', '2022-08-07 15:11:16', NULL),
(47, 2, 'sreejan@gmail.com', 'jpMb7DM049CuultyqEfH9XjMf5g3gWMlOCIj9FW4BLwtPfspNYDWgxqSdk9ZhJg4', 'doctor', '2022-08-07 15:11:17', NULL),
(48, 2, 'sreejan@gmail.com', 'XpADAryn1vhXs2cr3msKy3F2P6HxP1y4WUvEHUlK4WSBP7dJb8TQjvJX7T6YA9ZV', NULL, '2022-08-07 15:14:02', NULL),
(49, 49, 'sreejanroy.dev@gmail.com', 'qy5rvyaSgF16aTTDrauZZxRCOuIw3CBLGj2igKpoHJ8CzbokrYcdNYZdyNIeocwg', 'patient', '2022-08-08 06:08:18', NULL),
(50, 50, 'sreejanroy01@gmail.com', 'C6ZQZ1QfyHhW77lYGVMzyARsmAPqbWhMPSiwe0UzFeyHKEOaRlVXNGNNpkoyMSTA', 'doctor', '2022-08-08 06:14:17', NULL),
(51, 2, 'sreejan@gmail.com', 'tBS6piZcboffNb2uhdXobrJF6HQHKymYySRJ1cf38viFZsRyRe2sc10A3JBX1GAh', NULL, '2022-08-08 06:18:39', '2022-08-08 13:24:44'),
(52, 2, 'sreejan@gmail.com', '4hoheNfnutzwxGHmcj69nruayARuUh4dCRboDUh4zKd7AHwNuOmkRLTqHr4j3dyp', NULL, '2022-08-08 13:25:48', '2022-08-08 14:10:22'),
(53, 51, 'apurbajyotisaha@gmail.com', 'JBNZyCuZ4HEygrVtLvn7GSMzgYb6mw9Wpc9ZAyqtguChiIFj8WCTay2efmMZQqzE', 'patient', '2022-08-08 14:11:32', NULL),
(54, 52, 'sreejanroy01@gmail.com', 'pe3fvbCtP9mdY59uJrz4oeXiRnL01JVA1Vax7aaxjjeCV6RTPgI3k73MpyubqQ2J', 'doctor', '2022-08-08 14:21:19', NULL),
(55, 53, 'sreejanroy01@gmail.com', 'nCtJa0uE8y17R0Oe7PpxRk90U7CsifTxPamP85pOMyy5WYPfgbTmo3K5gmhBPsPw', 'doctor', '2022-08-08 14:29:22', NULL),
(56, 54, 'sreejanroy01@gmail.com', '5Mi01cmWtOTKlXRu2CB2qBUUT7g0ySZMzFymPEJIyHXb2hEIyu6MSjAaBZ4mwi7r', 'doctor', '2022-08-08 14:35:10', NULL),
(57, 2, 'sreejan@gmail.com', 'qljTI204YqOV9REpBvVJ79Nd9bCvm9MWjSOGOkVm87k2gc7vKDp2yiAN1U0a3yUg', NULL, '2022-08-09 15:58:47', '2022-08-09 15:59:06'),
(58, 2, 'sreejan@gmail.com', 'ugpNAEzmGR9yFEqBTJXNxQR0BHYZCpSXtuYpyTzvnHvRjZw00MLbuSmbsZjdwCWC', NULL, '2022-08-09 15:59:29', '2022-08-09 15:59:54'),
(59, 2, 'sreejan@gmail.com', 'EJufPqjIMZubxlO7c6iO1UzKd1uVyOyzQJxrUcL3fR4JBeJEndTGmPHP3INyYxoE', NULL, '2022-08-09 16:03:28', '2022-08-09 18:39:09'),
(66, 2, 'sreejan@gmail.com', 'CaKKn7lkCRufJcpld3SoOHyoByyHd7aE29GAI7aH2ayHdrO69lXeFJSJiTs2ESeA', NULL, '2022-08-09 18:39:17', NULL),
(67, 2, 'sreejan@gmail.com', 'DBEaceehWMfOk9LnS1MvWrHQYnarBUS9jbeLPztd60Gkwf4pD9mjNjxl54BP9yxn', NULL, '2022-08-09 18:39:19', NULL),
(68, 52, 'sreejanroy02@gmail.com', 'lPZ6WNYnZR8naIAYEoWFiO6vqIuWvfZCeoYzo1Uu9FuNJQCEkX2JF4upu8YjGOKb', NULL, '2022-08-09 18:40:09', NULL),
(69, 52, 'sreejanroy02@gmail.com', 'TRh7Io7idR397Ef6TaH0y4SaOu3ZTCx2BxL5RHVid2NEyxzAD3m2gPyYQtZjliYp', NULL, '2022-08-09 18:40:12', NULL),
(70, 2, 'sreejan@gmail.com', 'pf3DwpO7uSi1DLOoi4mIMAyLbEMaJSbByGTrt2zx1fZ5ULtKARFDtSUeuGetnBFh', NULL, '2022-08-09 18:40:28', NULL),
(71, 2, 'sreejan@gmail.com', 'GvZQNpwSzUG8Auj7XxVmP0Rl2BWNDYySHbxRYLfjasTLf964SKX61B4ORmgejKTZ', NULL, '2022-08-09 18:40:29', NULL),
(72, 2, 'sreejan@gmail.com', 'UZ8n6Q7EzR0jKlad0BC6FcpMTnLnEeQCI6COcF67HhkxjeZGA4rgfg1gn8ktN6xp', NULL, '2022-08-09 18:40:30', NULL),
(73, 2, 'sreejan@gmail.com', 'USaU0qMixiBugvv7tvm2Lj2olO8MzBI5CRB7nq8lnVMn4jGBWXog2IO4PxOQUvyQ', NULL, '2022-08-09 18:40:31', NULL),
(74, 2, 'sreejan@gmail.com', 'rxRcdRzKiQRgs3KErtaUnOO54pnlpzgoMyJGNFHpqTBINSFPaqneyUs9cQNhAOXg', NULL, '2022-08-09 18:40:56', NULL),
(75, 2, 'sreejan@gmail.com', 'ch2dOxIg5cJUmS8nb8r75CCXXJ5OZNqI39NHrQw2MBx1pe6V9WHQQVssmGeH3ESd', NULL, '2022-08-09 18:40:57', NULL),
(76, 2, 'sreejan@gmail.com', 'VvaHelT3xOtJd8rq3fkyeJp75CWys69Hs7Pz4Z4xXyqnLfGmBYqcVlvkx7aUNeQE', NULL, '2022-08-09 18:40:58', NULL),
(77, 2, 'sreejan@gmail.com', 'MzLUrGo4O2kXrBZBtDph03m2wI3c1DBJ1YXR5p2rH0rWE8sntN94plLo6NKLL0lb', NULL, '2022-08-09 18:41:30', '2022-08-09 20:26:08'),
(78, 2, 'sreejan@gmail.com', 'Wm1AUWVhciRVvfKR2N6HXMTooGx7InwLq7OCHVVJbyKAzfAOsytgoHD7zMdTcYUp', NULL, '2022-08-09 20:26:15', '2022-08-09 21:22:09'),
(79, 2, 'sreejan@gmail.com', 'FUZ23cM5LNTFoQjdjhPJyJPLTw8J37xQC4P0dCUpxwlXKclzcH9TGPrrGN1yotaX', NULL, '2022-08-09 21:24:16', '2022-08-09 21:24:45'),
(80, 2, 'sreejan@gmail.com', 'xNcgM6OUTwzRbREcFXo2VwktSRssCr6X5BnndaAwd9sxvUTuiWNCG22YR4gAZqC3', NULL, '2022-08-09 21:26:38', '2022-08-09 23:28:43'),
(81, 2, 'sreejan@gmail.com', 'Bz3yaedi07pbebXITEPHf6GXr8VAMpxJ7J87yU4Hnm0qox4mXWSeKDiWTYuDezZo', NULL, '2022-08-09 23:28:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `phoneNumber`, `password`, `dob`, `gender`, `role`, `verified`, `created_at`, `updated_at`, `fb_id`, `google_id`) VALUES
(1, 'Sreejan Roy', 'sreejanroy@gmail.com', '+880 1521-526627', 'e10adc3949ba59abbe56e057f20f883e', '2000-02-08', 'male', 'admin', 'true', NULL, NULL, NULL, NULL),
(2, 'Sreejan Roy', 'sreejan@gmail.com', '+880 1521-526628', '132933a2d9a6e8ae562c0fa9abbd8de6', '2000-02-08', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL),
(3, 'Roy', 'roy@gmail.com', '+880 1521-526629', '4531e8924edde928f341f7df3ab36c70', '2000-02-08', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL),
(4, 'Apurba', 'apurba@gmail.com', '+880 1521-526630', '4297f44b13955235245b2497399d7a93', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(6, 'Adi', 'adi@gmail.com', '+880 1521-526631', 'c8837b23ff8aaa8a2dde915473ce0991', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(7, 'Shoumik', 'shoumik@gmail.com', '+880 1521-526632', 'b51e8dbebd4ba8a8f342190a4b9f08d7', '2000-02-08', 'male', 'pharmacist', 'true', NULL, NULL, NULL, NULL),
(8, 'Arko', 'arko@gmail.com', '+880 1521-526633', 'e35cf7b66449df565f93c607d5a81d09', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(9, 'Bijoy', 'bijoy@gmail.com', '+880 1521-526634', '71b3b26aaa319e0cdf6fdb8429c112b0', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(10, 'Sayom', 'sayom@gmail.com', '+880 1521-526635', 'ef7c658f84e110459b559bad0713e48e', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(11, 'Abc', 'abc@gmail.com', '+8801521526637', 'ef7c658f84e110459b559bad0713e48e', '2022-07-05', 'male', 'doctor', NULL, NULL, NULL, NULL, NULL),
(12, 'Rahim', 'rahim@gmail.com', '+880 1521-526638', 'ef7c658f84e110459b559bad0713e48e', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(13, 'Karim', 'karim@gmail.com', '+880 1521-526639', 'ef7c658f84e110459b559bad0713e48e', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(14, 'Abdul', 'abdul@gmail.com', '+880 1521-526640', 'ef7c658f84e110459b559bad0713e48e', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(15, 'Hasan', 'hassan@gmail.com', '+880 1521-526641', 'ef7c658f84e110459b559bad0713e48e', '2000-02-08', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(16, 'RRR', 'rrr@gmail.com', '+880 1521-526680', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-12', 'male', 'patient', NULL, NULL, NULL, NULL, NULL),
(17, 'WWW', 'www@gmail.com', '+880 1521-526681', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-18', 'male', 'patient', NULL, NULL, NULL, NULL, NULL),
(49, 'Sreejan Roy', 'sreejanroy.dev@gmail.com', '+880 1521 526699', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-11', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(50, 'Sreejan Roy', 'sreejanroy2@gmail.com', '+880 1521 526544', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-03', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL),
(51, 'Apurba Saha', 'apurbajyotisaha@gmail.com', '01521526456', '4297f44b13955235245b2497399d7a93', '2022-08-05', 'male', 'patient', 'true', NULL, NULL, NULL, NULL),
(52, 'Sreejan Roy', 'sreejanroy02@gmail.com', '01521526678', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-05', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL),
(53, 'Sreejan Roy', 'sreejanroy03@gmail.com', '01521526698', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-05', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL),
(54, 'Sreejan Roy', 'sreejanroy01@gmail.com', '01521526636', '4297f44b13955235245b2497399d7a93', '2022-08-11', 'male', 'doctor', 'true', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `appointments_userid_foreign` (`userID`),
  ADD KEY `appointments_doctorid_foreign` (`doctorID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorID`),
  ADD KEY `doctors_userid_foreign` (`userID`);

--
-- Indexes for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD PRIMARY KEY (`doctorReviewID`),
  ADD KEY `doctor_reviews_userid_foreign` (`userID`),
  ADD KEY `doctor_reviews_doctorid_foreign` (`doctorID`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_userid_foreign` (`userID`),
  ADD KEY `orders_pharmaceuticalitemid_foreign` (`pharmaceuticalItemID`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
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
-- Indexes for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  ADD PRIMARY KEY (`pharmaceuticalItemID`),
  ADD KEY `pharmaceutical_items_userid_foreign` (`userID`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescriptionID`),
  ADD UNIQUE KEY `prescriptions_appid_unique` (`appID`),
  ADD KEY `prescriptions_userid_foreign` (`userID`),
  ADD KEY `prescriptions_doctorid_foreign` (`doctorID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokens_token_unique` (`token`),
  ADD KEY `tokens_userid_foreign` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phonenumber_unique` (`phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  MODIFY `doctorReviewID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  MODIFY `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescriptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `appointments_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD CONSTRAINT `doctor_reviews_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `doctor_reviews_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_pharmaceuticalitemid_foreign` FOREIGN KEY (`pharmaceuticalItemID`) REFERENCES `pharmaceutical_items` (`pharmaceuticalItemID`),
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  ADD CONSTRAINT `pharmaceutical_items_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_appid_foreign` FOREIGN KEY (`appID`) REFERENCES `appointments` (`appID`),
  ADD CONSTRAINT `prescriptions_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `prescriptions_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
