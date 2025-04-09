-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2025 at 09:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(23) NOT NULL,
  `amazina` varchar(23) NOT NULL,
  `Ibicuruzwa` varchar(23) NOT NULL,
  `Ibiciro` varchar(23) NOT NULL,
  `Ingano` varchar(23) NOT NULL,
  `umurenge` varchar(32) NOT NULL,
  `terefone` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `amazina`, `Ibicuruzwa`, `Ibiciro`, `Ingano`, `umurenge`, `terefone`) VALUES
(5, 'kazungu', 'rice', '800frw', '67kg', 'kayonza', '0789655443'),
(7, 'banana', 'beans', '400frw', '65kg', 'ngoma', '078543326'),
(8, 'gemes', 'imyumbati', '800frw', '76kg', 'bugesera', '07896543'),
(9, 'felex', 'ibijumba', '500frw', '67kg', 'ngoma', '07896543'),
(10, 'muragijimana', 'ibisheke', '699frw', '768kg', 'rusizi', '078965432');

-- --------------------------------------------------------

--
-- Table structure for table `umuguzi`
--

CREATE TABLE `umuguzi` (
  `id` int(16) NOT NULL,
  `amazina` varchar(23) NOT NULL,
  `ibanga` varchar(65) NOT NULL,
  `emeri` varchar(34) NOT NULL,
  `terefone` varchar(212) NOT NULL,
  `umurenge` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umuguzi`
--

INSERT INTO `umuguzi` (`id`, `amazina`, `ibanga`, `emeri`, `terefone`, `umurenge`) VALUES
(1, 'janvier', '444', 'nn@gmail.com', '0987765', 'kayonza'),
(2, 'ff', '1234', 'ssd@gmail.com', '09876', 'burera'),
(3, 'NNNH', '', 'XXXX@Gmail.com', '078654', 'gisagara'),
(4, 'fff', 'Murag345J', 'ff@gmail.com', '666', 'kayonza'),
(5, 'google', 'Aa123456', 'janvier@gmail.com', '5456778888', 'bugesera');

-- --------------------------------------------------------

--
-- Table structure for table `umuhinzi`
--

CREATE TABLE `umuhinzi` (
  `id` int(23) NOT NULL,
  `amazina` varchar(23) NOT NULL,
  `ibanga` varchar(34) NOT NULL,
  `emeri` varchar(222) NOT NULL,
  `terefone` varchar(222) NOT NULL,
  `umurenge` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umuhinzi`
--

INSERT INTO `umuhinzi` (`id`, `amazina`, `ibanga`, `emeri`, `terefone`, `umurenge`) VALUES
(1, 'janvier', '222', 'mu@ww.com', '5678', 'ngoma'),
(6, 'ange', '333', 'mu@gmail.com', '078966', 'ngoma'),
(7, 'nshuti', '123tr', 'hhj@gmail.com', '09877', 'ngoma'),
(8, 'hggg', 'ass', 'ssss@gmail.com', 'sss', 'ngoma'),
(9, 'hello', 'Murag354J', 'FCGF@GMAIL.COM', '666', 'kayonza'),
(10, '555', '55', 'SSD@GMAIL.COM', '655', 'ngoma'),
(11, 'FFF', 'Murag345J', 'sgdf@gmail.com', '87654e', 'ngoma'),
(12, 'xxx', 'ddd', 'ddd@gmail.com', '56', 'ngoma'),
(13, 'jhg', '1', 'sss@gmail.com', '45787', 'kayonza'),
(14, 'HELLO', 'ZZ', 'SS@GMAIL.COM', '89900', 'ngoma'),
(15, 'BABA', 'Murag345J', 'HHH@GMAIL.COM', '9876', 'kayonza'),
(16, 'muragijimana', 'MUra1234', 'janvier@gmail.com', '09898', 'ngoma'),
(17, 'hello', 'MUrag1234', 'janvier@gmail.com', '078453', 'bugesera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umuguzi`
--
ALTER TABLE `umuguzi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umuhinzi`
--
ALTER TABLE `umuhinzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `umuguzi`
--
ALTER TABLE `umuguzi`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `umuhinzi`
--
ALTER TABLE `umuhinzi`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
