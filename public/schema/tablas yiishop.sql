-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2012 a las 23:05:46
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
-- Estructura de tabla para la tabla `shop_category`
--

CREATE TABLE IF NOT EXISTS `shop_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_customer`
--

CREATE TABLE IF NOT EXISTS `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `zipcode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_image`
--

CREATE TABLE IF NOT EXISTS `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `filename` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_YiiShopImage_YiiShopProducts1` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_order`
--

CREATE TABLE IF NOT EXISTS `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_yiishop_order_yiishop_customer1` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_productorder`
--

CREATE TABLE IF NOT EXISTS `shop_productorder` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `product_shipped` tinyint(1) DEFAULT NULL,
  `product_arrived` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`product_id`,`order_id`),
  KEY `fk_yiishop_order_has_yiishop_products_yiishop_order1` (`order_id`),
  KEY `fk_yiishop_order_has_yiishop_products_yiishop_products1` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_products`
--

CREATE TABLE IF NOT EXISTS `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_yiishop_products_yiishop_category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shop_shoppingcart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `cartowner` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `fk_yiishop_shopping_cart_yiishop_products1` (`product_id`),
  KEY `fk_yiishop_shopping_cart_yiishop_customer1` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `shop_image`
--
ALTER TABLE `shop_image`
  ADD CONSTRAINT `fk_YiiShopImage_YiiShopProducts1` FOREIGN KEY (`product_id`) REFERENCES `yiishopproducts` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shop_order`
--
ALTER TABLE `shop_order`
  ADD CONSTRAINT `shop_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shop_productorder`
--
ALTER TABLE `shop_productorder`
  ADD CONSTRAINT `shop_productorder_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `shop_productorder_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `shop_order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `shop_products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shop_shoppingcart`
--
ALTER TABLE `shop_shoppingcart`
  ADD CONSTRAINT `shop_shoppingcart_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `shop_shoppingcart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
