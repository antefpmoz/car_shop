-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 12:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(7) NOT NULL,
  `model` varchar(20) COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `value` varchar(10) COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `type`, `year`, `price`, `value`, `description`, `img`) VALUES
(11, 'Alfa Romeo', 'Limuzina', 2018, 56000, 'Polovno', 'Sportska verzija u bezprijekornom stanju sa 5.0 benzinskim motorom', '78154.jpg'),
(12, 'Alfa Romeo', 'Limuzina', 2020, 76000, 'Novo', 'Sportska verzija sa 5.0 benzinskim motorom', '97457.jpg'),
(13, 'Audi', 'Limuzina', 2002, 3500, 'Polovno', 'Limuzina u jako dobrom stanju, sa 2.2 TDI motorom', '43531.jpeg'),
(14, 'Audi', 'Terenac', 2020, 80000, 'Novo', 'Najnoviji model, sa 3.0 dizelskim motorom', '69681.jpg'),
(15, 'BWM', 'Limuzina', 1985, 1000, 'Polovno', 'Jako dobro očuvan model, sa 1.8 benzinskim motorom', '87360.jpeg'),
(16, 'BMW', 'Malo auto', 1988, 3000, 'Polovno', 'Nadograđeni sportski model sa 3.0 benzinskim motorom', '38992.jpeg'),
(17, 'BWM', 'Limuzina', 2002, 4000, 'Polovno', 'Dobro očuvan model sa standardnim 2.0 dizelskim motorom', '10573.jpg'),
(18, 'BMW', 'Terenac', 2010, 13000, 'Polovno', 'Dobro očuvan dizelaš na sva 4 pogona, sa standardnim 3.0 dizel motorom.', '89899.jpg'),
(19, 'BMW', 'Malo auto', 2015, 17000, 'Polovno', 'Dobro očuvan dizelaš, sa standardnim 2.2 motorom', '60530.jpg'),
(20, 'Mercedes', 'Limuzina', 2001, 25000, 'Polovno', 'Stariji sportski model u savršenom stanju, sa najboljim 2.5 benzinskim motorom', '72363.jpg'),
(21, 'Mercedes', 'Limuzina', 2002, 7000, 'Polovno', 'Dobro očuvano vozilo sa dizelskim 2.2 motorom', '6654.jpg'),
(22, 'Opel', 'Limuzina', 1980, 20000, 'Polovno', 'Oldtimer u savršenom stanju, sa 1.6 dizelskim motorom', '51905.jpg'),
(23, 'Opel', 'Limuzina', 1984, 30000, 'Polovno', 'Oldtimer u sportskoj verziji sa provjerenim 1.8 benzinskim motorom', '48445.jpg'),
(24, 'Opel', 'Limuzina', 2019, 22000, 'Polovno', 'Vozilo u bezprijekornom stanju sa modernim 2.5 dizelskim motorom', '74639.jpeg'),
(25, 'Volkswagen', 'Limuzina', 2003, 4000, 'Polovno', 'Dobro očuvan Golf sa provjerenim 1.9 dizelskim motorom', '80167.jpg'),
(26, 'Volkswagen', 'Limuzina', 2009, 9000, 'Polovno', 'Dobro očuvan Golf sa provjerenim 1.9 dizelskim motorom', '8769.jpg'),
(27, 'Volkswagen', 'Limuzina', 2010, 10000, 'Polovno', 'Dobro očuvan Golf sa provjerenim 1.9 dizelskim motorom', '33692.jpeg'),
(28, 'Volkswagen', 'Terenac', 2017, 25000, 'Polovno', 'SUV u bezprijekornom stanju sa provjerenim 2.2 dizel motorom', '81508.jpg'),
(29, 'Volkswagen', 'Limuzina', 2018, 28000, 'Polovno', 'Vozilo sa modernim 2.2 dizelskim motorom u novom stanju', '66753.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `id` int(6) NOT NULL,
  `model` varchar(10) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`id`, `model`) VALUES
(1, 'Malo auto'),
(2, 'Limuzina'),
(3, 'Terenac'),
(4, 'Kombi');

-- --------------------------------------------------------

--
-- Table structure for table `car_name`
--

CREATE TABLE `car_name` (
  `id` int(30) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `car_name`
--

INSERT INTO `car_name` (`id`, `name`) VALUES
(1, 'Alfa Romeo'),
(2, 'Aston Martin'),
(3, 'Audi'),
(4, 'BWM'),
(5, 'Chevrolet'),
(6, 'Citroen'),
(7, 'Dacia'),
(8, 'Fiat'),
(9, 'Ford'),
(10, 'Hyundai'),
(11, 'Kia'),
(12, 'Lamborgini'),
(13, 'Mazda'),
(14, 'Mercedes'),
(15, 'Nissan'),
(16, 'Opel'),
(17, 'Peugeot'),
(18, 'Porsche'),
(19, 'Renault'),
(20, 'Seat'),
(21, 'Toyota'),
(22, 'Volkswagen'),
(23, 'Volvo'),
(24, 'Škoda');

-- --------------------------------------------------------

--
-- Table structure for table `car_value`
--

CREATE TABLE `car_value` (
  `id` int(2) NOT NULL,
  `value` varchar(10) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `car_value`
--

INSERT INTO `car_value` (`id`, `value`) VALUES
(1, 'Novo'),
(2, 'Polovno');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_croatian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL,
  `user_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `user_type`) VALUES
(1, 'admin', 'd0970714757783e6cf17b26fb8e2298f', 'ante.maric@fpmoz.sum.ba', '0038761724979', 0),
(2, 'superuser', '93279e3308bdbbeed946fc965017f67a', 'superuser@mail.com', '0038763000000', 1),
(3, 'ante', 'd3c7cbe5cb41022dac3966760ee8255b', 'ante92mo@gmail.com', '0038763100001', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_name`
--
ALTER TABLE `car_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_value`
--
ALTER TABLE `car_value`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_name`
--
ALTER TABLE `car_name`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `car_value`
--
ALTER TABLE `car_value`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
