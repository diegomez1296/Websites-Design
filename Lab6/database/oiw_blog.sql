-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2018, 21:49
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
  `comm_date` date NOT NULL,
  `comm_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`comm_id`, `comm_nick`, `comm_email`, `comm_text`, `comm_art_id`, `comm_date`, `comm_user_id`) VALUES
(1, 'Administrator', 'admin.oiw_blog@oiw_blog.pl', 'MÃ³j pierwszy komentarz na nowym blogu.', 1, '2018-10-29', 4),
(2, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', 1, '0000-00-00', 3),
(3, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '0000-00-00', 0),
(4, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29', 0),
(5, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29', 0),
(6, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy komentarz', -1, '2018-10-29', 0),
(7, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30', 0),
(8, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30', 0),
(9, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom', -1, '2018-10-30', 0),
(10, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30', 0),
(11, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30', 0),
(12, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30', 0),
(13, 'diegomez', 'rlukasz1996@gmail.com', 'Testowy kom 2', -1, '2018-10-30', 0),
(14, 'diegomez', 'rlukasz1996@gmail.com', 'ters', -1, '2018-10-30', 0),
(15, 'diegomez', 'rlukasz1996@gmail.com', 'ters', -1, '2018-10-30', 0),
(16, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(17, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(18, 'ddf', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(19, 'diegomez', 'rlukasz1996@gmail.com', 'WRT', -1, '2018-10-30', 0),
(20, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30', 0),
(21, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30', 0),
(22, 'diegomez', 'rlukasz1996@gmail.com', 'WERT', -1, '2018-10-30', 0),
(23, 'diegomez', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(24, '123', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(25, '123', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(26, 'diegomez', 'rlukasz1996@gmail.com', 'Nowy test', -1, '2018-10-30', 0),
(27, 'diegomez', 'rlukasz1996@gmail.com', '123', -1, '2018-10-30', 0),
(28, 'diegomez', 'rlukasz1996@gmail.com', '432', -1, '2018-10-30', 0),
(29, 'diegomez', 'rlukasz1996@gmail.com', 'Bardzo fajny blog. (Komentarz dodany poprzez okienko pod artyku?em)', 1, '2018-10-30', 2),
(30, '45', 'rlukasz1996@hotmail.com', '45', -1, '2018-10-30', 0),
(31, 'Annonimous', 'anno@gmail.com', 'Hello World!', 2, '2018-10-30', 1),
(32, 'diegomez', 'rlukasz1996@gmail.com', 'Bardzo ciekawe opowiadanie ;)', 1, '2018-11-01', 4),
(33, 'test', 'rlukasz1996@gmail.com', 'test', -1, '2018-11-01', 0),
(34, 'test', 'rlukasz1996@gmail.com', 'test', -1, '2018-11-01', 0),
(35, 'diegomez', 'rlukasz1996@gmail.com', 'Bardzo ciekawy blog ;)', 2, '2018-11-01', 3),
(36, 'diegomez', 'rlukasz1996@gmail.com', 'Mo?e teraz mÃ³j komentarz wniesie co? ciekawego.', 2, '2018-11-01', 2),
(37, 'diegomez', 'rlukasz1996@gmail.com', 'Jeszcze jeden komentarz.', 1, '2018-11-01', 1),
(39, 'Test', 'test@gmail.com', 'test', -1, '2018-11-08', 0),
(40, 'Administrator2', 'Administrat2or@gmail.com', 'Random12', -2, '2015-01-02', 0),
(42, 'Admin', 'admin', 'Komentarz dodany z panelu admina', 1, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_nick` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '0-Admin;1-Mod;2-User;3-Guest',
  `user_registerDate` date NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `user_nick`, `user_email`, `user_password`, `user_type`, `user_registerDate`, `user_avatar`) VALUES
(1, 'Administrator', 'admin.oiw_blog@oiw_blog.pl', 'Administrator123', 0, '2018-10-29', '../images/MyPhoto.jpg'),
(2, 'Moderator', 'moder@oiw2018.pl', 'Moder123', 1, '2018-11-16', ''),
(3, 'User', 'user@oiw2018.pl', 'User123', 3, '2018-11-14', ''),
(4, 'VIP', 'vip@oiw2018.pl', 'vip123', 3, '2018-11-15', '');

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
MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
