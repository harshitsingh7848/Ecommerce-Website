-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 02:16 PM
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
-- Table structure for table `additional_features`
--

CREATE TABLE `additional_features` (
  `id` int(11) NOT NULL,
  `sim_size` varchar(30) DEFAULT NULL,
  `sensors` varchar(30) DEFAULT NULL,
  `date_first_available` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_features`
--

INSERT INTO `additional_features` (`id`, `sim_size`, `sensors`, `date_first_available`) VALUES
(1, '', NULL, NULL),
(2, '', NULL, NULL),
(3, '', NULL, NULL),
(4, '10 cm', NULL, NULL),
(5, '10 cm', NULL, NULL),
(6, 'scnkcsn', NULL, NULL),
(7, 'scnkcsn', NULL, NULL),
(8, ' x zx,', NULL, NULL),
(9, ' x zx,', NULL, NULL),
(10, ' x zx,', NULL, NULL),
(11, ' n n', NULL, NULL),
(12, ' n n', NULL, NULL),
(13, '10 cm', NULL, NULL),
(14, 'x ,aax ', NULL, NULL),
(15, 'x ,aax ', NULL, NULL),
(16, 'nn', NULL, NULL),
(17, '', NULL, NULL),
(18, '', NULL, NULL),
(19, '', NULL, NULL),
(20, '', NULL, NULL),
(21, '', NULL, NULL),
(22, '', NULL, NULL),
(23, '', NULL, NULL),
(24, '', NULL, NULL),
(25, '', NULL, NULL),
(26, '12 cm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `address_type`
--

CREATE TABLE `address_type` (
  `id` int(11) NOT NULL,
  `address_type` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_type`
--

INSERT INTO `address_type` (`id`, `address_type`) VALUES
(1, 'Billing Address'),
(2, 'Shipping Address');

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `addDate` datetime DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `battery_features`
--

CREATE TABLE `battery_features` (
  `id` int(11) NOT NULL,
  `battery_capacity` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battery_features`
--

INSERT INTO `battery_features` (`id`, `battery_capacity`) VALUES
(1, ';lnnlnkl'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, '4000 Mh'),
(26, '4000 Mh'),
(27, 'cnssdn'),
(28, 'cnssdn'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, '4000 MH');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`) VALUES
(1, 'Redmi'),
(2, 'Apple'),
(3, 'Nokia'),
(4, 'Samsung'),
(5, 'Motorola'),
(6, 'HTC'),
(7, 'Oppo'),
(8, 'Panasonic');

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `brand_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_product`
--

INSERT INTO `brand_product` (`brand_id`, `product_id`) VALUES
(1, 1),
(2, 2),
(6, 5),
(7, 6),
(5, 4),
(4, 3),
(2, 7),
(8, 70);

-- --------------------------------------------------------

--
-- Table structure for table `camera_features`
--

CREATE TABLE `camera_features` (
  `id` int(11) NOT NULL,
  `primary_camera` varchar(30) DEFAULT NULL,
  `primary_camera_features` varchar(30) DEFAULT NULL,
  `secondary_camera` varchar(30) DEFAULT NULL,
  `flash` varchar(30) DEFAULT NULL,
  `digitalzoom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera_features`
--

INSERT INTO `camera_features` (`id`, `primary_camera`, `primary_camera_features`, `secondary_camera`, `flash`, `digitalzoom`) VALUES
(1, '', NULL, '', NULL, NULL),
(2, '', NULL, '', NULL, NULL),
(3, '', NULL, '', NULL, NULL),
(4, '', NULL, '', NULL, NULL),
(5, '', NULL, '', NULL, NULL),
(6, '21 MP', NULL, '13 MP', NULL, NULL),
(7, '21 MP', NULL, '13 MP', NULL, NULL),
(8, 'csnkscn', NULL, 'scnack', NULL, NULL),
(9, 'csnkscn', NULL, 'scnack', NULL, NULL),
(10, '', NULL, '', NULL, NULL),
(11, '', NULL, '', NULL, NULL),
(12, '', NULL, '', NULL, NULL),
(13, '', NULL, '', NULL, NULL),
(14, '', NULL, '', NULL, NULL),
(15, '', NULL, '', NULL, NULL),
(16, '', NULL, '', NULL, NULL),
(17, '', NULL, '', NULL, NULL),
(18, '', NULL, '', NULL, NULL),
(19, '', NULL, '', NULL, NULL),
(20, '', NULL, '', NULL, NULL),
(21, '', NULL, '', NULL, NULL),
(22, '', NULL, '', NULL, NULL),
(23, '', NULL, '', NULL, NULL),
(24, '', NULL, '', NULL, NULL),
(25, '', NULL, '', NULL, NULL),
(26, '', NULL, '', NULL, NULL),
(27, '', NULL, '', NULL, NULL),
(28, '8 MP', NULL, '16 MP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `id` int(11) NOT NULL,
  `color` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`id`, `color`) VALUES
(1, 'xccsk'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, 'cscnk'),
(10, 'oiub'),
(11, 'oiub'),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, 'Blue'),
(26, 'Blue'),
(27, 'Blue'),
(28, 'Blue'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, 'Blue'),
(48, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `connectivity_features`
--

CREATE TABLE `connectivity_features` (
  `id` int(11) NOT NULL,
  `network_type` varchar(30) DEFAULT NULL,
  `supported_networks` varchar(50) DEFAULT NULL,
  `internet_connectivity` varchar(50) DEFAULT NULL,
  `usb_connectivity` varchar(30) DEFAULT NULL,
  `gprs` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connectivity_features`
--

INSERT INTO `connectivity_features` (`id`, `network_type`, `supported_networks`, `internet_connectivity`, `usb_connectivity`, `gprs`) VALUES
(1, '', '', NULL, NULL, ''),
(2, '', '', NULL, NULL, ''),
(3, '', '', NULL, NULL, ''),
(4, '', '', NULL, NULL, ''),
(5, '', '', NULL, NULL, ''),
(6, 'LTE', '4G/3G', NULL, NULL, 'available'),
(7, 'LTE', '4G/3G', NULL, NULL, 'available'),
(8, 'HSh', 'scbcb', NULL, NULL, 'csscnk'),
(9, 'HSh', 'scbcb', NULL, NULL, 'csscnk'),
(10, '', '', NULL, NULL, ''),
(11, '', '', NULL, NULL, ''),
(12, '', '', NULL, NULL, ''),
(13, '', '', NULL, NULL, ''),
(14, '', '', NULL, NULL, ''),
(15, '', '', NULL, NULL, ''),
(16, '', '', NULL, NULL, ''),
(17, '', '', NULL, NULL, ''),
(18, '', '', NULL, NULL, ''),
(19, '', '', NULL, NULL, ''),
(20, '', '', NULL, NULL, ''),
(21, '', '', NULL, NULL, ''),
(22, '', '', NULL, NULL, ''),
(23, '', '', NULL, NULL, ''),
(24, '', '', NULL, NULL, ''),
(25, '', '', NULL, NULL, ''),
(26, '', '', NULL, NULL, ''),
(27, '', '', NULL, NULL, ''),
(28, 'scsc', 'scsc', NULL, NULL, 'sfff');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `reviewmessage` text,
  `reviewmessagedate` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` int(11) NOT NULL,
  `dimension` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `dimension`) VALUES
(1, ';llnnl'),
(2, ''),
(3, '1234'),
(4, '1234'),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, '12X13'),
(26, '12X13'),
(27, '12x14'),
(28, '12x14'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, '12x13');

-- --------------------------------------------------------

--
-- Table structure for table `display_features`
--

CREATE TABLE `display_features` (
  `id` int(11) NOT NULL,
  `display_size` varchar(30) DEFAULT NULL,
  `resolution` varchar(30) DEFAULT NULL,
  `resolution_type` varchar(30) DEFAULT NULL,
  `display_type` varchar(30) DEFAULT NULL,
  `display_colors` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display_features`
--

INSERT INTO `display_features` (`id`, `display_size`, `resolution`, `resolution_type`, `display_type`, `display_colors`) VALUES
(1, '', '', NULL, NULL, ''),
(2, '', '', NULL, NULL, ''),
(3, '', '', NULL, NULL, ''),
(4, '', '', NULL, NULL, ''),
(5, '', '', NULL, NULL, ''),
(6, '10', '10x10', NULL, NULL, 'Green'),
(7, '10', '10x10', NULL, NULL, 'Green'),
(8, '20 cm', '321', NULL, NULL, 'Green'),
(9, '20 cm', '321', NULL, NULL, 'Green'),
(10, '', '', NULL, NULL, ''),
(11, '', '', NULL, NULL, ''),
(12, '', '', NULL, NULL, ''),
(13, '', '', NULL, NULL, ''),
(14, '', '', NULL, NULL, ''),
(15, '', '', NULL, NULL, ''),
(16, '', '', NULL, NULL, ''),
(17, '', '', NULL, NULL, ''),
(18, '', '', NULL, NULL, ''),
(19, '', '', NULL, NULL, ''),
(20, '', '', NULL, NULL, ''),
(21, '', '', NULL, NULL, ''),
(22, '', '', NULL, NULL, ''),
(23, '', '', NULL, NULL, ''),
(24, '', '', NULL, NULL, ''),
(25, '', '', NULL, NULL, ''),
(26, '', '', NULL, NULL, ''),
(27, '', '', NULL, NULL, ''),
(28, '10 cm', 'wdd', NULL, NULL, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(1, 'Panasonic P11download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_number` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`) VALUES
(1, 'GM70'),
(2, 'GMufxhod2aik703'),
(3, 'GMn5tv9449mm703'),
(4, 'GMkl2u4shqpc703'),
(5, 'GMv4p7dcizu6703'),
(6, 'GMfi1g4mj4vx703'),
(7, 'GMhmtbmmpyct703'),
(8, 'GMow18o835a6703'),
(9, 'GMakw7bpv1n5703'),
(10, 'GMox51dv9rgj703');

-- --------------------------------------------------------

--
-- Table structure for table `map_product_additional_features`
--

CREATE TABLE `map_product_additional_features` (
  `product_id` int(11) NOT NULL,
  `additional_features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_additional_features`
--

INSERT INTO `map_product_additional_features` (`product_id`, `additional_features_id`) VALUES
(70, 26);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_battery_features`
--

CREATE TABLE `map_product_battery_features` (
  `product_id` int(11) NOT NULL,
  `battery_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_battery_features`
--

INSERT INTO `map_product_battery_features` (`product_id`, `battery_feature_id`) VALUES
(70, 47);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_brand`
--

CREATE TABLE `map_product_brand` (
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_camera_features`
--

CREATE TABLE `map_product_camera_features` (
  `product_id` int(11) NOT NULL,
  `camera_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_camera_features`
--

INSERT INTO `map_product_camera_features` (`product_id`, `camera_feature_id`) VALUES
(70, 28);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_color_features`
--

CREATE TABLE `map_product_color_features` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_color_features`
--

INSERT INTO `map_product_color_features` (`product_id`, `color_id`) VALUES
(70, 48);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_connectivity_features`
--

CREATE TABLE `map_product_connectivity_features` (
  `product_id` int(11) NOT NULL,
  `connectivity_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_connectivity_features`
--

INSERT INTO `map_product_connectivity_features` (`product_id`, `connectivity_feature_id`) VALUES
(70, 28);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_dimension_features`
--

CREATE TABLE `map_product_dimension_features` (
  `product_id` int(11) NOT NULL,
  `dimension_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_dimension_features`
--

INSERT INTO `map_product_dimension_features` (`product_id`, `dimension_feature_id`) VALUES
(70, 47);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_display_features`
--

CREATE TABLE `map_product_display_features` (
  `product_id` int(11) NOT NULL,
  `display_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_display_features`
--

INSERT INTO `map_product_display_features` (`product_id`, `display_feature_id`) VALUES
(70, 28);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_image`
--

CREATE TABLE `map_product_image` (
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_image`
--

INSERT INTO `map_product_image` (`product_id`, `image_id`) VALUES
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_memory_features`
--

CREATE TABLE `map_product_memory_features` (
  `product_id` int(11) NOT NULL,
  `memory_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_memory_features`
--

INSERT INTO `map_product_memory_features` (`product_id`, `memory_feature_id`) VALUES
(70, 28);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_order`
--

CREATE TABLE `map_product_order` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_order`
--

INSERT INTO `map_product_order` (`order_id`, `product_id`) VALUES
(1, 70),
(2, 70),
(3, 70),
(4, 70),
(5, 70),
(6, 70),
(7, 70),
(8, 70),
(9, 70),
(10, 70),
(11, 1),
(12, 6),
(13, 70),
(14, 70),
(15, 70),
(16, 70),
(17, 70),
(18, 70),
(19, 70),
(20, 70),
(21, 70),
(22, 70),
(23, 70),
(24, 70),
(25, 70),
(26, 70),
(27, 70),
(28, 70),
(29, 70),
(30, 70),
(31, 70),
(32, 70),
(33, 70),
(34, 70),
(35, 70),
(36, 70),
(37, 70),
(38, 70),
(39, 70),
(40, 70),
(41, 70),
(42, 70),
(43, 70),
(44, 70),
(45, 70),
(46, 70),
(47, 70),
(48, 70),
(49, 70),
(50, 70),
(51, 70),
(52, 70),
(53, 70),
(54, 70),
(55, 70),
(56, 70),
(57, 70),
(58, 70),
(59, 70),
(60, 70),
(61, 70),
(62, 70),
(63, 70),
(64, 70),
(65, 70),
(66, 70),
(67, 70),
(68, 70),
(69, 70),
(70, 70),
(71, 70),
(72, 70),
(73, 70),
(74, 70),
(75, 70),
(76, 70),
(77, 70),
(78, 70),
(79, 70),
(80, 70),
(81, 70),
(82, 70),
(83, 70),
(84, 70),
(85, 70),
(86, 70),
(87, 70),
(88, 70),
(89, 70),
(90, 70),
(91, 70),
(92, 70),
(93, 70);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_os_features`
--

CREATE TABLE `map_product_os_features` (
  `product_id` int(11) NOT NULL,
  `os_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_os_features`
--

INSERT INTO `map_product_os_features` (`product_id`, `os_feature_id`) VALUES
(70, 36);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_warranty_features`
--

CREATE TABLE `map_product_warranty_features` (
  `product_id` int(11) NOT NULL,
  `warranty_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_product_warranty_features`
--

INSERT INTO `map_product_warranty_features` (`product_id`, `warranty_feature_id`) VALUES
(70, 47);

-- --------------------------------------------------------

--
-- Table structure for table `map_product_whatisinbox`
--

CREATE TABLE `map_product_whatisinbox` (
  `boxid` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_user_order`
--

CREATE TABLE `map_user_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memory_features`
--

CREATE TABLE `memory_features` (
  `id` int(11) NOT NULL,
  `internal_storage` varchar(30) DEFAULT NULL,
  `RAM` varchar(30) DEFAULT NULL,
  `expandable_storage` varchar(30) DEFAULT NULL,
  `supported_memory_type` varchar(30) DEFAULT NULL,
  `memory_card_slot_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memory_features`
--

INSERT INTO `memory_features` (`id`, `internal_storage`, `RAM`, `expandable_storage`, `supported_memory_type`, `memory_card_slot_type`) VALUES
(1, '', '', '', NULL, NULL),
(2, '', '', '', NULL, NULL),
(3, '', '', '', NULL, NULL),
(4, '', '', '', NULL, NULL),
(5, '', '', '', NULL, NULL),
(6, '4GB', '128GB', '256GB', NULL, NULL),
(7, '4GB', '128GB', '256GB', NULL, NULL),
(8, '4Gb', '64Gb', '128Gb', NULL, NULL),
(9, '4Gb', '64Gb', '128Gb', NULL, NULL),
(10, '', '', '', NULL, NULL),
(11, '', '', '', NULL, NULL),
(12, '', '', '', NULL, NULL),
(13, '', '', '', NULL, NULL),
(14, '', '', '', NULL, NULL),
(15, '', '', '', NULL, NULL),
(16, '', '', '', NULL, NULL),
(17, '', '', '', NULL, NULL),
(18, '', '', '', NULL, NULL),
(19, '', '', '', NULL, NULL),
(20, '', '', '', NULL, NULL),
(21, '', '', '', NULL, NULL),
(22, '', '', '', NULL, NULL),
(23, '', '', '', NULL, NULL),
(24, '', '', '', NULL, NULL),
(25, '', '', '', NULL, NULL),
(26, '', '', '', NULL, NULL),
(27, '', '', '', NULL, NULL),
(28, '4 GB', '64 GB', '128 GB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`) VALUES
(1, 'Product'),
(2, 'Order'),
(3, 'Reports'),
(4, 'User'),
(5, 'Cart'),
(6, 'Category'),
(7, 'Brand'),
(8, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `offer_price`
--

CREATE TABLE `offer_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `offer_description` text,
  `quantity_sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mode_of_payment` varchar(30) DEFAULT NULL,
  `order_number` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_quantity`, `order_date`, `mode_of_payment`, `order_number`) VALUES
(1, 1, '2018-03-15 11:09:17', 'cash', ''),
(2, 1, '2018-03-15 11:40:20', 'cash', ''),
(3, 1, '2018-03-15 11:40:37', 'cash', ''),
(4, 1, '2018-03-15 11:42:33', 'cash', ''),
(5, 1, '2018-03-15 11:43:57', 'cash', ''),
(6, 1, '2018-03-15 11:44:37', 'cash', ''),
(7, 1, '2018-03-15 11:45:53', 'cash', ''),
(8, 1, '2018-03-15 11:46:07', 'cash', ''),
(9, 1, '2018-03-15 12:04:28', 'cash', ''),
(10, 1, '2018-03-15 12:05:03', 'cash', ''),
(11, 1, '2018-03-15 12:16:00', 'cash', ''),
(12, 2, '2018-03-15 12:16:50', 'cash', ''),
(13, 2, '2018-03-15 12:18:35', 'cash', ''),
(14, 1, '2018-03-15 12:41:10', 'cash', ''),
(15, 2, '2018-03-15 12:41:31', 'cash', ''),
(16, 2, '2018-03-15 12:46:08', 'cash', ''),
(17, 1, '2018-03-15 12:55:13', 'cash', ''),
(18, 1, '2018-03-15 13:09:14', 'cash', ''),
(19, 1, '2018-03-16 06:32:55', 'cash', ''),
(20, 1, '2018-03-16 06:33:41', 'cash', ''),
(21, 1, '2018-03-16 06:36:59', 'cash', ''),
(22, 1, '2018-03-16 06:39:34', 'cash', ''),
(23, 1, '2018-03-16 06:44:50', 'cash', ''),
(24, 1, '2018-03-16 06:59:59', 'cash', ''),
(25, 1, '2018-03-16 07:01:46', 'cash', ''),
(26, 2, '2018-03-16 07:03:47', 'cash', ''),
(27, 1, '2018-03-16 07:36:15', 'cash', ''),
(28, 2, '2018-03-16 09:20:18', 'cash', NULL),
(29, 2, '2018-03-16 09:20:49', 'cash', NULL),
(30, 2, '2018-03-16 09:21:00', 'cash', NULL),
(31, 2, '2018-03-16 09:22:13', 'cash', 'GMqdncj3bxo570331'),
(32, 2, '2018-03-16 09:22:56', 'cash', 'GM33ypxdewax70332'),
(33, 2, '2018-03-16 09:23:22', 'cash', 'GMf207z4la8k70333'),
(34, 2, '2018-03-16 09:53:07', 'cash', 'GMm9ytu910sj70334'),
(35, 2, '2018-03-16 10:01:29', 'cash', 'GMd0bl842bne70335'),
(36, 2, '2018-03-16 10:14:56', 'cash', 'GMq4tang2lg970336'),
(37, 2, '2018-03-16 10:18:17', 'cash', 'GM7xbwxowaym70337'),
(38, 2, '2018-03-16 10:19:24', 'cash', 'GMgmubgav3vl70338'),
(39, 2, '2018-03-16 10:20:18', 'cash', 'GM0ekjbhhf5270339'),
(40, 2, '2018-03-16 10:21:00', 'cash', 'GMq1wolgwpl270340'),
(41, 2, '2018-03-16 10:21:14', 'cash', 'GMm9mqmhh02e70341'),
(42, 2, '2018-03-16 10:21:28', 'cash', 'GM8h9ske7li870342'),
(43, 2, '2018-03-16 10:22:12', 'cash', 'GMairpb97xpt70343'),
(44, 2, '2018-03-16 10:22:47', 'cash', 'GMOR-70344'),
(45, 2, '2018-03-16 10:54:15', 'cash', 'GMOR-70345'),
(46, 2, '2018-03-16 10:57:57', 'cash', 'GMOR-70346'),
(47, 2, '2018-03-16 10:59:28', 'cash', 'GMOR-70347'),
(48, 2, '2018-03-16 11:00:35', 'cash', 'GMOR-70348'),
(49, 2, '2018-03-16 11:03:12', 'cash', 'GMOR-70349'),
(50, 2, '2018-03-16 11:37:40', 'cash', 'GMOR-70350'),
(51, 2, '2018-03-16 11:43:21', 'cash', 'GMOR-70351'),
(52, 2, '2018-03-16 11:44:45', 'cash', 'GMOR-70352'),
(53, 2, '2018-03-16 11:44:50', 'cash', 'GMOR-70353'),
(54, 2, '2018-03-16 11:45:24', 'cash', 'GMOR-70354'),
(55, 2, '2018-03-16 11:45:46', 'cash', 'GMOR-70355'),
(56, 2, '2018-03-16 11:46:58', 'cash', 'GMOR-70356'),
(57, 2, '2018-03-16 11:47:52', 'cash', 'GMOR-70357'),
(58, 2, '2018-03-16 11:48:10', 'cash', 'GMOR-70358'),
(59, 2, '2018-03-16 12:30:56', 'cash', 'GMOR-70359'),
(60, 2, '2018-03-16 12:31:24', 'cash', 'GMOR-70360'),
(61, 2, '2018-03-16 12:33:03', 'cash', 'GMOR-70361'),
(62, 2, '2018-03-16 12:33:31', 'cash', 'GMOR-70362'),
(63, 2, '2018-03-16 12:34:08', 'cash', 'GMOR-70363'),
(64, 2, '2018-03-16 12:34:13', 'cash', 'GMOR-70364'),
(65, 2, '2018-03-16 12:34:53', 'cash', 'GMOR-70365'),
(66, 2, '2018-03-16 12:35:24', 'cash', 'GMOR-70366'),
(67, 2, '2018-03-16 12:35:56', 'cash', 'GMOR-70367'),
(68, 2, '2018-03-16 12:36:19', 'cash', 'GMOR-70368'),
(69, 2, '2018-03-16 12:37:47', 'cash', 'GMOR-70369'),
(70, 2, '2018-03-16 12:38:04', 'cash', 'GMOR-70370'),
(71, 2, '2018-03-16 12:38:38', 'cash', 'GMOR-70371'),
(72, 2, '2018-03-16 12:39:20', 'cash', 'GMOR-70372'),
(73, 2, '2018-03-16 12:41:20', 'cash', 'GMOR-70373'),
(74, 2, '2018-03-16 12:42:03', 'cash', 'GMOR-70374'),
(75, 2, '2018-03-16 12:42:12', 'cash', 'GMOR-70375'),
(76, 2, '2018-03-16 12:43:13', 'cash', 'GMOR-70376'),
(77, 2, '2018-03-16 12:43:54', 'cash', 'GMOR-70377'),
(78, 2, '2018-03-16 12:44:19', 'cash', 'GMOR-70378'),
(79, 2, '2018-03-16 12:44:41', 'cash', 'GMOR-70379'),
(80, 2, '2018-03-16 12:45:52', 'cash', 'GMOR-70380'),
(81, 2, '2018-03-16 12:46:05', 'cash', 'GMOR-70381'),
(82, 2, '2018-03-16 12:47:24', 'cash', 'GMOR-70382'),
(83, 2, '2018-03-16 12:48:34', 'cash', 'GMOR-70383'),
(84, 2, '2018-03-16 13:01:54', 'cash', 'GMOR-70384'),
(85, 2, '2018-03-16 13:02:25', 'cash', 'GMOR-70385'),
(86, 2, '2018-03-16 13:07:06', 'cash', 'GMOR-70386'),
(87, 2, '2018-03-16 13:07:41', 'cash', 'GMOR-70387'),
(88, 2, '2018-03-16 13:08:58', 'cash', 'GMOR-70388'),
(89, 2, '2018-03-16 13:09:15', 'cash', 'GMOR-70389'),
(90, 2, '2018-03-16 13:09:30', 'cash', 'GMOR-70390'),
(91, 2, '2018-03-16 13:10:17', 'cash', 'GMOR-70391'),
(92, 2, '2018-03-16 13:11:51', 'cash', 'GMOR-70392'),
(93, 2, '2018-03-16 13:12:33', 'cash', 'GMOR-70393');

-- --------------------------------------------------------

--
-- Table structure for table `os_features`
--

CREATE TABLE `os_features` (
  `id` int(11) NOT NULL,
  `os` varchar(30) DEFAULT NULL,
  `processor_type` varchar(30) DEFAULT NULL,
  `processor_core` varchar(30) DEFAULT NULL,
  `processor_clock_speed` varchar(30) DEFAULT NULL,
  `operating_frequency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os_features`
--

INSERT INTO `os_features` (`id`, `os`, `processor_type`, `processor_core`, `processor_clock_speed`, `operating_frequency`) VALUES
(1, '123', '                 ncsnslclc   ', '1', NULL, NULL),
(2, '124', 'nscnl', 'cdnkc', NULL, NULL),
(3, '', '', '', NULL, NULL),
(4, '', '', '', NULL, NULL),
(5, '', '', '', NULL, NULL),
(6, '', '', '', NULL, NULL),
(7, '', '', '', NULL, NULL),
(8, '', '', '', NULL, NULL),
(9, '', '', '', NULL, NULL),
(10, '', '', '', NULL, NULL),
(11, '', '', '', NULL, NULL),
(12, '', '', '', NULL, NULL),
(13, '', '', '', NULL, NULL),
(14, 'Marshmallow', 'Typicla', 'Simple', NULL, NULL),
(15, 'Marshmallow', 'Typicla', 'Simple', NULL, NULL),
(16, 'marshmallow', 'Godod', 'sdadbj', NULL, NULL),
(17, 'marshmallow', 'Godod', 'sdadbj', NULL, NULL),
(18, '', '', '', NULL, NULL),
(19, '', '', '', NULL, NULL),
(20, '', '', '', NULL, NULL),
(21, '', '', '', NULL, NULL),
(22, '', '', '', NULL, NULL),
(23, '', '', '', NULL, NULL),
(24, '', '', '', NULL, NULL),
(25, '', '', '', NULL, NULL),
(26, '', '', '', NULL, NULL),
(27, '', '', '', NULL, NULL),
(28, '', '', '', NULL, NULL),
(29, '', '', '', NULL, NULL),
(30, '', '', '', NULL, NULL),
(31, '', '', '', NULL, NULL),
(32, '', '', '', NULL, NULL),
(33, '', '', '', NULL, NULL),
(34, '', '', '', NULL, NULL),
(35, '', '', '', NULL, NULL),
(36, 'Android', 'werr', 'ewerr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `privilege_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `privilege_name`) VALUES
(1, 'create'),
(2, 'update'),
(3, 'view'),
(4, 'delete'),
(5, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_id` text,
  `product_description` text,
  `show_users` int(11) DEFAULT NULL,
  `show_backend` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `model_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_id`, `product_description`, `show_users`, `show_backend`, `created_date`, `updated_date`, `model_name`) VALUES
(1, 'Redmi note 5', NULL, NULL, 1, 1, '2018-03-03 18:30:00', NULL, NULL),
(2, 'Iphone X', NULL, NULL, 1, 1, '2018-02-28 18:30:00', NULL, NULL),
(3, 'Samsung s8', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Moto G5', NULL, NULL, NULL, NULL, '2018-03-01 18:30:00', NULL, NULL),
(5, 'HTC Desire 816', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'oppo F5', NULL, NULL, 1, 1, '2018-03-04 18:30:00', NULL, NULL),
(7, 'Iphone 7s', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '$product_name', NULL, '$product_description', NULL, NULL, NULL, NULL, NULL),
(9, 'Moto g3', NULL, 'cksd', NULL, NULL, NULL, NULL, NULL),
(10, 'cdnkl', NULL, '1241', NULL, NULL, '2018-03-08 13:37:53', '2018-03-08 13:38:22', NULL),
(11, 'Asus Zenfone 2', NULL, 'Bad Phone', 0, 1, '2018-03-08 14:29:51', '2018-03-08 14:29:51', NULL),
(12, 'Asus Zenfone 2', NULL, '1244', 0, 1, '2018-03-08 14:30:59', '2018-03-08 14:30:59', NULL),
(13, 'Vivo V5', NULL, 'Good Camera Phone', 1, 1, '2018-03-08 15:14:28', '2018-03-08 15:14:28', NULL),
(14, 'hs', NULL, 'cvc', 1, 1, '2018-03-08 15:22:33', '2018-03-08 15:22:33', NULL),
(15, 'dkhadf', NULL, ' .cdmds;vm', 1, 1, '2018-03-08 15:23:50', '2018-03-08 15:23:50', NULL),
(16, 'Vivo V7', NULL, 'very good camera phones', 1, 1, '2018-03-08 15:24:50', '2018-03-08 15:24:50', NULL),
(17, 'Nokia Lumia 520', NULL, 'slim phone', 1, 1, '2018-03-08 15:25:55', '2018-03-08 15:25:55', NULL),
(18, 'Nokia Lumia 720', NULL, 'Very Slim Phone', 1, 1, '2018-03-08 15:27:25', '2018-03-08 15:27:25', NULL),
(19, 'Samsung Galaxy Grand', NULL, 'Heating Problems', 1, 1, '2018-03-08 15:29:05', '2018-03-08 15:29:05', NULL),
(20, 'Sdhi', NULL, '                    ndndcv.mmml12134jjoedj', 1, 1, '2018-03-09 11:12:38', '2018-03-09 11:12:38', NULL),
(21, '', NULL, '                    ', 0, 0, '2018-03-09 11:17:54', '2018-03-09 11:17:54', NULL),
(22, '', NULL, '                    ', 0, 0, '2018-03-09 11:20:23', '2018-03-09 11:20:23', NULL),
(23, '', NULL, '                    ', 0, 0, '2018-03-09 11:21:06', '2018-03-09 11:21:06', NULL),
(24, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:01', '2018-03-09 11:23:01', NULL),
(25, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:31', '2018-03-09 11:23:31', NULL),
(26, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:53', '2018-03-09 11:23:53', NULL),
(27, '', NULL, '                    ', 0, 0, '2018-03-09 11:24:05', '2018-03-09 11:24:05', NULL),
(28, 'Ahha', NULL, '             cmmfcmfl       ', 1, 1, '2018-03-09 11:24:50', '2018-03-09 11:24:50', NULL),
(29, 'jkbjk', NULL, 'bkjb                    ', 1, 1, '2018-03-09 11:26:47', '2018-03-09 11:26:47', NULL),
(30, 'jkbjk', NULL, 'bkjb                    ', 1, 1, '2018-03-09 11:27:22', '2018-03-09 11:27:22', NULL),
(31, '123', NULL, '                 ncsnslclc   ', 1, 0, '2018-03-09 11:31:33', '2018-03-09 11:31:33', NULL),
(32, '', NULL, '                    ', 0, 0, '2018-03-09 11:32:45', '2018-03-09 11:32:45', NULL),
(33, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:33', '2018-03-09 11:38:33', NULL),
(34, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:34', '2018-03-09 11:38:34', NULL),
(35, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:35', '2018-03-09 11:38:35', NULL),
(36, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:36', '2018-03-09 11:38:36', NULL),
(37, '', NULL, '                    ', 0, 0, '2018-03-09 11:39:05', '2018-03-09 11:39:05', NULL),
(38, '', NULL, '                    ', 0, 0, '2018-03-09 11:39:06', '2018-03-09 11:39:06', NULL),
(39, '123233', NULL, '                    ddqwqwdw', 0, 0, '2018-03-09 12:46:35', '2018-03-09 12:46:35', NULL),
(40, 'sca;lcl;sc', NULL, '               sasc      ', 0, 0, '2018-03-09 12:47:20', '2018-03-09 12:47:20', NULL),
(41, 'asiadi', NULL, '                    ddlsdcn', 0, 0, '2018-03-09 12:48:42', '2018-03-09 12:48:42', NULL),
(42, 'asiadi', NULL, '                    ddlsdcn', 0, 0, '2018-03-09 12:48:49', '2018-03-09 12:48:49', NULL),
(43, '1234', NULL, '                    sccs', 0, 0, '2018-03-09 12:52:22', '2018-03-09 12:52:22', NULL),
(44, '1232e', NULL, '                    xdaax', 0, 0, '2018-03-09 13:06:17', '2018-03-09 13:06:17', NULL),
(45, '214', NULL, '                    ', 0, 0, '2018-03-09 13:07:15', '2018-03-09 13:07:15', NULL),
(46, 'xccas', NULL, '                    s s ', 0, 0, '2018-03-09 13:10:19', '2018-03-09 13:10:19', NULL),
(47, 'Huawei', NULL, '                    Very Nice and good phone', 1, 1, '2018-03-09 13:35:59', '2018-03-09 13:35:59', NULL),
(48, 'Huawei', NULL, '                    Very Nice and good phone', 1, 1, '2018-03-09 13:36:14', '2018-03-09 13:36:14', NULL),
(49, 'wefe', NULL, '                    scsalxmmaxmwer', 1, 1, '2018-03-09 13:42:06', '2018-03-09 13:42:06', NULL),
(50, 'wefe', NULL, '                    scsalxmmaxmwer', 1, 1, '2018-03-09 13:42:18', '2018-03-09 13:42:18', NULL),
(51, '', NULL, '                    ', 0, 0, '2018-03-09 13:43:24', '2018-03-09 13:43:24', NULL),
(52, '', NULL, '                    ', 0, 0, '2018-03-09 13:43:43', '2018-03-09 13:43:43', NULL),
(53, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:15', '2018-03-09 13:44:15', NULL),
(54, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:21', '2018-03-09 13:44:21', NULL),
(55, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:29', '2018-03-09 13:44:29', NULL),
(56, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:49', '2018-03-09 13:44:49', NULL),
(57, '', NULL, '                    ', 0, 0, '2018-03-09 13:45:45', '2018-03-09 13:45:45', NULL),
(58, '', NULL, '                    ', 0, 0, '2018-03-09 13:46:07', '2018-03-09 13:46:07', NULL),
(59, '', NULL, '                    ', 0, 0, '2018-03-09 13:46:33', '2018-03-09 13:46:33', NULL),
(60, 'gj', NULL, '                    ', 0, 0, '2018-03-09 13:47:38', '2018-03-09 13:47:38', NULL),
(61, '', NULL, '                    ', 0, 0, '2018-03-09 13:48:29', '2018-03-09 13:48:29', NULL),
(62, '', NULL, '                    ', 0, 0, '2018-03-09 13:49:04', '2018-03-09 13:49:04', NULL),
(63, '', NULL, '                    ', 0, 0, '2018-03-09 13:53:01', '2018-03-09 13:53:01', NULL),
(64, '', NULL, '                    ', 0, 0, '2018-03-09 13:53:08', '2018-03-09 13:53:08', NULL),
(65, '', NULL, '                    ', 0, 0, '2018-03-09 13:54:41', '2018-03-09 13:54:41', NULL),
(66, '', NULL, '                    ', 0, 0, '2018-03-09 13:55:09', '2018-03-09 13:55:09', NULL),
(67, '', NULL, '                    ', 0, 0, '2018-03-09 13:56:21', '2018-03-09 13:56:21', NULL),
(68, '', NULL, '                    ', 0, 0, '2018-03-09 13:57:23', '2018-03-09 13:57:23', NULL),
(69, 'Nokia Lumia 520', NULL, '  Slim Phone', 1, 1, '2018-03-12 07:04:35', '2018-03-12 07:04:35', NULL),
(70, 'Panasonic P11', '\r\nPA8C0019IN/PA8C0023IN', 'nice phone with great features                      ', 1, 1, '2018-03-12 11:17:10', '2018-03-13 08:45:05', 'P11');

-- --------------------------------------------------------

--
-- Table structure for table `products_inventory`
--

CREATE TABLE `products_inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `available_items` int(11) DEFAULT NULL,
  `items_in_stock` int(11) DEFAULT NULL,
  `max_limit` int(11) DEFAULT NULL,
  `min_limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE `product_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `actualprice` double DEFAULT NULL,
  `sellingprice` double DEFAULT NULL,
  `valid_from` timestamp NULL DEFAULT NULL,
  `valid_till` datetime DEFAULT NULL,
  `sold_quantity` int(11) DEFAULT NULL,
  `total_earnings` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_price`
--

INSERT INTO `product_price` (`id`, `product_id`, `actualprice`, `sellingprice`, `valid_from`, `valid_till`, `sold_quantity`, `total_earnings`) VALUES
(1, 70, 13000, 12340, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_weight`
--

CREATE TABLE `product_weight` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_weight`
--

INSERT INTO `product_weight` (`id`, `product_id`, `weight`) VALUES
(1, 70, '150g');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Root Admin'),
(2, 'Admin'),
(3, 'User'),
(4, 'Vendor'),
(5, 'Company Employee');

-- --------------------------------------------------------

--
-- Table structure for table `store_address`
--

CREATE TABLE `store_address` (
  `id` int(11) NOT NULL,
  `address` text,
  `address_type` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Pincode` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `show_backend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_address`
--

INSERT INTO `store_address` (`id`, `address`, `address_type`, `user_id`, `Pincode`, `city`, `state`, `mobile_number`, `name`, `show_backend`) VALUES
(1, 'dahhchkshcshk', 2, 2, 224001, 'ssggc', 'dffhsdh', '', '', 0),
(2, 'cclcsccskkk', 1, 3, 224001, 'Bhopal', 'Madhya Pradesh', '7073351942', 'Vipul Gupta', 0),
(3, 'abxbxbaxb', 2, 3, 302026, 'Jaipur', 'Rajasthan', '7073351942', 'Vipul Gupta', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_storage`
--

CREATE TABLE `temp_storage` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `items_left` int(11) DEFAULT NULL,
  `items_in_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_customer_review_map`
--

CREATE TABLE `user_customer_review_map` (
  `user_id` int(11) DEFAULT NULL,
  `customer_review_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `empid` int(11) NOT NULL,
  `empname` varchar(30) DEFAULT NULL,
  `emp_mobile` varchar(20) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_pass` text,
  `show_backend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`empid`, `empname`, `emp_mobile`, `emp_email`, `emp_pass`, `show_backend`) VALUES
(1, 'Harshit Singh', '9936480473', 'hsingh@pipingrock.com', '$2y$10$/5nOxrHHCqWyMZJfgyJy6eoK39vk6IRYwMWOI9XNgR6VSgevyt7Sy', 0),
(2, 'Manas Mahajan', '9813644838', 'mmahajan@pipingrock.com', '$2y$10$WgrwET52v9G4gH5yjl8Jsuw4NAV0qO0S2LH2HF243LO3OUhgezT56', 0),
(3, 'Vipul Gupta', '7073351942', 'vgupta@gmail.com', '$2y$10$Q4ltunmr33GOGzEJwDkzqOEaFqJn93CDLrstPouV17eKprtzuPBnK', 0),
(4, 'Ankit Singh', '9345645123', 'asingh@gmail.com', '$2y$10$996b/sKf0R2vP2kZYHqo3OYzroIBJkfeFZILVuFZY4N4Qr2Spr4ey', 0),
(5, 'Amit Sankhla', '9923423412', 'asankhla@gmail.com', '$2y$10$rsQUDVmJIOAXLkfSCtaQlOUzU/k8Ch/fy.lKYE7rA0D3MRmMhRLbK', 0),
(6, 'hahsa', NULL, NULL, NULL, 0),
(7, 'xxc', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_module_role`
--

CREATE TABLE `user_privilege_module_role` (
  `emp_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `privilege_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_privilege_module_role`
--

INSERT INTO `user_privilege_module_role` (`emp_id`, `module_id`, `privilege_id`, `role_id`) VALUES
(1, 8, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_create` varchar(30) DEFAULT NULL,
  `module_delete` varchar(30) DEFAULT NULL,
  `module_edit` varchar(30) DEFAULT NULL,
  `module_view` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warranty_features`
--

CREATE TABLE `warranty_features` (
  `id` int(11) NOT NULL,
  `warranty_summary` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warranty_features`
--

INSERT INTO `warranty_features` (`id`, `warranty_summary`) VALUES
(1, 'dvvndlnls'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, 'scbkbk'),
(10, 'kjbkjb'),
(11, 'kjbkjb'),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, '1 year'),
(26, '1 year'),
(27, '1 year warranty'),
(28, '1 year warranty'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, '1 year');

-- --------------------------------------------------------

--
-- Table structure for table `what_is_in_box`
--

CREATE TABLE `what_is_in_box` (
  `id` int(11) NOT NULL,
  `items_in_box` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `what_is_in_box`
--

INSERT INTO `what_is_in_box` (`id`, `items_in_box`) VALUES
(1, 'cncn'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, 'efjfjlf'),
(10, 'kjbjk'),
(11, 'kjbjk'),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, 'Battery'),
(26, 'Battery'),
(27, 'Battery'),
(28, 'Battery'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_features`
--
ALTER TABLE `additional_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address_type`
--
ALTER TABLE `address_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `battery_features`
--
ALTER TABLE `battery_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `camera_features`
--
ALTER TABLE `camera_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connectivity_features`
--
ALTER TABLE `connectivity_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display_features`
--
ALTER TABLE `display_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_product_order`
--
ALTER TABLE `map_product_order`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `map_product_whatisinbox`
--
ALTER TABLE `map_product_whatisinbox`
  ADD KEY `boxid` (`boxid`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `memory_features`
--
ALTER TABLE `memory_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_price`
--
ALTER TABLE `offer_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os_features`
--
ALTER TABLE `os_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_inventory`
--
ALTER TABLE `products_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_weight`
--
ALTER TABLE `product_weight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_address`
--
ALTER TABLE `store_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_type` (`address_type`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `temp_storage`
--
ALTER TABLE `temp_storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- Indexes for table `user_privilege_module_role`
--
ALTER TABLE `user_privilege_module_role`
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `privilege_id` (`privilege_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranty_features`
--
ALTER TABLE `warranty_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_is_in_box`
--
ALTER TABLE `what_is_in_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_features`
--
ALTER TABLE `additional_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `address_type`
--
ALTER TABLE `address_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `battery_features`
--
ALTER TABLE `battery_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `camera_features`
--
ALTER TABLE `camera_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `connectivity_features`
--
ALTER TABLE `connectivity_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `display_features`
--
ALTER TABLE `display_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `memory_features`
--
ALTER TABLE `memory_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer_price`
--
ALTER TABLE `offer_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `os_features`
--
ALTER TABLE `os_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products_inventory`
--
ALTER TABLE `products_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_weight`
--
ALTER TABLE `product_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store_address`
--
ALTER TABLE `store_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_storage`
--
ALTER TABLE `temp_storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warranty_features`
--
ALTER TABLE `warranty_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `what_is_in_box`
--
ALTER TABLE `what_is_in_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD CONSTRAINT `brand_product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `brand_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `map_product_order`
--
ALTER TABLE `map_product_order`
  ADD CONSTRAINT `map_product_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `map_product_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `map_product_whatisinbox`
--
ALTER TABLE `map_product_whatisinbox`
  ADD CONSTRAINT `map_product_whatisinbox_ibfk_1` FOREIGN KEY (`boxid`) REFERENCES `what_is_in_box` (`id`),
  ADD CONSTRAINT `map_product_whatisinbox_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `offer_price`
--
ALTER TABLE `offer_price`
  ADD CONSTRAINT `offer_price_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products_inventory`
--
ALTER TABLE `products_inventory`
  ADD CONSTRAINT `products_inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_price`
--
ALTER TABLE `product_price`
  ADD CONSTRAINT `product_price_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_weight`
--
ALTER TABLE `product_weight`
  ADD CONSTRAINT `product_weight_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `store_address`
--
ALTER TABLE `store_address`
  ADD CONSTRAINT `store_address_ibfk_1` FOREIGN KEY (`address_type`) REFERENCES `address_type` (`id`),
  ADD CONSTRAINT `store_address_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`empid`);

--
-- Constraints for table `user_privilege_module_role`
--
ALTER TABLE `user_privilege_module_role`
  ADD CONSTRAINT `user_privilege_module_role_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `user_details` (`empid`),
  ADD CONSTRAINT `user_privilege_module_role_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `user_privilege_module_role_ibfk_3` FOREIGN KEY (`privilege_id`) REFERENCES `privileges` (`id`),
  ADD CONSTRAINT `user_privilege_module_role_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
