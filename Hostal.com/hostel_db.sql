-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2024 at 03:01 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_requests`
--

DROP TABLE IF EXISTS `guest_requests`;
CREATE TABLE IF NOT EXISTS `guest_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(255) NOT NULL,
  `guest_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guest_requests`
--

INSERT INTO `guest_requests` (`id`, `guest_name`, `guest_date`) VALUES
(4, 'Fadhila', '2024-10-09'),
(5, 'Fadhila', '2024-10-16'),
(6, 'Gavindu', '2024-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meal_type` varchar(100) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `meal_type`, `time_start`, `time_end`) VALUES
(5, 'Breakfast', '08:00:00', '11:00:00'),
(6, 'Lunch', '12:00:00', '14:00:00'),
(7, 'Dinner', '19:00:00', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `meal_type` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `review_text` text NOT NULL,
  `rating` int NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hosteller_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review_text`, `rating`, `user_email`, `created_at`, `hosteller_name`) VALUES
(14, 'Good place to living', 4, 'dami@gmail.com', '2024-10-05 15:51:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `NIC` varchar(100) NOT NULL,
  `contact_num` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `address`, `NIC`, `contact_num`, `dob`, `email`, `password`, `terms`, `image`, `status`) VALUES
(75, 'Fadhila', 'Colombo', '200285101553', '0776746496', '2002-12-16', 'fad@gmail.com', '$2y$10$ZL1cL8A0jvjSD1Uyeu.BDuGG1u35r5jc8eXOWB5TBvme.dZiEYhjO', 1, 'uploads/123.jpg', 0),
(77, 'Gavindhu Prathap', 'Negambo', '200085101552', '0761231232', '2000-10-09', 'gav@gmail.com', '$2y$10$PIbalSAiroQPARRxiZjYruOLNfgnT8ZUqTLJTERPp8uyHQ5dwYO/m', 0, 'uploads/1234.jpg', 0),
(80, 'Damitha', 'Balangoda', '200085101552', '0761231231', '2024-10-08', 'dami@gmail.com', '$2y$10$6TLuOfcNKgidfvO5KLPEzuJU0TBdPsgFQ.bXV0Bl5DEO/nnaNlYtO', 0, 'uploads/12345.jpg', 0),
(88, 'Dilshad Naleem', '50/5,perakumba Mawatha Kolonnawa', '200300704370', '0725958832', '2024-10-10', 'dilshadnaleem13@gmail.com', '$2y$10$1E2tsU/It0DJPim8fYfYzu6RF0ZqjzRC0JzGYpJo103XQXC.7xHDK', 1, '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
