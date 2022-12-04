-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2022 г., 14:23
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `contests_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contests`
--

CREATE TABLE `contests` (
  `id` int(11) NOT NULL,
  `title` text,
  `descr` varchar(3000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `email_forganizer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contests`
--

INSERT INTO `contests` (`id`, `title`, `descr`, `date`, `status`, `email_forganizer`) VALUES
(1, 'Спасаем окружающую среду', 'В рамках данной тематики участники должны предоставить работу, отражающую возможности человечества, направленные на созидание и улучшение благосостояния окружающей среды.\r\nВ качестве доказательства о проделанной работе участник должны предоставить видеоматериал в формате .avi или .mp4, или текстовые отчеты в формате .docx или .pdf.\r\nПризовой фонд составляет 200 000 рублей, распределяемые в равных долях между лучшими пятью участниками.', '2007-03-20', 'Приём заявок', 'temp@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `lastName`, `email`, `password`, `online`) VALUES
(1236, 'Сергей', 'Кличко', 'Львович', 'temp@mail.ru', 'root', 0),
(1237, 'asdfad', 'asd', 'sdfadfasdfasdfasdfasdf', 'sdfs@fasdfasdfasdfasdfasffffffff', 'fffff', 0),
(1238, 'asdfad', 'sdfsdfg', 'sgsdgsdg', 'sdfs@fasdfasdfasdfasdfasffffffff', 'asdfasfasf', 0),
(1239, 'Коробкин', 'Влад', 'Алексеевич', 'vlad@mail.ru', 'root', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contests`
--
ALTER TABLE `contests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
