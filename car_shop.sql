-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2021 at 01:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
(3, 'Alfa Romeo', 'Malo auto', 2019, 25000, 'Novo', 'Ovo je test', '84641.png'),
(4, 'Volkswagen', 'Limuzina', 2010, 11700, 'Polovno', 'Ovo je moje vozilo', '51975.png');

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
(1, 'admin', 'd0970714757783e6cf17b26fb8e2298f', 'ante.maric@fpmoz.sum.ba', '0038761724979', 0);

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
