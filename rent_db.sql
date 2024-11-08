-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 08, 2024 at 05:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carstbl`
--

CREATE TABLE `carstbl` (
  `carId` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carstbl`
--

INSERT INTO `carstbl` (`carId`, `model`, `brand`, `quantity`, `image`, `description`, `price`) VALUES
(1, 'tset', 'test', 123, '67194cacd8110.png', 'ytsdfghfdh', 213),
(2, 'test', 'test', 3242135, '67194ce2165d6.jpg', 'tsetsdh', 4253623456),
(3, 'sfdthyrtedj', 'dfhfdgh', 123, '67194d34720e5.jpg', 'fdtgghdfgjd', 123426),
(4, 'tset', 'fdghjdfgh', 2314125, '67194d4d5a12f.jpg', 'ertydfgjhw', 324623),
(5, '', 'asdf', 2, '672694355cbc6.jpg', '', 0),
(6, '', '', 0, '672694fc3ffcb.jpg', '', 0),
(7, '', '', 0, '672695084e31e.jpg', '', 0),
(8, '', '', 0, '67269532c2d0f.jpg', '', 0),
(9, '', '', 0, '6726953c272cd.jpg', '', 0),
(10, 'RX-7', 'Mazda', 2500, '672e251dafa47.png', 'DESC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `renttbl`
--

CREATE TABLE `renttbl` (
  `rentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `carId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileNum` int(10) NOT NULL,
  `pickUpDate` date NOT NULL,
  `pickUpTime` time NOT NULL,
  `pickUpLocation` varchar(50) NOT NULL,
  `returnDate` date NOT NULL,
  `returnTime` time NOT NULL,
  `returnLocation` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `requested_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'TBA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renttbl`
--

INSERT INTO `renttbl` (`rentId`, `userId`, `carId`, `name`, `email`, `address`, `mobileNum`, `pickUpDate`, `pickUpTime`, `pickUpLocation`, `returnDate`, `returnTime`, `returnLocation`, `price`, `requested_at`, `status`) VALUES
(2, 3, 1, '', 'test', '', 0, '0000-00-00', '13:00:00', 'Cubao', '0000-00-00', '00:00:00', 'Cubao', 0, '2024-11-03 06:24:44', 'Disapproved'),
(3, 3, 1, '', 'test', '', 0, '0000-00-00', '13:00:00', 'Marikina', '0000-00-00', '00:00:00', 'Marikina', 0, '2024-11-03 06:25:44', 'Approved'),
(4, 3, 1, '', 'test', '', 0, '0000-00-00', '13:00:00', 'Marikina', '0000-00-00', '00:00:00', 'Cainta', 0, '2024-11-03 06:27:55', 'Approved'),
(5, 3, 1, '', 'test', '', 0, '0000-00-00', '13:00:00', 'Cainta', '0000-00-00', '00:00:00', 'Cubao', 0, '2024-11-03 06:29:26', 'Approved'),
(6, 3, 1, '', 'test', '', 0, '0000-00-00', '13:00:00', 'Cubao', '0000-00-00', '00:00:00', 'Cubao', 0, '2024-11-03 06:34:47', 'Approved'),
(7, 3, 1, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-07', '22:15:00', 'Cubao', '2024-11-09', '23:29:00', 'Cubao', 213, '2024-11-08 21:30:20', 'Approved'),
(8, 3, 1, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-08', '14:31:00', 'Cubao', '2024-11-16', '13:30:00', 'Cubao', 0, '2024-11-08 22:28:07', 'Approved'),
(9, 3, 1, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-08', '22:32:00', 'Marikina', '2024-11-16', '22:32:00', 'Marikina', 0, '2024-11-08 22:29:53', 'Approved'),
(10, 3, 1, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-09', '22:31:00', 'Marikina', '2024-11-22', '22:31:00', 'Marikina', 2769, '2024-11-08 22:31:53', 'Approved'),
(11, 3, 2, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-16', '23:45:00', 'Marikina', '2024-11-18', '23:51:00', 'Marikina', 8507250000, '2024-11-08 23:51:37', 'Approved'),
(12, 3, 3, 'John Beloncio', 'test', '10f 2251 it hub, chino roces ave, metro manila', 2147483647, '2024-11-08', '23:45:00', 'Marikina', '2024-11-11', '23:52:00', 'Marikina', 370278, '2024-11-08 23:52:17', 'Disapproved'),
(13, 3, 1, 'John Beloncio', 'test', 'none', 2147483647, '2024-11-16', '00:45:00', 'Marikina', '2024-11-17', '00:37:00', 'Marikina', 213, '2024-11-09 00:37:12', 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`userId`, `username`, `password`, `email`, `role`) VALUES
(1, 'adminJD', 'zerotwo02', '', 'admin'),
(2, 'adminTest', '123', 'test123@gmail.com', 'admin'),
(3, 'userTest', '123', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carstbl`
--
ALTER TABLE `carstbl`
  ADD PRIMARY KEY (`carId`);

--
-- Indexes for table `renttbl`
--
ALTER TABLE `renttbl`
  ADD PRIMARY KEY (`rentId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `carId` (`carId`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carstbl`
--
ALTER TABLE `carstbl`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `renttbl`
--
ALTER TABLE `renttbl`
  MODIFY `rentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `renttbl`
--
ALTER TABLE `renttbl`
  ADD CONSTRAINT `carId` FOREIGN KEY (`carId`) REFERENCES `carstbl` (`carId`),
  ADD CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `usertbl` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
