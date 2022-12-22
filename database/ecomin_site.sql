-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 03:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomin_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_code` varchar(255) NOT NULL DEFAULT 'Enter Product Code',
  `title` varchar(255) NOT NULL DEFAULT 'Enter product title',
  `price` varchar(255) NOT NULL DEFAULT 'Enter product price',
  `product_count` varchar(255) NOT NULL DEFAULT '1',
  `size` char(255) NOT NULL DEFAULT 'Medium',
  `category` varchar(255) NOT NULL DEFAULT 'Men Product',
  `stock` mediumint(9) NOT NULL DEFAULT 100,
  `image` mediumblob DEFAULT NULL,
  `description` mediumtext NOT NULL DEFAULT 'Enter Product description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_code` varchar(255) NOT NULL DEFAULT 'Enter Product Code',
  `title` varchar(255) NOT NULL DEFAULT 'Enter product title',
  `price` varchar(255) NOT NULL DEFAULT 'Enter product price',
  `shipping_type` varchar(20) NOT NULL DEFAULT 'local',
  `pay_method` varchar(20) NOT NULL DEFAULT 'PayPal',
  `size` char(255) NOT NULL DEFAULT 'Medium',
  `category` varchar(255) NOT NULL DEFAULT 'Men Product',
  `stock` mediumint(9) NOT NULL DEFAULT 100,
  `image` mediumblob DEFAULT NULL,
  `description` mediumtext NOT NULL DEFAULT 'Enter Product description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_code` varchar(255) NOT NULL DEFAULT 'Enter Product Code',
  `title` varchar(255) NOT NULL DEFAULT 'Enter product title',
  `type` varchar(255) NOT NULL DEFAULT 'Enter product type',
  `price` varchar(255) NOT NULL DEFAULT 'Enter product price',
  `size` char(255) NOT NULL DEFAULT 'Medium',
  `category` varchar(255) NOT NULL DEFAULT 'Men Product',
  `stock` mediumint(9) NOT NULL DEFAULT 100,
  `image` mediumblob DEFAULT NULL,
  `description` mediumtext NOT NULL DEFAULT 'Enter Product description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_code`, `title`, `type`, `price`, `size`, `category`, `stock`, `image`, `description`) VALUES
