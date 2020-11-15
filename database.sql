-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inventory
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `inventory`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

--
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `wiki` nvarchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Items`
--

/*LOCK TABLES `Items` WRITE;*/
/*!40000 ALTER TABLE `Items` DISABLE KEYS */;
INSERT INTO `Items` VALUES (1,'Acetylacetone','Alfa Aeser',100,50,'<a href="https://en.wikipedia.org/wiki/Acetylacetone" target="_blank">Acetylacetone</a>');
INSERT INTO `Items` VALUES (2,'Benzoic Acid LR','SDFCL',200,50,'<a href="https://en.wikipedia.org/wiki/Benzoic_acid" target="_blank">Benzoic Acid</a>');
INSERT INTO `Items` VALUES (3,'Benzoic acid','Sigma-Aldrich',300,50,'<a href="https://en.wikipedia.org/wiki/Benzoic_acid" target="_blank">Benzoic Acid</a>');
INSERT INTO `Items` VALUES (4,'Camphorsulfonic acid','Sigma-Aldrich',300,50,'<a href="https://en.wikipedia.org/wiki/Camphorsulfonic_acid" target="_blank">Camphorsulfonic Acid</a>');
INSERT INTO `Items` VALUES (5,'Dioctyl sulfosuccinate sodium salt','Sigma-Aldrich',300,50,'<a href="https://en.wikipedia.org/wiki/Docusate" target="_blank">Dioctyl sulfosuccinate sodium salt</a>');
INSERT INTO `Items` VALUES (6,'Ethanediol LR','SDFCL',400,50,'<a href="https://en.wikipedia.org/wiki/Ethylene_glycol" target="_blank">Ethanediol</a>');
INSERT INTO `Items` VALUES (7,'Glass Wool','Loba Chemie',400,50,'<a href="https://en.wikipedia.org/wiki/Glass_wool" target="_blank">Glass wool</a>');
INSERT INTO `Items` VALUES (8,'Hexanoic acid','Alfa Aeser',500,50,'<a href="https://en.wikipedia.org/wiki/Caproic_acid" target="_blank">Hexanoic Acid</a>');
INSERT INTO `Items` VALUES (9,'Lauric acid','TCI',400,50,'<a href="https://en.wikipedia.org/wiki/Lauric_acid" target="_blank">Lauric Acid</a>');
INSERT INTO `Items` VALUES (10,'Oxalic acid dihydrate','Merck',200,50,'<a href="https://en.wikipedia.org/wiki/Oxalic_acid" target="_blank">Oxalic Acid</a>');
/*!40000 ALTER TABLE `Items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'Khyati','Agarwal','test@gmail.com','2020-11-01 22:17:05'),(2,'Jai','Luthra','test2@gmail.com','2020-11-01 22:17:32');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02  3:51:13

