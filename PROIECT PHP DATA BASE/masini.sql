-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 07:55 AM
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
-- Database: `masini`
--

-- --------------------------------------------------------

--
-- Table structure for table `masini_coloane`
--

CREATE TABLE `masini_coloane` (
  `ID_masina` int(11) NOT NULL,
  `Denumire` varchar(25) NOT NULL,
  `Tip` int(11) NOT NULL,
  `Producator` varchar(25) NOT NULL,
  `Pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masini_coloane`
--

INSERT INTO `masini_coloane` (`ID_masina`, `Denumire`, `Tip`, `Producator`, `Pret`) VALUES
(2, 'Mercedes E', 3, 'Mercedes', 16000),
(3, 'Tayota', 5, 'Japonia', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `Id_tip` int(11) NOT NULL,
  `Tipul` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`Id_tip`, `Tipul`) VALUES
(1, ''),
(2, 'Cupe'),
(3, 'Universal'),
(4, 'Sport'),
(5, 'Mini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masini_coloane`
--
ALTER TABLE `masini_coloane`
  ADD PRIMARY KEY (`ID_masina`),
  ADD KEY `Tip` (`Tip`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`Id_tip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masini_coloane`
--
ALTER TABLE `masini_coloane`
  MODIFY `ID_masina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `Id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `masini_coloane`
--
ALTER TABLE `masini_coloane`
  ADD CONSTRAINT `masini_coloane_ibfk_1` FOREIGN KEY (`Tip`) REFERENCES `tip` (`Id_tip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
