-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 04:01 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `address_type`
--

CREATE TABLE `address_type` (
  `id` int(11) NOT NULL,
  `address_type` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `brand_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `id` int(11) NOT NULL,
  `color` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_additional_features`
--

CREATE TABLE `map_product_additional_features` (
  `product_id` int(11) NOT NULL,
  `additional_features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_battery_features`
--

CREATE TABLE `map_product_battery_features` (
  `product_id` int(11) NOT NULL,
  `battery_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `map_product_color_features`
--

CREATE TABLE `map_product_color_features` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_connectivity_features`
--

CREATE TABLE `map_product_connectivity_features` (
  `product_id` int(11) NOT NULL,
  `connectivity_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_dimension_features`
--

CREATE TABLE `map_product_dimension_features` (
  `product_id` int(11) NOT NULL,
  `dimension_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_display_features`
--

CREATE TABLE `map_product_display_features` (
  `product_id` int(11) NOT NULL,
  `display_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_image`
--

CREATE TABLE `map_product_image` (
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_memory_features`
--

CREATE TABLE `map_product_memory_features` (
  `product_id` int(11) NOT NULL,
  `memory_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_os_features`
--

CREATE TABLE `map_product_os_features` (
  `product_id` int(11) NOT NULL,
  `os_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_product_warranty_features`
--

CREATE TABLE `map_product_warranty_features` (
  `product_id` int(11) NOT NULL,
  `warranty_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `privilege_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_description` text,
  `show_users` int(11) DEFAULT NULL,
  `show_backend` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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

-- --------------------------------------------------------

--
-- Table structure for table `product_weight`
--

CREATE TABLE `product_weight` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_address`
--

CREATE TABLE `store_address` (
  `id` int(11) NOT NULL,
  `address` text,
  `address_type` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
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
  `emp_pass` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `what_is_in_box`
--

CREATE TABLE `what_is_in_box` (
  `id` int(11) NOT NULL,
  `items_in_box` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `camera_features`
--
ALTER TABLE `camera_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `connectivity_features`
--
ALTER TABLE `connectivity_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `display_features`
--
ALTER TABLE `display_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memory_features`
--
ALTER TABLE `memory_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
-- AUTO_INCREMENT for table `os_features`
--
ALTER TABLE `os_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_weight`
--
ALTER TABLE `product_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store_address`
--
ALTER TABLE `store_address`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
