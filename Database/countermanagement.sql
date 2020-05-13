-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 05:29 PM
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
(7, 5, 10, 6000, 'March'),
(8, 2, 5, 4500, 'April'),
(9, 5, 10, 6000, 'April'),
(10, 6, 3, 1500, 'April'),
(11, 7, 8, 7800, 'April'),
(12, 4, 2, 1200, 'May'),
(13, 5, 3, 1700, 'May'),
(14, 2, 2, 800, 'June'),
(15, 4, 2, 1300, 'June'),
(16, 5, 1, 1500, 'June'),
(17, 6, 2, 1200, 'June'),
(18, 2, 5, 4500, 'August'),
(19, 5, 10, 3800, 'August'),
(20, 6, 3, 1800, 'September'),
(21, 7, 2, 2600, 'September'),
(22, 2, 3, 4500, 'October'),
(23, 7, 10, 8000, 'October'),
(24, 2, 5, 3000, 'October'),
(25, 6, 10, 7800, 'October'),
(26, 6, 5, 6500, 'November'),
(27, 7, 5, 6500, 'November'),
(28, 4, 8, 12500, 'November'),
(29, 2, 2, 2000, 'December'),
(30, 7, 10, 7000, 'December'),
(31, 10, 5, 2500, 'January'),
(32, 15, 5, 5000, 'January'),
(33, 18, 12, 30100, 'February'),
(34, 13, 2, 1400, 'February'),
(35, 17, 4, 6500, 'May'),
(36, 16, 3, 1600, 'May'),
(37, 15, 2, 3200, 'May'),
(38, 5, 4, 6500, 'February'),
(39, 5, 4, 6500, 'February'),
(40, 6, 2, 4000, 'February'),
(41, 5, 4, 6500, 'February'),
(42, 5, 4, 6500, 'March'),
(43, 5, 4, 6500, 'March'),
(44, 5, 4, 6500, 'April'),
(45, 5, 4, 6500, 'April'),
(46, 5, 4, 6500, 'May'),
(47, 5, 4, 6500, 'June'),
(48, 5, 4, 6500, 'July'),
(49, 5, 4, 6500, 'July'),
(50, 18, 3, 5500, 'July'),
(51, 5, 4, 4444, 'August'),
(52, 5, 4, 4444, 'August'),
(53, 5, 4, 4444, 'September'),
(54, 5, 4, 4444, 'September'),
(55, 5, 4, 4444, 'October'),
(56, 5, 4, 4444, 'October'),
(57, 5, 4, 4444, 'November'),
(58, 5, 4, 4444, 'November'),
(59, 5, 4, 4444, 'November'),
(60, 5, 4, 4444, 'December'),
(61, 5, 4, 4444, 'December'),
(62, 2, 3, 1600, 'December'),
(63, 2, 3, 1600, 'December');

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
(7, 'Ena Paribahan', 'Ratan', 'Ena Trans Day-Couch', 'Dhaka', 'Dhaka-Chittagong', 320, 16, 22),
(9, 'Nabil Paribahan', 'kalam', 'Nabil Classic Non AC', 'Rangpur', 'Rangpur-Dhaka', 500, 16, 3),
(10, 'Hanif Enterprise', 'barkat', 'Hanif Volvo', 'Rangpur', 'Rangpur-Dhaka', 1250, 16, 3),
(11, 'SR Travels', 'barkat', 'SR Non AC Hino', 'Rangpur', 'Rangpur-Dhaka', 500, 10, 20),
(12, 'Agomoni Paribahan', 'masumBillah', 'Agomoni Hino AC', 'Rangpur', 'Rangpur-Dhaka', 750, 10, 20),
(13, 'Shyamoli Paribahan', 'jabbar', 'Shyamoli Day AC-Hino', 'Rangpur', 'Rangpur-Dhaka', 750, 10, 20),
(14, 'Shyamoli Paribahan', 'jabbar', 'Shyamoli Scania', 'Rangpur', 'Rangpur-Dhaka', 1250, 15, 0),
(15, 'SR Travels', 'kalam', 'SR Scania', 'Rangpur', 'Rangpur-Dhaka', 1250, 23, 8),
(16, 'Hanif Enterprise', 'barkat', 'Hanif Scania', 'Rangpur', 'Rangpur-Dhaka', 1250, 17, 13),
(17, 'Agomoni Paribahan', 'masumBillah', 'Agomoni Scania', 'Rangpur', 'Rangpur-Dhaka', 1200, 14, 11),
(18, 'Nabil Paribahan', 'jabbar', 'Nabil Scania', 'Rangpur', 'Rangpur-Dhaka', 1250, 8, 6),
(19, 'Ena Paribahan', 'Ratan', 'Ena AC Hino-Chair', 'Rangpur', 'Rangpur-Dhaka', 750, 17, 13);

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
('Jami Joy', 'admin@countermanager.com', 'asd', 'admin', 1),
('Azad Rahim st', 'azad@gmail.com', 'asd', 'manager', 2),
('sachi', 'sahabipro96@gmail.com', 'asd', 'manager', 3),
('mina', 'mina@gmail.com', 'asdf', 'manager', 4),
('ratul', 'rana.mdakhand80@gmail.com', 'asdas', 'manager', 5),
('fakerpola', 'asdasdsds@asad.vco', 'asd', 'manager', 6),
('sedranMahhla', 'sederanmehta777@gmail.com', 'asd', 'manager', 7),
('asman Chawdhury', 'asman7@gmial.com', 'asd', 'manager', 8),
('mina razu', 'mina.razu1998@gmail.com', 'asda', 'manager', 9),
('Kalam', 'kalam@gmail.com', 'asd', 'manager', 10),
('jabbar', 'jabbar@gmail.yahoo', 'asd', 'manager', 11),
('barkat', 'barkat@gmail.yahoo', 'asd', 'manager', 12),
('barkat22', 'barkat22@gmail.yahoo', 'asd', 'manager', 13),
('malangChand', 'malangChand@vo.vo', 'asd', 'manager', 14),
('malangChand22', 'malangChand22@vo.vo', 'asd', 'manager', 15),
('malangChand222', 'malangChand222@vo.vo', 'asd', 'manager', 16),
('sata45', 'sata45@sata45.com', 'asd', 'manager', 17),
('rahatga', 'rahatga@gm.vo', 'asd', 'manager', 18),
('ASDASDaDa', 'ASDASDaDa@ASDASDaDa.com', 'asd', 'manager', 19),
('masumBillah', 'masumBillah@gmail.com', 'asd', 'manager', 20),
('masumBillah2', 'Billah@gmail.com', 'asd', 'manager', 21);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `busesschedule`
--
ALTER TABLE `busesschedule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
