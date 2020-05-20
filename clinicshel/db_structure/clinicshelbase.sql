-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 20 2020 р., 16:14
-- Версія сервера: 10.4.11-MariaDB
-- Версія PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `clinicshelbase`
--

-- --------------------------------------------------------

--
-- Структура таблиці `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `name`, `password`) VALUES
(1, 'admin@gmail.com', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблиці `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `idlikar` int(11) NOT NULL,
  `idworkdays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `appointments`
--

INSERT INTO `appointments` (`id`, `email`, `first_name`, `last_name`, `idlikar`, `idworkdays`) VALUES
(1, 'nataliaschadilo@gmail.com', 'Наталія', 'Щадило', 3, 3),
(2, 'bodya@gmail.com', 'Богдан', 'Марк', 4, 16),
(3, 'nataliaschadilo@gmail.com', 'Наталія', 'Щадило', 4, 1),
(4, 'mariya@gmail.com', 'Марія', 'Щадило', 2, 21);

-- --------------------------------------------------------

--
-- Структура таблиці `likar`
--

CREATE TABLE `likar` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `number` int(20) NOT NULL,
  `cabinet_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `likar`
--

INSERT INTO `likar` (`id`, `firstname`, `lastname`, `speciality`, `number`, `cabinet_number`) VALUES
(1, 'Mary Yaroslavivna', 'Ponomarenko', 'terapevt', 987654321, 6),
(2, 'Lilya Ivanivna', 'Matkiv', 'urolog', 675423123, 3),
(3, 'Tanya Petrivna', 'Zired', 'dentist', 965645321, 2),
(4, 'Albina Igorivna', 'Monter', 'neurologist', 954567899, 1),
(5, 'Mila Oleksandrivna', 'Merly', '\r\noculist', 987898765, 5),
(6, 'Yulia Andriivna', 'Venger', 'ginecologist', 987655678, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `register_db`
--

CREATE TABLE `register_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `register_db`
--

INSERT INTO `register_db` (`id`, `email`, `first_name`, `last_name`, `password`, `confirm_password`) VALUES
(1, 'nataliaschadilo@gmail.com', 'Наталія', 'Щадило', '1111', '1111'),
(12, 'mari@gmail.com', 'Mari', 'Zum', 'zzzz', 'zzzz'),
(21, 'mariya@gmail.com', 'Марія', 'Щадило', 'яяяя', 'яяяя'),
(22, 'muroslava@gmail.com', 'Muroslava', 'Bodnar', 'zzzz', 'zzzz'),
(23, 'yuliana@gmail.com', 'Yuliana', 'Schadylo', 'aaaa', 'aaaa'),
(24, 'bodya@gmail.com', 'Богдан', 'Марк', 'вввв', 'вввв');

-- --------------------------------------------------------

--
-- Структура таблиці `workdays`
--

CREATE TABLE `workdays` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `workdays`
--

INSERT INTO `workdays` (`id`, `day`, `start_time`, `end_time`) VALUES
(1, 'Monday', '09:00:00', '09:30:00'),
(2, 'Monday', '09:30:00', '10:00:00'),
(3, 'Monday', '10:00:00', '10:30:00'),
(4, 'Monday', '10:30:00', '11:00:00'),
(5, 'Monday', '11:00:00', '11:30:00'),
(6, 'Monday', '11:30:00', '12:00:00'),
(7, 'Monday', '12:00:00', '12:30:00'),
(8, 'Monday', '12:30:00', '13:00:00'),
(9, 'Monday', '14:00:00', '14:30:00'),
(10, 'Monday', '14:30:00', '15:00:00'),
(11, 'Monday', '15:00:00', '15:30:00'),
(12, 'Monday', '15:30:00', '16:00:00'),
(13, 'Tuesday', '09:00:00', '09:30:00'),
(14, 'Tuesday', '09:30:00', '10:00:00'),
(15, 'Tuesday', '10:00:00', '10:30:00'),
(16, 'Tuesday', '10:30:00', '11:00:00'),
(17, 'Tuesday', '11:00:00', '11:30:00'),
(18, 'Tuesday', '11:30:00', '12:00:00'),
(19, 'Tuesday', '12:00:00', '12:30:00'),
(20, 'Tuesday', '12:30:00', '13:00:00'),
(21, 'Tuesday', '14:00:00', '14:30:00'),
(22, 'Tuesday', '14:30:00', '15:00:00'),
(23, 'Tuesday', '15:00:00', '15:30:00'),
(24, 'Tuesday', '15:30:00', '16:00:00'),
(25, 'Tuesday', '16:00:00', '16:30:00'),
(26, 'Tuesday', '16:30:00', '17:00:00'),
(27, 'Wednesday', '09:00:00', '09:30:00'),
(28, 'Wednesday', '09:30:00', '10:00:00'),
(29, 'Wednesday', '10:00:00', '10:30:00'),
(30, 'Wednesday', '10:30:00', '11:00:00'),
(31, 'Wednesday', '11:00:00', '11:30:00'),
(32, 'Wednesday', '11:30:00', '12:00:00'),
(33, 'Wednesday', '12:00:00', '12:30:00'),
(34, 'Wednesday', '12:30:00', '13:00:00'),
(35, 'Wednesday', '14:00:00', '14:30:00'),
(36, 'Wednesday', '14:30:00', '15:00:00'),
(37, 'Wednesday', '15:00:00', '15:30:00'),
(38, 'Wednesday', '15:30:00', '16:00:00'),
(39, 'Wednesday', '16:00:00', '16:30:00'),
(40, 'Wednesday', '16:30:00', '17:00:00'),
(41, 'Thursday', '09:00:00', '09:30:00'),
(42, 'Thursday', '09:30:00', '10:00:00'),
(43, 'Thursday', '10:00:00', '10:30:00'),
(44, 'Thursday', '10:30:00', '11:00:00'),
(45, 'Thursday', '11:00:00', '00:00:11'),
(46, 'Thursday', '11:30:00', '12:00:00'),
(47, 'Thursday', '12:00:00', '12:30:00'),
(48, 'Thursday', '12:30:00', '13:00:00'),
(49, 'Thursday', '14:00:00', '14:30:00'),
(50, 'Thursday', '14:30:00', '15:00:00'),
(51, 'Thursday', '15:00:00', '15:30:00'),
(52, 'Thursday', '15:30:00', '16:00:00'),
(53, 'Thursday', '16:00:00', '16:30:00'),
(54, 'Thursday', '16:30:00', '17:00:00'),
(55, 'Friday', '09:00:00', '09:30:00'),
(56, 'Friday', '09:30:00', '10:00:00'),
(57, 'Friday', '10:00:00', '10:30:00'),
(58, 'Friday', '10:30:00', '11:00:00'),
(59, 'Friday', '11:00:00', '11:30:00'),
(60, 'Friday', '11:30:00', '12:00:00'),
(61, 'Friday', '12:00:00', '12:30:00'),
(62, 'Friday', '12:30:00', '13:00:00'),
(63, 'Friday', '14:00:00', '14:30:00'),
(64, 'Friday', '14:30:00', '15:00:00'),
(65, 'Friday', '15:00:00', '15:30:00'),
(66, 'Friday', '15:30:00', '16:00:00'),
(67, 'Friday', '16:00:00', '16:30:00'),
(68, 'Friday', '16:30:00', '17:00:00');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `likar`
--
ALTER TABLE `likar`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `workdays`
--
ALTER TABLE `workdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `likar`
--
ALTER TABLE `likar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблиці `workdays`
--
ALTER TABLE `workdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
