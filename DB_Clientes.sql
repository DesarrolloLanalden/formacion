-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2016 a las 15:04:51
-- Versión del servidor: 5.6.28-0ubuntu0.15.04.1
-- Versión de PHP: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB_Clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ComboEstado`
--

CREATE TABLE IF NOT EXISTS `ComboEstado` (
`Cod` int(11) NOT NULL,
  `Estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ComboEstado`
--

INSERT INTO `ComboEstado` (`Cod`, `Estado`) VALUES
(1, 'ABIERTO'),
(2, 'EN RESOLUCION'),
(3, 'RESUELTO'),
(4, 'CERRADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ComboSeguro`
--

CREATE TABLE IF NOT EXISTS `ComboSeguro` (
`Cod` int(11) NOT NULL,
  `Seguro` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ComboSeguro`
--

INSERT INTO `ComboSeguro` (`Cod`, `Seguro`) VALUES
(1, 'ALLIANZ'),
(2, 'ADESLAS'),
(3, 'LINEA DIRECTA'),
(4, 'MAPFRE'),
(5, 'MUTUA MADRILEÑA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Datos_Clientes`
--

CREATE TABLE IF NOT EXISTS `Datos_Clientes` (
`idCliente` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Telefono1` varchar(9) DEFAULT NULL,
  `Telefono2` varchar(9) DEFAULT NULL,
  `ComboEstado` varchar(30) DEFAULT NULL,
  `ComboSeguro` varchar(30) DEFAULT NULL,
  `FechaSolicitud` datetime DEFAULT NULL,
  `Observaciones` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Datos_Clientes`
--

INSERT INTO `Datos_Clientes` (`idCliente`, `Nombre`, `Telefono1`, `Telefono2`, `ComboEstado`, `ComboSeguro`, `FechaSolicitud`, `Observaciones`) VALUES
(1, 'Bob Sinclair', '600212345', '940124568', 'ABIERTO', 'ALLIANZ', '2016-01-19 12:35:14', 'nada que destacar'),
(2, 'Harry Potter', '741000212', '900123478', 'EN RESOLUCION', 'ADESLAS', '2016-02-03 18:20:07', 'llamar nuevamente mañana'),
(3, 'Frodo Bolson', '970456741', NULL, 'CERRADO', 'LINEA DIRECTA', '2016-02-17 09:06:49', 'no quiere seguro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ComboEstado`
--
ALTER TABLE `ComboEstado`
 ADD PRIMARY KEY (`Cod`);

--
-- Indices de la tabla `ComboSeguro`
--
ALTER TABLE `ComboSeguro`
 ADD PRIMARY KEY (`Cod`);

--
-- Indices de la tabla `Datos_Clientes`
--
ALTER TABLE `Datos_Clientes`
 ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ComboEstado`
--
ALTER TABLE `ComboEstado`
MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ComboSeguro`
--
ALTER TABLE `ComboSeguro`
MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Datos_Clientes`
--
ALTER TABLE `Datos_Clientes`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
