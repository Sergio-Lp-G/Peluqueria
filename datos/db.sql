SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `capelos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

CREATE TABLE `categoria` (
 `id` int(3) NOT NULL,
 `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categoria` (`id`, `nombre`) VALUES
 (1, 'corte'),
 (2, 'peinado'),
 (3, 'coloracion'),
 (4, 'cambio_temporal');

CREATE TABLE `servicio` (
    `id` int(11) NOT NULL,
    `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
    `categoria_id` int(11) DEFAULT NULL,
    `duracion` int(11) DEFAULT NULL,
    `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `servicio` (`id`, `nombre`, `categoria_id`, `duracion`, `precio`) VALUES
    (2, 'Capas', 1, 50, 35),
    (3, 'Bob', 1, 50, 40),
    (4, 'Trenzas', 2, 40, 20),
    (5, 'Italiano', 2, 45, 25),
    (6, 'Coca', 2, 50, 30),
    (7, 'Entero', 3, 60, 40),
    (8, 'Mechas', 3, 70, 30),
    (9, 'Metalico', 3, 60, 40),
    (10, 'Bigudi', 4, 40, 20),
    (11, 'Ondas_al_agua', 4, 30, 15),
    (12, 'Alisado', 4, 40, 15),
    (18, 'Rapao', 3, 580, 15),
    (19, 'AAAAAAAAAAAA', 1, 30, 300),
    (20, 'Pixie', 1, 50, 31),
    (24, 'nuevo', 4, 30, 450);

CREATE TABLE `trabajadores` (
    `id` int(11) NOT NULL,
    `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
    `surname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
    `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
    `birthdate` date DEFAULT NULL,
    `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
    `active` tinyint(1) DEFAULT '0',
    `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `trabajadores` (`id`, `name`, `surname`, `email`, `birthdate`, `password`, `active`, `admin`) VALUES
  (2, 'Ana', 'Garcia', 'anagarcia@penya.com', '2001-04-01', '$2y$10$XN8mjYfHej4HeMhA53hOb.JHV2CMZSgT4XbXl0laRTFfilsjwVCf6', 0, 1),
  (3, 'Juan', 'Sanchez', 'juan@penya.com', '2001-02-17', '$2y$10$djKNv4sLPW4P50I0b/rxOOe..Mxq4BEvwKHh6qt4h/WUf2QzSKwUu', 0, 0),
  (4, 'Antonio', 'Lopez', 'antonio@penya.com', '2001-08-18', '$2y$10$t6nuANAUB8c5bVoScgr1l.zy/BUPdKTPOQbmyYCf7AAd02NT.gWa.', 0, 0),
  (5, 'Marisa', 'Gonzaliz', 'marisa@penya.com', '2001-01-14', '$2y$10$1/YSt51pRP61YSu9.4b4ouGOm9O4B5keAXcIVXi0H5rIEpTLxShaa', 0, 0),
  (6, 'Toni', 'Lopez', 'toni@penya.com', '2001-08-18', '$2y$10$qETb0ICh8LuIDQyum6B7xukLteQBlm68jxqLg7KYJcRjiwa.kJuYm', 0, 0),
  (7, 'Nacho', 'Villa', 'nacho@penya.com', '2001-08-18', '$2y$10$34T.1UcOUlf7uoHgmyIClOU9gtALrUoEfbJF..rh0ajJWG.SbKCha', 0, 0),
  (9, 'Pepe', 'Viyuela', 'pepe@viyuela.com', '1975-11-25', '$2y$10$5sdxmLSfikk1RZzwWHU.8eHGoz4FCoVrwBuOshdqC5SypdGecNceu', 0, 0),
  (11, 'Nueva', 'Trabajadora', 'nueva@penya.com', '1999-06-07', NULL, 0, 0);

CREATE TABLE `trabajador_servicio` (
   `trabajador_id` int(11) NOT NULL,
   `servicio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `trabajador_servicio` (`trabajador_id`, `servicio_id`) VALUES
    (2, 2),
    (3, 2),
    (4, 2),
    (11, 8),
    (2, 18),
    (11, 18),
    (2, 19),
    (11, 19);

ALTER TABLE `categoria`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `servicio`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `trabajadores`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `trabajador_servicio`
    ADD PRIMARY KEY (`trabajador_id`,`servicio_id`),
  ADD KEY `servicio_FK` (`servicio_id`);

ALTER TABLE `categoria`
    MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `servicio`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `trabajadores`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

