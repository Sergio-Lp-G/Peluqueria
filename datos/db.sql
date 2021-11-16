CREATE DATABASE IF NOT EXISTS `capelos_belleza` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `capelos_belleza`;

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR NULL DEFAULT NULL ,
    `categoria` ENUM('corte','peinado','coloracion','cambio_temporal') NOT NULL ,
    `duracion` INT NULL DEFAULT NULL ,
    `precio` INT NULL DEFAULT NULL ,
    ) ENGINE = InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `servicios` (`id`, `nombre`,`categoria`, `duracion`, `precio`) VALUES
(1, 'Pixie','corte', 50, 30),
(2, 'Capas','corte', 50, 35),
(3, 'Bob','corte', 50, 40),
(4, 'Trenzas','peinado', 40, 20),
(5, 'Italiano','peinado', 45, 25),
(6, 'Coca','peinado', 50, 30),
(7, 'Entero','coloracion', 60, 40),
(8, 'Mechas','coloracion', 70, 30),
(9, 'Metalico','coloracion', 60, 40),
(10, 'Bigudi','cambio_temporal', 40, 20),
(11, 'Ondas_al_agua','cambio_temporal', 30, 15),
(12, 'Alisado','cambio_temporal', 40, 15),
;
