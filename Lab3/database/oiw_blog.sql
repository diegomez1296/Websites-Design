-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Paź 2018, 22:26
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `oiw_blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comm_id` int(11) NOT NULL,
  `comm_nick` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `comm_email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `comm_text` text COLLATE utf8_polish_ci NOT NULL,
  `comm_art_id` int(11) NOT NULL,
  `comm_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`comm_id`, `comm_nick`, `comm_email`, `comm_text`, `comm_art_id`, `comm_date`) VALUES
(1, 'Administrator', 'admin.oiw_blog@oiw_blog.pl', 'Mój pierwszy komentarz na nowym blogu.', 1, '2018-10-29'),
(2, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', 1, '0000-00-00'),
(3, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '0000-00-00'),
(4, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29'),
(5, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29'),
(6, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29'),
(7, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30'),
(8, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30'),
(9, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30'),
(10, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30'),
(11, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30'),
(12, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30'),
(13, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30'),
(14, 'diegomez', 'rlukasz1996@gmail.com', 'ters', -1, '2018-10-30'),
(15, 'diegomez', 'rlukasz1996@gmail.com', 'ters', -1, '2018-10-30'),
(16, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(17, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(18, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(19, 'diegomez', 'rlukasz1996@gmail.com', 'WRT', -1, '2018-10-30'),
(20, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30'),
(21, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30'),
(22, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30'),
(23, 'diegomez', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(24, '123', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(25, '123', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(26, 'diegomez', 'rlukasz1996@gmail.com', 'Nowy test', -1, '2018-10-30'),
(27, 'diegomez', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30'),
(28, 'diegomez', 'rlukasz1996@gmail.com', '432', -1, '2018-10-30'),
(29, 'diegomez', 'rlukasz1996@gmail.com', 'Bardzo fajny blog. (Komentarz dodany poprzez okienko pod artykułem)', 1, '2018-10-30'),
(30, '45', 'rlukasz1996@hotmail.com', '45', -1, '2018-10-30'),
(31, 'Annonimous', 'anno@gmail.com', 'Hello World!', 2, '2018-10-30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_nick` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '0-Admin;1-Mod;2-User;3-Guest',
  `user_registerDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `user_nick`, `user_email`, `user_password`, `user_type`, `user_registerDate`) VALUES
(1, 'Administrator', 'admin.oiw_blog@oiw_blog.pl', 'Administrator123', 0, '2018-10-29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
