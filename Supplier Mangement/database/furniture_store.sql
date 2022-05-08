-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nic` varchar(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nic`, `name`, `password`, `email`, `address`) VALUES
('123', 'nimal', '', '', ''),
('987682981V', 'kamal', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `uname` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cardno` int(12) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `cvc` int(3) NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`uname`, `password`, `name`, `nic`, `address`, `phone`, `email`, `cardno`, `cardname`, `month`, `year`, `cvc`, `price`, `status`) VALUES
('abc', '123', '', 0, '', 0, '', 0, '', 0, 0, 0, '0', ''),
('', '', 'K.D Perera', 1998785463, 'No 10/A Colombo road', 755341701, 'kd@gmail.com', 2147483647, 'boc', 4, 2024, 123, '80000', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(20) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `warranty_period` int(2) NOT NULL,
  `material` varchar(100) NOT NULL,
  `dimentions` varchar(20) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `product_price`, `product_image`, `product_status`, `warranty_period`, `material`, `dimentions`, `color`) VALUES
('11', 'Modern', 'Tables', '80000.00', 'Modern Cofee Table.jpg', 'IN STOCK', 1, 'MDF', '', ''),
('2', 'Floating', 'Tv Console', '125000.00', 'Floating Tv Console.jpg', '--Select Status--', 0, 'MDF', 'can', ''),
('3', 'Door Sliding Wardrobe', 'Wardrobes', '85000.00', 'Door Sliding Wardrobe.jpg', 'IN STOCK', 3, 'MDF', 'can be changed', ''),
('5', 'Dining table', 'Tables', '75000.00', 'Dining table.jpg', 'OUT OF STOCK', 0, 'MDF', 'can be changed', ''),
('6', 'Side Seating', 'Seating', '200000.00', 'Side Seating.jpg', 'IN STOCK', 5, 'MDF', 'can be changed', ''),
('7', 'Lighted Mirror', 'Mirrors', '0.00', 'Lighted Mirror.jpg', 'IN STOCK', 0, 'MDF', '', ''),
('9', 'Living Room Sofa', 'Sofas', '0.00', 'Living Room Sofa.jpg', 'OUT OF STOCK', 5, 'MDF', '', ''),
('BED/01', 'Box Storage Kind Bed', 'Tv Console', '175000.00', '', '--Select Status--', 0, '', '', ''),
('BED/0188', 'bed', 'Bed', '175000.00', '', '--Select Status--', 0, '', '', ''),
('BED/0255', 'bed', 'Tv Console', '12000.00', '', '--Select Status--', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_order`
--

CREATE TABLE `p_order` (
  `id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_order`
--

INSERT INTO `p_order` (`id`, `price`, `quantity`, `size`, `description`) VALUES
(8, '500', '2', 'M', 'Wood'),
(9, '15000', '5', 'L', 'Table');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL,
  `city` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `email`, `phone`, `city`) VALUES
(10, 'Joshua Brysk', '3174 Chardonnay Dr.', 'sss@gmaiil.com', 2147483647, 'Pleasanton'),
(11, 'Joshua Brysk', '3174 Chardonnay Dr.', 'supuncmd1234@gmail.com', 2147483647, 'Pleasanton'),
(12, 'Supun Chamod', 'Nidangoda', 'supun@gmail.com', 704975061, 'Bandarawela'),
(14, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(21, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(22, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(23, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(24, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(26, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(27, 'kasun', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(28, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(29, '', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(30, 'Supun Chamod', 'Nidangoda kalupahana', 'supuncmd1234@gmail.com', 2147483647, 'Kalupahana'),
(32, 'Warathenne Gedara Dinushika Madushani Alvis', 'no100/3 Warathenna', 'dmalwis@gmail.com', 755341701, 'Pilimathalwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `cardname` (`cardname`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `p_order`
--
ALTER TABLE `p_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p_order`
--
ALTER TABLE `p_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