(1, 'pm-001', 'Black - Shirt', 'men', '223', 'md', 'Men Product', 14, 0x626c61636b2073686972742e6a7067, '<p>For Men</p>'),
(2, 'pm-002', 'Black Brown Shirt', 'men', '15', 'md', 'Men Product', 15, 0x626c61636b2d62726f776e2d73686972742e6a7067, '<p>For Men</p>'),
(3, 'pm-003', 'Blue Shirt', 'men', '27', 'md', 'Men Product', 28, 0x626c75652d73686972742d776974682d676c6173732e6a7067, '<p>For Men</p>'),
(4, 'pm-004', 'Blue Striped Shirt', 'men', '23', 'lg', 'Men Product', 34, 0x626c75652d737472697065642d73686972742e6a7067, '<p>For Men</p>'),
(5, 'pm-005', 'Brown Shirt', 'men', '53', 'md', 'Men Product', 20, 0x62726f776e2d73686972742e6a7067, '<p>For Men</p>'),
(6, 'pm-006', 'Brown Stripe Shirt', 'men', '21', 'lg', 'Men Product', 81, 0x62726f776e2d7374726970652d73686972742e6a7067, '<p>For Men</p>'),
(7, 'pm-007', 'Design Shirt', 'men', '27', 'md', 'Men Product', 26, 0x64657369676e2d73686972742e6a7067, '<p>For Men</p>'),
(8, 'pm-008', 'Fire Design Shirt', 'men', '35', 'md', 'Men Product', 53, 0x666972652d64657369676e2d73686972742e6a7067, '<p>For Men</p>'),
(9, 'pm-009', 'Green Shirt', 'men', '34', 'sm', 'Men Product', 34, 0x677265656e73686972742e6a7067, '<p>For Men</p>'),
(10, 'pm-010', 'Men Outfit', 'men', '42', 'lg', 'Men Product', 34, 0x6d656e2d6f75746669742d73686972742e6a7067, '<p>For Men</p>'),
(11, 'pm-011', 'Shirt', 'men', '34', 'sm', 'Men Product', 14, 0x73686972742e6a7067, '<p>For Men</p>'),
(12, 'pm-012', 'Sky Blue Shirt', 'men', '32', 'sm', 'Men Product', 24, 0x736b79626c756573686972742e6a7067, '<p>For Men</p>'),
(13, 'pm-013', 'White Out Fit', 'men', '18', 'sm', 'Men Product', 34, 0x77686974654f75746669742e6a7067, '<p>For Men</p>'),
(14, 'pm-014', 'White Shirt Sute', 'men', '24', 'sm', 'Men Product', 19, 0x776869746573686972742e6a7067, '<p>For Men</p>'),
(15, 'pm-015', 'Yello Green Shirt', 'men', '34', 'lg', 'Men Product', 5, 0x79656c6c6f20677265656e2073686972742e6a7067, '<p>For Men</p>'),
(16, 'pm-016', 'Yellow Outfit', 'men', '35', 'md', 'Men Product', 35, 0x79656c6c6f2073686972742e6a7067, '<p>For Men</p>'),
(17, 'pw-0001', 'Blue Garwon', 'women', '34', 'md', 'Men Product', 12, 0x73636172742d6d6964646c652d6b6e65652e6a7067, '<p>For Women</p>'),
(18, 'pw-002', 'Brown Full Dress', 'women', '43', 'md', 'Men Product', 43, 0x62726f776e2d66756c6c2d64726573732e6a7067, '<p>For Women</p>'),
(19, 'pw-003', 'Brown Garwon', 'women', '34', 'sm', 'Men Product', 23, 0x62726f776e2d6772776f6e2e6a7067, '<p>For Women</p>'),
(20, 'pw-004', 'Brown Scart', 'women', '34', 'sm', 'Men Product', 23, 0x62726f776e2d73636172742e6a7067, '<p>For Women</p>'),
(21, 'pw-005', 'Dark Gray Garwon', 'women', '23', 'md', 'Men Product', 34, 0x6461726b2d677265656e2d676172776f6e2e6a7067, '<p>For Women</p>'),
(22, 'pw-006', 'Flower Garwon', 'women', '32', 'lg', 'Men Product', 13, 0x666c6f7765722d676172776f6e2e6a7067, '<p>For Women</p>'),
(23, 'pw-007', 'Free Style Scart', 'women', '23', 'sm', 'Men Product', 12, 0x667265652d7374796c652d73636172742e6a7067, '<p>For Women</p>'),
(24, 'pw-008', 'Black Pink Garwon', 'women', '12', 'md', 'Men Product', 2, 0x676172776f6e2d776974682d626c61636b2d616e642d70696e6b2d737472697065642e6a7067, '<p>For Women</p>'),
(25, 'pw-009', 'Yellow Outfit', 'women', '23', 'md', 'Men Product', 12, 0x677265656e2d79656c6c6f2d6f75746669742e6a7067, '<p>For Women</p>'),
(26, 'pw-010', 'Indian Garwon', 'women', '43', 'sm', 'Men Product', 13, 0x696e6469616e2d676172776f6e2e6a7067, '<p>For Women</p>'),
(28, 'pw-011', 'Night Dress', 'women', '12', 'sm', 'Men Product', 34, 0x6e696774682d64726573732e6a7067, '<p>For Women</p>'),
(29, 'pw-012', 'Office Outfit', 'women', '23', 'md', 'Men Product', 13, 0x6f66666963652d6f75746669742e6a7067, '<p>For Women</p>'),
(30, 'pw-013', 'Out Fit For Fat', 'women', '23', 'lg', 'Men Product', 12, 0x6f75746669742d666f722d6661742e6a7067, '<p>For Women</p>'),
(31, 'pw-014', 'Party Brown Dress', 'women', '210', 'md', 'Men Product', 15, 0x70617274792d62726f776e2d64726573732e6a7067, '<p>For Women</p>'),
(32, 'pw-015', 'Party Dress', 'women', '230', 'md', 'Men Product', 17, 0x70617274792d64726573732e6a7067, '<p>For Women</p>'),
(33, 'pw-016', 'Pink Garwon', 'women', '210', 'md', 'Men Product', 28, 0x70696e6b2d676172776f6e2e6a7067, '<p>For Women</p>'),
(35, 'pw-017', 'Red Scart', 'women', '34', 'md', 'Men Product', 38, 0x7265642d736c696d2d6669742d64726573732e6a7067, '<p>For Women</p>'),
(37, 'pw-018', 'Summer Out Fit', 'women', '233', 'md', 'Men Product', 4, 0x73756d6d65722d6f75746669742e6a7067, '<p>For Women</p>');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `comment` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `vendor_id` int(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo_img` mediumblob DEFAULT NULL,
  `address` text NOT NULL DEFAULT 'enter your address',
  `account_no` varchar(255) NOT NULL DEFAULT 'Enter Your payment account number',
  `contact_number` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL DEFAULT 'Enter your zip code',
  `country` varchar(255) NOT NULL DEFAULT 'Enter your Country',
  `city` varchar(255) NOT NULL DEFAULT 'Eenter Your city',
  `region` varchar(255) NOT NULL DEFAULT 'Enter Your region',
  `message` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_id`, `vendor_id`, `firstname`, `lastname`, `email`, `password`, `logo_img`, `address`, `account_no`, `contact_number`, `zipcode`, `country`, `city`, `region`, `message`) VALUES
