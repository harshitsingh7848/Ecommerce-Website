-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 03:49 PM
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
  `brand_name` varchar(40) DEFAULT NULL,
  `brand_image_url` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_image_url`) VALUES
(1, 'Redmi', 'redmi.png'),
(2, 'Apple', 'apple.png'),
(3, 'Nokia', 'nokia.png'),
(4, 'Samsung', 'samsung.png'),
(5, 'Motorola', 'motorola.png'),
(6, 'HTC', 'htc.png'),
(7, 'Oppo', 'oppo.png'),
(8, 'Panasonic', 'panasonic.png');

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
(1, 'PanasonicP11download.jpg');

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
(10, 'GMox51dv9rgj703'),
(11, 'GMfxhqsw7jy7703'),
(12, 'GMm8ieyxecmb703'),
(13, 'GM9gfjfs5ush703'),
(14, 'GMmhwv876cez703'),
(15, 'GMoiutdqwyxg703'),
(16, 'GMfy0ytgsix4703'),
(17, 'GMyuf5yt0rbb703'),
(18, 'GMoxwuf5zue8703'),
(19, 'GMzomopf9bzc703'),
(20, 'GMcotbacx149703'),
(21, 'GMfi5whgjhq9703'),
(22, 'GMyvt8f7vptb703'),
(23, 'GMb06ob25nzl703'),
(24, 'GMlv1un26vqf703'),
(25, 'GM58z4yhd3i3703'),
(26, 'GMskkei6wij97014'),
(27, 'GM4egx3xx1bs7014'),
(28, 'GM2bpfx6ey2q7014'),
(29, 'GMh8hqincyi07014'),
(30, 'GMq7he601n3i7014'),
(31, 'GMr1l9tp6oay7015'),
(32, 'GMz5q5yfr9rn7015'),
(33, 'GM4fi9ecxm51703'),
(34, 'GM5fbls7358e703'),
(35, 'GM1qjlth51cc703'),
(36, 'GMv4xe5ra0n3703'),
(37, 'GM26p6imhlxb7015'),
(38, 'GMvk28phmcfk7015'),
(39, 'GMbi3lbux5av7015'),
(40, 'GMrgybydeo4u703'),
(41, 'GMwtpm9lu1fj703'),
(42, 'GMvogco4xcgq703'),
(43, 'GM3bxen2k0tq703'),
(44, 'GMvma6dj4dr6703'),
(45, 'GMxnt5hq9uc1703'),
(46, 'GMi4gmdp289u703'),
(47, 'GMtuvc10kd3l703'),
(48, 'GM41aubel3kc703'),
(49, 'GMaul0eoqf1t703'),
(50, 'GM2ou514gtwg703'),
(51, 'GMzxzd2quti5703'),
(52, 'GMkwmw4muijb703'),
(53, 'GMjyaowwjxuq703');

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

-- --------------------------------------------------------

--
-- Table structure for table `map_order_status`
--

CREATE TABLE `map_order_status` (
  `order_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_order_status`
--

INSERT INTO `map_order_status` (`order_id`, `status_id`) VALUES
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(107, 1),
(108, 1),
(109, 1);

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
(102, 70),
(103, 70),
(104, 70),
(105, 70),
(106, 1),
(107, 70),
(108, 6),
(109, 6);

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
-- Table structure for table `map_quantity_product`
--

CREATE TABLE `map_quantity_product` (
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_quantity_product`
--

INSERT INTO `map_quantity_product` (`product_id`, `quantity`) VALUES
(6, 2),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `map_user_order`
--

CREATE TABLE `map_user_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_user_order`
--

INSERT INTO `map_user_order` (`order_id`, `user_id`) VALUES
(102, 3),
(103, 3),
(104, 14),
(105, 15),
(106, 3),
(107, 3),
(108, 3),
(109, 3);

-- --------------------------------------------------------

--
-- Table structure for table `map_user_product_inventory`
--

