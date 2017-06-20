-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 07:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_table`
--

CREATE TABLE `search_table` (
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_table`
--

INSERT INTO `search_table` (`Name`, `Surname`) VALUES
('Kunj', 'Choksi'),
('Kunj', 'Patel'),
('Kunj', 'Tribiyanni'),
('Joseph', 'Scofield'),
('Raj', 'Choksi'),
('Johny', 'Depp'),
('Hitman', 'Hitlet'),
('Khooni', 'Ganja'),
('Shaitani', 'Satan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
