-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2020 at 01:40 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `add2`
--

CREATE TABLE `add2` (
  `c_id` int(11) NOT NULL,
  `home2` varchar(50) NOT NULL,
  `mo2` varchar(10) NOT NULL,
  `song2` varchar(55) NOT NULL,
  `road2` varchar(55) NOT NULL,
  `tampon2` varchar(555) NOT NULL,
  `ampor2` varchar(555) NOT NULL,
  `provice2` varchar(555) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `add2`
--

INSERT INTO `add2` (`c_id`, `home2`, `mo2`, `song2`, `road2`, `tampon2`, `ampor2`, `provice2`, `zip`) VALUES
(1, 'Array', 'Array', 'Array', 'Array', 'แพงพวย', 'แพงพวย', 'แพงพวย', 70130),
(4, 'Array', 'Array', 'Array', 'Array', 'sdasd', 'ad', 'ราชบุรี', 70130);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `c_id` int(11) NOT NULL,
  `homen` varchar(555) NOT NULL,
  `mo` varchar(10) NOT NULL,
  `song` varchar(500) NOT NULL,
  `road` varchar(500) NOT NULL,
  `tampon` varchar(500) NOT NULL,
  `ampor` varchar(500) NOT NULL,
  `provice` varchar(500) NOT NULL,
  `codezip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`c_id`, `homen`, `mo`, `song`, `road`, `tampon`, `ampor`, `provice`, `codezip`) VALUES
(1, '232', '4', '-', '-', 'แพงพวย', 'ไทย', 'Array', 'Array'),
(4, '222222222222', '2222222222', '22222222222222', '232หมู่4 ต.แพงพวย อ.ดำเนินสะดวก', 'dasdsa', 'ไทย', 'Array', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `c_id` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `grade` varchar(6) NOT NULL,
  `regis_year` varchar(10) NOT NULL,
  `sus_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`c_id`, `s_id`, `section`, `grade`, `regis_year`, `sus_year`) VALUES
(1, '614259007', '61/47', '4', '2561', '2565'),
(4, '6456445', '61/47', '0', '2555', '2605');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `c_id` int(11) NOT NULL,
  `mr` varchar(50) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `mre` varchar(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `job` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `nation2` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `email` varchar(555) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `facebook` varchar(555) NOT NULL,
  `line` varchar(555) NOT NULL,
  `phone_h` varchar(10) NOT NULL,
  `rey` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`c_id`, `mr`, `fname`, `mre`, `ename`, `id`, `date`, `job`, `nation`, `nation2`, `religion`, `blood`, `email`, `tel`, `facebook`, `line`, `phone_h`, `rey`) VALUES
(1, 'นาย', 'เฉลิมรัฐ พรมสอาด', 'Mr.', 'chaleomrat Promsaart', '1739901838700', '2020-03-13', 'student', 'ไทย', 'ไทย', 'พุธ', '0', 'fxcz.777@gmail.com', '0910044851', 'sadfasf', 'sadfdasf', '0910044851', ''),
(4, 'นาย', 'xxxx', 'Mr.', 'xxxxxxxxxxxxxxxxxx', '11', '2020-03-06', 'student', 'ไทย', 'ไทย', 'พุธ', '0', 'fxcz.777@gmail.com', '0910044851', '1222', '2222222222222222222222222', '0910044851', '2555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add2`
--
ALTER TABLE `add2`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add2`
--
ALTER TABLE `add2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add2`
--
ALTER TABLE `add2`
  ADD CONSTRAINT `add2_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `name` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `name` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `name` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
