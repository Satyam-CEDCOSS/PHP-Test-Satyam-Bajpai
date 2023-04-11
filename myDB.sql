-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Apr 11, 2023 at 11:02 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytodo`
--

CREATE TABLE `mytodo` (
  `ID` int NOT NULL,
  `Text` varchar(200) NOT NULL,
  `Type` enum('TODO','Completed') NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mytodo`
--

INSERT INTO `mytodo` (`ID`, `Text`, `Type`, `Date`) VALUES
(30, 'Go to home', 'Completed', '2023-04-11'),
(31, 'Go to Barber Shop', 'TODO', '2023-04-12'),
(32, 'Hand Wash', 'Completed', '2023-04-11'),
(33, 'Pruchase Vegetable', 'TODO', '2023-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytodo`
--
ALTER TABLE `mytodo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytodo`
--
ALTER TABLE `mytodo`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
