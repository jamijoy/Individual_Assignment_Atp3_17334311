-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 06:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `busid` int(10) NOT NULL,
  `ticketno` int(10) NOT NULL,
  `fare` int(10) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `busid`, `ticketno`, `fare`, `time`) VALUES
(1, 2, 2, 320, 'January'),
(2, 5, 3, 1100, 'January'),
(3, 5, 5, 1100, 'January'),
(4, 3, 2, 1200, 'February'),
(5, 4, 10, 5000, 'February'),
(6, 4, 12, 9500, 'March'),
(7, 5, 10, 6000, 'March');

-- --------------------------------------------------------

--
-- Table structure for table `busesschedule`
--

CREATE TABLE `busesschedule` (
  `id` int(10) NOT NULL,
  `operator` varchar(30) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `route` varchar(50) NOT NULL,
  `fare` int(10) NOT NULL,
  `departure` int(10) NOT NULL,
  `arrival` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busesschedule`
--

INSERT INTO `busesschedule` (`id`, `operator`, `manager`, `name`, `location`, `route`, `fare`, `departure`, `arrival`) VALUES
(2, 'Hanif', 'Ratan', 'Hanif Hino Oneplus', 'Bogra', 'Bogra-Dhaka', 320, 2, 10),
(4, 'GreenLine ltd.', 'Ratan', 'Green Line Night AC', 'Dhaka', 'Dhaka-Chittagong', 1250, 22, 11),
(5, 'GreenLine ltd.', 'Ratan', 'Green Line Day AC', 'Dhaka', 'Dhaka-Chittagong', 1100, 8, 18),
(6, 'GreenLine ltd.', 'Ratan', 'Green Line Hino Coach', 'Dhaka', 'Dhaka-Chittagong', 380, 16, 2),
(7, 'Ena Paribahan', 'Ratan', 'Ena Trans Day-Couch', 'Dhaka', 'Dhaka-Chittagong', 320, 16, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `type`, `userid`) VALUES
('Jami Joy', 'admin@countermanagement.com', 'asd', 'admin', 1),
('Azad Rahim st', 'azad@gmail.com', 'asd', 'manager', 2),
('sachi', 'sahabipro96@gmail.com', 'asd', 'manager', 3),
('mina', 'mina@gmail.com', 'asdf', 'manager', 4),
('ratul', 'rana.mdakhand80@gmail.com', 'asdas', 'manager', 5),
('fakerpola', 'asdasdsds@asad.vco', 'asd', 'manager', 6),
('sedranMahhla', 'sederanmehta777@gmail.com', 'asd', 'manager', 7),
('asman Chawdhury', 'asman7@gmial.com', 'asd', 'manager', 8),
('mina razu', 'mina.razu1998@gmail.com', 'asda', 'manager', 9),
('Kalam', 'kalam@gmail.com', 'asd', 'manager', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `busesschedule`
--
ALTER TABLE `busesschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `busesschedule`
--
ALTER TABLE `busesschedule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
