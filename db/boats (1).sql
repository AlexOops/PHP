-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 04:56 PM
-- Server version: 10.5.11-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boats`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `id_product`, `id_session`) VALUES
(28, 1, ''),
(35, 1, 'dmhp14n7uk5p9eflhlq7h1huj4b41qq9'),
(36, 1, 'dmhp14n7uk5p9eflhlq7h1huj4b41qq9'),
(37, 2, 'dmhp14n7uk5p9eflhlq7h1huj4b41qq9'),
(38, 3, 'dmhp14n7uk5p9eflhlq7h1huj4b41qq9'),
(48, 1, '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `product_name`, `price`, `description`, `img`, `like`) VALUES
(1, 'Лодка с веслами тип 1', '500', 'В отличии от лодок меньшей грузоподъемности, лодка Чирок 220 уже позволяет выходить на реки и большие озера, лучше удерживается на волне, хоть и остается достаточно легкой гребной лодкой. Как и в моделях меньшей грузоподъемности, Чирок 220 состоит из двух баллонов, что обеспечивает рыболову безопасность при пребывании на воде в ходе рыбалки.\r\n\r\nБольший размер лодки позволяет перевозить большее количество амуниции, устанавливать несколько снастей одновременно и удобнее располагаться рыболову в лодке. При массе менее десяти килограмм, лодка Чирок 220 может транспортироваться в специальном гермобауле как ручная ноша и не обязывает рыболова использовать транспортные средства.', 'boat_1.jpg', 48),
(2, 'Лодка с веслами тип 2', '600', 'Надувная гребная лодка «БРИЗ 220» производства ГК \"ТОНАР\" - легкая и компактная одноместная лодка. Корпус лодки выполнен из пятислойного армированного ПВХ и образован баллоном О-образной формы. Баллон разделен перегородками на 2 независимых отсека, что гарантирует безопасность пребывания на воде. На лодке используется современная и надежная фурнитура отечественных производителей. Рекомендованные районы плавания: закрытые акватории, небольшие озера, реки. Характеристики лодки «БРИЗ 220»: Длина наибольшая: 2,20 м. Ширина наибольшая: 1,23 м. Диаметр баллона наибольший: 0,33 м. Вес комплекта: 10,2 кг. Размер упаковки - 71х43х30 см. Грузоподъемность: 180 кг. Пассажировместимость: 1 человек. Количество герметичных отсеков: 2 шт. Рабочее давление в баллоне: 0,2 кгс/см2. Плотность ПВХ-ткани: 750 г/м.кв. Цвет: бело/серый. Лодка поставляется со стандартным набором комплектующих: • Ножной насос 3 л. • 2 весла с держателями весла в уключине. • 1 жесткое сиденье. • Сумка-рюкзак для хранения и перевозки. • Ремкомплект и руководство по эксплуатации (паспорт).', 'boat_2.jpg', 4),
(3, 'Лодка с веслами тип 3', '700', 'Небольшая  легкая лодка серии Стандарт. Классическая модель прекрасно подойдет для отдыха на воде. Крепление под мотор мощностью до  3 л.с., уже установлено на производстве. Передвижные сиденья легко подстроить для удобства управления лодкой.  Упакована в сумку с лямками и дополнительно в транспортировочный мешок из полипропилена.', 'boat_3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `feedback`, `id_product`) VALUES
(5, 'adsd', 'asdas', 1),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, '', '', 0),
(18, '', '', 0),
(19, '', '', 0),
(20, '', '', 0),
(21, '', '', 0),
(22, '', '', 0),
(23, '', '', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, '', '', 0),
(28, '', '', 0),
(29, '', '', 0),
(30, '', '', 0),
(31, '', '', 0),
(32, '', '', 0),
(33, '', '', 0),
(34, '', '', 0),
(35, '', '', 0),
(36, '', '', 0),
(37, '', '', 0),
(38, '', '', 0),
(39, '', '', 0),
(40, '', '', 0),
(41, '', '', 0),
(42, '', '', 0),
(43, '', '', 0),
(44, '', '', 0),
(45, '', '', 0),
(46, '', '', 0),
(47, '', '', 0),
(48, '', '', 0),
(49, '', '', 0),
(50, '', '', 0),
(51, '', '', 0),
(52, '', '', 0),
(53, '', '', 0),
(54, '', '', 0),
(55, '', '', 0),
(56, '', '', 0),
(57, '', '', 0),
(58, '', '', 0),
(59, '', '', 0),
(60, '', '', 0),
(61, '', '', 0),
(62, '', '', 0),
(63, '', '', 0),
(64, '', '', 0),
(65, '', '', 0),
(66, '', '', 0),
(67, '', '', 0),
(68, '', '', 0),
(69, '', '', 0),
(70, '', '', 0),
(71, '', '', 0),
(72, '', '', 0),
(73, '', '', 0),
(74, '', '', 0),
(75, '', '', 0),
(76, '', '', 0),
(77, '', '', 0),
(78, '', '', 0),
(79, '', '', 0),
(80, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT NULL,
  `description` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `views`, `description`) VALUES
(1, '01.jpg', 3, NULL),
(2, '02.jpg', 0, NULL),
(3, '03.jpg', 0, NULL),
(4, '04.jpg', 0, NULL),
(5, '05.jpg', 0, NULL),
(6, '06.jpg', 0, NULL),
(7, '07.jpg', NULL, NULL),
(8, '08.jpg', NULL, NULL),
(9, '09.jpg', NULL, NULL),
(10, '10.jpg', NULL, NULL),
(11, '11.jpg', NULL, NULL),
(12, '12.jpg', NULL, NULL),
(13, '13.jpg', NULL, NULL),
(14, '14.jpg', NULL, NULL),
(15, '15.jpg', NULL, NULL),
(16, '21324.jpg', NULL, NULL),
(17, '3OmuH.jpg', NULL, NULL),
(19, 'the-cats-of-summer-2015-ftr (1).jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`) VALUES
(1, 'Новость номер - 1', 'Привет, я новость номер - 1. '),
(2, 'Новость номер - 2', 'Привет, я новость номер - 2.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `id_session`) VALUES
(2, 'dsfsd', '787878', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(3, 'Alex', '78978789', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(4, 'sdfsdf', 'sdfs', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(5, 'sdfds', 'sdfsd', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(6, '', '', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(7, 'sdfsd', '32423423', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg'),
(8, 'alex', '32423423', '3lrvbf11qmpv22c6n9o5hgj4qm5v1cgg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(2, 'admin', '$2y$10$m0pyyYBYVt0qM7xDvm4v9u.VbNWyazKZlAmmYKo8T0oQJomnmqYti', '1284694668627e3534ebe443.01875520'),
(8423, 'user', '$2y$10$nr6MVBXtI4Tp4VfrOgx5ku09atIykUDzjmzftIZ2VhzTEmBdSDFj2', '7995629756283968730f636.43812405');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_name` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8424;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
