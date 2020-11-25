-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2020 at 11:50 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.0.33-29+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;



-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

DROP TABLE IF EXISTS `Cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `Cart` (
  `CartId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `ChemName` text NOT NULL,
  `ChemId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `company` varchar(100) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `name`, `company`, `quantity`, `price`) VALUES
(1, '<a href=\"https://en.wikipedia.org/wiki/Acetylacetone\" target=\"_blank\">Acetylacetone</a>', 'Alfa Aeser', 100, 50),
(2, '<a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a>', 'SDFCL', 194, 50),
(3, '<a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a>', 'Sigma-Aldrich', 291, 50),
(4, '<a href=\"https://en.wikipedia.org/wiki/Camphorsulfonic_acid\" target=\"_blank\">Camphorsulfonic Acid</a>', 'Sigma-Aldrich', 300, 50),
(5, '<a href=\"https://en.wikipedia.org/wiki/Docusate\" target=\"_blank\">Dioctyl sulfosuccinate sodium salt</a>', 'Sigma-Aldrich', 300, 50),
(6, '<a href=\"https://en.wikipedia.org/wiki/Ethylene_glycol\" target=\"_blank\">Ethanediol</a>', 'SDFCL', 400, 50),
(7, '<a href=\"https://en.wikipedia.org/wiki/Glass_wool\" target=\"_blank\">Glass wool</a>', 'Loba Chemie', 400, 50),
(8, '<a href=\"https://en.wikipedia.org/wiki/Caproic_acid\" target=\"_blank\">Hexanoic Acid</a>', 'Alfa Aeser', 500, 50),
(9, '<a href=\"https://en.wikipedia.org/wiki/Lauric_acid\" target=\"_blank\">Lauric Acid</a>', 'TCI', 400, 50),
(10, '<a href=\"https://en.wikipedia.org/wiki/Oxalic_acid\" target=\"_blank\">Oxalic Acid Dihydrate</a>', 'Merck', 200, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

DROP TABLE IF EXISTS `Orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `Orders` (
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `OrderDetails` text NOT NULL,
  `Remarks` text NOT NULL,
  `Status` text DEFAULT NULL,
  `Admin_Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OrderId`, `UserId`, `OrderDetails`, `Remarks`, `Status`, `Admin_Remarks`) VALUES
(17, 1, 'chemicalId: <a href=\"https://en.wikipedia.org/wiki/Camphorsulfonic_acid\" target=\"_blank\">Camphorsulfonic Acid</a> quantity: 3 price: 50', 'Remarks...', 'Rejected', 'Your order is rejected. Please order again after 10 days.'),
(18, 1, 'chemicalId: <a href=\"https://en.wikipedia.org/wiki/Docusate\" target=\"_blank\">Dioctyl sulfosuccinate sodium salt</a> quantity: 2 price: 50', 'Remarks...', 'Approved', 'Thanks for Ordering'),
(19, 1, 'chemicalId: <a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a> quantity: 1 price: 50', 'Remarks...', 'Rejected', 'Your order is rejected. Please order again after 10 days.'),
(20, 1, 'chemicalId: <a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a> quantity: 1 price: 50', 'Remarks...', 'Approved', 'Thanks for Ordering'),
(21, 1, 'chemicalId: 2 name: <a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a> quantity: 2 price: 50', 'Remarks...', 'Approved', 'Thanks for Ordering'),
(22, 1, 'chemicalId: 3 name: <a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a> quantity: 1 price: 50', 'Remarks...', 'Approved', 'Thanks for Ordering'),
(23, 1, 'chemicalId: 3 name: <a href=\"https://en.wikipedia.org/wiki/Benzoic_acid\" target=\"_blank\">Benzoic Acid</a> quantity: 1 price: 50', 'Remarks...', 'Approval pending', 'Your request will be approved soon');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contact` varchar(15) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `firstname`, `lastname`, `email`, `reg_date`, `contact`, `Address`) VALUES
(1, 'Khyati', 'Agarwal', 'test@gmail.com', '2020-11-25 18:12:08', '9876543212', 'Flat no. 312, Sector 83, Faridabad, Haryana'),
(2, 'Jai', 'Luthra', 'test2@gmail.com', '2020-11-01 22:17:32', '9182736456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
