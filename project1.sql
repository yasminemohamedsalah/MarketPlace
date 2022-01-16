-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 06:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `firstname`, `lastname`, `mobile`, `email`, `password`, `address`, `Image`, `role`) VALUES
(1, 'marwan', 'casc', '00011000', 'marwanasdmm@sadhs', 'marwanz', 'ascdlkasnchoias', '', 0),
(2, 'marwan', 'maged', '011101321', 'marwan@gmail.com', '1234', '1234', '', 0),
(3, 'marwaan', 'maged', '', 'marwan@gmail.com', 'marwan', '', '', 0),
(4, 'mahmoud', 'tarek', '123456', 'mahmoud@gmail.com', '123456', 'nasr city', '', 0),
(5, 'amal', 'khaled', '012345678', 'amal@gmail.com', '1234', 'tagamoa', '', 0),
(6, 'nesma', 'tamer', '12334', 'nesma@gmail.com', '1234', 'nasr city', '', 0),
(7, 'yasmine', 'salah', '01232134', 'yasmine@gmail.com', '1234', 'obour', '', 0),
(34, 'amal', 'casc', '00011000', 'mahmodh@gmail.com', '1234', 'mourad', 'user.jpeg', 0),
(41, 'yarab tany', 'amxsa', '34r324', 'nesmayarab@gmail.com', '1234', 'dbsdab', '3966.jpg', 0),
(42, 'marwan', 'maged', '0211213', 'nesma@admin.com', '1234', 'tagamoa', '3966.jpg', 1),
(43, 'amal', 'khaled', '00011000', 'amal@admin.com', '1234', 'mourad', '3966.jpg', 0),
(44, 'marwan', 'maged', '01231232', 'marwan@admin.com', '1234', 'tgamoaa', '', 0),
(45, 'marwan', 'maged', '2121133', 'marwan1@admin.com', '1234', 'asdsa', 'user.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `sent_by` int(11) NOT NULL,
  `received_by` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sent_by`, `received_by`, `message`, `createdAt`) VALUES
(1, 5, 45, 'hi', '2022-01-14 08:27:05pm'),
(2, 45, 5, 'hi', '2022-01-15 06:55:01pm'),
(3, 45, 5, 'how are you', '2022-01-15 06:55:10pm');

-- --------------------------------------------------------

--
-- Table structure for table `orderedproducts`
--

CREATE TABLE `orderedproducts` (
  `ID` int(11) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Description`, `Price`, `Quantity`, `Image`, `Brand`) VALUES
(1, 'Iphone 13', 'Ios Mobile Iphone 13', '15,000', 50, 'iphone13.png', 'Apple'),
(2, 'Samsung Galaxy A71', 'Mobile Galaxy A71', '9,000', 50, 'A71.png', 'Samsung'),
(3, 'Dell G5 ', 'LapTop Gaming ', '17,000 ', 10, 'DellG5-15-5590__1_.jfif', 'Dell'),
(4, 'AirPods Pro', 'AirPods Pro', '8,000', 50, 'airpods.png', 'Apple'),
(5, 'Apple Watch ', ' Black Apple Watch series 7', '10,000', 14, 'applewatch.jpg', 'Apple'),
(6, 'Samsung Smart TV ', 'Samsung Smart TV 55 inch', '20,000', 10, 'tv.jpg', 'Samsung'),
(8, 'huawei smart watch', 'huawei watch 3', '6,000', 14, 'smartwatch3.jpeg', 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`ID`, `Email`, `Rating`, `Review`) VALUES
(2, 'nesma@gmail.com', 4, 'helw'),
(8, 'nesma@gmail.com', 4, 'eshta y3ny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderedproducts`
--
ALTER TABLE `orderedproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
