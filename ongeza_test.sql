-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 09:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongeza_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `town_name` varchar(25) DEFAULT NULL,
  `gender_name` varchar(25) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `town_name`, `gender_name`, `gender_id`) VALUES
(67, 'ELISIA', 'KAHUMBA', 'MBEYA', 'female', NULL),
(68, 'ELIUDI', 'KAHUMBA', 'Dar Es Saalam', 'male', NULL),
(69, 'RICHARD ', 'KAHUMBA', 'Dar Es Saalam', 'male', NULL),
(70, 'MICHAEL', 'JACKSON', 'HIMO', 'male', NULL),
(71, 'EMILI', 'PAULO', 'NEW LAND MOSHI', 'male', NULL),
(72, 'EMILI', 'BEATUS', 'Dar Es Saalam', 'male', NULL),
(77, 'MICHAEL', 'jackson', 'Dar Es Saalam', 'male', NULL),
(79, 'gggggg', 'makundi_michaeljackson', 'Dar Es Saalam', 'female', NULL),
(84, 'MIC', 'makundi_michaeljackson', 'MOSI', 'male', NULL),
(85, 'MICHA', 'makundi_michaeljackson', 'Dar Es Saalam', 'male', NULL),
(87, 'MICHAE', 'makundi_michaeljackson', 'MOSHI', 'male', NULL),
(88, 'MICHAE', 'makundi_michaeljackson', 'Dar Es Saalam', 'male', NULL),
(89, 'MICHAE', 'makundi_michaeljackson', 'Dar Es Saalam', 'male', NULL),
(90, 'MICHAE', 'makundi_michaeljackson', 'MOSHI', 'male', NULL),
(91, 'MICHAE', 'makundi_michaeljackson', 'MOSHI', 'male', NULL),
(98, 'MICHAE', 'jackson', '', '', NULL),
(104, 'MICHAE', 'kisuda', '', 'male', NULL),
(105, 'MICHAE', 'jackson', 'himo', 'male', NULL),
(106, '', '', '', '', NULL),
(107, 'MICHAE', 'jackson', 'Dar Es Saalam', 'male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'male'),
(2, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
