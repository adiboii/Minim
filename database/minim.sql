-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: October 18, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minim`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
                           `item_image` varchar(255) NOT NULL,
                           `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Desks', 'Vigdis', 129.99, './assets/images/products/1.JPG', '2020-03-28 11:08:57'), -- NOW()
(2, 'Desks', 'Dekorera', 259.99, './assets/images/products/2.jpg', '2020-03-28 11:08:57'),
(3, 'Desks', 'Skarsta', 99.99, './assets/images/products/3.jpg', '2020-03-28 11:08:57'),
(4, 'Desks', 'Kivik', 69.99, './assets/images/products/4.jpg', '2020-03-28 11:08:57'),
(5, 'Furniture', 'Soderman', 499.99, './assets/images/products/5.jpg', '2020-03-28 11:08:57'),
(6, 'Furniture', 'Valentuna', 1099.99,'./assets/images/products/5.jpg', '2020-03-28 11:08:57'),
(7, 'Furniture', 'Finnala', 189.99, './assets/images/products/7.jpg', '2020-03-28 11:08:57'),
(8, 'Furniture', 'Harlanda', 510.00, './assets/images/products/8.jpg', '2020-03-28 11:08:57'),
(9, 'Storage', 'Koppang', 129.99, './assets/images/products/9.jpg', '2020-03-28 11:08:57'),
(10, 'Storage', 'Malm', 179.99, './assets/images/products/10.jpg', '2020-03-28 11:08:57'),
(11, 'Storage', 'Kullen', 99.99, './assets/images/products/11.jpg', '2020-03-28 11:08:57'),
(12, 'Storage', 'Helmer', 39.99, './assets/images/products/12.jpg', '2020-03-28 11:08:57');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(100) NOT NULL,
                        `last_name` varchar(100) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Adrian Paul', 'Reyes', '2020-03-28 13:07:17'),
(2, 'Adi', 'Boi', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
                            `cart_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
