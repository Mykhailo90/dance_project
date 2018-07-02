-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 02 2018 г., 09:09
-- Версия сервера: 5.7.22
-- Версия PHP: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chilly`
--

-- --------------------------------------------------------

--
-- Структура таблицы `group_members`
--

CREATE TABLE `group_members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `group_members_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group_members`
--

INSERT INTO `group_members` (`id`, `first_name`, `last_name`, `group_members_id`) VALUES
(1, 'Михаил', 'Сарапий', 1),
(2, 'Оксана', 'Сарапий', 1),
(3, 'Василий', 'Вишняков', 2),
(4, 'Лана', 'Вишнякова', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `group_members_info`
--

CREATE TABLE `group_members_info` (
  `group_members_id` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `checking` int(11) DEFAULT '0',
  `sale` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group_members_info`
--

INSERT INTO `group_members_info` (`group_members_id`, `school`, `city`, `email`, `phone`, `foto`, `checking`, `sale`) VALUES
(1, 'Chilli-Dance studio', 'Kyiv', '0660330233@ukr.net', '+308730507755', 'http://www.pit4sport.com.ua/wp-content/uploads/2015/12/Pit4Sport_logo-e1449069029336.png', 0, 0),
(2, 'Chilli-Dance studio', 'Kyiv', '0730507755@ukr.net', '+308730507444', 'http://www.pit4sport.com.ua/wp-content/uploads/2015/12/Pit4Sport_logo-e1449069029336.png', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `main_info_group`
--

CREATE TABLE `main_info_group` (
  `id` int(11) NOT NULL,
  `group_members_id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_info_group`
--

INSERT INTO `main_info_group` (`id`, `group_members_id`, `id_category`) VALUES
(1, 1, 2),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `main_info_solo`
--

CREATE TABLE `main_info_solo` (
  `id` int(11) NOT NULL,
  `members_id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_info_solo`
--

INSERT INTO `main_info_solo` (`id`, `members_id`, `id_category`) VALUES
(1, 1, 2),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `members_info`
--

CREATE TABLE `members_info` (
  `members_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `school` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `checking` int(11) DEFAULT '0',
  `sale` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `members_info`
--

INSERT INTO `members_info` (`members_id`, `first_name`, `last_name`, `gender`, `school`, `city`, `email`, `phone`, `foto`, `checking`, `sale`) VALUES
(1, 'Михаил', 'Сарапий', 'М', 'Chilli-Dance studio', 'Kyiv', '0660330233@ukr.net', '+308730507755', 'http://www.pit4sport.com.ua/wp-content/uploads/2015/12/Pit4Sport_logo-e1449069029336.png', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `show_members`
--

CREATE TABLE `show_members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `show_members_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `show_members`
--

INSERT INTO `show_members` (`id`, `first_name`, `last_name`, `show_members_id`) VALUES
(1, 'Михаил', 'Сарапий', 1),
(2, 'Оксана', 'Сарапий', 1),
(3, 'Ира', 'Сарапий', 1),
(4, 'Славик', 'Сарапий', 1),
(5, 'Василий', 'Вишняков', 2),
(6, 'Лана', 'Вишнякова', 2),
(7, 'Оля', 'Вишнякова', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `show_members_info`
--

CREATE TABLE `show_members_info` (
  `show_members_id` int(11) NOT NULL,
  `show_name` varchar(30) NOT NULL,
  `cheef` varchar(30) DEFAULT NULL,
  `school` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `checking` int(11) DEFAULT '0',
  `sale` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `show_members_info`
--

INSERT INTO `show_members_info` (`show_members_id`, `show_name`, `cheef`, `school`, `city`, `email`, `phone`, `foto`, `checking`, `sale`) VALUES
(1, 'Крутые перцы', 'Лана Вишнякова', 'Chilli-Dance studio', 'Kyiv', '0660330233@ukr.net', '+308730507755', 'http://www.pit4sport.com.ua/wp-content/uploads/2015/12/Pit4Sport_logo-e1449069029336.png', 0, 0),
(2, 'Очень крутые перцы', 'Василий Вишняков', 'Chilli-Dance studio', 'Kyiv', '0730507755@ukr.net', '+308730507755', 'http://www.pit4sport.com.ua/wp-content/uploads/2015/12/Pit4Sport_logo-e1449069029336.png', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `style_info`
--

CREATE TABLE `style_info` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `style_info`
--

INSERT INTO `style_info` (`id_category`, `name_category`) VALUES
(1, 'Kizomba Beginners'),
(2, 'Bachata Beginners'),
(3, 'Salsa Casino Beginners'),
(4, 'Salsa casino Intermediate'),
(5, 'Salsa casino Advanced'),
(6, 'Salsa casino Masters'),
(7, 'Bachata Intermediate'),
(8, 'Bachata Advanced'),
(9, 'Bachata Sensual Masters'),
(10, 'Bachata Dominicana Masters'),
(11, 'Kizomba Intermediate'),
(12, 'Kizomba Advanced'),
(13, 'Urban Kiz Masters'),
(14, 'Tarraxina Masters'),
(15, 'Traditional Kizomba Masters');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_members_id` (`group_members_id`);

--
-- Индексы таблицы `group_members_info`
--
ALTER TABLE `group_members_info`
  ADD PRIMARY KEY (`group_members_id`);

--
-- Индексы таблицы `main_info_group`
--
ALTER TABLE `main_info_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_members_id` (`group_members_id`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `main_info_solo`
--
ALTER TABLE `main_info_solo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_ifo_members_id_fk` (`members_id`),
  ADD KEY `style_ifo_id_category_fk` (`id_category`);

--
-- Индексы таблицы `members_info`
--
ALTER TABLE `members_info`
  ADD PRIMARY KEY (`members_id`);

--
-- Индексы таблицы `show_members`
--
ALTER TABLE `show_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_members_id` (`show_members_id`);

--
-- Индексы таблицы `show_members_info`
--
ALTER TABLE `show_members_info`
  ADD PRIMARY KEY (`show_members_id`);

--
-- Индексы таблицы `style_info`
--
ALTER TABLE `style_info`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `group_members_info`
--
ALTER TABLE `group_members_info`
  MODIFY `group_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `main_info_group`
--
ALTER TABLE `main_info_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `main_info_solo`
--
ALTER TABLE `main_info_solo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `members_info`
--
ALTER TABLE `members_info`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `show_members`
--
ALTER TABLE `show_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `show_members_info`
--
ALTER TABLE `show_members_info`
  MODIFY `show_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `style_info`
--
ALTER TABLE `style_info`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `group_members`
--
ALTER TABLE `group_members`
  ADD CONSTRAINT `group_members_ibfk_1` FOREIGN KEY (`group_members_id`) REFERENCES `group_members_info` (`group_members_id`);

--
-- Ограничения внешнего ключа таблицы `main_info_group`
--
ALTER TABLE `main_info_group`
  ADD CONSTRAINT `main_info_group_ibfk_1` FOREIGN KEY (`group_members_id`) REFERENCES `group_members_info` (`group_members_id`),
  ADD CONSTRAINT `main_info_group_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `style_info` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `main_info_solo`
--
ALTER TABLE `main_info_solo`
  ADD CONSTRAINT `members_ifo_members_id_fk` FOREIGN KEY (`members_id`) REFERENCES `members_info` (`members_id`),
  ADD CONSTRAINT `style_ifo_id_category_fk` FOREIGN KEY (`id_category`) REFERENCES `style_info` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `show_members`
--
ALTER TABLE `show_members`
  ADD CONSTRAINT `show_members_ibfk_1` FOREIGN KEY (`show_members_id`) REFERENCES `show_members_info` (`show_members_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;