(1, '', 1, 'ye naing', 'tun', 'tun@gmail.com', '111111', 0x677265656e73686972742e6a7067, 'Oaktharmyothis bago', 'Enter Your payment account number', '09957092779', '8801', 'Myanmar', 'Bago', 'bago', '    '),
(3, '', 1, 'min', 'min', 'min@gmail.com', '11111', 0x666972652d64657369676e2d73686972742e6a7067, 'enter your address', 'Enter Your payment account number', '', 'Enter your zip code', 'India', 'Eenter Your city', 'Enter Your region', '  ');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `v_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'ADMIN',
  `companyname` varchar(255) NOT NULL DEFAULT 'shopping company.,Ltd',
  `logo_img` mediumblob DEFAULT NULL,
  `address` text NOT NULL DEFAULT 'enter your address',
  `account_no` varchar(255) NOT NULL DEFAULT 'Enter Your payment account number',
  `contact_number1` varchar(255) NOT NULL,
  `contact_number2` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL DEFAULT 'Enter your zip code',
  `country` varchar(255) NOT NULL DEFAULT 'Enter your Country',
  `city` varchar(255) NOT NULL DEFAULT 'Eenter Your city',
  `region` varchar(255) NOT NULL DEFAULT 'Enter Your region',
  `message` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `v_id`, `firstname`, `lastname`, `email`, `password`, `role`, `companyname`, `logo_img`, `address`, `account_no`, `contact_number1`, `contact_number2`, `zipcode`, `country`, `city`, `region`, `message`) VALUES
(1, '', 'maung maung', 'Myint', 'maung@gmail.com', '111111', 'ADMIN', 'Hello Shopping Co.,Ltd', 0x626c61636b2d62726f776e2d73686972742e6a7067, 'Hlaing Thar Yar 2 Road', 'Enter Your payment account number', '09751099749', '', '8001', 'Singapore', 'bago', 'Bago', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_code` varchar(255) NOT NULL DEFAULT 'Enter Product Code',
  `title` varchar(255) NOT NULL DEFAULT 'Enter product title',
  `price` varchar(255) NOT NULL DEFAULT 'Enter product price',
  `product_count` int(11) DEFAULT 1,
  `size` char(255) NOT NULL DEFAULT 'Medium',
  `category` varchar(255) NOT NULL DEFAULT 'Men Product',
  `stock` mediumint(9) NOT NULL DEFAULT 100,
  `image` mediumblob DEFAULT NULL,
  `description` mediumtext NOT NULL DEFAULT 'Enter Product description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
