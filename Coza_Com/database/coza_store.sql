-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 01:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coza_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Password` int(10) NOT NULL,
  `Admin_Number` varchar(20) NOT NULL,
  `Admin_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_id`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_Number`, `Admin_Pic`) VALUES
(1, 'fahad', 'Fahad@gmail.com', 123, '9289182398', ''),
(2, 'hania', 'hania@gmail.com', 123, '9289182398', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'elc'),
(2, 'slug'),
(3, 'fashion'),
(4, 'mens fashion'),
(5, 'womens fashion'),
(6, 'huv'),
(7, 'elc'),
(8, 'Gogles'),
(9, 'Elc'),
(10, 'chargers'),
(11, 'laptops'),
(12, 'keyboards'),
(13, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`, `category_id`) VALUES
(0, 'amdllK', 'dkD;ALK', 'n.jpg', 'OKQE', 1),
(3, 'Iphone 11', 'iphone 11 256GB non pta', 'iphone.jpg', '23000', 13),
(4, 'infiix 4s pro', 'infiix 4s pro approved', 'infinix.webp', '30000', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `P_Number` varchar(20) NOT NULL,
  `U_Address` varchar(150) NOT NULL,
  `U_City` varchar(100) NOT NULL,
  `U_Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Full_Name`, `Email`, `Password`, `P_Number`, `U_Address`, `U_City`, `U_Image`) VALUES
(9, 'fahad', 'fahad@gmail.com', '123', '0394728471', 'dha', 'Islambad', ''),
(11, 'adeel', 'adeel@gmail.com', '123', '02483296275', 'clifton', 'karachi', ''),
(13, 'adnan', 'adnan@gmail.com', '123', '201924170373', 'mehmoodabad', 'karachi', ''),
(15, 'ayesha', 'ayesha@gmail.com', '123', '92494279107', 'Shahrae faisal', 'karachi', ''),
(17, 'mehmood', 'mehmood@gmail.com', '123', '08297654367', 'Do Darya', 'Karachi', ''),
(18, 'umer', 'umer@gmail.com', '123', '09857267865', 'Defence', 'Lahore', ''),
(19, 'mehmood', 'mehmood@gmail.com', '123', '08297654367', 'Do Darya', 'Karachi', ''),
(20, 'umer', 'umer@gmail.com', '123', '09857267865', 'Defence', 'Lahore', ''),
(21, 'zara', 'zara@gmail.com', '123', '09857267865', 'Bahria Town', 'Islmabad', ''),
(23, 'huda', 'huda@gmail.com', '123', '19291938913', 'doidoidid', 'jdlqddjl', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
