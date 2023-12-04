-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2023 г., 21:27
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `PP_sql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `collective`
--

CREATE TABLE `collective` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `collective`
--

INSERT INTO `collective` (`id`, `first_name`, `last_name`, `experience`, `img`) VALUES
(1, 'Екатерина', 'Смирнова', 'Пауэрлифтинг 10', '1.jpg'),
(2, 'Мария ', 'Соколова', 'Легкая атлетика 8', '2.jpg'),
(3, 'Ирина', 'Васильева', 'Аэробика 5', '4.jpg'),
(4, 'Наталья', 'Павлова', 'Директор 15', '5.jpg'),
(5, 'Татьяна', 'Горбунова', 'Хоккей 11', '6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `birthday`, `password`) VALUES
(1, 'admin', 'admin', '12345678', '2023-06-07', '123123'),
(2, '2', '2', '222222222222', '2023-06-09', '2'),
(3, '2', '2', '222222222222', '2023-06-03', '2'),
(4, 'игорь', 'линков', '123456889', '2023-06-10', '321321'),
(5, '2', '2', '222222222222', '2023-11-02', '3'),
(7, 'a', 'a', '2', '2023-11-30', 'a');

-- --------------------------------------------------------

--
-- Структура таблицы `workout`
--

CREATE TABLE `workout` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workout`
--

INSERT INTO `workout` (`id`, `first_name`, `last_name`, `date`) VALUES
(148, 'admin', 'admin', '2023-12-05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `collective`
--
ALTER TABLE `collective`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `collective`
--
ALTER TABLE `collective`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
