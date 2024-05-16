-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 06:33 PM
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
(1, 'John', 'password1', '123 Main Street', '1234567890'),
(2, 'Jane', 'password2', '456 Elm Street', '0987654321'),
(3, 'David', 'password3', '789 Oak Street', '5678901234'),
(4, 'Emily', 'password4', '321 Pine Street', '9012345678'),
(5, 'Michael', 'password5', '654 Maple Street', '3456789012'),
(6, 'Sophia', 'password6', '987 Cedar Street', '6789012345'),
(7, 'Jacob', 'password7', '234 Birch Street', '1234567890'),
(8, 'Olivia', 'password8', '567 Spruce Street', '0987654321'),
(9, 'William', 'password9', '890 Walnut Street', '5678901234'),
(10, 'Emma', 'password10', '123 Cherry Street', '9012345678');

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
(11, 'Liam', 'password11', 1, '123 Main Street', '1234567890', '2024-05-16', 15.00),
(12, 'Ava', 'password12', 2, '456 Elm Street', '0987654321', '2024-05-16', 17.50),
(13, 'Noah', 'password13', 3, '789 Oak Street', '5678901234', '2024-05-16', 20.00),
(14, 'Isabella', 'password14', 4, '321 Pine Street', '9012345678', '2024-05-16', 18.00),
(15, 'James', 'password15', 5, '654 Maple Street', '3456789012', '2024-05-16', 16.50),
(17, 'admin', 'admin', 1, 'admin', '1234567890', '2024-05-16', 99.99);

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
  `password` varchar(255) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_ID`, `email`, `password`, `createDate`) VALUES
(1, 'user1@example.com', '$2y$10$YjBM9rAQzoxN2tCsoA.yfugXQCKP96S0qnGkWwqFK9URiUdE4vuva', '2024-05-16 18:15:55'),
(2, 'user2@example.com', '$2y$10$e4Gg7TYlcJUW2h7/pRgXiOq2z1uKYjBQV84yVJY5ZnDcH.G/9Cpze', '2024-05-16 18:15:55'),
(3, 'user3@example.com', '$2y$10$5OWxIHpPqXZt9dtfC.F/r.OYqY1mDXs7b9Eh8GxD/p/KsI0iXbEw2', '2024-05-16 18:15:55'),
(4, 'user4@example.com', '$2y$10$lfqaj7vjAMFE4qMDz4PGJuBOdM0Rvhc7quy0FQ0FJrrE06sWOWZoW', '2024-05-16 18:15:55'),
(5, 'user5@example.com', '$2y$10$HCMvg0F.dDVkg5s0mFWYTO1.Lf3NDbpF8tncZpXKjMj6EdxdOTdD6', '2024-05-16 18:15:55'),
(6, 'user6@example.com', '$2y$10$Kc0Z5KcExNcz.CSN6ZsL4eW8pOSdCkQ0sYsKzmdq0XtZf6zNw/7/K', '2024-05-16 18:15:55'),
(7, 'user7@example.com', '$2y$10$iVCnlI2K6PcSQ3qPJxxV1OZirWhA/XHE8Aln.ku/jzIHMd8f0xtJG', '2024-05-16 18:15:55'),
(8, 'user8@example.com', '$2y$10$y.HG3H8U7g5ob7R0nZ3xauyyuoYgZjX7y89MwHvDzBktV3GM3Jv7i', '2024-05-16 18:15:55'),
(9, 'user9@example.com', '$2y$10$YplBZTh.e2q0jVHwa9MyCe3bC4AojPNcqvw1ulUd3CVFivnIqw0bW', '2024-05-16 18:15:55'),
(10, 'user10@example.com', '$2y$10$O1.mNjWn6r8h2K4x4X6gTOA/GM9Dj1qjXfxkl1.z34NQtMJyHVHfG', '2024-05-16 18:15:55'),
(11, 'liam@example.com', '$2y$10$4x3oT.9yVpEaPmv0eeM1JOmX9JW3aNVtZ8dpy0v7mB1HBlIzgdXsC', '2024-05-16 18:16:40'),
(12, 'ava@example.com', '$2y$10$KT5ybzBuUbQDDODId8XmHe1.XqA8J5QQJR2JgTugA8ER2CKTRkN6a', '2024-05-16 18:16:40'),
(13, 'noah@example.com', '$2y$10$SPb./FOc6gSY1p9qz.2DkuZdJfruTvxOK3pKp9JawpgMLOZDPvfHm', '2024-05-16 18:16:40'),
(14, 'isabella@example.com', '$2y$10$l.Ulou6Zh4jX.GbRUeHO6Oh.r0tGWVAYD17otI74f6N0ekgl3gR1G', '2024-05-16 18:16:40'),
(15, 'james@example.com', '$2y$10$2C4CKMK6EaJZMx6pLhOB8.YlXjINpHo6oOBtJ4LHmwcWsHRubYj8y', '2024-05-16 18:16:40'),
(17, 'admin@admin.com', '$2y$10$8N4pKe/MOBuB7k9gqedMvuP0KhrvnYQKGYGqDWXRgWqSiPDrZh0nS', '2024-05-16 18:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_ID` int(255) NOT NULL,
  `item_ID` int(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_ID`, `item_ID`, `amount`) VALUES
(1, 1, 2),
(1, 3, 1),
(2, 2, 1),
(3, 5, 3),
(4, 4, 2),
(4, 7, 1),
(5, 6, 1),
(5, 8, 2),
(6, 9, 1),
(6, 10, 1);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `customer_ID`, `employee_ID`, `orderDate`, `table_ID`, `reservation`, `completion`) VALUES
(1, 1, 1, '2024-05-16 10:30:00', 1, '2024-05-16 10:00:00', 0),
(2, 2, 2, '2024-05-16 11:45:00', 2, '2024-05-16 11:30:00', 0),
(3, 3, 3, '2024-05-16 12:15:00', 3, '2024-05-16 12:00:00', 0),
(4, 4, 4, '2024-05-16 13:00:00', 4, '2024-05-16 12:45:00', 0),
(5, 5, 5, '2024-05-16 14:30:00', 5, '2024-05-16 14:00:00', 0),
(6, 1, 6, '2024-05-16 15:00:00', 6, '2024-05-16 14:30:00', 0);

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
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
