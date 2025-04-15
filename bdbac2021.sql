-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 05:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdbac2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesure`
--

CREATE TABLE `mesure` (
  `idstation` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `saison` varchar(9) NOT NULL,
  `temperature` decimal(5,2) NOT NULL,
  `pluie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesure`
--

INSERT INTO `mesure` (`idstation`, `annee`, `saison`, `temperature`, `pluie`) VALUES
(60715, 2018, 'ete', 30.60, 24),
(60715, 2018, 'hiver', 13.50, 150),
(60715, 2018, 'printemps', 25.60, 80),
(60715, 2019, 'printemps', 30.66, 25),
(60731, 2018, 'ete', 33.60, 10),
(60731, 2018, 'hiver', 17.60, 100),
(60731, 2019, 'automne', 30.00, 11),
(60780, 2019, 'ete', 42.30, 0),
(60780, 2019, 'hiver', 16.60, 10);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `idstation` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`idstation`, `nom`, `ville`) VALUES
(60715, 'carthage', 'tunis'),
(60731, 'enfidha-aéroport', 'sousse'),
(60780, 'el-borma', 'tataouine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mesure`
--
ALTER TABLE `mesure`
  ADD PRIMARY KEY (`idstation`,`annee`,`saison`),
  ADD KEY `idstation` (`idstation`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`idstation`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mesure`
--
ALTER TABLE `mesure`
  ADD CONSTRAINT `fk` FOREIGN KEY (`idstation`) REFERENCES `station` (`idstation`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
