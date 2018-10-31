-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2018 at 02:57 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queens`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjustment_in`
--

DROP TABLE IF EXISTS `adjustment_in`;
CREATE TABLE IF NOT EXISTS `adjustment_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `hospital` varchar(45) DEFAULT NULL,
  `adj_date` varchar(15) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drug_id_idx` (`drug_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjustment_in`
--

INSERT INTO `adjustment_in` (`id`, `amount`, `hospital`, `adj_date`, `comment`, `drug_id`, `user_id`) VALUES
(1, '', '', '', '', 1, 1),
(2, '4000', 'Kamuzu hospital', '08/03/2018', 'wzzup in', 1, 1),
(3, '100000', 'Mzuzu central hospital', '09/03/2018', 'ttgment in', 1, 1),
(4, '2000', 'Kamuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(5, '3000', 'Mzuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(6, '5000', 'Kasungu central hospital', '2/5/2017', 'hope it works', 4, 2),
(7, '3000', 'Kamuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(8, '700', 'Kamuzu central hospital', '2/5/2017', 'hope it works', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `adjustment_out`
--

DROP TABLE IF EXISTS `adjustment_out`;
CREATE TABLE IF NOT EXISTS `adjustment_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `hospital` varchar(80) DEFAULT NULL,
  `adj_date` varchar(15) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drug_id_idx` (`drug_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjustment_out`
--

INSERT INTO `adjustment_out` (`id`, `amount`, `hospital`, `adj_date`, `comment`, `drug_id`, `user_id`) VALUES
(1, '2000', 'Kamuzu Central Hospital', '04/03/2018', 'Taken out', 1, 1),
(9, '5000', 'Kasungu central hospital', '2/5/2017', 'hope it works', 4, 2),
(19, '3000', 'Mzuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(8, '3000', 'Mzuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(18, '2000', 'Kamuzu central hospital', '2/5/2017', 'hope it works', 4, 2),
(17, '70000', 'Ntcheu central hospital', '02/03/2018', '', 2, 1),
(20, '5000', 'Kasungu central hospital', '2/5/2017', 'hope it works', 4, 2),
(21, '3000', 'Kamuzu central hospital', '2/5/2017', 'hope it works', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` varchar(45) DEFAULT NULL,
  `department` varchar(60) DEFAULT NULL,
  `checkout_date` varchar(15) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drug_id_idx` (`drug_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `quantity`, `department`, `checkout_date`, `comment`, `drug_id`, `user_id`) VALUES
(1, '40000', 'Othropy', '2018/03/19', 'No comment', 2, 1),
(2, '2000', 'childrens ward', '2018-08-30', 'Given to Miss Maggie', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_code` varchar(5) DEFAULT NULL,
  `class_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_code`, `class_name`) VALUES
(1, 'B&E', 'Injections'),
(2, 'A', 'Tab and Cap'),
(3, 'E', 'Suspension and ORS');

-- --------------------------------------------------------

--
-- Table structure for table `consumption`
--

DROP TABLE IF EXISTS `consumption`;
CREATE TABLE IF NOT EXISTS `consumption` (
  `consumption_id` int(11) NOT NULL AUTO_INCREMENT,
  `max` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `estimate` int(11) DEFAULT NULL,
  `expiry_date` varchar(15) DEFAULT NULL,
  `remaining_month` int(11) DEFAULT NULL,
  `current_quantity` int(11) DEFAULT NULL,
  `stock_of_month` int(11) DEFAULT NULL,
  `normal_order` int(11) DEFAULT NULL,
  `expected_month` int(11) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`consumption_id`),
  KEY `drug_id_idx` (`drug_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

DROP TABLE IF EXISTS `drug`;
CREATE TABLE IF NOT EXISTS `drug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shelf` int(11) DEFAULT NULL,
  `open_lmis` int(11) DEFAULT NULL,
  `drug_name` varchar(60) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id_idx` (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `shelf`, `open_lmis`, `drug_name`, `class_id`) VALUES
(1, 23, 90, 'Panado', 1),
(2, 34, 44, 'Buffen', 2),
(3, 56, 33, 'Dacold', 2),
(4, 2, 1, 'Amoxycillin 125mg/5ml, oral suspention', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expired`
--

DROP TABLE IF EXISTS `expired`;
CREATE TABLE IF NOT EXISTS `expired` (
  `expired_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `num_month` int(11) DEFAULT NULL,
  PRIMARY KEY (`expired_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_22_121122_role', 1),
(4, '2018_08_22_122014_create_role_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` varchar(45) DEFAULT NULL,
  `pdate` varchar(15) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drug_id_idx` (`drug_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `quantity`, `pdate`, `comment`, `drug_id`, `user_id`) VALUES
(1, '2000', '2018-09-08', 'wassup hello', 1, 1),
(7, '2134444', '2018-09-12', 'wassup hello', NULL, NULL),
(4, '50000', '2018-09-13', 'www', 3, NULL),
(5, '2000', '2018-09-12', 'wassup hello', 1, NULL),
(6, '', '2018-09-15', 'www', 13, NULL),
(8, '4301234', '2018-09-13', 'www', NULL, NULL),
(12, '493833', '2018-08-02', 'Lets hope it works', 2, 1),
(10, '2134444', '2018-09-12', 'wassup hello', 1, NULL),
(11, '4301234', '2018-09-13', 'www', 3, NULL),
(13, '3789420555555555', '2018-08-16', 'oh yeah, the Lord is amazing', 3, 1),
(14, '900000', '2017-09-21', 'workkkk', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Pharmacist'),
(3, 'HOD'),
(4, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
CREATE TABLE IF NOT EXISTS `role_users` (
  `role_users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'towie', 'Towera', 'Moyo', 'towera.moyo@yahoo.com', '0881015243', '123456', NULL, NULL, NULL),
(2, 'Jess', 'Jessica', 'Sibande', 'jess.si@gmail.com', '08397299', '123456', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