CREATE TABLE `map_user_product_inventory` (
  `emp_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `available_products` int(11) DEFAULT NULL,
  `products_in_stock` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_vendor_user`
--

CREATE TABLE `map_vendor_user` (
  `vendor_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_vendor_user`
--

INSERT INTO `map_vendor_user` (`vendor_id`, `user_id`) VALUES
(2, 8),
(3, 9),
(3, 11),
(2, 16),
(5, 22);

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
(102, 2, '2018-03-20 09:11:53', 'cash', 'GMOR-703102'),
(103, 3, '2018-03-20 09:44:53', 'cash', 'GMOR-703103'),
(104, 1, '2018-03-20 12:29:15', 'cash', 'GMOR-7014104'),
(105, 1, '2018-03-21 11:38:18', 'cash', 'GMOR-7015105'),
(106, 1, '2018-01-02 18:30:00', 'cash', 'AII-1232'),
(107, 2, '2018-04-03 08:31:11', 'cash', 'GMOR-703107'),
(108, 5, '2018-04-03 08:33:03', 'cash', 'GMOR-63108'),
(109, 5, '2018-04-03 08:48:37', 'cash', 'GMOR-63109');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `order_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `order_status`) VALUES
(1, 'Recieved'),
(2, 'Shipped'),
(3, 'Delivered');

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
  `model_name` text,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_id`, `product_description`, `show_users`, `show_backend`, `created_date`, `updated_date`, `model_name`, `added_by`) VALUES
(1, 'Redmi note 5', NULL, NULL, 1, 1, '2018-03-03 18:30:00', NULL, NULL, 0),
(2, 'Iphone X', NULL, NULL, 1, 1, '2018-02-28 18:30:00', NULL, NULL, 0),
(3, 'Samsung s8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Moto G5', NULL, NULL, NULL, NULL, '2018-03-01 18:30:00', NULL, NULL, 0),
(5, 'HTC Desire 816', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'oppo F5', NULL, NULL, 1, 1, '2018-03-04 18:30:00', NULL, NULL, 0),
(7, 'Iphone 7s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, '$product_name', NULL, '$product_description', NULL, NULL, NULL, NULL, NULL, 0),
(9, 'Moto g3', NULL, 'cksd', NULL, NULL, NULL, NULL, NULL, 0),
(10, 'cdnkl', NULL, '1241', NULL, NULL, '2018-03-08 13:37:53', '2018-03-08 13:38:22', NULL, 0),
(11, 'Asus Zenfone 2', NULL, 'Bad Phone', 0, 1, '2018-03-08 14:29:51', '2018-03-08 14:29:51', NULL, 0),
(12, 'Asus Zenfone 2', NULL, '1244', 0, 1, '2018-03-08 14:30:59', '2018-03-08 14:30:59', NULL, 0),
(13, 'Vivo V5', NULL, 'Good Camera Phone', 1, 1, '2018-03-08 15:14:28', '2018-03-08 15:14:28', NULL, 0),
(14, 'hs', NULL, 'cvc', 1, 0, '2018-03-08 15:22:33', '2018-04-04 08:38:45', NULL, 0),
(15, 'dkhadf', NULL, ' .cdmds;vm', 1, 0, '2018-03-08 15:23:50', '2018-04-04 08:39:00', NULL, 0),
(16, 'Vivo V7', NULL, 'very good camera phones', 1, 1, '2018-03-08 15:24:50', '2018-03-08 15:24:50', NULL, 0),
(17, 'Nokia Lumia 520', NULL, 'slim phone', 1, 1, '2018-03-08 15:25:55', '2018-03-08 15:25:55', NULL, 0),
(18, 'Nokia Lumia 720', NULL, 'Very Slim Phone', 1, 1, '2018-03-08 15:27:25', '2018-03-08 15:27:25', NULL, 0),
(19, 'Samsung Galaxy Grand', NULL, 'Heating Problems', 1, 1, '2018-03-08 15:29:05', '2018-03-08 15:29:05', NULL, 0),
(20, 'Sdhi', NULL, '                    ndndcv.mmml12134jjoedj', 1, 1, '2018-03-09 11:12:38', '2018-03-09 11:12:38', NULL, 0),
(21, '', NULL, '                    ', 0, 0, '2018-03-09 11:17:54', '2018-03-09 11:17:54', NULL, 0),
(22, '', NULL, '                    ', 0, 0, '2018-03-09 11:20:23', '2018-03-09 11:20:23', NULL, 0),
(23, '', NULL, '                    ', 0, 0, '2018-03-09 11:21:06', '2018-03-09 11:21:06', NULL, 0),
(24, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:01', '2018-03-09 11:23:01', NULL, 0),
(25, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:31', '2018-03-09 11:23:31', NULL, 0),
(26, '', NULL, '                    ', 0, 0, '2018-03-09 11:23:53', '2018-03-09 11:23:53', NULL, 0),
(27, '', NULL, '                    ', 0, 0, '2018-03-09 11:24:05', '2018-03-09 11:24:05', NULL, 0),
(28, 'Ahha', NULL, '             cmmfcmfl       ', 1, 1, '2018-03-09 11:24:50', '2018-03-09 11:24:50', NULL, 0),
(29, 'jkbjk', NULL, 'bkjb                    ', 1, 1, '2018-03-09 11:26:47', '2018-03-09 11:26:47', NULL, 0),
(30, 'jkbjk', NULL, 'bkjb                    ', 1, 1, '2018-03-09 11:27:22', '2018-03-09 11:27:22', NULL, 0),
(31, '123', NULL, '                 ncsnslclc   ', 1, 0, '2018-03-09 11:31:33', '2018-03-09 11:31:33', NULL, 0),
(32, '', NULL, '                    ', 0, 0, '2018-03-09 11:32:45', '2018-03-09 11:32:45', NULL, 0),
(33, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:33', '2018-03-09 11:38:33', NULL, 0),
(34, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:34', '2018-03-09 11:38:34', NULL, 0),
(35, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:35', '2018-03-09 11:38:35', NULL, 0),
(36, '', NULL, '                    ', 0, 0, '2018-03-09 11:38:36', '2018-03-09 11:38:36', NULL, 0),
(37, '', NULL, '                    ', 0, 0, '2018-03-09 11:39:05', '2018-03-09 11:39:05', NULL, 0),
(38, '', NULL, '                    ', 0, 0, '2018-03-09 11:39:06', '2018-03-09 11:39:06', NULL, 0),
(39, '123233', NULL, '                    ddqwqwdw', 0, 0, '2018-03-09 12:46:35', '2018-03-09 12:46:35', NULL, 0),
(40, 'sca;lcl;sc', NULL, '               sasc      ', 0, 0, '2018-03-09 12:47:20', '2018-03-09 12:47:20', NULL, 0),
(41, 'asiadi', NULL, '                    ddlsdcn', 0, 0, '2018-03-09 12:48:42', '2018-03-09 12:48:42', NULL, 0),
(42, 'asiadi', NULL, '                    ddlsdcn', 0, 0, '2018-03-09 12:48:49', '2018-03-09 12:48:49', NULL, 0),
(43, '1234', NULL, '                    sccs', 0, 0, '2018-03-09 12:52:22', '2018-03-09 12:52:22', NULL, 0),
(44, '1232e', NULL, '                    xdaax', 0, 0, '2018-03-09 13:06:17', '2018-03-09 13:06:17', NULL, 0),
(45, '214', NULL, '                    ', 0, 0, '2018-03-09 13:07:15', '2018-03-09 13:07:15', NULL, 0),
(46, 'xccas', NULL, '                    s s ', 0, 0, '2018-03-09 13:10:19', '2018-03-09 13:10:19', NULL, 0),
(47, 'Huawei', NULL, '                    Very Nice and good phone', 1, 1, '2018-03-09 13:35:59', '2018-03-09 13:35:59', NULL, 0),
(48, 'Huawei', NULL, '                    Very Nice and good phone', 1, 1, '2018-03-09 13:36:14', '2018-03-09 13:36:14', NULL, 0),
(49, 'wefe', NULL, '                    scsalxmmaxmwer', 1, 1, '2018-03-09 13:42:06', '2018-03-09 13:42:06', NULL, 0),
(50, 'wefe', NULL, '                    scsalxmmaxmwer', 1, 1, '2018-03-09 13:42:18', '2018-03-09 13:42:18', NULL, 0),
(51, '', NULL, '                    ', 0, 0, '2018-03-09 13:43:24', '2018-03-09 13:43:24', NULL, 0),
(52, '', NULL, '                    ', 0, 0, '2018-03-09 13:43:43', '2018-03-09 13:43:43', NULL, 0),
(53, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:15', '2018-03-09 13:44:15', NULL, 0),
(54, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:21', '2018-03-09 13:44:21', NULL, 0),
(55, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:29', '2018-03-09 13:44:29', NULL, 0),
(56, '', NULL, '                    ', 0, 0, '2018-03-09 13:44:49', '2018-03-09 13:44:49', NULL, 0),
(57, '', NULL, '                    ', 0, 0, '2018-03-09 13:45:45', '2018-03-09 13:45:45', NULL, 0),
(58, '', NULL, '                    ', 0, 0, '2018-03-09 13:46:07', '2018-03-09 13:46:07', NULL, 0),
(59, '', NULL, '                    ', 0, 0, '2018-03-09 13:46:33', '2018-03-09 13:46:33', NULL, 0),
(60, 'gj', NULL, '                    ', 0, 0, '2018-03-09 13:47:38', '2018-03-09 13:47:38', NULL, 0),
(61, '', NULL, '                    ', 0, 0, '2018-03-09 13:48:29', '2018-03-09 13:48:29', NULL, 0),
(62, '', NULL, '                    ', 0, 0, '2018-03-09 13:49:04', '2018-03-09 13:49:04', NULL, 0),
(63, '', NULL, '                    ', 0, 0, '2018-03-09 13:53:01', '2018-03-09 13:53:01', NULL, 0),
(64, '', NULL, '                    ', 0, 0, '2018-03-09 13:53:08', '2018-03-09 13:53:08', NULL, 0),
(65, '', NULL, '                    ', 0, 0, '2018-03-09 13:54:41', '2018-03-09 13:54:41', NULL, 0),
(66, '', NULL, '                    ', 0, 0, '2018-03-09 13:55:09', '2018-03-09 13:55:09', NULL, 0),
(67, '', NULL, '                    ', 0, 0, '2018-03-09 13:56:21', '2018-03-09 13:56:21', NULL, 0),
(68, '', NULL, '                    ', 0, 0, '2018-03-09 13:57:23', '2018-03-09 13:57:23', NULL, 0),
(69, 'Nokia Lumia 520', NULL, '  Slim Phone', 1, 1, '2018-03-12 07:04:35', '2018-03-12 07:04:35', NULL, 0),
(70, 'Panasonic P11', '\r\nPA8C0019IN/PA8C0023IN', 'nice phone with great features                      ', 1, 1, '2018-03-12 11:17:10', '2018-03-23 11:00:24', 'P11', 8);

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
(1, 70, 13000, 12340, NULL, NULL, NULL, NULL),
(2, 6, 19000, 17500, NULL, NULL, NULL, NULL);

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
  `show_backend` int(11) DEFAULT '1',
  `Country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_address`
--

INSERT INTO `store_address` (`id`, `address`, `address_type`, `user_id`, `Pincode`, `city`, `state`, `mobile_number`, `name`, `show_backend`, `Country`) VALUES
(2, 'huda8712', 1, 3, 193895, 'jalandhar', 'punjab', '9998888772', 'vipul', 1, 'ind'),
(3, 'huda87123', 2, 3, 193895, 'jalandhar', 'punjab', '9998888772', 'vipul', 0, 'ind'),
(7, 'huda87123', 2, 3, 193895, 'jalandhar', 'punjab', '9998888772', 'vipul', 1, 'ind'),
(37, 'huda87123', 2, 3, 193895, 'jalandhar', 'punjab', '9998888772', 'vipul', 1, 'ind'),
(38, 'huda87123', 2, 3, 193895, 'jalandhar', 'punjab', '9998888771', 'Vipul Gupta', 1, 'ind'),
(39, '90 main road', 1, 1, 123456, 'rajkot', 'gujrat', '9936480473', 'Harshit Singh', 1, 'India'),
(40, '45 street', 1, 8, 123456, 'modinagar', 'Uttar Pradesh', '9415515409', 'Manan Sharma', 1, 'India');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`empid`, `empname`, `emp_mobile`, `emp_email`, `emp_pass`, `created_at`) VALUES
(1, 'Harshit Singh', '9936480473', 'hsingh@pipingrock.com', '$2y$10$/5nOxrHHCqWyMZJfgyJy6eoK39vk6IRYwMWOI9XNgR6VSgevyt7Sy', '2018-03-28 08:14:08'),
(2, 'Manas Mahajan', '9813644838', 'mmahajan@pipingrock.com', '$2y$10$WgrwET52v9G4gH5yjl8Jsuw4NAV0qO0S2LH2HF243LO3OUhgezT56', '2018-03-28 08:14:08'),
(3, 'Vipul Gupta', '7073351942', 'vgupta@gmail.com', '$2y$10$Q4ltunmr33GOGzEJwDkzqOEaFqJn93CDLrstPouV17eKprtzuPBnK', '2018-03-28 08:14:08'),
(4, 'Ankit Singh', '9345645123', 'asingh@gmail.com', '$2y$10$996b/sKf0R2vP2kZYHqo3OYzroIBJkfeFZILVuFZY4N4Qr2Spr4ey', '2018-03-28 08:14:08'),
(5, 'Amit Sankhla', '9923423412', 'asankhla@gmail.com', '$2y$10$rsQUDVmJIOAXLkfSCtaQlOUzU/k8Ch/fy.lKYE7rA0D3MRmMhRLbK', '2018-03-28 08:14:08'),
(8, 'Manan Sharma', '9415515409', 'msharma@gmail.com', '$2y$10$NhEFUVXc8b/.Jc4zM3OxF.Q7cVAVOKPb3.FP7/BEsCvc1NCe4PwB6', '2018-03-28 08:14:08'),
(9, 'Mandeep Saini', '9455112345', 'msaini@gmail.com', '$2y$10$b2iol2TW9Ti8fxyqJq.KGegB5JcovqLeeZx.mAD4AzIr3WXQdPVCO', '2018-03-28 08:14:08'),
(11, 'Mohit sharma', '9415047987', 'mohitsharma@gmail.com', '$2y$10$diBHDfM1vACWksL2qdZczOv/amoFBC2j3NeZnfSj8bFRrgHLbmj1G', '2018-03-28 08:14:08'),
(14, 'Rahul Singh', '9994541231', 'rsingh@gmail.com', '$2y$10$6hgbI.E8gNP.93wZtb2fLuqW8MjQu.cT8e942zPujWJKZsnN.0Sr.', '2018-03-28 08:14:08'),
(15, 'Ashish Singh', '9898121234', 'ashish@gmail.com', '$2y$10$XwAmQ.rseLJeGpAKNS00qeDM.a/a9bTdBwZKa8VlfrtUCAsvTzTei', '2018-03-28 08:14:08'),
(16, 'Sumit Tiwari', '9912123412', 'stiwari@gmail.com', '$2y$10$ObTCG4NIlqTWKKAkreEN/OuFAyqmyD2eCnB7boOWq.A90VJ1Suzq6', '2018-03-28 08:14:08'),
(17, 'shlok', '9998888777', 'sh@gmail.com', '$2y$10$dLjnUcP/m.NtmG/JHkoWPOoTn/oNDyY99DIaVI7vnW.Lg9d9I413u', '2018-04-03 11:47:06'),
(18, 'manas', '9087654321', 'manas.mahajan1@gmail.com', '$2y$10$DxrhdFTQ6kUYZqpCpKc7Burdr0pbx1r67JoYZrI..HUkWK4QZMV3G', '2018-04-03 12:50:01'),
(19, 'kumar', '6789054321', 'sant@pp.com', '$2y$10$Bp4kNm93V5hqrG5RmDVS0.EAF9qrG0XaJagOyl/HSA8rIUtt/J9vC', '2018-04-03 12:53:57'),
(20, 'kumar gaurav', '9076543218', 'k@g.com', '$2y$10$D5MrV8sc7HAFBd73cRDhe.o5ZTQrdIIXIpNMBggZMoKaziMBeuFTO', '2018-04-03 12:56:31'),
(21, 'rajat', '7778888999', 'rajat@gmail.com', '$2y$10$kOrkMAObvKIwI7ZKhA/o.e7F7.nAazKRi/Wpjk56P/O.XlWFx91cS', '2018-04-04 08:57:54'),
(22, 'hardik', '6666777777', 'hardik@g.com', '$2y$10$xknQWzl.yWvNnvPLIMElG./Fdpil9awz2VqwhleHUKaY./39XmTW2', '2018-04-04 09:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_module_role`
--

CREATE TABLE `user_privilege_module_role` (
  `emp_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `privilege_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `vendor_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_privilege_module_role`
--

INSERT INTO `user_privilege_module_role` (`emp_id`, `module_id`, `privilege_id`, `role_id`, `vendor_role_id`) VALUES
(1, 8, 5, 1, NULL),
(2, 1, 1, 3, NULL),
(2, 1, 2, 3, NULL),
(2, 1, 3, 3, NULL),
(2, 2, 1, 3, NULL),
(2, 2, 2, 3, NULL),
(2, 2, 3, 3, NULL),
(2, 4, 1, 3, NULL),
(2, 4, 2, 3, NULL),
(3, 1, 1, 3, NULL),
(3, 1, 2, 3, NULL),
(3, 1, 3, 3, NULL),
(3, 2, 1, 3, NULL),
(3, 2, 3, 3, NULL),
(3, 7, 1, 3, NULL),
(3, 7, 3, 3, NULL),
(14, 1, 3, 3, NULL),
(14, 2, 5, 3, NULL),
(14, 5, 5, 3, NULL),
(15, 1, 3, 3, NULL),
(15, 2, 5, 3, NULL),
(15, 5, 5, 3, NULL),
(8, 1, 5, 4, 2),
(9, 1, 5, 4, 1),
(9, 2, 1, 4, 1),
(9, 2, 3, 4, 1),
(11, 1, 5, 4, 2),
(11, 2, 1, 4, 2),
(11, 2, 3, 4, 2),
(16, 1, 5, 4, 1),
(16, 2, 1, 4, 1),
(16, 2, 3, 4, 1),
(16, 4, 5, 4, 1),
(20, 1, 3, 3, NULL),
(20, 2, 5, 3, NULL),
(20, 5, 5, 3, NULL),
(22, 8, 5, 4, 1);

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
-- Table structure for table `vendor_names`
--

CREATE TABLE `vendor_names` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_names`
--

INSERT INTO `vendor_names` (`id`, `vendor_name`) VALUES
(1, 'Gadget Maniac'),
(2, 'Nokia'),
(3, 'Apple'),
(4, 'Samsung'),
(5, 'zen');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_roles`
--

CREATE TABLE `vendor_roles` (
  `id` int(11) NOT NULL,
  `vendor_role_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_roles`
--

INSERT INTO `vendor_roles` (`id`, `vendor_role_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

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
-- Indexes for table `map_order_address`
--
ALTER TABLE `map_order_address`
  ADD KEY `address_id` (`address_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `map_order_status`
--
ALTER TABLE `map_order_status`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status_id` (`status_id`);

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
-- Indexes for table `map_user_product_inventory`
--
ALTER TABLE `map_user_product_inventory`
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `map_vendor_user`
--
ALTER TABLE `map_vendor_user`
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
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
  ADD KEY `role_id` (`role_id`),
  ADD KEY `vendor_role_id` (`vendor_role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_names`
--
ALTER TABLE `vendor_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_roles`
--
ALTER TABLE `vendor_roles`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `temp_storage`
--
ALTER TABLE `temp_storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_names`
--
ALTER TABLE `vendor_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_roles`
--
ALTER TABLE `vendor_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `map_order_address`
--
ALTER TABLE `map_order_address`
  ADD CONSTRAINT `map_order_address_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `store_address` (`id`),
  ADD CONSTRAINT `map_order_address_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `map_order_status`
--
ALTER TABLE `map_order_status`
  ADD CONSTRAINT `map_order_status_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `map_order_status_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`id`);

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
-- Constraints for table `map_user_product_inventory`
--
ALTER TABLE `map_user_product_inventory`
  ADD CONSTRAINT `map_user_product_inventory_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `user_details` (`empid`),
  ADD CONSTRAINT `map_user_product_inventory_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `map_vendor_user`
--
ALTER TABLE `map_vendor_user`
  ADD CONSTRAINT `map_vendor_user_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_names` (`id`),
  ADD CONSTRAINT `map_vendor_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`empid`);

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
  ADD CONSTRAINT `user_privilege_module_role_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_privilege_module_role_ibfk_5` FOREIGN KEY (`vendor_role_id`) REFERENCES `vendor_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
