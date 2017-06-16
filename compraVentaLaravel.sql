-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 11:40 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compraVentaLaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `idproducttype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `idproducttype`) VALUES
(1, 'BMW', 'Bayerische Motoren Werke', 2),
(2, 'Audi', 'Audi is a automobile manufacturer that designs luxury vehicles.', 1),
(3, 'Seat', 'SEAT, S.A. is a Spanish automobile manufacturer with its head office in Martorell, Spain', 1),
(4, 'Ktm', 'KTM-Sportmotorcycle AG is an Austrian motorcycle manufacturer ', 2),
(5, 'Ducati', 'Ducati Motor Holding S.p.A. is an Italian company that designs and manufactures motorcycles.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `idseller` int(11) NOT NULL,
  `idbuyer` int(11) NOT NULL,
  `datereservation` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `idproduct`, `idseller`, `idbuyer`, `datereservation`) VALUES
(1, 11, 2, 1, '16-04-2017'),
(2, 11, 2, 1, '16-04-2017'),
(3, 11, 2, 1, '16-04-2017'),
(4, 1, 1, 2, '2017-05-26 15:43:01'),
(5, 2, 1, 2, '2017-05-26 15:44:17'),
(6, 1, 1, 2, '2017-05-26 15:45:27'),
(7, 2, 1, 2, '2017-05-26 15:47:59'),
(8, 2, 1, 2, '2017-05-26 15:48:51'),
(9, 2, 1, 2, '2017-05-26 15:49:20'),
(10, 2, 1, 2, '2017-05-26 15:49:30'),
(11, 2, 1, 2, '2017-05-26 15:49:40'),
(12, 2, 1, 2, '2017-05-26 15:52:32'),
(13, 2, 1, 2, '2017-05-26 15:54:42'),
(14, 8, 1, 2, '2017-05-26 15:55:06'),
(15, 8, 1, 2, '2017-05-26 15:55:58'),
(16, 1, 1, 2, '2017-05-26 16:04:02'),
(17, 8, 1, 2, '2017-05-26 16:04:44'),
(18, 2, 1, 2, '2017-05-26 17:29:47'),
(19, 1, 1, 2, '2017-05-26 17:30:43'),
(21, 1, 1, 2, '2017-05-26 21:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `idproducttype` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `year` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `date` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `idproducttype`, `idbrand`, `price`, `description`, `year`, `km`, `cc`, `img`, `date`, `iduser`) VALUES
(1, 1, 2, 30000, 'A3', 2016, 0, 1200, 'https://img.actualidadmotor.com/wp-content/uploads/2016/04/audi-a3-2016-21-830x460.jpg', '28-03-2017', 1),
(2, 2, 1, 18000, 'BMW R 1200 RS', 2015, 300, 1000, 'http://www.arpem.com/imagenes/big/1/9/1/2/lateral-1.941912.jpg', '22-03-2017', 1),
(8, 1, 3, 15000, 'Leon FR', 2017, 3000, 1400, 'http://www.diariomotor.com/imagenes/picscache/1440x655c/seat-ibiza-2017-04_1440x655c.jpg', '16-04-2017', 1),
(9, 1, 1, 20000, 'Serie 1', 2017, 0, 1800, 'http://www.bmw.es/dam/brandBM/common/newvehicles/1-series/3-door/2015/flash/common_files/lines/img/msport_front_f21.jpg', '16-04-2017', 2),
(11, 2, 5, 12000, 'Superbike Panigale R', 2015, 0, 1000, 'http://www.ducati.es/cms-web/upl/MediaGalleries/24/1/MediaGallery_1024570/Color_SBK-Panigale-R_1067x600.jpg', '16-04-2017', 2),
(12, 2, 4, 8000, 'EXC Cross', 2017, 0, 600, 'http://www.enduropro.com/sites/default/files/galeriaactualidad/ktm-exc-2017-4t.jpg', '16-04-2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `producttypes`
--

CREATE TABLE `producttypes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `producttypes`
--

INSERT INTO `producttypes` (`id`, `name`) VALUES
(1, 'car'),
(2, 'motorbike');

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`id`, `name`) VALUES
(2, 'admin'),
(1, 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `idrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `password`, `phone`, `mail`, `idrole`) VALUES
(1, 'Max', '123', '654654654', 'max@gmail.com', 1),
(2, 'user', 'user', '654654654', 'user@gmail.com', 1),
(7, 'admin', 'admin', '654456654', 'admin@admin.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `idseller` (`idseller`),
  ADD KEY `datereservation` (`datereservation`),
  ADD KEY `idbuyer` (`idbuyer`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducttype` (`idproducttype`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `producttypes`
--
ALTER TABLE `producttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rolename` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `idrole` (`idrole`),
  ADD KEY `idrole_2` (`idrole`),
  ADD KEY `idrole_3` (`idrole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `producttypes`
--
ALTER TABLE `producttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
