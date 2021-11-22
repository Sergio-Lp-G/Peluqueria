-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 22-11-2021 a las 17:46:36
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capelos`
--
CREATE DATABASE IF NOT EXISTS `capelos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `capelos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE IF NOT EXISTS `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `name`, `surname`, `email`, `birthdate`, `password`, `active`, `admin`) VALUES
(1, 'Pepe', 'Navarro', 'admin@penya.com', '2001-04-01', NULL, 0, 1),
(2, 'Ana', 'GarcÃ­a', 'anagarcia@penya.com', '2001-04-01', NULL, 0, 1),
(3, 'Juan', 'SÃ¡nchez', 'juan@penya.com', '2001-02-17', NULL, 0, 0),
(4, 'Antonio', 'Lopez', 'antonio@penya.com', '2001-08-18', NULL, 0, 0),
(5, 'Marisa', 'Gonzáliz', 'marisa@penya.com', '2001-01-14', NULL, 0, 0),
(6, 'Toni', 'López', 'toni@penya.com', '2001-08-18', NULL, 0, 0),
(7, 'Nacho', 'Villa', 'nacho@penya.com', '2001-08-18', NULL, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
