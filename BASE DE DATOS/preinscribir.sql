-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2019 a las 05:08:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preinscribir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `tipo_docu` int(5) NOT NULL,
  `clase_docu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`tipo_docu`, `clase_docu`) VALUES
(1, 'DNI'),
(2, 'CI'),
(3, 'PAS'),
(4, 'CE'),
(5, 'LE'),
(6, 'LC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `tipo_docu` int(5) NOT NULL,
  `nro_docu` int(15) NOT NULL,
  `email` text NOT NULL,
  `esalumno` int(11) NOT NULL,
  `ocupacion` varchar(20) NOT NULL,
  `seentero` varchar(30) NOT NULL,
  `desea` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`apellido`, `nombre`, `tipo_docu`, `nro_docu`, `email`, `esalumno`, `ocupacion`, `seentero`, `desea`, `fecha`) VALUES
('Nieva', 'Leonel Matias', 1, 40103576, 'leonelmatiasnieva2013@gmail.com', 1, 'Cajero', 'Diario', 1, '2019-11-10'),
('Martini', 'Jorge', 1, 23241232, 'prueba@gmail.com', 1, 'Repositor', 'Diario', 1, '2019-11-10'),
('Cornia', 'Juan', 1, 2314234, 'prueba2@gmail.com', 1, 'Instructor de manejo', 'Afiche', 2, '2019-11-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD KEY `tipo_docu` (`tipo_docu`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD KEY `tipo_docu` (`tipo_docu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`tipo_docu`) REFERENCES `documento` (`tipo_docu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
