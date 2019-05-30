-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2019 г., 22:59
-- Версия сервера: 5.7.25
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `new`
--

CREATE TABLE `new` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `new`
--

INSERT INTO `new` (`id`, `name`) VALUES
(1, 'Будні'),
(2, 'Вихідні'),
(5, 'Канікули'),
(6, 'Навчання'),
(7, 'Практика'),
(8, 'Діма');

-- --------------------------------------------------------

--
-- Структура таблицы `newnote`
--

CREATE TABLE `newnote` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `text` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newnote`
--

INSERT INTO `newnote` (`id`, `title`, `category`, `text`) VALUES
(2, 'Перша чверть', 'Навчання', 'Старт 3 вересня 2019, оскільки перший день осені цього року припаде на суботу. Навчання, швидше за все, триватиме до 26 жовтня 2019!!!'),
(3, 'Друга чверть', 'Навчання', 'З 5 листопада 2018 року до 29 грудня 2018 року (це день є робочою суботою через перенесення вихідного на 31.12.2018 року – понеділок)'),
(4, 'Зимові канікули', 'Канікули', 'З 30 грудня 2018 року по 13 січня 2019 року'),
(5, 'Весняні канікули', 'Канікули', 'З 25 березня 2019 року до 7 квітня 2019 року!'),
(6, 'Перша чверть', 'Будні', 'hjklllll1'),
(8, 'апролд', 'Виберіть категорію', 'мвамам'),
(9, 'апролд', 'Виберіть категорію', 'мвамам'),
(10, 'nothing', 'Виберіть категорію', 'vbh'),
(11, 'Практика', 'Навчання', 'Сьогодні останній день! Вааааааааааааааааааа'),
(12, 'Скоро', 'Канікули', 'Ще трохиии, ще місяць((('),
(13, 'практика', 'Навчання', 'Сьогодні закін'),
(14, 'кінець', 'Практика', '31 05 кінець'),
(15, 'Діма лох (молодець чуть-чуть)', 'Діма', 'Сьогодні я зрозуміла що Діма 50% ЛОХ)');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newnote`
--
ALTER TABLE `newnote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `new`
--
ALTER TABLE `new`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `newnote`
--
ALTER TABLE `newnote`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
