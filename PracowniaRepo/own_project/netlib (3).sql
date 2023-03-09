-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Mar 2023, 02:35
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
-- Baza danych: `netlib`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`category`) VALUES
('horror'),
('sci-fi'),
('dramat'),
('sportowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `movie_id` text NOT NULL,
  `comment` text NOT NULL,
  `user_id` text NOT NULL,
  `add_date` datetime NOT NULL,
  `comment_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`movie_id`, `comment`, `user_id`, `add_date`, `comment_id`) VALUES
('Movie64077cdf9f5b3', 'asdf', 'user63ff71fga2v57', '2023-03-08 23:37:26', 'comment64090e26cd480'),
('Movie64077cdf9f5b3', 'xcvn', 'user63ff71fga2v57', '2023-03-08 23:37:44', 'comment64090e3807b80'),
('Movie64077cdf9f5b3', 'fdg', 'user63ff71fga4fs5', '2023-03-08 23:39:38', 'comment64090eaa952da'),
('Movie64077cdf9f5b3', 'zxcas234', 'user63ff71fga4fs5', '2023-03-08 23:41:21', 'comment64090f11eecc8');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movie`
--

CREATE TABLE `movie` (
  `vid_link` text NOT NULL,
  `decs` text NOT NULL,
  `movie_id` text NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `category` text NOT NULL,
  `add_date` date NOT NULL,
  `img_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `movie`
--

INSERT INTO `movie` (`vid_link`, `decs`, `movie_id`, `title`, `date`, `category`, `add_date`, `img_link`) VALUES
('https://sbchill.com/j65alwuyzmw4.html', 'asd', 'Movie640488074f9af', 'asd', '2023-04-01', 'dramat', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640488074f9af?_a=AAFIKDQ'),
('asdfsadf', 'sadfsadf', 'Movie640491cb5c519', 'asdfasdf', '2023-03-10', 'sportowy', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640491cb5c519?_a=AAFIKDQ'),
('asfasf', 'asfasf', 'Movie640494217d6b5', 'asdfasd', '2023-03-26', 'dramat', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640494217d6b5?_a=AAFIKDQ'),
('asdasdasdasdaszzxc', 'dasdasdasdasd', 'Movie6404960fe3ef7', 'dasdxzc', '2023-03-14', 'dramat', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie6404960fe3ef7?_a=AAFIKDQ'),
('asdasdasd', 'asdasdasdas', 'Movie640497f1dbeb4', 'sdagfasdfds', '2023-03-24', 'dramat', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640497f1dbeb4?_a=AAFIKDQ'),
('https://vidmoly.to/embed-auz5fa4ow89e.html', 'xcvzxcvbcxvzb', 'Movie64049b40cfd64', 'wdsdfsadf', '2023-03-22', 'sci-fi', '2023-03-05', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie64049b40cfd64?_a=AAFIKDQ'),
('https://vidmoly.to/embed-auz5fa4ow89e.html', 'dasdasd', 'Movie64062fc95ce89', 'asdasd', '2023-03-19', 'dramat', '2023-03-06', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie64062fc95ce89?_a=AAFIKDQ'),
('asdasd', 'asdasd', 'Movie640631cf15672', 'asdasd', '2023-03-16', 'sportowy', '2023-03-06', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640631cf15672?_a=AAFIKDQ'),
('sadfasdf', 'sadfsdf', 'Movie640632a798fca', 'sadfsadf', '2023-03-08', 'horror', '2023-03-06', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie640632a798fca?_a=AAFIKDQ'),
('asdasd', 'asdsad', 'Movie64077cdf9f5b3', 'asdas', '2023-03-22', 'horror', '2023-03-07', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie64077cdf9f5b3?_a=AAFIKDQ'),
('asdf', 'asdf', 'Movie64078efdf23b4', 'asdfasdfxzcvxczv', '2023-03-17', 'horror', '2023-03-07', 'https://res.cloudinary.com/djg4nn4ik/image/upload/Movie64078efdf23b4?_a=AAFIKDQ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `nick` text NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `user_id` text NOT NULL,
  `role` text NOT NULL,
  `picture` longblob NOT NULL,
  `picture_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`nick`, `mail`, `password`, `user_id`, `role`, `picture`, `picture_id`) VALUES
('admin', 'admin@admin.com', 'admin', 'user63ff71fga2v57', 'admin', '', ''),
('jan', 'jan@jan.com', 'jan', 'user63ff71fga4fs5', 'user', '', ''),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', '[value-5]', 0x5b76616c75652d365d, ''),
('dsaf', 'asdf', 'asdf', 'user64033ca57ccf4', 'user', '', ''),
('dsaf', 'asdf', 'asdf', 'user64033d6112edc', 'user', '', ''),
('dsaf', 'asdf', 'asdf', 'user64033d66bfc9e', 'user', '', ''),
('andrzej', 'andrzej', 'andrzej', 'user64033dbcd29cf', 'user', '', ''),
('andrzej', 'andrzej', 'andrzej', 'user64033e1fad033', 'user', '', ''),
('andrzej', 'andrzej', 'andrzej', 'user64033e6bf06ba', 'user', '', ''),
('asd', 'asd', 'asd', 'user64033e846027a', 'user', '', ''),
('asd', 'asd', 'asd', 'user64033eb948a19', 'user', '', ''),
('asdf', 'xczv', 'asdf', 'user64033edb15c39', 'user', '', ''),
('zxcv', 'zxcv', 'zxcv', 'user64033f1de2db1', 'user', '', ''),
('', 'df', 'fd', 'user64033f412f3f8', 'user', '', ''),
('cvbn', 'cvbn', 'cvbn', 'user6403402ef20ca', 'user', '', ''),
('gfjfjgh', 'zxcv', 'zxcv', 'user6403509ce6adf', 'user', '', ''),
('adfhasdffdcc', 'zxcv', 'zxcv', 'user640350ace6962', 'user', '', ''),
('sdafashgbnvb', 'zxcv', 'zxcv', 'user6403511ce508f', 'user', '', ''),
('sadfhghh', 'zxcv', 'zxcv', 'user6403512c6ce9c', 'user', '', ''),
('asdfsadf', 'sadfsadf', 'asdf', 'user6404b55f15323', 'user', '', ''),
('wert', 'wert@wert.com', 'wert', 'user6404b5ce1950a', 'user', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
