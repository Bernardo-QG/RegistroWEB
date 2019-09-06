-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2019 a las 03:40:01
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectocn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido_paterno` varchar(50) NOT NULL,
  `Apellido_materno` varchar(50) DEFAULT NULL,
  `Curp` varchar(18) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Puesto` enum('Generente','Secretaria','Producción','Finanzas','Logistica') DEFAULT NULL,
  `Estatus` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100004 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id`, `Nombre`, `Apellido_paterno`, `Apellido_materno`, `Curp`, `Correo`, `Puesto`, `Estatus`) VALUES
(100000, 'Prueba', 'Numero', '1', 'qwertyuiopasdf123', 'shs@ugto.mx', 'Finanzas', NULL),
(100001, 'Juan', 'Perez', 'Guzman', '1234567890qwertyqw', 'asd@ugto.mx', 'Finanzas', NULL),
(100002, 'Juan', 'Perez', 'Guzman', '1234567890qwertyqw', 'asd@ugto.mx', 'Finanzas', NULL),
(100003, 'Juan', 'Perez', 'Guzman', '1234567890qwertyqw', 'asd@ugto.mx', 'Finanzas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `Id_empleado` int(11) NOT NULL,
  `Hora_entrada` datetime NOT NULL,
  `Hora_salida` datetime DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `Estatus` bit(1) DEFAULT NULL,
  KEY `Id_empleado` (`Id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_empleado` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Estatus` enum('Dios','Semidios','Mortal') DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_empleado` (`Id_empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=300000 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
