-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 11:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `ID` int(11) NOT NULL,
  `Tip` varchar(25) NOT NULL,
  `Producator` varchar(25) NOT NULL,
  `Nume` varchar(25) NOT NULL,
  `Pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`ID`, `Tip`, `Producator`, `Nume`, `Pret`) VALUES
(1, 'Mini', 'Apple', 'Iphone11', 20000),
(2, 'Normal', 'Samsung', 'SamsungS11', 14000),
(3, 'Normal', 'Samsung', 'Samsung Galaxy 2', 10000),
(4, 'Mini', 'Apple', 'Iphone 8 mini', 10000),
(5, 'Normal', 'Nokia', 'Nokia3030', 25000),
(6, 'Mini', 'Xiomi', 'Xiomi redmi note7', 7000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
