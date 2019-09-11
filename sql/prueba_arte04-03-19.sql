-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2019 a las 13:55:43
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_arte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `apellido1` varchar(256) NOT NULL,
  `apellido2` varchar(256) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `password`, `nombre`, `correo`, `apellido1`, `apellido2`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(7, '$2y$10$lRBxVOhEtMU4sIcQ8E/x7uQ5c90FEtIatYPoqKy3LJGHqyiCSnBSW', 'profesor', 'profesor@mep.go.cr', '', '', NULL, 0, '', NULL, 0, 1),
(9, '$2y$10$CXqFJ9ZrcRYQQa2r9vGqQOBTCR0rL89mOQNEU8EFLkaNPCYigE4zO', ' Paty', 'patricia.hernandez.conejo@mep.go.cr', '', '', NULL, 1, 'faebfe41365f294436378ec44ff067a5', NULL, 0, 3),
(14, '$2y$10$FRcsor4X9UHLiUjQ3BqSZe0vnWF/lSH79tLM1kqHSfLcHr8CfY27i', 'Oscar Pérez Ramírez', 'oscar@correo.de', '', '', NULL, 1, '37398047ccdd7fa258f2f02df2600c2d', NULL, 0, 3),
(28, '$2y$10$tT3BYGoEDjkXuhwGhaCMEu3FjxEGppbxw.g2UXI4pJd179lSHx/3W', 'Oscar', 'oscar1.perez.ramirez@mep.go.cr', 'Pérez', 'Ramirez', NULL, 1, '08056b89657c33b2799ad98be5235c6a', NULL, 0, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
