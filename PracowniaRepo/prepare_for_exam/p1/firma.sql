-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lut 2023, 09:00
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `informatycy_ponizej_roku_1975`
--

CREATE TABLE `informatycy_ponizej_roku_1975` (
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `informatycy_ponizej_roku_1975`
--

INSERT INTO `informatycy_ponizej_roku_1975` (`imie`, `nazwisko`, `pensja`) VALUES
('Jan', 'Smith', 3000),
('Jan', 'Smith', 3000),
('Jan', 'Smith', 3000),
('asd', 'asd', 3500),
('asd', 'asd', 3500);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sekretarki`
--

CREATE TABLE `sekretarki` (
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `sekretarki`
--

INSERT INTO `sekretarki` (`imie`, `nazwisko`, `pensja`) VALUES
('Janina', 'Bosman', 3000),
('Janina', 'Bosman', 3000),
('Adam', 'Karas', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
