-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 08:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htc`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_ID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_ID`, `name`, `surname`, `address`, `phone`) VALUES
(11, 'Sarah', 'Johnson', '123 Oak St', '555-6789'),
(12, 'Daniel', 'Williams', '456 Elm St', '555-1234'),
(13, 'Linda', 'Brown', '789 Maple St', '555-5678'),
(14, 'Robert', 'Jones', '101 Pine St', '555-9101'),
(15, 'Jennifer', 'Miller', '202 Cedar St', '555-2345');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `user_ID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `position_ID` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `hireDate` date NOT NULL DEFAULT current_timestamp(),
  `hourPay` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_ID`, `name`, `surname`, `position_ID`, `address`, `phone`, `hireDate`, `hourPay`) VALUES
(1, 'Admin', 'AdminSurname', 1, 'AdminAddress', '1234567890', '2024-04-08', 15.00),
(2, 'John', 'Doe', 2, '123 Main St', '555-1234', '2024-04-08', 12.50),
(3, 'Jane', 'Smith', 3, '456 Elm St', '555-5678', '2024-04-08', 13.75),
(4, 'Michael', 'Johnson', 4, '789 Oak St', '555-9101', '2024-04-08', 13.00),
(5, 'Emily', 'Brown', 5, '101 Pine St', '555-2345', '2024-04-08', 11.50),
(6, 'David', 'Martinez', 6, '202 Cedar St', '555-6789', '2024-04-08', 12.25),
(7, 'Jessica', 'Garcia', 7, '303 Maple St', '555-1011', '2024-04-08', 11.75),
(8, 'Christopher', 'Lopez', 8, '404 Birch St', '555-1213', '2024-04-08', 12.00),
(9, 'Ashley', 'Lee', 9, '505 Walnut St', '555-1415', '2024-04-08', 10.50),
(10, 'Matthew', 'Taylor', 10, '606 Cedar St', '555-1617', '2024-04-08', 10.75),
(21, '123a', 'ads', 1, 'asdd', 'asdd', '2024-05-14', 13.99);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_ID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_ID`, `name`, `price`) VALUES
(1, 'Pepperoni Pizza', 9.99),
(2, 'Mushroom Pizza', 8.99),
(3, 'Veggie Pizza', 10.49),
(4, 'Sausage Pizza', 9.49),
(5, 'Cheese Pizza', 7.99),
(6, 'Hawaiian Pizza', 10.99),
(7, 'BBQ Chicken Pizza', 11.99),
(8, 'Meat Lovers Pizza', 12.99),
(9, 'Margherita Pizza', 8.49),
(10, 'Buffalo Chicken Pizza', 11.49);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `position_ID` int(255) NOT NULL,
  `jobName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`position_ID`, `jobName`) VALUES
(1, 'Admin'),
(2, 'Restaurant Manager'),
(3, 'Chef'),
(4, 'Sous Chef'),
(5, 'Front of House Manager'),
(6, 'Back of House Manager'),
(7, 'Kitchen Manager'),
(8, 'Assistant Manager'),
(9, 'Host/Hostess'),
(10, 'Server'),
(11, 'Bartender'),
(12, 'Line Cook'),
(13, 'Prep Cook'),
(14, 'Dishwasher'),
(15, 'Food Runner'),
(16, 'Busser'),
(17, 'Catering Coordinator'),
(18, 'Events Coordinator'),
(19, 'Sommelier'),
(20, 'Pastry Chef'),
(21, 'Barista'),
(22, 'Social Media Manager'),
(23, 'Customer Service Representative'),
(24, 'Web Content Manager');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_ID` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_ID`, `email`, `password`, `createDate`) VALUES
(1, 'admin@admin.com', 'admin', '2024-04-08 09:12:19'),
(2, 'john@example.com', 'password123', '2024-04-08 10:09:59'),
(3, 'jane@example.com', 'securepass', '2024-04-08 10:09:59'),
(4, 'michael@example.com', 'michaelpass', '2024-04-08 10:09:59'),
(5, 'emily@example.com', 'emilypass', '2024-04-08 10:09:59'),
(6, 'david@example.com', 'davidpass', '2024-04-08 10:09:59'),
(7, 'jessica@example.com', 'jessicapass', '2024-04-08 10:09:59'),
(8, 'christopher@example.com', 'chrispass', '2024-04-08 10:09:59'),
(9, 'ashley@example.com', 'ashleypass', '2024-04-08 10:09:59'),
(10, 'matthew@example.com', 'mattpass', '2024-04-08 10:09:59'),
(11, 'sarah@johnson.com', '123', '2024-04-08 11:50:14'),
(12, 'daniel@williams.com', '321', '2024-04-08 11:51:18'),
(13, 'linda@brown.com', '54321', '2024-04-08 11:51:56'),
(14, 'robert@jones.com', '45321', '2024-04-08 11:52:44'),
(15, 'jennifer@miller.com', '45321', '2024-04-08 11:53:17'),
(21, '123@123.c', '123', '2024-05-14 17:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_ID` int(255) NOT NULL,
  `item_ID` int(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` bigint(255) NOT NULL,
  `customer_ID` int(255) NOT NULL,
  `employee_ID` int(255) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `table_ID` int(255) NOT NULL,
  `reservation` datetime NOT NULL,
  `completion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_ID` int(255) NOT NULL,
  `seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_ID`, `seats`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(8, 2),
(9, 3),
(10, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`position_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `position_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
