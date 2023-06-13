-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `p_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `parduct_image` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`p_id`, `product_name`, `product_price`, `parduct_image`, `date`) VALUES
(4, 'biscuit', '10', 'biscuit.jpg', '2023-06-12 18:33:34.000000'),
(5, 'tea', '200', 'tea.jpg', '2023-06-12 18:34:36.000000'),
(6, 'Tata Tea', '200', 'tatatea.jpg', '2023-06-12 18:35:15.000000'),
(7, 'ketchup', '289', 'ketchup.jpg', '2023-06-12 18:35:32.000000'),
(8, 'Achar', '300', 'achar.jpg', '2023-06-12 18:35:51.000000'),
(9, 'Crunchy biscuit ', '25', 'biscuit2.jpg', '2023-06-12 18:37:58.000000'),
(10, 'Namkenn', '345', 'namkeen.png', '2023-06-12 18:38:12.000000'),
(11, 'masala', '123', 'masala.jpg', '2023-06-12 18:38:30.000000'),
(12, 'sugar', '50', 'sugar.jpg', '2023-06-12 18:38:50.000000'),
(13, 'cookies', '234', 'biscuit2.jpg', '2023-06-13 07:16:36.000000'),
(14, 'sugar', '90', 'sugar.jpg', '2023-06-13 09:13:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'khoob chand jhariya', 'myname@gmail.com', '$2y$10$0BMGQdJ13OrSnokGqc/e0e.oEgDzT2VOPDxurzfyH7KJ25xB2adqu', '2023-06-12 14:32:13.047703'),
(2, 'bharti jhariya', 'bharti@gmail.com', '$2y$10$Bq9ZSnvIjHMEztAQZk8S1uxFB5hTHTxyV7UEuLJLFY6Zj1.f6me6G', '2023-06-12 14:32:44.421546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
