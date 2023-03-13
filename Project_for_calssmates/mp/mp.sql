-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Mar 2023, 18:57
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fighters`
--

CREATE TABLE `fighters` (
  `nick` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `knockout` int(11) NOT NULL,
  `submision` int(11) NOT NULL,
  `strinking_accuracy` int(11) NOT NULL,
  `takedown_accuracy` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `body` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `img_url` text NOT NULL,
  `weight_class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `fighters`
--

INSERT INTO `fighters` (`nick`, `name`, `surname`, `win`, `draw`, `lose`, `knockout`, `submision`, `strinking_accuracy`, `takedown_accuracy`, `head`, `body`, `leg`, `img_url`, `weight_class`) VALUES
('THE ASSASSIN BABY', 'Brandon', 'Moreno', 21, 6, 2, 5, 11, 41, 45, 75, 15, 10, 'https://dmxg5wxfqgb4u.cloudfront.net/2023-01/MORENO_BRANDON_BELT.png', 'Flyweight'),
('', 'Islam', 'Makhachev', 24, 1, 0, 4, 11, 59, 62, 69, 27, 4, 'https://a.espncdn.com/combiner/i?img=/i/headshots/mma/players/full/3332412.png&w=350&h=254', 'Lightweight'),
('POATAN', 'Alex', 'Pereira', 7, 0, 1, 6, 2, 60, 100, 47, 36, 17, 'https://a.espncdn.com/combiner/i?img=/i/headshots/mma/players/full/4705658.png', 'Middleweight'),
('SWEET DREAMS', 'Jamahal', 'Hill', 12, 0, 1, 7, 2, 55, 53, 67, 25, 8, 'https://dmxg5wxfqgb4u.cloudfront.net/2023-01/HILL_JAMAHAL_BELT.png', 'Light_Heavyweight'),
('BONES', 'Jon', 'Jones', 27, 0, 1, 10, 7, 58, 45, 47, 24, 29, 'https://dmxg5wxfqgb4u.cloudfront.net/2023-03/JONES_JON_BELT_03_04.png', 'Heavyweight');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
