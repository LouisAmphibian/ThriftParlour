-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 08:35 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

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
  `CATERGORY` varchar(40) NOT NULL,
  PRIMARY KEY (`CUSTOMER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `CUSTOMER_SURNAME`, `CUSTOMER_EMAIL`, `DATE_OF_BIRTH`, `COUNTRY`, `PHONE_NUMBER`, `PASSWORD`, `CATERGORY`) VALUES
(5, 'Vanessa', 'Ndlovu', 'ayandamantshinga30@gmail.com', '2024-05-25', '', 0, 'hhhshhs', ''),
(4, 'dfdfhh', 'rrrd', 'dffddkk', '2000-03-02', '', 0, 'ffgfhhhh', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
