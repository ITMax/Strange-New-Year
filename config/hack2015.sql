-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2015 г., 06:34
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `hack2015`
--

-- --------------------------------------------------------

--
-- Структура таблицы `personages`
--

CREATE TABLE IF NOT EXISTS `personages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `personages`
--

INSERT INTO `personages` (`id`, `name`) VALUES
(1, 'Santa'),
(2, 'Elf'),
(3, 'Programmer'),
(4, 'Deer Rapper'),
(5, 'Snowman'),
(6, 'BigFoot');

-- --------------------------------------------------------

--
-- Структура таблицы `saves`
--

CREATE TABLE IF NOT EXISTS `saves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `personages1` varchar(10) NOT NULL,
  `personages2` varchar(10) NOT NULL,
  `coins1` int(11) NOT NULL,
  `coins2` int(11) NOT NULL,
  `energy1` varchar(20) NOT NULL,
  `energy2` int(11) NOT NULL,
  `hp1` varchar(20) NOT NULL,
  `hp2` int(11) NOT NULL,
  `x1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `level`, `coins`, `reg_date`, `ip`) VALUES
(1, 'fedotom2', 'Max', 'fedotom2@gmail.com', 'hack2015_202cb962ac59075b964b07152d234b70', 0, 0, '2015-12-12', '127.0.0.1'),
(2, 'yehor', 'Yehor', 'yeh@gmail.com', 'hack2015_202cb962ac59075b964b07152d234b70', 0, 0, '2015-12-12', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
