-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 08 2020 г., 21:17
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Max', 'Cool!'),
(2, 'Den', 'Good!'),
(9, 'Smith', 'OK'),
(15, 'Admin', 'go ahead!11');

-- --------------------------------------------------------

--
-- Структура таблицы `feedgood`
--

CREATE TABLE `feedgood` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedgood`
--

INSERT INTO `feedgood` (`id`, `id_good`, `name`, `feedback`) VALUES
(1, 1, 'Cat', 'Good mouse!'),
(2, 2, 'Mouse', 'Bad cat!');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `shortDescription`, `fullDescription`, `img`, `price`) VALUES
(1, 'mouse', 'Product short description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, odit!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores cum cupiditate deserunt earum ex mollitia nostrum, officiis, placeat, quae sint tempore tenetur veniam? Accusamus aliquid aperiam consequuntur culpa deserunt dolorem illo incidunt molestias nihil non numquam placeat possimus praesentium quam quis, quisquam, ratione reiciendis repudiandae sapiente ullam unde voluptatum!', 'mysh.jpg', 1000),
(2, 'Cat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi cum, doloremque nam necessitatibus quae quia sapiente voluptatum. Ab adipisci autem laudantium mollitia, necessitatibus omnis quos sequi tempore. Corporis, iure?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores debitis delectus est eum, fugiat, harum illo inventore iusto laudantium necessitatibus neque nihil officia quas quasi qui quidem rerum suscipit tempora totam ullam vitae voluptatem. Ab earum fuga labore libero qui quibusdam quos tempora. Beatae error officiis sit tenetur voluptates.', 'cat.jpg', 2000);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedgood`
--
ALTER TABLE `feedgood`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `feedgood`
--
ALTER TABLE `feedgood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
