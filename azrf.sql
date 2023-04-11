-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 28 2022 г., 01:32
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `azrf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bases`
--

CREATE TABLE `bases` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bases`
--

INSERT INTO `bases` (`id`, `name`, `photo`, `link`) VALUES
(1, 'Hakassia', 'img/hakassia.png', 'link/hak.xlsx'),
(2, 'Yakutia', 'img/yakutia.png', 'link/hak.xlsx'),
(3, 'Tyva', 'img/tv.png', 'link/hak.xlsx');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `phone`, `password`) VALUES
(12, 'Тест ФИО', 'Тест ПОЧТА', 'Тест НОМЕР ТЕЛЕ', ''),
(13, 'name', 'mail', '123', ''),
(14, 'kate', 'mailru', '57394', ''),
(15, 'guhuighi', 'pjyjfl', 'jojo', ''),
(16, 'bckjdsjk', 'jirkfkelrnjf', '2387972', ''),
(17, 'bckjdsjk', 'jirkfkelrnjf', '2387972', ''),
(18, 'bckjdsjk', 'jirkfkelrnjf', '2387972', ''),
(19, 'bckjdsjk', 'jirkfkelrnjf', '2387972', ''),
(20, 'hkghkgh', 'kjhkh', 'lhlhj', ''),
(21, 'gkjhkj', 'bjkbjkb', '69689', ''),
(22, 'павпва', 'авпавп', '765756', ''),
(23, 'gfdssfdds', 'fdsfsd', '32432432', ''),
(25, '1', '2', '3', 'a87ff679a2f3e71d9181a67b7542122c'),
(26, 'Жукова Екатерина Николаевна', 'crashik05@gmail.com', '79131724627', '1416ab337f8fff36e75b489a1cfc90f2'),
(27, 'ewrre', 'erw', '2314', 'edd407e7a5c6cd76b8fc6a7435b7e316'),
(28, 'fds', 'fsd', 'fsd', '838ece1033bf7c7468e873e79ba2a3ec'),
(29, 'fds', 'dfs', 'df', '36eba1e1e343279857ea7f69a597324e'),
(30, 'rfev', 'refv', 'ref', '18389a4a9ad5795744699cff0ba66c15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bases`
--
ALTER TABLE `bases`
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
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
