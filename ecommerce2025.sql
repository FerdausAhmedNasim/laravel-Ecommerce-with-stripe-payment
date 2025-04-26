-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2025 at 04:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Mante-Barton', '1743244865.jpg', '2025-03-27 11:13:15', '2025-03-29 04:41:05'),
(2, 'Maggio, Morissette and Orn', '1744030493.jpeg', '2025-03-27 11:13:15', '2025-04-07 06:54:53'),
(3, 'Hyatt, Kozey and Schulist', 'https://via.placeholder.com/200x200.png/00ee66?text=business+ut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(4, 'Heathcote-Dickens', 'https://via.placeholder.com/200x200.png/00aa88?text=business+vel', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(5, 'Rau Group', 'https://via.placeholder.com/200x200.png/00aacc?text=business+repellendus', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(6, 'Harvey, Bogisich and Oberbrunner', 'https://via.placeholder.com/200x200.png/0022dd?text=business+illum', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(7, 'Daniel, Daniel and Langworth', 'https://via.placeholder.com/200x200.png/000033?text=business+quaerat', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(8, 'Waters Ltd', 'https://via.placeholder.com/200x200.png/00dd00?text=business+saepe', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(9, 'Hoeger, O\'Reilly and Weimann', 'https://via.placeholder.com/200x200.png/005511?text=business+consequatur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(10, 'Von LLC', 'https://via.placeholder.com/200x200.png/007755?text=business+quis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(11, 'Green LLC', 'https://via.placeholder.com/200x200.png/006688?text=business+dolor', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(12, 'Conn, Ritchie and Bahringer', 'https://via.placeholder.com/200x200.png/009911?text=business+voluptas', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(13, 'Stracke, Kautzer and VonRueden', 'https://via.placeholder.com/200x200.png/006644?text=business+eos', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(14, 'Zboncak LLC', 'https://via.placeholder.com/200x200.png/00dd33?text=business+saepe', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(15, 'Paucek and Sons', 'https://via.placeholder.com/200x200.png/009933?text=business+exercitationem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(16, 'Bosco Ltd', 'https://via.placeholder.com/200x200.png/00bb33?text=business+voluptatem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(17, 'Welch LLC', 'https://via.placeholder.com/200x200.png/0066bb?text=business+dicta', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(18, 'Hickle Inc', 'https://via.placeholder.com/200x200.png/001133?text=business+consequatur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(19, 'Weissnat, Gibson and Dare', 'https://via.placeholder.com/200x200.png/0055ee?text=business+odio', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(20, 'Kemmer-Heaney', 'https://via.placeholder.com/200x200.png/009977?text=business+quos', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(21, 'Hyatt-Greenfelder', 'https://via.placeholder.com/200x200.png/003355?text=business+quasi', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(22, 'Harvey Group', 'https://via.placeholder.com/200x200.png/001100?text=business+vitae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(23, 'Hintz-Muller', 'https://via.placeholder.com/200x200.png/002288?text=business+neque', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(24, 'Abbott, Crona and Grady', 'https://via.placeholder.com/200x200.png/003311?text=business+quis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(25, 'Dicki Ltd', 'https://via.placeholder.com/200x200.png/002244?text=business+non', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(26, 'Konopelski LLC', 'https://via.placeholder.com/200x200.png/007711?text=business+vel', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(27, 'Mayert, Morar and Wuckert', 'https://via.placeholder.com/200x200.png/0088dd?text=business+ratione', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(28, 'Torphy Group', 'https://via.placeholder.com/200x200.png/00ee66?text=business+molestiae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(29, 'Beatty-Quitzon', 'https://via.placeholder.com/200x200.png/0077bb?text=business+blanditiis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(30, 'Vandervort PLC', 'https://via.placeholder.com/200x200.png/003344?text=business+velit', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(31, 'Ullrich Ltd', 'https://via.placeholder.com/200x200.png/00dd66?text=business+consequatur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(32, 'Glover, Schaefer and Stanton', 'https://via.placeholder.com/200x200.png/0066ee?text=business+quo', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(33, 'Funk-Klein', 'https://via.placeholder.com/200x200.png/00ff33?text=business+repudiandae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(34, 'Balistreri-VonRueden', 'https://via.placeholder.com/200x200.png/008844?text=business+aut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(35, 'Denesik LLC', 'https://via.placeholder.com/200x200.png/005588?text=business+earum', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(36, 'Schaden, White and Mitchell', 'https://via.placeholder.com/200x200.png/0077cc?text=business+quidem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(37, 'Strosin, Prohaska and Krajcik', 'https://via.placeholder.com/200x200.png/00ff44?text=business+quis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(38, 'Collins PLC', 'https://via.placeholder.com/200x200.png/0099ee?text=business+ut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(39, 'Walker, Marquardt and Considine', 'https://via.placeholder.com/200x200.png/004433?text=business+sint', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(40, 'Lueilwitz-Leffler', 'https://via.placeholder.com/200x200.png/005555?text=business+iusto', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(41, 'Mayer Group', 'https://via.placeholder.com/200x200.png/00ee00?text=business+quis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(42, 'Witting-Dicki', 'https://via.placeholder.com/200x200.png/0011ff?text=business+dolorem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(43, 'Lesch, Kuhlman and Gleichner', 'https://via.placeholder.com/200x200.png/0000bb?text=business+impedit', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(44, 'Adams Group', 'https://via.placeholder.com/200x200.png/00bbcc?text=business+ex', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(45, 'Reichel, Grant and Mraz', 'https://via.placeholder.com/200x200.png/00bbff?text=business+dolores', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(46, 'Ullrich-Howell', 'https://via.placeholder.com/200x200.png/0033aa?text=business+repudiandae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(47, 'Prohaska, Streich and Haag', 'https://via.placeholder.com/200x200.png/007788?text=business+adipisci', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(48, 'Kuvalis, Durgan and Muller', 'https://via.placeholder.com/200x200.png/00ccee?text=business+et', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(49, 'Green-Marquardt', 'https://via.placeholder.com/200x200.png/00cc99?text=business+facilis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(50, 'Thiel and Sons', 'https://via.placeholder.com/200x200.png/00cc33?text=business+perspiciatis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(51, 'Stokes, Aufderhar and Reynolds', 'https://via.placeholder.com/200x200.png/0088cc?text=business+minus', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(52, 'Nitzsche-Hegmann', 'https://via.placeholder.com/200x200.png/006644?text=business+consequuntur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(53, 'Johns, Bashirian and Harvey', 'https://via.placeholder.com/200x200.png/00aa66?text=business+repudiandae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(54, 'Lemke Inc', 'https://via.placeholder.com/200x200.png/005555?text=business+adipisci', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(55, 'Dach, Pollich and Zboncak', 'https://via.placeholder.com/200x200.png/001111?text=business+quia', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(56, 'Strosin PLC', 'https://via.placeholder.com/200x200.png/0099cc?text=business+quasi', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(57, 'Kshlerin, Heaney and Lindgren', 'https://via.placeholder.com/200x200.png/007799?text=business+omnis', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(58, 'Williamson Group', 'https://via.placeholder.com/200x200.png/0000dd?text=business+beatae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(59, 'Leannon, Beatty and Braun', 'https://via.placeholder.com/200x200.png/0033cc?text=business+quia', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(60, 'Lang-Feest', 'https://via.placeholder.com/200x200.png/004400?text=business+qui', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(61, 'Krajcik and Sons', 'https://via.placeholder.com/200x200.png/006622?text=business+velit', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(62, 'Doyle Inc', 'https://via.placeholder.com/200x200.png/00ddaa?text=business+nisi', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(63, 'Homenick-Goldner', 'https://via.placeholder.com/200x200.png/00bb66?text=business+ullam', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(64, 'Green and Sons', 'https://via.placeholder.com/200x200.png/00bb55?text=business+aut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(65, 'Bauch, Lebsack and Daugherty', 'https://via.placeholder.com/200x200.png/000055?text=business+odio', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(66, 'Champlin, Block and Huels', 'https://via.placeholder.com/200x200.png/00ee00?text=business+velit', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(67, 'Hand, Emmerich and Hudson', 'https://via.placeholder.com/200x200.png/0044cc?text=business+consequatur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(68, 'Swift, Dickinson and Reichert', 'https://via.placeholder.com/200x200.png/00dd11?text=business+consequuntur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(69, 'Okuneva, Sawayn and Farrell', 'https://via.placeholder.com/200x200.png/0000aa?text=business+aut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(70, 'Nienow, Heaney and Trantow', 'https://via.placeholder.com/200x200.png/003366?text=business+voluptatem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(71, 'Carroll, Harris and Olson', 'https://via.placeholder.com/200x200.png/0099cc?text=business+consequatur', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(72, 'Rippin-Conn', 'https://via.placeholder.com/200x200.png/003322?text=business+rem', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(73, 'Bogisich, Windler and Kuhic', 'https://via.placeholder.com/200x200.png/00ffee?text=business+ut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(74, 'Gusikowski, Hackett and Lueilwitz', 'https://via.placeholder.com/200x200.png/000044?text=business+ex', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(75, 'Bechtelar LLC', 'https://via.placeholder.com/200x200.png/002211?text=business+quisquam', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(76, 'Torp, Murphy and Vandervort', 'https://via.placeholder.com/200x200.png/002211?text=business+inventore', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(77, 'Wunsch, Abbott and Rosenbaum', 'https://via.placeholder.com/200x200.png/00aa66?text=business+repudiandae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(78, 'Bechtelar-Bayer', 'https://via.placeholder.com/200x200.png/00ff22?text=business+tempora', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(79, 'Windler Inc', 'https://via.placeholder.com/200x200.png/0066dd?text=business+cupiditate', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(80, 'Jacobs-Nicolas', 'https://via.placeholder.com/200x200.png/003333?text=business+labore', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(81, 'Reynolds-Jacobson', 'https://via.placeholder.com/200x200.png/004444?text=business+iusto', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(82, 'Fahey PLC', 'https://via.placeholder.com/200x200.png/00ddcc?text=business+numquam', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(83, 'O\'Hara-Schinner', 'https://via.placeholder.com/200x200.png/00eebb?text=business+sapiente', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(84, 'Hudson, Wiza and Howell', 'https://via.placeholder.com/200x200.png/0044ff?text=business+neque', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(85, 'Bergnaum, McKenzie and Schuppe', 'https://via.placeholder.com/200x200.png/00aa33?text=business+ex', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(86, 'Jones, Dare and Grant', 'https://via.placeholder.com/200x200.png/00ffcc?text=business+ad', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(87, 'Kunde, Paucek and Gutkowski', 'https://via.placeholder.com/200x200.png/007799?text=business+dolor', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(88, 'Balistreri Ltd', 'https://via.placeholder.com/200x200.png/004411?text=business+error', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(89, 'Nienow, Dicki and Morar', 'https://via.placeholder.com/200x200.png/000000?text=business+qui', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(90, 'Gutmann PLC', 'https://via.placeholder.com/200x200.png/00ff99?text=business+cum', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(91, 'Kilback and Sons', 'https://via.placeholder.com/200x200.png/0000ff?text=business+quia', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(92, 'Rowe-Buckridge', 'https://via.placeholder.com/200x200.png/001177?text=business+maiores', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(93, 'Konopelski and Sons', 'https://via.placeholder.com/200x200.png/001133?text=business+ut', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(94, 'Corwin-Gibson', 'https://via.placeholder.com/200x200.png/00aabb?text=business+sed', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(95, 'Farrell, Feeney and Ratke', 'https://via.placeholder.com/200x200.png/00aa99?text=business+quia', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(96, 'Schumm-Balistreri', 'https://via.placeholder.com/200x200.png/00eebb?text=business+molestiae', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(97, 'Kautzer-Cruickshank', 'https://via.placeholder.com/200x200.png/008888?text=business+asperiores', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(98, 'Romaguera, Wiza and Terry', 'https://via.placeholder.com/200x200.png/0077aa?text=business+voluptate', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(99, 'Dibbert, Skiles and Sanford', 'https://via.placeholder.com/200x200.png/008899?text=business+et', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(100, 'Romaguera LLC', 'https://via.placeholder.com/200x200.png/005577?text=business+quia', '2025-03-27 11:13:15', '2025-03-27 11:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 'CAT001', 'Category 1', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(2, 'CAT002', 'Category 2', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(3, 'CAT003', 'Category 3', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(4, 'CAT004', 'Category 4', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(5, 'CAT005', 'Category 5', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(6, 'CAT006', 'Category 6', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(7, 'CAT007', 'Category 7', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(8, 'CAT008', 'Category 8', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(9, 'CAT009', 'Category 9', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(10, 'CAT010', 'Category 10', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(11, 'CAT011', 'Category 11', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(12, 'CAT012', 'Category 12', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(13, 'CAT013', 'Category 13', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(14, 'CAT014', 'Category 14', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(15, 'CAT015', 'Category 15', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(16, 'CAT016', 'Category 16', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(17, 'CAT017', 'Category 17', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(18, 'CAT018', 'Category 18', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(19, 'CAT019', 'Category 19', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(20, 'CAT020', 'Category 20', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(21, 'CAT021', 'Category 21', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(22, 'CAT022', 'Category 22', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(23, 'CAT023', 'Category 23', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(24, 'CAT024', 'Category 24', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(25, 'CAT025', 'Category 25', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(26, 'CAT026', 'Category 26', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(27, 'CAT027', 'Category 27', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(28, 'CAT028', 'Category 28', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(29, 'CAT029', 'Category 29', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(30, 'CAT030', 'Category 30', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(31, 'CAT031', 'Category 31', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(32, 'CAT032', 'Category 32', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(33, 'CAT033', 'Category 33', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(34, 'CAT034', 'Category 34', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(35, 'CAT035', 'Category 35', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(36, 'CAT036', 'Category 36', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(37, 'CAT037', 'Category 37', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(38, 'CAT038', 'Category 38', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(39, 'CAT039', 'Category 39', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(40, 'CAT040', 'Category 40', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(41, 'CAT041', 'Category 41', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(42, 'CAT042', 'Category 42', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(43, 'CAT043', 'Category 43', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(44, 'CAT044', 'Category 44', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(45, 'CAT045', 'Category 45', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(46, 'CAT046', 'Category 46', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(47, 'CAT047', 'Category 47', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(48, 'CAT048', 'Category 48', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(49, 'CAT049', 'Category 49', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(50, 'CAT050', 'Category 50', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(51, 'CAT051', 'Category 51', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(52, 'CAT052', 'Category 52', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(53, 'CAT053', 'Category 53', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(54, 'CAT054', 'Category 54', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(55, 'CAT055', 'Category 55', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(56, 'CAT056', 'Category 56', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(57, 'CAT057', 'Category 57', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(58, 'CAT058', 'Category 58', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(59, 'CAT059', 'Category 59', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(60, 'CAT060', 'Category 60', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(61, 'CAT061', 'Category 61', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(62, 'CAT062', 'Category 62', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(63, 'CAT063', 'Category 63', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(64, 'CAT064', 'Category 64', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(65, 'CAT065', 'Category 65', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(66, 'CAT066', 'Category 66', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(67, 'CAT067', 'Category 67', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(68, 'CAT068', 'Category 68', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(69, 'CAT069', 'Category 69', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(70, 'CAT070', 'Category 70', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(71, 'CAT071', 'Category 71', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(72, 'CAT072', 'Category 72', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(73, 'CAT073', 'Category 73', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(74, 'CAT074', 'Category 74', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(75, 'CAT075', 'Category 75', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(76, 'CAT076', 'Category 76', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(77, 'CAT077', 'Category 77', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(78, 'CAT078', 'Category 78', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(79, 'CAT079', 'Category 79', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(80, 'CAT080', 'Category 80', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(81, 'CAT081', 'Category 81', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(82, 'CAT082', 'Category 82', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(83, 'CAT083', 'Category 83', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(84, 'CAT084', 'Category 84', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(85, 'CAT085', 'Category 85', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(86, 'CAT086', 'Category 86', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(87, 'CAT087', 'Category 87', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(88, 'CAT088', 'Category 88', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(89, 'CAT089', 'Category 89', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(90, 'CAT090', 'Category 90', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(91, 'CAT091', 'Category 91', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(92, 'CAT092', 'Category 92', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(93, 'CAT093', 'Category 93', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(94, 'CAT094', 'Category 94', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(95, 'CAT095', 'Category 95', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(96, 'CAT096', 'Category 96', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(97, 'CAT097', 'Category 97', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(98, 'CAT098', 'Category 98', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(99, 'CAT099', 'Category 99', '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(100, 'CAT100', 'Category 100', '2025-03-27 11:13:15', '2025-03-27 11:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_04_142120_create_categories_table', 1),
(5, '2025_03_04_143404_create_subcategories_table', 1),
(6, '2025_03_04_145230_create_brands_table', 1),
(7, '2025_04_07_112643_create_products_table', 2),
(8, '2025_04_18_161341_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` enum('Hold','Pending','Complete') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_code`, `image`, `name`, `price`, `quantity`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'ORD-MUYDCFKK', '1744172742.jpeg', 'Shirt', 60.00, 2, 120.00, 'Complete', '2025-04-18 19:12:52', '2025-04-18 22:04:05'),
(2, 3, 'ORD-PFUQYYKE', '1744172742.jpeg', 'Shirt', 60.00, 1, 60.00, 'Complete', '2025-04-18 19:13:14', '2025-04-18 22:11:05'),
(3, 3, 'ORD-32WDCB4O', '1744172742.jpeg', 'Shirt', 60.00, 2, 120.00, 'Complete', '2025-04-18 19:29:10', '2025-04-18 22:11:09'),
(4, 3, 'ORD-GONSYZY2', '1744173859.webp', 'pant', 1500.00, 1, 1500.00, 'Pending', '2025-04-18 22:13:33', '2025-04-18 22:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'Made in Bangladesh', 65, '1744172742.jpeg', '2025-04-07 05:59:37', '2025-04-18 21:32:41'),
(3, 'Shirt', 'XL', 2000, '1744172772.jpeg', '2025-04-08 02:41:16', '2025-04-08 22:26:12'),
(4, 'Polo Shirt', 'This is Polo Shirt', 2500, '1744172853.jpeg', '2025-04-08 02:57:44', '2025-04-08 22:27:33'),
(5, 'Shirt XXL', 'Shirt for new genaration', 2000, '1744172940.jpeg', '2025-04-08 03:37:04', '2025-04-08 22:29:00'),
(6, 'pant', 'This is Pant. This is made by Bangldesh.', 1500, '1744173859.webp', '2025-04-08 03:43:35', '2025-04-08 22:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3RJVjgmqP5cslHzV5vgUtpUmDyDLkNaXyb0NNnc9', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTDJ0Vk9hTnA5VWZKN0hScVdueGxEUTVORm9OVk5ycVhtZURsZ0pKUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6NDoiY2FydCI7YToxOntpOjE7YTo0OntzOjQ6Im5hbWUiO3M6NToiU2hpcnQiO3M6ODoicXVhbnRpdHkiO2k6MTtzOjU6InByaWNlIjtkOjY1O3M6NToiaW1hZ2UiO3M6MTU6IjE3NDQxNzI3NDIuanBlZyI7fX19', 1745036242),
('apAjMvfG305xxwvSMN89jjcQvLz2kPy2XQu8IyKf', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNGNjSEJ3a0l3WlpOTjNqZHFmclQwbkNyQllsQnRjZUFCQm5ZSGQwRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9vcmRlcnMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoibW9kZSI7czo0OiJkYXJrIjt9', 1745036169);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-03-27 11:13:14', '$2y$12$M1rzIVnzFdKZTdv34E35UOLTFwru8j2OAi/CWU1W9bppWUL8Px6Ke', 'user', 'gne9MZaXGm', '2025-03-27 11:13:14', '2025-03-27 11:13:14'),
(2, 'Admin User', 'admin@admin.com', NULL, '$2y$12$WgrOkNpCvSo3MaY2LvWUVu/e1wShin2rw6RhJruIT05bpvWgQqfWK', 'admin', NULL, '2025-03-27 11:13:15', '2025-03-27 11:13:15'),
(3, 'Ferdaus Ahmed Nasim Admin', 'ferdausahmed2020@gmail.com', NULL, '$2y$12$WgrOkNpCvSo3MaY2LvWUVu/e1wShin2rw6RhJruIT05bpvWgQqfWK', 'user', NULL, '2025-03-27 12:02:21', '2025-03-27 12:02:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
