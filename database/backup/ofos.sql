-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 06:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofos`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userid`, `foodid`, `quantity`, `price`, `totalprice`, `created_at`, `updated_at`) VALUES
(7, '18', '7', '2', '9.1', '18.2', '2021-12-23 07:21:31', '2021-12-23 07:21:31'),
(11, '20', '19', '4', '4.08', '16.32', '2021-12-23 07:28:12', '2021-12-23 07:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `foodid`, `created_at`, `updated_at`) VALUES
(1, 'Dessert', '1', '2021-12-18 03:30:17', '2021-12-18 03:30:17'),
(2, 'Dessert', '2', '2021-12-18 03:31:10', '2021-12-18 03:31:10'),
(3, 'Dessert', '3', '2021-12-18 03:31:53', '2021-12-18 03:31:53'),
(4, 'Breakfast', '4', '2021-12-18 03:32:43', '2021-12-18 03:32:43'),
(5, 'Breakfast', '5', '2021-12-18 03:33:20', '2021-12-18 03:33:20'),
(6, 'Breakfast', '6', '2021-12-18 03:34:15', '2021-12-18 03:34:15'),
(7, 'Dinner', '7', '2021-12-18 03:35:31', '2021-12-18 03:35:31'),
(8, 'Lunch', '8', '2021-12-18 03:36:05', '2021-12-18 03:36:05'),
(9, 'Dinner', '7', '2021-12-18 03:40:30', '2021-12-18 03:40:30'),
(10, 'Dinner', '7', '2021-12-18 03:40:51', '2021-12-18 03:40:51'),
(11, 'Lunch', '8', '2021-12-18 03:41:47', '2021-12-18 03:41:47'),
(12, 'Lunch', '8', '2021-12-18 03:42:27', '2021-12-18 03:42:27'),
(13, 'Breakfast', '9', '2021-12-23 06:26:30', '2021-12-23 06:26:30'),
(14, 'Breakfast', '10', '2021-12-23 06:27:27', '2021-12-23 06:27:27'),
(15, 'Breakfast', '11', '2021-12-23 06:28:05', '2021-12-23 06:28:05'),
(16, 'Lunch', '12', '2021-12-23 06:28:45', '2021-12-23 06:28:45'),
(17, 'Dessert', '13', '2021-12-23 06:29:33', '2021-12-23 06:29:33'),
(18, 'Lunch', '14', '2021-12-23 06:30:05', '2021-12-23 06:30:05'),
(19, 'Lunch', '15', '2021-12-23 06:30:37', '2021-12-23 06:30:37'),
(20, 'Lunch', '16', '2021-12-23 06:31:09', '2021-12-23 06:31:09'),
(21, 'Lunch', '17', '2021-12-23 06:31:46', '2021-12-23 06:31:46'),
(22, 'Dessert', '18', '2021-12-23 06:32:25', '2021-12-23 06:32:25'),
(23, 'Lunch', '19', '2021-12-23 06:33:25', '2021-12-23 06:33:25'),
(24, 'Lunch', '20', '2021-12-23 06:33:56', '2021-12-23 06:33:56'),
(25, 'Dessert', '21', '2021-12-23 06:34:35', '2021-12-23 06:34:35'),
(26, 'Dinner', '22', '2021-12-23 06:35:17', '2021-12-23 06:35:17'),
(27, 'Dinner', '23', '2021-12-23 06:35:48', '2021-12-23 06:35:48'),
(28, 'Dinner', '24', '2021-12-23 06:36:23', '2021-12-23 06:36:23'),
(29, 'Dinner', '25', '2021-12-23 06:37:19', '2021-12-23 06:37:19'),
(30, 'Dinner', '26', '2021-12-23 06:37:46', '2021-12-23 06:37:46'),
(31, 'Dessert', '27', '2021-12-23 06:38:15', '2021-12-23 06:38:15'),
(32, 'Dinner', '28', '2021-12-23 06:38:44', '2021-12-23 06:38:44'),
(33, 'Dinner', '29', '2021-12-23 06:39:13', '2021-12-23 06:39:13'),
(34, 'Dessert', '30', '2021-12-23 06:39:38', '2021-12-23 06:39:38'),
(35, 'Breakfast', '31', '2021-12-23 06:40:24', '2021-12-23 06:40:24'),
(36, 'Breakfast', '32', '2021-12-23 06:41:52', '2021-12-23 06:41:52'),
(37, 'Breakfast', '31', '2021-12-23 06:42:51', '2021-12-23 06:42:51'),
(38, 'Breakfast', '31', '2021-12-23 06:43:33', '2021-12-23 06:43:33'),
(39, 'Dessert', '30', '2021-12-23 06:44:19', '2021-12-23 06:44:19'),
(40, 'Dessert', '30', '2021-12-23 06:45:00', '2021-12-23 06:45:00'),
(41, 'Breakfast', '9', '2021-12-23 06:46:19', '2021-12-23 06:46:19'),
(42, 'Breakfast', '10', '2021-12-23 06:47:19', '2021-12-23 06:47:19'),
(43, 'Breakfast', '11', '2021-12-23 06:47:53', '2021-12-23 06:47:53'),
(44, 'Dessert', '27', '2021-12-23 06:49:28', '2021-12-23 06:49:28'),
(45, 'Dessert', '27', '2021-12-23 06:49:59', '2021-12-23 06:49:59'),
(46, 'Dessert', '21', '2021-12-23 06:50:46', '2021-12-23 06:50:46'),
(47, 'Dessert', '18', '2021-12-23 06:52:11', '2021-12-23 06:52:11'),
(48, 'Dessert', '18', '2021-12-23 06:53:01', '2021-12-23 06:53:01'),
(49, 'Dessert', '13', '2021-12-23 06:54:11', '2021-12-23 06:54:11'),
(50, 'Lunch', '12', '2021-12-23 06:55:00', '2021-12-23 06:55:00'),
(51, 'Lunch', '12', '2021-12-23 06:55:23', '2021-12-23 06:55:23'),
(52, 'Lunch', '14', '2021-12-23 06:56:31', '2021-12-23 06:56:31'),
(53, 'Lunch', '15', '2021-12-23 06:57:31', '2021-12-23 06:57:31'),
(54, 'Lunch', '16', '2021-12-23 06:58:14', '2021-12-23 06:58:14'),
(55, 'Lunch', '17', '2021-12-23 07:00:32', '2021-12-23 07:00:32'),
(56, 'Lunch', '19', '2021-12-23 07:02:47', '2021-12-23 07:02:47'),
(57, 'Lunch', '20', '2021-12-23 07:03:38', '2021-12-23 07:03:38'),
(58, 'Dinner', '22', '2021-12-23 07:08:07', '2021-12-23 07:08:07'),
(59, 'Dessert', '23', '2021-12-23 07:09:01', '2021-12-23 07:09:01'),
(60, 'Dessert', '23', '2021-12-23 07:09:35', '2021-12-23 07:09:35'),
(61, 'Dinner', '24', '2021-12-23 07:10:07', '2021-12-23 07:10:07'),
(62, 'Dinner', '25', '2021-12-23 07:11:10', '2021-12-23 07:11:10'),
(63, 'Dinner', '26', '2021-12-23 07:11:41', '2021-12-23 07:11:41'),
(64, 'Dinner', '28', '2021-12-23 07:12:16', '2021-12-23 07:12:16'),
(65, 'Dinner', '29', '2021-12-23 07:13:21', '2021-12-23 07:13:21'),
(66, 'Dinner', '29', '2021-12-23 07:13:45', '2021-12-23 07:13:45'),
(67, 'Breakfast', '32', '2021-12-23 07:16:33', '2021-12-23 07:16:33'),
(68, 'Breakfast', '32', '2021-12-28 11:07:51', '2021-12-28 11:07:51'),
(69, 'Breakfast', '32', '2021-12-28 11:08:13', '2021-12-28 11:08:13'),
(70, 'Breakfast', '4', '2021-12-28 11:10:16', '2021-12-28 11:10:16'),
(71, 'Breakfast', '5', '2021-12-28 11:11:28', '2021-12-28 11:11:28'),
(72, 'Breakfast', '6', '2021-12-28 11:12:47', '2021-12-28 11:12:47'),
(73, 'Dessert', '1', '2021-12-28 11:14:45', '2021-12-28 11:14:45'),
(74, 'Dessert', '2', '2021-12-28 11:16:10', '2021-12-28 11:16:10'),
(75, 'Dessert', '3', '2021-12-28 11:17:46', '2021-12-28 11:17:46');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `price`, `image`, `category`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Chocolate Cake', '4.1', '1639819817.jpg', 'Dessert', 'Multilayered chocolate cake with cream fillings and tempered chocolate.', '2021-12-18 03:30:17', '2021-12-28 11:14:45'),
(2, 'Blueberry Cheese Cake', '3.4', '1639819870.jpg', 'Dessert', 'Baked cheesecake with blueberry compote and chocolate sauce.', '2021-12-18 03:31:10', '2021-12-28 11:16:10'),
(3, 'Cherry Cup Cake', '2.8', '1639819913.jpg', 'Dessert', 'Light and airy cupcake topped with cream, cherries, and candied lemon.', '2021-12-18 03:31:53', '2021-12-28 11:17:46'),
(4, 'Flapjack', '4.08', '1639819963.jpg', 'Breakfast', 'Stack of crepes topped with strawberries and caramel.', '2021-12-18 03:32:43', '2021-12-28 11:10:16'),
(5, 'Baguette Royale', '2.1', '1639820000.jpg', 'Breakfast', 'French bread with a thin buttery crust and flaky layers.', '2021-12-18 03:33:20', '2021-12-28 11:11:28'),
(6, 'Fresh Chicken Salad', '4.3', '1639820055.png', 'Breakfast', 'Boiled chicken with avocado, tomato, and onion addings.', '2021-12-18 03:34:15', '2021-12-28 11:12:47'),
(7, 'Pizza Quattro Formaggi', '9.1', '1639820131.jpg', 'Dinner', 'Pizza made with four kinds of cheese and topped with basil.', '2021-12-18 03:35:31', '2021-12-18 03:40:51'),
(8, 'Lasagna', '3.8', '1639820165.jpg', 'Lunch', 'Italian pasta dish with various meats, cheeses, herbs, and a Bolognese sauce.', '2021-12-18 03:36:05', '2021-12-18 03:42:27'),
(9, 'Tamagoyaki', '1.75', '1640262390.png', 'Breakfast', 'Japanese rolled Omelette and is made with multiple layers of eggs.', '2021-12-23 06:26:30', '2021-12-23 06:46:19'),
(10, 'Khao Tom', '2.91', '1640262447.jpg', 'Breakfast', 'A mild Thai rice soup with added chicken and various herbs.', '2021-12-23 06:27:27', '2021-12-23 06:47:19'),
(11, 'Grilled Salmon', '2.91', '1640262485.png', 'Breakfast', 'Made from good quality Salmon which is lightly grilled to keep the fish moist.', '2021-12-23 06:28:05', '2021-12-23 06:47:53'),
(12, 'Bruschetta', '2.91', '1640262525.jpg', 'Lunch', 'Italian antipasto dish made from country bread with rubbed garlic.', '2021-12-23 06:28:45', '2021-12-23 06:55:23'),
(13, 'Tiramisu', '4.08', '1640262573.jpg', 'Dessert', 'Italian dessert made from sponge fingers soaked in coffee.', '2021-12-23 06:29:33', '2021-12-23 06:54:11'),
(14, 'Pasta Carbonara', '3.26', '1640262605.png', 'Lunch', 'Italian pasta dish made with spaghetti with cream, eggs, beef bacon.', '2021-12-23 06:30:05', '2021-12-23 06:56:31'),
(15, 'Pad Thai', '3.03', '1640262637.jpg', 'Lunch', 'National dish of Thailand made with noodles, chicken, tofu, etc.', '2021-12-23 06:30:37', '2021-12-23 06:57:31'),
(16, 'Thai Green Curry', '2.80', '1640262669.jpg', 'Lunch', 'Traditional Thai curry made with green curry paste and added eggplant.', '2021-12-23 06:31:09', '2021-12-23 06:58:14'),
(17, 'Unagi', '3.73', '1640262706.jpg', 'Lunch', 'Unagi means grilled Eel. Served with rice, and sides of pickled vegetables.', '2021-12-23 06:31:46', '2021-12-23 07:00:32'),
(18, 'Mung Bean Cake', '2.91', '1640262745.png', 'Dessert', 'Thai baked custard made very fluffy with beaten eggs and butter.', '2021-12-23 06:32:25', '2021-12-23 06:53:01'),
(19, 'Shoyu Ramen', '4.08', '1640262805.jpg', 'Lunch', 'Made with a soy sauce-based broth and topped with hard-boiled eggs.', '2021-12-23 06:33:25', '2021-12-23 07:02:47'),
(20, 'Yakitori', '2.68', '1640262836.jpeg', 'Lunch', 'Japanese grilled skewers made by cutting chicken into small pieces.', '2021-12-23 06:33:56', '2021-12-23 07:03:38'),
(21, 'Shio Daifuku', '2.45', '1640262875.jpg', 'Dessert', 'Popular Japanese dessert made from mochi shells filled with red bean paste.', '2021-12-23 06:34:35', '2021-12-23 06:50:46'),
(22, 'Mushroom Risotto', '3.50', '1640262917.png', 'Dinner', 'Italian rice-based dish made by stirring rice with stock, mushroom.', '2021-12-23 06:35:17', '2021-12-23 07:08:07'),
(23, 'Panettone', '2.91', '1640262948.jpg', 'Dessert', 'Italian sweet bread made from egg, flour, flavored with candied orange.', '2021-12-23 06:35:48', '2021-12-23 07:09:35'),
(24, 'Thai Fish Curry', '3.26', '1640262983.jpg', 'Dinner', 'Thai delicacy made with coconut milk, lemongrass, fish sauce, and lime.', '2021-12-23 06:36:23', '2021-12-23 07:10:07'),
(25, 'Green Papaya Salad', '2.33', '1640263039.jpg', 'Dinner', 'Thai food made from green papaya, snake beans, and lots of Thai red chilies.', '2021-12-23 06:37:19', '2021-12-23 07:11:10'),
(26, 'Thai Noodle Soup', '3.03', '1640263066.jpg', 'Dinner', 'Healing Thai soup made by infusing lemongrass and ginger in the broth.', '2021-12-23 06:37:46', '2021-12-23 07:11:41'),
(27, 'Sesame Pancakes', '2.10', '1640263095.png', 'Dessert', 'Thailand street food rolled-up pancakes flavored with coconut, pandan, and taro.', '2021-12-23 06:38:15', '2021-12-23 06:49:59'),
(28, 'Sukiyaki', '4.43', '1640263124.jpeg', 'Dinner', 'Japanese dish cooked in an iron pan with meats and vegetables sliced thinly.', '2021-12-23 06:38:44', '2021-12-23 07:12:16'),
(29, 'Onigiri', '1.75', '1640263153.jpeg', 'Dinner', 'Japanese dish with steamed rice and rolled in seaweed and sesame seeds.', '2021-12-23 06:39:13', '2021-12-23 07:13:45'),
(30, 'Kuzomochi', '3.26', '1640263178.jpg', 'Dessert', 'A light Japanese dessert made with starchy Kuzuko powder.', '2021-12-23 06:39:38', '2021-12-23 06:45:00'),
(31, 'Cornetto', '2.10', '1640263224.jpg', 'Breakfast', 'It is a buttery pastry that is made from dough, eggs, butter, sugar, and water.', '2021-12-23 06:40:24', '2021-12-23 06:43:33'),
(32, 'Eggs Omelette', '1.16', '1640263312.png', 'Breakfast', 'Fresh eggs fried in butter and topped with cilantro.', '2021-12-23 06:41:52', '2021-12-28 11:08:13');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_20_123644_create_sessions_table', 1),
(7, '2021_11_20_175420_create_menus_table', 1),
(8, '2021_11_20_185054_create_categories_table', 1),
(9, '2021_11_21_100858_create_carts_table', 1),
(10, '2021_12_12_101208_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ccv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `contents`, `price`, `status`, `fname`, `lname`, `userid`, `card`, `date`, `ccv`, `address`, `city`, `zip`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Chicken Salad x 1;\nPancake x 2;\n', '13.5', '1', 'Customer', '1', '16', '1221 1123 6789 4322', '2021-12-31', '664', 'Las Noches', 'Hueco Mundo', '1001', 'customer1@gmail.com', '2021-12-23 07:19:08', '2021-12-23 07:30:26'),
(2, 'Bruschetta x 2;\nSesame Pancakes x 4;\n', '14.22', '0', 'Customer', '2', '18', '1411 1623 6229 4922', '2022-01-09', '211', 'Russian Sushi Square', 'Ikebukuro', '1001', 'customer2@gmail.com', '2021-12-23 07:21:18', '2021-12-23 07:21:18'),
(3, 'Pasta Carbonara x 1;\nMushroom Risotto x 1;\n', '6.76', '0', 'Customer', '3', '19', '1411 1623 6229 4922', '2022-01-08', '318', 'Homura Headquarters', 'Shinjuku', '2212', 'customer3@gmail.com', '2021-12-23 07:26:55', '2021-12-23 07:26:55'),
(4, 'Pancake x 4;\n', '18.4', '0', 'Customer', '4', '20', '1021 1123 6789 4322', '2022-01-06', '264', 'Mathers Domain', 'Lugunica', '3211', 'customer4@gmail.com', '2021-12-23 07:27:48', '2021-12-23 07:27:48'),
(5, 'Thai Green Curry x 2;\n', '5.6', '0', 'Customer', '5', '21', '1411 1623 6229 4922', '2022-01-13', '378', 'Baker Street', 'Paris', '2222', 'customer5@gmail.com', '2021-12-23 07:28:53', '2021-12-23 07:28:53'),
(6, 'Onigiri x 10;\n', '17.5', '0', 'Customer', '6', '22', '1221 1123 6189 4122', '2021-12-25', '992', 'Great Tomb of Nazarick', 'YGGDRASIL', '329', 'customer6@gmail.com', '2021-12-23 07:29:45', '2021-12-23 07:29:45'),
(7, 'Mung Bean Cake x 4;\n', '11.64', '0', 'Customer', '1', '16', '1411 1623 6719 4922', '2022-01-07', '338', 'Las Noches', 'Hueco Mundo', '1001', 'customer1@gmail.com', '2021-12-23 07:31:13', '2021-12-23 07:31:13');

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
('clz1vk5g3ShaaMLYmoFm7Jwi5CwrsLj6h8V8ZM7d', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia25USHhsV0NMc1VtbHFOb0ZHTlhPOURWbERKM3FLdzc3NlJjd1dFTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640265264),
('FX3R2Oed5Velb8Tc2dqUTtXebZuAFwvdFZ41qR63', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianNiZHhQTUo0SEhoblRSN0JOSGt0MlJrUDZkekFUYnd0NUpsNGFLTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1640266283),
('tzjLTEChZagYbuKaBWGkURWFGBN8teODPhMYSCbs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHNNQzZHMUJKQUZqWDVZaVg0cHFnZDA1QllnUVUwY0pLZ2VlMnpsZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1640711912),
('y4zm90IJGeCzBY11033RZ3sXsoJ2HeawkXbzuNfI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXlZWnJQU0NNbTVIcFpuWW43SzlBZ29CUUZMY3RZanFueEZ5RkFvMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93bWVudSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640711869);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(16, 'Customer 1', 'customer1@gmail.com', '0', NULL, '$2y$10$VArjk5WMQQdkjRVa/EZb8OpQVpGgVsNyMwuwnDd731GEdB2DYjIwO', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:17:41', '2021-12-18 03:17:41'),
(17, 'Admin1', 'admin1@gmail.com', '1', NULL, '$2y$10$nyqSuWkRNHEsyeCMwG16YO4z0T80vavltcN6F4Ks4eQzGzLCJBlEe', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:18:00', '2021-12-18 03:18:00'),
(18, 'Customer 2', 'customer2@gmail.com', '0', NULL, '$2y$10$9FfioPE5MK3YcF928uuw4ObOGAJqGrxjBLyqcqqlIoJ.OwunHirci', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:23:06', '2021-12-18 03:23:06'),
(19, 'Customer 3', 'customer3@gmail.com', '0', NULL, '$2y$10$rQfNtGSyWUVAELacB6v2gO3ug.5W17lUpBBsfYT689PL94xd7IWFS', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:23:25', '2021-12-18 03:23:25'),
(20, 'Customer 4', 'customer4@gmail.com', '0', NULL, '$2y$10$a3C2K3bNszQfYJVF4mwtNOKm3fqjD.H.6Oh821PxmLWPcYpsbiYu6', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:23:38', '2021-12-18 03:23:38'),
(21, 'Customer 5', 'customer5@gmail.com', '0', NULL, '$2y$10$i/0wapNiUSTYzcpoagKKKe6ocuzIW1XuZHJUjncHgDiVqEAyVl/CK', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:23:53', '2021-12-18 03:23:53'),
(22, 'Customer 6', 'customer6@gmail.com', '0', NULL, '$2y$10$9sqEExtxFXJXBBiAJTs1CONiOGhPKAtbYr58KySaUQUBTdB6oYTcG', NULL, NULL, NULL, NULL, NULL, '2021-12-18 03:24:11', '2021-12-18 03:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
