-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 08:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `map_order_address`
--

CREATE TABLE `map_order_address` (
  `address_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_order_address`
--

INSERT INTO `map_order_address` (`address_id`, `order_id`) VALUES
(2, 102),
(3, 103),
(7, 104),
(37, 105),
(3, 107),
(3, 108),
(3, 109);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map_order_address`
--
ALTER TABLE `map_order_address`
  ADD KEY `address_id` (`address_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `map_order_address`
--
ALTER TABLE `map_order_address`
  ADD CONSTRAINT `map_order_address_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `store_address` (`id`),
  ADD CONSTRAINT `map_order_address_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
