-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 09:43 PM
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
-- Database: `firma`
--

-- --------------------------------------------------------

--
-- Table structure for table `informatycy_ponizej_roku_1975`
--

CREATE TABLE `informatycy_ponizej_roku_1975` (
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `informatycy_ponizej_roku_1975`
--

INSERT INTO `informatycy_ponizej_roku_1975` (`imie`, `nazwisko`, `pensja`) VALUES
('jon', 'sdf', 3000),
('sadf', 'xcvz', 2222),
('sdafxcz', 'bvdfxc', 3221),
('cxzv', 'yvfc', 1000),
('asdxzc', 'cgvcx', 21212),
('saxzcgh', 'zxcgsad', 6442),
('cxxcbxcv', 'yhgfd', 4211),
('sadzxcsdtg', 'asyhfgvc', 7655),
('asdfsdasdag', 'xcvbzxcvr', 2313),
('zxcedsrt', 'dasfhvcxz', 5231);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
