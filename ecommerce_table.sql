-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2025 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'onkar', 'onkar123'),
(2, 'abc', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `email`, `phone`, `address`, `total_price`, `order_date`) VALUES
(1, 'onkar appasaheb vagare', 'onkarvagare8@gmail.com', '08779480212', 'room no 201,plot no 178,pushphk vadghar panvel raigad 410206', 9880.00, '2025-03-01 12:50:16'),
(2, 'onkar appasaheb vagare', 'onkarvagare8@gmail.com', '08779480212', 'room no 201,plot no 178,pushphk vadghar panvel raigad 410206', 220.00, '2025-03-01 12:50:56'),
(3, 'onkar appasaheb vagare', 'onkarvagare8@gmail.com', '08779480212', 'room no 201,plot no 178,pushphk vadghar panvel raigad 410206', 220.00, '2025-03-01 12:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb1product`
--

CREATE TABLE `tb1product` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1product`
--

INSERT INTO `tb1product` (`id`, `pname`, `pprice`, `pimage`, `pcategory`) VALUES
(3, '  jacket Modern shirt', '330', 'uploadimage/f6.jpg', 'Home'),
(4, ' men casual shirt', '330', 'uploadimage/n7.jpg', 'Shirt'),
(9, ' ladies fancy Pant', '630', 'uploadimage/f7.jpg', 'Pant'),
(10, '   Hawai Shirt', '900', 'uploadimage/f3.jpg', 'Home'),
(11, ' men casual grey shirt', '550', 'uploadimage/n8.jpg', 'Shirt'),
(12, 'Colourfull Men shirt', '677', 'uploadimage/f1.jpg', 'Shirt'),
(13, 'Half Slevees T-shirt', '150', 'uploadimage/f5.jpg', 'Tshirt'),
(14, ' Formal pant For men', '150', 'uploadimage/', 'Home'),
(15, 'Shirt casual ', '600', 'uploadimage/n4.jpg', 'Home'),
(16, 'white Formal shirt', '450', 'uploadimage/n3.jpg', 'Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `UserName`, `Email`, `number`, `Password`) VALUES
(1, 'onkar', 'onkarvagare8@gmail.com', '08779480212', 'onkar123'),
(15, 'Yashraj', 'yash@gmail.com', '7845203511', 'yash123'),
(16, 'Gole', 'ayushgole610@gmail.com', '8433819000', 'gole123'),
(17, 'Aaditya', 'aadubhaimhatre12@gmail.com', '9987910778', 'aadu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb1product`
--
ALTER TABLE `tb1product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `number` (`number`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb1product`
--
ALTER TABLE `tb1product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
