-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Dec 09, 2021 at 04:29 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capelos`
--

-- --------------------------------------------------------

--
-- Table structure for table `trabajador_servicio`
--

CREATE TABLE `trabajador_servicio` (
  `trabajador_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trabajador_servicio`
--

INSERT INTO `trabajador_servicio` (`trabajador_id`, `servicio_id`) VALUES
(1, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trabajador_servicio`
--
ALTER TABLE `trabajador_servicio`
  ADD PRIMARY KEY (`trabajador_id`,`servicio_id`),
  ADD KEY `servicio_FK` (`servicio_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trabajador_servicio`
--
ALTER TABLE `trabajador_servicio`
  ADD CONSTRAINT `servicio_FK` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`),
  ADD CONSTRAINT `trabajador_FK` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
