-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 03:48 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thriftparlour`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ADMIN_ID` int NOT NULL AUTO_INCREMENT,
  `ADMIN_USERNAME` varchar(30) NOT NULL,
  `ADMIN_EMAIL` varchar(40) NOT NULL,
  `ADMIN_PASSWORD` varchar(30) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

DROP TABLE IF EXISTS `tblcustomer`;
CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `CUSTOMER_ID` int NOT NULL AUTO_INCREMENT,
  `CUSTOMER_NAME` varchar(20) NOT NULL,
  `CUSTOMER_SURNAME` varchar(20) NOT NULL,
  `CUSTOMER_EMAIL` varchar(40) NOT NULL,
  `DATE_OF_BIRTH` date DEFAULT NULL,
  `COUNTRY` varchar(40) NOT NULL,
  `PHONE_NUMBER` int NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  PRIMARY KEY (`CUSTOMER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
CREATE TABLE IF NOT EXISTS `tblorder` (
  `ORDER_ID` int NOT NULL AUTO_INCREMENT,
  `QUANTITY` int NOT NULL,
  `TO_STREET` varchar(30) NOT NULL,
  `TO_CITY` varchar(30) NOT NULL,
  `TO_ZIP` int NOT NULL,
  `ORDER_DATE` date DEFAULT NULL,
  `CUSTOMER_ID` int DEFAULT NULL,
  `PRODUCT_ID` int DEFAULT NULL,
  PRIMARY KEY (`ORDER_ID`),
  KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  KEY `PRODUCT_ID` (`PRODUCT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `PRODUCT_ID` int NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(30) NOT NULL,
  `QUANTITY` int NOT NULL,
  `PRODUCT_DESCRIPTION` varchar(100) NOT NULL,
  `PRODUCTY_CATEGORY` varchar(60) NOT NULL,
  `PRODUCT_PRICE` decimal(10,2) NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblshoppingcart`
--

DROP TABLE IF EXISTS `tblshoppingcart`;
CREATE TABLE IF NOT EXISTS `tblshoppingcart` (
  `TOTAL_AMOUNT` int DEFAULT NULL,
  `QUANTITY` int DEFAULT NULL,
  `PRODUCT_ID` int DEFAULT NULL,
  KEY `PRODUCT_ID` (`PRODUCT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
