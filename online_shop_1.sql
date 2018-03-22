-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 04:06 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(6, 'White'),
(7, 'Green'),
(8, 'Pink'),
(9, 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `customer_phone` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `customer_email` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `customer_password` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `customer_address` text COLLATE utf8_estonian_ci NOT NULL,
  `customer_ip` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `customer_status` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `customer_address`, `customer_ip`, `customer_status`, `created_at`, `updated_at`) VALUES
(2, 'Ananta Jolil', '01756632871', 'Ananta Jolil@gmail.com', '', '', '', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `invoice_id` varchar(10) COLLATE utf8_estonian_ci NOT NULL,
  `customer_id` int(10) NOT NULL,
  `price_amount` int(11) NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `order_status` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `payment_method` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `shipping_address` text COLLATE utf8_estonian_ci NOT NULL,
  `shipping_mobile` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `shipping_name` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_model` varchar(10) COLLATE utf8_estonian_ci NOT NULL,
  `product_name` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_size` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `product_discount` decimal(10,2) NOT NULL,
  `product_description` text COLLATE utf8_estonian_ci NOT NULL,
  `product_images` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `brand_id` int(10) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_model`, `product_name`, `category_id`, `product_price`, `product_quantity`, `product_size`, `product_color`, `product_discount`, `product_description`, `product_images`, `brand_id`, `product_status`, `created_at`, `updated_at`) VALUES
(2, 'A1E', 'A1E | OLED | 4K Ultra HD | Hig', 1, '500000.00', 100, '77', 'Red', '0.00', 'dfsdgdf', '1520078238_A1E.jpg', 1, 1, '2018-03-03 11:57:18', NULL),
(5, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '', '0.00', 'button set', '', 1, 1, '2018-03-09 22:59:29', NULL),
(6, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '', '0.00', 'button set', '', 1, 1, '2018-03-09 23:01:30', NULL),
(7, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '0', '0.00', 'button set', '', 1, 1, '2018-03-09 23:01:43', NULL),
(8, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '0', '0.00', 'button set', 'nokia-101-raw.jpg', 1, 1, '2018-03-09 23:04:11', NULL),
(9, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '0', '0.00', 'button set', 'nokia-101-raw.jpg', 1, 1, '2018-03-09 23:04:15', NULL),
(10, '101', 'nokia 101', 1, '1800.00', 1, '[\"Extra Small\"]', '0', '0.00', 'button set', 'nokia-101-raw.jpg', 1, 1, '2018-03-09 23:05:58', NULL),
(12, '101', 'nokia 101', 1, '12000.00', 1, '[\"Extra Small\",\"medium\",\"Large\"]', '2', '0.00', 'ASDADASDASD', '1521029834_101.jpg', 1, 1, '2018-03-14 12:17:14', NULL),
(13, '101', 'nokia 101', 1, '121212.00', 1, '[\"Extra Small\",\"medium\",\"Large\"]', '2', '0.00', 'asdfsadasdasd', '1521029962_101.jpg', 1, 1, '2018-03-14 12:19:22', NULL),
(14, 'g89', 'Stand Fan', 1, '1200.00', 1, '[\"medium\"]', '[\"Mixed\"]', '1000.00', 'blue wings', '1521468777_g89.jpg', 1, 1, '2018-03-19 14:12:57', '2018-03-19 15:37:34'),
(15, 'm45', 'Korkys Shoes', 9, '600.00', 1, '[\"Extra Small\",\"medium\",\"Large\"]', '[\"White\",\"Green\",\"Mixed\"]', '0.00', '', '1521469113_m45.jpeg', 1, 1, '2018-03-19 14:18:33', NULL),
(16, '112345', 'funta', 13, '12.00', 1, '[\"Extra Small\",\"medium\",\"Large\",\"Extra Large\"]', '[\"Pink\",\"Mixed\"]', '8.00', '', '1521469211_112345.jpg', 1, 1, '2018-03-19 14:20:11', '2018-03-19 15:37:38'),
(17, '45tt5', 'costa', 12, '130.00', 1, '[\"Extra Small\",\"medium\",\"Large\"]', '[\"Green\",\"Mixed\"]', '100.00', '', '1521469300_45tt5.jpg', 1, 1, '2018-03-19 14:21:40', '2018-03-19 15:37:45'),
(18, 'c67', 'Wiskats', 14, '300.00', 0, '[\"Extra Small\",\"medium\",\"Large\"]', '[\"Green\"]', '0.00', '', '1521493578_c67.png', 1, 1, '2018-03-19 21:06:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `brand_description` text COLLATE utf8_estonian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`brand_id`, `brand_name`, `brand_description`, `created_at`, `updated_at`) VALUES
(1, 'Sony', '<b>sony is a good product<img alt=\"\" src=\"http://\"></b><br>', '2018-03-03 10:22:49', '2018-03-07 22:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `category_description` text COLLATE utf8_estonian_ci NOT NULL,
  `category_image` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `parent` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`, `category_description`, `category_image`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', '0', 1, '2018-03-01 18:00:00', '2018-03-01 18:00:00'),
(8, 'Fashion ', 'sdfsdsd', '', '0', 1, '2018-03-07 21:33:07', NULL),
(9, 'Footware', '', '', '8', 1, '2018-03-15 19:13:40', NULL),
(10, 'Smart Phone', '', '', '1', 1, '2018-03-15 19:14:17', NULL),
(11, 'Beverages', '', '', '0', 1, '2018-03-15 19:16:26', NULL),
(12, 'Juice', '', '', '11', 1, '2018-03-15 19:16:41', NULL),
(13, 'Soft Drinks', '', '', '11', 1, '2018-03-15 19:16:54', NULL),
(14, 'Pet Food', '', '', '0', 1, '2018-03-15 22:49:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `images` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL,
  `support_phone` varchar(50) NOT NULL,
  `support_email` varchar(50) NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `tumblr` varchar(255) NOT NULL,
  `myspace` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `support_phone`, `support_email`, `contact_phone`, `contact_email`, `facebook`, `google_plus`, `twitter`, `tumblr`, `myspace`, `address`) VALUES
(3, '+8801763487897', 'support@email.com', '+8801763487897', 'contact@email.com', 'https://www.facebook.com/', 'https://plus.google.com/', 'https://plus.google.com/', 'https://plus.google.com/', 'https://twitter.com/?lang=en', 'Sector 12, Uttara, Dhaka&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`) VALUES
(1, 'Extra Small'),
(2, 'medium'),
(3, 'Large'),
(4, 'Extra Large');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` text NOT NULL,
  `slider_url` varchar(255) NOT NULL,
  `slider_images` varchar(255) NOT NULL,
  `slider_status` tinyint(1) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_url`, `slider_images`, `slider_status`, `sort_order`) VALUES
(3, '', '', '1521132860_.jpg', 1, 1),
(4, 'GOOGLE and others', 'www.google.com', '1521132872_.jpg', 1, 2),
(5, '', '', '1521132885_.jpg', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `user_password` varchar(40) COLLATE utf8_estonian_ci NOT NULL,
  `user_phone` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `user_address` text COLLATE utf8_estonian_ci NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_type` varchar(30) COLLATE utf8_estonian_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`, `user_status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@onlineshop.com', 'e10adc3949ba59abbe56e057f20f883e', '01923834492', 'Dhaka, Bangladesh', 1, '1', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `product_brand` (`brand_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
