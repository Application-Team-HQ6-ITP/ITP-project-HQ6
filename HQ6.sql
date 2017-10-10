-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 10:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HQ6`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `Career title` varchar(255) NOT NULL,
  `Birthes` date NOT NULL,
  `Time attendance` time NOT NULL,
  `Time to leave` time NOT NULL,
  `Actual working hours` time NOT NULL,
  `Grade` int(11) NOT NULL,
  `emp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `password`, `sex`, `Career title`, `Birthes`, `Time attendance`, `Time to leave`, `Actual working hours`, `Grade`, `emp_img`) VALUES
(1, 'Ali Ahmed', '12345678', 'Male', 'Manenger', '1978-05-11', '08:00:00', '16:00:00', '08:00:00', 2, 'emp_img1.jpg'),
(2, 'Gheed Rafid Amir', '11112222', 'female', 'Engineer', '1988-03-15', '08:00:00', '14:00:00', '06:00:00', 3, 'emp_img2.jpg'),
(3, 'Baraah Rafid Amir', '11223344', 'female', 'Manager asistan', '1991-02-24', '08:00:00', '14:00:00', '06:00:00', 4, 'emp_img3.jpg'),
(4, 'Hassan Hamid Ali', '12312344', 'male', 'worker', '1990-07-20', '08:00:00', '14:00:00', '06:00:00', 5, 'emp_img4.jpg'),
(5, 'Haydeel Haylan Saheb', '11112222', 'female', 'Engineer', '1985-05-05', '08:00:00', '14:00:00', '06:00:00', 6, 'emp_img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `Ident_num` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `Nominal salary` int(8) NOT NULL,
  `Premium` int(5) NOT NULL,
  `Grade` int(1) NOT NULL,
  `Working hours` time NOT NULL,
  `Actual hours` time NOT NULL,
  `Daily vacation` int(2) NOT NULL,
  `Time vacation` time NOT NULL,
  `Extra hours` time NOT NULL,
  `Abcences` int(2) NOT NULL,
  `Outcome` int(7) NOT NULL,
  `Marrige` int(5) NOT NULL,
  `no.chlidren` int(2) NOT NULL,
  `Chlidren` int(6) NOT NULL,
  `Retirment` int(5) NOT NULL,
  `Total salary` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Ident_num`, `id`, `Nominal salary`, `Premium`, `Grade`, `Working hours`, `Actual hours`, `Daily vacation`, `Time vacation`, `Extra hours`, `Abcences`, `Outcome`, `Marrige`, `no.chlidren`, `Chlidren`, `Retirment`, `Total salary`) VALUES
('A-00001', 1, 800000, 40000, 2, '300:00:00', '248:00:00', 0, '00:00:00', '52:00:00', 0, 260000, 40000, 3, 45000, 24000, 1161000),
('A-00002', 2, 700000, 21000, 3, '160:00:00', '186:00:00', 0, '26:00:00', '00:00:00', 0, 0, 0, 0, 0, 7000, 714000),
('A-00003', 3, 600000, 24000, 4, '180:00:00', '186:00:00', 0, '06:00:00', '00:00:00', 0, 0, 30000, 0, 0, 12000, 642000),
('A-00004', 4, 500000, 15000, 5, '190:00:00', '186:00:00', 0, '00:00:00', '04:00:00', 0, 20000, 0, 0, 0, 5000, 530000),
('A-00005', 5, 400000, 16000, 6, '150:00:00', '186:00:00', 0, '36:00:00', '00:00:00', 1, 0, 20000, 4, 60000, 8000, 453000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`Ident_num`),
  ADD UNIQUE KEY `Ident_num` (`Ident_num`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
