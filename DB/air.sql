-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 07:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_done`
--

CREATE TABLE `booking_done` (
  `booking_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `flight_name` varchar(25) NOT NULL,
  `flight_PNR` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_done`
--

INSERT INTO `booking_done` (`booking_id`, `username`, `flight_name`, `flight_PNR`, `Date`, `Time`, `Price`) VALUES
(2, 'nihalsiingh', 'AirAsia', 'AA992', '2020-12-25', '03:15:00', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_name` varchar(200) NOT NULL,
  `flight_PNR` varchar(200) NOT NULL,
  `flight_time` time(6) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_name`, `flight_PNR`, `flight_time`, `Price`) VALUES
('Air India', 'AI453', '02:31:00.000000', 4000),
('Air Asia', 'AA324', '03:15:00.000000', 3000),
('Indigo', 'IG291', '02:45:30.000000', 3120),
('Vistara', 'VA732', '03:12:00.000000', 4200),
('GoAir', 'GA421', '03:30:00.000000', 3200),
('SpiceJet', 'SJ945', '02:42:00.000000', 3800),
('AirAsia', 'AA992', '03:02:00.000000', 4800),
('Vistara', 'VA249', '03:22:00.000000', 4380),
('AirIndia', 'AI422', '03:55:00.000000', 4250);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `action`, `date`) VALUES
(3, 'nihalsiingh', 'inserted', '2020-12-21 22:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `tandc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `username`, `email`, `password`, `reg_date`, `role`, `tandc`) VALUES
(4, 'dewanshi', 'dewanshisingh@gmail.com', '0e311e5b9704f28b4e8557e8fa3fbe7d', '2020/12/21', 'student', 'true'),
(5, 'nihalsiingh', 'nihal.kumar.singh@gmail.com', '4718795549bccd865106bb2327476b37', '2020/12/21', 'student', 'true');

--
-- Triggers `user_reg`
--
DELIMITER $$
CREATE TRIGGER `userlogs` AFTER INSERT ON `user_reg` FOR EACH ROW INSERT INTO logs VALUES (null,NEW.username,'inserted',NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_done`
--
ALTER TABLE `booking_done`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_done`
--
ALTER TABLE `booking_done`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
