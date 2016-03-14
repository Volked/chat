-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2016 г., 00:24
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ip` int(11) NOT NULL,
  `login` varchar(155) COLLATE utf8_bin NOT NULL,
  `password` varchar(155) COLLATE utf8_bin NOT NULL,
  `color` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `ip`, `login`, `password`, `color`) VALUES
(2, 0, 'admin', '9450ab342331c4e7d465fc69c046415a', ''),
(6, 0, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `time`, `message`, `uid`) VALUES
(0, 1457220290, 'толя педик', 1),
(0, 1457386347, 'b', 1),
(0, 1457386352, 'bsf', 1),
(0, 1457386354, 'asdfasdfa', 1),
(0, 1457386716, 'asdf', 1),
(0, 1457728368, '1', 1),
(0, 1457729669, '1', 1),
(0, 1457729707, '1', 1),
(0, 1457729718, '1', 1),
(0, 1457729746, '1', 1),
(0, 1457729776, '1', 1),
(0, 1457729791, '1', 1),
(0, 1457730647, '1', 1),
(0, 1457731314, '1', 1),
(0, 1457731322, '1', 1),
(0, 1457731363, '1', 1),
(0, 1457732082, 'asdf', 1),
(0, 1457732107, 'asdf', 1),
(0, 1457733149, 'asdf', 1),
(0, 1457733677, '123', 1),
(0, 1457733683, '123', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
