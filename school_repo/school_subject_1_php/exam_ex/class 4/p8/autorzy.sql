-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 11:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autorzy`
--

CREATE TABLE `autorzy` (
  `autor` text NOT NULL,
  `ksiazka` text NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `autorzy`
--

INSERT INTO `autorzy` (`autor`, `ksiazka`, `cena`) VALUES
('Bonda_Katarzyna', 'asdfxcz', 55),
('Bonda_Katarzyna', 'aszxt', 29),
('Bonda_Katarzyna', 'nbutf', 26),
('Coben_Harlan', 'gbvn', 12),
('Coben_Harlan', 'sdfsdcxv', 24),
('Coben_Harlan', 'uyigh', 32),
('Link_Charlotte', 'asdfcxu', 214),
('Link_Charlotte', 'vjkgf', 76),
('Link_Charlotte', 'oiewr', 63),
('Nesbo_Jo', 'asdurty', 32),
('Nesbo_Jo', 'ooppp', 89),
('Nesbo_Jo', 'xcugh', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
