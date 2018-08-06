-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2018 г., 00:22
-- Версия сервера: 5.6.38-log
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_for_mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `short_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `short_content`) VALUES
(1, 'PHP', 'PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) -                    это распространенный язык программирования общего назначения с открытым исходным кодом.                    PHP сконструирован специально для ведения Web-разработок и его код может внедряться                    непосредственно в HTML.Вместо рутинного вывода HTML-кода командами языка (как это происходит, например, в Perl или C), скрипт PHP содержит HTML с вкраплениями кода (в нашем случае, это вывод текста      ', 'PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) -                    это распространенный язык программирования общего назначения с открытым исходным кодом.                    PHP сконструирован специально для ведения Web-разработок и его код может внедряться                    непосредственно в HTML.     '),
(2, 'MySQL', 'База данных MySQL — это самая популярная в мире база данных с открытым кодом. Благодаря своей проверенной производительности, надежности и простоте использования база данных MySQL наиболее часто используется для веб-приложений на таких ресурсах, как Facebook, Twitter, YouTube и все пять из пяти лучших веб-сайтов. Кроме того, ее особенно часто выбирают в качестве встроенной базы данных, распространяемой тысячами поставщиков программного обеспечения и производителей оборудования.', 'База данных MySQL — это самая популярная в мире база данных с открытым кодом. Благодаря своей проверенной производительности, надежности и простоте использования база данных MySQL наиболее часто используется для веб-приложений на таких ресурсах, как Facebook....'),
(3, 'HTML', 'Cтандартизированный язык разметки документов во Всемирной паутине. Большинство\r\n                    веб-страниц содержат описание разметки на языке HTML (или XHTML). Язык HTML\r\n                    интерпретируется браузерами; полученный в результате интерпретации форматированный\r\n                    текст отображается на экране монитора компьютера или мобильного устройства.\r\n\r\nЯзык HTML до 5-й версии определялся как приложение SGML (стандартного обобщённого языка разметки по стандарту ISO 8879). Спецификации HTML5 формулируются в терминах DOM (объектной модели документа).\r\n\r\nЯзык XHTML является более строгим вариантом HTML, он следует синтаксису XML и является приложением языка XML в области разметки гипертекста.\r\n\r\nВо всемирной паутине HTML-страницы, как правило, передаются браузерам от сервера по протоколам HTTP или HTTPS, в виде простого текста или с использованием шифрования.', 'Cтандартизированный язык разметки документов во Всемирной паутине. Большинство\r\n                    веб-страниц содержат описание разметки на языке HTML (или XHTML). Язык HTML\r\n                    интерпретируется браузерами; полученный в результате интерпретации форматированный\r\n                    текст....');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'aasssee', 'abe@aaa.com', '123456', 'admin'),
(2, 'ewqr', 'rwqer@rew.com', 'rqewrqwerqewr', ''),
(3, 'ewqr', 'rwqer@rew.comre', 'rqewrqwerqewr', ''),
(4, 'reqr', 'rwqer@rew.comaa', 'rweqrqwer2134', ''),
(5, 'reqr', 'rwqer@rew.comaaee', 'rweqrqwer2134', ''),
(6, 'reqr', 'rtewhg@gret.com', 'rweqrqwer2134', ''),
(7, 'Ler4ika123', 'ler4ik@mail.ru', '123456', ''),
(8, 'qwerewr', 'reqwr@fwre.com', '1243563476', ''),
(9, 'ADasd', 'aaa@gfer.com', '4bc2867abb3fb7bedb95c473bdfa6bac', ''),
(10, 'Rofl', 'a1@com.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(11, 'Dot', 'aaa2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(12, 'dot', 'a2@a2.com', '123456', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
