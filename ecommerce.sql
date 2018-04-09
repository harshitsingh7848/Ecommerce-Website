-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 02:31 PM
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
(26, '12 cm', NULL, NULL),
(27, '10cm', NULL, NULL),
(28, '10cm', NULL, NULL),
(29, '10cm', NULL, NULL),
(30, '10cm', NULL, NULL),
(31, '10cm', NULL, NULL),
(32, '10cm', NULL, NULL),
(33, '10cm', NULL, NULL),
(34, '10cm', NULL, NULL),
(35, '10cm', NULL, NULL),
(36, '2 cm', NULL, NULL),
(37, '2 cm', NULL, NULL),
(38, '2 cm', NULL, NULL),
(39, '2 cm', NULL, NULL),
(40, '2 cm', NULL, NULL),
(41, '2 cm', NULL, NULL);

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
(1, '4000 Mh'),
(25, '4000 Mh'),
(26, '4000 Mh'),
(27, '4000 Mh'),
(28, '4000 Mh'),
(29, '4000 Mh'),
(30, '4000 Mh'),
(31, '4000 Mh'),
(32, '4000 Mh'),
(47, '4000 MH'),
(48, '4000 MH'),
(49, '4000 MH'),
(50, '4000 MH'),
(51, '4000 MH'),
(52, '4000 MH'),
(53, '4000 MH');

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
(8, 'Panasonic', 'panasonic.png'),
(9, 'Asus', 'asus.png');

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
(8, 70),
(4, 19),
(9, 11),
(3, 71),
(3, 72),
(3, 75),
(1, 76);

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
(6, '21 MP', NULL, '13 MP', NULL, NULL),
(7, '21 MP', NULL, '13 MP', NULL, NULL),
(8, '21 MP', NULL, '8 MP', NULL, NULL),
(9, '12MP', NULL, '16MP', NULL, NULL),
(10, '15 MP', '', '8 MP', NULL, NULL),
(14, '16 MP', NULL, '13 MP', NULL, NULL),
(15, '16 MP', NULL, '8 MP', NULL, NULL),
(16, '21 MP', NULL, '13 MP', NULL, NULL),
(17, '12MP', NULL, '8 MP', NULL, NULL),
(28, '8 MP', NULL, '8 MP', NULL, NULL),
(29, '8 MP', NULL, '16 MP', NULL, NULL),
(30, '8 MP', NULL, '16 MP', NULL, NULL),
(31, '8 MP', NULL, '16 MP', NULL, NULL),
(32, '8 MP', NULL, '16 MP', NULL, NULL),
(33, '8 MP', NULL, '16 MP', NULL, NULL),
(34, '8 MP', NULL, '16 MP', NULL, NULL);

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
(25, 'Blue'),
(26, 'Blue'),
(27, 'Blue'),
(28, 'Blue'),
(43, 'Red'),
(44, 'Grey'),
(45, 'Black'),
(46, 'Black'),
(47, 'Blue'),
(48, 'Green'),
(49, 'Black'),
(50, 'Black'),
(51, 'Black'),
(52, 'Black'),
(53, 'Black'),
(54, 'Black');

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
(6, 'LTE', '4G/3G', NULL, NULL, 'available'),
(7, 'LTE', '4G/3G', NULL, NULL, 'available'),
(8, 'LTE', '4G/3G', NULL, NULL, 'available'),
(9, 'LTE', '4G/3G', NULL, NULL, 'available'),
(10, 'LTE', '4G/3G', NULL, NULL, 'available'),
(11, 'LTE', '4G/3G', NULL, NULL, 'available'),
(12, 'LTE', '4G/3G', NULL, NULL, 'available'),
(13, 'LTE', '4G/3G', NULL, NULL, 'available'),
(14, 'LTE', '4G/3G', NULL, NULL, 'available'),
(28, 'LTE', '4G/3G', NULL, NULL, 'available'),
(29, 'LTE', '3G', NULL, NULL, '12'),
(30, 'LTE', '3G', NULL, NULL, 'available'),
(31, 'LTE', '3G', NULL, NULL, 'available'),
(32, 'LTE', '3G', NULL, NULL, 'available'),
(33, 'LTE', '3G', NULL, NULL, 'available'),
(34, 'LTE', '3G', NULL, NULL, 'available');

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
(25, '12X13'),
(26, '12X13'),
(27, '12x14'),
(28, '12x14'),
(29, '12X12'),
(30, '12X12'),
(31, '12X12'),
(32, '12X12'),
(33, '12X12'),
(47, '12x13'),
(48, '12x13'),
(49, '12x13'),
(50, '12x13'),
(51, '12x13'),
(52, '12x13'),
(53, '12x13');

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
(6, '10', '1080', NULL, NULL, 'Green'),
(7, '10', '1080', NULL, NULL, 'Green'),
(8, '20 cm', '1080', NULL, NULL, 'Green'),
(9, '20 cm', '1080', NULL, NULL, 'Green'),
(10, '10 cm', '1080', NULL, NULL, 'Green'),
(11, '20 cm', '1080', NULL, NULL, 'Green'),
(12, '10', '1080', NULL, NULL, 'Green'),
(13, '10 cm', '1080', NULL, NULL, 'Green'),
(14, '20 cm', '1080', NULL, NULL, 'Green'),
(28, '10 cm', '1080', NULL, NULL, 'Green'),
(29, '10 cm', '1080', NULL, NULL, 'green'),
(30, '10 cm', '1080', NULL, NULL, 'green'),
(31, '10 cm', '1080', NULL, NULL, 'green'),
(32, '10 cm', '1080', NULL, NULL, 'green'),
(33, '10 cm', '1080', NULL, NULL, 'green'),
(34, '10 cm', '1080', NULL, NULL, 'green');

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
(1, 'PanasonicP11download.jpg'),
(2, 'moto-g5.jpeg'),
(3, 'oppo-f5.jpg'),
(4, 'redmi-note-5.jpg'),
(5, 'samsung-s8.jpg'),
(6, 'samsung-galaxy-grand.jpg'),
(7, 'iphone-x.jpg'),
(8, 'iphone7s.png'),
(9, 'htc-desire816.jpg'),
(10, 'asus-zenfone-2.jpeg'),
(11, 'Nokia Lumia 520download (1).jpeg'),
(12, 'Nokia Lumia 720download (1).jpeg'),
(13, 'Nokia Lumia 720download (1).jpeg'),
(14, 'Nokia Lumia 720download (1).jpeg'),
(15, 'Nokia Lumia 720download (1).jpeg'),
(16, 'Redmi 3download (1).jpeg');

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
(3, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 125),
(2, 127),
(2, 128),
(38, 129),
(38, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 139),
(2, 140),
(38, 142),
(2, 143);

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
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(125, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(139, 1),
(140, 1),
(142, 1),
(143, 1);

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
(70, 26),
(1, 27),
(2, 28),
(3, 29),
(4, 30),
(5, 31),
(6, 32),
(7, 33),
(11, 34),
(19, 35),
(71, 36),
(72, 37),
(75, 40),
(76, 41);

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
(70, 47),
(1, 1),
(2, 25),
(3, 26),
(4, 27),
(5, 28),
(6, 29),
(7, 30),
(11, 31),
(19, 32),
(71, 48),
(72, 49),
(75, 52),
(76, 53);

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
(70, 28),
(1, 6),
(2, 7),
(3, 8),
(4, 9),
(5, 10),
(6, 14),
(7, 15),
(11, 16),
(19, 17),
(71, 29),
(72, 30),
(75, 33),
(76, 34);

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
(70, 48),
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 43),
(6, 44),
(7, 45),
(11, 46),
(19, 47),
(71, 49),
(72, 50),
(75, 53),
(76, 54);

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
(70, 28),
(1, 6),
(2, 7),
(3, 8),
(4, 9),
(5, 10),
(6, 11),
(7, 12),
(11, 13),
(19, 14),
(71, 29),
(72, 30),
(75, 33),
(76, 34);

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
(70, 47),
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(11, 32),
(19, 33),
(71, 48),
(72, 49),
(75, 52),
(76, 53);

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
(70, 28),
(1, 6),
(2, 7),
(3, 8),
(4, 9),
(5, 10),
(6, 11),
(7, 12),
(11, 13),
(19, 14),
(71, 29),
(72, 30),
(75, 33),
(76, 34);

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
(70, 1),
(1, 4),
(2, 7),
(3, 5),
(4, 2),
(5, 9),
(6, 3),
(7, 8),
(11, 10),
(19, 6),
(71, 11),
(72, 12),
(75, 15),
(76, 16);

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
(70, 28),
(1, 6),
(2, 7),
(3, 8),
(4, 9),
(5, 10),
(6, 11),
(7, 12),
(11, 13),
(19, 14),
(71, 29),
(72, 30),
(75, 33),
(76, 34);

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
(70, 36),
(1, 14),
(2, 15),
(3, 16),
(4, 17),
(5, 18),
(6, 19),
(7, 20),
(11, 21),
(19, 22),
(71, 37),
(72, 38),
(75, 41),
(76, 42);

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
(70, 47),
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(11, 32),
(19, 33),
(71, 48),
(72, 49),
(75, 52),
(76, 53);

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
(109, 3),
(110, 3),
(111, 3),
(112, 3),
(113, 3),
(114, 3),
(115, 3),
(116, 3),
(117, 3),
(118, 3),
(119, 3),
(120, 3),
(121, 3),
(122, 3),
(123, 3),
(125, 3),
(127, 3),
(128, 3),
(129, 3),
(130, 3),
(131, 3),
(132, 3),
(133, 3),
(134, 3),
(135, 3),
(139, 3),
(140, 3),
(142, 3),
(143, 3);

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
(5, 22),
(2, 18),
(3, 19),
(3, 17);

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
(6, '128GB', '4GB', '256GB', NULL, NULL),
(7, '128GB', '4GB', '256GB', NULL, NULL),
(8, '64GB', '4GB', '128GB', NULL, NULL),
(9, '64GB', '4GB', '128GB', NULL, NULL),
(10, '64GB', '4GB', '128GB', NULL, NULL),
(11, '128GB', '4GB', '128GB', NULL, NULL),
(12, '128GB', '4GB', '256GB', NULL, NULL),
(13, '64GB', '4GB', '128GB', NULL, NULL),
(14, '64GB', '4GB', '256GB', NULL, NULL),
(28, '128GB', '4GB', '256 GB', NULL, NULL),
(29, '64 GB', '4 GB', '128 GB', NULL, NULL),
(30, '64 GB', '4 GB', '128 GB', NULL, NULL),
(31, '64 GB', '4 GB', '128 GB', NULL, NULL),
(32, '64 GB', '4 GB', '128 GB', NULL, NULL),
(33, '64 GB', '4 GB', '128 GB', NULL, NULL),
(34, '64 GB', '4 GB', '128 GB', NULL, NULL);

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
  `order_number` text,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_quantity`, `order_date`, `mode_of_payment`, `order_number`, `order_id`, `product_id`) VALUES
(102, 2, '2018-03-20 09:11:53', 'cash', 'GMOR-703102', 0, 0),
(103, 3, '2018-03-20 09:44:53', 'cash', 'GMOR-703103', 0, 0),
(104, 1, '2018-03-20 12:29:15', 'cash', 'GMOR-7014104', 0, 0),
(105, 1, '2018-03-21 11:38:18', 'cash', 'GMOR-7015105', 0, 0),
(106, 1, '2018-01-02 18:30:00', 'cash', 'AII-1232', 0, 0),
(107, 2, '2018-04-03 08:31:11', 'cash', 'GMOR-703107', 0, 0),
(108, 5, '2018-04-05 06:42:14', 'cash', 'GMOR-63108', 108, 70),
(109, 5, '2018-04-05 06:42:23', 'cash', 'GMOR-63109', 108, 6),
(110, 1, '2018-04-05 06:51:47', 'cash', 'GMOR-3110', 110, 70),
(111, 1, '2018-04-05 06:52:49', 'cash', 'GMOR-3111', 111, 70),
(112, 1, '2018-04-05 06:53:26', 'cash', 'GMOR-3112', 112, 70),
(113, 1, '2018-04-05 06:54:04', 'cash', 'GMOR-3113', 113, 70),
(114, 1, '2018-04-05 06:54:32', 'cash', 'GMOR-3114', 114, 70),
(115, 1, '2018-04-05 06:56:07', 'cash', 'GMOR-3115', 115, 70),
(116, 1, '2018-04-05 06:56:35', 'cash', 'GMOR-3116', 116, 70),
(117, 1, '2018-04-05 06:57:24', 'cash', 'GMOR-3117', 117, 70),
(118, 1, '2018-04-05 06:58:27', 'cash', 'GMOR-3118', 118, 70),
(119, 1, '2018-04-05 06:58:54', 'cash', 'GMOR-3119', 119, 70),
(120, 1, '2018-04-05 06:59:05', 'cash', 'GMOR-3120', 120, 70),
(121, 1, '2018-04-05 07:00:56', 'cash', 'GMOR-3121', 121, 70),
(122, 1, '2018-04-05 07:01:30', 'cash', 'GMOR-3122', 122, 70),
(123, 2, '2018-04-05 07:14:24', 'cash', 'GMOR-3123', 123, 6),
(124, 1, '2018-04-05 07:14:23', 'cash', NULL, 123, 70),
(125, 2, '2018-04-05 07:39:20', 'cash', 'GMOR-3125', 125, 6),
(126, 1, '2018-04-05 07:39:19', 'cash', NULL, 125, 70),
(127, 1, '2018-04-05 08:14:03', 'cash', 'GMOR-3127', 127, 70),
(128, 1, '2018-04-05 08:15:17', 'cash', 'GMOR-3128', 128, 70),
(129, 1, '2018-04-09 07:27:52', 'cash', 'GMOR-3129', 129, 6),
(130, 1, '2018-04-09 07:29:31', 'cash', 'GMOR-3130', 130, 70),
(131, 1, '2018-04-09 09:54:06', 'cash', 'GMOR-3131', 131, 4),
(132, 1, '2018-04-09 09:54:35', 'cash', 'GMOR-3132', 132, 70),
(133, 1, '2018-04-09 09:55:49', 'cash', 'GMOR-3133', 133, 4),
(134, 1, '2018-04-09 10:11:23', 'cash', 'GMOR-3134', 134, 5),
(135, 1, '2018-04-09 10:12:59', 'cash', 'GMOR-3135', 135, 2),
(136, 1, '2018-04-09 10:12:59', 'cash', NULL, 135, 11),
(137, 1, '2018-04-09 10:12:59', 'cash', NULL, 135, 2),
(138, 1, '2018-04-09 10:12:59', 'cash', NULL, 135, 11),
(139, 1, '2018-04-09 10:13:29', 'cash', 'GMOR-3139', 139, 72),
(140, 1, '2018-04-09 10:13:58', 'cash', 'GMOR-3140', 140, 6),
(141, 1, '2018-04-09 10:13:57', 'cash', NULL, 140, 11),
(142, 1, '2018-04-09 10:35:02', 'cash', 'GMOR-3142', 142, 4),
(143, 1, '2018-04-09 10:38:04', 'cash', 'GMOR-3143', 143, 6),
(144, 1, '2018-04-09 10:38:04', 'cash', NULL, 143, 70),
(145, 1, '2018-04-09 10:38:04', 'cash', NULL, 143, 70);

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
(14, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(15, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(16, 'marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(17, 'marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(18, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(19, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(20, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(21, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(22, 'Marshmallow', 'Snapdragon', 'OctaCore', NULL, NULL),
(36, 'Android', 'Snapdragon', 'OctaCore', NULL, NULL),
(37, 'Android', 'snapdragon 835', 'octacore', NULL, NULL),
(38, 'Android', 'snapdragon 835', 'octacore', NULL, NULL),
(39, 'Android', 'snapdragon 835', 'octacore', NULL, NULL),
(40, 'Android', 'snapdragon 835', 'octacore', NULL, NULL),
(41, 'Android', 'snapdragon 835', 'octacore', NULL, NULL),
(42, 'Android', 'snapdragon 835', 'octacore', NULL, NULL);

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
(1, 'Redmi note 5', 'rnote5qwtwt', 'Slim phone with good camera at a very low price', 1, 1, '2018-03-03 18:30:00', '2018-04-09 06:20:17', 'Redmi Note 5', 0),
(2, 'Iphone X', 'ix123', 'One of the best face detection techniques and one of the best camera', 1, 1, '2018-02-28 18:30:00', '2018-04-09 06:20:27', 'X', 0),
(3, 'Samsung s8', 'qty12', 'Great Camera and fast processor', 1, 1, '2018-04-01 18:30:00', '2018-04-01 18:30:00', 'S8', 0),
(4, 'Moto G5', 'tymoto12', 'One of the best processor in its price range and has a decent camera', 1, 1, '2018-03-01 18:30:00', '2018-03-01 18:30:00', 'MotoG5', 0),
(5, 'HTC Desire 816', 'desirez12', 'Good phone for people who do less gaming', 1, 1, '2018-03-31 18:30:00', '2018-04-09 06:20:48', 'Desire 816', 0),
(6, 'oppo F5', 'opp123Qw', 'Great camera phone', 1, 1, '2018-03-04 18:30:00', '2018-04-09 06:20:59', 'oppo F5', 0),
(7, 'Iphone 7s', 'i7qweq', 'Nice Camera and very good processor', 1, 1, '2018-04-07 18:30:00', '2018-04-07 18:30:00', '7S', 0),
(11, 'Asus Zenfone 2', 'zenqw12as', 'Good phone for light gaming                    ', 1, 1, '2018-03-08 14:29:51', '2018-04-09 06:13:59', 'Zenfone2', 0),
(19, 'Samsung Galaxy Grand', 'sgrandqwer12', 'Low budget phone with less heating problem', 1, 0, '2018-03-08 15:29:05', '2018-04-09 11:02:26', 'Galaxy Grand', 0),
(70, 'Panasonic P11', '\r\nPA8C0019IN/PA8C0023IN', '                     nice phone with great features                      \r\n                    ', 1, 1, '2018-03-12 11:17:10', '2018-04-09 10:58:31', 'P11', 8),
(71, 'Nokia Lumia 520', 'UPC5J18O8Q71', 'good battery                   ', 1, 1, '2018-04-09 08:20:18', '2018-04-09 08:38:07', 'Lumia 520 ', 1),
(72, 'Nokia Lumia 720', 'STVGWMZIJD72', '                    ', 1, 0, '2018-04-09 08:33:30', '2018-04-09 08:55:23', 'Lumia 720 ', 1),
(73, 'Nokia Lumia 720', '8HDBX1470V73', 'quality phone                   ', 1, 1, '2018-04-09 10:06:20', '2018-04-09 10:06:20', 'Lumia 720 ', 1),
(74, 'Nokia Lumia 720', 'IVWQC8M0Q774', 'quality phone                   ', 1, 0, '2018-04-09 10:08:18', '2018-04-09 10:17:35', 'Lumia 720 ', 1),
(75, 'Nokia Lumia 720', 'VGG5IY6FSA75', 'quality phone                   ', 1, 0, '2018-04-09 10:08:46', '2018-04-09 10:09:06', 'Lumia 720 ', 1),
(76, 'Redmi 3', 'N0J8CPS7J876', 'Great camera                      ', 1, 1, '2018-04-09 11:01:31', '2018-04-09 11:01:31', '3 ', 1);

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
(2, 6, 19000, 17500, NULL, NULL, NULL, NULL),
(3, 11, 13100, 12000, NULL, NULL, NULL, NULL),
(4, 4, 15000, 13000, NULL, NULL, NULL, NULL),
(5, 1, 13000, 12100, NULL, NULL, NULL, NULL),
(6, 2, 80000, 75000, NULL, NULL, NULL, NULL),
(7, 3, 50000, 48000, NULL, NULL, NULL, NULL),
(8, 5, 20000, 18500, NULL, NULL, NULL, NULL),
(9, 7, 40000, 38000, NULL, NULL, NULL, NULL),
(10, 19, 8000, 7500, NULL, NULL, NULL, NULL),
(11, 71, 10500, 10000, NULL, NULL, NULL, NULL),
(12, 72, 21000, 20000, NULL, NULL, NULL, NULL),
(13, 75, 13100, 12400, NULL, NULL, NULL, NULL),
(14, 76, 15500, 15000, NULL, NULL, NULL, NULL);

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
(1, 70, '150g'),
(2, 1, '70g'),
(3, 2, '70g'),
(4, 3, '70g'),
(5, 4, '70g'),
(6, 5, '70g'),
(7, 6, '70g'),
(8, 7, '70g'),
(9, 11, '70g'),
(10, 19, '70g'),
(11, 71, '150'),
(12, 72, '150'),
(13, 75, '150'),
(14, 76, '150');

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
(2, 'huda', 1, 3, 193895, 'jalandhar', 'punjab', '9998888772', 'vipul', 1, 'ind'),
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
(22, 'hardik', '6666777777', 'hardik@g.com', '$2y$10$xknQWzl.yWvNnvPLIMElG./Fdpil9awz2VqwhleHUKaY./39XmTW2', '2018-04-04 09:08:08'),
(23, 'tejveer', '6660009999', 'tj@gmail.com', '$2y$10$CYPdwhnQ2dsIgiFPNkrXEu26xBJHbPc0sR8sQsonijC5DpGbh.80y', '2018-04-09 08:58:43'),
(24, 'Manjeet Markande', '9415543234', 'mmarkande@gmail.com', '$2y$10$6XAt.x6yR7ztGQoBfcHB0ufCRNUQNFJUqv.Mnh./YRV6AV1sPBRze', '2018-04-09 09:06:42'),
(25, 'Amandeep Singh', '9898123456', 'amandeepsingh@gmail.com', '$2y$10$hla.LeFzRD7ruABeeSmTU.owEsJCwHr0bVuQ1rwa6fYucf46YeeJK', '2018-04-09 10:53:00');

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
(22, 8, 5, 4, 1),
(18, 1, 5, 4, 2),
(5, 1, 3, 5, NULL),
(5, 2, 3, 5, NULL),
(5, 6, 3, 5, NULL),
(5, 7, 3, 5, NULL),
(21, 1, 3, 5, NULL),
(21, 2, 2, 5, NULL),
(21, 2, 3, 5, NULL),
(24, 1, 3, 3, NULL),
(24, 2, 5, 3, NULL),
(24, 5, 5, 3, NULL),
(19, 1, 2, 4, 2),
(19, 1, 3, 4, 2),
(19, 2, 3, 4, 2),
(4, 1, 3, 5, NULL),
(4, 2, 3, 5, NULL),
(17, 1, 3, 4, 2),
(17, 2, 3, 4, 2);

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
(5, 'zen'),
(6, 'Logitech');

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
(25, '1 year'),
(26, '1 year'),
(27, '1 year '),
(28, '1 year '),
(29, '1 year '),
(30, '1 year '),
(31, '1 year '),
(32, '1 year '),
(33, '1 year '),
(47, '1 year'),
(48, '1 year'),
(49, '1 year'),
(50, '1 year'),
(51, '1 year'),
(52, '1 year'),
(53, '1 year');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `camera_features`
--
ALTER TABLE `camera_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `connectivity_features`
--
ALTER TABLE `connectivity_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `display_features`
--
ALTER TABLE `display_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `memory_features`
--
ALTER TABLE `memory_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `os_features`
--
ALTER TABLE `os_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products_inventory`
--
ALTER TABLE `products_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_weight`
--
ALTER TABLE `product_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_names`
--
ALTER TABLE `vendor_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_roles`
--
ALTER TABLE `vendor_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warranty_features`
--
ALTER TABLE `warranty_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
