-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2012 a las 22:15:11
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `speedelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comercio_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechamodificacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comercio_id` (`comercio_id`),
  KEY `categoria_id` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `comercio_id`, `categoria_id`, `nombre`, `descripcion`, `tiempo`, `precio`, `imagen`, `valoracion`, `estado`, `fechacreacion`, `fechamodificacion`) VALUES
(1, 1, 1, 'asdf', 'asdf', 1, 1, NULL, NULL, 1, '2012-10-30 00:28:31', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
